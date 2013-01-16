<?php

/* ::base.html.twig */
class __TwigTemplate_5b7a3806cce47f2c485596266be5d516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\"> 
<html>
\t<head>
\t\t<title>Tv Program database</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/index.css"), "html", null, true);
        echo "\" />
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div id=\"header\">
\t\t\t\t<h1>Tv Program Schedule Database</h1>
\t\t\t</div>
\t\t\t<div id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t\t\t\t\t<li><a href=\"/tvprogram\">Tv Program</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"content\">
\t\t\t\t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "\t\t\t</div>
\t\t\t<div id=\"footer\">
\t\t\t\ttest4
\t\t\t<div>
\t\t</div>
\t</body>
</html>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  57 => 20,  46 => 22,  44 => 20,  26 => 5,  20 => 1,  28 => 3,);
    }
}
