<?php

/* solicitudesAroma.twig.html */
class __TwigTemplate_aa121b7561616321aadc567293a79f13ec8aec69b12cdf97a5692374bb98187b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "      <header class=\"encabezado-1\">
        <h2>SOLICITUDES PENDIENTE</h2>
        <span class=\"ico-solicitudes\">&nbsp;</span>
      </header>
      <ul class=\"box-solicitud\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "        <li>
          <header class=\"fecha\">
            <span class=\"dia\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "fecha", array()), "html", null, true);
            echo "</span>
          </header>
          <table class=\"cont-solicitud\" data-id=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "\">
              <tr>
                <td class=\"nombre\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nombre", array()), "html", null, true);
            echo "</td>
                <td class=\"id\">ID: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "<span class=\"ico-ciudad\">&nbsp;</span></td>
              </tr>
              <tr>
                <td class=\"mail\" colspan=\"2\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "correo", array()), "html", null, true);
            echo "</td>
              </tr>
              <tr>
                <td class=\"data-1\">Sex: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "sexo", array()), "html", null, true);
            echo "</td>
                <td class=\"data-1\">Cel: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "celular", array()), "html", null, true);
            echo "</td>
              </tr>
              <tr>
                <td class=\"data-1\" colspan=\"2\">Ciudad: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ciudad", array()), "html", null, true);
            echo "</td>
              </tr>
          </table>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </ul>
";
    }

    public function getTemplateName()
    {
        return "solicitudesAroma.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  70 => 24,  64 => 21,  60 => 20,  54 => 17,  48 => 14,  44 => 13,  39 => 11,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
