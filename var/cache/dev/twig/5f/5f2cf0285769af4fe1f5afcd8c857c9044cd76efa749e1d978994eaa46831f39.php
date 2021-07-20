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

/* @KunstmaanAdmin/Resetting/request_content.html.twig */
class __TwigTemplate_44df334f2af69f0a6c278fbce156158874bd74023815cea63c15b889ede4cbcf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Resetting/request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Resetting/request_content.html.twig"));

        // line 1
        echo "<p>
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset password"), "html", null, true);
        echo "
</p>

<form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\">
    <div class=\"form-group form-group--icon-in-control\">
        <label for=\"username\" class=\"label--lighter\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username or email address"), "html", null, true);
        echo ":
        </label>

        <input class=\"form-control form-group--icon-in-control__form-control\" id=\"username\" type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username or email address"), "html", null, true);
        echo "\" autofocus>
        <i class=\"fa fa-user form-group--icon-in-control__icon\"></i>
    </div>

    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset password"), "html", null, true);
        echo "
    </button>
    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default btn--raise-on-hover\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
        echo "
    </a>
</form>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  77 => 18,  72 => 16,  64 => 11,  58 => 8,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    {{ 'Reset password' |trans }}
</p>

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\">
    <div class=\"form-group form-group--icon-in-control\">
        <label for=\"username\" class=\"label--lighter\">
            {{ 'Username or email address' |trans }}:
        </label>

        <input class=\"form-control form-group--icon-in-control__form-control\" id=\"username\" type=\"text\" name=\"username\" value=\"\" placeholder=\"{{ 'Username or email address' |trans }}\" autofocus>
        <i class=\"fa fa-user form-group--icon-in-control__icon\"></i>
    </div>

    <button type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
        {{ 'Reset password' |trans }}
    </button>
    <a href=\"{{ path('fos_user_security_login' ) }}\" class=\"btn btn-default btn--raise-on-hover\">
        {{ 'form.cancel' | trans }}
    </a>
</form>

", "@KunstmaanAdmin/Resetting/request_content.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
