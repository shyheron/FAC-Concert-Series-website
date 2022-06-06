<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header();?>   <!--  Tells WordPress to include header.php -->

            <!-- BG2 ARTISTS-->
        <section class="container-fluid artistbg">
            <div class="container">
                <h2><?php the_field('titleforartistlineup'); ?></h2><!--  custom field for the aboutme content-->
                <div class="row text-center">
                
                <div class="col-md-3">
                    <img class="img-fluid" alt=“artistimage” src="<?php the_field('artistimage1');?>">
                    <h4 class="article-title"><?php the_field('artistname1'); ?></h4>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Ken Paolo and the Space Cadets.png" alt="Artist">
                    <h4 class="more-title">Ken Paolo and the Space Cadets</h4>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Grievous Bodily Calm.png" alt="Artist">
                    <h4 class="more-title">Grievous Bodily Calm</h4>
                </div>
                <div class="col-md-3">
                  <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Michael Dunstan.png" alt="Artist">
                  <h4 class="more-title">Michael Dunstan</h4>
              </div>
                  <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Emily Barker.png" alt="Artist">
                    <h4 class="more-title">Emily Barker</h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Project Bexx.png" alt="Artist">
                    <h4 class="more-title">Project Bexx</h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Ocean Alley.png" alt="Artist">
                    <h4 class="more-title">Ocean Alley</h4>
                  </div>
                  <div class="col-md-3">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/artists/Maatakitj.png" alt="Artist">
                    <h4 class="more-title">Maatakitj</h4>
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
                <!-- <h2 class="text-center">More Events</h2>
                <div class="row text-center">
                    
                     <div class="col-md-4">
                        <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/events/Adult art class.png" alt="-">
                        <h4 class="more-title">Adult art courses</h4>
                        <p>Adult art courses that cater for all abilities from absolute beginners to experienced creatives.</p>
                        <a class= "readmore" href="#">Continue reading ></a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/events/Kids art class.png" alt="-">
                        <h4 class="more-title">Kids art courses</h4>
                        <p>Classes for kids taught by highly skilled and experienced artists to ensure that your child gets the hands-on support and guidance needed to build their confidence and technical knowledge.</p>
                        <a class= "readmore" href="#">Continue reading ></a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/events/Food & crafts market.png" alt="-">
                        <h4 class="more-title">Food & crafts market</h4>
                        <p>Our concerts generally run alongside a series of food and crafts market for shopping. We also have our own little bar station just for you!</p>
                        <a class= "readmore" href="#">Continue reading ></a>
                    </div>
                    </div>  -->

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