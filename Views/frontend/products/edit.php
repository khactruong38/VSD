<div style ="padding-left:240px">
<?php

// print_R($products) ;

echo '<form class="add-student-form" action="index.php?controller=' . $_REQUEST['controller'] . '&action=update" method="POST">';
echo '<input type="hidden" name="id" value="' . $products['id'] . '">'; // Trường ẩn lưu id của bản ghi

foreach ($columns as $field) {
    echo '<div class="form-field">';
    echo '<div class="form-container">';
    echo ucfirst($field) . ': <input type="text" name="' . $field . '" value="' . $products[$field] . '"><br>';
    echo '</div>';
    echo '</div>';
}


echo '<input type="submit" value="Submit">';
echo '</form>';


?>
</div>





