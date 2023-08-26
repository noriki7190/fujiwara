<?php get_header(); ?>
    <div class="p-privacy-policy">
      <div class="p-privacy-policy_inner l-inner">
        <div class="p-privacy-policy__contents">
<?php
if( have_posts() ):
  while( have_posts() ):the_post();
    the_content();
  endwhile;
endif;
?>
        </div><!-- /.p-privacy-policy__contents -->
      </div><!-- /.p-privacy-policy_inner l-inner -->
    </div><!-- /.p-privacy-policy -->
    
<?php get_footer(); ?>