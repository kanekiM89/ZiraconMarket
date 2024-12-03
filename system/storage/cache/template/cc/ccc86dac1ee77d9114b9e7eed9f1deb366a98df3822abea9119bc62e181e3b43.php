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

/* ziracon/template/product/product.twig */
class __TwigTemplate_33af368fcdbdd7c16bba640b9218c46e77dccae030421c01ed08b2d077a35ccd extends \Twig\Template
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
<div class=\"productpage\">
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  <div class=\"row\">
\t";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"\"> 
\t  
\t  <div class=\"prodpg-prod-detail\">
\t  <div class=\"row\">
\t  \t";
        // line 23
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12 product-left";
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12 product-left";
            // line 27
            echo "        ";
        }
        // line 28
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
\t\t<div class=\"product-info\">\t\t
\t\t ";
        // line 30
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 31
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 32
            if (($context["thumb"] ?? null)) {
                echo "      
\t  <!-- Cloud-Zoom Image Effect Start -->
\t  \t<div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 34
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
      ";
            }
            // line 36
            echo "      ";
            if (($context["images"] ?? null)) {
                // line 37
                echo "\t  \t ";
                $context["sliderFor"] = 3;
                // line 38
                echo "\t\t  ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
\t\t \t
\t\t <div class=\"additional-carousel\">\t
\t\t  ";
                // line 41
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    // line 42
                    echo "\t\t  \t<div class=\"customNavigation\">
\t\t\t<span class=\"prev\">&nbsp;</span>
\t\t\t<span class=\"next\">&nbsp;</span>
\t\t\t</div> 
\t\t ";
                }
                // line 46
                echo "\t      
    \t   <div id=\"additional-carousel\" class=\"image-additional ";
                // line 47
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "product-carousel";
                }
                echo "\">
\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">\t\t
\t\t\t\t\t<a href=\"";
                // line 50
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"74\" height=\"74\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 55
                    echo "\t\t\t\t<div class=\"slider-item\">
\t\t\t\t<div class=\"product-block\">\t\t
        \t\t\t<a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 57);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 57);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 57);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 57);
                    echo "\" width=\"74\" height=\"74\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t
    \t  </div>
\t\t  <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t  </div>
\t\t";
            }
            // line 64
            echo "\t\t  \t  

\t<!-- Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 69
        echo "\t
\t
\t\t\t
        </div>
\t\t  
        </div>
        ";
        // line 75
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 76
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12 product-right";
            // line 77
            echo "        ";
        } else {
            // line 78
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12 product-right";
            // line 79
            echo "        ";
        }
        // line 80
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
           <div class=\"product-right-inner\">
          <h3 class=\"product-title\">";
        // line 82
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t   ";
        // line 83
        if (($context["review_status"] ?? null)) {
            // line 84
            echo "          <div class=\"rating-wrapper\">
             ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 86
                echo "\t\t\t ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 87
                    echo "\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t";
                }
                // line 91
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>  <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            echo ($context["text_write"] ?? null);
            echo "</a>
           
           
          </div>
          ";
        }
        // line 96
        echo "          <ul class=\"list-unstyled\">
            ";
        // line 97
        if (($context["manufacturer"] ?? null)) {
            // line 98
            echo "            <li><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 100
        echo "            <li><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 101
        if (($context["reward"] ?? null)) {
            // line 102
            echo "            <li><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 104
        echo "            <li><span class=\"desc\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 106
        if (($context["price"] ?? null)) {
            // line 107
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 108
            if ( !($context["special"] ?? null)) {
                // line 109
                echo "            <li>
              <h2>";
                // line 110
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 113
                echo "            <li><span class=\"price-old\" style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
\t\t\t<li><h2 class=\"special-price\">";
                // line 114
                echo ($context["special"] ?? null);
                echo "</h2></li>
            ";
            }
            // line 116
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 117
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 119
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 120
                echo "            <li class=\"points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 122
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 123
                echo "           
            ";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 125
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 125);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 125);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "            ";
            }
            // line 128
            echo "          </ul>
          ";
        }
        // line 130
        echo "          <div id=\"product\">
