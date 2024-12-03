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

/* ziracon/template/extension/module/product_tab.twig */
class __TwigTemplate_b8a3c423e9ae14f0e2a1cb4d16d21127f29ecb6baaaab17e5066889049dd9c1c extends \Twig\Template
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
        echo "<div class=\"product-tab-content box\">\t
<!-- <div class=\"title-wrapper\">
      <div class=\"box-heading\"> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</div> 
</div>  -->
<div id=\"tabs-";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"producttab\">
  <ul class=\"nav nav-tabs\">
\t";
        // line 7
        if (($context["featured_products"] ?? null)) {
            // line 8
            echo "\t  <li><a href=\"#tab-featured-";
            echo ($context["module"] ?? null);
            echo "\" data-toggle=\"tab\" class=\"selected\">";
            echo ($context["tab_featured"] ?? null);
            echo "</a></li>
\t";
        }
        // line 10
        echo "  ";
        if (($context["latest_products"] ?? null)) {
            // line 11
            echo "      <li><a href=\"#tab-latest-";
            echo ($context["module"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a></li>
  ";
        }
        // line 13
        echo "\t";
        if (($context["bestseller_products"] ?? null)) {
            // line 14
            echo "\t  <li><a href=\"#tab-bestseller-";
            echo ($context["module"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a></li>
\t";
        }
        // line 16
        echo "\t";
        if (($context["special_products"] ?? null)) {
            // line 17
            echo "\t  <li><a href=\"#tab-special-";
            echo ($context["module"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_special"] ?? null);
            echo "</a></li>
\t";
        }
        // line 19
        echo "  </ul>
</div>


<div class=\"tab-content\">

<!--  featured_products tab start  -->

";
        // line 27
        if (($context["featured_products"] ?? null)) {
            // line 28
            echo "<div id=\"tab-featured-";
            echo ($context["module"] ?? null);
            echo "\">
      ";
            // line 29
            $context["sliderFor"] = 8;
            // line 30
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["featured_products"] ?? null));
            // line 31
            echo "        ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 32
                echo "          <div class=\"customNavigation\">
          <a class=\"fa prev fa-angle-left\"></a>
          <a class=\"fa next fa-angle-right\"></a>
          </div>  
      ";
            }
            // line 37
            echo "      <div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "featured-tab-carousel";
            } else {
                echo "featured-grid";
            }
            echo "\">
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["featured_products"] ?? null), 2, "No item"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 39
                echo "            <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 41
                    echo "              <div class=\"product-block product-thumb transition\">
\t\t\t\t\t        <div class=\"product-block-inner\">\t
                      <div class=\"image\">

                          ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                        echo "\">
                            <img src=\"";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                        echo "\" class=\"img-responsive reg-image\"/>
                            <img class=\"img-responsive hover-image\" src=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 48);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                        echo "\"/>
                            </a>
                            ";
                    } else {
                        // line 51
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
                        echo "\">
                            <img src=\"";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                        echo "\" class=\"img-responsive\"/></a>
                          ";
                    }
                    // line 54
                    echo "


                          ";
                    // line 57
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57)) {
                        echo "        
                              ";
                    } else {
                        // line 59
                        echo "                              <div class=\"saleback\">
                              <span class=\"saleicon sale\">";
                        // line 60
                        echo ($context["product_sale_label"] ?? null);
                        echo "</span>         
                              </div>
                           ";
                    }
                    // line 63
                    echo "
                        <div class=\"button-group\">
\t\t\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                    // line 65
                    echo ($context["button_cart"] ?? null);
                    echo "\" class=\"addtocart\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
                    echo " ');\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                    // line 66
                    echo ($context["button_quickview"] ?? null);
                    echo "\" ><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 66);
                    echo "\">";
                    echo ($context["button_quickview"] ?? null);
                    echo "</a></div>
              <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 67
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
                    echo " ');\"></button>
\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 68
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                    echo " ');\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
                    // line 70
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 70);
                    echo " ');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t<div class=\"text-container\">
