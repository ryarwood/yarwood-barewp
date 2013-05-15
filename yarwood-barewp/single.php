<?php
/**
 * @package WordPress
 * @subpackage Yarwood
 */

get_header(); ?>

<?php 
if (have_posts()) :
while (have_posts()) : the_post();
?>

<div class="newsPost">
<h2><?php the_title(); ?></h2>
<h3><?php the_time('F jS, Y') ?></h3>
<?php the_content('<p>READ MORE &gt;</p>'); ?>
</div>

<?php endwhile; endif; ?>
        
<?php get_footer(); ?>