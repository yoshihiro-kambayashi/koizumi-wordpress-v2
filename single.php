<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="single">
            
            <div class="single-header" style="background-image: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); echo $img[0]; ?>)">
                <div class="single-container">
                    <div class="info">
                        <h2><?php $title = get_the_title(); if ( mb_strlen($title) > 60 ){ $title = mb_substr( get_the_title(), 0, 60 ).'...'; } echo $title; ?></h2>
                        <div class="subinfo">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

// 記事のカテゴリー名のみ取得
$this_category_name= array();
foreach ( $this_categories as $cat ){ array_push( $this_category_name, $cat->name ); }
$this_categories = $this_category_name;
?>
                            <div class="category">カテゴリー：<?php echo implode(", ", $this_categories); ?></div>
                            <div class="pubdate">投稿日：<?php echo get_the_time('Y.m.d'); ?></div>
                        </div>
                    </div>
                </div>
            </div><!-- single-header -->
            
            <div class="bredcrumb bgcolor-f5f5f5">
                <div class="single-container">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
                            <span class="separate"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li>
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

foreach ( $this_categories as $this_category ):
?>
                            <a href="<?php echo esc_url( get_category_link( $this_category->cat_ID ) ); ?>"><?php echo $this_category->cat_name; ?></a><?php if ( $this_category !== end( $this_categories ) ){ echo ", "; } ?>

<?php endforeach; ?>
                            <span class="separate"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li><a href="<?php echo get_the_permalink(); ?>"><?php $title = get_the_title(); if ( mb_strlen($title) > 30 ){ $title = mb_substr( get_the_title(), 0, 30 ).'...'; } echo $title; ?></a></li>
                    </ul>
                </div>
            </div><!-- bredcrumb -->
            
            <div class="single-content">
                <div class="single-container">
                    <article>
  <?php $image_main = wp_get_attachment_image_src( get_post_thumbnail_id() ,'large'); ?>
                        <div class="single-main-image"><img src="<?php echo $image_main[0]; ?>"></img></div>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div><!-- single-content -->

            <div class="single-tag">
                <div class="single-container">
                    <ul>
<?php $posttags = get_the_tags(); if ($posttags): foreach($posttags as $tag): ?>
                        <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><i class="fa fa-tag" aria-hidden="true"></i><?php echo $tag->name ?></a></li>
<?php endforeach; endif;?>
                  </ul>
                </div>
            </div><!-- single-tag -->

            <div class="single-ad">
                <div class="single-container">
                    <ul>
                        <li>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- pc用メインカラム左 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:300px;height:250px"
                                 data-ad-client="ca-pub-5558787960892017"
                                 data-ad-slot="5579961681"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </li>
                        <li>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- PC用メインカラム右 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:300px;height:250px"
                                 data-ad-client="ca-pub-5558787960892017"
                                 data-ad-slot="1010161283"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </li>
                    </ul>
                </div>
            </div><!-- single-ad -->

            <div class="single-sns">
                <div class="single-container">
                    <p>＼　　この記事をSNSでシェアしよう！　　／</p>
