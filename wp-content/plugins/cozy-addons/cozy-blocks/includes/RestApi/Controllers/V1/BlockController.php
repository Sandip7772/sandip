<?php
/**
 * Blocks rest api controller
 *
 * @package CozyBlock\RestApi\Controllers\V1
 */

namespace CozyBlock\RestApi\Controllers\V1;

use CozyBlock\Abstracts\RestControllerBase;
use WP_REST_Request;

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class BlockController extends RestControllerBase {
	public function register_routes() {
		try {
			register_rest_route(
				'cozy-block/v1',
				'/popular-posts',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_popular_posts' ),
					'permission_callback' => '__return_true',
				)
			);

			register_rest_route(
				'cozy-block/v1',
				'/trending-posts',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_trending_posts' ),
					'permission_callback' => '__return_true',
				)
			);

			register_rest_route(
				'cozy-block/v1',
				'/related-posts',
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_related_posts' ),
					'permission_callback' => '__return_true',
				)
			);
		} catch ( \Exception $e ) {
			error_log( 'Error registering route: ' . $e->getMessage() );
		}
	}

	public function get_popular_posts( WP_REST_Request $request ) {
		$args = array(
			'post_type'      => 'post',
			'meta_key'       => 'cozy_post_views_count', // Replace with your popularity field.
			'orderby'        => 'cozy_post_views_count',
			'order'          => 'DESC',
			'posts_per_page' => $request->get_param( 'per_page' ), // Number of popular posts to retrieve.
			'meta_query'     => array(
				'relation' => 'AND',
				array(
					'key'     => 'cozy_post_views_count',
					'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
				),
				array(
					'key'     => 'cozy_post_views_count',
					'value'   => '0',
					'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
				),
			),
		);

		$popular_posts = new \WP_Query( $args );

		return $popular_posts->posts;
	}

	public function get_trending_posts( WP_REST_Request $request ) {
		$args = array(
			'post_type'      => 'post',
			'meta_key'       => 'cozy_trending_post_views', // Replace with your popularity field.
			'orderby'        => 'cozy_trending_post_views',
			'order'          => 'DESC',
			'posts_per_page' => -1, // Number of popular posts to retrieve.
			'meta_query'     => array(
				'relation' => 'AND',
				array(
					'key'     => 'cozy_trending_post_views',
					'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
				),
				array(
					'key'     => 'cozy_trending_post_views',
					'value'   => '0',
					'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
				),
			),
		);

		$trending_posts = new \WP_Query( $args );

		return $trending_posts->posts;
	}

	public function get_related_posts( WP_REST_Request $request ) {
		global $post;
		// Get the current post ID.
		$current_post_id = get_the_ID();

		// Get the current post's categories and tags.
		$post_categories = wp_get_post_categories( $post->ID );
		$post_tags       = wp_get_post_tags( $post->ID );

		// Combine tags and categories terms into a single array.
		$related_terms = array_merge( $post_tags, $post_categories );

		// Query for related posts.
		$related_query = new \WP_Query(
			array(
				'post__not_in'   => array( $current_post_id ),
				'tax_query'      => array(
					'relation' => 'OR',
					array(
						'taxonomy' => 'post_tag',
						'field'    => 'id',
						'terms'    => $related_terms,
					),
					array(
						'taxonomy' => 'category',
						'field'    => 'id',
						'terms'    => $related_terms, // Categories
					),
				),
				'posts_per_page' => -1, // Adjust the number of related posts to display
			)
		);

		return $related_query->posts;
	}
}
