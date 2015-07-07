<?php

/* inicio.twig.html */
class __TwigTemplate_3f7547d64347519420327bbafa0d1bc567b0fca986ae2226796c63c97d0cb116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainLayer.twig.html");

        $this->blocks = array(
            'inicio' => array($this, 'block_inicio'),
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
    public function block_inicio($context, array $blocks = array())
    {
        // line 4
        echo "   <section id=\"home\" class=\"home-section\" data-background=\"images/full-width-images/section-bg-1.jpg\">
                    <!-- Hero Content -->
                    <div class=\"container relative\">
                        <div class=\"home-text mb-50 mb-sm-20\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-6 mb-sm-50 mb-xs-30 col-1\">
                                <div class=\"vidResp video-1\">
                                    <iframe width=\"760\" height=\"315\" src=\"https://www.youtube.com/embed/gWePS2V6opQ\" frameborder=\"0\" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-5 mb-sm-50 mb-xs-30 col-2\">
                                <p class=\"par-1\">
                                    Movistar TU Go es la nueva aplicación con la que podrás estar siempre conectado con Colombia, y comunicarte con tus familiares o amigos sin indicativos, desde cualquier dispositivo y por el precio de una llamada local.
                                </p>
                                <div class=\"box-promo\">
                                    <div class=\"cont-promo\">
                                                <span class=\"text-1\">Recibe</span>
                                                <span class=\"text-2\">100 minutos</span>
                                                <span class=\"text-2\">GRATIS.</span>
                                                <a href=\"#\" class=\"btn-1\">Actívalo aquí</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <!-- End Hero Content -->
                    
                    <!-- Scroll Down -->
                    <div class=\"local-scroll\">
                        <a href=\"#queEs\" class=\"scroll-down\">
                                    <img src=\"images/icoArrow.png\" alt=\"\" class=\"fa fa-angle-down scroll-down-icon\">    
                        </a>
                    </div>
                    <!-- End Scroll Down -->
          </section>
";
    }

    public function getTemplateName()
    {
        return "inicio.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
