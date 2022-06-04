<?php 

$Login = array(
	'Nome' => 'Maria João',
	'Rua'  => 'Lauro Gomes',
	'Numero' =>	'100',
	'Bairro' => 'Jardim Pequeno',
	'Cidade' => 'São Bernardo do Campo',
	'Estado' => 'São Paulo',
	'Cartao' => '0000.0000.0000',
);

$mensagemJSON = json_encode($Login);

echo $mensagemJSON;

?>