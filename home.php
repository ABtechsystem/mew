<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Manish Engineering Works | Manish Engineering Works | Manish Engineering Works in India</title>
<meta name="description" content="">
<meta name="keywords" content="">

<meta property="og:site_name" content="">
<meta property="og:url" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:image" content="fb-logo.jpg">

<link rel="shortcut icon" href="/####/favicon.ico">

<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<style>
#myBoxId {z-index:999999999; position:fixed; border:0px solid #959595; padding: 20px; background:#fff; width:300px; height:auto; border-radius: 5px; margin:0 auto; left:0; right:0; top:17%;}
#myBoxId h2{ color: #1a1a1a; margin-bottom:10px;}
#myBoxId input[type=text]{ width:80%; border:1px solid #ccc; padding:10px; border-radius:5px; margin-bottom:10px; padding-left: 45px ;  }
#myBoxId input[type=button]{ width:60%; padding:10px 30px; border-radius:5px; background:#1a1a1a; color:#fff; outline:none; border:none; margin-left: 65px;}
#myBoxId input[type=button]:hover{ background:#f6c644; color:#fff; width:60%; margin-left: 65px;}

#myBoxId input[type=submit]{ width:60%; padding:10px 30px; border-radius:5px; background:#1a1a1a; color:#fff; outline:none; border:none; margin-left: 65px;}
#myBoxId input[type=submit]:hover{ background:#f6c644; color:#fff; width:60%; margin-left: 65px;}

#close{cursor:pointer; position:absolute; margin-top:-46px; right:0px; color:#fff;}
#myBoxId input.input22 {background: url(images/input22.png) top 5px left 8px no-repeat !important;  background-size: 22px 22px !important;}
#myBoxId input.input23 {background: url(images/input23.png) top 11px left 8px no-repeat !important;  background-size: 22px 15px !important;}
#myBoxId input.input24 {background: url(images/input24.png) top 4px left 11px no-repeat !important; background-size: 16px 24px !important;}
#myBoxId input:focus { background: none !important; padding-left: 5px; width:93%; transition:0.5s;}
#myBoxId input[type=button]:focus{ padding:10px 30px !important; width:60% !important; margin-left: 65px; border-radius:5px !important; background:#f6c644 !important; color:#fff !important;}

@media (max-width: 414px){
#myBoxId {width:90%; top:17%; padding: 10px;}
#myBoxId h2{ font-size:18px;}	
#close{cursor:pointer; position:absolute; margin-top:-43px; right:-10px; color:#fff;}
#myBoxId input[type=text]{ width:85%;}
}
@media (max-width: 375px){
	#myBoxId input[type=text]{ width:80%;}
	
	}

</style>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">

	<script src="<?php echo base_url(); ?>assets/js/all.js" async="" crossorigin="anonymous"></script>
	<script id="facebook-jssdk" src="<?php echo base_url(); ?>assets/js/all.js(1).download"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/resizing.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8">
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.treeview.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.treeview.css" rel="stylesheet" media="screen">


<script>

	function slideMyDiv(prm){
//		alert(prm)
		windowWidth = $(window).width();
		getbannerheight = $("#image").height()+40;
		if(windowWidth <= 1000 && windowWidth >= 700){
			$(".txtContainer").hide();
			$("#"+prm).show();
			$("#"+prm).stop(true).animate({left:0},1200, 'easeOutQuart', function(){initBg();});
			$("#image").stop(true).animate({left:-100},1200, 'easeOutQuart');
			$('html, body').animate({scrollTop: getbannerheight}, 1200, 'easeOutQuart');
		} else if(windowWidth <= 700){
			$(".txtContainer").fadeOut(150);
			$("#"+prm).show();
			$("#"+prm).stop(true).animate({left:0},1200, 'easeOutQuart', function(){initBg();});
			$("#image").stop(true).animate({left:-100},1200, 'easeOutQuart');
			$('html, body').animate({scrollTop: getbannerheight}, 1200, 'easeOutQuart');
		} else{
			//$(".txtContainer").show();
			$('html, body').animate({scrollTop: $("body").offset().top}, 1200, 'easeOutQuart');
			$("#contentDiv").stop(true).animate({left:-1200},1200, 'easeOutQuart');
			$("#"+prm).show();
			$("#"+prm).stop(true).animate({left:0},1200, 'easeOutQuart', function(){initBg();});
			$("#image").stop(true).animate({left:-100},1200, 'easeOutQuart');
		}
	}
	
	function slideBackMyDiv(prm){	
		windowWidth = $(window).width();
		if(windowWidth <= 1000 && windowWidth >= 700){
			$(".txtContainer").hide();
			$("#contentDiv").show();
		} else if(windowWidth <= 700){
			$(".txtContainer").fadeOut("fast");
			$("#contentDiv").fadeIn("fast");
		} else{
			$('html, body').animate({scrollTop: $("body").offset().top}, 1200, 'easeOutQuart');
			$("#contentDiv").stop(true).animate({left:0},1200, 'easeOutQuart');
			$("#"+prm).stop(true).animate({left:windowWidth},1200, 'easeOutQuart', function(){$("#"+prm).hide(); initBg();});
			$("#image").stop(true).animate({left:0},1200, 'easeOutQuart');
		}
	}
	
	


function myDelay(){
	var int=self.setInterval(function(){
		initBg();
		int=window.clearInterval(int);
//		alert('aa');
	},1000);
}



$(document).ready(function(){
	
	
	$(".formlink").click(function(){
		$(this).next("#frmContainer1").show();
	});
	
	$("#frmClose1").click(function(){
		$("#frmContainer1").hide();
	});
	
	
	$("#browser").treeview({
			collapsed: true
	//		animated:"normal",
	//		persist: "cookie"
		});
		$('.but_menu').click(function() {
			$('#mobilemenu, .mobileback').show();
			$('#mobilemenu, .mobileback').stop(true, true).animate({'left':0}, 500, 'easeOutExpo');
		});
		 
		$('.mobilemenuclose').click(function() {
			$('#mobilemenu, .mobileback').stop(true, true).animate({'left':-275}, 500, 'easeOutExpo', function(){
				$('#mobilemenu, .mobileback').hide();
			});
		});

//////////-----SCROLLING BEHAVIOUR-----//////////
//-- Mousewheel Speed--//
	mouseWheelEnable = true;
	$("body").mousewheel(function(event, delta) {
		if (screenWidth > 1004){
		//this.scrollTop -= (delta * 20);		
		if (mouseWheelEnable == true){
			if (delta > 0){
				a = ($(window).scrollTop() - 100);
				$('html, body').stop(true).animate({scrollTop: a}, 600, 'easeOutQuart');
			}
			else if (delta < 0){
				a = ($(window).scrollTop() + 100);
				$('html, body').stop(true).animate({scrollTop: a}, 600, 'easeOutQuart');	
			}
		}
		event.preventDefault();
		}
		
   });
//--End--//

//--Break Page Scrolling Animation on Mouseclick or Keyup--//
	$('body,html').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e){
		if ( e.type == "mousedown" || e.type == "keyup"){
			$("html,body").stop();
		}
	})
//--End--//	
//////////-----SCROLLING BEHAVIOUR END-----//////////	
	



	initBg();
	
	$("body").css({"overflow-x":"hidden"});
	
	

	$(window).resize(function(){
	  whenWindowResize();
	  clickcount = 0;
	});	
	whenWindowResize();
	
	screenWidth = $(window).width();
	function whenWindowResize(){
		screenWidth = $(window).width();
		screenHeight = $(window).height();
		
		if(screenWidth > 1000){
			$(".leftmenu-height").css({height: "auto"});
		} else{
			$(".leftmenu-height").css({height: 40});
			$("a[rel^='prettyPhoto']").attr("target", "_blank");
			$("a[rel^='prettyPhoto']").attr("rel", "");
		}
		
		
		$("#screenWidth").html(screenWidth);screenWidth = $(window).width();
		
		$(".sectionheader").css({'width':screenWidth-296});
		
		resizeImage();
		initBg();
		windowWidth = $(window).width();
		
		for (i=1;i<=30;i++){
			$("#pop"+i).css({"left":windowWidth}).hide();
		}
		
	
		$("#contentDiv").css({"left":0});
		$("#contentDiv").show();
		
		
	}

	
	clickcount = 0;
		$(".mobilesubnav").click(function(){
			clickcount++;
			getsubHeight = $(".side").height();
			if(clickcount == 1){
				$(".leftmenu-height").stop(true, true).animate({height: getsubHeight+70});
			} else if(clickcount == 2){
				$(".leftmenu-height").stop(true, true).animate({height: 30});
				clickcount = 0;
			}
		});
	



	function removeActiveClass(){
		$("#b1").removeClass("b1_active");
		$("#b2").removeClass("b2_active");
		$("#b2a").removeClass("b2a_active");
		$("#b2b").removeClass("b2b_active");
		$("#b2c").removeClass("b2c_active");
		$("#b2d").removeClass("b2d_active");
		$("#b2e").removeClass("b2e_active");
		$("#b2f").removeClass("b2f_active");
		$("#b3").removeClass("b3_active");
		$("#b4").removeClass("b4_active");
		$("#b5").removeClass("b5_active");
		$("#b6").removeClass("b6_active");
		$("#b7").removeClass("b7_active");
		$("#b8").removeClass("b8_active");		
	}

	function fadeOutAll(){
		$("#menu2").stop(true, true).slideUp("fast");
		$("#menu2a").stop(true, true).slideUp("fast");
		$("#menu2b").stop(true, true).slideUp("fast");
		$("#menu2c").stop(true, true).slideUp("fast");
		$("#menu2d").stop(true, true).slideUp("fast");
		$("#menu2e").stop(true, true).slideUp("fast");
		$("#menu2f").stop(true, true).slideUp("fast");
		$("#menu3").stop(true, true).slideUp("fast");
		$("#menu4").stop(true, true).slideUp("fast");
		$("#menu5").stop(true, true).slideUp("fast");
		$("#menu6").stop(true, true).slideUp("fast");
		$("#menu7").stop(true, true).slideUp("fast");
		$("#menu8").stop(true, true).slideUp("fast");
	}
	
	$("#b1").hover(function(){
		removeActiveClass();
		$("#b1").addClass("b1_active");
		fadeOutAll();
		$("#menu1").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b1").removeClass("b1_active");
		$("#menu1").stop(true, true).slideUp(100);		
	});
	
	$("#b2").hover(function(){
		removeActiveClass();
		$("#b2").addClass("b2_active");
		fadeOutAll();
		$("#menu2").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2").removeClass("b2_active");
		$("#menu2").stop(true, true).slideUp(100);		
	});
	
	
	$("#b2a").hover(function(){
		$("#b2a").addClass("b2a_active");
		$("#menu2a").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2a").removeClass("b2a_active");
		$("#menu2a").stop(true, true).fadeOut(1);		
	});
	
	$("#b2b").hover(function(){
		$("#b2b").addClass("b2b_active");
		$("#menu2b").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2b").removeClass("b2b_active");
		$("#menu2b").stop(true, true).fadeOut(1);		
	});
	
	$("#b2c").hover(function(){
		$("#b2c").addClass("b2c_active");
		$("#menu2c").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2c").removeClass("b2c_active");
		$("#menu2c").stop(true, true).fadeOut(1);		
	});
	
	$("#b2d").hover(function(){
		$("#b2d").addClass("b2d_active");
		$("#menu2d").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2d").removeClass("b2d_active");
		$("#menu2d").stop(true, true).fadeOut(1);		
	});
	
	$("#b2e").hover(function(){
		$("#b2e").addClass("b2e_active");
		$("#menu2e").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2e").removeClass("b2e_active");
		$("#menu2e").stop(true, true).fadeOut(1);		
	});
	
	
	$("#b2f").hover(function(){
		$("#b2f").addClass("b2f_active");
		$("#menu2f").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b2f").removeClass("b2f_active");
		$("#menu2f").stop(true, true).fadeOut(1);		
	});
	
		
	
	$("#b3").hover(function(){
		removeActiveClass();
		$("#b3").addClass("b3_active");
		fadeOutAll();
		$("#menu3").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b3").removeClass("b3_active");
		$("#menu3").stop(true, true).slideUp(100);		
	});
	
	
	$("#b4").hover(function(){
		removeActiveClass();
		$("#b4").addClass("b4_active");
		fadeOutAll();
		$("#menu4").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b4").removeClass("b4_active");
		$("#menu4").stop(true, true).slideUp(100);		
	});
	
	$("#b5").hover(function(){
		removeActiveClass();
		$("#b5").addClass("b5_active");
		fadeOutAll();
		$("#menu5").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b5").removeClass("b5_active");
		$("#menu5").stop(true, true).slideUp(100);		
	});
	
	$("#b6").hover(function(){
		removeActiveClass();
		$("#b6").addClass("b6_active");
		fadeOutAll();
		$("#menu6").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b6").removeClass("b6_active");
		$("#menu6").stop(true, true).slideUp(100);		
	});
	
	$("#b7").hover(function(){
		removeActiveClass();
		$("#b7").addClass("b7_active");
		fadeOutAll();
		$("#menu7").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b7").removeClass("b7_active");
		$("#menu7").stop(true, true).slideUp(100);		
	});
	
	$("#b8").hover(function(){
		removeActiveClass();
		$("#b8").addClass("b8_active");
		fadeOutAll();
		$("#menu8").stop(true, true).fadeIn("medium");
	}, function(){
		$("#b8").removeClass("b8_active");
		$("#menu8").stop(true, true).slideUp(100);		
	});
	
	

	
	$("#menu1").hover(function(){
		$("#b1").addClass("b1_active");
		$("#menu1").stop();
	}, function(){
		$("#menu1").stop(true, true).slideUp(100);
		$("#b1").removeClass("b1_active");
	});
	
	
	function openMenu2(){
		$("#b2").addClass("b2_active");
		$("#menu2").stop();
	}
	
	function closeMenu2(){
		$("#menu2").stop(true, true).slideUp(100);
		$("#b2").removeClass("b2_active");
	}

	$("#menu2").hover(function(){
		openMenu2();
	}, function(){
		closeMenu2();
	});
	
	$("#menu2a").hover(function(){
		openMenu2();
		$("#b2a").addClass("b2a_active");
		$("#menu2a").stop();
	}, function(){
		$("#menu2a").stop(true, true).slideUp(100);
		$("#b2a").removeClass("b2a_active");
		closeMenu2();
	});
	
	$("#menu2b").hover(function(){
		openMenu2();
		$("#b2b").addClass("b2b_active");
		$("#menu2b").stop();
	}, function(){
		$("#menu2b").stop(true, true).slideUp(100);
		$("#b2b").removeClass("b2b_active");
		closeMenu2();
	});
	
	$("#menu2c").hover(function(){
		openMenu2();
		$("#b2c").addClass("b2c_active");
		$("#menu2c").stop();
	}, function(){
		$("#menu2c").stop(true, true).slideUp(100);
		$("#b2c").removeClass("b2c_active");
		closeMenu2();
	});
	
	
	$("#menu2d").hover(function(){
		openMenu2();
		$("#b2d").addClass("b2d_active");
		$("#menu2d").stop();
	}, function(){
		$("#menu2d").stop(true, true).slideUp(100);
		$("#b2d").removeClass("b2d_active");
		closeMenu2();
	});
	
	
	$("#menu2e").hover(function(){
		openMenu2();
		$("#b2e").addClass("b2e_active");
		$("#menu2e").stop();
	}, function(){
		$("#menu2e").stop(true, true).slideUp(100);
		$("#b2e").removeClass("b2e_active");
		closeMenu2();
	});
	
	
	
	$("#menu2f").hover(function(){
		openMenu2();
		$("#b2f").addClass("b2f_active");
		$("#menu2f").stop();
	}, function(){
		$("#menu2f").stop(true, true).slideUp(100);
		$("#b2f").removeClass("b2f_active");
		closeMenu2();
	});
	
	
	$("#menu3").hover(function(){
		$("#b3").addClass("b3_active");
		$("#menu3").stop();
	}, function(){
		$("#menu3").stop(true, true).slideUp(100);
		$("#b3").removeClass("b3_active");
	});
	
	$("#menu4").hover(function(){
		$("#b4").addClass("b4_active");
		$("#menu4").stop();
	}, function(){
		$("#menu4").stop(true, true).slideUp(100);
		$("#b4").removeClass("b4_active");
	});
	
	$("#menu5").hover(function(){
		$("#b5").addClass("b5_active");
		$("#menu5").stop();
	}, function(){
		$("#menu5").stop(true, true).slideUp(100);
		$("#b5").removeClass("b5_active");
	});
	
	$("#menu6").hover(function(){
		$("#b6").addClass("b6_active");
		$("#menu6").stop();
	}, function(){
		$("#menu6").stop(true, true).slideUp(100);
		$("#b6").removeClass("b6_active");
	});
	
	$("#menu7").hover(function(){
		$("#b7").addClass("b7_active");
		$("#menu7").stop();
	}, function(){
		$("#menu7").stop(true, true).slideUp(100);
		$("#b7").removeClass("b7_active");
	});
	
	$("#menu8").hover(function(){
		$("#b8").addClass("b8_active");
		$("#menu8").stop();
	}, function(){
		$("#menu8").stop(true, true).slideUp(100);
		$("#b8").removeClass("b8_active");
	});
	
	
	$("#btnYes").click(function(){
		$("#frmContainer").show();
		$("#btnSlider").animate({left:325},800, 'easeOutBounce');
		$("#frmSlider").animate({top:0},800, 'easeOutBounce');
	});
	

	myFormVar = "";
