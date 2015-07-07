<?php

/* verAroma.twig.html */
class __TwigTemplate_c8f215bcc6e779406dcfcb9dbe79c980e794938fef01abff81361028a8e885ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'estilos' => array($this, 'block_estilos'),
            'perfilAroma' => array($this, 'block_perfilAroma'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta charset=\"utf-8\">
        <meta name=\"author\" content=\"Roman Kirichik\">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
        
        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"images/favicon.png\">
        <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">
        
<!-- [ Styles ] .......................................................................................................................................................................................................  -->
        ";
        // line 19
        $this->displayBlock('estilos', $context, $blocks);
        // line 30
        echo "<!-- [ End Scripts ] .......................................................................................................................................................................................................  -->
    </head>
    <body class=\"appear-animate\">
     <!-- [ Main menu ] .......................................................................................................................................................................................................  -->
            <nav class=\"main-nav dark stick-fixed\">
                <div class=\"full-wrapper relative clearfix\">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class=\"nav-logo-wrap local-scroll\">
                        <a href=\"#top\" class=\"logo\">
                            <img src=\"images/logo_perfumeria.png\" alt=\"\" />
                        </a>
                    </div>
                    <div class=\"mobile-nav\">
                        <i class=\"fa fa-bars\"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class=\"inner-nav desktop-nav\">
                        <ul class=\"clearlist scroll-nav local-scroll\">
                            <li><a href=\"aromas.php\">Volver al listado de nuestras Aromas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
 <!-- [ End Main menu ] .......................................................................................................................................................................................................  -->
";
        // line 55
        $this->displayBlock('perfilAroma', $context, $blocks);
        // line 131
        echo "<!-- [ Scripts ] .......................................................................................................................................................................................................  -->
        ";
        // line 132
        $this->displayBlock('scripts', $context, $blocks);
        // line 162
        echo "
<!-- [ End Scripts ] .......................................................................................................................................................................................................  -->
    </body>
</html>



";
    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        echo " La Perfumeria Club ";
    }

    // line 19
    public function block_estilos($context, array $blocks = array())
    {
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/style-responsive.css\">
        <link rel=\"stylesheet\" href=\"css/animate.min.css\">
        <link rel=\"stylesheet\" href=\"css/vertical-rhythm.min.css\">
        <link rel=\"stylesheet\" href=\"css/owl.carousel.css\">
        <link rel=\"stylesheet\" href=\"css/fonts_movi.css\">        
        <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">        
        <link rel=\"stylesheet\" href=\"css/jquery.bxslider.css\">        
        <link rel=\"stylesheet\" href=\"css/style.css\">
        ";
    }

    // line 55
    public function block_perfilAroma($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 57
            echo "    <section class=\"page-section\" id=\"verAroma\" data-background=\"images/full-width-images/section-bg-1.jpg\">
                <div class=\"container relative\">
                    <div class=\"section-text mb-50 mb-sm-20\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                          <ul class=\"bxslider\">
                            <li> <img src=\"admin/imagenes/aromas/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto1", array()), "html", null, true);
            echo "\"  style=\"width:100%\"> </li>
                            <li> <img src=\"admin/imagenes/aromas/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto2", array()), "html", null, true);
            echo "\"  style=\"width:100%\"> </li>
                            <li> <img src=\"admin/imagenes/aromas/";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto3", array()), "html", null, true);
            echo "\"  style=\"width:100%\"> </li>
                            <li> <img src=\"admin/imagenes/aromas/";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "foto4", array()), "html", null, true);
            echo "\"  style=\"width:100%\"> </li>
                          </ul>
              </div>
              <div class=\"col-md-4 col-22\">
                              <h2 class=\"tituloH1B mb-70 mb-sm-40\">
                                Hola Soy ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "
                          </h2>
                <div class=\"table-responsive\">
                  <table class=\"table\">
                    <tr><td>Sexo:</td><td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Edad:</td><td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "edad", array()), "html", null, true);
            echo " años</td></tr>
                    <tr><td>Cabello:</td><td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cabello", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Ojos:</td><td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ojos", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Piel:</td><td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "piel", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Estatura:</td><td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "estatura", array()), "html", null, true);
            echo " Cm</td></tr>
                    <tr><td>Busto:</td><td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "busto", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Peso:</td><td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "peso", array()), "html", null, true);
            echo " Kg</td></tr>
                    <tr><td>Idiomas:</td><td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idiomas", array()), "html", null, true);
            echo "</td></tr>
                    <tr><td>Tatuajes:</td><td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tatuajes", array()), "html", null, true);
            echo "</td></tr>
                  </table>
                </div>
              </div>
              </div>
              <div class=\"row\">
                            <div class=\"col-md-1\"></div>
                            <div class=\"col-md-4 col-12\">
                              <h2 class=\"tituloH1B mb-70 mb-sm-40\">Mis Servicios</h2>
                              <div class=\"table-responsive\">
                                <table class=\"table table-2\">
                                  <tr><td>Sexo Oral:</td><td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexOral", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Sexo Anal:</td><td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexAnal", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Atención a Hombres:</td><td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexHombre", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Atención a Mujeres:</td><td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexMujer", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Trío MHM:</td><td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioMHM", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Trío HMH:</td><td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "trioHMH", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Baile  Eroticos</td><td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "baile", array()), "html", null, true);
            echo "</td></tr>
                                  <tr><td>Lluvia Dorada</td><td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "lluviaDorada", array()), "html", null, true);
            echo "</td></tr>
                                </table>
                              </div>
                            </div>
                             <div class=\"col-md-1\"></div>
              <div class=\"col-md-4 col-22\">
               <h2 class=\"tituloH1B mb-70 mb-sm-40\">Tarifas</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-3\">
                      <tr><td>1 Hora:</td><td>\$";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valorHora", array()), "html", null, true);
            echo "</td></tr>
                      <tr><td>2 Horas:</td><td>\$";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor2Hora", array()), "html", null, true);
            echo "</td></tr>
                      <tr><td>2 Horas:</td><td>\$";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valor3Hora", array()), "html", null, true);
            echo "</td></tr>
                      <tr><td>Un Día:</td><td>\$";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "valorDia", array()), "html", null, true);
            echo "</td></tr>
                      <tr><td>Encuentro:</td><td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "encuentro", array()), "html", null, true);
            echo "</td></tr>
                    </table>
                  </div>
                          <a class=\"btn-1 open-popup-link\" href=\"#test-popup\">Quiero esta Aroma!</a>
              </div>
              </div>
              <div class=\"row col-md-12\">
                <p class=\"par-1\">
                    En La Perfumería Club encontrarás información detallada de cada una de nuestras dulces y sensuales Aromas contando con fotografías profesionales de alta calidad, actuales y 100% reales, garantizando así que al momento del encuentro la modelo sea la deseada. Son las más selectas y todas nuestras dulces Aromas son mayores de edad, modelos o universitarias, que realizan la actividad de escorts de forma voluntaria, discreta y esporádica.
                </p>
              </div>
              </div>
              </div>
