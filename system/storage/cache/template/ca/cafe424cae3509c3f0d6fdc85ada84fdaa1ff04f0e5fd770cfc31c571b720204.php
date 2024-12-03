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

/* ziracon/template/extension/module/banner.twig */
class __TwigTemplate_387d82ef93f924c1bf7a76aebff7124e2b2d1b34d81797af907dc0d354078850 extends \Twig\Template
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
        echo "\t";
        $context["sliderForbanner"] = 1;
        // line 2
        echo "\t";
        $context["bannercount"] = twig_length_filter($this->env, ($context["banners"] ?? null));
        // line 3
        echo "<div class=\"swiper-viewport column box\">
<div class=\"box-heading\">";
        // line 4
        echo ($context["banner_title"] ?? null);
        echo "</div>
  <div id=\"banner";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"box-content swiper-container ";
        if ((($context["bannercount"] ?? null) > ($context["sliderForbanner"] ?? null))) {
            echo " owl-carousel bannercarousel ";
        } else {
            echo " single-banner ";
        }
        echo "\">
    <div class=\"swiper-wrapper\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "      <div class=\"swiper-slide\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />";
            }
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8)) {
                echo "<span class=\"banner-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "</span>";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
\t  <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 15
        echo ($context["module"] ?? null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 2500,
    pagination: '.swiper-pagination',  // If we need pagination
    autoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  93 => 9,  65 => 8,  61 => 7,  50 => 5,  46 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/banner.twig", "");
    }
}
