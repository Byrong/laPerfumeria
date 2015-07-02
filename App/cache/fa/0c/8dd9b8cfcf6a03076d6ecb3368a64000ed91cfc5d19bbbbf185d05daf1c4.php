<?php

/* index.twig.html */
class __TwigTemplate_fa0c8dd9b8cfcf6a03076d6ecb3368a64000ed91cfc5d19bbbbf185d05daf1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig.html");

        $this->blocks = array(
            'subtitulo' => array($this, 'block_subtitulo'),
            'contenido' => array($this, 'block_contenido'),
            'parrafo2' => array($this, 'block_parrafo2'),
            'parrafo3' => array($this, 'block_parrafo3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subtitulo($context, array $blocks = array())
    {
        // line 4
        echo "  Página principal
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "  <p>
    Esta es la página principal de nuestra
  </p>
";
    }

    // line 13
    public function block_parrafo2($context, array $blocks = array())
    {
        // line 14
        echo "  <p>
    Esta es la página principal de nuestra 2
  </p>
";
    }

    // line 19
    public function block_parrafo3($context, array $blocks = array())
    {
        // line 20
        echo "  <p>
    Esta es la página principal de nuestra 3
  </p>
";
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
        return array (  62 => 20,  59 => 19,  52 => 14,  49 => 13,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
