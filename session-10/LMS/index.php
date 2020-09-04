<?php

require_once('./config/dbConnect.php');

$page = $_GET['p'];

require_once('./views/_common/header.php');

switch($page) {
    case 'instructors':
        require_once('./views/instructors/index.php');
        break;
    
    case 'students':
        require_once('./views/students/index.php');
        break;

    case 'home';
        require_once('./views/_common/home.php');
        break;

    default:
        echo 'Error 404 Page Not Found';
}

require_once('./views/_common/footer.php');

?>
