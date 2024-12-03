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

/* ziracon/template/extension/module/category_tab.twig */
class __TwigTemplate_05a73dbb1971aac2c8c3160190f3fba206b0af50eb3d7a4bd507795126ba22c9 extends \Twig\Template
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
        echo "<div id=\"Tab_Category_Slider\" class=\"category_tab box\">
      <!-- <div class=\"title-wrapper\">
         <div class=\"box-heading\">";
        // line 3
        echo ($context["categorytab_heading_title"] ?? null);
        echo "</div>
      </div> -->
      <div class=\"tabs\">
         <div class=\"etabs\">
            <ul class=\"nav nav-tabs\">
               ";
        // line 8
        $context["cnt"] = 0;
        echo " 
               ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "               ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_tab", [], "any", false, false, false, 10);
            echo "
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
         </div>
         ";
        // line 14
        $context["sliderFor"] = 5;
        // line 15
        echo "         ";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 16
        echo "         ";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 17
            echo "         <!-- <div class=\"customNavigation\">
            <a class=\"fa prev\">&nbsp;</a>
            <a class=\"fa next\">&nbsp;</a>
            </div> -->\t
         ";
        }
        // line 22
        echo "         <div class=\"tab-content home-products\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_div", [], "any", false, false, false, 24);
            echo "
            ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25) != twig_get_attribute($this->env, $this->source, $context["category"], "target_category_id", [], "any", false, false, false, 25))) {
                // line 26
                echo "            <div id=\"tab_spinner\"></div>
            ";
            } else {
                // line 28
                echo "            <div class=\"owl-carousel owl-demo-tabcate\">
               ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo "\t
               <div class=\"product-block-wrapper\">
                  <div class=\"item text-center product-innerblock\">
                     <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"product-block product-thumb transition\">
                           <div class=\"product-block-inner\">
                              <div class=\"image\">
                                 ";
                    // line 36
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                                 <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                        echo "\">
                                 <img src=\"";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 38);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                        echo "\" class=\"img-responsive reg-image\"/>
                                 <img class=\"img-responsive hover-image\" src=\"";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 39);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                        echo "\"/>
                                 </a>
                                 ";
                    } else {
                        // line 42
                        echo "                                 <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                        echo "\">
                                 <img src=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                        echo "\" class=\"img-responsive\"/></a>
                                 ";
                    }
                    // line 45
                    echo "                                 ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45)) {
                        echo "        
                                 ";
                    } else {
                        // line 47
                        echo "                                 <div class=\"saleback\">
                                    <span class=\"saleicon sale\">";
                        // line 48
                        echo ($context["product_sale_label"] ?? null);
                        echo "</span>         
                                 </div>
                                 ";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                    // line 52
                    echo ($context["button_cart"] ?? null);
                    echo "\" class=\"addtocart\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
                    echo " ');\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                    // line 53
                    echo ($context["button_quickview"] ?? null);
                    echo "\" ><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 53);
                    echo "\">";
                    echo ($context["button_quickview"] ?? null);
                    echo "</a></div>
                           <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 54
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 54);
                    echo " ');\"></button>
\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                    // line 55
                    echo ($context["button_compare"] ?? null);
                    echo " \" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                    echo " ');\"></button>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
                              </div>
                              <!-- <div class=\"product-details\"> -->
                              <div class=\"caption\">
                              ";
                    // line 61
                    echo "                                 <div class=\"rating\">
                                    ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 63
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 63) < $context["i"])) {
                            // line 64
                            echo "                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                                    ";
                        } else {
                            // line 66
                            echo "                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                                    ";
                        }
                        // line 68
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                                 </div>
                                 ";
                    // line 71
                    echo "
                                 <h4><a href=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 72);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 72);
                    echo " </a></h4>

                                 ";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "                                 <p class=\"price\">
                                    ";
                        // line 76
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                            // line 77
                            echo "                                    ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
                            echo "
                                    ";
                        } else {
                            // line 79
                            echo "                                    <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                            echo "</span>
                                    ";
                        }
                        // line 81
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 81)) {
                            // line 82
                            echo "                                    <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82);
                            echo "</span>
                                    ";
                        }
                        // line 84
                        echo "
                                    ";
                        // line 85
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85)) {
                            // line 86
                            echo "                                    <span class=\"percentsaving\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 86);
                            echo "%</span>
                                    ";
                        }
                        // line 87
                        echo "\t
                                 </p>
                                 ";
                    }
                    // line 90
                    echo "
                                 ";
                    // line 91
                    echo "                                                                                                
                              </div>
                              <!-- </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "            </div>
            ";
            }
            // line 102
            echo "         </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "      </div>
