<?php
/**
 * Child theme header override for shoper-brat
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php
	// Reuse the parent's header via the same hook output
	do_action( 'shoper_site_header');
	?>

	<div id="content" class="site-content">

