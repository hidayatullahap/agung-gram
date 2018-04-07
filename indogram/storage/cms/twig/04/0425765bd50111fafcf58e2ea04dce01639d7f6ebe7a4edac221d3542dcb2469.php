<?php

/* E:\Agung\dev\xampp\htdocs\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_4ec218e403b86648b1b39ea1b2627d5b40ae64fb0c489e6ccc98380c16201a7b extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <img class=\"card-img-top\" height=\"286\" width=\"286\" src=\"../storage/app/media/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "imagename", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "uploader_name", array()), "html", null, true);
            echo "\">
    <br>
    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "description", array()), "html", null, true);
            echo "
    <br><br>
    <p>Uploaded by: <strong>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "uploader_name", array()), "html", null, true);
            echo "</strong></p>
    <p>at: <i>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "created_at", array()), "html", null, true);
            echo "</i></p>
";
        } else {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  47 => 11,  43 => 10,  38 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <img class=\"card-img-top\" height=\"286\" width=\"286\" src=\"../storage/app/media/{{ record.imagename }}\" alt=\"{{ record.uploader_name }}\">
    <br>
    {{record.description}}
    <br><br>
    <p>Uploaded by: <strong>{{record.uploader_name}}</strong></p>
    <p>at: <i>{{record.created_at}}</i></p>
{% else %}
    {{ notFoundMessage }}
{% endif %}", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
