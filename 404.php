<?php
/**
*
* @package WordPress
* @subpackage issastable_com
* @author SINKI & Co. - Aug, 2014
*/

get_header();
$dir = get_template_directory_uri();
?>
        <div class="contzTitle">
          <img src="<?php echo $dir; ?>/images/contz_404.png" alt="404 File Not Found" title="404 File Not Found" />
        </div><!-- /.contzTitle -->
        
        <article>
          <div class="article">
            <div class="regulate">
              <h2>404 File Not Found</h2>
              <p>ご指定のページが見つかりません(^_^;) もう一度URLをご確認下さいm(__)m</p>
              <p class="small">数秒後に<a href="/">トップページ</a>に戻ります。</p>
              <div class="logomark">&nbsp;</div>
            </div>
          </div>
        </article>

<?php get_footer(); ?>
