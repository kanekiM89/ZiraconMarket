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

/* ziracon/template/information/contact.twig */
class __TwigTemplate_fd1cc283edd9f889f8f2302a1b5e062bbefac81c133a29ec82c4d1d6295c6a3d extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"page-title\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <legend>";
        // line 18
        echo ($context["text_location"] ?? null);
        echo "</legend>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row contact-info\">
\t\t  \t<div class=\"left\">
           ";
        // line 23
        if (($context["image"] ?? null)) {
            echo " 
            <div class=\"address-detail\"><img src=\"";
            // line 24
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
\t\t   ";
        }
        // line 25
        echo " 
            <div class=\"address-detail\"><strong>";
        // line 26
        echo ($context["store"] ?? null);
        echo "</strong>
             <address>
              ";
        // line 28
        echo ($context["address"] ?? null);
        echo " 
              </address>
              ";
        // line 30
        if (($context["geocode"] ?? null)) {
            echo " 
              <a href=\"https://maps.google.com/maps?q=";
            // line 31
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo " &hl=";
            echo ($context["geocode_hl"] ?? null);
            echo " &t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo " </a>
              ";
        }
        // line 32
        echo " 
            </div>
            <div class=\"telephone\">
\t\t\t<strong>";
        // line 35
        echo ($context["text_telephone"] ?? null);
        echo " </strong>
               <address>";
        // line 36
        echo ($context["telephone"] ?? null);
        echo "  </address>
\t\t\t</div>
\t\t\t<div class=\"fax\">
              ";
        // line 39
        if (($context["fax"] ?? null)) {
            echo " 
              <strong>";
            // line 40
            echo ($context["text_fax"] ?? null);
            echo " </strong>
              <address>";
            // line 41
            echo ($context["fax"] ?? null);
            echo " </address>
              ";
        }
        // line 43
        echo "\t\t\t  
            </div>
            <div class=\"open-time\">
              ";
        // line 46
        if (($context["open"] ?? null)) {
            // line 47
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong>
              <opentime>";
            // line 48
            echo ($context["open"] ?? null);
            echo "</opentime>
              ";
        }
        // line 50
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 51
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong>
              <comment>";
            // line 52
            echo ($context["comment"] ?? null);
            echo "</comment>
              ";
        }
        // line 54
        echo "            </div>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t<script type=\"text/javascript\" src=\"http://www.webestools.com/google_map_gen.js?lati=21.182785&long=72.831834&zoom=4&width=350&height=200&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle=\"></script>
\t\t\t\t</div>
\t\t\t</div>
            <!-- <div class=\"col-sm-3\">
              ";
        // line 73
        if (($context["open"] ?? null)) {
            // line 74
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 75
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 78
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 79
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 80
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 82
        echo "            </div> -->
          </div>
        </div>
      </div>
      ";
        // line 86
        if (($context["locations"] ?? null)) {
            // line 87
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 90
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 92);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 92);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 94);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 98);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 98);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 98);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 100
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 100);
                echo "</strong><br />
                  <address>
                  ";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 102);
                echo "
                  </address>
                  ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 105));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 107
                echo "                </div> 
                <div class=\"col-sm-3\"> <strong>";
                // line 108
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 109);
                echo "<br />
                  <br />
                  ";
                // line 111
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 111)) {
                    // line 112
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 113);
                    echo "
                  ";
                }
                // line 115
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 119);
                    echo "<br />
                  <br />
                  ";
                }
                // line 122
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 124);
                    echo "
                  ";
                }
                // line 126
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "      </div>
      ";
        }
        // line 134
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          ";
        // line 136
        echo ($context["text_contact"] ?? null);
        echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 138
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 140
        echo ($context["user_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 141
        if (($context["error_name"] ?? null)) {
            // line 142
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 144
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 147
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 149
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 150
        if (($context["error_email"] ?? null)) {
            // line 151
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 153
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 156
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 158
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 159
        if (($context["error_enquiry"] ?? null)) {
            // line 160
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 162
        echo "            </div>
          </div>
          ";
        // line 164
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 168
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 172
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 173
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 175
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ziracon/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 175,  472 => 173,  468 => 172,  461 => 168,  454 => 164,  450 => 162,  444 => 160,  442 => 159,  438 => 158,  433 => 156,  428 => 153,  422 => 151,  420 => 150,  416 => 149,  411 => 147,  406 => 144,  400 => 142,  398 => 141,  394 => 140,  389 => 138,  384 => 136,  378 => 134,  374 => 132,  363 => 126,  358 => 124,  353 => 123,  350 => 122,  344 => 119,  339 => 118,  337 => 117,  333 => 115,  328 => 113,  323 => 112,  321 => 111,  316 => 109,  312 => 108,  309 => 107,  299 => 105,  297 => 104,  292 => 102,  286 => 100,  276 => 98,  274 => 97,  268 => 94,  261 => 92,  257 => 90,  253 => 89,  247 => 87,  245 => 86,  239 => 82,  234 => 80,  229 => 79,  226 => 78,  220 => 75,  215 => 74,  213 => 73,  207 => 69,  201 => 54,  196 => 52,  191 => 51,  188 => 50,  183 => 48,  178 => 47,  176 => 46,  171 => 43,  166 => 41,  162 => 40,  158 => 39,  152 => 36,  148 => 35,  143 => 32,  134 => 31,  130 => 30,  125 => 28,  120 => 26,  117 => 25,  108 => 24,  104 => 23,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ziracon/template/information/contact.twig", "");
    }
}
