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

/* catalog/view/template/checkout/voucher.twig */
class __TwigTemplate_087b62a94a3f884ca52629080b63a6e9 extends Template
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
<div id=\"account-voucher\" class=\"container mx-auto sm:px-0 px-[20px]\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
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
  ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 14
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form id=\"form-voucher\" action=\"";
        // line 15
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <div class=\"row mb-3 required\">
          <label for=\"input-to-name\" class=\"col-sm-2 col-form-label\">";
        // line 17
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 19
        echo ($context["to_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
            <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-to-email\" class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 26
        echo ($context["to_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
            <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-from-name\" class=\"col-sm-2 col-form-label\">";
        // line 31
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 33
        echo ($context["from_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
            <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-from-email\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 40
        echo ($context["from_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
            <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <div id=\"input-theme\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 49
            echo "                <div class=\"form-check\">
                  <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 50);
            echo "\" id=\"input-theme-";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 50);
            echo "\" class=\"form-check-input\"";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 50) == ($context["voucher_theme_id"] ?? null))) {
                echo " checked";
            }
            echo "/>
                  <label for=\"input-theme-";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 51);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 51);
            echo "</label>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
            <div id=\"error-theme\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3\">
          <label for=\"input-message\" class=\"col-sm-2 col-form-label\"><span data-bs-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["help_message"] ?? null);
        echo "\" class=\"col-sm-2 col-form-label\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\">";
        echo ($context["message"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-amount\" class=\"col-sm-2 col-form-label\"><span data-bs-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 67
        echo ($context["amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\"/>
            <div id=\"error-amount\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\">
            <div class=\"form-check form-check-inline\">
              <label class=\"form-check-label\">";
        // line 74
        echo ($context["text_agree"] ?? null);
        echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
              &nbsp;
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 77
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 81
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 82
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 84
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 84,  244 => 82,  240 => 81,  233 => 77,  227 => 74,  215 => 67,  208 => 65,  199 => 61,  192 => 59,  185 => 54,  174 => 51,  164 => 50,  161 => 49,  157 => 48,  151 => 45,  141 => 40,  136 => 38,  126 => 33,  121 => 31,  111 => 26,  106 => 24,  96 => 19,  91 => 17,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/voucher.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/checkout/voucher.twig");
    }
}
