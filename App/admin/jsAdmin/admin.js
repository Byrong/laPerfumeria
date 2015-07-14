$(document).on('ready', iniciar);

function iniciar ()
{
	$('.cuenta').on('click', panelControl);
	//$('.cont-solicitud').on('click', cargarSolicitud);

// Llamamos las solicitudes seleccionadas
	$('.cont-solicitud').click(function(event){
		$('.cont-solicitud').removeClass('active');
		$(this).addClass('active');

	     	var id = $(this).data('id');
	     	var estado = $(this).data('estado');
               	$.get( 
	                  "../admin/cargarSolicitud.php",
	                   { estado: estado,
                        	  id: 	 id },
	                  function(data) {
	                     $('.mensaje').slideDown().html(data);
	                  }
               	);
            });
}

function panelControl ()
{
	$('.panelControl').slideToggle();
}
// Realizamos el filtro de la solicitud "Aroma Aceptada" - "Aroma Rechazada"
function probarAroma(){
	$('.filtro').click(function(){
          var estado = $(this).data('estado');
          var id = $(this).data('id');
                  $.get( 
                      "../admin/filtroSolicitud.php",
                      { estado: estado,
                        id: id },
                      function(data) {
                            var respuesta = data;
                            console.log(respuesta);
                            switch (parseInt(respuesta)){
                                case 1: 
                                      $('.mensaje').slideDown().html('<span class="alertOk">Aroma ingresada al Club con exito. <br> "No olvides registrar el nombre de Aroma a usar y los valores de su servicio"</span>');
                                      break;
                                case 2: 
                                      $('.mensaje').slideDown().html('<span class="alertOk">Aroma Rechazada al Club, lo sentimos :(</span>');
                                      break;
                            }
                                      $('.cont-solicitud').removeClass('active');
                                      $('.mensaje').removeClass('slideInDown animated').addClass('slideInDown animated');
                                      $('.ocultar-'+id).slideUp();
                            });
                      });
}