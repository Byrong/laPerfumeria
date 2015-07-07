<?php

/* adminVerAroma.twig.html */
class __TwigTemplate_69cce61cace3168a879b7631babace97fc79dd77330ca09f8cd96088bbec539e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("app.twig.html");

        $this->blocks = array(
            'col1' => array($this, 'block_col1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_col1($context, array $blocks = array())
    {
        // line 4
        echo "
      <header class=\"encabezado-1\">
        <h2>SOLICITUDES PENDIENTE</h2>
        <span class=\"ico-solicitudes\">&nbsp;</span>
      </header>
      <ul class=\"box-solicitud\">
        <li>
          <header class=\"fecha\">
            <span class=\"dia\">01 JULIO DE 2015</span>
          </header>
          <article class=\"cont-solicitud\">
            <table class=\"tabla-\">
              <tr>
                <td>Stefany Rodriguez</td>
                <td>ID: 01 <span class=\"ico-ciudad\">&nbsp;</span></td>
              </tr>
              <tr>
                <td>stefanyRodriguez-2015@hotmail.com</td>
              </tr>
              <tr>
                <td>Sex: Femenino</td>
                <td>Cel: 3182567849</td>
              </tr>
              <tr>
                <td>Ciudad: Barranquilla</td>
              </tr>
            </table>
          </article>
          <article class=\"cont-solicitud\">
            <table class=\"tabla-\">
              <tr>
                <td>Stefany Rodriguez</td>
                <td>ID: 01 <span class=\"ico-ciudad\">&nbsp;</span></td>
              </tr>
              <tr>
                <td>stefanyRodriguez-2015@hotmail.com</td>
              </tr>
              <tr>
                <td>Sex: Femenino</td>
                <td>Cel: 3182567849</td>
              </tr>
              <tr>
                <td>Ciudad: Barranquilla</td>
              </tr>
            </table>
          </article>
        </li>
      </ul>


";
    }

    public function getTemplateName()
    {
        return "adminVerAroma.twig.html";
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
