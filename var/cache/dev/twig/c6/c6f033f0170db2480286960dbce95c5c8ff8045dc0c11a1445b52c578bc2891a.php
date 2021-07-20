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

/* @KunstmaanAdminList/AdminListTwigExtension/widget.html.twig */
class __TwigTemplate_c5a322c1b86e605f140c22bbf6816a0d84162aebd2254f0f9270663ac26a3c9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig"));

        // line 1
        $context["extraparams"] = twig_array_merge((isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 1, $this->source); })()), "currentparameters", [], "any", false, false, false, 1));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 7, $this->source); })()), "hasBulkActions", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <form action=\"#\" method=\"POST\" name=\"bulkform\" id=\"bulk-form\">
";
        }
        // line 10
        echo "
<!-- Check for actions -->
";
        // line 12
        $context["itemActionsPossible"] = false;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 13, $this->source); })()), "items", [0 => (isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 13, $this->source); })())], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "canEdit", [0 => $context["item"]], "method", false, false, false, 14) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "canView", [0 => $context["item"]], "method", false, false, false, 14)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "canDelete", [0 => $context["item"]], "method", false, false, false, 14)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 14, $this->source); })()), "hasItemActions", [], "method", false, false, false, 14))) {
                // line 15
                echo "        ";
                $context["itemActionsPossible"] = true;
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div class=\"table-responsive\">
    <table class=\"table table-striped table-bordered";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 20, $this->source); })()), "hasSort", [], "method", false, false, false, 20)) {
            echo " table--sortable";
        }
        if ( !(isset($context["itemActionsPossible"]) || array_key_exists("itemActionsPossible", $context) ? $context["itemActionsPossible"] : (function () { throw new RuntimeError('Variable "itemActionsPossible" does not exist.', 20, $this->source); })())) {
            echo " table--no-actions";
        }
        echo "\">
        <thead>
            <tr>
                <!-- Bulk -->
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 24, $this->source); })()), "hasBulkActions", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <th>
                        <input type=\"checkbox\" id=\"select-all-bulk-checkbox\">
                    </th>
                ";
        }
        // line 29
        echo "
                <!-- Columns -->
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 31, $this->source); })()), "columns", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 32
            echo "                    ";
            $context["columnName"] = twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 32);
            // line 33
            echo "                    ";
            $context["columnkey"] = twig_get_attribute($this->env, $this->source, $context["column"], "header", [], "any", false, false, false, 33);
            // line 34
            echo "                    ";
            $context["orderDirection"] = "DESC";
            // line 35
            echo "                    ";
            $context["extraHeaderClass"] = "";
            // line 36
            echo "                    ";
            if (((isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 36, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 36, $this->source); })()), "orderBy", [], "any", false, false, false, 36))) {
                // line 37
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 37, $this->source); })()), "orderDirection", [], "any", false, false, false, 37) == "DESC")) {
                    // line 38
                    echo "                            ";
                    $context["orderDirection"] = "ASC";
                    // line 39
                    echo "                            ";
                    $context["extraHeaderClass"] = "table--sortable__th--down";
                    // line 40
                    echo "                        ";
                } else {
                    // line 41
                    echo "                            ";
                    $context["extraHeaderClass"] = "table--sortable__th--up";
                    // line 42
                    echo "                        ";
                }
                // line 43
                echo "                    ";
            }
            // line 44
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 44, $this->source); })()), "hasSort", [0 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 44, $this->source); })())], "method", false, false, false, 44)) {
                echo "class=\"js-sortable-link table--sortable__th ";
                echo twig_escape_filter($this->env, (isset($context["extraHeaderClass"]) || array_key_exists("extraHeaderClass", $context) ? $context["extraHeaderClass"] : (function () { throw new RuntimeError('Variable "extraHeaderClass" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "\" data-order-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["basepath"]) || array_key_exists("basepath", $context) ? $context["basepath"] : (function () { throw new RuntimeError('Variable "basepath" does not exist.', 44, $this->source); })()), twig_array_merge((isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 44, $this->source); })()), ["orderBy" => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 44, $this->source); })()), "orderDirection" => (isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 44, $this->source); })())])), "html", null, true);
                echo "\"";
            }
            echo ">
                        ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["columnkey"]) || array_key_exists("columnkey", $context) ? $context["columnkey"] : (function () { throw new RuntimeError('Variable "columnkey" does not exist.', 45, $this->source); })())), "html", null, true);
            echo "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                <!-- Actions -->
                <th class=\"table__actions\">
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.actions"), "html", null, true);
        echo "
                </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 56, $this->source); })()), "items", [0 => (isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 56, $this->source); })())], "method", false, false, false, 56));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "            ";
            $context["firstRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57);
            // line 58
            echo "            ";
            $context["lastRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 58);
            // line 59
            echo "            <tr>
                <!-- Bulk -->
                ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 61, $this->source); })()), "hasBulkActions", [], "any", false, false, false, 61)) {
                // line 62
                echo "                    <td>
                        <input type=\"checkbox\" name=\"bulk_selection[]\" value=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\" class=\"js-bulk-checkbox\">
                    </td>
                ";
            }
            // line 66
            echo "
                <!-- Columns -->
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 68, $this->source); })()), "columns", [], "any", false, false, false, 68));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 69
                echo "                    ";
                $context["columnName"] = twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 69);
                // line 70
                echo "                    ";
                $context["template"] = twig_get_attribute($this->env, $this->source, $context["column"], "template", [], "any", false, false, false, 70);
                // line 71
                echo "                    ";
                $context["itemHelper"] = $context["item"];
                // line 72
                echo "                    ";
                if ( !(null === (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 72, $this->source); })()))) {
                    // line 73
                    echo "                        <td>
                            ";
                    // line 74
                    $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 74, $this->source); })()), "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 74)->display(twig_array_merge($context, ["row" => $context["item"], "columnName" => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 74, $this->source); })()), "object" => twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 74, $this->source); })()), "getValue", [0 => $context["item"], 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 74, $this->source); })())], "method", false, false, false, 74), "adminlist" => (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 74, $this->source); })())]));
                    // line 75
                    echo "                        </td>
                    ";
                } else {
                    // line 77
                    echo "                        <td>
                            ";
                    // line 78
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "hasAlias", [], "method", false, false, false, 78)) {
                        // line 79
                        echo "                                ";
                        $context["itemHelper"] = twig_get_attribute($this->env, $this->source, $context["column"], "getAliasObj", [0 => $context["item"]], "method", false, false, false, 79);
                        // line 80
                        echo "                                ";
                        $context["columnName"] = twig_get_attribute($this->env, $this->source, $context["column"], "getColumnName", [0 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 80, $this->source); })())], "method", false, false, false, 80);
                        // line 81
                        echo "                            ";
                    }
                    // line 82
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 82, $this->source); })()), "getStringValue", [0 => (isset($context["itemHelper"]) || array_key_exists("itemHelper", $context) ? $context["itemHelper"] : (function () { throw new RuntimeError('Variable "itemHelper" does not exist.', 82, $this->source); })()), 1 => (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 82, $this->source); })())], "method", false, false, false, 82), "html", null, true);
                    echo "
                        </td>
                    ";
                }
                // line 85
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
                <!-- Actions -->
                <td class=\"table__actions\">
                    ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 89, $this->source); })()), "canView", [0 => $context["item"]], "method", false, false, false, 89)) {
                // line 90
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 90, $this->source); })()), "getViewUrlFor", [0 => $context["item"]], "method", false, false, false, 90), "path", [], "array", false, false, false, 90), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 90, $this->source); })()), "getViewUrlFor", [0 => $context["item"]], "method", false, false, false, 90), "params", [], "array", false, false, false, 90)), "html", null, true);
                echo "\" class=\"link--text table__actions__item\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.action.view"), "html", null, true);
                echo "\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                    ";
            }
            // line 94
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 94, $this->source); })()), "canEdit", [0 => $context["item"]], "method", false, false, false, 94)) {
                // line 95
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 95, $this->source); })()), "getEditUrlFor", [0 => $context["item"]], "method", false, false, false, 95), "path", [], "array", false, false, false, 95), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 95, $this->source); })()), "getEditUrlFor", [0 => $context["item"]], "method", false, false, false, 95), "params", [], "array", false, false, false, 95)), "html", null, true);
                echo "\" class=\"link--text table__actions__item\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.action.edit"), "html", null, true);
                echo "\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    ";
            }
            // line 99
            echo "
                    ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 100, $this->source); })()), "canDelete", [0 => $context["item"]], "method", false, false, false, 100)) {
                // line 101
                echo "                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#sure-modal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" class=\"link--text link--danger table__actions__item\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.action.delete"), "html", null, true);
                echo "\">
                            <i class=\"fa fa-trash\"></i>
                        </a>
                    ";
            }
            // line 105
            echo "
                    ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 106, $this->source); })()), "hasItemActions", [], "method", false, false, false, 106)) {
                // line 107
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 107, $this->source); })()), "getItemActions", [], "method", false, false, false, 107));
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
                foreach ($context['_seq'] as $context["_key"] => $context["itemAction"]) {
                    // line 108
                    echo "                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["itemAction"], "template", [], "any", false, false, false, 108))) {
                        // line 109
                        echo "                                ";
                        $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["itemAction"], "template", [], "any", false, false, false, 109), "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 109)->display(twig_array_merge($context, ["row" => $context["item"], "item" => $context["item"], "action" => $context["itemAction"]]));
                        // line 110
                        echo "                            ";
                    } else {
                        // line 111
                        echo "                                ";
                        $context["shouldBeDisabled"] = (((isset($context["firstRow"]) || array_key_exists("firstRow", $context) ? $context["firstRow"] : (function () { throw new RuntimeError('Variable "firstRow" does not exist.', 111, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 111) == "arrow-up")) || ((isset($context["lastRow"]) || array_key_exists("lastRow", $context) ? $context["lastRow"] : (function () { throw new RuntimeError('Variable "lastRow" does not exist.', 111, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 111) == "arrow-down")));
                        // line 112
                        echo "                                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["itemAction"], "getUrlFor", [0 => $context["item"]], "method", false, false, false, 112);
                        // line 113
                        echo "                                ";
                        if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 113, $this->source); })())) {
                            // line 114
                            echo "                                    ";
                            if ((isset($context["shouldBeDisabled"]) || array_key_exists("shouldBeDisabled", $context) ? $context["shouldBeDisabled"] : (function () { throw new RuntimeError('Variable "shouldBeDisabled" does not exist.', 114, $this->source); })())) {
                                // line 115
                                echo "                                        <span class=\"table__actions__item disabled\" title=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["itemAction"], "getLabelFor", [0 => $context["item"]], "method", false, false, false, 115)), "html", null, true);
                                echo "\">
                                            ";
                                // line 116
                                if ( !(null === twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 116))) {
                                    // line 117
                                    echo "                                                <i class=\"fa fa-";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 117), "html", null, true);
                                    echo "\"></i>
                                            ";
                                }
                                // line 119
                                echo "                                        </span>
                                    ";
                            } else {
                                // line 121
                                echo "                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 121, $this->source); })()), "path", [], "array", false, false, false, 121), twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 121, $this->source); })()), "params", [], "array", false, false, false, 121)), "html", null, true);
                                echo "\" class=\"link--text table__actions__item\" title=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["itemAction"], "getLabelFor", [0 => $context["item"]], "method", false, false, false, 121)), "html", null, true);
                                echo "\">
                                            ";
                                // line 122
                                if ( !(null === twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 122))) {
                                    // line 123
                                    echo "                                                <i class=\"fa fa-";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => $context["item"]], "method", false, false, false, 123), "html", null, true);
                                    echo "\"></i>
                                            ";
                                }
                                // line 125
                                echo "                                        </a>
                                    ";
                            }
                            // line 127
                            echo "                                ";
                        }
                        // line 128
                        echo "                            ";
                    }
                    // line 129
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                    ";
            }
            // line 131
            echo "                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "        </tbody>
    </table>
