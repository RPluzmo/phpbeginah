<?php
    require "views/components/header.php"; 
    require "views/components/navbar.php"; ?>


<form method="POST">
<label>
    <h1>Izveidot bloga ierakstu!</h1>
    <input name="content" value="<?= $_POST["content"] ?? "" ?>" />
</label>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<label>
    <select name="category_id">
        <option value=""></option>;
        <?php foreach ($categories as $category) { ?>
            <option value="<?= $category["id"] ?>" <?= ($_POST["category_id"] ?? "") == $category["id"] ? "selected" : "" ?>>
                <?= htmlspecialchars($category["category_name"]) ?>
            </option>
        <?php } ?>
    </select>
</label>

<?php if(isset($errors["category_id"])) { ?>
    <p><?= $errors["category_id"] ?></p>
<?php } ?>

    <button type="submit">Pievieot</button>
</form>

    <?php require "views/components/footer.php"; ?>