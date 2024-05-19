<?php

require './vendor/autoload.php';

use App\Controllers\SignUpController;

$signup = new SignUpController();
$signup->index();