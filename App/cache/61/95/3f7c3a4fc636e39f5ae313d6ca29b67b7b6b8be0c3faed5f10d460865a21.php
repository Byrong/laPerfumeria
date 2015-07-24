<?php

/* trabajaConNosotros.twig.html */
class __TwigTemplate_61953f7c3a4fc636e39f5ae313d6ca29b67b7b6b8be0c3faed5f10d460865a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mainAdmin.twig.html");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "\tTrabaja en la Perfumería Club
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<section class=\"row\">
\t<div class=\"box-registro\">
\t\t<header>
\t          <h2 class=\"titu-4\">¿Quieres ser unas de nuestas Aromas? </h2>
\t\t</header>
\t\t<section class=\"cont-form\">
\t\t\t<form class=\"form-horizontal\">
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Nombre:</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre\">
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">     
\t\t\t        <label class=\"control-label col-xs-3\">Correo:</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Eres:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"genderRadios\" value=\"male\"> Hombre
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"genderRadios\" value=\"female\"> Mujer
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\" >Celular:</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <input type=\"tel\" class=\"form-control\" placeholder=\"Tú Celular\">
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Ciudad:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú ciudad</option>
\t\t\t                <option value=\"Bogotá\">Bogotá</option>
\t\t\t                <option value=\"Barranquilla\">Barranquilla</option>
\t\t\t                <option value=\"Cartagena\">Cartagena</option>
\t\t\t                <option value=\"Medellín\">Medellín</option>
\t\t\t                <option value=\"Santa Marta\">Santa Marta</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Descripción Personal:</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <textarea rows=\"3\" class=\"form-control\" placeholder=\"¿Como es tú personalidad?\"></textarea>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Edad:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"edad\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú edad</option>
\t\t\t                <option value=\"18\">18</option>
\t\t\t                <option value=\"19\">19</option>
\t\t\t                <option value=\"20\">20</option>
\t\t\t                <option value=\"21\">21</option>
\t\t\t                <option value=\"22\">22</option>
\t\t\t                <option value=\"35\">35</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Estatura:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"estatura\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú estatura</option>
\t\t\t                <option value=\"150\">1.50 Cm</option>
\t\t\t                <option value=\"152\">1.52 Cm</option>
\t\t\t                <option value=\"154\">1.54 Cm</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Color de Ojos:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"ojos\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú color</option>
\t\t\t                <option value=\"cafe\">Cafe</option>
\t\t\t                <option value=\"marrones\">Marrones</option>
\t\t\t                <option value=\"miel\">Míel</option>
\t\t\t                <option value=\"negros\">Negros</option>
\t\t\t                <option value=\"azules\">Azules</option>
\t\t\t                <option value=\"verdes\">Verdes</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Color de Píel:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"piel\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú color</option>
\t\t\t                <option value=\"cafe\">Blanca</option>
\t\t\t                <option value=\"marrones\">Morena</option>
\t\t\t                <option value=\"miel\">Trigeña</option>
\t\t\t                <option value=\"negros\">Negra</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Operaciones:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"operaciones\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"operaciones\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <div class=\"col-xs-offset-3 col-xs-9\">
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"naríz\"> Naríz
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"senos\"> Senos
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"abdomen\"> Abdomen
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"cola\"> Cola
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">F. Nacimiento:</label>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option>Dia</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option>Mes</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option>Año</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Peso:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"peso\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú peso</option>
\t\t\t                <option value=\"50\">50 Kg</option>
\t\t\t                <option value=\"55\">55 Kg</option>
\t\t\t                <option value=\"60\">60 Kg</option>
\t\t\t                <option value=\"65\">65 Kg</option>
\t\t\t                <option value=\"70\">70 Kg</option>
\t\t\t                <option value=\"75\">75 Kg</option>
\t\t\t                <option value=\"80\">80 Kg</option>
\t\t\t                <option value=\"85\">85 Kg</option>
\t\t\t                <option value=\"90\">90 Kg</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Senos:</label>
\t\t\t        <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"seno\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú talla</option>
\t\t\t                <option value=\"30\">30 Copa</option>
\t\t\t                <option value=\"35\">35 Copa</option>
\t\t\t                <option value=\"38\">38 Copa</option>
\t\t\t                <option value=\"40\">40 Copa</option>
\t\t\t                <option value=\"45\">45 Copa</option>
\t\t\t                <option value=\"50\">50 Copa</option>
\t\t\t                <option value=\"55\">55 Copa</option>
\t\t\t                <option value=\"60\">60 Copa</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t    </div>    
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Color de Cabello</label>
\t\t\t         <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"ojos\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tú color</option>
\t\t\t                <option value=\"mono\">Mono</option>
\t\t\t                <option value=\"marron\">Marron</option>
\t\t\t                <option value=\"castaño\">Castaño</option>
\t\t\t                <option value=\"negro\">Negro</option>
\t\t\t                <option value=\"rojo\">Rojo</option>
\t\t\t            </select>
\t\t\t     </div>
\t\t\t     </div>
\t\t\t     <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Tatuajes:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"tatuaje\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"tatuaje\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">¿Experiencia en servicio de Scorth?:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"experiencia\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"experiencia\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Tiempo de experiencia</label>
\t\t\t         <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"tiemExperiencia\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona el tiempo</option>
\t\t\t                <option value=\"1\">1 año</option>
\t\t\t                <option value=\"2\">2 años</option>
\t\t\t                <option value=\"3\">3 años</option>
\t\t\t                <option value=\"4\">4 años</option>
\t\t\t                <option value=\"4\">4 años</option>
\t\t\t                <option value=\"5\">5 años</option>
\t\t\t                <option value=\"5\">Más de 5 años</option>
\t\t\t            </select>
\t\t\t     \t</div>
\t\t\t     </div>
\t\t\t     <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Actividad Sexual</label>
\t\t\t         <div class=\"col-xs-9 col-md-9\">
\t\t\t            <select name=\"tiemExperiencia\" class=\"form-control\">
\t\t\t                <option value=\"\">Selecciona tu frecuencia</option>
\t\t\t                <option value=\"1\">1 a 2 al mes</option>
\t\t\t                <option value=\"2\">2 a 4 al mes</option>
\t\t\t                <option value=\"3\">4 a 5 al mes</option>
\t\t\t                <option value=\"4\">5 a 10 al mes</option>
\t\t\t                <option value=\"4\">10 a 15 al mes</option>
\t\t\t                <option value=\"4\">15 a 20 al mes</option>
\t\t\t                <option value=\"4\">20 a 30 al mes</option>
\t\t\t            </select>
\t\t\t     \t</div>
\t\t\t     </div>
\t\t\t     <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">¿Qué esel sexo?</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <textarea rows=\"3\" class=\"form-control\" placeholder=\"Para ti que es tener sexo...\"></textarea>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Sexo Oral:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexOral\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexOral\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Sexo Anal:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexAnal\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexAnal\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Servicio a Hombres:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexHombre\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexHombre\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Servicio a Mujeres:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexMujeres\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"sexMujeres\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Tríos:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"trios\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"trios\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <div class=\"col-xs-offset-3 col-xs-9\">
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"HMH\"> Trío HMH
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"MHM\"> Trío MHM
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"MMM\"> Trío MMM
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"HHH\"> Trío HHH
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Masajes:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"masajes\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"masajes\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Bailas:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"baila\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"baila\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Lluvía Dorada:</label>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"lluviaDorada\" value=\"si\"> Si
\t\t\t            </label>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-2\">
\t\t\t            <label class=\"radio-inline\">
\t\t\t                <input type=\"radio\" name=\"lluviaDorada\" value=\"no\"> No
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <div class=\"col-xs-offset-3 col-xs-9\">
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"apartamento\"> Apartamento
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"hotel\"> Hotel
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"casa\"> Casa
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"fíncas\"> Fíncas
\t\t\t            </label>
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input name=\"operacion\" type=\"checkbox\" value=\"empresa\"> Empresa
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">Fuera de servicio:</label>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option>Del</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t            <select class=\"form-control\">
\t\t\t                <option>Al</option>
\t\t\t            </select>
\t\t\t        </div>
\t\t\t        <div class=\"col-xs-3\">
\t\t\t        de cada mes
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label class=\"control-label col-xs-3\">P:</label>
\t\t\t        <div class=\"col-xs-9\">
\t\t\t            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre\">
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"form-group\">
\t\t\t        <div class=\"col-xs-offset-3 col-xs-9\">
\t\t\t            <label class=\"checkbox-inline\">
\t\t\t                <input type=\"checkbox\" value=\"agree\">  Accepto <a href=\"#\">Terminos y condiciones</a>.
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <br>
\t\t\t    <div class=\"form-group\">
\t\t\t        <div class=\"col-xs-offset-3 col-xs-9\">
\t\t\t            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar\">
\t\t\t            <input type=\"reset\" class=\"btn btn-default\" value=\"Limpiar\">
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</form>
\t\t</section>
\t</div>
\t<div id=\"error\">
\t\t\t
\t</div>
</section>
";
    }

    // line 454
    public function block_scripts($context, array $blocks = array())
    {
        // line 455
        echo "<script>
\t\$(document).ready(function() 
{

\$('#login').click(function()
{
var username=\$(\"#username\").val();
var password=\$(\"#password\").val();
var dataString = 'nnombre='+username+'&npassword='+password;
if(\$.trim(username).length>0 && \$.trim(password).length>0)
{
\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"ajaxLogin.php\",
\t\tdata: dataString,
\t\tcache: false,
\t\tbeforeSend: function(){ \$(\"#login\").val('Connecting...');},
\t\tsuccess: function(data){
\t\t\tif(data)
\t\t\t{
\t\t\t\t\$(\"body\").load(\"home.php\").hide().fadeIn(1500).delay(6000);
\t\t\t\t//or window.location.href = \"home.php\";

\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$(\"#login\").val('Login');
\t\t\t\t\$(\"#error\").html(\"<div class='alerta'><span style='color:#cc0000'>Error:</span> Usuario y/ó contraseña incorrecta</div>\");
\t\t\t}
\t\t}
\t});

}
return false;
});

});
</script>
";
    }

    public function getTemplateName()
    {
        return "trabajaConNosotros.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 455,  490 => 454,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
