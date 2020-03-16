var imageWidth = 1500;
var imageHeight = 1000;

jQuery(window).load(function() {
	initBg();
});

function resizeImage() {
	
	if (screenWidth > 1004){
	var navWidth = (jQuery(window).width())+100;
	var navHeight = (jQuery(window).height());
	var navRatio = navWidth / navHeight;
	imageRatio = imageWidth / imageHeight;
	if (navRatio > imageRatio) {
		var newHeight = ((navWidth / imageWidth) * imageHeight);
		var newWidth = (navWidth);
	} else {
		var newHeight = navHeight;
		var newWidth = (navHeight / imageHeight) * imageWidth;
	}	
	newTop = 0;
	newLeft =  0;
	hpnewTop = 0 - ((newHeight - navHeight) / 2);
	hpnewLeft =  0 - ((newWidth - navWidth) / 2);
//	jQuery('#image').css({height: navHeight, width: navWidth});
//	jQuery('#wowslider-container1').css({height: newHeight, width: newWidth, top: newTop, left: newLeft});
//	jQuery('#image').css({visibility:"visible", display:"block"});
	jQuery('#image').css({height: navHeight, width: navWidth});
	jQuery('#image img').css({height: newHeight, width: newWidth, top: newTop, left: newLeft});
	jQuery('#image').css({visibility:"visible", display:"block"});
	
	jQuery('#hpimage').css({height: navHeight, width: navWidth});
	jQuery('#hpimage img').css({height: newHeight, width: newWidth, top: hpnewTop, left: hpnewLeft});
	jQuery('#hpimage').css({visibility:"visible", display:"block"});
	} else {
		jQuery('#image').css({height: screenWidth/1.5, width:'100%'});
		jQuery('#image img').css({height: 'auto', width:'100%'});
	}
		

}


function initBg(){
		var D = document;
	documentHeight =  Math.max(Math.max(D.body.scrollHeight,    D.documentElement.scrollHeight), Math.max(D.body.offsetHeight, D.documentElement.offsetHeight), Math.max(D.body.clientHeight, D.documentElement.clientHeight));
 
	//	myheight = $(prm).height()+65;
	sp = ((documentHeight-$(window).height()))/(($("#image img").height()-$(window).height()));
}

