<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>
<?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>

</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

</head>
<body>

    <header class="container-fluid ticketbg">   <!-- div for the main image the stretches to the edge of the page- -->
        <div class="container"> <!-- keeps navbar inside the div -->
          <nav class="navbar navbar-expand-md navbar-dark">
            <!-- Brand -->
            <img class="img-fluid logo" src="http://206.189.45.97/~mesh21/sub3/wp-content/themes/FAC-Concert-Series-website/images/logo.png" alt="Logo">
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="http://206.189.45.97/~mesh21/sub3/about/">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://206.189.45.97/~mesh21/sub3/artists/">Artists</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://206.189.45.97/~mesh21/sub3/tickets/">Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://206.189.45.97/~mesh21/sub3/events/">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://206.189.45.97/~mesh21/sub3/contact/">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    
            <!-- BG1 TAGLINE-->
            <div class="text-center tag2"><!-- div that holds the content in the middle of the page-->
                  <h1><?php the_field('tickettagline'); ?></h1>
                </div><!-- container-->

                <?php wp_head(); ?> <!-- very important that this is added--> 

                </header>