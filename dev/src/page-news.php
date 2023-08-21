<?php get_header(); ?>
    <section class="p-news-archive">
      <div class="p-news-archive__inner l-inner">
        <div class="p-news-archive__head p-archive-head">
          <div class="p-archive-head__category">Category</div><!-- /.p-archive-head__category -->
          <div class="p-archive-head__tab">
            <ul class="p-category-tab">
              <li class="p-category-tab__item">
                <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="p-category-tab__link is-current">全て</a><!-- /.p-category-tab__link -->
              </li><!-- /.p-category-tab__item -->
<?php
  $news_terms = get_terms( 'news', array( 'hide_empty' => false ) );
  // var_dump($news_terms);
  foreach ( $news_terms as $news_term ) :
?>
              <li class="p-category-tab__item">
                <a href="<?php echo get_term_link($news_term->slug, $news_term->taxonomy); ?>" class="p-category-tab__link"><?php echo esc_html( $news_term->name ); ?></a><!-- /.p-category-tab__link -->
              </li><!-- /.p-category-tab__item -->
<?php endforeach; ?>
            </ul><!-- /.p-category-tab -->
          </div><!-- /.p-archive-head__tab -->
        </div><!-- /.p-archive-head -->

        <div class="p-news-archive__container">
          <div class="p-news-archive__contents p-news-contents">
<!-- カスタム投稿 daily_news -->
<?php
$wp_query = get_entry_posts('daily_news', $per_page= '5');
	if( $wp_query->have_posts() ):
    while( $wp_query->have_posts() ) : $wp_query->the_post();
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
<!-- タクソノミー取得 -->

                    <span class="p-news-contents__label"><?php echo esc_html( get_the_terms( get_the_ID(), 'news' )[0]->name ); ?></span><!-- /.p-news-contents__label -->

                    <h3 class="p-news-contents__ttl"><?php the_title(); ?></h3><!-- /.p-news-contents__ttl -->
                  </div><!-- /.p-news-contents__body -->
                </a><!-- /.p-news-contents__link -->
              </article><!-- /.p-news-contents__item -->
<?php
  endwhile;
endif;
?>
            <div class="p-news-archive__pager p-pager">
<?php page_navi(); ?>
            </div><!-- /.p-news-archive__pager -->
          </div><!-- /.p-news-archive__contents -->
<?php wp_reset_postdata(); ?>

<div class="p-news-archive__sidebar p-news-sidebar">
            <h4 class="p-news-sidebar__head">Archive</h4><!-- /.p-news-sidebar__head -->
            <div class="p-news-sidebar__contents">
              <ul class="p-news-sidebar__archive">
<?php
$args = array(
    'type' => 'monthly',
    'limit' => '',
    'format' => 'html',
    'before' => '',
    'after' => '',
    'show_post_count' => true,
    'echo' => 1,
    'order' => 'DESC',
    'post_type' => 'daily_news'
  );
wp_get_archives( $args );
?>
              </ul><!-- /.p-news-sidebar__archive -->
            </div><!-- /.p-news-sidebar__contents -->
          </div><!-- /.p-news-archive__sidebar -->
        </div><!-- /.p-news-archive__container -->

      </div><!-- /.p-news-archive__inner -->
    </section><!-- /.p-news-archive -->

<?php get_footer(); ?>