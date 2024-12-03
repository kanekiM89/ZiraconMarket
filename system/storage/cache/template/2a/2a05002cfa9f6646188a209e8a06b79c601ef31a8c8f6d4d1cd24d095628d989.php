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

/* ziracon/template/product/search.twig */
class __TwigTemplate_9d2f4e0df39072c89b466a4745d32d09a75970bc25a2aaccc77eebb32ebc3b5a extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
     ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"page-title\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t  <div class=\"search-prod-wrap\">
      <label class=\"control-label \" for=\"input-search\">";
        // line 19
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 22
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3 sort\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 26
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 28
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28) == ($context["category_id"] ?? null))) {
                // line 29
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 29);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 29);
                echo "</option>
            ";
            } else {
                // line 31
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 31);
                echo "</option>
            ";
            }
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 34
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 34) == ($context["category_id"] ?? null))) {
                    // line 35
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 35);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 35);
                    echo "</option>
            ";
                } else {
                    // line 37
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 37);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 37);
                    echo "</option>
            ";
                }
                // line 39
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 40
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                        // line 41
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 41);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 41);
                        echo "</option>
            ";
                    } else {
                        // line 43
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 43);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 43);
                        echo "</option>
            ";
                    }
                    // line 45
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </select>
        </div>
        <div class=\"col-sm-3 search_subcategory\">
          <label class=\"checkbox-inline\">
           ";
        // line 52
        if (($context["sub_category"] ?? null)) {
            // line 53
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 55
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 57
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
          <label class=\"checkbox-inline\">
          ";
        // line 62
        if (($context["description"] ?? null)) {
            // line 63
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 65
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 67
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 69
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
\t  </div>
      <h2>";
        // line 71
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 72
        if (($context["products"] ?? null)) {
            // line 73
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"  title=\"";
            // line 76
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\"  title=\"";
            // line 77
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 81
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 85
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 90) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 91
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 91);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 91);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 93);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 93);
                    echo " </option>
\t\t\t\t ";
                }
                // line 95
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 101
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 106
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 106) == ($context["limit"] ?? null))) {
                    // line 107
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 107);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 107);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 109
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 109);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 109);
                    echo " </option>
\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
\t    <div class=\"product-layout-wrap\">
      <div class=\"row\">
        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 121
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
\t\t  \t <div class=\"product-block-inner\">
          

          <div class=\"image\">
\t\t\t\t  ";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 128);
                    echo "\">
\t\t\t\t  <img src=\"";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 129);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t  <img class=\"img-responsive hover-image\" src=\"";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 130);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                    echo "\"/>
\t\t\t\t  </a>
\t\t\t\t  ";
                } else {
                    // line 133
                    echo "\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                    echo "\">
\t\t\t\t  <img src=\"";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 134);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t  ";
                }
                // line 136
                echo "
\t\t\t\t";
                // line 137
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137)) {
                    echo "        
\t\t\t\t";
                } else {
                    // line 139
                    echo "\t\t\t\t<div class=\"saleback\">
\t\t\t\t<span class=\"saleicon sale\">";
                    // line 140
                    echo ($context["product_sale_label"] ?? null);
                    echo "</span>        
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t 
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                // line 145
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 146
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 146);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a></div>
\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 147
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                echo " ');\"></button>
\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 148
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                echo " ');\"></button>
\t\t\t\t</div>
\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
                // line 150
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t<div class=\"text-container\">
\t\t\t\t<span class=\"text-wishlist\">";
                // line 152
                echo ($context["text_wishlist"] ?? null);
                echo "</span>
\t\t\t\t</div>
\t\t\t\t</button>-->
 \t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
            </div>


            <div class=\"product-details\">
            <div class=\"btn-list-grid\">
\t\t\t<!-- <div class=\"button-group\">
                <button type=\"button\" class=\"addtocart active\" onclick=\"cart.add('";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 164);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                <button type=\"button\" class=\"wishlist active\" data-toggle=\"tooltip\" title=\"";
                // line 165
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
                echo "');\"></button>
                <button type=\"button\" class=\"compare active\" data-toggle=\"tooltip\" title=\"";
                // line 166
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 166);
                echo "');\"></button>
              </div> -->
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
                <h4><a href=\"";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 173);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 173);
                echo "</a></h4>
               
