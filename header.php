<?php
/**
 * The header for Puremedia
 */
?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head(); ?>
</head>
<!-- add class content-css -->

<!-- title site and description site -->
   <?php if ( is_front_page() && is_home() ) : ?>
    
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

<?php endif; ?> 
<?php $puremedia_description = get_bloginfo( 'description', 'display' ); ?>
<?php if ( $puremedia_description ) : ?>
    <p class="site-description"><?php echo $puremedia_description; ?></p>
<?php endif; ?>
<!-- end description -->
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a class="smoothscroll" href="#hero">Puremedia.</a>
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class='menu-text'>Show Menu</span>
	         	<span class="menu-icon"></span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class='menu-text'>Hide Menu</span>
         		<span class="menu-icon"></span>
         	</a>         

	         <ul id="nav" class="nav">
	            <li class="current"><a class="smoothscroll" href="#hero">Home.</a></li>
		         <li><a class="smoothscroll" href="#portfolio">Works.</a></li>
	            <li><a class="smoothscroll" href="#services">Services.</a></li>
	            <li><a class="smoothscroll" href="#about">About.</a></li>
	            <li><a class="smoothscroll" href="#journal">Blog.</a></li>	            
	            <li><a class="smoothscroll" href="#contact">Contact.</a></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header> 
   <!-- add class site css -->
   <div class="site-content container">

   <!-- Hero
   =================================================== -->
   <section id="hero">	
   	  
		<div class="row hero-content">

			<div class="twelve columns flex-container">

			   <div id="hero-slider" class="flexslider">

				   <ul class="slides">

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1>Hello, we are puremedia. We make awesome and stunning digital stuff.</h1>	
								<p><a class="button stroke smoothscroll" href="#about">More About Us</a></p>																   
							</div>						
					   </li>

					   <!-- Slide -->
					   <li>						
							<div class="flex-caption">
								<h1 >We imagine, craft and manage your brand in this new digital world.</h1>	
								<p><a class="button stroke smoothscroll" href="#portfolio">See Our Works</a></p>									   
							</div>					
					   </li>

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1 >Take a look at some of <a class="smoothscroll" href="#portfolio" title="">our works</a> or <a class="smoothscroll" href="#contact" title="">contact us</a> to discuss how we can help you.</h1>
								<p><a class="button stroke smoothscroll" href="#contact">Get In Touch</a></p>										   
							</div>
					   </li>					              

				   </ul>

			   </div> <!-- .flexslider -->				   

	      </div> <!-- .flex-container -->      

		</div> <!-- .hero-content -->	   

   </section> <!-- #hero -->

