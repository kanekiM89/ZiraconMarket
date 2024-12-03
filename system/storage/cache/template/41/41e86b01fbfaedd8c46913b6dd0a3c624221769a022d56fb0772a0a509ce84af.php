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

/* ziracon/template/extension/module/carousel.twig */
class __TwigTemplate_8c7941191e4d98db179538b712128830ea8deac0c84be949454fdbf79874cb1b extends \Twig\Template
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
        echo "<div id=\"carousel-";
        echo ($context["module"] ?? null);
        echo "\" class=\"banners-slider-carousel\">
\t<div class=\"customNavigation\">
\t\t<a class=\"prev fa fa-angle-left\"></a>
\t\t<a class=\"next fa fa-angle-right\"></a>
\t</div>
  <div class=\"product-carousel\" id=\"module-";
        // line 6
        echo ($context["module"] ?? null);
        echo "-carousel\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "    \t<div class=\"slider-item\">
\t\t<div class=\"product-block\">
\t\t<div class=\"product-block-inner\">
\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11)) {
                // line 12
                echo "   <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 12);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" /></a>
    ";
            } else {
                // line 14
                echo "    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 14);
                echo "\" />
    ";
            }
            // line 16
            echo "\t\t</div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </div>
</div>
<span class=\"module_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  79 => 16,  71 => 14,  61 => 12,  59 => 11,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/carousel.twig", "");
    }
}
