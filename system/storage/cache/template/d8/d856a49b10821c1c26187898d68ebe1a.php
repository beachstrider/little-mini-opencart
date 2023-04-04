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
        echo "<h1 class=\"sm:mt-[40px] mt-[30px] sm:text-[40px] text-[30px] font-bold flex justify-between uppercase\">
    <div class=\"flex\">
        ";
        // line 3
        echo ($context["heading_title_1"] ?? null);
        echo "&nbsp;<span class=\"text-orange\">";
        echo ($context["heading_title_2"] ?? null);
        echo "</span>
    </div>
    <div class=\"opacity-[0.5]\">(4/4)</div>
</h1>

<div class=\"sm:grid grid-cols-5 gap-[30px] sm:py-[40px] py-[30px]\">
  <div class=\"col-span-3\">
    <form id=\"form-payment-method\">
      <div id=\"btn-group-payment-method\"></div>
      
      <div class=\"input-group\">
        <input type=\"hidden\" name=\"payment_method\" id=\"input-payment-method\">
        <button type=\"button\" id=\"btn-refetch-payment-method\" class=\"btn btn-light hidden\"><i class=\"fa-solid fa-rotate\"></i></button>
      </div>
    </form>
    ";
        // line 18
        if (($context["text_agree"] ?? null)) {
            // line 19
            echo "      <div class=\"mb-2\">
        <div class=\"text-end\">";
            // line 20
            echo ($context["text_agree"] ?? null);
            echo " <input type=\"hidden\" name=\"agree\" value=\"1\" id=\"input-agree\" /></div>
      </div>
    ";
        }
        // line 23
        echo "
    <div id=\"checkout-payment\" class=\"mt-[40px]\">
      ";
        // line 25
        if (($context["payment"] ?? null)) {
            // line 26
            echo "        ";
            echo ($context["payment"] ?? null);
            echo "
      ";
        }
        // line 28
        echo "    </div>
  
  </div>
</div>
<br/>

<script type=\"text/javascript\">
// Payment Methods
\$('#btn-refetch-payment-method').on('click', function () {
  var element = this;

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=checkout/payment_method|getMethods&language=";
        // line 41
        echo ($context["language"] ?? null);
        echo "',
      dataType: 'json',
      success: function (json) {
        console.log(json);

        if (json['redirect']) {
          location = json['redirect'];
        }

        if (json['error']) {
          toast({type: 'error', text: json['error']})
        }

        html = '';

        if (json['payment_methods']) {
          for (i in json['payment_methods']) {
            html += `
              <div class=\"sm:py-[20px] py-[15px] border-b border-darkBlue flex gap-[30px]\">
                <button type=\"button\" value=\"\${json['payment_methods'][i]['code']}\" class=\"btn-payment-method min-w-[270px] py-[12px] bg-orangeGray text-indigo font-semibold uppercase\" \${json['payment_methods'][i]['code'] == \$('#input-payment-method').val() ? 'selected' : ''}>\${json['payment_methods'][i]['title']}</button>
              </div>
            `;
          }
        }

        \$('#btn-group-payment-method').html(html);
        \$('#checkout-confirm').hide();
        \$('#checkout-payment-method').show();
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
});

// Payment Method
\$(document).on('click', '.btn-payment-method', async function (e) {
  \$('#input-payment-method').val(\$(e.target).val());

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=checkout/payment_method|save&language=";
        // line 83
        echo ($context["language"] ?? null);
        echo "',
      type: 'post',
      data: \$('#form-payment-method').serialize(),
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
          \$('#checkout-payment').html(json['payment']);
          \$('#checkout-confirm').load('index.php?route=checkout/confirm|confirm&language=";
        // line 101
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

</script>
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
        return array (  165 => 101,  144 => 83,  99 => 41,  84 => 28,  78 => 26,  76 => 25,  72 => 23,  66 => 20,  63 => 19,  61 => 18,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_method.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\payment_method.twig");
    }
}
