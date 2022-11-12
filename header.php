<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      
    <?php wp_head() ?>
   </head>

   <body <?php body_class() ?>>
    

	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
                     <?php 
                        $email = get_field('email', 'option');
                        $phone = get_field('phone_number', 'option');

                        if ($email) {
                           ?>
                           <a href="mailto:"><i class="fa fa-envelope"></i> <?php echo $email ?></a>
                     
                           <?php
                              if ($phone) {
                                 ?>

                           <a href="tel:"><i class="fa fa-phone"></i> <?php echo $phone ?></a>
                                 <?php 
                              }

                        }
                     ?>
                     

							
							
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     
                        <?php 
                        $social_icon = get_field('social_icon','option');

                        foreach ($social_icon as $socialicon) {
                           ?>

                        <a href="<?php echo $socialicon['social_link']; ?>"><i class="fa <?php echo $socialicon['social_media_icon']; ?>">
                     </i></a>
                           <?php
                        }
                        
                        ?>
                        
                        
							
							
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php $url = site_url(); ?>">halim</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                       

                    
                     <?php 
                  wp_nav_menu( array( 
                     'theme_location' => 'primary_menu', 
                     'menu_class' => 'navbar-nav ml-auto' 
                     ) );
                  
                  ?>
                       



                      
                     
                     </div>
                  </nav>

                 
                  



               </div>
            </div>
         </div>
      </header>