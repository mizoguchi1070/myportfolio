    <?php get_header(); ?>

    <?php
    $post = get_page_by_path('スラッグ', OBJECT, 'works');
    $postID = $post->ID;
    ?>


    <div id="works">
        <h2>WORKS</h2>
        <p>webデザインの制作実績です。</p>

        <div class="page-works">
            <main class="works-archive">
                <div class="works-archive-contents">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post();

                            $thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'works') : 'https://placehold.jp/150x150.png';
                        ?>

                            <article class="works-item">
                                <a href="<?php the_permalink($postID); ?>" class="works-item__inner">
                                    <div class="works-item__media js-img-bg">
                                        <img src="<?php print $thumbnail; ?>" alt="">
                                    </div>
                                    <div class="works-item__body">
                                        <h2 class="works-item__title"><?php the_title(); ?></h2>
                                        <time datetime="the_time( 'Y-m-d' )"><?php the_time('Y.m.d'); ?></time>
                                        <p class="works-item__text"><?php print mb_strimwidth(strip_tags(get_the_content()), 0, 200, "…", "UTF-8"); ?></p>
                                        <p class="works-item_category"><?php the_category(); ?></p> 
                                    </div>
                                </a>
                            </article>

                        <?php endwhile; ?>

                    <?php else : ?>
                        何も投稿がありません。
                    <?php endif; ?>

                </div>

                <?php
                $args = array(
                    'mid_size' => 1,
                    'prev_text' => '&lt;&lt;前へ',
                    'next_text' => '次へ&gt;&gt;',
                    'screen_reader_text' => ' ',
                );
                the_posts_pagination($args);
                ?>

            </main>

        </div>
    </div>

    <?php get_footer(); ?>