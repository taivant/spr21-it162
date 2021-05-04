<?php include 'includes/header.php';?>
<link rel="stylesheet" href="css/forms.css" />
<div class="wrapper">
    
    <h2 class="pageID">Contact me</h2>
    <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "0pluviophile@gmail.com";  //place your/your client's email address here
            $toName = "Taivan"; //place your client's name here
            $website = "taivan.xyz";  //place NAME of your client's website

            //echo loadContact('simple.php');#demonstrates a simple contact form
            echo loadContact('multiple.php');#demonstrates multiple form elements

    ?>
    
<?php include 'includes/footer.php';?>