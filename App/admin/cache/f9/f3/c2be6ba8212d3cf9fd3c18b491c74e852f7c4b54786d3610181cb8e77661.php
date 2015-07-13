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
            echo "<header class=\"row fecha\">
            <span class=\"dia col-md-12\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "fecha", array()), "html", null, true);
            echo "</span>
</header>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"> <span>Datos Aromas</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Nombre:</td><td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Sexo:</td><td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Correo:</td><td colspan=\"4\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "correo", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Celular:</td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "celular", array()), "html", null, true);
            echo "</td>
              <td>Ciudad:</td><td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Descripción Aroma</span></h2>
  <p class=\"par-1\">
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
            echo "
  </p>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Aroma</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Edad:</td><td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
            echo " años</td>
      </tr>
      <tr>
              <td>Estatura:</td><td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
            echo " cm</td>
      </tr>
      <tr>
              <td>Ojos:</td><td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Píel:</td><td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "piel", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>   
              ";
            // line 49
            if (($this->getAttribute($context["m"], "operaciones", array()) == "Si")) {
                // line 50
                echo "              <td>Operaciones:</td>
              <td>
                  ";
                // line 52
                if (($this->getAttribute($context["m"], "nariz", array()) == "Si")) {
                    echo "   
                    Naríz
                  ";
                }
                // line 55
                echo "                  ";
                if (($this->getAttribute($context["m"], "labios", array()) == "Si")) {
                    echo "   
                    Labios
                  ";
                }
                // line 58
                echo "                  ";
                if (($this->getAttribute($context["m"], "senos", array()) == "Si")) {
                    echo "   
                    Senos
                  ";
                }
                // line 61
                echo "                  ";
                if (($this->getAttribute($context["m"], "abdomen", array()) == "Si")) {
                    echo "   
                    Abdomen
                  ";
                }
                // line 64
                echo "                  ";
                if (($this->getAttribute($context["m"], "cola", array()) == "Si")) {
                    echo "   
                    Cola
                  ";
                }
                // line 67
                echo "              </td>
              ";
            }
            // line 69
            echo "              ";
            if (($this->getAttribute($context["m"], "operaciones", array()) == "No")) {
                // line 70
                echo "              <td>Operaciones:</td><td>No</td>
              ";
            }
            // line 72
            echo "      </tr>
      <tr>
              <td>Color Favorito:</td><td bgcolor=\"#";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "colFavorito", array()), "html", null, true);
            echo "\"></td>
      </tr>
      <tr>
              <td>Fecha de nacimiento:</td><td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cumple", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
          <td>Peso:</td><td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "peso", array()), "html", null, true);
            echo " Kg</td>
      </tr>
      <tr>
            <td>Senos:</td><td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "senos", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Cabello:</td><td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Tatuajes:</td><td>";
            // line 91
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
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "experiencia", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Tiempo:</td><td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tiempo", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Actividad Sexual:</td><td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "actividadSexual", array()), "html", null, true);
            echo " al mes</td>
      </tr>
  </table>
  <div class=\"queEs\">
      <h3 class=\"titu-3 col-md-12\">¿Qué es el sexo?</h3>
      <p class=\"par-1 col-md-12\">
          ";
            // line 111
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
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexOral", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Sexo Anal:</td><td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexAnal", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Servicio a Hombres:</td><td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexHombre", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Servicio a Mujeres:</td><td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexMujer", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Lluvía Dorada:</td><td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Baila:</td><td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
          <td>Tríos:</td><td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trios", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Trio HMH:</td><td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Trio MHM:</td><td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Masajes:</td><td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "masaje", array()), "html", null, true);
            echo "</td>
      </tr>
       <tr>
              <td>Encuentros:</td><td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Fuera de servicio:</td><td>del ";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "desde", array()), "html", null, true);
            echo " al ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hasta", array()), "html", null, true);
            echo " de cada mes</td>
      </tr>
  </table>
</section>
<section>
      <a href=\"javascript:;\" class=\"btn-2 filtro col-md-5 col-xs-12\" data-id=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\" data-estado=\"2\">Rechazada</a>
      <a href=\"javascript:;\" class=\"btn-3 filtro col-md-5 col-xs-12\" data-id=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\" data-estado=\"1\">Bienvenida al Club</a>
</section>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "</article>
<script>
      \$(document).ready(function() {
// Realizamos el filtro de la solicitud \"Aroma Aceptada\" - \"Aroma Rechazada\"
                \$('.filtro').click(function(){
                      var estado = \$(this).data('estado');
                      var id = \$(this).data('id');
                              \$.get( 
                                  \"../admin/filtroSolicitud.php\",
                                  { estado: estado,
                                    id: id },
                                  function(data) {
                                        var respuesta = data;
                                        console.log(respuesta);
                                        switch (parseInt(respuesta)){
                                            case 1: 
                                                  \$('.mensaje').slideDown().html('<span class=\"alertOk\">Aroma ingresada al Club con exito. <br> \"No olvides registrar el nombre de Aroma a usar y los valores de su servicio\"</span>');
                                                  break;
                                            case 2: 
                                                  \$('.mensaje').slideDown().html('<span class=\"alertOk\">Aroma Rechazada al Club, lo sentimos :(</span>');
                                                  break;
                                        }
                                                  \$('.cont-solicitud').removeClass('active');
                                                  \$('.mensaje').removeClass('slideInDown animated').addClass('slideInDown animated');
                                                  \$('.ocultar-'+id).slideUp();
                                        });
                                  });
                          });
</script>";
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
        return array (  329 => 164,  319 => 160,  315 => 159,  305 => 154,  299 => 151,  293 => 148,  287 => 145,  281 => 142,  275 => 139,  267 => 134,  261 => 131,  255 => 128,  249 => 125,  243 => 122,  237 => 119,  226 => 111,  217 => 105,  211 => 102,  205 => 99,  194 => 91,  188 => 88,  182 => 85,  176 => 82,  168 => 77,  162 => 74,  158 => 72,  154 => 70,  151 => 69,  147 => 67,  140 => 64,  133 => 61,  126 => 58,  119 => 55,  113 => 52,  109 => 50,  107 => 49,  101 => 46,  95 => 43,  89 => 40,  83 => 37,  73 => 30,  63 => 23,  59 => 22,  53 => 19,  45 => 14,  39 => 11,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
