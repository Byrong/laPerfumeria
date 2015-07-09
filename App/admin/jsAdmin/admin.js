$(document).on('ready', iniciar);

function iniciar ()
{
	$('.cuenta').on('click', panelControl);
}

function panelControl ()
{
	$('.panelControl').slideToggle();
}