</div>

";
        // line 138
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 138, $this->source); })()), "hasBulkActions", [], "any", false, false, false, 138)) {
            // line 139
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 139, $this->source); })()), "getBulkActions", [], "method", false, false, false, 139));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 140
                echo "        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 140))) {
                    // line 141
                    echo "            ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 141), "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 141)->display(twig_array_merge($context, ["action" => $context["action"]]));
                    // line 142
                    echo "        ";
                } else {
                    // line 143
                    echo "            <button type=\"button\" class=\"js-bulk-action-button btn btn-default btn--raise-on-hover disabled\" data-action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 143), "path", [], "array", false, false, false, 143), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 143), "params", [], "array", false, false, false, 143)), "html", null, true);
                    echo "\">
                ";
                    // line 144
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 144))) {
                        // line 145
                        echo "                    <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 145), "html", null, true);
                        echo " }} btn__icon\"></i>
                    ";
                        // line 146
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 146)), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 148
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 148)), "html", null, true);
                        echo "
                ";
                    }
                    // line 150
                    echo "            </button>
        ";
                }
                // line 152
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "    </form>
";
        }
        // line 155
        echo "
";
        // line 156
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 156, $this->source); })()), "pagerfanta", [], "any", false, false, false, 156), "haveToPaginate", [], "method", false, false, false, 156)) {
            // line 157
            echo "    ";
            echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 157, $this->source); })()), "pagerfanta", [], "any", false, false, false, 157), "twitter_bootstrap_translated");
            echo "
