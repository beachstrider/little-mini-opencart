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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_2d43ea618b7ca97ebc8433ae3d9f8765 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-existing\" class=\"form-check-label\">";
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"";
        // line 8
        if ( !($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-new\" class=\"form-check-label\">";
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: ";
        // line 11
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
     <option>";
        // line 13
        echo ($context["text_select"] ?? null);
        echo "</option>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 15
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 15);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 15) == ($context["address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 15);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 15);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 15);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 20
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 25
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 30
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 35
        echo ($context["entry_company"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"company\" value=\"";
        // line 36
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 40
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_1\" value=\"";
        // line 41
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 46
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"address_2\" value=\"";
        // line 47
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 51
        echo ($context["entry_city"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"city\" value=\"";
        // line 52
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 57
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"postcode\" value=\"";
        // line 58
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 63
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
            <option value=\"\">";
        // line 65
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 67
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 67);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 67) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 67);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "          </select>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 74
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 79
            echo "
          ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "select")) {
                // line 81
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 81)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 82);
                echo "</label> <select name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 82);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "]\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "\" class=\"form-select\">
                <option value=\"\">";
                // line 83
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 85
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85) == (($__internal_compile_1 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 85);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "              </select>
              <div id=\"error-shipping-custom-field-";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 91
            echo "
          ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "radio")) {
                // line 93
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 93)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                echo "\">
              <label class=\"form-label\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                echo "\">
                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 97
                    echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 98);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98), (($__internal_compile_3 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 98);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 105
            echo "
          ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "checkbox")) {
                // line 107
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 107)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\">
              <label class=\"form-label\">";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\">
                ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 112);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112), (($__internal_compile_5 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 112);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 119
            echo "
          ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "text")) {
                // line 121
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 121)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                echo "</label> <input type=\"text\" name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 122);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 126
            echo "
          ";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "textarea")) {
                // line 128
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                echo "</label> <textarea name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 129);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "]\" rows=\"5\" placeholder=\"";
                if ((($__internal_compile_8 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 129);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 129);
                echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 133
            echo "
          ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 134) == "file")) {
                // line 135
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 135)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "\">
              <label class=\"form-label\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                echo "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 138
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\"/>
                <div id=\"error-shipping-custom-field-";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 144
            echo "
          ";
            // line 145
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "date")) {
                // line 146
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 155
            echo "
          ";
            // line 156
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "time")) {
                // line 157
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 157)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 160);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 160);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 166
            echo "
          ";
            // line 167
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "datetime")) {
                // line 168
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 168)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 171);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 171);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 177
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">";
        // line 182
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function () {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|address&language=";
        // line 204
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Shipping Address
\$('#form-shipping-address').on('submit', function (e) {
    e.preventDefault();

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|save&language=";
        // line 240
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$('#button-shipping-address').prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$('#button-shipping-address').prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    var addresses = [];

                    // Shipping addresses
                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            addresses[i] = {
                                text: json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'],
                                value: json['addresses'][i]['address_id']
                            };
                        }
                    }

                  ";
        // line 287
        if (($context["config_checkout_address"] ?? null)) {
            // line 288
            echo "                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == \$('#input-payment-address').val()) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-payment-address').html(html);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');
                  ";
        }
        // line 304
        echo "
                    // Shipping method
                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == json['address_id']) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-shipping-address').html(html);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#form-shipping-address')[0].reset();

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 339
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-shipping-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-shipping-postcode').parent().addClass('required');
                } else {
                    \$('#input-shipping-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 354
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 360
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 367
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-shipping-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  935 => 367,  925 => 360,  916 => 354,  898 => 339,  861 => 304,  843 => 288,  841 => 287,  791 => 240,  752 => 204,  727 => 182,  722 => 179,  715 => 177,  709 => 174,  691 => 171,  684 => 169,  675 => 168,  673 => 167,  670 => 166,  664 => 163,  646 => 160,  639 => 158,  630 => 157,  628 => 156,  625 => 155,  619 => 152,  601 => 149,  594 => 147,  585 => 146,  583 => 145,  580 => 144,  573 => 140,  561 => 139,  549 => 138,  544 => 136,  535 => 135,  533 => 134,  530 => 133,  524 => 130,  504 => 129,  495 => 128,  493 => 127,  490 => 126,  484 => 123,  464 => 122,  455 => 121,  453 => 120,  450 => 119,  444 => 116,  441 => 115,  418 => 112,  415 => 111,  411 => 110,  407 => 109,  403 => 108,  394 => 107,  392 => 106,  389 => 105,  383 => 102,  380 => 101,  357 => 98,  354 => 97,  350 => 96,  346 => 95,  342 => 94,  333 => 93,  331 => 92,  328 => 91,  322 => 88,  319 => 87,  304 => 85,  300 => 84,  296 => 83,  284 => 82,  275 => 81,  273 => 80,  270 => 79,  266 => 78,  259 => 74,  252 => 69,  237 => 67,  233 => 66,  229 => 65,  224 => 63,  214 => 58,  210 => 57,  200 => 52,  196 => 51,  187 => 47,  183 => 46,  173 => 41,  169 => 40,  160 => 36,  156 => 35,  144 => 30,  132 => 25,  120 => 20,  115 => 17,  90 => 15,  86 => 14,  82 => 13,  73 => 11,  63 => 8,  53 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_address.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\shipping_address.twig");
    }
}
