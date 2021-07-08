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

/* @KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig */
class __TwigTemplate_a4c3fd7a7e7615af80190cc0b8ab9bf46732dcedf6a3c9c9437be33b4305f109 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig"));

        // line 1
        $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 1, $this->source); })()), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1);
        // line 2
        echo "<article class=\"page-template\">
    <!-- Hidden fields -->
    <input type=\"hidden\" class=\"deletefield\" id=\"pagetemplate_template_holder\" name=\"pagetemplate_template\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 4, $this->source); })()), "pagetemplate", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>


    <!-- Regions -->
    ";
        // line 8
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 9, $this->source); })()), "pagetemplate", [], "any", false, false, false, 9), "rows", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "        <div class=\"row\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "regions", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 12
                echo "                ";
                echo twig_call_macro($macros["macros"], "macro_render_region", [(isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 12, $this->source); })()), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 12, $this->source); })()), $context["region"]], 12, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

    <!-- Change Template -->
    ";
        // line 19
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 19, $this->source); })()), "pagetemplates", [], "any", false, false, false, 19)) > 1)) {
            // line 20
            echo "        <!-- Change Template - Button -->
        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover btn--icon-left\" data-keyboard=\"true\" data-toggle=\"modal\" data-target=\"#change-template-modal";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\">
            <i class=\"fa fa-th btn__icon\"></i>
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.button.open"), "html", null, true);
            echo "
        </button>


        <!-- Change Template - Modal -->
        <div id=\"change-template-modal";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" class=\"modal fade page-template__change-modal\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h4 class=\"modal-title\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.title"), "html", null, true);
            echo "
                        </h4>
                    </div>

                    <div class=\"modal-body\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 42, $this->source); })()), "pagetemplates", [], "any", false, false, false, 42));
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
            foreach ($context['_seq'] as $context["_key"] => $context["pagetemplate"]) {
                // line 43
                echo "                            <!-- Choice -->
                            <div class=\"choice-block\">
                                <input type=\"radio\" id=\"pagetemplate_template_choice_";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
                echo "\" class=\"choice-block__input\" name=\"pagetemplate_template_choice\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pagetemplate"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 45, $this->source); })()), "pagetemplate", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, $context["pagetemplate"], "name", [], "any", false, false, false, 45))) {
                    echo " checked=\"checked\"";
                }
                echo ">
                                <label for=\"pagetemplate_template_choice_";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
                echo "\" class=\"choice-block__item\">
                                    <h5 class=\"choice-block__item__head\">
                                        ";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["pagetemplate"], "name", [], "any", false, false, false, 48)), "html", null, true);
                echo "
                                        ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 49, $this->source); })()), "pagetemplate", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["pagetemplate"], "name", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                                            <small>(";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.current"), "html", null, true);
                    echo ")</small>
                                        ";
                }
                // line 52
                echo "                                    </h5>
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pagetemplate"], "rows", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 54
                    echo "                                        <div class=\"row\">
                                            ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "regions", [], "any", false, false, false, 55));
                    foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                        // line 56
                        echo "                                                <div class=\"col-md-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "span", [], "any", false, false, false, 56), "html", null, true);
                        echo "\">
                                                    <div class=\"choice-block__item__col\">
                                                        ";
                        // line 58
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 58)), ["_" => " "])), "html", null, true);
                        echo "
                                                    </div>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                                </label>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagetemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"js-change-page-template btn btn-primary btn--raise-on-hover\" data-modal=\"change-template-modal";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\">
                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.button.change"), "html", null, true);
            echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.button.cancel"), "html", null, true);
            echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 81
        echo "
</article>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function macro_render_region($__formView__ = null, $__resource__ = null, $__region__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "formView" => $__formView__,
            "resource" => $__resource__,
            "region" => $__region__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_region"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_region"));

            // line 85
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 85, $this->source); })()), "children", [], "any", false, false, false, 85)) {
                // line 86
                echo "        <div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 86, $this->source); })()), "span", [], "any", false, false, false, 86), "html", null, true);
                echo "\">
            <div class=\"row\">
                ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 88, $this->source); })()), "children", [], "any", false, false, false, 88));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 89
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_render_region", [(isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 89, $this->source); })()), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 89, $this->source); })()), $context["child"]], 89, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "            </div>
        </div>
    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 93
(isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 93, $this->source); })()), "rows", [], "any", false, false, false, 93)) {
                // line 94
                echo "        <div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 94, $this->source); })()), "span", [], "any", false, false, false, 94), "html", null, true);
                echo "\">
            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 95, $this->source); })()), "rows", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 96
                    echo "                <div class=\"row\">
                    ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "regions", [], "any", false, false, false, 97));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 98
                        echo "                        ";
                        echo twig_call_macro($macros["_self"], "macro_render_region", [(isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 98, $this->source); })()), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 98, $this->source); })()), $context["child"]], 98, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "        </div>
    ";
            } else {
                // line 104
                echo "        <div class=\"col-md-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 104, $this->source); })()), "span", [], "any", false, false, false, 104), "html", null, true);
                echo "\">
            <div class=\"page-template__region\" id=\"";
                // line 105
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105))), "html", null, true);
                echo "\">
                <header>
                    <h5 class=\"page-template__region__header\">
                        ";
                // line 108
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108)), ["_" => " "])), "html", null, true);
                echo "
                    </h5>
                </header>
                <div class=\"region__actions\">
                    <button class=\"js-resize-all-pp btn--raise-on-hover region__actions__min\" data-target=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("region.button.min"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                    <button class=\"js-resize-all-pp btn--raise-on-hover region__actions__max\" data-target=\"";
                // line 115
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 115, $this->source); })()), "name", [], "any", false, false, false, 115))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("region.button.max"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
                </div>

                ";
                // line 120
                $context["widget"] = twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 120, $this->source); })()), "getFormWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120)], "method", false, false, false, 120);
                // line 121
                echo "                ";
                if ( !(null === (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 121, $this->source); })()))) {
                    // line 122
                    echo "                    ";
                    $context["pagepartadmin"] = twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 122, $this->source); })()), "pagepartadmin", [], "any", false, false, false, 122);
                    // line 123
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 123, $this->source); })()), "pagePartAdminConfigurator", [], "any", false, false, false, 123), "widgetTemplate", [], "any", false, false, false, 123)) {
                        // line 124
                        echo "                        ";
                        echo $this->extensions['Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension']->renderWidget($this->env, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 124, $this->source); })()), (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 124, $this->source); })()), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 124, $this->source); })()), "pagePartAdminConfigurator", [], "any", false, false, false, 124), "widgetTemplate", [], "any", false, false, false, 124));
                        echo "
                    ";
                    } else {
                        // line 126
                        echo "                        ";
                        echo $this->extensions['Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension']->renderWidget($this->env, (isset($context["pagepartadmin"]) || array_key_exists("pagepartadmin", $context) ? $context["pagepartadmin"] : (function () { throw new RuntimeError('Variable "pagepartadmin" does not exist.', 126, $this->source); })()), (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 126, $this->source); })()));
                        echo "
                    ";
                    }
                    // line 128
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "template", [], "any", true, true, false, 128) && twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 128, $this->source); })()), "template", [], "any", false, false, false, 128))) {
                    // line 129
                    echo "                    ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 129, $this->source); })()), "template", [], "any", false, false, false, 129), "@KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig", 129)->display(twig_array_merge($context, ["page" => twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 129, $this->source); })()), "page", [], "any", false, false, false, 129)]));
                    // line 130
                    echo "                ";
                } else {
                    // line 131
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_pagepart.template.modal.change.message.no_admin_found.%name%", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "
                ";
                }
                // line 133
                echo "            </div>
        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 133,  422 => 131,  419 => 130,  416 => 129,  413 => 128,  407 => 126,  401 => 124,  398 => 123,  395 => 122,  392 => 121,  390 => 120,  380 => 115,  372 => 112,  365 => 108,  359 => 105,  354 => 104,  350 => 102,  343 => 100,  334 => 98,  330 => 97,  327 => 96,  323 => 95,  318 => 94,  316 => 93,  312 => 91,  303 => 89,  299 => 88,  293 => 86,  290 => 85,  269 => 84,  256 => 81,  246 => 74,  240 => 71,  236 => 70,  231 => 67,  215 => 64,  208 => 62,  198 => 58,  192 => 56,  188 => 55,  185 => 54,  181 => 53,  178 => 52,  172 => 50,  170 => 49,  166 => 48,  161 => 46,  151 => 45,  147 => 43,  130 => 42,  122 => 37,  110 => 28,  102 => 23,  97 => 21,  94 => 20,  92 => 19,  87 => 16,  80 => 14,  71 => 12,  67 => 11,  64 => 10,  59 => 9,  57 => 8,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set id = resource.page.id %}
