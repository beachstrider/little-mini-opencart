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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_836f5f85551161f75f31322ecac22b29 extends Template
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
        echo "<div id=\"search-container\" class=\"sm:flex hidden\">
\t<div class=\"relative\">
\t\t<div class=\"absolute h-full flex items-center pl-[10px]\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\" fill=\"#F98D78\" class=\"w-5 h-5\">
\t\t\t\t<path fill-rule=\"evenodd\" d=\"M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z\" clip-rule=\"evenodd\"/>
\t\t\t</svg>
\t\t</div>
\t\t<input id=\"search\" type=\"text\" name=\"search\" value=\"";
        // line 8
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" data-lang=\"";
        echo ($context["language"] ?? null);
        echo "\" class=\"product-search-input pl-[36px] pr-[10px] py-[9px] border-1 border-[#6B7A93] text-[14px] min-w-full sm:min-w-[370px]\">
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/search.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\search.twig");
    }
}
