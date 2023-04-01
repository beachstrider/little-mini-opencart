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
        echo "<form id=\"form-register\" class=\"sm:mt-[38px] mt-[28px]\">
\t<div class=\"flex justify-between sm:text-[16px] text-[12px]\">
\t\t<div>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t<div class=\"flex flex-col items-end\">
\t\t\t<p>";
        // line 5
        echo ($context["text_login"] ?? null);
        echo "</p>
\t\t\t<a href=\"";
        // line 6
        echo ($context["login"] ?? null);
        echo "\" class=\"block border border-dark px-[16px] py-[3px] mt-[6px]\">";
        echo ($context["text_btn_login"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
\t<div class=\"sm:jt-[20px] mt-[15px] border-t border-darkBlue sm:pt-[20px] sm:pb-[80px] pt-[15px] pb:-[60px] flex flex-col gap-[14px]\">
\t\t<div class=\"row hidden\">
\t\t\t";
        // line 11
        if (($context["config_checkout_guest"] ?? null)) {
            // line 12
            echo "\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\" ";
            // line 14
            if (($context["account"] ?? null)) {
                echo " checked ";
            }
            echo "/>
\t\t\t\t\t\t<label for=\"input-register\" class=\"form-check-label\">";
            // line 15
            echo ($context["text_register"] ?? null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t<input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\" ";
            // line 18
            if ( !($context["account"] ?? null)) {
                echo " checked ";
            }
            echo "/>
\t\t\t\t\t\t<label for=\"input-guest\" class=\"form-check-label\">";
            // line 19
            echo ($context["text_guest"] ?? null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t<div class=\"col mb-3";
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) {
            echo " d-none";
        }
        echo "\">
\t\t\t\t<label class=\"form-label\">";
        // line 24
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 27
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 27);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 27) == ($context["customer_group_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 27);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 34
        echo ($context["entry_firstname"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 38
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"...\" id=\"input-firstname\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-firstname\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">C/O (care of):<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"c_o\" value=\"\" placeholder=\"...\" id=\"input-c_o\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-c_o\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-payment-address-1\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 54
        echo ($context["entry_address_1"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"payment_address_1\" value=\"";
        // line 58
        echo ($context["payment_address_1"] ?? null);
        echo "\" placeholder=\"...\" id=\"input-payment-address-1\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-payment-address-1\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-payment-postcode\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 64
        echo ($context["entry_postcode_city"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required grid grid-cols-5 gap-[30px]\">
\t\t\t\t<div class=\"col-span-3\">
\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 69
        echo ($context["payment_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t<input type=\"text\" name=\"payment_city\" value=\"";
        // line 72
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"error-payment-postcode\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-payment-country\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 79
        echo ($context["entry_country"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<select name=\"payment_country_id\" id=\"input-payment-country\" class=\"w-full bg-darkBlue text-white\">
\t\t\t\t\t<option value=\"\">";
        // line 84
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 86
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 86);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 86) == ($context["payment_country_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 86);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div id=\"error-payment-country\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-email\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 94
        echo ($context["entry_email"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"entry_email\" value=\"";
        // line 98
        echo ($context["entry_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " ...\" id=\"input-email\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-email\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]";
        // line 102
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-payment-postcode\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 104
        echo ($context["entry_telephone"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required grid grid-cols-4 gap-[30px]\">
\t\t\t\t<div class=\"col-span-1\">
\t\t\t\t\t<input type=\"text\" name=\"telephone_code\" value=\"";
        // line 109
        echo ($context["telephone_code"] ?? null);
        echo "\" placeholder=\"+45\" id=\"input-telephone-code\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-span-3\">
\t\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"";
        // line 112
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo " ...\" id=\"input-telephone\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"error-telephone\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-password\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 119
        echo ($context["text_your_password"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"password\" value=\"";
        // line 123
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo " ...\" id=\"input-password\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-password\" class=\"invalid-feedback flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\"></div>
\t\t\t<div class=\"col-span-3 required flex items-center\">
\t\t\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"\"/>
\t\t\t\t<div for=\"input-newsletter\" class=\"form-check-label\">";
        // line 131
        echo ($context["entry_newsletter"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"required\">";
        // line 134
        echo ($context["captcha"] ?? null);
        echo "</div>
\t\t<div class=\"mb-3\">
\t\t\t<div class=\"\"></div>
\t\t\t";
        // line 137
        if (($context["text_agree"] ?? null)) {
            // line 138
            echo "\t\t\t\t<div id=\"agree\" class=\"form-check\">
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/>
\t\t\t\t\t<label for=\"input-register-agree\" class=\"form-check-label\">";
            // line 140
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t";
        }
        // line 143
        echo "\t\t</div>
\t\t<button type=\"submit\" id=\"button-register\" class=\"btn btn-primary\">";
        // line 144
        echo ($context["button_continue"] ?? null);
        echo "</button>


\t\t<div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-lastname\" class=\"form-label\">";
        // line 149
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 150
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
\t\t\t\t<div id=\"error-lastname\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-email\" class=\"form-label\">";
        // line 154
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 155
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t<div id=\"error-email\" class=\"invalid-feedback\"></div>
\t\t\t</div>

\t\t\t";
        // line 159
        if (($context["config_telephone_display"] ?? null)) {
            // line 160
            echo "\t\t\t\t<div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
\t\t\t\t\t<label for=\"input-telephone\" class=\"form-label\">";
            // line 161
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"";
            // line 162
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-telephone\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 166
        echo "
\t\t\t";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 168
            echo "
\t\t\t\t";
            // line 169
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 169) == "account")) {
                // line 170
                echo "
\t\t\t\t\t";
                // line 171
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 171) == "select")) {
                    // line 172
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 174);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "]\" id=\"input-customer-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 175
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 176));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177);
                        echo "\" ";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 177);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 183
                echo "
\t\t\t\t\t";
                // line 184
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "radio")) {
                    // line 185
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-custom-field-";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 188));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 190
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 190);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 190);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 190);
                        echo "\" class=\"form-check-input\" ";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 190) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)))) {
                            echo " checked ";
                        }
                        echo "/>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 191);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 191);
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 198
                echo "
\t\t\t\t\t";
                // line 199
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 199) == "checkbox")) {
                    // line 200
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    echo "\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 201);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-custom-field-";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 203
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 203));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 204
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205);
                        echo "\" class=\"form-check-input\" ";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null)))) {
                            echo " checked ";
                        }
                        echo "/>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-custom-value-";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 206);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 206);
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 213
                echo "
