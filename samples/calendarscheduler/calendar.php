<?php

class Calendar {

	protected $_view;
	protected $db;
	protected $input;

	public function __construct(){

		if(!isset($this->db)){
			$this->db = mysqli_connect('localhost','root','','mysite') or die('Error: ' . mysqli_error($this->db));
		}
		
		$this->data_inputs();
	}
	
	private function data_inputs(){
		parse_str(file_get_contents('php://input'),$this->input);
	}

	public function get_data() {
		$sql = "select * from calendar";
		$data = $this->db->query($sql);

		$rows = array();
		while($row = $data->fetch_object()){
			$rows[] = $row;
		}
		echo json_encode($rows);
	}
	
	public function get_by_date_record() {

		$data = $this->db->query("select * from calendar where `date` = '{$this->input['search']}' order by `from_time` asc");
		$result = array();
		while($row = $data->fetch_object()){
			$result[] = $row;
		}
		foreach($result as $ky => $val){
			$val->from_time = date("h:i A",strtotime($val->from_time));
			$val->to_time = date("h:i A",strtotime($val->to_time));
		}
		echo json_encode($result);
	}
	
	public function add_record() {
	
		$aData['event'] = $this->input['event'];
		$aData['from_time'] = date('H:i:s',strtotime($this->input['from']));
		$aData['to_time'] = date('H:i:s',strtotime($this->input['to']));
		$aData['location'] = $this->input['location'];
		$aData['date'] = $this->input['date'];
		$sql = "insert into calendar (event,from_time,to_time,location,date) values(
		'{$aData['event']}','{$aData['from_time']}','{$aData['to_time']}','{$aData['location']}','{$aData['date']}'
		)";
		$this->db->query($sql);
		echo $this->db->affected_rows;
	}
	
	public function delete_record() {
	$sql = "delete from calendar where id = '{$this->input['id']}'";
		$this->db->query($sql);
		echo $this->db->affected_rows;
	}
	
	public function update_record() {
		$sql = "update calendar set 
				`event` = '{$this->input['data']['event']}' ,
				`from_time` = '{$this->input['data']['from_time']}' ,
				`to_time` = '{$this->input['data']['to_time']}' ,
				`location` = '{$this->input['data']['location']}'
				where id = '{$this->input['id']}'
				";
		$this->db->query($sql);
		echo $this->db->affected_rows;
	}
	
	public function test() {
		$str1 = strtotime('01:30 PM');
		$str2 = date('H:i:s A',$str1);
	
		echo $str1;
		echo '<br>';
		echo $str2;
		echo '<br>';
		
	}
	
}
