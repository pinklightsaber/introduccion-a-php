<?php

	$entradas = 3;

	if ($entradas > 0) {
		echo 'Hay entradas';
	} else {
		echo 'No hay entradas';
	}

	echo '<br>';

	$hora = date('H');

	if ($hora > '12'){
		echo 'Buenos días';
	}elseif ($hora > '20') {
		echo 'Buenas tardes';
	}else {
		echo 'Buenas noches';
	}

?>