<?php
/*
Template Name: オリジナル特集テンプレート
*/
?>
<?php get_header("original"); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

        <div class="original">

            <div class="main-vidual" style="background: url(<?php echo get_template_directory_uri(); ?>/images/pattern.png);">
                <div class="container">
                    <div class="title">
                        <img src="https://koizumi-wordpress-v2-yoshihiro-kambayashi.c9users.io/wp-content/uploads/2016/06/title.png"></img>
                    </div>
                </div>
            </div>
            <a id="bgndVideo" class="player mb_YTVPlayer" data-property="{videoURL:'https://youtu.be/KC230ex2WwU', containment:'.main-vidual', autoPlay:true, mute:false, startAt:30, opacity:0.8, showControls:false}" style="display: none; background: none;"></a>

            <div class="aaa">
                <div class="container">
<img src="https://koizumi-wordpress-v2-yoshihiro-kambayashi.c9users.io/wp-content/uploads/2016/06/女子旅プレス-神奈川県を愉しむ女子旅.png" alt="女子旅プレス   神奈川県を愉しむ女子旅" width="100%">
                </div>
            </div>

            <div class="aaa">
                <div class="container" style="text-align: center;">
<img src="https://koizumi-wordpress-v2-yoshihiro-kambayashi.c9users.io/wp-content/uploads/2016/06/スクリーンショット-2016-06-27-15.46.20.png" alt="女子旅プレス   神奈川県を愉しむ女子旅" width="70%">
                </div>
            </div>

        </div><!-- original -->

<?php get_footer(); ?>
