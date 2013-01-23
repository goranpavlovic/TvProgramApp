<?php

/* TvDatabaseHomeBundle:Default:stations.html.twig */
class __TwigTemplate_e2e9ec5c7d37e20f18d52b4d7e7a8ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tvdatabasehome/css/stations.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 11
    public function block_mainmany($context, array $blocks = array())
    {
        // line 12
        echo "\t<li><a href=\"/";
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "\">Home</a></li>
\t<li class=\"current_page_item\" ><a href=\"/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/tvstations\">Tv Stations</a></li>
\t<li><a href=\"/";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t<!--div id=\"stations_table\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>TV Station</th>
\t\t\t</tr>
\t\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tvStations"]) ? $context["tvStations"] : $this->getContext($context, "tvStations")));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"/";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/tv/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["station"]) ? $context["station"] : $this->getContext($context, "station")), "TvID"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["station"]) ? $context["station"] : $this->getContext($context, "station")), "TvName"), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "\t\t</table>
\t</div-->
\t<div class=\"post\">
\t\t\t\t\t\t\t<!--h2 class=\"title\"><a href=\"#\">Tv Stations</a></h2-->
\t\t\t\t\t\t\t<div class=\"entry\">
\t\t\t\t\t\t\t\t<ul class='tvMenu'>
\t\t\t\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tvStations"]) ? $context["tvStations"] : $this->getContext($context, "tvStations")));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 35
            echo "\t\t\t\t\t\t\t\t\t\t<li class='tvmenyItem'><a href=\"/";
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/tv/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["station"]) ? $context["station"] : $this->getContext($context, "station")), "TvID"), "html", null, true);
            echo "\"><span class='tventry'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["station"]) ? $context["station"] : $this->getContext($context, "station")), "TvName"), "html", null, true);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:stations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 35,  103 => 34,  67 => 17,  61 => 14,  47 => 9,  105 => 34,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  91 => 20,  84 => 25,  44 => 8,  27 => 4,  25 => 3,  28 => 3,  24 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 4,  19 => 1,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 12,  50 => 10,  43 => 6,  41 => 7,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 17,  60 => 23,  57 => 13,  54 => 10,  51 => 9,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