\t\t   ";
        // line 131
        if (($context["options"] ?? null)) {
            // line 132
            echo "            <h3 class=\"product-option\">";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 134
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 134) == "select")) {
                    // line 135
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 135)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 136);
                    echo "</label>
              <select name=\"option[";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 138
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 139));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 140
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                        echo "
                ";
                        // line 141
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 141)) {
                            // line 142
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                            echo ")
                ";
                        }
                        // line 143
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "              </select>
            </div>
            ";
                }
                // line 148
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "radio")) {
                    // line 149
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 149)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 150);
                    echo "</label>
              <div id=\"input-option";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 151));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 152
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 154);
                        echo "\" />
                    ";
                        // line 155
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 155)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 155);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 155);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 155);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 156
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 156);
                        echo "
                    ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 157)) {
                            // line 158
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 158);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 158);
                            echo ")
                    ";
                        }
                        // line 159
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo " </div>
            </div>
            ";
                }
                // line 164
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 164) == "checkbox")) {
                    // line 165
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 165)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 166);
                    echo "</label>
              <div id=\"input-option";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 168
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 170);
                        echo "\" />
                    ";
                        // line 171
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 171);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 172
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                        echo "
                    ";
                        // line 173
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173)) {
                            // line 174
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 174);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 174);
                            echo ")
                    ";
                        }
                        // line 175
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo " </div>
            </div>
            ";
                }
                // line 180
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "text")) {
                    // line 181
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 183);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 186
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 186) == "textarea")) {
                    // line 187
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 187)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "</label>
              <textarea name=\"option[";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 189);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 189);
                    echo "</textarea>
            </div>
            ";
                }
                // line 192
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "file")) {
                    // line 193
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" />
            </div>
            ";
                }
                // line 199
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "date")) {
                    // line 200
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 209
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 209) == "datetime")) {
                    // line 210
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 210)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 211);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 213);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 219
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 219) == "time")) {
                    // line 220
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 220)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 221);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 223);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 229
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "            ";
        }
        // line 231
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 232
            echo "            <hr>
            <h3>";
            // line 233
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 236
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 238
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 238);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 244
        echo "            <div class=\"form-group cart\">
              <label class=\"control-label qty\" for=\"input-quantity\">";
        // line 245
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 246
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 247
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t  <span>  - OR -  </span>
\t\t\t   <div class=\"btn-group\">
\t\t\t  
            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 251
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart-o\"></i>";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 252
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-balance-scale\"></i>";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
             
\t\t\t</div>
\t\t\t  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 256
        echo ($context["product_id"] ?? null);
        echo "\" />
          \t\t ";
        // line 257
        if ((($context["minimum"] ?? null) > 1)) {
            // line 258
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 260
        echo "            
           <hr>
\t\t\t <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 263
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
\t\t\t</div>
          </div>
\t\t  </div>
\t\t  </div>
\t\t  </div>
\t\t  
\t\t   <!-- product page tab code start-->
\t\t ";
        // line 273
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 274
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 275
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 276
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 277
            echo "         ";
        } else {
            // line 278
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 279
            echo "        ";
        }
        // line 280
        echo "\t  <div id=\"tabs_info\" class=\"product-tab ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 282
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 283
        if (($context["attribute_groups"] ?? null)) {
            // line 284
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 286
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 287
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 289
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 291
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 292
        if (($context["attribute_groups"] ?? null)) {
            // line 293
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 296
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 298
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 298);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 302
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 302));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 303
                    echo "                <tr>
                  <td>";
                    // line 304
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 304);
                    echo "</td>
                  <td>";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 305);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 308
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            echo "              </table>
            </div>
            ";
        }
        // line 313
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 314
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 317
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 318
            if (($context["review_guest"] ?? null)) {
                // line 319
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 321
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 322
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 327
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 329
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 334
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 335
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 345
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 347
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 350
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 354
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 356
            echo "              </form>
            </div>
            ";
        }
        // line 358
        echo "</div>
\t\t  </div>
      </div>
