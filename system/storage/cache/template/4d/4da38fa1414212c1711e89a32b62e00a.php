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

\t";
        // line 5
        if (($context["payment_address"] ?? null)) {
            // line 6
            echo "\t\t<div id=\"checkout-payment-address\">";
            echo ($context["payment_address"] ?? null);
            echo "</div>
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if (($context["shipping_address"] ?? null)) {
            // line 10
            echo "\t\t<div id=\"checkout-shipping-address\">";
            echo ($context["shipping_address"] ?? null);
            echo "</div>
\t";
        }
        // line 11
        echo " 

\t";
        // line 13
        if (($context["shipping_method"] ?? null)) {
            // line 14
            echo "\t\t<div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
\t";
        }
        // line 16
        echo "\t
</div>
";
        // line 18
        echo ($context["section_save_membership"] ?? null);
        echo "
";
        // line 19
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 20
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
        return array (  90 => 20,  86 => 19,  82 => 18,  78 => 16,  72 => 14,  70 => 13,  66 => 11,  60 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
