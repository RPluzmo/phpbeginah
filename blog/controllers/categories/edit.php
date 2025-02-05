<?php
$pageTitle="eddoK";

require "Validator.php";

    if (!isset($_GET["id"]) || $_GET["id"] == ""){
        redirectIfNotFoundZ();}

    $sql = "SELECT * FROM categories WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $category = $db->query($sql, $params)->fetch();
    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = []; 

    if (!Validator::string($_POST["category_name"],min: 3, max: 25)){
        $errors["category_name"] = "Saturam jābūt ievadītam, un robežās no 3 līdz 25 rakstzīmēm!!"; 
    }
    
    if (!Validator::number($_POST["id"])){
        echo "id nova skaitlis..";
        exit();
    };

    if (empty($errors)){
        $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id;";
        $params = [
            "category_name" => $_POST["category_name"],
            "id"=> $_POST["id"] 
        ];
        $db->query($sql, $params);
        header("Location: /categories/show?id=" . $_POST["id"]);
        exit();
    }  
}

require "views/categories/edit.view.php";

