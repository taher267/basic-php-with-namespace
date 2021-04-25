<?php
require "vendor/autoload.php";

$db = new App\DBController;

use App\classes\User;

$user = new User($db);


// https://prnt.sc/121nufm