<?php
	
	abstract class Pessoa{

		private $nome;
		private $cpf;		
		private $login;
		private $senha;		
		private $tipoUsuario;
		private $endereco;
		private $contato;

		public function__construct($nome, $cpf, $login $senha, $tipoUsuario, Endereco $endereco, Contato $contato){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->login = $login;
			$this->senha = $senha;
			$this->tipoUsuario = $tipoUsuario;
			$this->endereco = $endereco;
			$this->contato = $contato;
		}
	
		public function getNome(){
			return $this->nome;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function geContato(){
			return $this->contato;
		}

		public funcion setNome($nome){
			$this->nome;
		}
		public funcion setCpf($cpf){
			$this->cpf;
		}
			public funcion setEmail($login){
			$this->login;
		}
		public funcion setSenha($senha){
			$this->senha;
		}
		public funcion setTipoUsuario($tipoUsuario){
			$this->tipoUsuario;
		}
		public funcion setEndereco($endereco){
			$this->endereco;
		}
		public funcion setContato($contato){
			$this->contato;
		}
?>