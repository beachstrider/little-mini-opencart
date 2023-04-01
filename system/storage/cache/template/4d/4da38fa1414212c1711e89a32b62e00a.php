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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_3e84d41f18cf9580ef8229614e4203ad extends Template
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
<div id=\"checkout-checkout\" class=\"container mx-auto sm:px-0 px-[20px]\">
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"\">
\t\t\t<h1 class=\"sm:mt-[40px] mt-[30px] sm:text-[40px] text-[30px] font-bold flex justify-between\">
\t\t\t\t<div class=\"flex\">
\t\t\t\t\t";
        // line 7
        echo ($context["heading_title_1"] ?? null);
        echo "&nbsp;<span class=\"text-orange\">";
        echo ($context["heading_title_2"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"opacity-[0.5]\">(1/4)</div>
\t\t\t</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-7 mb-3\">
\t\t\t\t\t<div id=\"checkout-register\">";
        // line 13
        echo ($context["register"] ?? null);
        echo "</div>
";
        // line 23
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
";
        // line 35
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 41
        echo ($context["section_save_membership"] ?? null);
        echo "
";
        // line 42
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 43
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 43,  78 => 42,  74 => 41,  66 => 35,  61 => 23,  57 => 13,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
