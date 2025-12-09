
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
<?php
// ...existing code...
?>
<nav class="main-nav">
	<div class="nav-left">
		<a href="/" class="nav-logo" style="display:flex;align-items:center;gap:12px;text-decoration:none;">
			<span style="font-size:2.2rem;">🛒</span>
			<span style="font-size:1.45rem;font-weight:700;color:#2e8fff;font-family:'Roboto Mono',Segoe UI,Arial,sans-serif;">TechShop</span>
		</a>
	</div>
	<div class="nav-center">
		<ul style="display:flex;gap:40px;list-style:none;margin:0;padding:0;justify-content:center;align-items:center;">
			<li><a href="/">Accueil</a></li>
			<li><a href="/shop">Boutique</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="/a-propos">À propos</a></li>
		</ul>
	</div>
	<div class="nav-right" style="display:flex;align-items:center;gap:24px;">
		<a href="/my-account" style="display:flex;align-items:center;gap:6px;text-decoration:none;font-weight:600;color:#e0e6ed;font-size:1.12rem;">
			<span style="font-size:1.3rem;">👤</span> Compte
		</a>
		<a href="/cart" style="display:flex;align-items:center;gap:6px;text-decoration:none;font-weight:600;color:#e0e6ed;font-size:1.12rem;">
			<span style="font-size:1.3rem;">🛍️</span> Panier
		</a>
	</div>
</nav>
