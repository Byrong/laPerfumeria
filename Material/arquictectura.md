
** :: Arquitectura La Perfumería Club **

*Add relation*

`Organización de los archivos app `  


+ **App/**  `Root`
	+ index.php
	+ aroma.php
	+ aromas.php
	+ aromaSeleccionada.php
	+ **css/**
		+ adminPerfumeria.css
		+ **fonts/**
		+ **images/**
	+ **sass/** `Estilos`
		+ adminPerfumeria.scss
	+ **templates/** `Web principal`
		+ mainLayer.twig.html
		+ index.twig.html
		+ home.twig.html
		+ queEs.twig.html
		+ verAroma.twig.html
		+ **backend/** `Administracion`
			+ mainAdmin.twig.html
			+ login.twig.html
			+ app.twig.html
			+ menuAdmin.twig.html
			+ solicitudesAroma.twig.html
			+ datosSolicitudes.twig.html
			+ contSolicitudes.twig.html
	+ **admin/** `Archivos del backend`
		+ admin.php
		+ cargarSolicitud.php
		+ filtroSolicitud.php `(Aceptar ó Rechazar Solicitud)`
	+ **Js/**
		+ scripts.js `Scripts Global`
		+ [bootstrap.min.js](url)
		+ jquery-1.11.1.min.js
		+ jquery.bxslider.min.js
		+ jquery.easing.1.3.js
		+ jquery.jscrollpane.min.js
		+ jquery.localScroll.min.js
		+ jquery.magnific-popup.min.js
		+ jquery.mousewheel.js
		+ jquery.parallax-1.1.3.js
		+ jquery.scrollTo.min.js
		+ jquery.sticky.js
		+ jquery.viewport.mini.js
		+ owl.carousel.min.js
		+ SmoothScroll.js
	+ **Images/**
		+ **admin/** `Imagenes del backend`
	+ **Twig/** `Modelo Template`
