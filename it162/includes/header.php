<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>

 </head>
 <body>
     <header>
         <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Taivan's IT162 Website</a></h1>
         <nav class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>    
         <!-- START COMMENT OUT NAV
          <a href="index.php" class="selected">Welcome</a>
          <a href="big/index.php">Big</a>
          <a href="aia.php">AIA</a>
          <a href="flowchart.php">Flowchart</a>
          <a href="fp/index.php">Final Project</a>
          <a href="contact.php">Contact Taivan</a>
	     END COMMENT OUT NAV -->
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> 
         </nav>
     </header>