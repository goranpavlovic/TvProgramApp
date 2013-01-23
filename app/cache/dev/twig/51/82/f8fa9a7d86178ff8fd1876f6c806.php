<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_5182f8fa9a7d86178ff8fd1876f6c806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  107 => 27,  209 => 77,  188 => 66,  182 => 64,  176 => 61,  90 => 41,  20 => 1,  262 => 236,  260 => 235,  257 => 234,  240 => 93,  238 => 218,  56 => 13,  53 => 38,  140 => 42,  86 => 29,  23 => 3,  187 => 59,  174 => 58,  170 => 60,  158 => 51,  134 => 45,  99 => 25,  128 => 35,  148 => 74,  117 => 44,  113 => 43,  87 => 40,  167 => 54,  164 => 43,  146 => 15,  142 => 13,  62 => 27,  40 => 8,  97 => 23,  77 => 24,  49 => 17,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 69,  204 => 94,  198 => 69,  185 => 61,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 23,  38 => 7,  144 => 73,  141 => 51,  135 => 46,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 11,  105 => 41,  93 => 42,  76 => 34,  72 => 14,  68 => 30,  91 => 28,  84 => 25,  44 => 10,  27 => 4,  25 => 29,  28 => 3,  24 => 3,  225 => 96,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 48,  147 => 55,  132 => 47,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 24,  78 => 26,  75 => 23,  71 => 21,  58 => 25,  34 => 5,  19 => 1,  94 => 33,  88 => 20,  79 => 35,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 15,  63 => 16,  46 => 14,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 16,  145 => 57,  139 => 71,  131 => 42,  123 => 35,  120 => 46,  115 => 44,  106 => 30,  101 => 45,  96 => 24,  83 => 28,  80 => 28,  74 => 21,  66 => 13,  55 => 24,  52 => 18,  50 => 22,  43 => 7,  41 => 19,  37 => 7,  35 => 5,  32 => 6,  29 => 6,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 31,  153 => 54,  151 => 47,  143 => 43,  138 => 51,  136 => 50,  133 => 31,  130 => 39,  122 => 37,  119 => 57,  116 => 31,  111 => 38,  108 => 28,  102 => 34,  98 => 32,  95 => 43,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
