<div class="main-form">
<!-- <form action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=store" method="POST">
Name: <input  type="text" name="name"><br>
Price: <input type="text" name="price"><br>
Cateory id: <input type="text" name="category_id"><br>
<input type="submit">
</form> -->
<?php
    // print_r($product) ;
    
    ?>


    <form class="add-student-form" action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=store" method="POST">
            <div class="form-field">
                <div class="form-container">
                    <label for="">Tên</label>
                    <input type="text" name="name"><br>
                </div>

                <div class="form-container">
                    <label for="">Giá</label>
                    <input type="text" name="price"><br><br>
                </div>
                <div class="form-container">
                    <label for="">Id</label>
                    <input type="text" id="" name="category_id"><br><br>
                </div>
            </div>
        <div class="submit-btn">
            <input type="submit">
        </div>
    </form>

        
</div>