
$('.slider').slick({
fade:true,//切り替えをフェードで行う。初期値はfalse。
autoplay: true,//自動的に動き出すか。初期値はfalse。
autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
speed:1000,//スライドの動きのスピード。初期値は300。
infinite: true,//スライドをループさせるかどうか。初期値はtrue。
slidesToShow: 1,//スライドを画面に3枚見せる
slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
arrows: true,//左右の矢印あり
prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
dots: true,//下部ドットナビゲーションの表示
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
$('.slider').slick('slickPlay');
});

function PageTopAnime() {
var scroll = $(window).scrollTop();
if (scroll >= 200){//上から200pxスクロールしたら
  $('#page-top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
  $('#page-top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
}else{
  if($('#page-top').hasClass('UpMove')){//すでに#page-topにUpMoveというクラス名がついていたら
    $('#page-top').removeClass('UpMove');//UpMoveというクラス名を除き
    $('#page-top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
  }
}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$('#page-top a').click(function () {
  $('body,html').animate({
      scrollTop: 0//ページトップまでスクロール
  }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false;//リンク自体の無効化
});
