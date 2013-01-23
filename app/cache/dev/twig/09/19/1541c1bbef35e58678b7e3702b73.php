<?php

/* TvDatabaseHomeBundle:Default:showTV.html.twig */
class __TwigTemplate_09191541c1bbef35e58678b7e3702b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
            'bodyopen' => array($this, 'block_bodyopen'),
            'mainmany' => array($this, 'block_mainmany'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/jqueryui.css"), "html", null, true);
        echo "' rel=\"stylesheet\" type=\"text/css\" />
\t<link href='";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/jqery.multiselect.css"), "html", null, true);
        echo "' rel=\"stylesheet\" type=\"text/css\" />
\t<link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/dropdownchecklist.css"), "html", null, true);
        echo "' rel=\"stylesheet\" type=\"text/css\" />
\t<link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/timepickeraddon.css"), "html", null, true);
        echo "' rel=\"stylesheet\" type=\"text/css\" />
\t<link href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/showTV.css"), "html", null, true);
        echo "' rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 11
    public function block_script($context, array $blocks = array())
    {
        // line 12
        echo "\t<script type='text/javascript' src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery-1.9.0.min.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/timepickeraddon.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery.multiselect.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/dropdownchecklist.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/searchForm.js"), "html", null, true);
        echo "'></script>
";
    }

    // line 20
    public function block_bodyopen($context, array $blocks = array())
    {
        // line 21
        echo "\t<body onload='bodyLoad()'>
";
    }

    // line 24
    public function block_mainmany($context, array $blocks = array())
    {
        // line 25
        echo "\t<li><a href=\"/\">Home</a></li>
\t<li class=\"current_page_item\" ><a href=\"/tvstations\">Tv Stations</a></li>
\t<li><a href=\"/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t<div id=\"stations_table\">
\t<div>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "today"), "html", null, true);
        echo "</div>
\t<form action=\"/tv/";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tv"]) ? $context["tv"] : $this->getContext($context, "tv")), "TvId"), "html", null, true);
        echo "\" method=\"post\">
\t<table>
    \t<tr>
    \t    <td>
    \t        <label>";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select date", array(), "messages");
        echo ":</label></td>
    \t    <td>
    \t        <input type='text' id='startDate' name='startDate'></td>
    \t    <td>
    \t        <input type='submit' value='Search'></td>
    \t</tr>
\t</table>
\t</form>
\t<div id=\"date-prev\"><a href=\"/";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/tv/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tv"]) ? $context["tv"] : $this->getContext($context, "tv")), "TvId"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "yesterday"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Yesterday", array(), "messages");
        echo "</a></div>
\t<div id=\"date-next\"><a href=\"/";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/tv/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tv"]) ? $context["tv"] : $this->getContext($context, "tv")), "TvId"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "tomorrow"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tomorrow", array(), "messages");
        echo "</a></div>
\t<div style='clear:both'>
\t</div>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tv"]) ? $context["tv"] : $this->getContext($context, "tv")), "TvName"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 54
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "time"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"/";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/show/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:showTV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  174 => 56,  170 => 55,  158 => 51,  134 => 45,  99 => 25,  128 => 35,  148 => 49,  117 => 37,  113 => 36,  87 => 20,  167 => 54,  164 => 43,  146 => 15,  142 => 13,  62 => 12,  40 => 5,  97 => 27,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 32,  82 => 17,  65 => 16,  38 => 10,  144 => 46,  141 => 51,  135 => 46,  126 => 39,  109 => 35,  103 => 34,  67 => 17,  61 => 12,  47 => 11,  105 => 29,  93 => 20,  76 => 18,  72 => 14,  68 => 21,  91 => 21,  84 => 19,  44 => 6,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 16,  75 => 23,  71 => 17,  58 => 11,  34 => 4,  19 => 1,  94 => 24,  88 => 20,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 14,  63 => 14,  46 => 15,  22 => 2,  163 => 53,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 37,  120 => 46,  115 => 39,  106 => 30,  101 => 36,  96 => 24,  83 => 20,  80 => 19,  74 => 15,  66 => 13,  55 => 15,  52 => 8,  50 => 12,  43 => 9,  41 => 6,  37 => 5,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 33,  111 => 38,  108 => 28,  102 => 29,  98 => 25,  95 => 24,  92 => 23,  89 => 19,  85 => 23,  81 => 24,  73 => 19,  64 => 20,  60 => 23,  57 => 13,  54 => 10,  51 => 13,  48 => 7,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
