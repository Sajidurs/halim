      
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php the_field( 'cta_title', 'option' );?><span><?php the_field( 'cta_description', 'option' );?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php the_field( 'cta_btn_link', 'option' );?>" class="box-btn"><?php the_field( 'cta_btn_text', 'option' );?><i class="fa fa-angle-double-right"></i></a>
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
            <?php
               if(is_active_sidebar( 'footer1' )){
                  dynamic_sidebar( 'footer1' );
               }
            ?>
         </div>
         <div class="col-lg-2 col-md-6">
         <?php
               if(is_active_sidebar( 'footer2' )){
                  dynamic_sidebar( 'footer2' );
               }
            ?>
         </div>
         <div class="col-lg-4 col-md-6">
         <?php
               if(is_active_sidebar( 'footer3' )){
                  dynamic_sidebar( 'footer3' );
               }
            ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4><?php the_field( 'footer_contact_title', 'option' );?></h4>
               <ul>

                     <!-- Dynamic Footer Contact Features Starting -->
                     <?php
                           $footer_contacts = get_field( 'footer_contact_content', 'option' );
                           foreach ($footer_contacts as $footer_contact) {
                           ?>
                  <li><i class="fa <?php echo $footer_contact[ 'contact_icon' ];?>"></i>  <?php echo $footer_contact[ 'contact_title' ];?></li>
                
                  <?php
                           }
                        ?> 


               </ul>
            </div>
         </div>
      </div>



      <div class="row copyright">
         <div class="col-md-6">
            <p><?php the_field( 'copyright_text', 'option' );?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>

                  <!-- The Header Social Part Starting -->
                  <?php
                     // Making Variable For The Reapeter
                     $copy_socials = get_field('copyright_social', 'option');
                     // Running A ForEach Loop
                     foreach( $copy_socials as $copy_social ) {
                     ?>

                     <li><a href="<?php echo $copy_social['url'];?>"><i class="fa <?php echo $copy_social['icon'];?>"></i></a></li>
                     <?php
                     }
                     ?>



            </ul>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer();?>
</body>
</html>