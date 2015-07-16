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
\t\t\t\t<input id=\"username\" class=\"input-1\" type=\"text\" placeholder=\"Usuario\">
\t\t\t\t<input id=\"password\" class=\"input-1\" type=\"password\" placeholder=\"Contraseña\">
\t\t\t\t<input id=\"login\" class=\"btn-1\" type=\"submit\" value=\"Entrar\">
\t\t\t\t<a href=\"#\" class=\"legal\">¿Olvidastes tu contraseña?</a>
\t\t\t</form>
\t\t</section>
\t\t<div id=\"error\">
\t\t\t\t
\t\t</div>
\t</div>
</section>
";
    }

    // line 31
    public function block_scripts($context, array $blocks = array())
    {
        // line 32
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
\t\t\t\t\$(\"#error\").html(\"<span style='color:#cc0000'>Error:</span> Usuario y/ó contraseña incorrecta\");
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
        return "login.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  66 => 31,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
