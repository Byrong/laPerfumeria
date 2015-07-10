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
        echo "<div class=\"mensaje\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verSolicitud"]) ? $context["verSolicitud"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 3
            echo "<header class=\"row fecha\">
            <span class=\"dia col-md-12\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "fecha", array()), "html", null, true);
            echo "</span>
</header>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"> <span>Datos Aromas</span></h2>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
        <td>Nombre:</td><td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Sexo:</td><td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Correo:</td><td colspan=\"4\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "correo", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Celular:</td><td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "celular", array()), "html", null, true);
            echo "</td>
              <td>Ciudad:</td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Descripción Aroma</span></h2>
  <p class=\"par-1\">
    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
            echo "
  </p>
</section>
<section class=\"row\">
  <h2 class=\"titu-2 col-md-12\"><span>Perfil Aroma</span></h2>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
        <td>Edad:</td><td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
            echo " años</td>
      </tr>
      <tr>
              <td>Estatura:</td><td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
            echo " cm</td>
      </tr>
      <tr>
              <td>Ojos:</td><td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Píel:</td><td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "piel", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>   
              ";
            // line 48
            if (($this->getAttribute($context["m"], "operaciones", array()) == "Si")) {
                // line 49
                echo "              <td>Operaciones:</td>
              <td>
                  ";
                // line 51
                if (($this->getAttribute($context["m"], "nariz", array()) == "Si")) {
                    echo "   
                    Naríz
                  ";
                }
                // line 54
                echo "                  ";
                if (($this->getAttribute($context["m"], "labios", array()) == "Si")) {
                    echo "   
                    Labios
                  ";
                }
                // line 57
                echo "                  ";
                if (($this->getAttribute($context["m"], "senos", array()) == "Si")) {
                    echo "   
                    Senos
                  ";
                }
                // line 60
                echo "                  ";
                if (($this->getAttribute($context["m"], "abdomen", array()) == "Si")) {
                    echo "   
                    Abdomen
                  ";
                }
                // line 63
                echo "                  ";
                if (($this->getAttribute($context["m"], "cola", array()) == "Si")) {
                    echo "   
                    Cola
                  ";
                }
                // line 66
                echo "              </td>
              ";
            }
            // line 68
            echo "              ";
            if (($this->getAttribute($context["m"], "operaciones", array()) == "No")) {
                // line 69
                echo "              <td>Operaciones:</td><td>No</td>
              ";
            }
            // line 71
            echo "      </tr>
      <tr>
              <td>Color Favorito:</td><td bgcolor=\"#";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "colFavorito", array()), "html", null, true);
            echo "\"></td>
      </tr>
      <tr>
              <td>Fecha de nacimiento:</td><td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cumple", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-4 col-xs-12\">
      <tr>
          <td>Peso:</td><td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "peso", array()), "html", null, true);
            echo " Kg</td>
      </tr>
      <tr>
            <td>Senos:</td><td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "senos", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Cabello:</td><td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Tatuajes:</td><td>";
            // line 90
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
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "experiencia", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Tiempo:</td><td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tiempo", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Actividad Sexual:</td><td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "actividadSexual", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <div class=\"queEs\">
      <h3 class=\"titu-3 col-md-12\">¿Qué es el sexo?</h3>
      <p class=\"par-1 col-md-12\">
          ";
            // line 110
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
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexOral", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Sexo Anal:</td><td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexAnal", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Servicio a Hombres:</td><td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexHombre", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Servicio a Mujeres:</td><td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexMujer", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Lluvía Dorada:</td><td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Baila:</td><td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
            echo "</td>
      </tr>
  </table>
  <table class=\"table-1 col-md-6 col-xs-12\">
      <tr>
          <td>Tríos:</td><td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trios", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Trio HMH:</td><td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Trio MHM:</td><td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
            <td>Masajes:</td><td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "masaje", array()), "html", null, true);
            echo "</td>
      </tr>
       <tr>
              <td>Encuentros:</td><td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
              <td>Fuera de servicio:</td><td>del ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "desde", array()), "html", null, true);
            echo " al ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hasta", array()), "html", null, true);
            echo " de cada mes</td>
      </tr>
  </table>
</section>
<section>
      <a href=\"#\" class=\"btn-2 col-md-5 col-xs-12\" data-aceptada=\"No\">Rechazada</a>
      <a href=\"#\" class=\"btn-3 col-md-5 col-xs-12\" data-aceptada=\"Si\">Bienvenida al Club</a>
</section>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  304 => 153,  298 => 150,  292 => 147,  286 => 144,  280 => 141,  274 => 138,  266 => 133,  260 => 130,  254 => 127,  248 => 124,  242 => 121,  236 => 118,  225 => 110,  216 => 104,  210 => 101,  204 => 98,  193 => 90,  187 => 87,  181 => 84,  175 => 81,  167 => 76,  161 => 73,  157 => 71,  153 => 69,  150 => 68,  146 => 66,  139 => 63,  132 => 60,  125 => 57,  118 => 54,  112 => 51,  108 => 49,  106 => 48,  100 => 45,  94 => 42,  88 => 39,  82 => 36,  72 => 29,  62 => 22,  58 => 21,  52 => 18,  44 => 13,  38 => 10,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
