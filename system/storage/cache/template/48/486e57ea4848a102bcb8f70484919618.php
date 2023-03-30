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

/* admin_dir/view/template/extension/theme.twig */
class __TwigTemplate_ab7115a425aeba9be88bff78bf3a806d extends Template
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
        echo ($context["promotion"] ?? null);
        echo "
<fieldset>
  <legend>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-start\">";
        // line 8
        echo ($context["column_name"] ?? null);
        echo "</td>
          <td class=\"text-start\">";
        // line 9
        echo ($context["column_status"] ?? null);
        echo "</td>
          <td class=\"text-end\" style=\"min-width: 103px;\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["extensions"] ?? null)) {
            // line 15
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 16
                echo "            <tr>
              <td class=\"text-start\" colspan=\"2\"><b>";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 17);
                echo "</b></td>
              <td class=\"text-end\">";
                // line 18
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 19);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></a>
                ";
                } else {
                    // line 21
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 21);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a>
                ";
                }
                // line 22
                echo "</td>
            </tr>
            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "store", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                        // line 26
                        echo "                <tr>
                  <td class=\"text-start\">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 27);
                        echo "</td>
                  <td class=\"text-start\">";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "status", [], "any", false, false, false, 28);
                        echo "</td>
                  <td class=\"text-end\"><a href=\"";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "edit", [], "any", false, false, false, 29);
                        echo "\" data-bs-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
                </tr>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        } else {
            // line 35
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 36
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 39
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/extension/theme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 39,  145 => 36,  142 => 35,  139 => 34,  133 => 33,  130 => 32,  119 => 29,  115 => 28,  111 => 27,  108 => 26,  103 => 25,  101 => 24,  97 => 22,  89 => 21,  81 => 19,  79 => 18,  75 => 17,  72 => 16,  67 => 15,  65 => 14,  58 => 10,  54 => 9,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/extension/theme.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\extension\\theme.twig");
    }
}
