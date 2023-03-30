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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_26ec2f79a7e740793d6e8f63acde39a8 extends Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-center\">";
        // line 5
        echo ($context["column_image"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 9
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 10
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "        <tr>
          <td class=\"text-center\">";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
          <td class=\"text-start text-wrap\"><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 17)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 18
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18)) {
                // line 19
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "                <br/>
                <small> - ";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                    echo "</small>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 24)) {
                // line 25
                echo "              <br/>
              <small>";
                // line 26
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 26);
                echo "</small>
            ";
            }
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 28)) {
                // line 29
                echo "              <br/>
              <small>";
                // line 30
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 30);
                echo "</small>
            ";
            }
            // line 32
            echo "          </td>
          <td class=\"text-start\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 33);
            echo "</td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 38
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 39
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
            echo "</td>
          <td class=\"text-end\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 48
            echo "        <tr>
          <td></td>
          <td class=\"text-start text-wrap\">";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 50);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">
            <form method=\"post\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" class=\"form-control\" disabled/>
                <button type=\"submit\" formaction=\"";
            // line 56
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 58);
            echo "\"/>
            </form>
          </td>
          <td class=\"text-end\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 61);
            echo "</td>
          <td class=\"text-end\">";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 62);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 68
            echo "        <tr>
          <td colspan=\"5\" class=\"text-end\"><strong>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 69);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 70);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tfoot>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 73,  252 => 70,  248 => 69,  245 => 68,  241 => 67,  237 => 65,  228 => 62,  224 => 61,  218 => 58,  211 => 56,  202 => 50,  198 => 48,  193 => 47,  184 => 44,  180 => 43,  171 => 39,  165 => 38,  159 => 37,  152 => 33,  149 => 32,  142 => 30,  139 => 29,  136 => 28,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  110 => 21,  107 => 20,  102 => 19,  99 => 18,  91 => 17,  77 => 16,  74 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}
