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
  <h2><?php the_field('titleforticketdetails'); ?></h2><!--  custom field for the ticketdetails content-->
    <div class="row">
      <div class="col-md-6 text-center">
        <h3 class="article-title"><?php the_field('ordersummary'); ?></h3>
        <img class="img-fluid" alt=“moreventsimage” src="<?php the_field('ordersummaryimage');?>">
        <p class="article-p"><?php the_field('orderinformation'); ?> </p>
        </div>
      <div class="col-md-6">
        <h3 class="article-title"><?php the_field('personaldetails'); ?></h3>
        <form action="/action_page.php">
            <div class="form-group">
              <!-- <label for="fname">Full Name:</label> -->
              <p class="article-p"><?php the_field('fullname'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter full name" id="fname">
            </div>
            <div class="form-group">
              <!-- <label for="cnum">Contact Details:</label> -->
              <p class="article-p"><?php the_field('contactnumber'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter contact number" id="cnum">
            </div>
            <div class="form-group">
              <!-- <label for="email">Email:</label> -->
              <p class="article-p"><?php the_field('email'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter email address" id="email">
            </div>
          </form>
          <h3 class="article-title"><?php the_field('paymentdetails'); ?></h3>
        <!-- <form action="/action_page.php" class="was-validated"> -->
        <p class="article-p"><?php the_field('titleforpaymentmethod'); ?> </p>
        <form action="/action_page.php">
            <div class="form-group">
              <!-- <label for="paymentdetails">Card:</label> -->
              <p class="article-p"><?php the_field('cardpayment'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter card number" id="paymentdetails">
            </div>
            <div class="form-group">
              <!-- <label for="paymentdetails">Paypal:</label> -->
              <p class="article-p"><?php the_field('paypalpayment'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter paypal number" id="paymentdetails">
            </div>
            <div class="form-group">
              <!-- <label for="paymentdetails">Afterpay:</label> -->
              <p class="article-p"><?php the_field('afterpaypayment'); ?> </p>
              <input type="text" class="form-control" placeholder="Enter afterpay number" id="paymentdetails">
            </div>
          </form>
          <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Card" id="paymentdetails">
            <input type="text" class="form-control" placeholder="Paypal" id="paymentdetails">
            <input type="text" class="form-control" placeholder="Afterpay" id="paymentdetails">
          </div> -->
              <button type="submit" class="btn btn-primary">Confirm</button>
          </form>
        </div>
    </div>
  </div>
</section>

       <!-- SUBSCRIPTION -->
       <section class="container-fluid sub">
        <div class="container text-center">
        <h4 class="article-title"><?php the_field('subscription'); ?></h4>
            <form>
                <div class="col">
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
          </form>
        </div>
        </section>

<?php get_footer(); ?>