\t  
\t 
\t ";
        // line 363
        if (($context["products"] ?? null)) {
            // line 364
            echo "\t  <div class=\"box related product-box\">
\t    <div class=\"related-products-wrapper\">
\t\t<div class=\"title-wrapper\">
\t\t<div class=\"box-heading\">";
            // line 367
            echo ($context["text_related"] ?? null);
            echo "</div>
\t\t</div>
\t  <div class=\"box-content\">
\t  <div id=\"products-related\" class=\"related-products home-products\">
\t\t\t
\t\t\t";
            // line 372
            $context["sliderFor"] = 3;
            // line 373
            echo "\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
\t\t\t
\t\t\t\t";
            // line 375
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 376
                echo "\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t<a class=\"fa prev \">prev</a>
\t\t\t\t\t\t<a class=\"fa next \">next</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 381
            echo "\t\t\t\t
\t\t\t\t<div class=\"box-product ";
            // line 382
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
      \t\t  ";
            // line 383
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 384
                echo "\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t <div class=\"product-block product-thumb transition\">
\t  \t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t<!-- <div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 388
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 388);
                echo " \"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 388);
                echo " \" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 388);
                echo " \" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 388);
                echo " \" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 389
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 389)) {
                    echo "        
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 390
                    echo "   
\t\t\t\t\t\t\t\t\t\t\t<span class=\"saleicon sale\">";
                    // line 391
                    echo ($context["product_sale_label"] ?? null);
                    echo "</span>  
\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 393
                echo "\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
                    <div class=\"image\">
                      ";
                // line 397
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 397)) {
                    // line 398
                    echo "                      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 398);
                    echo "\">
                      <img src=\"";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 399);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 399);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 399);
                    echo "\" class=\"img-responsive reg-image\"/>
                      <img class=\"img-responsive hover-image\" src=\"";
                    // line 400
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 400);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 400);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 400);
                    echo "\"/>
                      </a>
                      ";
                } else {
                    // line 403
                    echo "                      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 403);
                    echo "\">
                      <img src=\"";
                    // line 404
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 404);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 404);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 404);
                    echo "\" class=\"img-responsive\"/></a>
                      ";
                }
                // line 406
                echo "
                  \t ";
                // line 407
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 407)) {
                    echo "        
                      ";
                } else {
                    // line 409
                    echo "                      <div class=\"saleback\">
                    \t<span class=\"saleicon sale\">";
                    // line 410
                    echo ($context["product_sale_label"] ?? null);
                    echo "</span> 
                      </div>
                      ";
                }
                // line 413
                echo "\t  
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button type=\"button\" data-placement=\"right\" title=\"";
                // line 415
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"addtocart\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 415);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t<div class=\"quickview\" data-placement=\"right\" title=\"";
                // line 416
                echo ($context["button_quickview"] ?? null);
                echo "\" ><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 416);
                echo "\">";
                echo ($context["button_quickview"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\" data-placement=\"right\" title=\"";
                // line 417
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 417);
                echo " ');\"></button>
\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-placement=\"right\" title=\"";
                // line 418
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 418);
                echo " ');\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t  \t\t 
                    </div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t";
                // line 424
                echo " 
\t\t\t\t\t\t   <div class=\"rating\">
\t\t\t\t\t\t   ";
                // line 426
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 427
                    echo "\t\t\t\t\t\t   ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 427) < $context["i"])) {
                        // line 428
                        echo "\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t   ";
                    } else {
                        // line 430
                        echo "\t\t\t\t\t\t   <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t   ";
                    }
                    // line 432
                    echo "\t\t\t\t\t\t   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 433
                echo "\t\t\t\t\t\t   </div>
\t\t\t\t\t\t";
                // line 435
                echo "
\t\t\t\t\t\t<h4><a href=\"";
                // line 436
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 436);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 436);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 438
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 438)) {
                    // line 439
                    echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                    // line 440
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 440)) {
                        // line 441
                        echo "\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 441);
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 443
                        echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 443);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 443);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 445
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 445)) {
                        // line 446
                        echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 446);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 448
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 448)) {
                        // line 449
                        echo "\t\t\t\t\t\t\t<span class=\"percentsaving\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 449);
                        echo "%</span>
\t\t\t\t\t\t\t";
                    }
                    // line 451
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 453
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t";
                // line 455
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t  \t\t
\t\t\t\t\t<!-- Related Products Start -->\t
\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "\t\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t\t<span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
        ";
        }
        // line 473
        echo "\t\t
        ";
        // line 474
        if (($context["tags"] ?? null)) {
            // line 475
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 476
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 477
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 477);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 477);
                    echo "</a>,
        ";
                } else {
                    // line 478
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 478);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 478);
                    echo "</a> ";
                }
                // line 479
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 481
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 482
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$.notify({
\t\t\t\t\tmessage: json['success'],
\t\t\t\t\ttarget: '_blank'
\t\t\t\t},{
\t\t\t\t\t// settings
\t\t\t\t\telement: 'body',
\t\t\t\t\tposition: null,
\t\t\t\t\ttype: \"info\",
\t\t\t\t\tallow_dismiss: true,
\t\t\t\t\tnewest_on_top: false,
\t\t\t\t\tplacement: {
\t\t\t\t\t\tfrom: \"top\",
\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t},
\t\t\t\t\toffset: 0,
\t\t\t\t\tspacing: 10,
\t\t\t\t\tz_index: 2031,
\t\t\t\t\tdelay: 5000,
\t\t\t\t\ttimer: 1000,
\t\t\t\t\turl_target: '_blank',
\t\t\t\t\tmouse_over: null,
\t\t\t\t\tanimate: {
\t\t\t\t\t\tenter: 'animated fadeInDown',
\t\t\t\t\t\texit: 'animated fadeOutUp'
\t\t\t\t\t},
\t\t\t\t\tonShow: null,
\t\t\t\t\tonShown: null,
\t\t\t\t\tonClose: null,
\t\t\t\t\tonClosed: null,
\t\t\t\t\ticon_type: 'class',
\t\t\t\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
\t\t\t\t\t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t\t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t\t\t\t'<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t\t'</div>' 
\t\t\t\t});

