<div style ="padding-left:240px">
<?php
    echo $pageTitle;
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // echo '<pre>';
    // print_r($products);
    // echo '</pre>';
 

// Các cột bạn muốn hiển thị
$columns = array(
    'id' => 'ID',
    'name' => 'Name',
    'tel' => 'Tel',
    'address' => 'Address'
);

// Hiển thị bảng sản phẩm
echo '<table border="1">';
echo '<tr>';
foreach ($columns as $key => $label) {
    echo '<th>' . $label . '</th>';
}
echo '</tr>';
foreach ($users as $item) {
    echo '<tr>';
    foreach ($columns as $key => $label) {
        echo '<td>' . $item[$key] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</div>