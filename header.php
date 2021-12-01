<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head();?>
   </head>
   <body <?php body_class();?>>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">

                  <!-- The Header Contact Part Starting -->
                  <?php
                  // Making Variable For Both Functions
                     $email = get_field('email', 'option');
                     $phone = get_field('phone', 'option');
                     // Email
                     if ( $email ) {
                        ?>
                        <a href="mailto:"><i class="fa fa-envelope"></i> <?php echo $email;?></a>
                        <?php
                     }
                     // Phone
                     if( $phone ) {
                     ?>
                        <a href=""><i class="fa fa-phone"></i> <?php echo $phone;?></a>
                     <?php
                        }
                     ?>
                  <!-- The Header Contact Part Ending -->

						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     
                  <!-- The Header Social Part Starting -->
                     <?php
                     // Making Variable For The Reapeter
                     $socials = get_field('header_social', 'option');
                     // Running A ForEach Loop
                     foreach( $socials as $social ) {
                     ?>
                     <!-- SHowing HTMl Code in a Dynamic Way -->
                     <a href="<?php echo $social['links'];?>"><i class="fa <?php echo $social['icons'];?>"></i></a>
                     <!-- Starting php tage again to complete the process -->
                     <?php
                     }
                     ?>
                  <!-- The Header Social Part Ending -->


						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo site_url();?>">halim</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        
                        <?php
                           wp_nav_menu( array(
                              'theme_location' => 'primary-menu',
                              'menu_class' => 'navbar-nav ml-auto',
                           ) );

                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->