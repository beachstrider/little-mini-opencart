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

/* catalog/view/template/common/section_customer_review.twig */
class __TwigTemplate_713cd47117843ecc707842343c8b027f extends Template
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
        echo "<div class=\"sm:py-[80px] py-[60px] bg-orangeLight border-t border-darkBlue\">
\t<div class=\"container text-center\">
\t\t<div class=\"sm:text-[40px] text-[30px] font-bold\">
\t\t\tWHAT OUR CUSTOMERS&nbsp;
\t\t\t<span class=\"text-orange\">SAY</span>
\t\t</div>
\t\t<div class=\"sm:mt-[40px] sm:grid grid-cols-3 gap-[30px]\">
\t\t\t<div class=\"flex flex-col items-center\">
\t\t\t\t<div class=\"sm:pt-[20px] pt-[15px] sm:pb-[16px] pb-[12px] flex flex-col items-center border-y border-darkBlue\">
\t\t\t\t\t<svg width=\"145\" height=\"20\" viewbox=\"0 0 145 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<g clip-path=\"url(#clip0_110_890)\">
\t\t\t\t\t\t\t<path d=\"M10.5097 0L12.9861 7.63672H21L14.507 12.3633L16.9833 20L10.4903 15.2734L3.99721 20L6.47354 12.3633L0 7.63672H8.01393L10.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip1_110_890)\">
\t\t\t\t\t\t\t<path d=\"M41.5097 0L43.9861 7.63672H52L45.507 12.3633L47.9833 20L41.4903 15.2734L34.9972 20L37.4735 12.3633L31 7.63672H39.0139L41.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip2_110_890)\">
\t\t\t\t\t\t\t<path d=\"M72.5097 0L74.9861 7.63672H83L76.507 12.3633L78.9833 20L72.4903 15.2734L65.9972 20L68.4735 12.3633L62 7.63672H70.0139L72.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip3_110_890)\">
\t\t\t\t\t\t\t<path d=\"M103.51 0L105.986 7.63672H114L107.507 12.3633L109.983 20L103.49 15.2734L96.9972 20L99.4735 12.3633L93 7.63672H101.014L103.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip4_110_890)\">
\t\t\t\t\t\t\t<path d=\"M134.51 0L136.986 7.63672H145L138.507 12.3633L140.983 20L134.49 15.2734L127.997 20L130.474 12.3633L124 7.63672H132.014L134.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t<clipPath id=\"clip0_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip1_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(31)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip2_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(62)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip3_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(93)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip4_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(124)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t</defs>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"mt-[12px]\">I love LittleMini! Large selection of luxury brands that you won't find anywhere else. Just a fantastic service. And not to forget I’ve already saved lots of money!</div>
\t\t\t\t</div>
\t\t\t\t<svg class=\"mt-[-1px]\" width=\"16\" height=\"9\" viewbox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M14.8866 0.500001L8.00035 8.2474L1.11346 0.5L14.8866 0.500001Z\" stroke=\"#6B7A93\"/>
\t\t\t\t</svg>
\t\t\t\t<div class=\"sm:text-[16px] uppercase font-bold opacity-[0.5] leading-[40px]\">MEDINA</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-col items-center\">
\t\t\t\t<div class=\"sm:pt-[20px] pt-[15px] sm:pb-[16px] pb-[12px] flex flex-col items-center border-y border-darkBlue\">
\t\t\t\t\t<svg width=\"145\" height=\"20\" viewbox=\"0 0 145 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<g clip-path=\"url(#clip0_110_890)\">
\t\t\t\t\t\t\t<path d=\"M10.5097 0L12.9861 7.63672H21L14.507 12.3633L16.9833 20L10.4903 15.2734L3.99721 20L6.47354 12.3633L0 7.63672H8.01393L10.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip1_110_890)\">
\t\t\t\t\t\t\t<path d=\"M41.5097 0L43.9861 7.63672H52L45.507 12.3633L47.9833 20L41.4903 15.2734L34.9972 20L37.4735 12.3633L31 7.63672H39.0139L41.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip2_110_890)\">
\t\t\t\t\t\t\t<path d=\"M72.5097 0L74.9861 7.63672H83L76.507 12.3633L78.9833 20L72.4903 15.2734L65.9972 20L68.4735 12.3633L62 7.63672H70.0139L72.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip3_110_890)\">
\t\t\t\t\t\t\t<path d=\"M103.51 0L105.986 7.63672H114L107.507 12.3633L109.983 20L103.49 15.2734L96.9972 20L99.4735 12.3633L93 7.63672H101.014L103.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip4_110_890)\">
\t\t\t\t\t\t\t<path d=\"M134.51 0L136.986 7.63672H145L138.507 12.3633L140.983 20L134.49 15.2734L127.997 20L130.474 12.3633L124 7.63672H132.014L134.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t<clipPath id=\"clip0_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip1_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(31)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip2_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(62)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip3_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(93)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip4_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(124)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t</defs>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"mt-[12px]\">Absolutely great! Ordered here for the first time because I came across my solid Redken shampoo for a much lower price. Free shipping is also included which is great.</div>
\t\t\t\t</div>
\t\t\t\t<svg class=\"mt-[-1px]\" width=\"16\" height=\"9\" viewbox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M14.8866 0.500001L8.00035 8.2474L1.11346 0.5L14.8866 0.500001Z\" stroke=\"#6B7A93\"/>
\t\t\t\t</svg>
\t\t\t\t<div class=\"sm:text-[16px] uppercase font-bold opacity-[0.5] leading-[40px]\">SOPHIE</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-col items-center\">
\t\t\t\t<div class=\"sm:pt-[20px] pt-[15px] sm:pb-[16px] pb-[12px] flex flex-col items-center border-y border-darkBlue\">
\t\t\t\t\t<svg width=\"145\" height=\"20\" viewbox=\"0 0 145 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<g clip-path=\"url(#clip0_110_890)\">
\t\t\t\t\t\t\t<path d=\"M10.5097 0L12.9861 7.63672H21L14.507 12.3633L16.9833 20L10.4903 15.2734L3.99721 20L6.47354 12.3633L0 7.63672H8.01393L10.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip1_110_890)\">
\t\t\t\t\t\t\t<path d=\"M41.5097 0L43.9861 7.63672H52L45.507 12.3633L47.9833 20L41.4903 15.2734L34.9972 20L37.4735 12.3633L31 7.63672H39.0139L41.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip2_110_890)\">
\t\t\t\t\t\t\t<path d=\"M72.5097 0L74.9861 7.63672H83L76.507 12.3633L78.9833 20L72.4903 15.2734L65.9972 20L68.4735 12.3633L62 7.63672H70.0139L72.5097 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip3_110_890)\">
\t\t\t\t\t\t\t<path d=\"M103.51 0L105.986 7.63672H114L107.507 12.3633L109.983 20L103.49 15.2734L96.9972 20L99.4735 12.3633L93 7.63672H101.014L103.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<g clip-path=\"url(#clip4_110_890)\">
\t\t\t\t\t\t\t<path d=\"M134.51 0L136.986 7.63672H145L138.507 12.3633L140.983 20L134.49 15.2734L127.997 20L130.474 12.3633L124 7.63672H132.014L134.51 0Z\" fill=\"#5D6FF6\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t<clipPath id=\"clip0_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip1_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(31)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip2_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(62)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip3_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(93)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t<clipPath id=\"clip4_110_890\">
\t\t\t\t\t\t\t\t<rect width=\"21\" height=\"20\" fill=\"white\" transform=\"translate(124)\"/>
\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t</defs>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"mt-[12px]\">Good concept! Wide range, low prices and a fast service. Happy that this concept exists for someone like me who enjoys buying a lot of makeup.</div>
\t\t\t\t</div>
\t\t\t\t<svg class=\"mt-[-1px]\" width=\"16\" height=\"9\" viewbox=\"0 0 16 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M14.8866 0.500001L8.00035 8.2474L1.11346 0.5L14.8866 0.500001Z\" stroke=\"#6B7A93\"/>
\t\t\t\t</svg>
\t\t\t\t<div class=\"sm:text-[16px] uppercase font-bold opacity-[0.5] leading-[40px]\">MONIQUE</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_customer_review.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_customer_review.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\section_customer_review.twig");
    }
}