\t\t\t\t\t";
                // line 214
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 214) == "text")) {
                    // line 215
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 216);
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 217);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 217);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 217);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 221
                echo "
\t\t\t\t\t";
                // line 222
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 222) == "textarea")) {
                    // line 223
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 224);
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 225);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
                    // line 226
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                        // line 227
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 229
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 229);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 235
                echo "
\t\t\t\t\t";
                // line 236
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 236) == "file")) {
                    // line 237
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 238);
                    echo "</label>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 240
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                    echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-upload\"></i>
\t\t\t\t\t\t\t\t\t";
                    // line 242
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 243);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                    echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 248
                echo "
\t\t\t\t\t";
                // line 249
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 249) == "date")) {
                    // line 250
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 251);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 253);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 253);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                    echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 261
                echo "
\t\t\t\t\t";
                // line 262
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 262) == "time")) {
                    // line 263
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 264);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 266);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 266);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                    echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 274
                echo "
\t\t\t\t\t";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 275) == "datetime")) {
                    // line 276
                    echo "\t\t\t\t\t\t<div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-custom-field-";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 279
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 279);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 279);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 279);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                    echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-custom-field-";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 287
                echo "
\t\t\t\t";
            }
            // line 289
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "\t\t</div>
\t</div>

\t";
        // line 293
        if (($context["config_checkout_address"] ?? null)) {
            // line 294
            echo "\t\t<div>
\t\t\t<legend>";
            // line 295
            echo ($context["text_payment_address"] ?? null);
            echo "</legend>
\t\t\t<div class=\"row row-cols-1 row-cols-md-2\">
\t\t\t\t<div class=\"col mb-3\">
\t\t\t\t\t<label for=\"input-payment-company\" class=\"form-label\">";
            // line 298
            echo ($context["entry_company"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"payment_company\" value=\"";
            // line 299
            echo ($context["payment_company"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 302
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"payment_address_1\" value=\"";
            // line 303
            echo ($context["payment_address_1"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3\">
\t\t\t\t\t<label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 307
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"payment_address_2\" value=\"";
            // line 308
            echo ($context["payment_address_2"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-payment-city\" class=\"form-label\">";
            // line 311
            echo ($context["entry_city"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"payment_city\" value=\"";
            // line 312
            echo ($context["payment_city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 316
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"payment_postcode\" value=\"";
            // line 317
            echo ($context["payment_postcode"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-payment-country\" class=\"form-label\">";
            // line 321
            echo ($context["entry_country"] ?? null);
            echo "</label>
\t\t\t\t\t<select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
\t\t\t\t\t\t<option value=\"\">";
            // line 323
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 325
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 325);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 325) == ($context["payment_country_id"] ?? null))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 325);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "\t\t\t\t\t</select>
\t\t\t\t\t<div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-payment-zone\" class=\"form-label\">";
            // line 331
            echo ($context["entry_zone"] ?? null);
            echo "</label>
\t\t\t\t\t<select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            // line 332
            echo ($context["payment_zone_id"] ?? null);
            echo "\"></select>
\t\t\t\t\t<div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 336
                echo "
\t\t\t\t\t";
                // line 337
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 337) == "address")) {
                    // line 338
                    echo "
\t\t\t\t\t\t";
                    // line 339
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 339) == "select")) {
                        // line 340
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 340)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 340);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 341
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 341);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 341);
                        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"payment_custom_field[";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 342);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 342);
                        echo "]\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 342);
                        echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 343
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                        // line 344
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 344));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 345
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 345);
                            echo "\" ";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 345)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 345) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 345)] ?? null) : null)))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 345);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 347
                        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 348
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 348);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 351
                    echo "
