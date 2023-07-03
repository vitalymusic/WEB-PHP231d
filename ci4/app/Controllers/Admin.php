<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct(){
        $this->title = "Administration Panel";
        $this->session = session();
    }
    public function index()
    {
        if(!$this->session->logged_in){
            return redirect()->to('/login');
        }
    $data["title"]=$this->title;
    $data["main_menu"] = [
        [
            "url" =>base_url()."addUser",
            "menu_name"=>"New User"
        ],
        [
            "url" =>base_url()."login",
            "menu_name"=>"Login"
        ],
        [
            "url" =>base_url()."logout",
            "menu_name"=>"Logout"
        ],
        
    ];


   
        //
        echo view('admin/header',$data);
        echo view('admin/main_screen',$data);
        echo view('admin/admin_scripts');
    }


    public function addUser(){
            helper('form');
        $data["title"]=$this->title;

        echo view('admin/header',$data);
        echo view('admin/adduserform');
        echo view('admin/admin_scripts');
    }


    public function saveUser(){
        $db = db_connect();
        $builder = $db->table('users');
        $data = [
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "email" => "username@user.com",
            "user_bio" => $this->request->getPost('user_bio')
        ];
        
        if($builder->insert($data)){
            // return "Saved Data";
            return redirect()->to('/admin');
        }
    }

    public function login(){
        $data["errors"] = "";

        helper('form');
        $data["title"]="Login";

        echo view('admin/header',$data);
        echo view('admin/login_screen');
        echo view('admin/admin_scripts');
    }

    public function checkUser(){

        $db = db_connect();
        $builder = $db->table('users');
        $builder->where('username', $this->request->getPost('username')); 
        $builder->where('password', $this->request->getPost('password')); 
        $query = $builder->get();
        
        $result = $query->getResult();
        if($result){
            // return print_r($result[0]);
            $this->session->set('logged_in',true);
            // 
            $this->session->set('username',$result[0]->username);
            return redirect()->to('/admin');
        }else{
            $this->session->destroy();
            return redirect()->to('/login');

        }


    }
}
