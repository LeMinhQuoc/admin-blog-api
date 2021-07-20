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

/* @KunstmaanAdmin/Toolbar/toolbar.css.twig */
class __TwigTemplate_75fae0a8677cf9363c06d54350fa125f09a661944a96a453995fcf871f124786 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Toolbar/toolbar.css.twig"));

        // line 2
        $context["colors"] = ["success" => "#4F805D", "warning" => "#A46A1F", "error" => "#B0413E"];
        // line 3
        echo "
.sf-toolbarreset {
    z-index: 99998 !important;
}
#kunstmaan-toolbar * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    vertical-align: baseline;
}

#kunstmaan-toolbar {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

#kunstmaan-toolbar abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}

#kunstmaan-toolbar svg,
#kunstmaan-toolbar img {
    height: 20px;
    display: inline-block;
}

#kunstmaan-toolbar .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
}

#kunstmaan-toolbar .hide-button svg {
    max-height: 18px;
    margin-top: 10px;
}

.kuma-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
}

.kuma-toolbar-block > a,
.kuma-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
}

.kuma-toolbar-block span {
    display: inline-block;
}

.kuma-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}

.kuma-toolbar-block .sf-toolbar-label,
.kuma-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.kuma-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}

.kuma-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}

.kuma-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}

.kuma-toolbar-block .sf-toolbar-info-piece-additional,
.kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}

.kuma-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}

.kuma-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0px;
}

.kuma-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.kuma-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.kuma-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}

.kuma-toolbar-block .sf-toolbar-info-piece span {

}

.kuma-toolbar-block .sf-toolbar-info-piece span {
    color: #F5F5F5;
    font-size: 12px;
}

.kuma-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.kuma-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.kuma-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.kuma-toolbar-block .sf-toolbar-status-green {
    background-color: ";
        // line 193
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 193, $this->source); })()), "success", [], "any", false, false, false, 193);
        echo ";
}

.kuma-toolbar-block .sf-toolbar-status-red {
    background-color: ";
        // line 197
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 197, $this->source); })()), "error", [], "any", false, false, false, 197);
        echo ";
}

.kuma-toolbar-block .sf-toolbar-status-yellow {
    background-color: ";
        // line 201
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 201, $this->source); })()), "warning", [], "any", false, false, false, 201);
        echo ";
}

.kuma-toolbar-block.sf-toolbar-status-green {
    background-color: ";
        // line 205
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 205, $this->source); })()), "success", [], "any", false, false, false, 205);
        echo ";
    color: #FFF;
}

.kuma-toolbar-block.sf-toolbar-status-red {
    background-color: ";
        // line 210
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 210, $this->source); })()), "error", [], "any", false, false, false, 210);
        echo ";
    color: #FFF;
}

.kuma-toolbar-block.sf-toolbar-status-yellow {
    background-color: ";
        // line 215
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 215, $this->source); })()), "warning", [], "any", false, false, false, 215);
        echo ";
    color: #FFF;
}

.kuma-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}

.kuma-toolbar-block-request .sf-toolbar-info-piece a {
    text-decoration: none;
}

.kuma-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}

.sf-toolbar-status-green svg path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-yellow svg path {
    fill: #FFF;
}

.kuma-toolbar-block-config svg path {
    fill: #FFF;
}

.kuma-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
}

.kuma-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.kuma-toolbar-block .sf-toolbar-icon img,
.kuma-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
}

.kuma-toolbar-block .sf-toolbar-icon img + span,
.kuma-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}

.kuma-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.kuma-toolbar-block:hover {
    position: relative;
}

.kuma-toolbar-block:hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}

.kuma-toolbar-block:hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}

.kuma-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
    width: 200px;
}

.kuma-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}

.kuma-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}

.kuma-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Override the setting when the toolbar is on the top */
";
        // line 321
        if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 321, $this->source); })()) == "top")) {
            // line 322
            echo ".sf-minitoolbar {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 0;
    bottom: auto;
    right: 0;
    top: 0;
}

#kunstmaan-toolbar {
    bottom: auto;
    box-shadow: 0 1px 0px rgba(0, 0, 0, 0.2);
    top: 0;
}

.kuma-toolbar-block .sf-toolbar-info {
    bottom: auto;
    top: 36px;
}

";
        }
        // line 342
        echo "
";
        // line 343
        if ( !(isset($context["floatable"]) || array_key_exists("floatable", $context) ? $context["floatable"] : (function () { throw new RuntimeError('Variable "floatable" does not exist.', 343, $this->source); })())) {
            // line 344
            echo "#kunstmaan-toolbar {
    position: static;
}

