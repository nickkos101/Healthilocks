<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/newhp/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/newhp/style.css">
	<link href='http://fonts.googleapis.com/css?family=Gudea:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/newhp/nivo.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/newhp/nivo.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/newhp/function.js"></script>
	<?php
	settings_fields('main_options');
	$optionname= 'main_theme_options';
	$mainoptions = get_option($optionname);
	?>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
			</div>
			<nav>
				<?php wp_nav_menu(array('theme_location'=>'top-menu')); ?>
			</nav>
		</div>
		<div class="container large">
			<div class="signup">
				<h2>Sign<br/> Up</h2>
			</div>
		</div>
		<div class="container large">
			<div class="signup-form">
				<div class="container">
					<p><i>Sign up for our newsletter to stay informed about our latest products and upcoming events.</i></p>
					<input type="text" placeholder="First Name">
					<input type="text" placeholder="Last Name">
					<input type="text" placeholder="eMail">
					<button>Submit</button>
				</div>				
			</div>
		</div>
	</header>
	<section>
		<div class="slider">
			<div class="container">
				<div class="slide-bank">
					<?php query_posts(array('posts_per_page' => 10, 'post_type' => 'slides')); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="slide">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('full', array( 'alt' => 'alttext', 'title' => '<p>'.get_the_title().'</p>'));
						}  
						else {
							echo '<img alt="missing" src="http://placehold.it/250">';
						}
						?>
					</div>
				<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="product-carousel">
		<div class="product-bank">
			<?php $count = 1; ?>
			<?php query_posts(array('posts_per_page' => 12, 'post_type' => 'products')); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="product <?php if ($count % 1 == 0) { echo 'left';} elseif($count % 2 == 0) {echo 'mid';} else {echo 'right';} ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full'));
}  
?>
<?php autoc_get_img('carousel-image', 'thumb') ?>
<h3><?php the_title(); ?></h3>
<?php the_excerpt(); ?>
<span class="price">$<?php echo autoc_get_postdata('price'); ?></span>
</div>
<?php $count++; ?>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
</div>
<div class="divet-bank">
	<img class="divet left" src="<?php echo get_template_directory_uri(); ?>/images/divet.png">
</div>
</div>
<div class="product-display">
	<div class="container">
		<div class="ft-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/product-large.png">
		</div>
		<h3>Healthilocks Daily Shampoo</h3>
		<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
		<div class="buttons">
			<button>Where to Buy</button>
			<button>Order Online</button>
		</div>
		<span class="price">$38.00</span>
	</div>
</div>
<div class="container large">
	<div class="wrap">
		<img src="<?php echo get_template_directory_uri(); ?>/images/section-image.jpg">
		<div class="container">
			<div class="text-sect">
				<img id="droplet" src="<?php echo get_template_directory_uri(); ?>/images/droplet.png">
				<h2>with Plexprotien &trade;</h2>
			</div>
			<div class="vid-mod">
				<p><?php echo $mainoptions['content1blocktext']; ?></p>
				<span class="cross-plate"> 
					<img class="mask" src="http://blogs.windows.com/cfs-file.ashx/__key/CommunityServer-Blogs-Components-WeblogFiles/00-00-00-53-84-metablogapi/2133.image_5F00_4582ED60.png">
					<img src="<?php echo get_template_directory_uri(); ?>/images/small-cross.png" class="x-left">
					<img src="<?php echo get_template_directory_uri(); ?>/images/small-cross.png" class="x-right">
					<div class="lightbox">
						<iframe width="100%" height="400" src="//www.youtube.com/embed/6YaCZsgh5yE" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="lightbox-overlay">
					</div>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="locator">
	<div class="container">
		<div class="left">
			<div class="cross">
				<div class="cross-vert colored">
				</div>
				<div class="cross-horz colored">
				</div>
			</div>
			<div class="wrap">
				<h4><?php echo $mainoptions['content2blocktitle']; ?></h4>
				<p><?php echo $mainoptions['content2blocktext']; ?></p>
			</div>
		</div>
		<div class="right">
			<h4>Salon Locator</h4>
			<div style="border:5px solid yellow; overflow:hidden; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26821.24545980593!2d-117.1461504!3d32.82788695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1403814283933" width="390" height="230" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</div>
</div>
</section>
<footer>
	<div class="container">
		<nav>
			<?php wp_nav_menu(array('theme_location'=>'top-menu')); ?>
		</nav>
		<p>
			800.431.1365<br/>
			info@healthilocks.com<br/>
			<br/>
			<b>Mailing Address:</b><br/>
			Tru-Hair LLC.<br/>
			7040 Avenida Encinias, Ste. 104-40<br/>
			Carlsbad, CA 92011
		</p>
		<div class="social-media">
			<a href="<?php echo $mainoptions['fblink']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
			<a href="<?php echo $mainoptions['pinterestlink']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></a>
			<a href="<?php echo $mainoptions['twitterlink']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></a>
			<a href="<?php echo $mainoptions['youtubelink']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a>
		</div>
		<div class="copyright">
			<p>Copyright 2014 all rights reserved, Designed by <a href="http://businessonmarketst.com">Business on Market St.</a></p>
		</div>
	</div>
</footer>
</body>
</html>