\t\t\t\t\t\t<span class=\"text-wishlist\">";
                    // line 72
                    echo ($context["text_wishlist"] ?? null);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>-->


                      </div>

                      <div class=\"caption\">

                        ";
                    // line 82
                    echo "                          <div class=\"rating\">
                          ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 84
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 84) < $context["i"])) {
                            // line 85
                            echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 87
                            echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 89
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                          </div>
                        ";
                    // line 91
                    echo " 
                      
                        <h4><a href=\"";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                    echo " </a></h4>
\t\t\t\t\t\t
                        <!--<p>";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 95);
                    echo "</p>-->
                        ";
                    // line 96
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "                        <p class=\"price\">
                        ";
                        // line 98
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 98)) {
                            // line 99
                            echo "                        ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99);
                            echo "
                        ";
                        } else {
                            // line 101
                            echo "                        <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101);
                            echo "</span>
                        ";
                        }
                        // line 103
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 103)) {
                            // line 104
                            echo "                        <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 104);
                            echo "</span>
                        ";
                        }
                        // line 106
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                            // line 107
                            echo "                        <span class=\"percentsaving\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 107);
                            echo "% </span>
                        ";
                        }
                        // line 109
                        echo "                        </p>
                        ";
                    }
                    // line 111
                    echo "\t\t\t\t\t\t
                       
\t\t\t\t\t\t 
                      </div>
\t\t\t\t\t            </div>
                       </div>
                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "              </div>
         
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </div>


    </div>
   
";
        }
        // line 127
        echo "<span class=\"featured_default_width\" style=\"display:none; visibility:hidden\"></span>

<!--  featured_products tab end  -->



<!--  latest_products tab start  -->

";
        // line 135
        if (($context["latest_products"] ?? null)) {
            // line 136
            echo " <div id=\"tab-latest-";
            echo ($context["module"] ?? null);
            echo "\">
    ";
            // line 137
            $context["sliderFor"] = 8;
            // line 138
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["latest_products"] ?? null));
            // line 139
            echo "        ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 140
                echo "          <div class=\"customNavigation\">
          <a class=\"fa prev fa-angle-left\"></a>
          <a class=\"fa next fa-angle-right\"></a>
          </div>  
      ";
            }
            // line 145
            echo "  <div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "latest-tab-carousel";
            } else {
                echo "featured-grid";
            }
            echo "\">
  ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["latest_products"] ?? null), 2, "No item"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 147
                echo "        <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
        ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 149
                    echo "                 <div class=\"product-block product-thumb transition\"> 
\t\t\t\t\t\t<div class=\"product-block-inner\">\t
                      <div class=\"image\">
                        ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 153);
                        echo "\">
                        <img src=\"";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 154);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                        echo "\" class=\"img-responsive reg-image\"/>
                        <img class=\"img-responsive hover-image\" src=\"";
                        // line 155
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 155);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                        echo "\"/>
                        </a>
                        ";
                    } else {
                        // line 158
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 158);
                        echo "\">
                        <img src=\"";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 159);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 159);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 159);
                        echo "\" class=\"img-responsive\"/></a>
                        ";
                    }
                    // line 161
                    echo "
                        ";
                    // line 162
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 162)) {
                        echo "        
                        ";
                    } else {
                        // line 164
                        echo "                        <div class=\"saleback\">
                        <span class=\"saleicon sale\">Sale</span>         
                        </div>
                        ";
                    }
                    // line 168
                    echo "
                         
                        <div class=\"button-group\">
\t\t\t\t\t\t \t              <button type=\"button\" data-placement=\"right\" title=\"";
                    // line 171
                    echo ($context["button_cart"] ?? null);
                    echo "\" class=\"addtocart\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                    echo " ');\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                            <div class=\"quickview\" data-placement=\"right\" title=\"";
                    // line 172
                    echo ($context["button_quickview"] ?? null);
                    echo "\" ><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 172);
                    echo "\">Quick View</a></div>
                            <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 173
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 173);
                    echo " ');\"></button>
                            <button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 174
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                    echo " ');\"></button>
                        </div>
                        
                      </div>

                      <div class=\"caption\">
                          ";
                    // line 181
                    echo "                            <div class=\"rating\">
                            ";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 183
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 183) < $context["i"])) {
                            // line 184
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                            ";
                        } else {
                            // line 186
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                            ";
                        }
                        // line 188
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo "                            </div>
                          ";
                    // line 190
                    echo " 

                          <h4><a href=\"";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 192);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192);
                    echo " </a></h4>

                          ";
                    // line 195
                    echo "                         ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                            <p class=\"price\">
                            ";
                        // line 197
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 197)) {
                            // line 198
                            echo "                            ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 198);
                            echo "
                            ";
                        } else {
                            // line 200
                            echo "                            <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 200);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
                            echo "</span>
                            ";
                        }
                        // line 202
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "                            <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 203);
                            echo "</span>
                            ";
                        }
                        // line 205
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 205)) {
                            // line 206
                            echo "                            <span class=\"percentsaving\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 206);
                            echo "%</span>
                            ";
                        }
                        // line 208
                        echo "                            </p>
                          ";
                    }
                    // line 210
                    echo "\t\t\t\t\t\t              
                      </div>
                </div>
           \t\t\t</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "
           </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "
       </div> 
  </div>
