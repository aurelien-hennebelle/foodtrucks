<?php
// var_dump($_SERVER);
include_once '../private/app/init.php';

var_dump($_SESSION); // session
var_dump($pdo); // bdd
var_dump($page); // page
var_dump($router[$page][0]);// routage

include_once VIEWS_DIRECTORY . 'header.php'; 
/*header avant ce repère*/

//include_once VIEWS_DIRECTORY . 'home.php';
//include_once VIEWS_DIRECTORY . 'foodtrucks.php';
//include_once VIEWS_DIRECTORY . 'contact.php';
include_once VIEWS_DIRECTORY . $router[$page][0];  

/*footer après ce repère*/
include_once VIEWS_DIRECTORY . 'footer.php';  