<?php

	// チェックするURL
	$url = get_the_permalink();

	// リクエストURL
	$request_url = 'http://graph.facebook.com/?id=' . rawurlencode( $url ) ;

	// データをJSON形式で取得する (cURLを使用)
	$curl = curl_init() ;
	curl_setopt( $curl, CURLOPT_URL, $request_url ) ;
	curl_setopt( $curl, CURLOPT_HEADER, 1 ) ;						// ヘッダーを取得する
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;			// 証明書の検証を行わない
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;			// curl_execの結果を文字列で返す
	curl_setopt( $curl, CURLOPT_TIMEOUT, 15 ) ;					// タイムアウトの秒数
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION , true ) ;			// リダイレクト先を追跡するか？
	curl_setopt( $curl, CURLOPT_MAXREDIRS, 5 ) ;					// 追跡する回数
	$res1 = curl_exec( $curl ) ;
	$res2 = curl_getinfo( $curl ) ;
	curl_close( $curl ) ;

	// 取得したデータの整理
	$json = substr( $res1, $res2['header_size'] ) ;					// 取得したデータ(JSONなど)
	$header = substr( $res1, 0, $res2['header_size'] ) ;			// レスポンスヘッダー (検証に利用したい場合にどうぞ)

	// JSONデータを連想配列に直す
	$array = json_decode( $json , true ) ;

	// カウントプロパティが存在する場合
	if( isset($array['shares']) ) {
		$fb_count = $array['shares'] ;

	// カウントプロパティが存在しない場合は0扱い
	} else {
		$fb_count = "" ;
	}

	$request_url = 'http://api.b.st-hatena.com/entry.count?url=' . rawurlencode( $url ) ;

	// データをJSON形式で取得する (cURLを使用)
	$curl = curl_init() ;
	curl_setopt( $curl, CURLOPT_URL, $request_url ) ;
	curl_setopt( $curl, CURLOPT_HEADER, 1 ) ;						// ヘッダーを取得する
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;			// 証明書の検証を行わない
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;			// curl_execの結果を文字列で返す
	curl_setopt( $curl, CURLOPT_TIMEOUT, 15 ) ;						// タイムアウトの秒数
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION , true ) ;			// リダイレクト先を追跡するか？
	curl_setopt( $curl, CURLOPT_MAXREDIRS, 5 ) ;					// 追跡する回数
	$res1 = curl_exec( $curl ) ;
	$res2 = curl_getinfo( $curl ) ;
	curl_close( $curl ) ;

	// 取得したデータの整理
	$hatena_count = substr( $res1, $res2['header_size'] ) ;				// 取得したデータ(JSONなど)
	$header = substr( $res1, 0, $res2['header_size'] ) ;			// レスポンスヘッダー (検証に利用したい場合にどうぞ)

	// データが正数じゃない場合は0扱い
	if( !$hatena_count ) {
		$hatena_count = "" ;
	}

?>
                    <ul>
                        <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="bgcolor-facebook">Facebookでシェア<span class="count"><?php echo $fb_count; ?></span></a></li>
                        <li><a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;hashtags=小泉武夫マガジン&amp;text=<?php the_title(); ?>｜丸ごと小泉武夫マガジン" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="bgcolor-twitter">Twitterでシェア<span class="count"></span></a></li>
                        <li><a href="http://b.hatena.ne.jp/add?url=<?php echo $url; ?>" target="_blank" class="bgcolor-hatena">Bookmark!<span class="count"><?php echo $hatena_count; ?></span></a></li>
                    </ul>
                </div>
            </div><!-- single-sns -->

            <div class="single-iine">
                <div class="single-container">
                    <div class="info">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

// 記事のカテゴリー名のみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                        <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); echo $img[0]; ?>) no-repeat"></div>
                        <div class="subinfo">
                            <div class="text-big">この記事が気に入ったら<br>「いいね！」しよう！</div>
                            <div class="iine-button">
                                <div class="fb-like" data-href="https://www.facebook.com/koizumipress/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            </div>
                            <div class="text-small">小泉武夫 食マガジンの最新情報を毎日お届け</div>
                        </div>
                    </div>
                </div>
            </div><!-- single-iine -->

            <div class="single-related">
                <div class="container">

                    <h2><span class="emphasize">関連記事</span></h2>
                    <div class="main-list">
                        <ul>
<?php
$tags = wp_get_post_tags( get_the_id() );

$tag_ids = array();
foreach($tags as $tag):
  array_push( $tag_ids, $tag->term_id);
endforeach ;

$args = array( 'post__not_in' => array( get_the_id() ), 'posts_per_page'=> 8, 'tag__in' => $tag_ids, 'orderby' => 'rand' );
?>
<?php $posts = get_posts($arg); ?>
<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                            <li class="col-4"><a href="<?php echo get_the_permalink(); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                               <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($id) , 'full' ); echo $img[0]; ?>) no-repeat">
<?php if( 3 > ( date( 'U', ( date_i18n('U') - get_the_time('U') ) ) / 86400 ) ): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/new.png" alt="new">
<?php endif; ?>
                                </div>
                                <div class="info">
                                    <div class="text"><?php $title = get_the_title($id); if ( mb_strlen($title) > 25 ){ $title = mb_substr( get_the_title($id), 0, 25 ).'...'; } echo $title; ?></div>
                                    <div class="subinfo">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリー名のみ取得
$this_category_name = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_name, $cat->name ); }
$this_categories = $this_category_name;
?>
                                        <div class="category color-orange"><?php echo implode(", ", $this_categories); ?></div>
                                        <div class="pubdate"><?php echo get_the_time('Y.m.d'); ?></div>                                
                                    </div>
                                </div>
                            </a></li>
<?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>

                </div>
            </div><!-- single-related -->

        </div><!-- single -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
