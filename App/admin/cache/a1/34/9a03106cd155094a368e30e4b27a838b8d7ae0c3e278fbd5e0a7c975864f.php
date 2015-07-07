<?php

/* login.twig.html */
class __TwigTemplate_a1349a03106cd155094a368e30e4b27a838b8d7ae0c3e278fbd5e0a7c975864f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainAdmin.twig.html");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainAdmin.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "\tAdministración
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"row\">
\t<div class=\"box-login\">
\t\t<header>
\t          <h2 class=\"titu-4\">Administración</h2>
\t\t</header>
\t\t<section class=\"cont-login\">
\t\t\t<form id=\"formLogin\" action=\"#\">
\t\t\t\t<p class=\"par-1\">
\t\t\t\t\tPara acceder a la administración de La Perfumería Club ingrese los siguientes datos.
\t\t\t\t</p>
\t\t\t\t<input class=\"input-1\" type=\"text\" placeholder=\"Usuario\">
\t\t\t\t<input class=\"input-1\" type=\"password\" placeholder=\"Contraseña\">
\t\t\t\t<input class=\"btn-1\"\ttype=\"submit\" value=\"Entrar\">
\t\t\t\t<a href=\"#\" class=\"legal\">¿Olvidastes tu contraseña?</a>
\t\t\t</form>
\t\t</section>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "login.twig.html";
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
