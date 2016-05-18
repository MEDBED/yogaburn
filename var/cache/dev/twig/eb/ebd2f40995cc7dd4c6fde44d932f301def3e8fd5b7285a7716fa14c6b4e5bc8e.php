<?php

/* lucky/number.html.twig */
class __TwigTemplate_9e534a48b818e719e96355dc6ed7cc1b8d3010e7461f61350b34353cb9f9c72a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c01f119f376f44a9854352f774d0a1f5c971caed261000d4166150a58e8a2d3 = $this->env->getExtension("native_profiler");
        $__internal_9c01f119f376f44a9854352f774d0a1f5c971caed261000d4166150a58e8a2d3->enter($__internal_9c01f119f376f44a9854352f774d0a1f5c971caed261000d4166150a58e8a2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c01f119f376f44a9854352f774d0a1f5c971caed261000d4166150a58e8a2d3->leave($__internal_9c01f119f376f44a9854352f774d0a1f5c971caed261000d4166150a58e8a2d3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_31aac32ce174b6ed7870fc735366d424b742b31a79678bb9990bff04e4b7af89 = $this->env->getExtension("native_profiler");
        $__internal_31aac32ce174b6ed7870fc735366d424b742b31a79678bb9990bff04e4b7af89->enter($__internal_31aac32ce174b6ed7870fc735366d424b742b31a79678bb9990bff04e4b7af89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
            echo "\">
      Hello World !
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_31aac32ce174b6ed7870fc735366d424b742b31a79678bb9990bff04e4b7af89->leave($__internal_31aac32ce174b6ed7870fc735366d424b742b31a79678bb9990bff04e4b7af89_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% for i in 0..10 %}*/
/*     <div class="{{ cycle(['odd', 'even'], i) }}">*/
/*       Hello World !*/
/*     </div>*/
/* {% endfor %}*/
/* {% endblock %}*/
