$(document).on('ready', iniciar);

function iniciar ()
{
	$('.cuenta').on('click', panelControl);
	//$('.cont-solicitud').on('click', cargarSolicitud);


	$('.cont-solicitud').click(function(event){
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

function cargarSolicitud2()
{
	$('.cont-solicitud').removeClass('active');
	$(this).addClass('active');
	var id = $(this).data('id');
	var datos = "Byron";
	$.ajax({
		url: 	"../admin/cargarSolicitud.php",
		type: 	"POST",
		async: 	true,
		data:    datos,
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