\t\t\t\t";
                // line 175
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 177
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177)) {
                        // line 178
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                        echo "
         \t\t\t";
                    } else {
                        // line 180
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 180);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 180);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 182
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 182)) {
                        // line 183
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 183);
                        echo "</span>
          \t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 185)) {
                        // line 186
                        echo "\t\t\t\t\t<span class=\"percentsaving\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 186);
                        echo "%</span>
\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t        </p>
\t            ";
                }
                // line 190
                echo "              \t";
                // line 191
                echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 193
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 193) < $context["i"])) {
                        // line 194
                        echo "\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t";
                    } else {
                        // line 196
                        echo "\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                // line 201
                echo "\t\t\t\t
\t\t\t\t <p class=\"desc\">";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 202);
                echo "</p>
              </div>

\t\t\t  <div class=\"list-right\">
\t\t\t  <!-- <div class=\"list-right-price\">
\t\t\t  ";
                // line 207
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 207)) {
                    // line 208
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 209
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 209)) {
                        // line 210
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 210);
                        echo "
         \t\t\t";
                    } else {
                        // line 212
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 212);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 212);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 214
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 214)) {
                        // line 215
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 215);
                        echo "</span>
          \t\t\t";
                    }
                    // line 217
                    echo "\t\t\t        </p>
\t            ";
                }
                // line 219
                echo "\t\t\t  </div> -->
\t\t\t  
\t\t\t  <!-- <div class=\"list-buttoncart\">
\t\t\t  <div class=\"button-group\">
\t\t\t  <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 223);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 223);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t  </div>
\t\t\t  </div> -->
\t\t\t  
\t\t\t  </div>
            </div>
\t\t\t</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "      </div>
\t  </div>
       <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 236
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 237
            echo ($context["results"] ?? null);
            echo "</div>
\t   </div>  
      ";
        } else {
            // line 240
            echo "      <p class=\"search-empty-msg\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 242
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 243
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 245
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';
\t
\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\t
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\t
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\t
\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\t
\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}
\t\t
\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\t
\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 245,  701 => 243,  696 => 242,  690 => 240,  684 => 237,  680 => 236,  675 => 233,  655 => 223,  649 => 219,  645 => 217,  637 => 215,  634 => 214,  626 => 212,  620 => 210,  618 => 209,  615 => 208,  613 => 207,  605 => 202,  602 => 201,  599 => 199,  593 => 198,  589 => 196,  585 => 194,  582 => 193,  578 => 192,  575 => 191,  573 => 190,  569 => 188,  563 => 186,  560 => 185,  552 => 183,  549 => 182,  541 => 180,  535 => 178,  533 => 177,  530 => 176,  528 => 175,  521 => 173,  509 => 166,  503 => 165,  495 => 164,  480 => 152,  473 => 150,  466 => 148,  460 => 147,  452 => 146,  444 => 145,  440 => 143,  434 => 140,  431 => 139,  426 => 137,  423 => 136,  414 => 134,  409 => 133,  399 => 130,  391 => 129,  386 => 128,  384 => 127,  376 => 121,  372 => 120,  362 => 112,  356 => 111,  348 => 109,  340 => 107,  337 => 106,  333 => 105,  326 => 101,  319 => 96,  313 => 95,  305 => 93,  297 => 91,  295 => 90,  289 => 89,  282 => 85,  273 => 81,  266 => 77,  262 => 76,  257 => 73,  255 => 72,  251 => 71,  246 => 69,  240 => 67,  236 => 65,  232 => 63,  230 => 62,  221 => 57,  217 => 55,  213 => 53,  211 => 52,  205 => 48,  199 => 47,  193 => 46,  187 => 45,  179 => 43,  171 => 41,  168 => 40,  163 => 39,  155 => 37,  147 => 35,  144 => 34,  139 => 33,  131 => 31,  123 => 29,  120 => 28,  116 => 27,  112 => 26,  103 => 22,  97 => 19,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/search.twig", "");
    }
}
