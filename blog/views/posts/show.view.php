<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>


<?= htmlspecialchars($post["content"]) ?>
<p>Kategorija ir: <?= htmlspecialchars($post["category_name"] ?? "Nav piederoša kategorija =[") ?></p>

<a href="/edit?id=<?= $_GET["id"]?>">Rediģēt?</a>

<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
    <button>Dzēst ierakstu</button>
</form>

<?php require "views/components/footer.php"; ?>