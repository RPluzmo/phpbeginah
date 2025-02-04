<?php

require "Validator.php";

if (!Validator::number($_POST["id"])){
    echo "id nova skaitlis..";
    exit();
};

    $sql = "DELETE FROM posts WHERE id = :id;";
    $params = ["id" => $_POST["id"]];
    $db->query($sql, $params);
    header("Location: /");
    exit();
