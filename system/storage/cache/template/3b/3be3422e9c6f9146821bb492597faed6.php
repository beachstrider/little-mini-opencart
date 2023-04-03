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

/* extension/opencart/admin/view/template/shipping/weight.twig */
class __TwigTemplate_d1a8e9e2e6677dc58ada2b0b35177a35 extends Template
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
        <button type=\"submit\" form=\"form-shipping\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-shipping\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 24
            echo "              <li class=\"nav-item\"><a href=\"#tab-geo-zone";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 24);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 24);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row mb-3\">
                <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_weight_tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                    <option value=\"0\">";
        // line 33
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 35
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 35);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 35) == ($context["shipping_weight_tax_class_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 35);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"shipping_weight_status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"shipping_weight_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 45
        if (($context["shipping_weight_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"shipping_weight_sort_order\" value=\"";
        // line 52
        echo ($context["shipping_weight_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 57
            echo "              <div class=\"tab-pane\" id=\"tab-geo-zone";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 57);
            echo "\">
                <div class=\"row mb-3\">
                  <label for=\"input-rate";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 59);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_rate"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"shipping_weight_";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61);
            echo "_rate\" rows=\"5\" placeholder=\"";
            echo ($context["entry_rate"] ?? null);
            echo "\" id=\"input-rate";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_0 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61)] ?? null) : null)) ? ((($__internal_compile_1 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 61)] ?? null) : null)) : (""));
            echo "</textarea>
                    <div class=\"form-text text-muted\">";
            // line 62
            echo ($context["help_rate"] ?? null);
            echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-status";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 66);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_status"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"shipping_weight_";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 68);
            echo "_status\" id=\"input-status";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 68);
            echo "\" class=\"form-select\">
                      <option value=\"1\"";
            // line 69
            if ((($__internal_compile_2 = ($context["shipping_weight_geo_zone_status"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 69)] ?? null) : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\"";
            // line 70
            if ( !(($__internal_compile_3 = ($context["shipping_weight_geo_zone_status"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 70)] ?? null) : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    </select>
                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/shipping/weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 82,  255 => 76,  239 => 70,  231 => 69,  225 => 68,  218 => 66,  211 => 62,  201 => 61,  194 => 59,  188 => 57,  184 => 56,  175 => 52,  170 => 50,  160 => 45,  153 => 41,  147 => 37,  132 => 35,  128 => 34,  124 => 33,  118 => 30,  112 => 26,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/shipping/weight.twig", "E:\\xampp\\htdocs\\extension\\opencart\\admin\\view\\template\\shipping\\weight.twig");
    }
}
