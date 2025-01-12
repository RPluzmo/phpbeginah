<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri =='/'){require "controllers/index.php";}
else if($uri == '/story.php'){require "controllers/story.php";}
else if($uri == '/categories.php'){require "controllers/categories.php";}
else{
    http_response_code(404);
    echo "<p>Atvainojiet, lapa netika atrasta!</p>";
    die();}