<?php

/* footer.twig.html */
class __TwigTemplate_6538c8837d9a6d5ada0a2e07675958aaea139f0ccaed6d60dff2adb5af69593e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.twig.html");

        $this->blocks = array(
            'subtitulo' => array($this, 'block_subtitulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.twig.html";
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

    public function getTemplateName()
    {
        return "footer.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
