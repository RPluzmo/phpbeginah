<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>
<?= htmlspecialchars($category["category_name"]) ?>

<a href="/categories/edit?id=<?= $_GET["id"]?>">Rediģēt?</a>

<form action="/categories/delete" method="POST">
    <input type="hidden" name="id" value="<?= $category["id"] ?>" />
    <button>Dzēst ierakstu</button>
</form>

<?php require "views/components/footer.php"; ?>