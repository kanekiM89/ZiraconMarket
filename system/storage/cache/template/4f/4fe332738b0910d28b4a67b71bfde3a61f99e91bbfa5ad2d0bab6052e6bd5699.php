<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ziracon/template/extension/module/newsletters.twig */
class __TwigTemplate_7e116ef443744112f9265ae8d2dfc80d0dbea7e97e7c424474e40fcdd50d3b06 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script>
\t\tfunction subscribe()
\t\t{
\t\t\tvar emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
\t\t\tvar email = \$('#txtemail').val();
\t\t\tif(email != \"\")
\t\t\t{
\t\t\t\tif(!emailpattern.test(email))
\t\t\t\t{
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\tvar str = '<span class=\"error\">Invalid Email</span>';
\t\t\t\t\t\$('.form-group').after('<div class=\"text-danger\">Invalid Email</div>');

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/newsletters/news',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: 'email=' + \$('#txtemail').val(),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t\$('.form-group').after('<div class=\"text-success\">' + json.message + '</div>');
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('.input-news').after('<div class=\"text-danger\">Email Is Require</div>');
\t\t\t\t\$(email).focus();

\t\t\t\treturn false;
\t\t\t}
\t\t\t

\t\t}
</script>

";
        // line 49
        echo ($context["content_middle"] ?? null);
        echo "
\t
\t

<div class=\"newsletter box column\">\t
\t<!-- <div class=\"container\">
\t\t<div class=\"row\"> -->\t
\t\t<div class=\"newsletter-details\">
\t\t\t<div class=\"newsletter-desc\">
\t\t\t\t<h5 class=\"newsletter-title\">";
        // line 58
        echo ($context["newsletter_title"] ?? null);
        echo "</h5>
\t\t\t\t<!--<span class=\"newsletter-info\">";
        // line 59
        echo ($context["newsletter_info"] ?? null);
        echo "</span>-->
\t\t\t\t<div class=\"desc\">";
        // line 60
        echo ($context["newsletter_desc"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t
\t\t\t<div class=\"newsletter-block\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"txtemail\">";
        // line 66
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"input-news\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"txtemail\" id=\"txtemail\" value=\"\" placeholder=\"";
        // line 68
        echo ($context["entry_email"] ?? null);
        echo "\" class=\"form-control input-lg\"  /> 
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t<div class=\"subscribe-btn\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-lg\" onclick=\"return subscribe();\">";
        // line 71
        echo ($context["email_button"] ?? null);
        echo "</button>  \t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t<!-- </div>
\t</div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/newsletters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 71,  121 => 68,  116 => 66,  107 => 60,  103 => 59,  99 => 58,  87 => 49,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/newsletters.twig", "");
    }
}
