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

/* catalog/view/template/error/not_found.twig */
class __TwigTemplate_fe5a237ef3be50927166f64488fb2711 extends Template
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
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<p class=\"sm:mt-[12px] mt-[9px]\">";
        // line 6
        echo ($context["text_error"] ?? null);
        echo "</p>
\t\t\t<div class=\"sm:mt-[20px] mt-[15px]\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<a href=\"";
        // line 9
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
        // line 15
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  54 => 9,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/error/not_found.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\error\\not_found.twig");
    }
}
