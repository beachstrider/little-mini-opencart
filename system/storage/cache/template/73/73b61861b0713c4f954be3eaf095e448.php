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

/* extension/paypal/admin/view/template/payment/paypal.twig */
class __TwigTemplate_3e5de1d8c489ce35684dbf0ac59c0261 extends Template
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
\t\t\t\t<button type=\"submit\" form=\"form_payment\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["breadcrumb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 26
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_payment\" data-oc-toggle=\"ajax\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab_general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 28
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab_order_status\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["text_order_status"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab_checkout_express\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo ($context["text_checkout_express"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item d-none\"><a href=\"#tab_checkout_card\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["text_checkout_card"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab_checkout_message\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["text_checkout_message"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t  
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab_general\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_environment\">";
        // line 38
        echo ($context["entry_environment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_environment\" id=\"input_environment\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if ((($context["environment"] ?? null) == "production")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"production\" selected=\"selected\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\">";
            // line 44
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"production\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            // line 47
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_connect\">";
        // line 54
        echo ($context["entry_connect"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div id=\"section_connect ";
        // line 56
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            echo "d-none";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t\t\t\t\t#button_connect_ppcp::before {
\t\t\t\t\t\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\t\t\t\t\t\tbackground: url(https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png) 11px no-repeat #fff;
\t\t\t\t\t\t\t\t\t\t\t\tbackground-size: 80px;
\t\t\t\t\t\t\t\t\t\t\t\tdisplay: table-cell;
\t\t\t\t\t\t\t\t\t\t\t\twidth: 100px;
\t\t\t\t\t\t\t\t\t\t\t\theight: 42px;
\t\t\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-right: 16px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-bottom-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-top-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-top: -12px;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t#button_connect_express_checkout {
\t\t\t\t\t\t\t\t\t\t\t\tdisplay: inline;
\t\t\t\t\t\t\t\t\t\t\t\tpadding: 0px 0px;
\t\t\t\t\t\t\t\t\t\t\t\tvertical-align: top;
\t\t\t\t\t\t\t\t\t\t\t\tfont-family: 'Open Sans', sans-serif;
\t\t\t\t\t\t\t\t\t\t\t\tfont-size: 12px;
\t\t\t\t\t\t\t\t\t\t\t\tcolor: #1e91cf;
\t\t\t\t\t\t\t\t\t\t\t\tbackground: none;
\t\t\t\t\t\t\t\t\t\t\t\tborder: none;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t#button_connect_express_checkout::before {
\t\t\t\t\t\t\t\t\t\t\t\tdisplay:none;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_connect_ppcp\" href=\"";
        // line 85
        echo (($__internal_compile_2 = (($__internal_compile_3 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ppcp"] ?? null) : null);
        echo "\" target=\"_blank\" data-paypal-button=\"PPLtBlue\" data-paypal-onboard-complete=\"onBoardedCallback\">";
        echo ($context["button_connect"] ?? null);
        echo "</a><br />
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 86
        echo ($context["help_checkout_express"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 88
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t<div id=\"section_disconnect\">
\t\t\t\t\t\t\t\t\t\t<p class=\"alert alert-info\">";
            // line 90
            echo ($context["text_connect"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_disconnect\" class=\"btn btn-danger\">";
            // line 91
            echo ($context["button_disconnect"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_client_id\" value=\"";
        echo ($context["client_id"] ?? null);
        echo "\" id=\"input_client_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_secret\" value=\"";
        // line 95
        echo ($context["secret"] ?? null);
        echo "\" id=\"input_secret\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_merchant_id\" value=\"";
        // line 96
        echo ($context["merchant_id"] ?? null);
        echo "\" id=\"input_merchant_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_webhook_id\" value=\"";
        // line 97
        echo ($context["webhook_id"] ?? null);
        echo "\" id=\"input_webhook_id\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 100
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 101
            echo "\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_status\">";
            // line 102
            echo ($context["entry_checkout_express_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][status]\" id=\"input_checkout_express_status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 106
            if ((($__internal_compile_4 = (($__internal_compile_5 = (($__internal_compile_6 = ($context["setting"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["checkout"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["express"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null)) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 108
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 111
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
            // line 115
            echo ($context["help_checkout_express_status"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_card_status\">";
            // line 119
            echo ($context["entry_checkout_card_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][status]\" id=\"input_checkout_card_status\" class=\"form-select d-none\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if ((($__internal_compile_7 = (($__internal_compile_8 = (($__internal_compile_9 = ($context["setting"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["checkout"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["card"] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 125
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 128
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible d-none\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 132
            echo ($context["help_checkout_card_status"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_status\">";
            // line 138
            echo ($context["entry_checkout_message_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][status]\" id=\"input_checkout_message_status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 142
            if ((($__internal_compile_10 = (($__internal_compile_11 = (($__internal_compile_12 = ($context["setting"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["checkout"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["message"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["status"] ?? null) : null)) {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 144
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 147
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
            // line 151
            echo ($context["help_checkout_message_status"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t<p class=\"alert alert-info\" style=\"margin: 15px 0px 0px 0px\">";
            // line 152
            echo ($context["text_message"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_debug\">";
        // line 157
        echo ($context["entry_debug"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_debug\" id=\"input_debug\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 161
        if (($context["debug"] ?? null)) {
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 163
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 165
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 166
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_transaction_method\">";
        // line 173
        echo ($context["entry_transaction_method"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_transaction_method\" id=\"input_transaction_method\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 177
        if ((($context["transaction_method"] ?? null) == "authorize")) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\" selected=\"selected\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"capture\">";
            // line 179
            echo ($context["text_sale"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"capture\" selected=\"selected\">";
            // line 182
            echo ($context["text_sale"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_geo_zone\">";
        // line 189
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_geo_zone_id\" id=\"input_geo_zone\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 193
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_13 = $context["geo_zone"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["geo_zone_id"] ?? null) : null) == ($context["geo_zone_id"] ?? null))) {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_14 = $context["geo_zone"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["geo_zone_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_compile_15 = $context["geo_zone"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_16 = $context["geo_zone"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["geo_zone_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_17 = $context["geo_zone"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_status\">";
        // line 206
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_status\" id=\"input_status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 210
        if (($context["status"] ?? null)) {
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 212
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 215
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_sort_order\">";
        // line 222
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_sort_order\" value=\"";
        // line 225
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input_sort_order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_currency_code\">";
        // line 230
        echo ($context["entry_currency_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_currency_code\" id=\"input_currency_code\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_18 = ($context["setting"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["currency"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($__internal_compile_19 = $context["currency"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["express_status"] ?? null) : null)) {
                // line 236
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_compile_20 = $context["currency"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["code"] ?? null) : null) == ($context["currency_code"] ?? null))) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_21 = $context["currency"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_22 = $context["currency"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null), [], "any", false, false, false, 237);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_23 = $context["currency"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_24 = $context["currency"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null), [], "any", false, false, false, 239);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 245
        echo ($context["help_currency_code"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_currency_value\">";
        // line 249
        echo ($context["entry_currency_value"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_currency_value\" value=\"";
        // line 252
        echo ($context["currency_value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_currency_value"] ?? null);
        echo "\" id=\"input_currency_value\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 254
        echo ($context["help_currency_value"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_card_currency_code\">";
        // line 258
        echo ($context["entry_card_currency_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_card_currency_code\" id=\"input_card_currency_code\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["setting"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["currency"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 263
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($__internal_compile_26 = $context["currency"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["card_status"] ?? null) : null)) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_compile_27 = $context["currency"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["code"] ?? null) : null) == ($context["card_currency_code"] ?? null))) {
                    // line 265
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_28 = $context["currency"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_29 = $context["currency"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null), [], "any", false, false, false, 265);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_30 = $context["currency"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_31 = $context["currency"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["name"] ?? null) : null), [], "any", false, false, false, 267);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 273
        echo ($context["help_card_currency_code"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_card_currency_value\">";
        // line 277
        echo ($context["entry_card_currency_value"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_card_currency_value\" value=\"";
        // line 280
        echo ($context["card_currency_value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_card_currency_value"] ?? null);
        echo "\" id=\"input_card_currency_value\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 282
        echo ($context["help_card_currency_value"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_smart_button\">";
        // line 286
        echo ($context["entry_smart_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 288
        echo ($context["configure_smart_button_url"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-primary\">";
        echo ($context["button_smart_button"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_order_status\">
\t\t\t\t\t\t\t";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_32 = ($context["setting"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["order_status"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paypal_order_status"]) {
            // line 294
            echo "\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_order_status_";
            // line 295
            echo (($__internal_compile_33 = $context["paypal_order_status"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["code"] ?? null) : null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_34 = $context["paypal_order_status"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null), [], "any", false, false, false, 295);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[order_status][";
            // line 298
            echo (($__internal_compile_35 = $context["paypal_order_status"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["code"] ?? null) : null);
            echo "][id]\" id=\"input_";
            echo (($__internal_compile_36 = $context["paypal_order_status"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["code"] ?? null) : null);
            echo "_status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 300
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_compile_37 = $context["order_status"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["order_status_id"] ?? null) : null) == (($__internal_compile_38 = $context["paypal_order_status"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null))) {
                    // line 301
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_39 = $context["order_status"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["order_status_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_compile_40 = $context["order_status"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_41 = $context["order_status"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["order_status_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_42 = $context["order_status"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 305
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paypal_order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_checkout_express\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_align\">";
        // line 314
        echo ($context["entry_button_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_align]\" id=\"input_checkout_express_button_align\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_43 = ($context["setting"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["button_align"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_align"]) {
            // line 319
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_44 = $context["button_align"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["code"] ?? null) : null) == (($__internal_compile_45 = (($__internal_compile_46 = (($__internal_compile_47 = ($context["setting"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["checkout"] ?? null) : null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["express"] ?? null) : null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["button_align"] ?? null) : null))) {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_48 = $context["button_align"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_49 = $context["button_align"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["name"] ?? null) : null), [], "any", false, false, false, 320);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 322
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_50 = $context["button_align"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_51 = $context["button_align"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["name"] ?? null) : null), [], "any", false, false, false, 322);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 324
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_size\">";
        // line 330
        echo ($context["entry_button_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_size]\" id=\"input_checkout_express_button_size\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_52 = ($context["setting"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["button_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_size"]) {
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_53 = $context["button_size"]) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["code"] ?? null) : null) == (($__internal_compile_54 = (($__internal_compile_55 = (($__internal_compile_56 = ($context["setting"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["checkout"] ?? null) : null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["express"] ?? null) : null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["button_size"] ?? null) : null))) {
                // line 336
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_57 = $context["button_size"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_58 = $context["button_size"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["name"] ?? null) : null), [], "any", false, false, false, 336);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 338
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_59 = $context["button_size"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_60 = $context["button_size"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["name"] ?? null) : null), [], "any", false, false, false, 338);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_color\">";
        // line 346
        echo ($context["entry_button_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_color]\" id=\"input_checkout_express_button_color\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_61 = ($context["setting"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["button_color"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_color"]) {
            // line 351
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_62 = $context["button_color"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["code"] ?? null) : null) == (($__internal_compile_63 = (($__internal_compile_64 = (($__internal_compile_65 = ($context["setting"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["checkout"] ?? null) : null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["express"] ?? null) : null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["button_color"] ?? null) : null))) {
                // line 352
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_66 = $context["button_color"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_67 = $context["button_color"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["name"] ?? null) : null), [], "any", false, false, false, 352);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 354
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_68 = $context["button_color"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_69 = $context["button_color"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null), [], "any", false, false, false, 354);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 356
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_shape\">";
        // line 362
        echo ($context["entry_button_shape"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_shape]\" id=\"input_checkout_express_button_shape\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_70 = ($context["setting"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["button_shape"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_shape"]) {
            // line 367
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_71 = $context["button_shape"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["code"] ?? null) : null) == (($__internal_compile_72 = (($__internal_compile_73 = (($__internal_compile_74 = ($context["setting"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["checkout"] ?? null) : null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["express"] ?? null) : null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["button_shape"] ?? null) : null))) {
                // line 368
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_75 = $context["button_shape"]) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_76 = $context["button_shape"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["name"] ?? null) : null), [], "any", false, false, false, 368);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 370
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_77 = $context["button_shape"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_78 = $context["button_shape"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["name"] ?? null) : null), [], "any", false, false, false, 370);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 372
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_shape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_label\">";
        // line 378
        echo ($context["entry_button_label"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_label]\" id=\"input_checkout_express_button_label\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_79 = ($context["setting"] ?? null)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["button_label"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_label"]) {
            // line 383
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_80 = $context["button_label"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["code"] ?? null) : null) == (($__internal_compile_81 = (($__internal_compile_82 = (($__internal_compile_83 = ($context["setting"] ?? null)) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["checkout"] ?? null) : null)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["express"] ?? null) : null)) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["button_label"] ?? null) : null))) {
                // line 384
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_84 = $context["button_label"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_85 = $context["button_label"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["name"] ?? null) : null), [], "any", false, false, false, 384);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 386
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_86 = $context["button_label"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_87 = $context["button_label"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["name"] ?? null) : null), [], "any", false, false, false, 386);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 388
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_88 = ($context["setting"] ?? null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["button_funding"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_funding"]) {
            // line 395
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_express_button_funding\">";
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_89 = $context["button_funding"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["name"] ?? null) : null), [], "any", false, false, false, 395);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_funding][";
            // line 398
            echo (($__internal_compile_90 = $context["button_funding"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["code"] ?? null) : null);
            echo "]\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 399
            if (((($__internal_compile_91 = (($__internal_compile_92 = (($__internal_compile_93 = (($__internal_compile_94 = ($context["setting"] ?? null)) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["checkout"] ?? null) : null)) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["express"] ?? null) : null)) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["button_funding"] ?? null) : null)) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91[(($__internal_compile_95 = $context["button_funding"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["code"] ?? null) : null)] ?? null) : null) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_auto"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 400
            if (((($__internal_compile_96 = (($__internal_compile_97 = (($__internal_compile_98 = (($__internal_compile_99 = ($context["setting"] ?? null)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["checkout"] ?? null) : null)) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["express"] ?? null) : null)) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["button_funding"] ?? null) : null)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96[(($__internal_compile_100 = $context["button_funding"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["code"] ?? null) : null)] ?? null) : null) == 1)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 401
            if (((($__internal_compile_101 = (($__internal_compile_102 = (($__internal_compile_103 = (($__internal_compile_104 = ($context["setting"] ?? null)) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["checkout"] ?? null) : null)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["express"] ?? null) : null)) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["button_funding"] ?? null) : null)) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101[(($__internal_compile_105 = $context["button_funding"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["code"] ?? null) : null)] ?? null) : null) == 2)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_funding'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane d-none\" id=\"tab_checkout_card\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_card_form_align\">";
        // line 411
        echo ($context["entry_form_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_align]\" id=\"input_checkout_card_form_align\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_106 = ($context["setting"] ?? null)) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["form_align"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["form_align"]) {
            // line 416
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_107 = $context["form_align"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["code"] ?? null) : null) == (($__internal_compile_108 = (($__internal_compile_109 = (($__internal_compile_110 = ($context["setting"] ?? null)) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["checkout"] ?? null) : null)) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["card"] ?? null) : null)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["form_align"] ?? null) : null))) {
                // line 417
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_111 = $context["form_align"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_112 = $context["form_align"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["name"] ?? null) : null), [], "any", false, false, false, 417);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 419
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_113 = $context["form_align"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_114 = $context["form_align"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null), [], "any", false, false, false, 419);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 421
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_card_form_size\">";
        // line 427
        echo ($context["entry_form_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_size]\" id=\"input_checkout_card_form_size\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_115 = ($context["setting"] ?? null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["form_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["form_size"]) {
            // line 432
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_116 = $context["form_size"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["code"] ?? null) : null) == (($__internal_compile_117 = (($__internal_compile_118 = (($__internal_compile_119 = ($context["setting"] ?? null)) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["checkout"] ?? null) : null)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["card"] ?? null) : null)) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["form_size"] ?? null) : null))) {
                // line 433
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_120 = $context["form_size"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_121 = $context["form_size"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["name"] ?? null) : null), [], "any", false, false, false, 433);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 435
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_122 = $context["form_size"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_123 = $context["form_size"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["name"] ?? null) : null), [], "any", false, false, false, 435);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 437
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_card_secure_status\">";
        // line 443
        echo ($context["entry_secure_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_status]\" id=\"input_checkout_card_secure_status\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 447
        if ((($__internal_compile_124 = (($__internal_compile_125 = (($__internal_compile_126 = ($context["setting"] ?? null)) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["checkout"] ?? null) : null)) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["card"] ?? null) : null)) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["secure_status"] ?? null) : null)) {
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 449
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 451
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 452
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 454
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 456
        echo ($context["help_secure_status"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_card_secure_scenario\">";
        // line 460
        echo ($context["entry_secure_scenario"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_127 = ($context["setting"] ?? null)) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["secure_scenario"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["secure_scenario"]) {
            // line 463
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-form-label\" for=\"input_checkout_card_secure_scenario\">";
            // line 465
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_128 = $context["secure_scenario"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["name"] ?? null) : null), [], "any", false, false, false, 465);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_scenario][";
            // line 468
            echo (($__internal_compile_129 = $context["secure_scenario"]) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["code"] ?? null) : null);
            echo "]\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 469
            if ((($__internal_compile_130 = (($__internal_compile_131 = (($__internal_compile_132 = (($__internal_compile_133 = ($context["setting"] ?? null)) && is_array($__internal_compile_133) || $__internal_compile_133 instanceof ArrayAccess ? ($__internal_compile_133["checkout"] ?? null) : null)) && is_array($__internal_compile_132) || $__internal_compile_132 instanceof ArrayAccess ? ($__internal_compile_132["card"] ?? null) : null)) && is_array($__internal_compile_131) || $__internal_compile_131 instanceof ArrayAccess ? ($__internal_compile_131["secure_scenario"] ?? null) : null)) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130[(($__internal_compile_134 = $context["secure_scenario"]) && is_array($__internal_compile_134) || $__internal_compile_134 instanceof ArrayAccess ? ($__internal_compile_134["code"] ?? null) : null)] ?? null) : null)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_accept"] ?? null);
            if ((($__internal_compile_135 = $context["secure_scenario"]) && is_array($__internal_compile_135) || $__internal_compile_135 instanceof ArrayAccess ? ($__internal_compile_135["recommended"] ?? null) : null)) {
                echo " ";
                echo ($context["text_recommended"] ?? null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 470
            if ( !(($__internal_compile_136 = (($__internal_compile_137 = (($__internal_compile_138 = (($__internal_compile_139 = ($context["setting"] ?? null)) && is_array($__internal_compile_139) || $__internal_compile_139 instanceof ArrayAccess ? ($__internal_compile_139["checkout"] ?? null) : null)) && is_array($__internal_compile_138) || $__internal_compile_138 instanceof ArrayAccess ? ($__internal_compile_138["card"] ?? null) : null)) && is_array($__internal_compile_137) || $__internal_compile_137 instanceof ArrayAccess ? ($__internal_compile_137["secure_scenario"] ?? null) : null)) && is_array($__internal_compile_136) || $__internal_compile_136 instanceof ArrayAccess ? ($__internal_compile_136[(($__internal_compile_140 = $context["secure_scenario"]) && is_array($__internal_compile_140) || $__internal_compile_140 instanceof ArrayAccess ? ($__internal_compile_140["code"] ?? null) : null)] ?? null) : null)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_decline"] ?? null);
            if ( !(($__internal_compile_141 = $context["secure_scenario"]) && is_array($__internal_compile_141) || $__internal_compile_141 instanceof ArrayAccess ? ($__internal_compile_141["recommended"] ?? null) : null)) {
                echo " ";
                echo ($context["text_recommended"] ?? null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secure_scenario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 476
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-text\">";
        echo ($context["help_secure_scenario"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_checkout_message\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_align\">";
        // line 482
        echo ($context["entry_message_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_align]\" id=\"input_checkout_message_align\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 486
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_142 = ($context["setting"] ?? null)) && is_array($__internal_compile_142) || $__internal_compile_142 instanceof ArrayAccess ? ($__internal_compile_142["message_align"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_align"]) {
            // line 487
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_143 = $context["message_align"]) && is_array($__internal_compile_143) || $__internal_compile_143 instanceof ArrayAccess ? ($__internal_compile_143["code"] ?? null) : null) == (($__internal_compile_144 = (($__internal_compile_145 = (($__internal_compile_146 = ($context["setting"] ?? null)) && is_array($__internal_compile_146) || $__internal_compile_146 instanceof ArrayAccess ? ($__internal_compile_146["checkout"] ?? null) : null)) && is_array($__internal_compile_145) || $__internal_compile_145 instanceof ArrayAccess ? ($__internal_compile_145["message"] ?? null) : null)) && is_array($__internal_compile_144) || $__internal_compile_144 instanceof ArrayAccess ? ($__internal_compile_144["message_align"] ?? null) : null))) {
                // line 488
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_147 = $context["message_align"]) && is_array($__internal_compile_147) || $__internal_compile_147 instanceof ArrayAccess ? ($__internal_compile_147["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_148 = $context["message_align"]) && is_array($__internal_compile_148) || $__internal_compile_148 instanceof ArrayAccess ? ($__internal_compile_148["name"] ?? null) : null), [], "any", false, false, false, 488);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 490
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_149 = $context["message_align"]) && is_array($__internal_compile_149) || $__internal_compile_149 instanceof ArrayAccess ? ($__internal_compile_149["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_150 = $context["message_align"]) && is_array($__internal_compile_150) || $__internal_compile_150 instanceof ArrayAccess ? ($__internal_compile_150["name"] ?? null) : null), [], "any", false, false, false, 490);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 492
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_size\">";
        // line 498
        echo ($context["entry_message_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_size]\" id=\"input_checkout_message_size\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_151 = ($context["setting"] ?? null)) && is_array($__internal_compile_151) || $__internal_compile_151 instanceof ArrayAccess ? ($__internal_compile_151["message_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_size"]) {
            // line 503
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_152 = $context["message_size"]) && is_array($__internal_compile_152) || $__internal_compile_152 instanceof ArrayAccess ? ($__internal_compile_152["code"] ?? null) : null) == (($__internal_compile_153 = (($__internal_compile_154 = (($__internal_compile_155 = ($context["setting"] ?? null)) && is_array($__internal_compile_155) || $__internal_compile_155 instanceof ArrayAccess ? ($__internal_compile_155["checkout"] ?? null) : null)) && is_array($__internal_compile_154) || $__internal_compile_154 instanceof ArrayAccess ? ($__internal_compile_154["message"] ?? null) : null)) && is_array($__internal_compile_153) || $__internal_compile_153 instanceof ArrayAccess ? ($__internal_compile_153["message_size"] ?? null) : null))) {
                // line 504
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_156 = $context["message_size"]) && is_array($__internal_compile_156) || $__internal_compile_156 instanceof ArrayAccess ? ($__internal_compile_156["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_157 = $context["message_size"]) && is_array($__internal_compile_157) || $__internal_compile_157 instanceof ArrayAccess ? ($__internal_compile_157["name"] ?? null) : null), [], "any", false, false, false, 504);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 506
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_158 = $context["message_size"]) && is_array($__internal_compile_158) || $__internal_compile_158 instanceof ArrayAccess ? ($__internal_compile_158["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_159 = $context["message_size"]) && is_array($__internal_compile_159) || $__internal_compile_159 instanceof ArrayAccess ? ($__internal_compile_159["name"] ?? null) : null), [], "any", false, false, false, 506);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 508
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_layout\">";
        // line 514
        echo ($context["entry_message_layout"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_layout]\" id=\"input_checkout_message_layout\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_160 = ($context["setting"] ?? null)) && is_array($__internal_compile_160) || $__internal_compile_160 instanceof ArrayAccess ? ($__internal_compile_160["message_layout"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_layout"]) {
            // line 519
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_161 = $context["message_layout"]) && is_array($__internal_compile_161) || $__internal_compile_161 instanceof ArrayAccess ? ($__internal_compile_161["code"] ?? null) : null) == (($__internal_compile_162 = (($__internal_compile_163 = (($__internal_compile_164 = ($context["setting"] ?? null)) && is_array($__internal_compile_164) || $__internal_compile_164 instanceof ArrayAccess ? ($__internal_compile_164["checkout"] ?? null) : null)) && is_array($__internal_compile_163) || $__internal_compile_163 instanceof ArrayAccess ? ($__internal_compile_163["message"] ?? null) : null)) && is_array($__internal_compile_162) || $__internal_compile_162 instanceof ArrayAccess ? ($__internal_compile_162["message_layout"] ?? null) : null))) {
                // line 520
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_165 = $context["message_layout"]) && is_array($__internal_compile_165) || $__internal_compile_165 instanceof ArrayAccess ? ($__internal_compile_165["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_166 = $context["message_layout"]) && is_array($__internal_compile_166) || $__internal_compile_166 instanceof ArrayAccess ? ($__internal_compile_166["name"] ?? null) : null), [], "any", false, false, false, 520);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 522
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_167 = $context["message_layout"]) && is_array($__internal_compile_167) || $__internal_compile_167 instanceof ArrayAccess ? ($__internal_compile_167["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_168 = $context["message_layout"]) && is_array($__internal_compile_168) || $__internal_compile_168 instanceof ArrayAccess ? ($__internal_compile_168["name"] ?? null) : null), [], "any", false, false, false, 522);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 524
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 525
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3 ";
        // line 529
        if (((($__internal_compile_169 = (($__internal_compile_170 = (($__internal_compile_171 = ($context["setting"] ?? null)) && is_array($__internal_compile_171) || $__internal_compile_171 instanceof ArrayAccess ? ($__internal_compile_171["checkout"] ?? null) : null)) && is_array($__internal_compile_170) || $__internal_compile_170 instanceof ArrayAccess ? ($__internal_compile_170["message"] ?? null) : null)) && is_array($__internal_compile_169) || $__internal_compile_169 instanceof ArrayAccess ? ($__internal_compile_169["message_layout"] ?? null) : null) == "flex")) {
            echo "d-none";
        }
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_text_color\">";
        // line 530
        echo ($context["entry_message_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_text_color]\" id=\"input_checkout_message_text_color\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_172 = ($context["setting"] ?? null)) && is_array($__internal_compile_172) || $__internal_compile_172 instanceof ArrayAccess ? ($__internal_compile_172["message_text_color"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_text_color"]) {
            // line 535
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_173 = $context["message_text_color"]) && is_array($__internal_compile_173) || $__internal_compile_173 instanceof ArrayAccess ? ($__internal_compile_173["code"] ?? null) : null) == (($__internal_compile_174 = (($__internal_compile_175 = (($__internal_compile_176 = ($context["setting"] ?? null)) && is_array($__internal_compile_176) || $__internal_compile_176 instanceof ArrayAccess ? ($__internal_compile_176["checkout"] ?? null) : null)) && is_array($__internal_compile_175) || $__internal_compile_175 instanceof ArrayAccess ? ($__internal_compile_175["message"] ?? null) : null)) && is_array($__internal_compile_174) || $__internal_compile_174 instanceof ArrayAccess ? ($__internal_compile_174["message_text_color"] ?? null) : null))) {
                // line 536
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_177 = $context["message_text_color"]) && is_array($__internal_compile_177) || $__internal_compile_177 instanceof ArrayAccess ? ($__internal_compile_177["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_178 = $context["message_text_color"]) && is_array($__internal_compile_178) || $__internal_compile_178 instanceof ArrayAccess ? ($__internal_compile_178["name"] ?? null) : null), [], "any", false, false, false, 536);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 538
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_179 = $context["message_text_color"]) && is_array($__internal_compile_179) || $__internal_compile_179 instanceof ArrayAccess ? ($__internal_compile_179["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_180 = $context["message_text_color"]) && is_array($__internal_compile_180) || $__internal_compile_180 instanceof ArrayAccess ? ($__internal_compile_180["name"] ?? null) : null), [], "any", false, false, false, 538);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 540
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_text_color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3 ";
        // line 545
        if (((($__internal_compile_181 = (($__internal_compile_182 = (($__internal_compile_183 = ($context["setting"] ?? null)) && is_array($__internal_compile_183) || $__internal_compile_183 instanceof ArrayAccess ? ($__internal_compile_183["checkout"] ?? null) : null)) && is_array($__internal_compile_182) || $__internal_compile_182 instanceof ArrayAccess ? ($__internal_compile_182["message"] ?? null) : null)) && is_array($__internal_compile_181) || $__internal_compile_181 instanceof ArrayAccess ? ($__internal_compile_181["message_layout"] ?? null) : null) == "flex")) {
            echo "d-none";
        }
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_text_size\">";
        // line 546
        echo ($context["entry_message_text_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_text_size]\" id=\"input_checkout_message_text_size\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 550
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_184 = ($context["setting"] ?? null)) && is_array($__internal_compile_184) || $__internal_compile_184 instanceof ArrayAccess ? ($__internal_compile_184["message_text_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_text_size"]) {
            // line 551
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["message_text_size"] == (($__internal_compile_185 = (($__internal_compile_186 = (($__internal_compile_187 = ($context["setting"] ?? null)) && is_array($__internal_compile_187) || $__internal_compile_187 instanceof ArrayAccess ? ($__internal_compile_187["checkout"] ?? null) : null)) && is_array($__internal_compile_186) || $__internal_compile_186 instanceof ArrayAccess ? ($__internal_compile_186["message"] ?? null) : null)) && is_array($__internal_compile_185) || $__internal_compile_185 instanceof ArrayAccess ? ($__internal_compile_185["message_text_size"] ?? null) : null))) {
                // line 552
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["message_text_size"];
                echo "\" selected=\"selected\">";
                echo $context["message_text_size"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 554
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["message_text_size"];
                echo "\">";
                echo $context["message_text_size"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 556
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_text_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3 ";
        // line 561
        if (((($__internal_compile_188 = (($__internal_compile_189 = (($__internal_compile_190 = ($context["setting"] ?? null)) && is_array($__internal_compile_190) || $__internal_compile_190 instanceof ArrayAccess ? ($__internal_compile_190["checkout"] ?? null) : null)) && is_array($__internal_compile_189) || $__internal_compile_189 instanceof ArrayAccess ? ($__internal_compile_189["message"] ?? null) : null)) && is_array($__internal_compile_188) || $__internal_compile_188 instanceof ArrayAccess ? ($__internal_compile_188["message_layout"] ?? null) : null) == "text")) {
            echo "d-none";
        }
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_flex_color\">";
        // line 562
        echo ($context["entry_message_flex_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_flex_color]\" id=\"input_checkout_message_flex_color\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_191 = ($context["setting"] ?? null)) && is_array($__internal_compile_191) || $__internal_compile_191 instanceof ArrayAccess ? ($__internal_compile_191["message_flex_color"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_flex_color"]) {
            // line 567
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_192 = $context["message_flex_color"]) && is_array($__internal_compile_192) || $__internal_compile_192 instanceof ArrayAccess ? ($__internal_compile_192["code"] ?? null) : null) == (($__internal_compile_193 = (($__internal_compile_194 = (($__internal_compile_195 = ($context["setting"] ?? null)) && is_array($__internal_compile_195) || $__internal_compile_195 instanceof ArrayAccess ? ($__internal_compile_195["checkout"] ?? null) : null)) && is_array($__internal_compile_194) || $__internal_compile_194 instanceof ArrayAccess ? ($__internal_compile_194["message"] ?? null) : null)) && is_array($__internal_compile_193) || $__internal_compile_193 instanceof ArrayAccess ? ($__internal_compile_193["message_flex_color"] ?? null) : null))) {
                // line 568
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_196 = $context["message_flex_color"]) && is_array($__internal_compile_196) || $__internal_compile_196 instanceof ArrayAccess ? ($__internal_compile_196["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_197 = $context["message_flex_color"]) && is_array($__internal_compile_197) || $__internal_compile_197 instanceof ArrayAccess ? ($__internal_compile_197["name"] ?? null) : null), [], "any", false, false, false, 568);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 570
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_198 = $context["message_flex_color"]) && is_array($__internal_compile_198) || $__internal_compile_198 instanceof ArrayAccess ? ($__internal_compile_198["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_199 = $context["message_flex_color"]) && is_array($__internal_compile_199) || $__internal_compile_199 instanceof ArrayAccess ? ($__internal_compile_199["name"] ?? null) : null), [], "any", false, false, false, 570);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 572
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_flex_color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 573
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3 ";
        // line 577
        if (((($__internal_compile_200 = (($__internal_compile_201 = (($__internal_compile_202 = ($context["setting"] ?? null)) && is_array($__internal_compile_202) || $__internal_compile_202 instanceof ArrayAccess ? ($__internal_compile_202["checkout"] ?? null) : null)) && is_array($__internal_compile_201) || $__internal_compile_201 instanceof ArrayAccess ? ($__internal_compile_201["message"] ?? null) : null)) && is_array($__internal_compile_200) || $__internal_compile_200 instanceof ArrayAccess ? ($__internal_compile_200["message_layout"] ?? null) : null) == "text")) {
            echo "d-none";
        }
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input_checkout_message_flex_ratio\">";
        // line 578
        echo ($context["entry_message_flex_ratio"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][message][message_flex_ratio]\" id=\"input_checkout_message_flex_ratio\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_203 = ($context["setting"] ?? null)) && is_array($__internal_compile_203) || $__internal_compile_203 instanceof ArrayAccess ? ($__internal_compile_203["message_flex_ratio"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message_flex_ratio"]) {
            // line 583
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["message_flex_ratio"] == (($__internal_compile_204 = (($__internal_compile_205 = (($__internal_compile_206 = ($context["setting"] ?? null)) && is_array($__internal_compile_206) || $__internal_compile_206 instanceof ArrayAccess ? ($__internal_compile_206["checkout"] ?? null) : null)) && is_array($__internal_compile_205) || $__internal_compile_205 instanceof ArrayAccess ? ($__internal_compile_205["message"] ?? null) : null)) && is_array($__internal_compile_204) || $__internal_compile_204 instanceof ArrayAccess ? ($__internal_compile_204["message_flex_ratio"] ?? null) : null))) {
                // line 584
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["message_flex_ratio"];
                echo "\" selected=\"selected\">";
                echo $context["message_flex_ratio"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 586
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["message_flex_ratio"];
                echo "\">";
                echo $context["message_flex_ratio"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 588
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_flex_ratio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 600
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 601
            echo "<script type=\"text/javascript\" src = \"https://www.paypal.com/sdk/js?components=hosted-fields&client-id=";
            echo ($context["client_id"] ?? null);
            echo "&merchant-id=";
            echo ($context["merchant_id"] ?? null);
            echo "\" data-partner-attribution-id=\"";
            echo (($__internal_compile_207 = (($__internal_compile_208 = (($__internal_compile_209 = ($context["setting"] ?? null)) && is_array($__internal_compile_209) || $__internal_compile_209 instanceof ArrayAccess ? ($__internal_compile_209["partner"] ?? null) : null)) && is_array($__internal_compile_208) || $__internal_compile_208 instanceof ArrayAccess ? ($__internal_compile_208[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_compile_207) || $__internal_compile_207 instanceof ArrayAccess ? ($__internal_compile_207["partner_attribution_id"] ?? null) : null);
            echo "\" data-client-token=\"";
            echo ($context["client_token"] ?? null);
            echo "\"></script>
<script type=\"text/javascript\">

try {
\tif (paypal.HostedFields.isEligible() === true) {
\t\t\$('[href=\"#tab_checkout_card\"]').parents('.nav-item').removeClass('d-none');
\t\t\$('#tab_checkout_card').removeClass('d-none');
\t\t\$('#input_checkout_card_status').removeClass('d-none');
\t} else {
\t\t\$('#input_checkout_card_status').parents('.row').find('.alert').removeClass('d-none');
\t}
} catch (error) {
\tconsole.error('PayPal Card failed during startup', error);
}

</script>
";
        }
        // line 618
        echo "<script type=\"text/javascript\">

function onBoardedCallback(authorization_code, shared_id) {
\tvar environment = \$('#input_environment').val();
\t
\t\$.ajax({
\t\turl: '";
        // line 624
        echo ($context["callback_url"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce=";
        // line 626
        echo ($context["seller_nonce"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

</script>
<script type=\"text/javascript\">

\$('#button_disconnect').on('click', function() {
\tif (confirm('";
        // line 641
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$('#input_client_id').val('');
\t\t\$('#input_secret').val('');
\t\t\$('#input_merchant_id').val('');
\t\t\$('#section_connect').removeClass('d-none');
\t\t\$('#section_disconnect').addClass('d-none');
\t\t
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: '";
        // line 650
        echo ($context["disconnect_url"] ?? null);
        echo "',
\t\t\tdata: '',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('#input_environment').on('change', function() {
\tvar environment = \$(this).val();
\t
\tif (environment == 'production') {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 667
        echo (($__internal_compile_210 = (($__internal_compile_211 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_211) || $__internal_compile_211 instanceof ArrayAccess ? ($__internal_compile_211["production"] ?? null) : null)) && is_array($__internal_compile_210) || $__internal_compile_210 instanceof ArrayAccess ? ($__internal_compile_210["ppcp"] ?? null) : null);
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 668
        echo (($__internal_compile_212 = (($__internal_compile_213 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_213) || $__internal_compile_213 instanceof ArrayAccess ? ($__internal_compile_213["production"] ?? null) : null)) && is_array($__internal_compile_212) || $__internal_compile_212 instanceof ArrayAccess ? ($__internal_compile_212["express_checkout"] ?? null) : null);
        echo "');
\t} else {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 670
        echo (($__internal_compile_214 = (($__internal_compile_215 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_215) || $__internal_compile_215 instanceof ArrayAccess ? ($__internal_compile_215["sandbox"] ?? null) : null)) && is_array($__internal_compile_214) || $__internal_compile_214 instanceof ArrayAccess ? ($__internal_compile_214["ppcp"] ?? null) : null);
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 671
        echo (($__internal_compile_216 = (($__internal_compile_217 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_217) || $__internal_compile_217 instanceof ArrayAccess ? ($__internal_compile_217["sandbox"] ?? null) : null)) && is_array($__internal_compile_216) || $__internal_compile_216 instanceof ArrayAccess ? ($__internal_compile_216["express_checkout"] ?? null) : null);
        echo "');
\t}
\t
\t\$('#input_client_id').val('');
\t\$('#input_secret').val('');
\t\$('#input_merchant_id').val('');
\t\$('#section_connect').removeClass('d-none');
\t\$('#section_disconnect').addClass('d-none');
\t
\t\$.ajax({
\t\ttype: 'post',
\t\turl: '";
        // line 682
        echo ($context["disconnect_url"] ?? null);
        echo "',
\t\tdata: '',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#input_checkout_message_layout').on('change', function() {
\tvar layout = \$(this).val();
\t
\tif (layout == 'text') {
\t\t\$('#input_checkout_message_flex_color').parents('.row').addClass('d-none');
\t\t\$('#input_checkout_message_flex_ratio').parents('.row').addClass('d-none');
\t\t\$('#input_checkout_message_text_color').parents('.row').removeClass('d-none');
\t\t\$('#input_checkout_message_text_size').parents('.row').removeClass('d-none');
\t} else {
\t\t\$('#input_checkout_message_text_color').parents('.row').addClass('d-none');
\t\t\$('#input_checkout_message_text_size').parents('.row').addClass('d-none');
\t\t\$('#input_checkout_message_flex_color').parents('.row').removeClass('d-none');
\t\t\$('#input_checkout_message_flex_ratio').parents('.row').removeClass('d-none');
\t}
});

</script>
<script id=\"paypal-js\" src=\"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\"></script>   
";
        // line 712
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/paypal/admin/view/template/payment/paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1720 => 712,  1687 => 682,  1673 => 671,  1669 => 670,  1664 => 668,  1660 => 667,  1640 => 650,  1628 => 641,  1610 => 626,  1605 => 624,  1597 => 618,  1570 => 601,  1568 => 600,  1555 => 589,  1549 => 588,  1541 => 586,  1533 => 584,  1530 => 583,  1526 => 582,  1519 => 578,  1513 => 577,  1507 => 573,  1501 => 572,  1493 => 570,  1485 => 568,  1482 => 567,  1478 => 566,  1471 => 562,  1465 => 561,  1459 => 557,  1453 => 556,  1445 => 554,  1437 => 552,  1434 => 551,  1430 => 550,  1423 => 546,  1417 => 545,  1411 => 541,  1405 => 540,  1397 => 538,  1389 => 536,  1386 => 535,  1382 => 534,  1375 => 530,  1369 => 529,  1363 => 525,  1357 => 524,  1349 => 522,  1341 => 520,  1338 => 519,  1334 => 518,  1327 => 514,  1320 => 509,  1314 => 508,  1306 => 506,  1298 => 504,  1295 => 503,  1291 => 502,  1284 => 498,  1277 => 493,  1271 => 492,  1263 => 490,  1255 => 488,  1252 => 487,  1248 => 486,  1241 => 482,  1231 => 476,  1211 => 470,  1199 => 469,  1195 => 468,  1189 => 465,  1185 => 463,  1181 => 462,  1176 => 460,  1169 => 456,  1165 => 454,  1160 => 452,  1155 => 451,  1150 => 449,  1145 => 448,  1143 => 447,  1136 => 443,  1129 => 438,  1123 => 437,  1115 => 435,  1107 => 433,  1104 => 432,  1100 => 431,  1093 => 427,  1086 => 422,  1080 => 421,  1072 => 419,  1064 => 417,  1061 => 416,  1057 => 415,  1050 => 411,  1044 => 407,  1028 => 401,  1020 => 400,  1012 => 399,  1008 => 398,  1001 => 395,  997 => 394,  990 => 389,  984 => 388,  976 => 386,  968 => 384,  965 => 383,  961 => 382,  954 => 378,  947 => 373,  941 => 372,  933 => 370,  925 => 368,  922 => 367,  918 => 366,  911 => 362,  904 => 357,  898 => 356,  890 => 354,  882 => 352,  879 => 351,  875 => 350,  868 => 346,  861 => 341,  855 => 340,  847 => 338,  839 => 336,  836 => 335,  832 => 334,  825 => 330,  818 => 325,  812 => 324,  804 => 322,  796 => 320,  793 => 319,  789 => 318,  782 => 314,  777 => 311,  767 => 306,  761 => 305,  753 => 303,  745 => 301,  742 => 300,  738 => 299,  732 => 298,  724 => 295,  721 => 294,  717 => 293,  707 => 288,  702 => 286,  695 => 282,  688 => 280,  682 => 277,  675 => 273,  671 => 271,  665 => 270,  662 => 269,  654 => 267,  646 => 265,  643 => 264,  640 => 263,  636 => 262,  629 => 258,  622 => 254,  615 => 252,  609 => 249,  602 => 245,  598 => 243,  592 => 242,  589 => 241,  581 => 239,  573 => 237,  570 => 236,  567 => 235,  563 => 234,  556 => 230,  546 => 225,  540 => 222,  533 => 217,  528 => 215,  523 => 214,  518 => 212,  513 => 211,  511 => 210,  504 => 206,  497 => 201,  491 => 200,  483 => 198,  475 => 196,  472 => 195,  468 => 194,  464 => 193,  457 => 189,  450 => 184,  445 => 182,  440 => 181,  435 => 179,  430 => 178,  428 => 177,  421 => 173,  414 => 168,  409 => 166,  404 => 165,  399 => 163,  394 => 162,  392 => 161,  385 => 157,  382 => 156,  375 => 152,  371 => 151,  367 => 149,  362 => 147,  357 => 146,  352 => 144,  347 => 143,  345 => 142,  338 => 138,  329 => 132,  325 => 130,  320 => 128,  315 => 127,  310 => 125,  305 => 124,  303 => 123,  296 => 119,  289 => 115,  285 => 113,  280 => 111,  275 => 110,  270 => 108,  265 => 107,  263 => 106,  256 => 102,  253 => 101,  251 => 100,  245 => 97,  241 => 96,  237 => 95,  232 => 94,  226 => 91,  222 => 90,  219 => 89,  217 => 88,  212 => 86,  206 => 85,  172 => 56,  167 => 54,  160 => 49,  155 => 47,  150 => 46,  145 => 44,  140 => 43,  138 => 42,  131 => 38,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/paypal/admin/view/template/payment/paypal.twig", "E:\\xampp\\htdocs\\extension\\paypal\\admin\\view\\template\\payment\\paypal.twig");
    }
}
