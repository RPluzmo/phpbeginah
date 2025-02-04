<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>
<?= htmlspecialchars($post["content"]) ?>

<a href="/edit?id=<?= $_GET["id"]?>">Rediģēt?</a>

<?php require "views/components/footer.php"; ?>