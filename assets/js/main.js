jQuery(document).ready(function ($) {
	// INITIALIZE AOS
	AOS.init();

	// Invert Header on Scroll
	window.onscroll = function () {
		if (window.scrollY >= 60 || window.pageYOffset >= 60) {
			$('header').addClass('inverted');
		} else {
			$('header').removeClass('inverted');
		}
	};

	//Navigation
	var app = (function () {
		var body = undefined;
		var menu = undefined;
		var menuItems = undefined;
		var init = function init() {
			body = document.querySelector('body');
			menu = document.querySelector('.menu-icon');
			menuItems = document.querySelectorAll('.nav__list-item');
			applyListeners();
		};
		var applyListeners = function applyListeners() {
			menu.addEventListener('click', function () {
				return toggleClass(body, 'nav-active');
			});
		};
		var toggleClass = function toggleClass(element, stringClass) {
			if (element.classList.contains(stringClass))
				element.classList.remove(stringClass);
			else element.classList.add(stringClass);
		};
		init();
	})();

	// ------------- PRODUCT QUANTITY -----------------
	$('.woocommerce').on(
		'click',
		'.quantity-container .plus, .quantity-container .minus',
		function () {
			// Get current quantity values
			var qty = $(this).siblings('.quantity').children('.qty');
			var val = parseFloat(qty.val());
			var max = parseFloat(qty.attr('max'));
			var min = parseFloat(qty.attr('min'));
			var step = parseFloat(qty.attr('step'));
			// Change the value if plus or minus
			if ($(this).is('.plus')) {
				if (max && max <= val) {
					qty.val(max);
				} else {
					qty.val(val + step);
				}
			} else {
				if (min && min >= val) {
					qty.val(min);
				} else if (val > 1) {
					qty.val(val - step);
				}
			}
			qty.trigger('change');
			$('.update-cart').removeAttr('disabled');
		}
	);

	// TOGGLE ACCORDION
	const accordionList = $('.section-services .accordion-custom');
	$('.section-services .accordion-custom').each(function (i, item) {
		$(item)
			.children('.heading')
			.click(function (e) {
				e.preventDefault();

				$(accordionList).find('.icons').removeClass('active');
				$(accordionList).find('.collapse').collapse('hide');

				if ($(this).attr('aria-expanded') == 'true') {
					$(this).children('.icons').addClass('active');
				} else {
					$(this).children('.icons').removeClass('active');
				}
			});
	});

	// ACTIVE FIRST CHILD ACCORDION
	const firstAccordion = accordionList[0];
	$(firstAccordion).find('.icons').addClass('active');
	$(firstAccordion).find('.collapse').collapse('show');

	// TABS
	$('.my-tabs').each(function () {
        var $this = $(this);
        $this.find('.tabs-nav li:first').addClass('active');
        $this.find('.tab-container').each(function (index, tab) {
            $(tab).find('.tab-content:first').show();
        });
        $this.find('.tabs-nav li').click(function () {
            var corresponding = $(this).data('tab');
            $this.find('.tab-content').hide();
            $this.find('.tab-content.' + corresponding).show();
            $this.find('.tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.slick-container').slick('setPosition', 0);
        });
        $('.tabs-nav li').on('click', function (e) {
            localStorage.setItem('lastTab', $(this).attr('data-tab'));
        });
        var lastTab = localStorage.getItem('lastTab');
        $this.find('.tabs-nav li:first').addClass('active');
        $this.find('.tab-content:first').show();

        if (lastTab) {
            $('.tabs-nav li').removeClass('active');
            $('.tab-container .tab-content').hide();
            $('.tabs-nav li[data-tab=' + lastTab + ']').toggleClass('active');
            $('.tab-container .tab-content.' + lastTab + '').show();
        }
    });

	// ------------- SLIDER -----------------
	const heroBannerSwiper = new Swiper(
		'.section-hero-banner .swiper-container',
		{
			loop: false,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			speed: 1500,
			effect: 'fade',
			fadeEffect: {
				crossFade: true,
			},
			pagination: {
				el: '.section-hero-banner .swiper-pagination',
				clickable: true,
				renderBullet: function renderBullet(index, className) {
					return (
						'<span class="' +
						className +
						'">' +
						'<span class="text">' +
						('0' + (index + 1)).slice(-2) +
						'</span>' +
						'</span>'
					);
				},
			},
			navigation: {
				nextEl: '.section-hero-banner .swiper-next',
				prevEl: '.section-hero-banner .swiper-prev',
			},
		}
	);

	const servicesHomeSwiper = new Swiper(
		'.section-services-home .swiper-container',
		{
			slidesPerView: 1,
			spaceBetween: 30,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				575: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 4,
				},
			},
			navigation: {
				nextEl: '.section-services-home .swiper-next',
				prevEl: '.section-services-home .swiper-prev',
			},
		}
	);

	const professionalsHomeSwiper = new Swiper(
		'.section-professionals-home .swiper-container',
		{
			slidesPerView: 1,
			spaceBetween: 30,
			breakpoints: {
				575: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
			},
			navigation: {
				nextEl: '.section-professionals-home .swiper-next',
				prevEl: '.section-professionals-home .swiper-prev',
			},
		}
	);

	const blogsHomeSwiper = new Swiper(
		'.section-blogs-home .swiper-container',
		{
			slidesPerView: 1,
			spaceBetween: 30,
			breakpoints: {
				575: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
			},
			navigation: {
				nextEl: '.section-blogs-home .swiper-next',
				prevEl: '.section-blogs-home .swiper-prev',
			},
		}
	);

	const whyAboutSwiper = new Swiper('.section-why-about .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			575: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},
		},
		navigation: {
			nextEl: '.section-why-about .swiper-next',
			prevEl: '.section-why-about .swiper-prev',
		},
	});

	const relatedBlogsSwiper = new Swiper(
		'.section-related-blogs .swiper-container',
		{
			slidesPerView: 1,
			spaceBetween: 30,
			breakpoints: {
				575: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
			},
			navigation: {
				nextEl: '.section-related-blogs .swiper-next',
				prevEl: '.section-related-blogs .swiper-prev',
			},
		}
	);
});
