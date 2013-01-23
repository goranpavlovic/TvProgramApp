<?php

/* TvDatabaseHomeBundle:Default:index.html.twig */
class __TwigTemplate_3c822bcf5559ddfdfcce740239bed19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_mainmany($context, array $blocks = array())
    {
        // line 12
        echo "\t<li class=\"current_page_item\" ><a href=\"/";
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
\t<li><a href=\"/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/tvstations\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tv Stations", array(), "messages");
        echo "</a></li>
\t<li><a href=\"/";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/advancedsearch\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Advanced Search", array(), "messages");
        echo "</a></li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 19
            echo "\t<div id=\"TV\">
\t<a href=\"/";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/tv/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tv"), "tvid"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tv"), "tvname"), "html", null, true);
            echo "</a>
\t<div id=\"broadcast table\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "shows"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"/";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/show/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "showsNext"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"/";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/show/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameNextId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameNext"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
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
        return array (  128 => 35,  148 => 49,  117 => 37,  113 => 36,  87 => 20,  167 => 44,  164 => 43,  146 => 15,  142 => 13,  62 => 12,  40 => 8,  97 => 27,  77 => 23,  49 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 29,  82 => 25,  65 => 16,  38 => 10,  144 => 50,  141 => 51,  135 => 46,  126 => 39,  109 => 35,  103 => 34,  67 => 17,  61 => 14,  47 => 11,  105 => 29,  93 => 20,  76 => 18,  72 => 14,  68 => 21,  91 => 25,  84 => 19,  44 => 8,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 21,  75 => 23,  71 => 17,  58 => 18,  34 => 4,  19 => 1,  94 => 24,  88 => 27,  79 => 23,  59 => 22,  31 => 3,  26 => 6,  21 => 2,  70 => 14,  63 => 14,  46 => 15,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 20,  80 => 19,  74 => 20,  66 => 13,  55 => 15,  52 => 12,  50 => 12,  43 => 9,  41 => 6,  37 => 5,  35 => 4,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 28,  102 => 29,  98 => 25,  95 => 24,  92 => 23,  89 => 19,  85 => 23,  81 => 24,  73 => 19,  64 => 20,  60 => 23,  57 => 13,  54 => 10,  51 => 13,  48 => 12,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
