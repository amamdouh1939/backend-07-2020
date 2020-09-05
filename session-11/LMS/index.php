<?php

ob_start();

require_once('./config/dbConnect.php');
require_once('./models/Instructor.php');

$page = $_GET['p'];

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

require_once('./views/_common/header.php');

switch($page) {
    case 'instructors':
        if (!isset($action)) {
            require_once('./views/instructors/index.php');
        } else if ($action == 'create') {
            require_once('./views/instructors/create.php');
        } else if ($action == 'show') {
            require_once('./views/instructors/show.php');
        } else if ($action == 'edit') {
            require_once('./views/instructors/edit.php');
        } else if ($action == 'delete') {
            require_once('./views/instructors/delete.php');
        }
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
