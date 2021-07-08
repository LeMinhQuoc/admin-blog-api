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

/* @KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig */
class __TwigTemplate_b97d2ba82d369004303949c245bc75a88501ea9fb1b4332cb45ff384802c3cab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'actions' => [$this, 'block_actions'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig"));

        // line 45
        $macros["modal"] = $this->macros["modal"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdminList/Default/list.html.twig", "@KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 48
        echo "
    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 49, $this->source); })()), "current", [], "any", false, false, false, 49)) {
            // line 50
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 50, $this->source); })()), "current", [], "any", false, false, false, 50), "label", [], "any", false, false, false, 50));
            // line 51
            echo "    ";
        } else {
            // line 52
            echo "        ";
            $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 52, $this->source); })()), "configurator", [], "any", false, false, false, 52), "getEntityName", [], "method", false, false, false, 52);
            // line 53
            echo "    ";
        }
        // line 54
        echo "    
    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 55, $this->source); })()), "overviewPage", [], "any", false, false, false, 55)) {
            // line 56
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 56, $this->source); })()), "canAdd", [], "method", false, false, false, 56)) {
                // line 57
                echo "            <div class=\"col-sm-6 col-md-4\">
                <!-- Main-actions -->
                <div class=\"page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                    <div class=\"btn-group\">
                        ";
                // line 61
                $this->displayBlock('actions', $context, $blocks);
                // line 82
                echo "                    </div>
                </div>
            </div>

            ";
                // line 86
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 86, $this->source); })()), "overviewPages", [], "any", false, false, false, 86)) > 1)) {
                    // line 87
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 87, $this->source); })()), "overviewPages", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["overviewPage"]) {
                        // line 88
                        echo "                    ";
                        echo twig_call_macro($macros["modal"], "macro_modal", [$context["overviewPage"], (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 88, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 88, $this->source); })()), "configurator", [], "any", false, false, false, 88), "getEntityClassName", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overviewPage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "            ";
                } else {
                    // line 91
                    echo "                ";
                    echo twig_call_macro($macros["modal"], "macro_modal", [twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 91, $this->source); })()), "overviewPage", [], "any", false, false, false, 91), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 91, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 91, $this->source); })()), "configurator", [], "any", false, false, false, 91), "getEntityClassName", [], "any", false, false, false, 91)], 91, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 93
                echo "
        ";
            }
            // line 95
            echo "
    ";
        } else {
            // line 97
            echo "        <div class=\"alert alert-warning\">
            <strong>";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.warning"), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("article.warning.create_overview_page", ["%type%" => twig_lower_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 98, $this->source); })()))]), "html", null, true);
            echo "
            <button class=\"close\" data-dismiss=\"alert\">
                <i class=\"fa fa-times\"></i>
            </button>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 62
        echo "                            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 62, $this->source); })()), "overviewPages", [], "any", false, false, false, 62)) > 1)) {
            // line 63
            echo "                                <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add"), "html", null, true);
            echo "
                                    <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 68, $this->source); })()), "overviewPages", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["key"] => $context["overviewPage"]) {
                // line 69
                echo "                                        <li>
                                            <a data-target=\"#add-subpage-modal-";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overviewPage"], "id", [], "any", false, false, false, 70), "html", null, true);
                echo "\" data-toggle=\"modal\" href=\"#\">
                                                ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["overviewPage"], "pageTitle", [], "any", false, false, false, 71), "html", null, true);
                echo "
                                            </a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['overviewPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                </ul>
                            ";
        } else {
            // line 77
            echo "                                <button type=\"button\" data-target=\"#add-subpage-modal-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 77, $this->source); })()), "overviewPage", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\" data-toggle=\"modal\" class=\"btn btn-primary btn--raise-on-hover\">
                                    ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add"), "html", null, true);
            echo "
                                </button>
                            ";
        }
        // line 81
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function macro_modal($__overviewPage__ = null, $__title__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "overviewPage" => $__overviewPage__,
            "title" => $__title__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modal"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modal"));

            // line 4
            echo "    <!-- Modal - Add Subpage -->
    <div id=\"add-subpage-modal-";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["overviewPage"]) || array_key_exists("overviewPage", $context) ? $context["overviewPage"] : (function () { throw new RuntimeError('Variable "overviewPage" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Header -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("article.modal.add.label", ["%type%" => twig_lower_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })())), "%page%" => twig_get_attribute($this->env, $this->source, (isset($context["overviewPage"]) || array_key_exists("overviewPage", $context) ? $context["overviewPage"] : (function () { throw new RuntimeError('Variable "overviewPage" does not exist.', 15, $this->source); })()), "pageTitle", [], "any", false, false, false, 15)]), "html", null, true);
            echo "
                    </h3>
                </div>

                <form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_add", ["id" => twig_get_attribute($this->env, $this->source, $this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getNodeFor((isset($context["overviewPage"]) || array_key_exists("overviewPage", $context) ? $context["overviewPage"] : (function () { throw new RuntimeError('Variable "overviewPage" does not exist.', 19, $this->source); })())), "id", [], "any", false, false, false, 19), "type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 19, $this->source); })())]), "html", null, true);
            echo "\" method=\"post\" novalidate=\"novalidate\">
                    <!-- Body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.form.page.page_title.label"), "html", null, true);
            echo "
                            </label>
                            <input type=\"text\" name=\"title\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.add"), "html", null, true);
            echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
            echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 36,  299 => 33,  287 => 24,  279 => 19,  272 => 15,  259 => 5,  256 => 4,  235 => 3,  225 => 81,  219 => 78,  214 => 77,  210 => 75,  200 => 71,  196 => 70,  193 => 69,  189 => 68,  182 => 64,  179 => 63,  176 => 62,  166 => 61,  147 => 98,  144 => 97,  140 => 95,  136 => 93,  130 => 91,  127 => 90,  118 => 88,  113 => 87,  111 => 86,  105 => 82,  103 => 61,  97 => 57,  94 => 56,  92 => 55,  89 => 54,  86 => 53,  83 => 52,  80 => 51,  77 => 50,  75 => 49,  72 => 48,  62 => 47,  51 => 1,  49 => 45,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdminList/Default/list.html.twig' %}

