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

/* catalog/view/template/common/section_ads.twig */
class __TwigTemplate_18c78c002a7e21b5e0ec4a7d56861ad8 extends Template
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
        echo "<div class=\"bg-white\">
\t<hr>
\t<div class=\"container mx-auto sm:px-0 px-[20px] sm:py-[78px] py-[40px]\">
\t\t<div class=\"grid sm:grid-cols-4 grid-cols-1 gap-[26px]\">
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute top-[10px] right-[10px] text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">COSMETICS</div>
\t\t\t\t<img src=\"/image/catalog/ads/section_add1.png\" class=\"w-full\"/>
\t\t\t\t<div class=\"sm:text-[16px] font-bold bg-dark text-white text-center leading-[40px]\">ELIZABETH ARDEN</div>
\t\t\t\t<div class=\"py-[4px] text-center\">The world's leading brand in cosmetics.</div>
\t\t\t</div>
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute top-[10px] right-[10px] text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">COSMETICS</div>
\t\t\t\t<img src=\"/image/catalog/ads/section_add2.png\" class=\"w-full\"/>
\t\t\t\t<div class=\"sm:text-[16px] font-bold bg-dark text-white text-center leading-[40px]\">MAYBELLINE</div>
\t\t\t\t<div class=\"py-[4px] text-center\">The cosmetics superstar is back.</div>
\t\t\t</div>
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute top-[10px] right-[10px] text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">COSMETICS</div>
\t\t\t\t<img src=\"/image/catalog/ads/section_add3.png\" class=\"w-full\"/>
\t\t\t\t<div class=\"sm:text-[16px] font-bold bg-dark text-white text-center leading-[40px]\">WELLA</div>
\t\t\t\t<div class=\"py-[4px] text-center\">Join the Wellahair family.</div>
\t\t\t</div>
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute top-[10px] right-[10px] text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">COSMETICS</div>
\t\t\t\t<img src=\"/image/catalog/ads/section_add4.png\" class=\"w-full\"/>
\t\t\t\t<div class=\"sm:text-[16px] font-bold bg-dark text-white text-center leading-[40px]\">VITABALANS</div>
\t\t\t\t<div class=\"py-[4px] text-center\">Get your daily vitamins.</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"container mx-auto sm:px-0 px-[20px] sm:py-[80px] py-[30px]\">
\t\t<div class=\"flex gap-[30px]\">
\t\t\t<div class=\"grow\">
\t\t\t\t<div class=\"sm:text-[40px] font-bold text-[30px]\">LITTLE MINIS</div>
\t\t\t\t<div class=\"sm:mt-[40px] mt-[20px] sm:grid sm:grid-cols-3 gap-[30px]\">
\t\t\t\t\t<div class=\"col-span-2\">
\t\t\t\t\t\t<img class=\"border-r-[2px] border-orange w-full\" src=\"/image/catalog/ads/Image(3).png\"/>
\t\t\t\t\t\t<div class=\"text-[24px] text-center py-[40px] border-b border-darkBlue\">Everything you need to know about Korean skin care.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sm:flex sm:flex-col grid grid-cols-2 gap-[16px] sm:py-0 py-[20px]\">
\t\t\t\t\t\t<div class=\"sm:w-[270px] sm:h-[120px] flex justify-end items-start bg-[url('/image/catalog/ads/Image(4).png')] bg-cover p-[10px]\">
\t\t\t\t\t\t\t<div class=\"text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">SKIN CARE</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:flex hidden sm:w-[270px] sm:h-[120px] flex justify-end items-start bg-[url('/image/catalog/ads/Image(5).png')] bg-cover p-[10px]\">
\t\t\t\t\t\t\t<div class=\"text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">SKIN CARE</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:flex hidden sm:w-[270px] sm:h-[120px] flex justify-end items-start bg-[url('/image/catalog/ads/Image(6).png')] bg-cover p-[10px]\">
\t\t\t\t\t\t\t<div class=\"text-[8px] bg-[#F98D78] rounded-full px-[8px] py-[6px] text-white\">SKIN CARE</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sm:hidden block text-center py-[33px] border-t border-b border-darkBlue sm:mb-[20px]\">
\t\t\t\t\t\t\tWe have created the ultimate self-tanner guide.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sm:block hidden w-[220px]\">
\t\t\t\t<div class=\"flex justify-center items-center gap-[4px] py-[15px] border-t border-b border-darkBlue sm:mb-[44px]\">
\t\t\t\t\t<svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M4.5 7.5H10.5M8.5 10.5H10.5M4.5 4.5H6.5M12.5 14.5H2.5C1.94772 14.5 1.5 14.0523 1.5 13.5V1.5C1.5 0.947716 1.94772 0.5 2.5 0.5H10.5L13.5 3.5V13.5C13.5 14.0523 13.0523 14.5 12.5 14.5Z\" stroke=\"#080E16\" stroke-linecap=\"square\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"text-[16px]\">ALL MINIS</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center py-[33px] border-t border-b border-darkBlue sm:mb-[20px]\">
\t\t\t\t\tWe have created the ultimate self-tanner guide.
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center py-[33px] border-t border-b border-darkBlue sm:mb-[20px]\">
\t\t\t\t\tDry brush yourself for more beautiful skin and a healthier body.
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center py-[33px] border-t border-b border-darkBlue sm:mb-[20px]\">
\t\t\t\t\tHow to take care of your skin in the cold.
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_ads.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_ads.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\section_ads.twig");
    }
}
