<?php

use App\App;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'Core/functions.php';


spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});



$app = new App();
