<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<!-- SEO goes here -->
</head>

<body <?php body_class(); ?>>

<?php 
  $headerBackground = get_field('header_background');
?>

<header id="home">
	<div class="headerBorderContainer" style="background-image:linear-gradient(rgba(22,26,52,0.8),rgba(22,26,52,1)90%),url(<?php echo $headerBackground['url']?>)">
		<div class="logoContainer">
			<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
			?>
			<img src="<?php echo $image[0]; ?>" alt="">
			<svg class="logo" viewbox="-120 -230 250 250">
			  <defs/>
			  <g>
			    <path d="M30.5 -148.3 L5 -148.3 -8.55 -138.75 Q-11.85 -98.85 -20.2 -58.9 L-2.8 -56.05 -2.65 -56 1.35 -55.2 Q-1.05 -63.2 0.85 -74.35 L0.9 -74.5 0.9 -74.7 Q5.45 -108.85 41.2 -114.4 30.45 -131.65 30.5 -148.3 M7.55 -169.55 Q12.7 -172.5 15.85 -175.9 17 -179.05 14.45 -181.25 4.95 -184.55 -6 -165.15 L0.1 -165.15 7.6 -169.6 7.55 -169.55 M51.3 -165.1 Q68 -164.45 74.55 -174.95 76 -179.55 72.2 -181.5 62.65 -181.85 51.3 -165.1 M6.45 -205.5 Q21.1 -211.7 28.45 -206.7 37.7 -202.9 37.65 -187.45 38.4 -175 29.3 -165.15 L33.25 -165.15 Q34.95 -170.5 37.8 -175.7 L37.8 -175.75 Q55.05 -208.1 77.35 -208.65 93.1 -210.45 95.65 -197 98.05 -189.25 92.15 -172.75 80.75 -150.95 49.7 -148.3 L47.55 -148.3 Q47.7 -133.2 59.6 -117.3 L59.55 -117.35 59.9 -116.9 Q85.7 -121.9 102.2 -132.75 114.85 -141.05 102.25 -123.1 93.35 -110.5 69.95 -101.9 L69.9 -101.85 Q86.95 -72.5 76.5 -54.25 67.2 -33.45 27.5 -35.05 L26.5 -35.15 Q11.5 -36 -5.95 -39.5 L-5.8 -39.45 -23.9 -42.45 Q-29.55 -23.55 -45.8 -9.85 -66.5 7.8 -91 -6.25 L-91 -6.2 Q-106.9 -15.25 -108.05 -26.15 -110.9 -37.5 -97.95 -49.7 -83.6 -64.7 -37 -60.9 -30.4 -92 -26.2 -129.4 -36.55 -122.45 -43.9 -123.8 -44.85 -130.3 -24.8 -147.4 L-24.75 -148.3 Q-51.15 -149.25 -65.65 -151.65 -80.2 -154.05 -76.45 -156.9 -72.7 -159.8 -63.8 -161.85 -54.95 -163.9 -23.25 -165.15 -18.25 -196.55 6.45 -205.5 M52.1 -98.6 Q28.3 -93.15 24.2 -74.75 22.75 -63.3 36.9 -60.75 61.15 -56.55 63.05 -69.75 63.15 -81.5 52.1 -98.6 M-72.2 -17.3 Q-64.05 -16.6 -56.7 -22.7 L-56.65 -22.75 Q-45.7 -31.95 -41.05 -44.3 -82.05 -44.55 -82.3 -29.75 -82.1 -20.45 -72.2 -17.3"/>
			  </g>
			</svg>
		</div> <!--  /.logoContainer -->
		<nav class="mainNav">
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'primary'
			)); ?>
  		</nav>
  		<div id="navIcon">
  			<span></span>
  			<span></span>
  			<span></span>
  			<span></span>
  			<span></span>
  			<span></span>
  		</div>
		<h1 class="aboveHeader"><?php the_field('aboveheader'); ?></h1>
		<h2 class="subHeading"><?php the_field('subHeading'); ?></h3>
		<h2 class="bigFadedLetters"><?php the_field('big_letters'); ?></h2>
  		<div class="socialHeaderContainer">
			<a href="http://www.github.com/leandrasilver" target="_blank"><i class="fa fa-github"></i></a>
			<a href="https://ca.linkedin.com/in/leandrasilver" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="http://www.twitter.com/leandrasilver" target="_blank"><i class="fa fa-twitter"></i></a>
  		</div> <!-- ./socialHeaderContainer -->
  		<button class="arrowDown" alt="to about">
			<a href="#about"><i class="fa fa-angle-double-down"></i></a>
 		</button>
  	</div> <!-- ./headerBorderContainer -->
</header>