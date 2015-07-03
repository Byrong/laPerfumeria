<?php

/* verAroma.twig.html */
class __TwigTemplate_c8f215bcc6e779406dcfcb9dbe79c980e794938fef01abff81361028a8e885ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainlayer.twig.html");

        $this->blocks = array(
            'perfilAroma' => array($this, 'block_perfilAroma'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainlayer.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_perfilAroma($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "    <h2>Soy una nueva Aroma</h2>
        <section class=\"row cont-1\">
        <div class=\"slider-1 col-md-5\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
                         <img src=\"admin/imagenes/aromas/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\"  style=\"width:100%\">
        </div>
        <div class=\"item\">
                <img src=\"admin/imagenes/aromas/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen2", array()), "html", null, true);
            echo "\"  style=\"width:100%\">
        </div>
        <div class=\"item\">
                <img src=\"admin/imagenes/aromas/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen3", array()), "html", null, true);
            echo "\"  style=\"width:100%\">
        </div>
        <div class=\"item\">
                <img src=\"admin/imagenes/aromas/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen4", array()), "html", null, true);
            echo "\"  style=\"width:100%\">
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
      </div>
      <div class=\"col-md-7\">
      <h2 class=\"titu-1\">Perfil</h2>
        <div class=\"table-responsive\">
          <table class=\"table\">
            <tr><td>Aroma:</td><td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "aroma", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Edad:</td><td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Estatura:</td><td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Cabello:</td><td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Busto:</td><td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "busto", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Ojos:</td><td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Color Piel:</td><td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "colorPiel", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Caderas:</td><td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "caderas", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Idiomas:</td><td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idiomas", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Tatuajes:</td><td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tatuajes", array()), "html", null, true);
            echo "</td></tr>
          </table>
        </div>
      </div>
    </section>

      <section class=\"row cont-2\">
      <div class=\"col-md-7\">
        <h2 class=\"titu-1\">Servicios</h2>
        <div class=\"table-responsive\">
          <table class=\"table table-2\">
            <tr><td>Orientación Sexual:</td><td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "orientacion", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Sexo Oral:</td><td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexoOral", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Sexo Oral Mutuo:</td><td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexoOral2", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Sexo Anal:</td><td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexoAnal", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Atención a Mujeres:</td><td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "conMujer", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Atención a Parejas:</td><td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "conParejas", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Trío MHM:</td><td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Trío HMH:</td><td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Despedida de Soltero:</td><td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "desSoltero", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Baile  Eroticos</td><td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Jugetes Sexuales</td><td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "jugetes", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Lluvia Dorada</td><td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
            echo "</td></tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-5\">
        <h2 class=\"titu-1\">Tarifas</h2>
        <div class=\"table-responsive\">
          <table class=\"table-3\">
            <tr><td>1 Hora:</td><td>\$";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hora1", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>2 Hora:</td><td>\$";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "hora2", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Día:</td><td>\$";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "dia", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Encuentro:</td><td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
            echo "</td></tr>
          </table>
        </div>
        <a class=\"btn-1 btn-lg btn-primary open-popup-link\" href=\"#test-popup\" role=\"button\">Solicitar</a>
        <p class=\"par-1\">
        En La Perfumería Club encontrarás información detallada de cada una de nuestras dulces y sensuales Aromas contando con fotografías profesionales de alta calidad, actuales y 100% reales, garantizando así que al momento del encuentro la modelo sea la deseada. Son las más selectas y todas nuestras dulces Aromas son mayores de edad, modelos o universitarias, que realizan la actividad de escorts de forma voluntaria, discreta y esporádica.
      </p>
      </div>
    </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "verAroma.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 87,  201 => 86,  197 => 85,  193 => 84,  182 => 76,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  142 => 66,  138 => 65,  124 => 54,  120 => 53,  116 => 52,  112 => 51,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  92 => 46,  88 => 45,  68 => 28,  62 => 25,  56 => 22,  50 => 19,  36 => 7,  31 => 6,  28 => 5,);
    }
}
