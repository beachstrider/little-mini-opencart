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

/* catalog/view/template/common/section_best_deals.twig */
class __TwigTemplate_76f3f69692229729087f15fd3fec3333 extends Template
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
        echo "<div class=\"relative bg-orange text-white border-t border-darkBlue\">
\t<div class=\"sm:h-[403px] h-[375px] bg-[url('/image/catalog/objects/wink_haha_woman.png')] bg-no-repeat sm:bg-right bg-[-66px] flex items-center\">
\t\t<div class=\"container mx-auto sm:px-0 px-[20px]\">
\t\t\t<div class=\"sm:text-[40px] text-[30px] font-bold uppercase\">Be the first to Get the best deals</div>
\t\t\t<div class=\"sm:text-[24px] text-[18px] sm:mt-[30px] mt-[18px] sm:max-w-[570px]\">Sign up for the LittleMini newsletter and get the latest minis (articles), inspiration, tips & tricks and great offers directly to your inbox.</div>
\t\t\t<div class=\"sm:mt-[24px] mt-[18px] flex sm:flex-row flex-col items-start\">
\t\t\t\t<div class=\"relative sm:w-auto w-full\">
\t\t\t\t\t<div class=\"absolute h-full flex items-center right-0 pr-[10px]\">
\t\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M0.5 4.5L7.5 8.5L14.5 4.5M1.5 1.5H13.5C14.0523 1.5 14.5 1.94772 14.5 2.5V12.5C14.5 13.0523 14.0523 13.5 13.5 13.5H1.5C0.947716 13.5 0.5 13.0523 0.5 12.5V2.5C0.5 1.94772 0.947715 1.5 1.5 1.5Z\" stroke=\"#080E16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"subscribe_now_email\" type=\"email\" name=\"email\" placeholder=\"Your email ...\" class=\"text-dark product-search-input pr-[36px] pl-[10px] py-[9px] border-1 border-[#6B7A93] text-[14px] min-w-full sm:min-w-[370px] h-[41px]\"/>
\t\t\t\t</div>
\t\t\t\t<button href=\"";
        // line 15
        echo ($context["register"] ?? null);
        echo "\" onclick=\"location.href='";
        echo ($context["register"] ?? null);
        echo "&email=' + \$('#subscribe_now_email').val()\" class=\"px-[26px] py-[10px] bg-indigo text-white font-semibold sm:w-[200px] flex justify-center sm:mt-0 mt-[20px]\">SIGN UP NOW</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_best_deals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_best_deals.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/section_best_deals.twig");
    }
}
