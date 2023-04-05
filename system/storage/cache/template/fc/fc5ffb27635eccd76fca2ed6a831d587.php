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

/* catalog/view/template/account/returns_form.twig */
class __TwigTemplate_c87dd8d2fef1531121d3e3fbb54f07c4 extends Template
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

<div class=\"container\">
  <h1 class=\"uppercase sm:mt-[40px] mt-[30px] sm:text-[40px] text-[30px] font-bold flex justify-between\">
      ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "
  </h1>
  <div class=\"\">";
        // line 7
        echo ($context["text_description"] ?? null);
        echo "</div>
</div>

<div id=\"account-return\">
  <form id=\"form-return\" action=\"";
        // line 11
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
    <div class=\"sm:mt-[20px] mt-[15px] border-t border-darkBlue sm:pt-[20px] sm:pb-[80px] pt-[15px] pb:-[60px] flex flex-col gap-[14px]\">
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 13
        echo ($context["product_id"] ?? null);
        echo "\"/>
      ";
        // line 15
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-firstname\" class=\"form-label sm:w-[270px] flex items-center\">Full name:<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
          <div class=\"\">
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 22
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo " ...\" id=\"input-firstname\" class=\"w-full\"/>
          </div>
          <div class=\"\">
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 25
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo " ...\" id=\"input-lastname\" class=\"w-full\"/>
          </div>
        </div>
        <div class=\"\">
          <div id=\"error-firstname\" class=\"text-[12px] text-orange flex items-center\"></div>
          <div id=\"error-lastname\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
      </div>

      ";
        // line 35
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-email\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required flex items-center\">
          <input type=\"text\" name=\"email\" value=\"";
        // line 41
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"w-full\"/>
        </div>
        <div id=\"error-email\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 47
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-telephone\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 49
        echo ($context["entry_telephone"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required flex items-center\">
          <input type=\"text\" name=\"telephone\" value=\"";
        // line 53
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"w-full\"/>
        </div>
        <div id=\"error-telephone\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 59
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-order-id\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 61
        echo ($context["entry_order_id"] ?? null);
        echo " / ";
        echo ($context["entry_date_ordered"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
          <div class=\"\">
            <input type=\"text\" name=\"order_id\" value=\"";
        // line 66
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo " ...\" id=\"input-order-id\" class=\"w-full\"/>
          </div>
          <div class=\"\">
            <input type=\"date\" name=\"date_ordered\" value=\"";
        // line 69
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo " ...\" id=\"input-date-ordered\" class=\"w-full\"/>
          </div>
        </div>
        <div class=\"\">
          <div id=\"error-order-id\" class=\"text-[12px] text-orange flex items-center\"></div>
          <div id=\"error-order-date\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
      </div>

      ";
        // line 79
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px] mt-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-product\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 81
        echo ($context["entry_product"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required flex items-center\">
          <input type=\"text\" name=\"product\" value=\"";
        // line 85
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"w-full\"/>
        </div>
        <div id=\"error-product\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 91
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
          <label for=\"input-model\" class=\"form-label sm:w-[270px] flex items-center\">";
        // line 93
        echo ($context["entry_model"] ?? null);
        echo " / ";
        echo ($context["entry_quantity"] ?? null);
        echo ":<div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
          </label>
        </div>
        <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
          <div class=\"\">
            <input type=\"text\" name=\"model\" value=\"";
        // line 98
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo " ...\" id=\"input-model\" class=\"w-full\"/>
          </div>
          <div class=\"\">
            <input type=\"number\" name=\"quantity\" value=\"";
        // line 101
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo " ...\" id=\"input-quantity\" class=\"w-full\"/>
          </div>
        </div>
        <div class=\"\">
          <div id=\"error-model\" class=\"text-[12px] text-orange flex items-center\"></div>
          <div id=\"error-quantity\" class=\"text-[12px] text-orange flex items-center\"></div>
        </div>
      </div>

      ";
        // line 111
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px] mt-[20px]\">
        <div class=\"col-span-2 flex justify-end\">
          <label for=\"input-reason\" class=\"form-label sm:w-[270px]\">
            <div class=\"flex items-center\">
              <div>";
        // line 115
        echo ($context["entry_reason"] ?? null);
        echo ":</div><div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </div>
          </label>
        </div>
        <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
          ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 121
            echo "            <div class=\"flex items-center gap-[10px]\">
              <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 122);
            echo "\" id=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 122);
            echo "\" class=\"form-check-input\"/> <label for=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 122);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 122);
            echo "</label>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </div>
        <div id=\"error-reason\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 130
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px] mt-[20px]\">
        <div class=\"col-span-2 flex justify-end\">
          <label for=\"input-opened\" class=\"form-label sm:w-[270px]\">
            <div class=\"flex items-center\">
              <div>";
        // line 134
        echo ($context["entry_opened"] ?? null);
        echo ":</div><div class=\"w-[6px] h-[6px] rounded-full bg-orange ml-[10px]\"></div>
            </div>
          </label>
        </div>
        <div class=\"col-span-2 required grid grid-cols-2 gap-[20px]\">
          <div class=\"flex items-center gap-[10px]\">
              <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/> <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 140
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/> <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 141
        echo ($context["text_no"] ?? null);
        echo "</label>
          </div>
        </div>
        <div id=\"error-opened\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 148
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px] mt-[20px]\">
        <div class=\"col-span-2 flex justify-end\">
          <label for=\"input-comment\" class=\"form-label sm:w-[270px]\">
            <div class=\"flex items-center\">
              ";
        // line 152
        echo ($context["entry_fault_detail"] ?? null);
        echo ":
            </div>
          </label>
        </div>
        <div class=\"col-span-2 required flex items-center\">
          <textarea type=\"text\" rows=\"5\" name=\"comment\" placeholder=\"";
        // line 157
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"w-full\"></textarea>
        </div>
        <div id=\"error-fault-detail\" class=\"text-[12px] text-orange flex items-center\"></div>
      </div>

      ";
        // line 163
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end items-center\">
        </div>
        <div class=\"col-span-2 required flex items-center\">
          ";
        // line 167
        echo ($context["captcha"] ?? null);
        echo " 
        </div>
      </div>

      ";
        // line 172
        echo "      <div class=\"sm:grid grid-cols-5 sm:gap-[30px] gap-[20px]\">
        <div class=\"col-span-2 flex justify-end\">
        </div>
        <div class=\"col-span-2 required flex justify-between\">
          <a href=\"";
        // line 176
        echo ($context["back"] ?? null);
        echo "\" class=\"min-w-[170px] bg-white border border-dark text-center uppercase font-bold py-[14px]\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
          <button type=\"submit\" id=\"button-register\" class=\"min-w-[170px] bg-indigo text-center text-[white] uppercase font-bold py-[14px]\">";
        // line 177
        echo ($context["button_continue"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </form>
</div>

";
        // line 184
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/returns_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 184,  348 => 177,  342 => 176,  336 => 172,  329 => 167,  323 => 163,  315 => 157,  307 => 152,  301 => 148,  292 => 141,  288 => 140,  279 => 134,  273 => 130,  267 => 125,  252 => 122,  249 => 121,  245 => 120,  237 => 115,  231 => 111,  217 => 101,  209 => 98,  199 => 93,  195 => 91,  185 => 85,  178 => 81,  174 => 79,  160 => 69,  152 => 66,  142 => 61,  138 => 59,  128 => 53,  121 => 49,  117 => 47,  107 => 41,  100 => 37,  96 => 35,  82 => 25,  74 => 22,  65 => 15,  61 => 13,  56 => 11,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/returns_form.twig", "/home/xttl3xy3mfcj/public_html/catalog/view/template/account/returns_form.twig");
    }
}
