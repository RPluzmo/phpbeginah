<?php 

require "Database.php";
$config=require("config.php");

$db= new Database($config["database"]);//objects no database klases

$sql = "SELECT * FROM categories";
$params=[];
if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    $search_query="%". $_GET["search_query"]. "%";
    $sql .=" WHERE category_name LIKE :search_query;";
    $params = ["search_query"=>$search_query];
}
$posts= $db->query($sql, $params)->fetchAll();
//dd($sql);

echo "<form >";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";


echo"<ul>";
foreach($posts as $post){
    echo "<li>Kategorija: ".$post['category_name']."<br><br>"
;}
echo"</ul>";