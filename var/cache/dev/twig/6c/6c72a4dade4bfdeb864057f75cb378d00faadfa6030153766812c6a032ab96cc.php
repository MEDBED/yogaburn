<?php

/* default/new.html.twig */
class __TwigTemplate_1d9d47e52269b7a9f7e88af2286dc264da00f3057f143c62de6bae795786d1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
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
        $__internal_0f2907a3660742dd62f9284bf5ec1d4572669fcf1a257badddfac0f8b013d35f = $this->env->getExtension("native_profiler");
        $__internal_0f2907a3660742dd62f9284bf5ec1d4572669fcf1a257badddfac0f8b013d35f->enter($__internal_0f2907a3660742dd62f9284bf5ec1d4572669fcf1a257badddfac0f8b013d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2907a3660742dd62f9284bf5ec1d4572669fcf1a257badddfac0f8b013d35f->leave($__internal_0f2907a3660742dd62f9284bf5ec1d4572669fcf1a257badddfac0f8b013d35f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f708f44fe71a82fd5e8f819a0462905aca803b7425b94cf4d381a47e99018535 = $this->env->getExtension("native_profiler");
        $__internal_f708f44fe71a82fd5e8f819a0462905aca803b7425b94cf4d381a47e99018535->enter($__internal_f708f44fe71a82fd5e8f819a0462905aca803b7425b94cf4d381a47e99018535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f708f44fe71a82fd5e8f819a0462905aca803b7425b94cf4d381a47e99018535->leave($__internal_f708f44fe71a82fd5e8f819a0462905aca803b7425b94cf4d381a47e99018535_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {# app/Resources/views/default/new.html.twig #}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
