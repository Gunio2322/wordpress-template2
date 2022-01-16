<?php
/*
*Template Name: Blog
*Template Post Type: post
*/
?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/3158375253.js" crossorigin="anonymus"></script>

    <?php wp_head(); ?>
</head>

<body>

	<div id="top"></div>
   <div id="preloader"> 
	   <div id="status">
         <img src="images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a href="index.html">Puremedia.</a>
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
	            <li><a href="index.php#hero">Home.</a></li>
		        <li><a href="index.php#portfolio">Works.</a></li>
	            <li><a href="index.php#services">Services.</a></li>
	            <li><a href="index.php#about">About.</a></li>
	            <li class="current"><a href="index.php#journal">Blog.</a></li>	        
	            <li><a href="index.php#contact">Contact.</a></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header>


    <!-- Page Title
   ================================================== -->
   <!-- <section id="page-title">	
   	   -->
		<!-- <div class="row">

			<div class="twelve columns">

				<h1>Our Blog<span>.</span></h1>
				<p>Aenean condimentum lacus sit amet luctus lobortis.</p>

			</div>			     -->

		<!-- </div> /row	    -->

   <!-- </section> /page-title -->
 
