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

/* admin/view/template/catalog/category_form.twig */
class __TwigTemplate_4e13fac7cab44d8fd9fe7c23d43bd3f0 extends Template
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
      <div class=\"float-end\"><button type=\"submit\" form=\"form-category\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
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
        <form id=\"form-category\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 30
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
            // line 31
            echo "                  <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 31);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
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
        // line 33
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 35
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
            // line 36
            echo "                  <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                echo " active";
            }
            echo "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"category_description[";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_0 = ($context["category_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["category_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null), "name", [], "any", false, false, false, 40)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            echo "\" class=\"form-control\"/>
                        <div id=\"error-name-";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            echo "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_2 = ($context["category_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["category_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null), "description", [], "any", false, false, false, 47)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"category_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_4 = ($context["category_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["category_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "meta_title", [], "any", false, false, false, 53)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" class=\"form-control\"/>
                        <div id=\"error-meta-title-";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_6 = ($context["category_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["category_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "meta_description", [], "any", false, false, false, 60)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_8 = ($context["category_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["category_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 66)) : (""));
            echo "</textarea>
                      </div>
                    </div>
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
        // line 71
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-parent\" class=\"col-sm-2 col-form-label\">";
        // line 75
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 77
        echo ($context["path"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" list=\"list-parent\" class=\"form-control\"/> <input type=\"hidden\" name=\"parent_id\" value=\"";
        echo ($context["parent_id"] ?? null);
        echo "\" id=\"input-parent-id\"/>
                  <datalist id=\"list-parent\"></datalist>
                  <div class=\"form-text\">";
        // line 79
        echo ($context["help_parent"] ?? null);
        echo "</div>
                  <div id=\"error-parent\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 84
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 86
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" list=\"list-filter\" class=\"form-control\"/>
                  <datalist id=\"list-filter\"></datalist>
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"category-filter\" class=\"table table-sm m-0\">
                      <tbody>
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 92
            echo "                          <tr id=\"category-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 92);
            echo "\">
                            <td>";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "name", [], "any", false, false, false, 93);
            echo "<input type=\"hidden\" name=\"category_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 93);
            echo "\"/></td>
                            <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                      </tbody>
                    </table>
                  </div>
                  <div class=\"form-text\">";
        // line 100
        echo ($context["help_filter"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 104
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 108
            echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 109);
            echo "\" id=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 109);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 109), ($context["category_store"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 109);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 109);
            echo "</label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 119
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 121
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 122
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-top\" class=\"col-sm-2 col-form-label\">";
        // line 128
        echo ($context["entry_top"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"top\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" class=\"form-check-input\"";
        // line 132
        if (($context["top"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 134
        echo ($context["help_top"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-column\" class=\"col-sm-2 col-form-label\">";
        // line 138
        echo ($context["entry_column"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 140
        echo ($context["column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_column"] ?? null);
        echo "\" id=\"input-column\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 141
        echo ($context["help_column"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 145
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 147
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 151
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 155
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 161
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 166
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 167
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 172
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 173);
            echo "</td>
                        <td class=\"text-start\">
                          ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 176
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 177);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 177);
                echo "\"/></div>
                              <input type=\"text\" name=\"category_seo_url[";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 178);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = (($__internal_compile_11 = ($context["category_seo_url"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 178)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178)] ?? null) : null)) {
                    echo (($__internal_compile_12 = (($__internal_compile_13 = ($context["category_seo_url"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 178)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" id=\"input-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 178);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 180);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
                echo "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                        </td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 194
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 195
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 200
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 201);
            echo "</td>
                        <td class=\"text-start\"><select name=\"category_layout[";
            // line 202
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 202);
            echo "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 205
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 205);
                echo "\"";
                if (((($__internal_compile_14 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 205)] ?? null) : null) && ((($__internal_compile_15 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 205)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 205)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 205);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"category_id\" value=\"";
        // line 215
        echo ($context["category_id"] ?? null);
        echo "\" id=\"input-category-id\"/></form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 222
        echo ($context["ckeditor"] ?? null);
        echo "'
});

\$('#input-parent').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category|autocomplete&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    name: '";
        // line 232
        echo ($context["text_none"] ?? null);
        echo "',
                    category_id: 0
                });

                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-parent-id').val(item['value']);
    }
});

\$('#input-filter').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter|autocomplete&user_token=";
        // line 253
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-filter').val('');

        \$('#category-filter-' + item['value']).remove();

        html = '<tr id=\"category-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#category-filter tbody').append(html);
    }
});

\$('#category-filter').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});
//--></script>
";
        // line 283
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 283,  722 => 253,  698 => 232,  691 => 228,  682 => 222,  672 => 215,  665 => 210,  657 => 207,  642 => 205,  638 => 204,  633 => 202,  629 => 201,  626 => 200,  622 => 199,  615 => 195,  611 => 194,  600 => 185,  592 => 182,  582 => 180,  565 => 178,  559 => 177,  556 => 176,  552 => 175,  547 => 173,  544 => 172,  540 => 171,  533 => 167,  529 => 166,  521 => 161,  510 => 155,  503 => 151,  494 => 147,  489 => 145,  482 => 141,  476 => 140,  471 => 138,  464 => 134,  457 => 132,  450 => 128,  441 => 122,  437 => 121,  428 => 119,  422 => 116,  416 => 112,  397 => 109,  394 => 108,  390 => 107,  384 => 104,  377 => 100,  372 => 97,  360 => 93,  355 => 92,  351 => 91,  343 => 86,  338 => 84,  330 => 79,  321 => 77,  316 => 75,  310 => 71,  285 => 66,  278 => 64,  265 => 60,  258 => 58,  251 => 54,  241 => 53,  234 => 51,  219 => 47,  212 => 45,  205 => 41,  195 => 40,  188 => 38,  178 => 36,  161 => 35,  157 => 33,  130 => 31,  113 => 30,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/category_form.twig", "E:\\xampp\\htdocs\\admin\\view\\template\\catalog\\category_form.twig");
    }
}
