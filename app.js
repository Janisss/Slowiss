//loading
$(window).load(function() {
  $(".loading").addClass("hide");
});

$(document).ready(function(){
// menu
$("nav").hide();
$(".menu-custom-mobile").hide();
$(".totop").hide();
$(".bubble").hide();
	
$("a.cstm-acor").click(function(){
	var tete = $(this).attr("data-id");
	var cls = ".q" + tete;
	$("a.cstm-acor").removeClass("active");
	$(this).addClass("active");
	$(".answ").slideUp();
	$(cls).slideDown();
}); // click acordeon

$("a.viac").click(function(){
	$(this).closest(".offer").toggleClass("biginfo");
	$(this).closest(".offer").children(".text").toggleClass("biginfo");
});
$(".zaujem").click(function(){
	var cisloponuky = $(this).closest(".offer").find(".loc-span").html();
	$("#ponuka").val(cisloponuky);
	var datumponuky = $(this).closest(".offer").find(".start-date").html();
	$("#datum-ponuky").val(datumponuky);
	$(".myred").addClass("active");
});
//esc
$(document).keyup(function(e) {
     if (e.keyCode == 27) { 
	 $("input[type='checkbox']").attr('checked', false);
	 $(".menu-text-1").html("&nbsp M");
      $(".menu-text-2").html("NU");
      $(".txt").fadeIn();
	  $("nav").fadeOut("fast");
	  $("body").css({"overflow":"visible"});
	  $(".menua").removeClass("cek");
    }
});


//big-menu open
 $("input[type='checkbox']").click(function(){
    if($(this).prop("checked") == true){
      $(".menu-text-1").html("&nbsp &nbspE");
      $(".menu-text-2").html("IT &nbsp");
      $(".txt").fadeOut("fast");
	  $("nav").fadeIn("fast");
	  $("body").css({"overflow":"hidden"});
    }
    else if($(this).prop("checked") == false){
      $(".menu-text-1").html("&nbsp M");
      $(".menu-text-2").html("NU");
      $(".txt").fadeIn();
	  $("nav").fadeOut("fast");
	  $("body").css({"overflow":"visible"});
    }
  });


$(".mymenu li a").mouseenter(function() {
  $(this).animate({
    "marginLeft": "10px"
  }, 100);
});
	
$(".mymenu li a").mouseleave(function() {
  $(this).animate({
    "marginLeft": "0px"
  }, 100);
});

//smooth scroll
	$( document ).ready(function() {
		$(function() {
  	$('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
}); //func
}); //doc ready

$(window).on("scroll", function() {
    $("section").each(function() {
        if($(window).scrollTop() + 120 >= $(this).offset().top) {
            var id = $(this).attr("id");
            $(".anchormenu li").removeClass("active");
            $(".anchormenu li[class="+ id +"]").addClass("active");
        }
    });
});

//header change
$(window).on("scroll", function() {
    $("section").each(function() {
        if($(window).scrollTop() + 80 >= $(this).offset().top) {
           var txt = $(this).find("h1").text();
		   $("h1.title").text(txt);
        if(txt === $("h1.title").text()){
			$("h1").css({"opacity":"1"});
			$(this).find("h1").css({"opacity":"0"});
			}
		}
    });
});

$(window).on("scroll", function() {
        if($(this).scrollTop() > 600) {
			$(".totop").fadeIn();
			$(".anchormenu").css({"border-top-left-radius":"0px"});
		}
		else {
			$(".totop").fadeOut();
			$(".anchormenu").css({"border-top-left-radius":"20px"});
	}	
});

$(".anchormenu li").click(function(){
	$(this).addClass("active");
	});

$(".small-call").click(function(){
	location.href="tel:+421473211276";
});
	
});//doc ready end