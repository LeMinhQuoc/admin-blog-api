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

/* @KunstmaanAdmin/Form/fields.html.twig */
class __TwigTemplate_3dd8bf4c5ec07e696dc9176f83e9d37da827d4a96c1f221ae84703785e55127b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 260
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@KunstmaanAdmin/Form/fields.html.twig", 260);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 260, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["datetime_widget"])) {
            throw new RuntimeError('Block "datetime_widget" is not defined in trait "form_div_layout.html.twig".', 260, $this->source);
        }

        $_trait_0_blocks["base_datetime_widget"] = $_trait_0_blocks["datetime_widget"]; unset($_trait_0_blocks["datetime_widget"]);

        // line 269
        $_trait_1 = $this->loadTemplate("form_div_layout.html.twig", "@KunstmaanAdmin/Form/fields.html.twig", 269);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 269, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        if (!isset($_trait_1_blocks["date_widget"])) {
            throw new RuntimeError('Block "date_widget" is not defined in trait "form_div_layout.html.twig".', 269, $this->source);
        }

        $_trait_1_blocks["base_date_widget"] = $_trait_1_blocks["date_widget"]; unset($_trait_1_blocks["date_widget"]);

        // line 284
        $_trait_2 = $this->loadTemplate("form_div_layout.html.twig", "@KunstmaanAdmin/Form/fields.html.twig", 284);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 284, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        if (!isset($_trait_2_blocks["time_widget"])) {
            throw new RuntimeError('Block "time_widget" is not defined in trait "form_div_layout.html.twig".', 284, $this->source);
        }

        $_trait_2_blocks["base_time_widget"] = $_trait_2_blocks["time_widget"]; unset($_trait_2_blocks["time_widget"]);

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'color_widget' => [$this, 'block_color_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'wysiwyg_widget' => [$this, 'block_wysiwyg_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'form_row' => [$this, 'block_form_row'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'range_widget' => [$this, 'block_range_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Form/fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Form/fields.html.twig"));

        // line 2
        $this->displayBlock('color_widget', $context, $blocks);
        // line 10
        echo "

";
        // line 12
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 24
        echo "

";
        // line 26
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 46
        echo "

";
        // line 48
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 55
        echo "

";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('wysiwyg_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        echo "

";
        // line 99
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 116
        echo "



";
        // line 121
        $this->displayBlock('form_label', $context, $blocks);
        // line 142
        echo "



";
        // line 147
        $this->displayBlock('form_row', $context, $blocks);
        // line 256
        echo "

";
        // line 259
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 265
        echo "

";
        // line 267
        $this->displayBlock('date_widget', $context, $blocks);
        // line 280
        echo "

";
        // line 282
        $this->displayBlock('time_widget', $context, $blocks);
        // line 295
        echo "

";
        // line 297
        $this->displayBlock('form_errors', $context, $blocks);
        // line 306
        echo "

";
        // line 308
        $this->displayBlock('range_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_widget"));

        // line 3
        ob_start();
        // line 4
        echo "    <div class=\"js-colorpicker input-group\" data-reinit-js='[\"colorpicker\"]' data-format=\"hex\"";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-colors", [], "array", true, true, false, 4)) {
            echo " data-color-selectors=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), "data-colors", [], "array", false, false, false, 4), "html", null, true);
            echo "\"";
        }
        echo ">
        <input ";
        // line 5
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\"/>
        <span class=\"input-group-addon\"><i></i></span>
    </div>
";
        $___internal_0bcef9ace80b417e76d6cf3351077490333b4d491f96359da0bc269ddc8b7438_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_0bcef9ace80b417e76d6cf3351077490333b4d491f96359da0bc269ddc8b7438_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 13
        ob_start();
        // line 14
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 16
            echo "            <div class=\"form-group\">
                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            echo "
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
        $___internal_b3f5b6654da3d4637d1f02584bbb073a954550495781239f5d8ddf851d2e7d87_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_spaceless($___internal_b3f5b6654da3d4637d1f02584bbb073a954550495781239f5d8ddf851d2e7d87_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 27
        ob_start();
        // line 28
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " form-control"))]);
        // line 29
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 29, $this->source); })())) {
            echo " multiple=\"multiple\"";
        }
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 30)) {
            echo " data-placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()), "placeholder", [], "any", false, false, false, 30), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 31
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            <option value=\"\" ";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 32, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 32, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 32, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 32, $this->source); })())), "html", null, true);
            echo "</option>
        ";
        }
        // line 34
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 34, $this->source); })())) > 0)) {
            // line 35
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 35, $this->source); })());
            // line 36
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 37
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 37, $this->source); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 37, $this->source); })())))) {
                // line 38
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</option>
            ";
            }
            // line 40
            echo "        ";
        }
        // line 41
        echo "        ";
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 41, $this->source); })());
        // line 42
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        $___internal_3c92e8a155efc0ff35f1eab12a5d25d51286560668d1dd3fc65ba5be126694f0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo twig_spaceless($___internal_3c92e8a155efc0ff35f1eab12a5d25d51286560668d1dd3fc65ba5be126694f0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 49
        ob_start();
        // line 50
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()), "text")) : ("text"));
        // line 51
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 51, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 51), "")) : ("")) . " form-control") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 51)) ? (" js-max-length-input") : (""))))]);
        // line 52
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 52)) {
            echo "data-reinit-js='[\"charactersLeft\"]' data-target=\"#counter-for-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"";
        }
        echo ">
