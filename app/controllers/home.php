<?php

    
    class Home extends Controller
    {

        public function index()
        {
            // echo view('home');
            // $data['page_title'] = "Home";
            $this->view("home");
        }

    }


?>