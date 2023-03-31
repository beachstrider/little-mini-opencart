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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_27366c38b61a8d724078adcd899e05bc extends Template
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
<div id=\"product-info\" class=\"container mx-auto sm:px-0 px-[20px]\">
\t<div class=\"breadcrumb-container flex opacity-[0.5] text-[12px] gap-[4px] py-[16px]\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a>
\t\t\t<span class=\"last:hidden\">›</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</div>
\t<div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
\t\t<div id=\"content\" class=\"col sm:pb-[80px] pb-[60px]\">
\t\t\t";
        // line 11
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"sm:grid grid-cols-9 gap-[30px]\">
\t\t\t\t<div class=\"col-span-5\">
\t\t\t\t\t";
        // line 14
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"image magnific-popup\">
\t\t\t\t\t\t\t";
            // line 16
            if (($context["thumb"] ?? null)) {
                // line 17
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"border border-darkBlue w-full mb-3\"/></a>
\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t<div class=\"sm:mt-[40px] mt-[30px] sm:text-[16px] text-[12px]\">
\t\t\t\t\t\t";
        // line 22
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-span-4 border-t border-darkBlue \">
\t\t\t\t\t<div class=\"flex justify-between items-center sm:py-[16px] py-12px\">
\t\t\t\t\t\t<h1 class=\"sm:text-[24px] text-[18px] font-bold\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t<div class=\"flex gap-[6px]\">
\t\t\t\t\t\t\t<form method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t\t\t\t\t<button type=\"submit\" formaction=\"";
        // line 30
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" class=\"\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-heart\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 33
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px]\">
\t\t\t\t\t\t\t<div>";
        // line 40
        echo ($context["meta_title"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-[8px] sm:text-[16px] text-[12px]\">
\t\t\t\t\t\t\t";
        // line 43
        echo ($context["model"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 46
        if (($context["price"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t\t<div id=\"product\" class=\"mt-[10px]\">

\t\t\t\t\t\t\t<form id=\"form-product\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 52) == "select")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 53)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 54);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 54);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 54);
                    echo "\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 55
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 57);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 57);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 58
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 58)) {
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 59);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 59);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 63);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 66) == "radio")) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 67)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 68);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option-";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 69);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 72);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 72);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 72)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 72);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 72);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 72)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 72);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 72);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 73);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 74
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 74)) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 75);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 75);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 81);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 84) == "checkbox")) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 85)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option-";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 87);
                    echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 91
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 91);
                        echo "\" class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 92)) {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 93);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 93);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 93)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 93);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 93);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 94);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 95
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 95)) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 96);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 96);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 104) == "text")) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 105)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 106);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 106);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 106);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 107);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 110) == "textarea")) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 111)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 112);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 113);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "file")) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 117)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"button-upload-";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 118);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload-";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 123);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 126) == "date")) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 127)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 128);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 130);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    echo "\" class=\"form-control date\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "datetime")) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 137)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 140);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "\" class=\"form-control datetime\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "time")) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) {
                        echo " required";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option-";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 150);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "\" class=\"form-control time\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-option-";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["subscription_plans"] ?? null)) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 159
                echo ($context["text_subscription"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 required\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 162
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 164);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 164);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"subscription-description-";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 168);
                    echo "\" class=\"form-text subscription d-none\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 168);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"error-subscription\" class=\"invalid-feedback\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3 hidden\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-quantity\" class=\"form-label\">";
            // line 174
            echo ($context["entry_qty"] ?? null);
            echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
            echo ($context["product_id"] ?? null);
            echo "\" id=\"input-product-id\"/>
