<?php

/* base.twig.html */
class __TwigTemplate_568ee3df77dc6a8cbbef23464093aac83e30433a99b1c3f904f80e53147274d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'parrafo' => array($this, 'block_parrafo'),
            'post_Lunes' => array($this, 'block_post_Lunes'),
            'post_Martes' => array($this, 'block_post_Martes'),
            'post_Miercoles' => array($this, 'block_post_Miercoles'),
            'post_Jueves' => array($this, 'block_post_Jueves'),
            'post_Viernes' => array($this, 'block_post_Viernes'),
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
  <link href=\"css/perfumeria.css\" rel=\"stylesheet\">
  <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script> -->
</head>
  <body>
<div id=\"cont-perfumeria\" class=\"container-fluid\">
  <h2>Contenido</h2>
          ";
        // line 15
        $this->displayBlock('parrafo', $context, $blocks);
        // line 16
        echo "      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-2 box-cont\">
                    <h2 class=\"titu-4\">Lunes</h2>
                    ";
        // line 19
        $this->displayBlock('post_Lunes', $context, $blocks);
        // line 20
        echo "      </div>
       <div class=\"col-xs-12 col-sm-2 box-cont\">
                    <h2 class=\"titu-4\">Martes</h2>
                    ";
        // line 23
        $this->displayBlock('post_Martes', $context, $blocks);
        // line 24
        echo "      </div>
      <div class=\"col-xs-12 col-sm-2 box-cont\">
                    <h2 class=\"titu-4\">Miercoles</h2>
                    ";
        // line 27
        $this->displayBlock('post_Miercoles', $context, $blocks);
        // line 28
        echo "      </div>
      <div class=\"col-xs-12 col-sm-2 box-cont\">
                    <h2 class=\"titu-4\">Jueves</h2>
                    ";
        // line 31
        $this->displayBlock('post_Jueves', $context, $blocks);
        // line 32
        echo "      </div>
       <div class=\"col-xs-12 col-sm-2 box-cont\">
                    <h2 class=\"titu-4\">Viernes</h2>
                    ";
        // line 35
        $this->displayBlock('post_Viernes', $context, $blocks);
        // line 36
        echo "      </div>
        </div>
       <footer>";
        // line 38
        $this->displayBlock('btnVerificar', $context, $blocks);
        echo "</footer>

</div>

<script src=\"js/jquery-1.11.1.min.js\"></script>
<script src=\"js/holder.min.js\"></script>
<script src=\"js/jquery.circliful.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>
<script src=\"js/appmerk.js\"></script>

  <body>
</html>
";
    }

    // line 15
    public function block_parrafo($context, array $blocks = array())
    {
        echo "    ";
    }

    // line 19
    public function block_post_Lunes($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 23
    public function block_post_Martes($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 27
    public function block_post_Miercoles($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 31
    public function block_post_Jueves($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 35
    public function block_post_Viernes($context, array $blocks = array())
    {
        echo "             ";
    }

    // line 38
    public function block_btnVerificar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  130 => 35,  124 => 31,  118 => 27,  112 => 23,  106 => 19,  100 => 15,  83 => 38,  79 => 36,  77 => 35,  72 => 32,  70 => 31,  65 => 28,  63 => 27,  58 => 24,  56 => 23,  51 => 20,  49 => 19,  44 => 16,  42 => 15,  26 => 1,);
    }
}