";
        }
        // line 222
        echo "<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>


<!--  latest_products tab end  -->





<!--  bestseller_products tab start  -->

";
        // line 233
        if (($context["bestseller_products"] ?? null)) {
            // line 234
            echo " <div id=\"tab-bestseller-";
            echo ($context["module"] ?? null);
            echo "\">
  ";
            // line 235
            $context["sliderFor"] = 4;
            // line 236
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestseller_products"] ?? null));
            // line 237
            echo "        ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 238
                echo "          <div class=\"customNavigation\">
          <a class=\"fa prev fa-angle-left\"></a>
          <a class=\"fa next fa-angle-right\"></a>
          </div>  
      ";
            }
            // line 243
            echo "<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "bestseller-tab-carousel";
            } else {
                echo "featured-grid";
            }
            echo "\">
";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["bestseller_products"] ?? null), 2, "No item"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 245
                echo "       <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
       ";
                // line 246
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 247
                    echo "                   <div class=\"product-block product-thumb transition\">
\t\t\t\t   \t<div class=\"product-block-inner\">\t
                        <div class=\"image\">

                          ";
                    // line 251
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 251)) {
                        // line 252
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 252);
                        echo "\">
                            <img src=\"";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 253);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                        echo "\" class=\"img-responsive reg-image\"/>
                            <img class=\"img-responsive hover-image\" src=\"";
                        // line 254
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 254);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 254);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 254);
                        echo "\"/>
                            </a>
                            ";
                    } else {
                        // line 257
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 257);
                        echo "\">
                            <img src=\"";
                        // line 258
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 258);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 258);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 258);
                        echo "\" class=\"img-responsive\"/></a>
                          ";
                    }
                    // line 260
                    echo "


                          ";
                    // line 263
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 263)) {
                        echo "        
                              ";
                    } else {
                        // line 265
                        echo "                              <div class=\"saleback\">
                              <span class=\"saleicon sale\">Sale</span>         
                              </div>
                           ";
                    }
                    // line 269
                    echo "

                          <div class=\"button-group\">
\t\t\t\t\t\t                  <button type=\"button\" data-placement=\"right\" title=\"";
                    // line 272
                    echo ($context["button_cart"] ?? null);
                    echo "\" class=\"addtocart\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 272);
                    echo " ');\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                              <div class=\"quickview\" data-placement=\"right\" title=\"";
                    // line 273
                    echo ($context["button_quickview"] ?? null);
                    echo "\" ><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 273);
                    echo "\">Quick View</a></div>
                              <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 274
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 274);
                    echo " ');\"></button>
                              <button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 275
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 275);
                    echo " ');\"></button>
                          </div>
                      </div>


                      <div class=\"caption\">
                        ";
                    // line 282
                    echo "                            <div class=\"rating\">
                            ";
                    // line 283
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 284
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 284) < $context["i"])) {
                            // line 285
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                            ";
                        } else {
                            // line 287
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                            ";
                        }
                        // line 289
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 290
                    echo "                            </div>
                          ";
                    // line 291
                    echo "  

                        <h4><a href=\"";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 293);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
                    echo " </a></h4>
                        <!--<p>";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 294);
                    echo "</p>-->
                        ";
                    // line 295
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 295)) {
                        // line 296
                        echo "                        <p class=\"price\">
                        ";
                        // line 297
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 297)) {
                            // line 298
                            echo "                        ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 298);
                            echo "
                        ";
                        } else {
                            // line 300
                            echo "                        <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 300);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 300);
                            echo "</span>
                        ";
                        }
                        // line 302
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 302)) {
                            // line 303
                            echo "                        <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 303);
                            echo "</span>
                        ";
                        }
                        // line 305
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 305)) {
                            // line 306
                            echo "                        <span class=\"percentsaving\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 306);
                            echo "% </span>
                        ";
                        }
                        // line 308
                        echo "                        </p>
                        ";
                    }
                    // line 310
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t   
                      </div>

                  </div>
          \t\t\t</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "  </div>
  </div>
