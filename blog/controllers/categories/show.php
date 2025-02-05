<?php
$pageTitle = "Blogs";

if (!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIfNotFoundZ();
}


 require "views/categories/show.view.php";