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

/* ziracon/template/common/footer.twig */
class __TwigTemplate_5e25440c857055563248c0e6525456ed98a0c283b0a213b710e0140808d8b317 extends \Twig\Template
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
        echo "<footer>
\t<div id=\"footer\">
\t\t<div class=\"content_footer_wrapper\">
\t  \t\t<div class=\"content_footer_top col-md-12 col-lg-12\"> ";
        // line 4
        echo ($context["footer_top"] ?? null);
        echo "  </div>
\t  \t\t<div class=\"content_footer_inner\">
\t   \t\t<div class=\"container\">
\t   \t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"footer-left column col-md-3 col-lg-3\">";
        // line 8
        echo ($context["footer_left"] ?? null);
        echo "</div>
\t\t\t\t\t\t";
        // line 9
        if (($context["informations"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t\t\t<div class=\"col-md-2 col-lg-2 column common first\">
\t\t\t\t\t\t\t\t<h5>";
            // line 11
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 14);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<!-- <li><a href=\"";
            // line 17
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li> -->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 21
        echo "\t  
\t\t\t\t\t\t<div class=\"col-md-2 col-lg-2 column common second\">
\t\t\t\t\t\t\t<h5>";
        // line 23
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 25
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<!-- <li><a href=\"";
        // line 30
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li> -->
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"col-md-2 col-lg-2 column common third\">
\t\t\t\t\t\t\t<h5>";
        // line 35
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<!--<div class=\"col-md-3 col-lg-3 column common fourth\">
\t\t\t\t\t\t\t<h5>";
        // line 46
        echo ($context["text_policy"] ?? null);
        echo "</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 49
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 52
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>-->
\t  
\t \t\t\t\t\t<div class=\"footer-right column col-md-3 col-lg-3\">";
        // line 56
        echo ($context["footer_right"] ?? null);
        echo "</div>
\t  \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t</div>
\t    </div>
\t\t<div class=\"content_footer_bottom \">
\t\t\t<div class=\"container\"><div class=\"powered\">";
        // line 62
        echo ($context["powered"] ?? null);
        echo "</div>
\t\t\t";
        // line 63
        echo ($context["footer_bottom"] ?? null);
        echo "
\t\t</div>
\t\t<div class=\"footer-container\">
\t\t\t<!-- <div id=\"bottomfooter\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"first\"><a href=\"";
        // line 68
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 69
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 70
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 71
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 72
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 73
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li class=\"last\"><a href=\"";
        // line 74
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t</div>
\t</div>
</footer>
  
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ziracon/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 82,  289 => 81,  277 => 74,  271 => 73,  265 => 72,  259 => 71,  253 => 70,  247 => 69,  241 => 68,  233 => 63,  229 => 62,  220 => 56,  211 => 52,  205 => 51,  199 => 50,  193 => 49,  187 => 48,  182 => 46,  172 => 41,  166 => 40,  160 => 39,  154 => 38,  148 => 37,  143 => 35,  133 => 30,  127 => 29,  121 => 28,  115 => 27,  109 => 26,  103 => 25,  98 => 23,  94 => 21,  85 => 17,  78 => 16,  67 => 14,  63 => 13,  58 => 11,  55 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/common/footer.twig", "");
    }
}
