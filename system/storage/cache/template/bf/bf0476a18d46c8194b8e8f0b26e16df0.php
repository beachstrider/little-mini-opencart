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

/* admin/view/template/customer/customer_ip.twig */
class __TwigTemplate_877c1266085b504551b8deffc38af1f4 extends Template
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
        echo ($context["column_ip"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 6
        echo ($context["column_account"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_store"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_country"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["ips"] ?? null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ips"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 15
                echo "          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 16);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 16);
                echo "</a></td>
            <td class=\"text-end\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "filter_ip", [], "any", false, false, false, 17);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "account", [], "any", false, false, false, 17);
                echo "</a></td>
            <td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "store", [], "any", false, false, false, 18);
                echo "</td>
            <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "country", [], "any", false, false, false, 19);
                echo "</td>
            <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["ip"], "date_added", [], "any", false, false, false, 20);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      ";
        } else {
            // line 24
            echo "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 28
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 32
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 33
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_ip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  123 => 32,  117 => 28,  111 => 25,  108 => 24,  105 => 23,  96 => 20,  92 => 19,  88 => 18,  82 => 17,  76 => 16,  73 => 15,  68 => 14,  66 => 13,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_ip.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\customer\\customer_ip.twig");
    }
}
