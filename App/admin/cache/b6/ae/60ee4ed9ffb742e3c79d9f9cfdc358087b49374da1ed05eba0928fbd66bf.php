<?php

/* index.twig.html */
class __TwigTemplate_b6ae60ee4ed9ffb742e3c79d9f9cfdc358087b49374da1ed05eba0928fbd66bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainLayer.twig.html");

        $this->blocks = array(
            'home' => array($this, 'block_home'),
            'queEs' => array($this, 'block_queEs'),
            'aromas' => array($this, 'block_aromas'),
            'membresia' => array($this, 'block_membresia'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainLayer.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_home($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->env->loadTemplate("home.twig.html")->display($context);
    }

    // line 6
    public function block_queEs($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->env->loadTemplate("queEs.twig.html")->display($context);
    }

    // line 9
    public function block_aromas($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->env->loadTemplate("listadoAromas.twig.html")->display($context);
    }

    // line 12
    public function block_membresia($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        $this->env->loadTemplate("membresias.twig.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  55 => 12,  50 => 10,  47 => 9,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