";
        }
        // line 159
        echo "
";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 160, $this->source); })()), "items", [0 => (isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 160, $this->source); })())], "method", false, false, false, 160));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 161
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 161, $this->source); })()), "canDelete", [0 => $context["item"]], "method", false, false, false, 161)) {
                // line 162
                echo "        ";
                $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", 162)->display($context);
                // line 163
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 163,  581 => 162,  578 => 161,  561 => 160,  558 => 159,  552 => 157,  550 => 156,  547 => 155,  543 => 153,  529 => 152,  525 => 150,  519 => 148,  514 => 146,  509 => 145,  507 => 144,  502 => 143,  499 => 142,  496 => 141,  493 => 140,  475 => 139,  473 => 138,  467 => 134,  451 => 131,  448 => 130,  434 => 129,  431 => 128,  428 => 127,  424 => 125,  418 => 123,  416 => 122,  409 => 121,  405 => 119,  399 => 117,  397 => 116,  392 => 115,  389 => 114,  386 => 113,  383 => 112,  380 => 111,  377 => 110,  374 => 109,  371 => 108,  353 => 107,  351 => 106,  348 => 105,  338 => 101,  336 => 100,  333 => 99,  323 => 95,  320 => 94,  310 => 90,  308 => 89,  303 => 86,  289 => 85,  282 => 82,  279 => 81,  276 => 80,  273 => 79,  271 => 78,  268 => 77,  264 => 75,  262 => 74,  259 => 73,  256 => 72,  253 => 71,  250 => 70,  247 => 69,  230 => 68,  226 => 66,  220 => 63,  217 => 62,  215 => 61,  211 => 59,  208 => 58,  205 => 57,  188 => 56,  180 => 51,  175 => 48,  166 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  115 => 31,  111 => 29,  105 => 25,  103 => 24,  91 => 20,  87 => 18,  80 => 16,  77 => 15,  74 => 14,  70 => 13,  68 => 12,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set extraparams = extraparams|merge(filter.currentparameters) %}

