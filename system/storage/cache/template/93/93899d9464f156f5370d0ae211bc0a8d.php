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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_1fdcb906286c37fb3d22ff58ffca8142 extends Template
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

<div id=\"information-contact\" class=\"text-center bg-orangeLight flex justify-between items-end relative\">
  <div class=\"sm:py-[40px] py-[30px] w-full h-full\">
    <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"content\" class=\"col\">
\t\t\t\t\t<div class=\"flex justify-center sm:flex sm:text-[40px] text-[30px] font-bold text-orange uppercase\">
\t\t\t\t\t\t";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex justify-center mt-[20px]\">
\t\t\t\t\t\t<div class=\"\">";
        // line 12
        echo ($context["text_location"] ?? null);
        echo ":&nbsp;</div>
\t\t\t\t\t\t<div>";
        // line 13
        echo ($context["store"] ?? null);
        echo "</div>&nbsp;
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 15
        echo ($context["address"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 17
        if (($context["geocode"] ?? null)) {
            // line 18
            echo "\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t\t<div>,";
        echo ($context["text_telephone"] ?? null);
        echo ":&nbsp;</div>
\t\t\t\t\t\t<div class=\"\">";
        // line 21
        echo ($context["telephone"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 24
        if (($context["open"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t\t<div>";
            echo ($context["text_open"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
            // line 27
            echo ($context["open"] ?? null);
            echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t";
        if (($context["comment"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t\t\t<div>";
            echo ($context["text_comment"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
            // line 34
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t<form id=\"form-contact\" action=\"";
        // line 40
        echo ($context["send"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" class=\"block mt-[20px]\">
\t\t\t\t\t<div class=\"flex flex-col items-center gap-[10px]\">
\t\t\t\t\t\t<div class=\"sm:max-w-[400px] w-full\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 43
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"w-full\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<div id=\"error-name\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:max-w-[400px] w-full\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 47
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<div id=\"error-email\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:max-w-[400px] w-full\">
\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"w-full\" placeholder=\"";
        // line 51
        echo ($context["entry_enquiry"] ?? null);
        echo "\"></textarea>
\t\t\t\t\t\t\t<div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 54
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t<div class=\"sm:max-w-[400px] w-full flex justify-end\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"bg-indigo text-white px-[20px] py-[6px]\">";
        // line 56
        echo ($context["button_submit"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
    </div>
  </div>
</div>

";
        // line 65
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 66
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 66,  173 => 65,  161 => 56,  156 => 54,  150 => 51,  141 => 47,  132 => 43,  126 => 40,  120 => 36,  115 => 34,  109 => 32,  106 => 31,  99 => 27,  93 => 25,  91 => 24,  85 => 21,  80 => 20,  70 => 18,  68 => 17,  63 => 15,  58 => 13,  54 => 12,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/contact.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\information\\contact.twig");
    }
}
