
<?php get_header();

/*
Template Name: contact


*/
 ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                  <?php 
                           $address = get_field('address','option');
                           foreach ($address as $contactinfo) {
                              ?>
                              <?php //print_r($contactinfo) ?>
                              
                        <div class="col-md-4">
                        <div class="contact-address">
                        <i class="fa <?php echo $contactinfo['contact-icon'];?>"></i>
                           <h4><?php echo $contactinfo['title']; ?> <span><?php echo $contactinfo['description']; ?></span></h4>
                        </div>
                     </div>
                   


                            <?php
                           }

                        ?>

                    
                     
                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                           <h5 class="text-primary py-2">Send message</h5>
                     
                           
                        <?php echo do_shortcode('[contact-form-7 id="228" title="Contact form 1"]') ?>

                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="google-map">
                              
                        
                        
                        
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785846.583418618!2d-90.75907970166762!3d44.9208869696666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4caa3dc7ca0411%3A0x97dd48597a62c9b3!2sMichigan%2C+USA!5e0!3m2!1sen!2sbd!4v1540614431885"></iframe> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
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


<?php get_footer(); ?>