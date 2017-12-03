<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<form id="login" action="login" method="post">
		<h1>כניסת תלמידים</h1>
		<p class="status"></p>
		<label for="username">Username</label>
		<input id="username" type="text" name="username">
		<label for="password">Password</label>
		<input id="password" type="password" name="password">
		<a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
		<input class="submit_button" type="submit" value="Login" name="submit">
		<a class="close" href="">(close)</a>
		<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
	</form>
	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>
			
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>