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

/* catalog/view/template/checkout/confirm.twig */
class __TwigTemplate_9bbc825651b84980e73cbbcd4e0a3ec5 extends Template
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
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 6
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "        <tr>
          <td class=\"text-start\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 12);
            echo "x <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
            echo "</a>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 14
                echo "              <br/>
              &nbsp;
              <small> - ";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 16);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 16);
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 18)) {
                // line 19
                echo "              <br/>
              <small>";
                // line 20
                echo ($context["text_subscription"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 20);
                echo "</small>
            ";
            }
            // line 21
            echo "</td>
          <td class=\"text-end\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 22);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 26
            echo "        <tr>
          <td class=\"text-start\">1x ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 27);
            echo "</td>
          <td class=\"text-end\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 28);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
    <tfoot>
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 34
            echo "        <tr>
          <td class=\"text-end\"><strong>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 35);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 36);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  ";
        // line 43
        if (($context["payment"] ?? null)) {
            // line 44
            echo "    ";
            echo ($context["payment"] ?? null);
            echo "
  ";
        } else {
            // line 46
            echo "    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>";
            echo ($context["button_confirm"] ?? null);
            echo "</button></div>
  ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 48,  171 => 46,  165 => 44,  163 => 43,  157 => 39,  148 => 36,  144 => 35,  141 => 34,  137 => 33,  133 => 31,  124 => 28,  120 => 27,  117 => 26,  112 => 25,  103 => 22,  100 => 21,  93 => 20,  90 => 19,  87 => 18,  77 => 16,  73 => 14,  69 => 13,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/confirm.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\confirm.twig");
    }
}
