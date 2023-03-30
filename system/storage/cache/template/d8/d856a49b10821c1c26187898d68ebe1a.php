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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_60e6d49f9d35631023832cb1803fb9b0 extends Template
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
        echo "<form id=\"form-payment-method\">
  <fieldset>
    <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"input-group\">
      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-select\"";
        // line 5
        if ( !($context["payment_methods"] ?? null)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 8
            echo "          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 8);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        ";
        // line 11
        if (($context["stores"] ?? null)) {
            // line 12
            echo "          <optgroup label=\"";
            echo ($context["text_stored"] ?? null);
            echo "\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 14
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "code", [], "any", false, false, false, 14);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "code", [], "any", false, false, false, 14) == ($context["code"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 14);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "          </optgroup>
        ";
        }
        // line 18
        echo "      </select>
      <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
    </div>
  </fieldset>
</form>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 25
        echo ($context["text_comments"] ?? null);
        echo "</strong></label> <textarea name=\"comment\" rows=\"3\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
</div>
";
        // line 27
        if (($context["text_agree"] ?? null)) {
            // line 28
            echo "  <div class=\"mb-2\">
    <div class=\"text-end\">";
            // line 29
            echo ($context["text_agree"] ?? null);
            echo " <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"";
            if (($context["agree"] ?? null)) {
                echo " checked";
            }
            echo "/></div>
  </div>
";
        }
        // line 32
        echo "<script type=\"text/javascript\"><!--
// Payment Methods
\$('#button-payment-method').on('click', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|getMethods&language=";
        // line 39
        echo ($context["language"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function () {
                \$('#input-payment-method').prop('disabled', true);
            },
            success: function (json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').prop('disabled', true);
                }

                html = '<option value=\"\">";
        // line 57
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['payment_methods']) {
                    for (i in json['payment_methods']) {
                        if (json['payment_methods'][i]['code'] == \$('#input-payment-method').val()) {
                            html += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected>' + json['payment_methods'][i]['title'] + '</option>';
                        } else {
                            html += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
                        }
                    }

                    \$('#input-payment-method').prop('disabled', false);
                }

                \$('#input-payment-method').html(html);

                \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 73
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Payment Method
\$('#input-payment-method').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|save&language=";
        // line 88
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-payment-method').serialize(),
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

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 113
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Comment
\$('#input-comment').on('focusout', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|comment&language=";
        // line 129
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-comment').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

/* Agree to Terms */
\$('#input-agree').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method|agree&language=";
        // line 166
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 178
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 178,  293 => 166,  253 => 129,  234 => 113,  206 => 88,  188 => 73,  169 => 57,  148 => 39,  139 => 32,  129 => 29,  126 => 28,  124 => 27,  117 => 25,  108 => 18,  104 => 16,  89 => 14,  85 => 13,  80 => 12,  78 => 11,  75 => 10,  60 => 8,  56 => 7,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_method.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\payment_method.twig");
    }
}
