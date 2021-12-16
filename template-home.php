<?php

/*
   Template Name: Home Page
*/

get_header();?>
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">


         <?php 
         $args = array(
            'post_type' => 'sliders',
            'post_per_page' => '3'
         );
         $query = new WP_Query( $args );
         while( $query -> have_posts() ){
            $query -> the_post();

            $slide_subtitle =get_post_meta(get_the_ID(), 'sub_title', true);
            $slide_btn_text =get_post_meta(get_the_ID(), 'button_text', true);
            $slide_btn_link =get_post_meta(get_the_ID(), 'button_url', true);
            ?>
            <div class="single-slide" style="background:url('<?php the_post_thumbnail_url();?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">

                           <?php 
                           if(class_exists('ACF')) {
                              $sub_title = get_field('slider_subtitle');
                              $btn_url = get_field('slider_btn_url');
                              $btn_text = get_field('slider_btn_text');
                           }
                           ?>
                              <h4><?php echo $sub_title?></h4>
                              <h2><?php the_title();?></h2>
                              <?php the_content();?>

                              <?php 
                                 if( $btn_text ) {
                                    ?>
                                       <a href="<?php echo esc_url($btn_url);?>" class="box-btn"><?php echo $btn_text;?><i class="fa fa-angle-double-right"></i></a>

                                    <?php
                                 }
                             ?>


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
            }
            wp_reset_postdata();
            ?>

         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">

                  <!-- Dynamic About Heading Starting -->
                  <?php
                     if(class_exists('ACF')){
                        $about_title = get_field( 'about_section_title', 'option' );
                     }
                  ?>

                  <h3><span><?php echo $about_title[ 'sub_heating' ];?></span> <?php echo $about_title[ 'heading' ];?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $about_title[ 'description' ];?></p>
               </div>
               <!-- Dynamic About Heading Ending -->
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <!-- Dynamic About Content Starting -->
                        <?php
                           if(class_exists('ACF')){
                              $about_content = get_field( 'about_content', 'option' );
                           }
                        ?>
                        <h4><?php echo $about_content[ 'title' ];?></h4>
                     </div>
                     <p><?php echo $about_content[ 'description' ];?></p>
                     <a href="<?php echo esc_url($about_content[ 'btn_url' ]);?>" class="box-btn"><?php echo $about_content[ 'btn_text' ];?><i class="fa fa-angle-double-right"></i></a>
                  </div>
                        <!-- Dynamic About Content Ending -->

               </div>
               <div class="col-md-5">
                    <!-- Dynamic About Features Starting -->
                    <?php
                           if(class_exists('ACF')){
                              $features = get_field( 'about_features', 'option' );
                           }
                           foreach ($features as $feature) {
                           ?>
                           <div class="single_about">
                              <i class="fa <?php echo esc_attr( $feature[ 'icon' ] );?>"></i>
                              <h4><?php echo $feature[ 'title' ];?></h4>
                              <p><?php echo $feature[ 'description' ];?></p>
                           </div> 
                  <?php
                           }
                           wp_reset_postdata();
                        ?> 
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4><?php the_field( 'faq_title', 'option' );?></h4>
                     </div>
                     <div class="accordion" id="accordionExample">



                     <!-- Dynamic About Features Starting -->
                         <?php
                           $faqs = get_field( 'faqs', 'option' );
                           $i = 0;
                           foreach ($faqs as $faq) {
                              $i++;
                           ?>

                        <div class="card">
                           <div class="card-header" id="heading<?php echo $i;?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                                 <?php echo $faq[ 'title' ];?>
                                 </button>
                              </h5>
                           </div>
                           <div id="collapse<?php echo $i;?>" class="collapse <?php if($i == 1) {echo 'show';}?>" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordionExample">
                              <div class="card-body">
                              <?php echo $faq[ 'description' ];?>
                              </div>
                           </div>
                        </div>

                        <?php
                           }
                           wp_reset_postdata();
                        ?>



                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4><?php the_field('skill_title', 'option');?></h4>
                     </div>

                        <!-- Dynamic About Features Starting -->
                           <?php
                           if(class_exists('ACF')){
                              $skills = get_field( 'skills', 'option' );
                           }
                           foreach ($skills as $skill) {
                           ?>

                     <div class="single-skill">
                        <h4><?php echo $skill[ 'skill_name' ];?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill[ 'number' ];?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill[ 'number' ];?>%</div>
                     </div>
                     <?php
                           }
                           wp_reset_postdata();
                           ?>


                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->
      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <!-- Dynamic About Content Starting -->
                         <?php
                           $service_content = get_field( 'services_section', 'option' );
                        ?>
                  <h3><span><?php echo $service_content[ 'heading' ];?></span> <?php echo $service_content[ 'sub_heating' ];?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $service_content[ 'description' ];?></p>
               </div>
            </div>

            <div class="row">

                  <?php 
               $args = array(
                  'post_type' => 'services',
                  'post_per_page' => '6'
               );
               $query = new WP_Query( $args );
               while( $query -> have_posts() ){
                  $query -> the_post();
                  ?>

               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php the_field('icons');?>"></i>
                     <h4><?php the_title();?></h4>
                     <?php the_content();?>
                  </div>
               </div>
               <?php 
               }
               wp_reset_postdata();
               ?>


            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">


            <?php 
               $args = array(
                  'post_type' => 'Counters',
                  'post_per_page' => '4'
               );
               $query = new WP_Query( $args );
               while( $query -> have_posts() ){
                  $query -> the_post();
                  ?>

               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php the_field('counter_icon');?>"></i><span class="counter"><?php the_field('counter_number');?></span><?php the_title();?></span></h4>
                  </div>
               </div>
               <?php 
               }
               wp_reset_postdata();
               ?>

            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <?php 
                     $team_content = get_field( 'team_section', 'option' );
                     ?>
                  <h3><span><?php echo $team_content['sub_heating'];?></span> <?php echo $team_content['heading'];?> </h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $team_content['description'];?> </p>
               </div>
            </div>
            <div class="row">

            <?php 
               $args = array(
                  'post_type' => 'Teams',
                  'post_per_page' => '3'
               );
               $query = new WP_Query( $args );
               while( $query -> have_posts() ){
                  $query -> the_post();
                  ?>


               <div class="col-md-4">
                  <div class="single-team">
                     <?php the_post_thumbnail();?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title();?><span><?php the_field('team_designation');?></span></h4>
                           <ul>

                           <?php 
                              if ( get_field('team_facebook')) {
                                 ?>
                              <li><a href="<?php the_field('team_facebook');?>"><i class="fa fa-facebook"></i></a></li>
                              <?php
                              }
                           ?>

                           <?php 
                              if ( get_field('team_twitter')) {
                                 ?>
                             <li><a href="<?php the_field('team_twitter');?>"><i class="fa fa-twitter"></i></a></li>
                              <?php
                              }
                           ?>

                           <?php 
                              if ( get_field('team_instagram')) {
                                 ?>
                               <li><a href="<?php the_field('team_instagram');?>"><i class="fa fa-linkedin"></i></a></li>
                              <?php
                              }
                           ?>
                           
                           <?php 
                              if ( get_field('team_google')) {
                                 ?>
                              <li><a href="<?php the_field('team_google');?>"><i class="fa fa-google-plus"></i></a></li>
                              <?php
                              }
                           ?>


                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <?php 
               }
               wp_reset_postdata();
               ?>

            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <?php 
                     $client_content = get_field('client_section', 'option');
                     ?>
                  <h3><span><?php echo $client_content['sub_heating'];?> </span> <?php echo $client_content['heading'];?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $client_content['description'];?> </p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">


                    <?php 
                     $args = array(
                        'post_type' => 'clients',
                        'post_per_page' => '4'
                     );
                     $query = new WP_Query( $args );
                     while( $query -> have_posts() ){
                        $query -> the_post();

                        $c_name =get_post_meta(get_the_ID(), 'c_name', true);
                        $c_position =get_post_meta(get_the_ID(), 'c_position_', true);
                        ?>

                     <div class="single-testimonial">
                        <div class="testi-img">
                           <?php the_post_thumbnail();?>
                        </div>
                       <?php the_content();?>
                        <h4><?php echo $c_position;?><span><?php the_title();?></span></h4>
                     </div>
                     <?php
                       }
                       wp_reset_postdata();
                     ?>











                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <?php 
                     $news_content = get_field('blog_section', 'option');
                     ?>
                  <h3><span><?php echo $news_content['sub_heating'];?> </span><?php echo $news_content['heading'];?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $news_content['description'];?></p>
               </div>
            </div>
            <div class="row">

            <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_per_page' => '3'
                     );
                     $query = new WP_Query( $args );
                     while( $query -> have_posts() ){
                        $query -> the_post();
                        ?>

               <div class="col-md-4">
                  <div class="single-blog">
                     <div class="post_img" style="background-image:url('<?php the_post_thumbnail_url();?>')"></div>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="#"><?php echo get_the_date();?></a></li>
                              <li><a href="#"><?php the_author();?></a></li>
                           </ul>
                        </div>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="box-btn"><?php _e( "read more ", "halim" );?><i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
            <?php
                     }
                     wp_reset_postdata();
                     ?>

            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
<?php get_footer();?>