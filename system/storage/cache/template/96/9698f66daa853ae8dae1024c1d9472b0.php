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

/* admin_dir/view/template/design/theme.twig */
class __TwigTemplate_d68a4535c8d7f724bb4e559ae385ae66 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 15
        echo ($context["text_edit"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-12\">
\t\t\t\t\t\t<div class=\"list-group mb-3\">
\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
        // line 21
        echo ($context["text_store"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t<select name=\"store_id\" id=\"input-store\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 25
        echo ($context["text_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 27);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
        // line 34
        echo ($context["text_template"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"path\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-9 col-md-12\">
\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 40
        echo ($context["text_twig"] ?? null);
        echo "</div>
\t\t\t\t\t\t<div id=\"recent\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 43
        echo ($context["text_history"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div id=\"history\"></div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"code\" style=\"display: none;\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\"></ul>
\t\t\t\t\t\t\t<div class=\"tab-content\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/htmlmixed.js\"></script>
<script type=\"text/javascript\"><!--
\$('#input-store').on('change', function (e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=design/theme|path&user_token=";
        // line 67
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$(element).val(),
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            html = '';

            if (json['directory']) {
                for (i = 0; i < json['directory'].length; i++) {
                    html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item list-group-item-action directory\">' + json['directory'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                }
            }

            if (json['file']) {
                for (i = 0; i < json['file'].length; i++) {
                    html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item list-group-item-action file\">' + json['file'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                }
            }

            \$('#path').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-store').trigger('change');

\$('#path').on('click', 'a.directory', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=design/theme|path&user_token=";
        // line 106
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&path=' + \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function () {
            \$(element).find('i').removeClass('fa-arrow-right');
            \$(element).find('i').addClass('fa-circle-notch fa-spin');
        },
        complete: function () {
            \$(element).find('i').removeClass('fa-circle-notch fa-spin');
            \$(element).find('i').addClass('fa-arrow-right');
        },
        success: function (json) {
            html = '';

            if (json['directory']) {
                for (i = 0; i < json['directory'].length; i++) {
                    html += '<a href=\"' + json['directory'][i]['path'] + '\" class=\"list-group-item list-group-item-action directory\">' + json['directory'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                }
            }

            if (json['file']) {
                for (i = 0; i < json['file'].length; i++) {
                    html += '<a href=\"' + json['file'][i]['path'] + '\" class=\"list-group-item list-group-item-action file\">' + json['file'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                }
            }

            if (json['extension']) {
                if (json['extension']['directory']) {
                    for (i = 0; i < json['extension']['directory'].length; i++) {
                        html += '<a href=\"' + json['extension']['directory'][i]['path'] + '\" class=\"list-group-item list-group-item-action directory\">' + json['extension']['directory'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                    }
                }

                if (json['extension']['file']) {
                    for (i = 0; i < json['extension']['file'].length; i++) {
                        html += '<a href=\"' + json['extension']['file'][i]['path'] + '\" class=\"list-group-item list-group-item-action file\">' + json['extension']['file'][i]['name'] + ' <i class=\"fa-solid fa-arrow-right fa-fw float-end\"></i></a>';
                    }
                }
            }

            if (json['back']) {
                html += '<a href=\"' + json['back']['path'] + '\" class=\"list-group-item list-group-item-action directory\">' + json['back']['name'] + ' <i class=\"fa-solid fa-arrow-left fa-fw float-end\"></i></a>';
            }

            \$('#path').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var editor = [];

\$('#path').on('click', 'a.file', function (e) {
    e.preventDefault();

    var element = this;

    // Check if the file has an extension
    var pos = \$(element).attr('href').lastIndexOf('.');

    if (pos != -1) {
        var tab_id = \$('#input-store').val() + '-' + \$(element).attr('href').slice(0, pos).replace(/\\//g, '-').replace(/_/g, '-');
    } else {
        var tab_id = \$('#input-store').val() + '-' + \$(element).attr('href').replace(/\\//g, '-').replace(/_/g, '-');
    }

    if (!editor['#tab-' + tab_id]) {
        editor['#tab-' + tab_id] = \$.ajax({
            url: 'index.php?route=design/theme|template&user_token=";
        // line 175
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('#input-store').val() + '&path=' + \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function () {
                \$(element).find('i').removeClass('fa-arrow-right');
                \$(element).find('i').addClass('fa-circle-notch fa-spin');
            },
            complete: function () {
                \$(element).find('i').removeClass('fa-circle-notch fa-spin');
                \$(element).find('i').addClass('fa-arrow-right');
            },
            success: function (json) {
                if (json['code']) {
                    \$('#code').show();
                    \$('#recent').hide();

                    \$('.nav-tabs').append('<li class=\"nav-item\"><a href=\"#tab-' + tab_id + '\" data-bs-toggle=\"tab\" class=\"nav-link\">' + \$(element).attr('href').split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa-solid fa-minus-circle\"></i></a></li>');

                    html = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
                    html += '  <textarea name=\"code\" id=\"input-code\" rows=\"10\" class=\"form-control\"></textarea>';
                    html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$('#input-store').val() + '\" id=\"input-' + tab_id + '-store\"/>';
                    html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(element).attr('href') + '\" id=\"input-' + tab_id + '-path\"/>';
                    html += '  <br/>';
                    html += '  <div class=\"float-end\">';
                    html += '    <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 198
        echo ($context["button_save"] ?? null);
        echo "</button>';
                    html += '    <button class=\"btn btn-danger\"><i class=\"fa-solid fa-recycle\"></i> ";
        // line 199
        echo ($context["button_reset"] ?? null);
        echo "</button>';
                    html += '  </div>';
                    html += '</div>';

                    \$('.tab-content').append(html);

                    \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                    // Initialize codemirrror
                    var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                        mode: 'text/html',
                        lineNumbers: true,
                        lineWrapping: true,
                        autofocus: true,
                        theme: 'monokai'
                    });

                    codemirror.setValue(json['code']);
                    codemirror.setSize('100%', '500px');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
    }
});

\$('#code .nav-tabs').on('click', 'i.fas.fa-minus-circle', function (e) {
    e.preventDefault();

    // 1. Remove tab functionality
    \$(this).parent().removeAttr('data-bs-toggle');

    var remove = \$(this).parent().attr('href');

    // 2. Remove entry in the editor array
    if (editor[remove]) {
        delete editor[remove];
    }

    // 3. Remove the tab
    \$(this).parent().parent().remove();

    // 4. Remove the tab panel
    \$(remove).remove();

    if (\$(this).parent().hasClass('active')) {
        \$('.nav-tabs li:last-child a').tab('show');
    }

    if (!\$('#code > ul > li').length) {
        \$('#code').hide();
        \$('#recent').show();
    }
});

\$('.tab-content').on('click', '.btn-primary', function (e) {
    var element = this;

    var editor = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

    \$.ajax({
        url: 'index.php?route=design/theme|save&user_token=";
        // line 264
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active input[name=\\'store_id\\']').val() + '&path=' + \$('.tab-content .active input[name=\\'path\\']').val(),
        type: 'post',
        data: 'code=' + encodeURIComponent(editor.getValue()),
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
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=design/theme|history&user_token=";
        // line 284
        echo ($context["user_token"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('.tab-content').on('click', '.btn-danger', function (e) {
    if (confirm('";
        // line 294
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        var element = this;

        \$.ajax({
            url: 'index.php?route=design/theme|reset&user_token=";
        // line 298
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$('.tab-content .active #input-store').val() + '&path=' + \$('.tab-content .active input[name=\\'path\\']').val(),
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
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                var codemirror = \$('.tab-content .active .CodeMirror')[0].CodeMirror;

                codemirror.setValue(json['code']);
                codemirror.setSize('100%', '500px');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#history').load('index.php?route=design/theme|history&user_token=";
        // line 335
        echo ($context["user_token"] ?? null);
        echo "');

\$('#history').on('click', '.btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    // Check if the file has an extension
    var tab_id = \$(element).parent().parent().find('input[name=\\'store_id\\']').val() + '-' + \$(element).parent().parent().find('input[name=\\'path\\']').val().replace(/\\//g, '-').replace(/_/g, '-');

    if (!editor['#tab-' + tab_id]) {
        \$.ajax({
            url: 'index.php?route=design/theme|template&user_token=";
        // line 347
        echo ($context["user_token"] ?? null);
        echo "&store_id=' + \$(element).parent().parent().find('input[name=\\'store_id\\']').val() + '&path=' + \$(element).parent().parent().find('input[name=\\'path\\']').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true).addClass('loading');
            },
            complete: function () {
                \$(element).prop('disabled', false).removeClass('loading');
            },
            success: function (json) {
                if (json['code']) {
                    \$('#code').show();
                    \$('#recent').hide();

                    \$('.nav-tabs').append('<li class=\"nav-item\"><a href=\"#tab-' + tab_id + '\" data-bs-toggle=\"tab\" class=\"nav-link\">' + \$(element).parent().parent().find('input[name=\\'path\\']').val().split('/').join(' / ') + '&nbsp;&nbsp;<i class=\"fa-solid fa-minus-circle\"></i></a></li>');

                    html = '<div class=\"tab-pane\" id=\"tab-' + tab_id + '\">';
                    html += '  <textarea name=\"code\" rows=\"10\"></textarea>';
                    html += '  <input type=\"hidden\" name=\"store_id\" value=\"' + \$(element).parent().parent().find('input[name=\\'store_id\\']').val() + '\" />';
                    html += '  <input type=\"hidden\" name=\"path\" value=\"' + \$(element).parent().parent().find('input[name=\\'path\\']').val() + '.twig\" />';
                    html += '  <br/>';
                    html += '  <div class=\"float-end\">';
                    html += '    <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 368
        echo ($context["button_save"] ?? null);
        echo "</button>';
                    html += '    <button class=\"btn btn-danger\"><i class=\"fa-solid fa-recycle\"></i> ";
        // line 369
        echo ($context["button_reset"] ?? null);
        echo "</button>';
                    html += '  </div>';
                    html += '</div>';

                    \$('.tab-content').append(html);

                    \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');

                    // Initialize codemirrror
                    var codemirror = CodeMirror.fromTextArea(document.querySelector('.tab-content .active textarea'), {
                        mode: 'text/html',
                        lineNumbers: true,
                        lineWrapping: true,
                        autofocus: true,
                        theme: 'monokai'
                    });

                    codemirror.setValue(json['code']);
                    codemirror.setSize('100%', '500px');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    } else {
        \$('.nav-tabs a[href=\\'#tab-' + tab_id + '\\']').tab('show');
    }
});

\$('#history').on('click', '.btn-danger', function (e) {
    e.preventDefault();

    if (confirm('";
        // line 402
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
                    \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#history').load('index.php?route=design/theme|history&user_token=";
        // line 424
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
        // line 434
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/design/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 434,  555 => 424,  530 => 402,  494 => 369,  490 => 368,  466 => 347,  451 => 335,  411 => 298,  404 => 294,  391 => 284,  368 => 264,  300 => 199,  296 => 198,  270 => 175,  198 => 106,  156 => 67,  129 => 43,  123 => 40,  114 => 34,  107 => 29,  96 => 27,  92 => 26,  88 => 25,  81 => 21,  72 => 15,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/design/theme.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\design\\theme.twig");
    }
}
