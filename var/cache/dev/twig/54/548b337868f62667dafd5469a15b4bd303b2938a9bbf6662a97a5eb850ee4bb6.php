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

/* @KunstmaanForm/FileUploadPagePart/submission.html.twig */
class __TwigTemplate_56f142d1ce82d615c32bcb86c2edb39e928603902bb0956fc4918a60fd09066f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FileUploadPagePart/submission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/FileUploadPagePart/submission.html.twig"));

        // line 1
        if ((array_key_exists("resource", $context) &&  !(null === (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 2, $this->source); })()), "isNull", [], "method", false, false, false, 2)) {
                // line 3
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "url", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "url", [], "any", false, false, false, 3)))) {
                    // line 4
                    echo "            ";
                    $context["href"] = ((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 4, $this->source); })()) . twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 4, $this->source); })()), "url", [], "any", false, false, false, 4));
                    // line 5
                    echo "        ";
                } else {
                    // line 6
                    echo "            ";
                    $context["href"] = (((isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 6, $this->source); })()) . (isset($context["form_submission_webdir"]) || array_key_exists("form_submission_webdir", $context) ? $context["form_submission_webdir"] : (function () { throw new RuntimeError('Variable "form_submission_webdir" does not exist.', 6, $this->source); })())) . twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 6, $this->source); })()), "fileName", [], "any", false, false, false, 6));
                    // line 7
                    echo "        ";
                }
                // line 8
                echo "        <a target=\"_blank\"
           href=\"";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "fileName", [], "any", false, false, false, 9), "html", null, true);
                echo "</a>
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanForm/FileUploadPagePart/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if resource is defined and resource is not null %}
    {% if not resource.isNull() %}
        {% if resource.url is defined and resource.url is not null %}
            {% set href = host ~ resource.url %}
        {% else %}
            {% set href = host ~ form_submission_webdir ~ resource.fileName %}
        {% endif %}
        <a target=\"_blank\"
           href=\"{{ href }}\">{{ resource.fileName }}</a>
    {% endif %}
{% endif %}
", "@KunstmaanForm/FileUploadPagePart/submission.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/form-bundle/Resources/views/FileUploadPagePart/submission.html.twig");
    }
}
