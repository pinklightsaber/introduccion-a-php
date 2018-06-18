<?php

	function holaMundo (){
		echo 'Hola Mundo';
	}

	holaMundo(); //función ejemplo

	function dl_image_sizes($sizes){
		$addsizes = array(
			'slideshow' => __('Tamaño del slideshow'),
			'custom_logo' => __('Tamaño personalizado del logo'),
			'entradas' => __('Tamaño personalizao de las entradas')
		);
		return array_merge($sizes, $addsizes);
	}

// Agrega tamaños de imagenes personalizadas en post

	if(function_exists('add_theme_support')){
		add_image_size('slideshow', 800, 600, true); //persona slideshow
		add_image_size('custom_logo', 150, 150, true); //personaliza tamaño logo
		add_image_size('entradas', 750, 490, true); //personaliza tamaño entradas
		add_filter('image_size_names_choose', 'dl_image_sizes');
	}
?>