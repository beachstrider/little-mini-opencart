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

/* admin_dir/view/template/common/login.twig */
class __TwigTemplate_e04367f0b37cbad563e6dabc0dd12f8b extends Template
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
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-lock\"></i> ";
        // line 9
        echo ($context["text_login"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form id=\"form-login\" action=\"";
        // line 11
        echo ($context["login"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
              ";
        // line 12
        if (($context["error_warning"] ?? null)) {
            // line 13
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"Dfa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
              ";
        }
        // line 15
        echo "              ";
        if (($context["success"] ?? null)) {
            // line 16
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
              ";
        }
        // line 18
        echo "              <div class=\"mb-3\">
                <label for=\"input-username\" class=\"form-label\">";
        // line 19
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-user\"></i></div>
                  <input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 22
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"form-label\">";
        // line 26
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-lock\"></i></div>
                  <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 29
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                <div class=\"mb-3\"><a href=\"";
        // line 31
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-key\"></i> ";
        // line 34
        echo ($context["button_login"] ?? null);
        echo "</button>
              </div>
              ";
        // line 36
        if (($context["redirect"] ?? null)) {
            // line 37
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
              ";
        }
        // line 39
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 46
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  122 => 39,  116 => 37,  114 => 36,  109 => 34,  101 => 31,  96 => 29,  90 => 26,  83 => 22,  77 => 19,  74 => 18,  68 => 16,  65 => 15,  59 => 13,  57 => 12,  53 => 11,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/common/login.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\common\\login.twig");
    }
}
