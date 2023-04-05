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
class __TwigTemplate_e02993e867a2428469470205cafefb8c extends Template
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
        echo "<div id=\"checkout-review\">
  <h1 class=\"sm:mt-[40px] mt-[30px] sm:text-[40px] text-[30px] font-bold flex justify-between uppercase\">
    <div class=\"flex\">
      ";
        // line 4
        echo ($context["heading_title_1"] ?? null);
        echo "&nbsp;<span class=\"text-orange\">";
        echo ($context["heading_title_2"] ?? null);
        echo "</span>
    </div>
    <div class=\"opacity-[0.5]\">(3/4)</div>
  </h1>
  <div class=\"sm:py-[20px] py-[15px]\">
    <div class=\"\">
      <div class=\"grid sm:grid-cols-9 sm:gap-[30px] gap-[15px]\">
        <div id=\"content\" class=\"col-span-5\">
          <div >
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "            <div class=\"cart-item flex py-[20px] border-b border-darkBlue\">
              <div class=\"text-center\">
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16)) {
                // line 17
                echo "                  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                echo "\" class=\"w-[120px]\"/></a>
                ";
            }
            // line 19
            echo "              </div>
              <div class=\"grow flex justify-between py-[16px]\">
                <div class=\"flex flex-col justify-between\">
                  <div class=\"\">
                    <a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
            echo "\" class=\"font-bold\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "</a>
                    <div class=\"text-start mt-[4px]\">&nbsp;</div>
                    <div class=\"text-start text-[10px] mt-[4px]\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 25);
            echo "</div>
                  </div>
                  <div class=\"flex gap-[10px]\">
                    <div class=\"w-[12px] h-[12px] bg-green rounded-full\"></div>
                    <div class=\"text-[10px] opacity-[0.5]\">Delivery: 1-4 days</div>
                  </div>
                </div>
                <div class=\"flex flex-col justify-between\">
                  <div class=\"\">
                    <div class=\"text-end font-bold text-[19px]\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
            echo "</div>
                  </div>
                  <div class=\"text-start font-bold\">
                    ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
            echo " product(s)
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </div>
          <div class=\"sm:mt-[20px] mt-[15px] sm:p-[20px] p-[15px] bg-orangeLight flex sm:gap-[28px] gap-[20px]\">
            <div class=\"\">
              <img src=\"/image/catalog/objects/little-mini-group-logo.png\" alt=\"\" srcset=\"\"/>
            </div>
            <div class=\"\">
              <div class=\"flex justify-between\">
                <div class=\"\">
                  <div class=\"sm:text-[10px] text-[8px]\">Membership</div>
                  <div class=\"sm:text-[12px] text-[9px] font-bold\">FIRST MONTH IS FREE</div>
                </div>
                <div class=\"sm:text-[10px] text-[8px]\">1profile p/m
                  <span class=\"text-[16px] font-bold\">\$89</span>
                </div>
              </div>
              <div class=\"sm:text-[12px] text-[9px] mt-[10px]\">Access to all LittleMinis benefits for 0 DKK in the first month, then 89,- DKK per month(<a href=\"#\" class=\"underline\">view benefits</a>). By choosing the member price you become a member (<a href=\"#\" class=\"underline\">conditions</a>) and you receive the LittleMini member benefits. Cancellable at any time.</div>
            </div>
          </div>
          <br/>
        </div>
        <div class=\"col-span-4\">
          <div class=\"flex justify-between bg-orangeLight mt-[20px] p-[20px]\">
            <div class=\"sm:text-[24px] text-[18px] font-bold uppercase\">YOUR ORDER</div>
            <div id=\"total_price_div\" class=\"sm:text-[24px] text-[18px] text-orange font-bold\">
              ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 68
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 68) == "Total")) {
                // line 69
                echo "                  ";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 69);
                echo "
                ";
            }
            // line 71
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>
          </div>
          <div class=\"p-[20px] relative bg-orangeGray\">
            <div class=\"float-end\">
              <button id=\"approve_purchase\" class=\"w-full uppercase block px-[26px] py-[14px] bg-indigo text-white font-semibold flex justify-center sm:mt-0 mt-[20px]\">Approve membership and purchase</button>
            </div>
            <div class=\"sm:pt-[30px] pt-[22px]\">
              <div class=\"flex gap-[22px]\">
                <div class=\"py-[4px]\">
                  <svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M5 5.5H6M9 9.5H10M10 5L5 10M6.80145 0.789347L5.67243 1.91837C5.48717 2.10363 5.23589 2.20772 4.97389 2.20772H3.19561C2.65001 2.20772 2.20772 2.65001 2.20772 3.19561V4.97389C2.20772 5.23589 2.10363 5.48717 1.91837 5.67243L0.789347 6.80145C0.403551 7.18725 0.403551 7.81275 0.789347 8.19855L1.91837 9.32757C2.10363 9.51283 2.20772 9.76411 2.20772 10.0261V11.8044C2.20772 12.35 2.65001 12.7923 3.19561 12.7923H4.97389C5.23589 12.7923 5.48717 12.8964 5.67243 13.0816L6.80145 14.2107C7.18725 14.5964 7.81275 14.5964 8.19855 14.2107L9.32757 13.0816C9.51283 12.8964 9.76411 12.7923 10.0261 12.7923H11.8044C12.35 12.7923 12.7923 12.35 12.7923 11.8044V10.0261C12.7923 9.76411 12.8964 9.51283 13.0816 9.32757L14.2107 8.19855C14.5964 7.81275 14.5964 7.18725 14.2107 6.80145L13.0816 5.67243C12.8964 5.48717 12.7923 5.23589 12.7923 4.97389V3.19561C12.7923 2.65001 12.35 2.20772 11.8044 2.20772H10.0261C9.76411 2.20772 9.51283 2.10363 9.32757 1.91837L8.19855 0.789347C7.81275 0.403551 7.18725 0.403551 6.80145 0.789347Z\" stroke=\"#080E16\"/>
                  </svg>
                </div>
                <div class=\"\">
                  <div>You save 44% on this order.</div>
                  <div class=\"opacity-[0.5]\">Savings: \$120</div>
                </div>
              </div>
              <div class=\"flex gap-[22px]\">
                <div class=\"py-[4px]\">
                  <svg width=\"15\" height=\"15\" viewbox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M2 9.5H5M13 9.5H10M3 6.5H12M14.5 6.4967V12.5C14.5 13.0523 14.0523 13.5 13.5 13.5H12.5C11.9477 13.5 11.5 13.0523 11.5 12.5V11.5H3.5V12.5C3.5 13.0523 3.05228 13.5 2.5 13.5H1.5C0.947715 13.5 0.5 13.0523 0.5 12.5V6.4967L2.62597 2.95576C3.16824 2.05257 4.14452 1.5 5.19799 1.5H9.80201C10.8555 1.5 11.8318 2.05257 12.374 2.95576L14.5 6.4967Z\" stroke=\"#080E16\"/>
                  </svg>
                </div>
                <div class=\"\">
                  <div>Cheap and fast shipping.</div>
                  <div class=\"opacity-[0.5]\">VAT included.</div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"flex justify-center sm:text-[12px] text-[8px] py-[15px]\">
            <div class=\"flex gap-[10px]\">
              <svg width=\"15\" height=\"19\" viewbox=\"0 0 15 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M0.5 4.43132L7.5 0.633789L14.5 4.43132M0.5 4.43132L7.5 8.22884M0.5 4.43132V4.43379M14.5 4.43132L7.5 8.22884M14.5 4.43132V14.5671L7.5 18.3671M14.5 4.43132L7.5 8.23379V18.3671M7.5 8.22884V18.3671M7.5 8.22884L0.5 4.43379M7.5 18.3671L0.5 14.5671V4.43379\" stroke=\"#080E16\" stroke-linejoin=\"round\"/>
              </svg>
              <div>We ship today and accept returns for up to 90 days.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  \$('#approve_purchase').on('click', function(){
    \$('#btn-refetch-payment-method').trigger('click');
  });
</script>";
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
        return array (  166 => 72,  160 => 71,  154 => 69,  151 => 68,  147 => 67,  121 => 43,  109 => 37,  103 => 34,  91 => 25,  84 => 23,  78 => 19,  66 => 17,  64 => 16,  60 => 14,  56 => 13,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/confirm.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/checkout/confirm.twig");
    }
}
