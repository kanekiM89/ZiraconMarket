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

/* ziracon/template/product/quick_view.twig */
class __TwigTemplate_0bef4618dd0ac7d048f64a57843e3566e586d5c61483bac3fcbbdc0a784e7d1b extends \Twig\Template
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
<div class=\"quickview-page productpage\">
<div class=\"quickview-container\">
  
  
    <div id=\"content\" class=\"productpage-quickview\">";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"\">
        <!-- <h2 class=\"page-title\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h2> -->
            
    <div class=\"col-sm-6 product-left\">
    <div class=\"product-info\">
         ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 13
            echo "    <div class=\"left product-image thumbnails\">
      ";
            // line 14
            if (($context["thumb"] ?? null)) {
                // line 15
                echo "    <!-- Megnor Cloud-Zoom Image Effect Start -->
      <div class=\"image\"><a class=\"thumbnail\" title=\"";
                // line 16
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
            // line 18
            echo "      ";
            if (($context["images"] ?? null)) {
                echo " 
    ";
                // line 19
                $context["sliderFor"] = 3;
                // line 20
                echo "    ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo "       
    ";
            }
            // line 21
            echo "         
  

  <!-- Megnor Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 27
        echo "    
  </div>
        </div>

        <div class=\"col-sm-5 product-right\">
          <h3 class=\"product-title\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h3>

      
      \t";
        // line 35
        if (($context["review_status"] ?? null)) {
            // line 36
            echo "          <div class=\"rating-wrapper\">            
             ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 39
                    echo "\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t";
                }
                // line 43
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "     \t </div>
       ";
        }
        // line 46
        echo "      
          <ul class=\"list-unstyled short-desc\">
            ";
        // line 48
        if (($context["manufacturer"] ?? null)) {
            // line 49
            echo "            <li><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 51
        echo "            <li><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span>";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 52
        if (($context["reward"] ?? null)) {
            // line 53
            echo "            <li><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span>";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 55
        echo "            <li><span class=\"desc\">";
        echo ($context["text_stock"] ?? null);
        echo "</span>";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
      
      
     ";
        // line 59
        if (($context["price"] ?? null)) {
            // line 60
            echo "          <ul class=\"list-unstyled price\">
            ";
            // line 61
            if ( !($context["special"] ?? null)) {
                // line 62
                echo "            <li>
              <h2 class=\"product-price\">";
                // line 63
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 66
                echo "            <li>
              <span class=\"old-price\" style=\"text-decoration: line-through;\">";
                // line 67
                echo ($context["price"] ?? null);
                echo "</span> 
            </li>
            <li>
              <h2 class=\"special-price\">";
                // line 70
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 73
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 74
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "<span>";
                echo ($context["tax"] ?? null);
                echo "</span></li>
            ";
            }
            // line 76
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 77
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 79
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 80
                echo "            <li>
            </li>
            ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 83
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 83);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 83);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "            ";
            }
            // line 86
            echo "          </ul>
          ";
        }
        // line 88
        echo "         
          <div id=\"product2\">
           ";
        // line 90
        if (($context["options"] ?? null)) {
            // line 91
            echo "            <!-- <hr> -->
            <h3>";
            // line 92
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 94
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 94) == "select")) {
                    // line 95
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 95)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 96);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 96);
                    echo "</label>
              <select name=\"option[";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 97);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 97);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 98
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 99));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 100
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 100);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 100);
                        echo "
                ";
                        // line 101
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 101)) {
                            // line 102
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 102);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 102);
                            echo ")
                ";
                        }
                        // line 103
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "              </select>
            </div>
            ";
                }
                // line 108
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 108) == "radio")) {
                    // line 109
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 109)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 110);
                    echo "</label>
              <div id=\"input-option";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 111));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 112
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 114);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 114);
                        echo "\" />
                    ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 115)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 115);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 115);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 115);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 116);
                        echo "
                    ";
                        // line 117
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 117)) {
                            // line 118
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 118);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 118);
                            echo ")
                    ";
                        }
                        // line 119
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo " </div>
            </div>
            ";
                }
                // line 124
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 124) == "checkbox")) {
                    // line 125
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 125)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 126);
                    echo "</label>
              <div id=\"input-option";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 127);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 128
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 130);
                        echo "\" />
                    ";
                        // line 131
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 131)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 131);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 131);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 131);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 132
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 132);
                        echo "
                    ";
                        // line 133
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133)) {
                            // line 134
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 134);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134);
                            echo ")
                    ";
                        }
                        // line 135
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo " </div>
            </div>
            ";
                }
                // line 140
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 140) == "text")) {
                    // line 141
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 141)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 142);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 143);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 143);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 146
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "textarea")) {
                    // line 147
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    echo "</label>
              <textarea name=\"option[";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 149);
                    echo "</textarea>
            </div>
            ";
                }
                // line 152
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "file")) {
                    // line 153
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 153)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\" />
            </div>
            ";
                }
                // line 159
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "date")) {
                    // line 160
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 169
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "datetime")) {
                    // line 170
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 173);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 179
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 179) == "time")) {
                    // line 180
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 180)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 181);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 183);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 189
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "            ";
        }
        // line 191
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 192
            echo "            <hr>
            <h3>";
            // line 193
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 196
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 198
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 198);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 198);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 204
        echo "            
          
      
       
    <div class=\"product-rightinfo\"> 
     
      
      <div class=\"form-group cart-block\">
              <label class=\"control-label qty\" for=\"input-quantity\">";
        // line 212
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 213
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 214
        echo ($context["product_id"] ?? null);
        echo "\" />
              
              <button type=\"button\" id=\"button-cart2\" data-loading-text=\"";
        // line 216
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 218
        if ((($context["minimum"] ?? null) > 1)) {
            // line 219
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 221
        echo "      <div class=\"btn-group wish-comp\">
            <button type=\"button\"  class=\"btn btn-default wishlist\" title=\"";
        // line 222
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"parent.wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart-o\"></i>";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\"  class=\"btn btn-default compare\" title=\"";
        // line 223
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"parent.compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-balance-scale\"></i>";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          
    </div>
    </div>
    <div class=\"content_product_block\">";
        // line 228
        echo ($context["productblock"] ?? null);
        echo " </div>  
    </div>
  
    </div>
    </div>
    
          
  
     
    
  ";
        // line 238
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart2').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product2 input[type=\\'text\\'], #product2 input[type=\\'hidden\\'], #product2 input[type=\\'radio\\']:checked, #product2 input[type=\\'checkbox\\']:checked, #product2 select, #product2 textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart2').button('loading');
    },
    complete: function() {
      \$('#button-cart2').button('reset');
    },
    success: function(json) {
      \$('.alert, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

    if (json['success']) {
        if (parent) {

        parent.\$.notify({
          message: json['success'],
          target: '_blank'
        },{
          // settings
          element: 'body',
          position: null,
          type: \"info\",
          allow_dismiss: true,
          newest_on_top: false,
          placement: {
            from: \"top\",
            align: \"center\"
          },
          offset: 0,
          spacing: 10,
          z_index: 2031,
          delay: 5000,
          timer: 1000,
          url_target: '_blank',
          mouse_over: null,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: 'class',
          template: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
            '<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
              '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
          '</div>' 
        });

\t\tparent.\$('#cart > button').html('<span id=\"cart-title\">' + json['headingtitle'] + '</span>' + '<span id=\"cart-total\">' + json['total'] + '</span>');
\t\t  

        parent.\$('#cart > ul').load('index.php?route=common/cart/info ul li');
          
        } else {
          
          \$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i> ' + json['total']);
          
          \$('#cart > ul').load('index.php?route=common/cart/info ul li');
          
        };
        
        

        //\$('html, body').animate({ scrollTop: 0 }, 'slow');

        
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  pickTime: false
});

\$('.datetime').datetimepicker({
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
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
        // line 442
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 446
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-success, .alert-danger').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

//\$(document).ready(function() {
//  \$('.thumbnails').magnificPopup({
//    type:'image',
//    delegate: 'a',
//    gallery: {
//      enabled:true
//    }
//  });
//});


\$(document).ready(function() {
if (\$(window).width() > 767) {
    \$(\"#tmzoom\").elevateZoom({
        
        gallery:'additional-carousel',
        //inner zoom         
                 
        zoomType : \"inner\", 
        cursor: \"crosshair\" 
        
        /*//tint
        
        tint:true, 
        tintColour:'#F90', 
        tintOpacity:0.5
        
        //lens zoom
        
        zoomType : \"lens\", 
        lensShape : \"round\", 
        lensSize : 200 
        
        //Mousewheel zoom
        
        scrollZoom : true*/
        
        
      });
    var z_index = 0;
                  
                  \$(document).on('click', '.thumbnail', function () {
                    \$('.thumbnails').magnificPopup('open', z_index);
                    return false;
                  });
              
                  \$('.additional-carousel a').click(function() {
                    var smallImage = \$(this).attr('data-image');
                    var largeImage = \$(this).attr('data-zoom-image');
                    var ez =   \$('#tmzoom').data('elevateZoom');  
                    \$('.thumbnail').attr('href', largeImage);  
                    ez.swaptheimage(smallImage, largeImage); 
                    z_index = \$(this).index('.additional-carousel a');
                    return false;
                  });
      
  }else{
    \$(document).on('click', '.thumbnail', function () {
    \$('.thumbnails').magnificPopup('open', 0);
    return false;
    });
  }
});
\$(document).ready(function() {     
  \$('.thumbnails').magnificPopup({
    delegate: 'a.elevatezoom-gallery',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title');
      }
    }
  });
});