//	alert(myFormVar);
	
	if (myFormVar == "open"){
		$("#frmContainer").show();
		$("#btnSlider").animate({left:325},800, 'easeOutBounce');
		$("#frmSlider").animate({top:0},800, 'easeOutBounce');
	}
	
	$("#frmClose").click(function(){
		$("#btnSlider").animate({left:-1}, 600, 'easeOutQuart');
		$("#frmSlider").animate({top:300}, 600, 'easeOutQuart', function(){	$("#frmContainer").hide();});
	});	
	
	
	
	
	
	
	
	
	
	
	
	$window = $(window);
    $(window).scroll(function() {
//	alert($window.scrollTop());
		if (screenWidth > 1004){
			var yPos = -($window.scrollTop() / sp);
			var coords = (yPos) + 'px';
//			$("#image").css({ top: coords });
			$("#image").stop(true).animate({top: coords},1000, 'easeOutQuart');
		}
	});	

});


</script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_rounded',slideshow:5000, autoplay_slideshow: false});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true, autoplay_slideshow: false});
	});
</script>

<script>
$(document).ready(function() {
	
	function fadeOutAllcontact(){
		$("#chandigarh-content").stop(true, true).hide();
		$("#pantnagar-content").stop(true, true).hide();
		$("#kichha-content").stop(true, true).hide();
		$("#noida-content").stop(true, true).hide();
		$("#greatornoida-content").stop(true, true).hide();
		$("#ahmedabad-content").stop(true, true).hide();
		$("#bhopal-content").stop(true, true).hide();
		$("#kolkata-content").stop(true, true).hide();
		$("#baroda-content").stop(true, true).hide();
		$("#indore-content").stop(true, true).hide();
		$("#mumbai-content").stop(true, true).hide();
		$("#pune-content").stop(true, true).hide();
		$("#hyderabad-content").stop(true, true).hide();
		$("#banglore-content").stop(true, true).hide();
		$("#chennaim-content").stop(true, true).hide();
		$("#chennair-content").stop(true, true).hide();
	}
	
	$("#chandigarh").click(function(){
			 fadeOutAllcontact();
			$("#chandigarh-content").fadeIn(500);
	});
	
	$("#pantnagar").click(function(){
			 fadeOutAllcontact();
			$("#pantnagar-content").fadeIn(500);
	});
	
	$("#kichha").click(function(){
			 fadeOutAllcontact();
			$("#kichha-content").fadeIn(500);
	});
	
	$("#noida").click(function(){
			 fadeOutAllcontact();
			$("#noida-content").fadeIn(500);
	});
	
	$("#greatornoida").click(function(){
			 fadeOutAllcontact();
			$("#greatornoida-content").fadeIn(500);
	});
	
	$("#ahmedabad").click(function(){
			 fadeOutAllcontact();
			$("#ahmedabad-content").fadeIn(500);
	});
	
	$("#bhopal").click(function(){
			 fadeOutAllcontact();
			$("#bhopal-content").fadeIn(500);
	});
	
	$("#kolkata").click(function(){
			 fadeOutAllcontact();
			$("#kolkata-content").fadeIn(500);
	});
	
	$("#baroda").click(function(){
			 fadeOutAllcontact();
			$("#baroda-content").fadeIn(500);
	});
	
	$("#indore").click(function(){
			 fadeOutAllcontact();
			$("#indore-content").fadeIn(500);
	});
	
	$("#mumbai").click(function(){
			 fadeOutAllcontact();
			$("#mumbai-content").fadeIn(500);
	});
	
	$("#pune").click(function(){
			 fadeOutAllcontact();
			$("#pune-content").fadeIn(500);
	});
	
	$("#hyderabad").click(function(){
			 fadeOutAllcontact();
			$("#hyderabad-content").fadeIn(500);
	});
	
	$("#banglore").click(function(){
			 fadeOutAllcontact();
			$("#banglore-content").fadeIn(500);
	});
	
	$("#chennaim").click(function(){
			 fadeOutAllcontact();
			$("#chennaim-content").fadeIn(500);
	});
	
	$("#chennair").click(function(){
			 fadeOutAllcontact();
			$("#chennair-content").fadeIn(500);
	});
	
	$(".closepopup").click(function(){
			$("#chandigarh-content, #pantnagar-content, #kichha-content, #noida-content, #greatornoida-content, #ahmedabad-content, #bhopal-content, #kolkata-content, #baroda-content, #indore-content, #mumbai-content, #pune-content, #hyderabad-content, #banglore-content, #chennaim-content, #chennair-content").fadeOut(500);
	});
	


});

</script>

<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    $( "#accordion" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion1" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion2" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion3" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion4" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion5" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion6" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion7" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion8" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion9" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion10" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion11" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion12" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion13" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion14" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion15" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion16" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion17" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion18" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion19" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion20" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion21" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion122" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion123" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion24" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion25" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion26" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion27" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion28" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion29" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion30" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion31" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion32" ).accordion({
		autoHeight: false,
		navigation: true
	});	
		$( "#accordion33" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
	$( "#accordion34" ).accordion({
		autoHeight: false,
		navigation: true
	});
	
	$( "#accordion35" ).accordion({
		autoHeight: false,
		navigation: true
	});
	
		$( "#accordion36" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
		$( "#accordion37" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
		$( "#accordion38" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
		$( "#accordion39" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
		$( "#accordion40" ).accordion({
		autoHeight: false,
		navigation: true
	});	
		$( "#accordion41" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
		$( "#accordion42" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
	$( "#accordion43" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion44" ).accordion({
		autoHeight: false,
		navigation: true
	});
	$( "#accordion45" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	$( "#accordion46" ).accordion({
		autoHeight: false,
		navigation: true
	});					
	$( "#accordion47" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	$( "#accordion48" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	$( "#accordion49" ).accordion({
		autoHeight: false,
		navigation: true
	});	
	
	
	$("#accordion, #accordion1, #accordion2, #accordion3, #accordion4, #accordion5, #accordion6, #accordion7, #accordion8, #accordion9, #accordion10, #accordion11, #accordion12, #accordion13, #accordion14, #accordion15, #accordion16, #accordion17, #accordion18, #accordion19, #accordion20, #accordion21, #accordion122, #accordion123, #accordion24, #accordion25, #accordion26, #accordion27, #accordion28, #accordion29, #accordion30, #accordion31, #accordion32, #accordion33, #accordion34, #accordion35, #accordion36, #accordion37, #accordion38, #accordion39, #accordion40, #accordion41, #accordion42, #accordion43, #accordion44, #accordion45, #accordion46, #accordion47, #accordion48, #accordion49").click(function(){
		myDelay();
	});

	

  });
  
  
  
</script>

<!-- Carousel Home Page -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/skin.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(3);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(3);
    });
	

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto:2,
        wrap: 'circular',
        initCallback: mycarousel_initCallback
    });
	
});
</script>

<!--End-->




<script>

/*$(window).load(function(){
	$("#hpContent").show();
	$("#myLoader").fadeOut(100);
	
	$("#myLoaderBg").fadeOut(1000, function(){
		$(".hptopbar").stop(true).animate({'margin-left':122},{duration:500}, 'easeOutQuart');
		$(".hpbottombar").stop(true).delay(300).animate({'margin-left':257}, 500, 'easeOutQuart', function(){
			$("#myLogos").fadeIn(200);
		});
	});
})*/



$(document).ready(function(){
	$(".hptopbar").stop(true).animate({'margin-left':122},{duration:500}, 'easeOutQuart');
	$(".hpbottombar").stop(true).delay(300).animate({'margin-left':257}, 500, 'easeOutQuart', function(){
		$("#myLogos").fadeIn(200);
	});
})


	

$(document).ready(function(){
	windowWidth = $(window).width();
	$(".hptopbar").css({'margin-left':windowWidth});
	$(".hpbottombar").css({'margin-left':windowWidth});
	
	arrTargYears = new Array(218, -57, -332, -605, -882, -982);
	yrCounter = arrTargYears.length-1;
	//alert(yrCounter)
	yrSpeed = 500;
	$("#tm-years-slider").stop(true).animate({left:arrTargYears[(arrTargYears.length-1)]},{duration:1}, 'easeOutQuart');
	
	$("#tm-arr-left").removeClass("tm-arr-left-hover");
	$("#tm-arr-right").addClass("tm-arr-right-hover");
	
	$("#tm-arr-left").click(function(){
		resetYearPos();
		unanimateBox();
		yrCounter--;
		$("#tm-arr-right").removeClass("tm-arr-right-hover");
		if (yrCounter == -1){
			yrCounter = 0;
		} else {
			$("#tm-years-slider").stop(true).animate({left:arrTargYears[yrCounter]},{duration:yrSpeed}, 'easeOutQuart');		
		}
		
		if (yrCounter == 0){
			$("#tm-arr-left").addClass("tm-arr-left-hover");
		}
	});
	
	$("#tm-arr-right").click(function(){
		resetYearPos();
		unanimateBox();
		yrCounter++;
		$("#tm-arr-left").removeClass("tm-arr-left-hover");
		if (yrCounter == (arrTargYears.length)){
			yrCounter = ((arrTargYears.length)-1);
		} else {
			$("#tm-years-slider").stop(true).animate({left:arrTargYears[yrCounter]},{duration:yrSpeed}, 'easeOutQuart');
		}
		
		if (yrCounter == (arrTargYears.length-1)){
			$("#tm-arr-right").addClass("tm-arr-right-hover");
		}
	});
	
	
	
	$("#hp-ar-left").addClass("hp-ar-left-hover");
	$("#hp-ar-right").removeClass("hp-ar-right-hover");
	
	myCounter = 0;
			
	$("#hp-ar-left").click(function(){
		myCounter--;
		if (myCounter == -1){
			myCounter = 0;
		}
//		alert(myCounter);
		$("#hp-ar-left").removeClass("hp-ar-left-hover");
		$("#hp-ar-right").removeClass("hp-ar-right-hover");
		if (myCounter == 1){
			$("#hp-scroll").stop(true).animate({left:-692},{duration:800}, 'easeOutQuart');
		} else if (myCounter == 0){
			$("#hp-scroll").stop(true).animate({left:0},{duration:800}, 'easeOutQuart');
			$("#hp-ar-left").addClass("hp-ar-left-hover");
		}
	});	
	
	$("#hp-ar-right").click(function(){
		myCounter++;
		if (myCounter == 3){
			myCounter = 2;
		}
//		alert(myCounter);
		$("#hp-ar-left").removeClass("hp-ar-left-hover");
		$("#hp-ar-right").removeClass("hp-ar-right-hover");
		if (myCounter == 1){
			$("#hp-scroll").stop(true).animate({left:-692},{duration:800}, 'easeOutQuart');
		} else if (myCounter == 2){
			$("#hp-scroll").stop(true).animate({left:-1384},{duration:800}, 'easeOutQuart');
			$("#hp-ar-right").addClass("hp-ar-right-hover");
		}
		
	});
	

	
	



	function populateYears(){
		yrBgPos = "0px 0px";
		yrBgPosTarg = "0px -51px";
	
		yrTotalYears = $("#tm-years-slider div").length;
		//alert(yrTotalYears);
		yrYearWidth = 55;
		yrSliderWidth = (yrYearWidth*yrTotalYears)+"px";
		//	alert(yrSliderWidth);

		arrBgPos = new Array();
		arrBgPosTarg = new Array();
	
		$("#tm-years-slider").css({'width':yrSliderWidth});
	
		for (i=1; i<(yrTotalYears+1); i++){
		//alert("#yr"+i);
			$("#yr"+i).css({'float':'left','width':'55px','height':'35px','background-image':'url(images/years.gif)','background-repeat':'no-repeat','cursor':'pointer','background-position':yrBgPos});

			arrBgPos[i]=yrBgPos;
			arrBgPosTarg[i]=yrBgPosTarg;
		
			yrBgPos = ((-(i*yrYearWidth) + "px") + " " + "0px");
			yrBgPosTarg = ((-(i*yrYearWidth) + "px") + " " + "-51px")

		//		alert(i + " : " + yrBgPosTarg);
		}
	}
	
	populateYears();
	
	

	
	function resetYearPos(){
		for (i=1; i<(yrTotalYears+1); i++){
			$("#yr"+i).css({'background-position':arrBgPos[i]});
		}
//		unanimateBox();
	}
	
	
	function rollYearPos(prm){
		$("#yr"+prm).css({'background-position':arrBgPosTarg[prm],'cursor':'pointer'});
	}

	function hideAllBoxes(){
		for(i=1; i<=23;i++){
			$("#bx" + i).css({'display':'none'});
		}
	}

	hideAllBoxes();
	resetYearPos();
	unanimateBox();
	$("#tlArrow").stop(true).animate({left:0,top:0,width:0,height:0},500, 'easeOutQuart');	
		
	function animateBox(prmTarget,prmWidth,prmHeight,prmLeft,prmTop,prmArrowLeft){
		hideAllBoxes();
		$("#boxcont").stop(true).animate({left:prmLeft,top:prmTop},500, 'easeOutQuart');
		$("#box").stop(true).animate({width:prmWidth,height:prmHeight},500, 'easeOutQuart');
		$("#tlArrow").stop(true).animate({left:prmArrowLeft,top:prmHeight,width:36,height:18},500, 'easeOutQuart', function(){$(prmTarget).stop(true).fadeIn(500);});
	}
	
	function unanimateBox(){
		hideAllBoxes();
		$("#boxcont").stop(true).animate({left:200,top:0},500, 'easeOutQuart');
		$("#box").stop(true).animate({width:0,height:0},500, 'easeOutQuart');
		$("#tlArrow").stop(true).animate({left:0,top:0,width:0,height:0},500, 'easeOutQuart');
	}



//	$("#box").stop(true).animate({left:100,top:-400,width:300,height:400},500);


/*	$("#bx1, #bx2, #bx3, #bx4, #bx5, #bx6, #bx7, #bx8, #bx9, #bx10, #bx11, #bx12, #bx13, #bx14, #bx15, #bx16 ").hover(function(){}, function(){alert('aa'); resetYearPos(); unanimateBox();});*/
	

	$(".closeBtn").click(function(){
		resetYearPos();
		unanimateBox();
	});
	
	
	$("#yr1").click(function(){
		resetYearPos();
		rollYearPos(1);
		animateBox('#bx1',450,290,-70,-310,390);
	});
	
	$("#yr2").click(function(){
		resetYearPos();
		rollYearPos(2);
		animateBox('#bx2',450,290,-110,-310,207);
	});
	

	$("#yr3").click(function(){
		resetYearPos();
		rollYearPos(3);
		animateBox('#bx3',450,290,-100,-310,252);
	});
	

	$("#yr4").click(function(){
		resetYearPos();
		rollYearPos(4);
		animateBox('#bx4',450,290,-90,-310,298);
	});
	

	$("#yr5").click(function(){
		resetYearPos();
		rollYearPos(5);
		animateBox('#bx5',450,290,-80,-310,345);
	});
	

	$("#yr6").click(function(){
		resetYearPos();
		rollYearPos(6);
		animateBox('#bx6',600,300,-200,-320,520);
	});
	

	$("#yr7").click(function(){
		resetYearPos();
		rollYearPos(7);
		animateBox('#bx7',600,300,-170,-320,270);
	});
	

	$("#yr8").click(function(){
		resetYearPos();
		rollYearPos(8);
		animateBox('#bx8',450,290,-100,-310,255);		
	});
	

	$("#yr9").click(function(){
		resetYearPos();
		rollYearPos(9);
		animateBox('#bx9',450,290,-90,-310,297);		
	});
	

	$("#yr10").click(function(){
		rollYearPos(10);
		animateBox('#bx10',600,300,-220,-320,485);
	});
	

	$("#yr11").click(function(){
		resetYearPos();
		rollYearPos(11);
		animateBox('#bx11',600,350,-200,-370,520);
	});
	

	$("#yr12").click(function(){
		resetYearPos();
		rollYearPos(12);
		animateBox('#bx12',950,400,-530,-420,630);
	});

	
	$("#yr13").click(function(){
		resetYearPos();
		rollYearPos(13);
		animateBox('#bx13',550,290,-180,-310,335);
	});
	
	$("#yr14").click(function(){
		resetYearPos();
		rollYearPos(14);
		animateBox('#bx14',600,410,-190,-430,400);
	});
	
	$("#yr15").click(function(){
		resetYearPos();
		rollYearPos(15);
		animateBox('#bx15',930,410,-530,-430,795);
	});
	
	$("#yr16").click(function(){
		resetYearPos();
		rollYearPos(16);
		animateBox('#bx16',910,390,-520,-410,850);
	});
	
	$("#yr17").click(function(){
		resetYearPos();
		rollYearPos(17);
		animateBox('#bx17',900,420,-510,-440,610);
	});
	
	$("#yr18").click(function(){
		resetYearPos();
		rollYearPos(18);
		animateBox('#bx18',910,390,-520,-410,670);
	});
	
	$("#yr19").click(function(){
		resetYearPos();
		rollYearPos(19);
		animateBox('#bx19',940,440,-530,-460,640);
	});
	
	$("#yr20").click(function(){
		resetYearPos();
		rollYearPos(20);
		animateBox('#bx20',940,450,-530,-470,698);
	});
	
	$("#yr21").click(function(){
		resetYearPos();
		rollYearPos(21);
		animateBox('#bx21',940,450,-530,-470,750);
	});
	
	$("#yr22").click(function(){
		resetYearPos();
		rollYearPos(22);
		animateBox('#bx22',940,450,-530,-470,800);
	});
	
	$("#yr23").click(function(){
		resetYearPos();
		rollYearPos(23);
		animateBox('#bx23',940,450,-530,-470,860);
	});
	
	
/*	$("#yr1").hover(function(){
		rollYearPos(1);
		animateBox('#bx1',450,290,-70,-310,390);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr2").hover(function(){
		rollYearPos(2);
		animateBox('#bx2',450,290,-110,-310,207);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr3").hover(function(){
		rollYearPos(3);
		animateBox('#bx3',450,290,-100,-310,252);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr4").hover(function(){
		rollYearPos(4);
		animateBox('#bx4',450,290,-90,-310,298);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr5").hover(function(){
		rollYearPos(5);
		animateBox('#bx5',450,290,-80,-310,345);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr6").hover(function(){
		rollYearPos(6);
		animateBox('#bx6',600,300,-200,-320,520);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr7").hover(function(){
		rollYearPos(7);
		animateBox('#bx7',600,300,-170,-320,270);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr8").hover(function(){
		rollYearPos(8);
		animateBox('#bx8',450,290,-100,-310,255);		
	}, function(){
		resetYearPos();	
	});
	

	$("#yr9").hover(function(){
		rollYearPos(9);
		animateBox('#bx9',450,290,-90,-310,297);		
	}, function(){
		resetYearPos();	
	});
	

	$("#yr10").hover(function(){
		rollYearPos(10);
		animateBox('#bx10',600,300,-220,-320,485);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr11").hover(function(){
		rollYearPos(11);
		animateBox('#bx11',600,350,-200,-370,520);
	}, function(){
		resetYearPos();	
	});
	

	$("#yr12").hover(function(){
		rollYearPos(12);
		animateBox('#bx12',950,400,-530,-420,630);
	}, function(){
		resetYearPos();	
	});

	
	$("#yr13").hover(function(){
		rollYearPos(13);
		animateBox('#bx13',550,290,-180,-310,335);
	}, function(){
		resetYearPos();	
	});
	
	$("#yr14").hover(function(){
		rollYearPos(14);
		animateBox('#bx14',600,410,-190,-430,400);
	}, function(){
		resetYearPos();	
	});
	
	$("#yr15").hover(function(){
		rollYearPos(15);
		animateBox('#bx15',930,410,-530,-430,795);
	}, function(){
		resetYearPos();	
	});
	
	$("#yr16").hover(function(){
		rollYearPos(16);
		animateBox('#bx16',910,390,-520,-410,850);
	}, function(){
		resetYearPos();	
	});*/
	
	
});

</script>

<script type="text/javascript">
$(document).ready(function(){	
	$("#close").click(function(){
	$("#black-bg").fadeOut("fast");
	$("#myBoxId").fadeOut("fast");
	});
});
</script>
<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>
<body data-gr-c-s-loaded="true" style="overflow-x: hidden;">
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    $('#frmJONL').validate({
        rules: {
            nameJONL: {
				required: true,
				minlength: 1
			},
			
			emailJONL: {
                required: true,
                email: true,
				minlength: 5
            },
			
			mobileJONL: {
				required: true,
				//number: true,
				//minlength: 10
			},
        },
        errorPlacement: function(){
            return false;
        },
        submitHandler: function (form) { 
            //form.submit();
			GetFrmJONLVal();
        }
    });

});
</script>

