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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_9c9bf1e5da029c0c60ebe010a1afa4fa extends Template
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
<div id=\"product-category\" class=\"container mx-auto sm:px-0 px-[20px]\">
\t<div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
\t\t<div id=\"content\" class=\"col\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h2 class=\"sm:py-[40px] py-[32px] sm:text-[40px] text-[30px] font-bold text-center uppercase\">
\t\t\t\t<span class=\"text-orange\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
\t\t\t\tPRODUCTS IN STOCK
\t\t\t</h2>

\t\t\t";
        // line 10
        if (($context["products"] ?? null)) {
            // line 11
            echo "\t\t\t\t<div id=\"display-control\" class=\"sm:flex sm:justify-between grid grid-cols-2 sm:gap-[30px] gap-[15px] text-center\">
\t\t\t\t\t<div class=\"flex sm:justify-start justify-between sm:gap-[30px] gap-[15px]\">
\t\t\t\t\t\t<div class=\"sm:flex hidden h-[48px] items-center border-t border-b border-darkBlue sm:w-[170px] justify-center\">
\t\t\t\t\t\t\t<div class=\"flex items-center gap-[8px]\">
\t\t\t\t\t\t\t\t<div class=\"block text-[16px]\">";
            // line 15
            echo ($context["product_total"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\tPRODUCT
\t\t\t\t\t\t\t\t\t";
            // line 17
            if ((($context["product_total"] ?? null) > 1)) {
                echo "S
\t\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button data-dropdown-toggle=\"filter-dropdown\" class=\"flex sm:w-[170px] w-[43px] h-[48px] items-center border-t border-b border-darkBlue justify-center\">
\t\t\t\t\t\t\t<div class=\"flex items-center gap-[8px]\">
\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M0 2.5H15M3 7.5H12M5 12.5H10\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"sm:block hidden text-[16px]\">FILTER</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"filter-dropdown\" class=\"dropdown-menu z-10 hidden bg-white border !border-darkBlue uppercase text-[12px] text-center px-[20px] py-[10px] w-[170px] flex flex-col gap-[8px]\">
\t\t\t\t\t\t\t";
            // line 31
            if (($context["categories"] ?? null)) {
                // line 32
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"block\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["category"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"block\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 39);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:hidden block grow\">";
            // line 45
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex sm:justify-start justify-between sm:gap-[30px] gap-[15px]\">
\t\t\t\t\t\t<div class=\"sm:block hidden\">";
            // line 48
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t<button data-dropdown-toggle=\"sort-dropdown\" class=\"flex sm:flex-none grow h-[48px] items-center border-t border-b border-darkBlue sm:w-[170px] justify-center\">
\t\t\t\t\t\t\t<div class=\"flex items-center gap-[8px]\">
\t\t\t\t\t\t\t\t<div class=\"block text-[16px] uppercase\">
\t\t\t\t\t\t\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 53) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 54);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"sort-dropdown\" class=\"dropdown-menu z-10 hidden bg-white border !border-darkBlue uppercase text-[12px] text-center px-[20px] py-[10px] w-[170px] flex flex-col gap-[8px]\">
\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 62
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 62);
                echo "\" class=\"block ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 62) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " font-bold ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 62);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"product-list\" class=\"grid sm:grid-cols-4 grid-cols-2 sm:gap-[30px] gap-[15px] sm:mt-[40px] mt-[30px]\">
\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "\t\t\t\t\t\t<div class=\"\">";
                echo $context["product"];
                echo "</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"sm:flex sm:justify-between grid grid-cols-2 gap-[15px] sm:pt-[40px] sm:pb-[80px] pt-[30px] pb-[60px]\">
\t\t\t\t\t<div>
\t\t\t\t\t\t";
            // line 74
            if ((($context["next_limit"] ?? null) != "")) {
                // line 75
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo ($context["next_limit"] ?? null);
                echo "\" class=\"block sm:w-[210px] w-full h-[48px] flex justify-center items-center border border-darkblue text-center\">LOAD MORE PRODUCTS</a>
\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 79
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 83
            echo "        <div class=\"sm:py-[20px] py-[15px] sm:mb-[40px] mb-[30px] pt-2 pd-2 w-100 text-center flex flex-col items-center\">
          <p>";
            // line 84
            echo ($context["text_no_results"] ?? null);
            echo "</p>
\t\t\t\t\t<a href=\"";
            // line 85
            echo ($context["continue"] ?? null);
            echo "\" class=\"mt-[20px] block w-[198px] px-[26px] py-[12px] bg-indigo text-white font-semibold\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
        </div>
\t\t\t";
        }
        // line 88
        echo "\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 89
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 91
        echo ($context["section_save_membership"] ?? null);
        echo "
";
        // line 92
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 93
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 93,  281 => 92,  277 => 91,  272 => 89,  267 => 88,  259 => 85,  255 => 84,  252 => 83,  249 => 82,  243 => 79,  239 => 77,  233 => 75,  231 => 74,  226 => 71,  217 => 69,  213 => 68,  207 => 64,  192 => 62,  188 => 61,  182 => 57,  176 => 56,  170 => 54,  167 => 53,  163 => 52,  156 => 48,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  135 => 41,  124 => 39,  119 => 38,  114 => 37,  111 => 36,  100 => 34,  95 => 33,  92 => 32,  90 => 31,  76 => 19,  71 => 17,  66 => 15,  60 => 11,  58 => 10,  51 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/category.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\product\\category.twig");
    }
}
