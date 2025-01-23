<?php
    require "views/components/header.php"; 
    require "views/components/navbar.php"; ?>


<form method="POST">
<label>
    <h1>redigeeee!</h1>
    <input name="id" value='<?= $post["id"] ?>' />
</label>


<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
     <?php } ?>
    <button type="submit">Pievieot</button>
</form>

    <?php require "views/components/footer.php"; ?>