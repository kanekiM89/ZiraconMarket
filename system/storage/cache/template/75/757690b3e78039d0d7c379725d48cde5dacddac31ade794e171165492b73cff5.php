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

/* ziracon/template/extension/module/special.twig */
class __TwigTemplate_47af54fc5629e027c00e0253ff8eb12c54509b5897010566993fd9997b43f556 extends \Twig\Template
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
        echo "
<div class=\"box special product-box\">
    <div class=\"box-heading special-caption\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">\t\t
\t<div class=\"special-products home-products\">
\t\t";
        // line 6
        $context["sliderFor"] = 4;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 8
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 9
            echo "\t\t<!--<div class=\"customNavigation\">
\t\t\t<a class=\"prev\">prev</a>
\t\t\t<a class=\"next\">next</a>
\t\t</div>-->\t
\t";
        }
        // line 14
        echo "\t<div class=\"box-product ";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    
\t<div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t
\t\t<div class=\"product-image-thumbnail\">
\t\t
\t\t<div class=\"image\">
\t\t\t";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">
\t\t\t<img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 27);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\"/>
\t\t\t</a>
\t\t\t";
            } else {
                // line 30
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">
\t\t\t<img src=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 33
            echo "\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t<div class=\"caption\">
\t\t<div class=\"caption-inner\">
\t\t\t";
            // line 40
            echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42) < $context["i"])) {
                    // line 43
                    echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t</div>
\t\t\t";
            // line 50
            echo "
\t\t\t<h4><a href=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
            echo " </a></h4>\t
\t\t
\t\t\t";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t<p class=\"price\">
\t\t\t\t";
                // line 55
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                    echo "
\t\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
                    echo "</span>
\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 61);
                    echo "</span>
\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "\t\t\t\t<span class=\"discoutprice\">
\t\t\t\t<span class=\"percentsaving\">";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 65);
                    echo "%</span>
\t\t\t\t</span>
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t</p>
\t\t\t";
            }
            // line 70
            echo "\t\t\t
\t\t\t<div class=\"countdown\">
\t\t\t\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t<div class=\"count-down clock\">
\t\t\t\t<div data-countdown=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 74);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 77
            echo "\t\t\t</div>
\t\t
\t\t\t
\t\t\t<p class=\"desc\">";
            // line 80
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 80), 0, 160);
            echo "</p> ";
            // line 81
            echo "\t\t</div>
\t\t
\t</div>

\t</div>
\t\t\t\t\t\t\t
\t</div>
\t
</div>

  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</div>
</div>
  </div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>

";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 93,  252 => 81,  249 => 80,  244 => 77,  238 => 74,  235 => 73,  233 => 72,  229 => 70,  225 => 68,  219 => 65,  216 => 64,  213 => 63,  205 => 61,  202 => 60,  194 => 58,  188 => 56,  186 => 55,  183 => 54,  181 => 53,  174 => 51,  171 => 50,  168 => 48,  162 => 47,  158 => 45,  154 => 43,  151 => 42,  147 => 41,  144 => 40,  136 => 33,  127 => 31,  122 => 30,  112 => 27,  104 => 26,  99 => 25,  97 => 24,  81 => 16,  77 => 15,  62 => 14,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/special.twig", "");
    }
}
