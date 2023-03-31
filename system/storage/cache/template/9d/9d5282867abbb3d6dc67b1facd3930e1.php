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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_26ec2f79a7e740793d6e8f63acde39a8 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "\t<div class=\"cart-item flex py-[20px] border-b border-darkBlue\">
\t\t<div class=\"text-center\">
\t\t\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
                echo "\" class=\"w-[120px]\"/></a>
\t\t\t";
            }
            // line 7
            echo "\t\t</div>
\t\t<div class=\"grow flex justify-between py-[16px]\">
\t\t\t<div class=\"flex flex-col justify-between\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\" class=\"font-bold\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t\t";
            // line 12
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t\t<span class=\"text-danger\">***</span>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 15)) {
                // line 16
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 17
                    echo "\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                    echo ":
\t\t\t\t\t\t\t\t";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                    echo "</small>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<small>";
                // line 26
                echo ($context["text_points"] ?? null);
                echo ":
\t\t\t\t\t\t\t";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 27);
                echo "</small>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<small>";
                // line 31
                echo ($context["text_subscription"] ?? null);
                echo ":
\t\t\t\t\t\t\t";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 32);
                echo "</small>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t<div class=\"text-start text-[10px] mt-[4px]\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 34);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex gap-[10px]\">
\t\t\t\t\t<div class=\"w-[12px] h-[12px] bg-green rounded-full\"></div>
\t\t\t\t\t<div class=\"text-[10px] opacity-[0.5]\">Delivery: 1-4 days</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-col justify-between\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<div class=\"text-end text-orange font-bold text-[19px]\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
            echo "</div>
\t\t\t\t\t<div class=\"text-end\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t<form method=\"post\" data-oc-target=\"#shopping-cart\">
\t\t\t\t\t\t<div class=\"flex items-center\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"hidden\" name=\"key\" value=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 50);
            echo "\">

\t\t\t\t\t\t\t";
            // line 53
            echo "\t\t\t\t\t\t\t<button type=\"button\" formaction=\"";
            echo ($context["product_edit"] ?? null);
            echo "\" formaction-remove=\"";
            echo ($context["product_remove"] ?? null);
            echo "\" title=\"";
            echo ($context["product_edit"] ?? null);
            echo "\" class=\"btn-cart-change-quantity\" data-diff=\"-1\">
\t\t\t\t\t\t\t\t<svg width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" fill=\"white\" stroke=\"#6B7A93\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M6 12.5H19\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"text\" name=\"quantity\" value=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60);
            echo "\" size=\"1\" class=\"text-[18px] !border-none !ring-0 px-[8px] py-0 text-center\" readonly>
\t\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t\t<button type=\"button\" formaction=\"";
            echo ($context["product_edit"] ?? null);
            echo "\" formaction-remove=\"";
            echo ($context["product_remove"] ?? null);
            echo "\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn-cart-change-quantity\" data-diff=\"1\">
\t\t\t\t\t\t\t\t<svg width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" fill=\"white\" stroke=\"#6B7A93\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M12.5 6V19M6 12.5H19\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 62,  181 => 60,  166 => 53,  161 => 50,  152 => 44,  148 => 43,  135 => 34,  130 => 32,  126 => 31,  123 => 30,  120 => 29,  115 => 27,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  94 => 21,  90 => 20,  85 => 17,  80 => 16,  77 => 15,  73 => 13,  71 => 12,  65 => 11,  59 => 7,  47 => 5,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}
