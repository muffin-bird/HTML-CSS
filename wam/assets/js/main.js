jQuery(function($){

	function fadeAnime(){

		// 動きの指定
		$('.archive-works-item').each(function(){ // クラス名の指定
			var elemPos = $(this).offset().top-50; // 要素より、50px上の
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
			$(this).addClass('fadeIn'); // 画面内に入ったらfadeInというクラス名を追記
			}else{
			$(this).removeClass('fadeIn'); // 画面外に出たらfadeInというクラス名を外す
			}
		});
	
	}
	
		// 画面スクロール
		$(window).scroll(function (){
	
			fadeAnime(); // 関数の呼び出し
	
		});

});