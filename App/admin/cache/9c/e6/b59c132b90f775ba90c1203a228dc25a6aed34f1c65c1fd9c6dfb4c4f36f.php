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
            'solicitudes' => array($this, 'block_solicitudes'),
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

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"app\" class=\"row\">
\t<header class=\"top-1 container-fluid\">
\t\t<h2 class=\"titu-1\">La Perfumería Club</h2>
\t\t<div class=\"cuenta\"><img src=\"../images/avatar.png\" alt=\"\"><span class=\"ico-flecha\">+</span></div>
\t</header>
\t<section class=\"wrapper container-fluid\">
\t\t<div class=\"col-md-4 col-sm-4 col-xs-12 listado\">
\t\t\t";
        // line 15
        $this->displayBlock('solicitudes', $context, $blocks);
        // line 17
        echo "\t\t</div>
\t\t<div class=\"col-md-8 col-sm-8 col-xs-12\">
\t\t\tModo Visión
\t\t</div>
\t</section>
</section>
";
    }

    // line 15
    public function block_solicitudes($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t";
    }

    // line 25
    public function block_scripst($context, array $blocks = array())
    {
        // line 26
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
        return array (  73 => 26,  70 => 25,  66 => 16,  63 => 15,  53 => 17,  51 => 15,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
