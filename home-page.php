<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header();?>   <!--  Tells WordPress to include header.php -->

            <!-- BG2 ARTISTS-->
        <section class="container-fluid artistbg">
            <div class="container">
                <h2><?php the_field('titleforartistlineup'); ?></h2><!--  custom field for the artistlineup content-->
                <div class="row text-center">
                
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage1');?>">
                    <h4 class="article-title"><?php the_field('artistname1'); ?></h4>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage2');?>">
                    <h4 class="article-title"><?php the_field('artistname2'); ?></h4>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage3');?>">
                    <h4 class="article-title"><?php the_field('artistname3'); ?></h4>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage4');?>">
                    <h4 class="article-title"><?php the_field('artistname4'); ?></h4>
              </div>
                  <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage5');?>">
                    <h4 class="article-title"><?php the_field('artistname5'); ?></h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage6');?>">
                    <h4 class="article-title"><?php the_field('artistname6'); ?></h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage7');?>">
                    <h4 class="article-title"><?php the_field('artistname7'); ?></h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage8');?>">
                    <h4 class="article-title"><?php the_field('artistname8'); ?></h4>
                  </div>
                </div> 

                <div class="text-center">
                  <h3>Enjoy a carefully curated lineup of the best local and touring musicians</h3>
                  <a href="#" class="btn btn-default btn-lg">SEE THE FULL LIST</a>
                </div> 
  
            </div>
          </section>

        <!-- BG3 EVENTS-->
        <section class="container-fluid morebg">
            <div class="container morebgsub">
            <h2><?php the_field('titleformoreevents'); ?></h2><!--  custom field for the moreevents content-->
                <div class="row text-center">
                    
                     <div class="col-md-4">
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreventsimage1');?>">
                        <h4 class="article-title"><?php the_field('moreventsname1'); ?></h4>
                        <p class="article-p"><?php the_field('articleexcerpt1'); ?> </p>
                        <!-- <p>Adult art courses that cater for all abilities from absolute beginners to experienced creatives.</p>
                         --><a href="<?php the_field('readmore'); ?>" class="moreeventsreadmore1">Continue Reading</a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreventsimage2');?>">
                        <h4 class="article-title"><?php the_field('moreventsname2'); ?></h4>
                        <p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
                        <!-- <p>Classes for kids taught by highly skilled and experienced artists to ensure that your child gets the hands-on support and guidance needed to build their confidence and technical knowledge.</p>
                         --><a href="<?php the_field('readmore'); ?>" class="moreeventsreadmore2">Continue Reading</a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreventsimage3');?>">
                        <h4 class="article-title"><?php the_field('moreventsname3'); ?></h4>
                        <p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
                        <!-- <p>Our concerts generally run alongside a series of food and crafts market for shopping. We also have our own little bar station just for you!</p>
                         --><a href="<?php the_field('readmore'); ?>" class="moreeventsreadmore3">Continue Reading</a>
                    </div>
                    </div>  

                    <div class="text-center">
                        <a href="#" class="btn btn-default btn-lg">SEE ALL EVENTS</a>
                      </div> 

                </div><!-- container-->
               </section><!-- container-fluid-->

        <!-- SUBSCRIPTION -->
        <section class="container-fluid sub">
        <div class="container text-center">
            <h4>Sign up for our newsletter</h4>
            <form>
                <div class="col">
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
          </form>
        </div>
        </section>

<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->