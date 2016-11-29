<?php

require_once '../../models/calculatrice.php';
if(isset($_GET['digit'])){
	$digits = json_decode($_GET['digit']);
	$operator = json_decode($_GET['operator']);
	$calculette = new Calculatrice;

	//ajax s'attend à un objet header
	header("Content-Type: application/json", true);
	//http_response_code(300); si on veut faire faire exécuter la fonction error de notre script ajax
	//on envoie le status 300
	switch ($operator[0]) {
		case 'SUM':
		$result = $calculette->additionner($digits);
		echo json_encode($result);
		//return $result;
		break;
		case 'MULT':
		$result = $calculette->multiplier($digits);
		echo json_encode($result);
		break;
		case 'MIN':
		$result = $calculette->soustraire($digits);
		echo json_encode($result);
		break;
		case 'DIV':
		$result = $calculette->diviser($digits);
		echo json_encode($result);
		break;
		default:
		# code...
		break;
	}
}
