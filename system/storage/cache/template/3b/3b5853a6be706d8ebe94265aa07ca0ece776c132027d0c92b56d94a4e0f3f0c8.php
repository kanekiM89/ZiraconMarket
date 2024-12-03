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

/* ziracon/template/extension/module/blogger.twig */
class __TwigTemplate_77146da3dd0cf434a206c069b66b4e6b3b33ed4a83e9211e58927639929cf0bc extends \Twig\Template
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
        echo "<div id=\"homeblog\">
   <div class=\"blog-module latest blog\">
      <div class=\"box\">
         ";
        // line 4
        $context["sliderFor"] = 3;
        // line 5
        echo "         ";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 6
        echo "         <div class=\"box-heading\">";
        echo ($context["heading_title"] ?? null);
        echo "</div>
         <div class=\"box-content\">
            <div class=\"box-product";
        // line 8
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo " owl-carousel blog-carousel blog_grid_holder";
        } else {
            echo " box-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo "blog-grid";
        }
        echo "\">
               ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
               <div class=\"";
            // line 10
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog_item";
            } else {
                echo "product-items";
            }
            echo "\">
                  <div class=\"product-block\">
                     <div class=\"summary\">
                        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 13)) {
                echo " 
                        <div class=\"blog-left\">
                           <div class=\"image\">
                              <img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
                              <p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 17);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-plus\"></i> </a></p>
                           </div>
                        </div>
                        ";
            }
            // line 20
            echo " \t
                        <div class=\"blog-desc\">
\t\t\t\t\t\t   <div class=\"blog_stats\">
\t\t\t\t\t\t\t <div class=\"date-time\"> <b class=\"hl\"> Date : ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 23);
            echo " </b></div>
\t\t\t\t\t\t   </div>
                           <!-- <h2 class=\"blog_title\"><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 25);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 25);
            echo "\">";
            echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 25), 0, 50) . "...");
            echo "</a> </h2> -->
                           <div class=\"desc\">
                              <p> ";
            // line 27
            echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 27), 0, 50) . "...");
            echo "  </p>
                           </div>
                           <!--\t  <div class=\"readmore\"><p class=\"btn_readmore\"> <a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 29);
            echo "\"> ";
            echo ($context["text_read_more"] ?? null);
            echo "</a> </p></div>-->
                           <!--\t  <div class=\"view-blog\">
                              <div class=\"write-comment\"> <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 31);
            echo "\"> ";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 31);
            echo " - ";
            echo ($context["entry_comment"] ?? null);
            echo "</a> </div>\t\t
                              </div>-->
                        </div>
                     </div>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " \t 
            </div>
            <!--<div class=\"buttons text-center\">
               <button type=\"button\" onclick=\"location='";
        // line 40
        echo ($context["all_blogs"] ?? null);
        echo " ';\" class=\"btn btn-primary\">";
        echo ($context["button_all_blogs"] ?? null);
        echo "</button>
               </div>-->
         </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  152 => 37,  135 => 31,  128 => 29,  123 => 27,  114 => 25,  109 => 23,  104 => 20,  97 => 17,  89 => 16,  83 => 13,  73 => 10,  67 => 9,  53 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/blogger.twig", "");
    }
}
