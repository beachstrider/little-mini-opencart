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

/* admin/view/template/common/developer.twig */
class __TwigTemplate_22cc38ff958970bd94c3e176debd68b9 extends Template
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
        echo "<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa-solid fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
        // line 12
        echo ($context["column_component"] ?? null);
        echo "</td>
              <td class=\"w-25\">";
        // line 13
        echo ($context["entry_cache"] ?? null);
        echo "</td>
              <td class=\"text-end\" style=\"width: 1px;\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tr>
            <td>";
        // line 18
        echo ($context["entry_theme"] ?? null);
        echo "</td>
            <td></td>
            <td class=\"text-end\"><button type=\"button\" value=\"theme\" data-bs-toggle=\"tooltip\" title=\"";
        // line 20
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
          </tr>
          <tr>
            <td>";
        // line 23
        echo ($context["entry_sass"] ?? null);
        echo "</td>
            <td>
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"developer_sass\" value=\"0\"/>
                <input type=\"checkbox\" name=\"developer_sass\" value=\"1\" id=\"input-developer-sass\" class=\"form-check-input\"";
        // line 27
        if (($context["developer_sass"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </td>
            <td class=\"text-end\"><button type=\"button\" value=\"sass\" data-bs-toggle=\"tooltip\" title=\"";
        // line 30
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_sass\\']').on('change', function () {
    \$.ajax({
        url: 'index.php?route=common/developer|edit&user_token=";
        // line 40
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: \$('input[name=\\'developer_sass\\']:checked'),
        dataType: 'json',
        beforeSend: function () {
            \$('input[name=\\'developer_sass\\']').prop('disabled', true);
        },
        complete: function () {
            \$('input[name=\\'developer_sass\\']').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-developer table button').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/developer|' + \$(element).attr('value') + '&user_token=";
        // line 71
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
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 71,  107 => 40,  94 => 30,  86 => 27,  79 => 23,  73 => 20,  68 => 18,  61 => 14,  57 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/developer.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\common\\developer.twig");
    }
}
