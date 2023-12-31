<?php get_header(); ?>
    <section class="p-works-archive">
      <div class="p-works-archive__inner l-inner">
        <div class="p-archive-head">
          <div class="p-archive-head__category">Category</div><!-- /.p-archive-head__category -->
          <div class="p-archive-head__tab">
            <ul class="p-category-tab">
              <li class="p-category-tab__item">
                <a href="" class="p-category-tab__link is-current">全て</a><!-- /.p-category-tab__link -->
              </li><!-- /.p-category-tab__item -->
<?php
  $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
  // var_dump($genre_terms);
  foreach ( $genre_terms as $genre_term ) :
?>
              <li class="p-category-tab__item">
                <a href="<?php echo get_term_link($genre_term->slug, $genre_term->taxonomy); ?>" class="p-category-tab__link"><?php echo esc_html( $genre_term->name ); ?></a><!-- /.p-category-tab__link -->
              </li><!-- /.p-category-tab__item -->
<?php endforeach; ?>
            </ul><!-- /.p-category-tab -->
          </div><!-- /.p-archive-head__tab -->
        </div><!-- /.p-archive-head -->

        <div class="p-works-archive__contents">
<?php
$wp_query = get_entry_posts('daily_works', $per_page= '9');
	if( $wp_query->have_posts() ):
    while( $wp_query->have_posts() ) : $wp_query->the_post();
?>
          <article class="p-works-archive__item p-works-card">
            <a href="<?php the_permalink(); ?>" class="p-works-card__link">
<?php
$term_slug = get_the_terms( get_the_ID(), 'genre' )[0]->slug;
?>
              <span class="p-works-card__label p-works-card__label--<?php echo $term_slug; ?> c-label"><?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></span><!-- /.p-works-card__label -->
              <figure class="p-works-card__img">
<?php
if( has_post_thumbnail($post) ):
  the_post_thumbnail('works-thumbnail');
else:
?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/noimage.png" alt="">
                <?php
endif;
?>
            </figure>
              <!-- /.p-works-card__img -->
              <figcaption class="p-works-card__caption">
                <p class="p-works-card__name"><?php the_title(); ?></p><!-- /.p-works-card__name -->
                <time class="p-works-card__date" datetime="<?php the_time('c'); ?>"><?php the_time( 'Y.m.d' ); ?></time><!-- /.p-works-card__date -->
              </figcaption><!-- /.p-works-card__caption -->
            </a><!-- /.p-works-card__link -->
          </article><!-- /.p-works-archive__item .p-works-card -->
<?php
  endwhile;
endif;
?>
        </div><!-- /.p-works-archive__contents -->

        <div class="p-works-archive__more"><a href="" class="c-btn-secondary">View More</a><!-- /.p-works-archive__btn --></div><!-- /.p-p-works-archive__more -->
        <div class="p-works-archive__border"></div><!-- /.p-works-archive__border -->
        <div class="p-works-archive__pager p-pager">
          <!-- wp pagination -->
<?php page_navi(); ?>
        </div><!-- /.p-works-archive__pager -->

      </div><!-- /.p-works-archive__inner -->
    </section><!-- /.p-works-archive -->

  <?php get_footer(); ?>