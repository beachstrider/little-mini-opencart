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

/* admin/view/template/sale/order_list.twig */
class __TwigTemplate_179992798506e40874b051b9c809b77f extends Template
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
        echo "<form id=\"form-order\" method=\"post\" enctype=\"application/x-www-form-urlencoded\" data-load=\"";
        echo ($context["action"] ?? null);
        echo "\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\" class=\"form-check-input\"/></td>
          <td class=\"text-end\"><a href=\"";
        // line 7
        echo ($context["sort_order"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_order_id"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_store_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.store_name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_store"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_customer"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "customer")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_customer"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
          <td class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_total"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_total"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 12
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-xl-table-cell\"><a href=\"";
        // line 13
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if (($context["orders"] ?? null)) {
            // line 19
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 21);
                echo "\" class=\"form-check-input\"/>
                <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 22);
                echo "\"/></td>
              <td class=\"text-end\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-start\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-start\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 25);
                echo "</td>
              <td class=\"text-start\"><label>";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 26);
                echo "</label></td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 27);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-start d-none d-xl-table-cell\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 29);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 30);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-eye\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        } else {
            // line 34
            echo "          <tr>
            <td class=\"text-center\" colspan=\"9\">";
            // line 35
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 38
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 42
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 43
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 43,  213 => 42,  207 => 38,  201 => 35,  198 => 34,  195 => 33,  184 => 30,  180 => 29,  176 => 28,  172 => 27,  168 => 26,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  145 => 20,  140 => 19,  138 => 18,  131 => 14,  119 => 13,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_list.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\sale\\order_list.twig");
    }
}
