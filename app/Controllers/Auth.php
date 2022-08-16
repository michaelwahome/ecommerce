<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/register');
    }

    public function login(){
        return view('auth/login');
    }

    public function adminLogin(){
        return view('auth/admin_login');
    }

    public function register(){
        return view('auth/register');
    }

    public function allowLogin($email = null){
        $email = $_POST["email"];
        $model = new AuthModel();

        $data['user'] = $model->getUser($email);

        if (empty($data['user']))
        {
            return view('auth/login');
        }
        else {
            if($data['user']['is_deleted'] == 0){
                $password = $_POST['password'];
                $hash = $data['user']['password'];
                if(password_verify($password, $hash)){
                    $session=session();
                    $user = [
                            'fname'  => $data['user']['first_name'],
                            'lname'  => $data['user']['last_name'],
                    ];
                    $session->set($user);
                    return redirect()->to('/users/home');
                }
                else{
                    return view('auth/login');
                }
            }
            else{
                return view('auth/login'); 
            }   
        }  
    }

    public function allowAdminLogin($email = null){
        $email = $_POST["email"];
        $model = new AuthModel();

        $data['user'] = $model->getUser($email);

        if (empty($data['user']))
        {
            return view('auth/admin_login');
        }
        else {
            if($data['user']['is_deleted'] == 0){
                if($data['user']['role'] == 3){
                    $password = $_POST['password'];
                    $hash = $data['user']['password'];
                    if(password_verify($password, $hash)){
                        $session=session();
                        $user = [
                                'fname'  => $data['user']['first_name'],
                                'lname'  => $data['user']['last_name'],
                        ];
                        $session->set($user);
                        return view('/admin/home');
                    }
                    else{
                        return view('auth/admin_login');
                    }
                }
                else{
                    return view('auth/admin_login');
                }
            }
            else{
                return view('auth/admin_login'); 
            }   
        } 
    }

    public function registerCustomer(){
        $model = new AuthModel();

        if ($this->request->getMethod() === 'post') {
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $model->save([
                'first_name' => $_POST['fname'],
                'last_name' => $_POST['lname'],
                'email' => $_POST['email'],
                'password' => $hash,
                'gender' => $_POST['gender'],
                'role' => 1,
                'is_deleted' => 0,
            ]);

            $session=session();
            $user = [
                    'fname'  => $_POST['fname'],
                    'lname'  => $_POST['lname'],
            ];
            $session->set($user);

            return view('users/home');

        } else {
            return view('auth/register');
        }
    }

}