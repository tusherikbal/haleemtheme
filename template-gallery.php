<?php get_header();

/*
Template Name: gallery


*/
?>


<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php echo single_post_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>"></a>Home</li> / 
                        <li><?php echo single_post_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            
        <?php 
          $args= array(
            'post_type' => 'gallary',
            'post_per_page' => 9
        );

        $query= new WP_Query($args);
        while ($query -> have_posts() ) {
           $query->the_post();
            ?>

            <div class="col-xl-4">
            <div class="single-gallery">
                     <img src="<?php echo the_post_thumbnail_url(); ?>">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php the_field('background_image_hover'); ?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>



        <?php
        }

        ?>

        

      
                 
                



            


        </div>
    </div>
</section>



<?php get_footer(); ?>