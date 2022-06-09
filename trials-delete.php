about page section 1

<section class="container-fluid aboutintro">
      <div class="container">

          <div class="row text-center"><!--  a row that gives us access to the BS columns-->
              
              <div class="col-md-4">
                  <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('historyimage');?>">
                  <h4 class="article-title"><?php the_field('titleforhistory'); ?></h4>
                  <p class="article-p"><?php the_field('historyexcerpt'); ?> </p>
                  <a href="<?php the_field('specialeventsreadmore'); ?>" class="readmore">Continue Reading</a>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('visualartsimage');?>">
                  <h4 class="article-title"><?php the_field('titleforvisualarts'); ?></h4>
                  <p class="article-p"><?php the_field('visualartsexcerpt'); ?> </p>
                  <a href="<?php the_field('specialeventsreadmore'); ?>" class="readmore">Continue Reading</a>
              </div>
              <div class="col-md-4">
                  <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('specialeventsimage');?>">
                  <h4 class="article-title"><?php the_field('titleforspecialevents'); ?></h4>
                  <p class="article-p"><?php the_field('specialeventsexcerpt'); ?> </p>
                  <a href="<?php the_field('specialeventsreadmore'); ?>" class="readmore">Continue Reading</a>
              </div>
              </div><!-- row-->

          </div><!-- container-->
         </section><!-- container-fluid-->

home page artist lineup
<!-- BG2 ARTISTS-->
<section class="container-fluid artistbg">
            <div class="container">
                <h2><?php the_field('titleforartistlineup'); ?></h2><!--  custom field for the artistlineup content-->
                <div class="row text-center">
                
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage1');?>">
                    <p><a href="<?php the_field('artistname1'); ?>" class="artistname">Anesu</a></p>
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