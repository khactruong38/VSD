<?php

class UserController extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
    }
    public function index()
    {
        $select = [
        'id',
        'name',
        'email',
        'ngaysinh',
        'tel',
        'address',
        'gioitinh',
    ];
        $orders = [
            'column'=>'id',
            'order'=>'desc'];
        $users = $this->userModel->getAll($select,$orders);
        // Các cột bạn muốn hiển thị ở trang index

        $columns = [
            'name' => ['label' => 'Họ tên', 'width' => '200px'],
            'email' => ['label' => 'Email', 'width' => '150px'],
            'tel' => ['label' => 'SDT', 'width' => '150px'],
            'ngaysinh' => ['label' => 'Ngày sinh', 'width' => '100px'],
            'address' => ['label' => 'Địa chỉ', 'width' => '100px'],
            'gioitinh' => ['label' => 'Giới tính', 'width' => '100px'],
        ];
        
        
        return $this->view('frontend.users.index',[
            'pageTitle' => "Quản lý học sinh",
            'columns' => $columns,
            'users'=>$users,

        ]);
        
    }
    public function store()
    {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $columns = [
                'name' => ['label' => 'Họ tên', 'width' => '200px'],
                'email' => ['label' => 'Email', 'width' => '150px'],
                'tel' => ['label' => 'SDT', 'width' => '150px'],
                'ngaysinh' => ['label' => 'Ngày sinh', 'width' => '100px'],
                'address' => ['label' => 'Địa chỉ', 'width' => '100px'],
                'gioitinh' => ['label' => 'Giới tính', 'width' => '100px'],
                'idvaitro' => ['label' => 'Vai trò', 'width' => '100px'],
            ];
            // Lấy danh sách các keys của mảng $columns
            $columnKeys = array_keys($columns);

            // Khởi tạo mảng $data
            $data = [];

            // Lặp qua các keys và lấy dữ liệu từ $_POST
                foreach ($columnKeys as $key) {
                    if (isset($_POST[$key])) {
                      $data[$key] = $_POST[$key];
                }
}

        
            // Xử lý dữ liệu ở đây, ví dụ: lưu vào cơ sở dữ liệu, xử lý logic, v.v.
            // Ví dụ: in ra mảng dữ liệu
        }
        $this->userModel->store($data);
        $this->index();
    }
    public function update()
    {
        $columns = [
            'name' => ['label' => 'Họ tên', 'width' => '200px'],
            'email' => ['label' => 'Email', 'width' => '150px'],
            'tel' => ['label' => 'SDT', 'width' => '150px'],
            'ngaysinh' => ['label' => 'Ngày sinh', 'width' => '100px'],
            'address' => ['label' => 'Địa chỉ', 'width' => '100px'],
            'gioitinh' => ['label' => 'Giới tính', 'width' => '100px'],
            'idvaitro' => ['label' => 'Vai trò', 'width' => '100px'],
        ];
        // Lấy danh sách các keys của mảng $columns
        $columnKeys = array_keys($columns);

        $id = $_POST['id'];
        foreach ($columnKeys as $key) {
            if (isset($_POST[$key])) {
              $data[$key] = $_POST[$key];
        }
        }
        $this->userModel->updateData($id,$data);
        $this->index();
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->userModel->deleteData($id);
        $this->index();

    }
    public function show()
    {
        $columns = [
            'name' => ['label' => 'Họ tên', 'width' => '200px'],
            'email' => ['label' => 'Email', 'width' => '150px'],
            'tel' => ['label' => 'SDT', 'width' => '150px'],
            'ngaysinh' => ['label' => 'Ngày sinh', 'width' => '100px'],
            'address' => ['label' => 'Địa chỉ', 'width' => '100px'],
            'gioitinh' => ['label' => 'Giới tính', 'width' => '100px'],
            'idvaitro' => ['label' => 'Vai trò', 'width' => '100px'],
        ];
        return $this->view('frontend.users.show',[
            'pageTitle' => "Quản lý học sinh",
            'columns' => $columns,
        ]);
    }
    public function findById()
    {
        $users = $this->userModel->find($_GET['controller']."s",$_GET['id']);
        // Các cột bạn muốn hiển thị ở trang edit
        $columns = [
            'name' => ['label' => 'Họ tên', 'width' => '200px'],
            'email' => ['label' => 'Email', 'width' => '150px'],
            'tel' => ['label' => 'SDT', 'width' => '150px'],
            'ngaysinh' => ['label' => 'Ngày sinh', 'width' => '100px'],
            'address' => ['label' => 'Địa chỉ', 'width' => '100px'],
            'gioitinh' => ['label' => 'Giới tính', 'width' => '100px'],
            'idvaitro' => ['label' => 'Vai trò', 'width' => '100px'],
        ];
        return $this->view('frontend.users.edit',[
            'pageTitle' => "Trang sản phẩm",
            'columns' => $columns,
            'users'=>$users,

        ]);
        
    }
}