\t\t\t\t\t\t\t\t\t\t<div id=\"error-quantity\" class=\"form-text\"></div>
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 178
            if ((($context["minimum"] ?? null) > 1)) {
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"purchase-type-container p-[20px] relative mt-[20px]\" data-type=\"1\">
\t\t\t\t\t\t\t\t\t<div class=\"px-[8px] py-[4px] bg-orange uppercase text-[12px] text-white absolute right-0 top-0\">SAVE 44% / 120\$</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom flex justify-between py-[10px]\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center gap-[10px]  btn-purchase-type\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0.5\" y=\"0.5\" width=\"19\" height=\"19\" fill=\"white\" stroke=\"#F98D78\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 11L6.92857 15L16.75 5\" stroke=\"#F98D78\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0.5\" y=\"0.5\" width=\"19\" height=\"19\" fill=\"white\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"purchase-type-name sm:text-[24px] text-[18px] font-bold uppercase\">MEMBER PRICE</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"purchase-type-name sm:text-[24px] text-[18px]text-orange font-bold\">";
            // line 197
            echo ($context["price"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[12px] text-[9px]\">Choose the Member Price and receive free delivery. The first 30 days are free (after that DKK 89,- p/m).
\t\t\t\t\t\t\t\t\t\t<a class=\"underline\" href=\"#\">Read more about the advantages.</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-[12px] px-[14px] py-[10px] grid grid-cols-3 bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex flex-col items-center gap-[6px]\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7.5 3V7.5L10.5 10.5M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px]\">Delivery in 1-4 work days</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex flex-col items-center gap-[6px]\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2 9.5H5M13 9.5H10M3 6.5H12M14.5 6.4967V12.5C14.5 13.0523 14.0523 13.5 13.5 13.5H12.5C11.9477 13.5 11.5 13.0523 11.5 12.5V11.5H3.5V12.5C3.5 13.0523 3.05228 13.5 2.5 13.5H1.5C0.947715 13.5 0.5 13.0523 0.5 12.5V6.4967L2.62597 2.95576C3.16824 2.05257 4.14452 1.5 5.19799 1.5H9.80201C10.8555 1.5 11.8318 2.05257 12.374 2.95576L14.5 6.4967Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px]\">Free delivery from €19</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex flex-col items-center gap-[6px]\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5 5.5H6M9 9.5H10M10 5L5 10M6.80145 0.789347L5.67243 1.91837C5.48717 2.10363 5.23589 2.20772 4.97389 2.20772H3.19561C2.65001 2.20772 2.20772 2.65001 2.20772 3.19561V4.97389C2.20772 5.23589 2.10363 5.48717 1.91837 5.67243L0.789347 6.80145C0.403551 7.18725 0.403551 7.81275 0.789347 8.19855L1.91837 9.32757C2.10363 9.51283 2.20772 9.76411 2.20772 10.0261V11.8044C2.20772 12.35 2.65001 12.7923 3.19561 12.7923H4.97389C5.23589 12.7923 5.48717 12.8964 5.67243 13.0816L6.80145 14.2107C7.18725 14.5964 7.81275 14.5964 8.19855 14.2107L9.32757 13.0816C9.51283 12.8964 9.76411 12.7923 10.0261 12.7923H11.8044C12.35 12.7923 12.7923 12.35 12.7923 11.8044V10.0261C12.7923 9.76411 12.8964 9.51283 13.0816 9.32757L14.2107 8.19855C14.5964 7.81275 14.5964 7.18725 14.2107 6.80145L13.0816 5.67243C12.8964 5.48717 12.7923 5.23589 12.7923 4.97389V3.19561C12.7923 2.65001 12.35 2.20772 11.8044 2.20772H10.0261C9.76411 2.20772 9.51283 2.10363 9.32757 1.91837L8.19855 0.789347C7.81275 0.403551 7.18725 0.403551 6.80145 0.789347Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px]\">Fixed discount</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-purchase uppercase font-bold text-white py-[12px] text-center w-full bg-indigo mt-[20px]\">";
            // line 222
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"selected purchase-type-container p-[20px] relative\" data-type=\"0\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom flex justify-between py-[10px]\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex items-center gap-[10px] btn-purchase-type\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0.5\" y=\"0.5\" width=\"19\" height=\"19\" fill=\"white\" stroke=\"#F98D78\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 11L6.92857 15L16.75 5\" stroke=\"#F98D78\" stroke-width=\"2\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<g opacity=\"0.5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0.5\" y=\"0.5\" width=\"19\" height=\"19\" fill=\"white\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"purchase-type-name sm:text-[24px] text-[18px] font-bold uppercase\">NORMAL PRICE</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[24px] text-[18px]text-orange font-bold purchase-type-name\">";
            // line 238
            echo ($context["price"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mt-[12px] px-[14px] py-[10px] flex justify-center bg-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex flex-col items-center gap-[6px]\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M7.5 3V7.5L10.5 10.5M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sm:text-[10px] text-[8px] opacity-[0.5]\">Delivery in 1-4 work days</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-purchase uppercase font-bold text-white py-[12px] text-center w-full bg-indigo mt-[20px]\">";
            // line 248
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3 hidden\">
\t\t\t\t\t\t\t\t\t<label for=\"input-quantity\" class=\"form-label\">";
            // line 252
            echo ($context["entry_qty"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 253
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 254
            echo ($context["product_id"] ?? null);
            echo "\" id=\"input-product-id\"/>
\t\t\t\t\t\t\t\t\t<div id=\"error-quantity\" class=\"form-text\"></div>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
            // line 259
            if ((($context["minimum"] ?? null) > 1)) {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-circle-info\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 262
                echo ($context["text_minimum"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            // line 264
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>


\t\t\t\t\t\t<div class=\"flex justify-center sm:text-[12px] text-[8px] py-[15px]\">
\t\t\t\t\t\t\t<div class=\"flex gap-[10px]\">
\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"19\" viewbox=\"0 0 15 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M0.5 4.43132L7.5 0.633789L14.5 4.43132M0.5 4.43132L7.5 8.22884M0.5 4.43132V4.43379M14.5 4.43132L7.5 8.22884M14.5 4.43132V14.5671L7.5 18.3671M14.5 4.43132L7.5 8.23379V18.3671M7.5 8.22884V18.3671M7.5 8.22884L0.5 4.43379M7.5 18.3671L0.5 14.5671V4.43379\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div>We ship today and accept returns for up to 90 days.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 278
        echo "
\t\t\t\t<br/>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 282
        if (($context["tags"] ?? null)) {
            // line 283
            echo "\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 285
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 285);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 285);
                echo "</a>
\t\t\t\t\t";
                // line 286
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 286)) {
                    echo ",
\t\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "\t\t\t</p>
\t\t";
        }
        // line 291
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t";
        // line 292
        echo ($context["column_right"] ?? null);
        echo "</div></div>";
        if (($context["products"] ?? null)) {
            // line 293
            echo "<div class=\"sm:py-[80px] py-[60px] bg-[#FFF3E2]\">
\t<div class=\"container mx-auto sm:px-0 px-[20px]\">
\t\t<h3 class=\"sm:text-[40px] text-[30px] font-bold uppercase\">";
            // line 295
            echo ($context["text_related"] ?? null);
            echo "</h3>
\t\t<div class=\"sm:mt-[40px] mt-[30px] grid sm:grid-cols-6 grid-cols-2 sm:gap-[30px] gap-[10px]\">
\t\t\t";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 298
                echo "\t\t\t\t<div class=\"\">";
                echo $context["product"];
                echo "</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "\t\t</div>
\t</div>
</div>";
        }
        // line 302
        echo ($context["section_save_membership"] ?? null);
        echo ($context["section_best_deals"] ?? null);
        echo ($context["footer"] ?? null);
        echo "

<script src=\"catalog/view/javascript/product.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  886 => 302,  881 => 300,  872 => 298,  868 => 297,  863 => 295,  859 => 293,  855 => 292,  850 => 291,  846 => 289,  832 => 288,  827 => 286,  820 => 285,  803 => 284,  798 => 283,  796 => 282,  790 => 278,  774 => 264,  769 => 262,  765 => 260,  763 => 259,  755 => 254,  751 => 253,  747 => 252,  740 => 248,  727 => 238,  708 => 222,  680 => 197,  662 => 181,  656 => 179,  654 => 178,  643 => 174,  640 => 173,  635 => 170,  624 => 168,  620 => 167,  617 => 166,  606 => 164,  602 => 163,  598 => 162,  592 => 159,  589 => 158,  586 => 157,  580 => 156,  574 => 153,  564 => 150,  557 => 148,  550 => 147,  547 => 146,  541 => 143,  531 => 140,  524 => 138,  517 => 137,  514 => 136,  508 => 133,  498 => 130,  491 => 128,  484 => 127,  481 => 126,  475 => 123,  468 => 121,  454 => 120,  447 => 118,  440 => 117,  437 => 116,  431 => 113,  417 => 112,  410 => 111,  407 => 110,  401 => 107,  387 => 106,  380 => 105,  377 => 104,  371 => 101,  368 => 100,  360 => 97,  353 => 96,  351 => 95,  346 => 94,  333 => 93,  331 => 92,  321 => 91,  318 => 90,  314 => 89,  309 => 87,  305 => 86,  298 => 85,  295 => 84,  289 => 81,  286 => 80,  278 => 77,  271 => 75,  269 => 74,  264 => 73,  242 => 72,  239 => 71,  235 => 70,  231 => 69,  227 => 68,  220 => 67,  217 => 66,  211 => 63,  208 => 62,  201 => 60,  194 => 59,  192 => 58,  185 => 57,  181 => 56,  177 => 55,  167 => 54,  160 => 53,  157 => 52,  153 => 51,  147 => 47,  145 => 46,  139 => 43,  133 => 40,  123 => 33,  115 => 30,  109 => 27,  101 => 22,  98 => 21,  94 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  67 => 11,  62 => 9,  59 => 8,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\product\\product.twig");
    }
}
