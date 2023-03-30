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

/* admin_dir/view/template/design/banner_form.twig */
class __TwigTemplate_47d96dcdf363107c2ed75cd6964fd4aa extends Template
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
        <button type=\"submit\" form=\"form-banner\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-banner\" action=\"";
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
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 33
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
          <br/>
          <ul class=\"nav nav-tabs\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            echo "              <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 40)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 40);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            echo "</a></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "          </ul>
          <div class=\"tab-content\">
            ";
        // line 44
        $context["image_row"] = 0;
        // line 45
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "              <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) {
                echo " active";
            }
            echo "\">
                <table id=\"image-";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left required\">";
            // line 50
            echo ($context["entry_title"] ?? null);
            echo "</td>
                      <td class=\"text-start\">";
            // line 51
            echo ($context["entry_link"] ?? null);
            echo "</td>
                      <td class=\"text-center\">";
            // line 52
            echo ($context["entry_image"] ?? null);
            echo "</td>
                      <td class=\"text-end\">";
            // line 53
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 58
            if ((($__internal_compile_0 = ($context["banner_images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null)) {
                // line 59
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["banner_images"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
                    // line 60
                    echo "
                        <tr id=\"image-row-";
                    // line 61
                    echo ($context["image_row"] ?? null);
                    echo "\">

                          <td class=\"text-start\">
                            <input type=\"text\" name=\"banner_image[";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "title", [], "any", false, false, false, 64);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" id=\"input-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "-title\" class=\"form-control\"/>
                            <div id=\"error-image-";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "-title\" class=\"invalid-feedback\"></div>
                          </td>

                          <td class=\"text-start\" style=\"width: 30%;\"><input type=\"text\" name=\"banner_image[";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "link", [], "any", false, false, false, 68);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" id=\"input-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "-link\" class=\"form-control\"/></td>
                          <td class=\"text-center\">

                            <div class=\"card\">

                              <img src=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 73);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"card-img-top\"/>
                              <input type=\"hidden\" name=\"banner_image[";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 74);
                    echo "\" id=\"input-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "-image\"/>

                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-";
                    // line 77
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-";
                    // line 78
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                              </div>

                            </div>

                          </td>
                          <td class=\"text-end\" style=\"width: 10%;\"><input type=\"text\" name=\"banner_image[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 84);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" id=\"input-image-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
                    echo "-";
                    echo ($context["image_row"] ?? null);
                    echo "-sort-order\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#image-row-";
                    // line 85
                    echo ($context["image_row"] ?? null);
                    echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>

                        ";
                    // line 88
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 89
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                    ";
            }
            // line 91
            echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-banner-";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" data-language=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "          </div>
          <input type=\"hidden\" name=\"banner_id\" value=\"";
        // line 102
        echo ($context["banner_id"] ?? null);
        echo "\" id=\"input-banner-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 109
        echo ($context["image_row"] ?? null);
        echo ";

\$('button[id^=\\'button-banner\\']').on('click', function () {
    var element = this;

    html = '<tr id=\"image-row-' + image_row + '\">';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 115
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"form-control\"/>';
    html += '    <div id=\"error-image-' + \$(element).attr('data-language') + '-' + image_row + '-title\" class=\"invalid-feedback\"></div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 117
        echo ($context["entry_link"] ?? null);
        echo "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-link\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-center\">';
    html += '    <div class=\"card\">';
    html += '      <img src=\"";
        // line 120
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/>';
    html += '      <input type=\"hidden\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][image]\" value=\"\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '\"/>';
    html += '      <div class=\"card-body\">';
    html += '        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 123
        echo ($context["button_edit"] ?? null);
        echo "</button>';
    html += '        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image-' + \$(element).attr('data-language') + '-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + \$(element).attr('data-language') + '-' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 124
        echo ($context["button_clear"] ?? null);
        echo "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"banner_image[' + \$(element).attr('data-language') + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 128
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-image-' + \$(element).attr('data-language') + '-' + image_row + '-sort-order\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 129
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#image-' + \$(element).attr('data-language') + ' tbody').append(html);

    image_row++;
});
//--></script>
";
        // line 137
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/design/banner_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 137,  453 => 129,  449 => 128,  442 => 124,  438 => 123,  430 => 120,  424 => 117,  419 => 115,  410 => 109,  400 => 102,  397 => 101,  373 => 95,  367 => 91,  364 => 90,  358 => 89,  356 => 88,  348 => 85,  334 => 84,  319 => 78,  309 => 77,  295 => 74,  285 => 73,  267 => 68,  259 => 65,  245 => 64,  239 => 61,  236 => 60,  231 => 59,  229 => 58,  221 => 53,  217 => 52,  213 => 51,  209 => 50,  203 => 47,  194 => 46,  176 => 45,  174 => 44,  170 => 42,  143 => 40,  126 => 39,  115 => 33,  108 => 29,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/design/banner_form.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\design\\banner_form.twig");
    }
}