\t\t\t\t \$('#cart > button').html('<span id=\"cart-title\">' + json['headingtitle'] + '</span>' + '<span id=\"cart-total\">' + json['total'] + '</span>');

\t\t\t\t//\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 599
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 604
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 610
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 677
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 681
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//\$(document).ready(function() {
//\t\$('.thumbnails').magnificPopup({
//\t\ttype:'image',
//\t\tdelegate: 'a',
//\t\tgallery: {
//\t\t\tenabled: true
//\t\t}
//\t});
//});


\$(document).ready(function() {
if (\$(window).width() > 767) {
\t\t\$(\"#tmzoom\").elevateZoom({
\t\t\t\t
\t\t\t\tgallery:'additional-carousel',
\t\t\t\t//inner zoom\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\tzoomType : \"inner\", 
\t\t\t\tcursor: \"crosshair\" 
\t\t\t\t
\t\t\t\t/*//tint
\t\t\t\t
\t\t\t\ttint:true, 
\t\t\t\ttintColour:'#F90', 
\t\t\t\ttintOpacity:0.5
\t\t\t\t
\t\t\t\t//lens zoom
\t\t\t\t
\t\t\t\tzoomType : \"lens\", 
\t\t\t\tlensShape : \"round\", 
\t\t\t\tlensSize : 200 
\t\t\t\t
\t\t\t\t//Mousewheel zoom
\t\t\t\t
\t\t\t\tscrollZoom : true*/
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\tvar z_index = 0;
     \t\t\t    \t\t
     \t\t\t    \t\t\$(document).on('click', '.thumbnail', function () {
     \t\t\t    \t\t  \$('.thumbnails').magnificPopup('open', z_index);
     \t\t\t    \t\t  return false;
     \t\t\t    \t\t});
\t\t\t    \t\t
     \t\t\t    \t\t\$('.additional-carousel a').click(function() {
     \t\t\t    \t\t\tvar smallImage = \$(this).attr('data-image');
     \t\t\t    \t\t\tvar largeImage = \$(this).attr('data-zoom-image');
     \t\t\t    \t\t\tvar ez =   \$('#tmzoom').data('elevateZoom');\t
     \t\t\t    \t\t\t\$('.thumbnail').attr('href', largeImage);  
     \t\t\t    \t\t\tez.swaptheimage(smallImage, largeImage); 
     \t\t\t    \t\t\tz_index = \$(this).index('.additional-carousel a');
     \t\t\t    \t\t\treturn false;
     \t\t\t    \t\t});
\t\t\t
\t}else{
\t\t\$(document).on('click', '.thumbnail', function () {
\t\t\$('.thumbnails').magnificPopup('open', 0);
\t\treturn false;
\t\t});
\t}
});
\$(document).ready(function() {     
\t\$('.thumbnails').magnificPopup({
\t\tdelegate: 'a.elevatezoom-gallery',
\t\ttype: 'image',
\t\ttLoading: 'Loading image #%curr%...',
\t\tmainClass: 'mfp-with-zoom',
\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true,
\t\t\tpreload: [0,1] // Will preload 0 - before current, and 1 after the current image
\t\t},
\t\timage: {
\t\t\ttError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
\t\t\ttitleSrc: function(item) {
\t\t\t\treturn item.el.attr('title');
\t\t\t}
\t\t}
\t});
});


