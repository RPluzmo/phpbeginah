<?php 
    require "components/header.php";
    require "components/navbar.php"; 
 ?> 
    
<form >
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button>Meklēt</button>
</form>


<ul>
    <?php foreach($posts as $post){ ?>
    <li>Kategorija: <?= htmlspecialchars($post["category_name"])  ?> </li> 
    <?php } ?>
</ul>

<?php require "components/footer.php"; ?>