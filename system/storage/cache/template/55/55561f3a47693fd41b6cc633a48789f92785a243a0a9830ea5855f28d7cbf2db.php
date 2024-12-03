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

/* ziracon/template/information/blogger_blogs.twig */
class __TwigTemplate_20557d748ce7b65ec77d1970da986ead4dd8e5002c111cd48f36eb169eaa3973 extends \Twig\Template
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
        echo "   
    <div id=\"content\" class=\"";
        // line 18
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <div class=\"blog all-blogs\">
\t  <!--<h1>";
        // line 20
        echo ($context["text_blogs"] ?? null);
        echo "</h1>-->
      ";
        // line 21
        if (($context["blogs"] ?? null)) {
            echo " 
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
      <div class=\"blog_grid_holder\">
        <h2 class=\"page-title\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "name", [], "any", false, false, false, 24);
                echo "</h2>
        ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 25)) {
                    echo " 
        ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
        <div class=\"blog_item\">
          <div class=\"summary\">
\t\t  <div class=\"blog-descr\">
\t\t\t  <h2 class=\"blog_title\"><a href=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 30);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 30);
                        echo "</a></h2>
\t\t\t  <div class=\"blog_stats\"> 
\t\t\t\t  <span> <a href=\"";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 32);
                        echo "\"><i class=\"fa fa-user\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_author", [], "any", false, false, false, 32);
                        echo " ";
                        echo ($context["entry_author"] ?? null);
                        echo "</a> </span>
\t\t\t\t  <span> <a href=\"";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 33);
                        echo "\"><i class=\"fa fa-comments\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 33);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</a> </span>
\t\t\t\t  <span> <i class=\"fa fa-calendar\"></i>  ";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 34);
                        echo "</span>
\t\t\t\t  <!--<span> <a href=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 35);
                        echo "\"> ";
                        echo ($context["text_read_more"] ?? null);
                        echo " <i class=\"fa fa-long-arrow-right\"></i> </a> </span>-->
\t\t\t  </div>
\t\t  </div>
       ";
                        // line 38
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 38)) {
                            echo " 
       <div class=\"blog-left-content\">
      <div class=\"image\">
        <img src=\"";
                            // line 41
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 41);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-thumbnail\" />
      <div class=\"post_hover\"> </div>
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 43
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 43);
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-plus\"></i> </a></p>
      
        </div>
      </div>
      ";
                        }
                        // line 47
                        echo " 
           <div class=\"blog-descr\"> 
\t\t\t   <span class=\"blogitem-desc\"><p> ";
                        // line 49
                        echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 49), 0, 85) . "...");
                        echo "  </p></span>
\t\t\t   <span class=\"readmore\"><p><a href=\"";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 50);
                        echo "\">";
                        echo ($context["text_read_more"] ?? null);
                        echo "<!--<i class=\"fa fa-long-arrow-right\"></i>--></a> </p></span>
  \t\t\t</div>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "        
         ";
                } else {
                    // line 56
                    echo "   
        <div class=\"panel-body text-center\">";
                    // line 57
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
        ";
                }
                // line 58
                echo " 
        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "       ";
        } else {
            echo "   
      <div class=\"panel-body text-center\">";
            // line 62
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
               ";
        }
        // line 63
        echo " 
    ";
        // line 64
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 65
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 68
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "ziracon/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 68,  246 => 65,  242 => 64,  239 => 63,  234 => 62,  229 => 61,  221 => 58,  216 => 57,  213 => 56,  209 => 55,  196 => 50,  192 => 49,  188 => 47,  180 => 43,  171 => 41,  165 => 38,  157 => 35,  153 => 34,  145 => 33,  137 => 32,  130 => 30,  121 => 26,  117 => 25,  113 => 24,  106 => 22,  102 => 21,  98 => 20,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/information/blogger_blogs.twig", "");
    }
}
