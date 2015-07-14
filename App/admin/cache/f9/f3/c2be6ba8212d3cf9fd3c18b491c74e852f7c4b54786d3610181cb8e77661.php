<?php

/* datosSolicitudes.twig.html */
class __TwigTemplate_f9f3c2be6ba8212d3cf9fd3c18b491c74e852f7c4b54786d3610181cb8e77661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article class=\"contenido fadeIn animated\">
<div class=\"mensaje\">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verSolicitud"]) ? $context["verSolicitud"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 4
            echo "<!-- Mostramos las solicitudes sin evaluar de las nuevas Aromas -->
";
            // line 5
            if (($this->getAttribute($context["m"], "estado", array()) == 0)) {
                // line 6
                echo "<header class=\"row fecha\">
            <span class=\"dia col-md-12\">";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "fecha", array()), "html", null, true);
                echo "</span>
</header>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"> <span>Datos Aromas</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Nombre:</td><td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Sexo:</td><td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Correo:</td><td colspan=\"4\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "correo", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Celular:</td><td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "celular", array()), "html", null, true);
                echo "</td>
              <td>Ciudad:</td><td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Descripción Aroma</span></h2>
  <p class=\"par-1\">
    ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
  </p>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Aroma</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Edad:</td><td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
                echo " años</td>
      </tr>
      <tr>
              <td>Estatura:</td><td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
                echo " cm</td>
      </tr>
      <tr>
              <td>Ojos:</td><td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Píel:</td><td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "piel", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>   
              ";
                // line 51
                if (($this->getAttribute($context["m"], "operaciones", array()) == "Si")) {
                    // line 52
                    echo "              <td>Operaciones:</td>
              <td>
                  ";
                    // line 54
                    if (($this->getAttribute($context["m"], "nariz", array()) == "Si")) {
                        echo "   
                    Naríz
                  ";
                    }
                    // line 57
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "labios", array()) == "Si")) {
                        echo "   
                    Labios
                  ";
                    }
                    // line 60
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "senos", array()) == "Si")) {
                        echo "   
                    Senos
                  ";
                    }
                    // line 63
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "abdomen", array()) == "Si")) {
                        echo "   
                    Abdomen
                  ";
                    }
                    // line 66
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "cola", array()) == "Si")) {
                        echo "   
                    Cola
                  ";
                    }
                    // line 69
                    echo "              </td>
              ";
                }
                // line 71
                echo "              ";
                if (($this->getAttribute($context["m"], "operaciones", array()) == "No")) {
                    // line 72
                    echo "              <td>Operaciones:</td><td>No</td>
              ";
                }
                // line 74
                echo "      </tr>
      <tr>
              <td>Color Favorito:</td><td bgcolor=\"#";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "colFavorito", array()), "html", null, true);
                echo "\"></td>
      </tr>
      <tr>
              <td>Fecha de nacimiento:</td><td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cumple", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
          <td>Peso:</td><td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "peso", array()), "html", null, true);
                echo " Kg</td>
      </tr>
      <tr>
            <td>Senos:</td><td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "senos", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Cabello:</td><td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Tatuajes:</td><td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tatuajes", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Sexual</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Experiencia:</td><td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "experiencia", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Tiempo:</td><td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tiempo", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Actividad Sexual:</td><td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "actividadSexual", array()), "html", null, true);
                echo " al mes</td>
      </tr>
  </table>
  <div class=\"queEs\">
      <h3 class=\"titu-3 col-md-12\">¿Qué es el sexo?</h3>
      <p class=\"par-1 col-md-12\">
          ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexoEs", array()), "html", null, true);
                echo "
      </p>    
  </div>
