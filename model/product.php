<?php
class product{
	var $ = null;
	public function __construct(){
		if (func_num_args()==){
			$this-> = func_get_args();
		}
	}
	public function getlish(){
		$db = new connect();
		$strquery = "select * from";
		$r = $db->getlist($strquery);
		return $r;

	}
	public function getproductbyid(){
		$db = new connect();
		$strquery = "";
		$r = $db->getproductbyid($strquery);
		return $r;
	}
}
?>