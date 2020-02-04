<?php
class  Cotxe {
	var $matricula;
	var $marca;
	var $model;
	var $velocitat;
	function accelerar(){
		$this->velocitat++;
	}
	function frenar() {
		$this->velocitat--;
	}
	function getVelocitat(){
		return $this->velocitat;
	}
	function Cotxe($mar, $mode){
		$this->velocitat=10;
		$this->marca=$mar;
		$this->model=$mode;
	}
}

$x=new Cotxe("Seat","ibiza");
var_dump($x);
?>
