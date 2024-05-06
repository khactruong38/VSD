<div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <h2><?php  echo $pageTitle;?></h2>
            </div>
            <div class="user-info">
                <img src="./Views/frontend/images/avatar.png" alt="" height="40px" width="40px">
            </div>
        </div>


        <div class="card-wraper">
            <div class="card-container">
                <div class="card-image">
                    <img src="./Views/frontend/images/card.png" height="60px" width="60px">
                </div>

                <div class="card-body">
                    <span class="card-title">Tổng số khách hàng</span>
                    <h3 class="card-content">1,899</h3>
                </div>
            </div>
            <div class="card-container">
                <div class="card-image">
                    <img src="./Views/frontend/images/card.png" height="60px" width="60px">
                </div>

                <div class="card-body">
                    <span class="card-title">Khách hàng mới</span>
                    <h3 class="card-content">1,899</h3>
                </div>
            </div>
            <div class="card-container">
                <div class="card-image">
                    <img src="./Views/frontend/images/card.png" height="60px" width="60px">

                </div>

                <div class="card-body">
                    <span class="card-title">Khách hàng tiềm năng</span>
                    <h3 class="card-content">1,899</h3>
                </div>
            </div>
            <div class="card-container">
                <div class="card-image">
                    <img src="./Views/frontend/images/card.png" height="60px" width="60px">

                </div>

                <div class="card-body">
                    <span class="card-title">KPI theo tháng</span>
                    <h3 class="card-content">999</h3>
                </div>
            </div>
        </div>

        <div class="task-bar">
            <div class="list-student-nav">
                <ul class="list-student-title">
                    <li><a href="">HS mới</a></li>
                    <li><a href="">HS hẹn gọi lại</a></li>
                    <li><a href="">HS tiềm năng</a></li>
                    <li><a href="">HS thành công</a></li>
                </ul>
            </div>

            <div class="search-bar">
                <form action="">
                    <input type="text" placeholder="Tìm kiếm" name="search">
                </form>
                <button type="submit"><i class="fa fa-search"></i><span>Tìm kiếm</span></button>
            </div>


            <div class="action-bar">
                <div class="dropdown-menu">
                    <button class="dropbtn">Hành động</button>
                    <div class="dropdown-title">
                        <a href="">Xuất Excel</a>
                        <a href="">Import Excel</a>
                        <a href="">Xóa nhiều</a>
                        <a href="">Chuyển lead</a>
                    </div>
                </div>

               
                    <!-- <a href="index.php?controller=' . $_REQUEST['controller'] . '&action=show" class="add-action-btn">Tạo mới</a> -->
                    <!-- <button><a href="index.php?controller=' . $_REQUEST['controller'] . '&action=show"><div class="menu-item"><div class="menu-text text-dark">Tạo mới</div></div></a></button> -->

                    <?php echo '<button class="action dropbtn" ><a class="add-action-btn" href="index.php?controller=' . $_REQUEST['controller'] . '&action=show"><div class="menu-item"><div class="menu-text text-light">Tạo mới</div></div></a></button>'; ?>
                
            </div>

        </div>


        <?php


// Hiển thị bảng sản phẩm
echo '<table class="table-student" border="1">';
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
echo '</div>';

echo '<script>';
echo 'function confirmDelete(id) {';
echo 'if (confirm("Bạn có chắc chắn muốn xóa không?")) {';
echo 'window.location.href = "index.php?controller=' . $_REQUEST['controller'] . '&action=delete&id=" + id;';
echo '}';
echo '}';
echo '</script>';
?>



