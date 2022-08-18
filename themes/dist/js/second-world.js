$(function () {
	'use strict';

	// Custom cursor
	class RingDot {
		constructor() {
			this.root = document.body
			this.cursor = document.querySelector('.curzr')
			this.pointerX = 0
			this.pointerY = 0

			this.init()
		}

		init() {
			var cursor = document.querySelector('.curzr')

			if (cursor) {
				cursor.removeAttribute('hidden')
			} else {
				cursor = document.createElement('div')
				cursor.classList.add('curzr')
				document.body.append(cursor)
			}

			this.cursor = cursor
		}

		move(event) {
			if (event.target.localName === 'button' ||
				event.target.localName === 'a' ||
				event.target.onclick !== null ||
				event.target.className.includes('curzr-hover') ||
				$(event.target).closest('a').length ||
				$(event.target).closest('.curzr-hover').length
			) {
				this.cursor.classList.add('hover')
			} else {
				this.cursor.classList.remove('hover')
			}

			this.pointerX = event.pageX + this.root.getBoundingClientRect().x
			this.pointerY = event.pageY + this.root.getBoundingClientRect().y

			this.cursor.style.marginLeft = `${this.pointerX}px`
			this.cursor.style.marginTop = `${this.pointerY}px`
		}

		click() {
			this.cursor.classList.add('click')
			setTimeout(() => {
				this.cursor.classList.remove('click')
			}, 35)
		}

		remove() {
			this.cursor.remove()
		}
	}

	(() => {
		const cursor = new RingDot()
		if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			document.onmousemove = function (event) {
				cursor.move(event)
			}
			document.onclick = function () {
				cursor.click()
			}
		} else {
			cursor.remove()
		}
	})()

	// Full page sections
	if ($('#main').length) {
		$.smartscroll({
			mode: 'set',
			autoHash: false,
			sectionWrapperSelector: '#main',
			sectionClass: 'section',
			headerHash: '',
		});
	}

	// Nav
	$('#header .nav .nav-link').on('click', function (e) {
		var offset = $($(this).attr('href')).offset().top;
		window.scrollTo({
			top: offset,
			behavior: 'smooth'
		});
		e.preventDefault()
	})

	// Language
	var $lang = $('.lang')
	$('.btn-lang').on('click', function () {
		$lang.toggleClass('open')
	});
	$(document).on('click', function (e) {
		if (!$lang.is(e.target) && $lang.has(e.target).length === 0) {
			$lang.removeClass('open');
		}
	});

	// About slider
	$('.about-features-slider').slick({
		infinite: false,
		draggable: false,
		asNavFor: '.about-previews-slider',
		appendArrows: '.about-features-slider-arrows',
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>'
	});
	$('.about-previews-slider').slick({
		slidesToShow: 2,
		accessibility: false,
		draggable: false,
		infinite: false,
		arrows: false,
	});
	$(document).on('click', '.about-previews-slider .slick-slide.slick-active:not(.slick-current)', function () {
		$('.about-features-slider').slick('slickNext');
	});

	// Accordion
	$('.accordion .accordion-item').on('click', function () {
		$(this)
			.toggleClass('opened')
			.removeClass('closed')
			.siblings()
			.removeClass('opened')
			.toggleClass('closed', $(this).hasClass('opened'))
			.find('.accordion-item-description').slideUp(300)
		if ($(this).hasClass('opened')) {
			$(this).find('.accordion-item-description').slideDown(300)
		} else {
			$(this).find('.accordion-item-description').slideUp(300)
		}
		if ($(this).is('.accordion-characters')) {
			$('.accordion-characters video').trigger('play')
		} else {
			$('.accordion-characters video').trigger('pause')
		}
	});
	$('.accordion .accordion-next').on('click', function (e) {
		e.stopPropagation();
		$(this).closest('.accordion-item').next().trigger('click');
	});
	$('.accordion .accordion-prev').on('click', function (e) {
		e.stopPropagation();
		$(this).closest('.accordion-item').prev().trigger('click');
		/*if ($(this).closest('.accordion-item').prev().is('.accordion-characters')) {
			$('.accordion-characters video').trigger('play')
		}*/
	});
	$('.accordion .accordion-characters').on('mouseenter mouseleave', function (e) {
		if ($(this).is('.opened')) {
			return
		}
		if (e.type === 'mouseenter') {
			$('.accordion-characters video').trigger('play')
		} else {
			$('.accordion-characters video').trigger('pause')
		}
	});

	// Slick slider
	$('.slider').slick({
		slidesToShow: 3,
		infinite: false,
		draggable: false,
		centerMode: true,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>'
	});
	$(document).on('click', '.slider .slick-slide:not(.slick-current) .slide-image img', function (e) {
		if ($(e.target).closest('.slick-slide').next().is('.slick-current')) {
			$(e.target).closest('.slider').slick('slickPrev');
		} else {
			$(e.target).closest('.slider').slick('slickNext');
		}
	});

	// Whitepaper
	if ($('.whitepaper').length) {
		var hash = window.location.hash;
		var $navigation = $('.navigation');
		var $buttonPrev = $('.nav-button.nav-prev');
		var $buttonNext = $('.nav-button.nav-next');
		var $prevEl, $nextEl;


		if (hash.length && $(hash).length) {
			$('a[href="' + hash + '"]').parent().addClass('active open')
			if ($('a[href="' + hash + '"]').parents('li').length > 1) {
				$($($('a[href="' + hash + '"]')).parents('li')[$($('a[href="' + hash + '"]')).parents('li').length - 1]).addClass('active');
			}
			$(hash).show();
		} else {
			$navigation.find('li:first').addClass('active open');
			$($navigation.find('a:first').attr('href')).show();
		}

		$('.whitepaper .navigation a').on('click', function () {
			$navigation.find('.active').removeClass('active');
			$(this).closest('li').addClass('active');
			$($(this).parents('li')[$(this).parents('li').length - 1]).addClass('open');
			$('.whitepaper-block').hide();
			$($(this).attr('href')).show();
			updateNavButtons();
		});

		$('.whitepaper .navigation ul ul').on('click', function (e) {
			if (e.offsetY < 0) {
				$(this).closest('li').toggleClass('open')
			}
		});

		updateNavButtons();

		function updateNavButtons() {
			var $activeEl = $navigation.find('.active');
			var isSubmenu = $activeEl.parents('ul').length > 1;

			if ($activeEl.prev().length) {
				$prevEl = $activeEl.prev().find('a:last');
			} else if (isSubmenu) {
				$prevEl = $activeEl.closest('ul').prev('a');
			} else {
				$prevEl = null;
			}

			if ($activeEl.find('ul').length) {
				$nextEl = $activeEl.find('ul a:first');
			} else if ($activeEl.next().length) {
				$nextEl = $activeEl.next().find('a:first');
			} else if (isSubmenu && $activeEl.closest('ul').parent().next('li').length) {
				$nextEl = $activeEl.closest('ul').parent().next('li').find('a:first');
			} else {
				$nextEl = null;
			}

			if ($prevEl) {
				$buttonPrev.find('.nav-button-text').text($prevEl.text());
				$buttonPrev.parent().show();
			} else {
				$buttonPrev.parent().hide();
			}

			if ($nextEl) {
				$buttonNext.find('.nav-button-text').text($nextEl.text());
				$buttonNext.parent().show();
			} else {
				$buttonNext.parent().hide();
			}


		}

		$buttonPrev.on('click', function () {
			$prevEl.trigger('click');
		});

		$buttonNext.on('click', function () {
			$nextEl.trigger('click');
		});
	}

	// News
	$('.news-more a').on('click', function (e) {
		$(this).hide();
		$('.more-news').removeClass('d-none')
		$('.news-hide').css('display', "block");
		e.preventDefault()
	});
})
