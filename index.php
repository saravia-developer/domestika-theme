<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="http://localhost/environment-for-create-plugin/wp-content/themes/domestika/style.css"> -->
	<link rel="pingback" href="<?php bloginfo('pingback'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">

	<div class="site-branding">
		<h1 class="site-title"><a href="" rel="home"><?php bloginfo('name') ?></a></h1>
		<p class="site-description"><?php bloginfo('description') ?></p>
	</div>

	<div class="navigation-main-menu">
		<div class="navigation-wrap">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul id="main-menu" class="menu">
					<li class="menu-item"><a href="">Menu 1</a></li>
					<li class="menu-item"><a href="">Menu 2</a></li>
					<li class="menu-item"><a href="">Menu 3</a></li>
				</ul>
			</nav>
		</div>
	</div>

</header>

<div id="content" class="row">
	<main id="main" class="columns large-9 small-12">
		<article class="post hentry">
			<header>
				<h2 class="post-title">Esto es el título de un post</h2>
			</header>
			<div class="entry-content">
				<p>Esto es el contenido de un post. Esto es el contenido de un post. Esto es el contenido de un post. Esto es el contenido de un post. Esto es el contenido de un post</p>
			</div>
			<footer></footer>
		</article>
	</main>
	<div class="sidebar columns large-3 small-12">
		<aside class="sidebar">
			<section class="widget">
				Esto será un widget
			</section>
		</aside>
		<aside class="sidebar">
			<section class="widget">
				Esto será otro widget
			</section>
		</aside>
	</div>
</div>

<footer class="footer" id="page-footer" role="contentinfo">
	<div class="footer-container row">
		<div class="sidebar columns small-12">
			<section class="widget">
				WIDGET 1
			</section>
			<section class="widget">
				WIDGET 2
			</section>
			<section class="widget">
				WIDGET 3
			</section>
		</div>
	</div>
	<div class="site-info row">
		<div class="columns small-12">
			<!-- Hecho con WordPress -->
			 <?php _e( 'Make with Wordpress', 'domestika' ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
