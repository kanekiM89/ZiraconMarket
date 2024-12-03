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

/* ziracon/template/extension/module/slideshow.twig */
class __TwigTemplate_b9ee85502389b6f1f49f8583318cb8fe4528e815cc0c7ec7bf6961ef4452eadb extends \Twig\Template
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
        echo "<div class=\"main-slider\">
<div id=\"spinner\"></div>
<div class=\"viewport\">
  <div id=\"slideshow";
        // line 4
        echo ($context["module"] ?? null);
        echo "\" class=\"flexslider\" style=\"opacity: 1;\">
    <ul class=\"slides\"> 
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      <li class=\"slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo " </ul>
  </div>
  <div class=\"pagination slideshow";
        // line 10
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"pager\">
    <div class=\"button-prev\"></div>
    <div class=\"button-next\"></div>
\t   
  </div>
</div>
</div>

<!--<script type=\"text/javascript\">
\$('#slideshow";
        // line 20
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 23
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: 'button-next',
    prevButton: 'button-prev',
    spaceBetween: 0,
\tautoplay: 25000,
    autoplayDisableOnInteraction: true,
\tloop: true/*,
  paginationType: 'bullets'*/
});
</script>-->

<script type=\"text/javascript\">
\t// Can also be used with \$(document).ready()
\t\$(window).load(function() {\t\t
\t  \$(\"#spinner\").fadeOut(\"slow\");
\t});\t
</script>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  91 => 20,  78 => 10,  74 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/slideshow.twig", "");
    }
}
