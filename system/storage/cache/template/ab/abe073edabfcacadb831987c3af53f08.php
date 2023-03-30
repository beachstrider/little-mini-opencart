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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_14101c0bf7e280ea44011c28f399a616 extends Template
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
        echo "<form id=\"form-register\">
  <p>";
        // line 2
        echo ($context["text_login"] ?? null);
        echo "</p>
  <fieldset>
    <legend>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"row\">
      ";
        // line 6
        if (($context["config_checkout_guest"] ?? null)) {
            // line 7
            echo "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 9
            if (($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-register\" class=\"form-check-label\">";
            echo ($context["text_register"] ?? null);
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 12
            if ( !($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-guest\" class=\"form-check-label\">";
            echo ($context["text_guest"] ?? null);
            echo "</label>
          </div>
        </div>
      ";
        }
        // line 16
        echo "      <div class=\"col mb-3";
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) {
            echo " d-none";
        }
        echo "\">
        <label class=\"form-label\">";
        // line 17
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 20
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 20);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 27
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 31
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>

      ";
        // line 39
        if (($context["config_telephone_display"] ?? null)) {
            // line 40
            echo "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 41
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 42
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 46
        echo "
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 48
            echo "
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 49) == "account")) {
                // line 50
                echo "
          ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 51) == "select")) {
                    // line 52
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 52);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 53);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 53);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    echo "]\" id=\"input-customer-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 54
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 55));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 56
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 56);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 56) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 56);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "              </select>
              <div id=\"error-custom-field-";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 62
                echo "
          ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 63) == "radio")) {
                    // line 64
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                    echo "\">
              <label class=\"form-label\">";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 65);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                    echo "\">
                ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 68
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 69);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 73);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 76
                echo "
          ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "checkbox")) {
                    // line 78
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    echo "\">
              <label class=\"form-label\">";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 79);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    echo "\">
                ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 82
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 83);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 83);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 90
                echo "
          ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 91) == "text")) {
                    // line 92
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 93);
                    echo "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 94);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 94);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 98
                echo "
          ";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "textarea")) {
                    // line 100
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    echo "</label>
              <textarea name=\"custom_field[";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null)) {
                        echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 102);
                    }
                    echo "</textarea>
              <div id=\"error-custom-field-";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 106
                echo "
          ";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 107) == "file")) {
                    // line 108
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 109);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 111
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 112);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 117
                echo "
          ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "date")) {
                    // line 119
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 122);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 128
                echo "
          ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "time")) {
                    // line 130
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 139
                echo "
          ";
                // line 140
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "datetime")) {
                    // line 141
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 144);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 144);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 150
                echo "
        ";
            }
            // line 152
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "    </div>
  </fieldset>

  ";
        // line 156
        if (($context["config_checkout_address"] ?? null)) {
            // line 157
            echo "    <fieldset>
      <legend>";
            // line 158
            echo ($context["text_payment_address"] ?? null);
            echo "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 161
            echo ($context["entry_company"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_company\" value=\"";
            // line 162
            echo ($context["payment_company"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 165
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_address_1\" value=\"";
            // line 166
            echo ($context["payment_address_1"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 170
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_address_2\" value=\"";
            // line 171
            echo ($context["payment_address_2"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 174
            echo ($context["entry_city"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_city\" value=\"";
            // line 175
            echo ($context["payment_city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 179
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"payment_postcode\" value=\"";
            // line 180
            echo ($context["payment_postcode"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 184
            echo ($context["entry_country"] ?? null);
            echo "</label>
          <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 186
            echo ($context["text_select"] ?? null);
            echo "</option>
            ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 188
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 188);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 188) == ($context["payment_country_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 188);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 194
            echo ($context["entry_zone"] ?? null);
            echo "</label> <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            echo ($context["payment_zone_id"] ?? null);
            echo "\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 198
                echo "
          ";
                // line 199
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 199) == "address")) {
                    // line 200
                    echo "
            ";
                    // line 201
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 201) == "select")) {
                        // line 202
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 202)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                        echo "</label> <select name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 203);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                        echo "]\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                        echo "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 204
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                  ";
                        // line 205
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 205));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 206
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 206);
                            echo "\"";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 206) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 206);
                            echo "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 208
                        echo "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 212
                    echo "
            ";
                    // line 213
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 213) == "radio")) {
                        // line 214
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 214)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                        echo "\">
                <label class=\"form-label\">";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 215);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                        echo "\">
                  ";
                        // line 217
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 217));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 218
                            echo "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 219
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 219);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 219);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 219);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 219) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/>
                      <label for=\"input-payment-custom-value-";
                            // line 220
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 220);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 220);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 223
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 227
                    echo "
            ";
                    // line 228
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 228) == "checkbox")) {
                        // line 229
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 229)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                        echo "\">
                <label class=\"form-label\">";
                        // line 230
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 230);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                        echo "\">
                  ";
                        // line 232
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 232));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 233
                            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 234
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 234);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 234);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 234);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 234), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 234);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 234);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 237
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 238
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 241
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 241) == "text")) {
                        // line 242
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 242)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 243
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                        echo "</label>
                <input type=\"text\" name=\"payment_custom_field[";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 244);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        echo "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244)] ?? null) : null)) {
                            echo (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 244);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 244);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        echo "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 248
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 248) == "textarea")) {
                        // line 249
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 249)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 250
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                        echo "</label> <textarea name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 250);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        echo "\" class=\"form-control\">";
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null)) {
                            echo (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 250);
                        }
                        echo "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 254
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 254) == "file")) {
                        // line 255
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 255)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255);
                        echo "\">
                <label class=\"form-label\">";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 256);
                        echo "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 258
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" data-oc-target=\"#input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 259);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                        echo "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null)) {
                            echo (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null);
                        }
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                        echo "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 264
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 264) == "date")) {
                        // line 265
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 265)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 266
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 268
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 268);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        echo "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null)) {
                            echo (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 268);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 268);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        echo "\" class=\"form-control date\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 274
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 274) == "time")) {
                        // line 275
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 275)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 276
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 276);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 278
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 278);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                        echo "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278)] ?? null) : null)) {
                            echo (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 278);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 278);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                        echo "\" class=\"form-control time\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 284
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 284) == "datetime")) {
                        // line 285
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 285)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 286
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 286);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 288);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288);
                        echo "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288)] ?? null) : null)) {
                            echo (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 288);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 288);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288);
                        echo "\" class=\"form-control datetime\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 294
                    echo "          ";
                }
                // line 295
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "        ";
            if (($context["shipping_required"] ?? null)) {
                // line 297
                echo "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 299
                echo ($context["entry_match"] ?? null);
                echo "</label>
            </div>
          </div>
        ";
            }
            // line 303
            echo "      </div>
    </fieldset>
  ";
        }
        // line 306
        echo "
  <fieldset id=\"shipping-address\" style=\"display: ";
        // line 307
        if ( !($context["config_checkout_address"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <legend>";
        // line 308
        echo ($context["text_shipping_address"] ?? null);
        echo "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 310
        if (($context["config_checkout_address"] ?? null)) {
            // line 311
            echo "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 312
            echo ($context["entry_firstname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
            echo ($context["shipping_firstname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 316
            echo ($context["entry_lastname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
            echo ($context["shipping_lastname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 320
        echo "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 321
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 324
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 328
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 331
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 335
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 339
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 340
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 342
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 342);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 342) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 342);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 348
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 352
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 352) == "address")) {
                // line 353
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 353) == "select")) {
                    // line 354
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 354)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 355
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 355);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 355);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 355);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 355);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 355);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 356
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 357
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 357));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 358
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 358);
                        echo "\"";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 358) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 358);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 360
                    echo "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 364
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 364) == "radio")) {
                    // line 365
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 365)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365);
                    echo "\">
              <label class=\"form-label\">";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 366);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 367
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 367);
                    echo "\">
                ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 368));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 369
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 370
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 370);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 370);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 370);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 370), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 370);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 370);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 373
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 374);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 377
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 377) == "checkbox")) {
                    // line 378
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 378)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 378);
                    echo "\">
              <label class=\"form-label\">";
                    // line 379
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 379);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    echo "\">
                ";
                    // line 381
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 381));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 382
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 383);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 383);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 383);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 383), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 383);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 383);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 386
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 387
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 390
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 390) == "text")) {
                    // line 391
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 391)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 392
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 392);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 392);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392);
                    echo "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392)] ?? null) : null)) {
                        echo (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 392);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 392);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 393
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 396
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 396) == "textarea")) {
                    // line 397
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 397)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 397);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 398
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 398);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 398);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                    echo "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398)] ?? null) : null)) {
                        echo (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 398);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 398);
                    echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 399);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 402
                echo "
          ";
                // line 403
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 403) == "file")) {
                    // line 404
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 404)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    echo "\">
              <label class=\"form-label\">";
                    // line 405
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 405);
                    echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 407
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407);
                    echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 408);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                    echo "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408)] ?? null) : null)) {
                        echo (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408)] ?? null) : null);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                    echo "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 409
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 409);
                    echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 413
                echo "
          ";
                // line 414
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 414) == "date")) {
                    // line 415
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 415)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 416
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 416);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 416);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 418
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 418);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                    echo "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418)] ?? null) : null)) {
                        echo (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 418);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 418);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 424
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 424) == "time")) {
                    // line 425
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 425)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 425);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 426
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 426);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 426);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 428
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 428);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                    echo "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null)) {
                        echo (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 428);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 428);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 431);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 434
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 434) == "datetime")) {
                    // line 435
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 435)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 436
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 436);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 436);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 438
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 438);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                    echo "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438)] ?? null) : null)) {
                        echo (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 438);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 438);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 444
                echo "        ";
            }
            // line 445
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 451
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 454
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 460
        echo ($context["captcha"] ?? null);
        echo "</div>
    <div class=\"col mb-3\">
      <div class=\"form-check\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 463
        echo ($context["entry_newsletter"] ?? null);
        echo "</label> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 465
        if (($context["text_agree"] ?? null)) {
            // line 466
            echo "        <div id=\"agree\" class=\"form-check\">
          <label for=\"input-register-agree\" class=\"form-check-label\">";
            // line 467
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/> 
        </div>
      ";
        }
        // line 470
        echo "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function () {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 500
        echo ($context["language"] ?? null);
        echo "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

                    if (custom_field['required']) {
                        \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function () {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/register|save&language=";
        // line 546
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                  ";
        // line 589
        if (($context["shipping_required"] ?? null)) {
            // line 590
            echo "                    \$('#button-shipping-method').trigger('click');
                  ";
        } else {
            // line 592
            echo "                    \$('#button-payment-method').trigger('click');
                  ";
        }
        // line 594
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function () {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 609
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 624
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 637
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2025 => 637,  2009 => 624,  1991 => 609,  1974 => 594,  1970 => 592,  1966 => 590,  1964 => 589,  1918 => 546,  1869 => 500,  1835 => 470,  1829 => 467,  1826 => 466,  1824 => 465,  1819 => 463,  1813 => 460,  1802 => 454,  1796 => 451,  1789 => 446,  1783 => 445,  1780 => 444,  1774 => 441,  1756 => 438,  1749 => 436,  1740 => 435,  1737 => 434,  1731 => 431,  1713 => 428,  1706 => 426,  1697 => 425,  1694 => 424,  1688 => 421,  1670 => 418,  1663 => 416,  1654 => 415,  1652 => 414,  1649 => 413,  1642 => 409,  1630 => 408,  1618 => 407,  1613 => 405,  1604 => 404,  1602 => 403,  1599 => 402,  1593 => 399,  1573 => 398,  1564 => 397,  1561 => 396,  1555 => 393,  1535 => 392,  1526 => 391,  1523 => 390,  1517 => 387,  1514 => 386,  1491 => 383,  1488 => 382,  1484 => 381,  1480 => 380,  1476 => 379,  1467 => 378,  1464 => 377,  1458 => 374,  1455 => 373,  1432 => 370,  1429 => 369,  1425 => 368,  1421 => 367,  1417 => 366,  1408 => 365,  1405 => 364,  1399 => 361,  1396 => 360,  1381 => 358,  1377 => 357,  1373 => 356,  1361 => 355,  1352 => 354,  1349 => 353,  1346 => 352,  1342 => 351,  1334 => 348,  1328 => 344,  1313 => 342,  1309 => 341,  1305 => 340,  1301 => 339,  1290 => 335,  1279 => 331,  1269 => 328,  1258 => 324,  1248 => 321,  1245 => 320,  1234 => 316,  1223 => 312,  1220 => 311,  1218 => 310,  1213 => 308,  1205 => 307,  1202 => 306,  1197 => 303,  1190 => 299,  1186 => 297,  1183 => 296,  1177 => 295,  1174 => 294,  1168 => 291,  1150 => 288,  1143 => 286,  1134 => 285,  1131 => 284,  1125 => 281,  1107 => 278,  1100 => 276,  1091 => 275,  1088 => 274,  1082 => 271,  1064 => 268,  1057 => 266,  1048 => 265,  1045 => 264,  1039 => 261,  1026 => 259,  1014 => 258,  1009 => 256,  1000 => 255,  997 => 254,  991 => 251,  971 => 250,  962 => 249,  959 => 248,  953 => 245,  937 => 244,  931 => 243,  922 => 242,  919 => 241,  913 => 238,  910 => 237,  887 => 234,  884 => 233,  880 => 232,  876 => 231,  872 => 230,  863 => 229,  861 => 228,  858 => 227,  852 => 224,  849 => 223,  838 => 220,  824 => 219,  821 => 218,  817 => 217,  813 => 216,  809 => 215,  800 => 214,  798 => 213,  795 => 212,  789 => 209,  786 => 208,  771 => 206,  767 => 205,  763 => 204,  751 => 203,  742 => 202,  740 => 201,  737 => 200,  735 => 199,  732 => 198,  728 => 197,  720 => 194,  714 => 190,  699 => 188,  695 => 187,  691 => 186,  686 => 184,  677 => 180,  673 => 179,  664 => 175,  660 => 174,  652 => 171,  648 => 170,  639 => 166,  635 => 165,  627 => 162,  623 => 161,  617 => 158,  614 => 157,  612 => 156,  607 => 153,  601 => 152,  597 => 150,  591 => 147,  573 => 144,  566 => 142,  561 => 141,  559 => 140,  556 => 139,  550 => 136,  532 => 133,  525 => 131,  520 => 130,  518 => 129,  515 => 128,  509 => 125,  491 => 122,  484 => 120,  479 => 119,  477 => 118,  474 => 117,  468 => 114,  455 => 112,  443 => 111,  436 => 109,  431 => 108,  429 => 107,  426 => 106,  420 => 103,  404 => 102,  398 => 101,  393 => 100,  391 => 99,  388 => 98,  382 => 95,  366 => 94,  360 => 93,  355 => 92,  353 => 91,  350 => 90,  344 => 87,  341 => 86,  318 => 83,  315 => 82,  311 => 81,  307 => 80,  303 => 79,  298 => 78,  296 => 77,  293 => 76,  287 => 73,  284 => 72,  261 => 69,  258 => 68,  254 => 67,  250 => 66,  246 => 65,  241 => 64,  239 => 63,  236 => 62,  230 => 59,  227 => 58,  212 => 56,  208 => 55,  204 => 54,  192 => 53,  187 => 52,  185 => 51,  182 => 50,  180 => 49,  177 => 48,  173 => 47,  170 => 46,  161 => 42,  157 => 41,  150 => 40,  148 => 39,  137 => 35,  126 => 31,  115 => 27,  108 => 22,  93 => 20,  89 => 19,  84 => 17,  77 => 16,  66 => 12,  56 => 9,  52 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\register.twig");
    }
}
