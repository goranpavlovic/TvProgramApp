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
        return array (  148 => 49,  139 => 47,  135 => 46,  126 => 39,  117 => 37,  113 => 36,  102 => 29,  95 => 24,  92 => 23,  87 => 20,  84 => 19,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 11,  54 => 10,  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,);
    }
}
