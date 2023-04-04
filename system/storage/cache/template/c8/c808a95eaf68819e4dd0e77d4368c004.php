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

/* admin/view/template/customer/customer_form.twig */
class __TwigTemplate_e4835f34c325f7e9898fd6beb2141c66 extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        ";
        // line 6
        if (($context["orders"] ?? null)) {
            // line 7
            echo "          <a href=\"";
            echo ($context["orders"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_order"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        echo "        <button type=\"submit\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-customer\" action=\"";
        // line 23
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_address"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_payment_method"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_transaction"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_ip"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 36
        echo ($context["text_customer"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_store"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 42
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 42);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 42) == ($context["store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 42);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 48
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 52
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 52);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 52) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 52);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 58
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 60
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 67
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 72
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 74
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3";
        // line 78
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 79
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 81
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 86
            echo "
                  ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 87) == "account")) {
                // line 88
                echo "
                    ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "select")) {
                    // line 90
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 91);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 94
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                            ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 96
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 96);
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "                          </select>
                          <div id=\"error-custom-field-";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 103
                echo "
                    ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "radio")) {
                    // line 105
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 110
                        echo "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 111);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 119
                echo "
                    ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "checkbox")) {
                    // line 121
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 125));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 126
                        echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 127);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 127);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 135
                echo "
                    ";
                // line 136
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "text")) {
                    // line 137
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 140)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    echo "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 145
                echo "
                    ";
                // line 146
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "textarea")) {
                    // line 147
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150)));
                    echo "</textarea>
                          <div id=\"error-custom-field-";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 155
                echo "
                    ";
                // line 156
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "file")) {
                    // line 157
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                    echo "</label>
                        <div class=\"col-sm-10\">

                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-custom-field-";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) ? ((($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    echo "\"";
                    if ( !(($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 165
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                    echo "\"";
                    if ( !(($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>

                          <div id=\"error-custom-field-";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 172
                echo "
                    ";
                // line 173
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "date")) {
                    // line 174
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 178)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 185
                echo "
                    ";
                // line 186
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "time")) {
                    // line 187
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 191)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 198
                echo "
                    ";
                // line 199
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 199) == "datetime")) {
                    // line 200
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 201);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 204)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 211
                echo "
                  ";
            }
            // line 213
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 216
        echo ($context["text_password"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 218
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 220
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 225
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 227
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 233
        echo ($context["text_other"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 235
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 239
        if (($context["newsletter"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 244
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 248
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 253
        echo ($context["entry_safe"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"";
        // line 257
        if (($context["safe"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 259
        echo ($context["help_safe"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-address\" class=\"tab-pane\">
              ";
        // line 265
        $context["address_row"] = 0;
        // line 266
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 267
            echo "                <fieldset id=\"address-row-";
            echo ($context["address_row"] ?? null);
            echo "\">
                  <legend>";
            // line 268
            echo ($context["text_address"] ?? null);
            echo " ";
            echo (($context["address_row"] ?? null) + 1);
            echo " <button type=\"button\" onclick=\"\$('#address-row-";
            echo ($context["address_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger btn-sm float-end\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>


                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 272
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 274
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 274);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 275
            echo ($context["address_row"] ?? null);
            echo "-firstname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 280
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 282
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 282);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 283
            echo ($context["address_row"] ?? null);
            echo "-lastname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 287
            echo ($context["address_row"] ?? null);
            echo "-company\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 289
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 289);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-company\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 293
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 295
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 295);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 296
            echo ($context["address_row"] ?? null);
            echo "-address-1\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 300
            echo ($context["address_row"] ?? null);
            echo "-address-2\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 302
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 302);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-address-2\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 306
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 308
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 308);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 309
            echo ($context["address_row"] ?? null);
            echo "-city\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 313
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"address[";
            // line 315
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 315);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"form-control\"/>
                      <div id=\"error-address-";
            // line 316
            echo ($context["address_row"] ?? null);
            echo "-postcode\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 320
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 322
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"form-select\" data-address-row=\"";
            echo ($context["address_row"] ?? null);
            echo "\" data-zone-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 322);
            echo "\" disabled>
                        <option value=\"\">";
            // line 323
            echo ($context["text_select"] ?? null);
            echo "</option>
                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 325
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 325);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 325) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 325))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 325);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                      </select>
                      <div id=\"error-address-";
            // line 328
            echo ($context["address_row"] ?? null);
            echo "-country\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-address-";
            // line 332
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"address[";
            // line 334
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"form-select\" disabled></select>
                      <div id=\"error-address-";
            // line 335
            echo ($context["address_row"] ?? null);
            echo "-zone\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  ";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 340
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 340) == "address")) {
                    // line 341
                    echo "
                      ";
                    // line 342
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 342) == "select")) {
                        // line 343
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 343);
                        echo "\">
                          <label for=\"input-address-";
                        // line 344
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 344);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
                        // line 346
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 346);
                        echo "]\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 346);
                        echo "\" class=\"form-select\">
                              <option value=\"\">";
                        // line 347
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                              ";
                        // line 348
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 348));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 349
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 349);
                            echo "\"";
                            if (((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 349)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 349)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 349) == (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 349)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 349)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 349);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 351
                        echo "                            </select>
                            <div id=\"error-address-";
                        // line 352
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 352);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 356
                    echo "
                      ";
                    // line 357
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 357) == "radio")) {
                        // line 358
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 359
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 359);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"input-address-";
                        // line 361
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 361);
                        echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                        // line 362
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 362));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 363
                            echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"address[";
                            // line 364
                            echo ($context["address_row"] ?? null);
                            echo "][custom_field][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 364);
                            echo "\" id=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 364);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 364)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 364) == (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 364)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 364);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 364);
                            echo "</label>
                                </div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 367
                        echo "                            </div>
                            <div id=\"error-address-";
                        // line 368
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 368);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 372
                    echo "
                      ";
                    // line 373
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 373) == "checkbox")) {
                        // line 374
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 374);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 375
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 375);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"input-address-";
                        // line 377
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 377);
                        echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                        // line 378
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 378));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 379
                            echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"address[";
                            // line 380
                            echo ($context["address_row"] ?? null);
                            echo "][custom_field][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 380);
                            echo "\" id=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 380);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 380)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 380), (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 380)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 380);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 380);
                            echo "</label>
                                </div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 383
                        echo "                            </div>
                            <div id=\"error-address-";
                        // line 384
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 384);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 388
                    echo "
                      ";
                    // line 389
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 389) == "text")) {
                        // line 390
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                        echo "\">
                          <label for=\"input-address-";
                        // line 391
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 391);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
                        // line 393
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 393)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393)] ?? null) : null)) ? ((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 393)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 393)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 393);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                        echo "\" class=\"form-control\"/>
                            <div id=\"error-address-";
                        // line 394
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 394);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 398
                    echo "
                      ";
                    // line 399
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 399) == "textarea")) {
                        // line 400
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 400);
                        echo "\">
                          <label for=\"input-address-";
                        // line 401
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 401);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"address[";
                        // line 403
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 403);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 403)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) ? ((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 403)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 403)));
                        echo "</textarea>
                            <div id=\"error-address-";
                        // line 404
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 408
                    echo "
                      ";
                    // line 409
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 409) == "file")) {
                        // line 410
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 410);
                        echo "\">
                          <label class=\"col-sm-2 col-form-label\">";
                        // line 411
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 411);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-address-";
                        // line 414
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                              <input type=\"text\" name=\"address[";
                        // line 415
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 415)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415)] ?? null) : null)) ? ((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 415)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415)] ?? null) : null)) : (""));
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "\" class=\"form-control\" readonly/>
                              <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-address-";
                        // line 416
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 416);
                        echo "\" class=\"btn btn-outline-secondary\"";
                        if ( !(($__internal_compile_32 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 416)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 416)] ?? null) : null)) {
                            echo " disabled";
                        }
                        echo "><i class=\"fa-solid fa-download\"></i> ";
                        echo ($context["button_download"] ?? null);
                        echo "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-address-";
                        // line 417
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                        echo "\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_clear"] ?? null);
                        echo "\" class=\"btn btn-outline-danger\"";
                        if ( !(($__internal_compile_33 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 417)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417)] ?? null) : null)) {
                            echo " disabled";
                        }
                        echo "><i class=\"fa-solid fa-eraser\"></i></button>
                            </div>
                            <div id=\"error-address-";
                        // line 419
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 423
                    echo "
                      ";
                    // line 424
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 424) == "date")) {
                        // line 425
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 425);
                        echo "\">
                          <label for=\"input-address-";
                        // line 426
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 426);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 426);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 429
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_34 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 429)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null)) ? ((($__internal_compile_35 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 429)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 429)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 429);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        echo "\" class=\"form-control date\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 432
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 436
                    echo "
                      ";
                    // line 437
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 437) == "time")) {
                        // line 438
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                        echo "\">
                          <label for=\"input-address-";
                        // line 439
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 439);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 442
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 442);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 442)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 442)] ?? null) : null)) ? ((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 442)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 442)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 442)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 442);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 442);
                        echo "\" class=\"form-control time\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 445
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 449
                    echo "
                      ";
                    // line 450
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 450) == "datetime")) {
                        // line 451
                        echo "                        <div class=\"row mb-3 custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451);
                        echo "\">
                          <label for=\"input-address-";
                        // line 452
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                        echo "\" class=\"col-sm-2 col-form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 452);
                        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"address[";
                        // line 455
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 455);
                        echo "]\" value=\"";
                        echo (((($__internal_compile_38 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 455)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 455)] ?? null) : null)) ? ((($__internal_compile_39 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 455)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 455)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 455)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 455);
                        echo "\" id=\"input-address-";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 455);
                        echo "\" class=\"form-control datetime\"/>
                              <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            </div>
                            <div id=\"error-address-";
                        // line 458
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 458);
                        echo "\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                      ";
                    }
                    // line 462
                    echo "
                    ";
                }
                // line 464
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "
                  <div class=\"row mb-3\">
                    <label for=\"input-address-";
            // line 468
            echo ($context["address_row"] ?? null);
            echo "-default\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_default"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"address[";
            // line 471
            echo ($context["address_row"] ?? null);
            echo "][default]\" value=\"1\" id=\"input-address-";
            echo ($context["address_row"] ?? null);
            echo "-default\" class=\"form-check-input\"";
            if (twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 471)) {
                echo " checked";
            }
            echo "/>
                      </div>
                    </div>
                  </div>
                  <input type=\"hidden\" name=\"address[";
            // line 475
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 475);
            echo "\"/>
                </fieldset>
                ";
            // line 477
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 478
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        echo "              <div class=\"text-end\">
                <button type=\"button\" id=\"button-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 480
        echo ($context["button_address_add"] ?? null);
        echo "</button>
              </div>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 482
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            </div>

            <div id=\"tab-payment\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 487
        echo ($context["text_payment_method"] ?? null);
        echo "</legend>
                <div id=\"payment-method\">";
        // line 488
        echo ($context["payment_method"] ?? null);
        echo "</div>
              </fieldset>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 493
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 494
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
              <form id=\"form-history\">
                <fieldset>
                  <legend>";
        // line 498
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 500
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 502
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 506
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
              </form>
            </div>
            <div id=\"tab-transaction\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 513
        echo ($context["text_transaction"] ?? null);
        echo "</legend>
                <div id=\"transaction\">";
        // line 514
        echo ($context["transaction"] ?? null);
        echo "</div>
              </fieldset>
              <form id=\"form-transaction\">
                <fieldset>
                  <legend>";
        // line 518
        echo ($context["text_transaction_add"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-transaction-description\" class=\"col-sm-2 col-form-label\">";
        // line 520
        echo ($context["entry_description"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 522
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-transaction-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-transaction-amount\" class=\"col-sm-2 col-form-label\">";
        // line 526
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 528
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-transaction-amount\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 532
        echo ($context["button_transaction_add"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
              </form>
            </div>
            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 539
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div id=\"reward\">";
        // line 540
        echo ($context["reward"] ?? null);
        echo "</div>
              </fieldset>
              <form id=\"form-reward\">
                <fieldset>
                  <legend>";
        // line 544
        echo ($context["text_reward_add"] ?? null);
        echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-reward-description\" class=\"col-sm-2 col-form-label\">";
        // line 546
        echo ($context["entry_description"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 548
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-reward-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-reward-points\" class=\"col-sm-2 col-form-label\">";
        // line 552
        echo ($context["entry_points"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 554
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-reward-points\" class=\"form-control\"/>
                      <div class=\"form-text\">";
        // line 555
        echo ($context["help_points"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"submit\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 559
        echo ($context["button_reward_add"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
              </form>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 566
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\">";
        // line 567
        echo ($context["ip"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer|customfield&user_token=";
        // line 579
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function (json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

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

\$('#input-customer-group').trigger('change');

var address_row = ";
        // line 603
        echo ($context["address_row"] ?? null);
        echo ";

\$('#button-address').on('click', function (e) {
    e.preventDefault();

    html = '<fieldset id=\"address-row-' + address_row + '\">';
    html += '  <legend>";
        // line 609
        echo ($context["text_address"] ?? null);
        echo " ' + (address_row + 1) + ' <button type=\"button\" onclick=\"\$(\\'#address-row-' + address_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm float-end\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 613
        echo ($context["entry_firstname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 615
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-firstname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-firstname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 621
        echo ($context["entry_lastname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 623
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-lastname\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-lastname\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-company\" class=\"col-sm-2 col-form-label\">";
        // line 629
        echo ($context["entry_company"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 630
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-company\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-address-1\" class=\"col-sm-2 col-form-label\">";
        // line 634
        echo ($context["entry_address_1"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 636
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-address-1\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-address-1\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3\">';
    html += '    <label for=\"input-address-' + address_row + '-address-2\" class=\"col-sm-2 col-form-label\">";
        // line 642
        echo ($context["entry_address_2"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 643
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-address-2\" class=\"form-control\"/></div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-city\" class=\"col-sm-2 col-form-label\">";
        // line 647
        echo ($context["entry_city"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 649
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-city\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-city\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-postcode\" class=\"col-sm-2 col-form-label\">";
        // line 655
        echo ($context["entry_postcode"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 657
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-address-' + address_row + '-postcode\" class=\"form-control\"/>';
    html += '      <div id=\"error-address-' + address_row + '-postcode\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-country\" class=\"col-sm-2 col-form-label\">";
        // line 663
        echo ($context["entry_country"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '       <select name=\"address[' + address_row + '][country_id]\" id=\"input-address-' + address_row + '-country\" data-address-row=\"' + address_row + '\" data-zone-id=\"0\" class=\"form-select\" disabled>';
    html += '         <option value=\"\">";
        // line 666
        echo ($context["text_select"] ?? null);
        echo "</option>';
  ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 668
            echo "    html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 668);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 668), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
        echo "    html += '      </select>';
    html += '      <div id=\"error-address-' + address_row + '-country\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    html += '  <div class=\"row mb-3 required\">';
    html += '    <label for=\"input-address-' + address_row + '-zone\" class=\"col-sm-2 col-form-label\">";
        // line 676
        echo ($context["entry_zone"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\">';
    html += '      <select name=\"address[' + address_row + '][zone_id]\" id=\"input-address-' + address_row + '-zone\" class=\"form-select\" disabled><option value=\"\">";
        // line 678
        echo ($context["text_none"] ?? null);
        echo "</option></select>';
    html += '      <div id=\"error-address-' + address_row + '-zone\" class=\"invalid-feedback\"></div>';
    html += '    </div>';
    html += '  </div>';

    // Custom Fields
  ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 685
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 685) == "address")) {
                // line 686
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 686) == "select")) {
                    // line 687
                    echo "
    html += '<div class=\"row mb-3 custom-field custom-field-";
                    // line 688
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 688);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 689
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 689);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 689), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '    <select name=\"address[' + address_row + '][custom_field][";
                    // line 691
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 691);
                    echo "]\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 691);
                    echo "\" class=\"form-select\">';
    html += '      <option value=\"\">";
                    // line 692
                    echo ($context["text_select"] ?? null);
                    echo "</option>';

  ";
                    // line 694
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 694));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 695
                        echo "    html += '\t\t   <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 695);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 695), "js");
                        echo "</option>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 697
                    echo "
    html += '\t   </select>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 699
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 699);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 703
                echo "
  ";
                // line 704
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 704) == "radio")) {
                    // line 705
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 705);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 706
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 706), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 708
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 708);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 710
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 710));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 711
                        echo "    html += '  \t\t     <div class=\"form-check\">';
    html += '  \t\t       <input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        // line 712
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 712);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 712);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 712);
                        echo "\" class=\"form-check-input\"/>';
    html += '  \t\t       <label for=\"input-custom-value-";
                        // line 713
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 713);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 713), "js");
                        echo "</label>';
    html += '\t\t       </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 716
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 718
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 718);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 722
                echo "
  ";
                // line 723
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 723) == "checkbox")) {
                    // line 724
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 725
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 725), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div id=\"input-address-' + address_row + '-custom-field-";
                    // line 727
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 727);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">';

  ";
                    // line 729
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 729));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 730
                        echo "    html += '      <div class=\"form-check\">';
    html += '        <input type=\"checkbox\" name=\"address[";
                        // line 731
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 731);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 731);
                        echo "\" class=\"form-check-input\"/>';
    html += '        <label for=\"input-custom-value-";
                        // line 732
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 732);
                        echo "\" class=\"form-check-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 732), "js");
                        echo "</label>';
    html += '\t\t   </div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 735
                    echo "
    html += '\t\t </div>';
    html += '    <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 737
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 737);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 741
                echo "
  ";
                // line 742
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 742) == "text")) {
                    // line 743
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 743);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 744
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 744);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 744), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 746
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 746);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 746), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 746), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 746);
                    echo "\" class=\"form-control\"/>';
    html += '  </div>';
    html += '  <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 748
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 748);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '</div>';
  ";
                }
                // line 751
                echo "
  ";
                // line 752
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 752) == "textarea")) {
                    // line 753
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 753);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 754
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 754);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 754), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t   <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 756
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 756);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 756), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 756);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 756), "js");
                    echo "</textarea>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 757
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 757);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 761
                echo "
  ";
                // line 762
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 762) == "file")) {
                    // line 763
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763);
                    echo "\">';
    html += '  <label class=\"col-sm-2 col-form-label\">";
                    // line 764
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 764), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    // line 767
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 768);
                    echo "]\" value=\"\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 768);
                    echo "\" class=\"form-control\" readonly/>';
    html += '      <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    // line 769
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 769);
                    echo "\" class=\"btn btn-outline-secondary\" disabled><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 770
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 770);
                    echo "\" class=\"btn btn-outline-danger\" disabled><i class=\"fa-solid fa-eraser\"></i></button>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 772
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 776
                echo "
  ";
                // line 777
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 777) == "date")) {
                    // line 778
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 778);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 779
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 779), "js");
                    echo "</label>';
    html += '\t <div class=\"col-sm-10\">';
    html += '\t\t <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 782
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 782);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 782), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 782), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 782);
                    echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '\t\t </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 784
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 784);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '\t </div>';
    html += '</div>';
  ";
                }
                // line 788
                echo "
  ";
                // line 789
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 789) == "time")) {
                    // line 790
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 790);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 791
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 791);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 791), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '\t\t   <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 794
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 794);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 794), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 794), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 794);
                    echo "\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 796
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 796);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 800
                echo "
  ";
                // line 801
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 801) == "datetime")) {
                    // line 802
                    echo "    html += '<div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 802);
                    echo "\">';
    html += '  <label for=\"input-address-' + address_row + '-custom-field-";
                    // line 803
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 803);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 803), "js");
                    echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"input-group\">';
    html += '      <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 806
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 806);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 806), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 806), "js");
                    echo "\" id=\"input-address-' + address_row + '-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 806);
                    echo "\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>';
    html += '    </div>';
    html += '\t   <div id=\"error-address-' + address_row + '-custom-field-";
                    // line 808
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 808);
                    echo "\" class=\"invalid-feedback\"></div>';
    html += '  </div>';
    html += '</div>';
  ";
                }
                // line 812
                echo "
  ";
            }
            // line 814
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "
    html += '<div class=\"row mb-3\">';
    html += '  <label for=\"input-address-' + address_row + '-default\" class=\"col-sm-2 col-form-label\">";
        // line 817
        echo ($context["entry_default"] ?? null);
        echo "</label>';
    html += '  <div class=\"col-sm-10\">';
    html += '    <div class=\"form-check\"><input type=\"radio\" name=\"default\" value=\"' + address_row + '\" id=\"input-address-' + address_row + '-default\" class=\"form-check-label\"/></div>';
    html += '  </div>';
    html += '</div>';

    html += '</fieldset>';

    \$(this).parent().before(html);

    \$('#input-customer-group').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    address_row++;
});

