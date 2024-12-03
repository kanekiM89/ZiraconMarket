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

/* ziracon/template/extension/module/latest.twig */
class __TwigTemplate_e01defa758b0ea2377b389e8c943aa8be899d62028f2498a76d3b141518da3df extends \Twig\Template
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
        echo "<div class=\"box latest product-box\">
   <div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
   <div class=\"box-content\">
      <div class=\"latest-products home-products\">
         ";
        // line 5
        $context["sliderFor"] = 9;
        // line 6
        echo "         ";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 7
        echo "         ";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 8
            echo "         <div class=\"customNavigation\">
            <a class=\"prev\">";
            // line 9
            echo ($context["text_prev"] ?? null);
            echo "</a>
            <a class=\"next\">";
            // line 10
            echo ($context["text_next"] ?? null);
            echo "</a>
         </div>
         ";
        }
        // line 13
        echo "         <div class=\"box-product ";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "latest-carousel";
        } else {
            echo "latest-grid";
        }
        echo "\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "               <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
                  <div class=\"product-block product-thumb transition\">
                     <div class=\"product-block-inner\">
                        <div class=\"image\">
                           ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 19)) {
                // line 20
                echo "                           <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">
                           <img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "\" class=\"img-responsive reg-image\"/>
                           <img class=\"img-responsive hover-image\" src=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 22);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "\"/>
                           </a>
                           ";
            } else {
                // line 25
                echo "                           <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">
                           <img src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" class=\"img-responsive\"/></a>
                           ";
            }
            // line 28
            echo "                           ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28)) {
                echo "        
                           ";
            } else {
                // line 30
                echo "                           <div class=\"saleback\">
                              <span class=\"saleicon sale\">";
                // line 31
                echo ($context["product_sale_label"] ?? null);
                echo "</span>                
                           </div>
                           ";
            }
            // line 34
            echo "                           <div class=\"button-group\">
                              <button type=\"button\" data-placement=\"right\" title=\"";
            // line 35
            echo ($context["button_cart"] ?? null);
            echo "\" class=\"addtocart\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 35);
            echo " ');\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
                              <div class=\"quickview\" data-placement=\"right\" title=\"";
            // line 36
            echo ($context["button_quickview"] ?? null);
            echo "\" ><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 36);
            echo "\">";
            echo ($context["button_quickview"] ?? null);
            echo "</a></div>
                              <button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
            // line 37
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            echo " ');\"></button>
                              <button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
            // line 38
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo " ');\"></button>                             
                           </div>
                           <!--<button class=\"wishlist\" type=\"button\"  data-placement=\"right\" title=\"";
            // line 40
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
            echo " ');\"><i class=\"fa fa-heart\"></i>
                              <div class=\"text-container\">
                              <span class=\"text-wishlist\">";
            // line 42
            echo ($context["text_wishlist"] ?? null);
            echo "</span>
                              </div>
                              </button>-->
                        </div>
                        <div class=\"caption\">
                           ";
            // line 48
            echo "                              <div class=\"rating\">
                                 ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                 ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 50) < $context["i"])) {
                    // line 51
                    echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                                 ";
                } else {
                    // line 53
                    echo "                                 <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
                                 ";
                }
                // line 55
                echo "                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                              </div>
                           ";
            // line 58
            echo "                           <h4><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
            echo " </a></h4>
                           ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59)) {
                // line 60
                echo "                           <p class=\"price\">
                              ";
                // line 61
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                    echo "
                              ";
                } else {
                    // line 64
                    echo "                              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                    echo "</span>
                              ";
                }
                // line 66
                echo "                              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                              <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 67);
                    echo "</span>
                              ";
                }
                // line 69
                echo "                              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                              <span class=\"percentsaving\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 70);
                    echo "%</span>
                              ";
                }
                // line 72
                echo "                           </p>
                           ";
            }
            // line 74
            echo "\t\t\t\t\t\t        
                           ";
            // line 78
            echo "                        </div>
                     </div>
                  </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "         </div>
      </div>
   </div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 83,  281 => 78,  278 => 74,  274 => 72,  268 => 70,  265 => 69,  257 => 67,  254 => 66,  246 => 64,  240 => 62,  238 => 61,  235 => 60,  233 => 59,  226 => 58,  223 => 56,  217 => 55,  213 => 53,  209 => 51,  206 => 50,  202 => 49,  199 => 48,  191 => 42,  184 => 40,  177 => 38,  171 => 37,  163 => 36,  155 => 35,  152 => 34,  146 => 31,  143 => 30,  137 => 28,  128 => 26,  123 => 25,  113 => 22,  105 => 21,  100 => 20,  98 => 19,  86 => 15,  82 => 14,  67 => 13,  61 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/latest.twig", "");
    }
}