//--></script> 
";
        // line 794
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1813 => 794,  1697 => 681,  1690 => 677,  1620 => 610,  1611 => 604,  1603 => 599,  1483 => 482,  1478 => 481,  1469 => 479,  1462 => 478,  1452 => 477,  1448 => 476,  1443 => 475,  1441 => 474,  1438 => 473,  1429 => 466,  1413 => 455,  1409 => 453,  1405 => 451,  1399 => 449,  1396 => 448,  1388 => 446,  1385 => 445,  1377 => 443,  1371 => 441,  1369 => 440,  1366 => 439,  1364 => 438,  1357 => 436,  1354 => 435,  1351 => 433,  1345 => 432,  1341 => 430,  1337 => 428,  1334 => 427,  1330 => 426,  1326 => 424,  1315 => 418,  1309 => 417,  1301 => 416,  1293 => 415,  1289 => 413,  1283 => 410,  1280 => 409,  1275 => 407,  1272 => 406,  1263 => 404,  1258 => 403,  1248 => 400,  1240 => 399,  1235 => 398,  1233 => 397,  1227 => 393,  1222 => 391,  1219 => 390,  1214 => 389,  1204 => 388,  1192 => 384,  1188 => 383,  1174 => 382,  1171 => 381,  1164 => 376,  1162 => 375,  1156 => 373,  1154 => 372,  1146 => 367,  1141 => 364,  1139 => 363,  1132 => 358,  1127 => 356,  1121 => 354,  1112 => 350,  1106 => 347,  1101 => 345,  1088 => 335,  1084 => 334,  1076 => 329,  1071 => 327,  1063 => 322,  1059 => 321,  1055 => 319,  1053 => 318,  1049 => 317,  1044 => 314,  1041 => 313,  1036 => 310,  1029 => 308,  1020 => 305,  1016 => 304,  1013 => 303,  1009 => 302,  1002 => 298,  998 => 296,  994 => 295,  990 => 293,  988 => 292,  984 => 291,  980 => 289,  974 => 287,  971 => 286,  965 => 284,  963 => 283,  959 => 282,  953 => 280,  950 => 279,  947 => 278,  944 => 277,  941 => 276,  938 => 275,  935 => 274,  933 => 273,  920 => 263,  915 => 260,  909 => 258,  907 => 257,  903 => 256,  892 => 252,  884 => 251,  875 => 247,  871 => 246,  867 => 245,  864 => 244,  858 => 240,  847 => 238,  843 => 237,  839 => 236,  833 => 233,  830 => 232,  827 => 231,  824 => 230,  818 => 229,  805 => 223,  798 => 221,  791 => 220,  788 => 219,  775 => 213,  768 => 211,  761 => 210,  758 => 209,  745 => 203,  738 => 201,  731 => 200,  728 => 199,  720 => 196,  712 => 195,  708 => 194,  701 => 193,  698 => 192,  686 => 189,  680 => 188,  673 => 187,  670 => 186,  658 => 183,  652 => 182,  645 => 181,  642 => 180,  637 => 177,  629 => 175,  622 => 174,  620 => 173,  615 => 172,  599 => 171,  593 => 170,  589 => 168,  583 => 167,  579 => 166,  572 => 165,  569 => 164,  564 => 161,  556 => 159,  549 => 158,  547 => 157,  543 => 156,  525 => 155,  519 => 154,  515 => 152,  509 => 151,  505 => 150,  498 => 149,  495 => 148,  490 => 145,  483 => 143,  476 => 142,  474 => 141,  467 => 140,  463 => 139,  459 => 138,  453 => 137,  447 => 136,  440 => 135,  437 => 134,  433 => 133,  428 => 132,  426 => 131,  423 => 130,  419 => 128,  416 => 127,  405 => 125,  401 => 124,  398 => 123,  395 => 122,  387 => 120,  384 => 119,  376 => 117,  373 => 116,  368 => 114,  363 => 113,  357 => 110,  354 => 109,  352 => 108,  349 => 107,  347 => 106,  339 => 104,  331 => 102,  329 => 101,  322 => 100,  312 => 98,  310 => 97,  307 => 96,  291 => 91,  287 => 89,  283 => 87,  280 => 86,  276 => 85,  273 => 84,  271 => 83,  267 => 82,  261 => 80,  258 => 79,  255 => 78,  252 => 77,  249 => 76,  247 => 75,  239 => 69,  232 => 64,  225 => 60,  203 => 57,  199 => 55,  195 => 54,  176 => 50,  168 => 47,  165 => 46,  158 => 42,  156 => 41,  149 => 38,  146 => 37,  143 => 36,  128 => 34,  123 => 32,  120 => 31,  118 => 30,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  98 => 23,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/product.twig", "");
    }
}
