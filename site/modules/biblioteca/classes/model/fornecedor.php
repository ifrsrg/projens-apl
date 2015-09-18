<?php

class Model_Fornecedor extends ORM {
	
	function getLista($where = array(), $limit = null, $offset = null, $order_by = array()){
		
		$this->select(array("fornecedor_categoria.nome","categoria"));
		
		$this->join("fornecedor_categoria")->on("id_fornecedor_categoria","=","id_categoria");
		
		foreach($where as $condition)
			$this->where($condition[0], $condition[1], $condition[2]);
		
		if($limit != null)
			$this->limit($limit);
		
		if($offset != null)
			$this->offset($offset);


		foreach($order_by as $order)
			$this->order_by($order[0], $order[1]);
		
		return $this->find_all()->as_array();
	}
	
	function getCount($where = array()){
		foreach($where as $condition)
			$this->where($condition[0], $condition[1], $condition[2]);
		
		return $this->count_all();
	}
}