<?php

class User extends Controller {
    public function index(){
        $data['title'] = 'User List';
        $data['auser'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['title'] = 'User Detail';
        $data['auser'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }
}