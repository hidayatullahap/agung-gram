<?php

/* E:\Agung\dev\xampp\htdocs\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/upload.htm */
class __TwigTemplate_cde7119597578c6c08085c5ee9258c4bf8de4b23f2816a3cfb0d849ebac9a816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Post an image</h2>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("uploadform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/upload.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Post an image</h2>
{% component 'uploadform' %}", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/upload.htm", "");
    }
}
