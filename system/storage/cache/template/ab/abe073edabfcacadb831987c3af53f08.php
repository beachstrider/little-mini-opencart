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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_14101c0bf7e280ea44011c28f399a616 extends Template
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
        echo "<h1 class=\"sm:mt-[40px] mt-[30px] sm:text-[40px] text-[30px] font-bold flex justify-between\">
\t<div class=\"flex\">
\t\t";
        // line 3
        echo ($context["heading_title_1"] ?? null);
        echo "&nbsp;<span class=\"text-orange\">";
        echo ($context["heading_title_2"] ?? null);
        echo "</span>
\t</div>
\t<div class=\"opacity-[0.5]\">(1/4)</div>
</h1>

<form id=\"form-register\" class=\"sm:mt-[38px] mt-[28px]\">
\t<div class=\"flex justify-between sm:text-[16px] text-[12px]\">
\t\t<div>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t<div class=\"flex flex-col items-end\">
\t\t\t<p>";
        // line 12
        echo ($context["text_login"] ?? null);
        echo "</p>
\t\t\t<a href=\"";
        // line 13
        echo ($context["login"] ?? null);
        echo "\" class=\"block border border-dark px-[16px] py-[3px] mt-[6px]\">";
        echo ($context["text_btn_login"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
\t<div class=\"sm:mt-[20px] mt-[15px] border-t border-darkBlue sm:pt-[20px] sm:pb-[80px] pt-[15px] pb:-[60px] flex flex-col gap-[14px]\">
\t\t<div class=\"hidden\">
\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 20
            echo "\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20) == ($context["customer_group_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 20);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</select>
\t\t\t<input type=\"hidden\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"/>
\t\t</div>

\t\t";
        // line 27
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 29
        echo ($context["entry_fullname"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 34
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo " ...\" id=\"input-firstname\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"\">
\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 37
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo " ...\" id=\"input-lastname\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"error-firstname\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 43
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-c_o\" class=\"form-label sm:w-[270px] flex items-center\">C/O (care of):<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"c_o\" value=\"\" placeholder=\"...\" id=\"input-c_o\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-c_o\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 54
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-shipping-address-1\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 56
        echo ($context["entry_address_1"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 60
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"...\" id=\"input-shipping-address-1\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-shipping-address-1\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 65
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-shipping-postcode\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 67
        echo ($context["entry_postcode_city"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required grid grid-cols-5 gap-[30px]\">
\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 72
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-span-3\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_city\" value=\"";
        // line 75
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"w-full\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"error-shipping-postcode\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 81
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-shipping-zone\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 83
        echo ($context["entry_zone"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"w-full\" data-oc-value=\"";
        // line 87
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
\t\t\t</div>
\t\t\t<div id=\"error-shipping-zone\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 92
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-shipping-country\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 94
        echo ($context["entry_country"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"w-full\">
\t\t\t\t\t<option value=\"\">";
        // line 99
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 101
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 101);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 101) == ($context["shipping_country_id"] ?? null))) {
                echo " selected ";
            }
            echo ">
\t\t\t\t\t\t\t";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 102);
            echo "
\t\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div id=\"error-shipping-country\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 110
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-email\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 112
        echo ($context["entry_email"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 116
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " ...\" id=\"input-email\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-email\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 121
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]";
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-shipping-postcode\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 123
        echo ($context["entry_telephone"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required gap-[30px]\">
\t\t\t\t<input type=\"text\" name=\"telephone\" value=\"";
        // line 127
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo " ...\" id=\"input-telephone\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-telephone\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t";
        // line 132
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end items-center\">
\t\t\t\t<label for=\"input-password\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 134
        echo ($context["text_password"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex items-center\">
\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 138
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo " ...\" id=\"input-password\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div id=\"error-password\" class=\"text-[12px] text-orange flex items-center\"></div>
\t\t</div>
\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-start-3 col-span-2 required flex items-center\">
\t\t\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"\"/>
\t\t\t\t<div for=\"input-newsletter\" class=\"form-check-label\">";
        // line 145
        echo ($context["entry_newsletter"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 150
        echo "\t\t";
        if (($context["text_agree"] ?? null)) {
            // line 151
            echo "\t\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t\t<div class=\"col-start-3 col-span-2 required flex items-center\">
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/>
\t\t\t\t\t<div for=\"input-register-agree\" class=\"form-check-label\">";
            // line 154
            echo ($context["text_agree"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 158
        echo "\t\t";
        // line 159
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-start-3 col-span-2 required flex items-center\">
\t\t\t\t<div class=\"required\">";
        // line 161
        echo ($context["captcha"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 165
        echo "\t\t<div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
\t\t\t<div class=\"col-span-2 flex justify-end\">
\t\t\t\t<div class=\"min-w-[270px]\">
\t\t\t\t\t<button type=\"button\" id=\"button-back\" class=\"min-w-[170px] border border-darkBlue text-center uppercase font-bold py-[14px]\">";
        // line 168
        echo ($context["button_back"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-span-2 required flex justify-end\">
\t\t\t\t<button type=\"submit\" id=\"button-register\" class=\"min-w-[170px] bg-indigo text-center text-[white] uppercase font-bold py-[14px]\">";
        // line 172
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</form>

<script>
\$('input[name=\\'account\\']').on('click', function () {
  if (\$(this).val() == 1) {
    \$('#password').removeClass('d-none');
  } else {
    // If guest hide password field
    \$('#password').addClass('d-none');
  }

  if (\$(this).val() == 1) {
    \$('#agree').removeClass('d-none');
  } else {
    // If guest hide register agree field
    \$('#agree').addClass('d-none');
  }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function () {
  var element = this;

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=account/custom_field&language=";
        // line 203
        echo ($context["language"] ?? null);
        echo "&customer_group_id=' + \$(element).val(),
      dataType: 'json',
      beforeSend: function () {
        \$(element).prop('disabled', true);
      },
      complete: function () {
        \$(element).prop('disabled', false);
      },
      success: function (json) {
        \$('.custom-field').addClass('d-none');
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

          if (custom_field['required']) {
            \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function () {
  if (\$(this).prop('checked')) {
    \$('#shipping-address').hide();
  } else {
    \$('#shipping-address').show();
  }
});

\$('#form-register').on('submit', function (e) {
  e.preventDefault();

  var element = this;

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=checkout/register|save&language=";
        // line 249
        echo ($context["language"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$('#form-register').serialize(),
      contentType: 'application/x-www-form-urlencoded',
      beforeSend: function () {
        \$(element).prop('disabled', true).addClass('loading');
      },
      complete: function () {
        \$(element).prop('disabled', false).removeClass('loading');
      },
      success: function (json) {
        \$('#form-register').find('.is-invalid').removeClass('is-invalid');
        \$('#form-register').find('.invalid-feedback').removeClass('d-block');

        console.log(json);

        if (json['redirect']) {
          location = json['redirect'];
        }

        if (json['error']) {
          if (json['error']['warning']) {
            toast({type: 'warning', text: json['error']['warning']})
          }

          for (key in json['error']) {
            \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
            \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
          }
        }

        if (json['success']) {
\t\t\t\t\ttoast({type: 'success', text: json['success']});

\t\t\t\t\tlocation.reload();
\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('select[name\$=\\'_country_id\\']').on('change', function () {
  var element = this;
  var type = \$(this).attr('name').slice(0, -11);

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=localisation/country&language=";
        // line 300
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-' + type + '-country').val(),
      dataType: 'json',
      beforeSend: function () {
        \$(element).prop('disabled', true);
      },
      complete: function () {
        \$(element).prop('disabled', false);
      },
      success: function (json) {
        if (json['postcode_required'] == '1') {
          \$('#input-' + type + '-postcode').parent().addClass('required');
        } else {
          \$('#input-' + type + '-postcode').parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 315
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
              html += ' selected';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected>";
        // line 328
        echo ($context["text_none"] ?? null);
        echo "</option>';
        }

        \$('#input-' + type + '-zone').html(html);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
</script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 328,  518 => 315,  500 => 300,  446 => 249,  397 => 203,  363 => 172,  356 => 168,  351 => 165,  345 => 161,  341 => 159,  339 => 158,  332 => 154,  327 => 151,  324 => 150,  317 => 145,  305 => 138,  298 => 134,  294 => 132,  285 => 127,  278 => 123,  270 => 121,  261 => 116,  254 => 112,  250 => 110,  244 => 105,  235 => 102,  226 => 101,  222 => 100,  218 => 99,  210 => 94,  206 => 92,  199 => 87,  192 => 83,  188 => 81,  178 => 75,  170 => 72,  162 => 67,  158 => 65,  151 => 60,  144 => 56,  140 => 54,  128 => 43,  118 => 37,  110 => 34,  102 => 29,  98 => 27,  92 => 22,  77 => 20,  73 => 19,  62 => 13,  58 => 12,  53 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\register.twig");
    }
}
