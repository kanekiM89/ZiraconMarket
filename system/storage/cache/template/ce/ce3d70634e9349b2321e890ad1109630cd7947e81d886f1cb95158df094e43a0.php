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

/* ziracon/template/product/category.twig */
class __TwigTemplate_e6a1183400b5b884525060149df4cc04cee94039ee75b7419e672723c7d03bc3 extends \Twig\Template
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
<div class=\"categorypage\">
\t<div id=\"product-category\" class=\"container\">
\t\t<ul class=\"breadcrumb\">
\t\t\t<!--<h2 class=\"page-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h2>-->
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</ul>
\t\t<div class=\"row\">
\t\t\t";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "\t\t\t\t";
            $context["class"] = "col-sm-6 categorypage";
            // line 14
            echo "\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "\t\t\t\t";
            $context["class"] = "col-sm-9 categorypage";
            // line 16
            echo "\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t";
            $context["class"] = "col-sm-12 categorypage";
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t";
        // line 21
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            echo " 
\t\t\t\t\t<div class=\"category_thumb cat-content\">
\t\t\t\t\t\t";
            // line 23
            if (($context["thumb"] ?? null)) {
                // line 24
                echo "\t\t\t\t\t\t\t<div class=\"col-sm-2 category_img\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t";
            if (($context["description"] ?? null)) {
                // line 27
                echo "\t\t\t\t\t\t\t<div class=\"col-sm-10 category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t";
        if (($context["categories"] ?? null)) {
            // line 32
            echo "\t\t\t\t<div class=\"subcategory cat-content\">
\t\t\t\t<h3 class=\"refine-search\">";
            // line 33
            echo ($context["text_refine"] ?? null);
            echo "</h3>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"col-sm-12 category_list\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "\t\t\t\t\t\t\t<li class=\"col-xs-3 col-sm-2 col-md-3 col-lg-2 col-xl-2\"> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                echo "\"><img src=\"image/";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "rsimage", [], "any", false, false, false, 38);
                echo "\" /></a> 
\t\t\t\t\t <a href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (($context["products"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t<div class=\"category_filter cat-content\">
\t\t\t\t\t\t<div class=\"col-md-4 btn-list-grid\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"compare-total\"><a href=\"";
            // line 54
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\"> ";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t<div class=\"pagination-right\">
\t\t\t\t\t\t\t<div class=\"sort-by-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-sort\">";
            // line 58
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 63) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 64);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 64);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 66);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 66);
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"show-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-limit\">";
            // line 74
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 79) == ($context["limit"] ?? null))) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 80);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 80);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 82);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 82);
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-layout-wrap cat-content\">
\t\t\t\t\t<div class=\"row list-grid-wrapper\">
\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 99);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                        echo "        
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"saleback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">";
                        // line 105
                        echo ($context["product_sale_label"] ?? null);
                        echo "</span>         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 110);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                // line 115
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 116
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 116);
                echo "\">Quick View</a></div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 117
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 118
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                echo " ');\"></button>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
                // line 120
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-wishlist\">";
                // line 122
                echo ($context["text_wishlist"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</button>-->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"extra-info\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-deacription-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 135) < $context["i"])) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo " </a></h4>

\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 147
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147)) {
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
                        echo "</span>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 150);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 153)) {
                        // line 154
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 154);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"percentsaving\"><span class=\"discount\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 157);
                        echo "% </span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"desc\">";
                // line 165
                echo (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 165)), 0, 210) . "...");
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pagination-wrapper cat-content\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-left page-result\">";
            // line 177
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-right page-link\">";
            // line 178
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 181
        echo "\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            echo " 
\t\t\t\t\t<p>";
            // line 182
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 184
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 189
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
</div>
";
        // line 193
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 193,  544 => 189,  538 => 187,  530 => 184,  525 => 182,  520 => 181,  514 => 178,  510 => 177,  505 => 174,  490 => 165,  487 => 164,  482 => 161,  478 => 160,  475 => 159,  469 => 157,  466 => 156,  458 => 154,  455 => 153,  450 => 151,  445 => 150,  439 => 148,  437 => 147,  434 => 146,  432 => 145,  425 => 143,  421 => 141,  415 => 140,  411 => 138,  407 => 136,  404 => 135,  400 => 134,  385 => 122,  378 => 120,  371 => 118,  365 => 117,  359 => 116,  351 => 115,  346 => 112,  337 => 110,  332 => 109,  329 => 108,  323 => 105,  320 => 104,  315 => 102,  306 => 100,  298 => 99,  293 => 98,  291 => 97,  285 => 93,  281 => 92,  272 => 85,  266 => 84,  258 => 82,  250 => 80,  247 => 79,  243 => 78,  236 => 74,  229 => 69,  223 => 68,  215 => 66,  207 => 64,  205 => 63,  199 => 62,  192 => 58,  183 => 54,  174 => 47,  171 => 46,  164 => 41,  154 => 39,  147 => 38,  143 => 37,  136 => 33,  133 => 32,  130 => 31,  126 => 29,  120 => 27,  117 => 26,  107 => 24,  105 => 23,  100 => 21,  96 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 11,  63 => 9,  52 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/category.twig", "");
    }
}
