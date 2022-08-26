jQuery(function($){

	function delayScrollAnime(){
		var time = 0.3; // 遅延時間の値
		var value = time;
		$('.archive-works-item').each(function(){
			var parent = this; // 親要素を取得
			var elemPos = $(this).offset().top; // 要素の位置を取得
			var scroll = $(window).scrollTop(); // スクロール量を取得
			var windowHeight = $(window).height(); // 画面の高さを取得
			var childs = $(this).children(); // 子要素を取得

			if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")){ // 指定領域内,親要素にクラス(!play)
				$(childs).each(function() {
					if(!$(this).hasClass("fadeUp")) { // アニメーションのクラスが指定されているかチェック
						$(parent).addClass("play"); // 親要素にクラス(play)を追加
						$(this).css("animation-delay", value + "s"); // CSS追加
						$(this).addClass("fadeUp"); // アニメーションクラスの追加
						value = value + time; // delay時間の増加

						var index = $(childs).index(this); // 要素のindex番号の取得
						if((childs.length-1) == index) {
							$(parent).removeClass("play"); // クラス(play)を外す
						}
					}
				})
			} else {
				$(childs).removeClass("fadeUp"); // アニメーションクラスの削除
				value = time; // delayの初期値
			}
		})
	}
	
		// 画面スクロール
		$(window).scroll(function (){
			delayScrollAnime();
		});

		// 画面が読み込み
		$(window).on('load', function() {
			delayScrollAnime();
		});	
});