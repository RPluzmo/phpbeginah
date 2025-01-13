<?php 
//objects no database klases
//Dump n Die
//dd($posts);
$sql = "SELECT * FROM posts";
$params=[];

if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    //mekleshanas logika
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");// parbaudam vai ir sql.. '% x %'
    $search_query="%". $_GET["search_query"]. "%";
    $sql .=" WHERE content LIKE :search_query;";
    $params = ["search_query"=>$search_query];
}
$posts= $db->query($sql, $params)->fetchAll();
//dd($sql);

$pageTitle = "Blogi";
require "views/index.view.php";//views/ ir mape
