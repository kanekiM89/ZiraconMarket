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

/* ziracon/template/common/menu.twig */
class __TwigTemplate_5e8dcba6ac46088f203e83ccf99d3c5b28bd9047a569828f8ba6e5dac40ce776 extends \Twig\Template
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
        echo "<div class=\"main-menu\" id=\"main-menu\">
<nav class=\"nav-container\" role=\"navigation\">
<div class=\"nav-inner\">
<!-- ======= Menu Code START ========= -->
";
        // line 5
        if (($context["categories"] ?? null)) {
            // line 6
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\">
<div class=\"nav-responsive\"><span>Menu</span><div class=\"expandable\"></div></div>
 
      <ul class=\"nav navbar-nav\">
\t  \t<li class=\"level0 home\"><a href=\"";
            // line 11
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></li>

    \t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>

\t\t\t<div class=\"dropdown-menu megamenu column";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 17);
                    echo "\">
            <div class=\"dropdown-inner\">
\t\t\t  ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 19), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 20
                        echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 22
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 23
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 23)) {
                                // line 24
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 24);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 24);
                                echo "</a>

\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                                // line 28
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 28), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 28)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 28), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 29
                                    echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                    // line 30
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 31
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 31);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 31);
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 33
                                    echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 36
                                echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 41
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 43
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "            </div>
\t\t\t</div>

\t\t\t</li>
\t\t\t
        ";
                } else {
                    // line 54
                    echo "\t\t\t<li class=\"top_level\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 54);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                    echo "</a></li>
       ";
                }
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t
\t\t<li class=\"level0\"> <a href=\"";
            // line 58
            echo ($context["all_blogs"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li> 
        
\t\t<li class=\"level0\" ><a href=\"";
            // line 60
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contactus"] ?? null);
            echo "</a></li> 
\t\t<!--<li class=\"level0\"><a href=\"";
            // line 61
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>-->
\t\t<li class=\"level0\" ><a href=\"";
            // line 62
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
\t\t<li class=\"level0\" ><a href=\"";
            // line 63
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
\t\t<!--<li class=\"level0\" ><a href=\"";
            // line 64
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>-->
\t\t<li class=\"level0\" ><a href=\"";
            // line 65
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
\t\t<!--<li class=\"level0\" ><a href=\"";
            // line 66
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>-->
  </ul>
  
</div>
";
        }
        // line 71
        echo "
</div>

</nav> 

</div>
</nav>   ";
    }

    public function getTemplateName()
    {
        return "ziracon/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 71,  233 => 66,  227 => 65,  221 => 64,  215 => 63,  209 => 62,  203 => 61,  197 => 60,  190 => 58,  187 => 57,  181 => 56,  173 => 54,  165 => 48,  157 => 45,  150 => 43,  142 => 41,  135 => 36,  127 => 33,  116 => 31,  112 => 30,  109 => 29,  105 => 28,  95 => 24,  93 => 23,  90 => 22,  86 => 21,  83 => 20,  79 => 19,  74 => 17,  66 => 15,  63 => 14,  59 => 13,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/common/menu.twig", "");
    }
}
