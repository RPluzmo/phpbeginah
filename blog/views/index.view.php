

<?php
    require "components/header.php"; 
    require "components/navbar.php"; 
//formai method POST maina datubazee saturu GET ir default} 
?>
<form >
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" //null coalescing operator if vieta?>' />
    <button>Meklēt</button>
 </form>

<?php if(count($posts) == 0 ) {?>
    <p>NUHUUH</p>
<?php } ?>

<ul>
    <?php foreach($posts as $post){ ?>
    <li> <?= $post["conntent"] //<?= ir <?php echo ?> </li> 
    <?php } ?>
</ul>

</body>
</html>


 