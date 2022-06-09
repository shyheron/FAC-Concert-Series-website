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
                    <a href="<?php the_field('artistname1'); ?>" class="artistname">Anesu</a>
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
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreeventsimage1');?>">
                        <h4 class="article-title"><?php the_field('moreeventsname1'); ?></h4>
                        <p class="article-p"><?php the_field('moreeventsexcerpt1'); ?> </p>
                        <a href="<?php the_field('moreeventsreadmore1'); ?>" class="readmore">Continue Reading</a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreeventsimage2');?>">
                        <h4 class="article-title"><?php the_field('moreeventsname2'); ?></h4>
                        <p class="article-p"><?php the_field('moreeventsexcerpt2'); ?> </p>
                        <a href="<?php the_field('moreeventsreadmore2'); ?>" class="readmore">Continue Reading</a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('moreeventsimage3');?>">
                        <h4 class="article-title"><?php the_field('moreeventsname3'); ?></h4>
                        <p class="article-p"><?php the_field('moreeventsexcerpt3'); ?> </p>
                        <a href="<?php the_field('moreeventsreadmore3'); ?>" class="readmore">Continue Reading</a>
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