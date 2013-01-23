<?php

/* TvDatabaseHomeBundle:Default:show.html.twig */
class __TwigTemplate_bb713a303a02cf1bf205d7ad903511a6 extends Twig_Template
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
\t<li><a href=\"/";
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
\t<div id=\"show\">

\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 21
            echo "\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "name"), "html", null, true);
            echo "\">
\t\t\t";
            // line 22
            if (($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "name") == "Link")) {
                // line 23
                echo "\t\t\t\t<a href=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "value"), "html", null, true);
                echo "> link </a>
\t\t\t";
            } elseif (($this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "name") == "Picture")) {
                // line 25
                echo "\t\t\t\t<img src=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "value"), "html", null, true);
                echo ">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "value"), "html", null, true);
                echo "
\t\t\t";
            }
            // line 29
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  105 => 29,  97 => 27,  91 => 25,  85 => 23,  83 => 22,  78 => 21,  74 => 20,  67 => 17,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
