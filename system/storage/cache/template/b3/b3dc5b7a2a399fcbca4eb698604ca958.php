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

/* admin_dir/view/template/marketplace/marketplace_info.twig */
class __TwigTemplate_ac865c31ef23a660996c4ad11f0442cf extends Template
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
\t\t\t<div class=\"float-end\">
\t\t\t\t";
        // line 6
        if ( !($context["error_signature"] ?? null)) {
            // line 7
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t<button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div id=\"marketplace-extension-info\" class=\"container-fluid\">
\t\t";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 28
        echo ($context["name"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row extension-info\">
\t\t\t\t\t<div class=\"col-md-8 col-lg-9\">
\t\t\t\t\t\t";
        // line 32
        if (($context["banner"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t\t\t<div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></div>
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t<div class=\"row thumbnails\">
\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 37);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 37);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 37);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 37);
            echo "\" class=\"img-fluid img-thumbnail\"/></a></div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 41
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 42
        echo ($context["tab_documentation"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 43
        echo ($context["tab_download"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 44
        echo ($context["tab_comment"] ?? null);
        echo " (";
        echo ($context["comment_total"] ?? null);
        echo ")</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"tab-description\" class=\"tab-pane fade show active\">";
        // line 47
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"tab-documentation\" class=\"tab-pane fade\">";
        // line 48
        echo ($context["documentation"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"tab-download\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 51
        echo ($context["text_available"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div id=\"download\"></div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tab-comment\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 57
        echo ($context["text_comment_add"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 59
        echo ($context["text_write"] ?? null);
        echo "\" id=\"input-history-comment\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 62
        echo ($context["button_comment"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 67
        echo ($context["text_comment"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div id=\"comment\"></div>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t\t\t<div id=\"buy\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 76
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t<div id=\"price\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\"><strong>";
        // line 80
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7 text-end\">";
        // line 81
        if (($context["license"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["price"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_free"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<ul class=\"list-check\">
\t\t\t\t\t\t\t\t\t<li>";
        // line 90
        echo ($context["text_partner"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t\t<li>";
        // line 91
        echo ($context["text_support"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t\t<li>";
        // line 92
        echo ($context["text_documentation"] ?? null);
        echo "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 96
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rating"] ?? null) < $context["i"])) {
                // line 99
                echo "                        <i class=\"fa-regular fa-star\"></i>
                      ";
            } else {
                // line 101
                echo "                        <i class=\"fa-solid fa-star\"></i>
                      ";
            }
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 108
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 109
        echo ($context["date_modified"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\"><strong>";
        // line 113
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 text-end\">";
        // line 114
        echo ($context["date_added"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"sales\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\"><i class=\"fa-solid fa-shopping-cart\"></i> <strong>";
        // line 119
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"sales\" class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\"><i class=\"fa-solid fa-download\"></i> <strong>";
        // line 122
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 127
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"mr-3 rounded-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0\"><a href=\"";
        // line 129
        echo ($context["filter_member"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t<small>";
        // line 130
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">";
        echo ($context["button_support"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function (e) {
    \$('#modal-opencart').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 148
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'html',
        beforeSend: function () {
            \$('#button-opencart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-opencart').prop('disabled', false).removeClass('loading');
        },
        success: function (html) {
            \$('body').append(html);

            \$('#modal-opencart').modal('show');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function (e) {
    e.preventDefault();

    \$('#modal-purchase').remove();

    html = '<div id=\"modal-purchase\" class=\"modal\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\">";
        // line 177
        echo ($context["text_purchase"] ?? null);
        echo "</h5>';
    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <p>";
        // line 181
        echo ($context["text_pin"] ?? null);
        echo "</p>';
    html += '        <p>";
        // line 182
        echo ($context["text_secure"] ?? null);
        echo "</p>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-pin\">";
        // line 184
        echo ($context["entry_pin"] ?? null);
        echo "</label>';
    html += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 185
        echo ($context["entry_pin"] ?? null);
        echo "\" id=\"input-pin\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3 text-end\">';
    html += '          <div class=\"text-end\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">";
        // line 188
        echo ($context["button_forgot_pin"] ?? null);
        echo "</a></div>';
    html += '          <button type=\"button\" id=\"button-purchase\" class=\"btn btn-primary btn-lg\">";
        // line 189
        echo ($context["button_purchase"] ?? null);
        echo "</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketplace/marketplace|purchase&user_token=";
        // line 207
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
        type: 'post',
        data: \$('#input-pin'),
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
                \$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-purchase').modal('hide');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace|extension&user_token=";
        // line 229
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download
\$('#download').load('index.php?route=marketplace/marketplace|extension&user_token=";
        // line 239
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

\$('#tab-download').on('click', '.btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
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
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                //\$(element).parent().addClass();
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#tab-download').on('click', '.dropdown-item', function (e) {
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
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace|extension&user_token=";
        // line 298
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Comment
\$('#comment').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace|comment&user_token=";
        // line 314
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

// Add comment
\$('#button-comment').on('click', function () {
    \$.ajax({
        url: 'index.php?route=marketplace/marketplace|addComment&user_token=";
        // line 319
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$('#input-history-comment').val()),
        beforeSend: function () {
            \$('#button-comment').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-comment').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment').load('index.php?route=marketplace/marketplace|comment&user_token=";
        // line 339
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

                \$('#input-history-comment').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Next replies
\$('#comment').on('click', '.btn-block', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (html) {
            \$(element).parent().parent().parent().append(html);

            \$(element).parent().remove();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reply
\$('#comment').on('click', '.btn-link', function (e) {
    e.preventDefault();

    \$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

                \$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (html) {
            \$(element).parent().replaceWith(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 455
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  759 => 455,  638 => 339,  613 => 319,  603 => 314,  582 => 298,  518 => 239,  503 => 229,  476 => 207,  455 => 189,  451 => 188,  445 => 185,  441 => 184,  436 => 182,  432 => 181,  425 => 177,  393 => 148,  370 => 134,  361 => 130,  355 => 129,  346 => 127,  336 => 122,  328 => 119,  320 => 114,  316 => 113,  309 => 109,  305 => 108,  291 => 103,  287 => 101,  283 => 99,  280 => 98,  276 => 97,  272 => 96,  265 => 92,  261 => 91,  257 => 90,  251 => 86,  245 => 84,  239 => 82,  237 => 81,  233 => 80,  230 => 79,  224 => 77,  222 => 76,  210 => 67,  202 => 62,  196 => 59,  191 => 57,  182 => 51,  176 => 48,  172 => 47,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 39,  133 => 37,  129 => 36,  126 => 35,  116 => 33,  114 => 32,  107 => 28,  104 => 27,  96 => 23,  94 => 22,  88 => 18,  77 => 16,  73 => 15,  68 => 13,  60 => 11,  54 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/marketplace/marketplace_info.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\marketplace\\marketplace_info.twig");
    }
}