{% macro modal(overviewPage, title, type) %}
    <!-- Modal - Add Subpage -->
    <div id=\"add-subpage-modal-{{ overviewPage.id }}\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Header -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <h3>
                        {{ 'article.modal.add.label' | trans({ '%type%': title | lower, '%page%': overviewPage.pageTitle }) }}
                    </h3>
                </div>

                <form action=\"{{ path('KunstmaanNodeBundle_nodes_add', { 'id': get_node_for(overviewPage).id , 'type' : type}) }}\" method=\"post\" novalidate=\"novalidate\">
                    <!-- Body -->
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"addpage_title\">
                                {{ 'kuma_node.form.page.page_title.label' | trans }}
                            </label>
                            <input type=\"text\" name=\"title\" id=\"addpage_title\" class=\"form-control\">
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'form.add' | trans }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'form.cancel' | trans }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endmacro %}

{% import _self as modal %}

{% block extra_actions_header %}

    {% if adminmenu.current %}
        {% set title = adminmenu.current.label | trans %}
    {% else %}
        {% set title = adminlist.configurator.getEntityName() %}
    {% endif %}
    
    {% if adminlistconfigurator.overviewPage %}
        {% if adminlist.canAdd() %}
            <div class=\"col-sm-6 col-md-4\">
                <!-- Main-actions -->
                <div class=\"page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
                    <div class=\"btn-group\">
                        {% block actions %}
                            {% if adminlistconfigurator.overviewPages | length > 1 %}
                                <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    {{ 'form.add' | trans }}
                                    <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    {% for key, overviewPage in adminlistconfigurator.overviewPages %}
                                        <li>
                                            <a data-target=\"#add-subpage-modal-{{ overviewPage.id }}\" data-toggle=\"modal\" href=\"#\">
                                                {{ overviewPage.pageTitle }}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                <button type=\"button\" data-target=\"#add-subpage-modal-{{ adminlistconfigurator.overviewPage.id }}\" data-toggle=\"modal\" class=\"btn btn-primary btn--raise-on-hover\">
                                    {{ 'form.add' | trans }}
                                </button>
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
            </div>

            {% if adminlistconfigurator.overviewPages | length > 1 %}
                {% for overviewPage in adminlistconfigurator.overviewPages %}
                    {{ modal.modal(overviewPage, title, adminlist.configurator.getEntityClassName) }}
                {% endfor %}
            {% else %}
                {{ modal.modal(adminlistconfigurator.overviewPage, title, adminlist.configurator.getEntityClassName) }}
            {% endif %}

        {% endif %}

    {% else %}
        <div class=\"alert alert-warning\">
            <strong>{{ 'form.warning' | trans }}: </strong> {{ 'article.warning.create_overview_page' | trans({ '%type%': title | lower }) }}
            <button class=\"close\" data-dismiss=\"alert\">
                <i class=\"fa fa-times\"></i>
            </button>
        </div>
    {% endif %}
{% endblock %}
", "@KunstmaanArticle/AbstractArticlePageAdminList/list.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/article-bundle/Resources/views/AbstractArticlePageAdminList/list.html.twig");
    }
}
