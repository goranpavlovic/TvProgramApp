<?php

/* TvDatabaseHomeBundle:Default:index.html.twig */
class __TwigTemplate_49a7f459107d64553cb2a07c6c06833d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "
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
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 13
            echo "\t<div type=\"TV\">
\t";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["tv"]) ? $context["tv"] : $this->getContext($context, "tv")), "html", null, true);
            echo "
\t\t<div type=\"currentShow\">
\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "shows"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name"), "html", null, true);
            echo "
\t\t</div>
\t\t<div type=\"nextShow\">
\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "showsNext"), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  71 => 19,  63 => 16,  58 => 14,  55 => 13,  51 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
