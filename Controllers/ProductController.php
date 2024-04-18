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
        
        return $this->view('frontend.products.index',[
            'pageTitle' => "trang sản phẩm",
            'products'=>$products,

        ]);
    }
    public function store()
    {
        $data = [
            'name'=>'iphone13',
            'price'=>'30000000',
            'image'=> null,
            'category_id' =>2
        ];
        $this->productModel->store($data);
    }
    public function update()
    {
        $id = $_GET['id'];
        $data = [
            'name'=>'iphone15',
            'price'=>'52000000',
            'image'=> null,
            'category_id' =>2
        ];
        $this->productModel->updateData($id,$data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->productModel->deleteData($id);

    }
    public function show()
    {
        $product = $this->productModel->findById(12);
        return $this->view('frontend.products.show',[
            'product'=>$product,
        ]);
    }
}