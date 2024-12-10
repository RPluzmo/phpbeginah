<?php 
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
$posts=$statement->fetchAll();

dd($posts);

//Dump n Die
function dd($data){
    echo"<pre>";
    var_dump($data);
    echo"</pre>";
    die();//kill  codoo
}
