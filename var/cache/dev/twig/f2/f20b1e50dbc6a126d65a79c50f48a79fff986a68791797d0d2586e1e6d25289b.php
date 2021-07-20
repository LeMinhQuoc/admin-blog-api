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

/* @KunstmaanNode/NodeAdmin/Modals/_publish.html.twig */
class __TwigTemplate_941ccb4f55ec62be888b15746883b6820a4ec22b379569be13ae8a6143250ad8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig"));

        // line 1
        echo "<div id=\"pub\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Header -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.title"), "html", null, true);
        echo "
                </h3>
            </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.body"), "html", null, true);
        echo "
                    </p>

                    <div class=\"form-group\">
                        <label>
                            <input id=\"publish-later__check\" type=\"checkbox\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.later.label"), "html", null, true);
        echo "
                        </label>
                    </div>

                    <div id=\"publish-later\">
                        <!-- Date -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-default-date=\"true\">
                                <input id=\"pub_date\" type=\"text\" name=\"pub_date\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-calendar-o\"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-format=\"HH:mm\" data-default-date=\"true\" data-stepping=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["publish_later_stepping"]) || array_key_exists("publish_later_stepping", $context) ? $context["publish_later_stepping"] : (function () { throw new RuntimeError('Variable "publish_later_stepping" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" data-linked-datepicker=\"#pub_date\">
                                <input id=\"pub_tmpckr\" type=\"text\" name=\"pub_time\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-clock-o\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <div id=\"publish-later-action\">
                        <button name=\"publish_later\" type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.later.button"), "html", null, true);
        echo "
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.later.cancel"), "html", null, true);
        echo "
                        </button>
                    </div>
                    <div id=\"publish-action\">
                        <button name=\"publishing\" type=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.now.button"), "html", null, true);
        echo "</button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_node.modal.publish.now.cancel"), "html", null, true);
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
        return "@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 64,  124 => 62,  117 => 58,  111 => 55,  94 => 41,  74 => 24,  65 => 18,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"pub\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Header -->
            <div class=\"modal-header\">
                <button class=\"close\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <h3>
                    {{ 'kuma_node.modal.publish.title'|trans() }}
                </h3>
            </div>

                <!-- Body -->
                <div class=\"modal-body\">
                    <p>
                        {{ 'kuma_node.modal.publish.body'|trans() }}
                    </p>

                    <div class=\"form-group\">
                        <label>
                            <input id=\"publish-later__check\" type=\"checkbox\">
                            {{ 'kuma_node.modal.publish.later.label'|trans() }}
                        </label>
                    </div>

                    <div id=\"publish-later\">
                        <!-- Date -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-default-date=\"true\">
                                <input id=\"pub_date\" type=\"text\" name=\"pub_date\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-calendar-o\"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class=\"form-group\">
                            <div class=\"js-datepicker input-group\" data-min-date=\"today\" data-format=\"HH:mm\" data-default-date=\"true\" data-stepping=\"{{ publish_later_stepping }}\" data-linked-datepicker=\"#pub_date\">
                                <input id=\"pub_tmpckr\" type=\"text\" name=\"pub_time\" class=\"form-control\">
                                <span class=\"input-group-addon input-group-addon--has-action\">
                                    <i class=\"fa fa-clock-o\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class=\"modal-footer\">
                    <div id=\"publish-later-action\">
                        <button name=\"publish_later\" type=\"submit\" class=\"btn btn-primary btn--raise-on-hover\">
                            {{ 'kuma_node.modal.publish.later.button'|trans() }}
                        </button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.publish.later.cancel'|trans() }}
                        </button>
                    </div>
                    <div id=\"publish-action\">
                        <button name=\"publishing\" type=\"submit\" class=\"btn btn-danger btn--raise-on-hover\">{{ 'kuma_node.modal.publish.now.button'|trans() }}</button>
                        <button class=\"btn btn-default btn--raise-on-hover\" data-dismiss=\"modal\">
                            {{ 'kuma_node.modal.publish.now.cancel'|trans() }}
                        </button>
                    </div>
                </div>
        </div>
    </div>
</div>
", "@KunstmaanNode/NodeAdmin/Modals/_publish.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/node-bundle/Resources/views/NodeAdmin/Modals/_publish.html.twig");
    }
}
