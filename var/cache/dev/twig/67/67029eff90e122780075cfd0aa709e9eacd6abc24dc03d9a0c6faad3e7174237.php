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

/* @KunstmaanAdminList/AdminListTwigExtension/filters.html.twig */
class __TwigTemplate_ba0ca8ceef88d2515ba1c65765d833b7bb05102916dffac2a8f82c34856f85cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 1, $this->source); })()), "filterdefinitions", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "<div class=\"app__filter\">

    <!-- Toggle Item -->
    <div id=\"app__filter\" class=\"toggle-item";
            // line 5
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 5, $this->source); })()), "currentfilters", [], "any", false, false, false, 5)) > 0)) {
                echo " toggle-item--active";
            }
            echo "\">
        <div class=\"toggle-item__content app__filter__content\">
            <form class=\"form form-inline\" action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["basepath"]) || array_key_exists("basepath", $context) ? $context["basepath"] : (function () { throw new RuntimeError('Variable "basepath" does not exist.', 7, $this->source); })()), (isset($context["extraparams"]) || array_key_exists("extraparams", $context) ? $context["extraparams"] : (function () { throw new RuntimeError('Variable "extraparams" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "\">

                <fieldset id=\"filter-holder\" class=\"form__fieldset--padded-full\">
                    <!-- Start Filter -->
                    <div id=\"first-filter-line\" class=\"js-filter-line app__filter__line ";
            // line 11
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 11, $this->source); })()), "currentfilters", [], "any", false, false, false, 11)) > 0)) {
                echo " hidden";
            }
            echo "\">
                        <div class=\"form-group\">
                            <select id=\"add-first-filter\" class=\"form-control js-filter-select\">
                                <option>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.choosetypefilter"), "html", null, true);
            echo "</option>
                                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 15, $this->source); })()), "filterdefinitions", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["columnname"] => $context["value"]) {
                // line 16
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["value"], "filtername", [], "array", true, true, false, 16)) {
                    // line 17
                    echo "                                    ";
                    $context["filtername"] = twig_get_attribute($this->env, $this->source, $context["value"], "filtername", [], "array", false, false, false, 17);
                    // line 18
                    echo "                                    ";
                } else {
                    // line 19
                    echo "                                    ";
                    $context["filtername"] = $context["columnname"];
                    // line 20
                    echo "                                    ";
                }
                // line 21
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["columnname"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["filtername"]) || array_key_exists("filtername", $context) ? $context["filtername"] : (function () { throw new RuntimeError('Variable "filtername" does not exist.', 21, $this->source); })())), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                            </select>
                        </div>
                    </div>

                    <!-- Filters -->
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 28, $this->source); })()), "currentfilters", [], "any", false, false, false, 28));
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
            foreach ($context['_seq'] as $context["columnname"] => $context["value"]) {
                // line 29
                echo "                        <div class=\"js-filter-line app__filter__line\">
                            <div class=\"form-group\">
                                <select class=\"js-filter-select js-filter-dummy form-control\" name=\"filter_columnname[]\">
                                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 32, $this->source); })()), "filterdefinitions", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["defcolumnname"] => $context["defvalue"]) {
                    // line 33
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["defvalue"], "filtername", [], "array", true, true, false, 33)) {
                        // line 34
                        echo "                                        ";
                        $context["filtername"] = twig_get_attribute($this->env, $this->source, $context["defvalue"], "filtername", [], "array", false, false, false, 34);
                        // line 35
                        echo "                                    ";
                    } else {
                        // line 36
                        echo "                                        ";
                        $context["filtername"] = $context["defcolumnname"];
                        // line 37
                        echo "                                    ";
                    }
                    // line 38
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["defcolumnname"], "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["value"], "columnname", [], "any", false, false, false, 38) == $context["defcolumnname"])) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["filtername"]) || array_key_exists("filtername", $context) ? $context["filtername"] : (function () { throw new RuntimeError('Variable "filtername" does not exist.', 38, $this->source); })())), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['defcolumnname'], $context['defvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                                </select>
                            </div>

                            <div class=\"form-group\">
                                <input type=\"hidden\" name=\"filter_uniquefilterid[]\" class=\"js-unique-filter-id\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "uniqueid", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                            </div>

                            <div class=\"form-group\">
                                <span class=\"js-filter-options\">
                                    ";
                // line 49
                ob_start();
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "uniqueid", [], "any", false, false, false, 49), "html", null, true);
                $context["namesuffix"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 50
                echo "                                    ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "any", false, false, false, 50), "template", [], "any", false, false, false, 50), "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig", 50)->display(twig_array_merge($context, ["filtertype" => twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "any", false, false, false, 50), "data" => twig_get_attribute($this->env, $this->source, $context["value"], "data", [], "any", false, false, false, 50), "options" => twig_get_attribute($this->env, $this->source, $context["value"], "options", [], "any", false, false, false, 50), "nameprefix" => "filter_", "namesuffix" => (isset($context["namesuffix"]) || array_key_exists("namesuffix", $context) ? $context["namesuffix"] : (function () { throw new RuntimeError('Variable "namesuffix" does not exist.', 50, $this->source); })())]));
                // line 51
                echo "                                </span>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"button\" class=\"js-remove-filter-btn btn btn-default btn--no-border\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </div>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['columnname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </fieldset>



                <fieldset class=\"form__fieldset--padded-full\">
                    <!-- Add filter -->
                    <button type=\"button\" id=\"add-filter\" class=\"js-create-filter-btn btn btn-default btn--no-border btn--no-hor-padding\" data-first=\"false\">
                        <i class=\"fa fa-plus-circle btn__icon\"></i>
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.addfilter"), "html", null, true);
            echo "
                    </button>
                </fieldset>



                <!-- Hidden fields -->
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 76, $this->source); })()), "currentparameters", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 77
                echo "                    ";
                if (((twig_slice($this->env, $context["key"], 0, 7) != "filter_") && ($context["key"] != "page"))) {
                    // line 78
                    echo "                        <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 80
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "


                <!-- Form Actions -->
                <div class=\"form-actions form-actions--padded\">
                    <button type=\"button\" id=\"clear-all-filters\" class=\"btn btn-default btn--raise-on-hover form-actions__btn\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.filter.clear"), "html", null, true);
            echo "
                    </button>
                    <button type=\"submit\" name=\"filter\" value=\"filter\" id=\"apply-all-filters\" class=\"btn btn-primary btn--raise-on-hover form-actions__btn\">
                        ";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.filter.filter"), "html", null, true);
            echo "
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Toggle Button -->
    <button type=\"button\" class=\"js-toggle-btn btn btn-default btn--flat-top toggle-button app__filter__toggle";
            // line 100
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 100, $this->source); })()), "currentfilters", [], "any", false, false, false, 100)) > 0)) {
                echo " toggle-btn--active";
            }
            echo "\" data-target=\"#app__filter\">
        ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.button.filter.filter"), "html", null, true);
            echo "
        <i class=\"fa fa-chevron-down btn__icon toggle-btn__icon--show\"></i>
        <i class=\"fa fa-chevron-up btn__icon toggle-btn__icon--hide\"></i>
    </button>



    <!-- Dummy Stuff -->
    <div id=\"filter-dummy-line\" class=\"hidden\">
        <div class=\"form-group\">
            <select name=\"columnname[]\" class=\"js-filter-select js-filter-dummy form-control\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 112, $this->source); })()), "filterdefinitions", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["columnname"] => $context["value"]) {
                // line 113
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["value"], "filtername", [], "array", true, true, false, 113)) {
                    // line 114
                    echo "                    ";
                    $context["filtername"] = twig_get_attribute($this->env, $this->source, $context["value"], "filtername", [], "array", false, false, false, 114);
                    // line 115
                    echo "                ";
                } else {
                    // line 116
                    echo "                    ";
                    $context["filtername"] = $context["columnname"];
                    // line 117
                    echo "                ";
                }
                // line 118
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["columnname"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["filtername"]) || array_key_exists("filtername", $context) ? $context["filtername"] : (function () { throw new RuntimeError('Variable "filtername" does not exist.', 118, $this->source); })())), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "            </select>
        </div>

        <div class=\"form-group\">
            <input type=\"hidden\" name=\"uniquefilterid[]\" value=\"\" class=\"js-unique-filter-id\">
        </div>

        <div class=\"form-group\">
            <span class=\"js-filter-options\"></span>
        </div>

        <div class=\"form-group\">
            <button type=\"button\" class=\"js-remove-filter-btn btn btn-default btn--no-border\">
                <i class=\"fa fa-trash\"></i>
            </button>
        </div>
    </div>


    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 139, $this->source); })()), "filterdefinitions", [], "any", false, false, false, 139));
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
            foreach ($context['_seq'] as $context["columnname"] => $context["value"]) {
                // line 140
                echo "        <div id=\"filterdummyoptions_";
                echo twig_escape_filter($this->env, twig_replace_filter($context["columnname"], ["." => "_"]), "html", null, true);
                echo "\" class=\"hidden\">
            ";
                // line 141
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "any", false, false, false, 141), "template", [], "any", false, false, false, 141), "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig", 141)->display(twig_array_merge($context, ["filtertype" => twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "any", false, false, false, 141), "options" => twig_get_attribute($this->env, $this->source, $context["value"], "options", [], "any", false, false, false, 141), "nameprefix" => "", "namesuffix" => ""]));
                // line 142
                echo "        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['columnname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 144,  377 => 142,  375 => 141,  370 => 140,  353 => 139,  332 => 120,  321 => 118,  318 => 117,  315 => 116,  312 => 115,  309 => 114,  306 => 113,  302 => 112,  288 => 101,  282 => 100,  269 => 90,  263 => 87,  255 => 81,  249 => 80,  241 => 78,  238 => 77,  234 => 76,  224 => 69,  214 => 61,  191 => 51,  188 => 50,  183 => 49,  175 => 44,  169 => 40,  154 => 38,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  139 => 33,  135 => 32,  130 => 29,  113 => 28,  106 => 23,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  76 => 15,  72 => 14,  64 => 11,  57 => 7,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if filter.filterdefinitions|length > 0 %}
