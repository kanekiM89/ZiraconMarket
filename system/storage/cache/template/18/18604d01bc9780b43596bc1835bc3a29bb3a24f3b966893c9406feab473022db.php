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

/* ziracon/template/common/search.twig */
class __TwigTemplate_29b850d32f2ee6c50a005639c2640a00e29bf6816ce31265624512f18faf43d5 extends \Twig\Template
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
        echo "<!--<div class=\"header-search dropdown-toggle\" data-toggle=\"dropdown\"></div>-->
 
 
 <!--  advance search blog start -->
   <div class=\"product_search\">
       <div class=\"advance-search sort\">
          <select name=\"category_id\" class=\"form-control\"  id=\"advanceformsort\">
            <option value=\"0\">";
        // line 8
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 10
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 10) == ($context["category_id"] ?? null))) {
                // line 11
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 11);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 11);
                echo "</option>
            ";
            } else {
                // line 13
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 13);
                echo "</option>
            ";
            }
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 16
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                    // line 17
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 17);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 17);
                    echo "</option>
            ";
                } else {
                    // line 19
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 19);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 19);
                    echo "</option>
            ";
                }
                // line 21
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 22
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 22) == ($context["category_id"] ?? null))) {
                        // line 23
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 23);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 23);
                        echo "</option>
            ";
                    } else {
                        // line 25
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 25);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 25);
                        echo "</option>
            ";
                    }
                    // line 27
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "          </select>
       </div>
      

        <div id=\"search\" class=\"input-group dropdown-menu\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 35
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" id=\"input-search\"/>
        </div>
   </div>

        <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default btn-lg\" id=\"btn-search\">";
        // line 40
        echo ($context["text_search"] ?? null);
        echo "
              <!-- <span class=\"search_button\">search</span> -->
            </button>
          </span>
     
  <!-- advance search blog end -->




<!--  common search blog start -->

\t\t<!--<div id=\"search\" class=\"input-group dropdown-menu\">
\t\t  <input type=\"text\" name=\"search\" value=\"";
        // line 53
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" id=\"input-search\"/>
\t\t  <span class=\"input-group-btn\">
\t\t    <button type=\"button\" class=\"btn btn-default btn-lg\" id=\"button-search\">";
        // line 55
        echo ($context["text_search"] ?? null);
        echo "
\t\t    \t<span class=\"search_button\">search</span>
\t\t    </button>
\t\t  </span>
\t\t</div>-->

<!--  common search blog end -->\t\t


\t ";
    }

    public function getTemplateName()
    {
        return "ziracon/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 55,  172 => 53,  156 => 40,  146 => 35,  139 => 30,  133 => 29,  127 => 28,  121 => 27,  113 => 25,  105 => 23,  102 => 22,  97 => 21,  89 => 19,  81 => 17,  78 => 16,  73 => 15,  65 => 13,  57 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/common/search.twig", "");
    }
}
