function iniciar(){$(".cuenta").on("click",panelControl);$(".cont-solicitud").on("click",cargarSolicitud)}function panelControl(){$(".panelControl").slideToggle()}function cargarSolicitud(){$(".cont-solicitud").removeClass("active");$(this).addClass("active");var e=$(this).data("id");$.ajax({url:"../admin/cargarSolicitud.php",type:"GET",async:!0,data:e,success:function(t){$(".cont-datos").html(t);console.log("Consultando solicitud"+e)},error:function(){alert("Error con los datos!")}})}$(document).on("ready",iniciar);