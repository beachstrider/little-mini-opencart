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

/* catalog/view/template/account/menu.twig */
class __TwigTemplate_711564d9d860c90fdacbd0bad8390a4d extends Template
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
        echo "<div id=\"account-layout\" class=\"container sm:py-[40px] py-[30px]\">
\t";
        // line 2
        if (($context["success"] ?? null)) {
            // line 3
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<i class=\"fa-solid fa-circle-check\"></i>
\t\t\t";
            // line 5
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 7
        echo "\t<div class=\"\">
\t\t<div class=\"sm:flex sm:text-[40px] text-[30px] font-bold text-orange uppercase\">
\t\t\t";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "&nbsp;
\t\t\t<div class=\"text-dark\">";
        // line 10
        echo ($context["name"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
\t<div class=\"sm:pt-[38px] pt-[28px] sm:pb-[28px] pb-[21px] sm:text-[16px] text-[12px]\">
\t\t<div class=\"flex justify-between\">
\t\t\t<div class=\"\">
\t\t\t\t<div class=\"\">Full name:
\t\t\t\t\t";
        // line 17
        echo ($context["name"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"\">Email:
\t\t\t\t\t";
        // line 19
        echo ($context["email"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"\">";
        // line 21
        echo ($context["text_click_logout"] ?? null);
        echo "
\t\t\t\t<div class=\"flex justify-end\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo ($context["logout"] ?? null);
        echo "\" class=\"block border border-dark px-[16px] py-[3px] mt-[6px]\">";
        echo ($context["text_btn_logout"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"flex gap-[30px] border-t border-darkBlue py-[20px]\">
\t\t<div class=\"sm:block hidden min-w-[180px]\">
\t\t\t<div class=\"hover:fill-orange w-full pr-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M0.5 3.49805L7.5 0.5L14.5 3.49805M0.5 3.49805L7.5 6.49609M0.5 3.49805V3.5M14.5 3.49805L7.5 6.49609M14.5 3.49805V11.5L7.5 14.5M14.5 3.49805L7.5 6.5V14.5M7.5 6.49609V14.5M7.5 6.49609L0.5 3.5M7.5 14.5L0.5 11.5V3.5\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t</svg>
\t\t\t\t<a href=\"";
        // line 35
        echo ($context["order"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_my_orders"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"hover:fill-orange w-full pr-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5 3.49804C10.5 5.15396 9.157 6.49609 7.5 6.49609C5.843 6.49609 4.5 5.15396 4.5 3.49804C4.5 1.84212 5.843 0.5 7.5 0.5C9.157 0.5 10.5 1.84212 10.5 3.49804Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.5 14.4909H2.5C2.5 13.7808 2.5 13.1053 2.5 12.4936C2.5 10.8368 3.84315 9.49414 5.5 9.49414H9.5C11.1569 9.49414 12.5 10.8368 12.5 12.4936C12.5 13.1053 12.5 13.7808 12.5 14.4909Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t</svg>
\t\t\t\t<a href=\"";
        // line 42
        echo ($context["edit"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_my_account"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"hover:fill-orange w-full pr-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M4.9 8.7L4.6 8.3L3.8 8.9L4.1 9.3L4.9 8.7ZM10.9 9.3L11.2 8.9L10.4 8.3L10.1 8.7L10.9 9.3ZM7.5 14C3.91015 14 1 11.0899 1 7.5H0C0 11.6421 3.35786 15 7.5 15V14ZM14 7.5C14 11.0899 11.0899 14 7.5 14V15C11.6421 15 15 11.6421 15 7.5H14ZM7.5 1C11.0899 1 14 3.91015 14 7.5H15C15 3.35786 11.6421 0 7.5 0V1ZM7.5 0C3.35786 0 0 3.35786 0 7.5H1C1 3.91015 3.91015 1 7.5 1V0ZM4 6H5V5H4V6ZM10 6H11V5H10V6ZM10.1 8.7C8.8 10.4333 6.2 10.4333 4.9 8.7L4.1 9.3C5.8 11.5667 9.2 11.5667 10.9 9.3L10.1 8.7Z\" fill=\"#080E16\"/>
\t\t\t\t</svg>
\t\t\t\t<a href=\"";
        // line 48
        echo ($context["subscription"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"hover:fill-orange w-full pr-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t\t\t\t<svg width=\"15\" height=\"13\" viewbox=\"0 0 15 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M1.53553 6.53553L7.5 12.5L13.4645 6.53553C14.1275 5.87249 14.5 4.97322 14.5 4.03553C14.5 2.08291 12.9171 0.5 10.9645 0.5C10.0268 0.5 9.12751 0.872492 8.46447 1.53553L7.5 2.5L6.53553 1.53553C5.87249 0.872493 4.97322 0.5 4.03553 0.5C2.08291 0.5 0.5 2.08291 0.5 4.03553C0.5 4.97322 0.872491 5.87249 1.53553 6.53553Z\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t</svg>
\t\t\t\t<a href=\"";
        // line 54
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"hover:fill-orange w-full pr-[20px] py-[14px] flex items-center hover:text-orange gap-[18px] last:border-none border-b border-[#6B7A9320]\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M13.5 7.5L10.5 10.75M13.5 7.5L10.5 4.5M13.5 7.5L4 7.5M8 13.5H1.5L1.5 1.5L8 1.5\" stroke=\"#080E16\"/>
\t\t\t\t</svg>
\t\t\t\t<a href=\"";
        // line 60
        echo ($context["logout"] ?? null);
        echo "\" class=\"block font-bold uppercase\">";
        echo ($context["text_logout"] ?? null);
        echo "</a>
\t\t\t</div>

\t\t\t";
        // line 132
        echo "\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 132,  146 => 60,  135 => 54,  124 => 48,  113 => 42,  101 => 35,  84 => 23,  79 => 21,  74 => 19,  69 => 17,  59 => 10,  55 => 9,  51 => 7,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/menu.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/account/menu.twig");
    }
}
