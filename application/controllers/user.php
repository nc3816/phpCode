<?php
    class User extends CI_Controller {

        public function showusers() {
            //装载数据库操作类
            $this->load->database();
            //装载成功后，会放入超级对象的属性中，默认属性名是db
            // var_dump($this->db);
            $sql='select * from blog_user';
            $res = $this->db->query($sql);//mysql_query()
            // var_dump($res);返回值是一个对象
            $users=$res->result();
            // echo'<pre>';
            // var_dump($users);
            $data['user_listss']=$users;
            $this->load->view('user/showusers',$data);
        }

        public function index() {
            // echo 'user------index';

            //分配变量
            //$this->assign('key','value'); //smarty中

            $this->load->vars('title','这是标题');

            $list=array(
                array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
                array('id'=>2,'name'=>'mary','email'=>'mary@gmail.com'),
                array('id'=>3,'name'=>'lili','email'=>'lili@gmail.com'),
            );

            $data['title'] = '这是标题';
            $data['list'] = $list;
            $this->load->vars($data);
            $this->load->view('header');
            // $this->load->view('user_index');//加载根目录中的视图
            $this->load->view('user/index');//加载子目录中的视图
        }
        //不能被浏览器请求
        protected function test() {
            echo 'test';
        }
        //以下划线开关的方法，不能被请求
        public function _test1() {
            echo 'test1';
        }

        //
        public function test2() {
            $this->_test1();
        }
    }