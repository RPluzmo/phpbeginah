<?php 

require "functions.php";
require "Database.php";
$config=require("config.php");

echo"woaw<br>";

$db= new Database($config["database"]);//objects no database klases

//Dump n Die
//dd($posts);


$sql = "SELECT * FROM posts";
$params=[];
if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    //mekleshanas logika
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");// parbaudam vai ir sql.. '% x %'
    $search_query="%". $_GET["search_query"]. "%";
    $sql .=" WHERE conntent LIKE :search_query;";
    $params = ["search_query"=>$search_query];
}
$posts= $db->query($sql, $params)->fetchAll();
//dd($sql);


//method POST maina datubazee saturu
//method GET ir default
echo "<form >";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";


echo"<ul>";
foreach($posts as $post){
    echo "<li>Id: ".$post['id']."<br>Content: ".$post['conntent']."<br><br>"
;}
echo"</ul>";