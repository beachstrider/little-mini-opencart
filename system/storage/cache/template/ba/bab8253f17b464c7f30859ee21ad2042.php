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

/* catalog/view/template/common/success.twig */
class __TwigTemplate_2a3133a36d07b21abbfaeefe050073dc extends Template
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

<div id=\"error-not-found\" class=\"container mx-auto sm:px-0 px-[20px]\">
\t<div class=\"flex justify-center items-center sm:py-[40px] py-[30px]\">
\t\t<div id=\"content\" class=\"col\">
\t\t\t<h1 class=\"sm:text-[20px] text-[15px] font-bold\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<p class=\"sm:mt-[12px] mt-[9px]\">";
        // line 7
        echo ($context["text_message"] ?? null);
        echo "</p>
\t\t\t<div class=\"sm:mt-[20px] mt-[15px]\">
\t\t\t\t<div class=\"flex\">
\t\t\t\t\t<a href=\"";
        // line 10
        echo ($context["continue"] ?? null);
        echo "\" class=\"block text-center min-w-[170px] py-[12px] bg-indigo text-[white] font-semibold uppercase\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 16
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  55 => 10,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/success.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/success.twig");
    }
}
