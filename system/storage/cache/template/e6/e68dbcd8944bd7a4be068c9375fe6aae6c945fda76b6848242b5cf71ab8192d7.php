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

/* ziracon/template/product/special.twig */
class __TwigTemplate_e9c1543bdfe87ce765855968761a01e29a103c3ec3fddca5b62bd4dd7bf94a01 extends \Twig\Template
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
<div id=\"product-special\" class=\"container\">
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
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
            
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" title=\"";
            // line 23
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" title=\"";
            // line 24
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 27
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 31
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 36) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 37
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 39);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 39);
                    echo " </option>
\t\t\t\t ";
                }
                // line 41
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 47
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 52
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 52) == ($context["limit"] ?? null))) {
                    // line 53
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 53);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 53);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 55);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 55);
                    echo " </option>
\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
\t  <div class=\"product-layout-wrap\">
      <div class=\"row\">
        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
\t\t  \t <div class=\"product-block-inner\">
\t\t\t 
\t\t\t
\t\t\t 
\t\t\t
\t\t\t \t\t\t\t\t\t\t
\t\t\t<div class=\"image\">
\t\t\t\t";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                    echo "\">
\t\t\t\t<img src=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 79);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                    echo "\"/>
\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
                    echo "\">
\t\t\t\t<img src=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 83);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t";
                }
                // line 85
                echo "\t
\t\t\t";
                // line 86
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86)) {
                    echo "        
\t\t\t";
                } else {
                    // line 88
                    echo "\t\t\t<div class=\"saleback\">
\t\t\t<span class=\"saleicon sale\">";
                    // line 89
                    echo ($context["product_sale_label"] ?? null);
                    echo "</span>          
\t\t\t</div>
\t\t\t";
                }
                // line 92
                echo "\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                // line 94
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 95
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 95);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a></div>
\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 96
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                echo " ');\"></button>
\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 97
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
                echo " ');\"></button>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
                // line 99
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 99);
                echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t<div class=\"text-container\">
\t\t\t\t<span class=\"text-wishlist\">";
                // line 101
                echo ($context["text_wishlist"] ?? null);
                echo "</span>
\t\t\t\t</div>
\t\t\t\t</button>-->
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</div>
            <div class=\"product-details\">
            <div class=\"btn-list-grid\">
\t\t\t
\t\t\t</div>


\t\t\t
\t\t\t<div class=\"caption\">
\t\t\t\t
\t\t\t";
                // line 118
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 120
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 120) < $context["i"])) {
                        // line 121
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t</div>
\t\t\t\t";
                // line 127
                echo " 

\t\t\t<h4><a href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 129);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                echo "</a></h4>
\t
\t\t\t\t";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 131)) {
                    // line 132
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 133
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "
         \t\t\t";
                    } else {
                        // line 136
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 136);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 138
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 139);
                        echo "</span>
          \t\t\t";
                    }
                    // line 141
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141)) {
                        // line 142
                        echo "\t\t\t\t\t<span class=\"percentsaving\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 142);
                        echo "%</span>
\t\t\t\t\t";
                    }
                    // line 144
                    echo "\t\t\t\t    </p>
\t            ";
                }
                // line 146
                echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<p class=\"desc\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 149);
                echo "</p>
         
              </div>
\t\t\t 
\t\t\t  <!-- <div class=\"list-right\">
\t\t\t  <div class=\"list-right-price\">
\t\t\t  ";
                // line 155
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 157
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158);
                        echo "
         \t\t\t";
                    } else {
                        // line 160
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 162
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 163);
                        echo "</span>
          \t\t\t";
                    }
                    // line 165
                    echo "\t\t\t        </p>
\t            ";
                }
                // line 167
                echo "\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"list-buttoncart\">
\t\t\t  <div class=\"button-group\">
\t\t\t  <button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 171);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t  </div>
\t\t\t  </div>
\t\t\t  
\t\t\t  </div> -->
            </div>
\t\t\t</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "      </div>
\t   </div>
      <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 184
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 185
            echo ($context["results"] ?? null);
            echo "</div>
\t   </div>     
      ";
        } else {
            // line 188
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 190
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 193
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 194
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 196
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 196,  536 => 194,  531 => 193,  523 => 190,  517 => 188,  511 => 185,  507 => 184,  502 => 181,  482 => 171,  476 => 167,  472 => 165,  464 => 163,  461 => 162,  453 => 160,  447 => 158,  445 => 157,  442 => 156,  440 => 155,  431 => 149,  426 => 146,  422 => 144,  416 => 142,  413 => 141,  405 => 139,  402 => 138,  394 => 136,  388 => 134,  386 => 133,  383 => 132,  381 => 131,  374 => 129,  370 => 127,  367 => 126,  361 => 125,  357 => 123,  353 => 121,  350 => 120,  346 => 119,  343 => 118,  324 => 101,  317 => 99,  310 => 97,  304 => 96,  296 => 95,  288 => 94,  284 => 92,  278 => 89,  275 => 88,  270 => 86,  267 => 85,  258 => 83,  253 => 82,  243 => 79,  235 => 78,  230 => 77,  228 => 76,  217 => 67,  213 => 66,  203 => 58,  197 => 57,  189 => 55,  181 => 53,  178 => 52,  174 => 51,  167 => 47,  160 => 42,  154 => 41,  146 => 39,  138 => 37,  136 => 36,  130 => 35,  123 => 31,  114 => 27,  108 => 24,  104 => 23,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/special.twig", "");
    }
}
