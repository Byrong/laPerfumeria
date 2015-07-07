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
                            <li><a href=\"#membresia\">Membresias</a></li>
                            <li><a href=\"#descargas\">Registrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
 <!-- [ End Main menu ] .......................................................................................................................................................................................................  -->
 <!-- [ Qué es ] .......................................................................................................................................................................................................  -->
    ";
        // line 70
        $this->displayBlock('queEs', $context, $blocks);
        // line 72
        echo " <!-- [ End Qué es ] .......................................................................................................................................................................................................  -->
 <!-- [ Ventajas ] .......................................................................................................................................................................................................  -->
    ";
        // line 74
        $this->displayBlock('aromas', $context, $blocks);
        // line 77
        echo "
 <!-- [ End Ventajas ] .......................................................................................................................................................................................................  -->
 <!-- [ Membresias ] .......................................................................................................................................................................................................  -->
   ";
        // line 80
        $this->displayBlock('membresia', $context, $blocks);
        // line 82
        echo " <!-- [ End Planes ] .......................................................................................................................................................................................................  -->
 <!-- [ Footer ] .......................................................................................................................................................................................................  -->
 <!-- [ End Footer ] .......................................................................................................................................................................................................  -->
        </div>
<!-- [ End Content ] .......................................................................................................................................................................................................  -->
        
        
<!-- [ Scripts ] .......................................................................................................................................................................................................  -->
        ";
        // line 90
        $this->displayBlock('scripts', $context, $blocks);
        // line 115
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

    // line 90
    public function block_scripts($context, array $blocks = array())
    {
        // line 91
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
        <script type=\"text/javascript\" src=\"js/descargas-form.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery.ajaxchimp.min.js\"></script>       
        <!--[if lt IE 10]><script type=\"text/javascript\" src=\"js/placeholder.js\"></script><![endif]-->
        ";
    }

    public function getTemplateName()
    {
        return "mainLayer.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  193 => 91,  190 => 90,  186 => 81,  183 => 80,  177 => 75,  173 => 76,  170 => 75,  167 => 74,  163 => 71,  160 => 70,  155 => 41,  152 => 40,  140 => 20,  137 => 19,  131 => 4,  123 => 115,  121 => 90,  111 => 82,  109 => 80,  104 => 77,  102 => 74,  98 => 72,  96 => 70,  67 => 43,  65 => 40,  52 => 29,  50 => 19,  32 => 4,  27 => 1,);
    }
}
