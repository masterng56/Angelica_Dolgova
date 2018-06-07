<div id="leftside">
<ul class="sideul">

<?php
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>

<li class="widget"><?php _e('Meta'); ?>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Подписаться на новости блога, через RSS'); ?>"><?php _e('RSS Feed'); ?></a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Последние комментарии в RSS'); ?>"><?php _e('Comments RSS'); ?></a></li>
<?php wp_meta(); ?>
</ul>
</li>

</ul>
</div>
