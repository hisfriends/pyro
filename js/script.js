$(function(){
	function sectionTitleHeight(){
		var $windowHeight = $(window).height();
    $('.back_img_title').css({
      'height':$windowHeight,
    });
	}
	sectionTitleHeight();
	$(window).resize(function(){
    sectionTitleHeight();
	});
});
