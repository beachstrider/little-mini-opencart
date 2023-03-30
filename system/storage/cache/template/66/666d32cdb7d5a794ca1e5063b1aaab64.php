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

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_3a2ee4cc4b77d164c2ad34fc3bd56bd5 extends Template
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
        echo "<div id=\"carousel-banner-";
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            echo " carousel-fade";
        }
        echo "\" data-bs-ride=\"carousel\">
\t";
        // line 2
        if ((($context["indicators"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 3
            echo "\t\t<div class=\"carousel-indicators\">
\t\t\t";
            // line 4
            $context["banner_row"] = 0;
            // line 5
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel-banner-";
                echo ($context["module"] ?? null);
                echo "\" data-bs-slide-to=\"";
                echo ($context["banner_row"] ?? null);
                echo "\" ";
                if ((($context["banner_row"] ?? null) == 0)) {
                    echo " class=\"active\" ";
                }
                echo "></button>
\t\t\t\t";
                // line 7
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 8
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t</div>
\t";
        }
        // line 11
        echo "\t<div class=\"carousel-inner\">
\t\t";
        // line 12
        $context["banner_row"] = 0;
        // line 13
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 14
            echo "\t\t\t<div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo " active";
            }
            echo "\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 17
                echo "\t\t\t\t\t\t<div class=\"col-";
                echo twig_round((12 / ($context["items"] ?? null)));
                echo " text-center\">
\t\t\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19);
                    echo "\" class=\"img-fluid\"/></a>
\t\t\t\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
                    echo "\" class=\"img-fluid\"/>
\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 27
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 28
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</div>
\t";
        // line 30
        if ((($context["controls"] ?? null) && (twig_length_filter($this->env, twig_array_batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 31
            echo "\t\t<button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"prev\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 19.5L8.25 12l7.5-7.5\"/>
\t\t\t</svg>
\t\t</button>
\t\t<button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 36
            echo ($context["module"] ?? null);
            echo "\" data-bs-slide=\"next\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.25 4.5l7.5 7.5-7.5 7.5\"/>
\t\t\t</svg>
\t\t</button>
\t";
        }
        // line 42
        echo "</div>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$(document).ready(function () {
new bootstrap.Carousel(document.querySelector('#carousel-banner-        ";
        // line 47
        echo ($context["module"] ?? null);
        echo "'), {
ride: 'carousel',
interval: ";
        // line 49
        echo twig_escape_filter($this->env, ($context["interval"] ?? null), "js");
        echo ",
wrap: true
});
});
//
\t-->
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  177 => 47,  170 => 42,  161 => 36,  152 => 31,  150 => 30,  147 => 29,  141 => 28,  139 => 27,  135 => 25,  128 => 23,  120 => 21,  110 => 19,  108 => 18,  103 => 17,  99 => 16,  91 => 14,  86 => 13,  84 => 12,  81 => 11,  77 => 9,  71 => 8,  69 => 7,  58 => 6,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "E:\\xampp\\htdocs\\extension\\opencart\\catalog\\view\\template\\module\\banner.twig");
    }
}
