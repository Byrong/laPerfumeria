<?php

/* stock.twig.html */
class __TwigTemplate_1500de2d6a61a7e91c62d55e3335a3b63687510b4a8cf39fdcf4177fd8194592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitulo' => array($this, 'block_subtitulo'),
            'parrafo' => array($this, 'block_parrafo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["marca"]) ? $context["marca"] : null), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_subtitulo($context, array $blocks = array())
    {
        // line 6
        echo "  Moviles ";
        echo twig_escape_filter($this->env, (isset($context["marca"]) ? $context["marca"] : null), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_parrafo($context, array $blocks = array())
    {
        // line 10
        echo "   <p>
        Este es un nuevo parrafo
   </p>
";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "  <ul>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moviles"]) ? $context["moviles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 18
            echo "      <li>
        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "
        <br />
        <a href=\"images/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\">
          <img src=\"images/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "\" class=\"imagen\" />
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "stock.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  82 => 22,  78 => 21,  73 => 19,  70 => 18,  66 => 17,  63 => 16,  60 => 15,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  31 => 3,);
    }
}