\t\t\t\t\t\t";
                    // line 352
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 352) == "radio")) {
                        // line 353
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 353)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 353);
                        echo "\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">";
                        // line 354
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 354);
                        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field-";
                        // line 355
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 355);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 356
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 356));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 357
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_custom_field[";
                            // line 358
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 358);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 358);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 358);
                            echo "\" class=\"form-check-input\" ";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 358) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358)] ?? null) : null)))) {
                                echo " checked ";
                            }
                            echo "/>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-value-";
                            // line 359
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 359);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 359);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 362
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 363
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 366
                    echo "
\t\t\t\t\t\t";
                    // line 367
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 367) == "checkbox")) {
                        // line 368
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 368)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 368);
                        echo "\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">";
                        // line 369
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 369);
                        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field-";
                        // line 370
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 371
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 371));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 372
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 373
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 373);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373);
                            echo "\" class=\"form-check-input\" ";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 373), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373)] ?? null) : null)))) {
                                echo " checked ";
                            }
                            echo "/>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-value-";
                            // line 374
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 374);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 374);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 377
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 378
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 378);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 381
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 381) == "text")) {
                        // line 382
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 382)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 382);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 383);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 383);
                        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_custom_field[";
                        // line 384
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 384);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 384);
                        echo "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 384)] ?? null) : null)) {
                            echo (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 384)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 384);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 384);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 384);
                        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 385
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 385);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 388
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 388) == "textarea")) {
                        // line 389
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 389)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 389);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 390
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 390);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 390);
                        echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"payment_custom_field[";
                        // line 391
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 391);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 391);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
                        // line 392
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 392)] ?? null) : null)) {
                            // line 393
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393)] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 395
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 395);
                            echo "
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 397
                        echo "\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 398
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 401
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 401) == "file")) {
                        // line 402
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 402)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                        echo "\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">";
                        // line 403
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 403);
                        echo "</label>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 405
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" data-oc-target=\"#input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                        echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                        // line 407
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_custom_field[";
                        // line 408
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 408);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                        echo "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408)] ?? null) : null)) {
                            echo (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408)] ?? null) : null);
                        }
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                        echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 410
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 410);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 413
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 413) == "date")) {
                        // line 414
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 414)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 415
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 415);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_custom_field[";
                        // line 417
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 417);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                        echo "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417)] ?? null) : null)) {
                            echo (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 417);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 417);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                        echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 422
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 425
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 425) == "time")) {
                        // line 426
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 426)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 426);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 427
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 427);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_custom_field[";
                        // line 429
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 429);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        echo "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null)) {
                            echo (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 429);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 429);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                        echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 434
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 434);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 437
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 437) == "datetime")) {
                        // line 438
                        echo "\t\t\t\t\t\t\t<div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 438)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                        echo "\">
\t\t\t\t\t\t\t\t<label for=\"input-payment-custom-field-";
                        // line 439
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 439);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 439);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_custom_field[";
                        // line 441
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 441);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                        echo "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null)) {
                            echo (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 441);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 441);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                        echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"error-payment-custom-field-";
                        // line 446
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 446);
                        echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 449
                    echo "\t\t\t\t\t";
                }
                // line 450
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "\t\t\t\t";
            if (($context["shipping_required"] ?? null)) {
                // line 452
                echo "\t\t\t\t\t<div class=\"col mb-3\">
\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/>
\t\t\t\t\t\t\t<label for=\"input-address-match\" class=\"form-check-label\">";
                // line 455
                echo ($context["entry_match"] ?? null);
                echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 459
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 462
        echo "
\t<div id=\"shipping-address\" style=\"display: ";
        // line 463
        if ( !($context["config_checkout_address"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
\t\t<legend>";
        // line 464
        echo ($context["text_shipping_address"] ?? null);
        echo "</legend>
\t\t<div class=\"row row-cols-1 row-cols-md-2\">
\t\t\t";
        // line 466
        if (($context["config_checkout_address"] ?? null)) {
            // line 467
            echo "\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 468
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"shipping_firstname\" value=\"";
            // line 469
            echo ($context["shipping_firstname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t<label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 473
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"shipping_lastname\" value=\"";
            // line 474
            echo ($context["shipping_lastname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
\t\t\t\t\t<div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 478
        echo "\t\t\t<div class=\"col mb-3\">
\t\t\t\t<label for=\"input-shipping-company\" class=\"form-label\">";
        // line 479
        echo ($context["entry_company"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"shipping_company\" value=\"";
        // line 480
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 483
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 484
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
\t\t\t\t<div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t<div class=\"col mb-3\">
\t\t\t\t<label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 488
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"shipping_address_2\" value=\"";
        // line 489
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-shipping-city\" class=\"form-label\">";
        // line 492
        echo ($context["entry_city"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"shipping_city\" value=\"";
        // line 493
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
\t\t\t\t<div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 497
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 498
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
\t\t\t\t<div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-shipping-country\" class=\"form-label\">";
        // line 502
        echo ($context["entry_country"] ?? null);
        echo "</label>
\t\t\t\t<select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
\t\t\t\t\t<option value=\"\">";
        // line 504
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 506
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 506);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 506) == ($context["shipping_country_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 506);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "\t\t\t\t</select>
\t\t\t\t<div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t<label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 512
        echo ($context["entry_zone"] ?? null);
        echo "</label>
\t\t\t\t<select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        // line 513
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
\t\t\t\t<div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
\t\t\t</div>
\t\t\t";
        // line 516
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 517
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 517) == "address")) {
                // line 518
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 518) == "select")) {
                    // line 519
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 519)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 520
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 520);
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"custom_field[";
                    // line 521
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 521);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 521);
                    echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 522
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 523
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 523));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 524
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 524);
                        echo "\" ";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 524) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524)] ?? null) : null)))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 524);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 526
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 527
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 527);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 530
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 530) == "radio")) {
                    // line 531
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 531)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 531);
                    echo "\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 532
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 532);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-shipping-custom-field-";
                    // line 533
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 534
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 534));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 535
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 536
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 536);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 536);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 536);
                        echo "\" class=\"form-check-input\" ";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 536), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536)] ?? null) : null)))) {
                            echo " checked ";
                        }
                        echo "/>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-shipping-custom-value-";
                        // line 537
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 537);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 537);
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 540
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 541
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 541);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 544
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 544) == "checkbox")) {
                    // line 545
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 545)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 545);
                    echo "\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 546
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 546);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-shipping-custom-field-";
                    // line 547
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 548
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 548));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 549
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 550
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 550);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 550);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 550);
                        echo "\" class=\"form-check-input\" ";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 550), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550)] ?? null) : null)))) {
                            echo " checked ";
                        }
                        echo "/>
