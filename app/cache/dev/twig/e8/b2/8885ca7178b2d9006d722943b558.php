<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e8b28885ca7178b2d9006d722943b558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  188 => 67,  182 => 64,  176 => 61,  90 => 28,  20 => 1,  262 => 236,  260 => 235,  257 => 234,  240 => 219,  238 => 218,  56 => 13,  53 => 38,  140 => 61,  86 => 29,  23 => 3,  187 => 59,  174 => 56,  170 => 60,  158 => 51,  134 => 45,  99 => 25,  128 => 35,  148 => 58,  117 => 44,  113 => 43,  87 => 20,  167 => 54,  164 => 43,  146 => 15,  142 => 13,  62 => 16,  40 => 8,  97 => 45,  77 => 24,  49 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 69,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 32,  82 => 37,  65 => 23,  38 => 5,  144 => 46,  141 => 51,  135 => 46,  126 => 39,  109 => 42,  103 => 34,  67 => 21,  61 => 18,  47 => 9,  105 => 41,  93 => 20,  76 => 18,  72 => 14,  68 => 20,  91 => 28,  84 => 25,  44 => 8,  27 => 4,  25 => 29,  28 => 3,  24 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 47,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 33,  78 => 26,  75 => 23,  71 => 21,  58 => 14,  34 => 8,  19 => 1,  94 => 33,  88 => 41,  79 => 23,  59 => 21,  31 => 6,  26 => 3,  21 => 2,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 53,  155 => 58,  152 => 49,  149 => 16,  145 => 57,  139 => 47,  131 => 42,  123 => 33,  120 => 46,  115 => 44,  106 => 30,  101 => 33,  96 => 24,  83 => 28,  80 => 28,  74 => 21,  66 => 13,  55 => 15,  52 => 18,  50 => 10,  43 => 7,  41 => 12,  37 => 7,  35 => 5,  32 => 6,  29 => 6,  184 => 70,  178 => 62,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 56,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 37,  119 => 45,  116 => 33,  111 => 38,  108 => 28,  102 => 34,  98 => 32,  95 => 31,  92 => 43,  89 => 28,  85 => 29,  81 => 24,  73 => 19,  64 => 11,  60 => 15,  57 => 20,  54 => 12,  51 => 16,  48 => 9,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
