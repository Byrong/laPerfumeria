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
            'scripts' => array($this, 'block_scripts'),
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
\t\t<div class=\"cuenta\">
\t\t\t<img src=\"../images/admin/perfilAdmin.jpg\" alt=\"\"><span class=\"control\">+</span>
\t\t\t<div class=\"panelControl\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Mi Cuenta</a></li>
\t\t\t\t\t<li><a href=\"#\">Salir</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</header>
\t<section class=\"wrapper container-fluid\">
\t\t<div class=\"col-md-2 col-sm-3 col-xs-12 menuAdmin\">
\t\t\t";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "\t\t</div>
\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 listado\">
\t\t\t";
        // line 27
        $this->displayBlock('solicitudes', $context, $blocks);
        // line 30
        echo "\t\t</div>
\t\t<div class=\"col-md-7 col-sm-8 col-xs-12 cont-datos\">
\t\t\t";
        // line 32
        $this->displayBlock('mostrarDatos', $context, $blocks);
        // line 35
        echo "\t\t</div>
\t</section>
</section>
";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t";
        $this->env->loadTemplate("menuAdmin.twig.html")->display($context);
        // line 24
        echo "\t\t\t";
    }

    // line 27
    public function block_solicitudes($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t";
        $this->env->loadTemplate("solicitudesAroma.twig.html")->display($context);
        // line 29
        echo "\t\t\t";
    }

    // line 32
    public function block_mostrarDatos($context, array $blocks = array())
    {
        // line 33
        echo "\t\t\t\t";
        $this->env->loadTemplate("datosSolicitudes.twig.html")->display($context);
        // line 34
        echo "\t\t\t";
    }

    // line 40
    public function block_scripts($context, array $blocks = array())
    {
        // line 41
        echo "\t<script src=\"jsAdmin/admin.js\"></script>
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
        return array (  115 => 41,  112 => 40,  108 => 34,  105 => 33,  102 => 32,  98 => 29,  95 => 28,  92 => 27,  88 => 24,  85 => 23,  82 => 22,  75 => 35,  73 => 32,  69 => 30,  67 => 27,  63 => 25,  61 => 22,  44 => 7,  41 => 6,  36 => 4,  33 => 3,);
    }
}
