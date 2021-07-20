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

/* @KunstmaanDashboard/GoogleAnalytics/setup.html.twig */
class __TwigTemplate_cfa02b72678fdc9e97f6ee3a616b2820106027310dcc00f4e499edd2836bf224 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/setup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/setup.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <form method=\"post\" action=\"\" class=\"form--dashboard-setup\" id=\"dashboard-setup-form\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "get", [0 => "notice"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "            <div class=\"alert alert-success\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        <section class=\"row\">
            <aside class=\"col-md-3 form--dashboard-setup__aside\">
                <div class=\"setup-group\" id=\"account-group\">
                    <h4>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.accounts"), "html", null, true);
        echo "</h4>

                    <div id=\"accounts\" class=\"setup-group__select__wrapper\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\" selected>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.account.select"), "html", null, true);
        echo "</option>
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new RuntimeError('Variable "accounts" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 18
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["account"], "accountId", [], "any", false, false, false, 18) == (isset($context["accountId"]) || array_key_exists("accountId", $context) ? $context["accountId"] : (function () { throw new RuntimeError('Variable "accountId" does not exist.', 18, $this->source); })()))) {
                echo "selected";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "accountId", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                                    ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "accountName", [], "any", false, false, false, 19), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                        </select>
                    </div>

                    <div id=\"properties\" class=\"setup-group__select__wrapper";
        // line 25
        if ( !array_key_exists("properties", $context)) {
            echo " not-shown";
        }
        echo "\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.property.select"), "html", null, true);
        echo "</option>
                            ";
        // line 28
        if (array_key_exists("properties", $context)) {
            // line 29
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 30
                echo "                                    <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["property"], "propertyId", [], "any", false, false, false, 30) == (isset($context["propertyId"]) || array_key_exists("propertyId", $context) ? $context["propertyId"] : (function () { throw new RuntimeError('Variable "propertyId" does not exist.', 30, $this->source); })()))) {
                    echo "selected";
                }
                echo " data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "propertyId", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                                        ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "propertyName", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            ";
        }
        // line 35
        echo "                        </select>
                    </div>

                    <div id=\"profiles\" class=\"setup-group__select__wrapper";
        // line 38
        if ( !array_key_exists("profiles", $context)) {
            echo " not-shown";
        }
        echo "\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.profile.select"), "html", null, true);
        echo "</option>
                            ";
        // line 41
        if (array_key_exists("profiles", $context)) {
            // line 42
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 43
                echo "                                    <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["profile"], "profileId", [], "any", false, false, false, 43) == (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 43, $this->source); })()))) {
                    echo "selected";
                }
                echo " data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profileId", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                        ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profileName", [], "any", false, false, false, 44), "html", null, true);
                echo "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            ";
        }
        // line 48
        echo "                        </select>
                    </div>

                    <input type=\"checkbox\" name=\"disableGoals\" id=\"disableGoals\" name=\"disableGoals\" ";
        // line 51
        if ((isset($context["disableGoals"]) || array_key_exists("disableGoals", $context) ? $context["disableGoals"] : (function () { throw new RuntimeError('Variable "disableGoals" does not exist.', 51, $this->source); })())) {
            echo "checked";
        }
        echo " />
                    <label for=\"disableGoals\">
                        ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.goals.disable"), "html", null, true);
        echo "
                    </label>
                </div>
            </aside>

            <div class=\"col-md-9 form--dashboard-setup__content\">
                <div class=\"setup-group segment-group\" id=\"segment-group\">
                    <h4>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.segments"), "html", null, true);
        echo "</h4>
                    <p>
                        ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.segment.info"), "html", null, true);
        echo " <a href=\"https://developers.google.com/analytics/devguides/reporting/core/v3/segments\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.segment.here"), "html", null, true);
        echo "</a>.
                    </p>

                    <ul class=\"add-segment__list\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 67
            echo "                        <li id=\"segment-list__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"clearfix add-segment__list-item\">
                            <div class=\"display-view\">
                                <span class=\"display-segment-name\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</span> (<span class=\"display-segment-query\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "query", [], "any", false, false, false, 69), "html", null, true);
            echo " </span>)
                                <div class=\"btn-group btn-group-xs pull-right\" role=\"group\">
                                    <button class=\"segment-list-button__delete btn btn-danger\" data-segment-id=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">remove</button>
                                    <button class=\"segment-list-button__edit btn btn-default\" data-segment-id=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">edit</button>
                                </div>
                            </div>
                            <div class=\"edit-view clearfix well\">
                                <input type=\"text\" id=\"segment-edit-name-";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 76), "html", null, true);
            echo "\" class=\"segment-name\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "\"/>
                                <input type=\"text\" id=\"segment-edit-query-";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\" class=\"segment-query\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "query", [], "any", false, false, false, 77), "html", null, true);
            echo "\"/>
                                <button class=\"segment-list-button__confirm btn btn-default pull-right\" data-segment-id=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">save</button>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </ul>

                    <div id=\"segments-new\"></div>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"segment-button__add\">add segment</button>

                    <div>
                        ";
        // line 88
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profileSegments"]) || array_key_exists("profileSegments", $context) ? $context["profileSegments"] : (function () { throw new RuntimeError('Variable "profileSegments" does not exist.', 88, $this->source); })()), "own", [], "any", false, false, false, 88)) > 0)) {
            // line 89
            echo "                            <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.segment.own"), "html", null, true);
            echo "</h4>
                            <ul class=\"list-group\">
                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profileSegments"]) || array_key_exists("profileSegments", $context) ? $context["profileSegments"] : (function () { throw new RuntimeError('Variable "profileSegments" does not exist.', 91, $this->source); })()), "own", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 92
                echo "                                <li class=\"list-group-item\">
                                    ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, false, 93), "html", null, true);
                echo " (<span class=\"segment-query__selection\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "query", [], "any", false, false, false, 93), "html", null, true);
                echo "</span>)
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                            </ul>
                        ";
        }
        // line 98
        echo "
                        <h4>";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.segment.builtin"), "html", null, true);
        echo "</h4>
                        <ul class=\"list-group\">
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profileSegments"]) || array_key_exists("profileSegments", $context) ? $context["profileSegments"] : (function () { throw new RuntimeError('Variable "profileSegments" does not exist.', 101, $this->source); })()), "builtin", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 102
            echo "                                <li class=\"list-group-item\">
                                    ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo " (<span class=\"segment-query__selection\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "query", [], "any", false, false, false, 103), "html", null, true);
            echo "</span>)
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                        </ul>
                    </div>
                </div>

                <div class=\"setup-group\" id=\"control-group\">
                    ";
        // line 111
        if (array_key_exists("multiconfig", $context)) {
            // line 112
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GaCollectionsBundle_Index", ["configId" => (isset($context["configId"]) || array_key_exists("configId", $context) ? $context["configId"] : (function () { throw new RuntimeError('Variable "configId" does not exist.', 112, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.back"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 114
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard");
            echo "\" class=\"btn btn-default\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.back"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 116
        echo "                    <button disabled id=\"submit_save\" class=\"btn btn-primary\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.save"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </section>
    </form>

    <input type=\"hidden\" id=\"path_accounts\" data-url=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_accounts");
        echo "\" />
    <input type=\"hidden\" id=\"path_properties\" data-url=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_properties");
        echo "\" />
    <input type=\"hidden\" id=\"path_profiles\" data-url=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_profiles");
        echo "\" />
    <input type=\"hidden\" id=\"path_segment_add\" data-url=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_segment_add");
        echo "\" />
    <input type=\"hidden\" id=\"path_segment_delete\" data-url=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_segment_delete");
        echo "\" />
    <input type=\"hidden\" id=\"path_segment_edit\" data-url=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_segment_edit");
        echo "\" />
    <input type=\"hidden\" id=\"path_config_save\" data-url=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kunstmaan_dashboard_ajax_config_save");
        echo "\" />
    <input type=\"hidden\" id=\"account_id\" data-id=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["accountId"]) || array_key_exists("accountId", $context) ? $context["accountId"] : (function () { throw new RuntimeError('Variable "accountId" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"property_id\" data-id=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["propertyId"]) || array_key_exists("propertyId", $context) ? $context["propertyId"] : (function () { throw new RuntimeError('Variable "propertyId" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"profile_id\" data-id=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["profileId"]) || array_key_exists("profileId", $context) ? $context["profileId"] : (function () { throw new RuntimeError('Variable "profileId" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" id=\"config_id\" data-id=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["configId"]) || array_key_exists("configId", $context) ? $context["configId"] : (function () { throw new RuntimeError('Variable "configId" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/setup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  439 => 132,  435 => 131,  431 => 130,  427 => 129,  423 => 128,  419 => 127,  415 => 126,  411 => 125,  407 => 124,  403 => 123,  399 => 122,  389 => 116,  381 => 114,  373 => 112,  371 => 111,  364 => 106,  353 => 103,  350 => 102,  346 => 101,  341 => 99,  338 => 98,  334 => 96,  323 => 93,  320 => 92,  316 => 91,  310 => 89,  308 => 88,  300 => 82,  290 => 78,  284 => 77,  278 => 76,  271 => 72,  267 => 71,  260 => 69,  254 => 67,  250 => 66,  241 => 62,  236 => 60,  226 => 53,  219 => 51,  214 => 48,  211 => 47,  202 => 44,  193 => 43,  188 => 42,  186 => 41,  182 => 40,  175 => 38,  170 => 35,  167 => 34,  158 => 31,  149 => 30,  144 => 29,  142 => 28,  138 => 27,  131 => 25,  126 => 22,  117 => 19,  108 => 18,  104 => 17,  100 => 16,  93 => 12,  87 => 8,  78 => 5,  75 => 4,  71 => 3,  68 => 2,  58 => 1,  46 => 134,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <form method=\"post\" action=\"\" class=\"form--dashboard-setup\" id=\"dashboard-setup-form\">
        {% for flashMessage in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-success\">
                {{ flashMessage }}
            </div>
        {% endfor %}

        <section class=\"row\">
            <aside class=\"col-md-3 form--dashboard-setup__aside\">
                <div class=\"setup-group\" id=\"account-group\">
                    <h4>{{ 'dashboard.ga.setup.accounts' | trans }}</h4>

                    <div id=\"accounts\" class=\"setup-group__select__wrapper\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\" selected>{{ 'dashboard.ga.setup.account.select' | trans }}</option>
                            {% for account in accounts %}
                                <option {% if account.accountId == accountId %}selected{% endif %} data-id=\"{{account.accountId}}\">
                                    {{ account.accountName }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <div id=\"properties\" class=\"setup-group__select__wrapper{% if properties is not defined %} not-shown{% endif %}\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\">{{ 'dashboard.ga.setup.property.select' | trans }}</option>
                            {% if properties is defined %}
                                {% for property in properties %}
                                    <option {% if property.propertyId == propertyId %}selected{% endif %} data-id=\"{{property.propertyId}}\">
                                        {{ property.propertyName }}
                                    </option>
                                {% endfor %}
                            {% endif %}
                        </select>
                    </div>

                    <div id=\"profiles\" class=\"setup-group__select__wrapper{% if profiles is not defined %} not-shown{% endif %}\">
                        <select class=\"setup-group__select js-advanced-select form-control advanced-select\">
                            <option data-id=\"\">{{ 'dashboard.ga.setup.profile.select' | trans }}</option>
                            {% if profiles is defined %}
                                {% for profile in profiles %}
                                    <option {% if profile.profileId == profileId %}selected{% endif %} data-id=\"{{profile.profileId}}\">
                                        {{ profile.profileName }}
                                    </option>
                                {% endfor %}
                            {% endif %}
                        </select>
                    </div>

                    <input type=\"checkbox\" name=\"disableGoals\" id=\"disableGoals\" name=\"disableGoals\" {% if disableGoals %}checked{% endif %} />
                    <label for=\"disableGoals\">
                        {{'dashboard.ga.setup.goals.disable' | trans}}
                    </label>
                </div>
            </aside>

            <div class=\"col-md-9 form--dashboard-setup__content\">
                <div class=\"setup-group segment-group\" id=\"segment-group\">
                    <h4>{{ 'dashboard.ga.setup.segments' | trans }}</h4>
                    <p>
                        {{ 'dashboard.ga.setup.segment.info' | trans }} <a href=\"https://developers.google.com/analytics/devguides/reporting/core/v3/segments\" target=\"_blank\">{{ 'dashboard.ga.setup.segment.here' | trans }}</a>.
                    </p>

                    <ul class=\"add-segment__list\">
                    {% for segment in segments %}
                        <li id=\"segment-list__{{ segment.id }}\" class=\"clearfix add-segment__list-item\">
                            <div class=\"display-view\">
                                <span class=\"display-segment-name\">{{ segment.name }}</span> (<span class=\"display-segment-query\"> {{segment.query}} </span>)
                                <div class=\"btn-group btn-group-xs pull-right\" role=\"group\">
                                    <button class=\"segment-list-button__delete btn btn-danger\" data-segment-id=\"{{ segment.id }}\">remove</button>
                                    <button class=\"segment-list-button__edit btn btn-default\" data-segment-id=\"{{ segment.id }}\">edit</button>
                                </div>
                            </div>
                            <div class=\"edit-view clearfix well\">
                                <input type=\"text\" id=\"segment-edit-name-{{segment.id}}\" class=\"segment-name\" value=\"{{segment.name}}\"/>
                                <input type=\"text\" id=\"segment-edit-query-{{segment.id}}\" class=\"segment-query\" value=\"{{segment.query}}\"/>
                                <button class=\"segment-list-button__confirm btn btn-default pull-right\" data-segment-id=\"{{ segment.id }}\">save</button>
                            </div>
                        </li>
                    {% endfor %}
                    </ul>

                    <div id=\"segments-new\"></div>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"segment-button__add\">add segment</button>

                    <div>
                        {% if profileSegments.own | length > 0 %}
                            <h4>{{ 'dashboard.ga.setup.segment.own' | trans }}</h4>
                            <ul class=\"list-group\">
                            {% for segment in profileSegments.own %}
                                <li class=\"list-group-item\">
                                    {{segment.name}} (<span class=\"segment-query__selection\">{{segment.query}}</span>)
                                </li>
                            {% endfor %}
                            </ul>
                        {% endif %}

                        <h4>{{ 'dashboard.ga.setup.segment.builtin' | trans }}</h4>
                        <ul class=\"list-group\">
                            {% for segment in profileSegments.builtin %}
                                <li class=\"list-group-item\">
                                    {{segment.name}} (<span class=\"segment-query__selection\">{{segment.query}}</span>)
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <div class=\"setup-group\" id=\"control-group\">
                    {% if multiconfig is defined %}
                        <a href=\"{{ path('GaCollectionsBundle_Index', {'configId':configId}) }}\" class=\"btn btn-primary\" type=\"submit\">{{ 'dashboard.ga.setup.back' | trans }}</a>
                    {% else %}
                        <a href=\"{{ path('kunstmaan_dashboard') }}\" class=\"btn btn-default\" type=\"submit\">{{ 'dashboard.ga.setup.back' | trans }}</a>
                    {% endif %}
                    <button disabled id=\"submit_save\" class=\"btn btn-primary\" type=\"submit\">{{ 'form.save' | trans }}</button>
                </div>
            </div>
        </section>
    </form>

    <input type=\"hidden\" id=\"path_accounts\" data-url=\"{{ path('kunstmaan_dashboard_ajax_accounts') }}\" />
    <input type=\"hidden\" id=\"path_properties\" data-url=\"{{ path('kunstmaan_dashboard_ajax_properties') }}\" />
    <input type=\"hidden\" id=\"path_profiles\" data-url=\"{{ path('kunstmaan_dashboard_ajax_profiles') }}\" />
    <input type=\"hidden\" id=\"path_segment_add\" data-url=\"{{ path('kunstmaan_dashboard_ajax_segment_add') }}\" />
    <input type=\"hidden\" id=\"path_segment_delete\" data-url=\"{{ path('kunstmaan_dashboard_ajax_segment_delete') }}\" />
    <input type=\"hidden\" id=\"path_segment_edit\" data-url=\"{{ path('kunstmaan_dashboard_ajax_segment_edit') }}\" />
    <input type=\"hidden\" id=\"path_config_save\" data-url=\"{{ path('kunstmaan_dashboard_ajax_config_save') }}\" />
    <input type=\"hidden\" id=\"account_id\" data-id=\"{{accountId}}\" />
    <input type=\"hidden\" id=\"property_id\" data-id=\"{{propertyId}}\" />
    <input type=\"hidden\" id=\"profile_id\" data-id=\"{{profileId}}\" />
    <input type=\"hidden\" id=\"config_id\" data-id=\"{{configId}}\" />
{% endblock %}


", "@KunstmaanDashboard/GoogleAnalytics/setup.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/setup.html.twig");
    }
}
