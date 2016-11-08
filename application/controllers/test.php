<?php 
class test extends CI_controller{

	public function index(){
		//echo "test";
		$this->load->model('test_model');
		$this->test_model->cantidad();
	}

}
?>