<style type="text/css">
	.error {
    border: 1px solid #f00 !important; padding:2px; width:98%;
}

	.valid {
    border: 1px solid #ccc;
}
</style>

<script language="Javascript">
  <!--
  function isNumberKey(evt)
	{
	 var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	 return true;
	}
  //-->
</script>

<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}	
		return xmlhttp;
    }
	
	function GetFrmJONLVal() {
	document.getElementById('divJONLLoader').innerHTML="<img border='0' src='images/ajax-loader-4.gif'>";
	name = document.frmJONL.nameJONL.value;
	email = document.frmJONL.emailJONL.value;
	mobile = document.frmJONL.mobileJONL.value;	
	var strURL="popup-subscribe-newsletter-next.asp?name="+name+"&email="+email+"&mobile="+mobile;	
	// alert(strURL);
	var req = getXMLHTTP();		
	if (req) {			
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {						
					document.getElementById('divJONL').innerHTML = "<p style='color:#2E2E2E; font-family:Arial; font-size:12px; margin-top:121px; margin-bottom:121px; text-align:center;'>Thank you for joining our newsletter.</p>";
					//window.location.href="/thankyou.asp";
				} else {
					alert("There was a problem while using selection");
				}
			}				
		}			
		req.open("GET", strURL, true);
		req.send(null);
	}		
}
</script>
<div style="width: 100%; height: 100%; background: rgb(0, 0, 0); position: fixed; top: 0px; z-index: 999999; opacity: 0.7; display: none;" id="black-bg"></div>
<div id="myBoxId" style="display: none;"><div id="close" style="">
	<img src="<?php echo base_url(); ?>assets/images/skip.png" border="0"></div>
	<div id="divJONL">
	<form name="frmJONL" id="frmJONL" method="post" autocomplete="off" novalidate="novalidate">
		<h2>Join Our Newsletter</h2>
		<p style="color:#2E2E2E; font-family:Arial; font-size:12px; margin-bottom:20px;">Get news of the latest developments and information on Pre-Engineered Steel Buildings</p>		
		<input type="text" name="emailJONL" id="emailJONL" class="input23" placeholder="Enter Your Email" maxlength="35">
		<input type="text" name="nameJONL" id="nameJONL" class="input22" placeholder="Enter Your Name" maxlength="35">
		<input type="text" name="mobileJONL" id="mobileJONL" class="input24" placeholder="Enter Your Mobile" onkeypress="return isNumberKey(event);">
		<span id="divJONLLoader"><input type="submit" name="submit" value="Subscribe Now"></span>
	</form>
	</div> 
</div>	
<!--<div id="myLoader">
	<img src="images/loader-logo.gif" alt="interarch" border="0" /><br /><img src="images/loader.gif" alt="loader" border="0" width="22" height="22" />
</div>
<div id="myLoaderBg"></div>-->


<!--<div id="image"><img src="images/bg-home.jpg" border="0" /></div>-->



<div class="sideWhite"></div>
<div id="header"> 
  
  <div id="menu1">
	<div class="mn1_underline"></div>
	<div class="clear"></div>
	<div class="mnlinks">
		<ul>
		
		<li><a href="/####/best-peb-companies-overview.asp">Overview</a></li>
			<li><a href="/####/peb-structure-manufacturer.asp">History</a></li>
			<li><a href="/####/about-management-team.asp">Board of Directors</a></li>
            <li><a href="/####/about-management-team-members.asp">Management Team</a></li>
			<li><a href="/####/about-key-team-members.asp">Key Team Members</a></li>
			<li><a href="/####/pre-engineered-steel-structures.asp">Capabilities</a></li>
			<li><a href="/####/pre-engineered-steel-buildings.asp">Manufacturing Facilities</a></li>
			<li><a href="/####/about-achievements.asp">Achievements</a></li>
            <li><a href="/####/about-awards.asp">Awards</a></li>
             <li><a href="/####/key-policies.asp"><span>Key Policies</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>



<div id="menu2">
	<div class="mn2_underline"></div>
	<div class="clear"></div>
	<div class="mnlinks2">
		<ul>
			<li id="b2a" onclick="window.location=&#39;pre-engineered-metal-buildings.asp">Pre-Engineered Metal Building Systems</li>
			<li id="b2b" onclick="window.location=&#39;metal-roof-and-wall-systems.asp&#39;;">TRACDEK® Metal Roof &amp;<br>Wall Systems</li>
			<li id="b2c" onclick="window.location=&#39;products-inter-light-building-systems.asp&#39;;">Light Building Systems</li>
			<!--<li id="b2d" onClick="window.location='products-structural-steel-systems.asp?links=pr4';">Structural Steel<br />Systems</li> -->
			<li id="b2e" onclick="window.location=&#39;products-trac-suspended-ceiling-systems.asp&#39;;">TRAC® Suspended Ceiling Systems</li>
			
			
			<li id="b2f" onclick="window.location=&#39;innovation-in-steel.asp&#39;;">Structural Steel &amp; Infrastructure</li>
			
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div id="menu2a">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/th-bs1.jpg" alt="pre engineered steel structures india" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="/####/pre-engineered-metal-buildings.asp">About the Product</a></li>
			<li><a href="/####/peb-buildings-design-engineering.asp">Design and Engineering</a></li>
			<li><a href="/####/pre-engineered-buildings-india-applications.asp">Applications</a></li>
			<li><a href="/####/products-pre-engineered-metal-building-systems-advantages.asp">Advantages</a></li>
			<li><a href="/####/products-pre-engineered-metal-building-systems-interactive.asp">Interactive</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div id="menu2b">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/th-bs2.jpg" alt="residential steel buildings" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="/####/metal-roof-and-wall-systems.asp">About the Product</a></li>
			<li><a href="/####/products-tracdek-metal-roof-wall-systems-design-and-engineering.asp">Roof &amp; Wall Profiles</a></li>
			<li><a href="/####/products-tracdek-metal-roof-wall-systems-applications.asp">Applications</a></li>
			<li><a href="/####/products-tracdek-metal-roof-wall-systems-advantages.asp">Advantages</a></li>
			<li><a href="/####/products-tracdek-metal-roof-wall-systems-interactive.asp">Interactive</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div id="menu2c">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/th-bs3.jpg" alt="peb for warehouses" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="#/products-inter-light-building-systems.asp">About the Product</a></li>
			<li><a href="#/products-inter-light-building-systems-key-features.asp">Key Features</a></li>
			<li><a href="#/products-inter-light-building-systems-applications.asp">Applications</a></li>
			<li><a href="#/products-inter-light-building-systems-advantages.asp">Advantages</a></li>
			<li><a href="#/products-inter-light-building-systems-how-it-works.asp">How It Works</a></li>
			<li><a href="#/products-inter-light-building-systems-interactive.asp">Interactive</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<div id="menu2d">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/th-bs4.jpg" alt="steel structures" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="#/products-structural-steel-systems.asp">About the Product</a></li>
			<li><a href="#/products-structural-steel-systems-design-engineering.asp">Design &amp; Engineering</a></li>
			<li><a href="#/products-structural-steel-systems-applications.asp">Applications</a></li>
			<li><a href="#/products-structural-steel-systems-advantages.asp">Advantages</a></li>
			<li><a href="#/products-structural-steel-systems-interactive.asp">Interactive</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div id="menu2e">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/th-bs5.jpg" alt="steel buildings india" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="#/products-trac-suspended-ceiling-systems.asp">About the Product</a></li>
			<li><a href="#/products-trac-suspended-ceiling-systems-design-engineering.asp">Design &amp; Engineering</a></li>
			<li><a href="#/products-trac-suspended-ceiling-systems-applications.asp">Applications</a></li>
			<li><a href="#/products-trac-suspended-ceiling-systems-advantages.asp">Advantages</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>



<div id="menu3">
	<div class="mn3_underline"></div>
	<div class="clear"></div>
	<div class="mnlinks">
		<ul>
			<li><a href="#/turnkey-project-management.asp">Turnkey Project Management</a></li>
			<li><a href="#/epc-solutions-logistics-and-delivery.asp">Logistics &amp; Delivery</a></li>
			<li><a href="#/epc-solutions-customized-value-addition.asp">Customized Value Addition</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<div id="menu4">
	<div class="mn4_underline"></div>
	<div class="clear"></div>
	<div class="mnlinks">
		<ul>
			<li><a href="#/pre-engineered-buildings.asp">Manish Engineering Works</a></li>
			<li><a href="#/projects-light-buildings.asp">Light Buildings</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<div id="menu5">
	<div class="mnlinks">
		<ul>
			<li><a href="#/newsletter.asp">Newsletter Archives</a></li>
			<li><a href="#/e-campaign.asp">E-Campaigns</a></li>
			<!--<li><a href="e-campaign.asp?links=cam">E-Campaigns</a></li>-->
			<li><a href="#/casestudies.asp">Case Studies</a></li>
			<li><a href="#/project-spotlight.asp">Project Spotlight</a></li>
			<li><a href="#/corporate-corporate-av.asp">Corporate AV </a></li>
			<li><a href="#/corporate-testimonial.asp"><span>Testimonials</span></a></li>
			<li><a href="#/corporate-events.asp"><span>Events</span></a></li>
			<li><a href="#/Festival-Greetings.asp">Festival Greetings   </a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>




<div id="menu7">
	<div class="mnlinks">
		<ul>
			<li><a href="#/news.asp">New Project Wins</a></li>
			<li><a href="#/pressCoverages.asp">Press Coverage</a></li>
			
		</ul>
	</div>
	<div class="clear"></div>
</div>



<div id="menu8">
	<div class="mnlinks">
		<ul>
			<li><a href="#/hr-join-our-world.asp">Join Our World</a></li>
			<li><a href="#/hr-our-culture.asp">Our Culture</a></li>
			<li><a href="#/hr-our-people.asp">Our People</a></li>
			<li><a href="#/hr-learning-development.asp">Learning &amp; Development</a></li>
			<!--<li><a href="http://careers.interarchbuildings.com" target="_blank">Careers</a></li>-->
			<li><a href="#/hr-internal-news.asp">Interarch Publication</a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>


