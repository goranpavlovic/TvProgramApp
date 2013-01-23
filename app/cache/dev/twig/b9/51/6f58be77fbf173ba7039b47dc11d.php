<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b9516f58be77fbf173ba7039b47dc11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  262 => 236,  260 => 235,  257 => 234,  240 => 219,  238 => 218,  56 => 39,  53 => 38,  140 => 61,  86 => 39,  23 => 3,  187 => 59,  174 => 56,  170 => 55,  158 => 51,  134 => 45,  99 => 25,  128 => 35,  148 => 49,  117 => 44,  113 => 43,  87 => 20,  167 => 54,  164 => 43,  146 => 15,  142 => 13,  62 => 25,  40 => 8,  97 => 45,  77 => 18,  49 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 32,  82 => 37,  65 => 23,  38 => 6,  144 => 46,  141 => 51,  135 => 46,  126 => 39,  109 => 42,  103 => 34,  67 => 22,  61 => 22,  47 => 11,  105 => 41,  93 => 20,  76 => 18,  72 => 14,  68 => 21,  91 => 28,  84 => 27,  44 => 11,  27 => 4,  25 => 29,  28 => 3,  24 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 36,  100 => 33,  78 => 16,  75 => 24,  71 => 23,  58 => 17,  34 => 8,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 21,  31 => 6,  26 => 3,  21 => 2,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 53,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 33,  120 => 46,  115 => 28,  106 => 30,  101 => 33,  96 => 24,  83 => 20,  80 => 28,  74 => 24,  66 => 13,  55 => 15,  52 => 18,  50 => 18,  43 => 7,  41 => 10,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 37,  119 => 36,  116 => 33,  111 => 38,  108 => 28,  102 => 47,  98 => 25,  95 => 34,  92 => 43,  89 => 30,  85 => 29,  81 => 24,  73 => 19,  64 => 11,  60 => 23,  57 => 20,  54 => 19,  51 => 16,  48 => 9,  45 => 13,  42 => 8,  39 => 9,  36 => 7,  33 => 6,  30 => 7,);
    }
}
