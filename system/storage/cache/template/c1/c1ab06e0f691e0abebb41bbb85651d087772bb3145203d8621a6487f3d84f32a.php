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
class __TwigTemplate_6a0c68d6a341083593238ea2b2a77f8ee45be9ce0d54ed72b7a15408d8ca8e96 extends \Twig\Template
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
\t\t\t  
\t\t  </div>
       ";
                        // line 32
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 32)) {
                            echo " 
       <div class=\"blog-left-content\">
      <div class=\"image\">
        <img src=\"";
                            // line 35
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 35);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-thumbnail\" />
      <div class=\"post_hover\"> </div>
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 37);
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-plus\"></i> </a></p>
      
        </div>
      </div>
      ";
                        }
                        // line 41
                        echo " 
           <div class=\"blog-descr\"> 
           <h2 class=\"blog_title\"><a href=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 43);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 43);
                        echo "</a></h2>
           <div class=\"blog_stats\"> 
              <span> <a href=\"";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 45);
                        echo "\"><i class=\"fa fa-user\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_author", [], "any", false, false, false, 45);
                        echo " ";
                        echo ($context["entry_author"] ?? null);
                        echo "</a> </span>
              <span> <a href=\"";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 46);
                        echo "\"><i class=\"fa fa-comments\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 46);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</a> </span>
              <span> <i class=\"fa fa-calendar\"></i>  ";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 47);
                        echo "</span>
              <!--<span> <a href=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 48);
                        echo "\"> ";
                        echo ($context["text_read_more"] ?? null);
                        echo " <i class=\"fa fa-long-arrow-right\"></i> </a> </span>-->
           </div>
\t\t\t   <span class=\"blogitem-desc\"><p> ";
                        // line 50
                        echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 50), 0, 85) . "...");
                        echo "  </p></span>
\t\t\t   <span class=\"readmore\"><p><a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 51);
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
                    // line 56
                    echo "        
         ";
                } else {
                    // line 57
                    echo "   
        <div class=\"panel-body text-center\">";
                    // line 58
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
        ";
                }
                // line 59
                echo " 
        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "       ";
        } else {
            echo "   
      <div class=\"panel-body text-center\">";
            // line 63
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
               ";
        }
        // line 64
        echo " 
    ";
        // line 65
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 66
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 69
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
        return array (  253 => 69,  247 => 66,  243 => 65,  240 => 64,  235 => 63,  230 => 62,  222 => 59,  217 => 58,  214 => 57,  210 => 56,  197 => 51,  193 => 50,  186 => 48,  182 => 47,  174 => 46,  166 => 45,  159 => 43,  155 => 41,  147 => 37,  138 => 35,  132 => 32,  121 => 26,  117 => 25,  113 => 24,  106 => 22,  102 => 21,  98 => 20,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/information/blogger_blogs.twig", "");
    }
}