";
        }
        // line 349
        echo "
/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}

.kuma-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .kuma-toolbar-block .sf-toolbar-icon img,
    .kuma-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon svg,
    .kuma-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon svg + span,
    .kuma-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .kuma-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }

    .kuma-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }

    .kuma-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }

    .kuma-toolbar-block-request .sf-toolbar-status + .sf-toolbar-label {
        margin-left: 4px;
    }

    .kuma-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .kuma-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .kuma-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .kuma-toolbar-block .sf-toolbar-info-piece-additional,
    .kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline-block;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .kuma-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Toolbar/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 349,  412 => 344,  410 => 343,  407 => 342,  385 => 322,  383 => 321,  274 => 215,  266 => 210,  258 => 205,  251 => 201,  244 => 197,  237 => 193,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# when updating any of these colors, do the same in profiler.css.twig #}
{% set colors = { 'success': '#4F805D', 'warning': '#A46A1F', 'error': '#B0413E' } %}

.sf-toolbarreset {
    z-index: 99998 !important;
}
#kunstmaan-toolbar * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    vertical-align: baseline;
}

#kunstmaan-toolbar {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

#kunstmaan-toolbar abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}

#kunstmaan-toolbar svg,
#kunstmaan-toolbar img {
    height: 20px;
    display: inline-block;
}

#kunstmaan-toolbar .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
}

#kunstmaan-toolbar .hide-button svg {
    max-height: 18px;
    margin-top: 10px;
}

.kuma-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
}

.kuma-toolbar-block > a,
.kuma-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
}

.kuma-toolbar-block span {
    display: inline-block;
}

.kuma-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}

.kuma-toolbar-block .sf-toolbar-label,
.kuma-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.kuma-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}

.kuma-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}

.kuma-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}

.kuma-toolbar-block .sf-toolbar-info-piece-additional,
.kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}

.kuma-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}

.kuma-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0px;
}

.kuma-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.kuma-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.kuma-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.kuma-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}

.kuma-toolbar-block .sf-toolbar-info-piece span {

}

.kuma-toolbar-block .sf-toolbar-info-piece span {
    color: #F5F5F5;
    font-size: 12px;
}

.kuma-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.kuma-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.kuma-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.kuma-toolbar-block .sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
}

.kuma-toolbar-block .sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
}

.kuma-toolbar-block .sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
}

.kuma-toolbar-block.sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
    color: #FFF;
}

.kuma-toolbar-block.sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
    color: #FFF;
}

.kuma-toolbar-block.sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
    color: #FFF;
}

.kuma-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}

.kuma-toolbar-block-request .sf-toolbar-info-piece a {
    text-decoration: none;
}

.kuma-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}

.sf-toolbar-status-green svg path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-yellow svg path {
    fill: #FFF;
}

.kuma-toolbar-block-config svg path {
    fill: #FFF;
}

.kuma-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
}

.kuma-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.kuma-toolbar-block .sf-toolbar-icon img,
.kuma-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
}

.kuma-toolbar-block .sf-toolbar-icon img + span,
.kuma-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}

.kuma-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.kuma-toolbar-block:hover {
    position: relative;
}

.kuma-toolbar-block:hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}

.kuma-toolbar-block:hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}

.kuma-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
    width: 200px;
}

.kuma-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}

.kuma-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}

.kuma-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Override the setting when the toolbar is on the top */
{% if position == 'top' %}
.sf-minitoolbar {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 0;
    bottom: auto;
    right: 0;
    top: 0;
}

#kunstmaan-toolbar {
    bottom: auto;
    box-shadow: 0 1px 0px rgba(0, 0, 0, 0.2);
    top: 0;
}

.kuma-toolbar-block .sf-toolbar-info {
    bottom: auto;
    top: 36px;
}

{% endif %}

{% if not floatable %}
#kunstmaan-toolbar {
    position: static;
}

{% endif %}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}

.kuma-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .kuma-toolbar-block .sf-toolbar-icon img,
    .kuma-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon svg,
    .kuma-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon svg + span,
    .kuma-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .kuma-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }

    .kuma-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }

    .kuma-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }

    .kuma-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }

    .kuma-toolbar-block-request .sf-toolbar-status + .sf-toolbar-label {
        margin-left: 4px;
    }

    .kuma-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .kuma-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .kuma-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .kuma-toolbar-block .sf-toolbar-info-piece-additional,
    .kuma-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline-block;
    }

    .kuma-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .kuma-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}
", "@KunstmaanAdmin/Toolbar/toolbar.css.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Toolbar/toolbar.css.twig");
    }
}
