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

/* ziracon/template/extension/module/featured.twig */
class __TwigTemplate_4a5d344b9d2dadcb25b3c9c2bf3a09c234a73d609c8ffb241a02e5b8ce258a8a extends \Twig\Template
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
        echo "<div class=\"box featured product-box\">
 <div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
\t\t
\t<div class=\"featured-products home-products\">
\t\t";
        // line 6
        $context["sliderFor"] = 5;
        // line 7
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 8
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 9
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"prev\">";
            // line 10
            echo ($context["text_prev"] ?? null);
            echo "</a>
\t\t\t<a class=\"next\">";
            // line 11
            echo ($context["text_next"] ?? null);
            echo "</a>
\t\t</div>\t
\t";
        }
        // line 14
        echo "\t<div class=\"box-product ";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "featured-carousel";
        } else {
            echo "featured-grid";
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
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  
\t  \t\t\t\t\t\t\t\t\t\t
\t\t<div class=\"image\">
\t\t\t";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">
\t\t\t<img src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\"/>
\t\t\t</a>
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\">
\t\t\t<img src=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 30
            echo "
\t\t\t";
            // line 31
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31)) {
                echo "        
\t\t\t";
            } else {
                // line 33
                echo "\t\t\t<div class=\"saleback\">
\t\t\t<span class=\"saleicon sale\">";
                // line 34
                echo ($context["product_sale_label"] ?? null);
                echo "</span>               
\t\t\t</div>
\t\t\t";
            }
            // line 37
            echo "\t\t\t
\t\t\t   <div class=\"button-group\">
\t\t\t\t  <button type=\"button\" data-placement=\"right\" title=\"";
            // line 39
            echo ($context["button_cart"] ?? null);
            echo "\" class=\"addtocart\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo " ');\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t  <div class=\"quickview\" data-placement=\"right\" title=\"";
            // line 40
            echo ($context["button_quickview"] ?? null);
            echo "\" ><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 40);
            echo "\">";
            echo ($context["button_quickview"] ?? null);
            echo "</a></div>
\t\t\t\t  <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
            // line 41
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 41);
            echo " ');\"></button>
\t\t\t\t  <button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
            // line 42
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 42);
            echo " ');\"></button>\t\t\t\t  
\t\t\t   </div>
\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
            // line 44
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
            echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t<div class=\"text-container\">
\t\t\t\t<span class=\"text-wishlist\">";
            // line 46
            echo ($context["text_wishlist"] ?? null);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t</button>-->

\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t\t<div class=\"caption\">

\t\t\t\t";
            // line 58
            echo "\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "\t\t\t\t\t ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 60) < $context["i"])) {
                    // line 61
                    echo "\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t ";
                } else {
                    // line 63
                    echo "\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t ";
                }
                // line 65
                echo "\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t </div>
\t\t\t\t";
            // line 68
            echo "
\t\t\t\t<h4><a href=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
            echo " </a></h4>
\t\t
\t\t\t\t";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71)) {
                // line 72
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t";
                // line 73
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 79);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t<span class=\"percentsaving\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 82);
                    echo "%</span>
\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
            // line 90
            echo "\t\t\t\t
\t\t</div>
\t\t\t
\t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "</div>
</div>
  </div>
</div>
<span class=\"featured_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 98,  297 => 90,  293 => 87,  288 => 84,  282 => 82,  279 => 81,  271 => 79,  268 => 78,  260 => 76,  254 => 74,  252 => 73,  249 => 72,  247 => 71,  240 => 69,  237 => 68,  234 => 66,  228 => 65,  224 => 63,  220 => 61,  217 => 60,  213 => 59,  210 => 58,  196 => 46,  189 => 44,  182 => 42,  176 => 41,  168 => 40,  160 => 39,  156 => 37,  150 => 34,  147 => 33,  142 => 31,  139 => 30,  130 => 28,  125 => 27,  115 => 24,  107 => 23,  102 => 22,  100 => 21,  87 => 16,  83 => 15,  68 => 14,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/featured.twig", "");
    }
}
