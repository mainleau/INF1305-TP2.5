<?php

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
    case '/home':
        require('./views/home/index.php');
        break;
    case '/products':
        require('./views/products/index.php');
        break;
}

?>