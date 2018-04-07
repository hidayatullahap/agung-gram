<?php

/* E:\Agung\dev\xampp\htdocs\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_d88bc2ab9c75adc852c9467915d7ef7b70dcbac4f8e9737d3155a701dfa38822 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            ob_start();
            // line 12
            echo "    
        <div class=\"card\">
            <img class=\"card-img-top\" height=\"286\" width=\"286\" src=\"storage/app/media/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "imagename", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "uploader_name", array()), "html", null, true);
            echo "\">
            <div class=\"card-body\">
                <p class=\"card-text\">";
            // line 16
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "description", array()), 300));
            echo "</p>
            </div>
            <div class=\"card-footer\">
                <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "uploader_name", array()), "html", null, true);
            echo "</h5>
                <i><font size=\"2\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "created_at", array()), "html", null, true);
            echo "</font></i><br>
                ";
            // line 21
            if (($context["detailsPage"] ?? null)) {
                // line 22
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 24
            echo "                <button class=\"btn btn-primary\">Detail</button>
                ";
            // line 25
            if (($context["detailsPage"] ?? null)) {
                // line 26
                echo "                    </a>
                ";
            }
            // line 28
            echo "            </div>
        </div>
            
        
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 38
            echo "    <ul class=\"pagination\">
        ";
            // line 39
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 40
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 45
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()))) {
                // line 50
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 52
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  150 => 50,  148 => 49,  145 => 48,  134 => 45,  129 => 44,  125 => 43,  122 => 42,  116 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  97 => 34,  87 => 28,  83 => 26,  81 => 25,  78 => 24,  72 => 22,  70 => 21,  66 => 20,  62 => 19,  56 => 16,  49 => 14,  45 => 12,  42 => 11,  40 => 10,  35 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


{% for record in records %}
    {# Use spaceless tag to remove spaces inside the A tag. #}
    {% spaceless %}
    
        <div class=\"card\">
            <img class=\"card-img-top\" height=\"286\" width=\"286\" src=\"storage/app/media/{{ record.imagename }}\" alt=\"{{ record.uploader_name }}\">
            <div class=\"card-body\">
                <p class=\"card-text\">{{ html_limit(record.description,300)|raw }}</p>
            </div>
            <div class=\"card-footer\">
                <h5 class=\"card-title\">{{ record.uploader_name }}</h5>
                <i><font size=\"2\">{{ record.created_at }}</font></i><br>
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}
                <button class=\"btn btn-primary\">Detail</button>
                {% if detailsPage %}
                    </a>
                {% endif %}
            </div>
        </div>
            
        
    {% endspaceless %}
{% else %}
    <p>{{ noRecordsMessage }}</p>
{% endfor %}

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
