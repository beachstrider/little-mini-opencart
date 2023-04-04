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

/* admin/view/template/marketing/contact.twig */
class __TwigTemplate_982926bd10c684649297911edb25caae extends Template
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
\t\t\t\t<button type=\"button\" id=\"button-send\" class=\"btn btn-primary\"><i class=\"fa-solid fa-envelope\"></i> ";
        // line 6
        echo ($context["button_send"] ?? null);
        echo "</button></div>
\t\t\t<h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-envelope\"></i> ";
        // line 17
        echo ($context["text_mail"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"store_id\" id=\"input-store\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 24
        echo ($context["text_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 26);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label for=\"input-to\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"to\" id=\"input-to\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"newsletter\">";
        // line 35
        echo ($context["text_newsletter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"customer_all\">";
        // line 36
        echo ($context["text_customer_all"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"customer_group\">";
        // line 37
        echo ($context["text_customer_group"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"customer\">";
        // line 38
        echo ($context["text_customer"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"affiliate_all\">";
        // line 39
        echo ($context["text_affiliate_all"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"affiliate\">";
        // line 40
        echo ($context["text_affiliate"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"product\">";
        // line 41
        echo ($context["text_product"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 to\" id=\"to-customer-group\">
\t\t\t\t\t\t<label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 50);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 to\" id=\"to-customer\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 58
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
              <datalist id=\"list-customer\"></datalist>
\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t<table id=\"mail-customer\" class=\"table table-sm m-0\"><tbody></tbody></table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 63
        echo ($context["help_customer"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 to\" id=\"to-affiliate\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 67
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 69
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" list=\"list-affiliate\" class=\"form-control\"/>
              <datalist id=\"list-affiliate\"></datalist>
\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t<table id=\"mail-affiliate\" class=\"table table-sm m-0\"><tbody></tbody></table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 74
        echo ($context["help_affiliate"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 to\" id=\"to-product\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 78
        echo ($context["entry_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 80
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\"/>
              <datalist id=\"list-product\"></datalist>
\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t<table id=\"mail-product\" class=\"table table-sm m-0\"><tbody></tbody></table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-text\">";
        // line 85
        echo ($context["help_product"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-subject\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_subject"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" value=\"\" placeholder=\"";
        // line 91
        echo ($context["entry_subject"] ?? null);
        echo "\" id=\"input-subject\" class=\"form-control\"/>
              <div id=\"error-subject\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3 required\">
\t\t\t\t\t\t<label for=\"input-message\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_message"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div id=\"input-message\">
\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"";
        // line 99
        echo ($context["entry_message"] ?? null);
        echo "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
        echo ($context["ckeditor"] ?? null);
        echo "\" class=\"form-control\"></textarea>
                <div id=\"error-message\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-to').on('change', function () {
    \$('.to').hide();

    \$('#to-' + this.value.replaceAll('_', '-')).show();
});

\$('#input-to').trigger('change');

// Customers
\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 122
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val('');

        \$('#mail-customer-' + item['value']).remove();

        html = '<tr id=\"mail-customer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-customer tbody').append(html);
    }
});

\$('#mail-customer').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Affiliates
\$('#input-affiliate').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request) + '&filter_affiliate=1',
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function (item) {
        \$('#input-affiliate').val('');

        \$('#mail-affiliate-' + item['value']).remove();

        html  = '<tr id=\"mail-affiliate-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-affiliate tbody').append(html);
    }
});

\$('#input-affiliate').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Products
\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 196
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function (item) {
        \$('#input-product').val('');

        \$('#mail-product-' + item['value']).remove();

        html  = '<tr id=\"mail-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-product tbody').append(html);
    }
});

\$('#mail-product').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 230
        echo ($context["ckeditor"] ?? null);
        echo "'
});

\$('#button-send').on('click', function () {
    var element = this;

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    var next = 'index.php?route=marketing/contact|send&user_token=";
        // line 240
        echo ($context["user_token"] ?? null);
        echo "';

    var send = function () {
        \$.ajax({
            url: next,
            type: 'post',
            data: \$('#content form').serialize(),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-send').prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$('#button-send').prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('.invalid-feedback').removeClass('d-block');

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }

                    delete json['error'];
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(send);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    };

    chain.attach(send);
});
//--></script>
";
        // line 289
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 289,  417 => 240,  404 => 230,  367 => 196,  327 => 159,  287 => 122,  259 => 99,  253 => 96,  245 => 91,  240 => 89,  233 => 85,  225 => 80,  220 => 78,  213 => 74,  205 => 69,  200 => 67,  193 => 63,  185 => 58,  180 => 56,  174 => 52,  163 => 50,  159 => 49,  153 => 46,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  115 => 32,  109 => 28,  98 => 26,  94 => 25,  90 => 24,  84 => 21,  77 => 17,  70 => 12,  59 => 10,  55 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/contact.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\marketing\\contact.twig");
    }
}
