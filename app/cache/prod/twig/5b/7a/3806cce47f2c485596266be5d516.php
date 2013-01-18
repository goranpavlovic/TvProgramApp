<?php

/* ::base.html.twig */
class __TwigTemplate_5b7a3806cce47f2c485596266be5d516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
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
\t<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
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
<body>
\t<div id=\"wrapper\">
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
\t\t\t\t<!--li class=\"current_page_item\"><a href=\"#\">Homepage</a></li-->
\t\t\t\t";
        // line 29
        $this->displayBlock('mainmany', $context, $blocks);
        // line 34
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div id=\"page\">
\t\t<div id=\"page-bgtop\">
\t\t\t<div id=\"page-bgbtm\">
\t\t\t\t<div id=\"page-content\">
\t\t\t\t\t<div id=\"content\">
\t\t\t\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
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
</html>
";
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

    // line 29
    public function block_mainmany($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t\t\t<li class=\"current_page_item\" ><a href=\"/\">Home</a></li>
\t\t\t\t\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t\t\t\t\t<li><a href=\"/advancedsearch\">Advanced Search</a></li>
\t\t\t\t";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
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
        return array (  157 => 43,  154 => 42,  147 => 30,  144 => 29,  140 => 13,  137 => 12,  133 => 11,  130 => 10,  73 => 44,  71 => 42,  61 => 34,  59 => 29,  42 => 14,  39 => 12,  37 => 10,  33 => 9,  23 => 1,);
    }
}
