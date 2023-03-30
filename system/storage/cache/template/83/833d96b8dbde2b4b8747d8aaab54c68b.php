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

/* admin/view/template/catalog/subscription_plan_list.twig */
class __TwigTemplate_733cd621bfbcc228c08c24be4a571766 extends Template
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
        echo "<form id=\"form-subscription-plan\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#subscription-plan\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "spd.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\"><a href=\"";
        // line 8
        echo ($context["sort_sort_order"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "s.sort_order")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_sort_order"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 9
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 13
        if (($context["subscription_plans"] ?? null)) {
            // line 14
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 15
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 16);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 17);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "sort_order", [], "any", false, false, false, 18);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "edit", [], "any", false, false, false, 19);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"4\">";
            // line 24
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-start\">";
        // line 31
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 32
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/subscription_plan_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  129 => 31,  123 => 27,  117 => 24,  114 => 23,  111 => 22,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  85 => 15,  80 => 14,  78 => 13,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/subscription_plan_list.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\catalog\\subscription_plan_list.twig");
    }
}
