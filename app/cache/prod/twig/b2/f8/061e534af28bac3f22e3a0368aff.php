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
    public function block_content($context, array $blocks = array())
    {
        echo " 

\t<form action=\"\">
\t\t<label>Tip Emisije: </label>
\t\t<select id=\"broadcastType\">
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            echo "\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t\t</select>
\t\t<br />
\t\t<label>Televizija: </label>
\t\t<select id=\"Televizija\">
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["televisions"]) ? $context["televisions"] : $this->getContext($context, "televisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 22
            echo "\t\t\t\t<option>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
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
        return array (  81 => 24,  72 => 22,  68 => 21,  62 => 17,  53 => 15,  49 => 14,  40 => 9,  35 => 6,  30 => 3,);
    }
}
