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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_e1c8ac1328e51897435d1ed876557d91 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"";
        // line 5
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info";
        if ( !($context["shipping_code"] ?? null)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"";
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 23
        echo ($context["text_invoice"] ?? null);
        echo "</strong>
                  <br/>
                  <span id=\"invoice-value\">";
        // line 25
        echo ($context["invoice_prefix"] ?? null);
        echo ($context["invoice_no"] ?? null);
        echo "</span>
                </div>
              </div>
              ";
        // line 28
        if ( !($context["invoice_no"] ?? null)) {
            // line 29
            echo "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 31
            echo "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 33
        echo "            </div>
          </div>

          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 39
        echo ($context["text_customer"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 41
        if (($context["customer_id"] ?? null)) {
            // line 42
            echo "                    <div id=\"customer-value\"><a href=\"index.php?route=customer/customer|form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["customer_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["customer"] ?? null);
            echo "</a></div>
                  ";
        } else {
            // line 44
            echo "                    <div id=\"customer-value\">";
            echo ($context["customer"] ?? null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>

          <div class=\"col\">
            <div class=\"form-control p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
        // line 54
        echo ($context["text_date_added"] ?? null);
        echo "</strong>
                <br/>
                ";
        // line 56
        echo ($context["date_added"] ?? null);
        echo "
              </div>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-start\">";
        // line 65
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 66
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 67
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 68
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-end\">";
        // line 69
        echo ($context["column_total"] ?? null);
        echo "</td>
              <td class=\"text-end\" style=\"width: 1px;\">";
        // line 70
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody id=\"order-products\">
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
            // line 75
            echo "              <tr>
                <td class=\"text-start\"><a href=\"index.php?route=catalog/product|form&user_token=";
            // line 76
            echo ($context["user_token"] ?? null);
            echo "&product_id=";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 76);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 76);
            echo "</a>

                  ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 78)) {
                // line 79
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 80
                    echo "                      <br/>
                      <small> - ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81);
                    echo "</small>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                  ";
            }
            // line 84
            echo "
                  ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 85)) {
                // line 86
                echo "                    <br/>
                    <small> - ";
                // line 87
                echo ($context["text_points"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 87);
                echo "</small>
                  ";
            }
            // line 89
            echo "
                  ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["order_product"], "subscription", [], "any", false, false, false, 90)) {
                // line 91
                echo "                    <br/>
                    <small> - ";
                // line 92
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, ($context["subscription"] ?? null), "description", [], "any", false, false, false, 92);
                echo "</small>
                  ";
            }
            // line 94
            echo "
                </td>
                <td class=\"text-start\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 96);
            echo "</td>
                <td class=\"text-end\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 97);
            echo "</td>
                <td class=\"text-end\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 98);
            echo "</td>
                <td class=\"text-end\">";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 99);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 102
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["order_product"], "cart_id", [], "any", false, false, false, 103);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "          </tbody>
          <tbody id=\"order-vouchers\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
            // line 111
            echo "              <tr>
                <td class=\"text-start\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 112);
            echo "</td>
                <td></td>
                <td class=\"text-end\">1</td>
                <td class=\"text-end\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 115);
            echo "</td>
                <td class=\"text-end\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 116);
            echo "</td>
                <td class=\"text-end\">
                  <form>
                    <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
            // line 119
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                    <input type=\"hidden\" name=\"key\" value=\"";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "key", [], "any", false, false, false, 120);
            echo "\"/>
                  </form>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
            ";
        // line 126
        if (( !($context["order_products"] ?? null) &&  !($context["order_vouchers"] ?? null))) {
            // line 127
            echo "              <tr>
                <td colspan=\"6\" class=\"text-center\">";
            // line 128
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 131
        echo "
          </tbody>
          <tfoot>
            <tr>
              <td colspan=\"5\"></td>
              <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-cart\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
            </tr>
          </tfoot>
        </table>

        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

            <div class=\"col\">
              <form id=\"form-store\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 149
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149) == ($context["store_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 149);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                  </select> <label for=\"input-store\">";
        echo ($context["entry_store"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-language\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 161
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 161) == ($context["language_code"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 161);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                  </select> <label for=\"input-language\">";
        echo ($context["entry_language"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-currency\" class=\"mb-3\">
                <div class=\"form-floating\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 173
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 173) == ($context["currency_code"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 173);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                  </select> <label for=\"input-currency\">";
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-coupon\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"coupon\" value=\"";
        // line 183
        echo ($context["total_coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
                  <label for=\"input-coupon\">";
        // line 184
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-coupon\" data-bs-toogle=\"tooltip\" title=\"";
        // line 185
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-voucher\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"voucher\" value=\"";
        // line 193
        echo ($context["total_voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/> <label for=\"input-voucher\">";
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-voucher\" data-bs-toogle=\"tooltip\" title=\"";
        // line 194
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <form id=\"form-reward\" class=\"mb-3\">
                <div class=\"input-group form-floating\">
                  <input type=\"text\" name=\"reward\" value=\"";
        // line 202
        echo ($context["total_reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\"/> <label for=\"input-reward\">";
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <button type=\"submit\" id=\"button-reward\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-check\"></i></button>
                </div>
              </form>
            </div>

            <div class=\"col\">
              <div class=\"input-group\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 211
        echo ($context["text_reward"] ?? null);
        echo "</strong>
                    <br/>
                    <div id=\"reward-value\">";
        // line 213
        echo ($context["points"] ?? null);
        echo "</div>
                  </div>
                </div>
                ";
        // line 216
        if ( !($context["reward_total"] ?? null)) {
            // line 217
            echo "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 219
            echo "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_reward_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 221
        echo "              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 227
        echo ($context["text_affiliate"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 229
        if (($context["affiliate_id"] ?? null)) {
            // line 230
            echo "                      <div id=\"affiliate-value\"><a href=\"index.php?route=marketing/affiliate|form&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&customer_id=";
            echo ($context["affiliate_id"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["affiliate"] ?? null);
            echo "</a></div>
                    ";
        } else {
            // line 232
            echo "                      <div id=\"affiliate-value\">&nbsp;</div>
                    ";
        }
        // line 234
        echo "                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>

            <div class=\"col\">
              <div class=\"input-group mb-3\">
                <div class=\"form-control border rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 243
        echo ($context["text_commission"] ?? null);
        echo "</strong>
                    <br/>
                    ";
        // line 245
        if (($context["commission"] ?? null)) {
            // line 246
            echo "                      <div id=\"commission-value\">";
            echo ($context["commission"] ?? null);
            echo "</div>
                    ";
        } else {
            // line 248
            echo "                      <div id=\"commission-value\">&nbsp;</div>
                    ";
        }
        // line 250
        echo "                  </div>
                </div>
                ";
        // line 252
        if ( !($context["commission_total"] ?? null)) {
            // line 253
            echo "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_add"] ?? null);
            echo "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                echo " disabled";
            }
            echo "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 255
            echo "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_commission_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 257
        echo "              </div>
            </div>

          </div>
        </div>

        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 263
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i></button>

        <div class=\"row\">
          <div class=\"col-md\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 269
        echo ($context["text_payment_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"payment-address-value\">
                    ";
        // line 272
        if (($context["payment_firstname"] ?? null)) {
            // line 273
            echo "                      ";
            echo ($context["payment_firstname"] ?? null);
            echo " ";
            echo ($context["payment_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 276
        echo "
                    ";
        // line 277
        if (($context["payment_company"] ?? null)) {
            // line 278
            echo "                      ";
            echo ($context["payment_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 281
        echo "
                    ";
        // line 282
        if (($context["payment_address_1"] ?? null)) {
            // line 283
            echo "                      ";
            echo ($context["payment_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 286
        echo "
                    ";
        // line 287
        if (($context["payment_address_2"] ?? null)) {
            // line 288
            echo "                      ";
            echo ($context["payment_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 291
        echo "
                    ";
        // line 292
        if (($context["payment_city"] ?? null)) {
            // line 293
            echo "                      ";
            echo ($context["payment_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 296
        echo "
                    ";
        // line 297
        if (($context["payment_postcode"] ?? null)) {
            // line 298
            echo "                      ";
            echo ($context["payment_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 301
        echo "
                    ";
        // line 302
        if (($context["payment_zone"] ?? null)) {
            // line 303
            echo "                      ";
            echo ($context["payment_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 306
        echo "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 307
            echo "                      ";
            echo ($context["payment_country"] ?? null);
            echo "
                    ";
        }
        // line 309
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col";
        // line 315
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 318
        echo ($context["text_shipping_address"] ?? null);
        echo "</strong>
                  <br/>
                  <div id=\"shipping-address-value\">
                    ";
        // line 321
        if (($context["shipping_firstname"] ?? null)) {
            // line 322
            echo "                      ";
            echo ($context["shipping_firstname"] ?? null);
            echo " ";
            echo ($context["shipping_lastname"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 325
        echo "                    ";
        if (($context["shipping_company"] ?? null)) {
            // line 326
            echo "                      ";
            echo ($context["shipping_company"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 329
        echo "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 330
            echo "                      ";
            echo ($context["shipping_address_1"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 333
        echo "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 334
            echo "                      ";
            echo ($context["shipping_address_2"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 337
        echo "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 338
            echo "                      ";
            echo ($context["shipping_city"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 341
        echo "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 342
            echo "                      ";
            echo ($context["shipping_postcode"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 345
        echo "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 346
            echo "                      ";
            echo ($context["shipping_zone"] ?? null);
            echo "
                      <br/>
                    ";
        }
        // line 349
        echo "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 350
            echo "                      ";
            echo ($context["shipping_country"] ?? null);
            echo "
                    ";
        }
        // line 352
        echo "                  </div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row mb-3\">

          <div id=\"shipping-method\" class=\"col-md";
        // line 361
        if ( !($context["shipping_method"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <form id=\"form-shipping-method\">
              <div class=\"input-group form-floating\">
                <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-select\">
                  <option value=\"\">";
        // line 365
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 366
        if (($context["shipping_code"] ?? null)) {
            // line 367
            echo "                    <option value=\"";
            echo ($context["shipping_code"] ?? null);
            echo "\" selected>";
            echo ($context["shipping_method"] ?? null);
            echo "</option>
                  ";
        }
        // line 369
        echo "                </select> <label for=\"input-shipping-method\">";
        echo ($context["entry_shipping_method"] ?? null);
        echo "</label>
                <button type=\"button\" id=\"button-shipping-method\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
              </div>
            </form>
          </div>

          <div id=\"payment-method\" class=\"col-md\">
            <form id=\"form-payment-method\">
              <div class=\"input-group form-floating\">
                <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\">";
        // line 379
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 380
        if (($context["payment_code"] ?? null)) {
            // line 381
            echo "                    <option value=\"";
            echo ($context["payment_code"] ?? null);
            echo "\" selected>";
            echo ($context["payment_method"] ?? null);
            echo "</option>
                  ";
        }
        // line 383
        echo "                </select> <label for=\"input-payment-method\">";
        echo ($context["entry_payment_method"] ?? null);
        echo "</label>
                <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
              </div>
            </form>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col\">
            <div class=\"input-group mb-3\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 395
        echo ($context["text_comment"] ?? null);
        echo "</strong>
                  <br/>
                  ";
        // line 397
        if (($context["comment"] ?? null)) {
            // line 398
            echo "                    <span id=\"comment-value\">";
            echo ($context["comment"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 400
            echo "                    <span id=\"comment-value\"></span>
                  ";
        }
        // line 402
        echo "                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary float-end\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>

        <table class=\"table table-bordered\">
          <tbody id=\"order-totals\">
            ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 412
            echo "              <tr>
                <td class=\"text-end\"><strong>";
            // line 413
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 413);
            echo "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 414
            echo twig_get_attribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 414);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 420
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 421
        echo ($context["button_confirm"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>

    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 427
        echo ($context["text_history"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 430
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 431
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 433
            echo "            <li class=\"nav-item\"><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 433);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 433);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        echo "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 439
        echo ($context["text_history"] ?? null);
        echo "</legend>
              <div id=\"history\">";
        // line 440
        echo ($context["history"] ?? null);
        echo "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 444
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 446
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 450
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 450);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 450) == ($context["order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 450);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-override\" class=\"col-sm-2 col-form-label\">";
        // line 456
        echo ($context["entry_override"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"override\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\" class=\"form-check-input\">
                    </div>
                    <div class=\"form-text\">";
        // line 462
        echo ($context["help_override"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-notify\" class=\"col-sm-2 col-form-label\">";
        // line 466
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"notify\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 475
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 477
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 481
        echo ($context["button_history_add"] ?? null);
        echo "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 484
        echo ($context["order_id"] ?? null);
        echo "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 492
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 497
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 498
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 500
        if (($context["forwarded_ip"] ?? null)) {
            // line 501
            echo "                    <tr>
                      <td>";
            // line 502
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 503
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 506
        echo "                  <tr>
                    <td>";
        // line 507
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 508
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 511
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 512
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 519
            echo "            <div id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 519);
            echo "\" class=\"tab-pane\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 519);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 531
        echo ($context["text_customer"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 537
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"customer\" value=\"";
        // line 539
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" list=\"list-customer\" class=\"form-control\"/> <a href=\"";
        echo ($context["customer_add"] ?? null);
        echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_customer_add"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 541
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
            <datalist id=\"list-customer\"></datalist>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 545
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 546
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 547
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 547);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 547) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 547);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 552
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 556
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 560
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 562
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/> <a href=\"mailto:";
        echo ($context["email"] ?? null);
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 566
        if (($context["config_telephone_required"] ?? null)) {
            echo " required";
        }
        echo "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 567
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 571
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 571) == "account")) {
                // line 572
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 572) == "select")) {
                    // line 573
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 574
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 574);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 575
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 576
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 576));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 577
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 577);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 577) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 577);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 579
                    echo "                  </select>
                  <div id=\"error-custom-field-";
                    // line 580
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 580);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 583
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 583) == "radio")) {
                    // line 584
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 585
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 585);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 586
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 587
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 587));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 588
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 589
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 589);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 589);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 592
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 593
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 593);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 596
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 596) == "checkbox")) {
                    // line 597
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 597);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 598
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 598);
                    echo "</label>
                  <div id=\"input-custom-field-";
                    // line 599
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 599);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 600
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 600));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 601
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 602
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 602)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 602);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 602);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 605
                    echo "                  </div>
                  <div id=\"error-custom-field-";
                    // line 606
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 606);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 609
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 609) == "text")) {
                    // line 610
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 610);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 611)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 611);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 611);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 612
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 612);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 615
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 615) == "textarea")) {
                    // line 616
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 616);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 617
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 617);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 617);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 617);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 617);
                    echo "</textarea>
                  <div id=\"error-custom-field-";
                    // line 618
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 618);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 621
                echo "
              ";
                // line 622
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 622) == "file")) {
                    // line 623
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 623);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 624
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 624);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-custom-field-";
                    // line 626
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 626);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 627
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 627);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 628
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628);
                    echo "\"";
                    if ( !(($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 628)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 629
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 629);
                    echo "\"";
                    if ( !(($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 629)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 631
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 631);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 634
                echo "
              ";
                // line 635
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 635) == "date")) {
                    // line 636
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 636);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 637
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 637);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 637);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 639
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639)] ?? null) : null)) ? ((($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 639)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 639);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 639);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 645
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 645) == "time")) {
                    // line 646
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 646);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 647
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 647);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 649
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 649)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 649);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 649);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 652
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 652);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 655
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 655) == "datetime")) {
                    // line 656
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 656);
                    echo "\">
                  <label for=\"input-custom-field-";
                    // line 657
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 657);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 657);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 659
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 659)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 659);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 659);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 662
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 662);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 665
                echo "            ";
            }
            // line 666
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 668
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-cart\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 679
        echo ($context["text_cart_add"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-product\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 684
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-voucher\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 685
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-product\" class=\"tab-pane active\">
            <form id=\"form-product-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 691
        echo ($context["text_product_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3\">
                  <label for=\"input-product\" class=\"form-label\">";
        // line 693
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" list=\"list-product\" class=\"form-control\" autocomplete=\"off\"/>
                  <datalist id=\"list-product\"></datalist>
                  <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 698
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </fieldset>
              <div id=\"option\"></div>
              <div id=\"subscription\"></div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 704
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
          <div id=\"tab-voucher\" class=\"tab-pane\">
            <form id=\"form-voucher-add\">
              <fieldset class=\"mb-0\">
                <legend>";
        // line 711
        echo ($context["text_voucher_add"] ?? null);
        echo "</legend>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-name\" class=\"form-label\">";
        // line 713
        echo ($context["entry_to_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_name\" value=\"\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
                  <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-to-email\" class=\"form-label\">";
        // line 717
        echo ($context["entry_to_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"to_email\" value=\"\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
                  <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-name\" class=\"form-label\">";
        // line 721
        echo ($context["entry_from_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_name\" value=\"\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
                  <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-from-email\" class=\"form-label\">";
        // line 725
        echo ($context["entry_from_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"from_email\" value=\"\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
                  <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-theme\" class=\"form-label\">";
        // line 729
        echo ($context["entry_theme"] ?? null);
        echo "</label> <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 731
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 731);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 731);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                  </select>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-message\" class=\"form-label\">";
        // line 736
        echo ($context["entry_message"] ?? null);
        echo "</label> <textarea name=\"message\" rows=\"5\" placeholder=\"";
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\"></textarea>
                </div>
                <div class=\"mb-3 required\">
                  <label for=\"input-amount\" class=\"form-label\">";
        // line 739
        echo ($context["entry_amount"] ?? null);
        echo "</label> <input type=\"text\" name=\"amount\" value=\"";
        echo ($context["voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  <div id=\"error-amount\" class=\"invalid-feedback\"></div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-voucher-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 744
        echo ($context["button_save"] ?? null);
        echo "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 757
        echo ($context["text_affiliate"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\">
          <div class=\"mb-3\">
            <input type=\"text\" name=\"affiliate\" value=\"";
        // line 763
        echo ($context["affiliate"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" list=\"list-affiliate\" class=\"form-control\"/>
            <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        // line 764
        echo ($context["affiliate_id"] ?? null);
        echo "\" id=\"input-affiliate-id\"/>
            <datalist id=\"list-affiliate\"></datalist>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 768
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 779
        echo ($context["text_payment_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 785
        echo ($context["entry_address"] ?? null);
        echo "</label> <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected=\"selected\">";
        // line 786
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 788
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 788);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 788);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 788);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 788);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 788);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 788);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 790
        echo "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 793
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["payment_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 797
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["payment_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 801
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["payment_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 804
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["payment_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 808
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["payment_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 811
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["payment_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 815
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["payment_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 819
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"\">";
        // line 820
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 822
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 822);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 822) == ($context["payment_country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 822);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 828
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\"></select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 832
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 832) == "address")) {
                // line 833
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 833) == "select")) {
                    // line 834
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 834);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 835
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 835);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 835);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 835);
                    echo "]\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 835);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 836
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 837
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 837));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 838
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 838);
                        echo "\"";
                        if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 838)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 838) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 838)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 838);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 840
                    echo "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 841
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 841);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 844
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 844) == "radio")) {
                    // line 845
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 845);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 846
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 846);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 847
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 847);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 848
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 848));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 849
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 850
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 850);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 853
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 854
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 854);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 857
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 857) == "checkbox")) {
                    // line 858
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 858);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 859
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 859);
                    echo "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 860
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 860);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 861
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 861));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 862
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 863
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        echo "\" id=\"input-payment-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_22 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863), (($__internal_compile_23 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/>
                        <label for=\"input-payment-custom-value-";
                        // line 864
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 864);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 864);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 867
                    echo "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 868
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 868);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 871
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 871) == "text")) {
                    // line 872
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 872);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 873
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 873);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 873);
                    echo "</label>
                  <input type=\"text\" name=\"custom_field[";
                    // line 874
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_24 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874)] ?? null) : null)) ? ((($__internal_compile_25 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 874)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 874);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 875
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 875);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 878
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 878) == "textarea")) {
                    // line 879
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 879);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 880
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 880);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 880);
                    echo "</label>
                  <textarea name=\"custom_field[";
                    // line 881
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 881);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_26 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881)] ?? null) : null)) ? ((($__internal_compile_27 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 881)));
                    echo "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 882
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 882);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 885
                echo "
              ";
                // line 886
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 886) == "file")) {
                    // line 887
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 888
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 888);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-payment-custom-field-";
                    // line 890
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 890);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 891
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891)] ?? null) : null)) ? ((($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891)] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 892
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 892);
                    echo "\"";
                    if ( !(($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 892)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 893
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 893);
                    echo "\"";
                    if ( !(($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 893)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 895
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 898
                echo "
              ";
                // line 899
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 899) == "date")) {
                    // line 900
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 900);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 901
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 901);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 901);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 903
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903)] ?? null) : null)) ? ((($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 903)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 903);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 906
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 909
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 909) == "time")) {
                    // line 910
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 911
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 911);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 913
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 913)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 913);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 916
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 916);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 919
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 919) == "datetime")) {
                    // line 920
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 920);
                    echo "\">
                  <label for=\"input-payment-custom-field-";
                    // line 921
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 921);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 923
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_36 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923)] ?? null) : null)) ? ((($__internal_compile_37 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 923)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 923);
                    echo "\" id=\"input-payment-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 923);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 926
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 926);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 929
                echo "            ";
            }
            // line 930
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 931
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 932
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 944
        echo ($context["text_shipping_address"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\">

          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 951
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\" selected=\"selected\">";
        // line 953
        echo ($context["text_none"] ?? null);
        echo "</option>
              ";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 955
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 955);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 955);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 955);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 955);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 955);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 955);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 957
        echo "            </select>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 961
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 962
        echo ($context["shipping_firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 967
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 968
        echo ($context["shipping_lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 973
        echo ($context["entry_company"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"company\" value=\"";
        // line 974
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 978
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"address_1\" value=\"";
        // line 979
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 984
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"address_2\" value=\"";
        // line 985
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 988
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 993
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 998
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"\">";
        // line 999
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 1000
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1001
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1001);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1001) == ($context["shipping_country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 1001);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        echo "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>

          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 1008
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 1012
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1013
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1013) == "address")) {
                // line 1014
                echo "
              ";
                // line 1015
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1015) == "select")) {
                    // line 1016
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1016);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1017
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1017);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1017);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1017);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1017);
                    echo "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 1018
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 1019
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1019));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1020
                        echo "                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1020);
                        echo "\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1020)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1020) == (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1020)] ?? null) : null)))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1020);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1022
                    echo "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 1023
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1023);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1026
                echo "
              ";
                // line 1027
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1027) == "radio")) {
                    // line 1028
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1028);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1029
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1029);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1030
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1030);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">

                    ";
                    // line 1032
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1032));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1033
                        echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 1034
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1034);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1034);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1034) == (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1034)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1034);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1034);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1037
                    echo "
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1039
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1039);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1042
                echo "
              ";
                // line 1043
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1043) == "checkbox")) {
                    // line 1044
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1044);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1045
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1045);
                    echo "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 1046
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1046);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">

                    ";
                    // line 1048
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1048));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1049
                        echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 1050
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050), (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1050)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1050);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1050);
                        echo "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1053
                    echo "
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1055
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1055);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1058
                echo "
              ";
                // line 1059
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1059) == "text")) {
                    // line 1060
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1060);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1061
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1061);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061)] ?? null) : null)) ? ((($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1061)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1061);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1061);
                    echo "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 1062
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1062);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1065
                echo "
              ";
                // line 1066
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1066) == "textarea")) {
                    // line 1067
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1067);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1068
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1068);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1068);
                    echo "</label>
                  <textarea name=\"custom_field[";
                    // line 1069
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1069);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1069);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1069);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1069);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1069)] ?? null) : null)) ? ((($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1069)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1069)));
                    echo "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 1070
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1070);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1073
                echo "
              ";
                // line 1074
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1074) == "file")) {
                    // line 1075
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1075);
                    echo "\">
                  <label class=\"form-label\">";
                    // line 1076
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1076);
                    echo "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1078
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1078);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 1079
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1079);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1079)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1079)] ?? null) : null)) : (""));
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1079);
                    echo "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 1080
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1080);
                    echo "\"";
                    if ( !(($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1080)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1081
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081);
                    echo "\"";
                    if ( !(($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1081)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1083
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1083);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1086
                echo "
              ";
                // line 1087
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1087) == "date")) {
                    // line 1088
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1088);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1089
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1089);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1089);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1091
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) ? ((($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1091)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1091);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1091);
                    echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1094
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1094);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1097
                echo "
              ";
                // line 1098
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1098) == "time")) {
                    // line 1099
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1099);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1100
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1100);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1100);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1102);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1102)] ?? null) : null)) ? ((($__internal_compile_55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1102)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1102)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1102);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1102);
                    echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1105);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1108
                echo "
              ";
                // line 1109
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1109) == "datetime")) {
                    // line 1110
                    echo "                <div class=\"mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1110);
                    echo "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 1111
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1111);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1111);
                    echo "</label>
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 1113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1113);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_56 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1113)] ?? null) : null)) ? ((($__internal_compile_57 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1113)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1113)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1113);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1113);
                    echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 1116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1116);
                    echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 1119
                echo "            ";
            }
            // line 1120
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1121
        echo "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1122
        echo ($context["button_save"] ?? null);
        echo "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1133
        echo ($context["text_comment"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1139
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
          </div>
          <div class=\"text-end\">

            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i> ";
        // line 1143
        echo ($context["button_save"] ?? null);
        echo "</button>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function () {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function () {
            \$(element).html('";
        // line 1159
        echo ($context["text_more"] ?? null);
        echo " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function () {
            \$(element).html('";
        // line 1163
        echo ($context["text_less"] ?? null);
        echo " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function () {
    \$.ajax({
        url: 'index.php?route=sale/order|createInvoiceNo&user_token=";
        // line 1170
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$('#button-invoice').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-invoice').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#invoice-value').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 1203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1208
        echo ($context["customer_group_id"] ?? null);
        echo ",
                    name: '";
        // line 1209
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function (item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(item['firstname']);
        \$('#input-lastname').val(item['lastname']);
        \$('#input-email').val(item['email']);
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1261
        echo ($context["text_none"] ?? null);
        echo "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer|customfield&user_token=";
        // line 1275
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function (json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

// Customer
\$('#form-customer').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1304
        echo ($context["user_token"] ?? null);
        echo "&action=sale/customer',
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-customer').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-customer').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#customer-value').html('<a href=\"index.php?route=customer/customer|form&user_token=";
        // line 1335
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val() + '\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Product
\$('#input-product').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product|autocomplete&user_token=";
        // line 1350
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        model: item['model'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function (item) {
        \$('#input-product-id').val(item['value']);

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1374
        echo ($context["entry_option"] ?? null);
        echo "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1383
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1407
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/> ';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1457
        echo ($context["text_select"] ?? null);
        echo "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1496
        echo ($context["upload"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\"  id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control datetime\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div class=\"input-group\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1538
        echo ($context["entry_subscription"] ?? null);
        echo "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1541
        echo ($context["text_select"] ?? null);
        echo "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '  <div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '\" class=\"form-text subscription d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>';
            html += '</div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1568
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart|add',
        type: 'post',
        data: \$('#form-product-add').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-product-add').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-product-add').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-products').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1615
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart|remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(e.target).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(e.target).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher-add').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1651
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher|add',
        type: 'post',
        data: \$('#form-voucher-add').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-voucher-add').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-voucher-add').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-voucher-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['error']) {
                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-to-name').val('');
                \$('#input-to-email').val('');
                \$('#input-from-name').val('');
                \$('#input-from-email').val('');
                \$('#input-message').val('');
                \$('#input-amount').val('";
        // line 1687
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove voucher
\$('#order-vouchers').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1706
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher|remove',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(e.target).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(e.target).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-store').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1741
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/store',
        type: 'post',
        data: \$('#form-store').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-store').prop('disabled', true);
        },
        complete: function () {
            \$('#input-store').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-language').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1774
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/language',
        type: 'post',
        data: \$('#form-language').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-language').prop('disabled', true);
        },
        complete: function () {
            \$('#input-language').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-currency').on('change', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1807
        echo ($context["user_token"] ?? null);
        echo "&action=localisation/currency',
        type: 'post',
        data: \$('#form-currency').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#input-currency').prop('disabled', true);
        },
        complete: function () {
            \$('#input-currency').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Coupon
\$('#form-coupon').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1841
        echo ($context["user_token"] ?? null);
        echo "&action=sale/coupon',
        type: 'post',
        data: \$('#form-coupon').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-coupon').addClass('loading').prop('disabled', true);
        },
        complete: function () {
            \$('#button-coupon').removeClass('loading').prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Voucher
\$('#form-voucher').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1876
        echo ($context["user_token"] ?? null);
        echo "&action=sale/voucher',
        type: 'post',
        data: \$('#form-voucher').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-voucher').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-voucher').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$('#form-reward').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 1911
        echo ($context["user_token"] ?? null);
        echo "&action=sale/reward',
        type: 'post',
        data: \$('#form-reward').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-reward').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-reward').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function (e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order|' + action + 'Reward&user_token=";
        // line 1951
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1971
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1975
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate|autocomplete&user_token=";
        // line 1989
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    name: '";
        // line 1993
        echo ($context["text_none"] ?? null);
        echo "',
                    customer_id: 0
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-affiliate-id').val(item['value']);
    }
});

// Affiliate
\$('#form-affiliate').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2016
        echo ($context["user_token"] ?? null);
        echo "&action=sale/affiliate',
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-affiliate').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-affiliate').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#affiliate-value').html('<a href=\"index.php?route=marketing/affiliate|form&user_token=";
        // line 2037
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#affiliate-value').html('&nbsp;');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function (e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order|' + action + 'Commission&user_token=";
        // line 2060
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2080
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2084
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$('#input-payment-address').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer|address&user_token=";
        // line 2099
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2152
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_address',
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$('#button-payment-address').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-payment-address').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + \"<br/>\";

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + \"<br/>\";
                }

                address += \$('#input-payment-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + \"<br/>\";
                }

                address += \$('#input-payment-city').val() + \"<br/>\";

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-payment-zone option:selected').text() + \"<br/>\";
                address += \$('#input-payment-country option:selected').text();

                \$('#payment-address-value').html(address);

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = '";
        // line 2220
        echo ($context["payment_zone_id"] ?? null);
        echo "';

\$('#input-payment-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 2226
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2241
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 2254
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-country').trigger('change');

// Shipping Address
\$('#input-shipping-address').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer|address&user_token=";
        // line 2272
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2325
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_address',
        type: 'post',
        data: \$('#form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-shipping-address').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-shipping-address').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            // Check for errors
            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + \"<br/>\";

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + \"<br/>\";
                }

                address += \$('#input-shipping-address-1').val() + \"<br/>\";

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + \"<br/>\";
                }

                address += \$('#input-shipping-city').val() + \"<br/>\";

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + \"<br/>\";
                }

                address += \$('#input-shipping-zone option:selected').text() + \"<br/>\";
                address += \$('#input-shipping-country option:selected').text();

                \$('#shipping-address-value').html(address);

                // Refresh products, vouchers and totals
                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = '";
        // line 2395
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

