/**
* Template Name: FlexStart - v1.9.0
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 10
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });



  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aos_init();
      }, true);
    }

  });

    /**
   * Library isotope and filter
   */
     window.addEventListener('load', () => {
      let portfolioContainer = select('.library-container');
      if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
          itemSelector: '.library-item',
          layoutMode: 'fitRows'
        });
  
        let portfolioFilters = select('#library-flters li', true);
  
        on('click', '#library-flters li', function(e) {
          e.preventDefault();
          portfolioFilters.forEach(function(el) {
            el.classList.remove('filter-active');
          });
          this.classList.add('filter-active');
  
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          aos_init();
        }, true);
      }
  
    });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });


  /**
   * Initiate glightbox
   */
   const glightbox = GLightbox({
    selector: '.glightbox'
  });

    /**
   * Hero carousel indicators
   */
     let heroCarouselIndicators = select("#hero-carousel-indicators")
     let heroCarouselItems = select('#heroCarousel .carousel-item', true)
   
     heroCarouselItems.forEach((item, index) => {
       (index === 0) ?
       heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
         heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
     });

  /**
   * Manage Service slider
   */
  new Swiper('.manage-service-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Sosial Food Slider
   */
   new Swiper('.sosial-food-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    //   clickable: true
    // },
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
      },
      480: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      }
    }
  });
  /**
   * Sosial automotive Slider
   */
   new Swiper('.sosial-automotive-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    //   clickable: true
    // },
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
      },
      480: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      }
    }
  });
  /**
   * Sosial beauty Slider
   */
   new Swiper('.sosial-beauty-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    //   clickable: true
    // },
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
      },
      480: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      }
    }
  });

  /**
   * Portfolio slider
   */
  new Swiper('.portfolio-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 3,
      },
      640: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 30
      }
    }
  });
  /**
   * Portfolio slider
   */
  new Swiper('.portfolio-web-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 2,
      },
      640: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 30
      }
    }
  });
  /**
   * Our Team slider
   */
  new Swiper('.our-team-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },

       480: {
        slidesPerView: 1,
        spaceBetween: 30,
      },

      640: {
        slidesPerView: 3,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 30,

      }
    }
  });
  /**
   * Produk slider
   */
  new Swiper('.produk-bottom-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },

       480: {
        slidesPerView: 1,
        spaceBetween: 30,
      },

      640: {
        slidesPerView: 2,
        spaceBetween: 30,
      },

      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 30,

      }
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        // spaceBetween: 40
      },
       480: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 1,
      },

      768: {
        slidesPerView: 2,
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.video-production-slider', {
    speed: 600,
    loop: true,
    autoplay: 
    {
      delay: 5000,
      disableOnInteraction: false
    },
    // nextButton: '#js-prev1',
    // prevButton: '#js-next1',
    navigation: {
      nextEl: '#js-prev1',
      prevEl: '#js-next1',
    },
    slidesPerView: 'auto',
    // pagination: {
    //   el: '.swiper-pagination',
    //   type: 'bullets',
    //   clickable: true
    // },
    breakpoints: {
      320: {
        slidesPerView: 1,
        // spaceBetween: 40
      },
       480: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      768: {
        slidesPerView: 3,
      },

      1200: {
        slidesPerView: 3,
        // spaceBetween: 40
      }
    }
  });

    /**
   * Clients Slider
   */
     new Swiper('.clients-slider', {
      speed: 400,
      loop: true,
      autoplay: false,
      // {
      //   delay: 5000,
      //   disableOnInteraction: false
      // },
      slidesPerView: 'auto',
      // pagination: {
      //   el: '.swiper-pagination',
      //   type: 'bullets',
      //   clickable: false
      // },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        480: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        640: {
          slidesPerView: 4,
          spaceBetween: 40
        },
        992: {
          slidesPerView: 6,
          spaceBetween: 40
        }
      }
    });

      /**
   * Client Slider
   */
       new Swiper('.client-slider', {
        speed: 600,
        loop: true,
        autoplay: false,
        // {
        //   delay: 5000,
        //   disableOnInteraction: false
        // },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 10
          },
           480: {
            slidesPerView: 3,
            spaceBetween: 10
          },
    
          640: {
            slidesPerView: 3,
            spaceBetween: 20
          },
    
          768: {
            slidesPerView: 6,
            spaceBetween: 30
          },
    
          1200: {
            slidesPerView: 6,
            spaceBetween: 40
          }
        }
      });

    /**
   * Play Video
   */
    
      
      

  /**
   * Animation on scroll
   */
   AOS.init();

  window.addEventListener('load', () => {
    aos_init();
  });

})();