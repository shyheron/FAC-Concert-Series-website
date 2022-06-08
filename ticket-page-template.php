<?php
    /*
    Template Name: FAC Concert Series Ticket
    */
    ?>
<?php require_once('ticket_page_header.php'); ?>

    <!-- BG1-->
    <section class= "container-fluid covidinfo">
        <div class="container text-center covidinfosub">
        <h3 class="article-title"><?php the_field('covidinfo'); ?></h3>
        </div> 
    </section>


    <!-- BG2 LEFT -->
<section class="container-fluid ticketsummarybg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <h3 class="article-title"><?php the_field('ordersummary'); ?></h3>
        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('ordersummaryimage');?>">
        <p class="article-p"><?php the_field('orderfullname'); ?> </p>
        <p class="article-p"><?php the_field('ordersdateandtime'); ?> </p>
        <p class="article-p"><?php the_field('ordersongtitle'); ?> </p>
        <p class="article-p"><?php the_field('ordercost'); ?> </p>
        </div>
      <div class="col-md-6">
        <h3 class="article-title"><?php the_field('personaldetails'); ?></h3>
        <form action="/action_page.php">
            <div class="form-group">
              <label for="fname">Full Name:</label>
              <input type="email" class="form-control" placeholder="Enter full name" id="fname">
            </div>
            <div class="form-group">
              <label for="pwd">Contact number:</label>
              <input type="password" class="form-control" placeholder="Enter contact number" id="cnumb">
            </div>
          </form>
          <h3 class="article-title"><?php the_field('paymentdetails'); ?></h3>
        <form action="/action_page.php" class="was-validated">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Card" id="paymentdetails">
            <input type="text" class="form-control" placeholder="Paypal" id="paymentdetails">
            <input type="text" class="form-control" placeholder="Afterpay" id="paymentdetails">
          </div>
              <button type="submit" class="btn btn-primary">Confirm</button>
          </form>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>