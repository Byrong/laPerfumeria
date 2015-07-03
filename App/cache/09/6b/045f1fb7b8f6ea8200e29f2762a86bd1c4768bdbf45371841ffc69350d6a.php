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
    <section class=\"page-section\" id=\"home\" data-background=\"images/full-width-images/section-bg-1.jpg\">
            ";
        // line 41
        $this->displayBlock('home', $context, $blocks);
        // line 44
        echo "    </section>
 <!-- [ End Home ] .......................................................................................................................................................................................................  -->
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
    <section class=\"page-section\" id=\"queEs\" data-background=\"images/full-width-images/bg2.jpg\">
    ";
        // line 73
        $this->displayBlock('queEs', $context, $blocks);
        // line 75
        echo "    </section>
 <!-- [ End Qué es ] .......................................................................................................................................................................................................  -->
 <!-- [ Ventajas ] .......................................................................................................................................................................................................  -->
    <section class=\"page-section\" id=\"aromas\" data-background=\"images/full-width-images/section-bg-1.jpg\">
    ";
        // line 79
        $this->displayBlock('aromas', $context, $blocks);
        // line 82
        echo "    </section>

 <!-- [ End Ventajas ] .......................................................................................................................................................................................................  -->
 <!-- [ Membresias ] .......................................................................................................................................................................................................  -->
   <section class=\"page-section pb-0\" id=\"membresia\" data-background=\"images/full-width-images/section-bg-2.jpg\">
   ";
        // line 87
        $this->displayBlock('membresia', $context, $blocks);
        // line 89
        echo "   </section>

 <!-- [ End Planes ] .......................................................................................................................................................................................................  -->
 <!-- [ Footer ] .......................................................................................................................................................................................................  -->
 <!-- [ End Footer ] .......................................................................................................................................................................................................  -->
 ";
        // line 94
        $this->displayBlock('perfilAroma', $context, $blocks);
        // line 96
        echo "        </div>
<!-- [ End Content ] .......................................................................................................................................................................................................  -->
        
        
<!-- [ Scripts ] .......................................................................................................................................................................................................  -->
        ";
        // line 101
        $this->displayBlock('scripts', $context, $blocks);
        // line 126
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

    // line 41
    public function block_home($context, array $blocks = array())
    {
        // line 42
        echo "
            ";
    }

    // line 73
    public function block_queEs($context, array $blocks = array())
    {
        // line 74
        echo "    ";
    }

    // line 79
    public function block_aromas($context, array $blocks = array())
    {
        // line 80
        echo "        ";
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 81
        echo "    ";
    }

    // line 80
    public function block_listadoAromas($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 87
    public function block_membresia($context, array $blocks = array())
    {
        // line 88
        echo "   ";
    }

    // line 94
    public function block_perfilAroma($context, array $blocks = array())
    {
    }

    // line 101
    public function block_scripts($context, array $blocks = array())
    {
        // line 102
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
        return array (  212 => 102,  209 => 101,  204 => 94,  200 => 88,  197 => 87,  191 => 80,  187 => 81,  184 => 80,  181 => 79,  177 => 74,  174 => 73,  169 => 42,  166 => 41,  154 => 20,  151 => 19,  145 => 4,  137 => 126,  135 => 101,  128 => 96,  126 => 94,  119 => 89,  117 => 87,  110 => 82,  108 => 79,  102 => 75,  100 => 73,  69 => 44,  67 => 41,  53 => 29,  51 => 19,  33 => 4,  28 => 1,);
    }
}
