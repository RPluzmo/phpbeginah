<?php 
require "functions.php";
echo"woaw<br>";

//dataSourceName
$dsn="mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";
//PHP data object
$pdo=new PDO($dsn);

//Sagatavot vaicajumu
$statement=$pdo->prepare("SELECT * FROM posts");
//Izpilda vaicjumu
$statement->execute();

//dabut bloga ierakstus
$posts=$statement->fetchAll(PDO::FETCH_ASSOC);

//Dump n Die

//dd($posts);

echo"<ul>";
foreach($posts as $post){
    echo "<li>Id: ".$post['id']."<br>Content: ".$post['conntent']."<br><br>"
;}
echo"</ul>";