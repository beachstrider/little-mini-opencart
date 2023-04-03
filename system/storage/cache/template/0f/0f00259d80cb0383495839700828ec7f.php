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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_bc83aa0ebb5e07b82ceadfa4e23985fb extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "\t<div class=\"table-responsive\">
\t\t<div class=\"grid sm:grid-cols-5 grid-cols-2 sm:gap-[32px] gap-[15px]\">
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 5
                echo "\t\t\t\t<div class=\"w-full\">
\t\t\t\t\t<form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                // line 6
                echo ($context["wishlist"] ?? null);
                echo " ";
                echo ($context["cart_info"] ?? null);
                echo "\" data-oc-target=\"#wishlist #header-cart\">
\t\t\t\t\t\t<div class=\"product-thumb h-full flex flex-col\">
\t\t\t\t\t\t\t<div class=\"pt-[10px] px-[10px] flex justify-end\">
\t\t\t\t\t\t\t\t<button class=\"text-[8px] leading-[9px] uppercase px-[10px] py-[5px] rounded-full bg-indigo text-white\">LUXURY</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"image relative p-[10px]\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-center\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                echo "\" class=\"img-fluid\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"absolute sm:flex hidden bottom-[-57px] w-full flex-col px-[10px] left-0 mt-[20px] gap-[10px]\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" formaction=\"";
                // line 16
                echo ($context["add_to_cart"] ?? null);
                echo "\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn-buy px-[26px] py-[8px] bg-indigo text-white font-semibold flex justify-center sm:mt-0\">
\t\t\t\t\t\t\t\t\t\tBUY
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" formaction=\"";
                // line 19
                echo ($context["remove"] ?? null);
                echo "\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-buy px-[26px] py-[8px] bg-orange text-white font-semibold flex justify-center sm:mt-0\">
\t\t\t\t\t\t\t\t\t\tREMOVE
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content grow flex flex-col justify-between text-center p-[10px]\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"text-orange font-bold\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<div class=\"mt-[4px]\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "meta_title", [], "any", false, false, false, 30);
                echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"mt-[4px] sm:text-[10px] text-[8px]\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 32);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sm:mt-[38px] mt-[28px] flex justify-between gap-[4px]\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-[18px] text-dark opacity-[0.3]\">";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-[10px] text-dark opacity-[0.3]\">Normal price</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-[18px] text-orange\">";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-[10px] text-dark\">Member price</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" formaction=\"";
                // line 47
                echo ($context["add_to_cart"] ?? null);
                echo "\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"sm:hidden block px-[26px] py-[8px] bg-indigo text-white font-semibold sm:w-[200px] flex justify-center sm:mt-0 mt-[20px]\">
\t\t\t\t\t\t\t\tBUY
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 50);
                echo "\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 51);
                echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t</div>
\t</div>
";
        } else {
            // line 59
            echo "\t<p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/wishlist_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 59,  160 => 56,  149 => 51,  145 => 50,  137 => 47,  134 => 46,  126 => 41,  119 => 37,  115 => 35,  113 => 34,  108 => 32,  101 => 30,  93 => 27,  80 => 19,  72 => 16,  62 => 13,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/wishlist_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\wishlist_list.twig");
    }
}
