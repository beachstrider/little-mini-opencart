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

/* install/view/template/install/step_3.twig */
class __TwigTemplate_6d1f5b1c78725e333d134be16a783d4a extends Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-right\">";
        // line 5
        echo ($context["language"] ?? null);
        echo "</div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
  </div>
  <div class=\"container\">
    ";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 13
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-cogs\"></i> ";
        // line 14
        echo ($context["text_step_3"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 16
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <fieldset>
            <legend>";
        // line 18
        echo ($context["text_db_connection"] ?? null);
        echo "</legend>
            <div class=\"row\">
              <div class=\"col-md-4  order-md-2\">
                <div class=\"alert alert-info\">
                  <p>";
        // line 22
        echo ($context["text_help"] ?? null);
        echo "</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">";
        // line 24
        echo ($context["text_cpanel"] ?? null);
        echo "</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/115004263014-How-to-create-a-database-in-Plesk\" target=\"_blank\">";
        // line 25
        echo ($context["text_plesk"] ?? null);
        echo "</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"form-row\">
                  <div class=\"form-group col\">
                    <label for=\"input-db-driver\" class=\"col-form-label\">";
        // line 32
        echo ($context["entry_db_driver"] ?? null);
        echo "</label> <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 34
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 34);
            echo "\"";
            if ((($context["db_driver"] ?? null) == twig_get_attribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 34))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 34);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </select>
                    ";
        // line 37
        if (($context["error_db_driver"] ?? null)) {
            // line 38
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_driver"] ?? null);
            echo "</div>
                    ";
        }
        // line 40
        echo "                  </div>
                  <div class=\"form-group col required\">
                    <label for=\"input-db-hostname\" class=\"col-form-label\">";
        // line 42
        echo ($context["entry_db_hostname"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_hostname\" value=\"";
        echo ($context["db_hostname"] ?? null);
        echo "\" id=\"input-db-hostname\" class=\"form-control\"/>
                    ";
        // line 43
        if (($context["error_db_hostname"] ?? null)) {
            // line 44
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_hostname"] ?? null);
            echo "</div>
                    ";
        }
        // line 46
        echo "                  </div>
                </div>
                <div class=\"form-row\">
                  <div class=\"form-group col required\">
                    <label for=\"input-db-username\" class=\"col-form-label\">";
        // line 50
        echo ($context["entry_db_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_username\" value=\"";
        echo ($context["db_username"] ?? null);
        echo "\" id=\"input-db-username\" class=\"form-control\"/>
                    ";
        // line 51
        if (($context["error_db_username"] ?? null)) {
            // line 52
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_username"] ?? null);
            echo "</div>
                    ";
        }
        // line 54
        echo "                  </div>
                  <div class=\"form-group col\">
                    <label for=\"input-db-password\" class=\"col-form-label\">";
        // line 56
        echo ($context["entry_db_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"db_password\" value=\"";
        echo ($context["db_password"] ?? null);
        echo "\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                </div>
                <div class=\"form-row\">
                  <div class=\"form-group col-6 required\">
                    <label for=\"input-db-database\" class=\"col-form-label\">";
        // line 61
        echo ($context["entry_db_database"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_database\" value=\"";
        echo ($context["db_database"] ?? null);
        echo "\" id=\"input-db-database\" class=\"form-control\"/>
                    ";
        // line 62
        if (($context["error_db_database"] ?? null)) {
            // line 63
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_database"] ?? null);
            echo "</div>
                    ";
        }
        // line 65
        echo "                  </div>
                  <div class=\"form-group col-3\">
                    <label for=\"input-db-prefix\" class=\"col-form-label\">";
        // line 67
        echo ($context["entry_db_prefix"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_prefix\" value=\"";
        echo ($context["db_prefix"] ?? null);
        echo "\" id=\"input-db-prefix\" class=\"form-control\"/>
                    ";
        // line 68
        if (($context["error_db_prefix"] ?? null)) {
            // line 69
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_prefix"] ?? null);
            echo "</div>
                    ";
        }
        // line 71
        echo "                  </div>
                  <div class=\"form-group col-3 required\">
                    <label for=\"input-db-port\" class=\"col-form-label\">";
        // line 73
        echo ($context["entry_db_port"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_port\" value=\"";
        echo ($context["db_port"] ?? null);
        echo "\" id=\"input-db-port\" class=\"form-control\"/>
                    ";
        // line 74
        if (($context["error_db_port"] ?? null)) {
            // line 75
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_port"] ?? null);
            echo "</div>
                    ";
        }
        // line 77
        echo "                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 83
        echo ($context["text_db_administration"] ?? null);
        echo "</legend>
            <div class=\"form-row\">
              <div class=\"form-group col required\">
                <label for=\"input-username\" class=\"col-form-label\">";
        // line 86
        echo ($context["entry_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"username\" value=\"";
        echo ($context["username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                ";
        // line 87
        if (($context["error_username"] ?? null)) {
            // line 88
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
                ";
        }
        // line 90
        echo "              </div>
              <div class=\"form-group col required\">
                <label for=\"input-password\" class=\"col-form-label\">";
        // line 92
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"text\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                ";
        // line 93
        if (($context["error_password"] ?? null)) {
            // line 94
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                ";
        }
        // line 96
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label for=\"input-email\" class=\"col-form-label\">";
        // line 99
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 100
        if (($context["error_email"] ?? null)) {
            // line 101
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 103
        echo "            </div>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"";
        // line 106
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
            <div class=\"col text-right\"><input type=\"submit\" value=\"";
        // line 107
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 114
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/view/template/install/step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 114,  314 => 107,  308 => 106,  303 => 103,  297 => 101,  295 => 100,  289 => 99,  284 => 96,  278 => 94,  276 => 93,  270 => 92,  266 => 90,  260 => 88,  258 => 87,  252 => 86,  246 => 83,  238 => 77,  232 => 75,  230 => 74,  224 => 73,  220 => 71,  214 => 69,  212 => 68,  206 => 67,  202 => 65,  196 => 63,  194 => 62,  188 => 61,  178 => 56,  174 => 54,  168 => 52,  166 => 51,  160 => 50,  154 => 46,  148 => 44,  146 => 43,  140 => 42,  136 => 40,  130 => 38,  128 => 37,  125 => 36,  110 => 34,  106 => 33,  102 => 32,  92 => 25,  88 => 24,  83 => 22,  76 => 18,  71 => 16,  66 => 14,  63 => 13,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/install/step_3.twig", "/home/xttl3xy3mfcj/public_html/install/view/template/install/step_3.twig");
    }
}
