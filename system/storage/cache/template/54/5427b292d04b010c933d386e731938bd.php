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
        echo "</main>
<footer class=\"border-t border-[#6B7A93] bg-[#FFF3E2]\">
\t<div class=\"container mx-auto sm:px-0 px-[20px] sm:py-[84px] py-[40px]\">
\t\t<div class=\"grid grid-cols-6 gap-[6px]\">
\t\t\t<div class=\"sm:col-span-2 col-span-6\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"/image/catalog/logo_image.png\"/>
\t\t\t\t</a>
\t\t\t\t<div class=\"mt-[20px] text-[#080E16] max-w-[270px]\">
\t\t\t\t\tAs a member of the LittleMinis’ members club, you’ll get great discounts on everything from perfumes to skincare products. The first month is always free.

\t\t\t\t</div>
\t\t\t\t<div class=\"font-bold mt-[26px]\">
\t\t\t\t\t<a href=\"#\">Start saving today!</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 17
        if (($context["informations"] ?? null)) {
            // line 18
            echo "\t\t\t\t<div class=\"sm:col-span-1 col-span-3 w-full sm:mt-0 mt-[30px]\">
\t\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
            // line 19
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 23);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 29
        echo "\t\t\t<div class=\"sm:col-span-1 col-span-3 w-full sm:mt-0 mt-[30px]\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 30
        echo ($context["text_service"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 38
        if (($context["gdpr"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo ($context["gdpr"] ?? null);
            echo "\">";
            echo ($context["text_gdpr"] ?? null);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 46
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 49
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 51
        if (($context["affiliate"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 57
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 62
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 65
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 68
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 71
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 74
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"border-t border-[#6B7A93]\">
\t\t<div class=\"container mx-auto sm:px-0 px-[20px] sm:flex gap-[30px] sm:py-[20px] pt-[30px] pb-[40px]\">
\t\t\t<div class=\"flex items-center gap-[8px] font-bold\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M11 10.5H12.5V9M11 4.5H12.5V6M4 4.5H2.5V6M2.5 9V10.5H4M7.5 9.5C6.39543 9.5 5.5 8.60457 5.5 7.5C5.5 6.39543 6.39543 5.5 7.5 5.5C8.60457 5.5 9.5 6.39543 9.5 7.5C9.5 8.60457 8.60457 9.5 7.5 9.5ZM1.5 2.5H13.5C14.0523 2.5 14.5 2.94772 14.5 3.5V11.5C14.5 12.0523 14.0523 12.5 13.5 12.5H1.5C0.947716 12.5 0.5 12.0523 0.5 11.5V3.5C0.5 2.94772 0.947715 2.5 1.5 2.5Z\" stroke=\"#080E16\"/>
\t\t\t\t</svg>
\t\t\t\t<span class=\"text-[#080E16]\">PAYMENT OPTIONS</span>
\t\t\t</div>
\t\t\t<div class=\"sm:flex grid grid-cols-4 sm:flex-wrap sm:gap-[30px] gap-[18px] sm:mt-0 mt-[20px]\">
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (0).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (1).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (2).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (3).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (4).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (5).png\"/>
\t\t\t\t<img src=\"/image/catalog/payment_options/Paycard (6).png\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"border-t border-[#6B7A93] bg-[#f5f5f5]\">
\t\t<div class=\"container mx-auto sm:px-0 px-[20px] flex justify-between sm:items-start sm:gap-0 gap-[16px] items-center text-center sm:flex-row flex-col py-[26px] text-[#6B7A93]\">
\t\t\t<p>";
        // line 101
        echo ($context["text_powered"] ?? null);
        echo "</p>
\t\t\t<p>";
        // line 102
        echo ($context["copyright"] ?? null);
        echo "</p>
\t\t</div>
\t</div>
</footer>
";
        // line 106
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 107
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 109
            echo "\t<script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 109);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js\"></script></body></html>
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
        return array (  263 => 111,  254 => 109,  250 => 108,  246 => 107,  242 => 106,  235 => 102,  231 => 101,  199 => 74,  191 => 71,  183 => 68,  175 => 65,  169 => 62,  159 => 57,  156 => 56,  148 => 53,  145 => 52,  143 => 51,  136 => 49,  130 => 46,  125 => 43,  117 => 40,  114 => 39,  112 => 38,  105 => 36,  97 => 33,  91 => 30,  88 => 29,  83 => 26,  72 => 23,  69 => 22,  65 => 21,  60 => 19,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\footer.twig");
    }
}
