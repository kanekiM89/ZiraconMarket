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

/* ziracon/template/common/home.twig */
class __TwigTemplate_3f55ed0c252589764021799f94153c177722769bbf6a100260d15fd4ba413346 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"content-wp\">
\t\t\t\t";
        // line 6
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t";
        // line 7
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 8
            echo "\t\t\t\t";
            $context["class"] = "col-sm-6";
            // line 9
            echo "\t\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 10
            echo "\t\t\t\t";
            $context["class"] = "col-sm-9";
            // line 11
            echo "\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t";
            $context["class"] = "col-sm-12";
            // line 13
            echo "\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t<div id=\"content\" class=\"col-sm-9\">
\t\t\t\t<div class=\"content-top\">";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"content-botttom\">";
        // line 16
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 18
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 23
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "ziracon/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  81 => 18,  76 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/common/home.twig", "");
    }
}
