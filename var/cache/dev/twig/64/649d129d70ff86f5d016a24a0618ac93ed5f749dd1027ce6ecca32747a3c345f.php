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

/* @KunstmaanNode/NodeAdmin/edit.html.twig */
class __TwigTemplate_a213d97e77e1845975854c6cdd6b7a5c2fbc6a76206cbdc16ed732de93b6b68c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extrabodyclasses' => [$this, 'block_extrabodyclasses'],
            'messages' => [$this, 'block_messages'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'extracss' => [$this, 'block_extracss'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KunstmaanNode/Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/edit.html.twig"));

        // line 2
        $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 2, $this->source); })()), "getFormView", [], "method", false, false, false, 2);
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanNode/Default/layout.html.twig", "@KunstmaanNode/NodeAdmin/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_extrabodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrabodyclasses"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrabodyclasses"));

        $this->displayParentBlock("extrabodyclasses", $context, $blocks);
        echo " js-check-if-edited";
        if ((isset($context["nodeVersionLockCheck"]) || array_key_exists("nodeVersionLockCheck", $context) ? $context["nodeVersionLockCheck"] : (function () { throw new RuntimeError('Variable "nodeVersionLockCheck" does not exist.', 4, $this->source); })())) {
            echo " js-node-version-lock";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 7
        echo "    ";
        if ((isset($context["queuedNodeTranslationAction"]) || array_key_exists("queuedNodeTranslationAction", $context) ? $context["queuedNodeTranslationAction"] : (function () { throw new RuntimeError('Variable "queuedNodeTranslationAction" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-warning\">
            <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning"), "html", null, true);
            echo ": </strong>
            ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, (isset($context["queuedNodeTranslationAction"]) || array_key_exists("queuedNodeTranslationAction", $context) ? $context["queuedNodeTranslationAction"] : (function () { throw new RuntimeError('Variable "queuedNodeTranslationAction" does not exist.', 10, $this->source); })()), "action", [], "any", false, false, false, 10) == "publish")) {
                // line 11
                echo "                ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.will_be_publish_at.%date%.raw", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 12
(isset($context["queuedNodeTranslationAction"]) || array_key_exists("queuedNodeTranslationAction", $context) ? $context["queuedNodeTranslationAction"] : (function () { throw new RuntimeError('Variable "queuedNodeTranslationAction" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), "Y-m-d H:i:s")]);
                // line 14
                echo "
            ";
            } else {
                // line 16
                echo "                ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.will_be_unpublish_at.%date%.raw", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 17
(isset($context["queuedNodeTranslationAction"]) || array_key_exists("queuedNodeTranslationAction", $context) ? $context["queuedNodeTranslationAction"] : (function () { throw new RuntimeError('Variable "queuedNodeTranslationAction" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "Y-m-d H:i:s")]);
                // line 19
                echo "
            ";
            }
            // line 21
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_unschedule_publish", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn--raise-on-hover alert__action\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.button.schedulle_cancel"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 26
        echo "    ";
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\FormToolsExtension']->hasErrorMessages((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        <div class=\"alert alert-danger\">
            <strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.error.title"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.error.validation"), "html", null, true);
            echo "
            ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'errors');
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

    // line 38
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 39
        echo "    <!-- PageClassName: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 39, $this->source); })()), "refEntityName", [], "any", false, false, false, 39), "html", null, true);
        echo " -->
    <h1 class=\"app__content__header__title\">
        ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 42
            echo "            <abbr title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 42, $this->source); })()), "refEntityName", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</abbr>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ((isset($context["draft"]) || array_key_exists("draft", $context) ? $context["draft"] : (function () { throw new RuntimeError('Variable "draft" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            <small class=\"app__content__header__title__small app__content__header__title__small--offline\">
                ";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.offline_draft.%public_url%.raw", ["%public_url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_edit", ["id" => twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)])]);
            // line 52
            echo "
            </small>
        ";
        } elseif ( !$this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->isStructureNode(        // line 54
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "            <small class=\"app__content__header__title__small ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["nodeTranslation"]) || array_key_exists("nodeTranslation", $context) ? $context["nodeTranslation"] : (function () { throw new RuntimeError('Variable "nodeTranslation" does not exist.', 55, $this->source); })()), "online", [], "any", false, false, false, 55)) {
                echo "app__content__header__title__small--online";
            } else {
                echo "app__content__header__title__small--offline";
            }
            echo "\">
                ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, (isset($context["nodeTranslation"]) || array_key_exists("nodeTranslation", $context) ? $context["nodeTranslation"] : (function () { throw new RuntimeError('Variable "nodeTranslation" does not exist.', 56, $this->source); })()), "online", [], "any", false, false, false, 56)) {
                // line 57
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.online_public.raw");
                // line 60
                echo "
                ";
            } else {
                // line 62
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.offline.raw");
                // line 65
                echo "
                ";
            }
            // line 67
            echo "                ";
            if ( !(null === (isset($context["draftNodeVersion"]) || array_key_exists("draftNodeVersion", $context) ? $context["draftNodeVersion"] : (function () { throw new RuntimeError('Variable "draftNodeVersion" does not exist.', 67, $this->source); })()))) {
                // line 68
                echo "                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.status.go_to_draft_version.%url%.raw", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_edit", ["id" => twig_get_attribute($this->env, $this->source,                 // line 69
(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "subaction" => "draft"])]);
                // line 71
                echo "
                ";
            }
            // line 73
            echo "            </small>
        ";
        }
        // line 75
        echo "    </h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "    ";
        if ((isset($context["nodeVersionLockCheck"]) || array_key_exists("nodeVersionLockCheck", $context) ? $context["nodeVersionLockCheck"] : (function () { throw new RuntimeError('Variable "nodeVersionLockCheck" does not exist.', 81, $this->source); })())) {
            // line 82
            echo "        <div class=\"hidden\" id=\"js-node-version-lock-data\" data-check-interval=\"";
            echo twig_escape_filter($this->env, (isset($context["nodeVersionLockInterval"]) || array_key_exists("nodeVersionLockInterval", $context) ? $context["nodeVersionLockInterval"] : (function () { throw new RuntimeError('Variable "nodeVersionLockInterval" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_versionlock_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "public" => (((isset($context["draft"]) || array_key_exists("draft", $context) ? $context["draft"] : (function () { throw new RuntimeError('Variable "draft" does not exist.', 82, $this->source); })())) ? (0) : (1))]), "html", null, true);
            echo "\">
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span class=\"message\"></span>
            </div>
        </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanNodeBundle_nodes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92), "subaction" => (isset($context["subaction"]) || array_key_exists("subaction", $context) ? $context["subaction"] : (function () { throw new RuntimeError('Variable "subaction" does not exist.', 92, $this->source); })())]), "attr" => ["novalidate" => "novalidate", "id" => "pageadminform", "class" => "form"]]);
        echo "

        ";
        // line 94
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sub_actions", ["template" => "@KunstmaanNode/Menu/knp_menu_actions.html.twig"]);
        echo "
        ";
        // line 95
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("actions", ["template" => "@KunstmaanNode/Menu/knp_menu_actions.html.twig"]);
        echo "
        ";
        // line 96
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("top_actions", ["template" => "@KunstmaanNode/Menu/knp_menu_top_actions.html.twig"]);
        echo "

        ";
        // line 98
        echo $this->extensions['Kunstmaan\AdminBundle\Twig\TabsTwigExtension']->renderWidget($this->env, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 98, $this->source); })()));
        echo "

        <!-- Modal - Publish -->
        ";
        // line 101
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig", "@KunstmaanNode/NodeAdmin/edit.html.twig", 101)->display($context);
        // line 102
        echo "        <!-- Modal - Unpublish -->
        ";
        // line 103
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig", "@KunstmaanNode/NodeAdmin/edit.html.twig", 103)->display($context);
        // line 104
        echo "
    ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "

    ";
        // line 107
        $this->loadTemplate("@KunstmaanNode/NodeAdmin/_modals.html.twig", "@KunstmaanNode/NodeAdmin/edit.html.twig", 107)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 111
        echo "
    ";
        // line 112
        if ( !(null === $this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getOverviewRoute((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 112, $this->source); })())))) {
            // line 113
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->getOverviewRoute((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 113, $this->source); })())));
            echo "\" class=\"btn btn-default\" style=\"margin:20px 0 20px 0;\"><i class=\"fa fa-arrow-left\"></i>
            Back to overview
        </a>
    ";
        } else {
            // line 117
            echo "        ";
            $this->displayParentBlock("breadcrumb", $context, $blocks);
            echo "
    ";
        }
        // line 119
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_extracss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extracss"));

        // line 123
        echo "    ";
        $context["cssPath"] = "frontend/css/admin-style.css";
        // line 124
        echo "    ";
        if ($this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->fileExists((isset($context["cssPath"]) || array_key_exists("cssPath", $context) ? $context["cssPath"] : (function () { throw new RuntimeError('Variable "cssPath" does not exist.', 124, $this->source); })()))) {
            // line 125
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/" . (isset($context["cssPath"]) || array_key_exists("cssPath", $context) ? $context["cssPath"] : (function () { throw new RuntimeError('Variable "cssPath" does not exist.', 125, $this->source); })()))), "html", null, true);
            echo "\">
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanNode/NodeAdmin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 125,  401 => 124,  398 => 123,  388 => 122,  377 => 119,  371 => 117,  363 => 113,  361 => 112,  358 => 111,  348 => 110,  338 => 107,  333 => 105,  330 => 104,  328 => 103,  325 => 102,  323 => 101,  317 => 98,  312 => 96,  308 => 95,  304 => 94,  299 => 92,  296 => 91,  281 => 82,  278 => 81,  268 => 80,  257 => 75,  253 => 73,  249 => 71,  247 => 69,  245 => 68,  242 => 67,  238 => 65,  235 => 62,  231 => 60,  228 => 57,  226 => 56,  217 => 55,  215 => 54,  211 => 52,  209 => 50,  208 => 49,  205 => 48,  203 => 47,  200 => 46,  194 => 44,  186 => 42,  184 => 41,  178 => 39,  168 => 38,  151 => 29,  145 => 28,  142 => 27,  139 => 26,  132 => 22,  127 => 21,  123 => 19,  121 => 17,  119 => 16,  115 => 14,  113 => 12,  111 => 11,  109 => 10,  105 => 9,  102 => 8,  99 => 7,  89 => 6,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanNode/Default/layout.html.twig' %}
{% set form = tabPane.getFormView() %}

{% block extrabodyclasses %}{{ parent() }} js-check-if-edited{% if nodeVersionLockCheck %} js-node-version-lock{% endif %}{% endblock %}

{% block messages %}
    {% if queuedNodeTranslationAction %}
        <div class=\"alert alert-warning\">
            <strong>{{ \"Warning\" | trans }}: </strong>
            {% if queuedNodeTranslationAction.action == 'publish' %}
                {{ 'kuma_node.status.will_be_publish_at.%date%.raw'
                    |trans({'%date%': queuedNodeTranslationAction.date|date('Y-m-d H:i:s')})
                    |raw
                }}
            {% else %}
                {{ 'kuma_node.status.will_be_unpublish_at.%date%.raw'
                    |trans({'%date%':queuedNodeTranslationAction.date|date('Y-m-d H:i:s')})
                    |raw
                }}
            {% endif %}
            <a href=\"{{ path('KunstmaanNodeBundle_nodes_unschedule_publish', { 'id': node.id}) }}\" class=\"btn btn-warning btn--raise-on-hover alert__action\">
                {{ 'kuma_node.status.button.schedulle_cancel'|trans() }}
            </a>
        </div>
    {% endif %}
    {% if form_has_errors_recursive(form) %}
        <div class=\"alert alert-danger\">
            <strong>{{ \"kuma_node.error.title\" | trans }}: </strong>{{ \"kuma_node.error.validation\" | trans }}
            {{ form_errors(form) }}
            <button class=\"close\" data-dismiss=\"alert\">
                <i class=\"fa fa-times\"></i>
            </button>
        </div>
    {% endif %}
{% endblock %}


{% block header %}
    <!-- PageClassName: {{ node.refEntityName }} -->
    <h1 class=\"app__content__header__title\">
        {% if is_granted('ROLE_SUPER_ADMIN') %}
            <abbr title=\"{{ node.refEntityName }}\">{{ page.title }}</abbr>
        {% else %}
            {{ page.title }}
        {% endif %}

        {% if draft %}
            <small class=\"app__content__header__title__small app__content__header__title__small--offline\">
                {{ 'kuma_node.status.offline_draft.%public_url%.raw'
                    |trans({'%public_url%': path('KunstmaanNodeBundle_nodes_edit', { 'id': node.id})})
                    |raw
                }}
            </small>
        {% elseif not is_structure_node(page) %}
            <small class=\"app__content__header__title__small {% if nodeTranslation.online %}app__content__header__title__small--online{% else %}app__content__header__title__small--offline{% endif %}\">
                {% if nodeTranslation.online %}
                    {{ 'kuma_node.status.online_public.raw'
                        |trans()
                        |raw
                    }}
                {% else %}
                    {{ 'kuma_node.status.offline.raw'
                        |trans()
                        |raw
                    }}
                {% endif %}
                {% if draftNodeVersion is not null %}
                    {{ 'kuma_node.status.go_to_draft_version.%url%.raw'
                        |trans({'%url%': path('KunstmaanNodeBundle_nodes_edit', { 'id': node.id, 'subaction': 'draft'}) })
                        |raw
                    }}
                {% endif %}
            </small>
        {% endif %}
    </h1>
{% endblock %}



{% block content %}
    {% if nodeVersionLockCheck %}
        <div class=\"hidden\" id=\"js-node-version-lock-data\" data-check-interval=\"{{ nodeVersionLockInterval }}\" data-url=\"{{ path('KunstmaanNodeBundle_nodes_versionlock_check', {'id': node.id, 'public': draft ? 0 : 1}) }}\">
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span class=\"message\"></span>
            </div>
        </div>
    {% endif %}

    {{ form_start(form, {'method': 'POST', 'action': path('KunstmaanNodeBundle_nodes_edit', { 'id': node.id, 'subaction': subaction }), 'attr': {'novalidate': 'novalidate', 'id': 'pageadminform', 'class': 'form'}}) }}

        {{ knp_menu_render('sub_actions', { 'template': '@KunstmaanNode/Menu/knp_menu_actions.html.twig'}) }}
        {{ knp_menu_render('actions', { 'template': '@KunstmaanNode/Menu/knp_menu_actions.html.twig'}) }}
        {{ knp_menu_render('top_actions', { 'template': '@KunstmaanNode/Menu/knp_menu_top_actions.html.twig'}) }}

        {{ tabs_widget(tabPane) }}

        <!-- Modal - Publish -->
        {% include '@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig' %}
        <!-- Modal - Unpublish -->
        {% include '@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig' %}

    {{ form_end(form) }}

    {% include '@KunstmaanNode/NodeAdmin/_modals.html.twig' %}
{% endblock %}

{% block breadcrumb %}

    {% if getOverviewRoute(page) is not null %}
        <a href=\"{{ path(getOverviewRoute(page)) }}\" class=\"btn btn-default\" style=\"margin:20px 0 20px 0;\"><i class=\"fa fa-arrow-left\"></i>
            Back to overview
        </a>
    {% else %}
        {{ parent() }}
    {%  endif %}

{% endblock %}

{% block extracss %}
    {% set cssPath = 'frontend/css/admin-style.css' %}
    {% if file_exists(cssPath) %}
        <link rel=\"stylesheet\" href=\"{{ asset('/' ~ cssPath) }}\">
    {% endif %}
{% endblock %}
", "@KunstmaanNode/NodeAdmin/edit.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/edit.html.twig");
    }
}
