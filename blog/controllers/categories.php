<?php 
$sql = "SELECT * FROM categories";
$params=[];

if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    $search_query="%". $_GET["search_query"]. "%";
    $sql .=" WHERE category_name LIKE :search_query;";
    $params = ["search_query"=>$search_query];
}
$posts= $db->query($sql, $params)->fetchAll();
//dd($sql);

$pageTitle = "katgregor";
require "views/categories.view.php";