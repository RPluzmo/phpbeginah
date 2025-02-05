<?php
    require "views/components/header.php"; 
    require "views/components/navbar.php"; ?>


<form method="POST">
<label>
    <h1>Izveidot jaunu kategoriju!!</h1>
    <input name="category_name" value="<?= $_POST["category_name"] ?? "" ?>" />
</label>
<?php if(isset($errors["category_name"])) { ?>
       <p><?= $errors["category_name"] ?></p>
     <?php } ?>
    <button type="submit">Pievieot</button>
</form>

    <?php require "views/components/footer.php"; ?>