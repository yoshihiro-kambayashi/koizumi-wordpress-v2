    <footer>
        <div class="container">
            <div class="footer-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mini.png" width="180" alt="丸ごと小泉武夫マガジン"></img></a>
                <span><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y'); ?> Marugoto Koizumi Takeo Syoku Magazine.</span>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo esc_url(get_page_link(259)); ?>">丸ごと小泉武夫マガジンとは</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo esc_url(get_page_link(252)); ?>">小泉武夫プロフィール</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo esc_url(get_page_link(1552)); ?>">コンテンツについて</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo esc_url(get_page_link(2111)); ?>">会員一覧</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo esc_url(get_page_link(262)); ?>">お問い合わせ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="http://idp-pb.com/outline/" target="_blank">運営会社</a></li>
                </ul>
            </div>
        </div><!-- footer > container -->
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mb.YTPlayer.min.js"></script>
    <script>
      $(function(){
          $(".player").mb_YTPlayer();
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>
