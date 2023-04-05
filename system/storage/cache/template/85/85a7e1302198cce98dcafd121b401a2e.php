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

/* catalog/view/template/common/section_how_possible.twig */
class __TwigTemplate_5a303aff379483c919546c3dc48965e9 extends Template
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
        echo "<div class=\" border-t border-darkBlue\">
\t<div class=\"container\">
\t\t<div class=\"sm:py-[80px] pt-[34px] pb-[30px]\">
\t\t\t<div class=\"sm:text-[40px] text-[30px] text-center uppercase font-bold flex justify-center\">
\t\t\t\t<div class=\"sm:max-w-full max-w-[250px]\">
\t\t\t\t\tHOW ARE THESE PRICES 
\t\t\t\t\t<span class=\"text-orange\">POSSIBLE?</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sm:text-[24px] text-[18px] text-center sm:mt-[10px] mt-[18px]\">Get direct access to top-quality products from major EU suppliers.</div>
\t\t\t<div class=\"sm:mt-[38px] mt-[23px] text-center sm:text-[16px] text-[12px]\">
        We source a wide range of high-quality products directly from major EU suppliers and have them shipped<br> straight to our warehouse, cutting out costly middlemen and passing on the savings to you.<br><br>Rest assured, all products are thoroughly checked for quality and authenticity, guaranteed. And, if you're<br> not completely satisfied, you have 90 days to return it to us. Shop with confidence at LittleMini.
      </div>
      <div class=\"sm:flex justify-around sm:mt-[44px] mt-[33px]\">
        <div class=\"sm:max-w-[370px] sm:w-full\">
          <div class=\"flex flex-col gap-[20px]\">
            <div class=\"flex justify-center relative\">
              <div class=\"w-[155px] h-[155px] rounded-full border border-darkBlue flex justify-center items-center\">
                <svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <g clip-path=\"url(#clip0_148_400)\">
                  <path d=\"M66.6667 0V32.8571L53.3333 39.0476V26.6667L26.6667 39.0476V26.6667L0 40.2721V80H80V0H66.6667ZM10.4762 50.4762H23.8095V60H10.4762V50.4762ZM33.3333 50.4762H46.6667V60H33.3333V50.4762ZM56.1905 50.4762H69.5238V60H56.1905V50.4762Z\" fill=\"#F98D78\"/>
                  </g>
                  <defs>
                  <clipPath id=\"clip0_148_400\">
                  <rect width=\"80\" height=\"80\" fill=\"white\"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div class=\"sm:text-[14px] text-[10px] text-center\">We buy directly from the biggest<br> and best suppliers in the EU.</div>
          </div>
        </div>
        <div class=\"flex sm:justify-start justify-center items-center sm:h-[155px] h-[60px]\">
          <svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"sm:rotate-0 rotate-90\">
            <path d=\"M13.5 7.5L9.5 3.5M13.5 7.5L9.5 11.5M13.5 7.5H1\" stroke=\"#F98D78\"/>
          </svg>
        </div>
        <div class=\"sm:max-w-[370px] sm:w-full\">
          <div class=\"flex flex-col gap-[20px]\">
            <div class=\"flex justify-center relative\">
              <div class=\"w-[155px] h-[155px] rounded-full border border-darkBlue flex justify-center items-center\">
                <img src=\"/image/catalog/objects/little-mini-group-logo.png\" alt=\"\" srcset=\"\">
              </div>
            </div>
            <div class=\"sm:text-[14px] text-[10px] text-center\">... Keep the products in our own warehouse<br> - no middleman ...</div>
          </div>
        </div>
        <div class=\"flex sm:justify-start justify-center items-center sm:h-[155px] h-[60px]\">
          <svg width=\"15\" height=\"15\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"sm:rotate-0 rotate-90\">
            <path d=\"M13.5 7.5L9.5 3.5M13.5 7.5L9.5 11.5M13.5 7.5H1\" stroke=\"#F98D78\"/>
          </svg>
        </div>
        <div class=\"sm:max-w-[370px] sm:w-full\">
          <div class=\"flex flex-col gap-[20px]\">
            <div class=\"flex justify-center relative\">
              <div class=\"w-[155px] h-[155px] rounded-full border border-darkBlue flex justify-center items-center\">
                <svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <g clip-path=\"url(#clip0_144_396)\">
                  <path d=\"M80.0009 65.643L43.4863 79.9998V31.5766L80.0009 17.2612V65.643Z\" fill=\"#F98D78\"/>
                  <path d=\"M0 65.643L36.5145 79.9998V31.5766L0 17.2612V65.643Z\" fill=\"#F98D78\"/>
                  <path d=\"M40.1651 0L6.34766 12.2407L40.0406 25.1452L73.6091 11.9917L40.1651 0Z\" fill=\"#F98D78\"/>
                  </g>
                  <defs>
                  <clipPath id=\"clip0_144_396\">
                  <rect width=\"80\" height=\"80\" fill=\"white\"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div class=\"sm:text-[14px] text-[10px] text-center\">... and send them directly<br> to you.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_how_possible.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_how_possible.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/common/section_how_possible.twig");
    }
}
