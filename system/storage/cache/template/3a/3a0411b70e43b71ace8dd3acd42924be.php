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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_d178ea71c9360d135dc5a15dd0550af9 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 15
        echo "\t\t<script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
\t\t<link href=\"";
        // line 16
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
\t\t<link href=\"";
        // line 17
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 18
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t\t<link href=\"/image/catalog/logo.png\" rel=\"icon\"/>
\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
\t\t<link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css\" rel=\"stylesheet\"/>
\t\t<script>
\t\t\ttailwind.config = {
\t\t\t\ttheme: {
\t\t\t\t\tcolors: {
\t\t\t\t\t\torange: '#F98D78',
\t\t\t\t\t\tindigo: '#5D6FF6',
\t\t\t\t\t\tdark: '#080E16',
\t\t\t\t\t\tdarkBlue: '#6B7A93'
\t\t\t\t\t},
\t\t\t\t\tfontFamily: {
\t\t\t\t\t\t'semibold': ['avenir-semibold'],
\t\t\t\t\t\t'bold': ['avenir-bold']
\t\t\t\t\t},
\t\t\t\t\tfontWeight: {
\t\t\t\t\t\t'semibold': '400',
\t\t\t\t\t\t'bold': '400'
\t\t\t\t\t},
\t\t\t\t\tcontainer: {
\t\t\t\t\t\tcenter: true,
\t\t\t\t\t\tpadding: '20px',
\t\t\t\t\t\tscreens: {
\t\t\t\t\t\t\tsm: '600px',
\t\t\t\t\t\t\tmd: '728px',
\t\t\t\t\t\t\tlg: '984px',
\t\t\t\t\t\t\txl: '1100px',
\t\t\t\t\t\t\t'2xl': '1170px',
\t\t\t\t\t\t},
\t\t\t\t\t},
\t\t\t\t}
\t\t\t}
\t\t</script>
\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>

\t\t
\t\t<script src=\"https://unpkg.com/@babel/standalone/babel.min.js\"></script>
\t\t<script src=\"https://unpkg.com/react@17/umd/react.development.js\" crossorigin></script> 
\t\t<script src=\"https://unpkg.com/react-dom@17/umd/react-dom.development.js\" crossorigin></script> 

