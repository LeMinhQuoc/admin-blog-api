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

/* @KunstmaanTranslator/Translator/inline_edit.html.twig */
class __TwigTemplate_9fcad7bdf921a94d15037f4b1571cb2e3a03a125bc97d7ab9d44ff0c0a99d9d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/inline_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanTranslator/Translator/inline_edit.html.twig"));

        // line 1
        ob_start();
        // line 2
        if ((array_key_exists("adminlist", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["adminlist"]) || array_key_exists("adminlist", $context) ? $context["adminlist"] : (function () { throw new RuntimeError('Variable "adminlist" does not exist.', 2, $this->source); })()), "configurator", [], "any", false, false, false, 2), "canEditInline", [0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })())], "method", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context["uid"] = twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), ((isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 3, $this->source); })()) . "_id"), [], "any", false, false, false, 3);
            // line 4
            echo "    <a href=\"#\" class=\"js-editable editable editable-pre-wrapped\" data-type=\"textarea\" data-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanTranslatorBundle_settings_translations_inline_edit");
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translator.translator.inline_edit_title"), "html", null, true);
            echo "\" data-uid=\"";
            echo twig_escape_filter($this->env, (isset($context["uid"]) || array_key_exists("uid", $context) ? $context["uid"] : (function () { throw new RuntimeError('Variable "uid" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" data-tid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-locale=\"";
            echo twig_escape_filter($this->env, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" data-domain=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "domain", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-keyword=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "keyword", [], "any", false, false, false, 4), "html", null, true);
            echo "\" data-empty-text=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translator.translator.emptytext"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "</a>
";
        } else {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "
";
        }
        $___internal_f155c5fb2c44af093a6fbdf05eef5e3e05ef693653348977288ae659827ad93d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_f155c5fb2c44af093a6fbdf05eef5e3e05ef693653348977288ae659827ad93d_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanTranslator/Translator/inline_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 1,  72 => 6,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% if adminlist is defined and adminlist.configurator.canEditInline(row) %}
    {% set uid = attribute(row, columnName ~ '_id') %}
    <a href=\"#\" class=\"js-editable editable editable-pre-wrapped\" data-type=\"textarea\" data-url=\"{{ path('KunstmaanTranslatorBundle_settings_translations_inline_edit') }}\" data-title=\"{{ 'translator.translator.inline_edit_title'|trans }}\" data-uid=\"{{ uid }}\" data-tid=\"{{ row.id }}\" data-locale=\"{{ columnName }}\" data-domain=\"{{ row.domain }}\" data-keyword=\"{{ row.keyword }}\" data-empty-text=\"{{ 'translator.translator.emptytext'|trans }}\">{{ object }}</a>
{% else %}
    {{ object }}
{% endif %}
{% endapply %}
", "@KunstmaanTranslator/Translator/inline_edit.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/translator-bundle/Resources/views/Translator/inline_edit.html.twig");
    }
}
