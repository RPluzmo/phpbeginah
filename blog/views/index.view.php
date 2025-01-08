<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>

<?php 
//formai method POST maina datubazee saturu GET ir default} 
?>
<form >
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" //null coalescing operator if vieta?>' />
    <button>Meklēt</button>
 </form>

<ul>
    <?php foreach($posts as $post){ ?>
    <li> <?= $post["content"] //<?= ir <?php echo ?> </li> 
    <?php } ?>
</ul>

</body>
</html>


 