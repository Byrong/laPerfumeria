<?php

/* verAromas.twig.html */
class __TwigTemplate_8fa0a6e02f71e49af8caf19bbbd3bc5fa4cc6385bf026eedf410497129a0c4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("aromas.twig.html");

        $this->blocks = array(
            'listadoAromas' => array($this, 'block_listadoAromas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "aromas.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_listadoAromas($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "                  <div class=\"box-aroma e";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
            echo " \">
                  <header>
                            <span  class=\"label\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "</span>
                  </header>
                  <figure>
                    <div class=\"box-ver\">
                            ¡Disfruta de un grán placer!
                    </div>
                    <img src=\"admin/imagenes/aromas/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\">
                  </figure>
                  <article class=\"cont-info\">
                    <h2>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "aroma", array()), "html", null, true);
            echo "</h2>
                    <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "definicion", array()), "html", null, true);
            echo "</h3>
                    <a href=\"aroma.php?aroma=";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\" class=\"btn-1\">Ver aroma</a>
                  </article>
              </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "verAromas.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  61 => 19,  57 => 18,  51 => 15,  42 => 9,  36 => 7,  31 => 6,  28 => 5,);
    }
}
