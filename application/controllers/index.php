<?php
    class Index extends CI_Controller {

        //与类名相同的，会被php当作构造方法
        //相当于__construct(){}
        public function index(){
            echo 'index控制器的index方法<br>';
        }
        public function index2(){
            echo 'index控制器的index2方法';
        }
    }