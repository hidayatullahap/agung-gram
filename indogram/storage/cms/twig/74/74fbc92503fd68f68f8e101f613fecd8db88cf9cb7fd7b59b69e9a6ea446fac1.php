<?php

/* E:\Agung\dev\xampp\htdocs\indogram/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_769a4add2c979c84bbfe63018a62c3f161a7738872e8808697dc70f324abe43e extends Twig_Template
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
        echo "<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), "html", null, true);
        echo "</title>
<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
\t\t\t<img src=\"http://icons.iconarchive.com/icons/martz90/circle/512/camera-icon.png\" 
\t\t\talt=\"indogram\" height=\"30\" width=\"30\" align=\"left\"><span id=\"icontext\">indogram</span></a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "upload")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("upload");
        echo "\">Upload</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 15
        if ( !($context["user"] ?? null)) {
            // line 16
            echo "\t\t\t\t<li class=\"nav-item";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "login")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 17
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Sign In</a>
\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t<li class=\"nav-item";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "login")) ? (" active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">My Profile</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Logout</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  76 => 24,  70 => 21,  65 => 20,  59 => 17,  54 => 16,  52 => 15,  47 => 13,  43 => 12,  38 => 10,  34 => 9,  27 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<title>{{this.page.baseFileName}}</title>
<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t    <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t<img src=\"http://icons.iconarchive.com/icons/martz90/circle/512/camera-icon.png\" 
\t\t\talt=\"indogram\" height=\"30\" width=\"30\" align=\"left\"><span id=\"icontext\">indogram</span></a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'upload' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'upload'|page }}\">Upload</a>
\t\t\t\t</li>
\t\t\t\t{% if not user %}
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">Sign In</a>
\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">My Profile</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ 'home'|page }}\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Logout</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
