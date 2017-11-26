<?php
	include_once('../paths.php');
	
	session_destroy();
?>
<script>
	alert('Logout realizado com sucesso!');
	window.location.href='<?php echo $path_raiz; ?>';
</script>