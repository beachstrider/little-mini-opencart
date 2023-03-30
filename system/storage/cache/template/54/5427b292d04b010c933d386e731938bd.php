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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_f2049f3122b1f49d7a6a140460b3e106 extends Template
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
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js\"></script></main><footer class=\"border-t border-[#6B7A93] bg-[#FFF3E2]\">
<div class=\"container mx-auto sm:px-0 px-[20px] sm:py-[84px] py-[40px]\">
\t<div class=\"grid grid-cols-6 gap-[6px]\">
\t\t<div class=\"sm:col-span-2 col-span-6\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"/image/catalog/logo_image.png\"/>
\t\t\t</a>
\t\t\t<div class=\"mt-[20px] text-[#080E16] max-w-[270px]\">
\t\t\t\tAs a member of the LittleMinis’ members club, you’ll get great discounts on everything from perfumes to skincare products. The first month is always free.

\t\t\t</div>
\t\t\t<div class=\"font-bold mt-[26px]\">
\t\t\t\t<a href=\"#\">Start saving today!</a>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 16
        if (($context["informations"] ?? null)) {
            // line 17
            echo "\t\t\t<div class=\"sm:col-span-1 col-span-3 w-full sm:mt-0 mt-[30px]\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
            // line 18
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 21
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 22);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 28
        echo "\t\t<div class=\"sm:col-span-1 col-span-3 w-full sm:mt-0 mt-[30px]\">
\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 29
        echo ($context["text_service"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 32
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 35
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 37
        if (($context["gdpr"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 39
            echo ($context["gdpr"] ?? null);
            echo "\">";
            echo ($context["text_gdpr"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 43
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 48
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 51
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 56
        if (($context["affiliate"] ?? null)) {
            // line 57
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 58
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 62
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 67
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 70
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 73
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 76
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 79
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<div class=\"border-t border-[#6B7A93]\">
\t<div class=\"container mx-auto sm:px-0 px-[20px] sm:flex gap-[30px] sm:py-[20px] pt-[30px] pb-[40px]\">
\t\t<div class=\"flex items-center gap-[8px] font-bold\">
\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M11 10.5H12.5V9M11 4.5H12.5V6M4 4.5H2.5V6M2.5 9V10.5H4M7.5 9.5C6.39543 9.5 5.5 8.60457 5.5 7.5C5.5 6.39543 6.39543 5.5 7.5 5.5C8.60457 5.5 9.5 6.39543 9.5 7.5C9.5 8.60457 8.60457 9.5 7.5 9.5ZM1.5 2.5H13.5C14.0523 2.5 14.5 2.94772 14.5 3.5V11.5C14.5 12.0523 14.0523 12.5 13.5 12.5H1.5C0.947716 12.5 0.5 12.0523 0.5 11.5V3.5C0.5 2.94772 0.947715 2.5 1.5 2.5Z\" stroke=\"#080E16\"/>
\t\t\t</svg>
\t\t\t<span class=\"text-[#080E16]\">PAYMENT OPTIONS</span>
\t\t</div>
\t\t<div class=\"sm:flex grid grid-cols-4 sm:flex-wrap sm:gap-[30px] gap-[18px] sm:mt-0 mt-[20px]\">
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (0).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (1).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (2).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (3).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (4).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (5).png\"/>
\t\t\t<img src=\"/image/catalog/payment_options/Paycard (6).png\"/>
\t\t</div>
\t</div>
</div>
<div class=\"border-y border-[#6B7A93] bg-[#f5f5f5]\">
\t<div class=\"container mx-auto sm:px-0 px-[20px] flex justify-between sm:items-start sm:gap-0 gap-[16px] items-center text-center sm:flex-row flex-col py-[26px] text-[#6B7A93]\">
\t\t<p>";
        // line 106
        echo ($context["text_powered"] ?? null);
        echo "</p>
\t\t<p>";
        // line 107
        echo ($context["copyright"] ?? null);
        echo "</p>
\t</div>
</div></footer>";
        // line 109
        echo ($context["cookie"] ?? null);
        echo "<script src=\"";
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 110
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 110);
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 111,  263 => 110,  255 => 109,  250 => 107,  246 => 106,  214 => 79,  206 => 76,  198 => 73,  190 => 70,  184 => 67,  174 => 62,  171 => 61,  163 => 58,  160 => 57,  158 => 56,  151 => 54,  143 => 51,  137 => 48,  127 => 43,  124 => 42,  116 => 39,  113 => 38,  111 => 37,  104 => 35,  96 => 32,  90 => 29,  87 => 28,  82 => 25,  71 => 22,  68 => 21,  64 => 20,  59 => 18,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\footer.twig");
    }
}
