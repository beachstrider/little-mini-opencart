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
\t<div id=\"checkout-register\">";
        // line 3
        echo ($context["register"] ?? null);
        echo "</div>

\t<div id=\"checkout-shipping-address-method\">
\t\t";
        // line 6
        echo ($context["shipping_address"] ?? null);
        echo "
\t\t";
        // line 7
        echo ($context["shipping_method"] ?? null);
        echo "
\t</div>

\t<div id=\"checkout-confirm\" class=\"hidden\">
\t\t";
        // line 11
        echo ($context["confirm"] ?? null);
        echo "
\t</div>
\t<div id=\"checkout-payment-method\" class=\"hidden\">
\t\t";
        // line 14
        echo ($context["payment_method"] ?? null);
        echo "
\t</div>
</div>
";
        // line 17
        echo ($context["section_save_membership"] ?? null);
        echo "
";
        // line 18
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 19
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
        return array (  79 => 19,  75 => 18,  71 => 17,  65 => 14,  59 => 11,  52 => 7,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
