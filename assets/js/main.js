$(function(){
	function addFullPage(){
		// console.log($(window).width())
		if($(window).width() > 992){
			//fullpage js
			new fullpage('#fullpage', {
				anchors: [
					'trang-chu', 'gioi-thieu', 'vi-tri', 
					'tien-ich-1', 'tien-ich-2', 'tien-ich-3', 'mat-bang',
					'can-ho', 'noi-that', 'tin-tuc', 'lien-he'
				],
				scrollBar: true,
				css3: true,
				paddingTop: '75px',
				responsiveWidth: 992,
				// menu: '#navbar-menu',
				// offsetSections: true,
				// navigation: true,
				afterLoad: function(origin, destination, direction){
					var listLight = [3, 4, 8, 10]
					if(destination.index == 0){
						$('.info-fixed').css({'display': 'none'})
					}else if(listLight.includes(destination.index)){
						$('.info-fixed').removeClass('dark')
						$('.info-fixed').css({'display': 'flex'})
					}else{
						$('.info-fixed').addClass('dark')
						$('.info-fixed').css({'display': 'flex'})
					}
				}
			});

			window.onbeforeunload = function () {
				window.scrollTo(0,0);
			};

			// wow js
			new WOW().init();
		}
	}

	addFullPage()
	

	/* Start slide */
	let navText = [
		`<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
		</svg>`,
		`<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
		</svg>`
	];
	
	$('.utilities__list').owlCarousel({
		items:1,
		nav: true,
		dots: false,
		loop:true,
		navText: navText,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0 : {
				nav: false,
				margin: 0,
			},
			568 : {
				nav: true,
			},
		}
	});

	$('.ground__list').owlCarousel({
		items:2,
		loop:true,
		margin:30,
		center: true,
		nav: true,
		navText: navText,
		// autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0 : {
				items:1,
				margin: 0,
				nav: false,
				center: false
			},
			568 : {
				margin: 0,
				nav: true,
				items:1,
				center: false
			},
			// breakpoint from 992 up
			992 : {
				items:2,
				center: true,
				margin:30,
			}
		}
	});

	$('.apartment__list').owlCarousel({
		items:1,
		nav: true,
		dots: false,
		loop:true,
		navText: navText,
		// autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0 : {
				nav: false,
				margin: 0,
			},
			568 : {
				nav: true,
			},
		}
	});

	$('.apartment a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
		$(".apartment__list").trigger('refresh.owl.carousel');
	});


	$('.furniture__list').owlCarousel({
		items:2,
		loop:true,
		margin:10,
		center: true,
		nav: true,
		navText: navText,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0 : {
				margin: 0,
				nav: false,
				items:1,
				center: false
			},
			568 : {
				nav: true,
				margin: 0,
				items:1,
				center: false
			},
			992 : {
				items:2,
				nav: true,
				margin:10,
				center: true
			},
		}
	});

	$('.furniture a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
		$(".furniture__list").trigger('refresh.owl.carousel');
	});

	$('.news__list').owlCarousel({
		items:3,
		loop:true,
		margin:50,
		nav: true,
		navText: [`<img src="`+THEME_URL+`/assets/images/arrow-1.png" />`, `<img src="`+THEME_URL+`/assets/images/arrow-2.png" />`],
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive:{
			0 : {
				items:1,
				nav: false,
			},
			// breakpoint from 768 up
			768 : {
				items:2,
				nav: true,
				margin:20,
			},
			// breakpoint from 992 up
			992 : {
				items:3,
				margin:20,
			},
			1280: {
				margin:50,
			}
		}
	});

	/* End slide */

	// $(".navbar a").click(function(){
	// 	$("body,html").animate({
	// 		scrollTop:$("#" + $(this).data('value')).offset().top
	// 	},1000)
	
	// })

	/* Start Scroll fixed Menu */
	var header = document.getElementById("landing-nav");
	var sticky = header.offsetTop;
	window.onscroll = function() {
		myFunction()
		let btnTop = $('.scroll-to-top');
		if (window.scrollY >= 300) {
			btnTop.addClass('is-visible');
		} else {
			btnTop.removeClass('is-visible');
		} 
	};

	myFunction()

	function myFunction() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky-top");
		} else {
			header.classList.remove("sticky-top");
		}
	}
	/* End Scroll fixed Menu */

	$('.scroll-to-top').on('click', function(){
		$('html, body').animate({scrollTop:0}, '300');
	})

	// Scrollspy
	$('body').scrollspy({ target: '#navbar-menu', offset: 90 })

	$("#navbar-menu a").on('click', function(event) {
		var _this = $(this);
		$('html, body').stop().animate({ scrollTop: $(_this.attr('href')).offset().top }, 1500);
		if(!$(this).hasClass('collapsed') && $(window).width() <= 992){
			$('.navbar-toggler').trigger('click');
		}
		event.preventDefault();
	});

	var myLazyLoad = new LazyLoad();

	$('#loading-app').css({display:'none'})

	// function checkScreen(){
		
	// }

	// $(window).on('resize', function(){
	// 	console.log(111)
	// })
})