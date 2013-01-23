<?php

/* TvDatabaseHomeBundle:Default:advsearchform.html.twig */
class __TwigTemplate_b2f8061e534af28bac3f22e3a0368aff extends Twig_Template
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
";
    }

    // line 10
    public function block_script($context, array $blocks = array())
    {
        // line 11
        echo "\t<script type='text/javascript' src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery-1.9.0.min.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery-ui-1.10.0.custom.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/timepickeraddon.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/jquery.multiselect.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/dropdownchecklist.js"), "html", null, true);
        echo "'></script>
\t<script type='text/javascript' src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/javascript/searchForm.js"), "html", null, true);
        echo "'></script>
";
    }

    // line 19
    public function block_bodyopen($context, array $blocks = array())
    {
        // line 20
        echo "\t<body onload='bodyLoad()'>
";
    }

    // line 23
    public function block_mainmany($context, array $blocks = array())
    {
        // line 24
        echo "\t<li><a href=\"/\">Home</a></li>
\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t<li class=\"current_page_item\" ><a href=\"/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        echo " 

\t<form action=\"/advancedsearchresponse\" method=\"post\" >
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label>Broadcast Types: </label></td>
\t\t\t\t<td><select id=\"broadcastType\" name=\"broadcastType\" multiple=\"multiple\">
\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 37
            echo "\t\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><label>Televisions: </label></td>
\t\t\t\t<td>
\t\t\t\t\t<select id=\"televisions\" name=\"televisions\" multiple=\"multiple\">
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["televisions"]) ? $context["televisions"] : $this->getContext($context, "televisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><label>Start date and time: </label></td>
\t\t\t\t<td><input type='text' id='startDate' name='startDate'><br /></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><label>End date and time: </label></td>
\t\t\t\t<td><input type='text' id='endDate' name='endDate'/></td>
\t\t\t</tr>
\t\t\t\t<td></td>
\t\t\t\t<td><input id='submitButton' type='submit' value='Search' /></td>
\t\t\t</tr>
\t\t</table>
\t</form>

";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:advsearchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  117 => 37,  113 => 36,  87 => 20,  167 => 44,  164 => 43,  146 => 15,  142 => 13,  62 => 12,  40 => 5,  97 => 28,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 10,  144 => 50,  141 => 51,  135 => 46,  126 => 39,  109 => 35,  103 => 34,  67 => 17,  61 => 14,  47 => 9,  105 => 34,  93 => 20,  76 => 45,  72 => 14,  68 => 12,  91 => 20,  84 => 19,  44 => 6,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 16,  75 => 23,  71 => 19,  58 => 12,  34 => 9,  19 => 1,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 14,  63 => 24,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 15,  66 => 13,  55 => 15,  52 => 12,  50 => 10,  43 => 14,  41 => 7,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 29,  98 => 22,  95 => 24,  92 => 23,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 35,  60 => 23,  57 => 11,  54 => 10,  51 => 9,  48 => 7,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
