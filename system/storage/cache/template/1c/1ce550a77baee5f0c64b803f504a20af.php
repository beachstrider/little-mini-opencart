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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_4ff5f84f546be545f88489bc1e5cca90 extends Template
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
<div id=\"account-login\" class=\"modal\">
\t<div class=\"relative content bg-white sm:w-[770px] w-full sm:px-[36px] sm:py-[30] px-[27px] py-[22px]\">
\t\t<a class=\"absolute top-0 right-0 block p-[10px]\" href=\"/\">
\t\t\t<svg width=\"25\" height=\"25\" viewbox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<circle cx=\"12.5\" cy=\"12.5\" r=\"12\" stroke=\"#080E16\"/>
\t\t\t\t<path d=\"M6.5 6.5L18.5 18.5M6.5 18.5L18.5 6.5\" stroke=\"#080E16\"/>
\t\t\t</svg>
\t\t</a>
\t\t<div class=\"sm:flex justify-center sm:text-[40px] text-[30px] font-bold uppercase\">
\t\t\t<div class=\"text-orange\">LOGIN</div>
\t\t\t&nbsp;TO YOUR ACCOUNT
\t\t</div>
\t\t<div class=\"sm:text-[18px] text-[14px] mt-[16px] mb-[28px]\">If you are already a member you can login here. You will automatically be registered as a member when you complete your first order at LittleMini.</div>
\t\t";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t\t<i class=\"fa-solid fa-circle-check\"></i>
\t\t\t\t";
            // line 18
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t<i class=\"fa-solid fa-circle-exclamation\"></i>
\t\t\t\t";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t</div>
\t\t";
        }
        // line 29
        echo "\t\t<form id=\"form-login\" action=\"";
        echo ($context["login"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"input-email\" class=\"block\">";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 32
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\"/>
\t\t\t</div>
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"input-password\" class=\"block\">";
        // line 35
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 36
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"w-full\"/>
\t\t\t\t<a class=\"block mt-[10px] underline\" href=\"";
        // line 37
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"w-[170px] font-bold bg-indigo py-[12px] text-white uppercase\">";
        // line 39
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t";
        // line 40
        if (($context["redirect"] ?? null)) {
            // line 41
            echo "\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
\t\t\t";
        }
        // line 43
        echo "\t\t</form>
\t</div>
</div>
<style>
\t#alert {
\t\ttop: 20px !important;
\t}
</style>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 51,  128 => 43,  122 => 41,  120 => 40,  116 => 39,  109 => 37,  103 => 36,  99 => 35,  91 => 32,  87 => 31,  81 => 29,  74 => 25,  70 => 23,  67 => 22,  60 => 18,  56 => 16,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/login.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/account/login.twig");
    }
}