";
        $___internal_38b5258e2bef9951c5cc76fa7264d7f2ea474a1aff3cd74cbab3580fe89d464c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo twig_spaceless($___internal_38b5258e2bef9951c5cc76fa7264d7f2ea474a1aff3cd74cbab3580fe89d464c_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        ob_start();
        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 59, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " form-control ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 59)) ? (" js-max-length-input") : (""))))]);
        // line 60
        echo "    ";
        $context["reInitMethods"] = [];
        // line 61
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 61)) {
            // line 62
            echo "        ";
            $context["reInitMethods"] = twig_array_merge((isset($context["reInitMethods"]) || array_key_exists("reInitMethods", $context) ? $context["reInitMethods"] : (function () { throw new RuntimeError('Variable "reInitMethods" does not exist.', 62, $this->source); })()), [0 => "\"charactersLeft\""]);
            // line 63
            echo "    ";
        }
        // line 64
        echo "    ";
        if (twig_in_filter("js-rich-editor", twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 64, $this->source); })()), "class", [], "any", false, false, false, 64))) {
            // line 65
            echo "        ";
            $context["reInitMethods"] = twig_array_merge((isset($context["reInitMethods"]) || array_key_exists("reInitMethods", $context) ? $context["reInitMethods"] : (function () { throw new RuntimeError('Variable "reInitMethods" does not exist.', 65, $this->source); })()), [0 => "\"richEditor\""]);
            // line 66
            echo "    ";
        }
        // line 67
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["reInitMethods"]) || array_key_exists("reInitMethods", $context) ? $context["reInitMethods"] : (function () { throw new RuntimeError('Variable "reInitMethods" does not exist.', 67, $this->source); })())) > 0)) {
            echo "data-reinit-js=\"[";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["reInitMethods"]) || array_key_exists("reInitMethods", $context) ? $context["reInitMethods"] : (function () { throw new RuntimeError('Variable "reInitMethods" does not exist.', 67, $this->source); })()), ","), "html", null, true);
            echo "]\"";
        }
        echo " rows=\"5\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 67)) {
            echo " data-target=\"#counter-for-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" ";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</textarea>
";
        $___internal_052f0e3f190f5d6c927ae6060fede3677272e6dd45ae1d15f2c346265fe14328_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo twig_spaceless($___internal_052f0e3f190f5d6c927ae6060fede3677272e6dd45ae1d15f2c346265fe14328_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_wysiwyg_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wysiwyg_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wysiwyg_widget"));

        // line 72
        ob_start();
        // line 73
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 73, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 73), "")) : ("")) . " js-rich-editor rich-editor form-control"))]);
        // line 74
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 74)) {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 75, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 75), "")) : ("")) . " js-max-length-input"))]);
            // line 76
            echo "    ";
        }
        // line 77
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (twig_in_filter("js-rich-editor", twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })()), "class", [], "any", false, false, false, 77))) {
            echo " data-reinit-js='[\"richEditor\"]'";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "type", [], "array", true, true, false, 77)) {
            echo " data-editor-mode=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })()), "type", [], "array", false, false, false, 77), "html", null, true);
            echo "\"";
        }
        echo " rows=\"10\" cols=\"600\">";
        echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 77, $this->source); })());
        echo "</textarea>
";
        $___internal_7dca711132957a3db4e04cce051e6fe6f75f6d36f5fdbb4210e35f315e61481d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo twig_spaceless($___internal_7dca711132957a3db4e04cce051e6fe6f75f6d36f5fdbb4210e35f315e61481d_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        ob_start();
        // line 83
        echo "    <div class=\"checkbox\">
        ";
        // line 84
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 84, $this->source); })())) {
            // line 85
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 85, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 85), "")) : ("")) . " required"))]);
            // line 86
            echo "        ";
        }
        // line 87
        echo "        ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 87, $this->source); })()))) {
            // line 88
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 88, $this->source); })()));
            // line 89
            echo "        ";
        }
        // line 90
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"checkbox\" ";
        // line 91
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 91, $this->source); })())) {
            echo " checked=\"checked\"";
        }
        echo ">
            ";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 92, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 92, $this->source); })()));
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 92, $this->source); })())) {
            echo "<span class=\"form-group__required-icon\">*</span>";
        }
        // line 93
        echo "        </label>
    </div>
