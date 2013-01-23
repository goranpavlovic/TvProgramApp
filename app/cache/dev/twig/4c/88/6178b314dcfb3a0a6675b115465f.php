<?php

/* TvDatabaseHomeBundle:Default:advsearchresponse.html.twig */
class __TwigTemplate_4c886178b314dcfb3a0a6675b115465f extends Twig_Template
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
        echo "

";
    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 12
    public function block_mainmany($context, array $blocks = array())
    {
        // line 13
        echo "\t<li><a href=\"/\">Home</a></li>
\t<li><a href=\"/tvstations\">Tv Stations</a></li>
\t<li class=\"current_page_item\" ><a href=\"/advancedsearch\">Advanced Search</a></li>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        echo " 

\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["entitity"]) {
            // line 21
            echo "
    <li>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entitity"]) ? $context["entitity"] : $this->getContext($context, "entitity")), "Datetime"), "m/d/Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entitity"]) ? $context["entitity"] : $this->getContext($context, "entitity")), "tv"), "TvName"), "html", null, true);
            echo "</li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "\t<div class=\"pagerfanta\">";
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta")), "default");
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:advsearchresponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  117 => 37,  113 => 36,  87 => 20,  167 => 44,  164 => 43,  146 => 15,  142 => 13,  62 => 12,  40 => 8,  97 => 27,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 31,  82 => 25,  65 => 16,  38 => 10,  144 => 50,  141 => 51,  135 => 46,  126 => 39,  109 => 35,  103 => 34,  67 => 17,  61 => 14,  47 => 9,  105 => 29,  93 => 20,  76 => 45,  72 => 14,  68 => 21,  91 => 25,  84 => 19,  44 => 8,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 21,  75 => 23,  71 => 22,  58 => 18,  34 => 4,  19 => 1,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 14,  63 => 24,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 22,  80 => 24,  74 => 20,  66 => 13,  55 => 15,  52 => 12,  50 => 10,  43 => 9,  41 => 6,  37 => 5,  35 => 4,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 29,  98 => 22,  95 => 24,  92 => 23,  89 => 19,  85 => 23,  81 => 24,  73 => 19,  64 => 20,  60 => 23,  57 => 13,  54 => 10,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
