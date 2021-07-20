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

/* @KunstmaanMedia/Media/Image/aviary.html.twig */
class __TwigTemplate_cfeaa9a451aec674b438fa8a7913cea923d8ba2c76b5c618c854c319c947f721 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/Image/aviary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanMedia/Media/Image/aviary.html.twig"));

        // line 1
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (("The \"" . $this->getTemplateName()) . "\" template is deprecated since kunstmaanMediaBundle 5.7 and will be removed in kunstmaanMediaBundle 6.0. The aviary service is discontinued.");
        @trigger_error($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4." (\"@KunstmaanMedia/Media/Image/aviary.html.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "
<!-- Load widget code -->
<script src=\"https://dme0ih8comzn4.cloudfront.net/js/feather.js\"></script>

<!-- Instantiate the widget -->
<script>
    var featherEditor = new Aviary.Feather({
        apiKey: '";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["handler"]) || array_key_exists("handler", $context) ? $context["handler"] : (function () { throw new RuntimeError('Variable "handler" does not exist.', 9, $this->source); })()), "aviaryApiKey", [], "any", false, false, false, 9), "html", null, true);
        echo "',
        apiVersion: 3,
        tools: 'all',
        onSave: function(imageID, newURL) {
            var img = document.getElementById(imageID);
            img.src = newURL;
            window.location = '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("KunstmaanMediaBundle_aviary", ["folderId" => twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "mediaId" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "?url='+newURL;
        }
    });

    function launchEditor(id, src) {
        featherEditor.launch({
            image: id,
            url: src
        });
        return false;
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanMedia/Media/Image/aviary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  55 => 9,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% deprecated 'The \"' ~ _self ~ '\" template is deprecated since kunstmaanMediaBundle 5.7 and will be removed in kunstmaanMediaBundle 6.0. The aviary service is discontinued.' %}

<!-- Load widget code -->
<script src=\"https://dme0ih8comzn4.cloudfront.net/js/feather.js\"></script>

<!-- Instantiate the widget -->
<script>
    var featherEditor = new Aviary.Feather({
        apiKey: '{{ handler.aviaryApiKey }}',
        apiVersion: 3,
        tools: 'all',
        onSave: function(imageID, newURL) {
            var img = document.getElementById(imageID);
            img.src = newURL;
            window.location = '{{ url('KunstmaanMediaBundle_aviary', { 'folderId' : folder.id, 'mediaId' : media.id }) }}?url='+newURL;
        }
    });

    function launchEditor(id, src) {
        featherEditor.launch({
            image: id,
            url: src
        });
        return false;
    }
</script>
", "@KunstmaanMedia/Media/Image/aviary.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/media-bundle/Resources/views/Media/Image/aviary.html.twig");
    }
}
