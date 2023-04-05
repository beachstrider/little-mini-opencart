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
class __TwigTemplate_b5ce86c4896a8d4f6b738413a2889bb2 extends Template
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
        echo "<form id=\"form-shipping-method\" class=\"border-t border-darkBlue py-[20px] ";
        if ( !($context["shipping_methods"] ?? null)) {
            echo " hidden ";
        }
        echo "\">
    <input name=\"shipping_method\" id=\"input-shipping-method\" type=\"hidden\" value=\"\" >
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
                <div class=\"bg-orangeLight flex justify-between items-center px-[10px] py-[4px] font-bold\">
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
                    <button type=\"button\" class=\"font-semibold uppercase bg-indigo text-white px-[8px] py-[4px]\" onclick=\"\$('#input-shipping-method').val('";
            // line 13
            echo twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 13)), "code", [], "any", false, false, false, 13);
            echo "');\$('#form-shipping-method').submit();\">";
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
        echo "        </div>
    </div>
</form>
<button type=\"button\" id=\"button-shipping-method\" class=\"hidden\"></button>

<script type=\"text/javascript\">

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
                    toast({type: 'error', text: json['error']})
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
\$('#form-shipping-method').on('submit', function (e) {
    e.preventDefault();
    const form = \$(this);

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method|save&language=";
        // line 96
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: form.serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    toast({type: 'error', text: json['error']})
                }

                if (json['success']) {
                    toast({type: 'success', text: json['success']})

                    \$('#checkout-shipping-address-method').hide();
                    \$('#checkout-confirm').show();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
</script>";
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
        return array (  171 => 96,  152 => 80,  116 => 47,  96 => 30,  81 => 17,  69 => 13,  65 => 12,  59 => 9,  55 => 7,  51 => 6,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_method.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/checkout/shipping_method.twig");
    }
}
