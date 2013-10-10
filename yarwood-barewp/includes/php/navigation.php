<?php
/**
 * @package WordPress
 * @subpackage Vandaele
 */

$loc = $_SERVER['REQUEST_URI'];

?>

<?php if (!is_front_page()) { ?><a href="/" title="Back To Home"><?php } ?>BACK TO HOME<?php if (!is_front_page()) { ?></a><?php } ?>

<ul>
  <li><a href="/new-page/"  title="Test Page" <?php $pos = strpos($loc, "/new-page/"); if ($pos !== false) { echo 'class="active"'; } ?>>New Page</a></li>
</ul>