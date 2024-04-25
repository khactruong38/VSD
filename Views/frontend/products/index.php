<?php
echo '<div style="padding-left: 240px;">';
echo $pageTitle;

// Hiển thị bảng sản phẩm
echo '<table border="1">';
echo '<tr>';
foreach ($columns as $key => $config) {
    echo '<th style="width: ' . $config['width'] . '">' . $config['label'] . '</th>';
}
echo '<th>Chỉnh sửa</th><th>Xóa</th>';
echo '</tr>';

// Thêm nút Chỉnh sửa và Xóa vào mỗi hàng
foreach ($products as $item) {
    echo '<tr>';
    foreach ($columns as $key => $config) {
        echo '<td>' . $item[$key] . '</td>';
    }
    echo '<td><a href="index.php?controller=' . $_REQUEST['controller'] . '&action=findById&id=' . $item['id'] . '">Chỉnh sửa</a></td>';
    echo '<td><a href="javascript:void(0);" onclick="confirmDelete(' . $item['id'] . ');">Xóa</a></td>';
    echo '</tr>';
}
echo '</table>';
echo '<button><a href="index.php?controller=' . $_REQUEST['controller'] . '&action=show"><div class="menu-item"><div class="menu-icon">📊</div><div class="menu-text text-dark">Thêm</div></div></a></button>';
echo '</div>';

echo '<script>';
echo 'function confirmDelete(id) {';
echo 'if (confirm("Bạn có chắc chắn muốn xóa không?")) {';
echo 'window.location.href = "index.php?controller=' . $_REQUEST['controller'] . '&action=delete&id=" + id;';
echo '}';
echo '}';
echo '</script>';