<div class="main-form">
    <?php
    echo '<form class="add-student-form" action="index.php?controller=' . $_REQUEST['controller'] . '&action=update" method="POST">';
    echo '<input type="hidden" name="id" value="' . $users['id'] . '">'; // Trường ẩn lưu id của bản ghi
    
    
    foreach ($columns as $field => $attributes) {
        echo '<div class="form-field">';
        echo '<div class="form-container">';
        echo '<label for="' . $field . '">' . $attributes['label'] . ':</label>';
        echo '<input type="text" name="' . $field . '" value="' . $users[$field] . '" style="width="1000px" ' . '"><br>';
        echo '</div>';
        echo '</div>';
    }

    echo '<div class="submit-btn">
            <input type="submit" value="Submit">
        </div>';
    echo '</form>';
    ?>
</div>

<!-- 
<div class="main-form">
    
    <form class="add-student-form" action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=update" method="POST">
        <input type="hidden" name="id" value="' . $users['id'] . '">
        <?php foreach ($columns as $field => $attributes) : ?>
            <div class="form-fieid">
                <div class="form-container">
                    <label for="<?php echo $field; ?>"><?php echo $attributes['label']; ?>:</label>
                    <input type="text" name="<?php echo $key; ?>" value="<?php echo $users[$field]; ?>"><br>
                </div>
            </div>
        <?php endforeach; ?>
        
        <div class="submit-btn">
            <input type="submit" value="Submit">
        </div>
    </form>
</div> -->