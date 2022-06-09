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
    
      <h2><?php the_field('titleforourstories'); ?></h2><!--  custom field for the ourstories content-->

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
    <div class="thepost">
    <h3><?php the_title(); ?></h3> 
   
<?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
<p class="about-text"><?php the_excerpt(); ?></p>
   
<a class="readmore" href="<?php the_permalink(); ?>">Continue Reading</a> 
</div>
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
              <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('mapimage');?>">
            </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>