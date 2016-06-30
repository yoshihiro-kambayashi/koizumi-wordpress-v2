            <div class="sidebar">
                
                <div class="sidebar-ad">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- PC用 -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:250px"
                        data-ad-client="ca-pub-5558787960892017"
                        data-ad-slot="9774343289"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div><!-- sidebar-ad -->

                <div class="sidebar-tokushu">
                    <ul>
                        <li><a href="https://koizumi-wordpress-v2-yoshihiro-kambayashi.c9users.io/%E5%A4%8F%E3%83%90%E3%83%86%E7%89%B9%E9%9B%86/"><img src="https://placehold.jp/300x100.png"></img></a></li>
                        <li><a href="https://koizumi-wordpress-v2-yoshihiro-kambayashi.c9users.io/%E6%97%A5%E6%9C%AC%E9%85%92%E3%81%AE%E6%97%85/"><img src="https://placehold.jp/300x100.png"></img></a></li>
                    </ul>
                </div><!-- sidebar-tokushu -->

                <div class="sidebar-module">
                    <h3><strong>編集部おすすめ</strong></h3>
                    <ul>
<?php $showtext = new ShowText; foreach( $showtext->get_recommend_id() as $id ): if($id): ?>
                        <li><a href="<?php echo get_the_permalink($id); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                            <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($id) , 'full' ); echo $img[0]; ?>) no-repeat"></div>
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
                                    <div class="pubdate"><?php echo get_the_time('Y.m.d', $id); ?></div>                                
                                </div>
                            </div>
                        </a></li>
<?php endif; endforeach; ?>
                    </ul>
                </div><!-- sidebar-module -->

                <div class="sidebar-module">
                    <h3>人気記事ランキング</h3>
<?php if (function_exists('sga_ranking_get_date')): $ga_ranking = sga_ranking_get_date(); $ga_ranking = array(4,7,10); $i=1; foreach( $ga_ranking as $id ): ?>
                    <ul>
                        <li><a href="<?php echo get_the_permalink($id); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                            <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($id) , 'full' ); echo $img[0]; ?>) no-repeat">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rank<?php echo $i; ?>.png" alt="<?php echo $i; ?>位"></img>
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
                                    <div class="pubdate"><?php echo get_the_time('Y.m.d', $id); ?></div>                                
                                </div>
                            </div>
                        </a></li>
<?php $i++; endforeach; endif; ?>
                    </ul>
                </div><!-- sidebar-module -->            

                <div class="sidebar-module">
                    <h3>PICK UP</h3>
                    <ul>
<?php $showtext = new ShowTextPickSide; foreach($showtext->get_recommend_id() as $id): if($id): ?>
                        <li><a href="<?php echo get_the_permalink($id); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                            <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($id) , 'full' ); echo $img[0]; ?>) no-repeat"></div>
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
                                    <div class="pubdate"><?php echo get_the_time('Y.m.d', $id); ?></div>                                
                                </div>
                            </div>
                        </a></li>
<?php endif; endforeach; ?>
                    </ul>
                </div><!-- sidebar-module -->

                <div class="sidebar-module-banner">
                    <h3>協力機関</h3>
                    <ul>
                        <li><a href="http://hakkou-bunka.jp/" target="new"><img src="<?php echo get_template_directory_uri(); ?>/images/banner/hakkoubunka.jpg" alt="NPO法人 発酵文化推進機構"></a></li>
                        <li><a href="http://www.ft-town.jp/hakkou-network/" target="new"><img src="<?php echo get_template_directory_uri(); ?>/images/banner/network.png" alt="全国発酵のまちづくりネットワーク協議会"></a></li>
                        <li><a href="http://www.shoku-inochi.jp/" target="new"><img src="<?php echo get_template_directory_uri(); ?>/images/banner/shokuinochi.jpg" alt="食に命を懸ける会"></a></li>
                        <li><a href="http://kujiragumi.com/" target="new"><img src="<?php echo get_template_directory_uri(); ?>/images/banner/kujira2.jpg" alt="NPO（特定非営利活動法人）クジラ食文化を守る会"></a></li>
                        <li><a href="http://okeok.org/" target="new"><img src="<?php echo get_template_directory_uri(); ?>/images/banner/oke1.jpg" alt="NPO法人 桶仕込み保存会"></a></li>
                    </ul>
                </div><!-- sidebar-module-banner -->

                <div class="sidebar-module-sns">
                    <h3>Follow! SNS</h3>
                    
                    <!-- Facebook Module -->
                    <div class="sidebar-facebook">
                        <div class="fb-page" data-href="https://www.facebook.com/koizumipress/" data-width="298" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/koizumipress/">
                                    <a href="https://www.facebook.com/koizumipress/"></a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Twitter Module -->
                    <div class="sidebar-twitter">
                        <a href="https://twitter.com/KOIZUMIMAGAZINE" class="twitter-follow-button" data-show-count="false" data-size="large"></a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>

                    <div class="sidebar-rss">

                        <!-- Feedly Module -->
                        <div class="sidebar-feedly">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feedly.png" alt="feedly"></a>
                        </div>
                        
                        <!-- RSS Module -->
                        <div class="footer_rss">
                            <a href="<?php bloginfo('rss_url'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="rss"></a>
                        </div>

                    </div>

                </div><!-- sidebar-module-sns -->

                <div class="sidebar-module-tag">
                    <h3>キーワード</h3>
                    <ul>
<?php $tag_cround = wp_tag_cloud( 'format=array&taxonomy=post_tag&smallest=12&largest=12&unit=px&number=30' ); ?>
<?php foreach($tag_cround as $tag): ?>
                        <li><?php echo $tag; ?></li>
<?php endforeach; ?>
                    </ul>
                </div>

            </div><!-- sidebar -->
