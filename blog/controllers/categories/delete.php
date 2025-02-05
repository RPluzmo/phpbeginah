<?php

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

 
    
if (!Validator::number($_POST["id"])){
    echo "id nova skaitlis..";
    exit();
};

    $sql = "DELETE FROM categories WHERE id = :id;";
    $params = ["id" => $_POST["id"]];
    $db->query($sql, $params);
    header("Location: /categories");
    exit();

    
}