\t\t\t\t\t\t\t\t\t\t<label for=\"input-shipping-custom-value-";
                        // line 551
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 551);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 551);
                        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 554
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 555
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 555);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 558
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 558) == "text")) {
                    // line 559
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 559)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 560
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 560);
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 561
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 561);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561);
                    echo "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561)] ?? null) : null)) {
                        echo (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 561);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 561);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 562
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 565
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 565) == "textarea")) {
                    // line 566
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 566)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 567
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 567);
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                    // line 568
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 568);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                    echo "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null)) {
                        echo (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 568);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 568);
                    echo "</textarea>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 569
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 569);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 572
                echo "
\t\t\t\t\t";
                // line 573
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 573) == "file")) {
                    // line 574
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 574)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\">
\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 575
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 575);
                    echo "</label>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 577
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    echo "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-upload\"></i>
\t\t\t\t\t\t\t\t\t";
                    // line 579
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 580
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 580);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    echo "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null)) {
                        echo (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580)] ?? null) : null);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    echo "\"/>
\t\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 581
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 581);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 585
                echo "
\t\t\t\t\t";
                // line 586
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 586) == "date")) {
                    // line 587
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 587)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 587);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 588
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 588);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 588);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 590
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 590);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    echo "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null)) {
                        echo (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 590);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 590);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 595
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 595);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 598
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 598) == "time")) {
                    // line 599
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 599)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 600
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 600);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 600);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 602
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 602);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                    echo "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null)) {
                        echo (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 602);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 602);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                    echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 607
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 607);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 610
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 610) == "datetime")) {
                    // line 611
                    echo "\t\t\t\t\t\t<div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 611)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\">
\t\t\t\t\t\t\t<label for=\"input-shipping-custom-field-";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 612);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                    // line 614
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 614);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614);
                    echo "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614)] ?? null) : null)) {
                        echo (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 614);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 614);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 614);
                    echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"error-shipping-custom-field-";
                    // line 619
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 619);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 622
                echo "\t\t\t\t";
            }
            // line 623
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 624
        echo "\t\t</div>
