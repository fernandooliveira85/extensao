<?php
	Abstrac class Contato{

	private $email;
	private $telefone;
	private $celular;

	public function__construct($email, $telefone, $celular){
		$this->email = $email;
		$this->telefone = $telefone;
		$this->celular = $celular;
	}
	
	public funcion getEmail(){
		return $this->email;
	}
	public funcion getTelefone(){
		return $this->telefone;
	}
	public funcion getCelular(){
		return $this->celular;
	}
	public funcion setEmail($email){
		$this->email;
	}
	public funcion setTelefone($telefone){
		$this->telefone;
	}
	public funcion setCelular($celular){
		$this->celular;
	}

	}
?>