\$('#input-shipping-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 2401
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 2416
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 2429
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-country').trigger('change');

// Payment Method
\$('#button-payment-method').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2447
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#alert .alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            html = '<option value=\"\">";
        // line 2462
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['payment_methods']) {
                for (i in json['payment_methods']) {
                    if (json['payment_methods'][i]['code'] == \$('#input-payment-method').val()) {
                        html += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected>' + json['payment_methods'][i]['title'] + '</option>';
                    } else {
                        html += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
                    }
                }
            }

            \$('#input-payment-method').html(html);

            \$('#button-refresh').trigger('click');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-payment-method').on('change', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2490
        echo ($context["user_token"] ?? null);
        echo "&action=sale/payment_method|save',
        type: 'post',
        data: \$('#form-payment-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
\$('#button-shipping-method').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2525
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            html = '<option value=\"\">";
        // line 2540
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['shipping_methods']) {
                for (i in json['shipping_methods']) {
                    html += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method').val()) {
                                html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected>' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                            } else {
                                html += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
                            }
                        }
                    } else {
                        html += '<option value=\"\" class=\"text-danger\" disabled>' + json['shipping_methods'][i]['error'] + '</span></li>';
                    }

                    html += '</optgroup>';
                }
            }

            \$('#input-shipping-method').html(html);

            \$('#button-refresh').trigger('click');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-shipping-method').on('change', function (e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2576
        echo ($context["user_token"] ?? null);
        echo "&action=sale/shipping_method|save',
        type: 'post',
        data: \$('#form-shipping-method').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#button-refresh').trigger('click');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2612
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|comment',
        type: 'post',
        data: \$('#form-comment').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-comment').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-comment').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            // Check for errors
            if (json['error']) {
                \$('#form-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment-value').html(\$('#input-comment').val().replace(/([^>\\r\\n]?)(\\r\\n|\\n\\r|\\r|\\n)/g, '\$1<br/>\$2'));
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products, vouchers and totals
\$('#button-refresh').on('click', function () {
    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2646
        echo ($context["user_token"] ?? null);
        echo "&action=sale/cart',
        dataType: 'json',
        beforeSend: function () {
            \$('#button-confirm').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-confirm').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            html = '';

            if (json['products'].length) {
                for (i = 0; i < json['products'].length; i++) {
                    product = json['products'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\"><a href=\"index.php?route=catalog/product|form&user_token=";
        // line 2662
        echo ($context["user_token"] ?? null);
        echo "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');

                    if (product['option']) {
                        for (j = 0; j < product['option'].length; j++) {
                            option = product['option'][j];

                            html += '<br/>';
                            html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small>';
                        }
                    }

                    if (product['reward']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2675
        echo ($context["text_points"] ?? null);
        echo " ' + product['reward'] + '</small>';
                    }

                    if (product['subscription']) {
                        html += '<br/>';
                        html += '  - <small>";
        // line 2680
        echo ($context["text_subscription"] ?? null);
        echo " ' + product['subscription'] + '</small>';
                    }

                    html += '  </td>';
                    html += '  <td class=\"text-start\">' + product['model'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['price'] + '</td>';
                    html += '  <td class=\"text-end\">' + product['total'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2690
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + product['cart_id'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            \$('#order-products').html(html);

            html = '';

            if (json['vouchers'].length) {
                for (i in json['vouchers']) {
                    voucher = json['vouchers'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-start\">' + voucher['description'] + '</td>';
                    html += '  <td class=\"text-start\"></td>';
                    html += '  <td class=\"text-end\">1</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">' + voucher['amount'] + '</td>';
                    html += '  <td class=\"text-end\">';
                    html += '    <form>';
                    html += '      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2714
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
                    html += '      <input type=\"hidden\" name=\"key\" value=\"' + voucher['key'] + '\"/>';
                    html += '    </form>';
                    html += '  </td>';
                    html += '</tr>';
                }
            }

            if (!json['products'].length && !json['vouchers'].length) {
                html += '<tr>';
                html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2724
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
                html += '</tr>';
            }

            \$('#order-vouchers').html(html);

            // Totals
            html = '';

            if (json['totals'].length) {
                for (i in json['totals']) {
                    total = json['totals'][i];

                    html += '<tr>';
                    html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
                    html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
                    html += '</tr>';
                }
            }

            \$('#order-totals').html(html);

            if (json['shipping_required']) {
                \$('#shipping-address').removeClass('d-none');
                \$('#shipping-method').removeClass('d-none');
                \$('#button-shipping').prop('disabled', false);
            } else {
                \$('#shipping-address').addClass('d-none');
                \$('#shipping-method').addClass('d-none');
                \$('#button-shipping').prop('disabled', true);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Checkout
\$('#button-confirm').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2767
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|confirm',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(element).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (i in json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'][i] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#reward-value').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#reward-value').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#commission-value').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#commission-value').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order|call&user_token=";
        // line 2828
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order|addHistory&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function () {
            \$('#button-history').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-history').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order|history&user_token=";
        // line 2849
        echo ($context["user_token"] ?? null);
        echo "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2860
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5078 => 2860,  5064 => 2849,  5040 => 2828,  4976 => 2767,  4930 => 2724,  4917 => 2714,  4890 => 2690,  4877 => 2680,  4869 => 2675,  4853 => 2662,  4834 => 2646,  4797 => 2612,  4758 => 2576,  4719 => 2540,  4701 => 2525,  4663 => 2490,  4632 => 2462,  4614 => 2447,  4593 => 2429,  4577 => 2416,  4559 => 2401,  4550 => 2395,  4477 => 2325,  4421 => 2272,  4400 => 2254,  4384 => 2241,  4366 => 2226,  4357 => 2220,  4286 => 2152,  4230 => 2099,  4212 => 2084,  4205 => 2080,  4182 => 2060,  4156 => 2037,  4132 => 2016,  4106 => 1993,  4099 => 1989,  4082 => 1975,  4075 => 1971,  4052 => 1951,  4009 => 1911,  3971 => 1876,  3933 => 1841,  3896 => 1807,  3860 => 1774,  3824 => 1741,  3786 => 1706,  3764 => 1687,  3725 => 1651,  3686 => 1615,  3636 => 1568,  3606 => 1541,  3600 => 1538,  3553 => 1496,  3511 => 1457,  3458 => 1407,  3431 => 1383,  3419 => 1374,  3392 => 1350,  3374 => 1335,  3340 => 1304,  3308 => 1275,  3291 => 1261,  3236 => 1209,  3232 => 1208,  3224 => 1203,  3186 => 1170,  3176 => 1163,  3169 => 1159,  3150 => 1143,  3141 => 1139,  3132 => 1133,  3118 => 1122,  3115 => 1121,  3109 => 1120,  3106 => 1119,  3100 => 1116,  3088 => 1113,  3081 => 1111,  3076 => 1110,  3074 => 1109,  3071 => 1108,  3065 => 1105,  3053 => 1102,  3046 => 1100,  3041 => 1099,  3039 => 1098,  3036 => 1097,  3030 => 1094,  3018 => 1091,  3011 => 1089,  3006 => 1088,  3004 => 1087,  3001 => 1086,  2995 => 1083,  2984 => 1081,  2974 => 1080,  2966 => 1079,  2956 => 1078,  2951 => 1076,  2946 => 1075,  2944 => 1074,  2941 => 1073,  2935 => 1070,  2923 => 1069,  2917 => 1068,  2912 => 1067,  2910 => 1066,  2907 => 1065,  2901 => 1062,  2887 => 1061,  2882 => 1060,  2880 => 1059,  2877 => 1058,  2871 => 1055,  2867 => 1053,  2846 => 1050,  2843 => 1049,  2839 => 1048,  2834 => 1046,  2830 => 1045,  2825 => 1044,  2823 => 1043,  2820 => 1042,  2814 => 1039,  2810 => 1037,  2789 => 1034,  2786 => 1033,  2782 => 1032,  2777 => 1030,  2773 => 1029,  2768 => 1028,  2766 => 1027,  2763 => 1026,  2757 => 1023,  2754 => 1022,  2739 => 1020,  2735 => 1019,  2731 => 1018,  2721 => 1017,  2716 => 1016,  2714 => 1015,  2711 => 1014,  2708 => 1013,  2704 => 1012,  2697 => 1008,  2690 => 1003,  2675 => 1001,  2671 => 1000,  2667 => 999,  2663 => 998,  2651 => 993,  2639 => 988,  2631 => 985,  2627 => 984,  2617 => 979,  2613 => 978,  2604 => 974,  2600 => 973,  2590 => 968,  2586 => 967,  2576 => 962,  2572 => 961,  2566 => 957,  2547 => 955,  2543 => 954,  2539 => 953,  2534 => 951,  2524 => 944,  2509 => 932,  2506 => 931,  2500 => 930,  2497 => 929,  2491 => 926,  2479 => 923,  2472 => 921,  2467 => 920,  2464 => 919,  2458 => 916,  2446 => 913,  2439 => 911,  2434 => 910,  2431 => 909,  2425 => 906,  2413 => 903,  2406 => 901,  2401 => 900,  2399 => 899,  2396 => 898,  2390 => 895,  2379 => 893,  2369 => 892,  2361 => 891,  2351 => 890,  2346 => 888,  2341 => 887,  2339 => 886,  2336 => 885,  2330 => 882,  2320 => 881,  2314 => 880,  2309 => 879,  2306 => 878,  2300 => 875,  2290 => 874,  2284 => 873,  2279 => 872,  2276 => 871,  2270 => 868,  2267 => 867,  2256 => 864,  2244 => 863,  2241 => 862,  2237 => 861,  2233 => 860,  2229 => 859,  2224 => 858,  2221 => 857,  2215 => 854,  2212 => 853,  2191 => 850,  2188 => 849,  2184 => 848,  2180 => 847,  2176 => 846,  2171 => 845,  2168 => 844,  2162 => 841,  2159 => 840,  2144 => 838,  2140 => 837,  2136 => 836,  2126 => 835,  2121 => 834,  2118 => 833,  2115 => 832,  2111 => 831,  2105 => 828,  2099 => 824,  2084 => 822,  2080 => 821,  2076 => 820,  2072 => 819,  2061 => 815,  2050 => 811,  2040 => 808,  2029 => 804,  2019 => 801,  2008 => 797,  1997 => 793,  1992 => 790,  1973 => 788,  1969 => 787,  1965 => 786,  1961 => 785,  1952 => 779,  1938 => 768,  1931 => 764,  1925 => 763,  1916 => 757,  1900 => 744,  1888 => 739,  1880 => 736,  1875 => 733,  1864 => 731,  1860 => 730,  1856 => 729,  1847 => 725,  1838 => 721,  1829 => 717,  1820 => 713,  1815 => 711,  1805 => 704,  1794 => 698,  1784 => 693,  1779 => 691,  1770 => 685,  1766 => 684,  1758 => 679,  1744 => 668,  1741 => 667,  1735 => 666,  1732 => 665,  1726 => 662,  1714 => 659,  1707 => 657,  1702 => 656,  1699 => 655,  1693 => 652,  1681 => 649,  1674 => 647,  1669 => 646,  1666 => 645,  1660 => 642,  1648 => 639,  1641 => 637,  1636 => 636,  1634 => 635,  1631 => 634,  1625 => 631,  1614 => 629,  1604 => 628,  1596 => 627,  1586 => 626,  1581 => 624,  1576 => 623,  1574 => 622,  1571 => 621,  1565 => 618,  1551 => 617,  1546 => 616,  1543 => 615,  1537 => 612,  1523 => 611,  1518 => 610,  1515 => 609,  1509 => 606,  1506 => 605,  1485 => 602,  1482 => 601,  1478 => 600,  1474 => 599,  1470 => 598,  1465 => 597,  1462 => 596,  1456 => 593,  1453 => 592,  1432 => 589,  1429 => 588,  1425 => 587,  1421 => 586,  1417 => 585,  1412 => 584,  1409 => 583,  1403 => 580,  1400 => 579,  1385 => 577,  1381 => 576,  1377 => 575,  1367 => 574,  1362 => 573,  1359 => 572,  1356 => 571,  1352 => 570,  1342 => 567,  1336 => 566,  1325 => 562,  1320 => 560,  1309 => 556,  1298 => 552,  1293 => 549,  1278 => 547,  1274 => 546,  1270 => 545,  1263 => 541,  1252 => 539,  1247 => 537,  1238 => 531,  1226 => 521,  1215 => 519,  1211 => 518,  1202 => 512,  1198 => 511,  1192 => 508,  1188 => 507,  1185 => 506,  1179 => 503,  1175 => 502,  1172 => 501,  1170 => 500,  1165 => 498,  1161 => 497,  1153 => 492,  1142 => 484,  1136 => 481,  1129 => 477,  1124 => 475,  1112 => 466,  1105 => 462,  1096 => 456,  1090 => 452,  1075 => 450,  1071 => 449,  1065 => 446,  1060 => 444,  1053 => 440,  1049 => 439,  1043 => 435,  1032 => 433,  1028 => 432,  1024 => 431,  1020 => 430,  1014 => 427,  1005 => 421,  1001 => 420,  996 => 417,  987 => 414,  983 => 413,  980 => 412,  976 => 411,  965 => 402,  961 => 400,  955 => 398,  953 => 397,  948 => 395,  932 => 383,  924 => 381,  922 => 380,  918 => 379,  904 => 369,  896 => 367,  894 => 366,  890 => 365,  881 => 361,  870 => 352,  864 => 350,  861 => 349,  854 => 346,  851 => 345,  844 => 342,  841 => 341,  834 => 338,  831 => 337,  824 => 334,  821 => 333,  814 => 330,  811 => 329,  804 => 326,  801 => 325,  792 => 322,  790 => 321,  784 => 318,  776 => 315,  768 => 309,  762 => 307,  759 => 306,  752 => 303,  750 => 302,  747 => 301,  740 => 298,  738 => 297,  735 => 296,  728 => 293,  726 => 292,  723 => 291,  716 => 288,  714 => 287,  711 => 286,  704 => 283,  702 => 282,  699 => 281,  692 => 278,  690 => 277,  687 => 276,  678 => 273,  676 => 272,  670 => 269,  661 => 263,  653 => 257,  647 => 255,  637 => 253,  635 => 252,  631 => 250,  627 => 248,  621 => 246,  619 => 245,  614 => 243,  603 => 234,  599 => 232,  589 => 230,  587 => 229,  582 => 227,  574 => 221,  568 => 219,  558 => 217,  556 => 216,  550 => 213,  545 => 211,  529 => 202,  518 => 194,  510 => 193,  499 => 185,  495 => 184,  489 => 183,  477 => 175,  462 => 173,  458 => 172,  445 => 163,  430 => 161,  426 => 160,  413 => 151,  398 => 149,  394 => 148,  375 => 131,  369 => 128,  366 => 127,  364 => 126,  361 => 125,  350 => 120,  346 => 119,  340 => 116,  336 => 115,  330 => 112,  327 => 111,  323 => 110,  319 => 108,  308 => 103,  304 => 102,  298 => 99,  294 => 98,  290 => 97,  286 => 96,  282 => 94,  275 => 92,  272 => 91,  270 => 90,  267 => 89,  260 => 87,  257 => 86,  255 => 85,  252 => 84,  249 => 83,  239 => 81,  236 => 80,  231 => 79,  229 => 78,  220 => 76,  217 => 75,  213 => 74,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  174 => 56,  169 => 54,  159 => 46,  153 => 44,  143 => 42,  141 => 41,  136 => 39,  128 => 33,  124 => 31,  118 => 29,  116 => 28,  109 => 25,  104 => 23,  94 => 16,  87 => 11,  76 => 9,  72 => 8,  67 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order_info.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\sale\\order_info.twig");
    }
}
