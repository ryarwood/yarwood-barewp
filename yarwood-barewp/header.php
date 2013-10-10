<?php
/**
 * @package WordPress
 * @subpackage Yarwood
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php the_title(); ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link href="<?php bloginfo('template_directory'); ?>/includes/css/screen.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/includes/css/print.css" rel="stylesheet" type="text/css" media="print" />
<!--[if lte IE 8]>
<link href="<?php bloginfo('template_directory'); ?>/includes/css-ie.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<?php //if(is_page('new-homes')) { include(TEMPLATEPATH . '/includes-map-includes-southern.php'); } // conditional include example ?>

</head>

<body>

<?php include(TEMPLATEPATH . '/includes/php/navigation.php'); // regular include example ?>