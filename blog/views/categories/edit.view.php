<?php
require "views/components/header.php"; 
require "views/components/navbar.php"; 
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($category["id"]) ?>">

    <label>
        <h1>Rediģēt kategoriju</h1>
        <input name="category_name" value="<?= htmlspecialchars($category["category_name"] ?? '') ?>">
    </label>

    <?php if (isset($errors["category_name"])) { ?>
        <p><?= $errors["category_name"] ?></p>
    <?php } ?>

    <button type="submit">Rediģēt ierakstu</button>
</form>

<?php require "views/components/footer.php"; ?>
