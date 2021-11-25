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
                              <h4><?php echo $slide_subtitle;?></h4>
                              <h2><?php the_title();?></h2>
                              <?php the_content();?>

                              <?php 
                                 if($slide_btn_text) {
                                    ?>
                                       <a href="<?php echo $slide_btn_link;?>" class="box-btn"><?php echo $slide_btn_text;?><i class="fa fa-angle-double-right"></i></a>

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
            wp_reset_postdata();
            }
            ?>

         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> about us</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4>welcome to halim</h4>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                     <a href="#" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="single_about">
                     <i class="fa fa-laptop"></i>
                     <h4>our mission</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
                  <div class="single_about">
                     <i class="fa fa-user"></i>
                     <h4>our vission</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
                  <div class="single_about">
                     <i class="fa fa-pencil"></i>
                     <h4>our history</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
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
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Lorem Ipsum is simply 
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Lorem Ipsum is simply
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Lorem Ipsum is simply
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>our skills</h4>
                     </div>
                     <div class="single-skill">
                        <h4>html</h4>
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
                     </div>
                     <div class="single-skill">
                        <h4>css</h4>
                        <div class="progress-bar" role="progressbar" style="width: 74%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">74%</div>
                     </div>
                     <div class="single-skill">
                        <h4>photoshop</h4>
                        <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">94%</div>
                     </div>
                     <div class="single-skill">
                        <h4>wordpress</h4>
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                     </div>
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
                  <h3><span>who we are?</span> our services</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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
                  <h3><span>who we are?</span> creative team</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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
                  <h3><span>who we are?</span> what client say</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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
                  <h3><span>who we are?</span> latest news</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
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