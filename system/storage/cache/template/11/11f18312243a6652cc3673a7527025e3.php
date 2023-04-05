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

/* extension/opencart/catalog/view/template/total/voucher.twig */
class __TwigTemplate_9e7db9af5f3e5aaf8a541f45e97ebc01 extends Template
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
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-voucher\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</button></h2>
  <div id=\"collapse-voucher\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-voucher\" action=\"";
        // line 5
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["list"] ?? null);
        echo "\" data-oc-target=\"#shopping-cart\">

        <div class=\"row mb-3\">
          <label for=\"input-voucher\" class=\"col-md-4 col-form-label\">";
        // line 8
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"voucher\" value=\"";
        // line 10
        echo ($context["voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
          </div>
        </div>

        <div class=\"text-end\"><button type=\"submit\" class=\"btn btn-primary\">";
        // line 14
        echo ($context["button_voucher"] ?? null);
        echo "</button></div>

      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  59 => 10,  54 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/total/voucher.twig", "/home/xttl3xy3mfcj/public_html/extension/opencart/catalog/view/template/total/voucher.twig");
    }
}
