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

/* @KunstmaanSeo/SeoTwigExtension/metadata.html.twig */
class __TwigTemplate_e195b04bca3418c9f06a50313f3e29ae2526cff9efa8c2dfc5cf45f286946eeb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/SeoTwigExtension/metadata.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/SeoTwigExtension/metadata.html.twig"));

        // line 1
        echo "<!-- SEO -->
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 2, $this->source); })()), "getMetaDescription", [], "method", false, false, false, 2)) {
            // line 3
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 3, $this->source); })()), "getMetaDescription", [], "method", false, false, false, 3), "html", null, true);
            echo "\">
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 5, $this->source); })()), "getMetaAuthor", [], "method", false, false, false, 5)) {
            // line 6
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 6, $this->source); })()), "getMetaAuthor", [], "method", false, false, false, 6), "html", null, true);
            echo "\">
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 8, $this->source); })()), "getMetaRobots", [], "method", false, false, false, 8)) {
            // line 9
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 9, $this->source); })()), "getMetaRobots", [], "method", false, false, false, 9), "html", null, true);
            echo "\">
";
        } else {
            // line 11
            echo "    <meta name=\"robots\" content=\"all\">
";
        }
        // line 13
        echo "
<!-- Open Graph -->
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 15, $this->source); })()), "getOgType", [], "method", false, false, false, 15)) {
            // line 16
            echo "    <meta property=\"og:type\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 16, $this->source); })()), "getOgType", [], "method", false, false, false, 16), "html", null, true);
            echo "\">
";
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 18, $this->source); })()), "ogArticleAuthor", [], "any", false, false, false, 18)) {
            // line 19
            echo "    <meta property=\"article:author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 19, $this->source); })()), "ogArticleAuthor", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
";
        }
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 21, $this->source); })()), "ogArticlePublisher", [], "any", false, false, false, 21)) {
            // line 22
            echo "    <meta property=\"article:publisher\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 22, $this->source); })()), "ogArticlePublisher", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
";
        }
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 24, $this->source); })()), "ogArticleSection", [], "any", false, false, false, 24)) {
            // line 25
            echo "    <meta property=\"article:section\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 25, $this->source); })()), "ogArticleSection", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
";
        }
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 27, $this->source); })()), "getOgTitle", [], "method", false, false, false, 27)) {
            // line 28
            echo "    <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 28, $this->source); })()), "getOgTitle", [], "method", false, false, false, 28), "html", null, true);
            echo "\">
";
        } else {
            // line 30
            echo "    <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 30, $this->source); })()), "metaTitle", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
";
        }
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 32, $this->source); })()), "getOgDescription", [], "method", false, false, false, 32)) {
            // line 33
            echo "    <meta property=\"og:description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 33, $this->source); })()), "getOgDescription", [], "method", false, false, false, 33), "html", null, true);
            echo "\">
";
        }
        // line 35
        if (preg_match("{^[a-z]{2}_[A-Z]{2}\$}", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "locale", [], "any", false, false, false, 35))) {
            // line 36
            echo "    <meta property=\"og:locale\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "locale", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
";
        }
        // line 38
        echo "<meta property=\"og:site_name\" content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "\">
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 39, $this->source); })()), "getOgUrl", [], "method", false, false, false, 39)) {
            // line 40
            echo "    <meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension']->replaceUrl(twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 40, $this->source); })()), "ogUrl", [], "any", false, false, false, 40)), "html", null, true);
            echo "\">
";
        } else {
            // line 42
            echo "    ";
            if ((isset($context["currentNode"]) || array_key_exists("currentNode", $context) ? $context["currentNode"] : (function () { throw new RuntimeError('Variable "currentNode" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["currentNode"]) || array_key_exists("currentNode", $context) ? $context["currentNode"] : (function () { throw new RuntimeError('Variable "currentNode" does not exist.', 43, $this->source); })()), "url", [], "any", false, false, false, 43), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"/>
    ";
            }
        }
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "getOgImage", [], "method", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 46, $this->source); })()), "getOgImage", [], "method", false, false, false, 46)))) {
            // line 47
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 47, $this->source); })()), "ogImage", [], "any", false, false, false, 47), "contentType", [], "any", false, false, false, 47) == "remote/video")) {
                // line 48
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 48, $this->source); })()), "ogImage", [], "any", false, false, false, 48), "metaData", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) == "youtube")) {
                    // line 49
                    echo "            ";
                    $context["videoUrl"] = ("youtube.com/embed/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 49, $this->source); })()), "ogImage", [], "any", false, false, false, 49), "metaData", [], "any", false, false, false, 49), "code", [], "any", false, false, false, 49));
                    // line 50
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 50, $this->source); })()), "ogImage", [], "any", false, false, false, 50), "metaData", [], "any", false, false, false, 50), "type", [], "any", false, false, false, 50) == "dailymotion")) {
                    // line 51
                    echo "            ";
                    $context["videoUrl"] = ("www.dailymotion.com/embed/video/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 51, $this->source); })()), "ogImage", [], "any", false, false, false, 51), "metaData", [], "any", false, false, false, 51), "code", [], "any", false, false, false, 51));
                    // line 52
                    echo "        ";
                } else {
                    // line 53
                    echo "            ";
                    $context["videoUrl"] = ("player.vimeo.com/video/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 53, $this->source); })()), "ogImage", [], "any", false, false, false, 53), "metaData", [], "any", false, false, false, 53), "code", [], "any", false, false, false, 53));
                    // line 54
                    echo "        ";
                }
                // line 55
                echo "        <meta property=\"og:video\" content=\"http://";
                echo twig_escape_filter($this->env, (isset($context["videoUrl"]) || array_key_exists("videoUrl", $context) ? $context["videoUrl"] : (function () { throw new RuntimeError('Variable "videoUrl" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "\">
        <meta property=\"og:video:secure_url\" content=\"https://";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["videoUrl"]) || array_key_exists("videoUrl", $context) ? $context["videoUrl"] : (function () { throw new RuntimeError('Variable "videoUrl" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\">
        <meta property=\"og:video:width\" content=\"640\">
        <meta property=\"og:video:height\" content=\"360\">
    ";
            } else {
                // line 60
                echo "        ";
                $context["imageUrl"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 60, $this->source); })()), "getOgImage", [], "method", false, false, false, 60), "getUrl", [], "method", false, false, false, 60), "fb_og_image");
                // line 61
                echo "        ";
                $context["dimensions"] = $this->extensions['Kunstmaan\SeoBundle\Twig\SeoTwigExtension']->getImageDimensions((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 61, $this->source); })()));
                // line 62
                echo "        <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 62, $this->source); })())), "html", null, true);
                echo "\">
        <meta property=\"og:image:type\" content=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 63, $this->source); })()), "ogImage", [], "any", false, false, false, 63), "contentType", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
        ";
                // line 64
                if ((isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 64, $this->source); })())) {
                    // line 65
                    echo "            <meta property=\"og:image:height\" content=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 65, $this->source); })()), "height", [], "any", false, false, false, 65), "html", null, true);
                    echo "\">
            <meta property=\"og:image:width\" content=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 66, $this->source); })()), "width", [], "any", false, false, false, 66), "html", null, true);
                    echo "\">
        ";
                }
                // line 68
                echo "        <link rel=\"image_src\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 68, $this->source); })())), "html", null, true);
                echo "\"/>
    ";
            }
        }
        // line 71
        echo "
