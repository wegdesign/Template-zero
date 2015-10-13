<?php

/**
 * Questo file mi permettera' di creare le opzioni necessarie per creare il pannello di impostazioni del tema
 */

 function pagina_impostazioni_tema_cb(){
 	$pagina_impostazioni = add_theme_page(
		__('Pagina Impostazioni Tema','templatezero'), 		//Nome della pagina
		__('Impostazioni Tema','templatezero'),				//Voce Menu
		'administrator', 									//Capacità richiesta
		__FILE__,											//Slug della pagina, utilizziamo __FILE__ per dare uno slug unico
		'impostazioni_tema_cb'								//Funzione incaricata di creare il layout della pagina
	);
 }
 
 add_action('admin_menu','pagina_impostazioni_tema_cb');

?>