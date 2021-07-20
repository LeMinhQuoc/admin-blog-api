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

/* @KunstmaanAdminList/Page/list.html.twig */
class __TwigTemplate_ce96be97bb6acfb3d90b1e6e3ea7ab4cf806201eaab0297615327645cec222f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdminList/Default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Page/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Page/list.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanAdminList/Page/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 4, $this->source); })()), "overviewPage", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "canAdd", [], "method", false, false, false, 5) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "canExport", [], "method", false, false, false, 5)) || twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 5, $this->source); })()), "hasListActions", [], "method", false, false, false, 5))) {
                // line 6
                echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"app__content__header__extra-actions\">
                    ";
                // line 8
                if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 8, $this->source); })()), "canAdd", [], "method", false, false, false, 8)) {
                    // line 9
                    echo "                        <div class=\"btn-group\">
                            <a href='#' data-target='#add-subpage-modal' data-toggle='modal' class='btn btn-primary btn--raise-on-hover'>
                                ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add"), "html", null, true);
                    echo "
                            </a>
                        </div>
                    ";
                }
                // line 15
                echo "
                    ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 16, $this->source); })()), "canExport", [], "method", false, false, false, 16)) {
                    // line 17
                    echo "                        <div class=\"btn-group dropdown\">
                            <a class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin_list.form.export_to"), "html", null, true);
                    echo "
                                <i class=\"fa fa-caret-down btn__icon\"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                ";
                    // line 24
                    $context["exportparams"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 24, $this->source); })()), "filterbuilder", [], "any", false, false, false, 24), "currentparameters", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 24, $this->source); })()), "getExportUrl", [], "method", false, false, false, 24), "params", [], "array", false, false, false, 24));
                    // line 25
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->extensions['Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension']->getSupportedExtensions());
                    foreach ($context['_seq'] as $context["name"] => $context["ext"]) {
                        // line 26
                        echo "                                    ";
                        $context["exportparams"] = twig_array_merge((isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 26, $this->source); })()), ["_format" => $context["ext"]]);
                        // line 27
                        echo "                                    <li>
                                        <a href=\"";
                        // line 28
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 28, $this->source); })()), "getExportUrl", [], "method", false, false, false, 28), "path", [], "array", false, false, false, 28), (isset($context["exportparams"]) || array_key_exists("exportparams", $context) ? $context["exportparams"] : (function () { throw new RuntimeError('Variable "exportparams" does not exist.', 28, $this->source); })())), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-file-";
                        // line 29
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
                        echo " btn__icon\"></i>
                                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['ext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                            </ul>
                        </div>
                    ";
                }
                // line 37
                echo "
                    ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 38, $this->source); })()), "hasListActions", [], "method", false, false, false, 38)) {
                    // line 39
                    echo "                        <div class=\"btn-group\">
                            ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 40, $this->source); })()), "getListActions", [], "method", false, false, false, 40));
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
                        // line 41
                        echo "                                ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 41))) {
                            // line 42
                            echo "                                    ";
                            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 42), "@KunstmaanAdminList/Page/list.html.twig", 42)->display(twig_array_merge($context, ["action" => $context["action"]]));
                            // line 43
                            echo "                                ";
                        } else {
                            // line 44
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 44), "path", [], "array", false, false, false, 44), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["action"], "getUrl", [], "method", false, false, false, 44), "params", [], "array", false, false, false, 44)), "html", null, true);
                            echo "\" class=\"btn\">
                                        ";
                            // line 45
                            if ( !(null === twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 45))) {
                                // line 46
                                echo "                                            <i class=\"fa fa-";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 46), "html", null, true);
                                echo "\"></i>
                                            ";
                                // line 47
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 47)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 49
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "getLabel", [], "method", false, false, false, 49)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 51
                            echo "                                    </a>
                                ";
                        }
                        // line 53
                        echo "                            ";
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
                    // line 54
                    echo "                        </div>
                    ";
                }
                // line 56
                echo "                </div>
            </div>
        ";
            }
            // line 59
            echo "
        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 60, $this->source); })()), "canAdd", [], "any", false, false, false, 60)) {
                // line 61
                echo "            <div id='add-subpage-modal' class='modal fade'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button class='close' data-dismiss='modal'>
                                <i class='fa fa-times'></i>
                            </button>
                            <h3>
                                Add ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 69, $this->source); })()), "readableName", [], "any", false, false, false, 69), "html", null, true);
                echo "
                            </h3>
                        </div>

                        <form action='";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_add", ["id" => twig_get_attribute($this->env, $this->source, $this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getNodeFor(twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 73, $this->source); })()), "overviewPage", [], "any", false, false, false, 73)), "id", [], "any", false, false, false, 73), "type" => twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 73, $this->source); })()), "pageclass", [], "any", false, false, false, 73)]), "html", null, true);
                echo "' method='post' novalidate='novalidate'>
                            <div class='modal-body'>
                                <div class='form-group'>
                                    <label for='addpage_title'>
                                        Title
                                    </label>
                                    <input type='text' name='title' id='addpage_title' class='form-control'>
                                </div>
                            </div>

                            <div class='modal-footer'>
                                <button type='submit' name='submit' class='btn btn-primary btn--raise-on-hover'>
                                    Add
                                </button>
                                <button class='btn btn-default btn--raise-on-hover' data-dismiss='modal'>
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
            }
            // line 96
            echo "    ";
        } else {
            // line 97
            echo "        <div class='alert alert-warning'>
            <strong>Warning: </strong> You need to create at least one overview page before you can create a ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 98, $this->source); })()), "readableName", [], "any", false, false, false, 98), "html", null, true);
            echo "
            <button class='close' data-dismiss='alert'>
                <i class='fa fa-times'></i>
            </button>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/Page/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 98,  279 => 97,  276 => 96,  250 => 73,  243 => 69,  233 => 61,  231 => 60,  228 => 59,  223 => 56,  219 => 54,  205 => 53,  201 => 51,  195 => 49,  190 => 47,  185 => 46,  183 => 45,  178 => 44,  175 => 43,  172 => 42,  169 => 41,  152 => 40,  149 => 39,  147 => 38,  144 => 37,  139 => 34,  129 => 30,  125 => 29,  121 => 28,  118 => 27,  115 => 26,  110 => 25,  108 => 24,  100 => 19,  96 => 17,  94 => 16,  91 => 15,  84 => 11,  80 => 9,  78 => 8,  74 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}

