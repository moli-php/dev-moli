<?php

class Config {

	protected $db;
	protected $data;
	protected $method;

	public function __construct($class) {

		//set reqeust data
		$this->_setRequest();

		//get method type
		$this->method = $_SERVER['REQUEST_METHOD'];
		// set db
		if(!isset($this->db)){
			$this->db = mysqli_connect('localhost','root','','test') or die('Error: ' . mysqli_error($this->db));
		}

		$this->_routes($class);
	}

	private function _setRequest() {
		$this->data = json_decode(file_get_contents('php://input'));
		// if(!$this->data)
		// 	$this->data = (object) $_REQUEST;
	}


	private function _routes($cls) {


		$base_url = dirname($_SERVER['PHP_SELF']);
		$req_url = trim(str_replace($base_url, '',$_SERVER['REQUEST_URI']), "/");
		$params = explode("/",$req_url);

		if(count($params) > 0){
			$class = $params[0];
			$method = isset($params[1]) ? $params[1] : "";
			$id = isset($params[2]) ? $params[2] : "";
			$param = isset($params[3]) ? $params[3] : "";

			if(strtolower($class) === strtolower($cls)){
				$this->_set_method($method,$id,$param);
			}

		}else{
			echo 'Error 400 : Bad Request';
		}
		
	}

	private function _set_method($method = "",$id = "", $param = "") {
		
		 $method = str_replace(" ","",$method);
		 $aReserved = array('_set_method','__construct','_routes','get_request');
		 
		 if(in_array($method,$aReserved)){
		 	echo 'Error 405 : Method Not Allowed';
		 	exit;
		 }

		 if(method_exists($this, $method)){
		 		$this->$method($id,$param);
		 }else{
		 	echo 'Error 400 : Bad Request';
		 	exit;
		 }
	
	}
	

	protected function get_request() {
		$data = json_decode(file_get_contents("php://input"));
		return $data;
	}

}