<?php

/* mainLayer.twig.html */
class __TwigTemplate_096b045f1fb7b8f6ea8200e29f2762a86bd1c4768bdbf45371841ffc69350d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'estilos' => array($this, 'block_estilos'),
            'home' => array($this, 'block_home'),
            'queEs' => array($this, 'block_queEs'),
            'aromas' => array($this, 'block_aromas'),
            'listadoAromas' => array($this, 'block_listadoAromas'),
            'membresia' => array($this, 'block_membresia'),
            'politicas' => array($this, 'block_politicas'),
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
        // line 29
        echo "<!-- [ End Scripts ] .......................................................................................................................................................................................................  -->
    </head>
    <body class=\"appear-animate\">
        <!-- Page Loader -->        
        <div class=\"page-loader\">
            <div class=\"loader\">Cargando...</div>
        </div>
        <!-- End Page Loader -->
<!-- [ Content ] .......................................................................................................................................................................................................  -->
        <div class=\"page\" id=\"top\">
 <!-- [ Home ] .......................................................................................................................................................................................................  -->
            ";
        // line 40
        $this->displayBlock('home', $context, $blocks);
        // line 43
        echo " <!-- [ End Home ] .......................................................................................................................................................................................................  -->
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
                            <li class=\"active\"><a href=\"#home\">Inicio</a></li>
                            <li><a href=\"#queEs\">¿Qué es?</a></li>
                            <li><a href=\"#aromas\">Aromas</a></li>
                            <li><a href=\"#membresias\">Membresias</a></li>
                            <li><a href=\"#politicas\">Nuestras Politicas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
 <!-- [ End Main menu ] ......................................................................................................  -->
 <!-- [ Qué es ] .................................................................................................................  -->
    ";
        // line 70
        $this->displayBlock('queEs', $context, $blocks);
        // line 72
        echo " <!-- [ End Qué es ] ...........................................................................................................  -->
 <!-- [ Ventajas ] ...............................................................................................................  -->
    ";
        // line 74
        $this->displayBlock('aromas', $context, $blocks);
        // line 77
        echo "
 <!-- [ End Ventajas ] ..........................................................................................................  -->
 <!-- [ Membresias ] ............................................................................................................  -->
   ";
        // line 80
        $this->displayBlock('membresia', $context, $blocks);
        // line 82
        echo " <!-- [ End membresias ] ..............................................................................................................  -->
  <!-- [ politicas ] ............................................................................................................  -->
   ";
        // line 84
        $this->displayBlock('politicas', $context, $blocks);
        // line 86
        echo " <!-- [ End politicas ] ..............................................................................................................  -->
 <!-- [ Footer ] ....................................................................................................................  -->
 <!-- [ End Footer ] ..............................................................................................................  -->
        </div>
<!-- [ End Content ] .............................................................................................................  -->
        
        
<!-- [ Scripts ] .......................................................................................................................................................................................................  -->
        ";
        // line 94
        $this->displayBlock('scripts', $context, $blocks);
        // line 111
        echo "
<!-- [ End Scripts ] .......................................................................................................................................................................................................  -->
    </body>
</html>
";
    }

    // line 4
    public function block_titulo($context, array $blocks = array())
    {
        echo " La Perfumeria Club";
    }

    // line 19
    public function block_estilos($context, array $blocks = array())
    {
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"css/style-responsive.css\">
        <!-- <link rel=\"stylesheet\" href=\"css/animate.min.css\"> -->
        <!-- <link rel=\"stylesheet\" href=\"css/vertical-rhythm.min.css\"> -->
        <!-- <link rel=\"stylesheet\" href=\"css/owl.carousel.css\"> -->
        <link rel=\"stylesheet\" href=\"css/fonts_movi.css\">        
        <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">        
        <link rel=\"stylesheet\" href=\"css/style.css\">
        ";
    }

    // line 40
    public function block_home($context, array $blocks = array())
    {
        // line 41
        echo "
            ";
    }

    // line 70
    public function block_queEs($context, array $blocks = array())
    {
        // line 71
        echo "    ";
    }

    // line 74
    public function block_aromas($context, array $blocks = array())
    {
        // line 75
        echo "        ";
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 76
        echo "    ";
    }

    // line 75
    public function block_listadoAromas($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 80
    public function block_membresia($context, array $blocks = array())
    {
        // line 81
        echo "   ";
    }

    // line 84
    public function block_politicas($context, array $blocks = array())
    {
        // line 85
        echo "   ";
    }

    // line 94
    public function block_scripts($context, array $blocks = array())
    {
        // line 95
        echo "        <script type=\"text/javascript\" src=\"js/jquery-1.11.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.easing.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>        
        <script type=\"text/javascript\" src=\"js/SmoothScroll.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.scrollTo.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.localScroll.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.viewport.mini.js\"></script>
        <!-- Para mantener cualquiel elemento del Dom Visibile mientras se hace Scroll * 
            <script type=\"text/javascript\" src=\"js/jquery.sticky.js\"></script> 
            -->
        <script type=\"text/javascript\" src=\"js/jquery.parallax-1.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.fitvids.js\"></script>
        <!-- <script type=\"text/javascript\" src=\"js/owl.carousel.min.js\"></script> -->
        <script type=\"text/javascript\" src=\"js/jquery.magnific-popup.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/scripts.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "mainLayer.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  207 => 95,  204 => 94,  200 => 85,  197 => 84,  193 => 81,  190 => 80,  184 => 75,  180 => 76,  177 => 75,  174 => 74,  170 => 71,  167 => 70,  162 => 41,  159 => 40,  147 => 20,  144 => 19,  138 => 4,  130 => 111,  128 => 94,  118 => 86,  116 => 84,  112 => 82,  110 => 80,  105 => 77,  103 => 74,  99 => 72,  97 => 70,  68 => 43,  66 => 40,  53 => 29,  51 => 19,  33 => 4,  28 => 1,);
    }
}
