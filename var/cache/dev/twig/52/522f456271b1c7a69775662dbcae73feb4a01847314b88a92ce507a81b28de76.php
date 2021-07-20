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

/* Layout/_footer.html.twig */
class __TwigTemplate_ff4c1b56b1eff7f6cf4f1cc12bd7c6b1e4d453ab0e2095770e9864c20c0b3a4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">


    ";
        // line 5
        echo "    ";
        if (array_key_exists("nodemenu", $context)) {
            // line 6
            echo "        <section class=\"main-footer container-fluid\">
            <div class=\"row\">
            ";
            // line 9
            echo "            ";
            $context["activeSubnode"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 9, $this->source); })()), "getActiveForDepth", [0 => 1], "method", false, false, false, 9);
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["activeSubnode"]) || array_key_exists("activeSubnode", $context) ? $context["activeSubnode"] : (function () { throw new RuntimeError('Variable "activeSubnode" does not exist.', 10, $this->source); })()), "children", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 11
                echo "                ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "node", [], "any", false, false, false, 11), "isHiddenFromNav", [], "method", false, false, false, 11) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "node", [], "any", false, false, false, 11), "internalName", [], "any", false, false, false, 11) != "contact"))) {
                    // line 12
                    echo "                <div class=\"col-md-3 col-sm-3\">
                    <nav class=\"footer-nav\">

                        <h6 class=\"footer-nav__title\">
                            <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, $context["node"], "slug", [], "any", false, false, false, 16)]), "html", null, true);
                    echo "\" class=\"footer-nav__title__link\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a>
                        </h6>

                        ";
                    // line 19
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 19)) > 0)) {
                        // line 20
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "node", [], "any", false, false, false, 20), "internalName", [], "any", false, false, false, 20) == "article_overview_page")) {
                            // line 21
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 21));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["node2"]) {
                                // line 22
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22) < 4)) {
                                    // line 23
                                    echo "                                    ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node2"], "title", [], "any", false, false, false, 23)) > 40)) {
                                        // line 24
                                        echo "                                        ";
                                        $context["ltitle"] = (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["node2"], "title", [], "any", false, false, false, 24), 0, 40) . "...");
                                        // line 25
                                        echo "                                    ";
                                    } else {
                                        // line 26
                                        echo "                                        ";
                                        $context["ltitle"] = twig_get_attribute($this->env, $this->source, $context["node2"], "title", [], "any", false, false, false, 26);
                                        // line 27
                                        echo "                                    ";
                                    }
                                    // line 28
                                    echo "
                                    <a href=\"";
                                    // line 29
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, $context["node2"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
                                    echo "\" class=\"footer-nav__item";
                                    if (twig_get_attribute($this->env, $this->source, $context["node2"], "active", [], "any", false, false, false, 29)) {
                                        echo " footer-nav__item--active";
                                    }
                                    echo "\">
                                        ";
                                    // line 30
                                    echo twig_escape_filter($this->env, (isset($context["ltitle"]) || array_key_exists("ltitle", $context) ? $context["ltitle"] : (function () { throw new RuntimeError('Variable "ltitle" does not exist.', 30, $this->source); })()), "html", null, true);
                                    echo "
                                    </a>
                                    ";
                                }
                                // line 33
                                echo "                                ";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "                            ";
                        } else {
                            // line 35
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 35), 0, 3));
                            foreach ($context['_seq'] as $context["_key"] => $context["node2"]) {
                                // line 36
                                echo "                                    ";
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "node", [], "any", false, false, false, 36), "isHiddenFromNav", [], "method", false, false, false, 36)) {
                                    // line 37
                                    echo "                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, $context["node2"], "slug", [], "any", false, false, false, 37)]), "html", null, true);
                                    echo "\" class=\"footer-nav__item";
                                    if (twig_get_attribute($this->env, $this->source, $context["node2"], "active", [], "any", false, false, false, 37)) {
                                        echo " footer-nav__item--active";
                                    }
                                    echo "\">
                                        ";
                                    // line 38
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node2"], "title", [], "any", false, false, false, 38), "html", null, true);
                                    echo "
                                    </a>
                                    ";
                                }
                                // line 41
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 42
                            echo "                            ";
                        }
                        // line 43
                        echo "                        ";
                    }
                    // line 44
                    echo "                    </nav>
                </div>
                ";
                }
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
                        </div>
        </section>
    ";
        }
        // line 52
        echo "

    ";
        // line 55
        echo "    <section class=\"sub-footer\">
        <div class=\"container-fluid\">
            <div class=\"sub-footer__inner\">
                <p class=\"sub-footer__info\">
                    &copy; ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                    ";
        // line 60
        if (array_key_exists("nodemenu", $context)) {
            // line 61
            echo "                    ";
            $context["sitemap"] = twig_get_attribute($this->env, $this->source, (isset($context["nodemenu"]) || array_key_exists("nodemenu", $context) ? $context["nodemenu"] : (function () { throw new RuntimeError('Variable "nodemenu" does not exist.', 61, $this->source); })()), "getNodeByInternalName", [0 => "sitemap"], "method", false, false, false, 61);
            // line 62
            echo "                    ";
            if ((((isset($context["sitemap"]) || array_key_exists("sitemap", $context) ? $context["sitemap"] : (function () { throw new RuntimeError('Variable "sitemap" does not exist.', 62, $this->source); })()) != null) && twig_get_attribute($this->env, $this->source, (isset($context["sitemap"]) || array_key_exists("sitemap", $context) ? $context["sitemap"] : (function () { throw new RuntimeError('Variable "sitemap" does not exist.', 62, $this->source); })()), "online", [], "any", false, false, false, 62))) {
                echo "- <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_slug", ["url" => twig_get_attribute($this->env, $this->source, (isset($context["sitemap"]) || array_key_exists("sitemap", $context) ? $context["sitemap"] : (function () { throw new RuntimeError('Variable "sitemap" does not exist.', 62, $this->source); })()), "slug", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\"sub-footer__info__link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sitemap"]) || array_key_exists("sitemap", $context) ? $context["sitemap"] : (function () { throw new RuntimeError('Variable "sitemap" does not exist.', 62, $this->source); })()), "title", [], "any", false, false, false, 62), "html", null, true);
                echo "</a>";
            }
            // line 63
            echo "                    ";
        }
        // line 64
        echo "                </p>
                <p class=\"sub-footer__credentials\">
                    Created by <a href=\"http://www.kunstmaan.be\" class=\"sub-footer__credentials__link\"><img src=\"/frontend/img/general/logo-kunstmaan.svg\" alt=\"Kunstmaan\" class=\"sub-footer__credentials__img\"></a>
                </p>
            </div>
        </div>
    </section>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layout/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 64,  235 => 63,  226 => 62,  223 => 61,  221 => 60,  217 => 59,  211 => 55,  207 => 52,  201 => 48,  195 => 47,  190 => 44,  187 => 43,  184 => 42,  178 => 41,  172 => 38,  163 => 37,  160 => 36,  155 => 35,  152 => 34,  138 => 33,  132 => 30,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  85 => 21,  82 => 20,  80 => 19,  72 => 16,  66 => 12,  63 => 11,  58 => 10,  55 => 9,  51 => 6,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">


    {# Main footer #}
    {% if nodemenu is defined %}
        <section class=\"main-footer container-fluid\">
            <div class=\"row\">
            {# Footer navigation #}
            {% set activeSubnode = nodemenu.getActiveForDepth(1) %}
            {% for node in activeSubnode.children %}
                {% if not node.node.isHiddenFromNav() and node.node.internalName != 'contact' %}
                <div class=\"col-md-3 col-sm-3\">
                    <nav class=\"footer-nav\">

                        <h6 class=\"footer-nav__title\">
                            <a href=\"{{ path('_slug', { 'url': node.slug }) }}\" class=\"footer-nav__title__link\">{{ node.title }}</a>
                        </h6>

                        {% if node.children|length>0 %}
                            {% if node.node.internalName == 'article_overview_page' %}
                                {% for node2 in node.children %}
                                    {% if loop.index < 4 %}
                                    {% if node2.title|length > 40 %}
                                        {% set ltitle = node2.title[:40] ~ '...' %}
                                    {% else %}
                                        {% set ltitle = node2.title %}
                                    {% endif %}

                                    <a href=\"{{ path('_slug', { 'url': node2.slug }) }}\" class=\"footer-nav__item{% if(node2.active) %} footer-nav__item--active{% endif %}\">
                                        {{ ltitle }}
                                    </a>
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                {% for node2 in node.children | slice(0, 3) %}
                                    {% if not node.node.isHiddenFromNav() %}
                                    <a href=\"{{ path('_slug', { 'url': node2.slug }) }}\" class=\"footer-nav__item{% if(node2.active) %} footer-nav__item--active{% endif %}\">
                                        {{ node2.title }}
                                    </a>
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        {% endif %}
                    </nav>
                </div>
                {% endif %}
            {% endfor %}

                        </div>
        </section>
    {% endif %}


    {# Sub-footer #}
    <section class=\"sub-footer\">
        <div class=\"container-fluid\">
            <div class=\"sub-footer__inner\">
                <p class=\"sub-footer__info\">
                    &copy; {{ \"now\"|date(\"Y\") }}
                    {% if nodemenu is defined %}
                    {% set sitemap = nodemenu.getNodeByInternalName('sitemap') %}
                    {% if (sitemap != null and sitemap.online) %}- <a href=\"{{ path('_slug', { 'url': sitemap.slug }) }}\" class=\"sub-footer__info__link\">{{ sitemap.title }}</a>{% endif %}
                    {% endif %}
                </p>
                <p class=\"sub-footer__credentials\">
                    Created by <a href=\"http://www.kunstmaan.be\" class=\"sub-footer__credentials__link\"><img src=\"/frontend/img/general/logo-kunstmaan.svg\" alt=\"Kunstmaan\" class=\"sub-footer__credentials__img\"></a>
                </p>
            </div>
        </div>
    </section>
</footer>
", "Layout/_footer.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/templates/Layout/_footer.html.twig");
    }
}
