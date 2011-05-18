<? get_header(); ?>
<div id="content">
  <? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>
      <div id="post-<? the_id(); ?>" class="article">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="post_content">
          <? the_content(); ?>
        </div>
        <div class="share">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
          <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=202090509814130&amp;xfbml=1"></script><fb:like href="<?php the_permalink(); ?>" send="false" layout="button_count" width="200" show_faces="false" font="arial"></fb:like>
        </div>
      </div>
    <? endwhile;?>
    <?else:?>
      <div id="not_found" class="post">
        <h2 class="post-title">Page Not Found</h2>
        <div class="post_content">
          <p>We're sorry but we were unable to find what you were looking for. Please search and try again.</p>
        </div>
      </div>
  <? endif;?>
</div>
<? get_footer(); ?>