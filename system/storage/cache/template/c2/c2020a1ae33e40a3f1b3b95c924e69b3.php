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

/* catalog/view/template/common/section_save_membership.twig */
class __TwigTemplate_f40e0f1279b1c79daecac02b1b1aca67 extends Template
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
        echo "<div class=\"relative border-t border-darkBlue\">
\t<img src=\"/image/catalog/demo/MaskGroupLeft.png\" class=\"sm:block hidden absolute left-0 bottom-0\"/>
\t<img src=\"/image/catalog/demo/MaskGroupRight.png\" class=\"sm:block hidden absolute right-0 bottom-0\"/>
\t<div class=\"container mx-auto sm:px-0 px-[20px]\">
\t\t<div class=\"sm:py-[80px] pt-[34px] sm:pb-[138px] pb-[36px]\">
\t\t\t<div class=\"sm:text-[40px] text-[30px] text-center uppercase font-bold flex justify-center\">
\t\t\t\t<div class=\"sm:max-w-full max-w-[250px]\">
\t\t\t\t\t<span class=\"text-orange\">SAVE</span>
\t\t\t\t\tWITH A MEMBERSHIP
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-center sm:mt-[12px] mt-[14px] flex justify-center\">
\t\t\t\t<div class=\" max-w-[770px]\">
\t\t\t\t\t<span class=\"font-bold\">LittleMini offers huge savings</span>
\t\t\t\t\ton makeup, perfumes, shampoo, and personal care products, but it is exclusively for members. Sign up now with your first purchase and get your first month free. Afterwards, membership costs only DKK 89,- per month, but with our discounts, you'll quickly recoup the cost. Plus, you can cancel at any time.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img src=\"/image/catalog/demo/MakeupToolkit.png\" class=\"w-full sm:hidden block\"/>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_save_membership.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_save_membership.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/section_save_membership.twig");
    }
}