</section>      
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Mis Servicios</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Sexo Oral:</td><td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexOral", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Sexo Anal:</td><td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexAnal", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Servicio a Hombres:</td><td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexHombre", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Servicio a Mujeres:</td><td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexMujer", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Lluvía Dorada:</td><td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Baila:</td><td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
          <td>Tríos:</td><td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trios", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Trio HMH:</td><td>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Trio MHM:</td><td>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Masajes:</td><td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "masaje", array()), "html", null, true);
                echo "</td>
      </tr>
       <tr>
              <td>Encuentros:</td><td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Fuera de servicio:</td><td>del ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "desde", array()), "html", null, true);
                echo " al ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hasta", array()), "html", null, true);
                echo " de cada mes</td>
      </tr>
  </table>
</section>
<section>
      <a href=\"javascript:;\" class=\"btn-2 filtro col-md-5 col-xs-12\" data-id=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" data-estado=\"2\" onclick=\"probarAroma()\">Rechazada</a>
      <a href=\"javascript:;\" class=\"btn-3 filtro col-md-5 col-xs-12\" data-id=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" data-estado=\"1\" onclick=\"probarAroma()\">Bienvenida al Club</a>
</section>
</div>
";
            }
            // line 166
            echo "<!-- Decimos que solo muestre las Aromas que pasarón a la Perfumería club -->
";
            // line 167
            if (($this->getAttribute($context["m"], "estado", array()) == 1)) {
                // line 168
                echo "<header class=\"row fecha\">
            <span class=\"dia col-md-12\">Registrada: ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "fecha", array()), "html", null, true);
                echo "</span>
</header>
<section class=\"row\">
     <h2 class=\"titu-2 col-md-12\"> <span>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "aroma", array()), "html", null, true);
                echo "</span></h2>
     <div class=\"col-md-3 col-xs-6\">
            <img src=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto1", array()), "html", null, true);
                echo "\" alt=\"\">
     </div>
     <div class=\"col-md-3 col-xs-6\">
            <img src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto2", array()), "html", null, true);
                echo "\" alt=\"\">
     </div>
     <div class=\"col-md-3 col-xs-6\">
            <img src=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto3", array()), "html", null, true);
                echo "\" alt=\"\">
     </div>
     <div class=\"col-md-3 col-xs-6\">
            <img src=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto4", array()), "html", null, true);
                echo "\" alt=\"\">
     </div>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"> <span>Datos Aromas</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Nombre:</td><td>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Sexo:</td><td>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Correo:</td><td colspan=\"4\">";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "correo", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Celular:</td><td>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "celular", array()), "html", null, true);
                echo "</td>
              <td>Ciudad:</td><td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Descripción Aroma</span></h2>
  <p class=\"par-1\">
    ";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
  </p>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Aroma</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Edad:</td><td>";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
                echo " años</td>
      </tr>
      <tr>
              <td>Estatura:</td><td>";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
                echo " cm</td>
      </tr>
      <tr>
              <td>Ojos:</td><td>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Píel:</td><td>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "piel", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>   
              ";
                // line 228
                if (($this->getAttribute($context["m"], "operaciones", array()) == "Si")) {
                    // line 229
                    echo "              <td>Operaciones:</td>
              <td>
                  ";
                    // line 231
                    if (($this->getAttribute($context["m"], "nariz", array()) == "Si")) {
                        echo "   
                    Naríz
                  ";
                    }
                    // line 234
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "labios", array()) == "Si")) {
                        echo "   
                    Labios
                  ";
                    }
                    // line 237
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "senos", array()) == "Si")) {
                        echo "   
                    Senos
                  ";
                    }
                    // line 240
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "abdomen", array()) == "Si")) {
                        echo "   
                    Abdomen
                  ";
                    }
                    // line 243
                    echo "                  ";
                    if (($this->getAttribute($context["m"], "cola", array()) == "Si")) {
                        echo "   
                    Cola
                  ";
                    }
                    // line 246
                    echo "              </td>
              ";
                }
                // line 248
                echo "              ";
                if (($this->getAttribute($context["m"], "operaciones", array()) == "No")) {
                    // line 249
                    echo "              <td>Operaciones:</td><td>No</td>
              ";
                }
                // line 251
                echo "      </tr>
      <tr>
              <td>Color Favorito:</td><td bgcolor=\"#";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "colFavorito", array()), "html", null, true);
                echo "\"></td>
      </tr>
      <tr>
              <td>Fecha de nacimiento:</td><td>";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cumple", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
          <td>Peso:</td><td>";
                // line 261
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "peso", array()), "html", null, true);
                echo " Kg</td>
      </tr>
      <tr>
            <td>Senos:</td><td>";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "senos", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Cabello:</td><td>";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Tatuajes:</td><td>";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tatuajes", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Sexual</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Experiencia:</td><td>";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "experiencia", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Tiempo:</td><td>";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tiempo", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Actividad Sexual:</td><td>";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "actividadSexual", array()), "html", null, true);
                echo " al mes</td>
      </tr>
  </table>
  <div class=\"queEs\">
      <h3 class=\"titu-3 col-md-12\">¿Qué es el sexo?</h3>
      <p class=\"par-1 col-md-12\">
          ";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexoEs", array()), "html", null, true);
                echo "
      </p>    
  </div>
