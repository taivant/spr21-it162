<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/lightbox.css" />
     
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  

 </head>
 <body>
     <header>
         <a href="portal.php">
            <img id="logo" src="images/wildcattos.png" alt="Logo" />
         </a>
         <nav class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>    
         <!-- START COMMENT OUT NAV
          <a href="portal.php" class="selected">Welcome</a>
          <a href="about.php"></i>About Us</a>
          <a href="donate.php"></i>Donation</a>
          <a href="facts.php"></i>Facts and News</a>
          <a href="gallery.php"></i>Gallery</a>
          <a href="contact.php"></i>Contact Us</a>
	     END COMMENT OUT NAV -->
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> 
         </nav>
     </header>
     
     <div class="wrapper">
    <div class="content">
        <h1 class="pageID"><?=$title?>  <i class="logo fa <?=$logo?>"<?=$logo_color?>></i></h1>
