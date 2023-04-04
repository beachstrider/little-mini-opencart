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

/* extension/payze/admin/view/template/payment/payze.twig */
class __TwigTemplate_3ff07100ce59eefd8b151f402c193ae2 extends Template
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
\t\t\t\t<button type=\"submit\" form=\"form-payment\" data-bs-toggle=\"tooltip\" title=\"";
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
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">  
\t\t\t\t<form action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" data-oc-toggle=\"ajax\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["text_tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-order-status\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["text_tab_order_status"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-api-key\">";
        // line 30
        echo ($context["entry_api_key"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_payze_api_key\" value=\"";
        // line 33
        echo ($context["api_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_api_key"] ?? null);
        echo "\" id=\"input-api-key\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"error-api-key\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-api-secret\">";
        // line 39
        echo ($context["entry_api_secret"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_payze_api_secret\" value=\"";
        // line 42
        echo ($context["api_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_api_secret"] ?? null);
        echo "\" id=\"input-api-secret\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"error-api-secret\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-general-title\">";
        // line 48
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\"><img src=\"language/";
            // line 52
            echo (($__internal_compile_2 = $context["language"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["code"] ?? null) : null);
            echo "/";
            echo (($__internal_compile_3 = $context["language"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_compile_4 = $context["language"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null);
            echo "\" /></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_payze_setting[general][title][";
            // line 53
            echo (($__internal_compile_5 = $context["language"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["language_id"] ?? null) : null);
            echo "]\" value=\"";
            if ((($__internal_compile_6 = (($__internal_compile_7 = (($__internal_compile_8 = ($context["setting"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["general"] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["title"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[(($__internal_compile_9 = $context["language"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["language_id"] ?? null) : null)] ?? null) : null)) {
                echo (($__internal_compile_10 = (($__internal_compile_11 = (($__internal_compile_12 = ($context["setting"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["general"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["title"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[(($__internal_compile_13 = $context["language"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["language_id"] ?? null) : null)] ?? null) : null);
            }
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-general-title-";
            echo (($__internal_compile_14 = $context["language"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["language_id"] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t\t\t</div>
                            </div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 59
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_payze_status\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"payment_payze_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 63
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-general-preauthorize\">";
        // line 68
        echo ($context["entry_preauthorize"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_payze_setting[general][preauthorize]\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"payment_payze_setting[general][preauthorize]\" value=\"1\" id=\"input-general-preauthorize\" class=\"form-check-input\"";
        // line 72
        if ((($__internal_compile_15 = (($__internal_compile_16 = ($context["setting"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["general"] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["preauthorize"] ?? null) : null)) {
            echo " checked";
        }
        echo "/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-general-debug\">";
        // line 77
        echo ($context["entry_debug"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_payze_setting[general][debug]\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"payment_payze_setting[general][debug]\" value=\"1\" id=\"input-general-debug\" class=\"form-check-input\"";
        // line 81
        if ((($__internal_compile_17 = (($__internal_compile_18 = ($context["setting"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["general"] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["debug"] ?? null) : null)) {
            echo " checked";
        }
        echo "/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-geo-zone\">";
        // line 86
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_payze_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 90
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_compile_19 = $context["geo_zone"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["geo_zone_id"] ?? null) : null) == ($context["geo_zone_id"] ?? null))) {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_20 = $context["geo_zone"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["geo_zone_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_compile_21 = $context["geo_zone"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_compile_22 = $context["geo_zone"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["geo_zone_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_compile_23 = $context["geo_zone"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-sort-order\">";
        // line 103
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_payze_sort_order\" value=\"";
        // line 106
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-order-status\">
\t\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_24 = ($context["setting"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["order_status"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payze_order_status"]) {
            // line 113
            echo "\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-order-status-";
            // line 114
            echo (($__internal_compile_25 = $context["payze_order_status"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["code"] ?? null) : null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_compile_26 = $context["payze_order_status"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null), [], "any", false, false, false, 114);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<select name=\"payment_payze_setting[order_status][";
            // line 117
            echo (($__internal_compile_27 = $context["payze_order_status"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["code"] ?? null) : null);
            echo "][id]\" id=\"input-order-status-";
            echo (($__internal_compile_28 = $context["payze_order_status"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["code"] ?? null) : null);
            echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_compile_29 = $context["order_status"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["order_status_id"] ?? null) : null) == (($__internal_compile_30 = $context["payze_order_status"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null))) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_31 = $context["order_status"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["order_status_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_compile_32 = $context["order_status"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_compile_33 = $context["order_status"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["order_status_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_34 = $context["order_status"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payze_order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 137
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payze/admin/view/template/payment/payze.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 137,  358 => 130,  348 => 125,  342 => 124,  334 => 122,  326 => 120,  323 => 119,  319 => 118,  313 => 117,  305 => 114,  302 => 113,  298 => 112,  287 => 106,  281 => 103,  274 => 98,  268 => 97,  260 => 95,  252 => 93,  249 => 92,  245 => 91,  241 => 90,  234 => 86,  224 => 81,  217 => 77,  207 => 72,  200 => 68,  190 => 63,  183 => 59,  178 => 56,  161 => 53,  153 => 52,  150 => 51,  146 => 50,  141 => 48,  130 => 42,  124 => 39,  113 => 33,  107 => 30,  98 => 24,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payze/admin/view/template/payment/payze.twig", "E:\\xampp\\htdocs\\extension\\payze\\admin\\view\\template\\payment\\payze.twig");
    }
}
