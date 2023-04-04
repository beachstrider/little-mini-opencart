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

/* admin/view/template/customer/customer_transaction.twig */
class __TwigTemplate_c2781398e6baae4f213308662d76447f extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_description"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 7
        echo ($context["column_amount"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["transactions"] ?? null)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 13
                echo "          <tr>
            <td class=\"text-start\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 14);
                echo "</td>
            <td class=\"text-start\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 15);
                echo "</td>
            <td class=\"text-end\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 16);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        <tr>
          <td>&nbsp;</td>
          <td class=\"text-end\"><b>";
            // line 21
            echo ($context["text_balance"] ?? null);
            echo "</b></td>
          <td class=\"text-end\">";
            // line 22
            echo ($context["balance"] ?? null);
            echo "</td>
        </tr>
      ";
        } else {
            // line 25
            echo "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 26
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 29
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 33
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 34
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  114 => 33,  108 => 29,  102 => 26,  99 => 25,  93 => 22,  89 => 21,  85 => 19,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  60 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_transaction.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\customer\\customer_transaction.twig");
    }
}
