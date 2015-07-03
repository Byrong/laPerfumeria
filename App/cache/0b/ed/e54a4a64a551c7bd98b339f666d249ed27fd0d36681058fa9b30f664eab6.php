<?php

/* listadoAromas.twig.html */
class __TwigTemplate_0bede54a4a64a551c7bd98b339f666d249ed27fd0d36681058fa9b30f664eab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listadoAromas' => array($this, 'block_listadoAromas'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "                <div class=\"container relative\">
                    <h2 class=\"tituloH1B mb-70 mb-sm-40\">
                      Nuestras Aromas
                    </h2>
                    <div class=\"section-text mb-50 mb-sm-20\">
                        <div class=\"row principal\">
                        ";
        // line 7
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 20
        echo "                            
                        </div>
                    </div>
                </div>
                    <div class=\"local-scroll\">
                        <a href=\"#planes\" class=\"scroll-down\">
                                    <img src=\"images/icoArrow.png\" alt=\"\" class=\"fa fa-angle-down scroll-down-icon\">    
                        </a>
                    </div>";
    }

    // line 7
    public function block_listadoAromas($context, array $blocks = array())
    {
        // line 8
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 9
            echo "                            <div class=\"col-md-3 box-aromas\">
                                <header>
                                    <img class=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "\" src=\"admin/imagenes/aromas/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\">
                                    <h2 class=\"text-3\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "aroma", array()), "html", null, true);
            echo "</h2>
                                </header>
                                <section>
                                    <a href=\"aroma.php?aroma=";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\" class=\"btn-2\">Ver perfil</a>
                                </section>
                            </div>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "listadoAromas.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  66 => 15,  60 => 12,  54 => 11,  50 => 9,  45 => 8,  42 => 7,  30 => 20,  28 => 7,  20 => 1,);
    }
}
