<?php

	$categories = array('PHP', 'JavaScript', 'HTML', 'CSS');
	echo $categories[0];

	echo '<br>';

	$args = array(
		'author' => 'Carol Torres',
		'category' => 'php',
		'post_name' => 'Cinco formas de aprender wordpress fácilmente'
	);

	echo $args ['post_name'] . ', entrada publicada por '. $args ['author'] . ', en la categoría de ' . $args['category'];

	echo '<br>';

	var_dump($args);

	echo '<br>';

	print_r($args);

?>