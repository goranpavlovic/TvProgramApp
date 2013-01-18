<?php

/* ::base.html.twig */
class __TwigTemplate_844e85e7f2327d886ab257d1c17b9c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
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
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/main.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 9
        $this->displayBlock('script', $context, $blocks);
        // line 11
        echo "\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div id=\"header\">
\t\t\t\t<h1>Tv Program Schedule Database</h1>
\t\t\t</div>
\t\t\t<div id=\"menu\">
\t\t\t\t<div id=\"menuitems\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t\t\t\t\t\t<li><a href=\"/advancedsearch\">Advanced Search</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"content\">
\t\t\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "\t\t\t</div>
\t\t\t<div id=\"footer\">
\t\t\t\tPraksa2012
\t\t\t</div>
\t\t</div>
\t</body>
</html>

";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t";
    }

    // line 9
    public function block_script($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
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
        return array (  90 => 28,  87 => 27,  83 => 10,  80 => 9,  76 => 7,  73 => 6,  61 => 29,  59 => 27,  39 => 9,  34 => 8,  32 => 6,  28 => 5,  22 => 1,  101 => 31,  89 => 25,  85 => 24,  81 => 23,  75 => 20,  71 => 19,  67 => 18,  58 => 14,  55 => 13,  51 => 12,  46 => 11,  41 => 11,  38 => 7,  33 => 4,  30 => 3,);
    }
}
