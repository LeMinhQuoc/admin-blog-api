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

/* @KunstmaanAdminList/Default/add_or_edit.html.twig */
class __TwigTemplate_6843b69b08cb0728fd0b7d3559822238f386f3c5a8f9bcde41424620c705cf4d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extrabodyclasses' => [$this, 'block_extrabodyclasses'],
            'header' => [$this, 'block_header'],
            'extra_actions_header' => [$this, 'block_extra_actions_header'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'form_content' => [$this, 'block_form_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Default/add_or_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/Default/add_or_edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@KunstmaanAdmin/Default/layout.html.twig", "@KunstmaanAdminList/Default/add_or_edit.html.twig", 1);
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
        if ((isset($context["entityVersionLockCheck"]) || array_key_exists("entityVersionLockCheck", $context) ? $context["entityVersionLockCheck"] : (function () { throw new RuntimeError('Variable "entityVersionLockCheck" does not exist.', 4, $this->source); })())) {
            echo " js-entity-version-lock";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    ";
        if ((isset($context["entityVersionLockCheck"]) || array_key_exists("entityVersionLockCheck", $context) ? $context["entityVersionLockCheck"] : (function () { throw new RuntimeError('Variable "entityVersionLockCheck" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"hidden\" id=\"js-entity-version-lock-data\" data-check-interval=\"";
            echo twig_escape_filter($this->env, (isset($context["entityVersionLockInterval"]) || array_key_exists("entityVersionLockInterval", $context) ? $context["entityVersionLockInterval"] : (function () { throw new RuntimeError('Variable "entityVersionLockInterval" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminListBundle_entity_lock_check", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "repository" => twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 8, $this->source); })()), "getRepositoryName", [], "method", false, false, false, 8)]), "html", null, true);
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
        // line 17
        echo "
    ";
        // line 18
        $context["formParams"] = ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", [0 => "_route_params"], "method", false, false, false, 18)), "attr" => ["novalidate" => "novalidate"]];
        // line 19
        echo "    ";
        if (array_key_exists("tabPane", $context)) {
            // line 20
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 20, $this->source); })()), "formView", [], "any", false, false, false, 20), 'form_start', (isset($context["formParams"]) || array_key_exists("formParams", $context) ? $context["formParams"] : (function () { throw new RuntimeError('Variable "formParams" does not exist.', 20, $this->source); })()));
            echo "
    ";
        } else {
            // line 22
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', (isset($context["formParams"]) || array_key_exists("formParams", $context) ? $context["formParams"] : (function () { throw new RuntimeError('Variable "formParams" does not exist.', 22, $this->source); })()));
            echo "
    ";
        }
        // line 24
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_extra_actions_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_actions_header"));

        // line 28
        echo "    <div class=\"col-sm-6 col-md-4\">
        <!-- Main-actions -->
        <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
            <div class=\"btn-group\">
                ";
        // line 32
        $this->displayBlock('actions', $context, $blocks);
        // line 58
        echo "            </div>
        </div>
    </div>

    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            ";
        // line 65
        $this->displayBlock("actions", $context, $blocks);
        echo "
            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                <i class=\"fa fa-caret-up\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 33
        echo "                    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "
                    </button>
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 36, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 36), "path", [], "array", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 36, $this->source); })()), "getIndexUrl", [], "method", false, false, false, 36), "params", [], "array", false, false, false, 36)), "html", null, true);
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
                    </a>

                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 40, $this->source); })()), "hasItemActions", [], "method", false, false, false, 40)) {
            // line 41
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminlistconfigurator"]) || array_key_exists("adminlistconfigurator", $context) ? $context["adminlistconfigurator"] : (function () { throw new RuntimeError('Variable "adminlistconfigurator" does not exist.', 41, $this->source); })()), "getItemActions", [], "method", false, false, false, 41));
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
                // line 42
                echo "                            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["itemAction"], "template", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "                                ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["itemAction"], "template", [], "any", false, false, false, 43), "@KunstmaanAdminList/Default/add_or_edit.html.twig", 43)->display(twig_array_merge($context, ["itemAction" => $context["itemAction"]]));
                    // line 44
                    echo "                            ";
                } else {
                    // line 45
                    echo "                                ";
                    $context["url"] = twig_get_attribute($this->env, $this->source, $context["itemAction"], "getUrlFor", [0 => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })())], "method", false, false, false, 45);
                    // line 46
                    echo "                                ";
                    if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 46, $this->source); })())) {
                        // line 47
                        echo "                                    <a class=\"btn btn-default btn--raise-on-hover\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 47, $this->source); })()), "path", [], "array", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 47, $this->source); })()), "params", [], "array", false, false, false, 47)), "html", null, true);
                        echo "\">
                                        ";
                        // line 48
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })())], "method", false, false, false, 48))) {
                            // line 49
                            echo "                                            <i class=\"fa fa-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemAction"], "getIconFor", [0 => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })())], "method", false, false, false, 49), "html", null, true);
                            echo "\"></i>
                                        ";
                        }
                        // line 51
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemAction"], "getLabelFor", [0 => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })())], "method", false, false, false, 51), "html", null, true);
                        echo "
                                    </a>
                                ";
                    }
                    // line 54
                    echo "                            ";
                }
                // line 55
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
            // line 56
            echo "                    ";
        }
        // line 57
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 74
        echo "        <!-- Fields -->
        <fieldset class=\"form__fieldset--padded\">
            ";
        // line 76
        $this->displayBlock('form_content', $context, $blocks);
        // line 83
        echo "        </fieldset>
    ";
        // line 84
        if (array_key_exists("tabPane", $context)) {
            // line 85
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 85, $this->source); })()), "formView", [], "any", false, false, false, 85), 'form_end');
            echo "
    ";
        } else {
            // line 87
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_form_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_content"));

        // line 77
        echo "                ";
        if (array_key_exists("tabPane", $context)) {
            // line 78
            echo "                    ";
            echo $this->extensions['Kunstmaan\AdminBundle\Twig\TabsTwigExtension']->renderWidget($this->env, (isset($context["tabPane"]) || array_key_exists("tabPane", $context) ? $context["tabPane"] : (function () { throw new RuntimeError('Variable "tabPane" does not exist.', 78, $this->source); })()));
            echo "
                ";
        } else {
            // line 80
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'rest');
            echo "
                ";
        }
        // line 82
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/Default/add_or_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 82,  366 => 80,  360 => 78,  357 => 77,  347 => 76,  333 => 87,  327 => 85,  325 => 84,  322 => 83,  320 => 76,  316 => 74,  306 => 73,  296 => 57,  293 => 56,  279 => 55,  276 => 54,  269 => 51,  263 => 49,  261 => 48,  256 => 47,  253 => 46,  250 => 45,  247 => 44,  244 => 43,  241 => 42,  223 => 41,  221 => 40,  215 => 37,  211 => 36,  206 => 34,  203 => 33,  193 => 32,  176 => 65,  167 => 58,  165 => 32,  159 => 28,  149 => 27,  136 => 24,  130 => 22,  124 => 20,  121 => 19,  119 => 18,  116 => 17,  101 => 8,  98 => 7,  88 => 6,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KunstmaanAdmin/Default/layout.html.twig' %}
{% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}

