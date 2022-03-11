<?php get_header(); ?>


<!-- ニュース項目-->
<div class = "">
  <div class = "">
    <div class = "">
      <?php single_cat_title() ?>
    </div>
    <div class="">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <dl class="">
        <a href="<?php the_permalink(); ?>">
          <dt><?php the_time("Y.n.j"); ?></dt>
          <dd class="news__title">
            <span><?php the_title(); ?></span>
          </dd>
        </a>
      </dl>
    <?php endwhile;?>
    </div>
　　<!-- ページナビをつける場合-->
    <div class="">
      <?php if(function_exists('wp_pagenavi')): ?>
      <?php wp_pagenavi(); ?>
      <?php else: ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  </div>
</div>


<?php get_footer(); ?>