<article class=\"page-template\">
    <!-- Hidden fields -->
    <input type=\"hidden\" class=\"deletefield\" id=\"pagetemplate_template_holder\" name=\"pagetemplate_template\" value=\"{{ resource.pagetemplate.name }}\"/>


    <!-- Regions -->
    {% import _self as macros %}
    {% for row in resource.pagetemplate.rows %}
        <div class=\"row\">
            {% for region in row.regions %}
                {{ macros.render_region(formView, resource, region) }}
            {% endfor %}
        </div>
    {% endfor %}


    <!-- Change Template -->
    {% if resource.pagetemplates|length > 1 %}
        <!-- Change Template - Button -->
        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover btn--icon-left\" data-keyboard=\"true\" data-toggle=\"modal\" data-target=\"#change-template-modal{{ id }}\">
            <i class=\"fa fa-th btn__icon\"></i>
            {{ 'kuma_pagepart.template.modal.change.button.open'|trans() }}
        </button>


        <!-- Change Template - Modal -->
        <div id=\"change-template-modal{{ id }}\" class=\"modal fade page-template__change-modal\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <h4 class=\"modal-title\">
                            {{ 'kuma_pagepart.template.modal.change.title'|trans() }}
                        </h4>
                    </div>

                    <div class=\"modal-body\">
                        {% for pagetemplate in resource.pagetemplates %}
                            <!-- Choice -->
                            <div class=\"choice-block\">
                                <input type=\"radio\" id=\"pagetemplate_template_choice_{{ loop.index }}\" class=\"choice-block__input\" name=\"pagetemplate_template_choice\" value=\"{{ pagetemplate.name }}\"{% if resource.pagetemplate.name == pagetemplate.name %} checked=\"checked\"{% endif %}>
                                <label for=\"pagetemplate_template_choice_{{ loop.index }}\" class=\"choice-block__item\">
                                    <h5 class=\"choice-block__item__head\">
                                        {{ pagetemplate.name|trans }}
                                        {% if resource.pagetemplate.name == pagetemplate.name %}
                                            <small>({{ 'kuma_pagepart.template.modal.change.current'|trans() }})</small>
                                        {% endif %}
                                    </h5>
                                    {% for row in pagetemplate.rows %}
                                        <div class=\"row\">
                                            {% for region in row.regions %}
                                                <div class=\"col-md-{{ region.span }}\">
                                                    <div class=\"choice-block__item__col\">
                                                        {{ region.name|trans|replace({'_':' '})|title }}
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    {% endfor %}
                                </label>
                            </div>
                        {% endfor %}
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"js-change-page-template btn btn-primary btn--raise-on-hover\" data-modal=\"change-template-modal{{ id }}\">
                            {{ 'kuma_pagepart.template.modal.change.button.change'|trans() }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_pagepart.template.modal.change.button.cancel'|trans() }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

</article>

{% macro render_region(formView, resource, region) %}
    {% if region.children %}
        <div class=\"col-md-{{ region.span }}\">
            <div class=\"row\">
                {% for child in region.children %}
                    {{ _self.render_region(formView, resource, child) }}
                {% endfor %}
            </div>
        </div>
    {% elseif region.rows %}
        <div class=\"col-md-{{ region.span }}\">
            {% for row in region.rows %}
                <div class=\"row\">
                    {% for child in row.regions %}
                        {{ _self.render_region(formView, resource, child) }}
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"col-md-{{ region.span }}\">
            <div class=\"page-template__region\" id=\"{{ region.name|trans|title }}\">
                <header>
                    <h5 class=\"page-template__region__header\">
                        {{ region.name|trans|replace({'_':' '})|title }}
                    </h5>
                </header>
                <div class=\"region__actions\">
                    <button class=\"js-resize-all-pp btn--raise-on-hover region__actions__min\" data-target=\"{{ region.name|trans|title }}\" title=\"{{ 'region.button.min'|trans }}\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                    <button class=\"js-resize-all-pp btn--raise-on-hover region__actions__max\" data-target=\"{{ region.name|trans|title }}\" title=\"{{ 'region.button.max'|trans }}\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
                </div>

                {% set widget = resource.getFormWidget(region.name) %}
                {% if widget is not null %}
                    {% set pagepartadmin = widget.pagepartadmin %}
                    {% if widget.pagePartAdminConfigurator.widgetTemplate %}
                        {{ pagepartadmin_widget(pagepartadmin, formView, [], widget.pagePartAdminConfigurator.widgetTemplate) }}
                    {% else %}
                        {{ pagepartadmin_widget(pagepartadmin, formView) }}
                    {% endif %}
                {% elseif region.template is defined and region.template %}
                    {% include region.template with {'page': resource.page} %}
                {% else %}
                    {{ 'kuma_pagepart.template.modal.change.message.no_admin_found.%name%'|trans({'%name%': region.name}) }}
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endmacro %}
", "@KunstmaanPagePart/FormWidgets/PageTemplateWidget/widget.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/pagepart-bundle/Resources/views/FormWidgets/PageTemplateWidget/widget.html.twig");
    }
}
