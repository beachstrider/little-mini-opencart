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

/* admin_dir/view/template/common/footer.twig */
class __TwigTemplate_6b9545d06511dee256efb1101f759c75 extends Template
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
        echo "<footer id=\"footer\">";
        echo ($context["text_footer"] ?? null);
        echo "<br/>";
        echo ($context["text_version"] ?? null);
        echo "</footer></div>
<script src=\"";
        // line 2
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/common/footer.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\common\\footer.twig");
    }
}
