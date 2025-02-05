

<?php
    require "views/components/header.php"; 
    require "views/components/navbar.php"; ?>

<ul>
    <?php foreach($categories as $category){ ?>
    <li><a href="/categories/show?id=<?= htmlspecialchars($category["id"]) ?>"> <?= htmlspecialchars($category["category_name"]) ?></a></li> 
    <?php } ?>
</ul>

</body>
</html>


 