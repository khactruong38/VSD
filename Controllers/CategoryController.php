<?php

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }
    public function index()
    {
       
        $pageTitle = 'danh sách sản phẩm';
        $categories = $this->categoryModel->getAll(['*'],['id','desc']);
        
        
        return $this->view('frontend.categories.index',[
            'categories' => $categories,
            'pageTitle' => $pageTitle

        ]);
    }
    public function store()
    {

    }
    public function update()
    {
        $id = $_GET['id'];
        $data = [
            'name'=>'oppo',
        ];
        $this->categoryModel->updateData($id,$data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->categoryModel->deleteData($id);
    }
    public function show()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->findById($id);
        print_r($category);
        
    }
}