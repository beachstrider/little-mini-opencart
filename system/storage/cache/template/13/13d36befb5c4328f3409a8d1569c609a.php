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

/* extension/opencart/admin/view/template/module/featured.twig */
class __TwigTemplate_b56dc44e3131891813d5585a4391084f extends Template
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
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\"/>
              <datalist id=\"list-product\"></datalist>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"featured-product\" class=\"table table-sm m-0\">
                  <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            echo "                      <tr id=\"featured-product-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
            echo "\">
                        <td>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
            echo "<input type=\"hidden\" name=\"product[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo "\"/></td>
                        <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                  </tbody>
                </table>
              </div>
              <div class=\"form-text text-muted\">";
        // line 45
        echo ($context["help_product"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-axis\" class=\"col-sm-2 col-form-label\">";
        // line 49
        echo ($context["entry_axis"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"axis\" id=\"input-axis\" class=\"form-select\">
                <option value=\"horizontal\"";
        // line 52
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_horizontal"] ?? null);
        echo "</option>
                <option value=\"vertical\"";
        // line 53
        if ((($context["axis"] ?? null) == "vertical")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_vertical"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 58
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 60
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 67
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 72
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 76
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-product').autocomplete({
    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 89
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    select: function (item) {
        \$('#input-product').val('');

        \$('#featured-product-' + item['value']).remove();

        html  = '<tr id=\"featured-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>';
        html += '</tr>';

        \$('#featured-product tbody').append(html);
    }
});

\$('#featured-product').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});
//--></script>
";
        // line 119
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 119,  235 => 89,  217 => 76,  210 => 72,  200 => 67,  195 => 65,  185 => 60,  180 => 58,  168 => 53,  160 => 52,  154 => 49,  147 => 45,  142 => 42,  130 => 38,  125 => 37,  121 => 36,  113 => 31,  108 => 29,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/module/featured.twig", "E:\\xampp\\htdocs\\extension\\opencart\\admin\\view\\template\\module\\featured.twig");
    }
}
