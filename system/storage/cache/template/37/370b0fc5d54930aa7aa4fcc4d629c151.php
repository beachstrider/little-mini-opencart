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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_485c31a6408d397a59fa3a55e8cf3706 extends Template
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
<div id=\"product-search\" class=\"container\">
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
      <div class=\"row\">
        <div class=\"col\"><label for=\"input-search\" class=\"col-form-label\">";
        // line 12
        echo ($context["entry_search"] ?? null);
        echo "</label></div>
      </div>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control mb-1\"/>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"";
        // line 18
        if (($context["description"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-description\" class=\"form-check-label\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
          </div>
        </div>
        <div class=\"col\">
          <select name=\"category_id\" id=\"input-category\" class=\"form-select mb-1\">
            <option value=\"0\">";
        // line 23
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 25
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 25);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 25) == ($context["category_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 25);
            echo "</option>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 27
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 27);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 27) == ($context["category_id"] ?? null))) {
                    echo " selected";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 27);
                echo "</option>
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 29
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                        echo " selected";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 29);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          </select>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"";
        // line 35
        if (($context["sub_category"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-sub-category\" class=\"form-check-label\">";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 41
        echo ($context["button_search"] ?? null);
        echo "</button>
        </div>
      </div>
      <hr/>
      <h2>";
        // line 45
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 46
        if (($context["products"] ?? null)) {
            // line 47
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 50
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 55
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 56
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-sort\" class=\"input-group-text\">";
            // line 62
            echo ($context["text_sort"] ?? null);
            echo "</label> <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 64
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 64);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 64) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 64);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group\">
                <label for=\"input-limit\" class=\"input-group-text\">";
            // line 73
            echo ($context["text_limit"] ?? null);
            echo "</label> <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                  ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 75);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 75) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 75);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 88
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 89
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 92
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 94
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 95
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search&language=";
        // line 99
        echo ($context["language"] ?? null);
        echo "';

    var search = \$('#input-search').prop('value');

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var filter_description = \$('#input-description:checked').prop('value');

    if (filter_description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function (e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function () {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 140
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 140,  331 => 99,  324 => 95,  319 => 94,  313 => 92,  307 => 89,  303 => 88,  299 => 86,  290 => 84,  286 => 83,  278 => 77,  263 => 75,  259 => 74,  255 => 73,  246 => 66,  231 => 64,  227 => 63,  223 => 62,  214 => 56,  210 => 55,  200 => 50,  195 => 47,  193 => 46,  189 => 45,  182 => 41,  169 => 35,  165 => 33,  159 => 32,  153 => 31,  138 => 29,  134 => 28,  123 => 27,  119 => 26,  108 => 25,  104 => 24,  100 => 23,  88 => 18,  81 => 16,  74 => 12,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/search.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\product\\search.twig");
    }
}
