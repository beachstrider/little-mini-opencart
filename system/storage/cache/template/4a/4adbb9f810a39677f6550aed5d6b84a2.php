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

/* admin_dir/view/template/design/layout_form.twig */
class __TwigTemplate_6b02ef10c2617b9671f27ca415b0a2ac extends Template
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
        <button type=\"submit\" form=\"form-layout\" data-bs-toggle=\"tooltip\" title=\"";
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
        <form id=\"form-layout\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 26
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                <div id=\"error-name\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <br/>
            <table id=\"route\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start\">";
        // line 34
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-start\">";
        // line 35
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 40
        $context["route_row"] = 0;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 42
            echo "                  <tr id=\"route-row-";
            echo ($context["route_row"] ?? null);
            echo "\">
                    <td class=\"text-start\"><select name=\"layout_route[";
            // line 43
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-select\">
                        <option value=\"0\">";
            // line 44
            echo ($context["text_default"] ?? null);
            echo "</option>
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 46
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 46);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 46))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 46);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                      </select></td>
                    <td class=\"text-start\"><input type=\"text\" name=\"layout_route[";
            // line 49
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 49);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#route-row-";
            // line 50
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 52
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addRoute();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 64
        echo ($context["text_module"] ?? null);
        echo "</legend>
            ";
        // line 65
        $context["module_row"] = 0;
        // line 66
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 71
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 76
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 76) == "column_left")) {
                // line 77
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 80
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 82
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 82);
                    echo "\">
                                    ";
                    // line 83
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 83)) {
                        // line 84
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 84);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 84) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 84))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 84);
                        echo "</option>
                                    ";
                    } else {
                        // line 86
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 86));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 87
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 87);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 87) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 87))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 87);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                                    ";
                    }
                    // line 90
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 92);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 92);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 92);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 93
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 97
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 98
                echo "                      ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-left');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 103
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 112
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 117
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 117) == "content_top")) {
                // line 118
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 121
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 123
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 123);
                    echo "\">
                                    ";
                    // line 124
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 125);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 125) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 125))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 125);
                        echo "</option>
                                    ";
                    } else {
                        // line 127
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 127));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 128
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 128);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 128) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 128))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 128);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "                                    ";
                    }
                    // line 131
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 133);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 133);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 133);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 134
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 138
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 139
                echo "                      ";
            }
            // line 140
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-top');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 144
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 151
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 156
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 156) == "content_bottom")) {
                // line 157
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 160
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 162
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 162);
                    echo "\">
                                    ";
                    // line 163
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 163)) {
                        // line 164
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 164);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 164) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 164))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 164);
                        echo "</option>
                                    ";
                    } else {
                        // line 166
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 166));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 167
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 167);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 167) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 167))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 167);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 169
                        echo "                                    ";
                    }
                    // line 170
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 172);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 172);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 172);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 173
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 177
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 178
                echo "                      ";
            }
            // line 179
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-bottom');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 183
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 192
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 197
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 197) == "column_right")) {
                // line 198
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-end\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 201
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 203
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 203);
                    echo "\">
                                    ";
                    // line 204
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 204)) {
                        // line 205
                        echo "                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 205);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 205) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 205))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 205);
                        echo "</option>
                                  ";
                    } else {
                        // line 207
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 207));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 208
                            echo "                                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 208);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 208) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 208))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 208);
                            echo "</option>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        echo "                                    ";
                    }
                    // line 211
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 213);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 213);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 213);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 214
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 218
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 219
                echo "                      ";
            }
            // line 220
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-right');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 224
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"layout_id\" value=\"";
        // line 231
        echo ($context["layout_id"] ?? null);
        echo "\" id=\"input-layout-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = ";
        // line 238
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
    html = '<tr id=\"route-row-' + route_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-select\">';
    html += '  <option value=\"0\">";
        // line 243
        echo ($context["text_default"] ?? null);
        echo "</option>';
  ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 245
            echo "    html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 245);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 245), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 248
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#route-row-' + route_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 249
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#route tbody').append(html);

    route_row++;
}

var module_row = ";
        // line 257
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
    html = '<tr id=\"module-row-' + module_row + '\">';
    html += '  <td class=\"text-start\"><div class=\"input-group input-group-sm\">';
    html += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-select input-sm\">';
  ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 264
            echo "    html += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 264), "js");
            echo "\">';
  ";
            // line 265
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 265)) {
                // line 266
                echo "    html += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 266);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 266), "js");
                echo "</option>';
  ";
            } else {
                // line 268
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 268));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 269
                    echo "    html += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 269);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 269), "js");
                    echo "</option>';
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "  ";
            }
            // line 272
            echo "    html += '    </optgroup>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "    html += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replaceAll('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
    html += '  <a href=\" data-bs-toggle=\"tooltip\" title=\"";
        // line 277
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row-' + module_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>';
    html += '  </div></td>';
    html += '</tr>';

    \$('#module-' + type + ' tbody').append(html);

    \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function (i, element) {
        \$(element).val(i);
    });

    \$('#module-' + type + ' select:last').trigger('change');

    module_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').on('change', 'select[name*=\\'code\\']', function () {
    var part = this.value.split('.');

    if (typeof part[2] == 'undefined') {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 296
        echo ($context["user_token"] ?? null);
        echo "');
    } else {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 298
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[2]);
    }
});
//--></script>
";
        // line 302
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_dir/view/template/design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 302,  880 => 298,  875 => 296,  851 => 277,  846 => 274,  839 => 272,  836 => 271,  825 => 269,  820 => 268,  812 => 266,  810 => 265,  805 => 264,  801 => 263,  792 => 257,  781 => 249,  777 => 248,  774 => 247,  763 => 245,  759 => 244,  755 => 243,  747 => 238,  737 => 231,  727 => 224,  722 => 221,  716 => 220,  713 => 219,  711 => 218,  702 => 214,  687 => 213,  680 => 211,  677 => 210,  662 => 208,  657 => 207,  645 => 205,  643 => 204,  638 => 203,  634 => 202,  630 => 201,  623 => 198,  620 => 197,  616 => 196,  609 => 192,  597 => 183,  592 => 180,  586 => 179,  583 => 178,  581 => 177,  572 => 173,  557 => 172,  550 => 170,  547 => 169,  532 => 167,  527 => 166,  515 => 164,  513 => 163,  508 => 162,  504 => 161,  500 => 160,  493 => 157,  490 => 156,  486 => 155,  479 => 151,  469 => 144,  464 => 141,  458 => 140,  455 => 139,  453 => 138,  444 => 134,  429 => 133,  422 => 131,  419 => 130,  404 => 128,  399 => 127,  387 => 125,  385 => 124,  380 => 123,  376 => 122,  372 => 121,  365 => 118,  362 => 117,  358 => 116,  351 => 112,  339 => 103,  334 => 100,  328 => 99,  325 => 98,  323 => 97,  314 => 93,  299 => 92,  292 => 90,  289 => 89,  274 => 87,  269 => 86,  257 => 84,  255 => 83,  250 => 82,  246 => 81,  242 => 80,  235 => 77,  232 => 76,  228 => 75,  221 => 71,  214 => 66,  212 => 65,  208 => 64,  199 => 58,  193 => 54,  187 => 53,  185 => 52,  178 => 50,  170 => 49,  167 => 48,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  135 => 42,  130 => 41,  128 => 40,  120 => 35,  116 => 34,  103 => 26,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_dir/view/template/design/layout_form.twig", "E:\\xampp\\htdocs\\admin_dir\\view\\template\\design\\layout_form.twig");
    }
}
