<?php
include_once "config.php";

class Api extends Config {
	
	public function __construct() {
		parent::__construct(__CLASS__);
	}

	public function getCustomers($id = null, $flag = false) {

		$sql = (!$id) ? "select * from calling_card" : "select * from calling_card where id  = {$id}";
		$data = $this->db->query($sql);
		$rows = array();
		if(!$id){
			while($row = $data->fetch_assoc()) {
			$rows[] = $row;
			}
		}else{
			$rows = $data->fetch_assoc();
		}
		
		if($flag == false){
			echo json_encode($rows);
		}else{
			return json_encode($rows);
		}
		
	}

	public function getOrders($id = null) {

		$customers = json_decode($this->getCustomers($id,true),true);
		if($id){
			$customers['orders'] = $this->_getOrders($customers['id']);
		}else{
			foreach($customers as $key => $customer) {
				$customers[$key]['orders'] = $this->_getOrders($customer['id']);
			}
		}
		echo json_encode($customers);
	}

	private function _getOrders($id) {
		$sql = "select a.*,b.product,b.price from calling_card_order a
				left join calling_card_product b on a.product_id = b.id
				where a.cust_id = {$id}";
		$data = $this->db->query($sql);
		$rows = array();
		while($row = $data->fetch_assoc()){
			$rows[] = $row;
		}
		return $rows;
	}

	public function getProducts($id = null) {
		$sql = "select * from calling_card_product";
		if($id){
			$sql = $sql . " where id = {$id}";
		}
		$data = $this->db->query($sql);
		$rows = array();
		if(!$id){
			while($row = $data->fetch_assoc()) {
			$rows[] = $row;
			}
		}else{
			$rows = $data->fetch_assoc();
		}
		echo json_encode($rows);

	}


	public function save($id = null) {
	
		switch($this->data->page) {
			case 'customer' :
			$this->_saveCustomer($this->data, $id);
			break;

			case 'order' :
			$this->_saveOrder($this->data);
			break;

			case 'product' :
			$this->_saveProduct($this->data, $id);
		}
		
	}

	private function _saveCustomer($data, $id = null) {

		if($id && $this->method == 'PUT'){
			$sql = "update calling_card set 
					first_name = '{$data->first_name}',
					last_name = '{$data->last_name}',
					address = '{$data->address}',
					contact_no = '{$data->contact_no}',
					email = '{$data->email}'
					where id = {$id}";
		}else{
			$sql = "insert into calling_card (`first_name`,`last_name`,`address`,`contact_no`,`email`,`date`)
					values('$data->first_name','$data->last_name','$data->address','$data->contact_no','$data->email',NOW())";
		}
		echo $this->db->query($sql);
	}

	private function _saveOrder($data) {

		$sql = "insert into calling_card_order (`cust_id`,`product_id`,`quantity`,`date`)
				values('$data->cust_id','$data->product_id','$data->quantity',NOW())";
		echo $this->db->query($sql);
	}

	private function _saveProduct($data, $id = false) {

		if($id && $this->method == 'PUT'){
			$sql = "update calling_card_product set 
					product = '{$data->product}',
					price = '{$data->price}'
					where id = {$id}";
		}else{
			$sql = "insert into calling_card_product (`product`,`price`,`date`)
					values('$data->product','$data->price',NOW())";
		}
		echo $this->db->query($sql);
	}

	public function delete($id = null,$page = null) {

		if($id) {
			if($page == 'customer'){
				$sql = "delete from calling_card_order where cust_id = {$id}";
				$sql2 = "delete from calling_card where id = {$id}";
			}elseif($page == 'product'){
				$sql = "delete from calling_card_order where product_id = {$id}";
				$sql2 = "delete from calling_card_product where id = {$id}";	
			}
			$this->db->query($sql);
			echo $this->db->query($sql2);
		}
	}

}

$Api = new Api();