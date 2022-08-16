$(function() {
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
			this.cursor.removeAttribute('hidden')
		}

		move(event) {
			if (event.target.localName === 'button' ||
				event.target.localName === 'a' ||
				event.target.onclick !== null ||
				event.target.className.includes('curzr-hover') ||
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
		if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
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
	$.smartscroll({
		mode: 'set',
		autoHash: false,
		sectionWrapperSelector: '#main',
		sectionClass: 'section',
		headerHash: '',
	});

	// Nav
	$('#header .nav .nav-link').on('click', function(e) {
		var offset = $($(this).attr('href')).offset().top;
		window.scrollTo({
			top: offset,
			behavior: 'smooth'
		});
		e.preventDefault()
	})

	// Language
	var $lang = $('.lang')
	$('.btn-lang').on('click', function() {
		$lang.toggleClass('open')
	});
	$(document).on('click', function(e) {
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
	$(document).on('click', '.about-previews-slider .slick-slide.slick-active:not(.slick-current)', function() {
		$('.about-features-slider').slick('slickNext');
	});

	// Accordion
	$('.accordion .accordion-item').on('click', function() {
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
	$('.accordion .accordion-next').on('click', function(e) {
		e.stopPropagation();
		$(this).closest('.accordion-item').next().trigger('click');
	});
	$('.accordion .accordion-prev').on('click', function(e) {
		e.stopPropagation();
		$(this).closest('.accordion-item').prev().trigger('click');
		/*if ($(this).closest('.accordion-item').prev().is('.accordion-characters')) {
			$('.accordion-characters video').trigger('play')
		}*/
	});
	$('.accordion .accordion-characters').on('mouseenter mouseleave', function(e) {
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
	$(document).on('click', '.slider .slick-slide:not(.slick-current) .slide-image img', function(e) {
		if ($(e.target).closest('.slick-slide').next().is('.slick-current')) {
			$(e.target).closest('.slider').slick('slickPrev');
		} else {
			$(e.target).closest('.slider').slick('slickNext');
		}
	});
})