\t</div>
\t<div id class=\"row row-cols-1 row-cols-md-2\">
\t\t<div id=\"password\" class=\"col mb-3 required\">
\t\t\t<div>
\t\t\t\t<legend>";
        // line 629
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col mb-3 required\">
\t\t\t\t\t\t<label for=\"input-password\" class=\"form-label\">";
        // line 632
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 633
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
\t\t\t\t\t\t<div id=\"error-password\" class=\"invalid-feedback\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col mb-3 required\">";
        // line 639
        echo ($context["captcha"] ?? null);
        echo "</div>
\t\t<div class=\"col mb-3\">
\t\t\t<div class=\"form-check\">
\t\t\t\t<label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 642
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
\t\t\t</div>
\t\t\t";
        // line 645
        if (($context["text_agree"] ?? null)) {
            // line 646
            echo "\t\t\t\t<div id=\"agree\" class=\"form-check\">
\t\t\t\t\t<label for=\"input-register-agree\" class=\"form-check-label\">";
            // line 647
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/>
\t\t\t\t</div>
\t\t\t";
        }
        // line 651
        echo "\t\t\t<button type=\"submit\" id=\"button-register\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
</form>
<script src=\"/catalog/view/javascript/checkout/register.js\"></script>
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
        return array (  2150 => 651,  2143 => 647,  2140 => 646,  2138 => 645,  2132 => 642,  2126 => 639,  2117 => 633,  2113 => 632,  2107 => 629,  2100 => 624,  2094 => 623,  2091 => 622,  2085 => 619,  2065 => 614,  2058 => 612,  2049 => 611,  2046 => 610,  2040 => 607,  2020 => 602,  2013 => 600,  2004 => 599,  2001 => 598,  1995 => 595,  1975 => 590,  1968 => 588,  1959 => 587,  1957 => 586,  1954 => 585,  1947 => 581,  1935 => 580,  1931 => 579,  1920 => 577,  1915 => 575,  1906 => 574,  1904 => 573,  1901 => 572,  1895 => 569,  1879 => 568,  1873 => 567,  1864 => 566,  1861 => 565,  1855 => 562,  1839 => 561,  1833 => 560,  1824 => 559,  1821 => 558,  1815 => 555,  1812 => 554,  1801 => 551,  1787 => 550,  1784 => 549,  1780 => 548,  1776 => 547,  1772 => 546,  1763 => 545,  1760 => 544,  1754 => 541,  1751 => 540,  1740 => 537,  1726 => 536,  1723 => 535,  1719 => 534,  1715 => 533,  1711 => 532,  1702 => 531,  1699 => 530,  1693 => 527,  1690 => 526,  1675 => 524,  1671 => 523,  1667 => 522,  1659 => 521,  1653 => 520,  1644 => 519,  1641 => 518,  1638 => 517,  1634 => 516,  1628 => 513,  1624 => 512,  1618 => 508,  1603 => 506,  1599 => 505,  1595 => 504,  1590 => 502,  1581 => 498,  1577 => 497,  1568 => 493,  1564 => 492,  1556 => 489,  1552 => 488,  1543 => 484,  1539 => 483,  1531 => 480,  1527 => 479,  1524 => 478,  1515 => 474,  1511 => 473,  1502 => 469,  1498 => 468,  1495 => 467,  1493 => 466,  1488 => 464,  1480 => 463,  1477 => 462,  1472 => 459,  1465 => 455,  1460 => 452,  1457 => 451,  1451 => 450,  1448 => 449,  1442 => 446,  1422 => 441,  1415 => 439,  1406 => 438,  1403 => 437,  1397 => 434,  1377 => 429,  1370 => 427,  1361 => 426,  1358 => 425,  1352 => 422,  1332 => 417,  1325 => 415,  1316 => 414,  1313 => 413,  1307 => 410,  1294 => 408,  1290 => 407,  1279 => 405,  1274 => 403,  1265 => 402,  1262 => 401,  1256 => 398,  1253 => 397,  1247 => 395,  1241 => 393,  1239 => 392,  1229 => 391,  1223 => 390,  1214 => 389,  1211 => 388,  1205 => 385,  1189 => 384,  1183 => 383,  1174 => 382,  1171 => 381,  1165 => 378,  1162 => 377,  1151 => 374,  1137 => 373,  1134 => 372,  1130 => 371,  1126 => 370,  1122 => 369,  1113 => 368,  1111 => 367,  1108 => 366,  1102 => 363,  1099 => 362,  1088 => 359,  1074 => 358,  1071 => 357,  1067 => 356,  1063 => 355,  1059 => 354,  1050 => 353,  1048 => 352,  1045 => 351,  1039 => 348,  1036 => 347,  1021 => 345,  1017 => 344,  1013 => 343,  1005 => 342,  999 => 341,  990 => 340,  988 => 339,  985 => 338,  983 => 337,  980 => 336,  976 => 335,  970 => 332,  966 => 331,  960 => 327,  945 => 325,  941 => 324,  937 => 323,  932 => 321,  923 => 317,  919 => 316,  910 => 312,  906 => 311,  898 => 308,  894 => 307,  885 => 303,  881 => 302,  873 => 299,  869 => 298,  863 => 295,  860 => 294,  858 => 293,  853 => 290,  847 => 289,  843 => 287,  837 => 284,  817 => 279,  810 => 277,  805 => 276,  803 => 275,  800 => 274,  794 => 271,  774 => 266,  767 => 264,  762 => 263,  760 => 262,  757 => 261,  751 => 258,  731 => 253,  724 => 251,  719 => 250,  717 => 249,  714 => 248,  708 => 245,  695 => 243,  691 => 242,  680 => 240,  673 => 238,  668 => 237,  666 => 236,  663 => 235,  657 => 232,  654 => 231,  648 => 229,  642 => 227,  640 => 226,  630 => 225,  624 => 224,  619 => 223,  617 => 222,  614 => 221,  608 => 218,  592 => 217,  586 => 216,  581 => 215,  579 => 214,  576 => 213,  570 => 210,  567 => 209,  556 => 206,  542 => 205,  539 => 204,  535 => 203,  531 => 202,  527 => 201,  522 => 200,  520 => 199,  517 => 198,  511 => 195,  508 => 194,  497 => 191,  483 => 190,  480 => 189,  476 => 188,  472 => 187,  468 => 186,  463 => 185,  461 => 184,  458 => 183,  452 => 180,  449 => 179,  434 => 177,  430 => 176,  426 => 175,  418 => 174,  412 => 173,  407 => 172,  405 => 171,  402 => 170,  400 => 169,  397 => 168,  393 => 167,  390 => 166,  381 => 162,  377 => 161,  370 => 160,  368 => 159,  359 => 155,  355 => 154,  346 => 150,  342 => 149,  334 => 144,  331 => 143,  325 => 140,  321 => 138,  319 => 137,  313 => 134,  307 => 131,  294 => 123,  287 => 119,  275 => 112,  269 => 109,  261 => 104,  254 => 102,  245 => 98,  238 => 94,  230 => 88,  215 => 86,  211 => 85,  207 => 84,  199 => 79,  187 => 72,  179 => 69,  171 => 64,  162 => 58,  155 => 54,  136 => 38,  129 => 34,  122 => 29,  107 => 27,  103 => 26,  98 => 24,  91 => 23,  84 => 19,  78 => 18,  72 => 15,  66 => 14,  62 => 12,  60 => 11,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\register.twig");
    }
}
