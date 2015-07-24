<?php

/* backend/mainAdmin.twig.html */
class __TwigTemplate_fb52bcc0bec13eb3b4fa8b0525122f0a4a14b3622ee35da96e84894bf669c8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'estilos' => array($this, 'block_estilos'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t";
        // line 7
        $this->displayBlock('estilos', $context, $blocks);
        // line 13
        echo "</head>

<body>
\t<div id=\"admin-perfumeria\" class=\"container-fluid\">
\t      ";
        // line 17
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "\t</div>

    <script src=\"../js/jquery-1.11.1.min.js\"></script>
    <script src=\"../js/bootstrap.min.js\"></script>
";
        // line 24
        $this->displayBlock('scripts', $context, $blocks);
        // line 26
        echo "<body>
</html>
";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 7
    public function block_estilos($context, array $blocks = array())
    {
        // line 8
        echo "\t  <link href=\"../css/bootstrap.css\" rel=\"stylesheet\">
\t  <link href=\"../css/fonts_movi.css\" rel=\"stylesheet\">
\t  <link href=\"../css/adminPerfumeria.css\" rel=\"stylesheet\">
\t  <link href=\"../css/animate.css\" rel=\"stylesheet\">
\t";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        echo "         

\t      ";
    }

    // line 24
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "backend/mainAdmin.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  74 => 17,  66 => 8,  63 => 7,  58 => 5,  52 => 26,  50 => 24,  44 => 20,  42 => 17,  36 => 13,  34 => 7,  29 => 5,  23 => 1,);
    }
}
