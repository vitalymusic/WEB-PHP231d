<?php

namespace App\Controllers;

class Home extends BaseController
{

   public function  __construct(){
    $this->parser = \Config\Services::parser();
        $this-> menu = [
            [
                 "href" => "test",
                 "title"=> "Main Page"
             ],
             [
                 "href" => "page2",
                 "title"=> "Second Page"
             ],
            ];
    }
    public function index()
    {
        return view('admin/welcome_message');
    }

    public function test(){
        $data = [
            "title" => "Test page",
            "menu" => $this->menu,
        ];
        $footer = "footer text";
        $data[] = $footer;
        return view('main_view',$data);
    }
    public function page2(){
        $data = [
            "title" => "Page 2",
            "menu" => $this->menu
        ];
        $footer = "footer text";
        $data[] = $footer;
        return view('main_view',$data);
    }


    public function news($id=0){
        $data = [
            "title" => "Page 2",
            "menu" => $this->menu,
        ];

        $footer = "footer text";
        $data[] = $footer;
        $imgFolder = base_url('assets/img/');
        $news = [
            [
               "title"=>"News1",
               "content"=>"News 1 Content",
               "picture"=> $imgFolder . "img1.png"
            ],
            [
                "title"=>"News 2",
                "content"=>"News 2 Content",
                "picture"=>"img2.jpg"
             ]
            ];
        $data["news"] = $news[$id];
        return view('news_view',$data);
    }

    public function parse(){
        $data = [
            "title" => "Test Parse",
            "menu" => $this->menu,
        ];
        return $this->parser->setData($data)->render('main_view2');
    }
    public function database(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM `users`');
        $data["title"] = "database";
        $data["table"] = []; 
        // return var_dump($query);

        foreach ($query->getResult() as $row) {
            $data["table"][] = [
                "username"=>$row->username,
                "email"=>$row->email,
                "password"=>$row->password,
                "id"=>$row->id
            ];

        }


        // return var_dump($data);
        return $this->parser->setData($data)->render('database');
    }

    public function register(){
        $data["title"] = "форма Регистрации";
        helper('form');
        return view('register',$data);
    }

    public function save(){
        $db = db_connect();
        $builder = $db->table('users');
        $data = [
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "email" => $this->request->getPost('email'),
            "is_admin" => 0
        ];
        
        if($builder->insert($data)){
            // return "Saved Data";
            return redirect()->to('/database');
        }



        // var_dump($data);
    }

    public function edituser($id){
        $db = db_connect();
        $builder = $db->table('users');
        $query = $builder->where('id', $id)->get(); 
        $data["formData"] = [];
        foreach ($query->getResult() as $row) {
            $data["formData"] = [
                "username" =>$row->username,
                "password" =>$row->password,
                "email" =>$row->email,
                "id" =>$row->id
            ];
        }

        $data["title"] = "форма Регистрации";
        helper('form');
        return view('update',$data);



    }
    public function update(){
        $db = db_connect();
        $builder = $db->table('users');
        $data = [
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "email" => $this->request->getPost('email'),
            "is_admin" => 0
        ];

        $builder->where('id', $this->request->getPost('id')); 
        if($builder->update($data)){
            // return "Saved Data";
            return redirect()->to('/database');
        }



        // var_dump($data);
    }
    public function testSession(){
        $session = \Config\Services::session();

        $session->set('username', 'vitaly');
        $session->set('parameters',[]);
        $session->push('parameters',["main_menu"=>"show"]);
        $session->push('parameters',["title_h1"=>"show"]);

        return view('session');





    }

    public function uploadform(){
        return view('upload');
    }

    public function upload(){
        $file = $this->request->getFile('file');

        $result = $file->store('',$file->getClientName());
        if($result){
            echo "uploaded";
            // var_dump($file);
        };


        // if (! $file->hasMoved()) {
        //     $filepath = WRITEPATH . 'uploads/' . $img->store();

        //     $data = ['uploaded_fileinfo' => new File($filepath)];

        //     return view('upload_success', $data);
        // }

    }



    

}
