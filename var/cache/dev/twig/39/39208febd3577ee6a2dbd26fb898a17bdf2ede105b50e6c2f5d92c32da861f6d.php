<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23499b41efa2661feb54c135fd28949d14ed22fb02747a8781b7bcf7a3d8d794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df95997d04e0a32f7b3d944dfa2912065f6a00e38caed65b35910eeca347004b = $this->env->getExtension("native_profiler");
        $__internal_df95997d04e0a32f7b3d944dfa2912065f6a00e38caed65b35910eeca347004b->enter($__internal_df95997d04e0a32f7b3d944dfa2912065f6a00e38caed65b35910eeca347004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df95997d04e0a32f7b3d944dfa2912065f6a00e38caed65b35910eeca347004b->leave($__internal_df95997d04e0a32f7b3d944dfa2912065f6a00e38caed65b35910eeca347004b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4bb3d996dea3d59a801c2ee7db880721f458f15ae9f12c4f6db414fef55e485 = $this->env->getExtension("native_profiler");
        $__internal_b4bb3d996dea3d59a801c2ee7db880721f458f15ae9f12c4f6db414fef55e485->enter($__internal_b4bb3d996dea3d59a801c2ee7db880721f458f15ae9f12c4f6db414fef55e485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4bb3d996dea3d59a801c2ee7db880721f458f15ae9f12c4f6db414fef55e485->leave($__internal_b4bb3d996dea3d59a801c2ee7db880721f458f15ae9f12c4f6db414fef55e485_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ddaf96a0d7d1d392e102ec0097ff07c36dc6acb4875507cc3a29d1d1df01098 = $this->env->getExtension("native_profiler");
        $__internal_5ddaf96a0d7d1d392e102ec0097ff07c36dc6acb4875507cc3a29d1d1df01098->enter($__internal_5ddaf96a0d7d1d392e102ec0097ff07c36dc6acb4875507cc3a29d1d1df01098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ddaf96a0d7d1d392e102ec0097ff07c36dc6acb4875507cc3a29d1d1df01098->leave($__internal_5ddaf96a0d7d1d392e102ec0097ff07c36dc6acb4875507cc3a29d1d1df01098_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36393e2326b7d68593def028ab8ba00221b3c63ed40f9f5b1fa2033a8bba506 = $this->env->getExtension("native_profiler");
        $__internal_d36393e2326b7d68593def028ab8ba00221b3c63ed40f9f5b1fa2033a8bba506->enter($__internal_d36393e2326b7d68593def028ab8ba00221b3c63ed40f9f5b1fa2033a8bba506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d36393e2326b7d68593def028ab8ba00221b3c63ed40f9f5b1fa2033a8bba506->leave($__internal_d36393e2326b7d68593def028ab8ba00221b3c63ed40f9f5b1fa2033a8bba506_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
