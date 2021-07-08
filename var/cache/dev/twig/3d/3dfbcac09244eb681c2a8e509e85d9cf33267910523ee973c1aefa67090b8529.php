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

/* @KunstmaanForm/FormSubmissions/edit.html.twig */
class __TwigTemplate_c65d13e5aeb3813450bca2aa03f7785ec2ea0b936badc3978999b6bf8c552abf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'page_header_addition' => [$this, 'block_page_header_addition'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanAdmin/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FormSubmissions/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FormSubmissions/edit.html.twig"));

        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanForm/FormSubmissions/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 4, $this->source); })()), "current", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"page-header\">
            <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 6, $this->source); })()), "current", [], "any", false, false, false, 6), "label", [], "any", false, false, false, 6)), "html", null, true);
            echo " ";
            $this->displayBlock('page_header_addition', $context, $blocks);
            echo "</h1>
            <small><strong>date</strong>: ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 7, $this->source); })()), "created", [], "any", false, false, false, 7)), "html", null, true);
            echo " / <strong>language</strong>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 7, $this->source); })()), "lang", [], "any", false, false, false, 7), "html", null, true);
            echo " / <strong>ip</strong>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 7, $this->source); })()), "ipAddress", [], "any", false, false, false, 7), "html", null, true);
            echo "</small>
            ";
            // line 8
            $this->displayBlock('extra_actions_header', $context, $blocks);
            // line 19
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_page_header_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_addition"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header_addition"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 9
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 9, $this->source); })()), "canDelete", [0 => (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 9, $this->source); })())], "method", false, false, false, 9)) {
            // line 10
            echo "                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            <a class=\"btn btn--raise-on-hover btn-danger\" href=\"#\" data-toggle=\"modal\" data-target=\"#sure-modal-";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                                ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
            echo "
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 18
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 24, $this->source); })()), "fields", [], "any", false, false, false, 24));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 25
            echo "                <p><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 25), "html", null, true);
            echo "</strong></p>
                <p>
                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["field"], "submissionTemplate", [], "any", true, true, false, 27)) {
                // line 28
                echo "                        ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["field"], "submissionTemplate", [], "any", false, false, false, 28), "@KunstmaanForm/FormSubmissions/edit.html.twig", 28)->display(twig_array_merge($context, ["resource" => $context["field"], "host" => ""]));
                // line 29
                echo "                    ";
            } else {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                </p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 35, $this->source); })()), "canDelete", [0 => (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 35, $this->source); })())], "method", false, false, false, 35)) {
            // line 36
            echo "        ";
            $context["item"] = (isset($context["formsubmission"]) || array_key_exists("formsubmission", $context) ? $context["formsubmission"] : (function () { throw new RuntimeError('Variable "formsubmission" does not exist.', 36, $this->source); })());
            // line 37
            echo "        ";
            $this->loadTemplate("@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig", "@KunstmaanForm/FormSubmissions/edit.html.twig", 37)->display($context);
            // line 38
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanForm/FormSubmissions/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 38,  233 => 37,  230 => 36,  228 => 35,  225 => 34,  210 => 32,  204 => 30,  201 => 29,  198 => 28,  196 => 27,  190 => 25,  172 => 24,  162 => 23,  152 => 18,  144 => 13,  140 => 12,  136 => 10,  133 => 9,  123 => 8,  105 => 6,  93 => 19,  91 => 8,  83 => 7,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}

{% block header %}
    {% if adminmenu.current %}
        <div class=\"page-header\">
            <h1>{{ adminmenu.current.label | trans }} {% block page_header_addition %}{% endblock %}</h1>
            <small><strong>date</strong>: {{ formsubmission.created|date }} / <strong>language</strong>: {{ formsubmission.lang }} / <strong>ip</strong>: {{ formsubmission.ipAddress }}</small>
            {% block extra_actions_header %}
                {% if adminlist.canDelete(formsubmission) %}
                    <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                        <div class=\"btn-group\">
                            <a class=\"btn btn--raise-on-hover btn-danger\" href=\"#\" data-toggle=\"modal\" data-target=\"#sure-modal-{{ formsubmission.id }}\">
                                {{ 'action.delete' | trans }}
                            </a>
                        </div>
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}

{% block content %}
        {% for field in formsubmission.fields %}
                <p><strong>{{ field.label }}</strong></p>
                <p>
                    {% if (field.submissionTemplate is defined) %}
                        {% include field.submissionTemplate with {'resource' : field, 'host' : ''} %}
                    {% else %}
                        {{ field }}
                    {% endif %}
                </p>
        {% endfor %}

    {% if adminlist.canDelete(formsubmission) %}
        {% set item = formsubmission %}
        {% include '@KunstmaanAdminList/AdminListTwigExtension/sure-modal.html.twig' %}
    {% endif %}
{% endblock %}
", "@KunstmaanForm/FormSubmissions/edit.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/form-bundle/Resources/views/FormSubmissions/edit.html.twig");
    }
}
