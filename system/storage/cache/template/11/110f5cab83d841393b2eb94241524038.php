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

/* admin/view/template/common/security.twig */
class __TwigTemplate_507fcdeb4d1830e14df5d0d7f6f7e286 extends Template
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
        echo "<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">
        ";
        // line 9
        if (($context["install"] ?? null)) {
            // line 10
            echo "          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-folder\"></span>&nbsp;&nbsp;";
            // line 11
            echo ($context["text_install"] ?? null);
            echo "</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 14
            echo ($context["text_install_description"] ?? null);
            echo "</p>
                <div class=\"mb-3\">
                  <div class=\"input-group\">
                    <div class=\"input-group-text\">";
            // line 17
            echo ($context["text_path"] ?? null);
            echo "</div>
                    <input type=\"text\" value=\"";
            // line 18
            echo ($context["install"] ?? null);
            echo "\" class=\"form-control is-invalid bg-white\" readonly/>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 22
            echo ($context["button_delete"] ?? null);
            echo "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 28
        echo "        ";
        if (($context["storage"] ?? null)) {
            // line 29
            echo "          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><i class=\"fa-solid fa-circle-right\"></i>&nbsp;&nbsp;";
            // line 30
            echo ($context["text_storage"] ?? null);
            echo "</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-storage\">
                  <p>";
            // line 34
            echo ($context["text_storage_description"] ?? null);
            echo "</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 36
            echo ($context["entry_path_current"] ?? null);
            echo "</label> <input type=\"text\" value=\"";
            echo ($context["storage"] ?? null);
            echo "\" class=\"form-control is-invalid bg-white\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 39
            echo ($context["entry_path_new"] ?? null);
            echo "</label>
                    <div class=\"input-group dropdown\">
                      <button type=\"button\" id=\"button-path\" data-bs-toggle=\"dropdown\" class=\"btn btn-outline-secondary dropdown-toggle\">";
            // line 41
            echo ($context["document_root"] ?? null);
            echo " <span class=\"fa-solid fa-caret-down\"></span></button>
                      <ul class=\"dropdown-menu\">
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 44
                echo "                          <li><a href=\"";
                echo $context["path"];
                echo "\" class=\"dropdown-item\">";
                echo $context["path"];
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                      </ul>
                      <input type=\"text\" name=\"name\" value=\"storage\" placeholder=\"";
            // line 47
            echo ($context["text_path"] ?? null);
            echo "\" class=\"form-control\"/>
                    </div>
                    <input type=\"hidden\" name=\"path\" value=\"";
            // line 49
            echo ($context["document_root"] ?? null);
            echo "\" id=\"input-path\"/>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-storage\" class=\"btn btn-danger\"><span class=\"fa-solid fa-circle-right\"></span> ";
            // line 52
            echo ($context["button_move"] ?? null);
            echo "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 59
        echo "        ";
        if (($context["admin"] ?? null)) {
            // line 60
            echo "        <div id=\"security-admin\" class=\"accordion-item\">
          <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-lock\"></span>&nbsp;&nbsp;";
            // line 61
            echo ($context["text_admin"] ?? null);
            echo "</button></h2>
          <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
            <div class=\"modal-body\">
              <form id=\"form-admin\">
                <p>";
            // line 65
            echo ($context["text_admin_description"] ?? null);
            echo "</p>
                <div class=\"mb-3\">
                  <div class=\"input-group\">
                    <div class=\"input-group-text\">";
            // line 68
            echo ($context["text_path"] ?? null);
            echo "</div>
                    <input type=\"text\" name=\"name\" value=\"admin\" placeholder=\"";
            // line 69
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control is-invalid\"/>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 73
            echo ($context["button_rename"] ?? null);
            echo "</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 81
        echo "    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    // Show modal
    var modal = new bootstrap.Modal(document.querySelector('#modal-security'));

    modal.show();

    \$('#accordion .accordion-header:first button').trigger('click');
});

\$('#button-install').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security|install&user_token=";
        // line 98
        echo ($context["user_token"] ?? null);
        echo "',
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

                \$('#security-install').remove();

                \$('#accordion .accordion-header:first button').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-storage .dropdown-menu a').on('click', function (e) {
    e.preventDefault();

    \$('#input-path').val(\$(this).attr('href'));

    \$('#button-path').html(\$(this).attr('href') + ' <span class=\"fa-solid fa-caret-down\"></span>');
});

\$('#button-storage').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security|storage&user_token=";
        // line 139
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-storage').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
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

                \$('#security-storage').remove();

                \$('#accordion .accordion-header:first button').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-admin').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security|admin&user_token=";
        // line 175
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-admin').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#security-admin').remove();

                \$('#accordion .accordion-header:first button').trigger('click');
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
        return "admin/view/template/common/security.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 175,  266 => 139,  222 => 98,  203 => 81,  192 => 73,  185 => 69,  181 => 68,  175 => 65,  168 => 61,  165 => 60,  162 => 59,  152 => 52,  146 => 49,  141 => 47,  138 => 46,  127 => 44,  123 => 43,  118 => 41,  113 => 39,  105 => 36,  100 => 34,  93 => 30,  90 => 29,  87 => 28,  78 => 22,  71 => 18,  67 => 17,  61 => 14,  55 => 11,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/security.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\common\\security.twig");
    }
}
