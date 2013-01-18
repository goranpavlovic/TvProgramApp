<?php

/* TvDatabaseHomeBundle:Default:stations.html.twig */
class __TwigTemplate_282de4e4ebf2647c359fc9e1bf875b0e extends Twig_Template
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
        echo "\t<li><a href=\"/\">Home</a></li>
\t<li class=\"current_page_item\" ><a href=\"/tvstations\">Tv Stations</a></li>
\t<li><a href=\"/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t<div id=\"stations_table\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>TV Station</th>
\t\t\t</tr>
\t\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["names"]) ? $context["names"] : $this->getContext($context, "names")));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</td>
\t\t\t\t</tr>\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "\t\t</table>
\t</div>
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
        return array (  85 => 28,  76 => 25,  73 => 24,  69 => 23,  59 => 17,  52 => 12,  49 => 11,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
