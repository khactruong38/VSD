<div style="padding-left: 240px;">
    <?php
    echo '<form action="index.php?controller=' . $_REQUEST['controller'] . '&action=update" method="POST">';
    echo '<input type="hidden" name="id" value="' . $users['id'] . '">'; // Trường ẩn lưu id của bản ghi

    foreach ($columns as $field => $attributes) {
        echo '<label for="' . $field . '">' . $attributes['label'] . ':</label>';
        echo '<input type="text" name="' . $field . '" value="' . $users[$field] . '" style="width: ' . $attributes['width'] . '"><br>';
    }

    echo '<input type="submit" value="Submit">';
    echo '</form>';
    ?>
</div>
