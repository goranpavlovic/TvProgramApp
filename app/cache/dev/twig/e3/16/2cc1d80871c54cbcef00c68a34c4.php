<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_e3162cc1d80871c54cbcef00c68a34c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  86 => 39,  23 => 1,  187 => 59,  174 => 56,  170 => 55,  158 => 51,  134 => 45,  99 => 25,  128 => 35,  148 => 49,  117 => 44,  113 => 43,  87 => 20,  167 => 54,  164 => 43,  146 => 15,  142 => 13,  62 => 12,  40 => 6,  97 => 45,  77 => 27,  49 => 13,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 32,  82 => 37,  65 => 23,  38 => 10,  144 => 46,  141 => 51,  135 => 46,  126 => 39,  109 => 42,  103 => 34,  67 => 17,  61 => 22,  47 => 11,  105 => 41,  93 => 20,  76 => 18,  72 => 14,  68 => 21,  91 => 21,  84 => 19,  44 => 6,  27 => 4,  25 => 3,  28 => 3,  24 => 1,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 30,  147 => 55,  132 => 10,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 36,  100 => 33,  78 => 16,  75 => 23,  71 => 17,  58 => 17,  34 => 4,  19 => 1,  94 => 33,  88 => 41,  79 => 26,  59 => 22,  31 => 3,  26 => 9,  21 => 2,  70 => 22,  63 => 19,  46 => 8,  22 => 2,  163 => 53,  155 => 58,  152 => 49,  149 => 16,  145 => 46,  139 => 47,  131 => 42,  123 => 33,  120 => 46,  115 => 28,  106 => 30,  101 => 36,  96 => 24,  83 => 20,  80 => 28,  74 => 24,  66 => 13,  55 => 15,  52 => 8,  50 => 12,  43 => 9,  41 => 6,  37 => 5,  35 => 4,  32 => 3,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 31,  153 => 54,  151 => 52,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 37,  119 => 36,  116 => 33,  111 => 38,  108 => 28,  102 => 47,  98 => 25,  95 => 24,  92 => 43,  89 => 31,  85 => 29,  81 => 24,  73 => 19,  64 => 20,  60 => 23,  57 => 13,  54 => 10,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 3,);
    }
}
