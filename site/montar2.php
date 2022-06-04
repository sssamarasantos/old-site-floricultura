<?php
	$cesta1 = $_POST['cesta1'];
	$cesta2 = $_POST['cesta2'];
	$cesta3 = $_POST['cesta3'];
	$cesta4 = $_POST['cesta4'];

	$choco1 = $_POST['choco1'];
	$choco2 = $_POST['choco2'];
	$choco3 = $_POST['choco3'];
	$choco4 = $_POST['choco4'];
	$choco5 = $_POST['choco5'];
	$choco6 = $_POST['choco6'];
	$choco7 = $_POST['choco7'];
	$choco8 = $_POST['choco8'];
	
	$pe1 = $_POST['pe1'];
	$pe2 = $_POST['pe2'];
	$pe3 = $_POST['pe3'];
	$pe4 = $_POST['pe4'];
	$pe5 = $_POST['pe5'];
	$pe6 = $_POST['pe6'];
	$pe7 = $_POST['pe7'];
	$pe8 = $_POST['pe8'];

	$ca1 = $_POST['ca1'];
	$ca2 = $_POST['ca2'];
	$ca3 = $_POST['ca3'];
	$ca4 = $_POST['ca4'];
	$ca5 = $_POST['ca5'];
	$ca6 = $_POST['ca6'];
	$ca7 = $_POST['ca7'];
	$ca8 = $_POST['ca8'];

	//Acesso banco de dados

	$cesta_1 = 19.50;
	$cesta_2 = 22.99;
	$cesta_3 = 19.99;
	$cesta_4 = 27.99;

	$choco_1 = 30.90;
	$choco_2 = 18.99;
	$choco_3 = 14.99;
	$choco_4 = 17.99;
	$choco_5 = 4.99;
	$choco_6 = 34.99;
	$choco_7 = 7.99;
	$choco_8 = 2.99;

	$pe_1 = 29.90;
	$pe_2 = 34.99;
	$pe_3 = 30.90;
	$pe_4 = 24.99;
	$pe_5 = 24.99;
	$pe_6 = 24.99;
	$pe_7 = 29.99;
	$pe_8 = 19.99;

	$ca_1 = 19.99;
	$ca_2 = 19.99;
	$ca_3 = 24.99;
	$ca_4 = 29.99;
	$ca_5 = 24.99;
	$ca_6 = 24.99;
	$ca_7 = 19.99;
	$ca_8 = 22.99;

	//Fim acesso banco de dados
	
	if ($cesta1 == '') {
		$resultado1 ='0';
	}
	else{
		$resultado1 = $cesta1 * $cesta_1;
	}

	if ($cesta2 == ''){
		$resultado2 = '0';
	}
	else{
		$resultado2 = $cesta2 * $cesta_2;
	}

	if ($cesta3 == ''){
		$resultado3 = '0';
	}
	else{
		$resultado3 = $cesta3 * $cesta_3;
	}

	if ($cesta4 == ''){
		$resultado4 = '0';
	}
	else{
		$resultado4 = $cesta4 * $cesta_4;
	}
	
	$calculo1 = $resultado1 + $resultado2 + $resultado3 + $resultado4;

	if ($choco1 == '') {
		$resultado5 ='0';
	}
	else{
		$resultado5 = $choco1 * $choco_1;
	}

	if ($choco2 == ''){
		$resultado6 = '0';
	}
	else{
		$resultado6 = $choco2 * $choco_2;
	}

	if ($choco3 == ''){
		$resultado7 = '0';
	}
	else{
		$resultado7 = $choco3 * $choco_3;
	}

	if ($choco4 == ''){
		$resultado8 = '0';
	}
	else{
		$resultado8 = $choco4 * $choco_4;
	}
	
	if ($choco5 == ''){
		$resultado9 = '0';
	}
	else{
		$resultado9 = $choco5 * $choco_5;
	}
	
	if ($choco6 == ''){
		$resultado10 = '0';
	}
	else{
		$resultado10 = $choco6 * $choco_6;
	}

	if ($choco7 == ''){
		$resultado11 = '0';
	}
	else{
		$resultado11 = $choco7 * $choco_7;
	}
	
	if ($choco8 == ''){
		$resultado12 = '0';
	}
	else{
		$resultado12 = $choco8 * $choco_8;
	}

	$calculo2 = $resultado5 + $resultado6 + $resultado7 + $resultado8 + $resultado9
	+ $resultado10 + $resultado11 + $resultado12;

	if ($pe1 == '') {
		$resultado13 ='0';
	}
	else{
		$resultado13 = $pe1 * $pe_1;
	}

	if ($pe2 == ''){
		$resultado14 = '0';
	}
	else{
		$resultado14 = $pe2 * $pe_2;
	}

	if ($pe3 == ''){
		$resultado15 = '0';
	}
	else{
		$resultado15 = $pe3 * $pe_3;
	}

	if ($pe4 == ''){
		$resultado16 = '0';
	}
	else{
		$resultado16 = $pe4 * $pe_4;
	}
	
	if ($pe5 == ''){
		$resultado17 = '0';
	}
	else{
		$resultado17 = $pe5 * $pe_5;
	}
	
	if ($pe6 == ''){
		$resultado18 = '0';
	}
	else{
		$resultado18 = $pe6 * $pe_6;
	}

	if ($pe7 == ''){
		$resultado19 = '0';
	}
	else{
		$resultado19 = $pe7 * $pe_7;
	}
	
	if ($pe8 == ''){
		$resultado20 = '0';
	}
	else{
		$resultado20 = $pe8 * $pe_8;
	}
	
	$calculo3 = $resultado13 + $resultado14 + $resultado15 + $resultado16 + $resultado17 + $resultado18 + $resultado19
	+ $resultado20;

	if ($ca1 == '') {
		$resultado21 ='0';
	}
	else{
		$resultado21 = $ca1 * $ca_1;
	}

	if ($ca2 == ''){
		$resultado22 = '0';
	}
	else{
		$resultado22 = $ca2 * $ca_2;
	}

	if ($ca3 == ''){
		$resultado23 = '0';
	}
	else{
		$resultado23 = $ca3 * $ca_3;
	}

	if ($ca4 == ''){
		$resultado24 = '0';
	}
	else{
		$resultado24 = $ca4 * $ca_4;
	}
	
	if ($ca5 == ''){
		$resultado25 = '0';
	}
	else{
		$resultado25 = $ca5 * $ca_5;
	}
	
	if ($ca6 == ''){
		$resultado26 = '0';
	}
	else{
		$resultado26 = $ca6 * $ca_6;
	}

	if ($ca7 == ''){
		$resultado27 = '0';
	}
	else{
		$resultado27 = $ca7 * $ca_7;
	}
	
	if ($ca8 == ''){
		$resultado28 = '0';
	}
	else{
		$resultado28 = $ca8 * $ca_8;
	}

	$calculo4 = $resultado21 + $resultado22 + $resultado23 + $resultado24 
	+ $resultado25 + $resultado26 + $resultado27 + $resultado28;

	$resultado = $calculo1 + $calculo2 + $calculo3 + $calculo4;
	
	echo 'Total: R$';
    echo $resultado;  
    
?>
