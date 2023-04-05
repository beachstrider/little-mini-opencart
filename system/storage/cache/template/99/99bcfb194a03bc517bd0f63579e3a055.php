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

/* catalog/view/template/common/account_dropdown_menu.twig */
class __TwigTemplate_d790ee2aa41e6393e6905d456ac9cccd extends Template
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
        echo "<div class=\"hover:fill-orange w-full px-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t<path d=\"M0.5 3.49805L7.5 0.5L14.5 3.49805M0.5 3.49805L7.5 6.49609M0.5 3.49805V3.5M14.5 3.49805L7.5 6.49609M14.5 3.49805V11.5L7.5 14.5M14.5 3.49805L7.5 6.5V14.5M7.5 6.49609V14.5M7.5 6.49609L0.5 3.5M7.5 14.5L0.5 11.5V3.5\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t</svg>
\t<a href=\"";
        // line 5
        echo ($context["order"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_my_orders"] ?? null);
        echo "</a>
</div>
<div class=\"hover:fill-orange w-full px-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5 3.49804C10.5 5.15396 9.157 6.49609 7.5 6.49609C5.843 6.49609 4.5 5.15396 4.5 3.49804C4.5 1.84212 5.843 0.5 7.5 0.5C9.157 0.5 10.5 1.84212 10.5 3.49804Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.5 14.4909H2.5C2.5 13.7808 2.5 13.1053 2.5 12.4936C2.5 10.8368 3.84315 9.49414 5.5 9.49414H9.5C11.1569 9.49414 12.5 10.8368 12.5 12.4936C12.5 13.1053 12.5 13.7808 12.5 14.4909Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t</svg>
\t<a href=\"";
        // line 12
        echo ($context["edit"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_my_account"] ?? null);
        echo "</a>
</div>
<div class=\"hover:fill-orange w-full px-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t<path d=\"M4.9 8.7L4.6 8.3L3.8 8.9L4.1 9.3L4.9 8.7ZM10.9 9.3L11.2 8.9L10.4 8.3L10.1 8.7L10.9 9.3ZM7.5 14C3.91015 14 1 11.0899 1 7.5H0C0 11.6421 3.35786 15 7.5 15V14ZM14 7.5C14 11.0899 11.0899 14 7.5 14V15C11.6421 15 15 11.6421 15 7.5H14ZM7.5 1C11.0899 1 14 3.91015 14 7.5H15C15 3.35786 11.6421 0 7.5 0V1ZM7.5 0C3.35786 0 0 3.35786 0 7.5H1C1 3.91015 3.91015 1 7.5 1V0ZM4 6H5V5H4V6ZM10 6H11V5H10V6ZM10.1 8.7C8.8 10.4333 6.2 10.4333 4.9 8.7L4.1 9.3C5.8 11.5667 9.2 11.5667 10.9 9.3L10.1 8.7Z\" fill=\"#080E16\"/>
\t</svg>
\t<a href=\"";
        // line 18
        echo ($context["subscription"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a>
</div>
<div class=\"hover:fill-orange w-full px-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t<svg width=\"15\" height=\"13\" viewbox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t<path d=\"M1.53553 6.53553L7.5 12.5L13.4645 6.53553C14.1275 5.87249 14.5 4.97322 14.5 4.03553C14.5 2.08291 12.9171 0.5 10.9645 0.5C10.0268 0.5 9.12751 0.872492 8.46447 1.53553L7.5 2.5L6.53553 1.53553C5.87249 0.872493 4.97322 0.5 4.03553 0.5C2.08291 0.5 0.5 2.08291 0.5 4.03553C0.5 4.97322 0.872491 5.87249 1.53553 6.53553Z\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t</svg>
\t<a href=\"";
        // line 24
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
</div>
<div class=\"hover:fill-orange w-full px-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t<path d=\"M13.5 7.5L10.5 10.75M13.5 7.5L10.5 4.5M13.5 7.5L4 7.5M8 13.5H1.5L1.5 1.5L8 1.5\" stroke=\"#080E16\"/>
\t</svg>
\t<a href=\"";
        // line 30
        echo ($context["logout"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_logout"] ?? null);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/account_dropdown_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  77 => 24,  66 => 18,  55 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/account_dropdown_menu.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/account_dropdown_menu.twig");
    }
}
