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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_bc83aa0ebb5e07b82ceadfa4e23985fb extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\">";
            // line 6
            echo ($context["column_image"] ?? null);
            echo "</td>
          <td class=\"text-start\">";
            // line 7
            echo ($context["column_name"] ?? null);
            echo "</td>
          <td class=\"text-start\">";
            // line 8
            echo ($context["column_model"] ?? null);
            echo "</td>
          <td class=\"text-end\">";
            // line 9
            echo ($context["column_stock"] ?? null);
            echo "</td>
          <td class=\"text-end\">";
            // line 10
            echo ($context["column_price"] ?? null);
            echo "</td>
          <td class=\"text-end\">";
            // line 11
            echo ($context["column_action"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "          <tr>
            <td class=\"text-center\">";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\"/></a>";
                }
                echo "</td>
            <td class=\"text-start\"><a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "</a></td>
            <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 19);
                echo "</td>
            <td class=\"text-end\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 20);
                echo "</td>
            <td class=\"text-end\">
              ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                <div class=\"price\">
                  ";
                    // line 24
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                        echo "
                  ";
                    } else {
                        // line 27
                        echo "                    <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                        echo "</s>
                  ";
                    }
                    // line 29
                    echo "                </div>
              ";
                }
                // line 31
                echo "            </td>
            <td class=\"text-end\">
              <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                // line 33
                echo ($context["wishlist"] ?? null);
                echo "\" data-oc-target=\"#wishlist\">
                <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 34);
                echo "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 34);
                echo "\"/>
                <button type=\"submit\" formaction=\"";
                // line 35
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-cart-shopping fa-fw\"></i></button>
                <button type=\"submit\" formaction=\"";
                // line 36
                echo ($context["remove"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark fa-fw\"></i></button>
              </form>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </tbody>
    </table>
  </div>
";
        } else {
            // line 45
            echo "  <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/wishlist_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 45,  166 => 41,  153 => 36,  147 => 35,  141 => 34,  137 => 33,  133 => 31,  129 => 29,  121 => 27,  115 => 25,  113 => 24,  110 => 23,  108 => 22,  103 => 20,  99 => 19,  93 => 18,  79 => 17,  76 => 16,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/wishlist_list.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\account\\wishlist_list.twig");
    }
}
