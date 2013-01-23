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
            'bodyopen' => array($this, 'block_bodyopen'),
            'mainmany' => array($this, 'block_mainmany'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"description\" content=\"\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<title>Tv Program Schedule Database</title>
\t<link href=\"http://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css' />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t";
        $this->displayBlock('script', $context, $blocks);
        // line 14
        echo "</head>
";
        // line 15
        $this->displayBlock('bodyopen', $context, $blocks);
        // line 18
        echo "\t<div id=\"wrapper\">
\t\t<div id=\"header-wrapper\">
\t\t\t<div id=\"header\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<h1><a href=\"#\">Tv Program Schedule Database</a></h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"menu-wrapper\">
\t\t<div id=\"menu\">
\t\t\t<ul>
\t\t\t\t";
        // line 30
        $this->displayBlock('mainmany', $context, $blocks);
        // line 35
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div id=\"page\">
\t\t<div id=\"page-bgtop\">
\t\t\t<div id=\"page-bgbtm\">
\t\t\t\t<div id=\"page-content\">
\t\t\t\t\t<div id=\"content\">
\t\t\t\t\t\t";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t\t\t\t<div style=\"clear: both;\">&nbsp;</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h2>Aliquam tempus</h2>
\t\t\t\t\t\t\t\t<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h2>Categories</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h2>Blogroll</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h2>Archives</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Aliquam libero</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Consectetuer adipiscing elit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Metus aliquam pellentesque</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Suspendisse iaculis mauris</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Urnanet non molestie semper</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Proin gravida orci porttitor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear: both;\">&nbsp;</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"footer\">
\t<p>Praksa 2012</p>
</div>
</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t";
    }

    // line 12
    public function block_script($context, array $blocks = array())
    {
        // line 13
        echo "\t";
    }

    // line 15
    public function block_bodyopen($context, array $blocks = array())
    {
        // line 16
        echo "<body>
";
    }

    // line 30
    public function block_mainmany($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t\t<li class=\"current_page_item\" ><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t\t\t\t\t<li><a href=\"/advancedsearch\">Advanced Search</a></li>
\t\t\t\t";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t\t\t\t";
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
        return array (  167 => 44,  164 => 43,  157 => 31,  154 => 30,  149 => 16,  146 => 15,  142 => 13,  139 => 12,  135 => 11,  132 => 10,  76 => 45,  64 => 35,  62 => 30,  46 => 15,  43 => 14,  38 => 10,  34 => 9,  24 => 1,  174 => 59,  163 => 56,  159 => 55,  156 => 54,  152 => 53,  147 => 51,  137 => 46,  131 => 45,  116 => 33,  112 => 32,  106 => 30,  99 => 25,  96 => 24,  91 => 21,  88 => 20,  82 => 17,  78 => 16,  74 => 43,  70 => 14,  66 => 13,  61 => 12,  58 => 11,  52 => 8,  48 => 18,  44 => 6,  40 => 12,  35 => 4,  32 => 3,);
    }
}
