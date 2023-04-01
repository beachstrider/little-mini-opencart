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

/* catalog/view/template/common/section_know_more.twig */
class __TwigTemplate_07d9cabee6fe34080e0039533c5bdf4a extends Template
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
\t\t\t\t\tWANT TO  
\t\t\t\t\t<span class=\"text-orange\">KNOW</span>
           MORE?
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sm:mt-[24px] mt-[18px] text-center sm:text-[16px] text-[12px]\">
       Your feedback matters to us. We're always on the hunt for new products and offers for our members and <br>want to make sure you get exactly what you need. If you have any questions or specific requests, reach out<br> to us. You can get in touch with us here:
      </div>
      <div class=\"flex justify-center sm:mt-[30px] mt-[22px]\">
        <a href=\"#\" class=\"block py-[12px] px-[10px] border border-darkBlue font-bold\">CUSTOMER LINK</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/section_know_more.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/section_know_more.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\common\\section_know_more.twig");
    }
}
