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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_e935ac6903c0bf0e86c78053fa9ac26a extends Template
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
        echo "
";
        // line 2
        echo ($context["menu"] ?? null);
        echo "
<div class=\"content\">
\t";
        // line 4
        if (($context["orders"] ?? null)) {
            // line 5
            echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered table-hover sm:text-[14px] text-[10px]\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"bg-orangeLight uppercase\">
\t\t\t\t\t\t<td class=\"text-end sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
            // line 9
            echo ($context["column_order_id"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
            // line 10
            echo ($context["column_customer"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-end sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
            // line 11
            echo ($context["column_product"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
            // line 12
            echo ($context["column_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
            // line 13
            echo ($context["column_date_added"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-end sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">#";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 23);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end sm:px-[20px] sm:py-[12px] px-[10px] py-[6px]\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-bs-toggle=\"tooltip\" title=\"";
                // line 26
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t";
                // line 28
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"flex justify-between mt-[30px]\">
\t\t\t<div class=\"col-sm-6 text-end\"></div>
\t\t\t<div class=\"col-sm-6 text-start\">";
            // line 37
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t</div>
\t";
        } else {
            // line 40
            echo "\t\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t";
        }
        // line 42
        echo "\t<div class=\"d-inline-block pt-2 pd-2 w-100\">
\t\t<div class=\"flex sm:mt-[20px] mt-[15px]\">
\t\t\t<a href=\"";
        // line 44
        echo ($context["continue"] ?? null);
        echo "\" class=\"block text-center min-w-[170px] py-[12px] bg-indigo text-[white] font-semibold uppercase\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
</div></div></div>";
        // line 47
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  142 => 44,  138 => 42,  132 => 40,  126 => 37,  119 => 32,  110 => 28,  106 => 26,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  82 => 19,  78 => 18,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  48 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\order_list.twig");
    }
}
