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
        return array (  122 => 37,  109 => 35,  105 => 34,  97 => 28,  84 => 25,  81 => 24,  77 => 23,  67 => 17,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
