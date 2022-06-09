<?php
    /*
    Template Name: FAC Concert Series About
    */
    ?>
<?php require_once('about_page_header.php'); ?>

<!-- BG1-->
<section class= "container-fluid welcomeinfo">
        <div class="container text-center welcomeinfosub">
            <h3>Fremantle Arts Centre Concert Series is held at Walyalup on Whadjuk Nyoogar Boodjar. We acknowledge the Whadjuk people as the traditional owners and custodians of these lands and waterways and extend our respect to their elders, past and present.
            <br>We offer our heartfelt gratitude to the Whadjuk community and to all Aboroginal and Torres Strait Islander people who continue to care for Country and share their knowledge - this generosity and wisdom helps us to understand and navigate Country safely and respectfully.
            </h3>
        </div> 
    </section>

    <!-- BG2-->    
    <section class="container-fluid aboutintro">
      <div class="container">

      <?php 
$args = array(
  'category_name' =>  'AboutPosts',
 // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <h2><?php the_title(); ?></h2> 
    <div>
<?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
<p class="about-text"><?php the_excerpt(); ?></p></div>
    
    <?php
$link = get_field('link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

          </div><!-- container-->
         </section><!-- container-fluid-->


<!-- BG3-->  
<section class="container-fluid map">
    <div class="container mapsub">
    <h2 class="article-title"><?php the_field('titleformap'); ?></h2>
      
    <div class="row"> <!--  a row that gives us access to the BS columns-->
        <div class="col-md-6">
          <p class="article-p"><?php the_field('mapexcerpt'); ?> </p>
            <!-- <p>Free parking is available outside Fremantle Arts Centre on Finnerty Street, Ord Street and Vale Street
            <br>Paid parking is available at Fremantle Leisure Centre (Opposite Fremantle Arts Centre on Ord Street)
            <br>Public transport - Fremantle train station is located 1.2km away from Fremantle Arts Centre. You can walk from the station to Fremantle Arts Centre in approximately 15 minutes!
            </p>  -->         
        </div>
        <div class="col-md-6">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.8103122328293!2d115.7542612472965!3d-32.0473254394626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a163d6c8943f%3A0x9e3a40df81e5279e!2sFremantle%20Arts%20Centre!5e0!3m2!1sen!2sau!4v1653974060325!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
              <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('mapimage');?>">
            </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>