<?php 

class Database{
  //uztaisit metodi query
    public function query(){
        
        //dataSourceName
        $dsn="mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";
        //PHP data object
        $pdo=new PDO($dsn);

        //Sagatavot vaicajumu
        $statement=$pdo->prepare("SELECT * FROM posts");
        //Izpilda vaicjumu
        $statement->execute();

        //dabut bloga ierakstus
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

};
