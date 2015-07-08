<?php

/* contSolicitudes.twig.html */
class __TwigTemplate_d0fc3e8e90109fce4d3e1d3d0892df28cb15c03270ace845c07359ba8eed317f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'solicitudes' => array($this, 'block_solicitudes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


";
        // line 4
        $this->displayBlock('menu', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('solicitudes', $context, $blocks);
        // line 11
        echo "
Hola";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "\tSoy un menu
";
    }

    // line 8
    public function block_solicitudes($context, array $blocks = array())
    {
        // line 9
        echo "\tsoy una solicitud
";
    }

    public function getTemplateName()
    {
        return "contSolicitudes.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  41 => 5,  38 => 4,  33 => 11,  31 => 8,  28 => 7,  26 => 4,  21 => 1,);
    }
}
