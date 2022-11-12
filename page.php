<?php
    get_header();

    /*
        Template Name: Page template
    */

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-5">
          
        <h3><?php the_title(); ?></h3>
        </div>      
    </div>
    
    
    <div class="row mb-5">

        <p><?php the_content(); ?></p>


    </div>




    </div>



</div>

<?php  
    get_footer();


?>