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

/* admin/view/template/customer/customer_list.twig */
class __TwigTemplate_13efdafeb2773757f1b5b9ec0386d22e extends Template
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
        echo "<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#customer\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_email"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.email")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_email"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_customer_group"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "customer_group")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_customer_group"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 10
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
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
        if (($context["customers"] ?? null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 20);
                echo "</td>
              <td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 21);
                echo "</td>
              <td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 22);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-end\">
                <div class=\"btn-group dropdown\">
                  <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 27);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fa-solid fa-caret-down\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><h6 class=\"dropdown-header\">";
                // line 30
                echo ($context["text_option"] ?? null);
                echo "</h6></li>
                    ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 32);
                    echo "\" class=\"dropdown-item\"><i class=\"fa-solid fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                    ";
                } else {
                    // line 34
                    echo "                      <li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa-solid fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                    ";
                }
                // line 36
                echo "                    <li>
                      <hr class=\"dropdown-divider\">
                    </li>
                    <li><h6 class=\"dropdown-header\">";
                // line 39
                echo ($context["text_login"] ?? null);
                echo "</h6></li>
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 41
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 41);
                    echo "\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 41);
                    echo "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                  </ul>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        } else {
            // line 49
            echo "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 50
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 53
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 57
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 58
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 58,  230 => 57,  224 => 53,  218 => 50,  215 => 49,  212 => 48,  202 => 43,  191 => 41,  187 => 40,  183 => 39,  178 => 36,  172 => 34,  164 => 32,  162 => 31,  158 => 30,  150 => 27,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  114 => 16,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_list.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\customer\\customer_list.twig");
    }
}
