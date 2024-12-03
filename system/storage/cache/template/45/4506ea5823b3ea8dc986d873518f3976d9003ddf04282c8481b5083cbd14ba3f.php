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

/* ziracon/template/extension/module/filter.twig */
class __TwigTemplate_dae41f156a9e84bd5e63a343e203ef496620eb5fb98ec232fb59533b0fd65390 extends \Twig\Template
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
        echo "<div class=\"box sidebarFilter\">
  <div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"filterbox\">
  <div class=\"list-group\"> ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " 
    <div class=\"list-group-items\">
    <a class=\"list-group-item\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 6);
            echo "</a>
    
    <div class=\"list-group-item\">
      <div id=\"filter-group";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 9);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 10
                echo "        <div class=\"checkbox\">
          <label>";
                // line 11
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 11), ($context["filter_category"] ?? null))) {
                    // line 12
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12);
                    echo "\" checked=\"checked\" />
            ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 13);
                    echo "
            ";
                } else {
                    // line 15
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 15);
                    echo "\" />
            ";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 16);
                    echo "
            ";
                }
                // line 17
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>
    </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 24
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
  filter = [];

  \$('input[name^=\\'filter\\']:checked').each(function(element) {
    filter.push(this.value);
  });

  location = '";
        // line 37
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ziracon/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 37,  109 => 24,  106 => 23,  97 => 19,  89 => 17,  84 => 16,  79 => 15,  74 => 13,  69 => 12,  67 => 11,  64 => 10,  58 => 9,  52 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/extension/module/filter.twig", "");
    }
}
