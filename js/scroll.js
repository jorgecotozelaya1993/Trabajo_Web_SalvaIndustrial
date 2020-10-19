	
<!--de aqi botones-->
<script type='text/javascript'>
//Función para ir hasta arriba del documento
//Objeto JQuery(): Devuelve una colección de elementos coincidentes con el o los argumentos pasados,
//ya sea que se encuentren en el DOM o sean creados por el paso de una cadena HTML.
/*
	jQuery.noConflict();				//Renunciar al control de jQuery de la variable $.
										//$ es un selector que le pasa atributos a JQuery()
	jQuery(document).ready(function() { //Especifica una funcion que se ejecuta cuando el DOM (Documento)
										//esta completamente cargado
		jQuery("#ArribayAbajo").hide(); 	//ocultamos el boton para el primer ejemplo
		jQuery("#Arriba").hide();		//Oculta los elementos que coincidad con el identificador
		jQuery(function () {			//JQuery(funcion()) Ejecuta la funcion cuando se carga el DOM (esta listo)
			jQuery(window).scroll(function () { //Manejador del evento 'scroll' que ejecuta cierta funcion
				if (jQuery(this).scrollTop() > 50) { //Obtiene el valor de la posicion actual de la barra de 	
													 //'scroll' con respecto al elemento, en este caso 'this'
					jQuery('#Arriba').fadeIn();		 //Muestra los elementos coincidentes con un efecto de  		
													 //desvanecimiento
				} else {
					jQuery('#Arriba').fadeOut();     //Oculta los elementos coincidentes con un efecto de  		
													 //desvanecimiento
				}
			});
			jQuery('#Arriba').click(function () {  //Manejador del evento click que ejecuta cierta funcion
				jQuery('body,html').animate({scrollTop: 0}, 800); //Animate(): Realiza una animación personalizada 	
																  //de un conjunto de propiedades.
				return false;
			});
		});
	});
*/	
	$(document).ready(function() {
		$("#Arriba").hide(); //ocultamos el boton para el primer ejemplo
        $('#Abajo').fadeIn();
        $('#Arriba1').fadeOut();
		
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#Arriba1').fadeIn();
				} else {
					$('#Arriba1').fadeOut();
				}
			});
			$('#Arriba1').click(function () {
				$('body,html').animate({scrollTop: 0}, 1500);
				return false;
			});
			$('#Abajo').click(function () {
				$('body,html').animate({scrollTop: $(document).height()}, 10); //obtenemos el alto del documento
				return false;
			});
		});
	});
</script>
