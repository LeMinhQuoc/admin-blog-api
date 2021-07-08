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

/* @KunstmaanDashboard/GoogleAnalytics/widget.html.twig */
class __TwigTemplate_9af20c45c7353f7b311315eab04b3dc514eb039d74861e652fdddc9baa1afddf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig"));

        // line 1
        if ((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"dashboard\">
    ";
            // line 3
            if ((twig_length_filter($this->env, (isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 3, $this->source); })())) > 0)) {
                // line 4
                echo "        <nav id=\"segment-menu\" class=\"segment-menu\">
            <select class=\"form-control\">
                    <option data-segment-id=\"#\" data-config-id=\"";
                // line 6
                if (array_key_exists("configId", $context)) {
                    echo twig_escape_filter($this->env, (isset($context["configId"]) || array_key_exists("configId", $context) ? $context["configId"] : (function () { throw new RuntimeError('Variable "configId" does not exist.', 6, $this->source); })()), "html", null, true);
                }
                echo "\"";
                if ((null === (isset($context["segmentId"]) || array_key_exists("segmentId", $context) ? $context["segmentId"] : (function () { throw new RuntimeError('Variable "segmentId" does not exist.', 6, $this->source); })()))) {
                    echo " selected";
                }
                echo ">Default</option>
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 7, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                    // line 8
                    echo "                        <option data-segment-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "\" data-config-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["segment"], "config", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["segment"], "id", [], "any", false, false, false, 8) == (isset($context["segmentId"]) || array_key_exists("segmentId", $context) ? $context["segmentId"] : (function () { throw new RuntimeError('Variable "segmentId" does not exist.', 8, $this->source); })()))) {
                        echo " selected";
                    }
                    echo ">
                            ";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["segment"], "name", [], "any", false, false, false, 9), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "                </select>
            </nav>
        ";
            }
            // line 15
            echo "
        <div id=\"data_overview\" class=\"dashboard__content--loading\">
            <!-- TABS -->
            ";
            // line 18
            $this->loadTemplate("@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig", 18)->display(twig_array_merge($context, ["overviews" => (isset($context["overviews"]) || array_key_exists("overviews", $context) ? $context["overviews"] : (function () { throw new RuntimeError('Variable "overviews" does not exist.', 18, $this->source); })())]));
            // line 19
            echo "            <!-- end TABS -->

            <!-- TAB CONTENT -->
            <section class=\"dashboard__content\">
                <!-- CHART -->
                ";
            // line 24
            $this->loadTemplate("@KunstmaanDashboard/GoogleAnalytics/chart.html.twig", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig", 24)->display($context);
            // line 25
            echo "                <!-- end CHART -->

                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["overviews"]) || array_key_exists("overviews", $context) ? $context["overviews"] : (function () { throw new RuntimeError('Variable "overviews" does not exist.', 27, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["overview"]) {
                // line 28
                echo "                    <!-- GOALS -->
                    ";
                // line 29
                $this->loadTemplate("@KunstmaanDashboard/GoogleAnalytics/goals.html.twig", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig", 29)->display(twig_array_merge($context, ["overview" => $context["overview"]]));
                // line 30
                echo "                    <!-- end GOALS -->
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </section>
            <!-- end TAB CONTENT -->

            <div id=\"data_no_overview\" style=\"display:none\">
                <section class=\"dashboard__content\">
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.unavailable"), "html", null, true);
            echo "</p>
                    ";
            // line 38
            if ( !array_key_exists("configId", $context)) {
                // line 39
                echo "                        <button data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanDashboardBundle_analytics_update", ["segmentId" => (isset($context["segmentId"]) || array_key_exists("segmentId", $context) ? $context["segmentId"] : (function () { throw new RuntimeError('Variable "segmentId" does not exist.', 39, $this->source); })())]), "html", null, true);
                echo "\" class=\"dashboard_update btn btn-primary\">Update</button>
                    ";
            } else {
                // line 41
                echo "                        <button data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanDashboardBundle_analytics_update", ["configId" => (isset($context["configId"]) || array_key_exists("configId", $context) ? $context["configId"] : (function () { throw new RuntimeError('Variable "configId" does not exist.', 41, $this->source); })()), "segmentId" => (isset($context["segmentId"]) || array_key_exists("segmentId", $context) ? $context["segmentId"] : (function () { throw new RuntimeError('Variable "segmentId" does not exist.', 41, $this->source); })())]), "html", null, true);
                echo "\" class=\"dashboard_update btn btn-primary\">Update</button>
                    ";
            }
            // line 43
            echo "                </section>
            </div>
        </div>

        <section id=\"dashboard_footer\">
            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 49
                echo "                ";
                if ( !array_key_exists("configId", $context)) {
                    // line 50
                    echo "                    <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanDashboardBundle_Config");
                    echo "\">
                        ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.setup.link"), "html", null, true);
                    echo "</a> |
                ";
                }
                // line 53
                echo "                <a href=\"#\" class=\"dashboard_update\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanDashboardBundle_analytics_update", ["segmentId" => (isset($context["segmentId"]) || array_key_exists("segmentId", $context) ? $context["segmentId"] : (function () { throw new RuntimeError('Variable "segmentId" does not exist.', 53, $this->source); })())]), "html", null, true);
                echo "\">
                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.last_update"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["last_update"]) || array_key_exists("last_update", $context) ? $context["last_update"] : (function () { throw new RuntimeError('Variable "last_update" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "
                </a>
            ";
            } else {
                // line 57
                echo "                <span>
                    ";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.ga.last_update"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["last_update"]) || array_key_exists("last_update", $context) ? $context["last_update"] : (function () { throw new RuntimeError('Variable "last_update" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 61
            echo "        </section>
    </div>

    <input type=\"hidden\" id=\"disable-goals\" data-disable-goals=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["disableGoals"]) || array_key_exists("disableGoals", $context) ? $context["disableGoals"] : (function () { throw new RuntimeError('Variable "disableGoals" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "\" />

";
        } else {
            // line 67
            echo "    ";
            $this->loadTemplate("@KunstmaanDashboard/GoogleAnalytics/connect.html.twig", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig", 67)->display(twig_array_merge($context, ["authUrl" => (isset($context["authUrl"]) || array_key_exists("authUrl", $context) ? $context["authUrl"] : (function () { throw new RuntimeError('Variable "authUrl" does not exist.', 67, $this->source); })())]));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 67,  226 => 64,  221 => 61,  213 => 58,  210 => 57,  202 => 54,  197 => 53,  192 => 51,  187 => 50,  184 => 49,  182 => 48,  175 => 43,  169 => 41,  163 => 39,  161 => 38,  157 => 37,  150 => 32,  135 => 30,  133 => 29,  130 => 28,  113 => 27,  109 => 25,  107 => 24,  100 => 19,  98 => 18,  93 => 15,  88 => 12,  79 => 9,  68 => 8,  64 => 7,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if token %}
    <div class=\"dashboard\">
    {% if segments | length > 0 %}
        <nav id=\"segment-menu\" class=\"segment-menu\">
            <select class=\"form-control\">
                    <option data-segment-id=\"#\" data-config-id=\"{% if configId is defined %}{{configId}}{% endif %}\"{% if segmentId is null %} selected{% endif %}>Default</option>
                    {% for segment in segments %}
                        <option data-segment-id=\"{{segment.id}}\" data-config-id=\"{{segment.config.id}}\"{% if segment.id == segmentId %} selected{% endif %}>
                            {{segment.name}}
                        </option>
                    {% endfor %}
                </select>
            </nav>
        {% endif %}

        <div id=\"data_overview\" class=\"dashboard__content--loading\">
            <!-- TABS -->
            {% include '@KunstmaanDashboard/GoogleAnalytics/tabs.html.twig' with {'overviews' : overviews} %}
            <!-- end TABS -->

            <!-- TAB CONTENT -->
            <section class=\"dashboard__content\">
                <!-- CHART -->
                {% include '@KunstmaanDashboard/GoogleAnalytics/chart.html.twig' %}
                <!-- end CHART -->

                {% for overview in overviews %}
                    <!-- GOALS -->
                    {% include '@KunstmaanDashboard/GoogleAnalytics/goals.html.twig' with {'overview':overview} %}
                    <!-- end GOALS -->
                {% endfor %}
            </section>
            <!-- end TAB CONTENT -->

            <div id=\"data_no_overview\" style=\"display:none\">
                <section class=\"dashboard__content\">
                    <p>{{ 'dashboard.ga.unavailable' | trans}}</p>
                    {% if configId is not defined %}
                        <button data-path=\"{{ path('KunstmaanDashboardBundle_analytics_update', {'segmentId':segmentId}) }}\" class=\"dashboard_update btn btn-primary\">Update</button>
                    {% else %}
                        <button data-path=\"{{ path('KunstmaanDashboardBundle_analytics_update', {'configId':configId, 'segmentId':segmentId}) }}\" class=\"dashboard_update btn btn-primary\">Update</button>
                    {% endif %}
                </section>
            </div>
        </div>

        <section id=\"dashboard_footer\">
            {% if is_granted('ROLE_SUPER_ADMIN') %}
                {% if configId is not defined %}
                    <a href=\"{{ path('KunstmaanDashboardBundle_Config') }}\">
                        {{ 'dashboard.ga.setup.link' | trans }}</a> |
                {% endif %}
                <a href=\"#\" class=\"dashboard_update\" data-path=\"{{ path('KunstmaanDashboardBundle_analytics_update', {'segmentId':segmentId}) }}\">
                    {{ 'dashboard.ga.last_update' | trans }} {{last_update}}
                </a>
            {% else %}
                <span>
                    {{ 'dashboard.ga.last_update' | trans }} {{last_update}}
                </span>
            {% endif %}
        </section>
    </div>

    <input type=\"hidden\" id=\"disable-goals\" data-disable-goals=\"{{disableGoals}}\" />

{% else %}
    {% include '@KunstmaanDashboard/GoogleAnalytics/connect.html.twig' with {'authUrl' : authUrl} %}
{% endif %}
", "@KunstmaanDashboard/GoogleAnalytics/widget.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/dashboard-bundle/Resources/views/GoogleAnalytics/widget.html.twig");
    }
}
