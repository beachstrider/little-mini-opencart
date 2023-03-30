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
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-md-7 mb-3\">

          ";
        // line 14
        if (($context["register"] ?? null)) {
            // line 15
            echo "            <div id=\"checkout-register\">";
            echo ($context["register"] ?? null);
            echo "</div>
          ";
        }
        // line 17
        echo "
          ";
        // line 18
        if (($context["payment_address"] ?? null)) {
            // line 19
            echo "            <div id=\"checkout-payment-address\">";
            echo ($context["payment_address"] ?? null);
            echo "</div>
          ";
        }
        // line 21
        echo "
          ";
        // line 22
        if (($context["shipping_address"] ?? null)) {
            // line 23
            echo "            <div id=\"checkout-shipping-address\">";
            echo ($context["shipping_address"] ?? null);
            echo "</div>
          ";
        }
        // line 25
        echo "
        </div>
        <div class=\"col-md-5\">
          ";
        // line 28
        if (($context["shipping_method"] ?? null)) {
            // line 29
            echo "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
          ";
        }
        // line 31
        echo "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        echo ($context["payment_method"] ?? null);
        echo "</div>

          <div id=\"checkout-confirm\">";
        // line 33
        echo ($context["confirm"] ?? null);
        echo "</div>

        </div>
      </div>
    </div>
    ";
        // line 38
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 40
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 42
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
        return array (  143 => 42,  138 => 40,  133 => 38,  125 => 33,  119 => 31,  113 => 29,  111 => 28,  106 => 25,  100 => 23,  98 => 22,  95 => 21,  89 => 19,  87 => 18,  84 => 17,  78 => 15,  76 => 14,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
