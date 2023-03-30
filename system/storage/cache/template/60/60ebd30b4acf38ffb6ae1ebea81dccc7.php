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

/* admin_dir/view/template/marketplace/marketplace_comment.twig */
class __TwigTemplate_d3860817d56fa583c659236359e865c2 extends Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "\t\t<div id=\"comment-";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 3);
                echo "\" class=\"media\">
\t\t\t<img src=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 4);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                echo "\" class=\"mr-3 rounded-circle\"/>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h5 class=\"mt-0\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 6);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 6);
                echo "</span></h5>
\t\t\t\t<p>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 7);
                echo "</p>
\t\t\t\t<div class=\"reply\">
\t\t\t\t\t<div> ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 11
                        echo "\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<img src=\"";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "image", [], "any", false, false, false, 12);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 12);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 12);
                        echo "\" class=\"mr-3 rounded-circle\"/>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mt-0\">";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 14);
                        echo " <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 14);
                        echo "</h5>
\t\t\t\t\t\t\t\t\t<p>";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 15);
                        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "\t\t\t\t\t\t\t<div class=\"text-center\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 20);
                        echo "\" class=\"btn btn-block\">";
                        echo ($context["text_more"] ?? null);
                        echo "</a></div>
\t\t\t\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t\t\t\t";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "refresh", [], "any", false, false, false, 22);
                echo "\" class=\"reply-refresh hide\">";
                echo ($context["text_refresh"] ?? null);
                echo "</a></div>
\t\t\t\t</div>
\t\t\t\t<p class=\"text-end\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-link btn-sm\">";
                // line 25
                echo ($context["button_reply"] ?? null);
                echo "</button>
\t\t\t\t</p>
\t\t\t\t<div class=\"reply-input-box\" style=\"display: none;\">
\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"input-comment-";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 31);
                echo "\">";
                echo ($context["text_comment_add"] ?? null);
                echo "</label> <textarea name=\"comment\" placeholder=\"";
                echo ($context["text_write"] ?? null);
                echo "\" id=\"input-comment-";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 31);
                echo "\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-end\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "add", [], "any", false, false, false, 33);
                echo "\" class=\"btn btn-primary btn-sm\">";
                echo ($context["button_comment"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t<br/>
\t<div class=\"text-center\">";
            // line 41
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 41,  161 => 40,  146 => 33,  135 => 31,  126 => 25,  115 => 22,  107 => 20,  104 => 19,  94 => 15,  88 => 14,  79 => 12,  76 => 11,  71 => 10,  69 => 9,  64 => 7,  58 => 6,  49 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/marketplace/marketplace_comment.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\marketplace\\marketplace_comment.twig");
    }
}
