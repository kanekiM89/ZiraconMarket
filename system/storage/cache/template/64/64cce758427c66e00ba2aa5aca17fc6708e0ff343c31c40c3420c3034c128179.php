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
class __TwigTemplate_cfd81e4dfc4b22e5805c998cfbfe5b8413f02acf24cd9f84045d29ef1e0063c0 extends \Twig\Template
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
   <div class=\"row\">
      ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo " 
      ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "      ";
        } else {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "      ";
        }
        // line 17
        echo "      <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
         ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo " 
         <div class=\"blog all-blogs\">
            <!--<h1>";
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
                  <!-- <div class=\"summary\"> -->
                     ";
                        // line 29
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 29)) {
                            echo " 
                     <div class=\"blog-left-content\">
                        <div class=\"image\">
                           <img src=\"";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 32);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-thumbnail\" />
                           <div class=\"post_hover\"> </div>
                           <p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 34);
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-plus\"></i> </a></p>
                        </div>
                     </div>
                     ";
                        }
                        // line 37
                        echo " 
                     <div class=\"blog-descr\">
                        <h2 class=\"blog_title\"><a href=\"";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 39);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 39);
                        echo "</a></h2>
                        <div class=\"blog_stats\">
                           <span> <a href=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 41);
                        echo "\"><i class=\"fa fa-user\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_author", [], "any", false, false, false, 41);
                        echo " ";
                        echo ($context["entry_author"] ?? null);
                        echo "</a> </span>
                           <span> <a href=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 42);
                        echo "\"><i class=\"fa fa-comments\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 42);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</a> </span>
                           <span> <i class=\"fa fa-calendar\"></i>  ";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 43);
                        echo "</span>
                           <!--<span> <a href=\"";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 44);
                        echo "\"> ";
                        echo ($context["text_read_more"] ?? null);
                        echo " <i class=\"fa fa-long-arrow-right\"></i> </a> </span>-->
                        </div>
                        <span class=\"blogitem-desc\">
                           <p> ";
                        // line 47
                        echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 47), 0, 160) . "...");
                        echo "  </p>
                        </span>
                        <span class=\"readmore\">
                           <p>
                              <a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 51);
                        echo "\">
                                 ";
                        // line 52
                        echo ($context["text_read_more"] ?? null);
                        echo "<!--<i class=\"fa fa-long-arrow-right\"></i>-->
                              </a>
                           </p>
                        </span>
                     </div>
                  <!-- </div> -->
               </div>
               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "               ";
                } else {
                    echo "   
               <div class=\"panel-body text-center\">";
                    // line 61
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
               ";
                }
                // line 62
                echo " 
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
        } else {
            echo "   
            <div class=\"panel-body text-center\">";
            // line 66
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
            ";
        }
        // line 67
        echo " 
            ";
        // line 68
        echo ($context["content_bottom"] ?? null);
        echo "
         </div>
         ";
        // line 70
        echo ($context["column_right"] ?? null);
        echo "
      </div>
   </div>
</div>
";
        // line 74
        echo ($context["footer"] ?? null);
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
        return array (  258 => 74,  251 => 70,  246 => 68,  243 => 67,  238 => 66,  233 => 65,  225 => 62,  220 => 61,  215 => 60,  201 => 52,  197 => 51,  190 => 47,  182 => 44,  178 => 43,  170 => 42,  162 => 41,  155 => 39,  151 => 37,  144 => 34,  135 => 32,  129 => 29,  121 => 26,  117 => 25,  113 => 24,  106 => 22,  102 => 21,  98 => 20,  93 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/information/blogger_blogs.twig", "");
    }
}