";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 73, $this->source); })()), "twitterSite", [], "any", false, false, false, 73)) {
            // line 74
            echo "    <!-- Twitter Cards -->
    <meta name=\"twitter:card\" content=\"";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 75, $this->source); })()), "twitterImage", [], "any", false, false, false, 75) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 75, $this->source); })()), "twitterImage", [], "any", false, false, false, 75), "contentType", [], "any", false, false, false, 75) == "remote/video"))) {
                echo "player";
            } else {
                echo "summary";
                if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 75, $this->source); })()), "twitterImage", [], "any", false, false, false, 75)) {
                    echo "_large_image";
                }
            }
            echo "\" />
    ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 76, $this->source); })()), "twitterSite", [], "any", false, false, false, 76)) {
                // line 77
                echo "        <meta name=\"twitter:site\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 77, $this->source); })()), "twitterSite", [], "any", false, false, false, 77), "html", null, true);
                echo "\" />
    ";
            }
            // line 79
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 79, $this->source); })()), "twitterCreator", [], "any", false, false, false, 79)) {
                // line 80
                echo "        <meta name=\"twitter:creator\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 80, $this->source); })()), "twitterCreator", [], "any", false, false, false, 80), "html", null, true);
                echo "\" />
    ";
            }
            // line 82
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 82, $this->source); })()), "twitterTitle", [], "any", false, false, false, 82)) {
                // line 83
                echo "        <meta name=\"twitter:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 83, $this->source); })()), "twitterTitle", [], "any", false, false, false, 83), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 85
                echo "        <meta name=\"twitter:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 85, $this->source); })()), "metaTitle", [], "any", false, false, false, 85), "html", null, true);
                echo "\" />
    ";
            }
            // line 87
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 87, $this->source); })()), "twitterDescription", [], "any", false, false, false, 87)) {
                // line 88
                echo "        <meta name=\"twitter:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 88, $this->source); })()), "twitterDescription", [], "any", false, false, false, 88), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 90
                echo "        <meta name=\"twitter:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 90, $this->source); })()), "getMetaDescription", [], "method", false, false, false, 90), "html", null, true);
                echo "\" />
    ";
            }
            // line 92
            echo "    ";
            // line 93
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 93, $this->source); })()), "twitterImage", [], "any", false, false, false, 93)) {
                // line 94
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 94, $this->source); })()), "twitterImage", [], "any", false, false, false, 94), "contentType", [], "any", false, false, false, 94) == "remote/video")) {
                    // line 95
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 95, $this->source); })()), "twitterImage", [], "any", false, false, false, 95), "metaData", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95) == "youtube")) {
                        // line 96
                        echo "                ";
                        $context["videoUrl"] = ("https://youtube.com/embed/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 96, $this->source); })()), "twitterImage", [], "any", false, false, false, 96), "metaData", [], "any", false, false, false, 96), "code", [], "any", false, false, false, 96));
                        // line 97
                        echo "            ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 97, $this->source); })()), "twitterImage", [], "any", false, false, false, 97), "metaData", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97) == "dailymotion")) {
                        // line 98
                        echo "                ";
                        $context["videoUrl"] = ("https://www.dailymotion.com/embed/video/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 98, $this->source); })()), "twitterImage", [], "any", false, false, false, 98), "metaData", [], "any", false, false, false, 98), "code", [], "any", false, false, false, 98));
                        // line 99
                        echo "            ";
                    } else {
                        // line 100
                        echo "                ";
                        $context["videoUrl"] = ("https://player.vimeo.com/video/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 100, $this->source); })()), "twitterImage", [], "any", false, false, false, 100), "metaData", [], "any", false, false, false, 100), "code", [], "any", false, false, false, 100));
                        // line 101
                        echo "            ";
                    }
                    // line 102
                    echo "            <meta name=\"twitter:player\" content=\"";
                    echo twig_escape_filter($this->env, (isset($context["videoUrl"]) || array_key_exists("videoUrl", $context) ? $context["videoUrl"] : (function () { throw new RuntimeError('Variable "videoUrl" does not exist.', 102, $this->source); })()), "html", null, true);
                    echo "\" />
            <meta name=\"twitter:player:width\" content=\"960\">
            <meta name=\"twitter:player:height\" content=\"540\">
            <meta name=\"twitter:image:src\" content=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 105, $this->source); })()), "twitterImage", [], "any", false, false, false, 105), "metaData", [], "any", false, false, false, 105), "thumbnail_url", [], "any", false, false, false, 105))), "html", null, true);
                    echo "\" />
        ";
                } else {
                    // line 107
                    echo "            <meta name=\"twitter:image:src\" content=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 107, $this->source); })()), "twitterImage", [], "any", false, false, false, 107), "url", [], "any", false, false, false, 107), "tw_card_image")), "html", null, true);
                    echo "\" />
        ";
                }
                // line 109
                echo "    ";
            }
        }
        // line 111
        echo "
