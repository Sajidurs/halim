<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Blog</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">

               <?php 
               while (have_posts()){
                  the_post();
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
                              <li><a href="#"><?php the_author_posts_link();?></a></li>
                              <li><?php echo get_the_category_list( "  " );?></li>
                           </ul>
                        </div>
                       <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="box-btn"><?php _e( "read more ", 'halim' );?><i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
               <?php
               }
               ?>



            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="single-footer footer-logo">
               <h3>halim</h3>
               <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <h4>quick links</h4>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
               <h4>latest post</h4>
               <ul>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4>Contact Us</h4>
               <ul>
                  <li><i class="fa fa-map-marker"></i> 245 Street, Sydney, Australia</li>
                  <li><i class="fa fa-mobile"></i>  +23 0034 5567 341</li>
                  <li><i class="fa fa-phone"></i>  +23 0034 5567 341</li>
                  <li><i class="fa fa-envelope"></i>  info@demo.com</li>
                  <li><i class="fa fa-globe"></i>  www.demo.com</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy; All Rights Reserved 2020</p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-youtube"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->
<!-- Main JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Manific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- One Page Nav JS -->
<script src="assets/js/onepagenav.js"></script>
<!-- Isotope JS -->
<script src="assets/js/isotope.min.js"></script>
<!-- Imageload JS -->
<script src="assets/js/imageloaded.min.js"></script>
<!-- Counter JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Waypoint JS -->
<script src="assets/js/waypoint.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>