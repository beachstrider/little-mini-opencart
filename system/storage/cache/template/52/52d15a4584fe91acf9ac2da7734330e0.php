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

/* admin/view/template/marketplace/installer.twig */
class __TwigTemplate_9cc9c8bc725668041bac73ca6f073370 extends Template
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
      <div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_upload"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 19
        echo ($context["text_progress"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_progress"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 mt-2\">
              <div class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 31
        echo ($context["text_installed"] ?? null);
        echo "</legend>
          <div id=\"extension\">";
        // line 32
        echo ($context["list"] ?? null);
        echo "</div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#extension').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#extension').load(this.href);
});

\$('#extension').load('index.php?route=marketplace/installer|list&user_token=";
        // line 45
        echo ($context["user_token"] ?? null);
        echo "');

// Upload
\$('#button-upload').on('click', function () {
    var element = this;

    if (!\$('#button-upload').prop('disabled')) {
        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" accept=\".ocmod.zip\"/></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        \$('#form-upload input[name=\\'file\\']').on('change', function () {
            if ((this.files[0].size / 1024) > ";
        // line 59
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
                alert('";
        // line 60
        echo ($context["error_upload_size"] ?? null);
        echo "');

                \$(this).val('');
            }
        });

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() !== '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=marketplace/installer|upload&user_token=";
        // line 75
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    data: new FormData(\$('#form-upload')[0]),
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
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

                        if (json['success']) {
                            \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                            \$('#extension').load('index.php?route=marketplace/installer|list&user_token=";
        // line 96
        echo ($context["user_token"] ?? null);
        echo "');
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    }
});

// Install
\$('#extension').on('click', '.btn-success, .btn-warning', function (e) {
    e.preventDefault();

    var element = this;

    var next = \$(element).attr('href');

    \$('#progress-bar').removeClass('bg-danger bg-success').css('width', '0%');
    \$('#progress-text').html('');

    var installer = function () {
        return \$.ajax({
            url: next,
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
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#progress-bar').addClass('bg-success').css('width', '100%');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#extension').load('index.php?route=marketplace/installer|list&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(installer);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    };

    chain.attach(installer);
});

// Delete
\$('#extension').on('click', '.btn-danger', function (e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 165
        echo ($context["text_confirm"] ?? null);
        echo "')) {
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

                    \$('#extension').load('index.php?route=marketplace/installer|list&user_token=";
        // line 185
        echo ($context["user_token"] ?? null);
        echo "');
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
        // line 195
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 195,  281 => 185,  258 => 165,  231 => 141,  183 => 96,  159 => 75,  141 => 60,  137 => 59,  120 => 45,  104 => 32,  100 => 31,  87 => 21,  82 => 19,  76 => 16,  69 => 11,  58 => 9,  54 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/installer.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\marketplace\\installer.twig");
    }
}
