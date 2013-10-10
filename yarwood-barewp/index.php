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
  <?php the_content(); ?>
</div>

<?php endwhile; ?>

<div class="navigation">
<div class="arrowLeft"><?php next_posts_link('Older Entries') ?></div>
<div class="arrowRight"><?php previous_posts_link('Newer Entries') ?></div>
</div>

<?php else : ?>

<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
        
<?php get_footer(); ?>