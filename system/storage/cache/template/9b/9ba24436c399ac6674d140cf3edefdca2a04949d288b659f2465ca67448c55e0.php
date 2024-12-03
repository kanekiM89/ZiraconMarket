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

/* ziracon/template/extension/module/verticalcategory.twig */
class __TwigTemplate_a48f08fdcc07e7d78a139692c2b94b5c1937043d3e1954f99b8c1faa42b7cdc1 extends \Twig\Template
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
        echo "<div class=\"vertical-category\">
    <div class=\"vertical-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"vertical-content\">
        <ul id=\"nav-one\" class=\"dropmenu top-vertical-category\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <li class=\"top_level dropdown\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                echo "</a>

                <div class=\"dropdown-menu megamenu column";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 8);
                echo "\">
                    <div class=\"dropdown-inner\">
                        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 10), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 11
                    echo "                        <ul class=\"list-unstyled childs_1\">
                            ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 13
                        echo "                            <!-- 2 Level Sub Categories START -->
                            ";
                        // line 14
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 14)) {
                            // line 15
                            echo "                            <li class=\"dropdown\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 15);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 15);
                            echo "</a>

                                <div class=\"dropdown-menu\">
                                    <div class=\"dropdown-inner\">
                                        ";
                            // line 19
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 19), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 19)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 19), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                // line 20
                                echo "                                        <ul class=\"list-unstyled childs_2\">
                                            ";
                                // line 21
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                    // line 22
                                    echo "                                            <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 22);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 22);
                                    echo "</a></li>
                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 24
                                echo "                                        </ul>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 26
                            echo "                                    </div>
                                </div>

                            </li>
                            ";
                        } else {
                            // line 31
                            echo "                            <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                            echo "</a></li>
                            ";
                        }
                        // line 33
                        echo "                            <!-- 2 Level Sub Categories END -->
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "
                        </ul>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                    </div>
                </div>

            </li>
            ";
            } else {
                // line 43
                echo "            <li class=\"top_level\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                echo "</a></li>
            ";
            }
            // line 44
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            <li class=\"top_level\"> <a href=\"";
        echo ($context["all_blogs"] ?? null);
        echo "\">";
        echo ($context["text_blog"] ?? null);
        echo "</a></li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/verticalcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  165 => 44,  157 => 43,  150 => 38,  142 => 35,  135 => 33,  127 => 31,  120 => 26,  113 => 24,  102 => 22,  98 => 21,  95 => 20,  91 => 19,  81 => 15,  79 => 14,  76 => 13,  72 => 12,  69 => 11,  65 => 10,  60 => 8,  52 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/verticalcategory.twig", "");
    }
}
