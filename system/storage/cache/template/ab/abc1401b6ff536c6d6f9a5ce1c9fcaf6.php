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

/* admin/view/template/sale/returns_form.twig */
class __TwigTemplate_cc7400f0fc38ab57be0ad02e488351d6 extends Template
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
        <button type=\"submit\" form=\"form-return\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-return\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 28
        echo ($context["text_order"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"order_id\" value=\"";
        // line 32
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
                    <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-ordered\" class=\"col-sm-2 col-form-label\">";
        // line 37
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 40
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" id=\"input-date-ordered\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"customer\" value=\"";
        // line 48
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/>
                    <datalist id=\"list-customer\"></datalist>
                    <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 50
        echo ($context["customer_id"] ?? null);
        echo "\"/>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 54
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 56
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 63
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 68
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 70
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 75
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 77
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 83
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 85
        echo ($context["entry_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"product\" value=\"";
        // line 87
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\"/>
                    <datalist id=\"list-product\"></datalist>
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 89
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                    <div class=\"form-text\">";
        // line 90
        echo ($context["help_product"] ?? null);
        echo "</div>
                    <div id=\"error-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 95
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"model\" value=\"";
        // line 97
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 102
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 104
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-return-reason\" class=\"col-sm-2 col-form-label\">";
        // line 108
        echo ($context["entry_return_reason"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"return_reason_id\" id=\"input-return-reason\" class=\"form-select\">
                      ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 112
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 112);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 112) == ($context["return_reason_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 112);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </select>
                    <div id=\"error-return-reason\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-opened\" class=\"col-sm-2 col-form-label\">";
        // line 119
        echo ($context["entry_opened"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"opened\" id=\"input-opened\" class=\"form-select\">
                      <option value=\"1\"";
        // line 122
        if (($context["opened"] ?? null)) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_opened"] ?? null);
        echo "</option>
                      <option value=\"0\"";
        // line 123
        if ( !($context["opened"] ?? null)) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_unopened"] ?? null);
        echo "</option>
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 128
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 130
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-return-action\" class=\"col-sm-2 col-form-label\">";
        // line 134
        echo ($context["entry_return_action"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"return_action_id\" id=\"input-return-action\" class=\"form-select\">
                      <option value=\"0\"></option>
                      ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_action"]) {
            // line 139
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 139);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_action"], "return_action_id", [], "any", false, false, false, 139) == ($context["return_action_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_action"], "name", [], "any", false, false, false, 139);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </select>
                  </div>
                </div>
                ";
        // line 144
        if ( !($context["return_id"] ?? null)) {
            // line 145
            echo "                  <div class=\"row mb-3\">
                    <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
            // line 146
            echo ($context["entry_return_status"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-select\">
                        ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
                // line 150
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 150);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 150) == ($context["return_status_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 150);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                      </select>
                    </div>
                  </div>
                ";
        }
        // line 156
        echo "              </fieldset>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 160
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 161
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 164
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 166
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"return_status_id\" id=\"input-return-status\" class=\"form-select\">
                      ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 170
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 170);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 170) == ($context["return_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 170);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-notify\" class=\"col-sm-2 col-form-label\">";
        // line 176
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 182
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 184
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 188
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"return_id\" value=\"";
        // line 193
        echo ($context["return_id"] ?? null);
        echo "\" id=\"input-return-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val(item['label']);
        \$('#input-customer-id').val(item['value']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);
    }
});

\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 233
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        model: item['model']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-product').val(item['label']);
        \$('#input-product-id').val(item['value']);
        \$('#input-model').val(item['model']);
    }
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/returns|addHistory&user_token=";
        // line 263
        echo ($context["user_token"] ?? null);
        echo "&return_id=' + \$('#input-return-id').val(),
        type: 'post',
        dataType: 'json',
        data: 'return_status_id=' + \$('#input-return-status').val() + '&notify=' + (\$('#input-notify').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('#input-comment').val()),
        beforeSend: function () {
            \$('#button-history').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-history').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#history').load('index.php?route=sale/returns|history&user_token=";
        // line 281
        echo ($context["user_token"] ?? null);
        echo "&return_id=' + \$('#input-return-id').val());

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-history-comment').val('');
            }
        }
    });
});
//--></script>
";
        // line 291
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/returns_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 291,  602 => 281,  581 => 263,  548 => 233,  515 => 203,  502 => 193,  494 => 188,  487 => 184,  482 => 182,  473 => 176,  467 => 172,  452 => 170,  448 => 169,  442 => 166,  437 => 164,  431 => 161,  427 => 160,  421 => 156,  415 => 152,  400 => 150,  396 => 149,  390 => 146,  387 => 145,  385 => 144,  380 => 141,  365 => 139,  361 => 138,  354 => 134,  345 => 130,  340 => 128,  328 => 123,  320 => 122,  314 => 119,  307 => 114,  292 => 112,  288 => 111,  282 => 108,  273 => 104,  268 => 102,  258 => 97,  253 => 95,  245 => 90,  241 => 89,  234 => 87,  229 => 85,  224 => 83,  213 => 77,  208 => 75,  198 => 70,  193 => 68,  183 => 63,  178 => 61,  168 => 56,  163 => 54,  156 => 50,  149 => 48,  144 => 46,  133 => 40,  127 => 37,  117 => 32,  112 => 30,  107 => 28,  99 => 23,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/returns_form.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\sale\\returns_form.twig");
    }
}