";
        // line 112
        if (twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 112, $this->source); })()), "getExtraMetadata", [], "method", false, false, false, 112)) {
            // line 113
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new RuntimeError('Variable "seo" does not exist.', 113, $this->source); })()), "getExtraMetadata", [], "method", false, false, false, 113);
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSeo/SeoTwigExtension/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 113,  355 => 112,  352 => 111,  348 => 109,  342 => 107,  337 => 105,  330 => 102,  327 => 101,  324 => 100,  321 => 99,  318 => 98,  315 => 97,  312 => 96,  309 => 95,  306 => 94,  303 => 93,  301 => 92,  295 => 90,  289 => 88,  286 => 87,  280 => 85,  274 => 83,  271 => 82,  265 => 80,  262 => 79,  256 => 77,  254 => 76,  243 => 75,  240 => 74,  238 => 73,  235 => 71,  228 => 68,  223 => 66,  218 => 65,  216 => 64,  212 => 63,  207 => 62,  204 => 61,  201 => 60,  194 => 56,  189 => 55,  186 => 54,  183 => 53,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  168 => 48,  165 => 47,  163 => 46,  156 => 43,  153 => 42,  147 => 40,  145 => 39,  140 => 38,  134 => 36,  132 => 35,  126 => 33,  124 => 32,  118 => 30,  112 => 28,  110 => 27,  104 => 25,  102 => 24,  96 => 22,  94 => 21,  88 => 19,  86 => 18,  80 => 16,  78 => 15,  74 => 13,  70 => 11,  64 => 9,  62 => 8,  56 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- SEO -->
{% if seo.getMetaDescription() %}
    <meta name=\"description\" content=\"{{ seo.getMetaDescription() }}\">
{% endif %}
{% if seo.getMetaAuthor() %}
    <meta name=\"author\" content=\"{{ seo.getMetaAuthor() }}\">
{% endif %}
{% if seo.getMetaRobots() %}
    <meta name=\"robots\" content=\"{{ seo.getMetaRobots() }}\">
{% else %}
    <meta name=\"robots\" content=\"all\">
{% endif %}

