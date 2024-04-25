<div style ="padding-left:240px">
<form action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=store" method="POST">
Name: <input type="text" name="name"><br>
Price: <input type="text" name="price"><br>
Cateory id: <input type="text" name="category_id"><br>
<input type="submit">
</form>
<?php
    // print_r($product) ;
    
    ?>
</div>