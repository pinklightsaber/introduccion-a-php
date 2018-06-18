<?php
if ( have_posts() ) : //funcion de wp para preguntar si hay post
	while ( have_posts() ) : the_post(); //the post es la entrada
		the_title();
		the_excerpt();
	endwhile;
else :
	echo wpautop( 'Sorry, no hay entradas' );
endif;
?>