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
        echo "<form id=\"form-shipping-method\" class=\"border-t border-darkBlue py-[20px]\">
  <fieldset>
    <div class=\"sm:text-[16px] text-[12px] font-bold\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"mt-[12px]\">
        <div class=\"max-w-[814px] w-full mx-auto\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 7
            echo "            <div class=\"mb-[20px]\">
                <div class=\"bg-orangeLight flex justify-between items-center px-[10px] py-[2px] font-bold\">
                    <div class=\"\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 9);
            echo "</div>
                </div>
                <div class=\"bg-orangeGray flex justify-between items-center px-[10px] py-[15px]\">
                    <div class=\"\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 12);
            echo "</div>
                    <button class=\"font-semibold uppercase bg-indigo text-white px-[8px] py-[4px]\">";
            // line 13
            echo ($context["chose_place"] ?? null);
            echo "</button>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"hidden\"";
        if ( !($context["shipping_methods"] ?? null)) {
            echo " disabled";
        }
        echo ">
                <option value=\"\">";
        // line 18
        echo ($context["text_select"] ?? null);
        echo "</option>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 20
            echo "                <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 20);
            echo "\">
                    ";
            // line 21
            if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 21)) {
                // line 22
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                    // line 23
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 23);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 23) == ($context["code"] ?? null))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 23);
                    if (twig_get_attribute($this->env, $this->source, $context["quote"], "cost", [], "any", false, false, false, 23)) {
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 23);
                    }
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
            } else {
                // line 26
                echo "                    <option value=\"\" class=\"text-danger\" disabled>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 26);
                echo "</option>
                    ";
            }
            // line 28
            echo "                </optgroup>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </select>
            <button type=\"button\" id=\"button-shipping-method\" class=\"hidden btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
        </div>
    </div>
  </fieldset>
</form>
<script type=\"text/javascript\">
// Shipping Methods
\$('#button-shipping-method').on('click', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method|getMethods&language=";
        // line 43
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
                    toast({type: 'error', text: json['error']})
                }

                // Shipping Methods
                html = '<option value=\"\">";
        // line 60
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
        // line 93
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
        // line 108
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
                    toast({type: 'error', text: json['error']})
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
        return array (  226 => 108,  208 => 93,  172 => 60,  152 => 43,  137 => 30,  130 => 28,  124 => 26,  121 => 25,  102 => 23,  97 => 22,  95 => 21,  90 => 20,  86 => 19,  82 => 18,  75 => 17,  65 => 13,  61 => 12,  55 => 9,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_method.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\shipping_method.twig");
    }
}