";
        $___internal_6faa35376fdf8ef97fe8f8d0ce619335b180b485bebc64f6cf8bf266a056c4a3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo twig_spaceless($___internal_6faa35376fdf8ef97fe8f8d0ce619335b180b485bebc64f6cf8bf266a056c4a3_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 100
        ob_start();
        // line 101
        echo "    <div class=\"radio\">
        ";
        // line 102
        if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 102, $this->source); })()) &&  !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 102, $this->source); })()))) {
            // line 103
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 103, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 103), "")) : ("")) . " required"))]);
            // line 104
            echo "        ";
        }
        // line 105
        echo "        ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 105, $this->source); })()))) {
            // line 106
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 106, $this->source); })()));
            // line 107
            echo "        ";
        }
        // line 108
        echo "
        <label for=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        <input type=\"radio\" ";
        // line 110
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 110, $this->source); })())) {
            echo " checked=\"checked\"";
        }
        echo ">
            ";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 111, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 111, $this->source); })()));
        if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 111, $this->source); })()) &&  !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 111, $this->source); })()))) {
            echo "<span class=\"form-group__required-icon\">*</span>";
        }
        // line 112
        echo "        </label>
    </div>
";
        $___internal_bd99d7cc825568b42b3bd4bb6552cb7497c308ed71db595644d725ca25109c10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo twig_spaceless($___internal_bd99d7cc825568b42b3bd4bb6552cb7497c308ed71db595644d725ca25109c10_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 122
        ob_start();
        // line 123
        echo "    ";
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 123, $this->source); })())) &&  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 123, $this->source); })()) === false))) {
            // line 124
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 124, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 124), "")) : ("")))]);
            // line 125
            echo "        ";
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 125, $this->source); })())) {
                // line 126
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 126, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 126, $this->source); })())]);
                // line 127
                echo "        ";
            }
            // line 128
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 128, $this->source); })())) {
                // line 129
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 129, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 129), "")) : ("")) . " required"))]);
                // line 130
                echo "        ";
            }
            // line 131
            echo "        ";
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 131, $this->source); })()) === false)) {
                // line 132
                echo "            ";
                if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 132, $this->source); })()))) {
                    // line 133
                    echo "                ";
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 133, $this->source); })()));
                    // line 134
                    echo "            ";
                }
                // line 135
                echo "            <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 135, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 136, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 136, $this->source); })())), "html", null, true);
                if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 136, $this->source); })())) {
                    echo " *";
                }
                // line 137
                echo "            </label>
        ";
            }
            // line 139
            echo "    ";
        }
        $___internal_c556af96515412ef780c35c5fded9be5d60c13643dcb84a64d0fdd5ac3ea3f2c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo twig_spaceless($___internal_c556af96515412ef780c35c5fded9be5d60c13643dcb84a64d0fdd5ac3ea3f2c_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 148
        ob_start();
        // line 149
        echo "    ";
        $context["noMaxWidth"] = false;
        // line 150
        echo "    ";
        if (((((twig_get_attribute($this->env, $this->source,         // line 151
($context["attr"] ?? null), "nested_form", [], "array", true, true, false, 151) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 151, $this->source); })()), "nested_form", [], "array", false, false, false, 151) == true)) || twig_in_filter("wysiwyg",         // line 152
(isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 152, $this->source); })()))) || twig_in_filter("slug",         // line 153
(isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 153, $this->source); })()))) || (twig_get_attribute($this->env, $this->source,         // line 154
($context["attr"] ?? null), "no-max-width", [], "array", true, true, false, 154) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 154, $this->source); })()), "no-max-width", [], "array", false, false, false, 154)))) {
            // line 156
            echo "        ";
            $context["noMaxWidth"] = true;
            // line 157
            echo "    ";
        }
        // line 158
        echo "
    <div class=\"form-group";
        // line 159
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 159, $this->source); })())) > 0)) {
            echo " has-error";
        }
        if (((isset($context["noMaxWidth"]) || array_key_exists("noMaxWidth", $context) ? $context["noMaxWidth"] : (function () { throw new RuntimeError('Variable "noMaxWidth" does not exist.', 159, $this->source); })()) == true)) {
            echo " form-group--no-max-width";
        }
        echo "\">
        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'label');
        echo "

        ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_form", [], "array", true, true, false, 162) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 162, $this->source); })()), "nested_form", [], "array", false, false, false, 162) == true))) {
            // line 163
            echo "            ";
            // line 164
            echo "            ";
            $context["sortable"] = false;
            // line 165
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_sortable", [], "array", true, true, false, 165) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 165, $this->source); })()), "nested_sortable", [], "array", false, false, false, 165) == true))) {
                // line 166
                echo "                ";
                $context["sortable"] = true;
                // line 167
                echo "                ";
                $context["sortableField"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_sortable_field", [], "array", true, true, false, 167)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_sortable_field", [], "array", false, false, false, 167), "weight")) : ("weight"));
                // line 168
                echo "            ";
            }
            // line 169
            echo "
            <div
                id=\"";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
            echo "__nested-form\"
                class=\"js-nested-form nested-form ";
            // line 172
            if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 172, $this->source); })())) {
                echo " js-sortable-container sortable-container nested-form--sortable";
            }
            echo "\"
                data-sortable=\"";
            // line 173
            if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 173, $this->source); })())) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
                data-allow-new=\"";
            // line 174
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 174), "allow_add", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 174), "allow_add", [], "any", false, false, false, 174), "0")) : ("0")), "html", null, true);
            echo "\"
                data-allow-delete=\"";
            // line 175
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 175), "allow_delete", [], "any", true, true, false, 175)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 175), "allow_delete", [], "any", false, false, false, 175), "0")) : ("0")), "html", null, true);
            echo "\"
                data-min-items=\"";
            // line 176
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_form_min", [], "array", true, true, false, 176)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_form_min", [], "array", false, false, false, 176), "0")) : ("0")), "html", null, true);
            echo "\"
                data-max-items=\"";
            // line 177
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_form_max", [], "array", true, true, false, 177)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_form_max", [], "array", false, false, false, 177), "false")) : ("false")), "html", null, true);
            echo "\"
                ";
            // line 178
            if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 178, $this->source); })())) {
                echo " data-sortkey=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "vars", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178), "html", null, true);
                echo "___name___";
                echo twig_escape_filter($this->env, (isset($context["sortableField"]) || array_key_exists("sortableField", $context) ? $context["sortableField"] : (function () { throw new RuntimeError('Variable "sortableField" does not exist.', 178, $this->source); })()), "html", null, true);
                echo "\"";
            }
            // line 179
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), "allow_add", [], "any", false, false, false, 179)) {
                // line 180
                echo "                    data-prototype=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "vars", [], "any", false, false, false, 180), "prototype", [], "any", false, false, false, 180), 'widget'));
                echo "\"
                    data-prototype-name=\"";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "vars", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181), "html", null, true);
                echo "\"
                    data-add-button-label=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_add_button_label", [], "array", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_add_button_label", [], "array", false, false, false, 182), "form.add")) : ("form.add"))), "html", null, true);
                echo "\"
                ";
            }
            // line 184
            echo "                data-initialized=\"false\" data-initializing=\"false\" data-reinit-js='[\"nestedForm\"]'>

                ";
            // line 187
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 188
                echo "                    <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "vars", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188), "html", null, true);
                echo "__";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, true, false, 188), "value", [], "any", false, true, false, 188), "id", [], "any", true, true, false, 188)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 188), "value", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 188), "value", [], "any", false, false, false, 188), "html", null, true);
                }
                echo "-pp-container\" class=\"js-nested-form__item nested-form__item";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 188, $this->source); })())) {
                    echo " js-sortable-item sortable-item";
                }
                echo "\"
                            ";
                // line 189
                if (( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "nested_deletable", [], "array", true, true, false, 189) || (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 189, $this->source); })()), "nested_deletable", [], "array", false, false, false, 189) != false))) {
                    // line 190
                    echo "                                data-delete-key=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "vars", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190), ["form_" => "delete_"]), "html", null, true);
                    echo "_";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, true, false, 190), "value", [], "any", false, true, false, 190), "id", [], "any", true, true, false, 190)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 190), "value", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 190), "value", [], "any", false, false, false, 190), "html", null, true);
                    }
                    echo "\"
                            ";
                }
                // line 192
                echo "                            ";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 192, $this->source); })())) {
                    echo "data-sortkey=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "children", [], "any", false, false, false, 192), (isset($context["sortableField"]) || array_key_exists("sortableField", $context) ? $context["sortableField"] : (function () { throw new RuntimeError('Variable "sortableField" does not exist.', 192, $this->source); })()), [], "array", false, false, false, 192), "vars", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 194
                echo "                        <header class=\"";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 194, $this->source); })())) {
                    echo "js-sortable-item__handle";
                }
                echo " nested-form__item__header\">
                            ";
                // line 195
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 195, $this->source); })())) {
                    // line 196
                    echo "                                <i class=\"fa fa-arrows nested-form__item__header__move-icon\"></i>
                            ";
                }
                // line 198
                echo "
                            <div class=\"js-nested-form__item__header__actions nested-form__item__header__actions\"></div>
                            ";
                // line 200
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 200, $this->source); })())) {
                    // line 201
                    echo "                            <button type=\"button\" class=\"js-move-up-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--up\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.move_up"), "html", null, true);
                    echo "\" data-target-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "vars", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), "html", null, true);
                    echo "__";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, true, false, 201), "value", [], "any", false, true, false, 201), "id", [], "any", true, true, false, 201)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201), "html", null, true);
                    }
                    echo "\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </button>
                            <button type=\"button\" class=\"js-move-down-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--down\" title=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagepart.buttons.move_down"), "html", null, true);
                    echo "\" data-target-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
                    echo "__";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, true, false, 204), "value", [], "any", false, true, false, 204), "id", [], "any", true, true, false, 204)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 204), "value", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 204), "value", [], "any", false, false, false, 204), "html", null, true);
                    }
                    echo "\">
                                <i class=\"fa fa-chevron-down\"></i>
                            </button>
                            ";
                }
                // line 208
                echo "                        </header>

                        ";
                // line 211
                echo "                        <div class=\"js-nested-form__item__view nested-form__item__view\">
                            ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obj"], "vars", [], "any", false, false, false, 212), "compound", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["obj"], 'widget');
                    echo "
                            ";
                } else {
                    // line 215
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["obj"], "children", [], "any", false, false, false, 215));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 216
                        echo "                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                        echo "
                                ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 218
                        echo "                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["obj"], 'widget');
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 220
                    echo "                            ";
                }
                // line 221
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "            </div>
        ";
        } else {
            // line 226
            echo "            ";
            ob_start();
            // line 227
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), 'widget');
            echo "
            ";
            $context["widget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 229
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "maxlength", [], "array", true, true, false, 229)) {
                // line 230
                echo "                ";
                ob_start();
                // line 231
                echo "                    <div class=\"input-group-counter\">
                        ";
                // line 232
                echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 232, $this->source); })()), "html", null, true);
                echo "
                        <span id=\"counter-for-";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "vars", [], "any", false, false, false, 233), "id", [], "any", false, false, false, 233), "html", null, true);
                echo "\" class=\"js-max-length-counter form-control__character-counter\"></span>
                    </div>
                ";
                $context["widget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 236
                echo "            ";
            }
            // line 237
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "info_text", [], "array", true, true, false, 237)) {
                // line 238
                echo "                ";
                ob_start();
                // line 239
                echo "                    <div class=\"input-group\" data-reinit-js='[\"tooltip\"]'>
                        ";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 240, $this->source); })()), "html", null, true);
                echo "
                        <span class=\"input-group-addon\">
                            <strong class=\"input-group-addon--tooltip\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 242, $this->source); })()), "info_text", [], "array", false, false, false, 242)), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 242, $this->source); })()), "html", null, true);
                echo "_info_text\">?</strong>
                        </span>
                    </div>
                ";
                $context["widget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 246
                echo "            ";
            }
            // line 247
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 247, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 249
        echo "
        ";
        // line 250
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "array", true, true, false, 250)) {
        }
        // line 251
        echo "
        ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), 'errors');
        echo "
    </div>