<div id="menu2f" style=" height:290px;">
	<div style="margin:15px 0px 0px 15px;"><img src="<?php echo base_url(); ?>assets/images/interarchinfra-menu-th.jpg" alt="steel buildings india" border="0"></div>
	<div class="mnsublinks">
		<ul>
			<li><a href="#/innovation-in-steel.asp">Innovation with steel</a></li>
			<li><a href="#/interarch-structural-steel.asp">Why use MEW Structural Steel</a></li>
			<li><a href="#/steel-standards.asp">Steel Standards</a></li>
			<li><a href="#/applications.asp">Applications </a></li>
            <li><a href="#/project_experiences.asp">Project Experiences</a></li>
			<li><a href="#/design-gallery.asp">Design Gallery </a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>




	<div class="hd-container">
		<div class="hd-left">
			<div id="b1" onclick="window.location=&#39;about-overview.asp;"></div>
			<div id="b2" onclick="window.location=&#39;products-pre-engineered-metal-building-systems.asp;"></div>
			<div id="b3" onclick="window.location=&#39;epc-solutions-turnkey-project-management.asp;"></div>
			<div id="b4" onclick="window.location=&#39;turnkey-products-industry.asp;"></div>
			<div class="clear"></div>
		</div>
		<div class="hd-right">
			<div class="toplinks">
				<div id="b5" onclick="window.location=&#39;newsletter.asp&#39;;" style="width:66px;">Corporate</div>
				<!--<div id="b6" onClick="window.location='buildinginnovators.asp?links=bi';" style="width:109px;">Building Innovators</div>-->
				<div id="b7" onclick="window.location=&#39;news.asp&#39;;" style="width:90px;">News Updates</div>
				<div id="b8" onclick="window.location=&#39;hr-join-our-world.asp&#39;;" style="width:59px;">HR Desk</div>
				<div style="width:40px;"><a href="#/contactus.asp">Contact</a></div>
			</div>
		</div>
		<div class="clear"></div>
		<div style="width:445px; height:5px; background-color:#F6C644; float:left; margin-left:32px;"></div>
	</div> 
  
</div>
<div id="headermob"> <a href="javascript:;" class="but_menu" style="float:right; padding:4px 6px;"><img src="<?php echo base_url(); ?>assets/images/icon_menu.png" alt="menu" border="0"></a>
  <div class="clear"></div>
  <div class="mainlogo"><a href="#/" hreflang="en"><img src="<?php echo base_url(); ?>assets/images/logo.gif" border="0" alt="MEW"></a></div>
</div>
<div class="mobileback"></div>
<div id="mobilemenu">
  <div class="mobilemenuclose"><img src="<?php echo base_url(); ?>/assets/closemenu.gif" alt="close" border="0"></div>
  <div class="mobilemenucontent">
    <ul id="browser" class="treeview">
      <li class="expandable"><span style="border-top:1px dashed #000;">About Us</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/best-peb-companies-overview.asp"><span>Overview</span></a></li>
          <li><a href="#/peb-structure-manufacturer.asp"><span>History</span></a></li>
          <li><a href="#/about-management-team.asp"><span>Board of Directors</span></a></li>
          <li><a href="#/about-management-team-members.asp"><span>Management Team</span></a></li>
          <li><a href="#/about-key-team-members.asp"><span>Key Team Members</span></a></li>
          <li><a href="#/pre-engineered-steel-structures.asp"><span>Capabilities</span></a></li>
          <li><a href="#/pre-engineered-steel-buildings.asp"><span>Manufacturing Facilities</span></a></li>
          <li><a href="#/about-achievements.asp"><span>Achievements</span></a></li>
          <li class="last"><a href="#/about-awards.asp"><span>Awards</span></a></li>
        </ul>
      </li>
      <li class="expandable"><span>Building Divisions</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li class="expandable"><span>Pre-Engineered Metal Building Systems</span>
            <ul style="display: none;">
              <li><a href="#/pre-engineered-metal-buildings.asp"><span>About the Product</span></a></li>
              <li><a href="#/peb-buildings-design-engineering.asp"><span>Design and Engineering</span></a></li>
              <li><a href="#/pre-engineered-buildings-india-applications.asp"><span>Applications</span></a></li>
              <li><a href="#/products-pre-engineered-metal-building-systems-advantages.asp"><span>Advantages</span></a></li>
              <li class="last"><a href="#/products-pre-engineered-metal-building-systems-interactive.asp"><span>Interactive</span></a></li>
            </ul>
          </li>
          <li class="expandable"><span>TRACDEK® Metal Roof &amp;<br>
            Wall Systems</span>
            <ul style="display: none;">
              <li><a href="#/metal-roof-and-wall-systems.asp"><span>About the Product</span></a></li>
              <li><a href="#/products-tracdek-metal-roof-wall-systems-design-and-engineering.asp"><span>Roof &amp; Wall Profiles</span></a></li>
              <li><a href="#/products-tracdek-metal-roof-wall-systems-applications.asp"><span>Applications</span></a></li>
              <li><a href="#/products-tracdek-metal-roof-wall-systems-advantages.asp"><span>Advantages</span></a></li>
              <li class="last"><a href="#/products-tracdek-metal-roof-wall-systems-interactive.asp"><span>Interactive</span></a></li>
            </ul>
          </li>
          <li class="expandable"><span>MEW Light Building<br>
            Systems</span>
            <ul style="display: none;">
              <li><a href="#/products-inter-light-building-systems.asp"><span>About the Product</span></a></li>
              <li><a href="#/products-inter-light-building-systems-key-features.asp"><span>Key Features</span></a></li>
              <li><a href="#/products-inter-light-building-systems-applications.asp"><span>Applications</span></a></li>
              <li><a href="#/products-inter-light-building-systems-advantages.asp"><span>Advantages</span></a></li>
              <li><a href="#/products-inter-light-building-systems-how-it-works.asp"><span>How It Works</span></a></li>
              <li class="last"><a href="#/products-inter-light-building-systems-interactive.asp"><span>Interactive</span></a></li>
            </ul>
          </li>
          <li class="expandable"><span>TRAC® Suspended Ceiling Systems</span>
            <ul style="display: none;">
              <li><a href="#/products-trac-suspended-ceiling-systems.asp"><span>About the Product</span></a></li>
              <li><a href="#/products-trac-suspended-ceiling-systems-design-engineering.asp"><span>Design &amp; Engineering</span></a></li>
              <li><a href="#/products-trac-suspended-ceiling-systems-applications.asp"><span>Applications</span></a></li>
              <li class="last"><a href="#/products-trac-suspended-ceiling-systems-advantages.asp"><span>Advantages</span></a></li>
            </ul>
          </li>
          <li class="expandable lastExpandable"> <span>Structural Steel &amp; Infrastructure</span>
            <ul style="display: none;">
              <li><a href="#/innovation-in-steel.asp"><span>Innovation with steel</span></a></li>
              <li><a href="#/MEW-structural-steel.asp"><span>Why use MEW Structural Steel</span></a></li>
              <li><a href="#/steel-standards.asp"><span>Steel Standards</span></a></li>
              <li><a href="#/applications.asp"><span>Applications</span></a></li>
              <li><a href="#/project_experiences.asp"><span>Project Experiences</span></a></li>
              <li class="last"><a href="#/design-gallery.asp"><span>Design Gallery</span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="expandable"><span>EPC Solutions</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/turnkey-project-management.asp"><span>Turnkey Project Management</span></a></li>
          <li><a href="#/epc-solutions-logistics-and-delivery.asp"><span>Logistics &amp; Delivery</span></a></li>
          <li class="last"><a href="#/epc-solutions-customized-value-addition.asp"><span>Customized Value Addition</span></a></li>
        </ul>
      </li>
      <li class="expandable"><span>Projects</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/pre-engineered-buildings.asp"><span>Manish Engineering Works</span></a></li>
          <li class="last"><a href="#/projects-light-buildings.asp"><span>MEW Light Buildings</span></a></li>
        </ul>
      </li>
      <li class="expandable"><span>Corporate</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/newsletter.asp"><span>Newsletter Archives</span></a></li>
          <li><a href="#/e-campaign.asp"><span>E-Campaigns</span></a></li>
          <li><a href="#/casestudies.asp"><span>Case Studies</span></a></li>
          <li><a href="#/project-spotlight.asp"><span>Project Spotlight</span></a></li>
          <li class="last"><a href="#/corporate-corporate-av.asp"><span>Corporate AV</span></a></li>
          <!--<li><a href="corporate-testimonial.asp"><span>Testimonial</span></a></li>
			<li><a href="corporate-building-innovators.asp"><span>Building Innovators</span></a></li>-->
        </ul>
      </li>
      <li class="expandable"><span>News Updates</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/news.asp"><span>New Project Wins</span></a></li>
          <li class="last"><a href="#/pressCoverages.asp"><span>Press Coverage</span></a></li>
        </ul>
      </li>
      <li class="expandable"><span>HR Desk</span>
        <ul style="padding-bottom: 30px; display: none;">
          <li><a href="#/hr-join-our-world.asp"><span>Join Our World</span></a></li>
          <li><a href="#/hr-our-culture.asp"><span>Our Culture</span></a></li>
          <li><a href="#/hr-our-people.asp"><span>Our People</span></a></li>
          <li><a href="#/hr-learning-development.asp"><span>Learning &amp; Development</span></a></li>
          <!--<li><a href="http://careers.MEWbuildings.com" target="_blank"><span>Careers</span></a></li>-->
          <li class="last"><a href="#/hr-internal-news.asp"><span>MEW Publication</span></a></li>
        </ul>
      </li>
      <li class="last"><a href="#/contactus.asp"><span>Contact</span></a></li>
    </ul>
  </div>
</div>


<div id="hpimage" style="height: 608px; width: 1466px; visibility: visible; display: block;"><img src="<?php echo base_url(); ?>assets/images/bg9.jpg" alt="pre engineered steel buildings" border="0" style="height: 977.333px; width: 1466px; top: -184.667px; left: 0px;">
</div>
<div class="hpsectionheader">
	<div class="hptopbar" style="margin-left: 122px;"><img src="<?php echo base_url(); ?>assets/images/hplogo.gif" alt="MEW" border="0" class="mainlogohp"><img src="<?php echo base_url(); ?>assets/images/hplogo-mob.jpg" alt="" class="moblogohp"></div>
	<div class="hpbottombar" style="margin-left: 257px;">
		<div class="scollmain" style="width:746px; float:left;">
			<div id="hp-ar-left" class="hp-ar-left-hover"></div>
			<div class="hp-cnt-scroll">
				<div id="hp-scroll">
					<div class="hp-button"><a href="#/products-pre-engineered-metal-building-systems.asp"><img src="<?php echo base_url(); ?>assets/images/b1.png" alt="pre-engineered metal building systems" border="0"></a></div>
					<div class="hp-line"><img src="<?php echo base_url(); ?>assets/images/line.png" alt="line" border="0"></div>
					
					<div class="hp-button"><a href="#/products-tracdek-metal-roof-wall-systems-about.asp"><img src="<?php echo base_url(); ?>assets/images/b2.png" alt="metal roof and wall systems" border="0"></a></div>
					<div class="hp-line"><img src="<?php echo base_url(); ?>assets/images/line.png" alt="line" border="0"></div>
					
					<div class="hp-button"><a href="#/products-inter-light-building-systems.asp"><img src="<?php echo base_url(); ?>assets/images/b3.png" alt="MEW light building systems" border="0"></a></div>
					<div class="hp-line"><img src="<?php echo base_url(); ?>assets/images/line.png" alt="line" border="0"></div>
					
					<div class="hp-button"><a href="#/innovation-in-steel.asp"><img src="<?php echo base_url(); ?>assets/images/b4.png" alt="Structural Steel &amp; Infrastructure" border="0"></a></div>
					<div class="hp-line"><img src="<?php echo base_url(); ?>assets/images/line.png" alt="line" border="0"></div>
					
					<div class="hp-button"><a href="#/products-trac-suspended-ceiling-systems.asp">
					<img src="<?php echo base_url(); ?>assets/images/b5.png" alt="trac suspended ceiling systems" border="0"></a></div>
					<div class="hp-line"><img src="<?php echo base_url(); ?>assets/images/line.png" alt="line" border="0"></div>
					
					<div class="clear"></div>
				</div>
			</div>
			<div id="hp-ar-right"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	
</div>






<div style="position: absolute; top: 100%; margin-top: -380px; left: 38px;" id="myLogos"> <img src="<?php echo base_url(); ?>assets/imagescomm2.png" alt="MEW" border="0" usemap="#Map">
  <map name="Map" id="Map">
    <!--<area shape="rect" coords="10,118,65,189" href="bi-about.asp?links=bi1" /> -->
    <area shape="rect" coords="2,73,87,155" href="#/bi-about.asp">
    <area shape="rect" coords="8,6,78,64" href="#/iamgreen-green-building.asp">
    <area shape="rect" coords="0,166,84,251" href="#/cb-about.asp">
  </map>
</div>
<div class="interLogo infrahplogos"> <img src="<?php echo base_url(); ?>assets/images/com1hp.png" alt="MEW" usemap="#Map2" border="0">
  <map name="Map2">
    <area shape="rect" coords="6,7,75,70" href="#/iamgreen-green-building.asp">
    <area shape="rect" coords="85,7,147,84" href="#/bi-about.asp">
    <area shape="rect" coords="157,4,228,78" href="#/cb-about.asp">
  </map>
</div>

<!--<div class="infralogo" style="position:absolute; top:100%; margin-top:-230px; left:140px;">
	<a href="http://www.MEWinfra.com/" rel="nofollow" target="_blank"><img src="images/logo-intinfra.png" alt="MEWinfra" border="0" /></a>
</div>--> 

<script type="text/javascript">
<!--

function validatequery()
{
	var fDiv=0;
	if (document.getElementById("fname").value=="*First Name")
	{
		alert("Please Enter Value for First Name Field");
			document.feedform.fname.focus();
			return false;
	}
	if (document.getElementById("lname").value=="*Last Name")
	{
		alert("Please Enter Value for Last Name Field");
			document.feedform.lname.focus();
			return false;
	}

	if (document.getElementById("telephone").value=="*Telephone")
	{
		alert("Please Enter Value for Telephone Field");
			document.feedform.telephone.focus();
			return false;
	}
	else if(!ValidateNo(document.feedform.telephone.value," 1234567890,-/+"))
		{
			alert("Invalid Number!");
			document.feedform.telephone.focus();
			return false;
		}
	
		else if(document.feedform.telephone.value.length < 3)
		{
			alert("Invalid Number!");
			document.feedform.telephone.focus();
			return false;
		}
		
	if (document.getElementById("email").value=="*Email")
	{
		alert("Please Enter Value for Email Field");
			document.feedform.email.focus();
			return false;
	}
	else if(!isEmail(document.feedform.email.value))
  			{	 alert("Please enter the valid email address.");
	 			document.feedform.email.select();
	 			document.feedform.email.focus();
	 			return false; 
	 		}
		if (document.getElementById("pr_location").value=="Project Location")
	{
		alert("Please Enter Value for Project Location Field");
			document.feedform.pr_location.focus();
			return false;
	}
	
	fDiv=1;

	if(fDiv==1)
	{
	getVal();
	}
}

function isEmail (emailIn){
	var isEmailOk = false;
	var filter = /^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9-]+(\.[a-zA-Z][a-zA-Z-]+)+$/
	 // var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

	if(emailIn.search(filter) != -1)
		isEmailOk = true;
	if(emailIn.indexOf("..") != -1)
		isEmailOk = false;
	if(emailIn.indexOf(".@") != -1)
		isEmailOk = false;

	return isEmailOk;
}

