<?php
require './helpers.php';

$uri = str_replace('/CareerHunt', '', $_SERVER['REQUEST_URI']);

require './router.php';