\$('#tabs a').tabs();
\$('#custom_tab a').tabs();
\$('#top').remove();
\$('.top_button').remove();


//--></script>
";
        // line 564
        echo ($context["footer"] ?? null);
        echo "
<style>
nav, header {
    display: none;
}

footer {
    display: none;
}
.content-top-breadcum {
    display: none;
}
#powered {
    display: none;
}
#container {
    width: 850px;
}
.top_button { display:none !important; }

</style>
";
    }

    public function getTemplateName()
    {
        return "ziracon/template/product/quick_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1122 => 564,  1001 => 446,  994 => 442,  787 => 238,  774 => 228,  762 => 223,  754 => 222,  751 => 221,  745 => 219,  743 => 218,  736 => 216,  731 => 214,  727 => 213,  723 => 212,  713 => 204,  707 => 200,  696 => 198,  692 => 197,  688 => 196,  682 => 193,  679 => 192,  676 => 191,  673 => 190,  667 => 189,  654 => 183,  647 => 181,  640 => 180,  637 => 179,  624 => 173,  617 => 171,  610 => 170,  607 => 169,  594 => 163,  587 => 161,  580 => 160,  577 => 159,  569 => 156,  561 => 155,  557 => 154,  550 => 153,  547 => 152,  535 => 149,  529 => 148,  522 => 147,  519 => 146,  507 => 143,  501 => 142,  494 => 141,  491 => 140,  486 => 137,  478 => 135,  471 => 134,  469 => 133,  464 => 132,  448 => 131,  442 => 130,  438 => 128,  432 => 127,  428 => 126,  421 => 125,  418 => 124,  413 => 121,  405 => 119,  398 => 118,  396 => 117,  392 => 116,  374 => 115,  368 => 114,  364 => 112,  358 => 111,  354 => 110,  347 => 109,  344 => 108,  339 => 105,  332 => 103,  325 => 102,  323 => 101,  316 => 100,  312 => 99,  308 => 98,  302 => 97,  296 => 96,  289 => 95,  286 => 94,  282 => 93,  278 => 92,  275 => 91,  273 => 90,  269 => 88,  265 => 86,  262 => 85,  251 => 83,  247 => 82,  243 => 80,  240 => 79,  232 => 77,  229 => 76,  221 => 74,  218 => 73,  212 => 70,  206 => 67,  203 => 66,  197 => 63,  194 => 62,  192 => 61,  189 => 60,  187 => 59,  177 => 55,  169 => 53,  167 => 52,  160 => 51,  150 => 49,  148 => 48,  144 => 46,  140 => 44,  134 => 43,  130 => 41,  126 => 39,  123 => 38,  119 => 37,  116 => 36,  114 => 35,  108 => 32,  101 => 27,  93 => 21,  87 => 20,  85 => 19,  80 => 18,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  50 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/product/quick_view.twig", "");
    }
}
