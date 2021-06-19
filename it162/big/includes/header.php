<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>

 </head>
 <body>
     <header>
         <h1><a href="portal.php">Taivan's BIG Website</a></h1>
         <nav class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>    
         <!-- START COMMENT OUT NAV
          <a href="portal.php" class="selected">Welcome</a>
          <a href="calendar.php">Calendar</a>
          <a href="accessibility.php">Accessibility</a>
          <a href="map.php">Map</a>
          <a href="webcam.php">Webcam</a>
          <a href="research.php">Research</a>
          <a href="contact.php">Contact Taivan</a>
	     END COMMENT OUT NAV -->
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> 
         </nav>
     </header>
     
     <div class="wrapper">
    
    
    <section>
    <h2 class="pageID"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> <?=$title?></h2>