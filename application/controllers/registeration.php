<?php 
	class Registeration extends  CI_Controller {

		//private $mdb =  
		public function view($page = "register")
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			//$this->load->library('mongo_db');
			
			$data["title"] = $page;
			$data["main_content"]  = 'pages/'.$page;
			$this->load->view('templates/template',$data);
		}


		public function register_camper(){
			$this->load->helper('url');
			$data = $this->input->post();
			$this->load->library('mongo_db');
			$id = $this->session->userdata("id") ;
			$email = $this->session->userdata("email_log");
			
			$occupation = array();
			$type = $occupation["type"] = $data["occupation"];
			
			if($type=="student"){
				if($data["school"]=="other"){
					$occupation["school"] = $data["other_school"];
					unset($data["other_school"]);

					//do the same for location
					
				}else {
					$occupation["school"] = $data["school"];	
				}
				

				if($data["school_location"]=="other"){
					$occupation["school_location"] = $data["other_school_location"];
					unset($data["other_school_location"]);
				}else {
					$occupation["school_location"] = $data["school_location"];
				}

				//check for school status
				$occupation["schoolStatus"] = $data["schoolStatus"];

				//check for other_school
				$occupation["educationalLevel"] = $data["educationalLevel"];
			}

			unset($data["school"]);
			unset($data["school_location"]);
			unset($data["educationalLevel"]);
			unset($data["schoolStatus"]);

			$data["occupation"] = $occupation;
			$ch = trim($data["church"]);
			
			
			$church = array();
			if($ch== "other" ){
				$church["type"] = "other";
				$church["name"] =  $data["otherChurch"];
			}
			else {
				$church["type"] = "default";
				$church["name"] =  $ch;
			}

			
			$data["church"] = $church;

			$parental_info  = array(
				"fathers_name" => $data["fathers_name"],
				"fathers_cell_number" => $data["fathers_cell_number"],
				"fathers_office_number" => $data["fathers_office_number"],
				
				"mothers_name" => $data["mothers_name"],
				"mothers_cell_number" => $data["mothers_cell_number"],
				"mothers_office_number" => $data["mothers_office_number"]
			);


			unset($data["fathers_name"]);
			unset($data["fathers_cell_number"]);
			unset($data["fathers_office_number"]);
			unset($data["mothers_name"]);
			unset($data["mothers_cell_number"]);
			unset($data["mothers_office_number"]);
			$data["parentalInfo"] = $parental_info;

			
			$data["dateOfBirth"]  = $data["year"]."-". $data["month"] .'-' . $data["day"];

			//generate a unique code
			$fname = $data["firstName"];
			$lname = $data["lastName"];
			$data["registrationCode"]  = $this->generate_code($fname, $lname);

			try{
				$data["has_registered"] = true;
				$data["date_registered"]  = date("Y-m-d H:i:s");
				$this->mongo_db->where(
					array("email"=>$email, "_id"=>new MongoId($id))
					)->update('campers', $data);
			}catch (MongoConnectionException $e) {
				//print_r($e);
			}catch (MongoException  $e) {
				//print_r($e);
			}

			redirect('site/');
		}

		public function  confirm_signup($key){
			//$this->view("conf_signup");
		}

		private function generate_code($fname, $lname){
			$date  =  date("Y-m-d H:i:s");
			$short =  md5($date);
			$code  =  $fname[0] . $lname[0].substr($short,0,6);
			return strtoupper($code);	
		}

		
	}
 ?>