jQuery(document).ready(function($) {
	$.stellar({
		horizontalScrolling: false,
	});

	$(window).on('scroll', function() {
		var WindowTop = $(window).scrollTop();
		$('section').each(function(i) {
			if (WindowTop > $(this).offset().top - 80 &&
				WindowTop < $(this).offset().top + $(this).outerHeight(true)
			) {
				$('nav > div > a').removeClass('active');
				$('nav div').eq(i).find('a').addClass('active');
			}
		});
	});

	$('a[href*=\\#]:not([href=#])').click(function() {

		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				$('#js-main-menu').removeClass('fixed');
				bodyVisible();
				return false;
			}
		}
 function bodyVisible() {
			const body = document.querySelector('body');
			body.style.overflow = 'initial';
			body.style.width = 'auto';
			body.style.paddingRight = '0';
		}
		
	});

	var addClassOnScroll = function() {
		var windowTop = $(window).scrollTop();
		$('section[id]').each(function(index, elem) {
			var offsetTop = $(elem).offset().top;
			var outerHeight = $(this).outerHeight(true);

			if (windowTop > (offsetTop - 50) && windowTop < (offsetTop + outerHeight)) {
				var elemId = $(elem).attr('id');
				$("nav div a.active").removeClass('active');
				$("nav div a[href='#" + elemId + "']").addClass('active');
			}
		});
	};

	$(function() {
		$(window).on('scroll', function() {
			addClassOnScroll();
		});
	});

});