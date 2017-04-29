<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//welcome/index/5/jack
	public function index()
	{
		//控制器对象，超级对象
		// var_dump($this->load); 

		//CI会自动实例化一个CI_Loader的对象，放在超级对象的属性中
		//下面的代码帮助大家理解$this->load属性
		// $obj = new CI_Loader();
		// $this->load=$obj;
		// $this->load->view('welcome_message');
		// echo $id;
		// echo $name;
		// echo $_GET['id'];
		// echo $this->uri->segment(4);
		// var_dump($this->uri);
		$this->load->view('welcome_message');
		// var_dump($this->input);
		// var_dump($_SERVER);
		// echo $this->input->server('REMOTE_ADDR');
	}
	public function test()
	{
		echo 'test';
	}
}