function ValidateNo( NumStr, String )
{
	for( var Idx = 0; Idx < NumStr.length; Idx ++ )
	{
		var Char = NumStr.charAt( Idx );
		var Match = false;
		for( var Idx1 = 0; Idx1 < String.length; Idx1 ++)
		{
			if( Char == String.charAt( Idx1 ) )
			Match = true;
		}
		if ( !Match )
		return false;
	}
	return true;
}
//-->
</script>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
<script language="JavaScript">
function OnSelect_GetCity_s(){
var arrElem =  document.getElementById("state"); 
var arrElem1 =  document.getElementById("city");
var target = arrElem.selectedIndex; 
var arrItems, arrValues; 
var elem; 
arrElem1.length=0; 
switch(target){ 
case 0: arrItems = new Array("Anantapur","Chittoor","Kadapa","East Godavari","Guntur","Hyderabad","Krishna","Kurnool","Nellore","Prakasam","Srikakulam","Vijayanagaram","West Godavari");
arrValues = new Array("Anantapur","Chittoor","Kadapa","East Godavari","Guntur","Hyderabad","Krishna","Kurnool","Nellore","Prakasam","Srikakulam","Vijayanagaram","West Godavari");
break; 
case 1: arrItems = new Array("Akashiganga","Bhismaknagar","Bomdila","Itanagar","Malinithan","Namdapha","Parashuram Kund");
arrValues = new Array("Akashiganga","Bhismaknagar","Bomdila","Itanagar","Malinithan","Namdapha","Parashuram Kund");
break; 
case 2: arrItems = new Array("Barpeta","Bongaigaon","Cachar","Chirang","Darrang","Dhemaji","Dhubri","Dispur","Goalpara","Jorhat","Kamrup Metropolitan","Karbi Anglong","Kokrajhar","Lakhimpur","Marigaon","Nagaon","Sibsagar","Tinsukia","Udalguri");
arrValues = new Array("Barpeta","Bongaigaon","Cachar","Chirang","Darrang","Dhemaji","Dhubri","Dispur","Goalpara","Jorhat","Kamrup Metropolitan","Karbi Anglong","Kokrajhar","Lakhimpur","Marigaon","Nagaon","Sibsagar","Tinsukia","Udalguri");
break; 
case 3: arrItems = new Array("Araria","Arwal","Aurangabad","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya ","Gopalganj","Jamui","Jehanabad ","Khagaria","Kishanganj","Lakhisarai","Madhubani","Madhepura","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Saharsa ","Samastipur","Sheohar","Sheikhpura","Sitamarhi","Supaul","Vaishali");
arrValues = new Array("Araria","Arwal","Aurangabad","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya ","Gopalganj","Jamui","Jehanabad ","Khagaria","Kishanganj","Lakhisarai","Madhubani","Madhepura","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Saharsa ","Samastipur","Sheohar","Sheikhpura","Sitamarhi","Supaul","Vaishali");
break;
case 4: arrItems = new Array("Bastar","Bilaspur","Bijapu","Dantewada","Dhamtari","Durg","Janjgir-Champa","Jashpur","Kanker","Kawardha","Korba","Koriya"," Mahasamund","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sarguja");
arrValues = new Array("Bastar","Bilaspur","Bijapu","Dantewada","Dhamtari","Durg","Janjgir-Champa","Jashpur","Kanker","Kawardha","Korba","Koriya"," Mahasamund","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sarguja");
break;
case 5: arrItems = new Array("Arambol","Canacona","Mapusa","Margao","North Goa","Panjim","Ponda","South Goa","Vasco-da-Gama");
arrValues = new Array("Arambol","Canacona","Mapusa","Margao","North Goa","Panjim","Ponda","South Goa","Vasco-da-Gama");
break;
case 6: arrItems = new Array("Ahmedabad","Bhavnagar","Bharuch","Botad","Gandhinagar","Gandhidham","Godhra","Junagadh","Morvi","Nadiad","Porbander","Rajkot","Surat","Surendranagar","Vadodara","Veraval");
arrValues = new Array("Ahmedabad","Bhavnagar","Bharuch","Botad","Gandhinagar","Gandhidham","Godhra","Junagadh","Morvi","Nadiad","Porbander","Rajkot","Surat","Surendranagar","Vadodara","Veraval");
break;
case 7: arrItems = new Array("Ambala","Bhiwani","Chandigarh","Fatehabad","Hissar","Jhajjar","Jind","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula "," Panipat","Rewari","Rohtak","Sonipat");
arrValues = new Array("Ambala","Bhiwani","Chandigarh","Fatehabad","Hissar","Jhajjar","Jind","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula "," Panipat","Rewari","Rohtak","Sonipat");
break;
case 8: arrItems = new Array("Bilaspur","Chamba","Dalhousie","Dharamshala","Hamirpur","Kangra","Kullu","Lahaul Spiti","Manali","Shimla","Sirmaur","Solan","Una");
arrValues = new Array("Bilaspur","Chamba","Dalhousie","Dharamshala","Hamirpur","Kangra","Kullu","Lahaul Spiti","Manali","Shimla","Sirmaur","Solan","Una");
break;
case 9: arrItems = new Array("Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Gulmarg","Jammu","Kulgam","Kishtwar","Kupwara","Ladakh","Leh","Pahalgam","Pulwama","Poonch","Rajouri","Ramban","Sonamarg","Srinagar","Shopian");
arrValues = new Array("Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Gulmarg","Jammu","Kulgam","Kishtwar","Kupwara","Ladakh","Leh","Pahalgam","Pulwama","Poonch","Rajouri","Ramban","Sonamarg","Srinagar","Shopian");
break;
case 10: arrItems = new Array("Adityapur","Bokaro","Chas","Chatra","Deoghar","Dhanbad","Dumka","Garhwa","Giridih","Gumla","Hazaribagh","Jamtara","Jamshedpur","Latehar","Lohardaga","Mango","Pakur","Palamu","Ranchi","Sahebganj","Simdega");
arrValues = new Array("Adityapur","Bokaro","Chas","Chatra","Deoghar","Dhanbad","Dumka","Garhwa","Giridih","Gumla","Hazaribagh","Jamtara","Jamshedpur","Latehar","Lohardaga","Mango","Pakur","Palamu","Ranchi","Sahebganj","Simdega");
break;
case 11: arrItems = new Array("Badami","Bagalkot","Bangalore","Belgaum","Belur","Bellary","Bidar"," Bijapur","Chamarajanagar","Chikballapur","Coorg","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Koppal","Mandya","Mysore","Tumkur");
arrValues = new Array("Badami","Bagalkot","Bangalore","Belgaum","Belur","Bellary","Bidar"," Bijapur","Chamarajanagar","Chikballapur","Coorg","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Koppal","Mandya","Mysore","Tumkur");
break;
case 12: arrItems = new Array("Alappuzha","Cochin "," Kannur"," Kasaragod","Kozhikode","Kollam","Kottayam","Palakkad","Thiruvananthapuram","Thrissur");
arrValues = new Array("Alappuzha","Cochin "," Kannur"," Kasaragod","Kozhikode","Kollam","Kottayam","Palakkad","Thiruvananthapuram","Thrissur");
break;
case 13: arrItems = new Array("Bhopal","Burhanpur","Dewas","Gwalior","Indore","Jabalpur","Murwara","Ratlam","Sagar","Satna","Singrauli","Ujjain");
arrValues = new Array("Bhopal","Burhanpur","Dewas","Gwalior","Indore","Jabalpur","Murwara","Ratlam","Sagar","Satna","Singrauli","Ujjain");
break;
case 14: arrItems = new Array("Ahmednagar","Amravati","Aurangabad","Beed","Dhule","Hingoli","Jalna","Jalgaon","Kolhapur","Latur","Mumbai","Nanded","Nagpur","Nandurbar","Nashik","Osmanabad","Parbhani","Pune","Sangli","Satara","Solapur");
arrValues = new Array("Ahmednagar","Amravati","Aurangabad","Beed","Dhule","Hingoli","Jalna","Jalgaon","Kolhapur","Latur","Mumbai","Nanded","Nagpur","Nandurbar","Nashik","Osmanabad","Parbhani","Pune","Sangli","Satara","Solapur");
break;
case 15: arrItems = new Array("Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Senapati"," Tamenglong","Thoubal","Ukhrul");
arrValues = new Array("Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Senapati"," Tamenglong","Thoubal","Ukhrul");
break;
case 16: arrItems = new Array("Baghmara","Cherrapunjee","Dawki","Jowai and Nartiang","Madanrting","Mairang","Mawlai","Mawphlang","Nongmynsong","Nongpoh","Nongstoin","Nongthymmai","Pynthorumkhrah","Resubelpara","Ranikor","Shillong","Tura","Williamnagar ");
arrValues = new Array("Baghmara","Cherrapunjee","Dawki","Jowai and Nartiang","Madanrting","Mairang","Mawlai","Mawphlang","Nongmynsong","Nongpoh","Nongstoin","Nongthymmai","Pynthorumkhrah","Resubelpara","Ranikor","Shillong","Tura","Williamnagar ");
break;
case 17: arrItems = new Array("Aizawi","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Vairengte");
arrValues = new Array("Aizawi","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Vairengte");
break;
case 18: arrItems = new Array("Dimapur","Dzukou Valley","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto");
arrValues = new Array("Dimapur","Dzukou Valley","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto");
break;
case 19: arrItems = new Array("Angul","Boudh","Bhadrak","Baripada","Balangir","Bhubaneshwar","Brahmapur","Baripada","Cuttack","Debagarh","Dhenkanal","Ganjam","Gajapati","Jharsuguda","Jajapur","Jagatsinghpur","	Khordha","Puri","Raurkela","Sambalpur","Subarnapur","Sundargarh");
arrValues = new Array("Angul","Boudh","Bhadrak","Baripada","Balangir","Bhubaneshwar","Brahmapur","Baripada","Cuttack","Debagarh","Dhenkanal","Ganjam","Gajapati","Jharsuguda","Jajapur","Jagatsinghpur","	Khordha","Puri","Raurkela","Sambalpur","Subarnapur","Sundargarh");
break;
case 20: arrItems = new Array("Amritsar","Barnala","Bathinda","Chandigarh","Firozpur","Faridkot","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Muktsar","Patiala","Rupnagar","Sangrur","Tarn Taran");
arrValues = new Array("Amritsar","Barnala","Bathinda","Chandigarh","Firozpur","Faridkot","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Muktsar","Patiala","Rupnagar","Sangrur","Tarn Taran");
break;
case 21: arrItems = new Array("Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bikaner","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Hanumangarh","Jaipur","Jaisalmer","Jhalawar","Jodhpur","Karauli","Kota","Nagaur","Pali","Kumbhalgarh","Pushkar","Udaipur");
arrValues = new Array("Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bikaner","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Hanumangarh","Jaipur","Jaisalmer","Jhalawar","Jodhpur","Karauli","Kota","Nagaur","Pali","Kumbhalgarh","Pushkar","Udaipur");
break;
case 22: arrItems = new Array("East Sikkim","Gangtok","Gezing","Jorethang","Mangan","Namchi","North Sikkim","Pelling","South Sikkim","West Sikkim","Yuksam");
arrValues = new Array("East Sikkim","Gangtok","Gezing","Jorethang","Mangan","Namchi","North Sikkim","Pelling","South Sikkim","West Sikkim","Yuksam");
break;
case 23: arrItems = new Array("Aruppukottai","Chennai","Coimbatore","Chidambaram","Coonoor","Kancheepuram","Karaikudi","Kanyakumari","Kodaikanal","Kumbakonam","Madurai","Mamallapuram","Nagercoil","Ooty","Pattukotai","Pondicherry","Pudukottai","Rameshwaram","Sivaganga","Tarangambadi","Thanjavur","Tiruchirappalli","Trichi","Vellore");
arrValues = new Array("Aruppukottai","Chennai","Coimbatore","Chidambaram","Coonoor","Kancheepuram","Karaikudi","Kanyakumari","Kodaikanal","Kumbakonam","Madurai","Mamallapuram","Nagercoil","Ooty","Pattukotai","Pondicherry","Pudukottai","Rameshwaram","Sivaganga","Tarangambadi","Thanjavur","Tiruchirappalli","Trichi","Vellore");
break;
case 24: arrItems = new Array("Hyderabad","Warangal","Nizamabad","Karimnagar","Ramagundam","Khammam","Mahbubnagar","Nalgonda","Adilabad","Suryapet","Miryalaguda");
arrValues = new Array("Hyderabad","Warangal","Nizamabad","Karimnagar","Ramagundam","Khammam","Mahbubnagar","Nalgonda","Adilabad","Suryapet","Miryalaguda");
break;
case 25: arrItems = new Array("Agartala","Badharghat","Dharmanagar","Jogendranagar");
arrValues = new Array("Agartala","Badharghat","Dharmanagar","Jogendranagar");
break;

case 26: arrItems = new Array("Auli","Almora","Askot","Bageshwar","Baijnath","Bugyal","Badrinath","Barkot","Champawat","Chamoli","Dev Prayag","Didihat","Dineshpur","Dogadda","Doiwala","Dharchula Dehat","Dwarahat","Dehradun","Doiwala","Gadarpur","Gangotri","Gochar","Haldwani","Haridwar","Kachnal Gosain","Kedarnath","Khela Khera","Kashipur","Khatima","Kashirampur","Kiccha","Kaladungi","Landsdowne","Laksar","Manglaur","Nainital","Nandaprayag","Narendra Nagar","Nagla","Naraini","Pant Nagar","Pauri Garhwal","Pithoragarh","Rudraprayag","Roorkee","Rishikesh","Sultanpur","Tehri Garhwal","Udham Singh Nagar","Uttarkashi");
arrValues = new Array("Auli","Almora","Askot","Bageshwar","Baijnath","Bugyal","Badrinath","Barkot","Champawat","Chamoli","Dev Prayag","Didihat","Dineshpur","Dogadda","Doiwala","Dharchula Dehat","Dwarahat","Dehradun","Doiwala","Gadarpur","Gangotri","Gochar","Haldwani","Haridwar","Kachnal Gosain","Kedarnath","Khela Khera","Kashipur","Khatima","Kashirampur","Kiccha","Kaladungi","Landsdowne","Laksar","Manglaur","Nainital","Nandaprayag","Narendra Nagar","Nagla","Naraini","Pant Nagar","Pauri Garhwal","Pithoragarh","Rudraprayag","Roorkee","Rishikesh","Sultanpur","Tehri Garhwal","Udham Singh Nagar","Uttarkashi");
break;
case 27: arrItems = new Array("Agra","Akbarpur","Aligarh","Allahabad","Amroha","Azamgarh","Bahraich","Ballia","Banda","Barabanki","Baraut","Bareilly","Basti","Bijnor","Budaun","Bulandshahr","Chandausi","Deoria","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hapur","Hardoi","Hathras","Jaunpur","Jhansi","Kanpur","Kasganj","Khurja","Lakhimpur","Lalitpur","Lucknow","Mainpuri","Mathura","Maunath","Bhanjan","Meerut","Mirzapur","Modinagar","Moradabad","Mubarakpur","Mughalsarai","Muzaffarnagar","Orai","Pilibhit","Raebareli","Rampur","Saharanpur","Sahaswan","Sambhal","Shahjahanpur","Shamli","Shikohabad","Sitapur","Sultanpur","Ujhani","Unnao","Varanasi");
arrValues = new Array("Agra","Akbarpur","Aligarh","Allahabad","Amroha","Azamgarh","Bahraich","Ballia","Banda","Barabanki","Baraut","Bareilly","Basti","Bijnor","Budaun","Bulandshahr","Chandausi","Deoria","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hapur","Hardoi","Hathras","Jaunpur","Jhansi","Kanpur","Kasganj","Khurja","Lakhimpur","Lalitpur","Lucknow","Mainpuri","Mathura","Maunath","Bhanjan","Meerut","Mirzapur","Modinagar","Moradabad","Mubarakpur","Mughalsarai","Muzaffarnagar","Orai","Pilibhit","Raebareli","Rampur","Saharanpur","Sahaswan","Sambhal","Shahjahanpur","Shamli","Shikohabad","Sitapur","Sultanpur","Ujhani","Unnao","Varanasi");
break;
case 28: arrItems = new Array("Asansol","Bishnupur","Durgapur","Jalpaiguri","Kalimpong","Kolkata","Siliguri");
arrValues = new Array("Asansol","Bishnupur","Durgapur","Jalpaiguri","Kalimpong","Kolkata","Siliguri");
break;
case 29: arrItems = new Array("CarNicobar","Mayabunder","Port Blair");
arrValues = new Array("CarNicobar","Mayabunder","Port Blair");
break;
case 30: arrItems = new Array("Chandigarh","Kharar","Mohali","Panchkula","Parwanoo","Zirakpur");
arrValues = new Array("Chandigarh","Kharar","Mohali","Panchkula","Parwanoo","Zirakpur");
break;
case 31: arrItems = new Array("Amli","Ambabari","Kharadpada","Randha moti","Silvassa");
arrValues = new Array("Amli","Ambabari","Kharadpada","Randha moti","Silvassa");
break;
case 32: arrItems = new Array("Bhimpur","Daman","Damao","Dholar","Damaun","Diu","Ghantwar","Marvor","Sigsar");
arrValues = new Array("Bhimpur","Daman","Damao","Dholar","Damaun","Diu","Ghantwar","Marvor","Sigsar");
break;
case 33: arrItems = new Array("East  Delhi","North Delhi","South Delhi","West  Delhi","Central Delhi");
arrValues = new Array("East  Delhi","North Delhi","South Delhi","West  Delhi","Central Delhi");
break;
case 34: arrItems = new Array("Ghaziabad","Greater Noida","Noida","Gurgaon","Faridabad");
arrValues = new Array("Ghaziabad","Greater Noida","Noida","Gurgaon","Faridabad");
break;
case 35: arrItems = new Array("Agatti","Bangaram","Kadmat","Kalpeni","Kavaratti","Minicoy");
arrValues = new Array("Agatti","Bangaram","Kadmat","Kalpeni","Kavaratti","Minicoy");
break;
case 36: arrItems = new Array("Karaikal","Ozhukarai","Pondicherry");
arrValues = new Array("Karaikal","Ozhukarai","Pondicherry");
break;
case 37: arrItems = new Array("Bhairahawa","Bhaktapur","Biratnagar","Birgunj","Butwal","Chitwan","Gorkha","Hetauda","Janakpur","Kathmandu","Lalitpur","Lumbini","Patan","Pokhara");
arrValues = new Array("Bhairahawa","Bhaktapur","Biratnagar","Birgunj","Butwal","Chitwan","Gorkha","Hetauda","Janakpur","Kathmandu","Lalitpur","Lumbini","Patan","Pokhara");
break;
}

var browser=navigator.appName;

for(i=0;i<arrItems.length;i++){ elem = document.createElement("option"); 
elem.value=arrValues[i]; 
elem.text=arrItems[i];
	if(browser=='Microsoft Internet Explorer')
	{
  		arrElem1.add(elem);
  	} else {
		arrElem1.appendChild(elem);
	}  
}
}
</script> 
<script language="Javascript" src="<?php echo base_url(); ?>assets/js/subQuery.js"></script>
<div class="clear"></div>
<div id="footerhome"> 
  
  <!--<div class="formbtnmob">
	<a href="javascript:;" class="formlink"><img src="images/bg-yes1.jpg" alt="" width="100%" /></a>
    <!--#'include file="inc-footer-form.asp"--> 
  <!--</div>-->
  
  <div class="timelinelinkmob"> <a href="#/timeline.asp" style="display:block;">
  <img src="<?php echo base_url(); ?>assets/images/title-timeline.gif" alt="timeline"></a> </div>
  <div class="formContainer hpformContainer" style="position:absolute; z-index:9; top:0; left:0; margin-left:135px; margin-top:-35px">
  <div id="divfeedback1">
    <div><img src="<?php echo base_url(); ?>assets/images/feedbackbg.png" alt="feedback" border="0"></div>
    <div class="formButton">
      <div id="btnSlider">
        <div id="btnSearch" onclick="javascript:validatequery();"></div>
        <div id="btnArrow"><img src="<?php echo base_url(); ?>assets/images/arrow.gif" alt="arrow" border="0"></div>
        <div id="btnYes" style="width:275px"></div>
      </div>
    </div>
  </div>
  <div id="frmContainer">
  <div id="frmSlider">
  <div id="frmClose"><img src="<?php echo base_url(); ?>assets/images/close.gif" alt="close" border="0"></div>
  <form name="feedform" method="post">
    <div class="formdesign" id="divfeedback">
      <div style="width:165px; margin-right:9px; float:left">
        <input name="fname" id="fname" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;*First Name&#39;;}" onfocus="if (this.value == &#39;*First Name&#39;) {this.value = &#39;&#39;;}" value="*First Name">
        <input name="CompanyName" id="CompanyName" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Company Name&#39;;}" onfocus="if (this.value == &#39;Company Name&#39;) {this.value = &#39;&#39;;}" value="Company Name" maxlength="40">
        <select id="state" name="state" onchange="OnSelect_GetCity_s();" class="select">
          <option selected="selected" value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Orissa">Orissa</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="West Bengal">West Bengal</option>
          <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Dadar &amp; Nagar Haveli">Dadar &amp; Nagar Haveli</option>
          <option value="Daman &amp; Diu">Daman &amp; Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Delhi NCR">Delhi NCR</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Pondicherry">Pondicherry</option>
          <option value="Nepal">Nepal</option>
        </select>
        <input name="telephone" id="telephone" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;*Telephone&#39;;}" onfocus="if (this.value == &#39;*Telephone&#39;) {this.value = &#39;&#39;;}" value="*Telephone">
        <select class="select" name="projectname" id="projectname">
          <option value="">Project/Product</option>
          <option value="Pre-Eng Building">Pre-Eng Building</option>
          <option value="Pre-Eng Structure Steel">Pre-Eng Structure Steel</option>
          <option value="Tracdek Roof and Wall Cladding">Tracdek Roof&amp;Wall Cladding</option>
          <option value="Trac Ceilings">Trac Ceilings</option>
          <option value="MEW Light Guage Bldg">MEW Light Guage Bldg</option>
          <option value="Infrastructure">Infrastructure</option>
        </select>
      </div>
      <div style="width:165px; margin-right:0px; float:left">
        <input name="lname" id="lname" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;*Last Name&#39;;}" onfocus="if (this.value == &#39;*Last Name&#39;) {this.value = &#39;&#39;;}" value="*Last Name">
        <select id="Industry" name="Industry" class="select">
          <option value="">Industry</option>
          <option value="Agriculture">Agriculture</option>
          <option value="Architecture">Architecture</option>
          <option value="Automotive">Automotive</option>
          <option value="Builders/Real Estate">Builders/Real Estate</option>
          <option value="Construction/Projects">Construction/Projects</option>
          <option value="Consultant">Consultant</option>
          <option value="Consumer Goods">Consumer Goods</option>
          <option value="Contractor">Contractor</option>
          <option value="Education &amp; Research">Education &amp; Research</option>
          <option value="Electrical &amp; Electronics">Electrical &amp; Electronics</option>
          <option value="Energy">Energy</option>
          <option value="Export &amp; Import">Export &amp; Import</option>
          <option value="Financial Services">Financial Services</option>
          <option value="Food and Beverages">Food and Beverages</option>
          <option value="High Technology">High Technology</option>
          <option value="Hospitality">Hospitality</option>
          <option value="Insurance">Insurance</option>
          <option value="Light Engineering">Light Engineering</option>
          <option value="Logistic">Logistic</option>
          <option value="Manufacturing">Manufacturing</option>
          <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
          <option value="Medical">Medical</option>
          <option value="Metals &amp; Mining">Metals &amp; Mining</option>
          <option value="Non-profit">Non-profit</option>
          <option value="Other">Other</option>
          <option value="Petroleum">Petroleum</option>
          <option value="Pharmaceuticals">Pharmaceuticals</option>
          <option value="Power">Power</option>
          <option value="Public Sector">Public Sector</option>
          <option value="Retail">Retail</option>
          <option value="Services">Services</option>
          <option value="Telecommunications">Telecommunications</option>
          <option value="Textile">Textile</option>
          <option value="Travel &amp; Transportation">Travel &amp; Transportation</option>
        </select>
        <select id="city" name="city" class="select">
          <option value="Anantapur">Anantapur</option>
          <option value="Chittoor">Chittoor</option>
          <option value="Kadapa">Kadapa</option>
          <option value="East Godavari">East Godavari</option>
          <option value="Guntur">Guntur</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Krishna">Krishna</option>
          <option value="Kurnool">Kurnool</option>
          <option value="Nellore">Nellore</option>
          <option value="Prakasam">Prakasam</option>
          <option value="Srikakulam">Srikakulam</option>
          <option value="Vijayanagaram">Vijayanagaram</option>
          <option value="West Godavari">West Godavari</option>
        </select>
        <input name="email" id="email" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;*Email&#39;;}" onfocus="if (this.value == &#39;*Email&#39;) {this.value = &#39;&#39;;}" value="*Email">
        <input name="pr_location" id="pr_location" type="text" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Project Location&#39;;}" onfocus="if (this.value == &#39;Project Location&#39;) {this.value = &#39;&#39;;}" value="Project Location" maxlength="40">
      </div>
      <textarea name="comment" id="comment" cols="" rows="" class="textarea" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Comments&#39;;}" onfocus="if (this.value == &#39;Comments&#39;) {this.value = &#39;&#39;;}">Comments</textarea>
    </div>
    </form></div>
    </div>
    </div>
  
  <div class="interLogoHome" style="margin-top:-110px; margin-left:12px"> <img src="<?php echo base_url(); ?>assets/images/logo2.gif" alt="MEW" border="0"> 
    <!--<a href="http://www.MEWinfra.com/" target="_blank"><img src="images/infra-logo.gif" alt="" border="0" style="margin-left:20px" /></a>--> 
    
  </div>
  <div class="hp-formContainer">
    <div><img src="<?php echo base_url(); ?>assets/images/timelinebg.png" alt="timeline" border="0"></div>
    <div class="timeline">
      <div class="tm-title"><img src="<?php echo base_url(); ?>assets/images/title-timeline.gif" alt="timeline" border="0"></div>
      <div id="tm-arr-left"></div>
      
      <div id="boxcont" style="left: 200px; top: 0px;">
