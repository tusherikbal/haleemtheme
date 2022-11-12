<?php get_header();


/*
Template Name: portfolio


*/
 ?>


<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <div class="breadcumb">
                    <h4>Single Portfolio</h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>"></a>Home</li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="portfolio-menu mb-40 text-center">
                     <button class="active" data-filter="*">ALL</button>
                     
                     <?php  
                        $category = get_terms('portfolio-category');                   
                           foreach ($category as $categories) { 
                              ?>
                              <button data-filter=".<?php echo $categories->slug; ?>" class=""><?php echo $categories->name ; ?></button>
                           <?php
                           }                      
                        ?>                    
                     
                  </div>
               </div>
            </div>


            <div class="row grid no-gutters">
               
            <?php        
               $args = array(
                  'post_type' => 'portfolio',
                  'post_per_page' => 9
               );
               $query = new WP_Query($args);

               while ($query -> have_posts() ) {
                  $query -> the_post();
                  ?>
               <div class="col-md-4 grid-item                 
               <?php 
                 $portfol= get_the_terms(get_the_Id(), 'portfolio-category');
                 foreach ($portfol as $cate) {
                  echo $cate->slug;
                 }
                
               ?> ">
              
              
                  <div class="single-portfolio">
                     <img src="<?php echo the_post_thumbnail_url(); ?>" >
                     
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3>
                              <a href="<?php the_permalink(); ?>" class="">
                              <i class="fa fa-link"></i> <?php the_title(); ?> 

                           <span>
                           <?php the_field('sub_lebel'); ?>
                           </span>
                        </a>
                           </h3>
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
      <!-- projectss Area End -->



      <?php get_footer(); ?>