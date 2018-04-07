<?php

/* E:\Agung\dev\xampp\htdocs\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/test.htm */
class __TwigTemplate_ead17b60e2c77c52302825dff289d75fabf6cbb6a69cae57f6d79d89bf6493c4 extends Twig_Template
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
        echo "<form action=\"indogram/../../../plugins/agung/agunggram/models/upload.php\" method=\"post\" enctype=\"multipart/form-data\">
    Select image to upload:
    <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
    <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
</form>";
    }

    public function getTemplateName()
    {
        return "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/test.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"indogram/../../../plugins/agung/agunggram/models/upload.php\" method=\"post\" enctype=\"multipart/form-data\">
    Select image to upload:
    <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
    <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
</form>", "E:\\Agung\\dev\\xampp\\htdocs\\indogram/themes/hambern-hambern-blank-bootstrap-4/pages/test.htm", "");
    }
}
