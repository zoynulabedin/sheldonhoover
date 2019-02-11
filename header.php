<?php 
$social_links = get_field('social_links','options');
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header-child">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-100">
					<div class="header-left">
					
					<?php if( get_field('logo_title','options') ): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">	<h2><?php the_field('logo_title','options'); ?></h2></a>
					<?php endif; ?>
					<?php if( get_field('sub_title','options') ): ?>
						<p><?php the_field('sub_title','options'); ?></p>
					<?php endif; ?>
						
					</div>
				
				</div>
				<div class="col-lg-6 col-md-8 col-offset-4">
					<div class="child-main-menu stop">
					
						<?php 
							wp_nav_menu([
								'theme_location'	=>'child_menu',
							]);
						?>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col">
					<div class="social-icon">
						<ul>
						<?php if ( $social_links['facebook'] ) : ?>
						<li><a href="<?php echo $social_links['facebook']; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<?php endif; ?>

						<?php if ( $social_links['twitter'] ) : ?>
						<li><a href="<?php echo $social_links['twitter']; ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<?php endif; ?>

						<?php if ( $social_links['youtube'] ) : ?>
						<li><a href="<?php echo $social_links['youtube']; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
						<?php endif; ?>

						<?php if ( $social_links['rss'] ) : ?>
						<li><a href="<?php echo $social_links['rss']; ?>"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
						<?php endif; ?>
					
						
						</ul>
					</div>
					<div class="phone_number">
							<?php if ( get_field('phone_number','options') ) : ?>
								<?php echo get_field('phone_number','options'); ?>
							<?php endif; ?>
							
					</div>
				</div>
				<?php if ( get_field('upload_image','options') ) : ?>
					<div class="client-img">
					<img src="<?php the_field('upload_image','options'); ?>" alt="<?php the_field(''); ?>">
				<?php endif; ?>
					</div>
				
			</div>
		</div>	
	</div>

	<script type="text/javascript">
// Special handling for facebook iOS since it cannot open new windows
(function() {
    if (navigator.userAgent.indexOf('FBIOS') !== -1 || navigator.userAgent.indexOf('Twitter for iPhone') !== -1) {
        document.getElementById('af-form-293399748').parentElement.removeAttribute('target');
    }
})();
</script><script type="text/javascript">
    <!--
    (function() {
        var IE = /*@cc_on!@*/false;
        if (!IE) { return; }
        if (document.compatMode && document.compatMode == 'BackCompat') {
            if (document.getElementById("af-form-293399748")) {
                document.getElementById("af-form-293399748").className = 'af-form af-quirksMode';
            }
            if (document.getElementById("af-body-293399748")) {
                document.getElementById("af-body-293399748").className = "af-body inline af-quirksMode";
            }
            if (document.getElementById("af-header-293399748")) {
                document.getElementById("af-header-293399748").className = "af-header af-quirksMode";
            }
            if (document.getElementById("af-footer-293399748")) {
                document.getElementById("af-footer-293399748").className = "af-footer af-quirksMode";
            }
        }
	})();
	<div class="AW-Form-293399748"></div>
<script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//forms.aweber.com/form/48/293399748.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "aweber-wjs-pzlne18pt"));
    -->
</script>

<!-- /AWeber Web Form Generator 3.0.1 -->
