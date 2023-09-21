jQuery(function ($) {
	/* ========== NAVIGATION DEFAULT PADDING ========== */
	$('#menu-menu-1 > li').addClass('nav-green-bar');

	/* ========== NAVBAR ADJUST ON SCROLL ========== */
 	var scrollTop = 0;
	$(window).scroll(function(){
		scrollTop = $(window).scrollTop();

		//Todo - Navbar
		//console.log(scrollTop);		
	    if (scrollTop >= 50) {
	      $('.navbar-brand').addClass('logo-scroll');
	      $('.navbar').css("font-size","13px");
				$('#menu-menu-1 > li').addClass('nav-green-bar-scroll');
				
				// HOME NAVBAR == SOLID
				if ($("body").hasClass("home")) { //change to home
					console.log('Make Solid');
					$('header#masthead').addClass('masthead-add-shadow');
					$('.bg-light').addClass('bg-light-solid');
					$(".nav-green-bar").css("padding-bottom", "0");
					$(".nav-green-bar").css("margin-bottom", "40");
				}

	    } else if (scrollTop < 50) {
	      $('.navbar-brand').removeClass('logo-scroll');
	      $('.navbar').css("font-size","inherit");
				$('#menu-menu-1 > li').removeClass('nav-green-bar-scroll');
				
				// HOME NAVBAR == TRANSPARENT
				if ($("body").hasClass("home")) { //change to home
					console.log('Make Transparent');
					$('header#masthead').removeClass('masthead-add-shadow');
					$('.bg-light').removeClass('bg-light-solid');
					$(".nav-green-bar").css("padding-bottom", "-40");
					$(".nav-green-bar").css("margin-bottom", "0");
				}
	    } 

	    if (scrollTop >= 1000) {
	      	$(".td-scroll-up").fadeIn("slow").removeClass("td-scroll-up-hide");
	    } else if (scrollTop < 1000) {
	    	$(".td-scroll-up").fadeOut("slow").addClass("td-scroll-up-hide");
	    }
	}); 

	/* ========== BOTTOM-RIGHT BOX ( SCROLL UP) ========== */
	$(".td-scroll-up").on("click", function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
	});

	/* ========== SEARCH BOX ========== */
	function openSearch() {
	  document.getElementById("myOverlay").style.display = "block";
	}
	// Close the full screen search box 
	function closeSearch() {
	  document.getElementById("myOverlay").style.display = "none";
	}
	// Event listener to open/close Screen Search Box
	$( "i._mi.fa.fa-search" ).on( "click", function() {
	  openSearch();
	});
	$( "span.closebtn" ).on( "click", function() {
	  closeSearch();
	});
   /* ========================================================= */
   $("#basecampfeedbackClick").on("click", function(){
   		$("#basecampfeedback").slideToggle( "slow");
   });

   /* ========================== TERMS OF USE LINK =============================== */
   $("#menu-item-996 > a").attr("target", "blank");


});

