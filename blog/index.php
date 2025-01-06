<?php 

require "functions.php";
require "Database.php";
$config=require("config.php");

echo"woaw<br>";

$db= new Database($config["database"]);//objects no database klases
$posts =$db->query("SELECT * FROM posts")->fetchAll();


//Dump n Die
//dd($posts);

if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    //mekleshanas logika
    $posts =$db->query("SELECT * FROM posts WHERE conntent LIKE". ($_GET["search_query"])->fetchAll();
};
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