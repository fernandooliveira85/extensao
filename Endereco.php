<?php
	abstract  class Endereco(){

		private $rua;
		private $numero;
		private $bairro;
		private $complemento;
		private $cidade;
		private $estado;

		public function__construct($rua, $numero, $bairro, $complemento, $cidade, $cidade, $estado{
		
			$this->rua = $rua;
			$this->numero = $numero;
			$this->bairro = $bairro;
			$this->complemento = $complemento;
			$this->cidade = $cidade;
			$this->estado = $estado;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getComplemento(){
		$	return $this->complemento;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setRua($rua){
			$this->rua;
		}
		public function setNumero($numero){
			$this->numero;
		}
		public function setBairro($bairro){
			$this->bairro;
		}
		public function setComplemento($complemento){
			$this->complemento;
		}
		public function setCidade($cidade){
			$this->cidade;
		}
		public function setEstado($estado){
			$this->estado;
		}
	}	
?>