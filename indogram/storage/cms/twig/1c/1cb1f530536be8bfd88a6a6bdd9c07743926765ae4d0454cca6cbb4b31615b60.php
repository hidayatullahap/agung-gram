<?php

/* E:\Agung\dev\xampp\htdocs\indogram/plugins/agung/agunggram/components/uploadform/default.htm */
class __TwigTemplate_193bcafff5e78e165066164200ba5e006a68c10d3c2d76e00ca5d7027aaf0ed2 extends Twig_Template
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
        echo "<br><br>
<form method=\"POST\" action=\"";
        // line 2
        echo url("add-actors");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\" data-request=\"onSave\" data-request-files data-request-flash>
    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "

    <input type=\"text\" name=\"uploader_name\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\" hidden>

    <!--
    <label class=\"custom-file\">
        <input type=\"file\" name=\"imagename\" class=\"custom-file-input\">
        <span class=\"custom-file-control\"></span>
    </label><br><br><br>
    -->

    <input type=\"file\" id=\"imagename\" name=\"imagename\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>
    <br><br>
    <div class=\"form-group row\">
        <label for=\"description\" class=\"col-sm-2 col-form-label\">Description</label>
        <div class=\"col-sm-10\">
            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"your description here\" required>
        </div>
    </div>
    <div id=\"imageResult\">No image to preview</div>
    <br><br>
    <button class=\"btn btn-warning\" type=\"submit\">Upload post</button>
    
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 28
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 29
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 31
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/plugins/agung/agunggram/components/uploadform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  62 => 29,  60 => 28,  36 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br><br>
<form method=\"POST\" action=\"{{ url('add-actors') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\" data-request=\"onSave\" data-request-files data-request-flash>
    <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
    {{ form_token() }}
    {{ form_sessionKey() }}

    <input type=\"text\" name=\"uploader_name\" value=\"{{user.name}}\" hidden>

    <!--
    <label class=\"custom-file\">
        <input type=\"file\" name=\"imagename\" class=\"custom-file-input\">
        <span class=\"custom-file-control\"></span>
    </label><br><br><br>
    -->

    <input type=\"file\" id=\"imagename\" name=\"imagename\" accept=\"image/*\" data-request=\"onImageUpload\" data-request-files data-request-flash>
    <br><br>
    <div class=\"form-group row\">
        <label for=\"description\" class=\"col-sm-2 col-form-label\">Description</label>
        <div class=\"col-sm-10\">
            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"your description here\" required>
        </div>
    </div>
    <div id=\"imageResult\">No image to preview</div>
    <br><br>
    <button class=\"btn btn-warning\" type=\"submit\">Upload post</button>
    
    {% flash success %}
        <p>{{ message }}</p>
    {% endflash %}
</form>", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/plugins/agung/agunggram/components/uploadform/default.htm", "");
    }
}
