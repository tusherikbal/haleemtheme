 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
               <?php 
                     $footer = get_field('cta_part','option');
                   
               ?>

            <h4><?php echo $footer['cta_text']['cta_title'];   ?> <span><?php echo $footer['cta_text']['cta_subtitle'];   ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo $footer ['cta_button_'] ['cta_btn_url'];   ?>" class="box-btn"><?php echo $footer ['cta_button_'] ['cta_btn_text'];   ?><i class="fa fa-angle-double-right"></i></a>
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

         <?php if( is_active_sidebar( 'footer-1' ) ) {                
                  dynamic_sidebar( 'footer-1' ); 

             }?>   

         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <?php if( is_active_sidebar( 'footer-2' ) ) {                
                  dynamic_sidebar( 'footer-2' ); 

             }?>  
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
            <?php if( is_active_sidebar( 'footer-3' ) ) {                
                  dynamic_sidebar( 'footer-3' ); 

             }?>  
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
            <h4>Contact Us</h4>
               
            <ul><?php
                  $contacts = get_field('contact_part', 'option');
                  // print_r($contacts);
                 
                  
                  foreach ($contacts as $contactinfo) {
                    
                     ?>

               
               <li>
               <i class="fa <?php echo $contactinfo['footer_contact_icon']; 
               ?>"> 
               </i> 
               
               <?php echo $contactinfo['contact_description']; ?></li>
               

               <?php
                  }
               ?>
               </ul>
            
               
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php the_field('copyright_section', 'option'); ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               
            <?php 
                  $footer_social_icon = get_field('footer_bottom', 'option');
                  // print_r($footer_social_icon);

                  foreach ($footer_social_icon as $fotterbtmicon) {
                     ?>
             
             <li>
               
             <a href="<?php echo $fotterbtmicon['footer_icon_link']; ?>">
             <i class="fa <?php echo $fotterbtmicon['footer_social_icon']; ?>">
            </i></a>

            </li>

            <?php
                  }

            ?>

            
               

            </ul>
         </div>
      </div>
   </div>



</footer>
<!-- Footer Area End -->
<!-- Main JS -->
<?php wp_footer(); ?>
</body>   
</html>