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
    $title = "Main Page";
    $logo = "fa-home";
    $logo_color = ' style="color: #954535"';
    break;

    case 'calendar.php':
    $title = "BIG Calendar";
    $logo = "fa-calendar-check-o";
    $logo_color = ' style="color: #a9d2ef"';
    break;
        
    case 'map.php':
    $title = "BIG Map";
    $logo = "fa-map-o";
    $logo_color = ' style="color: #29e34b"';
    break;
        
    case 'accessibility.php':
    $title = "BIG Accessibility";
    $logo = "fa-universal-access";
    $logo_color = ' style="color: #2B65EC"';
    break;
        
    case 'webcam.php':
    $title = "BIG Webcam";
    $logo = "fa-video-camera";
    $logo_color = ' style="color: #625D5D"';
    break;
        
    case 'responsive.php':
    $title = "BIG Research: 1. Responsive vs Mobile";
    $logo = "fa-mobile";
    $logo_color = ' style="color: #AF9B60"';
    break;
        
    case 'galleries.php':
    $title = "BIG Research: 2. Galleries";
    $logo = "fa-picture-o";
    $logo_color = ' style="color: #AF9B60"';
    break;
        
    case 'flexbox.php':
    $title = "BIG Research: 3. Flexbox";
    $logo = "fa-th";
    $logo_color = ' style="color: #AF9B60"';
    break;
        
    case 'shopping.php':
    $title = "BIG Research: 4. Shopping Carts";
    $logo = "fa-shopping-cart";
    $logo_color = ' style="color: #AF9B60"';
    break;
        
    case 'contact.php':
    $title = " Contact Taivan";
    $logo = "fa-envelope-o";
    $logo_color = ' style="color: #FFA62F"';
    break;
        
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

//place URL & labels in the array here for navigation:
    $nav1['portal.php'] = "Welcome";
    $nav1['calendar.php'] = "Calendar";
    $nav1['map.php'] = "Map";
    $nav1['accessibility.php'] = "Accessiblity";
    $nav1['webcam.php'] = "Webcam";
    $nav1['responsive.php'] = "Responsive vs Mobile";
    $nav1['galleries.php'] = "Galleries";
    $nav1['flexbox.php'] = "Flexbox";
    $nav1['shopping.php'] = "Shopping Carts";
    $nav1['contact.php'] = "Contact me";

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
