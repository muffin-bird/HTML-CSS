jQuery(function ($) {

	function delayScrollAnime() {
		var time = 0.3; // 遅延時間の値
		var value = time;
		$('.archive-works-item').each(function () {
			var parent = this; // 親要素を取得
			var elemPos = $(this).offset().top; // 要素の位置を取得
			var scroll = $(window).scrollTop(); // スクロール量を取得
			var windowHeight = $(window).height(); // 画面の高さを取得
			var childs = $(this).children(); // 子要素を取得

			if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) { // 指定領域内,親要素にクラス(!play)
				$(childs).each(function () {
					if (!$(this).hasClass("fadeUp")) { // アニメーションのクラスが指定されているかチェック
						$(parent).addClass("play"); // 親要素にクラス(play)を追加
						$(this).css("animation-delay", value + "s"); // CSS追加
						$(this).addClass("fadeUp"); // アニメーションクラスの追加
						value = value + time; // delay時間の増加

						var index = $(childs).index(this); // 要素のindex番号の取得
						if ((childs.length - 1) == index) {
							$(parent).removeClass("play"); // クラス(play)を外す
						}
					}
				})
			}
		})
	}

	// 画面スクロール
	$(window).scroll(function () {
		delayScrollAnime();
	});

	// 画面が読み込み
	$(window).on('load', function () {
		delayScrollAnime();
	});

	$(function () { // loading
		var flg = null;
		var webStorage = function () {
			if (sessionStorage.getItem('access')) { // データの取得
				// 2回目以降アクセス時の処理
				flg = 1;
			} else {
				// 初回アクセス時の処理
				sessionStorage.setItem('access', 'true'); // データ保存
				flg = 0;
				var h = $(window).height();
				$('#contents').css('display', 'none');
				$('#loader-bg, #loader').height(h).css('display', 'block');
				$(window).load(function () {
					$('#loader-bg').delay(1800).fadeOut(500);
					$('#loader').delay(1500).fadeOut(300);
					$('#contents').css('display', 'block');
				});
			}
			return flg;
		}
		webStorage();
	});

	$('.page-top').click(function () { // pagetop
		$('body,html').animate({
			scrollTop: 0 // トップまでスクロール
		}, 1200, "easeInOutQuint");
		return false;
	});

	$('.slider').slick({ // オプション
		arrows: false, // 矢印なし
		autoplay: true, // 自動プレイ
		autoplaySpeed: 0, // 自動プレイ待ち時間
		speed: 7000, // スライド時間
		infinite: true, // ループ設定
		cssEase: 'linear', // easeなし
		pauseOnHover: false, // マウスで一時停止なし
		pauseOnFocua: false, // フォーカス一時停止なし
		slidesToShow: 3, // スライド画面3枚
		slidesToScroll: 1, // 動かす要素数
		responsive: [ // レスポンシブ時にテスト予定
			{
			breakpoint: 769,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 426,
			settings: {
				slidesToShow: 1.5,
			}
		}
	]
	});

});