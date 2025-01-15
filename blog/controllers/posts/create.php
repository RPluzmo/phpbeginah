<?php
$pageTitle = "yeaw";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];
}




require "views/posts/create.view.php";