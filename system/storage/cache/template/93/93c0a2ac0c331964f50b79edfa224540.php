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

/* catalog/view/template/checkout/shipping_method.twig */
class __TwigTemplate_7e3a4d9fe324855c23c385c7d75a843d extends Template
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
        echo "<form id=\"form-shipping-method\">
  <fieldset>
    <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"input-group\">
      <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-select\"";
        // line 5
        if ( !($context["shipping_methods"] ?? null)) {
            echo " disabled";
        }
        echo ">
        <option value=\"\">";
        // line 6
        echo ($context["text_select"] ?? null);
        echo "</option>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 8
            echo "          <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 8);
            echo "\">
            ";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 9)) {
                // line 10
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                    // line 11
                    echo "                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 11);
                    if (twig_get_attribute($this->env, $this->source, $context["quote"], "cost", [], "any", false, false, false, 11)) {
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 11);
                    }
                    echo "</option>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
            } else {
                // line 14
                echo "              <option value=\"\" class=\"text-danger\" disabled>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 14);
                echo "</option>
            ";
            }
            // line 16
            echo "          </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </select>
      <button type=\"button\" id=\"button-shipping-method\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
    </div>
  </fieldset>
</form>
<script type=\"text/javascript\"><!--
// Shipping Methods
\$('#button-shipping-method').on('click', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method|getMethods&language=";
        // line 30
        echo ($context["language"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#input-shipping-method').prop('disabled', true);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                // Shipping Methods
                html = '<option value=\"\">";
        // line 47
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['shipping_methods']) {
                    for (i in json['shipping_methods']) {
                        html += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

                        if (!json['shipping_methods'][i]['error']) {
                            for (j in json['shipping_methods'][i]['quote']) {
                                if (json['shipping_methods'][i]['quote'][j]['cost']) {
                                    text = json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'];
                                } else {
                                    text = json['shipping_methods'][i]['quote'][j]['title'];
                                }

                                if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method').val()) {
                                    html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected>' + text + '</option>';
                                } else {
                                    html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + text + '</option>';
                                }

                            }
                        } else {
                            html += '<option value=\"\" style=\"color: #ff0000;\" disabled>' + json['shipping_methods'][i]['error'] + '</option>';
                        }

                        html += '</optgroup>';
                    }

                    \$('#input-shipping-method').prop('disabled', false);
                }

                \$('#input-shipping-method').html(html);

                \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 80
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Shipping Method
\$('#input-shipping-method').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method|save&language=";
        // line 95
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-shipping-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-payment-method').trigger('click');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 95,  177 => 80,  141 => 47,  121 => 30,  107 => 18,  100 => 16,  94 => 14,  91 => 13,  72 => 11,  67 => 10,  65 => 9,  60 => 8,  56 => 7,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_method.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\shipping_method.twig");
    }
}
