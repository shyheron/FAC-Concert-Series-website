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