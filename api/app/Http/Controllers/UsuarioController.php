<?php

namespace api_pd\Http\Controllers;

use Illuminate\Http\Request;

use app\Usuario;

use app\db;

class UsuarioController extends Controller{
    public function cadastrar(){
    	//$usuarios = DB::select("SELECT * FROM usuarios");
    	return "método cadastrar";
    }

    public function valida_login(){
    	/*$usuarios = DB::select("SELECT * FROM usuarios");

    	//$instance = new db();
		//$conexao = $instance->conecta_mysql();

    	if( mysqli_query( $conexao, $sql ) ){
		    echo 'Conexão Efetuada com Sucesso!';
		}else{
		    echo 'Erro ao conectar!';
		}*/

		$instance = new db();

    	return "método valida_login";
    }
}