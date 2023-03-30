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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_02ad692a6588e421a4a7dd32c3a358da extends Template
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
<div id=\"checkout-cart\" class=\"container\">
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
  ";
        // line 8
        if (($context["attention"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["attention"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        if (($context["weight"] ?? null)) {
            echo " (";
            echo ($context["weight"] ?? null);
            echo ")";
        }
        echo "</h1>
      <div id=\"shopping-cart\">";
        // line 20
        echo ($context["list"] ?? null);
        echo "</div>
      ";
        // line 21
        if (($context["modules"] ?? null)) {
            // line 22
            echo "        <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 23
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        <div id=\"accordion\" class=\"accordion\">
          ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 26
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "      <br/>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-start\"><a href=\"";
        // line 32
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"float-end\"><a href=\"";
        // line 33
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 35
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 36
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(button).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(button).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            \$('#shopping-cart').load('index.php?route=checkout/cart|list&language=";
        // line 76
        echo ($context["language"] ?? null);
        echo "', {}, function () {
                \$('#header-cart').load('index.php?route=common/cart|info&language=";
        // line 77
        echo ($context["language"] ?? null);
        echo "');
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 86
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  206 => 77,  202 => 76,  159 => 36,  155 => 35,  148 => 33,  142 => 32,  138 => 30,  134 => 28,  125 => 26,  121 => 25,  116 => 23,  111 => 22,  109 => 21,  105 => 20,  96 => 19,  92 => 18,  87 => 17,  81 => 15,  78 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "E:\\xampp\\htdocs\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
