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

/* extension/paypal/admin/view/template/payment/auth.twig */
class __TwigTemplate_854f424e4b648c80edf34211dd75726c extends Template
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
<div id=\"content\" class=\"payment-paypal\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title_main"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["text_version"] ?? null)) {
            // line 21
            echo "\t\t<div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["text_version"] ?? null);
            echo "</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"card card-auth\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"section-connect\">
\t\t\t\t\t<div class=\"icon icon-logo\"></div>
\t\t\t\t\t<div class=\"welcome\">";
        // line 28
        echo ($context["text_welcome"] ?? null);
        echo "</div>
\t\t\t\t\t<a href=\"";
        // line 29
        echo (($__internal_compile_2 = (($__internal_compile_3 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ppcp"] ?? null) : null);
        echo "\" target=\"_blank\" class=\"btn btn-primary button-connect-ppcp\" data-paypal-button=\"PPLtBlue\" data-paypal-onboard-complete=\"onBoardedCallback\">";
        echo ($context["button_connect"] ?? null);
        echo "</a>
\t\t\t\t\t<div class=\"checkout-express\">";
        // line 30
        echo ($context["text_checkout_express"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"support\">";
        // line 31
        echo ($context["text_support"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col offset-sm-4 col-sm-4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<label class=\"col-form-label text-start\" for=\"input_environment\">";
        // line 35
        echo ($context["entry_environment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_environment\" id=\"input_environment\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t";
        // line 38
        if ((($context["environment"] ?? null) == "production")) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\" selected=\"selected\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\">";
            // line 40
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            // line 43
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script src=\"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\"></script>
<script type=\"text/javascript\">

\$('#input_environment').on('change', function() {
\tvar environment = \$(this).val();
\t
\tif (environment == 'production') {
\t\t\$('.button-connect-ppcp').attr('href', '";
        // line 62
        echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["production"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ppcp"] ?? null) : null);
        echo "');
\t\t\$('.button-connect-express-checkout').attr('href', '";
        // line 63
        echo (($__internal_compile_6 = (($__internal_compile_7 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["production"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["express_checkout"] ?? null) : null);
        echo "');
\t} else {
\t\t\$('.button-connect-ppcp').attr('href', '";
        // line 65
        echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["sandbox"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["ppcp"] ?? null) : null);
        echo "');
\t\t\$('.button-connect-express_checkout').attr('href', '";
        // line 66
        echo (($__internal_compile_10 = (($__internal_compile_11 = ($context["configure_url"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["sandbox"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["express_checkout"] ?? null) : null);
        echo "');
\t}\t
});

\$('.payment-paypal').on('click', '.button-agree', function() {\t
\t\$.ajax({
\t\ttype: 'post',
\t\turl: '";
        // line 73
        echo ($context["agree_url"] ?? null);
        echo "',
\t\tdata: '',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.payment-paypal .alert').remove();
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function onBoardedCallback(authorization_code, shared_id) {
\tvar environment = \$('#input_environment').val();
\t
\t\$.ajax({
\t\turl: '";
        // line 93
        echo ($context["callback_url"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce=";
        // line 95
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
";
        // line 107
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/paypal/admin/view/template/payment/auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 107,  225 => 95,  220 => 93,  197 => 73,  187 => 66,  183 => 65,  178 => 63,  174 => 62,  155 => 45,  150 => 43,  145 => 42,  140 => 40,  135 => 39,  133 => 38,  127 => 35,  120 => 31,  116 => 30,  110 => 29,  106 => 28,  99 => 24,  96 => 23,  90 => 21,  87 => 20,  81 => 18,  79 => 17,  73 => 13,  62 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/paypal/admin/view/template/payment/auth.twig", "E:\\xampp\\htdocs\\extension\\paypal\\admin\\view\\template\\payment\\auth.twig");
    }
}
