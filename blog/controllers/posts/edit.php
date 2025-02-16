<?php
$pageTitle = "eddo";

require "Validator.php";

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

$sql = "SELECT * FROM categories";
$categories = $db->query($sql, []);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = []; 

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm"; 
    }
    
    if (!Validator::number($_POST["id"])) {
        echo "ID nav skaitlis..";
        exit();
    }

    // Atļaut tukšu kategoriju
    if (!empty($_POST["category_id"]) && !Validator::number($_POST["category_id"])) {
        echo "Kategoriju ID nav skaitlis..";
        exit();
    }

    if (empty($errors)) {
        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id;";
        $params = [
            "content" => $_POST["content"],
            "id" => $_POST["id"],
            "category_id" => empty($_POST["category_id"]) ? null : $_POST["category_id"]
        ];
        $db->query($sql, $params);
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }  
}

require "views/posts/edit.view.php";
