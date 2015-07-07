<?php

/* listadoAromas.twig.html */
class __TwigTemplate_61edfc43273a5294a1fd7778f098da8427c57966af6fb6edec7cda0e5ed2d70a extends Twig_Template
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
        echo "<section class=\"page-section\" id=\"aromas\" data-background=\"images/full-width-images/section-bg-1.jpg\">
 <div class=\"container relative\">
                    <h2 class=\"tituloH1B mb-70 mb-sm-40\">
                      Nuestras Aromas
                    </h2>
                    <div class=\"section-text mb-50 mb-sm-20\">
                        <div class=\"row principal\">
                        ";
        // line 8
        $this->displayBlock('listadoAromas', $context, $blocks);
        // line 21
        echo "                        </div>
                    </div>
</div>
<div class=\"local-scroll\">
        <a href=\"#planes\" class=\"scroll-down\">
                    <img src=\"images/icoArrow.png\" alt=\"\" class=\"fa fa-angle-down scroll-down-icon\">    
        </a>
</div>
</section>";
    }

    // line 8
    public function block_listadoAromas($context, array $blocks = array())
    {
        // line 9
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 10
            echo "                            <div class=\"col-md-3 box-aromas\">
                                <header>
                                    <img class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "\" src=\"admin/imagenes/aromas/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
            echo "\">
                                    <h2 class=\"text-3\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "aroma", array()), "html", null, true);
            echo "</h2>
                                </header>
                                <section>
                                    <a href=\"aromaSeleccionada.php?aroma=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\" class=\"btn-2\">Ver perfil</a>
                                </section>
                            </div>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "listadoAromas.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  67 => 16,  61 => 13,  55 => 12,  51 => 10,  46 => 9,  43 => 8,  31 => 21,  29 => 8,  20 => 1,);
    }
}
