<?php
$url = isset($_GET['q']) ? $_GET['q'] : '';
switch ($url) {
    case 'about-us':
        include('about-us.php');
        break;
    case 'contact-us':
        include('contact-us.php');
        break;
    // Handle other pages similarly...
    default:
        include('home.php');
        break;
}
?>