var zone = [];

\$('#tab-address').on('change', 'select[name\$=\\'[country_id]\\']', function () {
    var element = this;

    \$(element).prop('disabled', true);

    \$('select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

    if (!zone[\$(element).val()]) {
        \$.ajax({
            url: 'index.php?route=localisation/country|country&user_token=";
        // line 845
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                zone[\$(element).val()] = json;

                if (json['postcode_required'] == '1') {
                    \$('#input-address-' + \$(element).attr('data-address-row') + '-postcode').parent().parent().addClass('required');
                } else {
                    \$('#input-address-' + \$(element).attr('data-address-row') + '-postcode').parent().parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 862
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                            html += ' selected=\"selected\"';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\">";
        // line 875
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').html(html);

                \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

                \$(element).prop('disabled', false);

                \$('#tab-address select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        html = '<option value=\"\">";
        // line 891
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (zone[\$(element).val()]['zone'] && zone[\$(element).val()]['zone'] != '') {
            for (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
                html += '<option value=\"' + zone[\$(element).val()]['zone'][i]['zone_id'] + '\"';

                if (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
                    html += ' selected=\"selected\"';
                }

                html += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
            }
        } else {
            html += '<option value=\"0\">";
        // line 904
        echo ($context["text_none"] ?? null);
        echo "</option>';
        }

        \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').html(html);

        \$('#tab-address select[name=\\'address[' + \$(element).attr('data-address-row') + '][zone_id]\\']').prop('disabled', false);

        \$(element).prop('disabled', false);

        \$('#tab-address select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
    }
});

\$('#tab-address select[name\$=\\'[country_id]\\']:first').trigger('change');

\$('#payment-method').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer|getPayment&user_token=";
        // line 950
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer|disablePayment&user_token=";
        // line 965
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer|getPayment&user_token=";
        // line 984
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer|addHistory&user_token=";
        // line 1003
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: \$('#form-history').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-history').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-history').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer|history&user_token=";
        // line 1024
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

                \$('#input-comment').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#form-transaction').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer|addTransaction&user_token=";
        // line 1045
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: \$('#form-transaction').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-transaction').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-transaction').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer|transaction&user_token=";
        // line 1066
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction-amount').val('');
                \$('#input-transaction-description').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#form-reward').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer|addReward&user_token=";
        // line 1088
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: \$('#form-reward').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-reward').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-reward').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer|reward&user_token=";
        // line 1109
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward-points').val('');
                \$('#input-reward-description').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});
//--></script>
";
        // line 1127
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2747 => 1127,  2726 => 1109,  2702 => 1088,  2677 => 1066,  2653 => 1045,  2627 => 1024,  2603 => 1003,  2581 => 984,  2559 => 965,  2541 => 950,  2492 => 904,  2476 => 891,  2457 => 875,  2441 => 862,  2421 => 845,  2390 => 817,  2386 => 815,  2380 => 814,  2376 => 812,  2369 => 808,  2358 => 806,  2350 => 803,  2345 => 802,  2343 => 801,  2340 => 800,  2333 => 796,  2322 => 794,  2314 => 791,  2309 => 790,  2307 => 789,  2304 => 788,  2297 => 784,  2286 => 782,  2278 => 779,  2273 => 778,  2271 => 777,  2268 => 776,  2261 => 772,  2254 => 770,  2248 => 769,  2242 => 768,  2232 => 767,  2226 => 764,  2221 => 763,  2219 => 762,  2216 => 761,  2209 => 757,  2199 => 756,  2192 => 754,  2187 => 753,  2185 => 752,  2182 => 751,  2176 => 748,  2165 => 746,  2158 => 744,  2153 => 743,  2151 => 742,  2148 => 741,  2141 => 737,  2137 => 735,  2126 => 732,  2116 => 731,  2113 => 730,  2109 => 729,  2104 => 727,  2099 => 725,  2094 => 724,  2092 => 723,  2089 => 722,  2082 => 718,  2078 => 716,  2067 => 713,  2059 => 712,  2056 => 711,  2052 => 710,  2047 => 708,  2042 => 706,  2037 => 705,  2035 => 704,  2032 => 703,  2025 => 699,  2021 => 697,  2010 => 695,  2006 => 694,  2001 => 692,  1995 => 691,  1988 => 689,  1984 => 688,  1981 => 687,  1978 => 686,  1975 => 685,  1971 => 684,  1962 => 678,  1957 => 676,  1949 => 670,  1938 => 668,  1934 => 667,  1930 => 666,  1924 => 663,  1915 => 657,  1910 => 655,  1901 => 649,  1896 => 647,  1889 => 643,  1885 => 642,  1876 => 636,  1871 => 634,  1864 => 630,  1860 => 629,  1851 => 623,  1846 => 621,  1837 => 615,  1832 => 613,  1823 => 609,  1814 => 603,  1787 => 579,  1772 => 567,  1768 => 566,  1758 => 559,  1751 => 555,  1747 => 554,  1742 => 552,  1735 => 548,  1730 => 546,  1725 => 544,  1718 => 540,  1714 => 539,  1704 => 532,  1697 => 528,  1692 => 526,  1685 => 522,  1680 => 520,  1675 => 518,  1668 => 514,  1664 => 513,  1654 => 506,  1647 => 502,  1642 => 500,  1637 => 498,  1630 => 494,  1626 => 493,  1618 => 488,  1614 => 487,  1606 => 482,  1601 => 480,  1598 => 479,  1592 => 478,  1590 => 477,  1583 => 475,  1570 => 471,  1562 => 468,  1558 => 466,  1551 => 464,  1547 => 462,  1538 => 458,  1522 => 455,  1512 => 452,  1507 => 451,  1505 => 450,  1502 => 449,  1493 => 445,  1477 => 442,  1467 => 439,  1462 => 438,  1460 => 437,  1457 => 436,  1448 => 432,  1432 => 429,  1422 => 426,  1417 => 425,  1415 => 424,  1412 => 423,  1403 => 419,  1390 => 417,  1378 => 416,  1366 => 415,  1354 => 414,  1348 => 411,  1343 => 410,  1341 => 409,  1338 => 408,  1329 => 404,  1315 => 403,  1306 => 401,  1301 => 400,  1299 => 399,  1296 => 398,  1287 => 394,  1273 => 393,  1264 => 391,  1259 => 390,  1257 => 389,  1254 => 388,  1245 => 384,  1242 => 383,  1219 => 380,  1216 => 379,  1212 => 378,  1206 => 377,  1201 => 375,  1196 => 374,  1194 => 373,  1191 => 372,  1182 => 368,  1179 => 367,  1156 => 364,  1153 => 363,  1149 => 362,  1143 => 361,  1138 => 359,  1133 => 358,  1131 => 357,  1128 => 356,  1119 => 352,  1116 => 351,  1101 => 349,  1097 => 348,  1093 => 347,  1083 => 346,  1074 => 344,  1069 => 343,  1067 => 342,  1064 => 341,  1061 => 340,  1057 => 339,  1050 => 335,  1044 => 334,  1037 => 332,  1030 => 328,  1027 => 327,  1012 => 325,  1008 => 324,  1004 => 323,  994 => 322,  987 => 320,  980 => 316,  970 => 315,  963 => 313,  956 => 309,  946 => 308,  939 => 306,  926 => 302,  919 => 300,  912 => 296,  902 => 295,  895 => 293,  882 => 289,  875 => 287,  868 => 283,  858 => 282,  851 => 280,  843 => 275,  833 => 274,  826 => 272,  813 => 268,  808 => 267,  803 => 266,  801 => 265,  792 => 259,  785 => 257,  778 => 253,  768 => 248,  761 => 244,  751 => 239,  744 => 235,  739 => 233,  728 => 227,  723 => 225,  713 => 220,  708 => 218,  703 => 216,  699 => 214,  693 => 213,  689 => 211,  682 => 207,  670 => 204,  662 => 201,  657 => 200,  655 => 199,  652 => 198,  645 => 194,  633 => 191,  625 => 188,  620 => 187,  618 => 186,  615 => 185,  608 => 181,  596 => 178,  588 => 175,  583 => 174,  581 => 173,  578 => 172,  571 => 168,  559 => 165,  549 => 164,  541 => 163,  531 => 162,  524 => 158,  519 => 157,  517 => 156,  514 => 155,  507 => 151,  497 => 150,  490 => 148,  485 => 147,  483 => 146,  480 => 145,  473 => 141,  463 => 140,  456 => 138,  451 => 137,  449 => 136,  446 => 135,  439 => 131,  436 => 130,  415 => 127,  412 => 126,  408 => 125,  404 => 124,  399 => 122,  394 => 121,  392 => 120,  389 => 119,  382 => 115,  379 => 114,  358 => 111,  355 => 110,  351 => 109,  347 => 108,  342 => 106,  337 => 105,  335 => 104,  332 => 103,  325 => 99,  322 => 98,  307 => 96,  303 => 95,  299 => 94,  293 => 93,  286 => 91,  281 => 90,  279 => 89,  276 => 88,  274 => 87,  271 => 86,  267 => 85,  258 => 81,  253 => 79,  247 => 78,  238 => 74,  233 => 72,  223 => 67,  218 => 65,  208 => 60,  203 => 58,  197 => 54,  182 => 52,  178 => 51,  172 => 48,  166 => 44,  151 => 42,  147 => 41,  141 => 38,  136 => 36,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  87 => 16,  76 => 14,  72 => 13,  67 => 11,  61 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_form.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\customer\\customer_form.twig");
    }
}