<div id="box" style="width: 0px; height: 0px;">
<div id="bx1" class="marmob" style="display: none;">
  <div class="bx-years">1984</div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>New Delhi, MEW commences operations, pioneering Metal Suspended Ceilings in India.</div>
    </div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW Bags order for False Ceiling of Delhi Airport.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/1984-img.jpg" alt="pre engineered steel structures india" class="timeBor"> </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx2" class="marmob" style="display: none;">
  <div class="bx-years">1986 <img src="<?php echo base_url(); ?>assets/images/1986-trc-logo.gif" alt="tracdek" class="timeLogo"></div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div>
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW introduces window coverings in India, under the brand name TRACÂ®.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/1986-img.jpg" alt="prefabricated metal buildings" class="timeBor"> </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx3" class="marmob" style="display: none;">
  <div class="bx-years">1992<img src="<?php echo base_url(); ?>assets/images/1992-trc-logo.gif" alt="tracdek" class="timeLogo"></div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW becomes the first in India to introduce Engineered Metal Roofing &amp; Cladding systems.</div>
    </div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW wins largest order for Metal Roofing from Daewoo Motors. <!--for supply of _______ Sq  M worth.--></div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/1992-img.jpg" alt="prefabricated steel buildings" class="timeBor"> </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx4" class="marmob" style="display: none;">
  <div class="bx-years">1996</div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW pioneers Pre-Engineered Metal Building Systems in India.</div>
    </div>
    <div>
      <div class="bx-head">Recent Completed Projects</div>
      <div>MEW complete Largest Metal Roofing order for Hyundai Motors worth 22 Crores.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/1996-img.gif" alt="pre engineered steel buildings" class="timeBor"> </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx5" class="marmob" style="display: none;">
  <div class="bx-years">1999</div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div>
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW becomes the first Indian manufacturer to receive the ISO 9001 Certification by UL Inc. USA.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/1999-img.gif" alt="iso certified peb company" class="timeBor"> <img src="<?php echo base_url(); ?>assets/images/1999-trc-logo.png" alt="tracdek"> </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx6" class="marmob" style="display: none;">
  <div class="bx-years">2000</div>
  <div class="bx-cnt" style="width:450px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW sets up the first of its kind completely integrated, design, manufacture, supply and execution facility in NOIDA.</div>
    </div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW completes Petrol Pump canopy at Various location through out India for Bharat Petroleum Corporation Limited.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2000-img.jpg" alt="pre engineered structures" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx7" class="marmob" style="display: none;">
  <div class="bx-years gallery">2002 <a href="<?php echo base_url(); ?>assets/images/awd-2002big.jpg" rel="prettyPhoto[gallery7]"><img src="<?php echo base_url(); ?>assets/images/2002-1th.jpg" alt="pre engineered buildings" class="timeLeImg"></a> </div>
  <div class="bx-cnt" style="width:350px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div>
      <div class="bx-head">Recent Completed Projects</div>
      <div>
        <ul class="tm-ul-text">
          <li>HPCL Retail Outlets, U.P.</li>
          <li>General Motors India, Gujarat</li>
          <li>Neolite Industries, U.P.</li>
          <li>Ballarpur Industries Ltd, Maharashtra</li>
          <li>Indian Oil Corporation Ltd-Retail Outlet, Madhya Pradesh</li>
        </ul>
      </div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2002-img.gif" alt="pre engineered buildings india" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx8" class="marmob" style="display: none;">
  <div class="bx-years">2003</div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW executes a 1st 80 M clear span building in India for Cuthberts Baby Wear Pvt Ltd.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2003-img.jpg" alt="pre engineered steel buildings" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx9" class="marmob" style="display: none;">
  <div class="bx-years">2004</div>
  <div class="bx-cnt">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW Project Management executes more than 900 petrol pump canopies in India for Reliance Petroleum.</div>
      <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2004-img.jpg" alt="pre engineered buildings" class="timeBor"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx10" class="marmob" style="display: none;">
  <div class="bx-years">2005</div>
  <div class="bx-cnt" style="width:450px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW sets up its second 80,000 MT Manufacturing facility.</div>
    </div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>MEW Bags order from ITC ltd for ITC Choupal Sagar (Multiple Locations across India), these retails shops were manufactured and completed in Pre-Engineered Steel for the 1st time in India Market.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2005-img.gif" alt="pre engineered steel buildings" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx11" class="marmob" style="display: none;">
  <div class="bx-years">2006</div>
  <div class="bx-cnt" style="width:450px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW becomes the leading supplier of pre-engineered solutions for the Automotive Industry in India. And executes complete greenfield automotive facility for Tata Motors.</div>
    </div>
    <div>
      <div class="bx-head">Major Project Wins</div>
      <div>Interarh Bags order for first Multi-Storey PEB building in India of Reliance Industries, Navi Mumbai. The Reliance Corporate Park is India's first and largest completely pre-engineered commercial office building with an area of more than 50,000m<sup>2</sup>.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2006-img.jpg" alt="prefabricated metal buildings" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx12" class="marmob" style="display: none;">
  <div class="bx-years gallery">2007
    <div class="clear mobclr"></div>
    <a href="<?php echo base_url(); ?>assets/images/award-big11.jpg" rel="prettyPhoto[gallery1]">
	<img src="<?php echo base_url(); ?>assets/images/2007-1th.jpg" alt="award" class="timeLeImg"></a>
	<a href="<?php echo base_url(); ?>assets/images/award-big12.jpg" rel="prettyPhoto[gallery1]">
	<img src="<?php echo base_url(); ?>assets/images/2007-2th.jpg" class="timeLeImg" alt="award"></a> 
	<a href="<?php echo base_url(); ?>assets/images/award-big13.jpg" rel="prettyPhoto[gallery1]">
	<img src="<?php echo base_url(); ?>assets/images/2007-3th.jpg" class="timeLeImg" alt="award"></a> </div>
  <div class="bx-cnt" style="width:810px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>
        <ul class="tm-ul-text">
          <li>MEW becomes the single largest turnkey supplier of Pre-Engineered Construction Solutions in India.</li>
          <li>MEW made a private equity placement with Indivision Investment Advisors, a private equity fund managed by Future Capital Holdings, offloading 13.3% stake to raise USD 25 Million.</li>
        </ul>
      </div>
    </div>
    <div class="bx-point">
      <div class="bx-head">Major Project Wins</div>
      <div>MEW wins project from TATA Motors for their new manufacturing facility catered around the highly publicized Rs 1 Lakh Nano Car Project.<br>
        <br>
        The Singur project valued at over US$ 25 million, is one of the largest contracts awarded in India for pre-engineered steel construction for Automotive Industry.</div>
    </div>
    <div>
      <div class="bx-head">Recent Completed Projects</div>
      <div>Tata Motors Greenfield Manufacturing plant of Ace Truck was delivered in Pantnagar, it had India's first complete pre-engineered paint shop with an height of 27 M with 2 floors of Mezzanine floors.</div>
    </div>
    <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2007-img.jpg" alt="pre engineered paint shop" class="timeBor"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx13" class="marmob" style="display: none;">
  <div class="bx-years gallery">2008 <a href="<?php echo base_url(); ?>assets/images/award-big10.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url(); ?>assets/images/2008-1th.jpg" alt="award" class="timeLeImg"></a> </div>
  <div class="bx-cnt" style="width:400px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>MEW sets up its third Manufacturing facility in Kichha, Uttarakhand with an area of more than 50,000 Sq M.</div>
    </div>
    <div class="bx-point">
      <div class="bx-head">Major Project Wins</div>
      <div>MEW bags the largest order for turnkey supply for the upcoming passenger terminal building at the Indira Gandhi International Airport Terminal 3, New Delhi.</div>
    </div>
    <div>
      <div class="bx-head"><img src="<?php echo base_url(); ?>assets/images/2008-img.jpg" alt="peb company in india" class="timeBor" align="right">Recent Completed Projects</div>
      <div>Fiat India Pvt Ltd Ranjangaon, Maharashtra, India's largest pre-engineered building covering almost 80,000m<sup>2</sup> under one roof.</div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx14" class="marmob" style="display: none;">
  <div class="bx-years gallery">2009 <a href="<?php echo base_url(); ?>assets/images/award-big9.jpg" rel="prettyPhoto[gallery3]"><img src="<?php echo base_url(); ?>assets/images/2009-1th.jpg" alt="award" class="timeLeImg"></a> </div>
  <div class="bx-cnt" style="width:450px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <div class="bx-point">
      <div class="bx-head">Major Milestones in the year</div>
      <div>
        <ul class="tm-ul-text">
          <li>MEW Completes 25 years</li>
          <li>MEW completes more than 3000 Pre-Engineered Builings across India</li>
        </ul>
      </div>
    </div>
    <div class="bx-point">
      <div class="bx-head">Major Project Wins</div>
      <div>
        <ul class="tm-ul-text">
          <li>Natrip Global Automotive Research Centre, Tamil Nadu</li>
          <li>Tata Motors Pvt Ltd, Uttaranchal</li>
          <li>Amco India Construction Pvt Ltd, Haryana</li>
          <li>Siemens Ltd, New Delhi</li>
          <li>Dr. Reddy Laboratories Ltd, Andhra Pradesh</li>
        </ul>
      </div>
    </div>
    <div>
      <div class="bx-head">Recent Completed Projects</div>
      <div>
        <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2009-img.jpg" alt="prefabricated metal buildings" class="timeBor" align="right"></div>
        <ul class="tm-ul-text">
          <li>Fiat Industries Limited, Karnataka</li>
          <li>Sasha Developers Pvt Ltd, Maharashtra</li>
          <li>Jain Irrigation System Limited, Maharashtra</li>
          <li>Vora Transfreight, Maharashtra</li>
          <li>SKF Technologies India Limited, Gujarat</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<div id="bx15" class="marmob" style="display: none;">
  <div class="bx-years gallery">2010 <a href="#/images/award-big8.jpg" rel="prettyPhoto[gallery4]"><img src="<?php echo base_url(); ?>assets/images/2010-th.jpg" alt="award" class="timeLeImg"></a> </div>
  <div class="bx-cnt" style="width:780px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW Launches Light Gauge Buildings in India Market</li>
                <li>MEW sets up its forth Manufacturing facility in Sriperumbudur, Chennai to cater to the Souther Part of India</li>
                <li>MEW opens regional Sales &amp; marketing Officed in all Major states like Punjab, Gujarat, M.P, Tamil Nadu &amp; Kolkata</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="timeImgBox"> <img src="<?php echo base_url(); ?>assets/images/2010-img.jpg" alt="Manish Engineering Works" class="timeBor"></div>
            <div class="bx-head">Major Project Wins</div>
            <div>
              <ul class="tm-ul-text">
                <li>Bharat Heavy Electricals Ltd, Tamil Nadu</li>
                <li>Delhi Cargo Service Centre, New Delhi</li>
                <li>SMCC Construction India Ltd, Rajasthan</li>
                <li>ITC Limited, Andhra Pradesh</li>
                <li>Insecticides India Ltd, Gujarat</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Recent Completed Projects</div>
            <div>
              <ul class="tm-ul-text">
                <li>GMR Dial Indira Gandhi International Airport Terminal 3 Completion 2010</li>
                <li>Cheyyar SEZ Developers, Tamil Nadu</li>
                <li>Avtec Limited, Madhya Pradesh</li>
                <li>Ziemauu India Pvt Ltd, Pune</li>
                <li>HNG Float Glass Limited, Gujarat</li>
                <li>Arihant Domestic Appliances Pvt Ltd, Pune</li>
              </ul>
            </div>
          </div>
          <div>
            <div class="bx-head">MEW in Press</div>
            <div>
              <ul class="tm-ul-text">
                <li>Awarded for "Best Pre-Engineered Building Project" category by Essar Steel Infrastructure Excellence Award 2010</li>
                <li>Steel Structures &amp; Metal Buildings</li>
                <li>Projects Monitor</li>
                <li>MGS Architecture</li>
                <li>Construction Week</li>
              </ul>
            </div>
          </div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div>
