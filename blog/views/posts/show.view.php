<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>
<?= htmlspecialchars($post["content"]) ?>

<a href="/edit?id=<?= $_GET["id"]?>">Rediģēt?</a>

<form action="/delete" method="POST">
    <input type="hidden" name="id" value=<?= $post["id"] ?> />
    <button type="submit">Dzēst ierakstu</button>
</form>

<?php require "views/components/footer.php"; ?>