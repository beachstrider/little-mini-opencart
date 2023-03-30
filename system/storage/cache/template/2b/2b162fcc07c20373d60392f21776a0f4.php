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

/* catalog/view/template/account/reward.twig */
class __TwigTemplate_ddcd17d2b032e2a9c322d80e18ad24e6 extends Template
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
<div id=\"account-reward\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 11
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th class=\"text-start\">";
        // line 16
        echo ($context["column_date_added"] ?? null);
        echo "</th>
              <th class=\"text-start\">";
        // line 17
        echo ($context["column_description"] ?? null);
        echo "</th>
              <th class=\"text-end\">";
        // line 18
        echo ($context["column_points"] ?? null);
        echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 22
        if (($context["rewards"] ?? null)) {
            // line 23
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 24
                echo "                <tr>
                  <td class=\"text-start\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 25);
                echo "</td>
                  <td class=\"text-start\">";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 26)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 26);
                    echo "</a> ";
                } else {
                    // line 27
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 27);
                    echo "
                    ";
                }
                // line 28
                echo "</td>
                  <td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 29);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "              <tr>
                <td class=\"text-center\" colspan=\"3\">";
            // line 34
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 37
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-start\">";
        // line 41
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-end\">";
        // line 42
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 45
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 47
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 48
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 50
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 50,  177 => 48,  173 => 47,  166 => 45,  160 => 42,  156 => 41,  150 => 37,  144 => 34,  141 => 33,  138 => 32,  129 => 29,  126 => 28,  120 => 27,  112 => 26,  108 => 25,  105 => 24,  100 => 23,  98 => 22,  91 => 18,  87 => 17,  83 => 16,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/reward.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\reward.twig");
    }
}