<div id="bx16" class="marmob" style="display: none;">
  <div class="bx-years gallery">2011
    <div class="clear mobclr"></div>
    <a href="#/images/award-big3.jpg" rel="prettyPhoto[gallery5]"><img src="<?php echo base_url(); ?>assets/images/2011-1th.jpg" alt="award" class="timeLeImg"></a> <a href="#/images/bridgestone-lrg.jpg" rel="prettyPhoto[gallery5]"><img src="<?php echo base_url(); ?>assets/images/2011-2th.jpg" class="timeLeImg" alt="award"></a> <a href="#/images/yachiya-lrg.jpg" rel="prettyPhoto[gallery5]"><img src="./Peb Buildings _ Pre Engineered Buildings _ PEB Shed in India_files/2011-3th.jpg" class="timeLeImg" alt="award"></a> <a href="#/images/award-big7.jpg" rel="prettyPhoto[gallery5]"><img src="<?php echo base_url(); ?>assets/images/2011-5th.jpg" class="timeLeImg" alt="award"></a> <a href="#/images/award-big6.jpg" rel="prettyPhoto[gallery5]"><img src="./Peb Buildings _ Pre Engineered Buildings _ PEB Shed in India_files/2011-4th.jpg" class="timeLeImg" alt="award"></a> </div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW sets up Design Centre in Noida for office.</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div>
              <ul class="tm-ul-text">
                <li>Tata Motors Limited, Karnataka</li>
                <li>Asian Paints Limited, Maharashtra</li>
                <li>Deepak Fasteners Limited, Madhya Pradesh</li>
                <li>Mahindra Aerostructure Pvt Ltd, Karnataka</li>
                <li>SMCC Construction India Ltd, Haryana</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Recent Completed Projects</div>
            <div>
              <ul class="tm-ul-text">
                <li>SMCC Construction India Ltd<br>
                  (Goshi India Auto Parts Limited), Haryana</li>
                <li>Tata Johnson Controls Aytomotive Ltd, Karnataka</li>
                <li>Oxford University Press, U.P.</li>
                <li>Nilkamal Limited, Uttarakhand</li>
                <li>Telco Construction Equipment Company Limited, West Bengal</li>
                <li>Taikisha Engineering Ltd, Uttarakhand</li>
              </ul>
            </div>
          </div></td>
      </tr>
      <tr>
        <td><div>
            <div class="bx-head" style="margin-top:10px;">MEW in Press</div>
            <div>
              <ul class="tm-ul-text">
                <li>Zee Business</li>
                <li>Business Line</li>
                <li>Business Standard</li>
                <li>New Indian Express</li>
                <li>Construction World</li>
                <li>B2B Purchase and many more</li>
              </ul>
            </div>
          </div></td>
      </tr>
    </tbody></table>
    <img src="<?php echo base_url(); ?>assets/images/2011-img.gif" alt="commercial steel buildings" class="timeBor" align="right" style="margin-top:-140px;"> </div>
  <div class="clear"></div>
</div>
<div id="bx17" class="marmob" style="display: none;">
  <div class="bx-years gallery">2012 </div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW opens new regional offices in Rajasthan, Andhra Pradesh and Karnataka.</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div>
              <ul class="tm-ul-text">
                <li>Bridgestone India Pvt. Ltd, Tamil Nadu</li>
                <li>Toyota Kirloskar Motor Pvt. Ltd, Karnataka</li>
                <li>Delhi Cargo Service Center Pvt. Ltd, New Delhi</li>
                <li>TATA Motors Ltd, Uttarakhand</li>
                <li>Best all Engineering Works, Gujarat</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Recent Completed Projects</div>
            <div>
              <ul class="tm-ul-text">
                <li>ABB Ltd, Gujarat</li>
                <li>Fedders Lloyd Corporation Ltd, Uttar Pradesh</li>
                <li>JaideepIspat&amp; Alloys Pvt. Ltd, Madhya Pradesh</li>
                <li>TATA Motors Ltd, Pune</li>
                <li>KENT RO Systems Ltd, Uttarakhand</li>
              </ul>
            </div>
          </div></td>
      </tr>
      <tr>
        <td><div>
            <div class="bx-head" style="margin-top:10px;">MEW in Press</div>
            <div>
              <ul class="tm-ul-text">
                <li>Projects Monitor</li>
                <li>Master Builder</li>
                <li>B2B Purchase</li>
                <li>Hindustan Times</li>
                <li>Civil Engineering &amp; Construction <br>
                  Review</li>
                <li>EPC World &amp; many more</li>
              </ul>
            </div>
          </div></td>
      </tr>
    </tbody></table>
    <img src="<?php echo base_url(); ?>assets/images/2012-img.jpg" alt="" class="timeBor" align="right" style="margin-top:-140px;"> </div>
  <div class="clear"></div>
</div>
<div id="bx18" class="marmob" style="display: none;">
  <div class="bx-years gallery">2013</div>
  
  <!--<a href="images/award-big3.jpg" rel="prettyPhoto[gallery5]"><img src="images/2011-1th.jpg" alt="award" class="timeLeImg" /></a>
							<a href="images/bridgestone-lrg.jpg" rel="prettyPhoto[gallery5]"><img src="images/2011-2th.jpg" class="timeLeImg" alt="award" /></a>
							<a href="images/yachiya-lrg.jpg" rel="prettyPhoto[gallery5]"><img src="images/2011-3th.jpg" class="timeLeImg" alt="award" /></a>
							<a href="images/award-big7.jpg" rel="prettyPhoto[gallery5]"><img src="images/2011-5th.jpg" class="timeLeImg" alt="award" /></a>
							<a href="images/award-big6.jpg" rel="prettyPhoto[gallery5]"><img src="images/2011-4th.jpg" class="timeLeImg" alt="award" /></a>-->
  
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW Infrastructure is launched which deals in heavy steel structures project execution.</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div>
              <ul class="tm-ul-text">
                <li>Tristar Global Infrastructure Pvt. Ltd, Gujarat</li>
                <li>Indospace Logistics Pvt. Ltd, Tamil Nadua</li>
                <li>SMS India Pvt. Ltd, Orissa</li>
                <li>Yamaha Motors India Pvt. Ltd, Tamil Nadu</li>
                <li>Hindustan Unilever Ltd, Pondicherry</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Recent Completed Projects</div>
            <div>
              <ul class="tm-ul-text">
                <li>Toyota Kirloskar Motor Pvt. Ltd, Karnataka</li>
                <li>Skoda Auto India Pvt. Ltd, Maharashtra</li>
                <li>TATA Motors Ltd, Uttarakhand</li>
                <li>Panasonic India Pvt. Ltd, Haryana</li>
                <li>Dainik Bhaskar Corporation Ltd, Rajasthan</li>
              </ul>
            </div>
          </div></td>
      </tr>
      <tr>
        <td><div>
            <div class="bx-head" style="margin-top:10px;">MEW in Press</div>
            <div>
              <ul class="tm-ul-text">
                <li>Projects Monitor</li>
                <li>Architects &amp; Interior</li>
                <li>Construction World</li>
              </ul>
            </div>
          </div></td>
      </tr>
    </tbody></table>
    <img src="<?php echo base_url(); ?>assets/images/2013-img.jpg" alt="" class="timeBor" align="right" style="margin-top:-100px;"> </div>
  <div class="clear"></div>
</div>
<div id="bx19" class="marmob" style="display: none;">
  <div class="bx-years gallery">2014</div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>Increased plant capacity at Kichha, completes 6000 Pre- Engineered buildings and won a project for G+7 hospital building.</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div><img src="<?php echo base_url(); ?>assets/images/2014-img3.jpg" alt="" class="timeBor" align="right"></div>
            <div>
              <ul class="tm-ul-text">
                <li>Mangalam Cement Ltd, Rajasthan</li>
                <li>Delhi Metro Rail Corporation, New Delhi</li>
                <li>Ultratech Cement Ltd, Gujarat</li>
                <li>Asian Paints Ltd, Haryana</li>
                <li>BASF India Ltd, West Bengal</li>
                <li>Fairdeal Jumbo Packaging Pvt. Ltd, Gujarat</li>
                <li>APL Apollo Tubes Ltd, Tamil Nadu</li>
                <li>Perto India Pvt. Ltd, Rajasthan</li>
                <li>JSW Steel Ltd, Gujarat</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Recent Completed Projects</div>
            <div><img src="<?php echo base_url(); ?>assets/images/2014-img1.jpg" alt="" class="timeBor" align="right"></div>
            <div>
              <ul class="tm-ul-text">
                <li>Mahindra Two Wheelers Ltd, Madhya Pradesh</li>
                <li>Havells India Ltd, Uttar Pradesh</li>
                <li>JCB India Ltd, Rajasthan</li>
                <li>Hitachi Plant Technologies India Pvt. Ltd, Tamil Nadu</li>
                <li>Grasim Industries Ltd, Madhya Pradesh</li>
                <li>Hindustan Unilever Ltd, West Bengal</li>
                <li>Ultratech Cement Ltd, Chhattisgarh</li>
                <li>Honda Cars India Ltd, Rajasthan</li>
              </ul>
            </div>
          </div>
          <div class="bx-head" style="margin-top:10px;">MEW in Press</div>
          <div><img src="<?php echo base_url(); ?>assets/images/2014-img2.jpg" alt="" class="timeBor" align="right"></div>
          <div>
            <ul class="tm-ul-text">
              <li>EPC World</li>
              <li>Construction Mirror</li>
              <li>Dainik Jagran</li>
              <li>Rajasthan Patrika</li>
              <li>B2B Purchase</li>
              <li>Construction Today</li>
              <li>Construction Week</li>
              <li>Steel Structure &amp; Metal Buildings</li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td><div> </div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div>
<div id="bx20" class="marmob" style="display: none;">
  <div class="bx-years gallery">2015</div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestones in the year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW wins project from Ultratech Cement ltd to execute India's largest clear span building, 99.8 M at Rawan, Chattisgarh</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Press Coverage</div>
            <div><img src="<?php echo base_url(); ?>assets/images/2015-img1.jpg" alt="" class="timeBor" align="right"></div>
            <div>
              <ul class="tm-ul-text">
                <li>Indian Cement Review
                </li><li>CE &amp; CR</li>
                <li>MGS Architecture </li>
                <li>Indian Institute of Architecture </li>
                <li>EPC World</li>
                <li>Cargo Connect </li>
                <li>ACE Update </li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div><img src="<?php echo base_url(); ?>assets/images/2015-img2.jpg" alt="" class="timeBor" align="right"></div>
            <div>
              <ul class="tm-ul-text">
                <li>Godrej &amp; Boyce Mfg. Co. Ltd, Maharashtra</li>
                <li>Alstom India Limited, Haryana</li>
                <li>Indospace Development Pvt Ltd, Haryana </li>
                <li>Chiripal Industries Pvt Ltd, Gujarat</li>
                <li>CEAT Tyres &amp; Rajasthan with Maharashtra </li>
                <li>Gamesa Wind Turbines Pvt Ltd, Gujarat </li>
                <li>Thapar University, Punjab</li>
              </ul>
            </div>
          </div>
          <div class="bx-head" style="margin-top:10px;">Major Completed Projects</div>
          <div><img src="<?php echo base_url(); ?>assets/images/2015-img3.jpg" alt="" class="timeBor" align="right"></div>
          <div>
            <ul class="tm-ul-text">
              <li>Hindustan Unilever Ltd, Assam</li>
              <li>Ambuja Cement Ltd, Chhattisgarh</li>
              <li>TATA Motors Ltd, Maharashtra</li>
              <li>L&amp;T Ltd (Perto India), Rajasthan</li>
              <li>IPCA Laboratories Ltd, Maharashtra</li>
              <li>India Yamaha Motors, Chennai</li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td><div></div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div>
