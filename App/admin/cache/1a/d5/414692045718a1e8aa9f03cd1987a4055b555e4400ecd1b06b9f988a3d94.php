<?php

/* mainAdmin.twig.html */
class __TwigTemplate_1ad5414692045718a1e8aa9f03cd1987a4055b555e4400ecd1b06b9f988a3d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'estilos' => array($this, 'block_estilos'),
            'contenido' => array($this, 'block_contenido'),
            'scripst' => array($this, 'block_scripst'),
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
        // line 12
        echo "</head>
";
        // line 13
        $this->env->loadTemplate("tools.twig.html")->display($context);
        // line 14
        echo "<body>
\t<div id=\"admin-perfumeria\" class=\"container-fluid\">
\t      ";
        // line 16
        $this->displayBlock('contenido', $context, $blocks);
        // line 19
        echo "\t</div>

";
        // line 21
        $this->displayBlock('scripst', $context, $blocks);
        // line 25
        echo "
<body>
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
\t";
    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        echo "         

\t      ";
    }

    // line 21
    public function block_scripst($context, array $blocks = array())
    {
        // line 22
        echo "    <script src=\"../js/jquery-1.11.1.min.js\"></script>
    <script src=\"../js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "mainAdmin.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  83 => 21,  75 => 16,  68 => 8,  65 => 7,  60 => 5,  53 => 25,  51 => 21,  47 => 19,  45 => 16,  41 => 14,  39 => 13,  36 => 12,  34 => 7,  29 => 5,  23 => 1,);
    }
}
