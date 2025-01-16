<?php
$pageTitle = "yeaw";

$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $size = strlen( $_POST["content"]);

    if (!isset($_POST["content"]) || $size == 0 || $size >50){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
        
    }
        if (empty($errors)){
            $sql = "INSERT INTO posts (content) VALUES (:content)";
            $params = ["content" => $_POST["content"]];
            $db->query($sql, $params);
            header("Location: /");
            exit();
        }
        
}

require "views/posts/create.view.php";