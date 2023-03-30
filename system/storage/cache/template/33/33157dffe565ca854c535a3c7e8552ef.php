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
class __TwigTemplate_a0f1b37407640a59f52ee84a822d60b7 extends Template
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
<div id=\"account-login\"  class=\"auth-modal\">
  <div class=\"relative content bg-white sm:w-[770px] w-full sm:px-[36px] sm:py-[30] px-[27px] py-[22px]\">
    <a class=\"absolute top-0 right-0 block p-[10px]\" href=\"/\">
      <svg width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <circle cx=\"12.5\" cy=\"12.5\" r=\"12\" stroke=\"#080E16\"/>
        <path d=\"M6.5 6.5L18.5 18.5M6.5 18.5L18.5 6.5\" stroke=\"#080E16\"/>
      </svg>
    </a>
    <div class=\"sm:flex justify-center sm:text-[40px] text-[30px] font-bold uppercase\">
    <div class=\"text-orange\">LOGIN</div>
      &nbsp;TO YOUR ACCOUNT
  </div>
  <div class=\"sm:text-[18px] text-[14px] mt-[16px] mb-[28px]\">If you are already a member you can login here. You will automatically be registered as a member when you complete your first order at LittleMini.</div>
  ";
        // line 15
        if (($context["success"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 21
        echo "      <form id=\"form-login\" action=\"";
        echo ($context["login"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <div class=\"mb-3\">
          <label for=\"input-email\" class=\"block\">";
        // line 23
        echo ($context["entry_email"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"email\" value=\"";
        // line 24
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\"/>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-password\" class=\"block\">";
        // line 27
        echo ($context["entry_password"] ?? null);
        echo "</label>
          <input type=\"password\" name=\"password\" value=\"";
        // line 28
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"w-full\"/>
          <a class=\"block mt-[10px] underline\" href=\"";
        // line 29
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
        </div>
        <button type=\"submit\" class=\"w-[170px] font-bold bg-indigo py-[12px] text-white uppercase\">";
        // line 31
        echo ($context["button_login"] ?? null);
        echo "</button>
        ";
        // line 32
        if (($context["redirect"] ?? null)) {
            // line 33
            echo "          <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
        ";
        }
        // line 35
        echo "      </form>
    </div>
  </div>
<style>
  #alert{
    top: 20px !important;
  }
</style>
";
        // line 43
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
        return array (  128 => 43,  118 => 35,  112 => 33,  110 => 32,  106 => 31,  99 => 29,  93 => 28,  89 => 27,  81 => 24,  77 => 23,  71 => 21,  65 => 19,  62 => 18,  56 => 16,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/login.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\login.twig");
    }
}
