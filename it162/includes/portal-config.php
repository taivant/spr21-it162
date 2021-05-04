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
        
    case 'index.php':
    $title = " Taivan's IT162 Portal Website";
    $logo = "fa-home";
    break;

    case 'aia.php':
    $title = " Taivan's Final Project Audience, Issues and Approach Research";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#00f"';
    break;
        
    case 'contact.php':
    $title = " Contact Taivan";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:#0f0"';
    break;
        
    case 'flowchart.php':
    $title = " Taivan's IT162 Flowchart";
    $logo = "fa-columns";
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contact.php'] = "Contact Taivan";

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
