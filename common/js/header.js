$(function(){
	/*画面の高さが変わるたびに#page_titleの高さを変える*/
  var $pageTitleWrapper  = $('#page_title'),
      $windowHeight = $(window).height(),
      $headerFix = $('#header_fix');
  $pageTitleWrapper.css('height',$windowHeight);

	var $win = $(window),
      $headerFix = $('#header_fix'),
			$fadeTime = 100,
			$easing = 'linear',
			$navHeight = $headerFix.outerHeight(true),
			$navOffset = $headerFix.offset().top;

  function headerSticky(){
    // スクロールがナビゲーション位置に来たら
    if ($(this).scrollTop() > $navOffset) {
      // ナビゲーションをfixedさせる
      $headerFix.css({
        'position':'fixed',
        'top':0,
        'width':'100%',
      });
      $('.header_logo').stop().fadeIn();
      // ここは重要な部分で、fixedするとその分高さがなくなるので、margin-topを高さ分つけてあげます。
      $('#main_contents').css('margin-top',$navHeight);
    } else {
      // ifのtrueでない場合、つまり、ナビゲーション位置に来ていない時はrelativeで元に戻す。staticでも可
      $headerFix.css('position','relative');
      $('#main_contents').css('margin-top','auto');
      $('.header_logo').stop().fadeOut();
    }
  }
  headerSticky();
	// スクロールした時
	$win.scroll(function () {
    var $navOffset = $headerFix.offset().top;
		headerSticky();
	});

	/*
	* 横からスライドしてくるメニュー
	*/
	var $smartNav = $('#smartNav');
	var $body = $('body'),
			$menuToggle = $('#menuToggle');
	$('#menuButton').click(function(){
		var $windowHeight = $(window).height();
		if($smartNav.hasClass('sideOpen')){
			$smartNav.removeClass('sideOpen');
		} else {
			$smartNav.addClass('sideOpen');
		}
	});

	/*画面幅がラップトップ以上の幅になればプルダウンメニューを閉じる*/
	$(window).resize(function(){
    var $windowHeight = $(window).height(),
				w = $(window).width(),
				x = 760;
		$smartNav.css('height',$windowHeight);
    if (w > x) {
			$smartNav.removeClass('sideOpen');
    }
	});

	/*メニューのリンクをクリックしたら、プルダウンメニューを閉じる*/
	$smartNav.find('ul li a').click(function(){
		if($smartNav.hasClass('sideOpen')){
			$smartNav.removeClass('sideOpen');
		}
	});

  /*
   *バーガーメニュー
   */
  $('#menuButton').click(function(){
    $(this).toggleClass('open');
  });
});
