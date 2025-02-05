<?php
$pageTitle = "Kategorija";

if (!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFoundZ();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$category = $db->query($sql, $params)->fetch();

if(!$category){
    redirectIfNotFoundZ();
}


 require "views/categories/show.view.php";