<?php

class Animalquiz {

	protected $db;
	protected $input;

	public function __construct() {

		if(!isset($this->db)){
			$this->db = mysqli_connect('localhost','root','','mysite') or die('Error: ' . mysqli_error($this->db));
		}	
		$this->data_inputs();
	}
	
	private function data_inputs(){
		parse_str(file_get_contents('php://input'),$this->input);
	}

	public function get_animals() {
	
		$sql = "select * from animals";
		$data = $this->db->query($sql);
		$rows = array();
		while($row = $data->fetch_object()){
			$rows[] = $row;
		}
		
		shuffle($rows);
		return $rows;

	}
	
	private function _get_selected_records($aId = array()) {
		$aId = implode(',',$aId);
		$sql = "select * from animals where id IN($aId)";
		$data = $this->db->query($sql);
		$rows = array();
		while($row = $data->fetch_object()){
			$rows[] = $row;
		}
			
		return $rows;
	}
	
	
	function get_selected($record_id){
	
		$range = range(1,90);
		shuffle($range);
		
		$result = array_slice($range,1,5);
		$i = 0;
		$aId = array($record_id);
		foreach($result as $val) {
		
			if($record_id != $val){
			
				$aId[] = $val;
				$i++;
				
				if($i == 3){
				break;
				}		
			}
		}

		return  $this->_get_selected_records($aId);	
	}
	
	
	private function _get_correct_answer($id) {
		return $this->db->query("select animal from animals where id = {$id}")->fetch_object();

	}
	
	public function up_to($num) {
	
		$data = $this->get_animals();
		$handler = array();
		
		for($i = 0; $i <= $num-1; $i++){
			$data[$i]->choices = $this->get_selected($data[$i]->id);
			$handler[] = $data[$i];

		}
		shuffle($handler);
		echo json_encode($handler);
		
	}
	
}