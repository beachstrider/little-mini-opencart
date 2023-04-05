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
class __TwigTemplate_29d481ba6fe934bbf7eb0c3e0f62abb2 extends Template
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
<div id=\"information-information\" class=\"";
        // line 2
        if ((($context["meta_description"] ?? null) == "with background")) {
            echo " bg-orangeLight text-center ";
        }
        echo " flex justify-between items-end relative\">
  <img src=\"/image/catalog/objects/howitworks_left.png\" alt=\"\" srcset=\"\" class=\"";
        // line 3
        if ((($context["meta_description"] ?? null) == "with background")) {
            echo " sm:block ";
        }
        echo " hidden absolute left-0 bottom-0\">
  <img src=\"/image/catalog/objects/howitworks_right.png\" alt=\"\" srcset=\"\" class=\"";
        // line 4
        if ((($context["meta_description"] ?? null) == "with background")) {
            echo " sm:block ";
        }
        echo " hidden absolute right-0 bottom-0\">
  <div class=\"sm:py-[40px] py-[30px] w-full h-full\">
    <div class=\"container\">
      <div id=\"content\" class=\"relative sm:py-[40px] py-[30px] sm:text-[16px] text-[12px]\">
        <div class=\"\">";
        // line 8
        echo ($context["description"] ?? null);
        echo "</div>
        ";
        // line 9
        echo ($context["meta_description"] ?? null);
        echo "
      </div>
    </div>
  </div>
</div>
";
        // line 14
        echo ($context["section_members"] ?? null);
        echo "
";
        // line 15
        echo ($context["section_more_buy"] ?? null);
        echo "
";
        // line 16
        echo ($context["section_how_possible"] ?? null);
        echo "
";
        // line 17
        echo ($context["section_know_more"] ?? null);
        echo "
";
        // line 18
        echo ($context["section_best_deals"] ?? null);
        echo "
";
        // line 19
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
        return array (  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  66 => 9,  62 => 8,  53 => 4,  47 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/information/information.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\information\\information.twig");
    }
}
