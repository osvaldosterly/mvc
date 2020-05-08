<?php

class About extends Controller {
    public function index($var1 = 'yes', $var2 = 'no', $var3 = 'nono'){
        $data['var1'] = $var1;
        $data['var2'] = $var2;
        $data['var3'] = $var3;
        $data['title'] = 'About Index';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['title'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}