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

/* catalog/view/template/information/information.twig */
class __TwigTemplate_0bb0379a463324ec7260ed3b1eb2fccb extends Template
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
<div id=\"information-information\" class=\"sm:h-[400px] text-center bg-orangeLight flex justify-between items-end relative\">
  <img src=\"/image/catalog/objects/howitworks_left.png\" alt=\"\" srcset=\"\" class=\"sm:block hidden\">
  <img src=\"/image/catalog/objects/howitworks_right.png\" alt=\"\" srcset=\"\" class=\"sm:block hidden\">
  <div class=\"sm:py-[40px] py-[30px] sm:absolute w-full h-full\">
    <div class=\"container\">
      <h1 class=\"sm:text-[40px] text-[30px] font-bold\">";
        // line 7
        echo ($context["text_heading_title_1"] ?? null);
        echo "&nbsp;<span class=\"text-orange\">'LITTLEMINI'</span>";
        echo ($context["text_heading_title_2"] ?? null);
        echo "</h1>
      <div id=\"content\" class=\"sm:py-[40px] py-[30px] sm:text-[16px] text-[12px] text-center\">
        <div class=\"font-bold uppercase\">";
        // line 9
        echo ($context["text_description_title"] ?? null);
        echo "</div>
        <div class=\"sm:mt-[40px] mt-[30px]\">";
        // line 10
        echo ($context["text_description_content"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 15
        echo ($context["section_members"] ?? null);
        echo "
";
        // line 16
        echo ($context["section_more_buy"] ?? null);
        echo "
";
        // line 17
        echo ($context["section_how_possible"] ?? null);
        echo "
";
        // line 18
        echo ($context["section_know_more"] ?? null);
        echo "
";
        // line 19
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 20
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/information.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/information/information.twig");
    }
}
