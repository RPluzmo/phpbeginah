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
    <button type="submit">Pievieot</button>
</form>

    <?php require "views/components/footer.php"; ?>