{% block extra_actions_header %}
    {% if adminlistconfigurator.overviewPage %}
        {% if adminlist.canAdd() or adminlist.canExport() or adminlist.hasListActions() %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"app__content__header__extra-actions\">
                    {% if adminlist.canAdd() %}
                        <div class=\"btn-group\">
                            <a href='#' data-target='#add-subpage-modal' data-toggle='modal' class='btn btn-primary btn--raise-on-hover'>
                                {{ 'form.add'|trans }}
                            </a>
                        </div>
                    {% endif %}

                    {% if adminlist.canExport() %}
                        <div class=\"btn-group dropdown\">
                            <a class=\"btn btn-default btn--raise-on-hover dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                {{ 'kuma_admin_list.form.export_to' | trans }}
                                <i class=\"fa fa-caret-down btn__icon\"></i>
                            </a>

                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                {% set exportparams = adminlist.filterbuilder.currentparameters|merge(adminlist.getExportUrl()[(\"params\")]) %}
                                {% for name, ext in supported_export_extensions() %}
                                    {% set exportparams = exportparams|merge({\"_format\": ext}) %}
                                    <li>
                                        <a href=\"{{ path(adminlist.getExportUrl()[\"path\"], exportparams) }}\">
                                            <i class=\"fa fa-file-{{ name | lower }} btn__icon\"></i>
                                            {{ name }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}

                    {% if adminlist.hasListActions() %}
                        <div class=\"btn-group\">
                            {% for action in adminlist.getListActions() %}
                                {% if action.template is not null %}
                                    {% include action.template with {'action': action} %}
                                {% else %}
                                    <a href=\"{{ path(action.getUrl()[\"path\"], action.getUrl()[(\"params\")] ) }}\" class=\"btn\">
                                        {% if action.getIcon() is not null %}
                                            <i class=\"fa fa-{{ action.getIcon() }}\"></i>
                                            {{ action.getLabel()|trans }}
                                        {% else %}
                                            {{ action.getLabel()|trans }}
                                        {% endif %}
                                    </a>
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endif %}

        {% if adminlistconfigurator.canAdd %}
            <div id='add-subpage-modal' class='modal fade'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button class='close' data-dismiss='modal'>
                                <i class='fa fa-times'></i>
                            </button>
                            <h3>
                                Add {{ adminlistconfigurator.readableName }}
                            </h3>
                        </div>

                        <form action='{{ path('KunstmaanNodeBundle_nodes_add', { 'id': get_node_for(adminlistconfigurator.overviewPage).id , 'type' : adminlistconfigurator.pageclass}) }}' method='post' novalidate='novalidate'>
                            <div class='modal-body'>
                                <div class='form-group'>
                                    <label for='addpage_title'>
                                        Title
                                    </label>
                                    <input type='text' name='title' id='addpage_title' class='form-control'>
                                </div>
                            </div>

                            <div class='modal-footer'>
                                <button type='submit' name='submit' class='btn btn-primary btn--raise-on-hover'>
                                    Add
                                </button>
                                <button class='btn btn-default btn--raise-on-hover' data-dismiss='modal'>
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
    {% else %}
        <div class='alert alert-warning'>
            <strong>Warning: </strong> You need to create at least one overview page before you can create a {{ adminlistconfigurator.readableName }}
            <button class='close' data-dismiss='alert'>
                <i class='fa fa-times'></i>
            </button>
        </div>
    {% endif %}
{% endblock %}
", "@KunstmaanAdminList/Page/list.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/Page/list.html.twig");
    }
}
