<?php

namespace api_pd\Http\Controllers;

use api_pd\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller{
    public function cadastrar(){
    	//$usuarios = DB::select("SELECT * FROM usuarios");
    	
        /*$usuarios = \api_pd\Usuario::all();

        foreach ($usuarios as $u) {
            echo $u->nome.' <- nome <br><br>';
            # code...
        }*/

        return "método cadastrar";
    }

    public function valida_login(Request $request){
    	/*$users = DB::table('usuarios')->select('id, nome')->where([
                                                ["email", "=", '"'.$request->email.'"'],
                                                ['senha', '=', "'".$request->senha.'"'],
                                             ])->get();*/



    	//return "método valida_login com vars: ".$request->email." | ".$request->senha." || usuario: ";
        return "método valida login";
    }
}