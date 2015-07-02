<?php

/* post.twig.html */
class __TwigTemplate_45de6dea17900f82e73b383c9ffdfb4b9a7ee5ac594245fc7ca0d2fdd4e214d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig.html");

        $this->blocks = array(
            'post_Lunes' => array($this, 'block_post_Lunes'),
            'post_Martes' => array($this, 'block_post_Martes'),
            'post_Miercoles' => array($this, 'block_post_Miercoles'),
            'post_Jueves' => array($this, 'block_post_Jueves'),
            'post_Viernes' => array($this, 'block_post_Viernes'),
            'btnVerificar' => array($this, 'block_btnVerificar'),
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

    // line 5
    public function block_post_Lunes($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "        ";
            if (($this->getAttribute($context["m"], "dia", array()) == "lunes")) {
                // line 8
                echo "                  <div class=\"box-post e";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " \">
                      <div class=\"msnRepor hover-";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " col-xs-12\">
                                        <label class=\"titu-2\">Deje su observación </label><span class=\"glyphicon glyphicon-comment pull-right\"> </span>
                                        <textarea id=\"comentario-";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" class=\"box-msn\" name=\"comentario\"></textarea>
                                        <button type=\"button\" class=\"btn btn-default btn-sm pull-right\" onclick=\"aprobarPost('";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>Guardar
                                      </button>
                                      <button type=\"button\" class=\"btn btn-default btn-sm pull-left \" onclick=\"cerrar('";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-chevron-up\"></span>
                                      </button>
                                      <div style=\"clear:both\"></div>
                      </div>
                  <header>
                            <span  class=\"label label-";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo "\">id";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo " </span>
                            <div class=\"aprobado pull-right\">
                                    <span class=\"titu-1\">Aprobado:</span>
                                  <div class=\"btn-group\">
                                           <button type=\"button\" class=\"btn btn-default btn-sm btn-aprobado\">
                                            <input type=\"hidden\" name=\"estado\" value=\"1\">
                                            <span class=\"glyphicon glyphicon-ok\"><input name=\"aprobado\" type=\"radio\" value=\"s\"  onclick=\"aprobarPost('";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\"></span>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-default btn-sm btn-obser\" onclick=\"observacion('";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                            <span class=\"glyphicon glyphicon-remove\"><input name=\"aprobado\" type=\"radio\" value=\"n\"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class=\"img1\">  <img src=\"admin/imagenes/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
                echo "\"  style=\"width:100%\"></figure>
                  <h3 class=\"titu-3\"><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " </h3>
                  <p class=\"par-1\">
                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
                  </p>
              </div>
        ";
            }
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 45
    public function block_post_Martes($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 47
            echo "        ";
            if (($this->getAttribute($context["m"], "dia", array()) == "martes")) {
                // line 48
                echo "                  <div class=\"box-post e";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " \">
                      <div class=\"msnRepor hover-";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " col-xs-12\">
                                        <label class=\"titu-2\">Deje su observación </label><span class=\"glyphicon glyphicon-comment pull-right\"> </span>
                                        <textarea id=\"comentario-";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" class=\"box-msn\" name=\"comentario\"></textarea>
                                        <button type=\"button\" class=\"btn btn-default btn-sm pull-right\" onclick=\"aprobarPost('";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>Guardar
                                      </button>
                                      <button type=\"button\" class=\"btn btn-default btn-sm pull-left \" onclick=\"cerrar('";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-chevron-up\"></span>
                                      </button>
                                      <div style=\"clear:both\"></div>
                      </div>
                  <header>
                            <span  class=\"label label-";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo "\">id";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo " </span>
                            <div class=\"aprobado pull-right\">
                                    <span class=\"titu-1\">Aprobado:</span>
                                  <div class=\"btn-group\">
                                           <button type=\"button\" class=\"btn btn-default btn-sm btn-aprobado\">
                                            <input type=\"hidden\" name=\"estado\" value=\"1\">
                                            <span class=\"glyphicon glyphicon-ok\"><input name=\"aprobado\" type=\"radio\" value=\"s\"  onclick=\"aprobarPost('";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\"></span>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-default btn-sm btn-obser\" onclick=\"observacion('";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                            <span class=\"glyphicon glyphicon-remove\"><input name=\"aprobado\" type=\"radio\" value=\"n\"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class=\"img1\">  <img src=\"admin/imagenes/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
                echo "\"  style=\"width:100%\"></figure>
                  <h3 class=\"titu-3\"><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " </h3>
                  <p class=\"par-1\">
                    ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
                  </p>
              </div>
        ";
            }
            // line 82
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 85
    public function block_post_Miercoles($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 87
            echo "        ";
            if (($this->getAttribute($context["m"], "dia", array()) == "miercoles")) {
                // line 88
                echo "                  <div class=\"box-post e";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " \">
                      <div class=\"msnRepor hover-";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " col-xs-12\">
                                        <label class=\"titu-2\">Deje su observación </label><span class=\"glyphicon glyphicon-comment pull-right\"> </span>
                                        <textarea id=\"comentario-";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" class=\"box-msn\" name=\"comentario\"></textarea>
                                        <button type=\"button\" class=\"btn btn-default btn-sm pull-right\" onclick=\"aprobarPost('";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>Guardar
                                      </button>
                                      <button type=\"button\" class=\"btn btn-default btn-sm pull-left \" onclick=\"cerrar('";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-chevron-up\"></span>
                                      </button>
                                      <div style=\"clear:both\"></div>
                      </div>
                  <header>
                            <span  class=\"label label-";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo "\">id";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo " </span>
                            <div class=\"aprobado pull-right\">
                                    <span class=\"titu-1\">Aprobado:</span>
                                  <div class=\"btn-group\">
                                           <button type=\"button\" class=\"btn btn-default btn-sm btn-aprobado\">
                                            <input type=\"hidden\" name=\"estado\" value=\"1\">
                                            <span class=\"glyphicon glyphicon-ok\"><input name=\"aprobado\" type=\"radio\" value=\"s\"  onclick=\"aprobarPost('";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\"></span>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-default btn-sm btn-obser\" onclick=\"observacion('";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                            <span class=\"glyphicon glyphicon-remove\"><input name=\"aprobado\" type=\"radio\" value=\"n\"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class=\"img1\">  <img src=\"admin/imagenes/";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
                echo "\"  style=\"width:100%\"></figure>
                  <h3 class=\"titu-3\"><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " </h3>
                  <p class=\"par-1\">
                    ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
                  </p>
              </div>
        ";
            }
            // line 122
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 125
    public function block_post_Jueves($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 127
            echo "        ";
            if (($this->getAttribute($context["m"], "dia", array()) == "jueves")) {
                // line 128
                echo "                  <div class=\"box-post e";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " \">
                      <div class=\"msnRepor hover-";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " col-xs-12\">
                                        <label class=\"titu-2\">Deje su observación </label><span class=\"glyphicon glyphicon-comment pull-right\"> </span>
                                        <textarea id=\"comentario-";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" class=\"box-msn\" name=\"comentario\"></textarea>
                                        <button type=\"button\" class=\"btn btn-default btn-sm pull-right\" onclick=\"aprobarPost('";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>Guardar
                                      </button>
                                      <button type=\"button\" class=\"btn btn-default btn-sm pull-left \" onclick=\"cerrar('";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-chevron-up\"></span>
                                      </button>
                                      <div style=\"clear:both\"></div>
                      </div>
                  <header>
                            <span  class=\"label label-";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo "\">id";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo " </span>
                            <div class=\"aprobado pull-right\">
                                    <span class=\"titu-1\">Aprobado:</span>
                                  <div class=\"btn-group\">
                                           <button type=\"button\" class=\"btn btn-default btn-sm btn-aprobado\">
                                            <input type=\"hidden\" name=\"estado\" value=\"1\">
                                            <span class=\"glyphicon glyphicon-ok\"><input name=\"aprobado\" type=\"radio\" value=\"s\"  onclick=\"aprobarPost('";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\"></span>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-default btn-sm btn-obser\" onclick=\"observacion('";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                            <span class=\"glyphicon glyphicon-remove\"><input name=\"aprobado\" type=\"radio\" value=\"n\"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class=\"img1\">  <img src=\"admin/imagenes/";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
                echo "\"  style=\"width:100%\"></figure>
                  <h3 class=\"titu-3\"><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " </h3>
                  <p class=\"par-1\">
                    ";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
                  </p>
              </div>
        ";
            }
            // line 162
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 165
    public function block_post_Viernes($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 167
            echo "        ";
            if (($this->getAttribute($context["m"], "dia", array()) == "viernes")) {
                // line 168
                echo "                  <div class=\"box-post e";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " \">
                      <div class=\"msnRepor hover-";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " col-xs-12\">
                                        <label class=\"titu-2\">Deje su observación </label><span class=\"glyphicon glyphicon-comment pull-right\"> </span>
                                        <textarea id=\"comentario-";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "\" class=\"box-msn\" name=\"comentario\"></textarea>
                                        <button type=\"button\" class=\"btn btn-default btn-sm pull-right\" onclick=\"aprobarPost('";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>Guardar
                                      </button>
                                      <button type=\"button\" class=\"btn btn-default btn-sm pull-left \" onclick=\"cerrar('";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                                <span class=\"glyphicon glyphicon-chevron-up\"></span>
                                      </button>
                                      <div style=\"clear:both\"></div>
                      </div>
                  <header>
                            <span  class=\"label label-";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo "\">id";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "red_social", array()), "html", null, true);
                echo " </span>
                            <div class=\"aprobado pull-right\">
                                    <span class=\"titu-1\">Aprobado:</span>
                                  <div class=\"btn-group\">
                                           <button type=\"button\" class=\"btn btn-default btn-sm btn-aprobado\">
                                            <input type=\"hidden\" name=\"estado\" value=\"1\">
                                            <span class=\"glyphicon glyphicon-ok\"><input name=\"aprobado\" type=\"radio\" value=\"s\"  onclick=\"aprobarPost('";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\"></span>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-default btn-sm btn-obser\" onclick=\"observacion('";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
                echo "')\">
                                            <span class=\"glyphicon glyphicon-remove\"><input name=\"aprobado\" type=\"radio\" value=\"n\"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class=\"img1\">  <img src=\"admin/imagenes/";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "imagen", array()), "html", null, true);
                echo "\"  style=\"width:100%\"></figure>
                  <h3 class=\"titu-3\"><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tipo_post", array()), "html", null, true);
                echo " </h3>
                  <p class=\"par-1\">
                    ";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descripcion", array()), "html", null, true);
                echo "
                  </p>
              </div>
        ";
            }
            // line 202
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 207
    public function block_btnVerificar($context, array $blocks = array())
    {
        // line 208
        echo "        ";
        if ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id", array())) {
            // line 209
            echo "              <h2>Entro</h2>
        ";
        }
    }

    public function getTemplateName()
    {
        return "post.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 209,  491 => 208,  488 => 207,  480 => 202,  473 => 198,  468 => 196,  464 => 195,  455 => 189,  450 => 187,  437 => 181,  428 => 175,  422 => 172,  418 => 171,  413 => 169,  408 => 168,  405 => 167,  400 => 166,  397 => 165,  389 => 162,  382 => 158,  377 => 156,  373 => 155,  364 => 149,  359 => 147,  346 => 141,  337 => 135,  331 => 132,  327 => 131,  322 => 129,  317 => 128,  314 => 127,  309 => 126,  306 => 125,  298 => 122,  291 => 118,  286 => 116,  282 => 115,  273 => 109,  268 => 107,  255 => 101,  246 => 95,  240 => 92,  236 => 91,  231 => 89,  226 => 88,  223 => 87,  218 => 86,  215 => 85,  207 => 82,  200 => 78,  195 => 76,  191 => 75,  182 => 69,  177 => 67,  164 => 61,  155 => 55,  149 => 52,  145 => 51,  140 => 49,  135 => 48,  132 => 47,  127 => 46,  124 => 45,  116 => 42,  109 => 38,  104 => 36,  100 => 35,  91 => 29,  86 => 27,  73 => 21,  64 => 15,  58 => 12,  54 => 11,  49 => 9,  44 => 8,  41 => 7,  36 => 6,  33 => 5,);
    }
}
