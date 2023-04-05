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
\t\t\t\t\t<ul class=\"flex flex-col gap-[16px]\">
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
        echo ($context["text_categories"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"flex flex-col gap-[16px]\">
\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 40
        echo ($context["text_help"] ?? null);
        echo "</h5>
\t\t\t\t<ul class=\"flex flex-col gap-[16px]\">
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["helps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["help"]) {
            // line 43
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["help"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["help"], "title", [], "any", false, false, false, 44);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['help'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"sm:col-span-1 col-span-6 w-full\">
\t\t\t\t<h5 class=\"font-bold uppercase pb-[24px]\">";
        // line 50
        echo ($context["text_contact"] ?? null);
        echo "</h5>
\t\t\t\t<div class=\"flex flex-col gap-[16px] text-dark\">
\t\t\t\t\t<a class=\"\" href=\"";
        // line 52
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["store_address"] ?? null);
        echo "</a>
\t\t\t\t\t<div class=\"\">";
        // line 53
        echo ($context["text_email"] ?? null);
        echo ": ";
        echo ($context["store_email"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex gap-[13px] mt-[16px]\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5ZM7.5 14.5V6.5C7.5 5.39543 8.39543 4.5 9.5 4.5H10M5 8.5H10\" stroke=\"#080E16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M11 3.5H12M4.5 0.5H10.5C12.7091 0.5 14.5 2.29086 14.5 4.5V10.5C14.5 12.7091 12.7091 14.5 10.5 14.5H4.5C2.29086 14.5 0.5 12.7091 0.5 10.5V4.5C0.5 2.29086 2.29086 0.5 4.5 0.5ZM7.5 10.5C5.84315 10.5 4.5 9.15685 4.5 7.5C4.5 5.84315 5.84315 4.5 7.5 4.5C9.15685 4.5 10.5 5.84315 10.5 7.5C10.5 9.15685 9.15685 10.5 7.5 10.5Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M4.5 13.5L7.5 6.5M4.26389 9.5C3.78885 8.96924 3.5 8.26835 3.5 7.5V7C3.5 5.067 5.067 3.5 7 3.5H8C9.933 3.5 11.5 5.067 11.5 7V7.5C11.5 9.15685 10.1569 10.5 8.5 10.5C7.60421 10.5 6.80893 9.92679 6.52566 9.07697L6.5 9M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
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
        // line 96
        echo ($context["text_powered"] ?? null);
        echo "</p>
\t\t\t<p>";
        // line 97
        echo ($context["copyright"] ?? null);
        echo "</p>
\t\t</div>
\t</div>
</footer>
";
        // line 101
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 102
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 104
            echo "\t<script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 104);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
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
        return array (  238 => 106,  229 => 104,  225 => 103,  221 => 102,  217 => 101,  210 => 97,  206 => 96,  158 => 53,  152 => 52,  147 => 50,  142 => 47,  131 => 44,  128 => 43,  124 => 42,  119 => 40,  114 => 37,  103 => 34,  100 => 33,  96 => 32,  91 => 30,  88 => 29,  83 => 26,  72 => 23,  69 => 22,  65 => 21,  60 => 19,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\footer.twig");
    }
}
