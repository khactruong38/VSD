<?php
    echo $pageTitle;
    // print_r($categories);

// Các cột bạn muốn hiển thị
$columns = array(
    'id' => 'ID',
    'name' => 'Name',
    
);

// Hiển thị bảng sản phẩm
echo '<table border="1">';
echo '<tr>';
foreach ($columns as $key => $label) {
    echo '<th>' . $label . '</th>';
}
echo '</tr>';
foreach ($categories as $item) {
    echo '<tr>';
    foreach ($columns as $key => $label) {
        echo '<td>' . $item[$key] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>