{% block extrabodyclasses %}{{ parent() }}{% if entityVersionLockCheck %} js-entity-version-lock{% endif %}{% endblock %}

{% block header %}
    {% if entityVersionLockCheck %}
        <div class=\"hidden\" id=\"js-entity-version-lock-data\" data-check-interval=\"{{ entityVersionLockInterval }}\" data-url=\"{{ path('KunstmaanAdminListBundle_entity_lock_check', {'id': entity.id, 'repository': adminlistconfigurator.getRepositoryName()}) }}\">
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                <i class=\"fa fa-times\"></i>
                </button>
                <span class=\"message\"></span>
            </div>
        </div>
    {% endif %}

    {% set formParams = {'method': 'POST', 'action': path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')), 'attr': {'novalidate': 'novalidate'}} %}
    {% if tabPane is defined %}
        {{ form_start(tabPane.formView, formParams) }}
    {% else %}
        {{ form_start(form, formParams) }}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block extra_actions_header %}
    <div class=\"col-sm-6 col-md-4\">
        <!-- Main-actions -->
        <div class=\"js-auto-collapse-buttons page-main-actions page-main-actions--no-tabs page-main-actions--inside-extra-actions-header\">
            <div class=\"btn-group\">
                {% block actions %}
                    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                        {{ 'Save' | trans }}
                    </button>
                    <a href=\"{{ path(adminlistconfigurator.getIndexUrl()[\"path\"], adminlistconfigurator.getIndexUrl()[\"params\"]) }}\" class=\"btn btn-default btn--raise-on-hover\">
                        {{ 'form.cancel' | trans }}
                    </a>

                    {% if adminlistconfigurator.hasItemActions() %}
                        {% for itemAction in adminlistconfigurator.getItemActions() %}
                            {% if itemAction.template is not null %}
                                {% include itemAction.template with {'itemAction': itemAction} %}
                            {% else %}
                                {% set url = itemAction.getUrlFor(entity) %}
                                {% if url %}
                                    <a class=\"btn btn-default btn--raise-on-hover\" href=\"{{ path(url[\"path\"], url[(\"params\")] ) }}\">
                                        {% if itemAction.getIconFor(entity) is not null %}
                                            <i class=\"fa fa-{{ itemAction.getIconFor(entity) }}\"></i>
                                        {% endif %}
                                        {{ itemAction.getLabelFor(entity) }}
                                    </a>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                {% endblock %}
            </div>
        </div>
    </div>

    <!-- Scroll-actions -->
    <div class=\"page-main-actions page-main-actions--top\" id=\"page-main-actions-top\">
        <div class=\"btn-group\">
            {{ block('actions') }}
            <button type=\"button\" class=\"js-scroll-to-top btn btn-default btn--raise-on-hover\">
                <i class=\"fa fa-caret-up\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block content %}
        <!-- Fields -->
        <fieldset class=\"form__fieldset--padded\">
            {% block form_content %}
                {% if tabPane is defined %}
                    {{ tabs_widget(tabPane) }}
                {% else %}
                    {{ form_rest(form) }}
                {% endif %}
            {% endblock %}
        </fieldset>
    {% if tabPane is defined %}
        {{ form_end(tabPane.formView) }}
    {% else %}
        {{ form_end(form) }}
    {% endif %}
{% endblock %}
", "@KunstmaanAdminList/Default/add_or_edit.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/adminlist-bundle/Resources/views/Default/add_or_edit.html.twig");
    }
}
