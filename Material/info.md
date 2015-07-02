**Proyecto** / La Perfumeria Club   **| Incio** / 020715 **| Entrega** / 060715 **| Versión** / LPC-01

> *Descripción:*
> Sitio dedicado a prestar servicios de entretenimiento para adultos


** :: Contenido **

*Frontend*

1. Login
> *Sección con dos campos uno de usuario que siempre estará por defecto y el de password que pertenecera al id único que tendra cada una de nuestras Aromas.*
2. Inicio
3. ¿Qué es?
4. Membresias
> *Sección con los tres tipos diferentes de membresias a manejar.*
5. Aromas
	/ Ver Aroma
> *Sección con el listado de cada una de las Aromas y llevara a una interna que tendra los datos especificos de la Aroma seleccionada.*
6. Nuestras politicas

*Backend*

1. Login
> *Acceso al panel administrativo.*
2. Registro de las Aromas*
> *Formulario de registro para cada Aroma.*
3. Validación de las Aromas*
> *Una vez que la nueva Aroma haiga realizado el proceso de inscripción se valida la información (Ya presentado el casting) y se determina las tarifa de su servicio.*
4. Actualización de datos
5. Eliminar Aroma
6. Buscador de Aromas


** :: Arquitectura de los Modulos **

*Registro de las Aromas*

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Aroma  

+ idAroma  [ PK, auto increment ]
+ nombre [ varchar ]
+ sexo [ varchar ]
+ correo [ varchar, unique ]
+ celular [ int, unique ]
+ ciudad  [ varchar ]
+ registro  [ date ]
+ estado  [ boolean ]
> *Las Aromas no se darán de alta hasta haber pasado el casting*

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Perfil_Aroma  

+ idPerfilAroma  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ nomAroma [ varchar ]
+ edad [ int ]
+ peso [ int ]
+ estatura [ int ]
+ colOjos [ varchar ]
+ colCabello [ varchar ]
+ colPiel [ varchar ]
+ colFavorito [ varchar ]
+ tatuajes [ boolean ]
+ operaciones [ boolean ]
+ lugarOperacion [ varchar ]
> *Listado con las siguientes opciones (Naríz,Labios, Senos, Abdomen, Cola)*
+ actividadSexual [ varchar ]
> *Porcetanje de la actividad sexual dentro de un mes (1 - 2, 3 - 5 , 5 - 8, 8 - 10, 10 - 15) relaciones*
+ soy [ varchar ]
> *Descripción personal de la Aroma en menos de 150 letras*
+ experiencia [ boolean ]
+ tiempoExperiencia [ int ]
+ sexOral [ boolean ]
+ sexAnal [ boolean ]
+ sexHombre [ boolean ]
+ sexMujer [ boolean ]
+ trio [ boolean ]
+ trioHMH [ boolean ]
+ trioMHM [ boolean ]
+ lluviaDorada [ boolean ]
+ viaja [ boolean ]
+ baile [ boolean ]
+ masajes [ boolean ]
+ encuentro [ varchar ]
> *Solo dos sitio de encuentro (Hotel,Domicilio)*

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Tarifas_Aromas  

+ idTarifas  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ valorHora [ int ]
+ valor2Hora [ int ]
+ valor3Hora [ int ]
+ valorDía [ int ]

---


[I'm an inline-style link](https://www.google.com)