<div id="bx21" class="marmob" style="display: none;">
  <div class="bx-years gallery">2016</div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestone of the Year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW won Award for "Best Projects of the Year" for G+7 Multi-storey Hospital building for Fortis Healthcare Ltd in Bangalore  from Construction Week Magazine</li>
                <li>MEW Delivered India's Largest Clear span building 99.8 M for Ultratech Cement Ltd in Raipur</li>
                <li>MEW won single project worth 90 Crore from Maxxis Rubber India Pvt Ltd</li>
                <li>MEW delivered G+2, 600 bed Hostel building for Thapar University in Punjab in 175 Days with area of  more than 17,000 Sq M</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div><!--<img src="images/2014-img3.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>Tata Motors Limited, Karnataka</li>
                <li>Hindustan Unilever Limited, Assam</li>
                <li>Steel strips Limited, Gujarat</li>
                <li>Asian Paints Limited, Karnataka</li>
                <li>Berger Paints India Limited, Assam</li>
                <li>Britannia Industries Ltd, Assam</li>
                <li>Gamesa Renewable Private Limited, Andhra Pradesh</li>
                <li>Lotus Beauty Care Products Private Limited, Uttarakhand</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Press Coverage</div>
            <div><!--<img src="images/2014-img1.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>B2B Purchase </li>
                <li>SSMB</li>
                <li>CE &amp; CR</li>
                <li>Project Mirror </li>
                <li>Construction Week</li>
                <li>Construction World</li>
              </ul>
            </div>
          </div>
          <div class="bx-head" style="margin-top:10px;">Significant Projects Completed</div>
          <div><!--<img src="images/2014-img2.jpg" alt="" class="timeBor" align="right"  />--></div>
          <div>
            <ul class="tm-ul-text">
              <li>SMCC Constructions India Ltd in Gujarat</li>
              <li>Thapar University in Punjab</li>
              <li>Ultratech Cement Ltd in Rajasthan </li>
              <li>Hindustan Unilever Ltd in Dadra and Nagar Haveli</li>
              <li>British Paints in Assam</li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td><div> </div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div>
<div id="bx22" class="marmob" style="display: none;">
  <div class="bx-years gallery">2017</div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestone of the Year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW won Award for "Best Pre-Engineered Building (PEB) Company of the year" for Gamesa Renewable Pvt Ltd in Andhra Pradesh from Construction Week</li>
                <li>MEW win project from Rohit Surfactant Pvt Ltd to execute India's largest clear span building of 120 M at Dwarka, Gujarat</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div><!--<img src="images/2014-img3.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>Kia Motors Corporation, Andhra Pradesh</li>
                <li>Gamesa Renewable Pvt Ltd, Andhra Pradesh</li>
                <li>Balaji Multiflex Pvt Ltd, Gujarat</li>
                <li>Asian Paints Ltd, Andhra Pradesh</li>
                <li>Goodyear South Asia Tyres Pvt Ltd, Maharashtra</li>
                <li>JSW Steel Ltd, Maharashtra</li>
                <li>Patanjali Ayurved Ltd, Assam</li>
                <li>Ceat Tyres Ltd, Maharashtra</li>
                <li>Maruti Suzuki India Ltd, West Bengal</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Press Coverage</div>
            <div><!--<img src="images/2014-img1.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>B2B Purchase</li>
                <li>MGS Architecture</li>
                <li>NBM &amp; CW</li>
                <li>EPC &amp; I</li>
                <li>Construction World</li>
                <li>Project Reporter</li>
                <li>Cargo Connect</li>
                <li>Steel Structure &amp; Metal Building (SSMB)</li>
                <li>EPC World</li>
                <li>Construction Week</li>
                <li>Master builder</li>
              </ul>
            </div>
          </div>
          <div class="bx-head" style="margin-top:10px;">Significant Projects Completed</div>
          <div><!--<img src="images/2014-img2.jpg" alt="" class="timeBor" align="right"  />--></div>
          <div>
            <ul class="tm-ul-text">
              <li>Mangalam Cement Ltd, Rajasthan</li>
              <li>Kool Solution India, Maharashtra</li>
              <li>Steel Strips Wheels Ltd, Tamil Nadu</li>
              <li>Godrej &amp; Boyce Mfg. Co. Ltd, Maharashtra</li>
              <li>Parle Agro Pvt Ltd, Uttarakhand</li>
              <li>Berger Paints India Ltd, Assam</li>
              <li>PPG Asian Paints Pvt Ltd, Tamil Nadu</li>
              <li>Tata Motors Ltd, Jharkhand</li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td><div> </div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div>
<div id="bx23" class="marmob" style="display: none;">
  <div class="bx-years gallery">2018</div>
  <div class="bx-cnt" style="width:760px;">
    <div class="closeBtn"><img src="<?php echo base_url(); ?>assets/images/close-btn.png" alt="close"></div>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Major Milestone of the Year</div>
            <div>
              <ul class="tm-ul-text">
                <li>MEW  won Award for "Outstanding Company in Pre-Engineered Building (PEB) category" by EPC World Awards</li>
                <li>MEW won Runner Up Award for " Best Pre-Engineered Building (PEB) Company of the year" for Berger Paints India Ltd in Assam from Construction Week</li>
                <li>MEW received Safety Appreciation Award from Godrej &amp; Boyce Manufacturing Co. Ltd for their Greenfield Facility in Maharashtra</li>
              </ul>
            </div>
          </div>
          <div class="bx-point">
            <div class="bx-head">Major Project Wins</div>
            <div><!--<img src="images/2014-img3.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>Marico Ltd, Gujarat</li>
                <li>Ceat Specialty Tyres Ltd, Tamil Nadu</li>
                <li>Pricol Ltd, Andhra Pradesh</li>
                <li>Asahi India Glass Ltd, Gujarat</li>
                <li>Subros Ltd, Gujarat</li>
                <li>JSW Steel Coated Products Ltd, Maharashtra</li>
                <li>VE Commercial Vehicles Ltd, Madhya Pradesh</li>
                <li>ITC Ltd , Andhra Pradesh</li>
                <li>HT Media Ltd, Uttar Pradesh</li>
                <li>Britannia Industries Ltd, Assam</li>
              </ul>
            </div>
          </div></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="50%" valign="top"><div class="bx-point">
            <div class="bx-head">Press Coverage</div>
            <div><!--<img src="images/2014-img1.jpg" alt="" class="timeBor" align="right"  />--></div>
            <div>
              <ul class="tm-ul-text">
                <li>Steel Structure &amp; Metal Buildings (SSMB)</li>
                <li>NBM Media</li>
                <li>B2B Purchase</li>
                <li>Construction Week</li>
              </ul>
            </div>
          </div>
          <div class="bx-head" style="margin-top:10px;">Significant Projects Completed</div>
          <div><!--<img src="images/2014-img2.jpg" alt="" class="timeBor" align="right"  />--></div>
          <div>
            <ul class="tm-ul-text">
              <li>Greenply Industries Ltd, Andhra Pradesh</li>
              <li>Maruti Suzuki India Ltd, West Bengal</li>
              <li>Indospace Industrial Park Ltd, Tamil Nadu</li>
              <li>CEAT Specialty Tyres Ltd, Maharashtra</li>
              <li>Hindustan Unilever Ltd, Karnataka</li>
              <li>Asian Paints Ltd, Karnataka</li>
              <li>Pantanjali Ayurved Ltd, Assam</li>
              <li>VE Commercial Vehicles Ltd, Madhya Pradesh</li>
              <li>Tata Motors Ltd, Gujarat</li>
              <li>Liugong India Pvt Ltd, Madhya Pradesh</li>
              <li>BASF India Ltd, Karnataka</li>
            </ul>
          </div></td>
      </tr>
      <tr>
        <td><div> </div></td>
      </tr>
    </tbody></table>
  </div>
  <div class="clear"></div>
</div> 
      
      <!--<div class="clear"></div>
						</div>	--> 
      
    </div>
    <div id="tlArrow" style="overflow: hidden; left: 0px; top: 0px; width: 0px; height: 0px;"><img src="<?php echo base_url(); ?>assets/images/tmArrow.png" alt="arrow" border="0"></div>
  </div>
  <div class="tm-years" style="position:relative;">
    <div id="tm-years-slider" style="left: -982px; width: 1265px;">
      <div id="yr1" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: 0px 0px;"></div>
      <div id="yr2" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -55px 0px;"></div>
      <div id="yr3" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -110px 0px;"></div>
      <div id="yr4" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -165px 0px;"></div>
      <div id="yr5" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -220px 0px;"></div>
      <div id="yr6" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -275px 0px;"></div>
      <div id="yr7" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -330px 0px;"></div>
      <div id="yr8" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -385px 0px;"></div>
      <div id="yr9" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -440px 0px;"></div>
      <div id="yr10" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -495px 0px;"></div>
      <div id="yr11" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -550px 0px;"></div>
      <div id="yr12" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -605px 0px;"></div>
      <div id="yr13" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -660px 0px;"></div>
      <div id="yr14" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -715px 0px;"></div>
      <div id="yr15" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -770px 0px;"></div>
      <div id="yr16" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -825px 0px;"></div>
      <div id="yr17" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -880px 0px;"></div>
      <div id="yr18" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -935px 0px;"></div>
      <div id="yr19" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -990px 0px;"></div>
      <div id="yr20" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -1045px 0px;"></div>
      <div id="yr21" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -1100px 0px;"></div>
      <div id="yr22" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -1155px 0px;"></div>
      <div id="yr23" style="float: left; width: 55px; height: 35px; background-image: url(&quot;../../assets/images/years.gif&quot;); background-repeat: no-repeat; cursor: pointer; background-position: -1210px 0px;"></div>
    </div>
  </div>
  <div id="tm-arr-right" class="tm-arr-right-hover"></div>
</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=354360714656007";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="ft-container">
  <div class="newsmain" style="margin-top:0px; float:left;">
    <div class="newstitle" style="float:left;"><img src="<?php echo base_url(); ?>assets/images/title-news.gif" alt="news" border="0" class="mainnewslogo"><img src="<?php echo base_url(); ?>assets/images/newsheadmob.jpg" alt="news" class="mobewslogo"></div>
    <div style="float:left;">
<div class=" jcarousel-skin-tango"><div class="jcarousel-container jcarousel-container-vertical" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-vertical" style="position: relative;"><ul id="mycarousel" class="jcarousel-list jcarousel-list-vertical" style="overflow: hidden; position: relative; top: -268px; margin: 0px; padding: 0px; left: 0px; height: 470px;">
<li style="margin-top: 7px; float: left; list-style: none;" class="jcarousel-item jcarousel-item-vertical jcarousel-item-1 jcarousel-item-1-vertical" jcarouselindex="1">November&nbsp;10,&nbsp;2019
                   <a href="JavaScript:;">
               			   
	  
	<br>MEW wins project from Syndicate Printers Ltd in Goa</a>&nbsp;&nbsp;
	</li><li style="margin-top: 7px; float: left; list-style: none;" class="jcarousel-item jcarousel-item-vertical jcarousel-item-2 jcarousel-item-2-vertical" jcarouselindex="2">April&nbsp;26,&nbsp;2019
                   <a href="JavaScript:;">
               			   
	  
	<br>MEW wins project from Tata Toyo Radiator Ltd in Maharashtra</a>&nbsp;&nbsp;
	</li><li style="margin-top: 7px; float: left; list-style: none;" class="jcarousel-item jcarousel-item-vertical jcarousel-item-3 jcarousel-item-3-vertical" jcarouselindex="3">April&nbsp;16,&nbsp;2019
                   <a href="JavaScript:;">
               			   
	  
	<br>MEW wins project from Aparna Enterprises Ltd in Telangana</a>&nbsp;&nbsp;
	</li><li style="margin-top: 7px; float: left; list-style: none;" class="jcarousel-item jcarousel-item-vertical jcarousel-item-4 jcarousel-item-4-vertical" jcarouselindex="4">April&nbsp;8,&nbsp;2019
                   <a href="JavaScript:;">
               			   
	  
	<br>MEW wins project from IndoSpace Industrial Park Pvt Ltd in Haryana</a>&nbsp;&nbsp;
	 
	   </li><li style="margin-top: 7px; float: left; list-style: none;" class="jcarousel-item jcarousel-item-vertical jcarousel-item-9 jcarousel-item-9-vertical" jcarouselindex="9">November&nbsp;10,&nbsp;2019
                   <a href="JavaScript:;">
               			   
	  
	<br>MEW wins project from Syndicate Printers Ltd in Goa</a>&nbsp;&nbsp;
	</li>
	   </ul></div><div class="jcarousel-prev jcarousel-prev-vertical" style="display: block;"></div><div class="jcarousel-next jcarousel-next-vertical" style="display: block;"></div></div></div>
	<!--<li style="margin-top:7px;">Monday, May 07, 2012<br /><a href="#">MEW wins a project from GMP Technical Solutions Pvt Ltd in H.P</a></li>
	<li style="margin-top:7px;">Monday, May 07, 2012<br /><a href="#">MEW wins a project from GMP Technical Solutions Pvt Ltd in H.P</a></li>
	<li style="margin-top:7px;">Monday, May 07, 2012<br /><a href="#">MEW wins a project from GMP Technical Solutions Pvt Ltd in H.P</a></li>
	<li style="margin-top:7px;">Monday, May 07, 2012<br /><a href="#">MEW wins a project from GMP Technical Solutions Pvt Ltd in H.P</a></li>
</ul>--></div>
    <div class="clear"></div>
  </div>
  <!--		<div style="float:left; margin-top:15px; margin-left:70px;">
			<div style="float:left; margin-top:18px; margin-right:4px;">Also Visit : </div>
			<div style="float:left;"><a href="http://www.MEWinfra.com/" target="_blank"><img src="images/logo-intinfra.png" border="0" /></a></div>
			<div class="clear"></div>
		</div>-->
  <div class="likebtnhp" style="float:right; margin-top:35px;">
    <div class="fb-like fb_iframe_widget" data-href="" send="false" layout="button_count" width="50" show_faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=354360714656007&amp;container_width=0&amp;href=http%3A%2F%2Fwww.facebook.com%2FMEWbuildings&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=50"><span style="vertical-align: bottom; width: 85px; height: 20px;"><iframe name="fc26fa54dec3c" width="50px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./ /like.html" style="border: none; visibility: visible; width: 85px; height: 20px;" class=""></iframe></span></div>
  </div>
  <div class="clear"></div>
  <div class="fline" style="border-top:1px solid #BDBDBD; padding-top:10px; height:200px;">
    <div class="ft-left">
      <div class="footSocal">
        <ul>
          <li><a href="" rel="nofollow" target="_blank"><img src="<?php echo base_url(); ?>assets/images/f-icon.gif" alt="facebook"></a></li>
          <li><a href="" rel="nofollow"><img src="<?php echo base_url(); ?>assets/images/y-icon.gif" alt="youtube"></a></li>
          <li><a href="#/#" rel="nofollow"><img src="<?php echo base_url(); ?>assets/images/in-icon.gif" alt="linkedin"></a></li>
        </ul>
      </div>
      <div class="copText" style="width:300px;">
        <div style="margin-left:0px;">MEW is powered by </div>
      </div>
    </div>
    <div class="ft-right">
      <div class="copyri">© Copyright 2020, <b>Manish Engineering Works Pvt. Ltd.</b><br>
        <div style="text-align:right">site by: <a href="http://www.facebook.com/absystem.tech" rel="nofollow" target="_blank">Absystem.tech</a></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>


</body></html>