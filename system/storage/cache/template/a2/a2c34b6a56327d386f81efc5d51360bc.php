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

/* admin_dir/view/template/common/filemanager_list.twig */
class __TwigTemplate_d1489f83c7ea76134309d7d268ca3e19 extends Template
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
        echo "<div class=\"row mb-3\">
  <div class=\"col-sm-5\">
    <a href=\"";
        // line 3
        echo ($context["parent"] ?? null);
        echo "\" id=\"button-parent\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_parent"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-level-up-alt\"></i></a>
    <a href=\"";
        // line 4
        echo ($context["refresh"] ?? null);
        echo "\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></a>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_upload"] ?? null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-folder\" class=\"btn btn-light\"><i class=\"fa-solid fa-folder\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
    <input type=\"hidden\" name=\"directory\" value=\"";
        // line 8
        echo ($context["directory"] ?? null);
        echo "\" id=\"input-directory\"/>
  </div>
  <div class=\"col-sm-7\">
    <div class=\"input-group\">
      <input type=\"text\" name=\"search\" value=\"";
        // line 12
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_search"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\">
      <button type=\"button\" id=\"button-search\" data-bs-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_search"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-search\"></i></button>
    </div>
  </div>
</div>
<div id=\"modal-folder\" class=\"row mb-3\" style=\"display: none;\">
  <div class=\"col-sm-12\">
    <div class=\"input-group\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 21
        echo ($context["entry_folder"] ?? null);
        echo "\" id=\"input-folder\" class=\"form-control\">
        <button type=\"button\" title=\"";
        // line 22
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
      </div>
    </div>
  </div>
</div>
<hr/>
<div class=\"row\">
  ";
        // line 29
        $context["path_row"] = 0;
        // line 30
        echo "
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 32
            echo "    <div class=\"col-sm-3 col-6 mb-3 text-center\">
      <div class=\"h-100\">
        <a href=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "href", [], "any", false, false, false, 34);
            echo "\" class=\"directory mb-1\"><i class=\"fa-solid fa-folder fa-5x\"></i></a>
        <div>
        <div class=\"form-check\">
          <label for=\"input-path-";
            // line 37
            echo ($context["path_row"] ?? null);
            echo "\" class=\"form-check-label mt-1\">";
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "name", [], "any", false, false, false, 37);
            echo "</label>
          <input type=\"checkbox\" name=\"path[]\" value=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "path", [], "any", false, false, false, 38);
            echo "\" id=\"input-path-";
            echo ($context["path_row"] ?? null);
            echo "\" class=\"form-check-input\"/>
        </div>
        </div>
      </div>
    </div>
    ";
            // line 43
            $context["path_row"] = (($context["path_row"] ?? null) + 1);
            // line 44
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 47
            echo "    <div class=\"col-sm-3 col-6 mb-3 text-center\">
      <div class=\"h-100\">
        <a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 49);
            echo "\" class=\"thumbnail mb-1\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 49);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 49);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 49);
            echo "\" class=\"img-thumbnail\"/></a>
        <div>
          <div class=\"form-check\">
            <label for=\"input-path-";
            // line 52
            echo ($context["path_row"] ?? null);
            echo "\" class=\"form-check-label mt-1\">";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 52);
            echo "</label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 53);
            echo "\" id=\"input-path-";
            echo ($context["path_row"] ?? null);
            echo "\" class=\"form-check-input\"/>
          </div>
        </div>
      </div>
    </div>
    ";
            // line 58
            $context["path_row"] = (($context["path_row"] ?? null) + 1);
            // line 59
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
</div>
";
        // line 62
        if (($context["pagination"] ?? null)) {
            // line 63
            echo "  <div class=\"modal-footer\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/common/filemanager_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 63,  197 => 62,  193 => 60,  187 => 59,  185 => 58,  175 => 53,  169 => 52,  157 => 49,  153 => 47,  149 => 46,  146 => 45,  140 => 44,  138 => 43,  128 => 38,  122 => 37,  116 => 34,  112 => 32,  108 => 31,  105 => 30,  103 => 29,  93 => 22,  89 => 21,  78 => 13,  72 => 12,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/common/filemanager_list.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\common\\filemanager_list.twig");
    }
}
