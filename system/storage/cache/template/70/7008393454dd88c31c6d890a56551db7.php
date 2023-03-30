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

/* admin/view/template/catalog/product_list.twig */
class __TwigTemplate_25683f86e0517ff1c56d377e4deb9b6e extends Template
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
        echo "<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#product\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-center\">";
        // line 7
        echo ($context["column_image"] ?? null);
        echo "</td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 9
        echo ($context["sort_model"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_model"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 10
        echo ($context["sort_price"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_price"] ?? null);
        echo "</a></td>
          <td class=\"text-end\"><a href=\"";
        // line 11
        echo ($context["sort_quantity"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_quantity"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "            <tr";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 18)) {
                    echo " class=\"table-warning\"";
                }
                echo ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-center\"><img src=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 20);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "\" class=\"img-thumbnail\"/></td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "
                <br/>
                ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                ";
                } else {
                    // line 26
                    echo "                  <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                ";
                }
                // line 27
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-end\">
                ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                    echo "<span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "</span>
                  <br/>
                  <div class=\"text-danger\">";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</div>
                ";
                } else {
                    // line 34
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    echo "
                ";
                }
                // line 35
                echo "</td>
              <td class=\"text-end\">
                ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37) <= 0)) {
                    // line 38
                    echo "                  <span class=\"badge bg-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                    echo "</span>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["product"], "quantity", [], "any", false, false, false, 39) <= 5)) {
                    // line 40
                    echo "                  <span class=\"badge bg-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
                    echo "</span>
                ";
                } else {
                    // line 42
                    echo "                  <span class=\"badge bg-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                    echo "</span>
                ";
                }
                // line 43
                echo "</td>
              <td class=\"text-end\">
                ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                  <div class=\"btn-group\">
                    <a href=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 47);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-caret-down\"></i></button>
                    <div class=\"dropdown-menu dropdown-menu-end\"><a href=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 49);
                    echo "\" class=\"dropdown-item\"><i class=\"fa-solid fa-plus\"></i> ";
                    echo ($context["text_variant_add"] ?? null);
                    echo "</a></div>
                  </div>
                ";
                } else {
                    // line 52
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 52);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-pencil\"></i></a>
                ";
                }
                // line 54
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        } else {
            // line 58
            echo "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 59
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 62
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 66
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 67
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 67,  258 => 66,  252 => 62,  246 => 59,  243 => 58,  240 => 57,  232 => 54,  224 => 52,  216 => 49,  209 => 47,  206 => 46,  204 => 45,  200 => 43,  194 => 42,  188 => 40,  186 => 39,  181 => 38,  179 => 37,  175 => 35,  169 => 34,  164 => 32,  157 => 30,  152 => 28,  149 => 27,  143 => 26,  137 => 24,  135 => 23,  130 => 21,  124 => 20,  120 => 19,  113 => 18,  108 => 17,  106 => 16,  99 => 12,  87 => 11,  75 => 10,  63 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/product_list.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\catalog\\product_list.twig");
    }
}
