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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_2d43ea618b7ca97ebc8433ae3d9f8765 extends Template
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
\t<div class=\"opacity-[0.5]\">(2/4)</div>
</h1>

<fieldset>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 9
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"flex justify-between\">
      <div class=\"sm:text-[16px] text-[12px]\">
        <div class=\"font-bold uppercase\">
          ";
        // line 13
        echo ($context["entry_delivery_address"] ?? null);
        echo "
        </div>
        <div class=\"\" id=\"text-shipping-address\">";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_last($this->env, ($context["addresses"] ?? null)), "address_1", [], "any", false, false, false, 15);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_last($this->env, ($context["addresses"] ?? null)), "city", [], "any", false, false, false, 15);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_last($this->env, ($context["addresses"] ?? null)), "zone", [], "any", false, false, false, 15);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, twig_last($this->env, ($context["addresses"] ?? null)), "country", [], "any", false, false, false, 15);
        echo "</div>
      </div>
      <div class=\"\">
        <div class=\"\">";
        // line 18
        echo ($context["if_you_choose_home_delivery"] ?? null);
        echo "</div>
        <button id=\"btn-change-address\" value=\"0\" class=\"px-[8px] py-[4px] mt-[6px] border border-dark\">";
        // line 19
        echo ($context["change"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
  <div id=\"shipping-existing\" class=\"hidden\">
    <input type=\"hidden\" name=\"address_id\" id=\"input-shipping-address\" value=\"";
        // line 24
        echo twig_get_attribute($this->env, $this->source, twig_last($this->env, ($context["addresses"] ?? null)), "address_id", [], "any", false, false, false, 24);
        echo "\">
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 27
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-shipping-address\">
      <div class=\"sm:mt-[20px] mt-[15px] border-t border-darkBlue sm:pt-[20px] sm:pb-[80px] pt-[15px] pb:-[60px] flex flex-col gap-[14px]\">
        <div class=\"hidden\">
          <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 33
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 33);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 33) == ($context["customer_group_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 33);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </select>
          <input type=\"hidden\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"/>
        </div>

        ";
        // line 40
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 42
        echo ($context["entry_fullname"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
            <div class=\"\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 47
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo " ...\" id=\"input-firstname\" class=\"w-full\"/>
            </div>
            <div class=\"\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 50
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo " ...\" id=\"input-lastname\" class=\"w-full\"/>
            </div>
          </div>
          <div id=\"error-firstname\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 56
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-c_o\" class=\"form-label sm:w-[270px] flex items-center\">C/O (care of):<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required flex items-center\">
            <input type=\"text\" name=\"c_o\" value=\"\" placeholder=\"...\" id=\"input-c_o\" class=\"w-full\"/>
          </div>
          <div id=\"error-c_o\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 67
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-shipping-address-1\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 69
        echo ($context["entry_address_1"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required flex items-center\">
            <input type=\"text\" name=\"address_1\" value=\"";
        // line 73
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"...\" id=\"input-shipping-address-1\" class=\"w-full\"/>
          </div>
          <div id=\"error-shipping-address-1\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 78
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-shipping-postcode\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 80
        echo ($context["entry_postcode_city"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required grid grid-cols-5 gap-[30px]\">
            <div class=\"col-span-2\">
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 85
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"w-full\"/>
            </div>
            <div class=\"col-span-3\">
              <input type=\"text\" name=\"city\" value=\"";
        // line 88
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"w-full\"/>
            </div>
          </div>
          <div id=\"error-shipping-postcode\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 94
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-shipping-zone\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 96
        echo ($context["entry_zone"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required flex items-center\">
            <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"w-full\"></select>
          </div>
          <div id=\"error-shipping-zone\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 105
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end items-center\">
            <label for=\"input-shipping-country\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 107
        echo ($context["entry_country"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </label>
          </div>
          <div class=\"col-span-2 required flex items-center\">
            <select name=\"country_id\" id=\"input-shipping-country\" class=\"w-full\">
              <option value=\"\">";
        // line 112
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 114
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 114);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 114) == ($context["shipping_country_id"] ?? null))) {
                echo " selected ";
            }
            echo ">
                  ";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 115);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </select>
          </div>
          <div id=\"error-shipping-country\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
        ";
        // line 123
        echo "        <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
          <div class=\"col-span-2 flex justify-end\">
          </div>
          <div class=\"col-span-2 required flex justify-end\">
            <button type=\"submit\" id=\"button-register\" class=\"min-w-[170px] bg-indigo text-center text-[white] uppercase font-bold py-[14px]\">";
        // line 127
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\">
\$('#btn-change-address').on('click', function () {
  if (\$(this).val() == 1) {
    \$('#shipping-new').hide();
    \$(this).val(0);
    \$(this).removeClass('bg-darkBlue');
    \$(this).removeClass('text-white');
    \$(this).text('Change');
  } else {
    \$('#shipping-new').show();
    \$(this).val(1);
    \$(this).addClass('bg-darkBlue');
    \$(this).addClass('text-white');
    \$(this).text('Hide')
  }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function () {
  var element = this;

  chain.attach(function () {
    return \$.ajax({
      url: 'index.php?route=checkout/shipping_address|address&language=";
        // line 157
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
      dataType: 'json',
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
          toast({type: 'error', text: json['error']})
        }

        if (json['success']) {
          toast({type: 'success', text: json['success']})

          \$('#button-shipping-method').trigger('click');
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
});

// New Shipping Address
\$('#form-shipping-address').on('submit', function (e) {
  e.preventDefault();

  chain.attach(function () {
      return \$.ajax({
          url: 'index.php?route=checkout/shipping_address|save&language=";
        // line 193
        echo ($context["language"] ?? null);
        echo "',
          type: 'post',
          data: \$('#form-shipping-address').serialize(),
          dataType: 'json',
          contentType: 'application/x-www-form-urlencoded',
          beforeSend: function () {
              \$('#button-shipping-address').prop('disabled', true).addClass('loading');
          },
          complete: function () {
              \$('#button-shipping-address').prop('disabled', false).removeClass('loading');
          },
          success: function (json) {
              \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
              \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

              if (json['redirect']) {
                  location = json['redirect'];
              }

              if (json['error']) {
                  if (json['error']['warning']) {
                    toast({type: 'warning', text: json['error']['warning']})
                  }

                  for (i in json['error']) {
                      for (key in json['error']) {
                          \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                          \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                      }
                  }
              }

              if (json['success']) {
                  toast({text: json['success']})

                  var addresses = [];

                  // Shipping addresses
                  if (json['addresses']) {
                      for (i in json['addresses']) {
                          addresses[i] = {
                              text: json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'],
                              value: json['addresses'][i]['address_id']
                          };
                      }
                  }

                  // Shipping method
                  \$('#text-shipping-address').text(addresses[addresses.length - 1]['text']);
                  \$('#input-shipping-address').val(addresses[addresses.length - 1]['value']);
                  \$('#shipping-new').hide();
                  \$('#btn-change-address').val(0);
                  \$('#btn-change-address').removeClass('bg-darkBlue');
                  \$('#btn-change-address').removeClass('text-white');
                  \$('#btn-change-address').text('Change');
                  \$('#button-shipping-method').trigger('click');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });
});

\$('#input-shipping-country').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 263
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-shipping-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-shipping-postcode').parent().addClass('required');
                } else {
                    \$('#input-shipping-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 278
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 284
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 291
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-shipping-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').trigger('change');
</script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 291,  462 => 284,  453 => 278,  435 => 263,  362 => 193,  323 => 157,  290 => 127,  284 => 123,  278 => 118,  269 => 115,  260 => 114,  256 => 113,  252 => 112,  244 => 107,  240 => 105,  229 => 96,  225 => 94,  215 => 88,  207 => 85,  199 => 80,  195 => 78,  188 => 73,  181 => 69,  177 => 67,  165 => 56,  155 => 50,  147 => 47,  139 => 42,  135 => 40,  129 => 35,  114 => 33,  110 => 32,  98 => 27,  92 => 24,  84 => 19,  80 => 18,  68 => 15,  63 => 13,  52 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_address.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\shipping_address.twig");
    }
}