";
        $___internal_2a295b5a6b1b440449a84e70b22eacd547b0504ff6a2ce92ad43e2aef30a10d6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        echo twig_spaceless($___internal_2a295b5a6b1b440449a84e70b22eacd547b0504ff6a2ce92ad43e2aef30a10d6_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 260
        echo "    ";
        // line 261
        echo "    <div class=\"form-group date-time-group\">
        ";
        // line 262
        $this->displayBlock("base_datetime_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 268
        echo "    <div class=\"date-widget\">
        ";
        // line 270
        echo "        ";
        if ((array_key_exists("widget", $context) && ((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 270, $this->source); })()) == "single_text"))) {
            // line 271
            echo "            <div class=\"js-datepicker\" data-format=\"DD/MM/YYYY\" data-reinit-js='[\"datepicker\"]'>
                ";
            // line 272
            $this->displayBlock("base_date_widget", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 275
            echo "            ";
            $this->displayBlock("base_date_widget", $context, $blocks);
            echo "
        ";
        }
        // line 277
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 283
        echo "    <div class=\"time-widget\">
        ";
        // line 285
        echo "        ";
        $context["type"] = "text";
        // line 286
        echo "        ";
        if ((array_key_exists("widget", $context) && ((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 286, $this->source); })()) == "single_text"))) {
            // line 287
            echo "            <div class=\"js-datepicker\" data-format=\"HH:mm\" data-reinit-js='[\"datepicker\"]'>
                ";
            // line 288
            $this->displayBlock("base_time_widget", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 291
            echo "            ";
            $this->displayBlock("base_time_widget", $context, $blocks);
            echo "
        ";
        }
        // line 293
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 298
        ob_start();
        // line 299
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 299, $this->source); })())) > 0)) {
            // line 300
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 300, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 301
                echo "            <span class=\"help-block text-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 301), "html", null, true);
                echo "</span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "    ";
        }
        $___internal_f135e431c2ae248f0c2f484a69617432c757cacd534f75d6d7eb3817f8eb6abb_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        echo twig_spaceless($___internal_f135e431c2ae248f0c2f484a69617432c757cacd534f75d6d7eb3817f8eb6abb_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 308
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "range_widget"));

        // line 309
        ob_start();
        // line 310
        echo "    <div class=\"range\">
        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), 'widget', ["type" => "range", "attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 311, $this->source); })())]);
        echo "
        <span class=\"range--value\"></span>
    </div>
";
        $___internal_cb40b4cfaf61929f0a7f9ecd268778ec5e10db0cce3f7d800ef3a636d2ce79ac_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 309
        echo twig_spaceless($___internal_cb40b4cfaf61929f0a7f9ecd268778ec5e10db0cce3f7d800ef3a636d2ce79ac_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1338 => 309,  1331 => 311,  1328 => 310,  1326 => 309,  1316 => 308,  1306 => 298,  1302 => 303,  1293 => 301,  1288 => 300,  1285 => 299,  1283 => 298,  1273 => 297,  1262 => 293,  1256 => 291,  1250 => 288,  1247 => 287,  1244 => 286,  1241 => 285,  1238 => 283,  1228 => 282,  1216 => 277,  1210 => 275,  1204 => 272,  1201 => 271,  1198 => 270,  1195 => 268,  1185 => 267,  1172 => 262,  1169 => 261,  1167 => 260,  1157 => 259,  1147 => 148,  1141 => 252,  1138 => 251,  1135 => 250,  1132 => 249,  1126 => 247,  1123 => 246,  1114 => 242,  1109 => 240,  1106 => 239,  1103 => 238,  1100 => 237,  1097 => 236,  1091 => 233,  1087 => 232,  1084 => 231,  1081 => 230,  1078 => 229,  1072 => 227,  1069 => 226,  1065 => 224,  1057 => 221,  1054 => 220,  1045 => 218,  1037 => 216,  1031 => 215,  1025 => 213,  1023 => 212,  1020 => 211,  1016 => 208,  1001 => 204,  986 => 201,  984 => 200,  980 => 198,  976 => 196,  974 => 195,  967 => 194,  958 => 192,  946 => 190,  944 => 189,  929 => 188,  924 => 187,  920 => 184,  915 => 182,  911 => 181,  906 => 180,  903 => 179,  895 => 178,  891 => 177,  887 => 176,  883 => 175,  879 => 174,  871 => 173,  865 => 172,  861 => 171,  857 => 169,  854 => 168,  851 => 167,  848 => 166,  845 => 165,  842 => 164,  840 => 163,  838 => 162,  833 => 160,  824 => 159,  821 => 158,  818 => 157,  815 => 156,  813 => 154,  812 => 153,  811 => 152,  810 => 151,  808 => 150,  805 => 149,  803 => 148,  793 => 147,  783 => 122,  779 => 139,  775 => 137,  770 => 136,  754 => 135,  751 => 134,  748 => 133,  745 => 132,  742 => 131,  739 => 130,  736 => 129,  733 => 128,  730 => 127,  727 => 126,  724 => 125,  721 => 124,  718 => 123,  716 => 122,  706 => 121,  696 => 100,  691 => 112,  686 => 111,  674 => 110,  657 => 109,  654 => 108,  651 => 107,  648 => 106,  645 => 105,  642 => 104,  639 => 103,  637 => 102,  634 => 101,  632 => 100,  622 => 99,  612 => 82,  607 => 93,  602 => 92,  590 => 91,  572 => 90,  569 => 89,  566 => 88,  563 => 87,  560 => 86,  557 => 85,  555 => 84,  552 => 83,  550 => 82,  540 => 81,  530 => 72,  514 => 77,  511 => 76,  508 => 75,  505 => 74,  502 => 73,  500 => 72,  490 => 71,  480 => 58,  460 => 67,  457 => 66,  454 => 65,  451 => 64,  448 => 63,  445 => 62,  442 => 61,  439 => 60,  436 => 59,  434 => 58,  424 => 57,  414 => 49,  394 => 52,  391 => 51,  388 => 50,  386 => 49,  376 => 48,  366 => 27,  359 => 42,  356 => 41,  353 => 40,  347 => 38,  345 => 37,  340 => 36,  337 => 35,  334 => 34,  324 => 32,  322 => 31,  314 => 30,  308 => 29,  305 => 28,  303 => 27,  293 => 26,  283 => 13,  279 => 21,  270 => 18,  266 => 17,  263 => 16,  259 => 15,  254 => 14,  252 => 13,  242 => 12,  232 => 3,  223 => 5,  214 => 4,  212 => 3,  202 => 2,  192 => 308,  188 => 306,  186 => 297,  182 => 295,  180 => 282,  176 => 280,  174 => 267,  170 => 265,  168 => 259,  164 => 256,  162 => 147,  156 => 142,  154 => 121,  148 => 116,  146 => 99,  142 => 97,  140 => 81,  137 => 80,  135 => 71,  132 => 70,  130 => 57,  126 => 55,  124 => 48,  120 => 46,  118 => 26,  114 => 24,  112 => 12,  108 => 10,  106 => 2,  56 => 284,  43 => 269,  30 => 260,);
    }

    public function getSourceContext()
    {
        return new Source("{# Widgets #}
{% block color_widget %}
{% apply spaceless %}
    <div class=\"js-colorpicker input-group\" data-reinit-js='[\"colorpicker\"]' data-format=\"hex\"{%- if attr['data-colors'] is defined %} data-color-selectors=\"{{ attr['data-colors']}}\"{% endif %}>
        <input {{ block('widget_attributes') }} class=\"form-control\" value=\"{{ value }}\"/>
        <span class=\"input-group-addon\"><i></i></span>
    </div>
{% endapply %}
{% endblock %}


{% block choice_widget_expanded %}
{% apply spaceless %}
    <div {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <div class=\"form-group\">
                {{ form_label(child) }}
                {{ form_widget(child) }}
            </div>
        {% endfor %}
    </div>
{% endapply %}
{% endblock choice_widget_expanded %}


{% block choice_widget_collapsed %}
{% apply spaceless %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}
        {%- if attr.placeholder is defined %} data-placeholder=\"{{ attr.placeholder|trans({}, translation_domain) }}\"{% endif %}>
        {% if placeholder is not none %}
            <option value=\"\" {% if required and value is empty %}selected=\"selected\"{% endif %}>{{ placeholder|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
{% endapply %}
{% endblock choice_widget_collapsed %}


{% block form_widget_simple %}
{% apply spaceless %}
    {% set type = type|default('text') %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control' ~ (attr['maxlength'] is defined ? ' js-max-length-input' : ''))|trim }) %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\"{% endif %} {% if attr['maxlength'] is defined %}data-reinit-js='[\"charactersLeft\"]' data-target=\"#counter-for-{{ form.vars.id }}\"{% endif %}>
{% endapply %}
{% endblock form_widget_simple %}


{% block textarea_widget %}
{% apply spaceless %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control ' ~ (attr['maxlength'] is defined ? ' js-max-length-input' : ''))|trim }) %}
    {% set reInitMethods = [] %}
    {% if attr['maxlength'] is defined %}
        {% set reInitMethods = reInitMethods|merge(['\"charactersLeft\"']) %}
    {% endif %}
    {% if 'js-rich-editor' in attr.class %}
        {% set reInitMethods = reInitMethods|merge(['\"richEditor\"']) %}
    {% endif %}
    <textarea {{ block('widget_attributes') }} {% if reInitMethods|length > 0 %}data-reinit-js=\"[{{ reInitMethods|join(',') }}]\"{% endif %} rows=\"5\" {% if attr['maxlength'] is defined %} data-target=\"#counter-for-{{ form.vars.id }}\" {% endif %}>{{ value }}</textarea>
{% endapply %}
{% endblock textarea_widget %}

{% block wysiwyg_widget %}
{% apply spaceless %}
    {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' js-rich-editor rich-editor form-control')|trim }) %}
    {% if attr['maxlength'] is defined %}
        {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' js-max-length-input')|trim }) %}
    {% endif %}
    <textarea {{ block('widget_attributes') }}{% if 'js-rich-editor' in attr.class %} data-reinit-js='[\"richEditor\"]'{% endif %}{% if attr['type'] is defined %} data-editor-mode=\"{{ attr['type'] }}\"{% endif %} rows=\"10\" cols=\"600\">{{ value|raw }}</textarea>
{% endapply %}
{% endblock wysiwyg_widget %}

