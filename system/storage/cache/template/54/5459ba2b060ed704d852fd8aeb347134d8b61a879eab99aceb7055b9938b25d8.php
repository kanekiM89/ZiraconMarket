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

/* ziracon/template/information/blogger.twig */
class __TwigTemplate_c5ed920c66041e27bd2d1965bd9b985183e8f10a54fa4cefaa076c8aff5ab141 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
   <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  
     
  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "     <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "  single-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
\t <div class=\"single-blog-wrapp\">
      \t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["blogs"] ?? null), "image", [], "any", false, false, false, 19)) {
            echo " 
\t\t\t<div class=\"blog-img\">
\t\t\t  <img src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["blogs"] ?? null), "image", [], "any", false, false, false, 21);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-thumbnail\" />
\t\t\t</div>
\t\t";
        }
        // line 23
        echo " 
\t\t<h2 class=\"page-title\">";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t<p> ";
        // line 25
        echo ($context["description"] ?? null);
        echo "  </p>
\t</div>

    
 ";
        // line 29
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 30
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 33
        echo " 

      
      ";
        // line 36
        if (($context["blog_comments"] ?? null)) {
            echo " 
      <h4>";
            // line 37
            echo ($context["text_your_comments"] ?? null);
            echo "</h4>
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_comment"]) {
                echo " 
      <div class=\"view-comment\">
    <div class=\"panel panel-default\" style=\"margin-bottom: 10px; padding-top: 5px;\">
        <div class=\"row\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label text-right\"><b>";
                // line 43
                echo ($context["entry_author"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-3\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "author", [], "any", false, false, false, 44);
                echo "</div>
            <label class=\"col-sm-3 control-label text-right\"><b>";
                // line 45
                echo ($context["text_date_added"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-3\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "date_added", [], "any", false, false, false, 46);
                echo "</div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label text-right\"><b>";
                // line 51
                echo ($context["entry_comment"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-8\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "comment", [], "any", false, false, false, 52);
                echo "</div>
          </div>
        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
      ";
        }
        // line 58
        echo " 
       
      ";
        // line 60
        if (($context["allow_comments"] ?? null)) {
            echo " 
    
      <div class=\"panel panel-default\" id=\"add-comment\" style=\"margin-bottom: 10px; padding: 0px 10px;\">
\t\t<div class=\"block-title\"><h3>";
            // line 63
            echo ($context["button_comment_add"] ?? null);
            echo "</h3></div>
        ";
            // line 64
            if ((($context["login_required"] ?? null) &&  !($context["is_logged"] ?? null))) {
                echo " 
            <h4 class=\"text-center\">";
                // line 65
                echo ($context["text_login_required"] ?? null);
                echo "</h4>
         ";
            } else {
                // line 66
                echo "   
        <form action=\"";
                // line 67
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <div class=\"form-group required\" style=\"margin-top: 10px;\">
            <label class=\"col-sm-3 control-label\" for=\"input-author\"><b>";
                // line 69
                echo ($context["entry_author"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"author\" value=\"";
                // line 71
                echo ($context["author"] ?? null);
                echo "\" id=\"input-author\" placeholder=\"";
                echo ($context["entry_author"] ?? null);
                echo "\" class=\"form-control\" />
              ";
                // line 72
                if (($context["error_author"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 73
                    echo ($context["error_author"] ?? null);
                    echo "</div>
              ";
                }
                // line 74
                echo " 
            </div>
          </div>
          <div class=\"form-group required\" style=\"margin-top: 10px;\">
            <label class=\"col-sm-3 control-label\" for=\"input-email\"><b>";
                // line 78
                echo ($context["entry_email"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"email\" value=\"";
                // line 80
                echo ($context["email"] ?? null);
                echo "\" id=\"input-email\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" class=\"form-control\" />
              ";
                // line 81
                if (($context["error_email"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 82
                    echo ($context["error_email"] ?? null);
                    echo "</div>
              ";
                }
                // line 83
                echo " 
            </div>
          </div>
          <div class=\"form-group\" style=\"margin-top: 10px;\">
            <label class=\"col-sm-3 control-label\" for=\"input-comment\"><b>";
                // line 87
                echo ($context["entry_comment"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-8\">
              <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\" />";
                // line 89
                echo ($context["comment"] ?? null);
                echo "</textarea>
              ";
                // line 90
                if (($context["error_comment"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 91
                    echo ($context["error_comment"] ?? null);
                    echo "</div>
              ";
                }
                // line 92
                echo " 
            </div>
          </div>
          ";
                // line 95
                echo ($context["captcha"] ?? null);
                echo " 
          <input type=\"hidden\" name=\"auto_approve\" value=\"";
                // line 96
                echo ($context["auto_approve"] ?? null);
                echo "\" />
          <div class=\"buttons text-right\"><input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 97
                echo ($context["button_submit"] ?? null);
                echo "\" title=\"";
                echo ($context["button_submit"] ?? null);
                echo "\" /></div>
        </form>
          ";
            }
            // line 99
            echo " 
      </div>

       
       </div>
        ";
        }
        // line 104
        echo " 
    ";
        // line 105
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 106
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "ziracon/template/information/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 108,  336 => 106,  332 => 105,  329 => 104,  321 => 99,  313 => 97,  309 => 96,  305 => 95,  300 => 92,  295 => 91,  291 => 90,  287 => 89,  282 => 87,  276 => 83,  271 => 82,  267 => 81,  261 => 80,  256 => 78,  250 => 74,  245 => 73,  241 => 72,  235 => 71,  230 => 69,  225 => 67,  222 => 66,  217 => 65,  213 => 64,  209 => 63,  203 => 60,  199 => 58,  195 => 57,  183 => 52,  179 => 51,  171 => 46,  167 => 45,  163 => 44,  159 => 43,  149 => 38,  145 => 37,  141 => 36,  136 => 33,  129 => 30,  125 => 29,  118 => 25,  114 => 24,  111 => 23,  101 => 21,  96 => 19,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/information/blogger.twig", "");
    }
}
