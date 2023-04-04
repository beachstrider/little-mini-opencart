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

/* extension/opencart/catalog/view/template/payment/cheque.twig */
class __TwigTemplate_ff204ef993bda38470d341e31db1d2c4 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["text_instruction"] ?? null);
        echo "</legend>
  <div class=\"border rounded p-3 mb-3\">
    <p><b>";
        // line 4
        echo ($context["text_payable"] ?? null);
        echo "</b></p>
    <p>";
        // line 5
        echo ($context["payable"] ?? null);
        echo "</p>
    <b>";
        // line 6
        echo ($context["text_address"] ?? null);
        echo "</b>
    <br/>
    <p>";
        // line 8
        echo ($context["address"] ?? null);
        echo "</p>
    <p>";
        // line 9
        echo ($context["text_payment"] ?? null);
        echo "</p>
  </div>
  <div class=\"d-inline-block pt-2 pd-2 w-100 text-end\">
    <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\">";
        // line 12
        echo ($context["button_confirm"] ?? null);
        echo "</button>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/opencart/payment/cheque|confirm&language=";
        // line 20
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['redirect']) {
                location = json['redirect'];
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/payment/cheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  68 => 12,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/payment/cheque.twig", "E:\\xampp\\htdocs\\extension\\opencart\\catalog\\view\\template\\payment\\cheque.twig");
    }
}
