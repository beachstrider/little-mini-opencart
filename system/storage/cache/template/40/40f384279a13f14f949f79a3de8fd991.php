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

/* catalog/view/template/account/subscription_list.twig */
class __TwigTemplate_2673fbdad55a967469db86316fdd661c extends Template
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
<div class=\"content w-full\">
\t";
        // line 4
        if (($context["subscriptions"] ?? null)) {
            // line 5
            echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-end\">";
            // line 9
            echo ($context["column_subscription_id"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
            // line 10
            echo ($context["column_product"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
            // line 11
            echo ($context["column_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
            // line 12
            echo ($context["column_date_added"] ?? null);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-end\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-end\">#";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 19);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "product", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["subscription"], "view", [], "any", false, false, false, 24);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"text-end\">";
            // line 33
            echo ($context["pagination"] ?? null);
            echo "</div>
\t";
        } else {
            // line 35
            echo "\t\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t";
        }
        // line 37
        echo "\t<div class=\"d-inline-block pt-2 pd-2 w-100\">
\t\t<div class=\"flex sm:mt-[20px] mt-[15px]\">
\t\t\t<a href=\"";
        // line 39
        echo ($context["continue"] ?? null);
        echo "\" class=\"block text-center min-w-[170px] py-[12px] bg-indigo text-[white] font-semibold uppercase\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
</div></div></div>";
        // line 42
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/subscription_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  132 => 39,  128 => 37,  122 => 35,  117 => 33,  112 => 30,  98 => 24,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  78 => 18,  74 => 17,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  48 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/subscription_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\subscription_list.twig");
    }
}
