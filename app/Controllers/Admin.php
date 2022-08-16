<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/home');
    }

    public function home(){
        return view('admin/home');
    }

    public function logout(){
        return view('admin/logout');
    }

    public function processLogout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function addCategory(){
        return view('admin/add_category');
    }

    public function editCategory(){
        return view('admin/edit_category');
    }

    public function addProduct(){
        return view('admin/add_product');
    }
}