{% include '@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig' %}

{% include '@KunstmaanAdminList/AdminListTwigExtension/limit.html.twig' %}

{% if adminlist.hasBulkActions %}
    <form action=\"#\" method=\"POST\" name=\"bulkform\" id=\"bulk-form\">
{% endif %}

<!-- Check for actions -->
{% set itemActionsPossible = false %}
{% for item in adminlist.items(extraparams) %}
    {% if (adminlist.canEdit(item) or adminlist.canView(item) or adminlist.canDelete(item) or adminlist.hasItemActions() ) %}
        {% set itemActionsPossible = true %}
    {% endif %}
{% endfor %}

<div class=\"table-responsive\">
    <table class=\"table table-striped table-bordered{% if adminlist.hasSort() %} table--sortable{% endif %}{% if not itemActionsPossible %} table--no-actions{% endif %}\">
        <thead>
            <tr>
                <!-- Bulk -->
                {% if adminlist.hasBulkActions %}
                    <th>
                        <input type=\"checkbox\" id=\"select-all-bulk-checkbox\">
                    </th>
                {% endif %}

                <!-- Columns -->
                {% for column in adminlist.columns%}
                    {% set columnName = column.name %}
                    {% set columnkey = column.header %}
                    {% set orderDirection = \"DESC\" %}
                    {% set extraHeaderClass = \"\" %}
                    {% if ( columnName == adminlist.orderBy )%}
                        {% if adminlist.orderDirection == \"DESC\" %}
                            {% set orderDirection = \"ASC\" %}
                            {% set extraHeaderClass = \"table--sortable__th--down\" %}
                        {% else %}
                            {% set extraHeaderClass = \"table--sortable__th--up\" %}
                        {% endif %}
                    {% endif %}
                    <th {% if adminlist.hasSort(columnName) %}class=\"js-sortable-link table--sortable__th {{extraHeaderClass}}\" data-order-url=\"{{ path(basepath, extraparams|merge({ 'orderBy': columnName, \"orderDirection\": orderDirection }))}}\"{% endif %}>
                        {{ columnkey | trans }}
                    </th>
                {% endfor %}

                <!-- Actions -->
                <th class=\"table__actions\">
                    {{ 'form.actions'|trans }}
                </th>
            </tr>
        </thead>
        <tbody>
        {% for item in adminlist.items(extraparams) %}
            {% set firstRow = loop.first %}
            {% set lastRow = loop.last %}
            <tr>
                <!-- Bulk -->
                {% if adminlist.hasBulkActions %}
                    <td>
                        <input type=\"checkbox\" name=\"bulk_selection[]\" value=\"{{ item.id }}\" class=\"js-bulk-checkbox\">
                    </td>
                {% endif %}

                <!-- Columns -->
                {% for column in adminlist.columns%}
                    {% set columnName = column.name %}
                    {% set template = column.template %}
                    {% set itemHelper = item %}
                    {% if template is not null %}
                        <td>
                            {% include template with {'row': item, 'columnName': columnName, 'object': adminlist.getValue(item, columnName), 'adminlist': adminlist} %}
                        </td>
                    {% else %}
                        <td>
                            {% if column.hasAlias() %}
                                {% set itemHelper = column.getAliasObj(item) %}
                                {% set columnName = column.getColumnName(columnName) %}
                            {% endif %}
                            {{adminlist.getStringValue(itemHelper, columnName)}}
                        </td>
                    {% endif %}
                {% endfor %}

                <!-- Actions -->
                <td class=\"table__actions\">
                    {% if adminlist.canView(item) %}
                        <a href=\"{{ path(adminlist.getViewUrlFor(item)[\"path\"], adminlist.getViewUrlFor(item)[(\"params\")] ) }}\" class=\"link--text table__actions__item\" title=\"{{ 'kuma_admin_list.action.view' | trans }}\">
                            <i class=\"fa fa-eye\"></i>
                        </a>
                    {% endif %}
                    {% if adminlist.canEdit(item) %}
                        <a href=\"{{ path(adminlist.getEditUrlFor(item)[\"path\"], adminlist.getEditUrlFor(item)[(\"params\")] ) }}\" class=\"link--text table__actions__item\" title=\"{{ 'kuma_admin_list.action.edit' | trans }}\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                    {% endif %}

                    {% if adminlist.canDelete(item) %}
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#sure-modal-{{ item.id }}\" class=\"link--text link--danger table__actions__item\" title=\"{{ 'kuma_admin_list.action.delete' | trans }}\">
                            <i class=\"fa fa-trash\"></i>
                        </a>
                    {% endif %}

                    {% if adminlist.hasItemActions() %}
                        {% for itemAction in adminlist.getItemActions() %}
                            {% if itemAction.template is not null %}
                                {% include itemAction.template with {'row': item, 'item': item, 'action': itemAction} %}
                            {% else %}
                                {% set shouldBeDisabled = (firstRow and itemAction.getIconFor(item) == 'arrow-up') or (lastRow and itemAction.getIconFor(item) == 'arrow-down') %}
                                {% set url = itemAction.getUrlFor(item) %}
                                {% if url %}
                                    {% if shouldBeDisabled %}
                                        <span class=\"table__actions__item disabled\" title=\"{{ itemAction.getLabelFor(item) | trans }}\">
                                            {% if itemAction.getIconFor(item) is not null %}
                                                <i class=\"fa fa-{{ itemAction.getIconFor(item) }}\"></i>
                                            {% endif %}
                                        </span>
                                    {% else %}
                                        <a href=\"{{ path(url[\"path\"], url[(\"params\")]) }}\" class=\"link--text table__actions__item\" title=\"{{ itemAction.getLabelFor(item) | trans }}\">
                                            {% if itemAction.getIconFor(item) is not null %}
                                                <i class=\"fa fa-{{ itemAction.getIconFor(item) }}\"></i>
                                            {% endif %}
                                        </a>
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

{% if adminlist.hasBulkActions %}
    {% for action in adminlist.getBulkActions() %}
        {% if action.template is not null %}
            {% include action.template with {'action': action} %}
        {% else %}
            <button type=\"button\" class=\"js-bulk-action-button btn btn-default btn--raise-on-hover disabled\" data-action=\"{{ path(action.getUrl()[\"path\"], action.getUrl()[(\"params\")] ) }}\">
                {% if action.getIcon() is not null %}
                    <i class=\"fa fa-{{ action.getIcon() }} }} btn__icon\"></i>
                    {{ action.getLabel()|trans }}
                {% else %}
                    {{ action.getLabel()|trans }}
                {% endif %}
            </button>
        {% endif %}
    {% endfor %}
    </form>
{% endif %}

{% if adminlist.pagerfanta.haveToPaginate() %}
    {{ pagerfanta(adminlist.pagerfanta, 'twitter_bootstrap_translated') }}
{% endif %}

{% for item in adminlist.items(extraparams) %}
    {% if adminlist.canDelete(item) %}
        {% include '@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig' %}
    {% endif %}
{% endfor %}
", "@KunstmaanAdminList/AdminListTwigExtension/widget.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/AdminListTwigExtension/widget.html.twig");
    }
}
