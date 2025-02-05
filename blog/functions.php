<?php

//Dump n Die
function dd($data){
    echo"<pre>";
    var_dump($data);
    echo"</pre>";
    die();//kill  codoo
}

function redirectIfNotFound($location = "/"){
    http_response_code(404);
    header("Location: $location", 302);
    exit();
}

function redirectIfNotFoundZ($location = "categories/"){
    http_response_code(404);
    header("Location: $location", 302);
    exit();
}