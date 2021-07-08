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

/* @KunstmaanAdmin/Security/login.html.twig */
class __TwigTemplate_b6b15c8c08ef431272d29a3cbc5c5d7a5ab0b9c93b5d4b3a4d72993dec442739 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@KunstmaanAdmin/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <form id=\"app__login__form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 7
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\GoogleSignInTwigExtension']->isGoogleSignInEnabled()) {
            // line 8
            echo "        <input id=\"google_id_token\" data-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminBundle_oauth_signin");
            echo "\" data-clientid=\"";
            echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\AdminBundle\Twig\GoogleSignInTwigExtension']->getClientId(), "html", null, true);
            echo "\" type=\"hidden\" name=\"_google_id_token\">
        ";
        }
        // line 10
        echo "        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_admin.login.invalid_credentials", [], "messages"), "html", null, true);
            echo "
                <button type=\"button\" class=\"close\" aria-label=\"Close\" data-dismiss=\"alert\">
                    <i class=\"fa fa-times\"></i>
                </button>
            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"form-group form-group--icon-in-control\">
            <label for=\"username\" class=\"label--lighter\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "
            </label>
            <input class=\"form-control form-group--icon-in-control__form-control\" id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" autofocus>
            <i class=\"fa fa-user form-group--icon-in-control__icon\"></i>
        </div>

        <div class=\"form-group form-group--icon-in-control\">
            <label for=\"password\" class=\"label--lighter\">
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "
            </label>
            <input class=\"form-control form-group--icon-in-control__form-control\" id=\"password\" type=\"password\" name=\"_password\" value=\"\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\">
            <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
        </div>

        <div class=\"form-group login__form__remember-me\">
            <label class=\"checkbox login__form__remember-me__check\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
            </label>
        </div>

        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-brand btn-block btn--raise-on-hover\">
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "
        </button>
    </form>

    ";
        // line 47
        if ($this->extensions['Kunstmaan\AdminBundle\Twig\GoogleSignInTwigExtension']->isGoogleSignInEnabled()) {
            // line 48
            echo "    <a href=\"#\" id=\"app_oauth_signin\">
        <img src=\"https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png\" alt=\"Google Sign in\">
    </a>
    ";
        }
        // line 52
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 52,  151 => 48,  149 => 47,  142 => 43,  134 => 38,  124 => 31,  119 => 29,  108 => 23,  103 => 21,  98 => 18,  89 => 12,  86 => 11,  83 => 10,  75 => 8,  73 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <form id=\"app__login__form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if google_signin_enabled() %}
        <input id=\"google_id_token\" data-url=\"{{ path('KunstmaanAdminBundle_oauth_signin') }}\" data-clientid=\"{{ google_signin_client_id() }}\" type=\"hidden\" name=\"_google_id_token\">
        {% endif %}
        {% if error %}
            <div class=\"alert alert-danger\">
                {{ 'kuma_admin.login.invalid_credentials'|trans({}, 'messages') }}
                <button type=\"button\" class=\"close\" aria-label=\"Close\" data-dismiss=\"alert\">
                    <i class=\"fa fa-times\"></i>
                </button>
            </div>
        {% endif %}

        <div class=\"form-group form-group--icon-in-control\">
            <label for=\"username\" class=\"label--lighter\">
                {{ 'security.login.username'|trans }}
            </label>
            <input class=\"form-control form-group--icon-in-control__form-control\" id=\"username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'security.login.username'|trans }}\" autofocus>
            <i class=\"fa fa-user form-group--icon-in-control__icon\"></i>
        </div>

        <div class=\"form-group form-group--icon-in-control\">
            <label for=\"password\" class=\"label--lighter\">
                {{ 'security.login.password'|trans }}
            </label>
            <input class=\"form-control form-group--icon-in-control__form-control\" id=\"password\" type=\"password\" name=\"_password\" value=\"\" placeholder=\"{{ 'security.login.password'|trans }}\">
            <i class=\"fa fa-key form-group--icon-in-control__icon\"></i>
        </div>

        <div class=\"form-group login__form__remember-me\">
            <label class=\"checkbox login__form__remember-me__check\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                {{ 'security.login.remember_me'|trans }}
            </label>
        </div>

        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-brand btn-block btn--raise-on-hover\">
            {{ 'security.login.submit'|trans }}
        </button>
    </form>

    {% if google_signin_enabled() %}
    <a href=\"#\" id=\"app_oauth_signin\">
        <img src=\"https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png\" alt=\"Google Sign in\">
    </a>
    {% endif %}

{% endblock fos_user_content %}
", "@KunstmaanAdmin/Security/login.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Security/login.html.twig");
    }
}
