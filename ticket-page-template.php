<?php
    /*
    Template Name: FAC Concert Series Ticket
    */
    ?>
<?php require_once('ticket_page_header.php'); ?>

    <!-- BG1-->
    <section class= "container-fluid covidinfo">
        <div class="container text-center covidinfosub">
            <h3>YOU ARE REQUIRED TO PROVIDE PROOF OF  YOUR ID AND COVID VACCINATION BEFORE ENTERING THE SITE</h3>

            <h3>By continuing past this page and placing your order, you are agreeing to the Terms and Conditions of purchase and for this event</h3>
        </div> 
    </section>


    <!-- BG2 LEFT -->
    <section class="container-fluid ticketsummarybg">
        <div class="container">
            <div class="row">
            <div class="col-md-6 text-center">
                    <h3>Order Summary</h3>
                    <img class="img-fluid" alt="Artist" src="images/artists/Maatakitj.png">
                  <p>Maatakitjz
                  <br>2 April 4PM - 6PM
                  <br>A little priarie song</p>
                    
                  <p>$50</p>
                </div>
                
                </div>
                <div class="col-md-6">
                    <h3>Personal Details</h3>
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
                      <h3>Payment Details</h3>
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
</section>

<?php get_footer(); ?>