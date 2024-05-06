<?php

class ProductController extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }
    public function index()
    {
        $select = [
        'id',
        'name',
        'price',
        'category_id'];
        $orders = [
            'column'=>'id',
            'order'=>'desc'];
        $products = $this->productModel->getAll($select,$orders);
        // Các cột bạn muốn hiển thị ở trang index

        $columns = [
            'name' => ['label' => 'Name', 'width' => '200px'],
            'price' => ['label' => 'Price', 'width' => '150px'],
            'category_id' => ['label' => 'Category ID', 'width' => '100px']
        ];
        
        
        return $this->view('frontend.products.index',[
            'pageTitle' => "Trang sản phẩm",
            'columns' => $columns,
            'products'=>$products,

        ]);
        
    }
    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy dữ liệu từ form và lưu vào mảng $data
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'category_id' => $_POST['category_id']
            ];
        
            // Xử lý dữ liệu ở đây, ví dụ: lưu vào cơ sở dữ liệu, xử lý logic, v.v.
            // Ví dụ: in ra mảng dữ liệu
        }
        $this->productModel->store($data);
        $this->index();
    }
    public function update()
    {
        $id = $_POST['id'];
        $data = [
            'name'=> $_POST['name'],
            'price'=> $_POST['price'],
            'image'=> null,
            'category_id' =>$_POST['category_id']
        ];
        $this->productModel->updateData($id,$data);
        $this->index();
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->productModel->deleteData($id);
        $this->index();

    }
    public function show()
    {
        return $this->view('frontend.products.show');
    }
    public function findById()
    {
        $products = $this->productModel->find($_GET['controller']."s",$_GET['id']);
        // Các cột bạn muốn hiển thị ở trang edit
        $columns = [
            'name',
            'price',
            'category_id'];
        return $this->view('frontend.products.edit',[
            'pageTitle' => "Trang sản phẩm",
            'columns' => $columns,
            'products'=>$products,

        ]);
        
    }
}