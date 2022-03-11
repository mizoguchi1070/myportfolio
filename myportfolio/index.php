<?php get_header(); ?>
<div class="main">

  <div class="top-vg" id="chara1">
    <div class="title">
      <div class="title-inner">
        <div class="fade-in">
          <h2 class="main">Web Designer</h2>
          <p class="sub">Kazuki</p>
        </div>
      </div>
    </div>
  </div>

  <div class="main-inner">

    <div class="message">
      <br><br>
      <p>2022年12月は、まだ対応可能な枠がございます。</p>
      <p>お仕事のご依頼は<span><a href="<?php get_site_url() ?>/contact">こちら</a><span>からお願いいたします。</p>
    </div>

    <article class="service" id="service">
      <h2 class="section-title">
        <i class="fa-regular fa-s">ERVICE</i></h2>

      <div class="service-contents">
        <div class="service-content">
          <i class="fa-solid fa-paintbrush fa-7x"></i>
          <p>デザイン</p>
          <p>サイトやバナーのデザインが可能です。</p>
        </div>

        <div class="service-content">
          <i class="fa-solid fa-code fa-7x"></i>
          <p>WordPress</p>
          <p>50サイト以上のテーマ制作経験があります！</p>
        </div>


        <div class="service-content">
          <i class="fa-brands fa-wordpress fa-7x"></i>
          <p>コーディング</p>
          <p>短納期のコーディングもおまかせください。</p>
        </div>
      </div>
    </article>

    <article class="works">
      <h2><i class="fa-regular fa-w">ORKS</i></h2>
      <div class="top">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_inoshishi_swim.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_hitsuji_nohorn.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_inoshishi_swim.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_hitsuji_nohorn.png">
      </div>
      <div class="bottom">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_inoshishi_swim.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_hitsuji_nohorn.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_inoshishi_swim.png">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/animal_hitsuji_nohorn.png">
      </div>

      <div class="works-button">

      </div>

    </article>

    <article class="contact">
      <div class="contact-inner">
        <p>ご依頼をお待ちしております。</p>
      </div>
    </article>
    <!--<script src="dist/main.js"></script>-->
  </div>
  <!--main-inner-->
</div>
<!--main-->
<?php get_footer(); ?>