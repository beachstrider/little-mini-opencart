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

/* extension/opencart/catalog/view/template/total/shipping.twig */
class __TwigTemplate_6d891ee6083656f084b363c590b39f7d extends Template
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
        echo "<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-shipping\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</button></h2>
  <div id=\"collapse-shipping\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-quote\">
        <p>";
        // line 6
        echo ($context["text_destination"] ?? null);
        echo "</p>
        <div class=\"row mb-3 required\">
          <label for=\"input-country\" class=\"col-md-4 col-form-label\">";
        // line 8
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
              <option value=\"\">";
        // line 11
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 13
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 13);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 13) == ($context["country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 13);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
            <div id=\"error-country\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-zone\" class=\"col-md-4 col-form-label\">";
        // line 20
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
            <div id=\"error-zone\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <label for=\"input-postcode\" class=\"col-md-4 col-form-label\">";
        // line 27
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 29
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
            <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"text-end\">
          <button type=\"submit\" id=\"button-quote\" class=\"btn btn-primary\">";
        // line 34
        echo ($context["button_quote"] ?? null);
        echo "</button>
        </div>
      </form>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#form-quote').on('submit', function (e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/total/shipping|quote&language=";
        // line 44
        echo ($context["language"] ?? null);
        echo "',
          type: 'post',
          data: \$('#form-quote').serialize(),
          dataType: 'json',
          beforeSend: function () {
              \$('#button-quote').prop('disabled', true).addClass('loading');
          },
          complete: function () {
              \$('#button-quote').prop('disabled', false).removeClass('loading');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();
              \$('#form-shipping').find('.is-invalid').removeClass('is-invalid');
              \$('#form-shipping').find('.invalid-feedback').removeClass('d-block');

              if (json['error']) {
                  if (json['error']['warning']) {
                      \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                  }

                  for (key in json['error']) {
                      \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                      \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                  }
              }

              if (json['shipping_method']) {
                  \$('#modal-shipping').remove();

                  html = '<div id=\"modal-shipping\" class=\"modal\">';
                  html += '  <div class=\"modal-dialog\">';
                  html += '    <div class=\"modal-content\">';
                  html += '      <div class=\"modal-header\">';
                  html += '        <h4 class=\"modal-title\">";
        // line 77
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>';
                  html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                  html += '      </div>';
                  html += '      <div class=\"modal-body\">';
                  html += '        <form id=\"form-shipping\">';
                  html += '          <p>";
        // line 82
        echo ($context["text_estimate"] ?? null);
        echo "</p>';

                  for (i in json['shipping_method']) {
                      html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                      if (!json['shipping_method'][i]['error']) {
                          for (j in json['shipping_method'][i]['quote']) {
                              html += '<div class=\"form-check\">';

                              if (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 91
        echo ($context["shipping_method"] ?? null);
        echo "') {
                                  html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + i + '-' + j.replaceAll('_', '-') + '\" checked/>';
                              } else {
                                  html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + i + '-' + j.replaceAll('_', '-') + '\"/>';
                              }

                              html += '  <label for=\"input-shipping-method-' + i + '\">' + json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label>';
                              html += '</div>';
                          }
                      } else {
                          html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
                      }
                  }

                  html += '          <div class=\"text-end\">';
                  html += '            <button type=\"submit\" id=\"button-shipping\" class=\"btn btn-primary\">";
        // line 106
        echo ($context["button_shipping"] ?? null);
        echo "</button>';
                  html += '          </div>';
                  html += '        </form>';
                  html += '      </div>';
                  html += '    </div>';
                  html += '  </div>';
                  html += '</div>';

                  \$('body').append(html);

                  \$('#modal-shipping').modal('show');
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$(document).on('submit', '#form-shipping', function (e) {
      e.preventDefault();

      \$.ajax({
          url: 'index.php?route=extension/opencart/total/shipping|save&language=";
        // line 129
        echo ($context["language"] ?? null);
        echo "',
          type: 'post',
          data: \$('#form-shipping').serialize(),
          dataType: 'json',
          contentType: 'application/x-www-form-urlencoded',
          beforeSend: function () {
              \$('#button-shipping').prop('disabled', true).addClass('loading');
          },
          complete: function () {
              \$('#button-shipping').prop('disabled', false).removeClass('loading');
          },
          success: function (json) {
              \$('.alert-dismissible').remove();

              if (json['error']) {
                  \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
              }

              if (json['success']) {
                  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                  \$('#shopping-cart').load('index.php?route=checkout/cart|list&language=";
        // line 150
        echo ($context["language"] ?? null);
        echo "');

                  var modal = bootstrap.Modal.getInstance(document.querySelector('#modal-shipping'));

                  modal.hide();
              }
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').on('change', function () {
      var element = this;

      \$.ajax({
          url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 167
        echo ($context["language"] ?? null);
        echo "',
          dataType: 'json',
          beforeSend: function () {
              \$(element).prop('disabled', true);
          },
          complete: function () {
              \$(element).prop('disabled', false);
          },
          success: function (json) {
              if (json['postcode_required'] == '1') {
                  \$('#input-postcode').parent().parent().addClass('required');
              } else {
                  \$('#input-postcode').parent().parent().removeClass('required');
              }

              html = '<option value=\"\">";
        // line 182
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] && json['zone'] != '') {
                  for (i = 0; i < json['zone'].length; i++) {
                      html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                      if (json['zone'][i]['zone_id'] == '";
        // line 188
        echo ($context["zone_id"] ?? null);
        echo "') {
                          html += ' selected=\"selected\"';
                      }

                      html += '>' + json['zone'][i]['name'] + '</option>';
                  }
              } else {
                  html += '<option value=\"0\" selected=\"selected\">";
        // line 195
        echo ($context["text_none"] ?? null);
        echo "</option>';
              }

              \$('#input-zone').html(html);
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#input-country').trigger('change');
  //--></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 195,  297 => 188,  288 => 182,  270 => 167,  250 => 150,  226 => 129,  200 => 106,  182 => 91,  170 => 82,  162 => 77,  126 => 44,  113 => 34,  103 => 29,  98 => 27,  88 => 20,  81 => 15,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/total/shipping.twig", "E:\\xampp\\htdocs\\extension\\opencart\\catalog\\view\\template\\total\\shipping.twig");
    }
}
