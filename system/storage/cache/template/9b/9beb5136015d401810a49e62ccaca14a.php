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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_02ad692a6588e421a4a7dd32c3a358da extends Template
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
<div id=\"checkout-cart\" class=\"container mx-auto sm:px-0 px-[20px]\">
\t<div class=\"sm:text-[40px] font-bold sm:mt-[40px] mt-[30px] flex\">
\t\t<span class=\"text-orange\">YOUR</span>
\t\t&nbsp;SHOPPING CART
\t</div>
\t<div class=\"sm:py-[20px] py-[15px]\">
\t\t<div class=\"\">
\t\t\t";
        // line 9
        if (($context["attention"] ?? null)) {
            // line 10
            echo "\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-info\"></i>
\t\t\t\t\t";
            // line 12
            echo ($context["attention"] ?? null);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        echo "\t\t\t";
        if (($context["success"] ?? null)) {
            // line 17
            echo "\t\t\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-check\"></i>
\t\t\t\t\t";
            // line 19
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t";
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "\t\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-exclamation\"></i>
\t\t\t\t\t";
            // line 26
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t<div class=\"grid sm:grid-cols-9 sm:gap-[30px] gap-[15px]\">
\t\t\t\t<div id=\"content\" class=\"col-span-5\">
\t\t\t\t\t<div id=\"shopping-cart\">";
        // line 32
        echo ($context["list"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"sm:mt-[20px] mt-[15px] sm:p-[20px] p-[15px] bg-orangeLight flex sm:gap-[28px] gap-[20px]\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<img src=\"/image/catalog/objects/little-mini-group-logo.png\" alt=\"\" srcset=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px]\">Membership</div>
\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[12px] text-[9px] font-bold\">FIRST MONTH IS FREE</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px]\">1profile p/m
\t\t\t\t\t\t\t\t\t<span class=\"text-[16px] font-bold\">\$89</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sm:text-[12px] text-[9px] mt-[10px]\">Access to all LittleMinis benefits for 0 DKK in the first month, then 89,- DKK per month(<a href=\"#\" class=\"underline\">view benefits</a>). By choosing the member price you become a member (<a href=\"#\" class=\"underline\">conditions</a>) and you receive the LittleMini member benefits. Cancellable at any time.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-span-4\">
\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["checkout"] ?? null);
        echo "\" class=\"w-full uppercase block px-[26px] py-[14px] bg-indigo text-white font-semibold flex justify-center sm:mt-0 mt-[20px]\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex justify-between bg-orangeLight mt-[20px] p-[20px]\">
\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px] font-bold uppercase\">YOUR ORDER</div>
\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px] text-orange font-bold\">
\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 60) == "total")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 61);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"p-[20px] relative bg-orangeGray\">
\t\t\t\t\t\t<div class=\"flex justify-between opacity-[0.5] line-through\">
\t\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px] font-bold uppercase\">NORMAL PRICE</div>
\t\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px] font-bold\">";
        // line 69
        echo ($context["price"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:pt-[30px] pt-[22px]\">
\t\t\t\t\t\t\t<div class=\"flex gap-[22px]\">
\t\t\t\t\t\t\t\t<div class=\"py-[4px]\">
\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M5 5.5H6M9 9.5H10M10 5L5 10M6.80145 0.789347L5.67243 1.91837C5.48717 2.10363 5.23589 2.20772 4.97389 2.20772H3.19561C2.65001 2.20772 2.20772 2.65001 2.20772 3.19561V4.97389C2.20772 5.23589 2.10363 5.48717 1.91837 5.67243L0.789347 6.80145C0.403551 7.18725 0.403551 7.81275 0.789347 8.19855L1.91837 9.32757C2.10363 9.51283 2.20772 9.76411 2.20772 10.0261V11.8044C2.20772 12.35 2.65001 12.7923 3.19561 12.7923H4.97389C5.23589 12.7923 5.48717 12.8964 5.67243 13.0816L6.80145 14.2107C7.18725 14.5964 7.81275 14.5964 8.19855 14.2107L9.32757 13.0816C9.51283 12.8964 9.76411 12.7923 10.0261 12.7923H11.8044C12.35 12.7923 12.7923 12.35 12.7923 11.8044V10.0261C12.7923 9.76411 12.8964 9.51283 13.0816 9.32757L14.2107 8.19855C14.5964 7.81275 14.5964 7.18725 14.2107 6.80145L13.0816 5.67243C12.8964 5.48717 12.7923 5.23589 12.7923 4.97389V3.19561C12.7923 2.65001 12.35 2.20772 11.8044 2.20772H10.0261C9.76411 2.20772 9.51283 2.10363 9.32757 1.91837L8.19855 0.789347C7.81275 0.403551 7.18725 0.403551 6.80145 0.789347Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div>You save 44% on this order.</div>
\t\t\t\t\t\t\t\t\t<div class=\"opacity-[0.5]\">Savings: \$120</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex gap-[22px]\">
\t\t\t\t\t\t\t\t<div class=\"py-[4px]\">
\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M2 9.5H5M13 9.5H10M3 6.5H12M14.5 6.4967V12.5C14.5 13.0523 14.0523 13.5 13.5 13.5H12.5C11.9477 13.5 11.5 13.0523 11.5 12.5V11.5H3.5V12.5C3.5 13.0523 3.05228 13.5 2.5 13.5H1.5C0.947715 13.5 0.5 13.0523 0.5 12.5V6.4967L2.62597 2.95576C3.16824 2.05257 4.14452 1.5 5.19799 1.5H9.80201C10.8555 1.5 11.8318 2.05257 12.374 2.95576L14.5 6.4967Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div>Cheap and fast shipping.</div>
\t\t\t\t\t\t\t\t\t<div class=\"opacity-[0.5]\">VAT included.</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex justify-center sm:text-[12px] text-[8px] py-[15px]\">
\t\t\t\t\t\t<div class=\"flex gap-[10px]\">
\t\t\t\t\t\t\t<svg width=\"15\" height=\"19\" viewbox=\"0 0 15 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M0.5 4.43132L7.5 0.633789L14.5 4.43132M0.5 4.43132L7.5 8.22884M0.5 4.43132V4.43379M14.5 4.43132L7.5 8.22884M14.5 4.43132V14.5671L7.5 18.3671M14.5 4.43132L7.5 8.23379V18.3671M7.5 8.22884V18.3671M7.5 8.22884L0.5 4.43379M7.5 18.3671L0.5 14.5671V4.43379\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<div>We ship today and accept returns for up to 90 days.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 109
        echo ($context["section_save_membership"] ?? null);
        echo "
";
        // line 110
        echo ($context["section_best_deals"] ?? null);
        echo "
<script src=\"catalog/view/javascript/cart.js\"></script>
";
        // line 112
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 112,  201 => 110,  197 => 109,  154 => 69,  147 => 64,  141 => 63,  135 => 61,  132 => 60,  128 => 59,  118 => 54,  93 => 32,  89 => 30,  82 => 26,  78 => 24,  75 => 23,  68 => 19,  64 => 17,  61 => 16,  54 => 12,  50 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
