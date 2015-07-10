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
               	$.get( 
	                  "../admin/cargarSolicitud.php",
	                  { id: id },
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