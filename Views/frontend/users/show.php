<div class="main-form">
    <form  class="add-student-form" action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=store" method="POST">
        <?php foreach ($columns as $key => $value) : ?>
            <div class="form-fieid">
                <div class="form-container">
                    <label for="<?php echo $key; ?>" style="width: <?php echo $value['width']; ?>;"><?php echo $value['label']; ?>:</label>
                    <input type="text" name="<?php echo $key; ?>"><br>
                </div>
            </div>
            
        <?php endforeach; ?>
        <div class="submit-btn">
            <input type="submit">
        </div>
    </form>
</div>
