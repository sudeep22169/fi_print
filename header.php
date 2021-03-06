<?php // Exit if accessed directly
if ( !defined('ABSPATH') ) {
	echo '<h1>Forbidden</h1>'; exit();
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="author" content="<?php esc_attr(bloginfo('name')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
<title><?php wp_title( ' | ', true, 'right' );?></title>
<link rel="pingback" href="<?php esc_url( bloginfo('pingback_url') ); ?>" />
<?php wp_head(); ?>
</head>

<?php global $fi_print_options;
// echo "<pre>";
// var_dump($fi_print_options);
// echo "</pre>";
?>

<body  <?php body_class(  ); ?>>

	<?php if ( isset($fi_print_options['preloader'])  && $fi_print_options['preloader'] == 1) : ?>
		<!-- Preloader -->
		<div class="preloader">
			<?php if( isset( $fi_print_options['preloader-logo']['url'] ) && $fi_print_options['preloader-logo']['url']!='' ) : ?>
				<img src="<?php echo esc_url( $fi_print_options['preloader-logo']['url'] ); ?> "alt="logo">
			<?php endif; ?>
			<div class="spinner">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</div>
		<!-- END Preloader -->
	<?php endif ; ?>
	<!-- Navigation bar -->
    <nav class="navbar">
      	<div class="navbar-top clearfix">
        	<div class="container">
         	<?php
                if( isset( $fi_print_options['logo'] ) && $fi_print_options['logo']['url']!='') :?>
                <a class="navbar-brand navbar-left" href="<?php echo esc_url( site_url() ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>">
                	<img src="<?php echo esc_url( $fi_print_options['logo']['url']) ; ?>"  alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" />
                </a>
                <?php  else: ?>
                    <a class="navbar-brand navbar-left" href="<?php echo esc_url( site_url() ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>"> </a>
                <?php endif ?>

	          <ul class="contact-ways navbar-right">
	          	<?php if( isset( $fi_print_options['top-bar-title-1'] )): ?>
	            <li>
	              <small><?php echo esc_attr( $fi_print_options['top-bar-title-1'] )?></small>
            	  <?php if( isset( $fi_print_options['top-bar-detail-1'] )): ?>  <h6><?php echo esc_attr( $fi_print_options['top-bar-detail-1'] )?></h6><?php endif; ?>
	            </li>
	        	<?php  endif; ?>
	        	<?php if( isset( $fi_print_options['top-bar-title-2'] )): ?>
	            <li>
	              <small><?php echo esc_attr( $fi_print_options['top-bar-title-2'] )?></small>
            	  <?php if( isset( $fi_print_options['top-bar-detail-2'] )): ?>  <h6><?php echo esc_attr( $fi_print_options['top-bar-detail-2'] )?></h6><?php endif; ?>
	            </li>
	        	<?php  endif; ?>
	        	<?php if( isset( $fi_print_options['top-bar-title-3'] )): ?>
	            <li>
	              <small><?php echo esc_attr( $fi_print_options['top-bar-title-3'] )?></small>
            	  <?php if( isset( $fi_print_options['top-bar-detail-3'] )): ?>  <h6><?php echo esc_attr( $fi_print_options['top-bar-detail-3'] )?></h6><?php endif; ?>
	            </li>
	        	<?php  endif; ?>
	          </ul>
        </div>
      </div>

      <div class="navbar-bottom">
          <div class="container">

              <div class="navbar-left">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header">&#9776;</button>
                  <?php get_template_part('partials/navbar'); ?>
              </div>

              <div class="navbar-right">
                  <a class="btn btn-secondary" href="#get-quote">Get a quote</a>
              </div>

          </div>
      </div>

      <div class="navbar-backdrop"></div>
    </nav>
    <!-- END Navigation bar -->