</div>
</div>

<script type=\"text/javascript\"><!--
\$('#Tab_Category_Slider .owl-demo-tabcate').owlCarousel({
      items: 4,
\tnavigation: true,
\tnavigationText: ['<span class=\"left\"><a class=\"fa prev fa-angle-left\"></a></span>', '<span class=\"right\"><a class=\"fa next fa-angle-right\"></a></span>'],
\tpagination: false,
\ttransitionStyle : \"fade\",
\tslideSpeed : 1000,
\trewindSpeed : 800,
\titemsCustom : [
               [320, 1],
               [480, 2],
               [767, 3],
               [979, 4],
               [980, 3],
               [1200, 4],
               [1500, 4],
      ]
\t  
  });
function loadAjaxData(category_id) {
\tvar unavailabledates = ";
        // line 129
        echo json_encode(($context["setting"] ?? null));
        echo ";
\tvar dataToSend = {'category_id' : category_id, 'setting' : unavailabledates } ;
\t\$.ajax({
\t\ttype: 'POST',
\t\tdata: dataToSend,
\t\turl: '";
        // line 134
        echo ($context["HTTP_SERVER"] ?? null);
        echo "index.php?route=extension/module/category_tab/ajaxloaddata',
\t\tbeforeSend: function() {
\t\t'<div style=\"text-align:center;\"></div>';
\t\t  //http://www.bigtravelsghana.com/img/images/ajax-loader.gif
\t   },
\t\tsuccess: function (data) {
\t\t\t\$('#Tab_Category_Slider').replaceWith(data);
\t\t\t\$('#Tab_Category_Slider .owl-demo-tabcate').owlCarousel({
\t\t\t\titems: 4,
\t\t\t\tnavigation: true,
\t\t\t\tnavigationText: ['<span class=\"left\"></span>', '<span class=\"right\"></span>'],
\t\t\t\tpagination: false,
\t\t\t\ttransitionStyle : \"fade\",
\t\t\t\titemsCustom : [
               [320, 1],
               [480, 2],
               [767, 3],
               [979, 4],
               [980, 3],
               [1200, 4],
               [1500, 4],
\t\t\t\t ]
\t\t\t});
\t\t\t//alert(data);
\t\t}
\t});
}
--></script>
<script type=\"text/javascript\">
\t// Can also be used with \$(document).ready()
\t\$(document).ready(function() {\t\t
\t  \$(\"#tab_spinner\").fadeOut(\"slow\");
\t});\t
</script>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/category_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 134,  347 => 129,  320 => 104,  313 => 102,  309 => 100,  295 => 91,  292 => 90,  287 => 87,  281 => 86,  279 => 85,  276 => 84,  268 => 82,  265 => 81,  257 => 79,  251 => 77,  249 => 76,  246 => 75,  244 => 74,  237 => 72,  234 => 71,  231 => 69,  225 => 68,  221 => 66,  217 => 64,  214 => 63,  210 => 62,  207 => 61,  197 => 55,  191 => 54,  183 => 53,  175 => 52,  172 => 51,  166 => 48,  163 => 47,  157 => 45,  148 => 43,  143 => 42,  133 => 39,  125 => 38,  120 => 37,  118 => 36,  106 => 29,  103 => 28,  99 => 26,  97 => 25,  92 => 24,  88 => 23,  85 => 22,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 12,  57 => 10,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/category_tab.twig", "");
    }
}
