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

/* @KunstmaanForm/Mailer/mail.html.twig */
class __TwigTemplate_7fc4ee9d2c3a3e2d79f9254f7d79ea1bf303785fd5d949ef6d96acfb4cd05bbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/Mailer/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanForm/Mailer/mail.html.twig"));

        // line 1
        echo "<table class=\"bordered-table zebra-striped\">
    <thead>
        <tr>
            <!--suppress HtmlUnknownAttribute -->
            <th width=\"30%\">Label</th>
            <!--suppress HtmlUnknownAttribute -->
            <th width=\"70%\">Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Date</td>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 13, $this->source); })()), "created", [], "any", false, false, false, 13)), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Lang</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 17, $this->source); })()), "lang", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>ipAddress</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 21, $this->source); })()), "ipAddress", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 23, $this->source); })()), "fields", [], "any", false, false, false, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 24
            echo "            <tr>
                <td><strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 25), "html", null, true);
            echo "</strong></td>
                <td>
                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["field"], "submissionTemplate", [], "any", true, true, false, 27)) {
                // line 28
                echo "                        ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["field"], "submissionTemplate", [], "any", false, false, false, 28), "@KunstmaanForm/Mailer/mail.html.twig", 28)->display(twig_array_merge($context, ["resource" => $context["field"], "host" => (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 28, $this->source); })())]));
                // line 29
                echo "                    ";
            } else {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanForm/Mailer/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  115 => 32,  109 => 30,  106 => 29,  103 => 28,  101 => 27,  96 => 25,  93 => 24,  76 => 23,  71 => 21,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"bordered-table zebra-striped\">
    <thead>
        <tr>
            <!--suppress HtmlUnknownAttribute -->
            <th width=\"30%\">Label</th>
            <!--suppress HtmlUnknownAttribute -->
            <th width=\"70%\">Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Date</td>
            <td>{{ submission.created|date }}</td>
        </tr>
        <tr>
            <td>Lang</td>
            <td>{{ submission.lang }}</td>
        </tr>
        <tr>
            <td>ipAddress</td>
            <td>{{ submission.ipAddress }}</td>
        </tr>
        {% for field in submission.fields %}
            <tr>
                <td><strong>{{ field.label }}</strong></td>
                <td>
                    {% if (field.submissionTemplate is defined) %}
                        {% include field.submissionTemplate with {'resource' : field, 'host' : host} %}
                    {% else %}
                        {{ field }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@KunstmaanForm/Mailer/mail.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/form-bundle/Resources/views/Mailer/mail.html.twig");
    }
}
