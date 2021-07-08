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

/* @KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig */
class __TwigTemplate_0c32045f7b366b2b5b1b4047329fe04a8ef3d77a42230ee49b8d0dd0405440a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade pp-chooser js-pp-chooser pp-search\" id=\"pagePartModal";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 1, $this->source); })()), "context", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"pagePartModalLabel\"
     aria-hidden=\"true\"
     data-pp-types=\"";
        // line 3
        echo twig_escape_filter($this->env, json_encode(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 3, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 3), function ($__pp__) use ($context, $macros) { $context["pp"] = $__pp__; return ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["pp"]) || array_key_exists("pp", $context) ? $context["pp"] : (function () { throw new RuntimeError('Variable "pp" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3)), "class" => twig_get_attribute($this->env, $this->source, (isset($context["pp"]) || array_key_exists("pp", $context) ? $context["pp"] : (function () { throw new RuntimeError('Variable "pp" does not exist.', 3, $this->source); })()), "class", [], "any", false, false, false, 3), "preview" => twig_get_attribute($this->env, $this->source, (isset($context["pp"]) || array_key_exists("pp", $context) ? $context["pp"] : (function () { throw new RuntimeError('Variable "pp" does not exist.', 3, $this->source); })()), "preview", [], "any", false, false, false, 3)]; }), twig_constant("JSON_UNESCAPED_UNICODE")), "html", null, true);
        echo "\"
>
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header pp-chooser__header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"pp-chooser__header__content\">
                    <h4 class=\"modal-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.select.add"), "html", null, true);
        echo "</h4>
                    <div class=\"pp-search__field-wrapper\">
                        <span class=\"pp-search__field-icon\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></span>
                        <input class=\"js-pp-search pp-search__field form-control\" type=\"text\">
                        <button type=\"button\" class=\"pp-search__reset js-pp-search__reset\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></button>
                    </div>
                </div>
            </div>
            <div class=\"modal-body clearfix\">
                <div class=\"row\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 22, $this->source); })()), "possiblePagePartTypes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["pagePartType"]) {
            // line 23
            echo "                        <div class=\"pp-search__item js-pp-search-item col-sm-6 col-lg-4\" data-pp-name=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["pagePartType"], "name", [], "any", false, false, false, 23)), "html", null, true);
            echo "\">
                            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["pagePartType"], "preview", [], "any", true, true, false, 24) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pagePartType"], "preview", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                                ";
                $context["background"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["pagePartType"], "preview", [], "any", false, false, false, 25));
                // line 26
                echo "                            ";
            } else {
                // line 27
                echo "                                ";
                $context["background"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/default-theme/img/kunstmaan/ppchooser-placeholder.svg");
                // line 28
                echo "                            ";
            }
            // line 29
            echo "                            <a class=\"js-add-pp-button pp_modal__preview\" data-pagepartclass=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pagePartType"], "class", [], "any", false, false, false, 29), "html", null, true);
            echo "\" data-pagepartmodalname=\"pagePartModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 29, $this->source); })()), "context", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                                <figure class=\"pp_modal__preview__card\">
                                    <img class=\"pp_modal__preview__card__image\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\" alt=\"\">
                                    <figcaption class=\"pp_modal__preview__card__name\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["pagePartType"], "name", [], "any", false, false, false, 32)), "html", null, true);
            echo "</figcaption>
                                </figure>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagePartType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  109 => 32,  105 => 31,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  83 => 24,  78 => 23,  74 => 22,  61 => 12,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade pp-chooser js-pp-chooser pp-search\" id=\"pagePartModal{{ pagepartadmin.context }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"pagePartModalLabel\"
     aria-hidden=\"true\"
     data-pp-types=\"{{ pagepartadmin.possiblePagePartTypes|map(pp => {'name': pp.name|trans, 'class': pp.class, 'preview': pp.preview })|json_encode(constant('JSON_UNESCAPED_UNICODE')) }}\"
>
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header pp-chooser__header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"pp-chooser__header__content\">
                    <h4 class=\"modal-title\">{{ 'kuma_pagepart.select.add' | trans }}</h4>
                    <div class=\"pp-search__field-wrapper\">
                        <span class=\"pp-search__field-icon\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></span>
                        <input class=\"js-pp-search pp-search__field form-control\" type=\"text\">
                        <button type=\"button\" class=\"pp-search__reset js-pp-search__reset\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></button>
                    </div>
                </div>
            </div>
            <div class=\"modal-body clearfix\">
                <div class=\"row\">
                    {% for pagePartType in pagepartadmin.possiblePagePartTypes %}
                        <div class=\"pp-search__item js-pp-search-item col-sm-6 col-lg-4\" data-pp-name=\"{{ pagePartType.name|trans }}\">
                            {% if pagePartType.preview is defined and pagePartType.preview is not empty %}
                                {% set background = asset(pagePartType.preview) %}
                            {% else %}
                                {% set background = asset('bundles/kunstmaanadmin/default-theme/img/kunstmaan/ppchooser-placeholder.svg') %}
                            {% endif %}
                            <a class=\"js-add-pp-button pp_modal__preview\" data-pagepartclass=\"{{ pagePartType.class }}\" data-pagepartmodalname=\"pagePartModal{{ pagepartadmin.context }}\">
                                <figure class=\"pp_modal__preview__card\">
                                    <img class=\"pp_modal__preview__card__image\" src=\"{{ background }}\" alt=\"\">
                                    <figcaption class=\"pp_modal__preview__card__name\">{{ pagePartType.name|trans }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>

", "@KunstmaanPagePart/PagePartAdminTwigExtension/modal.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/pagepart-bundle/Resources/views/PagePartAdminTwigExtension/modal.html.twig");
    }
}
