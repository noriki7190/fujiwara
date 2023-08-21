<?php get_header(); ?>
    <article class="p-news-detail">
      <div class="p-news-detail__inner l-inner">

        <div class="p-detail-head">
          <h2 class="p-detail-head__ttl"><?php the_title(); ?></h2><!-- /.p-detail-head__ttl -->
          <div class="p-detail-head__meta">
            <time class="p-detail-head__date" datetime="<?php the_time('c'); ?>"><?php the_time( 'Y.m.d' ); ?></time><!-- /.p-detail-head__date -->
            <div class="p-detail-head__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'news' )[0]->name ); ?></div><!-- /.p-detail-head__category -->
          </div><!-- /.p-detail-head__meta -->
          <figure class="p-detail-head__img"><?php the_post_thumbnail(); ?></figure><!-- /.p-detail-head__img -->
        </div><!-- /.p-detail-head -->
        <div class="p-news-detail__contents p-post-contents">
<?php
if( have_posts() ):
  while( have_posts() ):the_post();
    the_content();
  endwhile;
endif;
?>
        </div><!-- /.p-news-detail__contents -->

        <div class="p-news-detail__share p-share-btn">
          <ul class="p-share-btn__list">
            <li class="p-share-btn__item"><a class="p-share-btn__link p-share-btn__link--twitter" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a><!-- /.p-share-btn__link --></li>
            <!-- /.p-share-btn__item -->
            <li class="p-share-btn__item"><a class="p-share-btn__link p-share-btn__link--facebook" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a><!-- /.p-share-btn__link --></li>
            <!-- /.p-share-btn__item -->
            <li class="p-share-btn__item"><a class="p-share-btn__link p-share-btn__link--clipboard" id="js-clipboard" target="_blank" data-clipboard-text="<?php the_title(); ?> <?php the_permalink(); ?>"><i class="fa-regular fa-clipboard"></i></a><!-- /.p-share-btn__link --></li>
            <!-- /.p-share-btn__item -->
          </ul><!-- /.p-share-btn__list -->
        </div><!-- /.p-news-detail__share -->

        <div class="p-news-detail__btn">
          <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="c-btn-secondary">Back to List</a><!-- /.c-btn-secondary -->
        </div><!-- /.p-news-detail-contents-category-link__btn -->

        <div class="p-news-related">
          <div class="p-news-related__inner">
            <h2 class="p-news-related__ttl">Related News</h2><!-- /.p-news-related__ttl -->
            <div class=" p-news-related-contents p-news-contents__list">
              <!-- 関連記事を3記事出力 -->
<?php
$terms = get_the_terms($post->ID, 'news'); // 表示している記事のタクソノミーを取得
$term_ID = [];

foreach ((array) $terms as $term):
    array_push($term_ID, $term->term_id); // タクソノミーのIDを格納
endforeach;

$args = [
    'post_type' => 'daily_news', //カスタム投稿タイプ名
    'post__not_in' => [$post->ID], // 今読んでいる記事を除く
    'posts_per_page' => 3, // 表示させたい記事数
    'orderby' => 'rand', // ランダムに表示、降順の場合は'desc'
    'tax_query' => [ // タクソノミーに関連付けられた投稿を表示
        [
            'taxonomy' => 'news', // タクソノミー名
            'terms' => $term_ID, // タクソノミーターム
        ],
    ],
];
$wp_query = new WP_Query($args);

if ($wp_query->have_posts()):
  while ($wp_query->have_posts()) : $wp_query->the_post();
?>
              <article class="p-news-contents__item">
                <a href="<?php the_permalink(); ?>" class="p-news-contents__link">
                  <figure class="p-news-contents__img">
<?php
if( has_post_thumbnail($post) ):
  the_post_thumbnail();
else:
?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/noimage.png" alt="no image">
<?php
endif;
?>
                  </figure>
                  <!-- /.p-news-contents__img -->
                  <div class="p-news-contents__body">
                    <time class="p-news-contents__date" datetime="<?php the_time('c'); ?>"><?php the_time( 'Y.m.d' ); ?></time><!-- /.p-news-contents__date -->
                    <span class="p-news-contents__label"><?php echo esc_html( get_the_terms( get_the_ID(), 'news' )[0]->name ); ?></span><!-- /.p-news-contents__label -->
                    <h3 class="p-news-contents__ttl"><?php the_title(); ?></h3><!-- /.p-news-contents__ttl -->
                  </div><!-- /.p-news-contents__body -->
                </a><!-- /.p-news-contents__link -->
              </article><!-- /.p-news-contents__item -->
<?php
  endwhile;
endif;
?>
            </div><!-- /.p-news-contents__list -->
          </div><!-- /.p-news-related__inner -->
        </div><!-- /.p-news-related -->
      </div><!-- /.p-news-detail__inner -->
    </article><!-- /.p-news-detail -->
<?php get_footer(); ?>