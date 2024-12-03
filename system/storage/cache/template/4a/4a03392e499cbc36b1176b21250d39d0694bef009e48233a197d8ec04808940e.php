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
class __TwigTemplate_9bfc877cc2c07feef92def4b3500823df719b350b3b1bfc1430cdd3e761f5e19 extends \Twig\Template
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
    <div class=\"vertical-heading\">       
        <div class=\"cate-icon\"></div>\t
\t\t<div class=\"cate-title\"> ";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>
    </div>
    <div class=\"vertical-content\">
        <ul id=\"nav-one\" class=\"dropmenu top-vertical-category\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                // line 9
                echo "            <li class=\"top_level dropdown\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "</a>

                <div class=\"dropdown-menu megamenu column";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 11);
                echo "\">
                    <div class=\"dropdown-inner\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 13), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 14
                    echo "                        <ul class=\"list-unstyled childs_1\">
                            ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 16
                        echo "                            <!-- 2 Level Sub Categories START -->
                            ";
                        // line 17
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 17)) {
                            // line 18
                            echo "                            <li class=\"dropdown\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                            echo "</a>

                                <div class=\"dropdown-menu\">
                                    <div class=\"dropdown-inner\">
                                        ";
                            // line 22
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 22), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 22)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 22), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                // line 23
                                echo "                                        <ul class=\"list-unstyled childs_2\">
                                            ";
                                // line 24
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                    // line 25
                                    echo "                                            <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 25);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 25);
                                    echo "</a></li>
                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 27
                                echo "                                        </ul>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 29
                            echo "                                    </div>
                                </div>

                            </li>
                            ";
                        } else {
                            // line 34
                            echo "                            <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>
                            ";
                        }
                        // line 36
                        echo "                            <!-- 2 Level Sub Categories END -->
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "
                        </ul>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                    </div>
                </div>

            </li>
            ";
            } else {
                // line 46
                echo "            <li class=\"top_level\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                echo "</a></li>
            ";
            }
            // line 47
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return array (  174 => 48,  168 => 47,  160 => 46,  153 => 41,  145 => 38,  138 => 36,  130 => 34,  123 => 29,  116 => 27,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  84 => 18,  82 => 17,  79 => 16,  75 => 15,  72 => 14,  68 => 13,  63 => 11,  55 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/verticalcategory.twig", "");
    }
}
