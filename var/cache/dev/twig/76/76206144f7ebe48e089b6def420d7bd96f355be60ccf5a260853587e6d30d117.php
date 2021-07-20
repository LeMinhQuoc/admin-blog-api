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

/* @KunstmaanMedia/Media/addType-modal.html.twig */
class __TwigTemplate_c6158c32d4f33142a51c6c6d04e0e9c3a11ef659df6052973c8bfa4c5df55519 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/addType-modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/addType-modal.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["form"]) {
            // line 2
            echo "    <div id=\"add";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    ";
            // line 11
            $context["title"] = (("media." . $context["type"]) . ".modal.title");
            // line 12
            echo "                    <h3>
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })())), "html", null, true);
            echo "
                    </h3>
                </div>

                ";
            // line 17
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["form"], [0 => "@KunstmaanAdmin/Form/fields.html.twig"], true);
            // line 18
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanMediaBundle_media_modal_create", twig_array_merge((isset($context["urlParams"]) || array_key_exists("urlParams", $context) ? $context["urlParams"] : (function () { throw new RuntimeError('Variable "urlParams" does not exist.', 18, $this->source); })()), ["type" => $context["type"]]))]);
            echo "
                    <!-- Body -->
                    <div class=\"modal-body\">
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["form"], 'widget');
            echo "
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        ";
            // line 26
            $context["save"] = (("media." . $context["type"]) . ".modal.save");
            // line 27
            echo "                        <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-primary btn--raise-on-hover\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["save"]) || array_key_exists("save", $context) ? $context["save"] : (function () { throw new RuntimeError('Variable "save" does not exist.', 28, $this->source); })())), "html", null, true);
            echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.cancel"), "html", null, true);
            echo "
                        </button>
                    </div>
                ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_end');
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/addType-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  100 => 31,  94 => 28,  91 => 27,  89 => 26,  81 => 21,  74 => 18,  72 => 17,  65 => 13,  62 => 12,  60 => 11,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for type, form in forms %}
    <div id=\"add{{ type }}-modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Head -->
                <div class=\"modal-header\">
                    <button class=\"close\" data-dismiss=\"modal\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    {% set title = 'media.' ~ type ~ '.modal.title' %}
                    <h3>
                        {{ title | trans }}
                    </h3>
                </div>

                {% form_theme form '@KunstmaanAdmin/Form/fields.html.twig' %}
                {{ form_start(form, {'method': 'POST', 'action': path('KunstmaanMediaBundle_media_modal_create', urlParams|merge({'type': type}))}) }}
                    <!-- Body -->
                    <div class=\"modal-body\">
                        {{ form_widget(form) }}
                    </div>

                    <!-- Footer -->
                    <div class=\"modal-footer\">
                        {% set save = 'media.' ~ type ~ '.modal.save' %}
                        <button type=\"submit\" class=\"js-add-app-loading--forms btn btn-primary btn--raise-on-hover\">
                            {{ save | trans }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'form.cancel' | trans }}
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endfor %}
", "@KunstmaanMedia/Media/addType-modal.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/addType-modal.html.twig");
    }
}
