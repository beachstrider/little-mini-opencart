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

/* catalog/view/template/common/content_banner.twig */
class __TwigTemplate_b8e30a351792e02feb0228f52cccf658 extends Template
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
        echo "<div class=\"sm:h-[calc(100vh-194px)] h-[calc(100vh-83px)] bg-[url('/image/catalog/demo/banners/_banner.jpg')] bg-cover\">
\t<div class=\"container mx-auto sm:px-0 px-[20px] h-full\">
\t\t<div class=\"h-full flex justify-center items-center\">
\t\t\t<div class=\"max-w-[570px]\">
\t\t\t\t<div class=\"sm:text-[24px] text-[18px] text-orange font-semibold text-center\">
\t\t\t\t\tYour first 30 days are free!
\t\t\t\t</div>
\t\t\t\t<div class=\"sm:text-[60px] text-[30px] font-bold sm:leading-[70px] leading-[36px] sm:mt-[24px] mt-[10px] text-center\">
\t\t\t\t\t<span class=\"text-orange\">LUXURY</span>
\t\t\t\t\tAT A MEMBER PRICE. OVER 100 BRANDS
\t\t\t\t</div>
\t\t\t\t<div class=\"text-[18px] mt-[24px] text-center\">
\t\t\t\t\tBecome a member with your first purchase (member prices) and shop products ranging from luxury to everyday life style with free shipping.Get the first month for free - after that DKK 89,- per month. Terminate whenever you want.
\t\t\t\t</div>
\t\t\t\t<div class=\"sm:mt-[50px] mt-[26px] text-center\">
\t\t\t\t\t<a href=\"#\" class=\"px-[26px] py-[12px] bg-indigo text-white font-semibold\">START SAVING TODAY</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/content_banner.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/content_banner.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\content_banner.twig");
    }
}
