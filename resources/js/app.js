import './bootstrap';

const ham = $('#js-hamburger');
const nav = $('#js-nav');
ham.on('click', function () { //ハンバーガーメニューをクリックしたら
  ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

});

$(window).scroll(function(){
	$(".passing").each(function(){
		var imgPos = $(this).offset().top;    
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > imgPos - windowHeight + windowHeight / 4){
			$(this).addClass('move');
		}
	});
});
