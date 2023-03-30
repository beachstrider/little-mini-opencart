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

/* admin_dir/view/template/marketplace/startup_list.twig */
class __TwigTemplate_0f1d24c5dc4ff59469a90c5f758ed32c extends Template
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
        echo "<form id=\"form-startup\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#startup\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_code"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "code")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_code"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_action"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "action")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_action"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\"><a href=\"";
        // line 9
        echo ($context["sort_sort_order"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "sort_order")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_sort_order"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 14
        if (($context["startups"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["startups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["startup"]) {
                // line 16
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["startup"], "startup_id", [], "any", false, false, false, 17);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["startup"], "code", [], "any", false, false, false, 18);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["startup"], "action", [], "any", false, false, false, 19);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["startup"], "sort_order", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 21
                if ( !twig_get_attribute($this->env, $this->source, $context["startup"], "status", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["startup"], "enable", [], "any", false, false, false, 22);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["startup"], "disable", [], "any", false, false, false, 24);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['startup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"5\">";
            // line 30
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\">";
        // line 37
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 38
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/marketplace/startup_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  160 => 37,  154 => 33,  148 => 30,  145 => 29,  142 => 28,  134 => 25,  126 => 24,  118 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  97 => 16,  92 => 15,  90 => 14,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/marketplace/startup_list.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\marketplace\\startup_list.twig");
    }
}
