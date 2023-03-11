import './bootstrap';

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

$(window).scroll(function (){
  $(".js-marker").each(function(){
    var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
    var scroll = $(window).scrollTop(); //スクロールの位置を取得
    var windowHeight = $(window).height(); //ウインドウの高さを取得
    if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
      $(this).addClass('is-active'); //クラス「active」を与える
    }
  });
});