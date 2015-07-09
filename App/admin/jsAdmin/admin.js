$(document).on('ready', iniciar);

function iniciar ()
{
	$('.cuenta').on('click', panelControl);
	$('.cont-solicitud').on('click', cargarSolicitud);
}

function panelControl ()
{
	$('.panelControl').slideToggle();
}

function cargarSolicitud()
{
	$('.cont-solicitud').removeClass('active');
	$(this).addClass('active');
	var id = $(this).data('id');

	$.ajax({
		url: 	"../admin/cargarSolicitud.php",
		type: 	"GET",
		async: 	true,
		data:    id,
		success: function (data)
                              {
                               $('.cont-datos').html(data);
                                console.log ("Consultando solicitud"+id);
                              },
                                error: function()
                                {
                                	alert ("Error con los datos!");
                                }
	});
}