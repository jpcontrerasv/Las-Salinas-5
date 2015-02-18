$(".overlaypm").hide();

$('.abrir-1').click(function(){	$('.overlaypm-1').fadeIn('fast');});
$(".cerrar-1").click(function(){$('.overlaypm-1').hide();});

$('.abrir-2').click(function(){	$('.overlaypm-2').fadeIn('fast');});
$(".cerrar-2").click(function(){$('.overlaypm-2').hide();});

$('.abrir-3').click(function(){	$('.overlaypm-3').fadeIn('fast');});
$(".cerrar-3").click(function(){$('.overlaypm-3').hide();});

$('.abrir-4').click(function(){	$('.overlaypm-4').fadeIn('fast');});
$(".cerrar-4").click(function(){$('.overlaypm-4').hide();});

$('.abrir-5').click(function(){	$('.overlaypm-5').fadeIn('fast');});
$(".cerrar-5").click(function(){$('.overlaypm-5').hide();});

$('.abrir-6').click(function(){	$('.overlaypm-6').fadeIn('fast');});
$(".cerrar-6").click(function(){$('.overlaypm-6').hide();});



var ww = document.body.clientWidth;
$(document).ready(function() {
	$("#nav-menu li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$("#nav-menu").toggle();
	});
	adjustMenu();
	
$(".form").click(function() {
	$(".enviado").fadeOut();});	
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 991) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$("#nav-menu").hide();
		} else {
			$("#nav-menu").show();
		}
		$("#nav-menu li").unbind('mouseenter mouseleave');
		$("#nav-menu li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 991) {
		$(".toggleMenu").css("display", "none");
		$("#nav-menu").show();
		$("#nav-menu li").removeClass("hover");
		$("#nav-menu li a").unbind('click');
		$("#nav-menu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}


var $w = $(window), $display = $(".pixeles");
$w.on("scroll", function(e){
  $display.text($w.scrollTop())
});

//Animaciones!

/*Con tiempo automático*/
setTimeout(function(){
	$("#head-equipo > .img").removeClass("ocultar").addClass("slideInLeft");
	$("#head-equipo > .tit").removeClass("ocultar").addClass("slideInRight");
	$("#head-equipo > .separador").removeClass("ocultar").addClass("fadeIn");
	
	
	$("#slider-home > .hoja").removeClass("ocultar").addClass("bounceIn");
}, 1000);

/*on scroll*/
var $document = $(document)
$document.scroll(function() {
 
	/*Equipo 1*/
  if ($document.scrollTop() >= 300) {
	$("#equipo-1 > .e1img").removeClass("ocultar").addClass("fadeInUpBig");
	$("#equipo-1 > .txt").removeClass("ocultar").addClass("fadeIn");
	$("#equipo-1 > .img").removeClass("ocultar").addClass("fadeIn");
  }
  /*equipo-2*/
  if ($document.scrollTop() >= 600) {
	$("#equipo-2 > .e2img").removeClass("ocultar").addClass("fadeInUpBig");
  }
  if ($document.scrollTop() >= 1100) {
	$(".perfil > .marcela-has").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 1110) {
	$(".perfil .mh").removeClass("ocultar").addClass("fadeIn");
  }

  if ($document.scrollTop() >= 1150) {
	$(".perfil > .ricardo-lab").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 1160) {
	$(".perfil .rila").removeClass("ocultar").addClass("fadeIn");
  }
  
  /*Equipo 3*/
  if ($document.scrollTop() >= 1700) {
	$("#equipo-3 > .img").removeClass("ocultar").addClass("fadeInDownBig");
  }
  if ($document.scrollTop() >= 1710) {
	$("#equipo-3 > .trinidad-fig").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 1720) {
	$("#equipo-4 > .txt-tf").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 1800) {
	$("#equipo-3 > .ricardo-lab-a").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 1810) {
	$("#equipo-4 > .txt-rl").removeClass("ocultar").addClass("fadeIn");
  }
  
  /*Equipo 4*/
  if ($document.scrollTop() >= 1940) {
	$("#equipo-5 > .img").removeClass("ocultar").addClass("slideInUp");
  }
  if ($document.scrollTop() >= 1950) {
	$("#equipo-4 > .stephanie-rot").removeClass("ocultar").addClass("fadeInDownBig");
  }
  if ($document.scrollTop() >= 1960) {
	$("#equipo-5 > .steph").removeClass("ocultar").addClass("fadeInDownBig");
  }
  if ($document.scrollTop() >= 1970) {
	$("#equipo-4 > .andres-var").removeClass("ocultar").addClass("fadeInDownBig");
  }
  if ($document.scrollTop() >= 1980) {
	$("#equipo-5 > .andvar").removeClass("ocultar").addClass("fadeInDownBig");
  }
  
  
  /*Equipo 6*/
  if ($document.scrollTop() >= 1990) {
	$("#equipo-6 > .img").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 2300) {
	$("#equipo-6 > .mabel-val").removeClass("ocultar").addClass("slideInLeft");
  }
  if ($document.scrollTop() >= 2400) {
	$("#equipo-6 > .txt").removeClass("ocultar").addClass("slideInRight");
  }


  /*Historia*/	
  /*Historia 1*/
  if ($document.scrollTop() >= 450) {
	$(".historia-1 > .img-1").removeClass("ocultar").addClass("fadeIn");
  }
  if ($document.scrollTop() >= 460) {
	$(".historia-1 > .txt").removeClass("ocultar").addClass("slideInLeft");
  }
 if ($document.scrollTop() >= 480) {
	$(".historia-1 > .img-2").removeClass("ocultar").addClass("slideInRight");
  }


	/*Historia 2*/
  if ($document.scrollTop() >= 1523) {
	$(".historia-3 > .img-5").removeClass("ocultar").addClass("slideInLeft");
  }
  if ($document.scrollTop() >= 1533) {
	$(".historia-3 > .img-6").removeClass("ocultar").addClass("slideInLeft");
  }
 if ($document.scrollTop() >= 1544) {
	$(".historia-3 > .txt").removeClass("ocultar").addClass("slideInRight");
  }


	/*Historia 3*/
  if ($document.scrollTop() >= 1523) {
	$(".historia-3 > .img-5").removeClass("ocultar").addClass("slideInUp");
  }
  if ($document.scrollTop() >= 1540) {
	$(".historia-3 > .img-6").removeClass("ocultar").addClass("slideInUp");
  }
 if ($document.scrollTop() >= 1550) {
	$(".historia-3 > .txt").removeClass("ocultar").addClass("slideInRight");
  }

	/*Historia 4*/
  if ($document.scrollTop() >= 1523) {
	$(".historia-4 > .txt").removeClass("ocultar").addClass("slideInDown");
  }
  if ($document.scrollTop() >= 1660) {
	$(".historia-4 > .img-7").removeClass("ocultar").addClass("fadeInDownBig");
  }
 if ($document.scrollTop() >= 1770) {
	$(".historia-4 > .img-8").removeClass("ocultar").addClass("fadeInUp");
  }
 if ($document.scrollTop() >= 1850) {
	$(".historia-4 > .txt-2").removeClass("hidden").addClass("slideInDown");
  }
  
  /*Historia 5*/
 if ($document.scrollTop() >= 1950) {
	$(".historia-5 > .img-9").removeClass("ocultar").addClass("slideInLeft");
  }

 if ($document.scrollTop() >= 1960) {
	$(".historia-5 > .txt").removeClass("ocultar").addClass("slideInRight");
  }
  
  
});
$(window).load(function(){
	$('#slider-home').flexslider({
		animation: "slide",
		controlNav: false,
		prevText: "&nbsp;",
		nextText: "&nbsp;", 
	});
  
	
	
});


if (Modernizr.touch) { 
	$(".cont").click(function(){
	 $(this).toggleClass("rotator")  ; 
	});
} else { 
	$('.cont').mouseenter(function(){
		$(this).toggleClass("rotator")
	}).mouseleave(function(){
		$(this).toggleClass("rotator")
	});
}


	
	