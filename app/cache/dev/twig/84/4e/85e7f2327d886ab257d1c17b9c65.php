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
        return array (  167 => 44,  164 => 43,  146 => 15,  142 => 13,  62 => 30,  40 => 12,  97 => 28,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 10,  144 => 50,  141 => 51,  135 => 11,  126 => 45,  109 => 35,  103 => 34,  67 => 17,  61 => 14,  47 => 9,  105 => 34,  93 => 20,  76 => 45,  72 => 14,  68 => 12,  91 => 20,  84 => 25,  44 => 8,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 9,  19 => 1,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 20,  63 => 24,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 12,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 43,  66 => 15,  55 => 15,  52 => 12,  50 => 10,  43 => 14,  41 => 7,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 35,  60 => 23,  57 => 13,  54 => 10,  51 => 9,  48 => 18,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
