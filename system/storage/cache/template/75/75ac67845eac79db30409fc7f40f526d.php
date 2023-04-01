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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_83ddd86cb76ae1ea20137dc41d06d6ed extends Template
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
        echo "<div class=\"dropdown\">
\t<button href=\"";
        // line 2
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"flex sm:flex-row flex-col items-center sm:gap-[10px] relative\" data-custom-dropdown-toggle=\"cart-dropdown\">
\t\t<div class=\"absolute -top-[4px] left-[16px] bg-[#5D6FF6] rounded-full w-[12px] h-[12px] text-white text-[8px] flex justify-center items-center\">";
        // line 3
        echo ($context["count"] ?? null);
        echo "</div>
\t\t<svg width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" fill=\"#FFF3E2\" stroke=\"#080E16\"/>
\t\t\t<path d=\"M8.5 9.5L11.5 4.5M13.5 4.5L16.5 9.5M5.7032 9.5H19.2968C19.409 9.5 19.5 9.59097 19.5 9.7032V10.142C19.5 13.0079 18.8327 15.8345 17.551 18.398C17.5198 18.4605 17.4558 18.5 17.3859 18.5H7.61409C7.54417 18.5 7.48025 18.4605 7.44898 18.398C6.16727 15.8345 5.5 13.0079 5.5 10.142V9.7032C5.5 9.59097 5.59097 9.5 5.7032 9.5Z\" stroke=\"#080E16\"/>
\t\t</svg>
\t\t<span>CART</span>
\t</button>
\t<div class=\"absolute left-0 w-full sm:mt-[54px] mt-[21px]\">
\t\t<div class=\"relative container mx-auto sm:px-0 px-[20px] flex justify-end z-[10]\">
\t\t\t<ul id=\"cart-dropdown\" class=\"!relative hidden bg-white dropdown-menu !right-0 sm:w-[400px] w-full border border-darkBlue !transform-none sm:after:right-[46px] after:right-0 after:!left-auto\">
\t\t\t\t";
        // line 13
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 14
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"p-[20px] border-b border-[#6B7A93] flex justify-between\">
\t\t\t\t\t\t\t<div class=\"flex items-center sm:gap-[18px] gap-[12px]\">
\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M3.5 5.5L6.5 0.5M8.5 0.5L11.5 5.5M0.703196 5.5H14.2968C14.409 5.5 14.5 5.59097 14.5 5.7032V6.14196C14.5 9.00793 13.8327 11.8345 12.551 14.398C12.5198 14.4605 12.4558 14.5 12.3859 14.5H2.61409C2.54417 14.5 2.48025 14.4605 2.44898 14.398C1.16727 11.8345 0.5 9.00793 0.5 6.14196V5.7032C0.5 5.59097 0.590974 5.5 0.703196 5.5Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"sm:flex sm:text-[16px] text-[12px] font-bold\">
\t\t\t\t\t\t\t\t\t<span class=\"text-[#F98D78]\">PRODUCT</span>&nbsp;ADDED TO CART</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo ($context["cart"] ?? null);
            echo "\" class=\"px-[14px] py-[4px] bg-[#5D6FF6] text-[16px] text-white font-bold\">
\t\t\t\t\t\t\t\t";
            // line 24
            echo ($context["text_cart"] ?? null);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<div class=\"flex justify-between p-[20px] border-b border-[#6B7A9320] gap-[10px]\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"w-full flex justify-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                echo "\" class=\"font-bold text-[#F98D78]\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">x
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 47);
                        echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 54
                    echo ($context["text_subscription"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 55);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 57);
                echo "</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 61
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 62);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 63
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 75
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"text-start\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 77);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"\">x&nbsp;1</div>
\t\t\t\t\t\t\t\t\t<div class=\"\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 79);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 81
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 82);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 83
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t<li class=\"p-[20px]\">
\t\t\t\t\t\t<p class=\"text-center\">";
            // line 97
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 100
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 100,  254 => 97,  251 => 96,  246 => 93,  230 => 83,  226 => 82,  220 => 81,  215 => 79,  210 => 77,  206 => 75,  201 => 74,  184 => 63,  180 => 62,  174 => 61,  166 => 57,  161 => 55,  157 => 54,  152 => 51,  149 => 50,  146 => 49,  138 => 47,  134 => 46,  129 => 43,  124 => 42,  122 => 41,  117 => 39,  110 => 37,  105 => 34,  93 => 32,  91 => 31,  87 => 29,  83 => 28,  76 => 24,  72 => 23,  61 => 14,  59 => 13,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\cart.twig");
    }
}
