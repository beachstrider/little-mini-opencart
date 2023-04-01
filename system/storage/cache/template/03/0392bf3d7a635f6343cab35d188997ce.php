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

/* admin/view/template/sale/returns_history.twig */
class __TwigTemplate_5a1ffd26312b0cd183e716541d92cbb0 extends Template
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
        echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
      <td class=\"text-start\">";
        // line 4
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      <td class=\"text-start\">";
        // line 5
        echo ($context["column_comment"] ?? null);
        echo "</td>
      <td class=\"text-start\">";
        // line 6
        echo ($context["column_status"] ?? null);
        echo "</td>
      <td class=\"text-start\">";
        // line 7
        echo ($context["column_notify"] ?? null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
    ";
        // line 11
        if (($context["histories"] ?? null)) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 13
                echo "        <tr>
          <td class=\"text-start\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 14);
                echo "</td>
          <td class=\"text-start\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 15);
                echo "</td>
          <td class=\"text-start\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 16);
                echo "</td>
          <td class=\"text-start\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["history"], "notify", [], "any", false, false, false, 17);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 22
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
    ";
        }
        // line 25
        echo "  </tbody>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 28
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 29
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/returns_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  109 => 28,  104 => 25,  98 => 22,  95 => 21,  92 => 20,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/returns_history.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\sale\\returns_history.twig");
    }
}
