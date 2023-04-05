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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_f3980d961e09888ea675d688bd03d79f extends Template
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
        echo "<div class=\"sm:py-[80px] py-[32px]\">
\t<div class=\"sm:flex justify-between\">
\t\t<h3 class=\"font-bold sm:text-[40px] text-[30px] uppercase\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t</div>
\t<div class=\"sm:mt-[40px] mt-[16px] grid sm:grid-cols-6 grid-cols-2 sm:gap-[32px] gap-[15px]\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "\t\t\t<div class=\"\">";
            echo $context["product"];
            echo "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/featured.twig", "/home/xttl3xy3mfcj/public_html/extension/opencart/catalog/view/template/module/featured.twig");
    }
}
