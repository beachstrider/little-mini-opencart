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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_51e54d946b0b8bdd8ce974bb716efdae extends Template
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
<div id=\"account-register\" class=\"modal\">
\t<div class=\"relative content bg-white sm:w-[770px] w-full sm:px-[36px] sm:py-[30] px-[27px] py-[22px]\">
\t\t<a class=\"absolute top-0 right-0 block p-[10px]\" href=\"/\">
\t\t\t<svg width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" stroke=\"#080E16\"/>
\t\t\t\t<path d=\"M6.5 6.5L18.5 18.5M6.5 18.5L18.5 6.5\" stroke=\"#080E16\"/>
\t\t\t</svg>
\t\t</a>
\t\t<div class=\"sm:flex justify-center sm:text-[40px] text-[30px] font-bold uppercase\">
\t\t\t<div class=\"text-orange\">REGISTER</div>
\t\t\t&nbsp;YOUR ACCOUNT
\t\t</div>
\t\t<form id=\"form-register\" action=\"";
        // line 14
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" class=\"sm:mt-[28px] mt-[22px]\">
\t\t\t<fieldset id=\"account\">
\t\t\t\t";
        // line 16
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t\t<label class=\"\">";
            // line 18
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
\t\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t<label for=\"input-firstname\" class=\"\">";
        // line 29
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"w-full\"/>
\t\t\t\t\t\t<div id=\"error-firstname\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t<label for=\"input-lastname\" class=\"\">";
        // line 36
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"w-full\"/>
\t\t\t\t\t\t<div id=\"error-lastname\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t<label for=\"input-email\" class=\"\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 45
        echo ($context["initial_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\"/>
\t\t\t\t\t\t<div id=\"error-email\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 50
        if (($context["config_telephone_display"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t<div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
\t\t\t\t\t\t<label for=\"input-telephone\" class=\"\">";
            // line 52
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 54
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"w-full\"/>
\t\t\t\t\t\t\t<div id=\"error-telephone\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 59
        echo "
\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 61
            echo "
\t\t\t\t\t";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 62) == "select")) {
                // line 63
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 64);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 67
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "
\t\t\t\t\t";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "radio")) {
                // line 78
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                echo "\">
\t\t\t\t\t\t\t<label class=\"\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 79);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div id=\"input-custom-field-";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-check-input\"/>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 85);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 93
            echo "
\t\t\t\t\t";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "checkbox")) {
                // line 95
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                echo "\">
\t\t\t\t\t\t\t<label class=\"\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div id=\"input-custom-field-";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101);
                    echo "\" class=\"form-check-input\"/>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 102);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 110
            echo "
\t\t\t\t\t";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 111) == "text")) {
                // line 112
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 115);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\" class=\"w-full\"/>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t\t";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "textarea")) {
                // line 122
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                echo "\" class=\"w-full\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 125);
                echo "</textarea>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 130
            echo "
\t\t\t\t\t";
            // line 131
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "file")) {
                // line 132
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\">
\t\t\t\t\t\t\t<label class=\"\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 136
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 138
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "]\" value=\"\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 145
            echo "
\t\t\t\t\t";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "date")) {
                // line 147
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 151);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 160
            echo "
\t\t\t\t\t";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "time")) {
                // line 162
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 166);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 175
            echo "
\t\t\t\t\t";
            // line 176
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 176) == "datetime")) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 181);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 181);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 190
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "\t\t\t</fieldset>

\t\t\t<fieldset>
\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t<label for=\"input-password\" class=\"\">";
        // line 196
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 198
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"w-full\"/>
\t\t\t\t\t\t<div id=\"error-password\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset class=\"hidden\">
\t\t\t\t<legend>";
        // line 204
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<label class=\"\">";
        // line 206
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\"/>
\t\t\t\t\t\t\t<label for=\"input-newsletter-yes\" class=\"form-check-label\">";
        // line 210
        echo ($context["text_yes"] ?? null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\" checked/>
\t\t\t\t\t\t\t<label for=\"input-newsletter-no\" class=\"form-check-label\">";
        // line 214
        echo ($context["text_no"] ?? null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t";
        // line 219
        echo ($context["captcha"] ?? null);
        echo "

\t\t\t<div class=\"d-inline-block pt-2 pd-2 w-100\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t";
        // line 223
        if (($context["text_agree"] ?? null)) {
            // line 224
            echo "\t\t\t\t\t\t<div class=\"flex items-center gap-[10px]\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"\"/>
\t\t\t\t\t\t\t<label class=\"\">";
            // line 226
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t\t<button type=\"submit\" class=\"mt-[12px] w-[170px] font-bold bg-indigo py-[12px] text-white uppercase\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
<style>
\t#alert {
\t\ttop: 20px !important;
\t}
</style>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#input-customer-group').on('change', function () {
\$.ajax({
url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language= ";
        // line 245
        echo ($context["language"] ?? null);
        echo "',
dataType: 'json',
success: function (json) {
\$('.custom-field').hide();
\$('.custom-field').removeClass('required');

for (i = 0; i < json.length; i ++) {
custom_field = json[i];

\$('.custom-field-' + custom_field['custom_field_id']).show();

if (custom_field['required']) {
\$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
}
}
},
error: function (xhr, ajaxOptions, thrownError) { // console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 268
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 268,  652 => 245,  632 => 229,  626 => 226,  622 => 224,  620 => 223,  613 => 219,  605 => 214,  598 => 210,  591 => 206,  586 => 204,  577 => 198,  572 => 196,  566 => 192,  559 => 190,  552 => 186,  538 => 181,  530 => 178,  525 => 177,  523 => 176,  520 => 175,  513 => 171,  499 => 166,  491 => 163,  486 => 162,  484 => 161,  481 => 160,  474 => 156,  460 => 151,  452 => 148,  447 => 147,  445 => 146,  442 => 145,  435 => 141,  428 => 139,  424 => 138,  413 => 136,  407 => 133,  402 => 132,  400 => 131,  397 => 130,  390 => 126,  380 => 125,  373 => 123,  368 => 122,  366 => 121,  363 => 120,  356 => 116,  346 => 115,  339 => 113,  334 => 112,  332 => 111,  329 => 110,  322 => 106,  319 => 105,  308 => 102,  300 => 101,  297 => 100,  293 => 99,  289 => 98,  284 => 96,  279 => 95,  277 => 94,  274 => 93,  267 => 89,  264 => 88,  253 => 85,  245 => 84,  242 => 83,  238 => 82,  234 => 81,  229 => 79,  224 => 78,  222 => 77,  219 => 76,  212 => 72,  209 => 71,  198 => 69,  194 => 68,  190 => 67,  184 => 66,  177 => 64,  172 => 63,  170 => 62,  167 => 61,  163 => 60,  160 => 59,  152 => 54,  147 => 52,  140 => 51,  138 => 50,  128 => 45,  123 => 43,  115 => 38,  110 => 36,  102 => 31,  97 => 29,  94 => 28,  88 => 24,  73 => 22,  69 => 21,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/register.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\register.twig");
    }
}
