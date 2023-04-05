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

/* catalog/view/template/mail/register.twig */
class __TwigTemplate_9302e15ee010261f7fc760b96a982fcb extends Template
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
        echo ($context["text_welcome"] ?? null);
        echo "<br/>
<br/>
";
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            echo ($context["text_login"] ?? null);
            echo "<br/>
<br/>
";
            // line 6
            echo ($context["login"] ?? null);
            echo "<br/>
<br/>
";
            // line 8
            echo ($context["text_service"] ?? null);
            echo "<br/>
<br/>
";
            // line 10
            echo ($context["text_thanks"] ?? null);
            echo "<br/>
";
            // line 11
            echo ($context["store"] ?? null);
            echo "<br/>
";
            // line 12
            echo ($context["store_url"] ?? null);
            echo "
";
        } else {
            // line 14
            echo ($context["text_approval"] ?? null);
            echo "<br/>
<br/>
";
            // line 16
            echo ($context["login"] ?? null);
            echo "<br/>
<br/>
";
            // line 18
            echo ($context["text_thanks"] ?? null);
            echo "<br/>
";
            // line 19
            echo ($context["store"] ?? null);
            echo "<br/>
";
            // line 20
            echo ($context["store_url"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  86 => 19,  82 => 18,  77 => 16,  72 => 14,  67 => 12,  63 => 11,  59 => 10,  54 => 8,  49 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/mail/register.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/mail/register.twig");
    }
}
