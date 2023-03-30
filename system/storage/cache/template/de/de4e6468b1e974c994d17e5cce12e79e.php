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
<div id=\"account-register\" class=\"auth-modal\">
  <div class=\"relative content bg-white sm:w-[770px] w-full sm:px-[36px] sm:py-[30] px-[27px] py-[22px]\">
    <a class=\"absolute top-0 right-0 block p-[10px]\" href=\"/\">
      <svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <circle cx=\"12.5\" cy=\"12.5\" r=\"12\" stroke=\"#080E16\"/>
        <path d=\"M6.5 6.5L18.5 18.5M6.5 18.5L18.5 6.5\" stroke=\"#080E16\"/>
      </svg>
    </a>
    <div class=\"sm:flex justify-center sm:text-[40px] text-[30px] font-bold uppercase\">
      <div class=\"text-orange\">REGISTER</div>
        &nbsp;YOUR ACCOUNT
    </div>
    <form id=\"form-register\" action=\"";
        // line 14
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" class=\"sm:mt-[28px] mt-[22px]\">
      <fieldset id=\"account\">
        ";
        // line 16
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 17
            echo "        <div class=\"mb-3 required\">
          <label class=\"\">";
            // line 18
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
          <div class=\"w-full\">
            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 22
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </select>
          </div>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"mb-3 required\">
          <label for=\"input-firstname\" class=\"\">";
        // line 29
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
          <div class=\"w-full\">
            <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"w-full\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"mb-3 required\">
          <label for=\"input-lastname\" class=\"\">";
        // line 36
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
          <div class=\"w-full\">
            <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"w-full\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"mb-3 required\">
          <label for=\"input-email\" class=\"\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
          <div class=\"w-full\">
            <input type=\"email\" name=\"email\" value=\"";
        // line 45
        echo ($context["initial_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\"/>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
        </div>

        ";
        // line 50
        if (($context["config_telephone_display"] ?? null)) {
            // line 51
            echo "          <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
            <label for=\"input-telephone\" class=\"\">";
            // line 52
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
            <div class=\"w-full\">
              <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 54
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"w-full\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 61
            echo "
          ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 62) == "select")) {
                // line 63
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                echo "\">
              <label for=\"input-custom-field-";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 64);
                echo "</label>
              <div class=\"w-full\">
                <select name=\"custom_field[";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "\" class=\"form-select\">
                  <option value=\"\">";
                // line 67
                echo ($context["text_select"] ?? null);
                echo "</option>
                  ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 69
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                </select>
                <div id=\"error-custom-field-";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 76
            echo "
          ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "radio")) {
                // line 78
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                echo "\">
              <label class=\"\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 79);
                echo "</label>
              <div class=\"w-full\">
                <div id=\"input-custom-field-";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">
                  ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 83
                    echo "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"custom_field[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                    echo "</label>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                </div>
                <div id=\"error-custom-field-";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 92
            echo "
          ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "checkbox")) {
                // line 94
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\">
              <label class=\"\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                echo "</label>
              <div class=\"w-full\">
                <div id=\"input-custom-field-";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\">
                  ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"custom_field[";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                    echo "</label>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                </div>
                <div id=\"error-custom-field-";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 108
            echo "
          ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "text")) {
                // line 110
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\">
              <label for=\"input-custom-field-";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                echo "</label>
              <div class=\"w-full\">
                <input type=\"text\" name=\"custom_field[";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 113);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"w-full\"/>
                <div id=\"error-custom-field-";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 118
            echo "
          ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "textarea")) {
                // line 120
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                echo "\">
              <label for=\"input-custom-field-";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                echo "</label>
              <div class=\"w-full\">
                <textarea name=\"custom_field[";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"w-full\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                echo "</textarea>
                <div id=\"error-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 128
            echo "
          ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "file")) {
                // line 130
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "\">
              <label class=\"\">";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                echo "</label>
              <div class=\"w-full\">
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 134
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "]\" value=\"\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "\"/>
                </div>
                <div id=\"error-custom-field-";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 141
            echo "
          ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 142) == "date")) {
                // line 143
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\">
              <label for=\"input-custom-field-";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                echo "</label>
              <div class=\"w-full\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"custom_field[";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 147);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\" class=\"form-control date\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-custom-field-";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 154
            echo "
          ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 155) == "time")) {
                // line 156
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\">
              <label for=\"input-custom-field-";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 157);
                echo "</label>
              <div class=\"w-full\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"custom_field[";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 160);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\" class=\"form-control time\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-custom-field-";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 167
            echo "
          ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "datetime")) {
                // line 169
                echo "            <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\">
              <label for=\"input-custom-field-";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                echo "</label>
              <div class=\"w-full\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"custom_field[";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 173);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-control datetime\"/>
                  <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
                <div id=\"error-custom-field-";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 180
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "      </fieldset>

      <fieldset>
        <div class=\"mb-3 required\">
          <label for=\"input-password\" class=\"\">";
        // line 186
        echo ($context["entry_password"] ?? null);
        echo "</label>
          <div class=\"w-full\">
            <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 188
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"w-full\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
      <fieldset class=\"hidden\">
        <legend>";
        // line 194
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
        <div class=\"row mb-3\">
          <label class=\"\">";
        // line 196
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
          <div class=\"w-full\">
            <div class=\"form-check form-check-inline\">
              <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\"/>
              <label for=\"input-newsletter-yes\" class=\"form-check-label\">";
        // line 200
        echo ($context["text_yes"] ?? null);
        echo "</label>
            </div>
            <div class=\"form-check form-check-inline\">
              <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\" checked/>
              <label for=\"input-newsletter-no\" class=\"form-check-label\">";
        // line 204
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
        </div>
      </fieldset>
      ";
        // line 209
        echo ($context["captcha"] ?? null);
        echo "

      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"\">
          ";
        // line 213
        if (($context["text_agree"] ?? null)) {
            // line 214
            echo "            <div class=\"flex items-center gap-[10px]\">
              <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"\"/>
              <label class=\"\">";
            // line 216
            echo ($context["text_agree"] ?? null);
            echo "</label>
            </div>
          ";
        }
        // line 219
        echo "          <button type=\"submit\" class=\"mt-[12px] w-[170px] font-bold bg-indigo py-[12px] text-white uppercase\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
        </div>
      </div>
    </form>
  </div>
</div>
<style>
  #alert{
    top: 20px !important;
  }
</style>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 233
        echo ($context["language"] ?? null);
        echo "',
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
            // console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 257
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
        return array (  664 => 257,  637 => 233,  619 => 219,  613 => 216,  609 => 214,  607 => 213,  600 => 209,  592 => 204,  585 => 200,  578 => 196,  573 => 194,  564 => 188,  559 => 186,  553 => 182,  546 => 180,  539 => 176,  527 => 173,  519 => 170,  514 => 169,  512 => 168,  509 => 167,  502 => 163,  490 => 160,  482 => 157,  477 => 156,  475 => 155,  472 => 154,  465 => 150,  453 => 147,  445 => 144,  440 => 143,  438 => 142,  435 => 141,  428 => 137,  421 => 135,  409 => 134,  403 => 131,  398 => 130,  396 => 129,  393 => 128,  386 => 124,  376 => 123,  369 => 121,  364 => 120,  362 => 119,  359 => 118,  352 => 114,  342 => 113,  335 => 111,  330 => 110,  328 => 109,  325 => 108,  318 => 104,  315 => 103,  298 => 100,  295 => 99,  291 => 98,  287 => 97,  282 => 95,  277 => 94,  275 => 93,  272 => 92,  265 => 88,  262 => 87,  245 => 84,  242 => 83,  238 => 82,  234 => 81,  229 => 79,  224 => 78,  222 => 77,  219 => 76,  212 => 72,  209 => 71,  198 => 69,  194 => 68,  190 => 67,  184 => 66,  177 => 64,  172 => 63,  170 => 62,  167 => 61,  163 => 60,  160 => 59,  152 => 54,  147 => 52,  140 => 51,  138 => 50,  128 => 45,  123 => 43,  115 => 38,  110 => 36,  102 => 31,  97 => 29,  94 => 28,  88 => 24,  73 => 22,  69 => 21,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/register.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\register.twig");
    }
}