<!-- Open Graph -->
{% if seo.getOgType() %}
    <meta property=\"og:type\" content=\"{{ seo.getOgType() }}\">
{% endif %}
{% if seo.ogArticleAuthor %}
    <meta property=\"article:author\" content=\"{{ seo.ogArticleAuthor }}\">
{% endif %}
{% if seo.ogArticlePublisher %}
    <meta property=\"article:publisher\" content=\"{{ seo.ogArticlePublisher }}\">
{% endif %}
{% if seo.ogArticleSection %}
    <meta property=\"article:section\" content=\"{{ seo.ogArticleSection }}\">
{% endif %}
{% if seo.getOgTitle() %}
    <meta property=\"og:title\" content=\"{{ seo.getOgTitle() }}\">
{% else %}
    <meta property=\"og:title\" content=\"{{ seo.metaTitle }}\">
{% endif %}
{% if seo.getOgDescription() %}
    <meta property=\"og:description\" content=\"{{ seo.getOgDescription() }}\">
{% endif %}
{% if app.request.locale matches '{^[a-z]{2}_[A-Z]{2}\$}' %}
    <meta property=\"og:locale\" content=\"{{ app.request.locale }}\">
{% endif %}
<meta property=\"og:site_name\" content=\"{{ websitetitle|trans }}\">
{% if seo.getOgUrl() %}
    <meta property=\"og:url\" content=\"{{ seo.ogUrl | replace_url }}\">
{% else %}
    {% if currentNode %}
        <meta property=\"og:url\" content=\"{{ url('_slug', { 'url': currentNode.url, '_locale': app.request.locale }) }}\"/>
    {% endif %}
{% endif %}
{% if seo.getOgImage() is defined and seo.getOgImage() is not null %}
    {% if seo.ogImage.contentType == \"remote/video\" %}
        {% if seo.ogImage.metaData.type == \"youtube\" %}
            {% set videoUrl = \"youtube.com/embed/\"~seo.ogImage.metaData.code %}
        {% elseif seo.ogImage.metaData.type == \"dailymotion\" %}
            {% set videoUrl = \"www.dailymotion.com/embed/video/\"~seo.ogImage.metaData.code %}
        {% else %}
            {% set videoUrl = \"player.vimeo.com/video/\"~seo.ogImage.metaData.code %}
        {% endif %}
        <meta property=\"og:video\" content=\"http://{{ videoUrl }}\">
        <meta property=\"og:video:secure_url\" content=\"https://{{ videoUrl }}\">
        <meta property=\"og:video:width\" content=\"640\">
        <meta property=\"og:video:height\" content=\"360\">
    {% else %}
        {% set imageUrl = seo.getOgImage().getUrl() | imagine_filter('fb_og_image') %}
        {% set dimensions = get_image_dimensions(imageUrl) %}
        <meta property=\"og:image\" content=\"{{ asset(imageUrl) }}\">
        <meta property=\"og:image:type\" content=\"{{ seo.ogImage.contentType }}\">
        {% if dimensions %}
            <meta property=\"og:image:height\" content=\"{{ dimensions.height }}\">
            <meta property=\"og:image:width\" content=\"{{ dimensions.width }}\">
        {% endif %}
        <link rel=\"image_src\" href=\"{{ asset(imageUrl) }}\"/>
    {% endif %}
{% endif %}

{# Make sure twitter site is set because otherwise twitter cards are not possible #}
{% if seo.twitterSite %}
    <!-- Twitter Cards -->
    <meta name=\"twitter:card\" content=\"{% if seo.twitterImage and seo.twitterImage.contentType == \"remote/video\" %}player{% else %}summary{% if seo.twitterImage %}_large_image{% endif %}{% endif %}\" />
    {% if seo.twitterSite %}
        <meta name=\"twitter:site\" content=\"{{ seo.twitterSite }}\" />
    {% endif %}
    {% if seo.twitterCreator %}
        <meta name=\"twitter:creator\" content=\"{{ seo.twitterCreator }}\" />
    {% endif %}
    {% if seo.twitterTitle %}
        <meta name=\"twitter:title\" content=\"{{ seo.twitterTitle }}\" />
    {% else %}
        <meta name=\"twitter:title\" content=\"{{ seo.metaTitle }}\" />
    {% endif %}
    {% if seo.twitterDescription %}
        <meta name=\"twitter:description\" content=\"{{ seo.twitterDescription }}\" />
    {% else %}
        <meta name=\"twitter:description\" content=\"{{ seo.getMetaDescription() }}\" />
    {% endif %}
    {# MAKE THE CARD 'SPECIAL' #}
    {% if seo.twitterImage %}
        {% if seo.twitterImage.contentType == \"remote/video\" %}
            {% if seo.twitterImage.metaData.type == \"youtube\" %}
                {% set videoUrl = \"https://youtube.com/embed/\"~seo.twitterImage.metaData.code %}
            {% elseif seo.twitterImage.metaData.type == \"dailymotion\" %}
                {% set videoUrl = \"https://www.dailymotion.com/embed/video/\"~seo.twitterImage.metaData.code %}
            {% else %}
                {% set videoUrl = \"https://player.vimeo.com/video/\"~seo.twitterImage.metaData.code %}
            {% endif %}
            <meta name=\"twitter:player\" content=\"{{ videoUrl }}\" />
            <meta name=\"twitter:player:width\" content=\"960\">
            <meta name=\"twitter:player:height\" content=\"540\">
            <meta name=\"twitter:image:src\" content=\"{{ absolute_url(asset(seo.twitterImage.metaData.thumbnail_url)) }}\" />
        {% else %}
            <meta name=\"twitter:image:src\" content=\"{{ asset(seo.twitterImage.url | imagine_filter('tw_card_image')) }}\" />
        {% endif %}
    {% endif %}
{% endif %}

{% if seo.getExtraMetadata() %}
    {{ seo.getExtraMetadata() | raw }}
{% endif %}
", "@KunstmaanSeo/SeoTwigExtension/metadata.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/seo-bundle/Resources/views/SeoTwigExtension/metadata.html.twig");
    }
}
