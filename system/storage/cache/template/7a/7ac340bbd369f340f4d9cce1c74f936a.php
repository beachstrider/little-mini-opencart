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

/* extension/opencart/admin/view/template/payment/cheque.twig */
class __TwigTemplate_723032f1cb4677c50b5212ceb5c3941b extends Template
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
        <button type=\"submit\" form=\"form-payment\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-payment\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-payable\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_payable"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_cheque_payable\" value=\"";
        // line 24
        echo ($context["payment_cheque_payable"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_payable"] ?? null);
        echo "\" id=\"input-payable\" class=\"form-control\"/>
              <div id=\"error-payable\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_cheque_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 33
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 33);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 33) == ($context["payment_cheque_order_status_id"] ?? null))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 33);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">";
        // line 39
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_cheque_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                <option value=\"0\">";
        // line 42
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 44
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 44);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 44) == ($context["payment_cheque_geo_zone_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 44);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"payment_cheque_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"payment_cheque_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 54
        if (($context["payment_cheque_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 59
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_cheque_sort_order\" value=\"";
        // line 61
        echo ($context["payment_cheque_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/payment/cheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 69,  196 => 61,  191 => 59,  181 => 54,  174 => 50,  168 => 46,  153 => 44,  149 => 43,  145 => 42,  139 => 39,  133 => 35,  118 => 33,  114 => 32,  108 => 29,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/payment/cheque.twig", "E:\\xampp\\htdocs\\extension\\opencart\\admin\\view\\template\\payment\\cheque.twig");
    }
}
