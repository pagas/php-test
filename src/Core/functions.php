<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


function base_path($path)
{
    return BASE_PATH . $path;
}

