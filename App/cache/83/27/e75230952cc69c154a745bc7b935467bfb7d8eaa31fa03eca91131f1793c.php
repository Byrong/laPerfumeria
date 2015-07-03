<?php

/* aromas.twig.html */
class __TwigTemplate_8327e75230952cc69c154a745bc7b935467bfb7d8eaa31fa03eca91131f1793c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listadoAromas' => array($this, 'block_listadoAromas'),
            'perfilAroma' => array($this, 'block_perfilAroma'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>La Perfumeria Club</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
  <link href=\"css/jquery.circliful.css\" rel=\"stylesheet\">
  <link href=\"css/perfume.css\" rel=\"stylesheet\">
  <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script> -->
</head>
  <body>
<div id=\"cont-perfumeria\" class=\"container-fluid\">
      <header class=\"encabezado\">
      <h1 class=\"logo\"><img src=\"images/logo_perfumeria.png\" alt=\"La Perfumeria Club\"></h1>
      <nav class=\"menu-1\">
        <div class=\"cont-a\">
          <a href=\"#\">Inicio</a>
          <a href=\"#\">Aromas</a>
          <a href=\"#\">Politicas</a>
          <a href=\"#\">Contacto</a>
        </div>
      </nav>
    </header>
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-2 box-cont\">
                    ";
        // line 27
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 28
        echo "      </div>
      <div class=\"col-xs-12 col-sm-2 box-cont\">
                    ";
        // line 30
        $this->displayBlock('perfilAroma', $context, $blocks);
        // line 31
        echo "      </div>
        </div>
</div>

<script src=\"js/jquery-1.11.1.min.js\"></script>
<script src=\"js/holder.min.js\"></script>
<script src=\"js/jquery.circliful.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>
<script src=\"js/perfume.js\"></script>

  <body>
</html>
";
    }

    // line 27
    public function block_listadoAromas($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 30
    public function block_perfilAroma($context, array $blocks = array())
    {
        echo "             ";
    }

    public function getTemplateName()
    {
        return "aromas.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  73 => 27,  57 => 31,  55 => 30,  51 => 28,  49 => 27,  21 => 1,);
    }
}
