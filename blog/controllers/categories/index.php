<?php 
$pageTitle="Kategorijas";

$sql= "SELECT * FROM categories";
$categories = $db->query($sql, [])->fetchAll();
require "views/categories/index.view.php";//views/ ir mape
