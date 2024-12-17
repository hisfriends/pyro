$(function(){
	/*
	 *Smooth Scroll from another page
	 */
	var $hash = location.hash;
　if($($hash).length){
		/*Smooth Scroll （別ページからクリックされた場合)*/
		var $target = $($hash == "#" || $hash == "" ? 'html' : $hash),
				$position = $target.offset().top;
		$('body,html').scrollTop(0);
		$('body,html').animate({scrollTop:$position - 50}, 1200, 'easeInOutCubic');
	}
});
