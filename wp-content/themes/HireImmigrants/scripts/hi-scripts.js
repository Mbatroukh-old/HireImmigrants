$(document).ready(function(){

	// $('.catgroup .post__group:not(.post__group--videos)').each(function() {
	// 	if($(this).hasClass("post__group--employee-champions")) {
	// 		console.log("Not gonna");
	// 	} else {
	// 		var firstHeight = $('.post:first-child').height();
	// 		var splitHeight = (firstHeight / 2) - 37;
	// 		$(this).first().next().height(splitHeight);
	// 		$(this).first().next().next().height(splitHeight);
	// 	}
	// });

	// console.log($(".catgroup .post__group .post").first().html());

	// console.log($(".catgroup .post__group > .post").first().height());
	$('.founding-funded-sister button').click(function() {

		if($(this).attr('id') === "founding") {
			$('#founding').addClass('active');
			$('.founding').addClass('visible');

			$('#funded').removeClass('active');
			$('.funded').removeClass('visible');

			$('#sister').removeClass('active');
			$('.sister').removeClass('visible');
		} else if($(this).attr('id') === "funded") {
			$('#funded').addClass('active');
			$('.funded').addClass('visible');

			$('#founding').removeClass('active');
			$('.founding').removeClass('visible');

			$('#sister').removeClass('active');
			$('.sister').removeClass('visible');

		} else {
			$('#sister').addClass('active');
			$('.sister').addClass('visible');

			$('#funded').removeClass('active');
			$('.funded').removeClass('visible');

			$('#founding').removeClass('active');
			$('.founding').removeClass('visible');
		}

	});

	$('.search-trigger').click(function() {
		$('.search-form').fadeIn();
		$('.search-form input').focus();
	});

	$('.search-form .close').click(function() {
		$('.search-form').fadeOut();
	});

	$('.badges .badge').click(function() {
		$(this).addClass('selected');
		$(this).siblings().removeClass('selected');
		if($(this).hasClass('all-badge')) {
			$('.hire').fadeIn();
			$('.diversity').fadeIn();
			$('.ideas').fadeIn();
			$('.innovation').fadeIn();
			$('.immigration').fadeIn();
			$('.research').fadeIn();
			$('.policy').fadeIn();
		} else if($(this).hasClass('hire-badge')) {
			$('.hire').fadeIn();
			$('.diversity').fadeOut();
			$('.ideas').fadeOut();
			$('.innovation').fadeOut();
			$('.immigration').fadeOut();
		} else if($(this).hasClass('diversity-badge')) {
			$('.hire').fadeOut();
			$('.diversity').fadeIn();
			$('.ideas').fadeOut();
			$('.innovation').fadeOut();
			$('.immigration').fadeOut();
		} else if($(this).hasClass('ideas-badge')) {
			$('.hire').fadeOut();
			$('.diversity').fadeOut();
			$('.ideas').fadeIn();
			$('.innovation').fadeOut();
			$('.immigration').fadeOut();
		} else if($(this).hasClass('innovation-badge')) {
			$('.hire').fadeOut();
			$('.diversity').fadeOut();
			$('.ideas').fadeOut();
			$('.innovation').fadeIn();
			$('.immigration').fadeOut();
		} else if($(this).hasClass('immigration-badge')) {
			$('.hire').fadeOut();
			$('.diversity').fadeOut();
			$('.ideas').fadeOut();
			$('.innovation').fadeOut();
			$('.immigration').fadeIn();
		} else if($(this).hasClass('policy-badge')) {
			$('.research').fadeOut();
			$('.policy').fadeIn();
		} else if($(this).hasClass('research-badge')) {
			$('.research').fadeIn();
			$('.policy').fadeOut();
		}
	});

	$('.mobile-menu-trigger').click(function() {
		$('.mobile-navigation').addClass('active');
	});
	$('.mobile-menu-close').click(function() {
		$('.mobile-navigation').removeClass('active');
	});

	$('.ctct-form-field-submit input[type="submit"]').addClass('btn purple');

	var screen = 0;

	if ($(window).width() < 1120) {
		$('.powered-by').insertAfter('.block__group');
		if($(window).width() < 940) {
	   		$('.copyright').insertAfter('footer .social');
	   	}
	} else {
	}

	$( window ).resize(function() {
		if ($(window).width() < 1120) {
			if(screen == 0) {
				$('.powered-by').insertAfter('.block__group');
				screen = 1;
			}
			if (screen == 1) {
				if($(window).width() < 940) {
			   		$('.copyright').insertAfter('footer .social');
			   		screen = 2;
			   	} else {
			   		$('.copyright').insertAfter('.menu-footer-navigation-container');
			   		screen = 1;
			   	}
			}
		} else {
			$('.powered-by').insertAfter().next();
			screen = 0;
		}
	});
});