</section>      
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Mis Servicios</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Sexo Oral:</td><td>";
                // line 298
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexOral", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Sexo Anal:</td><td>";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexAnal", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Servicio a Hombres:</td><td>";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexHombre", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Servicio a Mujeres:</td><td>";
                // line 307
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexMujer", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Lluvía Dorada:</td><td>";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Baila:</td><td>";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
          <td>Tríos:</td><td>";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trios", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Trio HMH:</td><td>";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Trio MHM:</td><td>";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Masajes:</td><td>";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "masaje", array()), "html", null, true);
                echo "</td>
      </tr>
       <tr>
              <td>Encuentros:</td><td>";
                // line 330
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
              <td>Fuera de servicio:</td><td>del ";
                // line 333
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "desde", array()), "html", null, true);
                echo " al ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hasta", array()), "html", null, true);
                echo " de cada mes</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Tarifas</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>1 hora:</td><td>";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor1", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>2 horas:</td><td>";
                // line 344
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor2", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>3 hora:</td><td>";
                // line 349
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor3", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
            <td>Día:</td><td>";
                // line 352
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor4", array()), "html", null, true);
                echo "</td>
      </tr>
  </table>
</section>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "datosSolicitudes.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 359,  677 => 352,  671 => 349,  663 => 344,  657 => 341,  644 => 333,  638 => 330,  632 => 327,  626 => 324,  620 => 321,  614 => 318,  606 => 313,  600 => 310,  594 => 307,  588 => 304,  582 => 301,  576 => 298,  565 => 290,  556 => 284,  550 => 281,  544 => 278,  533 => 270,  527 => 267,  521 => 264,  515 => 261,  507 => 256,  501 => 253,  497 => 251,  493 => 249,  490 => 248,  486 => 246,  479 => 243,  472 => 240,  465 => 237,  458 => 234,  452 => 231,  448 => 229,  446 => 228,  440 => 225,  434 => 222,  428 => 219,  422 => 216,  412 => 209,  402 => 202,  398 => 201,  392 => 198,  384 => 193,  378 => 190,  368 => 183,  362 => 180,  356 => 177,  350 => 174,  345 => 172,  339 => 169,  336 => 168,  334 => 167,  331 => 166,  324 => 162,  320 => 161,  310 => 156,  304 => 153,  298 => 150,  292 => 147,  286 => 144,  280 => 141,  272 => 136,  266 => 133,  260 => 130,  254 => 127,  248 => 124,  242 => 121,  231 => 113,  222 => 107,  216 => 104,  210 => 101,  199 => 93,  193 => 90,  187 => 87,  181 => 84,  173 => 79,  167 => 76,  163 => 74,  159 => 72,  156 => 71,  152 => 69,  145 => 66,  138 => 63,  131 => 60,  124 => 57,  118 => 54,  114 => 52,  112 => 51,  106 => 48,  100 => 45,  94 => 42,  88 => 39,  78 => 32,  68 => 25,  64 => 24,  58 => 21,  50 => 16,  44 => 13,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