<div class=\"app__filter\">

    <!-- Toggle Item -->
    <div id=\"app__filter\" class=\"toggle-item{% if filter.currentfilters|length >0 %} toggle-item--active{% endif %}\">
        <div class=\"toggle-item__content app__filter__content\">
            <form class=\"form form-inline\" action=\"{{ path(basepath, extraparams) }}\">

                <fieldset id=\"filter-holder\" class=\"form__fieldset--padded-full\">
                    <!-- Start Filter -->
                    <div id=\"first-filter-line\" class=\"js-filter-line app__filter__line {% if filter.currentfilters|length >0 %} hidden{% endif %}\">
                        <div class=\"form-group\">
                            <select id=\"add-first-filter\" class=\"form-control js-filter-select\">
                                <option>{{ \"form.choosetypefilter\"|trans }}</option>
                                {% for columnname, value in filter.filterdefinitions %}
                                    {% if value['filtername'] is defined %}
                                    {% set filtername = value['filtername'] %}
                                    {% else %}
                                    {% set filtername = columnname %}
                                    {% endif %}
                                    <option value=\"{{columnname}}\">{{filtername|trans}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <!-- Filters -->
                    {% for columnname, value in filter.currentfilters %}
                        <div class=\"js-filter-line app__filter__line\">
                            <div class=\"form-group\">
                                <select class=\"js-filter-select js-filter-dummy form-control\" name=\"filter_columnname[]\">
                                    {% for defcolumnname, defvalue in filter.filterdefinitions %}
                                    {% if defvalue['filtername'] is defined %}
                                        {% set filtername = defvalue['filtername'] %}
                                    {% else %}
                                        {% set filtername = defcolumnname %}
                                    {% endif %}
                                    <option value=\"{{defcolumnname}}\" {% if value.columnname == defcolumnname %} selected=\"selected\" {% endif %}>{{filtername | trans}}</option>
                                    {% endfor %}
                                </select>
                            </div>

                            <div class=\"form-group\">
                                <input type=\"hidden\" name=\"filter_uniquefilterid[]\" class=\"js-unique-filter-id\" value=\"{{value.uniqueid}}\">
                            </div>

                            <div class=\"form-group\">
                                <span class=\"js-filter-options\">
                                    {% set namesuffix %}_{{value.uniqueid}}{%endset%}
                                    {% include value.type.template with {'filtertype': value.type, 'data': value.data, 'options': value.options, 'nameprefix': 'filter_', 'namesuffix': namesuffix} %}
                                </span>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"button\" class=\"js-remove-filter-btn btn btn-default btn--no-border\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </div>
                        </div>
                    {% endfor %}
                </fieldset>



                <fieldset class=\"form__fieldset--padded-full\">
                    <!-- Add filter -->
                    <button type=\"button\" id=\"add-filter\" class=\"js-create-filter-btn btn btn-default btn--no-border btn--no-hor-padding\" data-first=\"false\">
                        <i class=\"fa fa-plus-circle btn__icon\"></i>
                        {{ \"form.addfilter\"|trans }}
                    </button>
                </fieldset>



                <!-- Hidden fields -->
                {% for key, value in filter.currentparameters %}
                    {% if key|slice(0, 7) != 'filter_' and key != 'page' %}
                        <input type=\"hidden\" name=\"{{ key }}\" value=\"{{ value }}\"/>
                    {% endif %}
                {% endfor %}



                <!-- Form Actions -->
                <div class=\"form-actions form-actions--padded\">
                    <button type=\"button\" id=\"clear-all-filters\" class=\"btn btn-default btn--raise-on-hover form-actions__btn\">
                        {{ 'form.button.filter.clear'|trans }}
                    </button>
                    <button type=\"submit\" name=\"filter\" value=\"filter\" id=\"apply-all-filters\" class=\"btn btn-primary btn--raise-on-hover form-actions__btn\">
                        {{ 'form.button.filter.filter'|trans }}
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Toggle Button -->
    <button type=\"button\" class=\"js-toggle-btn btn btn-default btn--flat-top toggle-button app__filter__toggle{% if filter.currentfilters|length >0 %} toggle-btn--active{% endif %}\" data-target=\"#app__filter\">
        {{ 'form.button.filter.filter'|trans }}
        <i class=\"fa fa-chevron-down btn__icon toggle-btn__icon--show\"></i>
        <i class=\"fa fa-chevron-up btn__icon toggle-btn__icon--hide\"></i>
    </button>



    <!-- Dummy Stuff -->
    <div id=\"filter-dummy-line\" class=\"hidden\">
        <div class=\"form-group\">
            <select name=\"columnname[]\" class=\"js-filter-select js-filter-dummy form-control\">
            {% for columnname, value in filter.filterdefinitions %}
                {% if value['filtername'] is defined %}
                    {% set filtername = value['filtername'] %}
                {% else %}
                    {% set filtername = columnname %}
                {% endif %}
                <option value=\"{{columnname}}\">{{filtername|trans}}</option>
            {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <input type=\"hidden\" name=\"uniquefilterid[]\" value=\"\" class=\"js-unique-filter-id\">
        </div>

        <div class=\"form-group\">
            <span class=\"js-filter-options\"></span>
        </div>

        <div class=\"form-group\">
            <button type=\"button\" class=\"js-remove-filter-btn btn btn-default btn--no-border\">
                <i class=\"fa fa-trash\"></i>
            </button>
        </div>
    </div>


    {% for columnname, value in filter.filterdefinitions %}
        <div id=\"filterdummyoptions_{{columnname|replace({'.': '_'})}}\" class=\"hidden\">
            {% include value.type.template with {'filtertype': value.type, 'options': value.options, 'nameprefix': '', 'namesuffix': ''} %}
        </div>
    {% endfor %}

</div>
{% endif %}
", "@KunstmaanAdminList/AdminListTwigExtension/filters.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/adminlist-bundle/Resources/views/AdminListTwigExtension/filters.html.twig");
    }
}
