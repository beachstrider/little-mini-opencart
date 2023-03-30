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

/* install/view/template/common/language.twig */
class __TwigTemplate_ddffe1589aeb24e130e8b386172ce44d extends Template
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
        echo "<div class=\"float-right dropdown\">
  <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">";
        // line 2
        echo ($context["text_language"] ?? null);
        echo " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
  <div class=\"dropdown-menu dropdown-menu-right\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5
            echo "      <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 5);
            echo "\" class=\"dropdown-item";
            if (($context["language"] == ($context["code"] ?? null))) {
                echo " active";
            }
            echo "\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5);
            echo ".png\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "text", [], "any", false, false, false, 5);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "install/view/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/common/language.twig", "E:\\xampp\\htdocs\\install\\view\\template\\common\\language.twig");
    }
}
