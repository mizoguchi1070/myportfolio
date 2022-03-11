jQuery(document).scroll(function() {    
	var scroll = jQuery(window).scrollTop();
  
	if (scroll >= 400) { //150pxスクロールすると起動
	  jQuery('header').css('background-color', '#FFF');
	} else { //スクロールしていないときは起動しない
	  jQuery('header').css('background-color', 'unset');
	}
  });