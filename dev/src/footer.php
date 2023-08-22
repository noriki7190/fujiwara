</main><!-- /.l-main -->

  <footer class="l-footer">
<?php if(!is_front_page()): ?>
    <div class="p-footer-links">
      <div class="p-footer-links__item p-footer-links__item--contact">
        <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="p-footer-links__link">
          Contact<span>お問い合わせ</span>
        </a><!-- /.p-footer-links__link -->
      </div><!-- /.p-footer-links__item -->
      <div class="p-footer-links__item p-footer-links__item--recruit">
        <a href="<?php echo esc_url( home_url( 'recruit' ) ); ?>" class="p-footer-links__link">
          Recruit<span>採用情報</span>
        </a><!-- /.p-footer-links__link -->
      </div><!-- /.p-footer-links__item -->
    </div><!-- /.p-footer-links -->
<?php endif; ?>
    <div class="p-footer">
      <div class="l-inner">
        <div class="p-footer__contents">
          <nav class="p-footer__nav p-footer-nav">
<?php
  wp_nav_menu(
    array (
      'depth' => 1,
      'theme_location' => 'footer',
      'container' => '',
      'menu_class' => 'p-footer-nav__list',
    )
  )
?>
          </nav><!-- /.p-footer__nav p-footer-nav -->
          <div class="p-footer__logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo_light.png" alt="藤原建設工業"></div>
          <!-- /.p-footer__logo -->
          <address class="p-footer__access p-access">
            <p class="p-access__head">Access</p><!-- /.p-drawer__access -->
            <p class="p-access__info">
              藤原建設工業株式会社 本社<br>〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br>TEL 00-0000-0000
            </p><!-- /.p-drawer__info -->
          </address><!-- /.p-access -->
          <div class="p-footer__bottom">
            <p class="p-footer__privacy"><a href="">Privacy Policy</a></p><!-- /.p-footer-privacy -->
            <small class="p-footer__copyright">© 1995 Fujiwara Construction Industry. Co.,
              Ltd.</small><!-- /.p-footer__copyright -->
          </div><!-- /.p-footer__bottom -->
        </div><!-- /.p-footer__contents -->
      </div><!-- /.l-inner -->
    </div><!-- /.p-footer -->
  </footer><!-- /.l-footer -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="./assets/js/swiper.js"></script>
  <script src="./assets/js/luminous.min.js"></script>
  <script src="./assets/js/script.js"></script> -->
  <?php wp_footer(); ?>
</body>

</html>