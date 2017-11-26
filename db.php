<?php
	class db{
	    private $host = 'localhost';
	    private $usuario = 'root';
	    private $senha = '';
	    private $database = 'procura_direito';

		
	    public function conecta_mysql(){
	    	$link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

	        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
	        //mysql_set_charset($con, 'utf8_general_ci');
	        if(mysqli_connect_error()){
	            echo 'Erro ao tentar conectar ao MySQL: '.mysqli_connect_error();
	        }
	        return $con;
	    }
	}
?>