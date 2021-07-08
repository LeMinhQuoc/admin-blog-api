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

/* @KunstmaanSeo/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig */
class __TwigTemplate_70f11c7d140d28c8e1cbab8b1aec7f56651500bbb9836ca65a991c222740ca3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig"));

        // line 1
        echo "<script>
    var _gaq = _gaq || [];

    _gaq.push(['_trackPageview']);

    _gaq.push(['_addTrans',
        '";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["transaction_id"]) || array_key_exists("transaction_id", $context) ? $context["transaction_id"] : (function () { throw new RuntimeError('Variable "transaction_id" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["store_name"]) || array_key_exists("store_name", $context) ? $context["store_name"] : (function () { throw new RuntimeError('Variable "store_name" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["taxes_total"]) || array_key_exists("taxes_total", $context) ? $context["taxes_total"] : (function () { throw new RuntimeError('Variable "taxes_total" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["shipping_total"]) || array_key_exists("shipping_total", $context) ? $context["shipping_total"] : (function () { throw new RuntimeError('Variable "shipping_total" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["state_or_province"]) || array_key_exists("state_or_province", $context) ? $context["state_or_province"] : (function () { throw new RuntimeError('Variable "state_or_province" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "'
    ]);


    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_items"]) || array_key_exists("order_items", $context) ? $context["order_items"] : (function () { throw new RuntimeError('Variable "order_items" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "    _gaq.push(['_addItem',
        '";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["transaction_id"]) || array_key_exists("transaction_id", $context) ? $context["transaction_id"] : (function () { throw new RuntimeError('Variable "transaction_id" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "',
        '";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sku", [], "any", false, false, false, 21), "html", null, true);
            echo "',
        '";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "',
        '";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category_or_variation", [], "any", false, false, false, 23), "html", null, true);
            echo "',
        '";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "unit_price", [], "any", false, false, false, 24), "html", null, true);
            echo "',
        '";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 25), "html", null, true);
            echo "'
    ]);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    _gaq.push(['_trackTrans']);
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanSeo/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  90 => 19,  86 => 18,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var _gaq = _gaq || [];

    _gaq.push(['_trackPageview']);

    _gaq.push(['_addTrans',
        '{{ transaction_id }}',
        '{{ store_name }}',
        '{{ total }}',
        '{{ taxes_total }}',
        '{{ shipping_total }}',
        '{{ city }}',
        '{{ state_or_province }}',
        '{{ country }}'
    ]);


    {% for item in order_items %}
    _gaq.push(['_addItem',
        '{{ transaction_id }}',
        '{{ item.sku }}',
        '{{ item.name }}',
        '{{ item.category_or_variation }}',
        '{{ item.unit_price }}',
        '{{ item.quantity }}'
    ]);
    {% endfor %}

    _gaq.push(['_trackTrans']);
</script>
", "@KunstmaanSeo/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig", "/Users/macbook/Documents/quoc/blog-admin/vendor/kunstmaan/seo-bundle/Resources/views/GoogleAnalyticsTwigExtension/ecommerce_tracking.html.twig");
    }
}
