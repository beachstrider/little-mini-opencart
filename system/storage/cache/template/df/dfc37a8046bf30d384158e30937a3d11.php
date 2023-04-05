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

/* extension/opencart/catalog/view/template/total/coupon.twig */
class __TwigTemplate_6b6a0b783f68ec34864f017a764c4835 extends Template
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
        echo "<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-coupon\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</button></h2>
  <div id=\"collapse-coupon\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-coupon\" action=\"";
        // line 5
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["list"] ?? null);
        echo "\" data-oc-target=\"#shopping-cart\">
        <div class=\"row mb-3\">
          <label for=\"input-coupon\" class=\"col-md-4 col-form-label\">";
        // line 7
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
          </div>
        </div>
        <div class=\"text-end\"><button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo ($context["button_coupon"] ?? null);
        echo "</button></div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  58 => 9,  53 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/total/coupon.twig", "/home/xttl3xy3mfcj/public_html/extension/opencart/catalog/view/template/total/coupon.twig");
    }
}
