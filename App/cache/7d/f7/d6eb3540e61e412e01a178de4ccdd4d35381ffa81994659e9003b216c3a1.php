<?php

/* layout.twig.html */
class __TwigTemplate_7df7d6eb3540e61e412e01a178de4ccdd4d35381ffa81994659e9003b216c3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subtitulo' => array($this, 'block_subtitulo'),
            'parrafo' => array($this, 'block_parrafo'),
            'parrafo2' => array($this, 'block_parrafo2'),
            'parrafo3' => array($this, 'block_parrafo3'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>Sociamed 2</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"css/jquery.circliful.css\" rel=\"stylesheet\">
  <link href=\"css/appMerk.css\" rel=\"stylesheet\">
  <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script> -->
  <script src=\"js/jquery-1.11.1.min.js\"></script>
        <script src=\"js/holder.min.js\"></script>
        <script src=\"js/jquery.circliful.min.js\"></script>
      <script src=\"js/bootstrap.js\"></script>
  <script src=\"js/appmerk.js\"></script>
</head>
  <body>
    <h1>Moviles para Todos</h1>

    <div class=\"menu\">
  <ul>
    <li><a href=\"index.php\">Inicio</a></li>
    <li><a href=\"marcas.php?marca=nokia\">Nokia</a></li>
    <li><a href=\"marcas.php?marca=samsung\">Samsung</a></li>
    <li><a href=\"marcas.php?marca=htc\">HTC</a></li>
    <li><a href=\"marcas.php?marca=alcatel\">Alcatel</a></li>
  </ul>
</div>

    <h2>";
        // line 30
        $this->displayBlock('subtitulo', $context, $blocks);
        echo "</h2>
    <h2>";
        // line 31
        $this->displayBlock('parrafo', $context, $blocks);
        echo "</h2>
    <h2>";
        // line 32
        $this->displayBlock('parrafo2', $context, $blocks);
        echo "</h2>
    <h2>";
        // line 33
        $this->displayBlock('parrafo3', $context, $blocks);
        echo "</h2>

    <div>
      ";
        // line 36
        $this->displayBlock('contenido', $context, $blocks);
        // line 38
        echo "    </div>
  <body>
</html>
";
    }

    // line 30
    public function block_subtitulo($context, array $blocks = array())
    {
    }

    // line 31
    public function block_parrafo($context, array $blocks = array())
    {
    }

    // line 32
    public function block_parrafo2($context, array $blocks = array())
    {
    }

    // line 33
    public function block_parrafo3($context, array $blocks = array())
    {
    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        // line 37
        echo "      ";
    }

    public function getTemplateName()
    {
        return "layout.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  102 => 36,  97 => 33,  92 => 32,  87 => 31,  82 => 30,  75 => 38,  73 => 36,  67 => 33,  63 => 32,  59 => 31,  55 => 30,  24 => 1,);
    }
}
