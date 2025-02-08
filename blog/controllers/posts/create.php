<?php
$pageTitle = "Bloga izveide";

require "Validator.php";

$sql = "SELECT * FROM categories";

$categories = $db->query($sql, []);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = []; 

if (!Validator::string($_POST["content"], max: 50)){
    $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";    
}
if (!Validator::number($_POST["category_id"], max: 50)){
    $errors["category_id"] = "Kategoriju id nav skaitlis iguess";    
}

if (empty($errors)){
    $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
    $params = [
        "content" => $_POST["content"],
        "category_id" =>$_POST["category_id"] ];
    $db->query($sql, $params);
    header("Location: /");
    exit();
    }
        
}

require "views/posts/create.view.php";