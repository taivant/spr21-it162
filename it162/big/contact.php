<?php include 'includes/header.php';?>

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
        </section>

            <aside>
              <h3>Check out my other projects</h3>
                 <ul>
                    <li><a href="http://www.taivan.xyz/it161/">IT161 website</a></li>
                    <li><a href="http://www.taivan.xyz/it162/">IT162 website</a></li>
                    <li><a href="http://www.taivan.xyz/it162/fp/portal.php">IT162 final project</a></li>
                 </ul>
              </aside>

<?php include 'includes/footer.php';?>