<?php
namespace api_pd;

use Illuminate\Database\Eloquent\Model;

class db extends Model{
    /*private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'procura_direito';

    public function conecta_mysql(){
    	$link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
    	//if (!$link) {echo 'sucesso!';}

        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
        //mysql_set_charset($con, 'utf8_general_ci');
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar conectar ao MySQL: '.mysqli_connect_error();
        }
        return $con;
    }*/
    /*public function db(){
    	echo 'dentro de db';
    }*/
}
