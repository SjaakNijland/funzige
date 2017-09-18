
<?php
include 'views/head.php';
include 'views/menu.php';
$current_page = isset($_GET['action'])?$_GET['action']:'home';

switch ($current_page) {
    case 'home':
        include 'views/home.php';
        break;
}
include 'views/footer.php';
?>