<?php
require_once ABSPATH . 'wp-admin/includes/plugin.php';
$is_cozy_addons_active = is_plugin_active( 'cozy-addons/cozy-addons.php' );
if ( $is_cozy_addons_active ) {
	$product_cozy_addons_url        = admin_url() . 'admin.php?page=_ct_cozy_addons';
	$prouct_cozy_addons_link_target = '_self';
} else {
	$product_cozy_addons_url        = 'https://cozythemes.com/cozy-addons/';
	$prouct_cozy_addons_link_target = '_blank';
}

?>

<div class="ct-companion-dashboard">
	<div class="dashboard-container">
		<div class="ct-dashboard-nav">
			<div class="ct-branding">
				<div class="ca-plugin-icon"><img src="<?php echo CT_COMPANION_SDK_URL . 'images/cozy-addons-icon.png'; ?>" /></div>
				<div class="ct-tabs" id="ct-dashboard-tabs">
					<div class="ct-tab" data-index="0"><?php echo __( 'Dashboard', 'cozy-addons' ); ?></div>

					<?php if ( cozy_addons_is_block_theme() ) { ?>
						<div class="ct-tab" data-index="1"><?php echo __( 'Blocks', 'cozy-addons' ); ?></div>
						<div class="ct-tab" data-index="2"><?php echo __( 'Elementor', 'cozy-addons' ); ?></div>

					<?php } else { ?>
						<div class="ct-tab" data-index="1"><?php echo __( 'Elementor', 'cozy-addons' ); ?></div>
					<?php } ?>
					<!-- <div class="ct-tab" data-index="3">Settings</div> -->
				</div>
			</div>
			<div class="ct-plugin-link">
				<a href="https://cozythemes.com/cozy-addons/" target="_blank">
					<img src="<?php echo CT_COMPANION_SDK_URL . 'images/paper_icon.png'; ?>" />
					<?php echo __( 'Visit Website', 'cozy-addons' ); ?></a>
			</div>
		</div>
		<div class="tab-content" id="content1">
			<div class="dashboard-box">
				<h3 class="ct-user">
					<?php
					$ct_current_user = wp_get_current_user();
					echo 'Hello ' . esc_html( $ct_current_user->display_name ) . '!';
					?>
				</h3>
				<div class="dashboard-main">
					<div class="dasboard-content">
						<h1><?php echo __( 'Meet the Cozy Blocks - Advanced blocks for FSE and Gutenberg editor', 'cozy-addons' ); ?></h1>
						<h3><?php echo __( '30+ Advanced Blocks for FSE (Full Site Editing) and Gutenberg Editor, 40+ Advanced Widgets for Elementor to Build Website with Powerful Features.', 'cozy-addons' ); ?></h3>
						<div class="cozy-dashboard-media">
							<img src="<?php echo COZY_ADDONS_PLUGIN_URL . '/admin/images/cozy-blocks-screen.png'; ?>" />
						</div>
						<p><?php echo __( 'Elevate your WordPress website with Cozy Blocks, a dynamic plugin designed to supercharge your design capabilities. Seamlessly integrate more than 30 advanced blocks for Full Site Editing (FSE) and the Gutenberg Editor, allowing you to effortlessly craft visually stunning and feature-rich pages. With an extensive repertoire of over 40 advanced Elementor widgets, Cozy Blocks empowers you to create a truly customized and engaging online experience. Unleash the full potential of your WordPress site with Cozy Blocks and take your design game to the next level.', 'cozy-addons' ); ?></p>
					</div>
					<div class="dashboard-sidebar">
						<div class="sidebar-box need-support">
							<h3><?php echo __( 'Need Support', 'cozy-addons' ); ?></h3>
							<p><?php echo __( 'Still, having problems after reading all the documentation? No Problem!! Please create a support ticket. Our dedicated support team will help you to solve your problem.', 'cozy-addons' ); ?></p>
							<a class="sidebar-btn" href="https://cozythemes.com/support/" target="_blank"><?php echo __( 'Create a Ticket', 'cozy-addons' ); ?></a>
							<span class="support-note">
								<p><?php echo __( 'Note: The support ticket has consistently received responses within a 24-hour timeframe.', 'cozy-addons' ); ?></p>
							</span>
						</div>
						<div class="sidebar-box leave-review">
							<h3><?php echo __( 'Leave a Review', 'cozy-addons' ); ?></h3>
							<p><?php echo __( 'We kindly kindly request your review and feedback, to help us continue to enhance our product. Your feedback and review would be greatly appreciated!', 'cozy-addons' ); ?></p>
							<a class="sidebar-btn" href="https://wordpress.org/support/plugin/cozy-addons/reviews/" target="_blank"><?php echo __( 'Rate and Review', 'cozy-addons' ); ?></a>
							<a class="sidebar-btn" href="https://cozythemes.com/feedback-form/" target="_blank"><?php echo __( 'Leave Feedback!', 'cozy-addons' ); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="ct-dashboard-row">
				<div class="ct-upsell-text">
					<?php
					if ( ! cozy_addons_premium_access() ) {
						?>

						<h1> <?php echo __( 'Get the Premium version for more blocks and advanced features to build stunning website.', 'cozy-addons' ); ?></h1>
						<a href="https://cozythemes.com/pricing-and-plans/" target="_blank" class="ct-dashboard-button"><?php echo __( 'Upgrade to Pro', 'cozy-addons' ); ?></a>

						<?php
					} else {
						?>
						<h1> <?php echo __( 'Explore More products and Features.', 'cozy-addons' ); ?></h1>
						<a href="https://cozythemes.com/" target="_blank" class="ct-dashboard-button"><?php echo __( 'Visit Site', 'cozy-addons' ); ?></a>

					<?php } ?>
				</div>
			</div>
		</div>

		<?php
		if ( cozy_addons_is_block_theme() ) :
			?>

			<div class="tab-content" id="content2">
				<h2><?php echo __( 'Control Settings for Blocks', 'cozy-addons' ); ?></h2>
				<p><?php echo __( 'Enable or Disable Block as Your Needs and Requirement.', 'cozy-addons' ); ?></p>

				<ul class="blocks-holder">
					<li>
						<div class="cozy-display-flex">
							<svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.5C0 1.11929 1.11929 0 2.5 0H24.5C25.8807 0 27 1.11929 27 2.5V8.5C27 9.88071 25.8807 11 24.5 11H2.5C1.11929 11 0 9.88071 0 8.5V2.5ZM2.5 1C1.67157 1 1 1.67157 1 2.5V8.5C1 9.32843 1.67157 10 2.5 10H24.5C25.3284 10 26 9.32843 26 8.5V2.5C26 1.67157 25.3284 1 24.5 1H2.5Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 5.5C16.5 6.05228 16.0523 6.5 15.5 6.5H4.5C3.94772 6.5 3.5 6.05228 3.5 5.5C3.5 4.94772 3.94772 4.5 4.5 4.5H15.5C16.0523 4.5 16.5 4.94772 16.5 5.5Z" fill="#36CFC6" />
								<path d="M21.5772 6.79526L19.6024 4.82043C19.4659 4.68393 19.4659 4.46321 19.6024 4.32817L19.9305 4C20.067 3.8635 20.2878 3.8635 20.4228 4L21.8226 5.39981L23.2224 4C23.3589 3.8635 23.5796 3.8635 23.7147 4L24.0428 4.32817C24.1793 4.46467 24.1793 4.68538 24.0428 4.82043L22.068 6.79526C21.9344 6.93175 21.7137 6.93175 21.5772 6.79526Z" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 15.5C0 14.1193 1.11929 13 2.5 13H24.5C25.8807 13 27 14.1193 27 15.5V21.5C27 22.8807 25.8807 24 24.5 24H2.5C1.11929 24 0 22.8807 0 21.5V15.5ZM2.5 14C1.67157 14 1 14.6716 1 15.5V21.5C1 22.3284 1.67157 23 2.5 23H24.5C25.3284 23 26 22.3284 26 21.5V15.5C26 14.6716 25.3284 14 24.5 14H2.5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 18.5C16.5 19.0523 16.0523 19.5 15.5 19.5H4.5C3.94772 19.5 3.5 19.0523 3.5 18.5C3.5 17.9477 3.94772 17.5 4.5 17.5H15.5C16.0523 17.5 16.5 17.9477 16.5 18.5Z" fill="#B2BCF9" />
								<path d="M21.5772 19.3976L19.6024 17.4228C19.4659 17.2863 19.4659 17.0656 19.6024 16.9305L19.9305 16.6024C20.067 16.4659 20.2878 16.4659 20.4228 16.6024L21.8226 18.0022L23.2224 16.6024C23.3589 16.4659 23.5796 16.4659 23.7147 16.6024L24.0428 16.9305C24.1793 17.067 24.1793 17.2878 24.0428 17.4228L22.068 19.3976C21.9344 19.5341 21.7137 19.5341 21.5772 19.3976Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Accordion', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="accordion" id="cozy-block--accordion">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 1.04762H3C1.89543 1.04762 1 1.98569 1 3.14286V18.8571C1 20.0143 1.89543 20.9524 3 20.9524H23C24.1046 20.9524 25 20.0143 25 18.8571V3.14286C25 1.98569 24.1046 1.04762 23 1.04762ZM3 0C1.34315 0 0 1.4071 0 3.14286V18.8571C0 20.5929 1.34315 22 3 22H23C24.6569 22 26 20.5929 26 18.8571V3.14286C26 1.40711 24.6569 0 23 0H3Z" fill="#5566CA" />
								<rect fill="white" x="3.5" y="4" width="19" height="5" stroke="#B2BCF9" />
								<path d="M19.5354 7.28206L18.5434 6.36047C18.4748 6.29677 18.4748 6.19377 18.5434 6.13075L18.7082 5.97761C18.7768 5.91391 18.8877 5.91391 18.9555 5.97761L19.6586 6.63085L20.3618 5.97761C20.4303 5.91391 20.5412 5.91391 20.609 5.97761L20.7739 6.13075C20.8425 6.19445 20.8425 6.29745 20.7739 6.36047L19.7819 7.28206C19.7148 7.34576 19.6039 7.34576 19.5354 7.28206Z" fill="#5566CA" />
								<path fill="white" d="M6 18V9H22.5V18H14.5H6Z" stroke="#B2BCF9" />
								<path d="M8.5 11H14V16H8.5V11Z" fill="#B2BCF9" />
								<path d="M5.5 6H12.5V7H5.5V6Z" fill="#B2BCF9" />
								<path d="M15 11H20V12H15V11Z" fill="#B2BCF9" />
								<path d="M15 13H20V14H15V13Z" fill="#B2BCF9" />
								<path d="M15 15H20V16H15V15Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Advanced Mega Menu', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="mega-menu" id="cozy-block--mega-menu">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.5 8C12.0141 8 10 10.0141 10 12.5C10 14.9859 12.0141 17 14.5 17C16.9859 17 19 14.9859 19 12.5C19 10.0141 16.9859 8 14.5 8ZM17.1129 13.0081C17.1129 13.1278 17.0149 13.2258 16.8952 13.2258H15.2258V14.8952C15.2258 15.0149 15.1278 15.1129 15.0081 15.1129H13.9919C13.8722 15.1129 13.7742 15.0149 13.7742 14.8952V13.2258H12.1048C11.9851 13.2258 11.8871 13.1278 11.8871 13.0081V11.9919C11.8871 11.8722 11.9851 11.7742 12.1048 11.7742H13.7742V10.1048C13.7742 9.98508 13.8722 9.8871 13.9919 9.8871H15.0081C15.1278 9.8871 15.2258 9.98508 15.2258 10.1048V11.7742H16.8952C17.0149 11.7742 17.1129 11.8722 17.1129 11.9919V13.0081Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 0.201122H9.5V3.4979H27V20.7011H0.5V0.201122ZM1.5 1.20112V19.7011H26V4.4979H8.5V1.20112H1.5Z" fill="#5566CA" />
								<path d="M10 1H16V3H10V1Z" stroke="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 1.5H16.5V2.5H21.5V1.5ZM15.5 0.5V3.5H22.5V0.5H15.5Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Advanced Tabs', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="advanced-tab" id="cozy-block--advanced-tab">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="24" rx="4.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 12.2426L12.273 7.46967C12.5659 7.17678 13.0407 7.17678 13.3336 7.46967L18.1066 12.2426C18.3995 12.5355 18.3995 13.0104 18.1066 13.3033C17.8137 13.5962 17.3388 13.5962 17.0459 13.3033L13.5533 9.81066V20H12.0533V9.81066L8.56066 13.3033C8.26777 13.5962 7.79289 13.5962 7.5 13.3033C7.20711 13.0104 7.20711 12.5355 7.5 12.2426Z" fill="#36CFC6" />
								<path d="M7 5.75C7 5.33579 7.33579 5 7.75 5H18.25C18.6642 5 19 5.33579 19 5.75V5.75C19 6.16421 18.6642 6.5 18.25 6.5H7.75C7.33579 6.5 7 6.16421 7 5.75V5.75Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Back to Top', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="back-to-top" id="cozy-block--back-to-top">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="19" rx="2.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.6464 10.3536L13 8.70711L13.7071 8L16.0607 10.3536L13.7071 12.7071L13 12L14.6464 10.3536Z" fill="#B2BCF9" />
								<path d="M6.89394 8.55656L4.33344 10.5905V12.7857C4.33344 12.8425 4.35685 12.897 4.39852 12.9372C4.44019 12.9774 4.49671 13 4.55564 13L6.11191 12.9961C6.17065 12.9958 6.22689 12.9731 6.26832 12.933C6.30975 12.8928 6.33301 12.8385 6.33301 12.7818V11.4998C6.33301 11.443 6.35642 11.3885 6.39809 11.3483C6.43976 11.3081 6.49628 11.2855 6.55521 11.2855H7.44403C7.50297 11.2855 7.55948 11.3081 7.60116 11.3483C7.64283 11.3885 7.66624 11.443 7.66624 11.4998V12.7809C7.66615 12.8091 7.67183 12.837 7.68295 12.8631C7.69408 12.8892 7.71043 12.9129 7.73107 12.9328C7.75172 12.9528 7.77624 12.9687 7.80325 12.9795C7.83025 12.9903 7.8592 12.9958 7.88844 12.9958L9.44416 13C9.50309 13 9.55961 12.9774 9.60128 12.9372C9.64295 12.897 9.66636 12.8425 9.66636 12.7857V10.589L7.10642 8.55656C7.07632 8.53316 7.03883 8.5204 7.00018 8.5204C6.96152 8.5204 6.92403 8.53316 6.89394 8.55656ZM10.9385 9.93899L9.77746 9.01598V7.16073C9.77746 7.1181 9.75991 7.07722 9.72865 7.04708C9.6974 7.01693 9.65501 7 9.61081 7H8.83309C8.78889 7 8.7465 7.01693 8.71525 7.04708C8.684 7.07722 8.66644 7.1181 8.66644 7.16073V8.1333L7.42306 7.14667C7.30374 7.05197 7.15401 7.00019 6.99948 7.00019C6.84496 7.00019 6.69523 7.05197 6.5759 7.14667L3.06048 9.93899C3.04361 9.95244 3.02964 9.96897 3.01939 9.98763C3.00914 10.0063 3.00281 10.0267 3.00074 10.0477C2.99868 10.0688 3.00093 10.09 3.00737 10.1101C3.01381 10.1303 3.0243 10.1491 3.03826 10.1654L3.3924 10.5806C3.40632 10.5969 3.42344 10.6104 3.44278 10.6204C3.46213 10.6303 3.48331 10.6364 3.50513 10.6385C3.52694 10.6405 3.54895 10.6384 3.56991 10.6322C3.59086 10.626 3.61035 10.6159 3.62724 10.6024L6.89394 8.00739C6.92403 7.98399 6.96152 7.97123 7.00018 7.97123C7.03883 7.97123 7.07632 7.98399 7.10642 8.00739L10.3733 10.6024C10.3901 10.6159 10.4096 10.626 10.4305 10.6322C10.4514 10.6384 10.4734 10.6406 10.4952 10.6386C10.517 10.6366 10.5382 10.6305 10.5575 10.6206C10.5769 10.6107 10.594 10.5973 10.608 10.581L10.9621 10.1658C10.976 10.1494 10.9865 10.1305 10.9929 10.1103C10.9992 10.09 11.0014 10.0687 10.9992 10.0476C10.997 10.0266 10.9905 10.0061 10.9801 9.98747C10.9697 9.96883 10.9555 9.95235 10.9385 9.93899Z" fill="#B2BCF9" />
								<path d="M17.5 10H21.5V11H17.5V10Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Breadcrumb', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="breadcrumb" id="cozy-block--breadcrumb">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="20" rx="1.5" stroke="#5566CA" />
								<rect x="5" y="5" width="16" height="6" rx="1" fill="#36CFC6" />
								<path d="M18 13.1912V14.8676C18 14.9215 17.9936 14.9752 17.981 15.0276L17.4096 17.4026C17.3337 17.7182 17.0457 17.9412 16.7143 17.9412H13C12.8873 17.9412 12.7763 17.9151 12.6759 17.8651C12.5755 17.8151 12.4886 17.7426 12.4223 17.6535L10.1367 14.58C9.90464 14.268 9.97518 13.8311 10.2942 13.6042C10.6133 13.3773 11.06 13.4463 11.292 13.7583L11.8571 14.5182V9.69853C11.8571 9.31275 12.1769 9 12.5714 9C12.9659 9 13.2857 9.31275 13.2857 9.69853V13.1912H13.4286V12.4926C13.4286 12.1069 13.7484 11.7941 14.1429 11.7941C14.5374 11.7941 14.8571 12.1069 14.8571 12.4926V13.1912H15V12.7721C15 12.3863 15.3198 12.0735 15.7143 12.0735C16.1088 12.0735 16.4286 12.3863 16.4286 12.7721V13.1912H16.5714C16.5714 12.8054 16.8912 12.4926 17.2857 12.4926C17.6802 12.4926 18 12.8054 18 13.1912ZM13.4286 14.5882H13.2857V16.2647H13.4286V14.5882ZM15 14.5882H14.8571V16.2647H15V14.5882ZM16.5714 14.5882H16.4286V16.2647H16.5714V14.5882Z" fill="#5566CA" />
								<path d="M13.2157 14.5686H13.451V16.2941H13.2157V14.5686Z" fill="#36CFC6" />
								<path d="M14.8627 14.5686H15.098V16.2941H14.8627V14.5686Z" fill="#36CFC6" />
								<path d="M16.4314 14.5686H16.6667V16.2941H16.4314V14.5686Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Cozy Button', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="button" id="cozy-block--button">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="17" rx="2.5" stroke="#5566CA" />
								<path d="M13 5C10.7903 5 9 6.79032 9 9C9 11.2097 10.7903 13 13 13C15.2097 13 17 11.2097 17 9C17 6.79032 15.2097 5 13 5ZM15.3226 9.45161C15.3226 9.55806 15.2355 9.64516 15.129 9.64516H13.6452V11.129C13.6452 11.2355 13.5581 11.3226 13.4516 11.3226H12.5484C12.4419 11.3226 12.3548 11.2355 12.3548 11.129V9.64516H10.871C10.7645 9.64516 10.6774 9.55806 10.6774 9.45161V8.54839C10.6774 8.44194 10.7645 8.35484 10.871 8.35484H12.3548V6.87097C12.3548 6.76452 12.4419 6.67742 12.5484 6.67742H13.4516C13.5581 6.67742 13.6452 6.76452 13.6452 6.87097V8.35484H15.129C15.2355 8.35484 15.3226 8.44194 15.3226 8.54839V9.45161Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Cozy Container', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="container" id="cozy-block--container">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="20" rx="2.5" stroke="#5566CA" />
								<path d="M15.0958 17.0895C14.6356 17.0895 14.2265 17.0106 13.8686 16.853C13.5127 16.6953 13.2315 16.4758 13.0248 16.1946C12.8181 15.9133 12.7084 15.5884 12.6956 15.2198H13.8973C13.908 15.3967 13.9666 15.5511 14.0731 15.6832C14.1796 15.8132 14.3213 15.9144 14.4982 15.9869C14.675 16.0593 14.8732 16.0955 15.0926 16.0955C15.327 16.0955 15.5347 16.055 15.7159 15.9741C15.897 15.891 16.0387 15.7759 16.1409 15.6289C16.2432 15.4819 16.2933 15.3125 16.2911 15.1207C16.2933 14.9226 16.2421 14.7479 16.1377 14.5966C16.0333 14.4453 15.882 14.3271 15.6839 14.2418C15.4879 14.1566 15.2514 14.114 14.9744 14.114H14.3959V13.1999H14.9744C15.2024 13.1999 15.4016 13.1605 15.572 13.0817C15.7446 13.0028 15.8799 12.892 15.9779 12.7493C16.0759 12.6044 16.1239 12.4371 16.1217 12.2475C16.1239 12.0621 16.0823 11.9013 15.9971 11.7649C15.914 11.6264 15.7958 11.5188 15.6423 11.4421C15.4911 11.3654 15.3132 11.3271 15.1086 11.3271C14.9083 11.3271 14.723 11.3633 14.5525 11.4357C14.382 11.5082 14.2446 11.6115 14.1402 11.7457C14.0358 11.8778 13.9804 12.0355 13.974 12.2187H12.833C12.8416 11.8523 12.947 11.5305 13.1494 11.2535C13.354 10.9744 13.6267 10.7571 13.9676 10.6016C14.3085 10.4439 14.691 10.3651 15.115 10.3651C15.5518 10.3651 15.9311 10.4471 16.2528 10.6111C16.5766 10.7731 16.827 10.9915 17.0038 11.2663C17.1807 11.5412 17.2691 11.8448 17.2691 12.1772C17.2712 12.5458 17.1626 12.8548 16.9431 13.104C16.7258 13.3533 16.4403 13.5163 16.0866 13.593V13.6442C16.5468 13.7081 16.8994 13.8785 17.1445 14.1555C17.3916 14.4304 17.5141 14.7724 17.512 15.1815C17.512 15.5479 17.4076 15.8761 17.1988 16.1658C16.9921 16.4535 16.7066 16.6793 16.3423 16.8434C15.9801 17.0075 15.5646 17.0895 15.0958 17.0895Z" fill="#5566CA" />
								<path d="M7.7869 17V16.1435L10.0593 13.9158C10.2766 13.6964 10.4577 13.5014 10.6026 13.331C10.7475 13.1605 10.8561 12.9954 10.9286 12.8356C11.001 12.6758 11.0373 12.5053 11.0373 12.3242C11.0373 12.1175 10.9904 11.9407 10.8966 11.7937C10.8029 11.6445 10.674 11.5295 10.5099 11.4485C10.3459 11.3675 10.1594 11.3271 9.95061 11.3271C9.73541 11.3271 9.54685 11.3718 9.38491 11.4613C9.22298 11.5486 9.09727 11.6733 9.00778 11.8352C8.92043 11.9972 8.87675 12.19 8.87675 12.4137H7.74855C7.74855 11.9982 7.84337 11.6371 8.033 11.3303C8.22263 11.0234 8.48364 10.7859 8.81602 10.6175C9.15054 10.4492 9.53406 10.3651 9.96659 10.3651C10.4055 10.3651 10.7912 10.4471 11.1236 10.6111C11.4559 10.7752 11.7137 11 11.897 11.2855C12.0824 11.571 12.175 11.897 12.175 12.2635C12.175 12.5085 12.1282 12.7493 12.0344 12.9858C11.9407 13.2223 11.7755 13.4844 11.539 13.772C11.3047 14.0597 10.9755 14.408 10.5515 14.8171L9.42327 15.9645V16.0092H12.2741V17H7.7869Z" fill="#5566CA" />
								<path d="M6.75497 10.4545V17H5.56925V11.6083H5.53089L4 12.5863V11.4996L5.62678 10.4545H6.75497Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.6303 7.20515L19.2229 4.14102C19.382 3.95299 19.64 3.95299 19.7991 4.14102L22.3917 7.20515C22.5508 7.39318 22.5508 7.69804 22.3917 7.88607C22.2326 8.0741 21.9746 8.0741 21.8156 7.88607L19.9184 5.64388L19.9184 17L19.1036 17L19.1036 11.3219L19.1036 5.64388L17.2065 7.88607C17.0474 8.0741 16.7894 8.0741 16.6303 7.88607C16.4712 7.69804 16.4712 7.39318 16.6303 7.20515Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Counter', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="counter" id="cozy-block--counter">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="22" rx="2.5" stroke="#5566CA" />
								<path d="M9.5 6.5C9.5 4.567 11.067 3 13 3C14.933 3 16.5 4.567 16.5 6.5C16.5 8.433 14.933 10 13 10C11.067 10 9.5 8.433 9.5 6.5Z" fill="#B2BCF9" />
								<path d="M14.5 6.5L15.5 8H12.5L14.5 6.5Z" fill="#96A2EA" />
								<path d="M12.5 5L14.5 8H10.5L12.5 5Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 14.5H3V13.5H13H23V14.5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20 12.5H6V11.5H13H20V12.5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19 16.5H7V15.5H13H19V16.5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16 19C16 19.5523 15.5523 20 15 20H11C10.4477 20 10 19.5523 10 19C10 18.4477 10.4477 18 11 18H13H15C15.5523 18 16 18.4477 16 19Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Call to Action(CTA)', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="cta" id="cozy-block--cta">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25 6.5C25 6.77614 24.7761 7 24.5 7H3.5C3.22386 7 3 6.77614 3 6.5C3 6.22386 3.22386 6 3.5 6H24.5C24.7761 6 25 6.22386 25 6.5Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 4C6.22386 4 6 3.77614 6 3.5L6 0.5C6 0.223858 6.22386 -3.39283e-08 6.5 -2.1857e-08C6.77614 -9.7857e-09 7 0.223858 7 0.5L7 3.5C7 3.77614 6.77614 4 6.5 4Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 4C21.2239 4 21 3.77614 21 3.5L21 0.5C21 0.223858 21.2239 -3.39283e-08 21.5 -2.1857e-08C21.7761 -9.7857e-09 22 0.223858 22 0.5L22 3.5C22 3.77614 21.7761 4 21.5 4Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 20C22.2239 20 22 19.7761 22 19.5L22 16.5C22 16.2239 22.2239 16 22.5 16C22.7761 16 23 16.2239 23 16.5L23 19.5C23 19.7761 22.7761 20 22.5 20Z" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M25 19.5C25 19.7761 24.7761 20 24.5 20H22.5C22.2239 20 22 19.7761 22 19.5C22 19.2239 22.2239 19 22.5 19H24.5C24.7761 19 25 19.2239 25 19.5Z" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 23C25.7614 23 28 20.7614 28 18C28 15.2386 25.7614 13 23 13C20.2386 13 18 15.2386 18 18C18 20.7614 20.2386 23 23 23ZM23 24C26.3137 24 29 21.3137 29 18C29 14.6863 26.3137 12 23 12C19.6863 12 17 14.6863 17 18C17 21.3137 19.6863 24 23 24Z" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.51432 3.2076C1.47602 3.40205 1.47251 3.64606 1.47267 3.99978L1.47267 18C1.47267 19.8915 2.05612 20.6948 2.6729 21.0742C3.34598 21.4884 4.1993 21.5001 4.97259 21.5H16.9727C17.2488 21.5 17.4727 21.7239 17.4727 22C17.4727 22.2761 17.2488 22.5 16.9727 22.5H4.97275C4.95914 22.5 4.94529 22.5 4.93138 22.5C4.20487 22.5004 3.08335 22.5009 2.14889 21.926C1.14018 21.3054 0.472671 20.1086 0.472671 18L0.472671 4.00009C0.472524 3.67065 0.472375 3.32299 0.53318 3.01432C0.59796 2.68548 0.73759 2.36508 1.03614 2.1083C1.32111 1.8632 1.70338 1.71764 2.17116 1.62887C2.64138 1.53965 3.24257 1.49986 4.00674 1.5H24C25.2926 1.50006 26.2262 1.75402 26.8035 2.42351C27.3645 3.07413 27.4746 3.99486 27.4746 5.00025V12.0002C27.4746 12.2764 27.2507 12.5002 26.9746 12.5002C26.6985 12.5002 26.4746 12.2764 26.4746 12.0002V5.00025C26.4746 4.00528 26.3474 3.42594 26.0461 3.07655C25.7611 2.74603 25.2074 2.50005 24 2.5H4.00674C3.26789 2.49986 2.73816 2.53913 2.35759 2.61134C1.97457 2.68402 1.78608 2.78228 1.68822 2.86645C1.60395 2.93894 1.54867 3.03325 1.51432 3.2076Z" fill="#5566CA" />
								<circle cx="6.5" cy="10.5" r="1.5" fill="#B2BCF9" />
								<circle cx="6.5" cy="15.5" r="1.5" fill="#B2BCF9" />
								<circle cx="11.5" cy="10.5" r="1.5" fill="#36CFC6" />
								<circle cx="11.5" cy="15.5" r="1.5" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Date & Time', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="current-time" id="cozy-block--current-time">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="20" rx="2.5" stroke="#5566CA" />
								<circle cx="6.5" cy="5.5" r="1.5" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21 5.5C21 5.77614 20.7761 6 20.5 6H10.5C10.2239 6 10 5.77614 10 5.5C10 5.22386 10.2239 5 10.5 5H20.5C20.7761 5 21 5.22386 21 5.5Z" fill="#B2BCF9" />
								<circle cx="6.5" cy="10.5" r="1.5" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21 10.5C21 10.7761 20.7761 11 20.5 11H10.5C10.2239 11 10 10.7761 10 10.5C10 10.2239 10.2239 10 10.5 10H20.5C20.7761 10 21 10.2239 21 10.5Z" fill="#B2BCF9" />
								<circle cx="6.5" cy="15.5" r="1.5" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21 15.5C21 15.7761 20.7761 16 20.5 16H10.5C10.2239 16 10 15.7761 10 15.5C10 15.2239 10.2239 15 10.5 15H20.5C20.7761 15 21 15.2239 21 15.5Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Icon List', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="icon-list" id="cozy-block--icon-list">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="20" rx="2.5" stroke="#5566CA" />
								<path d="M12.249 4.45222L10.5402 7.81352L6.71702 8.35428C6.03141 8.45075 5.75665 9.27076 6.25384 9.74043L9.01982 12.3553L8.36562 16.0492C8.24786 16.7169 8.97272 17.217 9.57982 16.9048L13 15.1607L16.4202 16.9048C17.0273 17.2145 17.7521 16.7169 17.6344 16.0492L16.9802 12.3553L19.7462 9.74043C20.2434 9.27076 19.9686 8.45075 19.283 8.35428L15.4598 7.81352L13.751 4.45222C13.4449 3.85307 12.5578 3.84546 12.249 4.45222Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Icon Picker', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="icon-picker" id="cozy-block--icon-picker">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="3.5" width="25" height="18" rx="2.5" stroke="#5566CA" />
								<rect x="10" y="14" width="7" height="3" rx="0.5" fill="#36CFC6" />
								<rect x="4" y="10" width="11" height="1" fill="#C7CDF4" />
								<rect x="6" y="8" width="14" height="1" fill="#C7CDF4" />
								<rect x="7" y="12" width="12" height="1" fill="#C7CDF4" />
								<rect x="16" y="10" width="6" height="1" fill="#C7CDF4" />
								<rect x="21" y="2" width="5" height="5" fill="white" />
								<path d="M23.5 0C21.0141 0 19 2.01411 19 4.5C19 6.98589 21.0141 9 23.5 9C25.9859 9 28 6.98589 28 4.5C28 2.01411 25.9859 0 23.5 0ZM25.7065 5.68125C25.7917 5.76653 25.7917 5.90444 25.7065 5.98972L24.9879 6.70645C24.9026 6.79173 24.7647 6.79173 24.6794 6.70645L23.5 5.51613L22.3187 6.70645C22.2335 6.79173 22.0956 6.79173 22.0103 6.70645L21.2935 5.9879C21.2083 5.90262 21.2083 5.76472 21.2935 5.67944L22.4839 4.5L21.2935 3.31875C21.2083 3.23347 21.2083 3.09556 21.2935 3.01028L22.0121 2.29173C22.0974 2.20645 22.2353 2.20645 22.3206 2.29173L23.5 3.48387L24.6813 2.29355C24.7665 2.20827 24.9044 2.20827 24.9897 2.29355L25.7083 3.0121C25.7935 3.09738 25.7935 3.23528 25.7083 3.32056L24.5161 4.5L25.7065 5.68125Z" fill="#36CFC6" />
							</svg>
							<p>
								<?php echo __( 'Popup Builder', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="modal" id="cozy-block--modal">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 1H3C1.89543 1 1 1.89543 1 3V18C1 19.1046 1.89543 20 3 20H23C24.1046 20 25 19.1046 25 18V3C25 1.89543 24.1046 1 23 1ZM3 0C1.34315 0 0 1.34315 0 3V18C0 19.6569 1.34315 21 3 21H23C24.6569 21 26 19.6569 26 18V3C26 1.34315 24.6569 0 23 0H3Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 7.5C3.5 6.39543 4.39543 5.5 5.5 5.5H18.5C19.6046 5.5 20.5 6.39543 20.5 7.5V15.5C20.5 16.6046 19.6046 17.5 18.5 17.5H5.5C4.39543 17.5 3.5 16.6046 3.5 15.5V7.5ZM5.5 6.5C4.94772 6.5 4.5 6.94772 4.5 7.5V15.5C4.5 16.0523 4.94772 16.5 5.5 16.5H18.5C19.0523 16.5 19.5 16.0523 19.5 15.5V7.5C19.5 6.94772 19.0523 6.5 18.5 6.5H5.5Z" fill="#B2BCF9" />
								<path d="M14.4386 10.1363L17.7114 14.5H11.1659L14.4386 10.1363Z" fill="#D7DAEB" />
								<path d="M11 8.5L15 14.5H7L11 8.5Z" fill="#B1BAF2" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18 4.5H7.5C7.22386 4.5 7 4.27614 7 4C7 3.72386 7.22386 3.5 7.5 3.5H18C19.327 3.5 20.4445 3.8278 21.2426 4.44261C22.0522 5.06619 22.5 5.96211 22.5 7V14.5C22.5 14.7761 22.2761 15 22 15C21.7239 15 21.5 14.7761 21.5 14.5V7C21.5 6.27447 21.1978 5.67039 20.6324 5.23483C20.0555 4.79049 19.173 4.5 18 4.5Z" fill="#B2BCF9" />
							</svg>
							<?php echo __( 'Portfolio Gallery', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="portfolio-gallery" id="cozy-block--portfolio-gallery">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.962963 13C0.962963 19.6479 6.35213 25.037 13 25.037C19.6479 25.037 25.037 19.6479 25.037 13C25.037 6.35213 19.6479 0.962963 13 0.962963C6.35213 0.962963 0.962963 6.35213 0.962963 13ZM13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0Z" fill="#5566CA" />
								<path d="M4.81482 14.4445C4.81482 13.3808 5.67709 12.5185 6.74075 12.5185H18.2963C19.36 12.5185 20.2222 13.3808 20.2222 14.4445C20.2222 15.5081 19.36 16.3704 18.2963 16.3704H6.74075C5.67709 16.3704 4.81482 15.5081 4.81482 14.4445Z" fill="#B2BCF9" />
								<path d="M5.29631 14.4444C5.29631 13.6467 5.94301 13 6.74075 13H14.4445C15.2422 13 15.8889 13.6467 15.8889 14.4444C15.8889 15.2422 15.2422 15.8889 14.4445 15.8889H6.74075C5.94301 15.8889 5.29631 15.2422 5.29631 14.4444Z" fill="white" />
								<path d="M4.81482 19.2593C4.81482 18.1956 5.67709 17.3333 6.74075 17.3333H18.2963C19.36 17.3333 20.2222 18.1956 20.2222 19.2593C20.2222 20.3229 19.36 21.1852 18.2963 21.1852H6.74075C5.67709 21.1852 4.81482 20.3229 4.81482 19.2593Z" fill="#B2BCF9" />
								<path d="M5.2428 19.2593C5.2428 18.4615 5.8895 17.8148 6.68724 17.8148H17.2798C18.0776 17.8148 18.7243 18.4615 18.7243 19.2593C18.7243 20.057 18.0776 20.7037 17.2798 20.7037H6.68724C5.8895 20.7037 5.2428 20.057 5.2428 19.2593Z" fill="#5566CA" />
								<path d="M16.0209 10.0959V9.90418C16.0209 9.76332 16.0505 9.63371 16.1097 9.51533C16.1701 9.39696 16.2577 9.30167 16.3725 9.22947C16.4873 9.15726 16.6264 9.12116 16.7897 9.12116C16.9578 9.12116 17.0987 9.15726 17.2123 9.22947C17.326 9.30049 17.4118 9.39519 17.4698 9.51356C17.529 9.63193 17.5586 9.76214 17.5586 9.90418V10.0959C17.5586 10.2368 17.529 10.3664 17.4698 10.4848C17.4106 10.6032 17.3236 10.6985 17.2088 10.7707C17.0951 10.8429 16.9555 10.879 16.7897 10.879C16.624 10.879 16.4837 10.8429 16.3689 10.7707C16.2541 10.6985 16.1671 10.6032 16.1079 10.4848C16.0499 10.3664 16.0209 10.2368 16.0209 10.0959ZM16.4843 9.90418V10.0959C16.4843 10.1895 16.5068 10.2753 16.5518 10.3534C16.5968 10.4315 16.6761 10.4706 16.7897 10.4706C16.9046 10.4706 16.9833 10.4321 17.0259 10.3552C17.0697 10.2771 17.0916 10.1906 17.0916 10.0959V9.90418C17.0916 9.80949 17.0709 9.72308 17.0294 9.64495C16.988 9.56564 16.9081 9.52599 16.7897 9.52599C16.6785 9.52599 16.5997 9.56564 16.5536 9.64495C16.5074 9.72308 16.4843 9.80949 16.4843 9.90418ZM14.1725 8.01498V7.82322C14.1725 7.68117 14.2027 7.55096 14.2631 7.43259C14.3235 7.31422 14.4111 7.21952 14.5259 7.1485C14.6407 7.07629 14.7798 7.04019 14.9431 7.04019C15.11 7.04019 15.2503 7.07629 15.364 7.1485C15.4788 7.21952 15.5652 7.31422 15.6232 7.43259C15.6812 7.55096 15.7102 7.68117 15.7102 7.82322V8.01498C15.7102 8.15702 15.6806 8.28723 15.6214 8.4056C15.5634 8.52279 15.477 8.6169 15.3622 8.68792C15.2474 8.75894 15.1077 8.79445 14.9431 8.79445C14.7762 8.79445 14.6354 8.75894 14.5206 8.68792C14.4069 8.6169 14.3205 8.5222 14.2613 8.40383C14.2021 8.28546 14.1725 8.15584 14.1725 8.01498ZM14.6395 7.82322V8.01498C14.6395 8.10968 14.6614 8.19609 14.7052 8.27421C14.7502 8.35115 14.8295 8.38962 14.9431 8.38962C15.0568 8.38962 15.1349 8.35115 15.1775 8.27421C15.2213 8.19609 15.2432 8.10968 15.2432 8.01498V7.82322C15.2432 7.72852 15.2225 7.64211 15.1811 7.56398C15.1396 7.48468 15.0603 7.44502 14.9431 7.44502C14.8307 7.44502 14.752 7.48468 14.707 7.56398C14.662 7.64329 14.6395 7.7297 14.6395 7.82322ZM14.375 10.7778L16.875 7.1414H17.3189L14.8189 10.7778H14.375Z" fill="#5566CA" />
								<path d="M12.1768 10.8275C11.9401 10.8275 11.7282 10.7831 11.5412 10.6943C11.3541 10.6043 11.2056 10.4812 11.0955 10.325C10.9866 10.1687 10.9286 9.98999 10.9215 9.78876H11.5607C11.5725 9.93791 11.637 10.0598 11.7542 10.1545C11.8714 10.248 12.0123 10.2948 12.1768 10.2948C12.3058 10.2948 12.4207 10.2652 12.5213 10.206C12.6219 10.1468 12.7012 10.0646 12.7592 9.95921C12.8172 9.85386 12.8456 9.73372 12.8444 9.59877C12.8456 9.46146 12.8166 9.33954 12.7574 9.23301C12.6982 9.12647 12.6171 9.04302 12.5142 8.98265C12.4112 8.9211 12.2928 8.89032 12.159 8.89032C12.0501 8.88914 11.943 8.90926 11.8377 8.95069C11.7323 8.99212 11.6489 9.04657 11.5873 9.11404L10.9925 9.01639L11.1825 7.14139H13.2919V7.69181H11.7276L11.6228 8.65595H11.6441C11.7116 8.57664 11.8069 8.51094 11.93 8.45886C12.0531 8.40559 12.1881 8.37896 12.3348 8.37896C12.555 8.37896 12.7515 8.43104 12.9243 8.53521C13.0971 8.63819 13.2333 8.78024 13.3327 8.96135C13.4321 9.14245 13.4818 9.3496 13.4818 9.58279C13.4818 9.82309 13.4262 10.0373 13.3149 10.2255C13.2049 10.4126 13.0516 10.5599 12.8551 10.6677C12.6598 10.7742 12.4337 10.8275 12.1768 10.8275Z" fill="#5566CA" />
								<path d="M8.16003 10.7778L9.70655 7.71667V7.69181H7.91145V7.14139H10.3884V7.70424L8.84363 10.7778H8.16003Z" fill="#5566CA" />
							</svg>
							<?php echo __( 'Progress Bar', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="progress-bar" id="cozy-block--progress-bar">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="16" height="22" rx="1.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13 5H4V4H13V5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13 9H4V8H13V9Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13 13H4V12H13V13Z" fill="#B2BCF9" />
								<rect x="18" width="8" height="8" rx="2" fill="#5566CA" />
								<path d="M22.7582 4L23.8953 2.86284C24.0349 2.7233 24.0349 2.49705 23.8953 2.35739L23.6426 2.10466C23.5031 1.96511 23.2768 1.96511 23.1372 2.10466L22 3.24182L20.8628 2.10466C20.7233 1.96511 20.497 1.96511 20.3574 2.10466L20.1047 2.35739C19.9651 2.49693 19.9651 2.72318 20.1047 2.86284L21.2418 4L20.1047 5.13716C19.9651 5.2767 19.9651 5.50295 20.1047 5.64261L20.3574 5.89534C20.4969 6.03489 20.7233 6.03489 20.8628 5.89534L22 4.75818L23.1372 5.89534C23.2767 6.03489 23.5031 6.03489 23.6426 5.89534L23.8953 5.64261C24.0349 5.50307 24.0349 5.27682 23.8953 5.13716L22.7582 4Z" fill="white" />
							</svg>
							<?php echo __( 'Sidebar Panel', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="sidebar-panel" id="cozy-block--sidebar-panel">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="17" viewBox="0 0 26 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="16" rx="2.5" stroke="#5566CA" />
								<path d="M22.117 8.76554L19.9927 10.8899C19.8458 11.0367 19.6084 11.0367 19.4631 10.8899L19.1101 10.5369C18.9633 10.39 18.9633 10.1526 19.1101 10.0073L20.6159 8.50156L19.1101 6.99578C18.9633 6.84895 18.9633 6.61153 19.1101 6.46626L19.4616 6.11012C19.6084 5.96329 19.8458 5.96329 19.9911 6.11012L22.1154 8.23446C22.2638 8.38129 22.2638 8.61871 22.117 8.76554Z" fill="#36CFC6" />
								<path d="M3.8205 8.76554L5.94484 10.8899C6.09167 11.0367 6.3291 11.0367 6.47436 10.8899L6.82738 10.5369C6.97421 10.39 6.97421 10.1526 6.82738 10.0073L5.3216 8.50156L6.82738 6.99578C6.97421 6.84895 6.97421 6.61153 6.82738 6.46626L6.47593 6.11012C6.3291 5.96329 6.09167 5.96329 5.9464 6.11012L3.82207 8.23446C3.67368 8.38129 3.67368 8.61871 3.8205 8.76554Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Slider', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="slider" id="cozy-block--slider">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="22" rx="2.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17 4L21.2341 10H23L18.7659 4H17ZM17.7642 4.39216L21.4449 9.60784H22.2358L18.5551 4.39216H17.7642Z" fill="black" />
								<path d="M22.4414 4L20.3931 6.27451L20.6414 6.60784L23 4H22.4414Z" fill="black" />
								<path d="M19.7517 7.56863L19.4621 7.27451L17 10H17.5586L19.7517 7.56863Z" fill="black" />
								<path d="M8.01845 6.45953L8.17402 5.37368H7.20134V4.66903C7.20134 4.37196 7.33721 4.08239 7.77285 4.08239H8.21505V3.15789C8.21505 3.15789 7.81376 3.08453 7.43009 3.08453C6.62906 3.08453 6.10546 3.60461 6.10546 4.5461V5.37368H5.21505V6.45953H6.10546V9.08454H7.20134V6.45953H8.01845Z" fill="#5566CA" />
								<path d="M19.5006 15.2181C18.7911 15.2181 18.2189 15.7904 18.2189 16.5C18.2189 17.2096 18.7911 17.7819 19.5006 17.7819C20.21 17.7819 20.7822 17.2096 20.7822 16.5C20.7822 15.7904 20.21 15.2181 19.5006 15.2181ZM19.5006 17.3334C19.0421 17.3334 18.6673 16.9597 18.6673 16.5C18.6673 16.0403 19.041 15.6666 19.5006 15.6666C19.9601 15.6666 20.3338 16.0403 20.3338 16.5C20.3338 16.9597 19.959 17.3334 19.5006 17.3334ZM21.1336 15.1656C21.1336 15.3319 20.9997 15.4646 20.8346 15.4646C20.6684 15.4646 20.5357 15.3307 20.5357 15.1656C20.5357 15.0005 20.6695 14.8666 20.8346 14.8666C20.9997 14.8666 21.1336 15.0005 21.1336 15.1656ZM21.9824 15.4691C21.9635 15.0686 21.872 14.7138 21.5786 14.4215C21.2864 14.1291 20.9317 14.0377 20.5312 14.0176C20.1185 13.9941 18.8815 13.9941 18.4688 14.0176C18.0694 14.0365 17.7147 14.128 17.4214 14.4203C17.128 14.7126 17.0376 15.0674 17.0176 15.468C16.9941 15.8808 16.9941 17.1181 17.0176 17.5309C17.0365 17.9314 17.128 18.2862 17.4214 18.5785C17.7147 18.8709 18.0683 18.9623 18.4688 18.9824C18.8815 19.0059 20.1185 19.0059 20.5312 18.9824C20.9317 18.9635 21.2864 18.872 21.5786 18.5785C21.8709 18.2862 21.9624 17.9314 21.9824 17.5309C22.0059 17.1181 22.0059 15.8819 21.9824 15.4691ZM21.4492 17.9738C21.3622 18.1925 21.1938 18.361 20.9741 18.4491C20.645 18.5797 19.8642 18.5495 19.5006 18.5495C19.1369 18.5495 18.355 18.5785 18.027 18.4491C17.8084 18.3621 17.64 18.1936 17.5519 17.9738C17.4214 17.6447 17.4515 16.8637 17.4515 16.5C17.4515 16.1363 17.4225 15.3542 17.5519 15.0262C17.6389 14.8075 17.8073 14.639 18.027 14.5509C18.3561 14.4203 19.1369 14.4505 19.5006 14.4505C19.8642 14.4505 20.6461 14.4215 20.9741 14.5509C21.1927 14.6379 21.3611 14.8064 21.4492 15.0262C21.5798 15.3553 21.5496 16.1363 21.5496 16.5C21.5496 16.8637 21.5798 17.6458 21.4492 17.9738Z" fill="url(#paint0_linear_221_24)" />
								<path d="M9.87462 15.6259C9.80562 15.3795 9.60231 15.1855 9.34416 15.1196C8.87625 15 7 15 7 15C7 15 5.12376 15 4.65584 15.1196C4.39769 15.1855 4.19438 15.3795 4.12538 15.6259C4 16.0724 4 17.004 4 17.004C4 17.004 4 17.9357 4.12538 18.3822C4.19438 18.6286 4.39769 18.8145 4.65584 18.8803C5.12376 19 7 19 7 19C7 19 8.87624 19 9.34416 18.8803C9.60231 18.8145 9.80562 18.6286 9.87462 18.3822C10 17.9357 10 17.004 10 17.004C10 17.004 10 16.0724 9.87462 15.6259ZM6.38636 17.8499V16.1582L7.95453 17.0041L6.38636 17.8499Z" fill="#CC2525" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M23 12H3V11H23V12Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13 20L13 3H14L14 20H13Z" fill="#B2BCF9" />
								<defs>
									<linearGradient id="paint0_linear_221_24" x1="19.0298" y1="12.0691" x2="19.0298" y2="17.0691" gradientUnits="userSpaceOnUse">
										<stop stop-color="#DA5353" />
										<stop offset="1" stop-color="#595FF4" />
									</linearGradient>
								</defs>
							</svg>
							<?php echo __( 'Social Icons', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="social-icon" id="cozy-block--social-icon">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="22" rx="2.5" stroke="#5566CA" />
								<circle cx="8.5" cy="11.5" r="2.5" fill="#36CFC6" />
								<path d="M18.7679 16.1119C18.7679 17.4926 17.6486 18.6119 16.2679 18.6119C14.8872 18.6119 13.7679 17.4926 13.7679 16.1119C13.7679 14.7312 14.8872 13.6119 16.2679 13.6119C17.6486 13.6119 18.7679 14.7312 18.7679 16.1119Z" fill="#36CFC6" />
								<path d="M17.5 7.06301C17.5 8.16757 16.6046 9.06301 15.5 9.06301C14.3954 9.06301 13.5 8.16757 13.5 7.06301C13.5 5.95845 14.3954 5.06301 15.5 5.06301C16.6046 5.06301 17.5 5.95845 17.5 7.06301Z" fill="#36CFC6" />
								<path d="M14.9783 7L10 10.2826L10.5 11L15 8L14.9783 7Z" fill="#36CFC6" />
								<path d="M14.5 15L10.5 12L10 12.5L14 15.5L14.5 15Z" fill="#36CFC6" />
							</svg>
							<?php echo __( 'Social Share', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="social-share" id="cozy-block--social-share">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill="white" d="M19.4074 10.3922L18.9318 10.8637L19.519 11.1857C21.0033 11.9997 22.0533 13.4668 22.281 15.2077L22.3379 15.6429H22.7768H25.4286C26.4159 15.6429 27.2143 14.8444 27.2143 13.8571V12.5714C27.2143 10.877 25.8373 9.5 24.1429 9.5H21.5714C20.7266 9.5 19.9628 9.84156 19.4074 10.3922ZM16.6094 10.7857H16.4954L16.3927 10.8351C15.6173 11.2079 14.7628 11.4286 13.8571 11.4286C12.952 11.4286 12.1012 11.2081 11.3207 10.8347L11.2184 10.7857H11.1049H10.7714C7.93993 10.7857 5.64286 13.0828 5.64286 15.9143V17.0714C5.64286 18.4123 6.73055 19.5 8.07143 19.5H19.6429C20.9837 19.5 22.0714 18.4123 22.0714 17.0714V15.9143C22.0714 13.0828 19.7744 10.7857 16.9429 10.7857H16.6094ZM8.19533 11.1857L8.78251 10.8637L8.30693 10.3922C7.75146 9.84156 6.98772 9.5 6.14286 9.5H3.57143C1.87698 9.5 0.5 10.877 0.5 12.5714V13.8571C0.5 14.8444 1.29841 15.6429 2.28571 15.6429H4.93348H5.37142L5.42912 15.2087C5.66062 13.467 6.7111 11.9997 8.19533 11.1857ZM4.85714 9.21429C6.55159 9.21429 7.92857 7.8373 7.92857 6.14286C7.92857 4.44841 6.55159 3.07143 4.85714 3.07143C3.1627 3.07143 1.78571 4.44841 1.78571 6.14286C1.78571 7.8373 3.1627 9.21429 4.85714 9.21429ZM22.8571 9.21429C24.5516 9.21429 25.9286 7.8373 25.9286 6.14286C25.9286 4.44841 24.5516 3.07143 22.8571 3.07143C21.1627 3.07143 19.7857 4.44841 19.7857 6.14286C19.7857 7.8373 21.1627 9.21429 22.8571 9.21429ZM13.8571 10.5C16.6203 10.5 18.8571 8.2632 18.8571 5.5C18.8571 2.7368 16.6203 0.5 13.8571 0.5C11.0939 0.5 8.85714 2.7368 8.85714 5.5C8.85714 8.2632 11.0939 10.5 13.8571 10.5Z" stroke="url(#paint0_linear_1_9)" />
								<defs>
									<linearGradient id="paint0_linear_1_9" x1="6" y1="0.999999" x2="26.5" y2="20" gradientUnits="userSpaceOnUse">
										<stop stop-color="#5566CA" />
										<stop offset="1" stop-color="#36CFC6" />
									</linearGradient>
								</defs>
							</svg>
							<?php echo __( 'Teams', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="teams" id="cozy-block--teams">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.4636 0.347861L20.243 2.93348L17.5122 3.34944C17.0224 3.42365 16.8262 4.05443 17.1813 4.41572L19.157 6.42719L18.6897 9.26863C18.6056 9.78224 19.1234 10.167 19.557 9.92675L22 8.58512L24.443 9.92675C24.8766 10.165 25.3944 9.78224 25.3103 9.26863L24.843 6.42719L26.8187 4.41572C27.1738 4.05443 26.9776 3.42365 26.4878 3.34944L23.757 2.93348L22.5364 0.347861C22.3178 -0.11302 21.6841 -0.118878 21.4636 0.347861Z" fill="#36CFC6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M1.35741 4.75447C2.25229 4.03672 3.46408 3.99999 4.57846 4H15.9589V4.8731H4.57845C3.41673 4.87309 2.58003 4.93955 1.99545 5.40842C1.41905 5.87073 0.962963 6.83672 0.962963 8.97666V18.676C0.962963 19.1864 1.14596 19.9501 1.67757 20.5555C2.1887 21.1377 3.05856 21.6173 4.55174 21.542L4.56509 21.5414H8.70168V26.2743L15.801 21.5414H21.2066L21.2192 21.542C21.8742 21.5732 22.8542 21.4573 23.6517 21.0295C24.4179 20.6186 25.037 19.9131 25.037 18.676V11.4531H26V18.676C26 20.2456 25.1777 21.2255 24.142 21.781C23.1431 22.3168 21.9682 22.4499 21.1817 22.4145H16.1169L7.73872 28V22.4145H4.59155C2.81477 22.5007 1.64031 21.9149 0.92418 21.0993C0.226697 20.3049 0 19.335 0 18.676V8.97666C0 6.78287 0.454348 5.47879 1.35741 4.75447Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17 11H4V10H17V11Z" fill="#C7CDF4" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15 14H4V13H15V14Z" fill="#C7CDF4" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21 17H4V16H21V17Z" fill="#C7CDF4" />
							</svg>
							<?php echo __( 'Testimonials', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="testimonial" id="cozy-block--testimonial">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

				</ul>

				<!-- Post and Magazine Blocks -->
				<h2 class="mt-34"><?php echo __( 'Post and Magazine Blocks', 'cozy-addons' ); ?></h2>
				<ul class="blocks-holder">
					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="19" rx="2.5" stroke="#5566CA" />
								<path d="M14.6251 5.8125H12.822L13.4876 3.53086C13.5501 3.26367 13.3704 3 13.1251 3H10.8752C10.6877 3 10.5283 3.15645 10.5033 3.36562L10.0033 7.58437C9.9736 7.8375 10.1486 8.0625 10.3752 8.0625H12.2298L11.5095 11.4814C11.4533 11.7486 11.6345 12 11.8736 12C12.0048 12 12.1298 11.9227 12.1986 11.7891L14.9485 6.44531C15.0939 6.16582 14.9142 5.8125 14.6251 5.8125Z" fill="#36CFC6" />
								<rect x="5" y="14" width="15" height="1" fill="#B2BCF9" />
								<path d="M7 16H18V17H7V16Z" fill="#B2BCF9" />
							</svg>
							<p>
								<?php echo __( 'News Ticker', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="news-ticker" id="cozy-block--news-ticker">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="19" rx="2.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5 15H4.5V14H20.5V15Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 17H7.5V16H17.5V17Z" fill="#B2BCF9" />
								<path d="M9.82813 6.4375H8.42188C8.18888 6.4375 8 6.62638 8 6.85938V11.0781C8 11.3111 8.18888 11.5 8.42188 11.5H9.82813C10.0611 11.5 10.25 11.3111 10.25 11.0781V6.85938C10.25 6.62638 10.0611 6.4375 9.82813 6.4375ZM9.125 10.7969C8.892 10.7969 8.70313 10.608 8.70313 10.375C8.70313 10.142 8.892 9.95312 9.125 9.95312C9.358 9.95312 9.54688 10.142 9.54688 10.375C9.54688 10.608 9.358 10.7969 9.125 10.7969ZM14.75 3.93177C14.75 4.67737 14.2935 5.09559 14.1651 5.59375H15.9532C16.5402 5.59375 16.9972 6.08147 17 6.615C17.0015 6.93032 16.8673 7.26977 16.6583 7.47979L16.6564 7.48173C16.8293 7.89195 16.8011 8.46675 16.4927 8.87864C16.6453 9.33383 16.4915 9.89297 16.2048 10.1927C16.2803 10.5021 16.2442 10.7653 16.0967 10.9773C15.7379 11.4927 14.8487 11.5 14.0968 11.5L14.0468 11.5C13.198 11.4997 12.5033 11.1906 11.9451 10.9423C11.6646 10.8175 11.2979 10.6631 11.0196 10.6579C10.9047 10.6558 10.8125 10.562 10.8125 10.447V6.68936C10.8125 6.63311 10.835 6.57913 10.875 6.53958C11.5714 5.8515 11.8708 5.12301 12.4416 4.5513C12.7018 4.29058 12.7964 3.89676 12.8879 3.51591C12.9661 3.1907 13.1296 2.5 13.4844 2.5C13.9063 2.5 14.75 2.64062 14.75 3.93177Z" fill="#36CFC6" />
							</svg>
							<p>
								<?php echo __( 'Popular Post', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="popular-post" id="cozy-block--popular-post">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H11C11.8284 0.5 12.5 1.17157 12.5 2V14C12.5 14.8284 11.8284 15.5 11 15.5H2C1.17157 15.5 0.5 14.8284 0.5 14V2ZM2 1.5C1.72386 1.5 1.5 1.72386 1.5 2V14C1.5 14.2761 1.72386 14.5 2 14.5H11C11.2761 14.5 11.5 14.2761 11.5 14V2C11.5 1.72386 11.2761 1.5 11 1.5H2Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 2C13.5 1.17157 14.1716 0.5 15 0.5H25C25.8284 0.5 26.5 1.17157 26.5 2V14C26.5 14.8284 25.8284 15.5 25 15.5H15C14.1716 15.5 13.5 14.8284 13.5 14V2ZM15 1.5C14.7239 1.5 14.5 1.72386 14.5 2V14C14.5 14.2761 14.7239 14.5 15 14.5H25C25.2761 14.5 25.5 14.2761 25.5 14V2C25.5 1.72386 25.2761 1.5 25 1.5H15Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 10H3V9H9.75V10Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10 7.5C10 7.77614 9.77614 8 9.5 8H3.5C3.22386 8 3 7.77614 3 7.5V3.5C3 3.22386 3.22386 3 3.5 3H9.5C9.77614 3 10 3.22386 10 3.5V7.5Z" fill="#B2BCF9" />
								<path d="M7.5 5L9 7H6L7.5 5Z" fill="#96A2EA" />
								<path d="M5.73205 4L7.4641 7H4L5.73205 4Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 11.9121H3V10.9121H7.5V11.9121Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24 10H16V9H24V10Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24 7.5C24 7.77614 23.7761 8 23.5 8H16.5C16.2239 8 16 7.77614 16 7.5V3.5C16 3.22386 16.2239 3 16.5 3H23.5C23.7761 3 24 3.22386 24 3.5V7.5Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12H19H16V11H22V12Z" fill="#B2BCF9" />
								<circle cx="10" cy="18" r="1" fill="#B2BCF9" />
								<circle cx="13" cy="18" r="1" fill="#36CFC6" />
								<circle cx="16" cy="18" r="1" fill="#B2BCF9" />
								<path d="M21.0021 5.00072L22.5021 7.00072H19.5021L21.0021 5.00072Z" fill="#96A2EA" />
								<path d="M18.9994 4.00034L20.7314 7.00034H17.2673L18.9994 4.00034Z" fill="#7689F6" />
							</svg>
							<?php echo __( 'Post Grid/Carousel', 'cozy-addons' ); ?>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<input type="checkbox" class="cozy-block-active" name="post-carousel" id="cozy-block--post-carousel">
								<span class="cozy-toggle-slider round"></span>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.50817 2C4.50817 1.17157 5.17974 0.5 6.00817 0.5H20.0082C20.8366 0.5 21.5082 1.17157 21.5082 2V17C21.5082 17.8284 20.8366 18.5 20.0082 18.5H6.00817C5.17974 18.5 4.50817 17.8284 4.50817 17V2ZM6.00817 1.5C5.73203 1.5 5.50817 1.72386 5.50817 2V17C5.50817 17.2761 5.73203 17.5 6.00817 17.5H20.0082C20.2843 17.5 20.5082 17.2761 20.5082 17V2C20.5082 1.72386 20.2843 1.5 20.0082 1.5H6.00817Z" fill="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.0078 13H9.00781V12H17.0078V13Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.0078 10.2C19.0078 10.6418 18.6496 11 18.2078 11H7.80781C7.36598 11 7.00781 10.6418 7.00781 10.2V4.8C7.00781 4.35817 7.36598 4 7.80781 4H18.2078C18.6496 4 19.0078 4.35817 19.0078 4.8V10.2Z" fill="#B2BCF9" />
								<path d="M14 6L16 9H12L14 6Z" fill="#96A2EA" />
								<path d="M11.5 5L14 9H9L11.5 5Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0078 15H10.0078V14H16.0078V15Z" fill="#B2BCF9" />
								<path d="M25.8869 9.84757L23.7625 11.9719C23.6157 12.1187 23.3783 12.1187 23.233 11.9719L22.88 11.6189C22.7332 11.4721 22.7332 11.2346 22.88 11.0894L24.3858 9.58359L22.88 8.07781C22.7332 7.93098 22.7332 7.69356 22.88 7.54829L23.2315 7.19215C23.3783 7.04532 23.6157 7.04532 23.761 7.19215L25.8853 9.31649C26.0337 9.46332 26.0337 9.70074 25.8869 9.84757Z" fill="#36CFC6" />
								<path d="M0.117738 9.76554L2.24207 11.8899C2.3889 12.0367 2.62633 12.0367 2.7716 11.8899L3.12461 11.5369C3.27144 11.39 3.27144 11.1526 3.12461 11.0073L1.61883 9.50156L3.12461 7.99578C3.27144 7.84895 3.27144 7.61153 3.12461 7.46626L2.77316 7.11012C2.62633 6.96329 2.3889 6.96329 2.24364 7.11012L0.119301 9.23446C-0.0290906 9.38129 -0.0290906 9.61871 0.117738 9.76554Z" fill="#36CFC6" />
							</svg>
							<p>
								<?php echo __( 'Post Slider', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="post-slider" id="cozy-block--post-slider">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="25" height="21.8571" rx="2.5" stroke="#5566CA" />
								<rect x="3.05882" y="3.2653" width="6.11765" height="8.70748" rx="0.5" fill="#B2BCF9" />
								<path d="M7.26338 7.07483L8.25676 9.52381H6.27L7.26338 7.07483Z" fill="#96A2EA" />
								<path d="M5.7353 5.44217L7.39093 9.5238H4.07966L5.7353 5.44217Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.17647 14.1497H3.05882V13.0612H9.17647V14.1497Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.64706 16.3265H3.05882V15.2381H7.64706V16.3265Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.11765 18.5034H3.05882V17.415H6.11765V18.5034Z" fill="#B2BCF9" />
								<rect x="9.94118" y="3.2653" width="6.11765" height="8.70748" rx="0.5" fill="#B2BCF9" />
								<path d="M14.1457 7.07483L15.1391 9.52381H13.1523L14.1457 7.07483Z" fill="#96A2EA" />
								<path d="M12.6176 5.44217L14.2733 9.5238H10.962L12.6176 5.44217Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0588 14.1497H9.94118V13.0612H16.0588V14.1497Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.5294 16.3265H9.94118V15.2381H14.5294V16.3265Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13 18.5034H9.94118V17.415H13V18.5034Z" fill="#B2BCF9" />
								<rect x="16.8235" y="3.2653" width="6.11765" height="8.70748" rx="0.5" fill="#B2BCF9" />
								<path d="M21.0281 7.07483L22.0215 9.52381H20.0347L21.0281 7.07483Z" fill="#96A2EA" />
								<path d="M19.5 5.44217L21.1556 9.5238H17.8444L19.5 5.44217Z" fill="#7689F6" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9412 14.1497H16.8235V13.0612H22.9412V14.1497Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.4118 16.3265H16.8235V15.2381H21.4118V16.3265Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.8824 18.5034H16.8235V17.415H19.8824V18.5034Z" fill="#B2BCF9" />
							</svg>
							<p>
								<?php echo __( 'Related Post', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="related-post" id="cozy-block--related-post">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="19" rx="2.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5 15H4.5V14H20.5V15Z" fill="#B2BCF9" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 17H7.5V16H17.5V17Z" fill="#B2BCF9" />
								<path d="M10.0873 6.60885L6.63725 10.0036C6.23474 10.5128 5.77847 10.9716 6.11974 11.5313C6.46474 12.0971 7.03976 12.0971 7.44226 11.8142L10.7773 8.53256L12.0999 10.5128C12.6979 11.3276 13.4224 10.8523 13.7099 10.5128L17.16 7.06149C17.068 7.9215 17.735 8.24966 18.08 8.30624C18.816 8.26098 19 7.64615 19 7.34439V4.85488C19 4.0854 18.31 3.96847 17.965 4.00619H15.6074C14.9174 4.00619 14.7066 4.57199 14.6874 4.85488C14.6414 5.71489 15.4349 5.85446 15.8374 5.81674L12.9624 8.64572L11.7549 6.60885C11.1568 5.88463 10.394 6.30709 10.0873 6.60885Z" fill="#36CFC6" />
							</svg>
							<p>
								<?php echo __( 'Trending Post', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() ? 'cozy-block-upsell' : ''; ?>" name="trending-post" id="cozy-block--trending-post">
								<?php if ( false === cozy_addons_premium_access() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php echo __( 'Please', 'cozy-addons' ); ?> <a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a> <?php echo __( ' to enable this block!', 'cozy-addons' ); ?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>
				</ul>

				<!-- Woocommerce Blocks -->
				<h2 class="mt-34"><?php echo __( 'Woocommerce Blocks', 'cozy-addons' ); ?></h2>
				<ul class="blocks-holder">
					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24.3053 1.24127C23.9204 1.01038 23.4351 1.00002 23 1.00002H13.5H4C2.52739 1.00002 1.81124 1.25145 1.45425 1.56381C1.12296 1.8537 1 2.28803 1 3.00002L1 15C1 15.9959 1.03157 16.7451 1.11919 17.3146C1.20708 17.8859 1.34422 18.2236 1.51544 18.4377C1.67602 18.6384 1.90707 18.7805 2.30112 18.8725C2.70965 18.9678 3.25373 19 4 19H12.5C12.7761 19 13 19.2239 13 19.5C13 19.7761 12.7761 20 12.5 20H4C3.24627 20 2.60285 19.9697 2.07389 19.8463C1.53044 19.7195 1.07398 19.4866 0.734567 19.0623C0.405787 18.6514 0.230418 18.1141 0.130815 17.4667C0.030927 16.8174 0 16.0041 0 15L1.2815e-06 3.00002C1.2815e-06 2.21201 0.127046 1.39635 0.795748 0.811237C1.43876 0.248598 2.47261 2.58159e-05 4 2.58159e-05H23C23.0097 2.58159e-05 23.0197 1.96171e-05 23.0298 1.3299e-05C23.4355 -0.00023853 24.1789 -0.000700041 24.8197 0.383779C25.5323 0.811281 26 1.62826 26 3.00002V15.0138C26 15.753 26 16.4236 25.9597 17.0034C25.9194 17.5842 25.8366 18.1172 25.649 18.5673C25.4548 19.0334 25.1479 19.4107 24.6806 19.6599C24.2286 19.901 23.668 20 23 20H22.75H22.3166C22.1232 20 21.9471 19.8887 21.8642 19.714C21.7006 19.3696 21.9665 18.9759 22.3472 18.9992L22.3601 19H22.75H23C23.582 19 23.9589 18.9115 24.21 18.7776C24.4458 18.6518 24.6077 18.4666 24.726 18.1827C24.8509 17.8829 24.9243 17.4783 24.9621 16.9341C24.9997 16.3926 25 15.7554 25 15V3.00002C25 1.87179 24.6344 1.43877 24.3053 1.24127Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.53734 7.22902C6.5004 7.67225 6.5 8.2418 6.5 9H5.5L5.5 8.9788C5.5 8.24641 5.49999 7.63554 5.54079 7.14598C5.58147 6.65783 5.66681 6.21471 5.8885 5.86C6.12795 5.47688 6.48452 5.25957 6.92586 5.14188C7.34526 5.03004 7.87046 5 8.5 5H17.5C18.6335 5 19.5244 5.14437 20.0231 5.90418C20.2552 6.25762 20.3665 6.69538 20.4264 7.18738C20.4866 7.68247 20.5 8.28531 20.5 9H19.5C19.5 8.28612 19.4859 7.73717 19.4337 7.30816C19.3811 6.87605 19.2951 6.61738 19.1872 6.45296C19.006 6.17706 18.6469 6 17.5 6H8.5C7.87955 6 7.46725 6.03246 7.18352 6.10812C6.92173 6.17793 6.80955 6.27312 6.7365 6.39C6.64569 6.53529 6.57478 6.77967 6.53734 7.22902Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8 10H4V11H8V10ZM3 9V12H9V9H3Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15 10H11V11H15V10ZM10 9V12H16V9H10Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M22 10H18V11H22V10ZM17 9V12H23V9H17Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 9V6H13.5V9H12.5Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.4992 16.5713L11.8682 16.2842C11.6976 16.2066 11.6189 16.0079 11.6902 15.8345C11.7653 15.6518 11.9771 15.568 12.1569 15.6498L12.7919 15.9387L12.8049 15.9461C13.155 16.1457 13.3595 16.3566 13.4788 16.6279C13.534 16.7533 13.565 16.8786 13.5893 16.9906C13.5982 17.0318 13.606 17.07 13.6136 17.1071C13.6284 17.1793 13.6424 17.2477 13.6625 17.3281L13.6643 17.3354L14.4606 21.1729C14.5387 21.4742 14.6307 21.5932 14.7436 21.662C14.8824 21.7467 15.1179 21.7971 15.5749 21.7971H19.429C19.7083 21.7971 19.8489 21.7189 19.9411 21.6164C20.0484 21.4971 20.1349 21.2961 20.2083 20.9611L20.8524 18.0338L20.8543 18.0264C20.9154 17.7949 20.898 17.6711 20.8607 17.617C20.8345 17.579 20.7021 17.4459 20.1523 17.4973L20.1375 17.4987H15.0784C14.8843 17.4987 14.727 17.3413 14.727 17.1472C14.727 16.9531 14.8843 16.7958 15.0784 16.7958H20.1082C20.7071 16.7423 21.1601 16.8536 21.4017 17.2047C21.6319 17.5391 21.5667 17.9512 21.5 18.2069L20.8593 21.1192C20.7786 21.4871 20.6595 21.8403 20.4263 22.0995C20.1781 22.3755 19.8434 22.5 19.429 22.5H15.5749C15.1069 22.5 14.7129 22.4558 14.4085 22.2701C14.0792 22.0692 13.9148 21.7437 13.8135 21.3478L13.8114 21.3396L13.0146 17.4996C12.9916 17.4065 12.9725 17.3135 12.9566 17.2359C12.9498 17.2031 12.9436 17.173 12.938 17.1468C12.9165 17.0476 12.8977 16.9802 12.8726 16.9232C12.832 16.831 12.7557 16.7196 12.4992 16.5713Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.6079 24.7022C15.9437 24.7022 16.2158 24.43 16.2158 24.0943C16.2158 23.7585 15.9437 23.4863 15.6079 23.4863C15.2722 23.4863 15 23.7585 15 24.0943C15 24.43 15.2722 24.7022 15.6079 24.7022ZM15.6079 25.1886C16.2123 25.1886 16.7022 24.6986 16.7022 24.0943C16.7022 23.4899 16.2123 23 15.6079 23C15.0036 23 14.5136 23.4899 14.5136 24.0943C14.5136 24.6986 15.0036 25.1886 15.6079 25.1886Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.3562 24.7094C19.6919 24.7094 19.9641 24.4372 19.9641 24.1015C19.9641 23.7657 19.6919 23.4935 19.3562 23.4935C19.0204 23.4935 18.7482 23.7657 18.7482 24.1015C18.7482 24.4372 19.0204 24.7094 19.3562 24.7094ZM19.3562 25.1958C19.9605 25.1958 20.4505 24.7058 20.4505 24.1015C20.4505 23.4971 19.9605 23.0072 19.3562 23.0072C18.7518 23.0072 18.2619 23.4971 18.2619 24.1015C18.2619 24.7058 18.7518 25.1958 19.3562 25.1958Z" fill="#6978D0" />
							</svg>
							<p>
								<?php echo __( 'Product Category', 'cozy-addons' ); ?>
							</p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-category" id="cozy-block--product-category">
								<?php if ( ! is_woocommerce_active() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php
										echo __( 'Kindly activate the WooCommerce plugin to use this block.', 'cozy-addons' );
										?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="11" height="13" rx="1.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.5472 4.63929L3.17828 4.46784C3.07834 4.42139 3.03225 4.30483 3.07338 4.20259C3.11769 4.09247 3.24529 4.04201 3.35293 4.09204L3.71818 4.26179L3.72576 4.2662C3.93032 4.38528 4.04974 4.51114 4.11948 4.67303C4.15172 4.74788 4.16984 4.82263 4.18402 4.88945C4.18924 4.91408 4.1938 4.93684 4.19824 4.959C4.20687 5.00208 4.21505 5.04292 4.2268 5.0909L4.22785 5.0952L4.69301 7.3852C4.73865 7.56494 4.79237 7.63596 4.85832 7.67705C4.93941 7.72757 5.07701 7.75766 5.34397 7.75766H7.59548C7.75864 7.75766 7.84079 7.71099 7.89468 7.6498C7.95736 7.57862 8.00785 7.4587 8.05078 7.25881L8.42701 5.51197L8.42815 5.50758C8.46386 5.36941 8.45364 5.29558 8.43185 5.26324C8.4166 5.2406 8.33923 5.16116 8.01803 5.19185L8.0094 5.19267H5.05835C4.94253 5.19267 4.84864 5.09878 4.84864 4.98296C4.84864 4.86713 4.94253 4.77324 5.05835 4.77324H7.99229C8.34217 4.74132 8.60677 4.80773 8.74794 5.01724C8.88241 5.21682 8.8443 5.46269 8.80535 5.61528L8.43104 7.35312C8.38391 7.57265 8.31432 7.78344 8.17812 7.93811C8.03312 8.10277 7.83759 8.17709 7.59548 8.17709H5.34397C5.07056 8.17709 4.84042 8.15071 4.66259 8.03992C4.47019 7.92004 4.37416 7.72576 4.31498 7.48954L4.31376 7.48467L3.84831 5.19323C3.83482 5.13764 3.82368 5.08217 3.81438 5.03586C3.81044 5.01627 3.80683 4.99832 3.80352 4.98269C3.79096 4.92348 3.77999 4.88329 3.76533 4.84925C3.74164 4.79425 3.69701 4.72778 3.5472 4.63929Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.389 9.67736C5.59625 9.67736 5.76425 9.4968 5.76425 9.27407C5.76425 9.05133 5.59625 8.87077 5.389 8.87077C5.18175 8.87077 5.01375 9.05133 5.01375 9.27407C5.01375 9.4968 5.18175 9.67736 5.389 9.67736ZM5.389 10C5.76204 10 6.06445 9.67499 6.06445 9.27407C6.06445 8.87314 5.76204 8.54813 5.389 8.54813C5.01596 8.54813 4.71355 8.87314 4.71355 9.27407C4.71355 9.67499 5.01596 10 5.389 10Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.46038 9.67736C7.66763 9.67736 7.83563 9.4968 7.83563 9.27407C7.83563 9.05133 7.66763 8.87077 7.46038 8.87077C7.25313 8.87077 7.08513 9.05133 7.08513 9.27407C7.08513 9.4968 7.25313 9.67736 7.46038 9.67736ZM7.46038 10C7.83342 10 8.13583 9.67499 8.13583 9.27407C8.13583 8.87314 7.83342 8.54813 7.46038 8.54813C7.08734 8.54813 6.78493 8.87314 6.78493 9.27407C6.78493 9.67499 7.08734 10 7.46038 10Z" fill="#6978D0" />
								<rect fill="white" x="13.5" y="0.5" width="11" height="13" rx="1.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5845 4.63929L16.1912 4.46819C16.0855 4.42218 16.0368 4.29933 16.0824 4.19336C16.1282 4.08671 16.252 4.03766 16.3584 4.08397L16.7671 4.26179L16.7752 4.2662C16.9937 4.38529 17.1212 4.51114 17.1957 4.67304C17.2302 4.74788 17.2495 4.82263 17.2647 4.88946C17.2702 4.91408 17.2751 4.93684 17.2799 4.959C17.2891 5.00208 17.2978 5.04292 17.3104 5.09091L17.3115 5.09521L17.8083 7.3852C17.8571 7.56495 17.9145 7.63597 17.9849 7.67705C18.0715 7.72758 18.2185 7.75766 18.5036 7.75766H20.9085C21.0828 7.75766 21.1705 7.71099 21.2281 7.64981C21.295 7.57862 21.349 7.45871 21.3948 7.25881L21.7967 5.51197L21.7979 5.50758C21.836 5.36942 21.8251 5.29559 21.8018 5.26325C21.7855 5.24061 21.7029 5.16117 21.3598 5.19185L21.3506 5.19267H18.1843C18.0685 5.19267 17.9746 5.09878 17.9746 4.98296C17.9746 4.86713 18.0685 4.77324 18.1843 4.77324H21.3323C21.7061 4.74133 21.9887 4.80773 22.1395 5.01724C22.2831 5.21682 22.2424 5.46269 22.2008 5.61528L21.801 7.35312C21.7506 7.57266 21.6763 7.78345 21.5308 7.93812C21.376 8.10278 21.1671 8.1771 20.9085 8.1771H18.5036C18.2116 8.1771 17.9658 8.15072 17.7758 8.03992C17.5703 7.92005 17.4678 7.72577 17.4046 7.48954L17.4033 7.48468L16.9061 5.19323C16.8917 5.13765 16.8798 5.08217 16.8698 5.03587C16.8656 5.01627 16.8618 4.99832 16.8583 4.98269C16.8448 4.92348 16.8331 4.88329 16.8175 4.84925C16.7922 4.79425 16.7445 4.72778 16.5845 4.63929Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5517 9.67737C18.7731 9.67737 18.9525 9.4968 18.9525 9.27407C18.9525 9.05133 18.7731 8.87077 18.5517 8.87077C18.3303 8.87077 18.1509 9.05133 18.1509 9.27407C18.1509 9.4968 18.3303 9.67737 18.5517 9.67737ZM18.5517 10C18.9501 10 19.2732 9.67499 19.2732 9.27407C19.2732 8.87314 18.9501 8.54813 18.5517 8.54813C18.1532 8.54813 17.8302 8.87314 17.8302 9.27407C17.8302 9.67499 18.1532 10 18.5517 10Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7642 9.67737C20.9855 9.67737 21.165 9.4968 21.165 9.27407C21.165 9.05133 20.9855 8.87077 20.7642 8.87077C20.5428 8.87077 20.3634 9.05133 20.3634 9.27407C20.3634 9.4968 20.5428 9.67737 20.7642 9.67737ZM20.7642 10C21.1626 10 21.4856 9.67499 21.4856 9.27407C21.4856 8.87314 21.1626 8.54813 20.7642 8.54813C20.3657 8.54813 20.0427 8.87314 20.0427 9.27407C20.0427 9.67499 20.3657 10 20.7642 10Z" fill="#6978D0" />
								<circle cx="9" cy="16" r="1" fill="#B2BCF9" />
								<circle cx="12" cy="16" r="1" fill="#39C6C7" />
								<circle cx="15" cy="16" r="1" fill="#B2BCF9" />
							</svg>
							<p>
								<?php echo __( 'Product Grid/Carousel', 'cozy-addons' ); ?>
							</p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-carousel" id="cozy-block--product-carousel">
								<?php if ( ! is_woocommerce_active() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php
										echo __( 'Kindly activate the WooCommerce plugin to use this block.', 'cozy-addons' );
										?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24.3053 1.24127C23.9204 1.01038 23.4351 1.00002 23 1.00002H13.5H4C2.52739 1.00002 1.81124 1.25145 1.45425 1.56381C1.12296 1.8537 1 2.28803 1 3.00002L1 15C1 15.9959 1.03157 16.7451 1.11919 17.3146C1.20708 17.8859 1.34422 18.2236 1.51544 18.4377C1.67602 18.6384 1.90707 18.7805 2.30112 18.8725C2.70965 18.9678 3.25373 19 4 19H12.5C12.7761 19 13 19.2239 13 19.5C13 19.7761 12.7761 20 12.5 20H4C3.24627 20 2.60285 19.9697 2.07389 19.8463C1.53044 19.7195 1.07398 19.4866 0.734567 19.0623C0.405787 18.6514 0.230418 18.1141 0.130815 17.4667C0.030927 16.8174 0 16.0041 0 15L1.2815e-06 3.00002C1.2815e-06 2.21201 0.127046 1.39635 0.795748 0.811237C1.43876 0.248598 2.47261 2.58159e-05 4 2.58159e-05H23C23.0097 2.58159e-05 23.0197 1.96171e-05 23.0298 1.3299e-05C23.4355 -0.00023853 24.1789 -0.000700041 24.8197 0.383779C25.5323 0.811281 26 1.62826 26 3.00002V15.0138C26 15.753 26 16.4236 25.9597 17.0034C25.9194 17.5842 25.8366 18.1172 25.649 18.5673C25.4548 19.0334 25.1479 19.4107 24.6806 19.6599C24.2286 19.901 23.668 20 23 20H22.75H22.3166C22.1232 20 21.9471 19.8887 21.8642 19.714C21.7006 19.3696 21.9665 18.9759 22.3472 18.9992L22.3601 19H22.75H23C23.582 19 23.9589 18.9115 24.21 18.7776C24.4458 18.6518 24.6077 18.4666 24.726 18.1827C24.8509 17.8829 24.9243 17.4783 24.9621 16.9341C24.9997 16.3926 25 15.7554 25 15V3.00002C25 1.87179 24.6344 1.43877 24.3053 1.24127Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.4992 16.5713L11.8682 16.2842C11.6976 16.2066 11.6189 16.0079 11.6902 15.8345C11.7653 15.6518 11.9771 15.568 12.1569 15.6498L12.7919 15.9387L12.8049 15.9461C13.155 16.1457 13.3595 16.3566 13.4788 16.6279C13.534 16.7533 13.565 16.8786 13.5893 16.9906C13.5982 17.0318 13.606 17.07 13.6136 17.1071C13.6284 17.1793 13.6424 17.2477 13.6625 17.3281L13.6643 17.3354L14.4606 21.1729C14.5387 21.4742 14.6307 21.5932 14.7436 21.662C14.8824 21.7467 15.1179 21.7971 15.5749 21.7971H19.429C19.7083 21.7971 19.8489 21.7189 19.9411 21.6164C20.0484 21.4971 20.1349 21.2961 20.2083 20.9611L20.8524 18.0338L20.8543 18.0264C20.9154 17.7949 20.898 17.6711 20.8607 17.617C20.8345 17.579 20.7021 17.4459 20.1523 17.4973L20.1375 17.4987H15.0784C14.8843 17.4987 14.727 17.3413 14.727 17.1472C14.727 16.9531 14.8843 16.7958 15.0784 16.7958H20.1082C20.7071 16.7423 21.1601 16.8536 21.4017 17.2047C21.6319 17.5391 21.5667 17.9512 21.5 18.2069L20.8593 21.1192C20.7786 21.4871 20.6595 21.8403 20.4263 22.0995C20.1781 22.3755 19.8434 22.5 19.429 22.5H15.5749C15.1069 22.5 14.7129 22.4558 14.4085 22.2701C14.0792 22.0692 13.9148 21.7437 13.8135 21.3478L13.8114 21.3396L13.0146 17.4996C12.9916 17.4065 12.9725 17.3135 12.9566 17.2359C12.9498 17.2031 12.9436 17.173 12.938 17.1468C12.9165 17.0476 12.8977 16.9802 12.8726 16.9232C12.832 16.831 12.7557 16.7196 12.4992 16.5713Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.6079 24.7022C15.9437 24.7022 16.2158 24.43 16.2158 24.0943C16.2158 23.7585 15.9437 23.4863 15.6079 23.4863C15.2722 23.4863 15 23.7585 15 24.0943C15 24.43 15.2722 24.7022 15.6079 24.7022ZM15.6079 25.1886C16.2123 25.1886 16.7022 24.6986 16.7022 24.0943C16.7022 23.4899 16.2123 23 15.6079 23C15.0036 23 14.5136 23.4899 14.5136 24.0943C14.5136 24.6986 15.0036 25.1886 15.6079 25.1886Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.3562 24.7094C19.6919 24.7094 19.9641 24.4372 19.9641 24.1015C19.9641 23.7657 19.6919 23.4935 19.3562 23.4935C19.0204 23.4935 18.7482 23.7657 18.7482 24.1015C18.7482 24.4372 19.0204 24.7094 19.3562 24.7094ZM19.3562 25.1958C19.9605 25.1958 20.4505 24.7058 20.4505 24.1015C20.4505 23.4971 19.9605 23.0072 19.3562 23.0072C18.7518 23.0072 18.2619 23.4971 18.2619 24.1015C18.2619 24.7058 18.7518 25.1958 19.3562 25.1958Z" fill="#6978D0" />
								<path d="M6.23178 6.17393L5.6215 7.46674L4.25608 7.67472C4.01122 7.71183 3.91309 8.02722 4.09066 8.20786L5.07851 9.21359L4.84486 10.6343C4.80281 10.8911 5.06168 11.0835 5.27851 10.9634L6.5 10.2926L7.72149 10.9634C7.93832 11.0825 8.19719 10.8911 8.15514 10.6343L7.92149 9.21359L8.90934 8.20786C9.08691 8.02722 8.98878 7.71183 8.74392 7.67472L7.3785 7.46674L6.76822 6.17393C6.65888 5.94349 6.34206 5.94056 6.23178 6.17393Z" fill="#36CFC6" />
								<path d="M12.7318 6.17393L12.1215 7.46674L10.7561 7.67472C10.5112 7.71183 10.4131 8.02722 10.5907 8.20786L11.5785 9.21359L11.3449 10.6343C11.3028 10.8911 11.5617 11.0835 11.7785 10.9634L13 10.2926L14.2215 10.9634C14.4383 11.0825 14.6972 10.8911 14.6551 10.6343L14.4215 9.21359L15.4093 8.20786C15.5869 8.02722 15.4888 7.71183 15.2439 7.67472L13.8785 7.46674L13.2682 6.17393C13.1589 5.94349 12.8421 5.94056 12.7318 6.17393Z" fill="#36CFC6" />
								<path d="M19.2318 6.17393L18.6215 7.46674L17.2561 7.67472C17.0112 7.71183 16.9131 8.02722 17.0907 8.20786L18.0785 9.21359L17.8449 10.6343C17.8028 10.8911 18.0617 11.0835 18.2785 10.9634L19.5 10.2926L20.7215 10.9634C20.9383 11.0825 21.1972 10.8911 21.1551 10.6343L20.9215 9.21359L21.9093 8.20786C22.0869 8.02722 21.9888 7.71183 21.7439 7.67472L20.3785 7.46674L19.7682 6.17393C19.6589 5.94349 19.3421 5.94056 19.2318 6.17393Z" fill="#36CFC6" />
							</svg>
							<p>
								<?php echo __( 'All Product Reviews', 'cozy-addons' ); ?>
							</p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo ! is_woocommerce_active() ? '<span class="cozy-toggle-slider round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-review" id="cozy-block--product-review">
								<?php if ( ! is_woocommerce_active() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php
										echo __( 'Kindly activate the WooCommerce plugin to use this block.', 'cozy-addons' );
										?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect fill="white" x="0.5" y="0.5" width="24" height="18" rx="2.5" stroke="#5566CA" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M8.85338 5.95894L8.27883 5.70211C8.12376 5.63279 8.05232 5.45241 8.11787 5.29571C8.1857 5.13356 8.37374 5.05908 8.53421 5.13081L9.12003 5.39268L9.13185 5.3993C9.45087 5.57793 9.63711 5.76671 9.74587 6.00955C9.79616 6.12182 9.82441 6.23395 9.84652 6.33418C9.85467 6.37112 9.86178 6.40526 9.8687 6.4385C9.88216 6.50312 9.89492 6.56437 9.91324 6.63636L9.91489 6.64281L10.6403 10.0778C10.7115 10.3474 10.7953 10.4539 10.8981 10.5156C11.0246 10.5914 11.2392 10.6365 11.6555 10.6365H15.1668C15.4213 10.6365 15.5494 10.5665 15.6335 10.4747C15.7312 10.3679 15.81 10.1881 15.8769 9.88821L16.4637 7.26796L16.4654 7.26137C16.5211 7.05412 16.5052 6.94337 16.4712 6.89487C16.4474 6.86091 16.3267 6.74174 15.8258 6.78777L15.8124 6.78901H11.1976C11.0239 6.78901 10.883 6.64817 10.883 6.47443C10.883 6.3007 11.0239 6.15986 11.1976 6.15986H15.7857C16.3313 6.11199 16.744 6.21159 16.9642 6.52586C17.1739 6.82522 17.1144 7.19404 17.0537 7.42291L16.4699 10.0297C16.3964 10.359 16.2879 10.6752 16.0755 10.9072C15.8494 11.1542 15.5444 11.2656 15.1668 11.2656H11.6555C11.2291 11.2656 10.8702 11.2261 10.5929 11.0599C10.2928 10.8801 10.1431 10.5886 10.0508 10.2343L10.0489 10.227L9.32298 6.78984C9.30194 6.70647 9.28456 6.62326 9.27005 6.5538C9.26392 6.52441 9.25829 6.49748 9.25312 6.47404C9.23353 6.38522 9.21643 6.32494 9.19356 6.27387C9.15661 6.19137 9.08701 6.09166 8.85338 5.95894Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9889 13.516C12.2859 13.516 12.5266 13.2452 12.5266 12.9111C12.5266 12.577 12.2859 12.3061 11.9889 12.3061C11.6919 12.3061 11.4512 12.577 11.4512 12.9111C11.4512 13.2452 11.6919 13.516 11.9889 13.516ZM11.9889 14C12.5235 14 12.9568 13.5125 12.9568 12.9111C12.9568 12.3097 12.5235 11.8222 11.9889 11.8222C11.4543 11.8222 11.021 12.3097 11.021 12.9111C11.021 13.5125 11.4543 14 11.9889 14Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.9572 13.516C15.2542 13.516 15.495 13.2452 15.495 12.9111C15.495 12.577 15.2542 12.3061 14.9572 12.3061C14.6603 12.3061 14.4195 12.577 14.4195 12.9111C14.4195 13.2452 14.6603 13.516 14.9572 13.516ZM14.9572 14C15.4918 14 15.9252 13.5125 15.9252 12.9111C15.9252 12.3097 15.4918 11.8222 14.9572 11.8222C14.4227 11.8222 13.9893 12.3097 13.9893 12.9111C13.9893 13.5125 14.4227 14 14.9572 14Z" fill="#6978D0" />
								<path d="M22.8976 9.568L20.9228 11.5428C20.7863 11.6793 20.5656 11.6793 20.4305 11.5428L20.1024 11.2147C19.9659 11.0782 19.9659 10.8574 20.1024 10.7224L21.5022 9.3226L20.1024 7.92279C19.9659 7.7863 19.9659 7.56558 20.1024 7.43054L20.4305 7.10237C20.567 6.96587 20.7878 6.96587 20.9228 7.10237L22.8976 9.0772C23.0341 9.21079 23.0341 9.4315 22.8976 9.568Z" fill="#5566CA" />
								<path d="M2.10237 9.568L4.0772 11.5428C4.2137 11.6793 4.43441 11.6793 4.56946 11.5428L4.89763 11.2147C5.03412 11.0782 5.03412 10.8574 4.89763 10.7224L3.49782 9.3226L4.89763 7.92279C5.03412 7.7863 5.03412 7.56558 4.89763 7.43054L4.56946 7.10237C4.43296 6.96587 4.21225 6.96587 4.0772 7.10237L2.10237 9.0772C1.96588 9.21079 1.96588 9.4315 2.10237 9.568Z" fill="#5566CA" />
							</svg>
							<p>
								<?php echo __( 'Product Slider', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-slider" id="cozy-block--product-slider">
								<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php
										if ( false === cozy_addons_premium_access() ) {
											echo __( 'Please', 'cozy-addons' );
											?>
											<a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a>
											<?php
											echo __( ' to enable this block!', 'cozy-addons' );
										}
										if ( ! is_woocommerce_active() ) {
											echo __( 'Kindly activate the WooCommerce plugin to use this block.', 'cozy-addons' );
										}
										?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>

					<li>
						<div class="cozy-display-flex">
							<svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M24 3.11111H1V18H24V3.11111ZM0 2.11111V19H25V2.11111H0Z" fill="#6978D0" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7.93668 6.40862L7.30423 6.10487C7.13257 6.02243 7.05336 5.82171 7.12245 5.64427C7.19944 5.44655 7.42842 5.35618 7.61968 5.44804L8.22937 5.74085L8.24234 5.74865C8.5925 5.9593 8.79692 6.18193 8.9163 6.46831C8.97149 6.6007 9.00251 6.73293 9.02677 6.85113C9.03571 6.8947 9.04352 6.93495 9.05112 6.97415C9.06589 7.05035 9.07989 7.12259 9.10001 7.20748L9.10181 7.21509L9.89806 11.2659C9.97619 11.5838 10.0681 11.7095 10.181 11.7821C10.3198 11.8715 10.5554 11.9247 11.0124 11.9247H14.8664C15.1457 11.9247 15.2864 11.8422 15.3786 11.7339C15.4859 11.608 15.5723 11.3959 15.6458 11.0423L16.2898 7.95231L16.2918 7.94454C16.3529 7.70014 16.3354 7.56954 16.2981 7.51233C16.272 7.47229 16.1396 7.33176 15.5897 7.38604L15.575 7.3875H10.5354C10.3305 7.3875 10.1645 7.22141 10.1645 7.01653C10.1645 6.81165 10.3305 6.64556 10.5354 6.64556H15.5457C16.1446 6.58911 16.5975 6.70656 16.8392 7.07718C17.0694 7.43021 17.0041 7.86514 16.9375 8.13505L16.2967 11.2091C16.2161 11.5975 16.0969 11.9703 15.8638 12.2439C15.6156 12.5352 15.2809 12.6667 14.8664 12.6667H11.0124C10.5443 12.6667 10.1504 12.62 9.84598 12.424C9.51663 12.212 9.35225 11.8683 9.25096 11.4504L9.24887 11.4418L8.45212 7.38848C8.42903 7.29016 8.40996 7.19203 8.39403 7.11012C8.38729 7.07546 8.38112 7.0437 8.37544 7.01606C8.35394 6.91132 8.33518 6.84023 8.31007 6.78001C8.26952 6.68272 8.19312 6.56514 7.93668 6.40862Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.0454 14.9912C11.3811 14.9912 11.6533 14.7039 11.6533 14.3495C11.6533 13.9951 11.3811 13.7078 11.0454 13.7078C10.7096 13.7078 10.4375 13.9951 10.4375 14.3495C10.4375 14.7039 10.7096 14.9912 11.0454 14.9912ZM11.0454 15.5046C11.6497 15.5046 12.1397 14.9875 12.1397 14.3495C12.1397 13.7116 11.6497 13.1945 11.0454 13.1945C10.441 13.1945 9.95111 13.7116 9.95111 14.3495C9.95111 14.9875 10.441 15.5046 11.0454 15.5046Z" fill="#A8B2EF" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.7936 14.9988C15.1294 14.9988 15.4016 14.7115 15.4016 14.3571C15.4016 14.0027 15.1294 13.7154 14.7936 13.7154C14.4579 13.7154 14.1857 14.0027 14.1857 14.3571C14.1857 14.7115 14.4579 14.9988 14.7936 14.9988ZM14.7936 15.5122C15.398 15.5122 15.8879 14.995 15.8879 14.3571C15.8879 13.7192 15.398 13.2021 14.7936 13.2021C14.1893 13.2021 13.6994 13.7192 13.6994 14.3571C13.6994 14.995 14.1893 15.5122 14.7936 15.5122Z" fill="#A8B2EF" />
								<rect width="5" height="1.05556" fill="#6978D0" />
								<rect x="6" width="5" height="1.05556" fill="#A8B2EF" />
								<rect x="12" width="5" height="1.05556" fill="#A8B2EF" />
							</svg>
							<p>
								<?php echo __( 'Products Tab Showcase', 'cozy-addons' ); ?>
							</p>
							<p class="cozy-block-pro-label"><?php echo __( 'PRO', 'cozy-addons' ); ?></p>
						</div>
						<div class="cozy-block-toggle">
							<label class="switch">
								<?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? '<span class="cozy-toggle-slider cozy-pro-block round"></span>' : ''; ?>
								<input type="checkbox" class="cozy-block-active <?php echo false === cozy_addons_premium_access() || ! is_woocommerce_active() ? 'cozy-block-upsell' : ''; ?>" name="product-tab" id="cozy-block--product-tab">
								<?php if ( false === cozy_addons_premium_access() || ! is_woocommerce_active() ) { ?>
									<div class="cozy-block-upsell-tooltip">
										<?php
										if ( false === cozy_addons_premium_access() ) {
											echo __( 'Please', 'cozy-addons' );
											?>
											<a href="https://cozythemes.com/pricing-and-plans/"><?php echo __( ' upgrade to pro', 'cozy-addons' ); ?></a>
											<?php
											echo __( ' to enable this block!', 'cozy-addons' );
										}
										if ( ! is_woocommerce_active() ) {
											echo __( 'Kindly activate the WooCommerce plugin to use this block.', 'cozy-addons' );
										}
										?>
									</div>
								<?php } else { ?>
									<span class="cozy-toggle-slider cozy-pro-block round"></span>
								<?php } ?>
							</label>
						</div>
					</li>
				</ul>

			</div>

		<?php endif; ?>

		<div class="tab-content" id="content3">
			<h2><?php echo __( 'Elementor Integration Control', 'cozy-addons' ); ?></h2>
			<div class="display-flex">
				<h2><?php echo __( 'Enable Elementor Widgets', 'cozy-addons' ); ?></h2>
				<div class="cozy-block-toggle">
					<label class="switch">
						<input type="checkbox" class="cozy-elementor-widgets" id="enable-elementor-widgets">
						<span class="cozy-toggle-slider round"></span>
					</label>
				</div>
			</div>
			<div class="cozy-free-widgets grid-layout">
				<h3 class="widget-box-header"><?php echo __( 'Free Widgets for Elementor - 25 Widgets', 'cozy-addons' ); ?></h3>
				<ul class="widgets-holder">
					<li><a href="https://cozythemes.com/pricing-table/" target="_blank"><?php echo __( 'Pricing Table', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/call-to-action/" target="_blank"><?php echo __( 'Call To Action', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/flip-box/" target="_blank"><?php echo __( 'Flip Box', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/working-hour/" target="_blank"><?php echo __( 'Working Hour', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/multi-buttons/" target="_blank"><?php echo __( 'Multi Buttons', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/brands-logo-showcase/" target="_blank"><?php echo __( 'Brands Logo Showcase', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/advance-header/" target="_blank"><?php echo __( 'Advanced Text', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/basic-post-demos/" target="_blank"><?php echo __( 'Basic Blog Posts', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/post-slider-demos/" target="_blank"><?php echo __( 'Post Slider', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/cozy-popular-posts/" target="_blank"><?php echo __( 'Popular Posts', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/focus-posts-demos/" target="_blank"><?php echo __( 'Focus Posts', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/author-box-demos/" target="_blank"><?php echo __( 'Author Box', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/search-form-demos/" target="_blank">S<?php echo __( 'earch Form', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/travel-list-demo/" target="_blank"><?php echo __( 'Travel List', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/properties-list-demo/" target="_blank"><?php echo __( 'Properties List', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/pages-list-demo/" target="_blank"><?php echo __( 'Pages List', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/site-logo-demo/" target="_blank"><?php echo __( 'Site Logo', 'cozy-addons' ); ?></a> </li>
					<li><a href="https://cozythemes.com/courses-list-demo/" target="_blank"><?php echo __( 'Course List', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/post-categories-demo/" target="_blank"><?php echo __( 'Post Categories', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/price-list-demos/" target="_blank"><?php echo __( 'Price List', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/cozy-teams/" target="_blank"><?php echo __( 'Teams', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/cozy-woo-products-demo/" target="_blank"><?php echo __( 'Products List', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/testimonials-demos/" target="_blank"><?php echo __( 'Testimonials', 'cozy-addons' ); ?> </a> </li>
					<li><a href="https://cozythemes.com/sliders/" target="_blank"><?php echo __( 'Slider', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/event-lists/" target="_blank"><?php echo __( 'Events List<', 'cozy-addons' ); ?>/a></li>
				</ul>
			</div><!--end of free-widgets -->
			<div class="cozy-pro-widgets grid-layout">
				<h3 class="widget-box-header"><?php echo __( 'Premium Widgets for Elementor', 'cozy-addons' ); ?><span><?php echo __( '20 Widgets', 'cozy-addons' ); ?></span></h3>
				<ul class="widgets-holder">
					<li><a href="https://cozythemes.com/cozy-portfolios-demo/" target="_blank"><?php echo __( 'Portfolio', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/cozy-services-demos/" target="_blank"><?php echo __( 'Service', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/cozy-promotions-demo/" target="_blank"><?php echo __( 'Promotion ', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/cozy-blog-posts-demos/" target="_blank"><?php echo __( 'Blog Posts', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/cozy-faqs/" target="_blank"><?php echo __( 'FAQ', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/hover-box-demo/" target="_blank"><?php echo __( 'Hover Box', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/contact-form-7-styler/" target="_blank"><?php echo __( 'Contact Form 7 styler ', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/cozy-typeout-text/" target="_blank"><?php echo __( 'Typeout Text', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/cozy-woo-slider-demos/" target="_blank"><?php echo __( 'Product Slider', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/advanced-magazine-block-demos/" target="_blank"><?php echo __( 'Magazine Block ', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/menu-search-demo/" target="_blank"><?php echo __( 'Menu Search<', 'cozy-addons' ); ?>/a></li>
					<li><a href="https://cozythemes.com/menu-cart-demo/" target="_blank"><?php echo __( 'Menu Cart', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/toggle-content-demo/" target="_blank"><?php echo __( 'Toggle Content', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/navigation-demo/" target="_blank"><?php echo __( 'Navigation Menu', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/sitemap-demo/" target="_blank"><?php echo __( 'Sitemap', 'cozy-addons' ); ?> </a></li>
					<li><a href="https://cozythemes.com/sidebar-panel-demo/" target="_blank"><?php echo __( 'Sidebar Panel', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/date-and-time-demo/" target="_blank"><?php echo __( 'Date & Time', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/footer-copyright-text/" target="_blank"><?php echo __( 'Footer Copyright Text', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/product-categories-demo/" target="_blank"><?php echo __( 'Product Categories', 'cozy-addons' ); ?></a></li>
					<li><a href="https://cozythemes.com/my-account-demo/" target="_blank"><?php echo __( 'My Account', 'cozy-addons' ); ?></a></li>
				</ul>

				<?php if ( cozy_addons_premium_access() ) { ?>
					<h3 class="widget-box-header"><?php echo __( 'Other Premium Features', 'cozy-addons' ); ?></h3>
					<ul class="widgets-holder other-features">
						<?php
						if ( is_plugin_active( 'elementor/elementor.php' ) ) {
							?>
							<li>
								<form method="POST" action="<?php echo esc_url( admin_url( 'admin.php' ) ); ?>?page=_cozy_companions">
									<div class="display-flex">
										<p><?php echo __( 'Header and Footer Builder for Elementor', 'cozy-addons' ); ?></p>
										<div class="cozy-block-toggle">
											<label class="switch">
												<input type="checkbox" class="ct-header-footer" id="enable-header-footer">
												<span class="cozy-toggle-slider round"></span>
											</label>
										</div>
									</div>
									<?php submit_button(); ?>
								</form>
							</li>
							<li>
								<form method="POST" action="<?php echo esc_url( admin_url( 'admin.php' ) ); ?>?page=_cozy_companions">

									<div class="display-flex">
										<p><?php echo __( 'Custom CSS, Custom Header and Footer Scripts', 'cozy-addons' ); ?></p>
										<div class="cozy-block-toggle">
											<label class="switch">
												<input type="checkbox" class="ct-custom-assets" id="enable-custom-assets">
												<span class="cozy-toggle-slider round"></span>
											</label>
										</div>
									</div>
									<?php submit_button(); ?>
								</form>
							</li>
						<?php } ?>
						<li>
							<form method="POST" action="<?php echo esc_url( admin_url( 'admin.php' ) ); ?>?page=_cozy_companions">

								<div class="display-flex">
									<p><?php echo __( 'Custom Fonts', 'cozy-addons' ); ?></p>
									<div class="cozy-block-toggle">
										<label class="switch">
											<input type="checkbox" class="ct-custom-fonts" id="enable-custom-fonts">
											<span class="cozy-toggle-slider round"></span>
										</label>
									</div>
								</div>
								<?php submit_button(); ?>
							</form>
						</li>

						<li>
							<p><?php echo __( 'Sticky Section', 'cozy-addons' ); ?></p>
						</li>
					</ul>
				<?php } ?>
				<?php if ( ! cozy_addons_premium_access() ) { ?>
					<a href="https://cozythemes.com/cozy-addons/" class="unlock-pro" target="_blank"><span class="dashicons dashicons-lock"></span> <span class="dashicons dashicons-unlock"></span> <?php echo __( 'Unlock Pro Features', 'cozy-addons' ); ?></a>
				<?php } ?>
			</div><!--end of pro-widgets -->


		</div>
		<!-- <div class="tab-content" id="content4">
			<h2>Basic Setup and Configuration for Plugin Dependency</h2>
			<p>This is the content for Tab 3.</p>

		</div> -->



	</div>
</div>