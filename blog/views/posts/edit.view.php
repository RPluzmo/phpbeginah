<?php
    require "views/components/header.php"; 
    require "views/components/navbar.php"; ?>


<form method="POST">
    <input type="hidden" name="id" value=<?= $post["id"] ?> />
        <label>
            <h1>Rediģeeee!</h1>
            <input name="content" value="<?= $post["content"] ?? 'Nav atrasta vērtība?? like wut..' ?>">
            </label>

    <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
    <?php } ?>
        <button type="submit">Rediģēt ierakstu</button>
</form>

    <?php require "views/components/footer.php"; ?>