(($) => {
  "use strict";

  window["cozyBlockPortfolioGalleryInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyPortfolioGallery_${n}`];
    const portfolioClass = `#cozyBlock_${n}`;
    const cozyPortfolio = document.querySelector(portfolioClass);

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      autoplay: { ...blockOptions.sliderOptions.autoplay },
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${portfolioClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${portfolioClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${portfolioClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    } else {
      delete sliderAttr.autoplay;
    }

    let portfolioSlider = null;

    if (blockOptions.layout === "carousel") {
      portfolioSlider = new Swiper(
        portfolioClass +
          ".layout-carousel.cozy-portfolio-gallery__swiper-container",
        sliderAttr
      );
    }

    const loaderButton = cozyPortfolio.querySelector(".cozy-dynamic-loader");

    const isotopeFilter = cozyPortfolio.querySelectorAll(
      ".cozy-isotope-filter__label"
    );

    isotopeFilter.forEach((label) => {
      label.addEventListener("click", function () {
        // Remove 'active' class from all labels
        isotopeFilter.forEach((l) => {
          l.classList.remove("active");
        });

        // Add 'active' class to the clicked label
        this.classList.add("active");

        const termID = label.getAttribute("data-term-id");
        hideLoaderButton(termID);

        let newTemplates = [];
        const originalItems = [...blockOptions.portfolioTemplates];

        const portfolioCollection =
          cozyPortfolio.querySelectorAll(".cozy-portfolio");

        portfolioCollection.forEach((el) => {
          // $(el).fadeOut(600, function () {
          // });
          $(el).animate(
            {
              height: 0,
              width: 0,
              opacity: 0,
            },
            500
          );
          setTimeout(() => {
            $(el).remove();
          }, 500);
        });

        if (termID !== "") {
          // Apply filtering logic to original items
          newTemplates = originalItems.filter((obj) => {
            if (Array.isArray(obj?.post_custom_category)) {
              return obj.post_custom_category.some(
                (category) => category.term_id === parseInt(termID)
              );
            } else {
              return false;
            }
          });
          createPortfolioTemplateDOM(
            newTemplates.slice(
              0,
              parseInt(blockOptions.perPage) === -1
                ? newTemplates.length
                : blockOptions.perPage
            )
          );
        } else {
          createPortfolioTemplateDOM(
            originalItems.slice(
              0,
              parseInt(blockOptions.perPage) === -1
                ? originalItems.length
                : blockOptions.perPage
            )
          );
        }
      });
    });

    if (blockOptions.source === "template") {
      if (parseInt(blockOptions.perPage) === -1) {
        createPortfolioTemplateDOM(blockOptions.portfolioTemplates);
      } else {
        createPortfolioTemplateDOM(
          blockOptions.portfolioTemplates.slice(0, blockOptions.perPage)
        );
      }
    }

    function createPortfolioTemplateDOM(templates) {
      switch (blockOptions.orderBy) {
        case "dateDESC":
          templates = templates.sort(compareDatesDesc);
          break;

        case "dateASC":
          templates = templates.sort(compareDatesAsc);
          break;

        case "titleASC":
          templates = templates.sort(compareTitlesASC);
          break;

        case "titleDESC":
          templates = templates.sort(compareTitlesDesc);
          break;

        default:
          break;
      }

      templates.forEach((template) => {
        const wrapperDiv = document.createElement("div");
        wrapperDiv.className = "cozy-portfolio post-ID__" + template.ID;
        wrapperDiv.setAttribute("data-post-id", template.ID);

        if (template.post_custom_category.length > 0) {
          template.post_custom_category.map((obj) => {
            return wrapperDiv.classList.add("taxonomy__term-id-" + obj.term_id);
          });
        }
        if (blockOptions.layout === "carousel") {
          wrapperDiv.classList.add("swiper-slide");
        }
        wrapperDiv.innerHTML = `
        ${
          blockOptions.layoutType !== "gallery" && template.post_url
            ? `<a href="${template.post_url}" target="_blank" rel="noopener">`
            : ""
        }
        ${
          blockOptions.featuredImage.position === "before" &&
          template.featured_image
            ? `
              <div class="cozy-portfolio-gallery__featured-image-wrapper">
                <div class='cozy-portfolio-gallery__image-overlay'></div>
                <img
                  class="cozy-portfolio-gallery__featured-image"
                  src='${template.featured_image}'
                  alt='${template.post_title}'
                />
              </div>
            `
            : ""
        }
        
        ${
          blockOptions.layoutType !== "default"
            ? '<div class="cozy-portfolio-gallery__title-cat-wrapper">'
            : ""
        }
        <h2 class="cozy-portfolio-gallery__title">
          ${template.post_title}
        </h2>
      
        ${
          blockOptions.layoutType !== "default" &&
          template.post_custom_category &&
          Array.isArray(template.post_custom_category) &&
          template.post_custom_category.length > 0
            ? `
              <div class="cozy-portfolio-gallery__category">
                ${template.post_custom_category
                  .map((category) => {
                    return (
                      category &&
                      `<span class="cozy-portfolio-gallery__category-label">
                       ${category.name}
                     </span>`
                    );
                  })
                  .join("")}
              </div>`
            : ""
        }
       ${
         blockOptions.layoutType !== "default"
           ? `<i class="cozy-overlay-icon-wrapper">
          <svg class='cozy-portfolio-icon__overlay' 
          width="${blockOptions.galleryOptions.iconSize}"
          height="${blockOptions.galleryOptions.iconSize}"
          viewBox="${blockOptions.galleryOptions.iconViewBox.vx} ${blockOptions.galleryOptions.iconViewBox.vy} ${blockOptions.galleryOptions.iconViewBox.vw} ${blockOptions.galleryOptions.iconViewBox.vh}"
          fill="${blockOptions.galleryOptions.iconColor}"
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
        >
            <path d="${blockOptions.galleryOptions.iconPath}"/>
          </svg>
        </i>`
           : ""
       }
        ${blockOptions.layoutType !== "default" ? "</div>" : ""}

      
        ${
          blockOptions.featuredImage.position === "after" &&
          template.featured_image
            ? `
              <div class="cozy-portfolio-gallery__featured-image-wrapper">
                <div class='cozy-portfolio-gallery__image-overlay'></div>
                <img
                  class="cozy-portfolio-gallery__featured-image"
                  src='${template.featured_image}'
                  alt='${template.post_title}'
                />
              </div>
            `
            : ""
        }
      
        ${
          blockOptions.layoutType !== "gallery" &&
          blockOptions.linkURL &&
          template.post_url
            ? `</a>`
            : ""
        }
      `;

        const layoutWrapper = cozyPortfolio.querySelector(
          ".cozy-layout-" + blockOptions.layout
        );

        if (layoutWrapper) {
          // Append the wrapperDiv to layoutWrapper and then fadeIn
          $(layoutWrapper).append(wrapperDiv).children(":last").fadeIn("slow");
        }
      });
    }

    // Function to compare two dates in ascending order
    function compareDatesAsc(a, b) {
      const dateA = new Date(a.post_date_gmt);
      const dateB = new Date(b.post_date_gmt);
      return dateA - dateB;
    }

    // Function to compare two dates in descending order
    function compareDatesDesc(a, b) {
      const dateA = new Date(a.post_date_gmt);
      const dateB = new Date(b.post_date_gmt);
      return dateB - dateA;
    }

    // Function to compare post_title alphabetically in descending order
    function compareTitlesDesc(a, b) {
      const titleA = a.post_title.toLowerCase();
      const titleB = b.post_title.toLowerCase();
      if (titleA > titleB) {
        return -1;
      }
      if (titleA < titleB) {
        return 1;
      }
      return 0;
    }

    // Function to compare post_title alphabetically in ascending order
    function compareTitlesASC(a, b) {
      const titleA = a.post_title.toLowerCase();
      const titleB = b.post_title.toLowerCase();
      if (titleA < titleB) {
        return -1;
      }
      if (titleA > titleB) {
        return 1;
      }
      return 0;
    }

    // Search Query
    $("#cozy-isotope-filter__search-bar").keyup(function () {
      const searchValue = $(this).val().toLowerCase();
      const originalItems = [...blockOptions.portfolioTemplates];

      originalItems.filter(function (template) {
        if (!template.post_title.toLowerCase().includes(searchValue)) {
          $(`[data-post-id="${template.ID}"]`).hide();
        } else {
          $(`[data-post-id="${template.ID}"]`).show();
        }
      });
    });

    // Returns slicing portfolio collection with existing content.
    function generatePortfolioTemplates() {
      const portfolioCollection = cozyPortfolio.querySelectorAll(
        ":not(.layout-carousel) .cozy-portfolio"
      );

      const visibleIDS = Array.from(portfolioCollection).map((item) => {
        return item.getAttribute("data-post-id");
      });

      if (
        blockOptions.layout === "grid" &&
        !blockOptions.gridOptions.isotopeFilter
      ) {
        const newTemplates = blockOptions.portfolioTemplates.filter((obj) => {
          return visibleIDS.every((id) => parseInt(id) !== obj.ID);
        });
        return newTemplates;
      }

      if (
        blockOptions.layout === "grid" &&
        blockOptions.gridOptions.isotopeFilter
      ) {
        const activeIsotopeLabel = cozyPortfolio.querySelector(
          ".cozy-isotope-filter__label.active"
        );

        const termID = activeIsotopeLabel.getAttribute("data-term-id");
        let newTemplates = [];
        const originalItems = [...blockOptions.portfolioTemplates];

        const portfolioCollection = cozyPortfolio.querySelectorAll(
          ":not(.layout-carousel) .cozy-portfolio"
        );

        const visibleIDS = Array.from(portfolioCollection).map((item) => {
          return item.getAttribute("data-post-id");
        });

        if (termID !== "") {
          newTemplates = originalItems.filter((obj) => {
            if (Array.isArray(obj?.post_custom_category)) {
              return (
                visibleIDS.every((id) => parseInt(id) !== obj.ID) &&
                obj.post_custom_category.some(
                  (category) => category.term_id === parseInt(termID)
                )
              );
            } else {
              return false;
            }
          });
        } else {
          newTemplates = originalItems.filter((obj) => {
            return visibleIDS.every((id) => parseInt(id) !== obj.ID);
          });
        }
        return newTemplates;
      }
    }

    if (loaderButton) {
      if (blockOptions.source === "template") {
        hideLoaderButton();

        loaderButton.addEventListener("click", function () {
          const newTemplates = generatePortfolioTemplates();
          createPortfolioTemplateDOM(
            newTemplates.slice(0, blockOptions.ajaxButton.contentLoad)
          );

          hideLoaderButton();
        });
      }
    }

    function hideLoaderButton(termID = null) {
      $(loaderButton).show();
      const nextShow = generatePortfolioTemplates();

      if (
        blockOptions.layout === "grid" &&
        blockOptions.gridOptions.isotopeFilter &&
        termID
      ) {
        const originalTax = [...blockOptions.portfolioTax];
        const taxCount = originalTax
          .filter((tax) => tax.term_id === parseInt(termID))
          .map((item) => item.count)[0];

        if (taxCount === 1) {
          $(loaderButton).hide();
        }
        return;
      }

      if (nextShow.length <= 0) {
        $(loaderButton).hide();
      }
    }

    // Popup View
    const cozyPopup = cozyPortfolio.querySelector(".cozy-portfolio-popup");

    const galleryContainer = cozyPortfolio.querySelector(
      ".cozy-gallery__swiper-container"
    );
    let gallerySlider = {};
    //Add cozy-overlay-wrapper only if it does not exists
    const ancestorDiv = document.querySelector(".wp-site-blocks");
    const hasChildDiv = document.querySelector(
      ".wp-site-blocks > .cozy-overlay-wrapper"
    );
    const body = document.querySelector("body");
    if (hasChildDiv === null) {
      const overlayWrapper = document.createElement("div");
      overlayWrapper.className = "cozy-overlay-wrapper visibility-none";
      ancestorDiv.appendChild(overlayWrapper);
    }
    const cozyOverlay = document.querySelector(".cozy-overlay-wrapper");
    cozyPortfolio.addEventListener("click", function (event) {
      const popup = event.target.closest(
        ".cozy-block-portfolio-gallery.has-popup-view .cozy-portfolio"
      );
      if (popup) {
        const ID = popup.getAttribute("data-post-id");
        const template = blockOptions.portfolioTemplates.filter(
          (obj) => obj.ID === parseInt(ID)
        );

        if (
          !blockOptions.linkURL ||
          template[0].post_url.length <= 0 ||
          template[0].post_url === "#"
        ) {
          generatePopupView(template[0]);

          $(cozyPopup).removeClass("hide-popup");
          $(cozyPopup).addClass("show-popup");

          // Show cozy overlay wrapper
          cozyOverlay.style.backgroundColor = blockOptions.popup.overlayWrapper;
          cozyOverlay.classList.remove("visibility-none");
          body.classList.add("overflow-hidden");
          if (portfolioSlider) {
            portfolioSlider.autoplay.stop();
          }
        }
      }

      const galleryItem = event.target.closest(
        ".cozy-block-portfolio-gallery.layout-type-gallery > .cozy-layout-wrapper > .cozy-portfolio"
      );

      if (galleryContainer && galleryItem && blockOptions.layout === "grid") {
        galleryContainer.classList.remove("hide-cozy-gallery");

        const activeIsotopeLabel = cozyPortfolio.querySelector(
          ".cozy-isotope-filter__label.active"
        );

        let termID = null;

        if (activeIsotopeLabel) {
          termID = activeIsotopeLabel.getAttribute("data-term-id");
        }

        let newTemplates = [];
        const originalItems = [...blockOptions.portfolioTemplates];

        if (termID && termID !== "") {
          // Apply filtering logic to original items
          newTemplates = originalItems.filter((obj) => {
            if (Array.isArray(obj?.post_custom_category)) {
              return obj.post_custom_category.some(
                (category) => category.term_id === parseInt(termID)
              );
            } else {
              return false;
            }
          });

          // Find the index of the object with the desired ID
          const activeIndex = newTemplates.findIndex(
            (obj) => obj.ID === parseInt($(galleryItem).attr("data-post-id"))
          );

          if (activeIndex !== -1) {
            // Remove the object from its current position
            const [movedObj] = newTemplates.splice(activeIndex, 1);

            // Add the object at the beginning of the newTemplates
            newTemplates.unshift(movedObj);
          }

          generateCozyGallery(newTemplates);
        } else {
          // Find the index of the object with the desired ID
          const activeIndex = originalItems.findIndex(
            (obj) => obj.ID === parseInt($(galleryItem).attr("data-post-id"))
          );

          if (activeIndex !== -1) {
            // Remove the object from its current position
            const [movedObj] = originalItems.splice(activeIndex, 1);

            // Add the object at the beginning of the originalItems
            originalItems.unshift(movedObj);
          }

          generateCozyGallery(originalItems);
        }

        gallerySlider = new Swiper(
          portfolioClass + " .cozy-gallery__swiper-container",
          {
            init: true,
            slidesPerView: 1,
            navigation: {
              nextEl: `${portfolioClass} > .cozy-gallery__swiper-container > .swiper-button-next.cozy-gallery-next`,
              prevEl: `${portfolioClass} > .cozy-gallery__swiper-container > .swiper-button-prev.cozy-gallery-prev`,
            },
            loop: false,
            speed: 800,
          }
        );

        cozyOverlay.style.backgroundColor = blockOptions.popup.overlayWrapper;
        cozyOverlay.classList.remove("visibility-none");
        body.classList.add("overflow-hidden");
      }
    });

    const popupCloseIcon = cozyPortfolio.querySelector(
      ".cozy-popup-icon.popup-close-icon"
    );
    $(popupCloseIcon).on("click", function () {
      $(cozyPopup).addClass("hide-popup");
      $(cozyPopup).removeClass("show-popup");

      // Hide cozy overlay wrapper
      body.classList.remove("overflow-hidden");
      cozyOverlay.classList.add("visibility-none");
      cozyOverlay.style.backgroundColor = "#c3c3c3";

      if (portfolioSlider) {
        portfolioSlider.autoplay.start();
      }
    });

    cozyOverlay.addEventListener("click", function () {
      body.classList.remove("overflow-hidden");
      this.classList.add("visibility-none");
      $(cozyPopup).addClass("hide-popup");
      $(cozyPopup).removeClass("show-popup");
      cozyOverlay.style.backgroundColor = "#c3c3c3";

      $(galleryContainer).addClass("hide-cozy-gallery");

      if (portfolioSlider) {
        portfolioSlider.autoplay.start();
      }

      if (gallerySlider && Object.keys(gallerySlider).length > 0) {
        gallerySlider.destroy();
      }
    });

    function generatePopupView(template) {
      const featuredImage = cozyPopup.querySelector(
        ".cozy-portfolio-gallery__featured-image"
      );
      const title = cozyPopup.querySelector(".cozy-portfolio-gallery__title");
      const portfolioCategory = cozyPopup.querySelector(
        ".cozy-portfolio-gallery__category"
      );
      const projectYear = cozyPopup.querySelector(
        ".cozy-portfolio-gallery__project-year"
      );
      const client = cozyPopup.querySelector(".cozy-portfolio-gallery__client");
      const skills = cozyPopup.querySelector(".cozy-portfolio-gallery__skills");
      const content = cozyPopup.querySelector(
        ".cozy-portfolio-gallery__content"
      );

      const defaultContent = cozyPopup.querySelector(
        ".cozy-popup-content__default"
      );
      const stickyContent = cozyPopup.querySelector(
        ".cozy-popup-content__sticky"
      );
      const cptContent = stickyContent.querySelector(
        ".cozy-portfolio-gallery__cpt"
      );

      if (featuredImage) {
        if (!template.featured_image) {
          $(featuredImage).hide();
        } else {
          $(featuredImage).show();

          featuredImage.setAttribute(
            "src",
            template.featured_image ? template.featured_image : ""
          );
          featuredImage.setAttribute("alt", template.post_title);
        }
      }

      title.innerHTML = template.post_title;

      portfolioCategory.innerHTML = ``;
      if (
        Array.isArray(template.post_custom_category) &&
        template.post_custom_category.length > 0
      ) {
        template.post_custom_category.map((category) => {
          portfolioCategory.innerHTML += `<span class="cozy-portfolio-gallery__category-label" key="${category.term_id}">${category.name}</span>`;
        });
      }

      if (
        template.post_project_year.length > 0 ||
        template.post_client.length > 0 ||
        template.post_skills.length > 0
      ) {
        cptContent.style.setProperty("display", "block");
      } else {
        cptContent.style.setProperty("display", "none");
      }

      projectYear.innerHTML = ``;
      if (template.post_project_year.length > 0) {
        projectYear.innerHTML += `<h3 class="cozy-portfolio-gallery__subtitle">Project Year</h3>`;
        projectYear.innerHTML += `<p class="cozy-portfolio-gallery__cpt-content">${template.post_project_year}</p>`;
      }

      client.innerHTML = ``;
      if (template.post_client.length > 0) {
        client.innerHTML += `<h3 class="cozy-portfolio-gallery__subtitle">Client</h3>`;
        client.innerHTML += `<p class="cozy-portfolio-gallery__cpt-content">${template.post_client}</p>`;
      }

      skills.innerHTML = ``;
      if (template.post_skills.length > 0) {
        skills.innerHTML += `<h3 class="cozy-portfolio-gallery__subtitle">Skills/Technology</h3>`;
        skills.innerHTML += `<p class="cozy-portfolio-gallery__cpt-content">${template.post_skills}</p>`;
      }

      content.innerHTML = template.render;
    }

    function generateCozyGallery(templates) {
      const galleryWrapper = cozyPortfolio.querySelector(
        ".cozy-gallery__swiper-container .swiper-wrapper"
      );

      $(galleryWrapper).empty();

      templates.forEach((template) => {
        const wrapperDiv = document.createElement("div");

        wrapperDiv.className =
          "cozy-portfolio swiper-slide post-ID__" + template.ID;
        wrapperDiv.setAttribute("data-post-id", template.ID);

        wrapperDiv.innerHTML = `
        ${
          blockOptions.featuredImage.position === "before" &&
          template.featured_image
            ? `
            <img
              class="cozy-portfolio-gallery__featured-image"
              src='${template.featured_image}'
              alt='${template.post_title}'
            />
          `
            : ""
        }
          <a href='${
            template.post_url.length > 1 ? template.post_url : "#"
          }' target='${
          template.post_url.length > 1 ? "_blank" : ""
        }' rel='noopener'>
            <h2 class="cozy-portfolio-gallery__title">
            ${template.post_title}
            </h2>
          </a>

        ${
          blockOptions.featuredImage.position === "after" &&
          template.featured_image
            ? `
            <div class='cozy-portfolio-gallery__image-overlay'>
            </div>
            <img
              class="cozy-portfolio-gallery__featured-image"
              src='${template.featured_image}'
              alt='${template.post_title}'
            />
          `
            : ""
        }

        `;

        if (galleryWrapper) {
          // Append the wrapperDiv to galleryWrapper and then fadeIn
          $(galleryWrapper).append(wrapperDiv).children(":last").fadeIn("slow");
        }
      });
    }
  };

  window["cozyBlockMegaMenuInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyMegaMenu_${n}`];
    const megaMenuClass = `#cozyBlock_${n}`;
    const cozyMegaMenu = document.querySelector(megaMenuClass);

    const responsiveOpenIcon = cozyMegaMenu.querySelector(
      ".cozy-responsive-icon__wrapper.open-icon-wrapper"
    );
    const responsiveCloseIcon = cozyMegaMenu.querySelector(
      ".cozy-responsive-icon__wrapper.close-icon-wrapper"
    );

    const cozyNavMenu = cozyMegaMenu.querySelector(
      ".cozy-block-navigation-menu"
    );
    displayResponsiveMenu(cozyNavMenu);
    window.addEventListener("resize", function () {
      displayResponsiveMenu(cozyNavMenu);
    });

    function displayResponsiveMenu(cozyNavMenu) {
      const viewWidth = window.innerWidth;

      const displayEvent = "event-" + blockOptions.displayEvent;
      if (viewWidth <= blockOptions.responsive.width) {
        responsiveOpenIcon.classList.remove("display-none");
        cozyNavMenu.classList.add("display-none");

        if (blockOptions.displayEvent === "hover") {
          cozyMegaMenu.classList.remove(displayEvent);
          cozyMegaMenu.classList.add("event-click");
        }
      } else {
        responsiveOpenIcon.classList.add("display-none");
        cozyNavMenu.classList.remove("display-none");
        cozyNavMenu.classList.remove("full-screen");

        if (!cozyNavMenu.classList.contains("full-screen")) {
          responsiveCloseIcon.classList.add("display-none");
        }

        if (blockOptions.displayEvent === "hover") {
          cozyMegaMenu.classList.add(displayEvent);
          cozyMegaMenu.classList.remove("event-click");
        }
      }
    }

    responsiveOpenIcon.addEventListener("click", function () {
      cozyNavMenu.classList.remove("display-none");
      cozyNavMenu.classList.add("full-screen");

      if (cozyNavMenu.classList.contains("full-screen")) {
        responsiveCloseIcon.classList.remove("display-none");

        if (blockOptions.displayEvent === "hover") {
          navSubmenu.forEach((submenu) => {
            addSubmenuClickEvent(submenu);
          });

          cozyNavItem.forEach((navItem) => {
            addMegaMenuClickEvent(navItem, cozyNavItem);
          });
        }
      } else {
        responsiveCloseIcon.classList.add("display-none");
      }
    });

    responsiveCloseIcon.addEventListener("click", function () {
      cozyNavMenu.classList.add("display-none");
      cozyNavMenu.classList.remove("full-screen");
    });

    // Mega menu navigation item.
    const cozyNavItem = cozyMegaMenu.querySelectorAll(".cozy-mega-menu__item");

    // Hide all cozy mega menu dropdown content elements.
    function hideDisplayedMegaMenu(cozyNavItem, dropdownContent) {
      cozyNavItem.forEach((item) => {
        const content = item.querySelector(".cozy-block-mega-menu__dropdown");
        if (content !== dropdownContent || dropdownContent === null) {
          content.classList.remove("show-cozy-dropdown-content");
        }
      });
    }

    const navSubmenu = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation-submenu.has-child"
    );
    const navSubmenuContainers = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation__submenu-container"
    );
    function hideAllSubmenus() {
      navSubmenuContainers.forEach((container) => {
        container.classList.remove("show-cozy-dropdown-content");
      });
    }

    function hideSiblings(element) {
      const siblings = $(element).siblings(
        ".wp-block-navigation-submenu.has-child"
      );

      siblings.map((index) => {
        const el = siblings[index];
        const submenuChild = el.querySelector(
          ".wp-block-navigation__submenu-container"
        );
        submenuChild.classList.remove("show-cozy-dropdown-content");
      });
    }

    function toggleSubmenu(submenuContainer, event) {
      hideSiblings(submenuContainer.parentNode);

      submenuContainer.classList.toggle("show-cozy-dropdown-content");
    }

    function addSubmenuClickEvent(submenu) {
      submenu.addEventListener("click", function (e) {
        // Hide Mega menu if any displayed.
        hideDisplayedMegaMenu(cozyNavItem, null);

        const submenuContainer = this.querySelector(
          ".wp-block-navigation__submenu-container"
        );

        if (submenuContainer) {
          e.stopPropagation();

          toggleSubmenu(submenuContainer, e);
        }
      });
    }

    function addMegaMenuClickEvent(navItem, cozyNavItem) {
      const dropdownContent = navItem.querySelector(
        ".cozy-block-mega-menu__dropdown"
      );

      navItem.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        hideAllSubmenus();
        hideDisplayedMegaMenu(cozyNavItem, dropdownContent);
        dropdownContent.classList.toggle("show-cozy-dropdown-content");
      });
    }

    function renderDropdownIcon(submenu) {
      if (blockOptions.icon.enabled) {
        const itemContent = submenu.querySelector(
          ".wp-block-navigation-item__content"
        );

        // Create icon wrapper element
        var iconWrapper = document.createElement("div");
        iconWrapper.className = "cozy-dropdown-icon-wrapper";
        iconWrapper.innerHTML = `
          <svg
            class="cozy-dropdown-icon"
            width="${blockOptions.icon.size}"
            height="${blockOptions.icon.size}"
            ${
              blockOptions.icon.layout === "fill"
                ? "stroke='none' fill='" + blockOptions.icon.color + "'"
                : ""
            }
            ${
              blockOptions.icon.layout === "outline"
                ? "fill='none' stroke='" + blockOptions.icon.color + "'"
                : ""
            }
            viewBox="${blockOptions.icon.viewBox.vx} ${
          blockOptions.icon.viewBox.vy
        } ${blockOptions.icon.viewBox.vw} ${blockOptions.icon.viewBox.vh}"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
          >
            <path d="${blockOptions.icon.path}"/>
          </svg>
        `;

        //Check if '.cozy-dropdown-icon-wrapper' exists.
        const iconWrapperExists = submenu.querySelector(
          ".cozy-dropdown-icon-wrapper"
        );

        if (!iconWrapperExists) {
          itemContent.parentNode.insertBefore(
            iconWrapper,
            itemContent.nextSibling
          );
        }
      }
    }

    navSubmenu.forEach((submenu) => {
      renderDropdownIcon(submenu);

      if (blockOptions.displayEvent === "click") {
        addSubmenuClickEvent(submenu);
      }
    });

    //Render mega menu template content in dropdown div.
    const dropdownItem = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation-item.cozy-mega-menu__item"
    );
    dropdownItem.forEach((item) => {
      const template = blockOptions.megaMenuTemplates.filter((template) =>
        item.classList.contains("template-id-" + template.ID)
      );

      renderDropdownIcon(item);

      const dropdownContent = document.createElement("div");
      dropdownContent.className = "cozy-block-mega-menu__dropdown";

      dropdownContent.innerHTML = template[0].render;

      item.appendChild(dropdownContent);
    });

    // Adding click event for display event "click".
    if (
      blockOptions.displayEvent === "click" ||
      cozyNavMenu.classList.contains("full-screen")
    ) {
      cozyNavItem.forEach((navItem) => {
        addMegaMenuClickEvent(navItem, cozyNavItem);
      });
    }

    // Add a click event listener to the document
    document.addEventListener("click", function (event) {
      const cozyMenuWrapper = document.querySelector(".cozy-menu-wrapper");
      // Check if the clicked element is inside the .cozy-menu-wrapper
      if (!cozyMenuWrapper.contains(event.target)) {
        hideAllSubmenus();
        hideDisplayedMegaMenu(cozyNavItem, null);
      }
    });
  };

  window["cozyBlockProductReviewInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductReview_${n}`];
    const productReviewClass = `#cozyBlock_${n}`;
    const cozyProductReview = document.querySelector(productReviewClass);

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productReviewClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productReviewClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productReviewClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    }

    const productSlider = new Swiper(
      productReviewClass +
        ".layout-carousel .cozy-product-review__swiper-container",
      sliderAttr
    );

    const reviewWrapper = cozyProductReview.querySelector(
      ".woo-product-review-wrapper"
    );

    const loaderButton = cozyProductReview.querySelector(
      ".cozy-dynamic-loader"
    );
    const commentIDs = [];
    let commentsToShow = [];
    if (loaderButton) {
      loaderButton.addEventListener("click", function () {
        const shownReviews = cozyProductReview.querySelectorAll(
          ".woo-product-review"
        );
        shownReviews.forEach((review) => {
          const commentID = review.getAttribute("data-comment-id");

          if (commentID) {
            // Check if the attribute value exists before pushing it to the array
            commentIDs.push(commentID);
          }
        });

        if (blockOptions.woo_product_comments.length > 0) {
          const filteredComments = blockOptions.woo_product_comments.filter(
            (comment) => !commentIDs.includes(comment.comment_ID)
          );

          commentsToShow = filteredComments.slice(
            0,
            blockOptions.ajaxButton.contentLoad
          );

          const reviewTemplate = generateReviewTemplate(
            commentsToShow,
            blockOptions,
            productReviewClass
          );
          reviewTemplate.map((template, index) => {
            const tempContainer = document.createElement("li");

            // Set the HTML content of the container
            tempContainer.innerHTML = template;
            tempContainer.className = "woo-product-review visibility-hidden";
            tempContainer.setAttribute(
              "data-comment-id",
              commentsToShow[index].comment_ID
            );

            reviewWrapper.appendChild(tempContainer);

            setTimeout(() => {
              tempContainer.classList.remove("visibility-hidden");
              tempContainer.classList.add("visibility-visible");
            }, 230);
          });

          const nextShow = filteredComments.slice(
            commentsToShow.length,
            commentsToShow.length + blockOptions.ajaxButton.contentLoad
          );
          if (nextShow.length <= 0) {
            loaderButton.classList.add("display-none");
          }
        }
      });
    }

    function generateReviewTemplate(
      commentsToShow,
      attributes,
      productReviewClass
    ) {
      const reviewTemplateString = [];

      const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];

      commentsToShow.map((review) => {
        const dateString = review.comment_date;
        const dateObject = new Date(dateString);

        const day = dateObject.getDate();
        let month = months[dateObject.getMonth()];
        const year = dateObject.getFullYear();

        const formattedDay = day < 10 ? "0" + day : day;

        let formattedDate = "";

        if (attributes.reviewTitle.dateAbbr) {
          month = month.slice(0, 3);
        }

        if (attributes.reviewTitle.dateFormat === "d-m-y") {
          formattedDate = `${formattedDay} ${month}, ${year}`;
        }

        if (attributes.reviewTitle.dateFormat === "m-d-y") {
          formattedDate = `${month} ${formattedDay}, ${year}`;
        }

        const htmlTemplateString = `
        <style>
          ${productReviewClass} .product-rating-wrapper[data-rating="${
          review.product_rating
        }"]:before {
            --percent: calc(${parseFloat(review.product_rating)}/5*100%);
            background: linear-gradient(90deg, ${
              attributes.reviewTitle.ratingColor
            } var(--percent), rgba(0,0,0,0.2) var(--percent));

          }
        </style>
        ${
          attributes.enableOptions.reviewContent &&
          attributes.reviewContent.position === "top"
            ? `
              <div class="review-content-wrapper">
                <div class="review-content">
                  ${wp.i18n.__(review.comment_content, "cozy-addons")}
                </div>
              </div>
            `
            : ""
        }
      
        <div class="display-grid">
          ${
            attributes.enableOptions.image
              ? `
                <figure class="review-image">
                  ${
                    attributes.imageType === "user"
                      ? `<img src=${review.user_avatar} />`
                      : ""
                  }
                  ${
                    attributes.imageType === "product"
                      ? `<img src=${review.product_image_url} />`
                      : ""
                  }
                </figure>
              `
              : ""
          }
      
          <div class="display-flex flex-column align-start">
            <div class="display-flex">
              ${
                attributes.enableOptions.productName
                  ? `
                    <a
                      class="product-name"
                      href=${review.product_url}
                      rel="noopener"
                      target="_blank"
                    >
                      ${wp.i18n.__(review.product_name, "cozy-addons")}
                    </a>
                  `
                  : ""
              }
      
              ${
                attributes.enableOptions.productRating
                  ? `
                    <div
                      class="product-rating-wrapper"
                      data-rating=${review.product_rating}
                    ></div>
                  `
                  : ""
              }
            </div>
      
            <div class="display-flex">
              ${
                attributes.enableOptions.reviewerName
                  ? `<div class="reviewer-name">${review.reviewer_name}</div>`
                  : ""
              }
      
              ${
                attributes.enableOptions.reviewDate
                  ? `<time class="review-date">${formattedDate}</time>`
                  : ""
              }
            </div>
          </div>
        </div>
      
        ${
          attributes.enableOptions.reviewContent &&
          attributes.reviewContent.position === "bottom"
            ? `
              <div class="review-content-wrapper">
                <div class="review-content">
                  ${wp.i18n.__(review.comment_content, "cozy-addons")}
                </div>
              </div>
            `
            : ""
        }
      `;

        reviewTemplateString.push(htmlTemplateString);
      });

      return reviewTemplateString;
    }
  };

  window["cozyBlockProductCategoryInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductCategory_${n}`];
    const productCategoryClass = `#cozyBlock_${n}`;
    const cozyProductCategory = document.querySelector(productCategoryClass);

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productCategoryClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productCategoryClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productCategoryClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    }

    const productSlider = new Swiper(
      productCategoryClass +
        ".layout-carousel.cozy-product-category__swiper-container",
      sliderAttr
    );
  };

  window["cozyBlockProductCarouselInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductCarousel_${n}`];
    const productCarouselClass = `#cozyBlock_${n}`;
    const cozyProductCarousel = document.querySelector(productCarouselClass);

    const innerBlocks = cozyProductCarousel.querySelectorAll(".wp-block-post");

    innerBlocks.forEach((block) => {
      if (blockOptions.layout === "carousel") {
        block.classList.add("swiper-slide"); // Add your custom class here
      } else {
        block.classList.remove("swiper-slide"); // Remove your custom class here
      }

      const price = block.querySelector(
        ".wc-block-components-product-price ins .amount bdi"
      );
      const regularPrice = block.querySelector(
        ".wc-block-components-product-price del .amount bdi"
      );

      if (price && blockOptions.saleBadge.enabled) {
        let saleBadge = block.querySelector(".cozy-sale-badge");

        if (!saleBadge) {
          // Create a new div element
          saleBadge = document.createElement("div");
          saleBadge.className = "cozy-sale-badge";
        }

        // Appending contents inside cozy-sale-badge
        let labelBefore = saleBadge.querySelector(".label-before");
        if (!labelBefore) {
          labelBefore = document.createElement("div");
          labelBefore.className = "label-before";
        }
        labelBefore.textContent = blockOptions.saleBadge.labelBefore;

        let content = saleBadge.querySelector(".content");
        if (!content) {
          content = document.createElement("div");
          content.className = "content";
        }
        content.textContent = "";
        const priceNumberOnly = parseFloat(
          price.textContent.replace(/[^\d.]/g, "")
        );
        const regularNumberOnly = parseFloat(
          regularPrice.textContent.replace(/[^\d.]/g, "")
        );
        if (blockOptions.saleBadge.contentType === "default") {
          content.textContent = "Sale";
        }
        if (blockOptions.saleBadge.contentType === "amount") {
          switch (blockOptions.currencyPosition) {
            case "left":
              content.textContent =
                blockOptions.currencySymbol +
                (regularNumberOnly - priceNumberOnly);
              break;
            case "left_space":
              content.textContent =
                blockOptions.currencySymbol +
                " " +
                (regularNumberOnly - priceNumberOnly);
              break;
            case "right":
              content.textContent =
                regularNumberOnly -
                priceNumberOnly +
                blockOptions.currencySymbol;
              break;
            case "right_space":
              content.textContent =
                regularNumberOnly -
                priceNumberOnly +
                " " +
                blockOptions.currencySymbol;
              break;

            default:
              break;
          }
        }
        if (blockOptions.saleBadge.contentType === "percent") {
          const percent =
            ((regularNumberOnly - priceNumberOnly) / regularNumberOnly) * 100;
          content.textContent = Number(percent.toFixed(2)).toString() + "%";
        }

        let labelAfter = saleBadge.querySelector(".label-after");
        if (!labelAfter) {
          labelAfter = document.createElement("div");
          labelAfter.className = "label-after";
        }
        labelAfter.textContent = blockOptions.saleBadge.labelAfter;

        saleBadge.appendChild(labelBefore);
        saleBadge.appendChild(content);
        saleBadge.appendChild(labelAfter);

        block.appendChild(saleBadge);
      }
    });

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productCarouselClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productCarouselClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productCarouselClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    }

    const productSlider = new Swiper(
      productCarouselClass + " .cozy-product-carousel__swiper-container",
      sliderAttr
    );
  };

  window["cozyBlockSliderInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`slider_${n}`];
    const swiperClass = `#cozyBlock_${n}`;
    const cozySlider = document.querySelector(swiperClass);

    let swiperAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      speed: blockOptions.sliderOptions.speed,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      navigation: {
        nextEl: `${swiperClass} .cozy-block-button-next`,
        prevEl: `${swiperClass} .cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${swiperClass} .swiper-pagination`,
        dynamicBullets: blockOptions.pagination.dynamicBullets,
      },
      effect: blockOptions.sliderOptions.effect,
      fadeEffect: {
        crossFade: true,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
      // parallax: true,
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      swiperAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    }

    const slider = new Swiper(swiperClass, swiperAttr);
  };

  window["cozyBlockContainerInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyContainer_${n}`];
    const containerClass = `#cozyBlock_${n}`;
    const cozyContainer = document.querySelector(containerClass);

    if (blockOptions.animation.effect === "none") {
      cozyContainer.classList.remove("visibility-none");
    }
    const containerStyles = [
      {
        property: "--cozyContainerMargin",
        value: `${blockOptions.margin.top}px ${blockOptions.margin.right}px ${blockOptions.margin.bottom}px ${blockOptions.margin.left}px`,
      },
      {
        property: "--cozyContainerPadding",
        value: `${blockOptions.padding.top}px ${blockOptions.padding.right}px ${blockOptions.padding.bottom}px ${blockOptions.padding.left}px`,
      },
      {
        property: "--cozyContainerBorderRadius",
        value: `${blockOptions.borderRadius.topL}px ${blockOptions.borderRadius.topR}px ${blockOptions.borderRadius.bottomR}px ${blockOptions.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyContainerBorderRadiusHover",
        value: `${
          blockOptions.borderRadiusHover.topL.length !== 0
            ? blockOptions.borderRadiusHover.topL
            : blockOptions.borderRadius.topL
        }px ${
          blockOptions.borderRadiusHover.topR.length !== 0
            ? blockOptions.borderRadiusHover.topR
            : blockOptions.borderRadius.topR
        }px ${
          blockOptions.borderRadiusHover.bottomR.length !== 0
            ? blockOptions.borderRadiusHover.bottomR
            : blockOptions.borderRadius.bottomR
        }px ${
          blockOptions.borderRadiusHover.bottomL.length !== 0
            ? blockOptions.borderRadiusHover.bottomL
            : blockOptions.borderRadius.bottomL
        }px`,
      },
      {
        property: "--cozyContainerZIndex",
        value: blockOptions.zIndex,
      },
      {
        property: "--cozyContainerEffectFade",
        value: `cozyFade ${blockOptions.animation.duration}s forwards ${blockOptions.animation.delay}s`,
      },
    ];

    if (blockOptions.backgroundColorHover.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBgColorHover",
        value: blockOptions.backgroundColorHover,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBgColorHover",
        value: blockOptions.backgroundColor,
      });
    }

    if (blockOptions.border.type !== "none") {
      containerStyles.push({
        property: "--cozyContainerBorderWidth",
        value: `${blockOptions.border.widthDimension.top}px ${blockOptions.border.widthDimension.right}px ${blockOptions.border.widthDimension.bottom}px ${blockOptions.border.widthDimension.left}px`,
      });
      containerStyles.push({
        property: "--cozyContainerBorderType",
        value: blockOptions.border.type,
      });
      containerStyles.push({
        property: "--cozyContainerBorderColor",
        value: blockOptions.border.color,
      });
    }

    if (blockOptions.borderHover.type !== "none") {
      containerStyles.push({
        property: "--cozyContainerBorderWidthHover",
        value: `${blockOptions.borderHover.widthDimension.top}px ${blockOptions.borderHover.widthDimension.right}px ${blockOptions.borderHover.widthDimension.bottom}px ${blockOptions.borderHover.widthDimension.left}px`,
      });
      containerStyles.push({
        property: "--cozyContainerBorderTypeHover",
        value: blockOptions.borderHover.type,
      });
      if (blockOptions.borderHover.color.length > 0) {
        containerStyles.push({
          property: "--cozyContainerBorderColorHover",
          value: blockOptions.borderHover.color,
        });
      } else {
        containerStyles.push({
          property: "--cozyContainerBorderColorHover",
          value: blockOptions.border.color,
        });
      }
    }

    if (blockOptions.boxShadow.position.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBoxShadow",
        value: `${blockOptions.boxShadow.horizontal}px ${blockOptions.boxShadow.vertical}px ${blockOptions.boxShadow.blur}px ${blockOptions.boxShadow.spread}px ${blockOptions.boxShadow.color} inset`,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBoxShadow",
        value: `${blockOptions.boxShadow.horizontal}px ${blockOptions.boxShadow.vertical}px ${blockOptions.boxShadow.blur}px ${blockOptions.boxShadow.spread}px ${blockOptions.boxShadow.color}`,
      });
    }

    if (blockOptions.boxShadowHover.position.length > 0) {
      containerStyles.push({
        property: "--cozyContainerBoxShadowHover",
        value: `${blockOptions.boxShadowHover.horizontal}px ${blockOptions.boxShadowHover.vertical}px ${blockOptions.boxShadowHover.blur}px ${blockOptions.boxShadowHover.spread}px ${blockOptions.boxShadowHover.color} inset`,
      });
    } else {
      containerStyles.push({
        property: "--cozyContainerBoxShadowHover",
        value: `${blockOptions.boxShadowHover.horizontal}px ${blockOptions.boxShadowHover.vertical}px ${blockOptions.boxShadowHover.blur}px ${blockOptions.boxShadowHover.spread}px ${blockOptions.boxShadowHover.color}`,
      });
    }

    if (blockOptions.animation.effect === "fade") {
      switch (blockOptions.animation.direction) {
        case "left":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateX(-${blockOptions.animation.gap}px)`,
          });
          break;

        case "right":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateX(${blockOptions.animation.gap}px)`,
          });
          break;

        case "top":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateY(-${blockOptions.animation.gap}px)`,
          });
          break;

        case "bottom":
          containerStyles.push({
            property: "--cozyContainerTransformFade",
            value: `translateY(${blockOptions.animation.gap}px)`,
          });
          break;

        default:
          break;
      }
    }

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
          (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function addFadeAnimation() {
      if (isElementInViewport(cozyContainer)) {
        if (blockOptions.animation.effect !== "none") {
          cozyContainer.classList.add(
            "effect-" + blockOptions.animation.effect
          );
          cozyContainer.classList.remove("visibility-none");
        }
      }
    }

    function observeCozyContainer(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          cozyContainer.classList.add(
            "effect-" + blockOptions.animation.effect
          );
          cozyContainer.classList.remove("visibility-none");
        }
      });
    }
    // addFadeAnimation();
    const observer = new IntersectionObserver(observeCozyContainer, {
      root: null, // Use the viewport as the root
      rootMargin: "0px",
      threshold: 0.5,
    });

    function observeElement() {
      observer.observe(cozyContainer);
    }
    observeElement();

    const observerConfig = {
      childList: true, // Watch for changes in the children of the observed element
      subtree: true, // Watch for changes in the entire subtree
    };

    const domObserver = new MutationObserver(() => {
      // Disconnect the previous observer
      observer.disconnect();
      // Re-observe the target element
      observeElement();
    });

    // Start observing the document's DOM changes
    domObserver.observe(document, observerConfig);

    window.addEventListener("scroll", addFadeAnimation);

    containerStyles.forEach((style) => {
      cozyContainer.style.setProperty(style.property, style.value);
    });

    const stickyDiv = document.querySelector(
      ".cozy-block-wrapper.position-sticky " + containerClass
    );

    window.addEventListener("scroll", function () {
      const rect = stickyDiv.getBoundingClientRect();

      if (rect.top <= 0) {
        // The stickyDiv has touched or passed the top of the window
        cozyContainer.style.setProperty(
          "background",
          blockOptions.stickyStyles.bgColor
        );
      } else {
        cozyContainer.style.setProperty("background", "");
      }
    });
  };

  window["cozyBlockTeamsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyTeams_${n}`];
    const teamsClass = `#cozyBlock_${n}`;
    const cozyTeams = document.querySelector(teamsClass);

    const teamsStyles = [
      {
        property: "--cozyTeamsGridTemplateColumns",
        value: blockOptions.gridOptions.displayColumn,
      },
      {
        property: "--cozyTeamsGridGap",
        value: `${blockOptions.gridOptions.columnGap}px`,
      },
      {
        property: "--cozyNavIconSize",
        value: `${blockOptions.carouselOptions.navigation.iconSize}px`,
      },
      {
        property: "--cozyNavWidth",
        value: `${blockOptions.carouselOptions.navigation.iconBoxWidth}px`,
      },
      {
        property: "--cozyNavHeight",
        value: `${blockOptions.carouselOptions.navigation.iconBoxHeight}px`,
      },
      {
        property: "--cozyNavBorderRadius",
        value: `${blockOptions.carouselOptions.navigation.borderRadius}px`,
      },
      {
        property: "--cozyNavIconColor",
        value: blockOptions.carouselOptions.navigation.color,
      },
      {
        property: "--cozyNavIconColorHover",
        value: blockOptions.carouselOptions.navigation.colorHover,
      },
      {
        property: "--cozyNavBgColor",
        value: blockOptions.carouselOptions.navigation.backgroundColor,
      },
      {
        property: "--cozyNavBgColorHover",
        value: blockOptions.carouselOptions.navigation.backgroundColorHover,
      },
      {
        property: "--cozyPaginationWidth",
        value: `${blockOptions.carouselOptions.pagination.width}px`,
      },
      {
        property: "--cozyPaginationHeight",
        value: `${blockOptions.carouselOptions.pagination.height}px`,
      },
      {
        property: "--cozyPaginationBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.borderRadius}px`,
      },
      {
        property: "--cozyPaginationActiveWidth",
        value: `${blockOptions.carouselOptions.pagination.activeWidth}px`,
      },
      {
        property: "--cozyPaginationActiveBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.activeBorderRadius}px`,
      },
      {
        property: "--cozyPaginationColor",
        value: blockOptions.carouselOptions.pagination.color,
      },
      {
        property: "--cozyPaginationColorHover",
        value: blockOptions.carouselOptions.pagination.colorHover,
      },
      {
        property: "--cozyPaginationActiveColor",
        value: blockOptions.carouselOptions.pagination.activeColor,
      },
      {
        property: "--cozyPaginationActiveColorHover",
        value: blockOptions.carouselOptions.pagination.activeColorHover,
      },
      {
        property: "--cozyPaginationPositionVertical",
        value: `${blockOptions.carouselOptions.pagination.positionVertical}px`,
      },
    ];

    teamsStyles.forEach((style) => {
      cozyTeams.style.setProperty(style.property, style.value);
    });

    const carouselAttr = {
      init: true,
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      autoplay: { ...blockOptions.carouselOptions.sliderOptions.autoplay },
      centeredSlides: blockOptions.carouselOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${teamsClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${teamsClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${teamsClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView,
        },
      },
    };

    const carousel = new Swiper(teamsClass + ".swiper-container", carouselAttr);
  };

  window["cozyBlockTestimonialInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyTestimonial_${n}`];
    const testimonialClass = `#cozyBlock_${n}`;
    const cozyTestimonial = document.querySelector(testimonialClass);

    const testimonialStyles = [
      {
        property: "--cozyTestimonialGridTemplateColumns",
        value: blockOptions.gridOptions.displayColumn,
      },
      {
        property: "--cozyTestimonialGridGap",
        value: `${blockOptions.gridOptions.columnGap}px`,
      },
      {
        property: "--cozyNavIconSize",
        value: `${blockOptions.carouselOptions.navigation.iconSize}px`,
      },
      {
        property: "--cozyNavWidth",
        value: `${blockOptions.carouselOptions.navigation.iconBoxWidth}px`,
      },
      {
        property: "--cozyNavHeight",
        value: `${blockOptions.carouselOptions.navigation.iconBoxHeight}px`,
      },
      {
        property: "--cozyNavBorderRadius",
        value: `${blockOptions.carouselOptions.navigation.borderRadius}px`,
      },
      {
        property: "--cozyNavIconColor",
        value: blockOptions.carouselOptions.navigation.color,
      },
      {
        property: "--cozyNavIconColorHover",
        value: blockOptions.carouselOptions.navigation.colorHover,
      },
      {
        property: "--cozyNavBgColor",
        value: blockOptions.carouselOptions.navigation.backgroundColor,
      },
      {
        property: "--cozyNavBgColorHover",
        value: blockOptions.carouselOptions.navigation.backgroundColorHover,
      },
      {
        property: "--cozyPaginationWidth",
        value: `${blockOptions.carouselOptions.pagination.width}px`,
      },
      {
        property: "--cozyPaginationHeight",
        value: `${blockOptions.carouselOptions.pagination.height}px`,
      },
      {
        property: "--cozyPaginationBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.borderRadius}px`,
      },
      {
        property: "--cozyPaginationActiveWidth",
        value: `${blockOptions.carouselOptions.pagination.activeWidth}px`,
      },
      {
        property: "--cozyPaginationActiveBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.activeBorderRadius}px`,
      },
      {
        property: "--cozyPaginationColor",
        value: blockOptions.carouselOptions.pagination.color,
      },
      {
        property: "--cozyPaginationColorHover",
        value: blockOptions.carouselOptions.pagination.colorHover,
      },
      {
        property: "--cozyPaginationActiveColor",
        value: blockOptions.carouselOptions.pagination.activeColor,
      },
      {
        property: "--cozyPaginationActiveColorHover",
        value: blockOptions.carouselOptions.pagination.activeColorHover,
      },
      {
        property: "--cozyPaginationPositionVertical",
        value: `${blockOptions.carouselOptions.pagination.positionVertical}px`,
      },
    ];

    testimonialStyles.forEach((style) => {
      cozyTestimonial.style.setProperty(style.property, style.value);
    });

    const carouselAttr = {
      init: true,
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      autoplay: { ...blockOptions.carouselOptions.sliderOptions.autoplay },
      centeredSlides: blockOptions.carouselOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${testimonialClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${testimonialClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${testimonialClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView,
        },
      },
    };

    const carousel = new Swiper(
      testimonialClass + ".swiper-container",
      carouselAttr
    );
  };

  window["cozyBlockModalInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyModal_${n}`];
    const modalClass = `#cozyBlock_${n}`;
    const cozyModal = document.querySelector(modalClass);

    function getCookieValue(cookieName) {
      const name = cookieName + "=";
      const decodedCookie = decodeURIComponent(document.cookie);
      const cookieArray = decodedCookie.split(";");

      for (let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        while (cookie.charAt(0) === " ") {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
          return cookie.substring(name.length, cookie.length);
        }
      }
      return "";
    }
    //Add cozy-overlay-wrapper only if it does not exists
    const ancestorDiv = document.querySelector(".wp-site-blocks");
    const hasChildDiv = document.querySelector(
      ".wp-site-blocks > .cozy-overlay-wrapper"
    );
    const body = document.querySelector("body");
    if (hasChildDiv === null) {
      const overlayWrapper = document.createElement("div");
      overlayWrapper.className = "cozy-overlay-wrapper visibility-none";
      ancestorDiv.appendChild(overlayWrapper);
    }

    const cozyOverlay = document.querySelector(".cozy-overlay-wrapper");
    if (
      blockOptions.modalType === "default" &&
      blockOptions.modalEvent === "load"
    ) {
      const modalShown = getCookieValue(`cozyModal_${n}`);
      if (!blockOptions.loadOnRefresh && modalShown.length > 0) {
        return;
      }
      cozyOverlay.style.backgroundColor = blockOptions.backgroundOverlayColor;
      cozyOverlay.classList.remove("visibility-none");
      body.classList.add("overflow-hidden");
      cozyModal.classList.remove("display-none");

      if (!blockOptions.loadOnRefresh && modalShown.length <= 0) {
        const now = new Date();
        const expirationTime = new Date(now.getTime() + 30 * 60 * 1000);
        document.cookie = `cozyModal_${n}=true; expires=${expirationTime.toUTCString()}; path=/`;
      }
    }

    const closeButton = cozyModal.querySelector(`.modal-icon-wrapper`);
    if (closeButton !== null) {
      closeButton.addEventListener("click", function () {
        if (blockOptions.modalType === "default") {
          body.classList.remove("overflow-hidden");
          cozyOverlay.classList.add("visibility-none");
          cozyOverlay.style.backgroundColor = "#c3c3c3";
        }
        cozyModal.classList.add("display-none");
      });
    }

    if (
      blockOptions.modalType === "default" &&
      blockOptions.modalEvent === "click"
    ) {
      const openButton = cozyModal.previousSibling;
      openButton.addEventListener("click", function () {
        if (
          blockOptions.modalType === "default" &&
          blockOptions.modalEvent === "click"
        ) {
          cozyOverlay.style.backgroundColor =
            blockOptions.backgroundOverlayColor;

          body.classList.add("overflow-hidden");
          cozyOverlay.classList.remove("visibility-none");
        }
        cozyModal.classList.remove("display-none");
      });
    }

    //Overlay click closes modal for modal type default only
    if (blockOptions.modalType === "default") {
      cozyOverlay.addEventListener("click", function () {
        if (!cozyModal.classList.contains("display-none")) {
          body.classList.remove("overflow-hidden");
          this.classList.add("visibility-none");
          cozyModal.classList.add("display-none");
          cozyOverlay.style.backgroundColor = "#c3c3c3";
        }
      });
    }
  };

  window["cozyBlockDateTimeInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyDateTime_${n}`];
    const dateTimeClass = `#cozyBlock_${n}`;
    const cozyDateTime = document.querySelector(dateTimeClass);

    const dateTimeStyles = [
      {
        property: "--cozyDateTimePadding",
        value: `${blockOptions.layout.padding.top}px ${blockOptions.layout.padding.right}px ${blockOptions.layout.padding.bottom}px ${blockOptions.layout.padding.left}px`,
      },
      {
        property: "--cozyDateTimeDisplay",
        value: blockOptions.layout.display,
      },
      {
        property: "--cozyDateTimeFlexGap",
        value: `${blockOptions.layout.gap}px`,
      },
      {
        property: "--cozyDateTimeTextAlign",
        value: blockOptions.layout.textAlign,
      },
      {
        property: "--cozyDateTimeFontFamily",
        value: blockOptions.layout.styles.fontFamily,
      },
      {
        property: "--cozyDateTimeFontSize",
        value: `${blockOptions.layout.styles.fontSize}px`,
      },
      {
        property: "--cozyDateTimeFontWeight",
        value: blockOptions.layout.styles.fontWeight,
      },
      {
        property: "--cozyDateTimeBorderRadius",
        value: `${blockOptions.layout.borderRadius.topL}px ${blockOptions.layout.borderRadius.topR}px ${blockOptions.layout.borderRadius.bottomR}px ${blockOptions.layout.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyDateTimeColor",
        value: blockOptions.layout.styles.color,
      },
      {
        property: "--cozyDateTimeBgColor",
        value: blockOptions.layout.styles.bgColor,
      },
    ];

    if (blockOptions.date.enabled && blockOptions.time.enabled) {
      dateTimeStyles.push({
        property: "--cozyDateTimeMarginBottom",
        value: `${blockOptions.layout.marginBottom}px`,
      });
    }

    if (cozyDateTime !== null) {
      dateTimeStyles.forEach((style) => {
        cozyDateTime.style.setProperty(style.property, style.value);
      });
    }

    const timeStyles = [
      {
        property: "--cozyTimePadding",
        value: `${blockOptions.time.padding.top}px ${blockOptions.time.padding.right}px ${blockOptions.time.padding.bottom}px ${blockOptions.time.padding.left}px`,
      },
      {
        property: "--cozyTimeFontSize",
        value: `${blockOptions.time.styles.fontSize}px`,
      },
      {
        property: "--cozyTimeFontWeight",
        value: blockOptions.time.styles.fontWeight,
      },
      {
        property: "--cozyTimeBorderRadius",
        value: `${blockOptions.time.borderRadius.topL}px ${blockOptions.time.borderRadius.topR}px ${blockOptions.time.borderRadius.bottomR}px ${blockOptions.time.borderRadius.bottomL}px`,
      },
      {
        property: "--cozyTimeColor",
        value: blockOptions.time.styles.color,
      },
      {
        property: "--cozyTimeBgColor",
        value: blockOptions.time.styles.bgColor,
      },
    ];

    const cozyTime = cozyDateTime.querySelector(".cozy-time");
    if (cozyTime !== null) {
      timeStyles.forEach((style) => {
        cozyTime.style.setProperty(style.property, style.value);
      });
    }

    function updateTime(blockOptions, cozyDateTime) {
      var now = new Date();
      if (cozyDateTime) {
        const date = cozyDateTime.querySelector(".cozy-date");
        const time = cozyDateTime.querySelector(".cozy-time");

        const months = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];

        const daysInWeek = [
          "Sunday",
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
        ];

        const month = months[now.getMonth()];
        const day = now.getDate();
        const year = now.getFullYear();
        const week = daysInWeek[now.getDay()];

        document.getElementsByClassName("cozy-date").innerHtml = "Amun Pote";
        if (blockOptions.date.enabled) {
          if (blockOptions.date.format === "m-d-y") {
            date.innerHTML = `${
              blockOptions.week.enabled
                ? blockOptions.abbr
                  ? week.slice(0, 3) + " "
                  : week + " "
                : ""
            }${blockOptions.abbr ? month.slice(0, 3) : month} ${day}, ${year}`;
          } else {
            date.innerHTML = `${
              blockOptions.week.enabled
                ? blockOptions.abbr
                  ? week.slice(0, 3) + " "
                  : week + " "
                : ""
            }${day} ${blockOptions.abbr ? month.slice(0, 3) : month}, ${year}`;
          }
        }

        if (blockOptions.time.enabled) {
          time.innerHTML = now.toLocaleTimeString("en-US", {
            hour12: blockOptions.time.timeFormat,
          });
        }
      }

      setTimeout(() => updateTime(blockOptions, cozyDateTime), 1000);
    }

    updateTime(blockOptions, cozyDateTime);
  };

  window["cozyBlockPostSliderInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyPostSlider_${n}`];
    const postSliderClass = `#cozyBlock_${n}`;
    const cozyPostSlider = document.querySelector(postSliderClass);

    let swiperSlides = [];

    if (cozyPostSlider) {
      swiperSlides = cozyPostSlider.querySelectorAll(".wp-block-post");
    }
    swiperSlides.forEach((slide) => {
      slide.classList.add("swiper-slide"); // Add your custom class here
    });

    const postSliderStyles = [
      {
        property: "--cozyNavIconSize",
        value: `${blockOptions.carouselOptions.navigation.iconSize}px`,
      },
      {
        property: "--cozyNavWidth",
        value: `${blockOptions.carouselOptions.navigation.iconBoxWidth}px`,
      },
      {
        property: "--cozyNavHeight",
        value: `${blockOptions.carouselOptions.navigation.iconBoxHeight}px`,
      },
      {
        property: "--cozyNavBorderRadius",
        value: `${blockOptions.carouselOptions.navigation.borderRadius}px`,
      },
      {
        property: "--cozyNavIconColor",
        value: blockOptions.carouselOptions.navigation.color,
      },
      {
        property: "--cozyNavIconColorHover",
        value: blockOptions.carouselOptions.navigation.colorHover,
      },
      {
        property: "--cozyNavBgColor",
        value: blockOptions.carouselOptions.navigation.backgroundColor,
      },
      {
        property: "--cozyNavBgColorHover",
        value: blockOptions.carouselOptions.navigation.backgroundColorHover,
      },
      {
        property: "--cozyPaginationWidth",
        value: `${blockOptions.carouselOptions.pagination.width}px`,
      },
      {
        property: "--cozyPaginationHeight",
        value: `${blockOptions.carouselOptions.pagination.height}px`,
      },
      {
        property: "--cozyPaginationBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.borderRadius}px`,
      },
      {
        property: "--cozyPaginationActiveWidth",
        value: `${blockOptions.carouselOptions.pagination.activeWidth}px`,
      },
      {
        property: "--cozyPaginationActiveBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.activeBorderRadius}px`,
      },
      {
        property: "--cozyPaginationColor",
        value: blockOptions.carouselOptions.pagination.color,
      },
      {
        property: "--cozyPaginationColorHover",
        value: blockOptions.carouselOptions.pagination.colorHover,
      },
      {
        property: "--cozyPaginationActiveColor",
        value: blockOptions.carouselOptions.pagination.activeColor,
      },
      {
        property: "--cozyPaginationActiveColorHover",
        value: blockOptions.carouselOptions.pagination.activeColorHover,
      },
      {
        property: "--cozyPaginationPositionVertical",
        value: `${blockOptions.carouselOptions.pagination.positionVertical}px`,
      },
    ];

    postSliderStyles.forEach((style) => {
      cozyPostSlider.style.setProperty(style.property, style.value);
    });

    const sliderAttr = {
      init: true,
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      autoplay: { ...blockOptions.carouselOptions.sliderOptions.autoplay },
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      centeredSlides: blockOptions.carouselOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${postSliderClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${postSliderClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${postSliderClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView,
        },
      },
    };

    const postSlider = new Swiper(
      postSliderClass + " .swiper-container",
      sliderAttr
    );
  };

  window["cozyBlockPostInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyPost_${n}`];
    const postClass = `#cozyBlock_${n}`;
    const cozyPost = document.querySelector(postClass);

    let swiperSlides = [];

    if (cozyPost) {
      swiperSlides = cozyPost.querySelectorAll(".wp-block-post");
    }

    swiperSlides.forEach((slide) => {
      slide.classList.add("swiper-slide"); // Add your custom class here
    });

    const postStyles = [
      {
        property: "--cozyGridTemplateColumns",
        value: blockOptions.gridOptions.displayColumn,
      },
      {
        property: "--cozyGridGap",
        value: `${blockOptions.gridOptions.columnGap}px`,
      },
      {
        property: "--cozyNavIconSize",
        value: `${blockOptions.carouselOptions.navigation.iconSize}px`,
      },
      {
        property: "--cozyNavWidth",
        value: `${blockOptions.carouselOptions.navigation.iconBoxWidth}px`,
      },
      {
        property: "--cozyNavHeight",
        value: `${blockOptions.carouselOptions.navigation.iconBoxHeight}px`,
      },
      {
        property: "--cozyNavBorderRadius",
        value: `${blockOptions.carouselOptions.navigation.borderRadius}px`,
      },
      {
        property: "--cozyNavIconColor",
        value: blockOptions.carouselOptions.navigation.color,
      },
      {
        property: "--cozyNavIconColorHover",
        value: blockOptions.carouselOptions.navigation.colorHover,
      },
      {
        property: "--cozyNavBgColor",
        value: blockOptions.carouselOptions.navigation.backgroundColor,
      },
      {
        property: "--cozyNavBgColorHover",
        value: blockOptions.carouselOptions.navigation.backgroundColorHover,
      },
      {
        property: "--cozyPaginationWidth",
        value: `${blockOptions.carouselOptions.pagination.width}px`,
      },
      {
        property: "--cozyPaginationHeight",
        value: `${blockOptions.carouselOptions.pagination.height}px`,
      },
      {
        property: "--cozyPaginationBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.borderRadius}px`,
      },
      {
        property: "--cozyPaginationActiveWidth",
        value: `${blockOptions.carouselOptions.pagination.activeWidth}px`,
      },
      {
        property: "--cozyPaginationActiveBorderRadius",
        value: `${blockOptions.carouselOptions.pagination.activeBorderRadius}px`,
      },
      {
        property: "--cozyPaginationColor",
        value: blockOptions.carouselOptions.pagination.color,
      },
      {
        property: "--cozyPaginationColorHover",
        value: blockOptions.carouselOptions.pagination.colorHover,
      },
      {
        property: "--cozyPaginationActiveColor",
        value: blockOptions.carouselOptions.pagination.activeColor,
      },
      {
        property: "--cozyPaginationActiveColorHover",
        value: blockOptions.carouselOptions.pagination.activeColorHover,
      },
      {
        property: "--cozyPaginationPositionVertical",
        value: `${blockOptions.carouselOptions.pagination.positionVertical}px`,
      },
    ];

    postStyles.forEach((style) => {
      if (cozyPost) {
        cozyPost.style.setProperty(style.property, style.value);
      }
    });

    const carouselAttr = {
      init: true,
      autoplay: { ...blockOptions.carouselOptions.sliderOptions.autoplay },
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      centeredSlides: blockOptions.carouselOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${postClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${postClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${postClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.carouselOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView:
            blockOptions.carouselOptions.sliderOptions.slidesPerView,
        },
      },
    };

    const carousel = new Swiper(
      postClass + ".cozy-block-post-carousel-wrapper .swiper-container",
      carouselAttr
    );
  };

  window["cozyBlockNewsTickerInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyNewsTicker_${n}`];
    const newsTickerClass = `#cozyBlock_${n}`;
    const cozyNewsTicker = document.querySelector(newsTickerClass);

    const swiperSlides = cozyNewsTicker.querySelectorAll(".wp-block-post");
    swiperSlides.forEach((slide) => {
      slide.classList.add("swiper-slide"); // Add your custom class here
    });

    const carouselAttr = {
      init: true,
      direction: "vertical",
      loop: blockOptions.carouselOptions.sliderOptions.loop,
      autoplay: blockOptions.carouselOptions.sliderOptions.autoplay,
      speed: blockOptions.carouselOptions.sliderOptions.speed,
      slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${newsTickerClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${newsTickerClass} .swiper-button-prev.cozy-block-button-prev`,
      },
    };

    const carousel = new Swiper(
      newsTickerClass + " .swiper-container",
      carouselAttr
    );
  };

  window["cozyBlockPopularPostsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyPopularPosts_${n}`];
    const popularPostsClass = `#cozyBlock_${n}`;
    const cozyPopularPosts = document.querySelector(popularPostsClass);

    if (blockOptions.layout === "ticker") {
      const swiperSlides = cozyPopularPosts.querySelectorAll(".wp-block-post");
      swiperSlides.forEach((slide) => {
        slide.classList.add("swiper-slide"); // Add your custom class here
      });

      const tickerAttr = {
        init: true,
        direction: "vertical",
        loop: blockOptions.carouselOptions.sliderOptions.loop,
        autoplay: blockOptions.carouselOptions.sliderOptions.autoplay,
        speed: blockOptions.carouselOptions.sliderOptions.speed,
        slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
        spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
        navigation: {
          nextEl: `${popularPostsClass} .swiper-button-next.cozy-block-button-next`,
          prevEl: `${popularPostsClass} .swiper-button-prev.cozy-block-button-prev`,
        },
      };

      const ticker = new Swiper(
        popularPostsClass + ".layout-ticker .swiper-container",
        tickerAttr
      );
    }
  };

  window["cozyBlockTrendingPostsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyTrendingPosts_${n}`];
    const trendingPostsClass = `#cozyBlock_${n}`;
    const cozyTrendingPosts = document.querySelector(trendingPostsClass);

    if (blockOptions.layout === "ticker") {
      const swiperSlides = cozyTrendingPosts.querySelectorAll(".wp-block-post");
      swiperSlides.forEach((slide) => {
        slide.classList.add("swiper-slide"); // Add your custom class here
      });

      const tickerAttr = {
        init: true,
        direction: "vertical",
        loop: blockOptions.carouselOptions.sliderOptions.loop,
        autoplay: blockOptions.carouselOptions.sliderOptions.autoplay,
        speed: blockOptions.carouselOptions.sliderOptions.speed,
        slidesPerView: blockOptions.carouselOptions.sliderOptions.slidesPerView,
        spaceBetween: blockOptions.carouselOptions.sliderOptions.spaceBetween,
        navigation: {
          nextEl: `${trendingPostsClass} .swiper-button-next.cozy-block-button-next`,
          prevEl: `${trendingPostsClass} .swiper-button-prev.cozy-block-button-prev`,
        },
      };

      const ticker = new Swiper(
        trendingPostsClass + ".layout-ticker .swiper-container",
        tickerAttr
      );
    }
  };

  window["cozyBlockRelatedPostsInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyRelatedPosts_${n}`];
    const relatedPostsClass = `#cozyBlock_${n}`;
    const cozyRelatedPosts = document.querySelector(relatedPostsClass);

    const gridStyles = [
      {
        property: "--cozyGridTemplateColumns",
        value: blockOptions.gridOptions.displayColumn,
      },
      {
        property: "--cozyGridGap",
        value: `${blockOptions.gridOptions.columnGap}px`,
      },
    ];

    gridStyles.forEach((style) => {
      cozyRelatedPosts.style.setProperty(style.property, style.value);
    });
  };

  window["cozyBlockScrollTopInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyScrollTop_${n}`];
    const scrollTopClass = `#cozyBlock_${n}`;
    const cozyScrollTop = document.querySelector(scrollTopClass);

    function scrollFunction() {
      if (
        document.body.scrollTop > 10 ||
        document.documentElement.scrollTop > 10
      ) {
        cozyScrollTop.classList.add("visibility-visible");
        cozyScrollTop.classList.remove("visibility-hidden");
      } else {
        cozyScrollTop.classList.add("visibility-hidden");
        cozyScrollTop.classList.remove("visibility-visible");
      }
    }

    scrollFunction();
    window.onscroll = function () {
      scrollFunction();
    };

    cozyScrollTop.addEventListener("click", function () {
      jQuery("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  };

  window["cozyBlockCounterInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyCounter_${n}`];
    const counterClass = `#cozyBlock_${n}`;
    const cozyCounter = document.querySelector(counterClass);

    const counter = cozyCounter.querySelector("span");

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
          (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    let animationTriggered = false;

    function addCounterAnimation() {
      if (!animationTriggered && isElementInViewport(cozyCounter)) {
        animationTriggered = true;

        const time =
          blockOptions.animationDuration &&
          Math.floor(Math.abs(blockOptions.animationDuration)) > 499
            ? Math.floor(Math.abs(blockOptions.animationDuration)) - 200
            : 300;

        const endTarget = blockOptions.endNumber
          ? Math.floor(Math.abs(blockOptions.endNumber))
          : 0;

        let cleanStartValue = 0;

        const increaseBy = ((endTarget - cleanStartValue) / time) * 53;
        let timeoutIdInside;

        const timeoutId = setTimeout(() => {
          function updateCount() {
            cleanStartValue += increaseBy;
            counter.innerHTML = Math.floor(cleanStartValue).toLocaleString();
            if (cleanStartValue < endTarget) {
              timeoutIdInside = setTimeout(() => {
                updateCount();
              }, 53);
            } else {
              counter.innerHTML = Math.floor(endTarget).toLocaleString();
            }
          }
          updateCount();
        }, 200);

        return () => {
          clearTimeout(timeoutId);
          clearTimeout(timeoutIdInside);
        };
      }
    }
    addCounterAnimation();

    window.addEventListener("scroll", addCounterAnimation);
  };

  window["cozyBlockSidebarPanelInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozySidebarPanel_${n}`];
    const sidebarClass = `#cozyBlock_${n}`;
    const cozySidebar = document.querySelector(sidebarClass);

    //Add cozy-overlay-wrapper only if it does not exists
    const ancestorDiv = document.querySelector(".wp-site-blocks");
    const hasChildDiv = document.querySelector(
      ".wp-site-blocks > .cozy-overlay-wrapper"
    );
    const body = document.querySelector("body");
    if (hasChildDiv === null) {
      const overlayWrapper = document.createElement("div");
      overlayWrapper.className = "cozy-overlay-wrapper visibility-none";
      ancestorDiv.appendChild(overlayWrapper);
    }
    const cozyOverlay = document.querySelector(".cozy-overlay-wrapper");

    const sidebarOpenBtn = cozySidebar.querySelector(".open-icon-wrapper");
    sidebarOpenBtn.addEventListener("click", function () {
      cozyOverlay.style.backgroundColor = blockOptions.overlayBgColor;
      cozySidebar.classList.toggle("sidebar-panel-active");
      if (cozySidebar.classList.contains("sidebar-panel-active")) {
        cozyOverlay.classList.remove("visibility-none");
        body.classList.add("overflow-hidden");
      }
    });

    const sidebarCloseBtn = cozySidebar.querySelector(".close-icon-wrapper");
    sidebarCloseBtn.addEventListener("click", function () {
      cozySidebar.classList.remove("sidebar-panel-active");
      cozyOverlay.classList.add("visibility-none");
      body.classList.remove("overflow-hidden");
      cozyOverlay.style.backgroundColor = "#c3c3c3";
    });

    cozyOverlay.addEventListener("click", function () {
      cozySidebar.classList.remove("sidebar-panel-active");
      cozyOverlay.classList.add("visibility-none");
      body.classList.remove("overflow-hidden");
      cozyOverlay.style.backgroundColor = "#c3c3c3";
    });
  };

  window["cozyBlockProgressBarInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProgressBar_${n}`];
    const progressBarClass = `#cozyBlock_${n}`;
    const cozyProgressBar = document.querySelector(progressBarClass);

    let progress = cozyProgressBar.querySelector(".progress");

    if (progress === null) {
      const prevSiblingDiv = cozyProgressBar.previousElementSibling;
      progress = prevSiblingDiv.querySelector(".progress");
    }

    const progressBar = cozyProgressBar.querySelector(".cozy-progress-bar");

    let animationTriggered = false;

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
          (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function addCounterAnimation() {
      if (
        blockOptions.layout === "default" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        progressBar.style.width = `${blockOptions.progress}%`;
        progressBar.style.height = ``;
      }

      if (
        blockOptions.layout === "vertical" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        progressBar.style.height = `${blockOptions.progress}%`;
        progressBar.style.width = ``;
      }

      if (
        blockOptions.layout === "circle" &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        const circleProgressBarStyles = [
          {
            property: "--circleProgressPercentage",
            value: blockOptions.progress + "%",
          },
        ];

        function animateProgressBar() {
          let currentProgress = 0;

          function updateProgressBar() {
            if (currentProgress >= blockOptions.progress) {
              cozyProgressBar.style.setProperty(
                circleProgressBarStyles[0].property,
                blockOptions.progress + "%"
              );
              progressBar.style.setProperty(
                "background",
                `conic-gradient(${blockOptions.layoutCircle.primaryColor} ${blockOptions.progress}%, ${blockOptions.layoutCircle.secondaryColor} ${blockOptions.progress}%)`
              );
            } else {
              cozyProgressBar.style.setProperty(
                circleProgressBarStyles[0].property,
                currentProgress + "%"
              );
              progressBar.style.setProperty(
                "background",
                `conic-gradient(${blockOptions.layoutCircle.primaryColor} ${currentProgress}%, ${blockOptions.layoutCircle.secondaryColor} ${blockOptions.progress}%)`
              );

              currentProgress += 1; // You can adjust the increment value
              requestAnimationFrame(updateProgressBar);
            }
          }

          updateProgressBar();
        }

        // Call the function to start the animation
        animateProgressBar();
      }

      if (
        progress &&
        !animationTriggered &&
        isElementInViewport(cozyProgressBar)
      ) {
        animationTriggered = true;

        const time = 500;

        const endTarget = blockOptions.progress
          ? parseFloat(blockOptions.progress).toFixed(1)
          : 0;

        let cleanStartValue = 0;

        const increaseBy = ((endTarget - cleanStartValue) / time) * 53;
        let timeoutIdInside;

        const timeoutId = setTimeout(() => {
          function updateCount() {
            cleanStartValue += increaseBy;
            progress.innerHTML =
              parseFloat(cleanStartValue).toFixed(1).toLocaleString() + "%";
            if (cleanStartValue < endTarget) {
              timeoutIdInside = setTimeout(() => {
                updateCount();
              }, 53);
            } else {
              progress.innerHTML = endTarget.toLocaleString() + "%";
            }
          }
          updateCount();
        }, 200);

        return () => {
          clearTimeout(timeoutId);
          clearTimeout(timeoutIdInside);
        };
      }
    }
    addCounterAnimation();

    window.addEventListener("scroll", addCounterAnimation);
  };

  window["cozyBlockAccordionInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyAccordion_${n}`];
    const accordionClass = `#cozyBlock_${n}`;
    const cozyAccordion = document.querySelector(accordionClass);

    const accordionStyles = [
      {
        property: "--cozyIconRotate",
        value: `${blockOptions.icon.rotate}deg`,
      },
      {
        property: "--cozyIconRotateActive",
        value: `${blockOptions.icon.rotateActive}deg`,
      },
    ];

    const cozyAccordionItem = cozyAccordion.querySelectorAll(
      ".cozy-block-accordion-item"
    );

    cozyAccordionItem.forEach((item) => {
      const title = item.querySelector(".cozy-accordion-title");

      const icon = item.querySelector(".accordion-icon-wrapper svg");
      const iconPath = item.querySelector(".accordion-icon-wrapper svg path");

      title.addEventListener("click", function () {
        const content = this.nextElementSibling;
        if (content) {
          this.classList.toggle("active");
          content.classList.toggle("display-block");
          if (this.classList.contains("active")) {
            icon.setAttribute(
              "viewBox",
              `${blockOptions.icon.activeViewBox.vx} ${blockOptions.icon.activeViewBox.vy} ${blockOptions.icon.activeViewBox.vw} ${blockOptions.icon.activeViewBox.vh}`
            );
            iconPath.setAttribute("d", blockOptions.icon.activePath);
          }

          if (!this.classList.contains("active")) {
            icon.setAttribute(
              "viewBox",
              `${blockOptions.icon.viewBox.vx} ${blockOptions.icon.viewBox.vy} ${blockOptions.icon.viewBox.vw} ${blockOptions.icon.viewBox.vh}`
            );
            iconPath.setAttribute("d", blockOptions.icon.path);
          }
        }
      });
    });

    accordionStyles.forEach((style) => {
      cozyAccordion.style.setProperty(style.property, style.value);
    });
  };

  window["cozyBlockAdvancedTabInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyAdvancedTab_${n}`];
    const advancedTabClass = `#cozyBlock_${n}`;
    const cozyAdvancedTab = document.querySelector(advancedTabClass);

    function openTab(childClientId) {
      const tabContents = cozyAdvancedTab.querySelectorAll(
        ".cozy-block-advanced-tab-item"
      );
      tabContents.forEach((tab) => {
        tab.classList.remove("show");
      });
      // Deactivate all tab buttonsattributes
      const tabButtons = cozyAdvancedTab.querySelectorAll(".cozy-tab-button");
      tabButtons.forEach((button) => {
        button.classList.remove("active");
      });

      const selectedTab = cozyAdvancedTab.querySelector(
        `[data-client-id="${childClientId}"]`
      );
      if (selectedTab) {
        selectedTab.classList.add("show");
      }

      // Activate the clicked tab button
      const activeTab = cozyAdvancedTab.querySelector(
        `[id="${childClientId}"]`
      );
      if (activeTab) {
        activeTab.classList.add("active");
      }
    }

    const defaultTab = cozyAdvancedTab.querySelector(
      ".cozy-tab-button:first-child"
    );
    if (defaultTab) {
      const tabId = defaultTab.getAttribute("id"); // Assuming you have a data attribute for tab name
      openTab(tabId);
    }

    //Adding Click Event to tab button
    const tabButtons = cozyAdvancedTab.querySelectorAll(".cozy-tab-button");
    tabButtons.forEach((button) => {
      const childClientId = button.getAttribute("id");
      button.addEventListener("click", function () {
        openTab(childClientId);
      });
    });
  };

  window["cozyBlockProductSliderInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyProductSlider_${n}`];
    const productSliderClass = `#cozyBlock_${n}`;
    const cozyProductSlider = document.querySelector(productSliderClass);

    const swiperSlides = cozyProductSlider.querySelectorAll(".wp-block-post");
    swiperSlides.forEach((slide) => {
      slide.classList.add("swiper-slide"); // Add your custom class here
    });

    const sliderAttr = {
      init: true,
      loop: blockOptions.sliderOptions.loop,
      // autoplay: { ...blockOptions.sliderOptions.autoplay },
      speed: blockOptions.sliderOptions.speed,
      centeredSlides: blockOptions.sliderOptions.centeredSlides,
      slidesPerView: blockOptions.sliderOptions.slidesPerView,
      spaceBetween: blockOptions.sliderOptions.spaceBetween,
      navigation: {
        nextEl: `${productSliderClass} .swiper-button-next.cozy-block-button-next`,
        prevEl: `${productSliderClass} .swiper-button-prev.cozy-block-button-prev`,
      },
      pagination: {
        clickable: true,
        el: `${productSliderClass} .swiper-pagination`,
      },
      breakpoints: {
        400: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 2
              ? blockOptions.sliderOptions.slidesPerView
              : 2,
        },
        1024: {
          slidesPerView:
            blockOptions.sliderOptions.slidesPerView <= 3
              ? blockOptions.sliderOptions.slidesPerView
              : 3,
        },
        1180: {
          slidesPerView: blockOptions.sliderOptions.slidesPerView,
        },
      },
    };

    if (blockOptions.sliderOptions.autoplay.status) {
      sliderAttr.autoplay = { ...blockOptions.sliderOptions.autoplay };
    }

    const productSlider = new Swiper(
      productSliderClass + " .cozy-product-slider__swiper-container",
      sliderAttr
    );
  };
})(jQuery);
