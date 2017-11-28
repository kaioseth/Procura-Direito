<?php
	function salva_auditoria($conexao,$id_usuario,$acao,$descricao,$texto_material,$id_material){
		$sql = "INSERT INTO auditorias ( id_usuario,
										 data_registro,
										 acao,
										 descricao,
										 texto_material,
										 id_material )
								VALUES ( ".$id_usuario.",
										 CURRENT_DATE,
										 '".$acao."',
										 '".$descricao."',
										 '".$texto_material."',
										 ".$id_material." )";
		if( mysqli_query( $conexao,$sql ) ){
			return 1;
		}else{
			return 0;
		}
	}
?>