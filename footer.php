         <footer class="container-fluid"><!-- div for the main image to stretch s to the edge of the page-->
            <div class="container"> <!-- div to hold the content in the middle of the page-->
                <div class="row"> <!-- a row that gives us access to the BS columns-->
                  <div class="col-md-6 text-left">
                  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>
                    <!-- <p>Stay Updated</p>
                    <ul>
                    <li class= "socialmedia"> <a href="#">Instagram</a> </li>
                    <li class= "socialmedia"> <a href="#">Twitter</a> </li>
                    <li class= "socialmedia"> <a href="#">Facebook</a> </li>
                    </ul> -->
                </div>
                  <div class="col-md-6 text-right">
                  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
                    <!-- <p>Contact Us</p>
                    <p>Fremantle arts centre
                    <br>08 9432 9555
                    <br>artscentre@fremantle.wa.gov.au
                    </p> -->
                  </div><!-- row-->
                </div><!-- container -->
              </div><!-- container-fluid-->
        </footer>

        <?php wp_footer(); ?>

</body>
</html>