</section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 132
    public function block_scripts($context, array $blocks = array())
    {
        // line 133
        echo "        <script type=\"text/javascript\" src=\"js/jquery-1.11.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>        
        <script type=\"text/javascript\" src=\"js/SmoothScroll.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.scrollTo.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.localScroll.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.viewport.mini.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.countTo.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.appear.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.sticky.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.parallax-1.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.fitvids.js\"></script>
        <script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/isotope.pkgd.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/imagesloaded.pkgd.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.magnific-popup.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/wow.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/masonry.pkgd.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.simple-text-rotator.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/scripts.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.ajaxchimp.min.js\"></script>       
        <script type=\"text/javascript\" src=\"js/jquery.bxslider.min.js\"></script>       
        <!--[if lt IE 10]><script type=\"text/javascript\" src=\"js/placeholder.js\"></script><![endif]-->
        <script>
            \$(document).ready(function(){
              \$('.bxslider').bxSlider();
            });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "verAroma.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  289 => 133,  286 => 132,  263 => 115,  259 => 114,  255 => 113,  251 => 112,  247 => 111,  235 => 102,  231 => 101,  227 => 100,  223 => 99,  219 => 98,  215 => 97,  211 => 96,  207 => 95,  193 => 84,  189 => 83,  185 => 82,  181 => 81,  177 => 80,  173 => 79,  169 => 78,  165 => 77,  161 => 76,  157 => 75,  150 => 71,  142 => 66,  138 => 65,  134 => 64,  130 => 63,  122 => 57,  117 => 56,  114 => 55,  101 => 20,  98 => 19,  92 => 4,  81 => 162,  79 => 132,  76 => 131,  74 => 55,  48 => 30,  46 => 19,  28 => 4,  23 => 1,);
    }
}
