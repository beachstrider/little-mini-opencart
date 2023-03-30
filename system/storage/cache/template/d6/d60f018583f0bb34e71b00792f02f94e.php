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

/* admin/view/template/marketplace/cron_list.twig */
class __TwigTemplate_4614c369e49f839984dfb2b5861094cc extends Template
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
        echo "<form id=\"form-cron\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#cron\">
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
        echo ($context["sort_cycle"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cycle")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_cycle"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 9
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
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 10
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\" style=\"min-width: 103px;\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if (($context["crons"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cron"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "cron_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "code", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "cycle", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "action", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "date_added", [], "any", false, false, false, 23);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "date_modified", [], "any", false, false, false, 24);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end text-nowrap\"><button type=\"button\" data-oc-description=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "description", [], "any", false, false, false, 25);
                echo "\" data-oc-trigger=\"";
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "trigger", [], "any", false, false, false, 25);
                echo "\" data-oc-action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "action", [], "any", false, false, false, 25);
                echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-info-circle\"></i></button>
\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["cron"], "run", [], "any", false, false, false, 26);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_run"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-play\"></i></button>
\t\t\t\t\t\t\t\t";
                // line 27
                if ( !twig_get_attribute($this->env, $this->source, $context["cron"], "status", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["cron"], "enable", [], "any", false, false, false, 28);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["cron"], "disable", [], "any", false, false, false, 30);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 31
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cron'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 36
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-start\">";
        // line 43
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 44
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/cron_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 44,  206 => 43,  200 => 39,  194 => 36,  191 => 35,  188 => 34,  180 => 31,  172 => 30,  164 => 28,  162 => 27,  156 => 26,  148 => 25,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  114 => 16,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/cron_list.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\marketplace\\cron_list.twig");
    }
}
