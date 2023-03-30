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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_cebd547d253e7c5aa0db721a2a80cbf4 extends Template
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
        echo "<form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\" class=\"h-full\">
\t<div class=\"product-thumb h-full flex flex-col\">
\t\t<div class=\"pt-[10px] px-[10px] flex justify-end\">
\t\t\t<button class=\"text-[8px] uppercase px-[10px] py-[5px] rounded-full bg-indigo text-white\">LUXURY</button>
\t\t</div>
\t\t<div class=\"image relative p-[10px]\">
\t\t\t<div class=\"flex justify-center\">
\t\t\t\t<img src=\"";
        // line 8
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/>
\t\t\t</div>
\t\t\t<div class=\"absolute sm:flex hidden bottom-0 w-full justify-center px-[10px] left-0\">
\t\t\t\t<button type=\"submit\" formaction=\"";
        // line 11
        echo ($context["add_to_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" class=\"btn-buy px-[26px] py-[8px] bg-indigo text-white font-semibold sm:w-[200px] flex justify-center sm:mt-0 mt-[20px]\">
\t\t\t\t\tBUY
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content grow flex flex-col justify-between text-center p-[10px]\">
\t\t\t<div>
\t\t\t\t<h4 class=\"text-orange font-bold\">
\t\t\t\t\t<a href=\"";
        // line 19
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a>
\t\t\t\t</h4>
\t\t\t\t<p class=\"mt-[3px]\">";
        // line 21
        echo ($context["description"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t\t";
        // line 23
        if (($context["price"] ?? null)) {
            // line 24
            echo "\t\t\t\t<div class=\"sm:mt-[38px] mt-[28px] flex justify-between gap-[4px]\">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"text-[18px] text-dark opacity-[0.3]\">279\$</div>
\t\t\t\t\t\t<div class=\"text-[10px] text-dark opacity-[0.3]\">Normal price</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"text-[18px] text-orange\">";
            // line 30
            echo ($context["price"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"text-[10px] text-dark\">Member price</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 36
            echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "\t\t</div>
\t\t<button type=\"submit\" formaction=\"";
        // line 52
        echo ($context["add_to_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" class=\"sm:hidden block px-[26px] py-[8px] bg-indigo text-white font-semibold sm:w-[200px] flex justify-center sm:mt-0 mt-[20px]\">
\t\t\tBUY
\t\t</button>
\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 55
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 56
        echo ($context["minimum"] ?? null);
        echo "\"/>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  148 => 55,  140 => 52,  137 => 51,  133 => 49,  127 => 48,  120 => 43,  114 => 39,  111 => 38,  107 => 37,  104 => 36,  101 => 35,  93 => 30,  85 => 24,  83 => 23,  78 => 21,  71 => 19,  58 => 11,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\product\\thumb.twig");
    }
}
