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

/* install/view/template/install/step_2.twig */
class __TwigTemplate_8eaa3619fa858c89c592641978f68c64 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"float-right\">";
        // line 5
        echo ($context["language"] ?? null);
        echo "</div>
\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t";
        }
        // line 13
        echo "\t\t<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 15
        echo ($context["text_step_2"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 18
        echo ($context["text_install_php"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"35%\"><b>";
        // line 22
        echo ($context["text_setting"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 23
        echo ($context["text_current"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 24
        echo ($context["text_required"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"15%\" class=\"text-center\"><b>";
        // line 25
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 30
        echo ($context["text_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 31
        echo ($context["php_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>8.0+</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 34
        if (($context["version"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 40
        if (($context["register_globals"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 41
        echo ($context["text_global"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 42
        if (($context["register_globals"] ?? null)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 47
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 49
        if ( !($context["register_globals"] ?? null)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 55
        if (($context["magic_quotes_gpc"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 56
        echo ($context["text_magic"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 57
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 62
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 64
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 70
        if ( !($context["file_uploads"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 71
        echo ($context["text_file_upload"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 72
        if (($context["file_uploads"] ?? null)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 77
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 78
        if (($context["file_uploads"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 82
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 84
        if (($context["session_auto_start"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 85
        echo ($context["text_session"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 86
        if (($context["session_auto_start"] ?? null)) {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 91
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 92
        if ( !($context["session_auto_start"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 102
        echo ($context["text_install_extension"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"35%\"><b>";
        // line 106
        echo ($context["text_extension"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 107
        echo ($context["text_current"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 108
        echo ($context["text_required"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"15%\" class=\"text-center\"><b>";
        // line 109
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr";
        // line 113
        if ( !($context["db"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 114
        echo ($context["text_db"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 115
        if (($context["db"] ?? null)) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 120
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 121
        if (($context["db"] ?? null)) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 125
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 127
        if ( !($context["gd"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 128
        echo ($context["text_gd"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 129
        if (($context["gd"] ?? null)) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 134
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 135
        if (($context["gd"] ?? null)) {
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 139
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 141
        if ( !($context["curl"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 142
        echo ($context["text_curl"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 143
        if (($context["curl"] ?? null)) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 147
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 148
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 149
        if (($context["curl"] ?? null)) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 153
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 155
        if ( !($context["openssl"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 156
        echo ($context["text_openssl"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 157
        if (($context["openssl"] ?? null)) {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 161
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 162
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 163
        if (($context["openssl"] ?? null)) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 167
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 169
        if ( !($context["zlib"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 170
        echo ($context["text_zlib"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 171
        if (($context["zlib"] ?? null)) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 175
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 176
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 177
        if (($context["zlib"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 180
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 181
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 183
        if ( !($context["zip"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 184
        echo ($context["text_zip"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 185
        if (($context["zip"] ?? null)) {
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 189
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 190
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 191
        if (($context["zip"] ?? null)) {
            // line 192
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 197
        if ( !($context["iconv"] ?? null)) {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t<tr";
            if ( !($context["mbstring"] ?? null)) {
                echo " class=\"table-danger\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 199
            echo ($context["text_mbstring"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 200
            if (($context["mbstring"] ?? null)) {
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo ($context["text_on"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo ($context["text_off"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 204
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 205
            echo ($context["text_on"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 206
            if (($context["mbstring"] ?? null)) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 217
        echo ($context["text_install_file"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 221
        echo ($context["text_file"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 222
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr";
        // line 226
        if (($context["error_catalog_config"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 227
        echo ($context["catalog_config"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 228
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
            echo ($context["error_catalog_config"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 234
        if (($context["error_admin_config"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 235
        echo ($context["admin_config"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 236
        if ( !($context["error_admin_config"] ?? null)) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
            echo ($context["error_admin_config"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 240
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"col\"><a href=\"";
        // line 246
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"col text-right\"><input type=\"submit\" value=\"";
        // line 247
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
        // line 254
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/view/template/install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 254,  747 => 247,  741 => 246,  733 => 240,  727 => 239,  721 => 237,  719 => 236,  715 => 235,  709 => 234,  705 => 232,  699 => 231,  693 => 229,  691 => 228,  687 => 227,  681 => 226,  674 => 222,  670 => 221,  663 => 217,  657 => 213,  652 => 210,  648 => 209,  644 => 207,  642 => 206,  638 => 205,  635 => 204,  629 => 203,  623 => 201,  621 => 200,  617 => 199,  610 => 198,  608 => 197,  604 => 195,  600 => 194,  596 => 192,  594 => 191,  590 => 190,  587 => 189,  581 => 188,  575 => 186,  573 => 185,  569 => 184,  563 => 183,  559 => 181,  555 => 180,  551 => 178,  549 => 177,  545 => 176,  542 => 175,  536 => 174,  530 => 172,  528 => 171,  524 => 170,  518 => 169,  514 => 167,  510 => 166,  506 => 164,  504 => 163,  500 => 162,  497 => 161,  491 => 160,  485 => 158,  483 => 157,  479 => 156,  473 => 155,  469 => 153,  465 => 152,  461 => 150,  459 => 149,  455 => 148,  452 => 147,  446 => 146,  440 => 144,  438 => 143,  434 => 142,  428 => 141,  424 => 139,  420 => 138,  416 => 136,  414 => 135,  410 => 134,  407 => 133,  401 => 132,  395 => 130,  393 => 129,  389 => 128,  383 => 127,  379 => 125,  375 => 124,  371 => 122,  369 => 121,  365 => 120,  362 => 119,  356 => 118,  350 => 116,  348 => 115,  344 => 114,  338 => 113,  331 => 109,  327 => 108,  323 => 107,  319 => 106,  312 => 102,  304 => 96,  300 => 95,  296 => 93,  294 => 92,  290 => 91,  287 => 90,  281 => 89,  275 => 87,  273 => 86,  269 => 85,  263 => 84,  259 => 82,  255 => 81,  251 => 79,  249 => 78,  245 => 77,  242 => 76,  236 => 75,  230 => 73,  228 => 72,  224 => 71,  218 => 70,  214 => 68,  210 => 67,  206 => 65,  204 => 64,  199 => 62,  196 => 61,  190 => 60,  184 => 58,  182 => 57,  178 => 56,  172 => 55,  168 => 53,  164 => 52,  160 => 50,  158 => 49,  153 => 47,  150 => 46,  144 => 45,  138 => 43,  136 => 42,  132 => 41,  126 => 40,  122 => 38,  118 => 37,  114 => 35,  112 => 34,  106 => 31,  102 => 30,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  75 => 18,  69 => 15,  63 => 13,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/install/step_2.twig", "/home/xttl3xy3mfcj/public_html/install/view/template/install/step_2.twig");
    }
}
