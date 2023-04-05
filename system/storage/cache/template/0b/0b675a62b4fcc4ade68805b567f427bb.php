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

/* catalog/view/template/common/pagination.twig */
class __TwigTemplate_24a264f51abc7be6364c21739ee4c40a extends Template
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
        echo "<div class=\"flex text-[16px] border-t border-b border-darkBlue sm:w-[170px] justify-between items-center h-[48px]\">
\t";
        // line 2
        if ((($context["page"] ?? null) == 1)) {
            // line 3
            echo "\t\t<button disabled class=\"block text-[16px] leading-[48px]\">
\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M10 14L3 7.5L10 1\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t</svg>
\t\t</button>
\t";
        } else {
            // line 9
            echo "\t\t<a href=\"";
            echo ($context["prev"] ?? null);
            echo "\" class=\"block text-[16px] leading-[48px]\">
\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M10 14L3 7.5L10 1\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t</svg>
\t\t</a>
\t";
        }
        // line 15
        echo "\t<div class=\"\">";
        echo ($context["page"] ?? null);
        echo "/";
        echo ($context["num_pages"] ?? null);
        echo "</div>
\t";
        // line 16
        if ((($context["page"] ?? null) == ($context["num_pages"] ?? null))) {
            // line 17
            echo "\t\t<button disabled class=\"block text-[16px] leading-[48px]\">
\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M5 14L12 7.5L5 1\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t</svg>
\t\t</button>
\t";
        } else {
            // line 23
            echo "\t\t<a href=\"";
            echo ($context["next"] ?? null);
            echo "\" class=\"block text-[16px] leading-[48px]\">
\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M5 14L12 7.5L5 1\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t</svg>
\t\t</a>
\t";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  77 => 23,  69 => 17,  67 => 16,  60 => 15,  50 => 9,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/pagination.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/pagination.twig");
    }
}
