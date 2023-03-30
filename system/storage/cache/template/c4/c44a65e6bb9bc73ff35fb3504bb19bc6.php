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

/* admin/view/template/marketplace/extension.twig */
class __TwigTemplate_b1fd0857255c1ed16e3e38bc17094589 extends Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 15
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 18
        echo ($context["text_type"] ?? null);
        echo "</legend>
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <div class=\"input-group\">
                <select name=\"type\" id=\"input-type\" class=\"form-select\">
                  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
            echo "\"";
            if ((($context["type"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 24))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 24);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </select>
                <div class=\"input-group-text\"><i class=\"fa-solid fa-filter\"></i>&nbsp;";
        // line 27
        echo ($context["text_filter"] ?? null);
        echo "</div>
              </div>
            </div>
          </div>
        </fieldset>
        <div id=\"extension\">";
        // line 32
        echo ($context["extension"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-type').on('change', function () {
    \$.ajax({
        url: \$(this).val(),
        dataType: 'html',
        beforeSend: function () {
            \$('.fa-filter').addClass('fa-circle-notch fa-spin');
            \$('.fa-filter').removeClass('fa-filter');
            \$('#input-type').prop('disabled', true);
        },
        complete: function () {
            \$('.fa-circle-notch').addClass('fa-filter');
            \$('.fa-circle-notch').removeClass('fa-circle-notch fa-spin');
            \$('#input-type').prop('disabled', false);
        },
        success: function (html) {
            \$('#extension').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download promotion extension
\$('#extension').on('click', '#recommended .btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('value'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#extension').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#extension').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).prop('disabled', true);

                // Manually build the url so no need to refresh extensions and can trigger install
                // Once the extension is downloaded we trigger the install
                \$(element).parent().find('.dropdown-menu').html('<a href=\"index.php?route=marketplace/installer|install&user_token=";
        // line 90
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + json['extension_install_id'] + '\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i> ";
        echo ($context["text_install"] ?? null);
        echo "</a> <a href=\"index.php?route=marketplace/installer|delete&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + json['extension_install_id'] + '\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can fa-fw\"></i> ";
        echo ($context["text_delete"] ?? null);
        echo "</a>');

                \$(element).parent().find('.dropdown-item:first').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download dropdown
\$('#extension').on('click', '.dropdown-item', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#extension').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#extension').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#extension').load(\$('#input-type').val());
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Install
\$('#extension').on('click', '.btn-success', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-type').trigger('change');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Uninstall / Delete
\$('#extension').on('click', '.btn-danger, .btn-outline-danger', function (e) {
    e.preventDefault();

    if (confirm('";
        // line 167
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        var element = this;

        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-type').trigger('change');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 199
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 199,  263 => 167,  177 => 90,  116 => 32,  108 => 27,  105 => 26,  90 => 24,  86 => 23,  78 => 18,  72 => 15,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/extension.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\marketplace\\extension.twig");
    }
}
