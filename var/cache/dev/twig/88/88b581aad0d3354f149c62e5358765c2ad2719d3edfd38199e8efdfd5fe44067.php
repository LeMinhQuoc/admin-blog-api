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

/* @KunstmaanAdmin/Default/app_header.html.twig */
class __TwigTemplate_6746846ad3fb4fec2cb3a761ce96fe92ae4dc30a5a52881c1b957d78ef2bdd14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/app_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/app_header.html.twig"));

        // line 1
        echo "<header class=\"app__header\" role=\"banner\">

    <!-- App Header -->
    <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top js-app-top-nav\">
        <div class=\"container-fluid\">

            <!-- Header -->
            <div class=\"navbar-header\">

                <!--Header - Toggle -->
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-nav-bar\">
                    <span class=\"sr-only\">Toggle</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!-- Header - Brand -->
                <a class=\"navbar-brand app__header__brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("KunstmaanAdminBundle_homepage");
        echo "\">
                    ";
        // line 20
        if (array_key_exists("admin_logo", $context)) {
            // line 21
            echo "                    <img class=\"app__header__brand__img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["admin_logo"]) || array_key_exists("admin_logo", $context) ? $context["admin_logo"] : (function () { throw new RuntimeError('Variable "admin_logo" does not exist.', 21, $this->source); })())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 21, $this->source); })())), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["websitetitle"]) || array_key_exists("websitetitle", $context) ? $context["websitetitle"] : (function () { throw new RuntimeError('Variable "websitetitle" does not exist.', 23, $this->source); })())), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </a>
            </div>

            <!-- Navigation -->
            <div class=\"collapse navbar-collapse app__nav__container\" id=\"main-nav-bar\">

                <!-- Navigation - Left -->
                <ul class=\"nav navbar-nav\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["adminmenu"]) || array_key_exists("adminmenu", $context) ? $context["adminmenu"] : (function () { throw new RuntimeError('Variable "adminmenu" does not exist.', 33, $this->source); })()), "topchildren", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 34
            echo "
                    ";
            // line 35
            $context["topchildren"] = twig_get_attribute($this->env, $this->source, $context["menuitem"], "topchildren", [], "any", false, false, false, 35);
            // line 36
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["topchildren"]) || array_key_exists("topchildren", $context) ? $context["topchildren"] : (function () { throw new RuntimeError('Variable "topchildren" does not exist.', 36, $this->source); })())) > 0)) {
                // line 37
                echo "                        <!-- Navigation Item - with sub-items -->
                        <li class=\"dropdown";
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["menuitem"], "active", [], "any", false, false, false, 38)) {
                    echo " active";
                }
                echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["menuitem"], "label", [], "any", false, false, false, 40)), "html", null, true);
                echo "
                                <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["topchildren"]) || array_key_exists("topchildren", $context) ? $context["topchildren"] : (function () { throw new RuntimeError('Variable "topchildren" does not exist.', 44, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["topchild"]) {
                    // line 45
                    echo "                                ";
                    $context["nestedtopchildren"] = twig_get_attribute($this->env, $this->source, $context["topchild"], "topchildren", [], "any", false, false, false, 45);
                    // line 46
                    echo "                                ";
                    if ((twig_length_filter($this->env, (isset($context["nestedtopchildren"]) || array_key_exists("nestedtopchildren", $context) ? $context["nestedtopchildren"] : (function () { throw new RuntimeError('Variable "nestedtopchildren" does not exist.', 46, $this->source); })())) > 0)) {
                        // line 47
                        echo "                                    <li class=\"dropdown-menu__item--has-submenu";
                        if (twig_get_attribute($this->env, $this->source, $context["topchild"], "active", [], "any", false, false, false, 47)) {
                            echo " active";
                        }
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 47)) {
                            echo " first";
                        }
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 47)) {
                            echo " last";
                        }
                        echo "\">
                                        <a href=\"#\" class=\"dropdown-toggle dropdown-toggle dropdown-toggle--submenu\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                            ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["topchild"], "label", [], "any", false, false, false, 49)), "html", null, true);
                        echo "
                                            <i class=\"fa fa-caret-right\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu--submenu\">
                                            ";
                        // line 53
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["nestedtopchildren"]) || array_key_exists("nestedtopchildren", $context) ? $context["nestedtopchildren"] : (function () { throw new RuntimeError('Variable "nestedtopchildren" does not exist.', 53, $this->source); })()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["nestedtopchild"]) {
                            // line 54
                            echo "                                            <li class=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["nestedtopchild"], "active", [], "any", false, false, false, 54)) {
                                echo "active";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                                echo " first";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54)) {
                                echo " last";
                            }
                            echo "\">
                                                <a href=\"";
                            // line 55
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["nestedtopchild"], "route", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, $context["nestedtopchild"], "routeparams", [], "any", false, false, false, 55)), "html", null, true);
                            echo "\">
                                                    ";
                            // line 56
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["nestedtopchild"], "label", [], "any", false, false, false, 56)), "html", null, true);
                            echo "
                                                </a>
                                            </li>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nestedtopchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                                        </ul>
                                    </li>
                                ";
                    } else {
                        // line 63
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["topchild"], "route", [], "any", false, false, false, 63)) {
                            // line 64
                            echo "                                        <li class=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["topchild"], "active", [], "any", false, false, false, 64)) {
                                echo "active";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 64)) {
                                echo " first";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 64)) {
                                echo " last";
                            }
                            echo "\">
                                            <a href=\"";
                            // line 65
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["topchild"], "route", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, $context["topchild"], "routeparams", [], "any", false, false, false, 65)), "html", null, true);
                            echo "\">
                                                ";
                            // line 66
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["topchild"], "label", [], "any", false, false, false, 66)), "html", null, true);
                            echo "
                                            </a>
                                        </li>
                                    ";
                        }
                        // line 70
                        echo "                                ";
                    }
                    // line 71
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topchild'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 75
                echo "                        <!-- Navigation Item - without sub-items -->
                        <li class=\"";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["menuitem"], "active", [], "any", false, false, false, 76)) {
                    echo " active";
                }
                echo "\">
                            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menuitem"], "route", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, $context["menuitem"], "routeparams", [], "any", false, false, false, 77)), "html", null, true);
                echo "\">
                                ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["menuitem"], "label", [], "any", false, false, false, 78)), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 82
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </ul>

                <!-- Navigation - Right -->
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 87
        $context["actions"] = $this->extensions['Kunstmaan\AdminBundle\Twig\MenuTwigExtension']->getAdminPanelActions();
        // line 88
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 88, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 89
            echo "                        ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 89), "@KunstmaanAdmin/Default/app_header.html.twig", 89)->display(twig_array_merge($context, ["action" => $context["action"]]));
            // line 90
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </ul>
            </div>
        </div>
    </nav>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/app_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 91,  327 => 90,  324 => 89,  306 => 88,  304 => 87,  298 => 83,  292 => 82,  285 => 78,  281 => 77,  275 => 76,  272 => 75,  267 => 72,  253 => 71,  250 => 70,  243 => 66,  239 => 65,  226 => 64,  223 => 63,  218 => 60,  200 => 56,  196 => 55,  183 => 54,  166 => 53,  159 => 49,  145 => 47,  142 => 46,  139 => 45,  122 => 44,  115 => 40,  108 => 38,  105 => 37,  102 => 36,  100 => 35,  97 => 34,  93 => 33,  83 => 25,  77 => 23,  69 => 21,  67 => 20,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"app__header\" role=\"banner\">

    <!-- App Header -->
    <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top js-app-top-nav\">
        <div class=\"container-fluid\">

            <!-- Header -->
            <div class=\"navbar-header\">

                <!--Header - Toggle -->
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-nav-bar\">
                    <span class=\"sr-only\">Toggle</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!-- Header - Brand -->
                <a class=\"navbar-brand app__header__brand\" href=\"{{ path('KunstmaanAdminBundle_homepage') }}\">
                    {% if admin_logo is defined %}
                    <img class=\"app__header__brand__img\" src=\"{{ asset(admin_logo) }}\" alt=\"{{ websitetitle | trans }}\">
                    {% else %}
                    {{ websitetitle | trans }}
                    {% endif %}
                </a>
            </div>

            <!-- Navigation -->
            <div class=\"collapse navbar-collapse app__nav__container\" id=\"main-nav-bar\">

                <!-- Navigation - Left -->
                <ul class=\"nav navbar-nav\">
                {% for menuitem in adminmenu.topchildren %}

                    {% set topchildren = menuitem.topchildren %}
                    {% if topchildren | length > 0 %}
                        <!-- Navigation Item - with sub-items -->
                        <li class=\"dropdown{% if menuitem.active %} active{% endif %}\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                {{ menuitem.label | trans }}
                                <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            {% for topchild in topchildren %}
                                {% set nestedtopchildren = topchild.topchildren %}
                                {% if nestedtopchildren | length > 0 %}
                                    <li class=\"dropdown-menu__item--has-submenu{% if topchild.active %} active{% endif %}{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}\">
                                        <a href=\"#\" class=\"dropdown-toggle dropdown-toggle dropdown-toggle--submenu\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                            {{ topchild.label | trans }}
                                            <i class=\"fa fa-caret-right\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu--submenu\">
                                            {% for nestedtopchild in nestedtopchildren %}
                                            <li class=\"{% if nestedtopchild.active %}active{% endif %}{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}\">
                                                <a href=\"{{ path(nestedtopchild.route, nestedtopchild.routeparams) }}\">
                                                    {{ nestedtopchild.label | trans }}
                                                </a>
                                            </li>
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% else %}
                                    {% if topchild.route %}
                                        <li class=\"{% if topchild.active %}active{% endif %}{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}\">
                                            <a href=\"{{ path(topchild.route, topchild.routeparams) }}\">
                                                {{ topchild.label | trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                            </ul>
                        </li>
                    {% else %}
                        <!-- Navigation Item - without sub-items -->
                        <li class=\"{% if menuitem.active %} active{% endif %}\">
                            <a href=\"{{ path(menuitem.route, menuitem.routeparams) }}\">
                                {{ menuitem.label | trans }}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}
                </ul>

                <!-- Navigation - Right -->
                <ul class=\"nav navbar-nav navbar-right\">
                    {% set actions = get_admin_panel_actions() %}
                    {% for action in actions %}
                        {% include action.template with {'action': action} %}
                    {% endfor %}
                </ul>
            </div>
        </div>
    </nav>
</header>
", "@KunstmaanAdmin/Default/app_header.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/admin-bundle/Resources/views/Default/app_header.html.twig");
    }
}
