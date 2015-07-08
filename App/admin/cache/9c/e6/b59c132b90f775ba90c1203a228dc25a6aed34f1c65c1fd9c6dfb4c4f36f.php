<?php

/* app.twig.html */
class __TwigTemplate_9ce6b59c132b90f775ba90c1203a228dc25a6aed34f1c65c1fd9c6dfb4c4f36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainAdmin.twig.html");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
            'menu' => array($this, 'block_menu'),
            'solicitudes' => array($this, 'block_solicitudes'),
            'mostrarDatos' => array($this, 'block_mostrarDatos'),
            'scripst' => array($this, 'block_scripst'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainAdmin.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "\tAdministración
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<section id=\"app\" class=\"row\">
\t<header class=\"top-1 container-fluid\">
\t\t<h2 class=\"titu-1\">La Perfumería Club</h2>
\t\t<div class=\"cuenta\"><img src=\"../images/avatar.png\" alt=\"\"><span class=\"ico-flecha\">+</span></div>
\t</header>
\t<section class=\"wrapper container-fluid\">
\t\t<div class=\"col-md-2 col-sm-3 col-xs-12 menuAdmin\">
\t\t\t";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "\t\t</div>
\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 listado\">
\t\t\t";
        // line 19
        $this->displayBlock('solicitudes', $context, $blocks);
        // line 22
        echo "\t\t</div>
\t\t<div class=\"col-md-7 col-sm-8 col-xs-12 cont-datos\">
\t\t\t";
        // line 24
        $this->displayBlock('mostrarDatos', $context, $blocks);
        // line 27
        echo "\t\t</div>
\t</section>
</section>
";
    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t\t";
        $this->env->loadTemplate("menuAdmin.twig.html")->display($context);
        // line 16
        echo "\t\t\t";
    }

    // line 19
    public function block_solicitudes($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\t\t";
        $this->env->loadTemplate("solicitudesAroma.twig.html")->display($context);
        // line 21
        echo "\t\t\t";
    }

    // line 24
    public function block_mostrarDatos($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t";
        $this->env->loadTemplate("datosSolicitudes.twig.html")->display($context);
        // line 26
        echo "\t\t\t";
    }

    // line 32
    public function block_scripst($context, array $blocks = array())
    {
        // line 33
        echo "<script src=\"../js/admin.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "app.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  104 => 32,  100 => 26,  97 => 25,  94 => 24,  90 => 21,  87 => 20,  84 => 19,  80 => 16,  77 => 15,  74 => 14,  67 => 27,  65 => 24,  61 => 22,  59 => 19,  55 => 17,  53 => 14,  44 => 7,  41 => 6,  36 => 4,  33 => 3,);
    }
}
