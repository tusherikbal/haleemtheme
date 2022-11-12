
<?php get_header(); 
/*
Template Name: home


*/



?>

      <!-- Header Area Start -->
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">

               <?php  
                  $args= array(
                     'post_type' => 'slider',
                     'posts_per_page' => 3
                  );
                  $query = new WP_Query($args);
                  while($query -> have_posts() ) {
                     $query -> the_post();


          // acf pro use korle ei meta datar code gulo lagbe na. direct acf thekei output asbe     
            // $slider_subtitle = get_post_meta(get_the_id(), 'slider_subtitle', true );         
            // $slider_btn_text = get_post_meta(get_the_id(), 'slider_btn_text', true );         
            // $slider_btn_link = get_post_meta(get_the_id(), 'slider_btn_link', true );         
                  
               ?>

            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php the_field('slider_subtitle'); ?></h4>
                              <h2><?php the_title(); ?></h2>
                              
                              <span><h6 class="text-white"><?php the_content(); ?></h6></span>

                              <?php 
                                 if ($slider_btn_text) {
                                    ?>
                                    <a href="<?php the_field('slider_btn_link'); ?>" class="box-btn"><?php the_field('slider_btn_text'); ?><i class="fa fa-angle-double-right"></i></a>
                                   
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
                  
               <?php
               if(class_exists('ACF')){
                  $abouttitle = get_field('about_title','option');    

                  $aboutleft = get_field('about_left_side','option');   

                  $aboutright = get_field('about_right_side','option');   }       

                  ?>
               <h3><span><?php echo $abouttitle['sub_title']; ?></span> 
               <?php echo $abouttitle['title']; ?></h3>

                  
               </div>
               <div class="col-md-6">
               <?php echo $abouttitle['description']; ?></span> <?php echo $abouttitle['title']; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">

                     

                        <h4><?php echo $aboutleft ['title']; ?></span></h4>

                     </div>
                     <p>
                     <?php echo $aboutleft['description']; ?>

                     </p>

                     <a href="<?php echo $aboutleft['button_url']; ?>" class="box-btn"><?php echo $aboutleft['button_text']; ?> <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  
                  <?php 
                        
                        if (class_exists('ACF')) {

                           $rightside= get_field('about_right_side', 'option');
                           foreach ($rightside as $rightsider) {                   
                        
                     ?>
                        
                     <div class="single_about">
                      <i class="fa <?php echo esc_attr( $rightsider['icon_r']); ?>"></i>
                     <h4><?php echo esc_attr( $rightsider['title']); ?></h4>
                     <p><?php echo esc_attr( $rightsider['description']); ?> </p>
                  </div>

                     <?php
                     };
                  }
                     
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
                        <?php 
                           if(class_exists('ACF')){
                           ?>
                           
                        <h4><?php the_field('faq_title', 'option') ?></h4>
                     </div>
                     <div class="accordion" id="accordionExample">

                     <?php 
                        $faqs = get_field('accordion_part', 'option');
                        $i=0;
                        foreach ($faqs as $faq) {
                          $i++;
                        
                          
                          ?>
                        
                        <div class="card">
                           <div class="card-header" id="heading<?php echo $i; ?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                <?php echo esc_attr( $faq['accordian_title']); ?> 
                                 </button>
                              </h5>
                           </div>

                           <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i ==1 ){echo 'show'; } ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                              <div class="card-body">
                              <?php echo esc_attr( $faq['accordian_description']); ?> 
                              </div>
                           </div>
                        </div>

                     
                     <?php
                        }
                     }

                     ?>
                        
                        
                       
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4><?php the_field('skill_title', 'option') ?></h4>
                     </div>
                     
                        <?php
                          $skill= get_field('skill_name_and_score', 'option');
                          foreach ($skill as $skills) {
                        ?>

                           <div class="single-skill">
                           <h4><?php echo $skills['skill_name'] ?></h4>
                           <div class="progress-bar" role="progressbar" style="width: <?php echo $skills['skill_score'] ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skills['skill_score'] ?>%</div>
                        </div>
                     
                     <?php
                          }
                        ?>

                       
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->
      <!-- Services Area Start -->
      
<!-- servicesssss -->
<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">

            <?php
            $args = array(
               'post_type' => 'services',
               'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();

           
               ?>

               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa <?php 
                        the_field('services_icon');
                     ?>"></i>
                     <h4><?php the_title();?></h4>
                     <p><?php the_excerpt();?></p>
                    
                     
                  </div>
               </div>
            
            <?php 
            } ?>

              
               
 
               
            </div>
         </div>
      </section>











      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">

               <?php
            $args = array(
               'post_type' => 'counter',
               'posts_per_page' => 4
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
            ?>

               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php the_field('counter_icon'); ?>"></i><span class="counter"><?php the_field('count_number');?>
                  </span><?php echo the_title(); ?></h4>
                  </div>
               </div>

               <?php
               
            }
            wp_reset_postdata();
               ?>



               
                  
               </div>
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
               'post_type' => 'teams',
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
            ?>


               <div class="col-md-4">               
               <div class="single-team">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?></h4>
                           <?php the_content(); ?>
                           
                           <ul>
                              <li><a href="<?php the_field('facebook_icon') ?>"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="<?php the_field('twitter_icon') ?>"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="<?php the_field('linkedin_icon') ?>"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="<?php the_field('googleplus_icon') ?>"><i class="fa fa-google-plus"></i></a></li>
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
                     <div class="single-testimonial">
                        <div class="testi-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/03.png" alt="" />
                        </div>
                        <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                        <h4>john doe <span>web developer</span></h4>
                     </div>

         <?php
            $args = array(
               'post_type' => 'testmonial',
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
            ?>
                     <div class="single-testimonial">
                        <div class="testi-img">
                           <img src="<?php  the_post_thumbnail_url();?>" alt="" />
                        </div>
                        <p><?php the_field('testimonial_description') ?></p>
                        <h4><?php the_title(); ?> <span><?php the_field('position') ?></span></h4>
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
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
            ?>

               <div class="col-md-4">
                  <div class="single-blog">
                    <?php the_post_thumbnail(); ?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="#"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="#">25 oct 2018</a></li>
                              <li><a href="#">admin</a></li>
                           </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
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
      



<?php get_footer(); ?>