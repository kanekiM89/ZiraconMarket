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

/* ziracon/template/product/manufacturer_info.twig */
class __TwigTemplate_f9f9b3e254c97a9f6900819388e5cf7b87da4906aa1f71cb0bd4bc9550d0863c extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
        echo "    <div id=\"content\"class=\"";
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
          \t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"  title=\"";
            // line 22
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\"  title=\"";
            // line 23
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
\t\t<div class=\"compare-total\"><a href=\"";
            // line 26
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t<div class=\"pagination-right\">
\t\t <div class=\"sort-by-wrapper\">
\t\t\t<div class=\"col-md-2 text-right sort-by\">
\t\t\t  <label class=\"control-label\" for=\"input-sort\">";
            // line 30
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 text-right sort\">
\t\t\t  <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
\t\t\t\t";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 35) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 36
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 36);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 36);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 38);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 38);
                    echo " </option>
\t\t\t\t ";
                }
                // line 40
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t </div>
\t\t <div class=\"show-wrapper\">
\t\t\t<div class=\"col-md-1 text-right show\">
\t\t\t  <label class=\"control-label\" for=\"input-limit\">";
            // line 46
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 text-right limit\">
\t\t\t  <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 51
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 51) == ($context["limit"] ?? null))) {
                    // line 52
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 52);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 52);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 54);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 54);
                    echo " </option>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t</div>
      </div>
\t  </div>
      <br />
\t  <div class=\"product-layout-wrap\">
      <div class=\"row\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
\t\t  \t <div class=\"product-block-inner\">
          
\t\t\t<div class=\"image\">
                      ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 72);
                    echo "\">
                      <img src=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                    echo "\" class=\"img-responsive reg-image\"/>
                      <img class=\"img-responsive hover-image\" src=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 74);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                    echo "\"/>
                      </a>
                      ";
                } else {
                    // line 77
                    echo "                      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                    echo "\">
                      <img src=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                    echo "\" class=\"img-responsive\"/></a>
                      ";
                }
                // line 80
                echo "
                    ";
                // line 81
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                    echo "        
\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t<div class=\"saleback\">
\t\t\t\t\t<span class=\"saleicon sale\">";
                    // line 84
                    echo ($context["product_sale_label"] ?? null);
                    echo "</span>         
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                // line 89
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 90
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 90);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 91
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo " ');\"></button>
\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 92
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 92);
                echo " ');\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
                // line 94
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
                echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t<span class=\"text-wishlist\">";
                // line 96
                echo ($context["text_wishlist"] ?? null);
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t</button>-->
\t\t\t\t
\t\t\t\t\t   
\t\t\t\t
            </div>
\t\t\t\t\t
\t\t\t\t\t
                      
            

            <div class=\"product-details\">
\t\t\t<div class=\"caption\">

\t\t\t\t\t\t
                <h4><a href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "</a></h4>
                
\t\t\t\t";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 116
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 117);
                        echo "
         \t\t\t";
                    } else {
                        // line 119
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 119);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 121
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 121)) {
                        // line 122
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 122);
                        echo "</span>
          \t\t\t";
                    }
                    // line 124
                    echo "          \t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "\t\t\t\t\t<span class=\"percentsaving\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 125);
                        echo "%</span>
\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t        </p>
\t            ";
                }
                // line 129
                echo "\t\t\t\t
\t\t\t\t";
                // line 131
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 133
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 133) < $context["i"])) {
                        // line 134
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t";
                    } else {
                        // line 136
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t</div>
\t\t\t\t";
                // line 141
                echo "              
\t\t\t  <p class=\"desc\">";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 142);
                echo "</p>
\t\t\t  
             
              </div>

            </div>
\t\t\t</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "      </div>
\t   </div>
      <div class=\"pagination-wrapper\">
\t\t\t<div class=\"col-sm-6 text-left page-link\">";
            // line 155
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right page-result\">";
            // line 156
            echo ($context["results"] ?? null);
            echo "</div>
\t   </div> 
      ";
        } else {
            // line 159
            echo "      <p><?php echo \$text_empty; ?></p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"<?php echo \$continue; ?>\" class=\"btn btn-primary\"><?php echo \$button_continue; ?></a></div>
      </div>
      ";
        }
        // line 164
        echo "     ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 167
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 167,  466 => 165,  461 => 164,  454 => 159,  448 => 156,  444 => 155,  439 => 152,  423 => 142,  420 => 141,  417 => 139,  411 => 138,  407 => 136,  403 => 134,  400 => 133,  396 => 132,  393 => 131,  390 => 129,  386 => 127,  380 => 125,  377 => 124,  369 => 122,  366 => 121,  358 => 119,  352 => 117,  350 => 116,  347 => 115,  345 => 114,  338 => 112,  319 => 96,  312 => 94,  305 => 92,  299 => 91,  291 => 90,  283 => 89,  279 => 87,  273 => 84,  270 => 83,  265 => 81,  262 => 80,  253 => 78,  248 => 77,  238 => 74,  230 => 73,  225 => 72,  223 => 71,  216 => 66,  212 => 65,  202 => 57,  196 => 56,  188 => 54,  180 => 52,  177 => 51,  173 => 50,  166 => 46,  159 => 41,  153 => 40,  145 => 38,  137 => 36,  135 => 35,  129 => 34,  122 => 30,  113 => 26,  107 => 23,  103 => 22,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/manufacturer_info.twig", "");
    }
}
