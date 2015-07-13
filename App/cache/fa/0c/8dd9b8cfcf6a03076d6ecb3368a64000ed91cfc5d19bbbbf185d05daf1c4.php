<?php

/* index.twig.html */
class __TwigTemplate_fa0c8dd9b8cfcf6a03076d6ecb3368a64000ed91cfc5d19bbbbf185d05daf1c4 extends Twig_Template
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
            'politicas' => array($this, 'block_politicas'),
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

    // line 15
    public function block_politicas($context, array $blocks = array())
    {
        // line 16
        echo "\t";
        $this->env->loadTemplate("politicas.twig.html")->display($context);
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
        return array (  67 => 16,  64 => 15,  59 => 13,  56 => 12,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  35 => 4,  32 => 3,);
    }
}
