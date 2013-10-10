<?php
/**
 * @package WordPress
 * @subpackage Yarwood
 */
?>

<h2>Latest Posts</h2>
<ul><?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?></ul>

<h2>Monthly Archives</h2>
<ul><?php wp_get_archives('type=monthly'); ?></ul>

<h2>Categories</h2>
<ul>
<li <?php if (is_front_page()) { print 'class="active"'; } ?>><a href="/news/">All News</a></li>
<?php wp_list_categories('title_li=&exclude=1'); ?>
</ul>