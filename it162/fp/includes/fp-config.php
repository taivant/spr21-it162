<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
        
    case 'portal.php':
    $title = "WildCattos Home";
    $logo = "fa-home";
    $logo_color = ' style="color: #78675b"';
    break;

    case 'about.php':
    $title = "About Us";
    $logo = "fa-info";
    $logo_color = ' style="color: #78675b"';
    break;
    
    case 'donation.php':
    $title = "Donation";
    $logo = "fa-credit-card";
    $logo_color = ' style="color: #78675b"';
    break;
        
        
    case 'facts.php':
    $title = "Facts & News";
    $logo = "fa-newspaper-o";
    $logo_color = ' style="color: #78675b"';
    break;
        
    case 'gallery.php':
    $title = "Wild Cat Gallery";
    $logo = "fa-picture-o";
    $logo_color = ' style="color: #78675b"';
    break;
        
    case 'contact.php':
    $title = "Contact Us";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color: #78675b"';
    break;
        
    case 'disclaimer.php':
    $title = "Disclaimer";
    $logo = "fa-exclamation";
    $logo_color = ' style="color: #78675b"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

//place URL & labels in the array here for navigation:
    $nav1['portal.php'] = "Welcome";
    $nav1['about.php'] = "About Us";
    $nav1['donation.php'] = "Donation";
    $nav1['facts.php'] = "Facts & News";
    $nav1['gallery.php'] = "Gallery";
    $nav1['contact.php'] = "Contact Us";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<a class="selected" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>
