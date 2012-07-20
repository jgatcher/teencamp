<?php 
class Rules extends CI_Controller
{

	public function index () {
		$this->view();
		//$this->load->view("about");
	}

	public function  view (){
			
		$page = "camp_rules";
		$data["title"] = $page;
		$data["page"] =  $page;
		$data["main_content"]  = 'pages/'.$page;
		$this->load->view('templates/template',$data);
		
	}
}

 ?>