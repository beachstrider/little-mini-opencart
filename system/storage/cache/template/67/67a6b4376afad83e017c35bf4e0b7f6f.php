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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_8904d239bbd33d039b293f3f2fd16ea0 extends Template
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
<div id=\"account-account\" class=\"container mx-auto\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 13
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 15
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 16
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 17
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 18
        echo ($context["payment_method"] ?? null);
        echo "\">";
        echo ($context["text_payment_method"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 19
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      <h2>
        ";
        // line 22
        echo ($context["text_my_orders"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 25
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 26
        echo ($context["subscription"] ?? null);
        echo "\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 27
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 28
        if (($context["reward"] ?? null)) {
            // line 29
            echo "          <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 31
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 32
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 34
        if (($context["affiliate"] ?? null)) {
            // line 35
            echo "        <h2>
          ";
            // line 36
            echo ($context["text_my_affiliate"] ?? null);
            echo "
        </h2>
        <ul class=\"list-unstyled\">
          ";
            // line 39
            if ( !($context["tracking"] ?? null)) {
                // line 40
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_add"] ?? null);
                echo "</a></li>
          ";
            } else {
                // line 42
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_edit"] ?? null);
                echo "</a></li>
            <li><a href=\"";
                // line 43
                echo ($context["tracking"] ?? null);
                echo "\">";
                echo ($context["text_tracking"] ?? null);
                echo "</a></li>
          ";
            }
            // line 45
            echo "        </ul>
      ";
        }
        // line 47
        echo "      <h2>
        ";
        // line 48
        echo ($context["text_my_newsletter"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 51
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 56,  222 => 54,  218 => 53,  211 => 51,  205 => 48,  202 => 47,  198 => 45,  191 => 43,  184 => 42,  176 => 40,  174 => 39,  168 => 36,  165 => 35,  163 => 34,  156 => 32,  149 => 31,  141 => 29,  139 => 28,  133 => 27,  127 => 26,  121 => 25,  115 => 22,  107 => 19,  101 => 18,  95 => 17,  89 => 16,  83 => 15,  78 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/account.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\account.twig");
    }
}
