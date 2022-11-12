<?php get_header(); ?>
      <!-- Header Area Start -->


<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2>Portfolio Title</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1.jpg" alt="">
                  <?php the_content(); ?>
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>
                   <?php 
                   $gallary_portfolio = get_field('project_gallery'); 
                   foreach ($gallary_portfolio as $gallary_port_IMG) {
                     ?>

                     <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="<?php echo $gallary_port_IMG['url'];  ?>" >
                     </div>
                  </div>

                  <?php
                   }
                   
                   ?>

                   
                       


                </div>
                <br><br>
                <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                    
                        <div class="embed-container">
                              <?php the_field('project_overview'); ?>
                        </div>

                        <!-- <iframe width="560" height="315" src="<?php// the_field('url'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     
                     -->
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                  <?php
                     $technology = get_field('technology_used');
                     foreach ($technology as $tech) {
                        ?>
                        <ul>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $tech['tech_name'] ?></li>
                    </ul>

                     <?php
                     }
                     ?>

                    


                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <?php
                     $project_feature = get_field('project_features');
                     foreach ($project_feature as $project) {
                        ?>
                 

                     <ul>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $project['features_list'] ?>
                        </li>
                     </ul>

                     <?php
                     }
                     ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>