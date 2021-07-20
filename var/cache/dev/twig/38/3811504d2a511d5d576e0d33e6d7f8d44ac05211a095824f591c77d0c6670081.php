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

/* @KunstmaanAdmin/Default/_js_footer.html.twig */
class __TwigTemplate_af41a13322c49ca290f20512a6ef0d5caefaf1252c4145db4cf14211eef58d92 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extra_async_javascripts' => [$this, 'block_extra_async_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_js_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_js_footer.html.twig"));

        // line 1
        $this->loadTemplate("@KunstmaanAdmin/Default/_ckeditor_configs.html.twig", "@KunstmaanAdmin/Default/_js_footer.html.twig", 1)->display($context);
        // line 2
        echo "
<script>
    CKEDITOR_BASEPATH = '/bundles/kunstmaanadmin/default-theme/ckeditor/';
    MORE_BUTTON_LABEL = '";
        // line 5
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kuma_js.auto_collapse.more_button_label"), "js"), "html", null, true);
        echo "';
</script>

";
        // line 9
        echo "<script>
    ";
        // line 11
        echo "    var scripts = [
        '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/js/admin-bundle.min.js"), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/js/admin-bundle.next.js"), "html", null, true);
        echo "',";
        // line 15
        $this->displayBlock('extra_async_javascripts', $context, $blocks);
        // line 17
        $context["jsPath"] = "frontend/js/admin-bundle-extra.js";
        // line 18
        if ($this->extensions['Kunstmaan\NodeBundle\Twig\NodeTwigExtension']->fileExists((isset($context["jsPath"]) || array_key_exists("jsPath", $context) ? $context["jsPath"] : (function () { throw new RuntimeError('Variable "jsPath" does not exist.', 18, $this->source); })()))) {
            echo "'";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/" . (isset($context["jsPath"]) || array_key_exists("jsPath", $context) ? $context["jsPath"] : (function () { throw new RuntimeError('Variable "jsPath" does not exist.', 18, $this->source); })()))), "html", null, true);
            echo "'";
        }
        // line 19
        echo "    ];

    if (!('fetch' in window &&
        'Promise' in window &&
        'assign' in Object &&
        'keys' in Object
    )) {
        scripts.unshift('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/kunstmaanadmin/js/admin-bundle-polyfills.js"), "html", null, true);
        echo "');
    }

    scripts.forEach(function(src) {
        var scriptEl = document.createElement('script');
        scriptEl.src = src;
        scriptEl.async = false;
        document.head.appendChild(scriptEl);
    });
</script>

";
        // line 37
        $this->loadTemplate("@KunstmaanAdmin/Default/_js_footer_extra.html.twig", "@KunstmaanAdmin/Default/_js_footer.html.twig", 37)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_extra_async_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_async_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/_js_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 15,  103 => 37,  89 => 26,  80 => 19,  74 => 18,  72 => 17,  70 => 15,  67 => 13,  63 => 12,  60 => 11,  57 => 9,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@KunstmaanAdmin/Default/_ckeditor_configs.html.twig\" %}

<script>
    CKEDITOR_BASEPATH = '/bundles/kunstmaanadmin/default-theme/ckeditor/';
    MORE_BUTTON_LABEL = '{{ 'kuma_js.auto_collapse.more_button_label' | trans | e('js') }}';
</script>

{# Dynamically load the scripts, and only add the Polyfills when they are necessary #}
<script>
    {# scripts without polyfills #}
    var scripts = [
        '{{ asset('bundles/kunstmaanadmin/js/admin-bundle.min.js') }}',
        '{{ asset('bundles/kunstmaanadmin/js/admin-bundle.next.js') }}',

        {%- block extra_async_javascripts %}{% endblock -%}

        {%- set jsPath = 'frontend/js/admin-bundle-extra.js' -%}
        {% if file_exists(jsPath) %}'{{ asset('/' ~ jsPath) }}'{% endif %}
    ];

    if (!('fetch' in window &&
        'Promise' in window &&
        'assign' in Object &&
        'keys' in Object
    )) {
        scripts.unshift('{{ asset('bundles/kunstmaanadmin/js/admin-bundle-polyfills.js') }}');
    }

    scripts.forEach(function(src) {
        var scriptEl = document.createElement('script');
        scriptEl.src = src;
        scriptEl.async = false;
        document.head.appendChild(scriptEl);
    });
</script>

{% include \"@KunstmaanAdmin/Default/_js_footer_extra.html.twig\" %}
", "@KunstmaanAdmin/Default/_js_footer.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/_js_footer.html.twig");
    }
}
