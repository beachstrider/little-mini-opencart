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

/* admin/view/template/catalog/subscription_plan_form.twig */
class __TwigTemplate_0cb6bde76e27b8a7e76475e1ab9c8a0a extends Template
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
        <button type=\"submit\" form=\"form-subscription-plan\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-subscription-plan\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 25
            echo "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 26);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 26);
            echo "\"/></div>
                  <input type=\"text\" name=\"subscription_plan_description[";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["subscription_plan_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["subscription_plan_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null), "name", [], "any", false, false, false, 27)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            echo "\" class=\"form-control\"/>
                  <div id=\"error-name-";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            echo "\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>
          </div>
          <fieldset>
            <legend>";
        // line 34
        echo ($context["text_trial"] ?? null);
        echo "</legend>
            <div class=\"row mb-3\">
              <label for=\"input-trial-price\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_trial_price"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_price\" value=\"";
        // line 38
        echo ($context["trial_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_price"] ?? null);
        echo "\" id=\"input-trial-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-duration\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_trial_duration"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_duration\" value=\"";
        // line 44
        echo ($context["trial_duration"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_duration"] ?? null);
        echo "\" id=\"input-trial-duration\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 45
        echo ($context["help_duration"] ?? null);
        echo "</div>
                <div id=\"error-trial-duration\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-cycle\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_trial_cycle"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_cycle\" value=\"";
        // line 52
        echo ($context["trial_cycle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_cycle"] ?? null);
        echo "\" id=\"input-trial-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 53
        echo ($context["help_cycle"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-frequency\" class=\"col-sm-2 col-form-label\">";
        // line 57
        echo ($context["entry_trial_frequency"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_frequency\" id=\"input-trial-frequency\" class=\"form-select\">
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 61
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 61);
            echo "\"";
            if ((($context["trial_frequency"] ?? null) == twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 61))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 61);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </select>
                <div class=\"form-text\">";
        // line 64
        echo ($context["help_frequency"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-status\" class=\"col-sm-2 col-form-label\">";
        // line 68
        echo ($context["entry_trial_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_status\" id=\"input-trial-status\" class=\"form-select\">
                  <option value=\"1\"";
        // line 71
        if (($context["trial_status"] ?? null)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                  <option value=\"0\"";
        // line 72
        if ( !($context["trial_status"] ?? null)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 78
        echo ($context["text_subscription"] ?? null);
        echo "</legend>
            <div class=\"row mb-3\">
              <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 80
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"price\" value=\"";
        // line 82
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-duration\" class=\"col-sm-2 col-form-label\">";
        // line 86
        echo ($context["entry_duration"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"duration\" value=\"";
        // line 88
        echo ($context["duration"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_duration"] ?? null);
        echo "\" id=\"input-duration\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 89
        echo ($context["help_duration"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-cycle\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_cycle"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"cycle\" value=\"";
        // line 95
        echo ($context["cycle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cycle"] ?? null);
        echo "\" id=\"input-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 96
        echo ($context["help_cycle"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-frequency\" class=\"col-sm-2 col-form-label\">";
        // line 100
        echo ($context["entry_frequency"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"frequency\" id=\"input-frequency\" class=\"form-select\">
                  ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 104
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 104);
            echo "\"";
            if ((($context["frequency"] ?? null) == twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 104))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 104);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </select>
                <div class=\"form-text\">";
        // line 107
        echo ($context["help_frequency"] ?? null);
        echo "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 111
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 115
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 120
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 122
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"subscription_plan_id\" value=\"";
        // line 126
        echo ($context["subscription_plan_id"] ?? null);
        echo "\" id=\"input-subscription-plan-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 132
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/subscription_plan_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 132,  374 => 126,  365 => 122,  360 => 120,  350 => 115,  343 => 111,  336 => 107,  333 => 106,  318 => 104,  314 => 103,  308 => 100,  301 => 96,  295 => 95,  290 => 93,  283 => 89,  277 => 88,  272 => 86,  263 => 82,  258 => 80,  253 => 78,  240 => 72,  232 => 71,  226 => 68,  219 => 64,  216 => 63,  201 => 61,  197 => 60,  191 => 57,  184 => 53,  178 => 52,  173 => 50,  165 => 45,  159 => 44,  154 => 42,  145 => 38,  140 => 36,  135 => 34,  130 => 31,  121 => 28,  111 => 27,  105 => 26,  102 => 25,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/subscription_plan_form.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\catalog\\subscription_plan_form.twig");
    }
}
