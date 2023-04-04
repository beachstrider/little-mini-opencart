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

/* admin/view/template/localisation/currency_form.twig */
class __TwigTemplate_e9092d96d721e0ba03f7be45ef2d5d1d extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-currency\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 17
        echo ($context["text_iso"] ?? null);
        echo "</div>
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_form"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-currency\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-title\" class=\"col-sm-2 col-form-label\">";
        // line 23
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 25
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div id=\"error-title\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"code\" value=\"";
        // line 32
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 33
        echo ($context["help_code"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"error-code\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-symbol-left\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_symbol_left"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"symbol_left\" value=\"";
        // line 40
        echo ($context["symbol_left"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_left"] ?? null);
        echo "\" id=\"input-symbol-left\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-symbol-right\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_symbol_right"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"symbol_right\" value=\"";
        // line 46
        echo ($context["symbol_right"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_symbol_right"] ?? null);
        echo "\" id=\"input-symbol-right\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-decimal-place\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_decimal_place"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"decimal_place\" value=\"";
        // line 52
        echo ($context["decimal_place"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_decimal_place"] ?? null);
        echo "\" id=\"input-decimal-place\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_value"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"value\" value=\"";
        // line 58
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 59
        echo ($context["help_value"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 63
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
                                <input type=\"hidden\" name=\"status\" value=\"0\"/>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 67
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"currency_id\" value=\"";
        // line 71
        echo ($context["currency_id"] ?? null);
        echo "\" id=\"input-currency-id\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/localisation/currency_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 77,  209 => 71,  200 => 67,  193 => 63,  186 => 59,  180 => 58,  175 => 56,  166 => 52,  161 => 50,  152 => 46,  147 => 44,  138 => 40,  133 => 38,  125 => 33,  119 => 32,  114 => 30,  104 => 25,  99 => 23,  94 => 21,  89 => 19,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/localisation/currency_form.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\localisation\\currency_form.twig");
    }
}
