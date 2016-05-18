<?php

/* base.html.twig */
class __TwigTemplate_b9e836231715075097074b3a144c13fb23b71e9ab7a16a1ebee7b633625a520f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c7c2e2914a2537bf3d51101cc1bce91b2c43f2fc240d0d0129b6ec37e053d20 = $this->env->getExtension("native_profiler");
        $__internal_0c7c2e2914a2537bf3d51101cc1bce91b2c43f2fc240d0d0129b6ec37e053d20->enter($__internal_0c7c2e2914a2537bf3d51101cc1bce91b2c43f2fc240d0d0129b6ec37e053d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c7c2e2914a2537bf3d51101cc1bce91b2c43f2fc240d0d0129b6ec37e053d20->leave($__internal_0c7c2e2914a2537bf3d51101cc1bce91b2c43f2fc240d0d0129b6ec37e053d20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e4628f1d6e9c5462f925a63fd2ee14796a7e1ec7bf2b2f81845ba699e7beab6 = $this->env->getExtension("native_profiler");
        $__internal_6e4628f1d6e9c5462f925a63fd2ee14796a7e1ec7bf2b2f81845ba699e7beab6->enter($__internal_6e4628f1d6e9c5462f925a63fd2ee14796a7e1ec7bf2b2f81845ba699e7beab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e4628f1d6e9c5462f925a63fd2ee14796a7e1ec7bf2b2f81845ba699e7beab6->leave($__internal_6e4628f1d6e9c5462f925a63fd2ee14796a7e1ec7bf2b2f81845ba699e7beab6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c5077432f6eda9bb5b2bad516edfadf3be69d352e14bb3f274c88b51bc9d71c = $this->env->getExtension("native_profiler");
        $__internal_1c5077432f6eda9bb5b2bad516edfadf3be69d352e14bb3f274c88b51bc9d71c->enter($__internal_1c5077432f6eda9bb5b2bad516edfadf3be69d352e14bb3f274c88b51bc9d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c5077432f6eda9bb5b2bad516edfadf3be69d352e14bb3f274c88b51bc9d71c->leave($__internal_1c5077432f6eda9bb5b2bad516edfadf3be69d352e14bb3f274c88b51bc9d71c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a093f17b67cba5b215ec25448a51f0ec70c2f752a0baf1a3c1c53d2cc4cd28 = $this->env->getExtension("native_profiler");
        $__internal_94a093f17b67cba5b215ec25448a51f0ec70c2f752a0baf1a3c1c53d2cc4cd28->enter($__internal_94a093f17b67cba5b215ec25448a51f0ec70c2f752a0baf1a3c1c53d2cc4cd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94a093f17b67cba5b215ec25448a51f0ec70c2f752a0baf1a3c1c53d2cc4cd28->leave($__internal_94a093f17b67cba5b215ec25448a51f0ec70c2f752a0baf1a3c1c53d2cc4cd28_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6704728aeb575454d7380eb23902367c3b9f11fd1011b76889f881929b2d1e42 = $this->env->getExtension("native_profiler");
        $__internal_6704728aeb575454d7380eb23902367c3b9f11fd1011b76889f881929b2d1e42->enter($__internal_6704728aeb575454d7380eb23902367c3b9f11fd1011b76889f881929b2d1e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6704728aeb575454d7380eb23902367c3b9f11fd1011b76889f881929b2d1e42->leave($__internal_6704728aeb575454d7380eb23902367c3b9f11fd1011b76889f881929b2d1e42_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
