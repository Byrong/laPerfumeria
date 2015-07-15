**Proyecto** / La Perfumeria Club   **| Incio** / 020715 **| Entrega** / 060715 **| Versión** / LPC-01

> *Descripción:*
> Sitio dedicado a prestar servicios de entretenimiento para adultos

`Tener en cuenta que días a las Aromas le llega el periodo para poder validar los días que no estara disponible`

** :: Contenido **

*Frontend*

1. Login
	`Sección con dos campos uno de usuario que siempre estará por defecto y el de password que pertenecera al id único que tendra cada una de nuestras Aromas.`
2. Inicio
3. ¿Qué es?
4. Membresias
	`Sección con los tres tipos diferentes de membresias a manejar.`
5. Aromas
	/ Ver Aroma
	`Sección con el listado de cada una de las Aromas y llevara a una interna que tendra los datos especificos de la Aroma seleccionada`
6. Nuestras politicas

*Backend*

1. Login
	`Acceso al panel administrativo`
2. Registro de las Aromas*
	`Formulario de registro para cada Aroma.`
3. Validación de las Aromas*
	`Una vez que la nueva Aroma haiga realizado el proceso de inscripción se valida la información (Ya presentado el casting) y se determina las tarifa de su servicio.`
4. Actualización de datos
5. Eliminar Aroma
6. Buscador de Aromas


** :: Arquitectura de los Modulos **

*Registro de las Aromas*

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Aroma`  

+ idAroma  [ PK, auto increment ]
+ nombre [ varchar ]
+ sexo [ varchar ]
+ correo [ varchar, unique ]
+ celular [ int, unique ]
+ ciudad  [ varchar ]
+ estado  [ boolean ]
	`Las Aromas no se darán de alta hasta haber pasado el casting`
+ registro  [ date ]

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Perfil_Aroma`    

+ idPerfilAroma  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ nomAroma [ varchar ]
+ edad [ int ]
+ peso [ int ]
+ busto [ int ]
+ estatura [ int ]
+ colOjos [ varchar ]
+ colCabello [ varchar ]
+ colPiel [ varchar ]
+ colFavorito [ varchar ]
+ tatuajes [ boolean ]
+ operaciones* [ boolean ]
	`Listado con las siguientes opciones (Naríz,Labios, Senos, Abdomen, Cola)`
+ actividadSexual [ varchar ]
	`Porcetanje de la actividad sexual dentro de un mes (1 - 2, 3 - 5 , 5 - 8, 8 - 10, 10 - 15) relaciones`
+ soy [ varchar ]
	`Descripción personal de la Aroma en menos de 150 letras`
+ experiencia [ boolean ]
+ tiempoExperiencia [ int ]
+ registro  [ date ]

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Servicio_Aroma`  

+ idServicio  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
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
	`Solo dos sitio de encuentro (Hotel,Domicilio)`
+ registro  [ date ]

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Operacion`  

+ idOperacion  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ Nariz  [ varchar ]
+ Labios  [ varchar ]
+ Senos  [ varchar ]
+ Abdomen  [ varchar ]
+ Cola  [ varchar ]
+ registro  [ date ]

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Foto_Aroma`  

+ idFoto  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ foto1 [ int ]
+ foto2 [ int ]
+ foto3 [ int ]
+ foto4 [ int ]
+ registro  [ date ]

 `::::::::::::::::::::::::::::::::::::::::::::::::::::: DB Tarifa_Aroma`  

+ idTarifas  [ PK, auto increment ]
+ idAroma  [ FK, auto increment ]
+ valorHora [ int ]
+ valor2Hora [ int ]
+ valor3Hora [ int ]
+ valorDía [ int ]
+ registro  [ date ]

**Librerias**

[RangeSlider](http://andreruffert.github.io/rangeslider.js/)
[ScrollTo and Localscroll ](http://www.adriantomic.se/development/jquery-localscroll-tutorial/)
[W2UI ](http://w2ui.com/web/docs/form)
[jQuery](https://jquery.com/)

 **Estrategía de introducción al mercado**

 Para poder posicionar a la Perfumería Club utilizaremos tres metodos basicos.

**1- Vinculación a portales web de citas**  

**2- Porta voz Aroma futuro cliente:**
 	Este metodo consiste en que cada Aroma tendra un código de 4 digitos posiblemente sean sus últimos 4 número del celular los cuales serán anotas en una tarjeta de presentación de la Perfumería Club y el cliente una vez que entra a la página debera ingresarlo para poder acceder al contenido de la Perfumeria Club. y así consultar cada una de nuestras membresías.
**3- Envío de mail a base de datos de visitantes de sitios que buscan parejas:**
 	Realizar un DummSql a estos sitios para poder acceder a su DB de usuarios,

**Para la contratación de las Aromas**

**1- Servicio de chulo:**
 	Chulo es la persona encargada de gestionar la vinculación de las chicas debido a su personalidad para poder acercarse a las futuras Aromas.
 	El chulo debe ser una persona muy sociable y de una muy buena presentación personal.

**2- Vinculación por la web:**
 	Formulario de registro para aquella Aromas que le gustaría trabajar con la Perfumería Club. El cual servirá de contacto donde luego se prosigue con una llamada y una citación para el casting, Filtro y toma de Fotos!

**3- Reclutar de web de bajo nivel:**
 	Ingresar a web que no tienen tanta presentación profesional pero que cuentan con chica de grán pontencial, ofrecerle vincularse con la Perfumería Club ofreciendoles mejore presentación, mejores servicios y mejor estabilidad economica.






