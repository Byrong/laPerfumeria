<?php

/* aromas.twig.html */
class __TwigTemplate_8327e75230952cc69c154a745bc7b935467bfb7d8eaa31fa03eca91131f1793c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'parrafo' => array($this, 'block_parrafo'),
            'listadoAromas' => array($this, 'block_listadoAromas'),
            'perfilAroma' => array($this, 'block_perfilAroma'),
            'btnVerificar' => array($this, 'block_btnVerificar'),
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
          ";
        // line 14
        $this->displayBlock('parrafo', $context, $blocks);
        // line 15
        echo "      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-2 box-cont\">
                    ";
        // line 17
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 18
        echo "      </div>
      <div class=\"col-xs-12 col-sm-2 box-cont\">
                    ";
        // line 20
        $this->displayBlock('perfilAroma', $context, $blocks);
        // line 21
        echo "      </div>
        </div>
       <footer>";
        // line 23
        $this->displayBlock('btnVerificar', $context, $blocks);
        echo "</footer>

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

    // line 14
    public function block_parrafo($context, array $blocks = array())
    {
        echo "    ";
    }

    // line 17
    public function block_listadoAromas($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 20
    public function block_perfilAroma($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 23
    public function block_btnVerificar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "aromas.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 20,  79 => 17,  73 => 14,  56 => 23,  52 => 21,  50 => 20,  46 => 18,  44 => 17,  40 => 15,  38 => 14,  23 => 1,);
    }
}
