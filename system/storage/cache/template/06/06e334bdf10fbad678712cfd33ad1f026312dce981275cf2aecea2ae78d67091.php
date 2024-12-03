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

/* extension/module/blogger.twig */
class __TwigTemplate_2978741156f1f8a3d3cc2a970640f04f83c888b5f28237e80995e59aaf30cb62 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-blogger\" data-toggle=\"tooltip\" title=\"";
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
            echo " 
       <li><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  
         
      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
     ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo " 

 ";
        // line 25
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo " 


    <div class=\"alert alert-info alert-dismissible\"><i class=\"fa fa-info-circle\"></i> ";
        // line 32
        echo ($context["text_view_list"] ?? null);
        echo " 
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>

   
      <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 39
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 43
        echo ($context["module_id"] ?? null);
        echo "\" />
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 45
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 47
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 48
        if (($context["error_name"] ?? null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 49
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 50
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 54
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 57
        if (($context["status"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 58
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                 ";
        } else {
            // line 60
            echo "   
                <option value=\"1\">";
            // line 61
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 62
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 63
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
        // line 68
        echo ($context["help_image"] ?? null);
        echo "\">";
        echo ($context["entry_image_size"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 70
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 71
        if (($context["error_width"] ?? null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 72
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 73
        echo " 
            </div>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 76
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 77
        if (($context["error_height"] ?? null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 78
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 79
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo ($context["help_limit"] ?? null);
        echo "\">";
        echo ($context["entry_limit"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 85
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-char-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo ($context["help_char_limit"] ?? null);
        echo "\">";
        echo ($context["entry_char_limit"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"char_limit\" value=\"";
        // line 91
        echo ($context["char_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_char_limit"] ?? null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 95
        echo ($context["help_allow_comments"] ?? null);
        echo "\">";
        echo ($context["entry_allow_comments"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 98
        if (($context["comments"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"comments\" value=\"1\" checked=\"checked\" />
                ";
            // line 100
            echo ($context["text_yes"] ?? null);
            echo " 
                 ";
        } else {
            // line 101
            echo "   
                <input type=\"radio\" name=\"comments\" value=\"1\" />
                ";
            // line 103
            echo ($context["text_yes"] ?? null);
            echo " 
                ";
        }
        // line 104
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 107
        if ( !($context["comments"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"comments\" value=\"0\" checked=\"checked\" />
                ";
            // line 109
            echo ($context["text_no"] ?? null);
            echo " 
                 ";
        } else {
            // line 110
            echo "   
                <input type=\"radio\" name=\"comments\" value=\"0\" />
                ";
            // line 112
            echo ($context["text_no"] ?? null);
            echo " 
                ";
        }
        // line 113
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 118
        echo ($context["help_login_required"] ?? null);
        echo "\">";
        echo ($context["entry_login_required"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 121
        if (($context["login"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"login\" value=\"1\" checked=\"checked\" />
                ";
            // line 123
            echo ($context["text_yes"] ?? null);
            echo " 
                 ";
        } else {
            // line 124
            echo "   
                <input type=\"radio\" name=\"login\" value=\"1\" />
                ";
            // line 126
            echo ($context["text_yes"] ?? null);
            echo " 
                ";
        }
        // line 127
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 130
        if ( !($context["login"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"login\" value=\"0\" checked=\"checked\" />
                ";
            // line 132
            echo ($context["text_no"] ?? null);
            echo " 
                 ";
        } else {
            // line 133
            echo "   
                <input type=\"radio\" name=\"login\" value=\"0\" />
                ";
            // line 135
            echo ($context["text_no"] ?? null);
            echo " 
                ";
        }
        // line 136
        echo " 
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["help_auto_approve"] ?? null);
        echo "\">";
        echo ($context["entry_auto_approve"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <label class=\"radio-inline\">
                ";
        // line 144
        if (($context["auto_approve"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"auto_approve\" value=\"1\" checked=\"checked\" />
                ";
            // line 146
            echo ($context["text_yes"] ?? null);
            echo " 
                 ";
        } else {
            // line 147
            echo "   
                <input type=\"radio\" name=\"auto_approve\" value=\"1\" />
                ";
            // line 149
            echo ($context["text_yes"] ?? null);
            echo " 
                ";
        }
        // line 150
        echo " 
              </label>
              <label class=\"radio-inline\">
                ";
        // line 153
        if ( !($context["auto_approve"] ?? null)) {
            echo " 
                <input type=\"radio\" name=\"auto_approve\" value=\"0\" checked=\"checked\" />
                ";
            // line 155
            echo ($context["text_no"] ?? null);
            echo " 
                 ";
        } else {
            // line 156
            echo "   
                <input type=\"radio\" name=\"auto_approve\" value=\"0\" />
                ";
            // line 158
            echo ($context["text_no"] ?? null);
            echo " 
                ";
        }
        // line 159
        echo " 
              </label>
            </div>
          </div>
          <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 166
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 167
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 168
        echo ($context["column_comments"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 169
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 170
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            ";
        // line 173
        if (($context["blogger_entries"] ?? null)) {
            echo " 
            <tbody>
              ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogger_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " 
              <tr>
                <td class=\"text-left\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 177);
                echo "</td>
                <td class=\"text-left\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "status", [], "any", false, false, false, 178);
                echo "</td>
                <td class=\"text-right\">";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "total_comments", [], "any", false, false, false, 179);
                echo "</td>
                <td class=\"text-right\">";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "date_added", [], "any", false, false, false, 180);
                echo "</td>
                <td class=\"text-right\">

                  <a onclick=\"confirm('";
                // line 183
                echo ($context["text_confirm"] ?? null);
                echo " ') ? location.href='";
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "delete", [], "any", false, false, false, 183);
                echo " ' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                  <a href=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "comments", [], "any", false, false, false, 184);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                  <a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "edit", [], "any", false, false, false, 185);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
              </tr>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "  
            </tbody>
               ";
        }
        // line 190
        echo " 
            <tfoot>
              ";
        // line 192
        if (($context["add_blog"] ?? null)) {
            echo " 
              <tr>
                <td class=\"text-right\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 194
            echo ($context["add_blog"] ?? null);
            echo " ';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
               ";
        } else {
            // line 196
            echo "   
              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 198
            echo ($context["text_save_module"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 200
        echo " 
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 208
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 208,  573 => 200,  567 => 198,  563 => 196,  555 => 194,  550 => 192,  546 => 190,  541 => 188,  529 => 185,  523 => 184,  515 => 183,  509 => 180,  505 => 179,  501 => 178,  497 => 177,  490 => 175,  485 => 173,  479 => 170,  475 => 169,  471 => 168,  467 => 167,  463 => 166,  454 => 159,  449 => 158,  445 => 156,  440 => 155,  435 => 153,  430 => 150,  425 => 149,  421 => 147,  416 => 146,  411 => 144,  403 => 141,  396 => 136,  391 => 135,  387 => 133,  382 => 132,  377 => 130,  372 => 127,  367 => 126,  363 => 124,  358 => 123,  353 => 121,  345 => 118,  338 => 113,  333 => 112,  329 => 110,  324 => 109,  319 => 107,  314 => 104,  309 => 103,  305 => 101,  300 => 100,  295 => 98,  287 => 95,  278 => 91,  271 => 89,  262 => 85,  255 => 83,  249 => 79,  244 => 78,  240 => 77,  234 => 76,  229 => 73,  224 => 72,  220 => 71,  214 => 70,  207 => 68,  200 => 63,  195 => 62,  191 => 61,  188 => 60,  183 => 59,  179 => 58,  175 => 57,  169 => 54,  163 => 50,  158 => 49,  154 => 48,  148 => 47,  143 => 45,  138 => 43,  134 => 42,  128 => 39,  118 => 32,  113 => 29,  106 => 26,  102 => 25,  98 => 23,  91 => 20,  87 => 19,  78 => 12,  68 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger.twig", "");
    }
}
