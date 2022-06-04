<?php
	$flor1 = $_POST['flor1'];
	$flor2 = $_POST['flor2'];
	$flor3 = $_POST['flor3'];
	$flor4 = $_POST['flor4'];
	$flor5 = $_POST['flor5'];
	$flor6 = $_POST['flor6'];
	$flor7 = $_POST['flor7'];
	$flor8 = $_POST['flor8'];

	//Acesso banco de dados

	$rosa1 = 19.99;
	$rosa2 = 19.99;
	$rosa3 = 19.99;
	$rosa4 = 19.99;
	$lirio1 = 4.99;
	$lirio2 = 4.99;
	$lirio3 = 4.99;
	$lirio4 = 4.99;

	//Fim acesso banco de dados
	
	if ($flor1 == '') {
		$resultado1 ='0';
	}
	else{
		$resultado1 = $flor1 * $rosa1;
	}

	if ($flor2 == ''){
		$resultado2 = '0';
	}
	else{
		$resultado2 = $flor2 * $rosa2;
	}

	if ($flor3 == ''){
		$resultado3 = '0';
	}
	else{
		$resultado3 = $flor3 * $rosa3;
	}

	if ($flor4 == ''){
		$resultado4 = '0';
	}
	else{
		$resultado4 = $flor4 * $rosa4;
	}
	
	if ($flor5 == ''){
		$resultado5 = '0';
	}
	else{
		$resultado5 = $flor5 * $lirio1;
	}
	
	if ($flor6 == ''){
		$resultado6 = '0';
	}
	else{
		$resultado6 = $flor6 * $lirio2;
	}

	if ($flor7 == ''){
		$resultado7 = '0';
	}
	else{
		$resultado7 = $flor7 * $lirio3;
	}
	
	if ($flor8 == ''){
		$resultado8 = '0';
	}
	else{
		$resultado8 = $flor8 * $lirio4;
	}
	
	$resultado = $resultado1 + $resultado2 + $resultado3 + $resultado4
	+ $resultado5 + $resultado6 + $resultado7 + $resultado8;
	
	echo 'Total: R$';
    echo $resultado;  
    
?>
