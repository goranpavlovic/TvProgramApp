<?php

/* TvDatabaseHomeBundle:Default:advsearchform.html.twig */
class __TwigTemplate_f5293cb9118555cac653a2ffa08ce8ed extends Twig_Template
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
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
    }

    // line 9
    public function block_mainmany($context, array $blocks = array())
    {
        // line 10
        echo "\t<li><a href=\"/\">Home</a></li>
\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t<li class=\"current_page_item\" ><a href=\"/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        echo " 

\t<form action=\"\">
\t\t<label>Tip Emisije: </label>
\t\t<select id=\"broadcastType\">
\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 21
            echo "\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t\t</select>
\t\t<br />
\t\t<label>Televizija: </label>
\t\t<select id=\"Televizija\">
\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["televisions"]) ? $context["televisions"] : $this->getContext($context, "televisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 28
            echo "\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t\t</select>
\t\t<br />
\t\t<label>Datum i vreme od: </label><br />
\t\t<label>Datum i vreme do: </label>
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
        return array (  92 => 30,  83 => 28,  79 => 27,  73 => 23,  64 => 21,  60 => 20,  51 => 15,  44 => 10,  41 => 9,  36 => 6,  31 => 3,);
    }
}
