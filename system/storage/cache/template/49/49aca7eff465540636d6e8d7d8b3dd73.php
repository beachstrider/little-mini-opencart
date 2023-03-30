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

/* admin_dir/view/template/marketplace/marketplace_extension.twig */
class __TwigTemplate_194a2aa110924a333304dfb4a057e9d1 extends Template
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
    <td>";
        // line 3
        echo ($context["text_name"] ?? null);
        echo "</td>
    <td>";
        // line 4
        echo ($context["text_date_added"] ?? null);
        echo "</td>
    <td class=\"text-end\">";
        // line 5
        echo ($context["text_action"] ?? null);
        echo "</td>
  </thead>
  <tbody>
    ";
        // line 8
        if (($context["downloads"] ?? null)) {
            // line 9
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 10
                echo "        <tr>
          <td>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 11);
                echo "</td>
          <td>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 12);
                echo "</td>
          <td class=\"text-end\">
            <div class=\"dropdown\">
              <div class=\"btn-group\">
                <button type=\"button\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16);
                echo "\" class=\"btn btn-primary\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16)) {
                    echo " disabled";
                }
                echo "><i class=\"fa-solid fa-download\"></i> ";
                echo ($context["button_download"] ?? null);
                echo "</button>
                <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-outline-dark dropdown-toggle dropdown-toggle-split\"><i class=\"fa-solid fa-caret-down\"></i></button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i> ";
                echo ($context["text_install"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i> ";
                echo ($context["text_uninstall"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19);
                echo "\" class=\"dropdown-item";
                if ( !twig_get_attribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19)) {
                    echo " disabled";
                }
                echo "\"><i class=\"fa-regular fa-trash-can fa-fw\"></i> ";
                echo ($context["text_delete"] ?? null);
                echo "</a>
                </div>
              </div>
            </div>
          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "      <tr>
        <td colspan=\"3\" class=\"text-center\">";
            // line 28
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
    ";
        }
        // line 31
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/marketplace/marketplace_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  129 => 28,  126 => 27,  123 => 26,  88 => 19,  76 => 16,  69 => 12,  65 => 11,  62 => 10,  57 => 9,  55 => 8,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/marketplace/marketplace_extension.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\marketplace\\marketplace_extension.twig");
    }
}
