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

/* extension/opencart/admin/view/template/module/banner.twig */
class __TwigTemplate_5754d68ac78e7922b611f182ad2ecd6b extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-banner\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_banner"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"banner_id\" id=\"input-banner\" class=\"form-select\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 33
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 33);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 33) == ($context["banner_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 33);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-effect\" class=\"col-sm-2 col-form-label\">";
        // line 39
        echo ($context["entry_effect"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"effect\" id=\"input-effect\" class=\"form-select\">
                <option value=\"slide\"";
        // line 42
        if ((($context["effect"] ?? null) == "slide")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_slide"] ?? null);
        echo "</option>
                <option value=\"fade\"";
        // line 43
        if ((($context["effect"] ?? null) == "fade")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_fade"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-items\" class=\"col-sm-2 col-form-label\">";
        // line 48
        echo ($context["entry_items"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"items\" value=\"";
        // line 50
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_items"] ?? null);
        echo "\" id=\"input-items\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">";
        // line 51
        echo ($context["help_items"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-controls\" class=\"col-sm-2 col-form-label\">";
        // line 55
        echo ($context["entry_controls"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"controls\" id=\"input-controls\" class=\"form-select\">
                <option value=\"1\"";
        // line 58
        if ((($context["controls"] ?? null) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_yes"] ?? null);
        echo "</option>
                <option value=\"0\"";
        // line 59
        if ((($context["controls"] ?? null) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_no"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-indicators\" class=\"col-sm-2 col-form-label\">";
        // line 64
        echo ($context["entry_indicators"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"indicators\" id=\"input-indicators\" class=\"form-select\">
                <option value=\"1\"";
        // line 67
        if ((($context["indicators"] ?? null) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_yes"] ?? null);
        echo "</option>
                <option value=\"0\"";
        // line 68
        if ((($context["indicators"] ?? null) == 0)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_no"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-interval\" class=\"col-sm-2 col-form-label\">";
        // line 73
        echo ($context["entry_interval"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"interval\" value=\"";
        // line 75
        echo ($context["interval"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_interval"] ?? null);
        echo "\" id=\"input-interval\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 79
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 81
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 86
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 88
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 97
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 106
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 106,  286 => 97,  279 => 93,  269 => 88,  264 => 86,  254 => 81,  249 => 79,  240 => 75,  235 => 73,  223 => 68,  215 => 67,  209 => 64,  197 => 59,  189 => 58,  183 => 55,  176 => 51,  170 => 50,  165 => 48,  153 => 43,  145 => 42,  139 => 39,  133 => 35,  118 => 33,  114 => 32,  108 => 29,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/module/banner.twig", "E:\\xampp\\htdocs\\extension\\opencart\\admin\\view\\template\\module\\banner.twig");
    }
}
