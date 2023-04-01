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

/* catalog/view/template/account/edit.twig */
class __TwigTemplate_b55eaed4e838dd2f1c62faaae5422bc2 extends Template
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
";
        // line 2
        echo ($context["menu"] ?? null);
        echo "
<div class=\"content w-full\">
\t<form id=\"form-customer\" action=\"";
        // line 4
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" class=\"flex flex-col gap-[14px]\">
\t\t<div class=\"sm:grid grid-cols-12 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-3 flex items-center\">
\t\t\t\t<label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 7
        echo ($context["entry_firstname"] ?? null);
        echo ":
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-6 required grid grid-cols-2 gap-[20px]\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 12
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo " ...\" id=\"input-firstname\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 15
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo " ...\" id=\"input-lastname\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"error-firstname\" class=\"col-span-3 text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-12 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-3 flex items-center\">
\t\t\t\t<label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 22
        echo ($context["entry_email"] ?? null);
        echo ":
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-6 required\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 26
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " ...\" id=\"input-email\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-firstname\" class=\"col-span-3 text-[12px] text-orange flex items-center\"></div>
\t\t</div>

\t\t";
        // line 31
        if (($context["config_telephone_display"] ?? null)) {
            // line 32
            echo "\t\t\t<div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
\t\t\t\t<label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 33
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
            // line 35
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-telephone\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 42
            echo "
\t\t\t";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 43) == "select")) {
                // line 44
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 44)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 45);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 45);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"custom_field[";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 47);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 47);
                echo "\" class=\"form-select\">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 48
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 50);
                    echo "\" ";
                    if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 50)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 50) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 50)] ?? null) : null)))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 50);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 57
            echo "
\t\t\t";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 58) == "radio")) {
                // line 59
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 59)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 60);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-custom-field-";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 62);
                echo "\">
\t\t\t\t\t\t\t";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 65);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 65);
                    echo "\" class=\"form-check-input\" ";
                    if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 65) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65)] ?? null) : null)))) {
                        echo " checked ";
                    }
                    echo "/>
\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 66);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 66);
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 74
            echo "
\t\t\t";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 75) == "checkbox")) {
                // line 76
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 76)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 77);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div id=\"input-custom-field-";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                echo "\">
\t\t\t\t\t\t\t";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82);
                    echo "\" class=\"form-check-input\" ";
                    if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null)))) {
                        echo " checked ";
                    }
                    echo "/>
\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 83);
                    echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 91
            echo "
\t\t\t";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "text")) {
                // line 93
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 93)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 96);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 101
            echo "
\t\t\t";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "textarea")) {
                // line 103
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 103)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t";
                // line 107
                if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t";
                    echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108)] ?? null) : null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 110);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 117
            echo "
\t\t\t";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "file")) {
                // line 119
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 119)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 123
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                // line 125
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null);
                }
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 132
            echo "
\t\t\t";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "date")) {
                // line 134
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 134)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 138);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 147
            echo "
\t\t\t";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "time")) {
                // line 149
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 153);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 162
            echo "
\t\t\t";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 163) == "datetime")) {
                // line 164
                echo "\t\t\t\t<div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 164)) {
                    echo " required";
                }
                echo " custom-field\">
\t\t\t\t\t<label for=\"input-custom-field-";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 168);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"error-custom-field-";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 177
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t<div class=\"sm:grid grid-cols-12 sm:gap-[30px] gap-[20px] sm:mt-[36px] mt-[27px]\">
\t\t\t<div class=\"col-span-3 flex items-center\"></div>
\t\t\t<div class=\"col-span-6 required flex justify-end\">
\t\t\t\t<button type=\"submit\" class=\"block text-center min-w-[170px] py-[12px] bg-indigo text-[white] font-semibold uppercase\">";
        // line 182
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t\t<div id=\"error-firstname\" class=\"col-span-3 text-[12px] text-orange flex items-center\"></div>
\t\t</div>

\t</form>
</div></div></div>";
        // line 188
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 188,  597 => 182,  592 => 179,  585 => 177,  578 => 173,  560 => 168,  552 => 165,  545 => 164,  543 => 163,  540 => 162,  533 => 158,  515 => 153,  507 => 150,  500 => 149,  498 => 148,  495 => 147,  488 => 143,  470 => 138,  462 => 135,  455 => 134,  453 => 133,  450 => 132,  443 => 128,  432 => 126,  428 => 125,  417 => 123,  411 => 120,  404 => 119,  402 => 118,  399 => 117,  392 => 113,  389 => 112,  383 => 110,  377 => 108,  375 => 107,  367 => 106,  360 => 104,  353 => 103,  351 => 102,  348 => 101,  341 => 97,  327 => 96,  320 => 94,  313 => 93,  311 => 92,  308 => 91,  301 => 87,  298 => 86,  287 => 83,  275 => 82,  272 => 81,  268 => 80,  264 => 79,  259 => 77,  252 => 76,  250 => 75,  247 => 74,  240 => 70,  237 => 69,  226 => 66,  214 => 65,  211 => 64,  207 => 63,  203 => 62,  198 => 60,  191 => 59,  189 => 58,  186 => 57,  179 => 53,  176 => 52,  161 => 50,  157 => 49,  153 => 48,  147 => 47,  140 => 45,  133 => 44,  131 => 43,  128 => 42,  124 => 41,  121 => 40,  111 => 35,  106 => 33,  99 => 32,  97 => 31,  87 => 26,  80 => 22,  68 => 15,  60 => 12,  52 => 7,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/edit.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\edit.twig");
    }
}