\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 65
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 65);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 65);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 65);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 68
            echo "\t\t\t<script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 68);
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 71
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 71);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 71);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 74
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t</head>
\t<body>
\t\t<div id=\"alert\" class=\"toast-container fixed right-0 p-[8px]\"></div>
\t\t<header class=\"border-b-[1px] border-[#6B7A93]\">
\t\t\t<div class=\"container mx-auto sm:px-0 px-[20px] mx-auto py-[10px]\">
\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t<div class=\"flex items-center sm:gap-9 gap-[18px]\">
\t\t\t\t\t\t<button class=\"sm:hidden block\">
\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M0 5.5H15M0 1.5H15M0 9.5H15M0 13.5H15\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 89
        if (($context["logo"] ?? null)) {
            // line 90
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid sm:h-auto h-[24px]\"/></a>
\t\t\t\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 93
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 97
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex gap-4 items-center sm:text-[14px] text-[10px]\">
\t\t\t\t\t\t";
        // line 100
        if ( !($context["logged"] ?? null)) {
            // line 101
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["register"] ?? null);
            echo "\" title=\"";
            echo ($context["text_shopping_cart"] ?? null);
            echo "\" class=\"flex sm:flex-row flex-col items-center sm:gap-[10px]\">
\t\t\t\t\t\t\t\t<svg class=\"sm:block hidden\" width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M4.9 8.7L4.6 8.3L3.8 8.9L4.1 9.3L4.9 8.7ZM10.9 9.3L11.2 8.9L10.4 8.3L10.1 8.7L10.9 9.3ZM7.5 14C3.91015 14 1 11.0899 1 7.5H0C0 11.6421 3.35786 15 7.5 15V14ZM14 7.5C14 11.0899 11.0899 14 7.5 14V15C11.6421 15 15 11.6421 15 7.5H14ZM7.5 1C11.0899 1 14 3.91015 14 7.5H15C15 3.35786 11.6421 0 7.5 0V1ZM7.5 0C3.35786 0 0 3.35786 0 7.5H1C1 3.91015 3.91015 1 7.5 1V0ZM4 6H5V5H4V6ZM10 6H11V5H10V6ZM10.1 8.7C8.8 10.4333 6.2 10.4333 4.9 8.7L4.1 9.3C5.8 11.5667 9.2 11.5667 10.9 9.3L10.1 8.7Z\" fill=\"#080E16\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<img class=\"sm:hidden block\" src=\"/image/catalog/Button-Signup.png\"/>
\t\t\t\t\t\t\t\t<span>";
            // line 106
            echo ($context["text_register"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"";
            // line 109
            echo ($context["login"] ?? null);
            echo "\" title=\"";
            echo ($context["text_shopping_cart"] ?? null);
            echo "\" class=\"flex sm:flex-row flex-col items-center sm:gap-[10px]\">
\t\t\t\t\t\t\t\t<svg class=\"sm:block hidden\" width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5 3.49804C10.5 5.15396 9.157 6.49609 7.5 6.49609C5.843 6.49609 4.5 5.15396 4.5 3.49804C4.5 1.84212 5.843 0.5 7.5 0.5C9.157 0.5 10.5 1.84212 10.5 3.49804Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.5 14.4909H2.5C2.5 13.7808 2.5 13.1053 2.5 12.4936C2.5 10.8368 3.84315 9.49414 5.5 9.49414H9.5C11.1569 9.49414 12.5 10.8368 12.5 12.4936C12.5 13.1053 12.5 13.7808 12.5 14.4909Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"sm:hidden block\" width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" stroke=\"#080E16\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M15.5 8.49804C15.5 10.154 14.157 11.4961 12.5 11.4961C10.843 11.4961 9.5 10.154 9.5 8.49804C9.5 6.84212 10.843 5.5 12.5 5.5C14.157 5.5 15.5 6.84212 15.5 8.49804Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.5 19.4909H7.5C7.5 18.7808 7.5 18.1053 7.5 17.4936C7.5 15.8368 8.84315 14.4941 10.5 14.4941H14.5C16.1569 14.4941 17.5 15.8368 17.5 17.4936C17.5 18.1053 17.5 18.7808 17.5 19.4909Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>";
            // line 119
            echo ($context["text_login"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\" class=\"flex sm:flex-row flex-col items-center sm:gap-[10px]\">
\t\t\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5 3.49804C10.5 5.15396 9.157 6.49609 7.5 6.49609C5.843 6.49609 4.5 5.15396 4.5 3.49804C4.5 1.84212 5.843 0.5 7.5 0.5C9.157 0.5 10.5 1.84212 10.5 3.49804Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.5 14.4909H2.5C2.5 13.7808 2.5 13.1053 2.5 12.4936C2.5 10.8368 3.84315 9.49414 5.5 9.49414H9.5C11.1569 9.49414 12.5 10.8368 12.5 12.4936C12.5 13.1053 12.5 13.7808 12.5 14.4909Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span>";
            // line 127
            echo ($context["text_account"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t<div id=\"header-cart\">
\t\t\t\t\t\t\t";
        // line 132
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 139
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 139,  308 => 132,  305 => 131,  298 => 127,  287 => 122,  281 => 119,  266 => 109,  260 => 106,  249 => 101,  247 => 100,  241 => 97,  238 => 96,  230 => 93,  227 => 92,  215 => 90,  213 => 89,  198 => 76,  189 => 74,  184 => 73,  173 => 71,  168 => 70,  159 => 68,  154 => 67,  141 => 65,  137 => 64,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\header.twig");
    }
}
