jQuery(function(){

  var nav = jQuery('#nav');
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > height) { //スクロールが500pxを越えたら
			nav.addClass('invert');
		} else { //スクロールが500pxを越えなければ
			nav.removeClass('invert');
		}
	});
});