{% block checkbox_widget %}
{% apply spaceless %}
    <div class=\"checkbox\">
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label for=\"{{ id }}\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}>
            {{ label|trans({}, translation_domain)|raw }}{% if required %}<span class=\"form-group__required-icon\">*</span>{% endif %}
        </label>
    </div>
{% endapply %}
{% endblock checkbox_widget %}


{% block radio_widget %}
{% apply spaceless %}
    <div class=\"radio\">
        {% if required and not compound %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if label is empty %}
            {% set label = name|humanize %}
        {% endif %}

        <label for=\"{{ id }}\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}>
            {{ label|trans({}, translation_domain)|raw }}{% if required and not compound %}<span class=\"form-group__required-icon\">*</span>{% endif %}
        </label>
    </div>
{% endapply %}
{% endblock radio_widget %}




{# Labels #}
{% block form_label %}
{% apply spaceless %}
    {% if 'checkbox' not in block_prefixes and label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('')|trim}) %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if label is not same as(false) %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
                {{ label|trans({}, translation_domain) }}{% if required %} *{% endif %}
            </label>
        {% endif %}
    {% endif %}
{% endapply %}
{% endblock form_label %}




{# Rows #}
{% block form_row %}
{% apply spaceless %}
    {% set noMaxWidth = false %}
    {% if
        (attr['nested_form'] is defined and attr['nested_form'] == true)
        or 'wysiwyg' in block_prefixes
        or 'slug' in block_prefixes
        or (attr['no-max-width'] is defined and attr['no-max-width'])
    %}
        {% set noMaxWidth = true %}
    {% endif %}

    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}{% if noMaxWidth == true %} form-group--no-max-width{% endif %}\">
        {{ form_label(form) }}

        {% if attr['nested_form'] is defined and attr['nested_form'] == true %}
            {# Nested forms #}
            {% set sortable = false %}
            {% if attr['nested_sortable'] is defined and attr['nested_sortable'] == true %}
                {% set sortable = true %}
                {% set sortableField = attr['nested_sortable_field']|default('weight') %}
            {% endif %}

            <div
                id=\"{{ form.vars.id }}__nested-form\"
                class=\"js-nested-form nested-form {% if sortable %} js-sortable-container sortable-container nested-form--sortable{% endif %}\"
                data-sortable=\"{% if sortable %}true{% else %}false{% endif %}\"
                data-allow-new=\"{{ form.vars.allow_add|default('0') }}\"
                data-allow-delete=\"{{ form.vars.allow_delete|default('0') }}\"
                data-min-items=\"{{ attr['nested_form_min']|default('0') }}\"
                data-max-items=\"{{ attr['nested_form_max']|default('false') }}\"
                {% if sortable %} data-sortkey=\"{{ form.vars.id }}___name___{{ sortableField }}\"{% endif %}
                {% if form.vars.allow_add %}
                    data-prototype=\"{{ form_widget(form.vars.prototype)|e }}\"
                    data-prototype-name=\"{{ form.vars.name }}\"
                    data-add-button-label=\"{{ attr['nested_add_button_label']|default('form.add')|trans }}\"
                {% endif %}
                data-initialized=\"false\" data-initializing=\"false\" data-reinit-js='[\"nestedForm\"]'>

                {# Items #}
                {% for obj in form %}
                    <div id=\"{{ form.vars.id }}__{% if obj.vars.value.id is defined %}{{ obj.vars.value.id }}{% else %}{{ obj.vars.value }}{% endif %}-pp-container\" class=\"js-nested-form__item nested-form__item{% if sortable %} js-sortable-item sortable-item{% endif %}\"
                            {% if attr['nested_deletable'] is not defined or attr['nested_deletable'] != false %}
                                data-delete-key=\"{{ form.vars.id|replace({'form_': 'delete_'}) }}_{% if obj.vars.value.id is defined %}{{ obj.vars.value.id }}{% else %}{{ obj.vars.value }}{% endif %}\"
                            {% endif %}
                            {% if sortable %}data-sortkey=\"{{ obj.children[sortableField].vars.id }}\"{% endif %}>
                        {# Header #}
                        <header class=\"{% if sortable %}js-sortable-item__handle{% endif %} nested-form__item__header\">
                            {% if sortable %}
                                <i class=\"fa fa-arrows nested-form__item__header__move-icon\"></i>
                            {% endif %}

                            <div class=\"js-nested-form__item__header__actions nested-form__item__header__actions\"></div>
                            {% if sortable %}
                            <button type=\"button\" class=\"js-move-up-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--up\" title=\"{{ 'pagepart.buttons.move_up'|trans }}\" data-target-id=\"{{ form.vars.id }}__{% if obj.vars.value.id is defined %}{{ obj.vars.value.id }}{% else %}{{ obj.vars.value }}{% endif %}\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </button>
                            <button type=\"button\" class=\"js-move-down-pp-btn btn--raise-on-hover pp__actions__action pp__actions__action--down\" title=\"{{ 'pagepart.buttons.move_down'|trans }}\" data-target-id=\"{{ form.vars.id }}__{% if obj.vars.value.id is defined %}{{ obj.vars.value.id }}{% else %}{{ obj.vars.value }}{% endif %}\">
                                <i class=\"fa fa-chevron-down\"></i>
                            </button>
                            {% endif %}
                        </header>

                        {# View #}
                        <div class=\"js-nested-form__item__view nested-form__item__view\">
                            {% if obj.vars.compound %}
                                {{ form_widget(obj) }}
                            {% else %}
                                {% for child in obj.children %}
                                    {{ form_row(child) }}
                                {% else %}
                                    {{ form_widget(obj) }}
                                {% endfor %}
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            {% set widget %}
                {{ form_widget(form) }}
            {% endset %}
            {% if attr['maxlength'] is defined %}
                {% set widget %}
                    <div class=\"input-group-counter\">
                        {{ widget }}
                        <span id=\"counter-for-{{ form.vars.id }}\" class=\"js-max-length-counter form-control__character-counter\"></span>
                    </div>
                {% endset %}
            {% endif %}
            {% if attr['info_text'] is defined %}
                {% set widget %}
                    <div class=\"input-group\" data-reinit-js='[\"tooltip\"]'>
                        {{ widget }}
                        <span class=\"input-group-addon\">
                            <strong class=\"input-group-addon--tooltip\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"{{ attr['info_text']|trans }}\" id=\"{{ id }}_info_text\">?</strong>
                        </span>
                    </div>
                {% endset %}
            {% endif %}
            {{ widget }}
        {% endif %}

        {% if attr['title'] is defined %}{% endif %}

        {{ form_errors(form) }}
    </div>
{% endapply %}
{% endblock form_row %}


{# Misc #}
{% block datetime_widget %}
    {% use 'form_div_layout.html.twig' with datetime_widget as base_datetime_widget %}
    <div class=\"form-group date-time-group\">
        {{ block('base_datetime_widget') }}
    </div>
{% endblock %}


{% block date_widget %}
    <div class=\"date-widget\">
        {% use 'form_div_layout.html.twig' with date_widget as base_date_widget %}
        {% if widget is defined and widget == 'single_text' %}
            <div class=\"js-datepicker\" data-format=\"DD/MM/YYYY\" data-reinit-js='[\"datepicker\"]'>
                {{ block('base_date_widget') }}
            </div>
        {% else %}
            {{ block('base_date_widget') }}
        {% endif %}
    </div>

{% endblock date_widget %}


{% block time_widget %}
    <div class=\"time-widget\">
        {% use 'form_div_layout.html.twig' with time_widget as base_time_widget %}
        {% set type = 'text' %}
        {% if widget is defined and widget == 'single_text' %}
            <div class=\"js-datepicker\" data-format=\"HH:mm\" data-reinit-js='[\"datepicker\"]'>
                {{ block('base_time_widget') }}
            </div>
        {% else %}
            {{ block('base_time_widget') }}
        {% endif %}
    </div>
{% endblock time_widget %}


{% block form_errors %}
{% apply spaceless %}
    {% if errors|length > 0 %}
        {% for error in errors %}
            <span class=\"help-block text-danger\">{{ error.message }}</span>
        {% endfor %}
    {% endif %}
{% endapply %}
{% endblock form_errors %}


{% block range_widget %}
{% apply spaceless %}
    <div class=\"range\">
        {{ form_widget(form, {'type' : 'range', 'attr' : attr }) }}
        <span class=\"range--value\"></span>
    </div>
{% endapply %}
{% endblock %}
", "@KunstmaanAdmin/Form/fields.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Form/fields.html.twig");
    }
}
