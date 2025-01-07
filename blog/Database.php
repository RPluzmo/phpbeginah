<?php 

class Database{

  public $pdo;

  public function  __construct($config){//konstruktors izsauks ja atrod funkciju vienu reizi
        $dsn="mysql:".http_build_query($config, "",";");
        //PHP data object
        $this->pdo=new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);}//(19,2)

  //uztaisit metodi query
    public function query($sql, $params){



        //Sagatavot vaicajumu
        $statement=$this->pdo->prepare($sql);
        //Izpilda vaicjumu
        $statement->execute($params);

        //dabut bloga ierakstus
        return $statement;
    }

};
