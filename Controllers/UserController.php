<?php

class UserController extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->loadModel('userModel');
        $this->userModel = new userModel;
    }
    public function index()
    {
        $select = [
        'id',
        'name',
        'tel',
        'address'];
        $orders = [
            'column'=>'id',
            'order'=>'desc'];
        $users = $this->userModel->getAll($select,$orders);
        
        return $this->view('frontend.users.index',[
            'pageTitle' => "trang người dùng",
            'users'=>$users,

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