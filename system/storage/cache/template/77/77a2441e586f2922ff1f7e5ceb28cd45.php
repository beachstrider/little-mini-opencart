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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_20a702ca0c08ea140bf550efc44873a3 extends Template
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
<div id=\"common-home\">
\t";
        // line 3
        echo ($context["content_banner"] ?? null);
        echo "

\t";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "

\t";
        // line 7
        echo ($context["content_top"] ?? null);
        echo "
\t";
        // line 8
        echo ($context["content_bottom"] ?? null);
        echo "

\t";
        // line 10
        echo ($context["column_right"] ?? null);
        echo "
</div>

";
        // line 13
        echo ($context["section_ads"] ?? null);
        echo "

";
        // line 15
        echo ($context["section_members"] ?? null);
        echo "
";
        // line 16
        echo ($context["section_best_deals"] ?? null);
        echo "

";
        // line 18
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  56 => 8,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/home.twig");
    }
}
