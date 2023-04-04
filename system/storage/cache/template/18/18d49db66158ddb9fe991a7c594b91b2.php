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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_a98f20cb56f2c1061b93d9538d15b468 extends Template
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
<div id=\"account-order\" class=\"container sm:py-[40px] py-[30px]\">
\t";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t<i class=\"fa-solid fa-circle-check\"></i>
\t\t\t";
            // line 6
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 8
        echo "\t<div class=\"sm:text-[40px] text-[30px] font-bold text-orange uppercase\">";
        echo ($context["heading_title"] ?? null);
        echo "
\t\t<span class=\"text-dark\">";
        // line 9
        echo ($context["name"] ?? null);
        echo "</span>
\t</div>
\t<div class=\"sm:pt-[38px] pt-[28px] sm:pb-[28px] pb-[21px] sm:text-[16px] text-[12px]\">
\t\t<div class=\"\">Full name:
\t\t\t";
        // line 13
        echo ($context["name"] ?? null);
        echo "</div>
\t\t<div class=\"\">Email:
\t\t\t";
        // line 15
        echo ($context["email"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"flex border-t border-darkBlue py-[20px]\">
\t\t";
        // line 18
        echo ($context["menu"] ?? null);
        echo "
\t\t<div class=\"\">
\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\" colspan=\"2\">";
        // line 23
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\" style=\"width: 50%;\">
\t\t\t\t\t\t\t";
        // line 29
        if (($context["invoice_no"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t\t";
            // line 31
            echo ($context["invoice_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t<b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b>
\t\t\t\t\t\t\t#";
        // line 35
        echo ($context["order_id"] ?? null);
        echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<b>";
        // line 37
        echo ($context["text_date_added"] ?? null);
        echo "</b>
\t\t\t\t\t\t\t";
        // line 38
        echo ($context["date_added"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-start\" style=\"width: 50%;\">
\t\t\t\t\t\t\t";
        // line 40
        if (($context["payment_method"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t\t";
            // line 42
            echo ($context["payment_method"] ?? null);
            echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t";
        if (($context["shipping_method"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b>
\t\t\t\t\t\t\t\t";
            // line 47
            echo ($context["shipping_method"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\" style=\"width: 50%; vertical-align: top;\">";
        // line 56
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
\t\t\t\t\t\t";
        // line 57
        if (($context["shipping_address"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t\t<td class=\"text-start\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\">";
        // line 64
        echo ($context["payment_address"] ?? null);
        echo "</td>
\t\t\t\t\t\t";
        // line 65
        if (($context["shipping_address"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t\t<td class=\"text-start\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 75
        echo ($context["column_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
        // line 76
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 77
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 78
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">";
        // line 79
        echo ($context["column_total"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t";
        // line 80
        if (($context["products"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t<td style=\"width: 20px;\"></td>
\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 87
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 94);
                echo ":
\t\t\t\t\t\t\t\t\t\t\t";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 95);
                echo "</small>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 98);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 99);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 101);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\" style=\"white-space: nowrap;\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 103)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 104);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 108);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-reply\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 115
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 116);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-start\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">1</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 119);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 120);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 121
            if (($context["products"] ?? null)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 129
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t<b>";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 132);
            echo "</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-end\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 134);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 135
            if (($context["products"] ?? null)) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t";
        // line 143
        if (($context["comment"] ?? null)) {
            // line 144
            echo "\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 147
            echo ($context["text_comment"] ?? null);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 152
            echo ($context["comment"] ?? null);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 157
        echo "\t\t\t";
        if (($context["histories"] ?? null)) {
            // line 158
            echo "\t\t\t\t<h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 162
            echo ($context["column_date_added"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 163
            echo ($context["column_status"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
            // line 164
            echo ($context["column_comment"] ?? null);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 168
            if (($context["histories"] ?? null)) {
                // line 169
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 171);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 172);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-start\">";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 173);
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "\t\t\t\t\t\t";
            } else {
                // line 177
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-center\">";
                // line 178
                echo ($context["text_no_results"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 184
        echo "\t\t\t<div class=\"d-inline-block pt-2 pd-2 w-100\">
\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t<a href=\"";
        // line 186
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 192
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 192,  482 => 186,  478 => 184,  473 => 181,  467 => 178,  464 => 177,  461 => 176,  452 => 173,  448 => 172,  444 => 171,  441 => 170,  436 => 169,  434 => 168,  427 => 164,  423 => 163,  419 => 162,  411 => 158,  408 => 157,  400 => 152,  392 => 147,  387 => 144,  385 => 143,  380 => 140,  373 => 138,  369 => 136,  367 => 135,  363 => 134,  358 => 132,  353 => 129,  349 => 128,  345 => 126,  338 => 124,  334 => 122,  332 => 121,  328 => 120,  324 => 119,  318 => 116,  315 => 115,  310 => 114,  295 => 108,  285 => 104,  283 => 103,  278 => 101,  274 => 100,  270 => 99,  266 => 98,  263 => 97,  255 => 95,  251 => 94,  245 => 90,  241 => 89,  237 => 88,  234 => 87,  230 => 86,  225 => 83,  221 => 81,  219 => 80,  215 => 79,  211 => 78,  207 => 77,  203 => 76,  199 => 75,  190 => 68,  184 => 66,  182 => 65,  178 => 64,  172 => 60,  166 => 58,  164 => 57,  160 => 56,  151 => 49,  146 => 47,  141 => 46,  138 => 45,  132 => 42,  127 => 41,  125 => 40,  120 => 38,  116 => 37,  111 => 35,  106 => 34,  100 => 31,  95 => 30,  93 => 29,  84 => 23,  76 => 18,  70 => 15,  65 => 13,  58 => 9,  53 => 8,  48 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_info.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\order_info.twig");
    }
}
