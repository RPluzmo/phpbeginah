<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri =='Blogi'){require "controllers/index.php";}
else if($uri == 'ParMums'){require "controllers/story.php";}
else if($uri == 'katgregor'){require "controllers/categories.php";}
else{
    http_response_code(404);
    echo "<p>Atvainojiet, lapa netika atrasta!</p>";
    die();
}