";
        }
        // line 322
        echo "<span class=\"bestseller_default_width\" style=\"display:none; visibility:hidden\"></span>
<!--  bestseller_products tab end  -->


<!--  special_products tab start  -->

";
        // line 328
        if (($context["special_products"] ?? null)) {
            // line 329
            echo " <div id=\"tab-special-";
            echo ($context["module"] ?? null);
            echo "\">
     ";
            // line 330
            $context["sliderFor"] = 4;
            // line 331
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["special_products"] ?? null));
            // line 332
            echo "        ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 333
                echo "          <div class=\"customNavigation\">
          <a class=\"fa prev fa-angle-left\"></a>
          <a class=\"fa next fa-angle-right\"></a>
          </div>  
      ";
            }
            // line 338
            echo "  <div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "special-tab-carousel";
            } else {
                echo "featured-grid";
            }
            echo "\">
  ";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["special_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 340
                echo "       <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
                    <div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t<div class=\"product-block-inner\">\t
                        <div class=\"image\">
                                  ";
                // line 344
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 344)) {
                    // line 345
                    echo "                                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 345);
                    echo "\">
                                  <img src=\"";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 346);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 346);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 346);
                    echo "\" class=\"img-responsive reg-image\"/>
                                  <img class=\"img-responsive hover-image\" src=\"";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 347);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 347);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 347);
                    echo "\"/>
                                  </a>
                                  ";
                } else {
                    // line 350
                    echo "                                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 350);
                    echo "\">
                                  <img src=\"";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 351);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 351);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 351);
                    echo "\" class=\"img-responsive\"/></a>
                                  ";
                }
                // line 353
                echo "
                                  ";
                // line 354
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 354)) {
                    echo "        
                                  ";
                } else {
                    // line 356
                    echo "                                  <div class=\"saleback\">
                                  <span class=\"saleicon sale\">Sale</span>         
                                  </div>
                                  ";
                }
                // line 360
                echo "
                                <div class=\"button-group\">
\t\t\t\t\t\t\t\t                  <button type=\"button\" data-placement=\"right\" title=\"";
                // line 362
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 362);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button> 
                                  <div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 363
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 363);
                echo "\">Quick View</a></div>
                                  <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 364
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 364);
                echo " ');\"></button>
                                  <button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 365
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 365);
                echo " ');\"></button>
                                </div>
                        </div>

                            <div class=\"caption\">
                                ";
                // line 371
                echo "                                  <div class=\"rating\">
                                  ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 373
                    echo "                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 373) < $context["i"])) {
                        // line 374
                        echo "                                  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                                  ";
                    } else {
                        // line 376
                        echo "                                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                                  ";
                    }
                    // line 378
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                echo "                                  </div>
                                ";
                // line 380
                echo "  

                                  <h4><a href=\"";
                // line 382
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 382);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 382);
                echo " </a></h4>
                                  <!--<p class=\"desc\">";
                // line 383
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 383), 0, 100);
                echo "</p> ";
                echo "-->
                                ";
                // line 384
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 384)) {
                    // line 385
                    echo "                                  <p class=\"price\">
                                  ";
                    // line 386
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 386)) {
                        // line 387
                        echo "                                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 387);
                        echo "
                                  ";
                    } else {
                        // line 389
                        echo "                                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 389);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 389);
                        echo "</span>
                                  ";
                    }
                    // line 391
                    echo "                                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 391)) {
                        // line 392
                        echo "                                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 392);
                        echo "</span>
                                  ";
                    }
                    // line 394
                    echo "                                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 394)) {
                        // line 395
                        echo "                                  <span class=\"percentsaving\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 395);
                        echo "%</span>
                                  ";
                    }
                    // line 397
                    echo "                                  </p>
                                ";
                }
                // line 398
                echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                    
                          </div>
                    </div>
