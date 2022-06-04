<?php
	$nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $dataevento = $_POST['dataevento'];
    $evento = $_POST['evento'];

        $resposta = $nome . ' Email '  . $email . ' e telefone '  . $telefone . ', com evento ' . $evento . ' na Rua ' . $rua . ' Número: ' . $numero . ', Bairro ' . $bairro . ', ' . $cidade . ', ' . $estado . '. Data: ' . $dataevento . '<br>' . 'Logo entraremos em contato!';


echo $resposta;
?>