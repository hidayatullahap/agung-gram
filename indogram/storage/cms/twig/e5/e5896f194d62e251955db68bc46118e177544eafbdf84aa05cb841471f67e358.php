<?php

/* E:\Agung\dev\xampp\htdocs\indogram/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_fb4d550568807ac356c23b41d92f43f135e4b153553f4685816ab5da8d0424af extends Twig_Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
";
        } else {
            // line 37
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 37,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if canRegister %}
    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
{% else %}
    <!-- Registration is disabled. -->
{% endif %}
", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/plugins/rainlab/user/components/account/register.htm", "");
    }
}
