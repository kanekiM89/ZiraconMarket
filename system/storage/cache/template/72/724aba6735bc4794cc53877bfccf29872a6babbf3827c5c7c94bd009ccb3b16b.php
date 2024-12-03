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

/* extension/module/product_tab.twig */
class __TwigTemplate_7aa139012c2fd3261de23c132be16c16d0011573817815e4aefe08d8d4deae51 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 38
        echo ($context["entry_features"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 40
        if (($context["featured_products"] ?? null)) {
            // line 41
            echo "                 <input type=\"checkbox\" name=\"featured_products\" value=\"1\" checked=\"checked\">
              ";
        } else {
            // line 43
            echo "                <input type=\"checkbox\"  name=\"featured_products\" value=\"1\">
              ";
        }
        // line 45
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 46
        echo ($context["entry_latest"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 48
        if (($context["latest_products"] ?? null)) {
            // line 49
            echo "                 <input type=\"checkbox\" name=\"latest_products\" value=\"1\" checked=\"checked\">
              ";
        } else {
            // line 51
            echo "                <input type=\"checkbox\"  name=\"latest_products\" value=\"1\">
              ";
        }
        // line 53
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 54
        echo ($context["entry_bestseller"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 56
        if (($context["bestseller_products"] ?? null)) {
            // line 57
            echo "                 <input type=\"checkbox\" name=\"bestseller_products\" value=\"1\" checked=\"checked\">
              ";
        } else {
            // line 59
            echo "                <input type=\"checkbox\"  name=\"bestseller_products\" value=\"1\">
              ";
        }
        // line 61
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 62
        echo ($context["entry_special"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 64
        if (($context["special_products"] ?? null)) {
            // line 65
            echo "                 <input type=\"checkbox\" name=\"special_products\" value=\"1\" checked=\"checked\">
              ";
        } else {
            // line 67
            echo "                <input type=\"checkbox\"  name=\"special_products\" value=\"1\">
              ";
        }
        // line 69
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 72
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 74
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 77
            echo "                <div id=\"featured-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
            echo "
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 78);
            echo "\" />
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 85
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 87
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 91
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 93
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 94
        if (($context["error_width"] ?? null)) {
            // line 95
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 97
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 100
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 102
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 103
        if (($context["error_height"] ?? null)) {
            // line 104
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 106
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 109
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 112
        if (($context["status"] ?? null)) {
            // line 113
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 116
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
               ";
        }
        // line 119
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 130
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#featured-product' + item['value']).remove();
    
    \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');  
  }
});
  
\$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script>
</div>
";
        // line 156
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/product_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 156,  344 => 130,  331 => 119,  326 => 117,  321 => 116,  316 => 114,  311 => 113,  309 => 112,  303 => 109,  298 => 106,  292 => 104,  290 => 103,  284 => 102,  279 => 100,  274 => 97,  268 => 95,  266 => 94,  260 => 93,  255 => 91,  246 => 87,  241 => 85,  235 => 81,  226 => 78,  219 => 77,  215 => 76,  210 => 74,  205 => 72,  200 => 69,  196 => 67,  192 => 65,  190 => 64,  185 => 62,  182 => 61,  178 => 59,  174 => 57,  172 => 56,  167 => 54,  164 => 53,  160 => 51,  156 => 49,  154 => 48,  149 => 46,  146 => 45,  142 => 43,  138 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/product_tab.twig", "");
    }
}
