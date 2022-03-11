/*window.addEventListener('load', function hamburger() {
    document.getElementById('line1').classList.toggle('line_1');
    document.getElementById('line2').classList.toggle('line_2');
    document.getElementById('line3').classList.toggle('line_3');
    document.getElementById('nav').classList.toggle('in');
  })
  document.getElementById('hamburger').addEventListener('click' , function () {
    hamburger();
  } );*/

  jQuery(function () {
    jQuery('.js-btn').on('click', function () {        // js-btnクラスをクリックすると、
      jQuery('.right-nav , .btn-line').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
    })
  });