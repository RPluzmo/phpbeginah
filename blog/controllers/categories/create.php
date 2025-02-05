<?php
$pageTitle = "yeawC";

require "Validator.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = []; 

if (!Validator::string($_POST["content"],min:3, max: 25)){
    $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";    
}

if (empty($errors)){
    $sql = "INSERT INTO categories (content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];
    $db->query($sql, $params);
    header("Location: categories/");
    exit();
    }
        
}

require "views/categories/create.view.php";