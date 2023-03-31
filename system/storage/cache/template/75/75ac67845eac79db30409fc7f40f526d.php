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
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 2
            echo "\t<li>
\t\t<div class=\"p-[20px] border-b border-[#6B7A93] flex justify-between\">
\t\t\t<div class=\"flex items-center sm:gap-[18px] gap-[12px]\">
\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M3.5 5.5L6.5 0.5M8.5 0.5L11.5 5.5M0.703196 5.5H14.2968C14.409 5.5 14.5 5.59097 14.5 5.7032V6.14196C14.5 9.00793 13.8327 11.8345 12.551 14.398C12.5198 14.4605 12.4558 14.5 12.3859 14.5H2.61409C2.54417 14.5 2.48025 14.4605 2.44898 14.398C1.16727 11.8345 0.5 9.00793 0.5 6.14196V5.7032C0.5 5.59097 0.590974 5.5 0.703196 5.5Z\" stroke=\"#080E16\"/>
\t\t\t\t</svg>
\t\t\t\t<div class=\"sm:flex sm:text-[16px] text-[12px] font-bold\">
\t\t\t\t\t<span class=\"text-[#F98D78]\">PRODUCT</span>&nbsp;ADDED TO CART</div>
\t\t\t</div>
\t\t\t<a href=\"";
            // line 11
            echo ($context["cart"] ?? null);
            echo "\" class=\"px-[14px] py-[4px] bg-[#5D6FF6] text-[16px] text-white font-bold\">
\t\t\t\t";
            // line 12
            echo ($context["text_cart"] ?? null);
            echo "
\t\t\t</a>
\t\t</div>
\t\t<div class=\"\">
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "\t\t\t\t<div class=\"flex justify-between p-[20px] border-b border-[#6B7A9320] gap-[10px]\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"w-full flex justify-between\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\" class=\"font-bold text-[#F98D78]\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "
\t\t\t\t\t\t\t\t<span class=\"\">x
\t\t\t\t\t\t\t\t\t";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 34);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                        echo "</small>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
                    // line 42
                    echo ($context["text_subscription"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 43);
                    echo "</small>
\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t<div class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 45);
                echo "</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t<form action=\"";
                // line 49
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#cart-dropdown\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 50);
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 51
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 63
                echo "\t\t\t\t<div>
\t\t\t\t\t<div class=\"text-center\"></div>
\t\t\t\t\t<div class=\"text-start\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 65);
                echo "</div>
\t\t\t\t\t<div class=\"\">x&nbsp;1</div>
\t\t\t\t\t<div class=\"\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 67);
                echo "</div>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<form action=\"";
                // line 69
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#cart-dropdown\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 70);
                echo "\"/>
\t\t\t\t\t\t\t<button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 71
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"\">
\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t</div>
\t</li>
";
        } else {
            // line 84
            echo "\t<li class=\"p-[20px]\">
\t\t<p class=\"text-center\">";
            // line 85
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t</li>
";
        }
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
        return array (  232 => 85,  229 => 84,  224 => 81,  208 => 71,  204 => 70,  198 => 69,  193 => 67,  188 => 65,  184 => 63,  179 => 62,  162 => 51,  158 => 50,  152 => 49,  144 => 45,  139 => 43,  135 => 42,  130 => 39,  127 => 38,  124 => 37,  116 => 35,  112 => 34,  107 => 31,  102 => 30,  100 => 29,  95 => 27,  88 => 25,  83 => 22,  71 => 20,  69 => 19,  65 => 17,  61 => 16,  54 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\cart.twig");
    }
}
