<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use App\Views\Components\Header;
use App\Views\Components\Footer;
use App\Views\Components\Home;
use App\Views\Components\NotFound;




$header = new Header();
$footer = new Footer();
$home = new Home();
$notfound = new NotFound();
$header->render();

//Nếu ko có thì ''
$action = $_GET['act'] ?? '';

switch ($action) {

    case "";
        //load ra trang chủ
        $home->render();
        break;



    default:
        //load ra 404 not found
        $notfound->render();
        break;
}





$footer->render();
// $home->render();
