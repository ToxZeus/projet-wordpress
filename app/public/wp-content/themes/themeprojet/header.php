
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('montheme_before_nav'); ?>
<nav>
	<ul style="display:flex;gap:20px;list-style:none;padding:0;margin:0;">
		<li><a href="<?php echo home_url(); ?>">Accueil</a></li>
		<li><a href="<?php echo home_url('/shop'); ?>">Boutique</a></li>
		<li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
		<li><a href="<?php echo home_url('/a-propos'); ?>">À propos</a></li>
	</ul>
</nav>
<?php do_action('montheme_after_nav'); ?>