\t\t\t\t\t</div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "        </div> 
    </div>
";
        }
        // line 409
        echo "<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>

<!--  special_products tab end  -->
</div>
</div>
<script type=\"text/javascript\">
\$('#tabs-";
        // line 415
        echo ($context["module"] ?? null);
        echo " a').tabs();
</script> 
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/product_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1190 => 415,  1182 => 409,  1177 => 406,  1164 => 398,  1160 => 397,  1154 => 395,  1151 => 394,  1143 => 392,  1140 => 391,  1132 => 389,  1126 => 387,  1124 => 386,  1121 => 385,  1119 => 384,  1114 => 383,  1108 => 382,  1104 => 380,  1101 => 379,  1095 => 378,  1091 => 376,  1087 => 374,  1084 => 373,  1080 => 372,  1077 => 371,  1067 => 365,  1061 => 364,  1055 => 363,  1047 => 362,  1043 => 360,  1037 => 356,  1032 => 354,  1029 => 353,  1020 => 351,  1015 => 350,  1005 => 347,  997 => 346,  992 => 345,  990 => 344,  978 => 340,  974 => 339,  959 => 338,  952 => 333,  949 => 332,  946 => 331,  944 => 330,  939 => 329,  937 => 328,  929 => 322,  924 => 319,  917 => 317,  905 => 310,  901 => 308,  895 => 306,  892 => 305,  884 => 303,  881 => 302,  873 => 300,  867 => 298,  865 => 297,  862 => 296,  860 => 295,  856 => 294,  850 => 293,  846 => 291,  843 => 290,  837 => 289,  833 => 287,  829 => 285,  826 => 284,  822 => 283,  819 => 282,  808 => 275,  802 => 274,  796 => 273,  788 => 272,  783 => 269,  777 => 265,  772 => 263,  767 => 260,  758 => 258,  753 => 257,  743 => 254,  735 => 253,  730 => 252,  728 => 251,  722 => 247,  718 => 246,  709 => 245,  705 => 244,  690 => 243,  683 => 238,  680 => 237,  677 => 236,  675 => 235,  670 => 234,  668 => 233,  655 => 222,  649 => 218,  641 => 215,  631 => 210,  627 => 208,  621 => 206,  618 => 205,  610 => 203,  607 => 202,  599 => 200,  593 => 198,  591 => 197,  588 => 196,  585 => 195,  578 => 192,  574 => 190,  571 => 189,  565 => 188,  561 => 186,  557 => 184,  554 => 183,  550 => 182,  547 => 181,  536 => 174,  530 => 173,  524 => 172,  516 => 171,  511 => 168,  505 => 164,  500 => 162,  497 => 161,  488 => 159,  483 => 158,  473 => 155,  465 => 154,  460 => 153,  458 => 152,  453 => 149,  449 => 148,  440 => 147,  436 => 146,  421 => 145,  414 => 140,  411 => 139,  408 => 138,  406 => 137,  401 => 136,  399 => 135,  389 => 127,  381 => 121,  373 => 118,  361 => 111,  357 => 109,  351 => 107,  348 => 106,  340 => 104,  337 => 103,  329 => 101,  323 => 99,  321 => 98,  318 => 97,  316 => 96,  312 => 95,  305 => 93,  301 => 91,  298 => 90,  292 => 89,  288 => 87,  284 => 85,  281 => 84,  277 => 83,  274 => 82,  262 => 72,  255 => 70,  248 => 68,  242 => 67,  234 => 66,  226 => 65,  222 => 63,  216 => 60,  213 => 59,  208 => 57,  203 => 54,  194 => 52,  189 => 51,  179 => 48,  171 => 47,  166 => 46,  164 => 45,  158 => 41,  154 => 40,  145 => 39,  141 => 38,  126 => 37,  119 => 32,  116 => 31,  113 => 30,  111 => 29,  106 => 28,  104 => 27,  94 => 19,  86 => 17,  83 => 16,  75 => 14,  72 => 13,  64 => 11,  61 => 10,  53 => 8,  51 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/product_tab.twig", "");
    }
}
