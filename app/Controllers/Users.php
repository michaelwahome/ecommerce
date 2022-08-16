<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();

        $data['categories'] = $model->getCategories();
        return view('users/home', $data);
    }

    public function test(){
        $model = new CategoryModel();

        $data['categories'] = $model->getCategories();
        return view('users/test', $data);
    }

    public function home(){
        $model = new CategoryModel();

        $data['categories'] = $model->getCategories();
        return view('users/home', $data);
    }

    public function oldhome(){
        return view('users/oldhome');
    }

    public function logout(){
        return view('users/logout');
    }

    public function processLogout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function subcategories($id = "false"){
        $model = new SubCategoryModel();

        $data['subcategories'] = $model->getSubCategories($id);
        return view('users/subcategory', $data);
    }

    public function products($id = false){
        
    }

}