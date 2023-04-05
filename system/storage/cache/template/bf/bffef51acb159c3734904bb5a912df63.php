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

/* install/view/template/common/header.twig */
class __TwigTemplate_86ede8907914caa9e19a40b9db29d856 extends Template
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
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\"/>
\t<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
\t<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\"/>
\t<link href=\"view/stylesheet/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"/>
\t<link href=\"view/stylesheet/fontawesome/css/all.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"view/stylesheet/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-3.6.0.min.js\"></script>
\t<script src=\"view/javascript/bootstrap/js/bootstrap.bundle.js\" type=\"text/javascript\"></script>
\t<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
</head>
<body>
<div id=\"container\">
\t<header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">
\t\t<div class=\"container\"><a href=\"";
        // line 17
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand d-block\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></a></div>
\t</header>";
    }

    public function getTemplateName()
    {
        return "install/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/common/header.twig", "/home/xttl3xy3mfcj/public_html/install/view/template/common/header.twig");
    }
}
