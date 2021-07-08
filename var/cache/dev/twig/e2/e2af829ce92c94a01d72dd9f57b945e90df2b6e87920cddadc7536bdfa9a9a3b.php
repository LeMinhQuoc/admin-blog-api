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

/* @KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig */
class __TwigTemplate_1366ae91e0e5f9709acdd9935b5d5c0f32ac6074bdbcf0419f9e235814524dd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig"));

        // line 1
        echo "<div id=\"unpub\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.title"), "html", null, true);
        echo "
                </h3>
            </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.body"), "html", null, true);
        echo "
                    </p>

                    <div class=\"form-group\">
                        <label>
                            <input id=\"unpublish-later__check\" type=\"checkbox\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.later.label"), "html", null, true);
        echo "
                        </label>
                    </div>

                    <div id=\"unpublish-later\">

                        <!-- Date -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-default-date=\"true\">
                                <input id=\"unpub_date\" type=\"text\" name=\"unpub_date\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-calendar-o\"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-format=\"HH:mm\" data-min-date=\"today\" data-default-date=\"true\" data-stepping=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["unpublish_later_stepping"]) || array_key_exists("unpublish_later_stepping", $context) ? $context["unpublish_later_stepping"] : (function () { throw new RuntimeError('Variable "unpublish_later_stepping" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" data-linked-datepicker=\"#unpub_date\">
                                <input id=\"unpub_tmpckr\" type=\"text\" name=\"unpub_time\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-clock-o\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <div id=\"unpublish-later-action\" class=\"btn_group\">
                        <button name=\"unpublish_later\" type=\"submit\" id=\"unpub_publishlater_action\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.later.button"), "html", null, true);
        echo "
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.later.cancel"), "html", null, true);
        echo "
                        </button>
                    </div>
                    <div id=\"unpublish-action\" class=\"btn_group\">
                        <button name=\"unpublishing\" type=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.now.button"), "html", null, true);
        echo "</button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.unpublish.now.cancel"), "html", null, true);
        echo "
                        </button>
                    </div>
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
        return "@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  125 => 63,  118 => 59,  112 => 56,  95 => 42,  74 => 24,  65 => 18,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"unpub\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Head -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'kuma_node.modal.unpublish.title'|trans() }}
                </h3>
            </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        {{ 'kuma_node.modal.unpublish.body'|trans() }}
                    </p>

                    <div class=\"form-group\">
                        <label>
                            <input id=\"unpublish-later__check\" type=\"checkbox\">
                            {{ 'kuma_node.modal.unpublish.later.label'|trans() }}
                        </label>
                    </div>

                    <div id=\"unpublish-later\">

                        <!-- Date -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-default-date=\"true\">
                                <input id=\"unpub_date\" type=\"text\" name=\"unpub_date\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-calendar-o\"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-format=\"HH:mm\" data-min-date=\"today\" data-default-date=\"true\" data-stepping=\"{{ unpublish_later_stepping }}\" data-linked-datepicker=\"#unpub_date\">
                                <input id=\"unpub_tmpckr\" type=\"text\" name=\"unpub_time\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-clock-o\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <div id=\"unpublish-later-action\" class=\"btn_group\">
                        <button name=\"unpublish_later\" type=\"submit\" id=\"unpub_publishlater_action\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'kuma_node.modal.unpublish.later.button'|trans() }}
                        </button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.unpublish.later.cancel'|trans() }}
                        </button>
                    </div>
                    <div id=\"unpublish-action\" class=\"btn_group\">
                        <button name=\"unpublishing\" type=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">{{ 'kuma_node.modal.unpublish.now.button'|trans() }}</button>
                        <button type=\"button\" class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.unpublish.now.cancel'|trans() }}
                        </button>
                    </div>
                </div>
        </div>
    </div>
</div>
", "@KunstmaanNode/NodeAdmin/Modals/_unpublish.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_unpublish.html.twig");
    }
}
