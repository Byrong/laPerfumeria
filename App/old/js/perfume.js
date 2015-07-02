$(document).on('ready',  iniciar);

function iniciar (){
	$('.btn-aprobado').on('click',  aprobado);
	$('.btn-obser').on('click',  activeObservacion);
	$('.reporte').on('click',  verReporte);
}
function verReporte () {
	$('#contReporte').slideToggle('');
	cargaEtadistica () ;
}
function aprobado () {
	$(this).removeClass('btn-default');
	$(this).addClass('btn-success');
}
function aprobarPost (id){
	$idComentario = id;
	$idPost = id;
	$aprobado = $( "input:checked" ).val();
	$comentario = $( "#comentario-"+id ).val();
	$estado = 1;

	$datos = {
			'id_comentario' : $idComentario,
			'id_post' : 	$idPost,
			'aprobado' : 	$aprobado,
			'comentario': 	$comentario,
			'estado': 	1
			 };
	$.ajax({
		url: 	"../Modelo/admin/confirmar_post.php",
		type: 	"GET",
		async: 	true,
		data:    $datos,
		success: function (data)
                                                          {
                                                          	if(data == 1)
                                                          	{
                                                                                $('.alert-success').css('display', 'block' );
                                                                                console.log(data);
                                                                                $('#post'+id).css('display','none');
                                                          	}
                                                          },
                                error: function()
                                {
                                	alert ("Error con los datos!");
                                }
	});
	cerrar(id);
}

function activeObservacion () {
	$(this).removeClass('btn-default');
	$(this).addClass('btn-danger');
}
function observacion (mostrar){
	$('.hover-'+mostrar).fadeIn().animate({top:'11px'});
	$('.btn-obser').this().removeClass('btn-default');
	$('.btn-obser').this().addClass('btn-danger');
}
function cerrar (post){
	$('.hover-'+post).fadeIn().animate({top:'-179px'});
}
function cargaEtadistica () {
	       $('#cFace').circliful();
	        $('#cTwee').circliful();
	        $('#cYoutube').circliful();
	        $('#cReportes').circliful();
}