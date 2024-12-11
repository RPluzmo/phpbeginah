<?php 
require "functions.php";
require "Database.php";
echo"woaw<br>";

$db= new Database();//objects no database klases
$posts =$db->query("SELECT * FROM posts");


//Dump n Die
//dd($posts);

echo"<ul>";
foreach($posts as $post){
    echo "<li>Id: ".$post['id']."<br>Content: ".$post['conntent']."<br><br>"
;}
echo"</ul>";