<?php
require_once('htaccess/config.php');
require_once APP_ROOT.'/tlunews/controllers/HomeController.php';

$HomeCtrl = new HomeController();
$HomeCtrl->index();

?>