$(function(){
	//オーディオ再生
	var audios = document.querySelectorAll( "audio" );

	for(var i=0;i<audios.length;i++){
		audios[ i ].addEventListener( "play", function(){
			for(var j=0;j<audios.length;j++){
				if( audios[ j ]!=this ){ audios[ j ].pause() }
			}
		}, false);
	}

	//ボタン切り替え
	var $switch = $('.switch');
	$($switch).click(function(){
		var $switchParent = $(this).parent('.controler');
		console.log($(this).attr('class'));
		if($(this).hasClass('start')){
			var $stopSwitch = $switchParent.find('.stop');
			$('.stop').fadeOut();
			$('.start').fadeIn();
			$($stopSwitch).fadeIn();
			$(this).fadeOut();
			$('.controler').css('opacity','0');
			$switchParent.css('opacity','1');
		} else {
			var $startSwitch = $switchParent.find('.start');
			$($startSwitch).fadeIn();
			$(this).fadeOut();
			$switchParent.css('opacity','0');
		}
	});

});
