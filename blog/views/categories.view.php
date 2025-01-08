<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorijas yuhuu</title>
</head>
<body>
    
<form >
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button>Meklēt</button>
</form>


<ul>
    <?php foreach($posts as $post){ ?>
    <li>Kategorija: <?= $post["category_name"]  ?> </li> 
    <?php } ?>
</ul>;

</body>
</html>