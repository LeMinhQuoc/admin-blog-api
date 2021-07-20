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

/* @KunstmaanAdmin/Default/_ckeditor_configs.html.twig */
class __TwigTemplate_a1b20ca3c37c61815203f670960d29678d5c9e1ac187410104a1e24bc1e77b45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_ckeditor_configs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KunstmaanAdmin/Default/_ckeditor_configs.html.twig"));

        // line 1
        echo "<script>
    // add external plugins you would like to use to this array.
    // Each array can hold max. 3 values that represent the parameters the CKEDITOR.plugins.addExternal( names, path, [fileName] ) method requires.
    // @see: http://docs.ckeditor.com/#!/api/CKEDITOR.plugins-method-addExternal
    // e.g. ['names', 'path', 'optional: filename'];
    // You can then register your plugin under extraPlugins on your ckeditor config.
    externalPlugins = [
        // Add arrays with plugins here.
    ];

    ckEditorConfigs = {
        'full': {
            skin: 'bootstrapck',
            startupFocus: false,
            height: 300,
            bodyClass: 'CKEditor',
            filebrowserWindowWidth: 970,
            filebrowserImageWindowWidth: 970,
            filebrowserImageUploadUrl: '',
            toolbar: [
                { name: 'basicstyles', items : ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'RemoveFormat'] },
                { name: 'paragraph', groups: [ 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                { name: 'lists', items : ['NumberedList', 'BulletedList'] },
                { name: 'dents', items : ['Outdent', 'Indent'] },
                { name: 'links', items : ['Link','Unlink', 'Anchor'] },
                { name: 'insert', items : ['Image', 'Table', 'SpecialChar'] },
                { name: 'clipboard', items : ['SelectAll', 'Cut', 'Copy', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'editing', items : [] },
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'document', items : ['Source'] }
            ]
        },
        'simple': {
            skin: 'bootstrapck',
            startupFocus: false,
            bodyClass: 'CKEditor',
            filebrowserWindowWidth: 970,
            filebrowserImageWindowWidth: 970,
            filebrowserImageUploadUrl: '',
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'RemoveFormat'] }
            ]
        },
        'raw-html': {
            skin: 'bootstrapck',
            startupFocus: true,
            allowedContent: true,
            removeFormatAttributes: '',
            bodyClass: 'CKEditor',
            extraPlugins: 'codemirror',
            removePlugins: 'elementspath',
            height: 300,
            toolbar: [
                { name: 'document', items: ['Source', 'autoFormat', 'CommentSelectedRange', 'UncommentSelectedRange', 'AutoComplete' ] }
            ],
        },
    };
</script>

";
        // line 61
        $this->loadTemplate("@KunstmaanAdmin/Default/_ckeditor_configs_extra.html.twig", "@KunstmaanAdmin/Default/_ckeditor_configs.html.twig", 61)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KunstmaanAdmin/Default/_ckeditor_configs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 61,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    // add external plugins you would like to use to this array.
    // Each array can hold max. 3 values that represent the parameters the CKEDITOR.plugins.addExternal( names, path, [fileName] ) method requires.
    // @see: http://docs.ckeditor.com/#!/api/CKEDITOR.plugins-method-addExternal
    // e.g. ['names', 'path', 'optional: filename'];
    // You can then register your plugin under extraPlugins on your ckeditor config.
    externalPlugins = [
        // Add arrays with plugins here.
    ];

    ckEditorConfigs = {
        'full': {
            skin: 'bootstrapck',
            startupFocus: false,
            height: 300,
            bodyClass: 'CKEditor',
            filebrowserWindowWidth: 970,
            filebrowserImageWindowWidth: 970,
            filebrowserImageUploadUrl: '',
            toolbar: [
                { name: 'basicstyles', items : ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'RemoveFormat'] },
                { name: 'paragraph', groups: [ 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                { name: 'lists', items : ['NumberedList', 'BulletedList'] },
                { name: 'dents', items : ['Outdent', 'Indent'] },
                { name: 'links', items : ['Link','Unlink', 'Anchor'] },
                { name: 'insert', items : ['Image', 'Table', 'SpecialChar'] },
                { name: 'clipboard', items : ['SelectAll', 'Cut', 'Copy', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'editing', items : [] },
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'document', items : ['Source'] }
            ]
        },
        'simple': {
            skin: 'bootstrapck',
            startupFocus: false,
            bodyClass: 'CKEditor',
            filebrowserWindowWidth: 970,
            filebrowserImageWindowWidth: 970,
            filebrowserImageUploadUrl: '',
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'RemoveFormat'] }
            ]
        },
        'raw-html': {
            skin: 'bootstrapck',
            startupFocus: true,
            allowedContent: true,
            removeFormatAttributes: '',
            bodyClass: 'CKEditor',
            extraPlugins: 'codemirror',
            removePlugins: 'elementspath',
            height: 300,
            toolbar: [
                { name: 'document', items: ['Source', 'autoFormat', 'CommentSelectedRange', 'UncommentSelectedRange', 'AutoComplete' ] }
            ],
        },
    };
</script>

{% include \"@KunstmaanAdmin/Default/_ckeditor_configs_extra.html.twig\" %}
", "@KunstmaanAdmin/Default/_ckeditor_configs.html.twig", "/Users/macbook/Documents/quoc/admin-blog-api-/vendor/kunstmaan/admin-bundle/Resources/views/Default/_ckeditor_configs.html.twig");
    }
}
