<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9548ad33c9830fdbced6c9a92b32a2d45882bab34f0363fb2ee866070146f18f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb0f72afd35b8a60b9486627bbe487259f52a08fe44fe95e5bd4c8f8066a2e18 = $this->env->getExtension("native_profiler");
        $__internal_cb0f72afd35b8a60b9486627bbe487259f52a08fe44fe95e5bd4c8f8066a2e18->enter($__internal_cb0f72afd35b8a60b9486627bbe487259f52a08fe44fe95e5bd4c8f8066a2e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0f72afd35b8a60b9486627bbe487259f52a08fe44fe95e5bd4c8f8066a2e18->leave($__internal_cb0f72afd35b8a60b9486627bbe487259f52a08fe44fe95e5bd4c8f8066a2e18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cec018eb45c46cb97301c72270df9128fef65eda3204b1c10c21c7986d3d2c0 = $this->env->getExtension("native_profiler");
        $__internal_2cec018eb45c46cb97301c72270df9128fef65eda3204b1c10c21c7986d3d2c0->enter($__internal_2cec018eb45c46cb97301c72270df9128fef65eda3204b1c10c21c7986d3d2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2cec018eb45c46cb97301c72270df9128fef65eda3204b1c10c21c7986d3d2c0->leave($__internal_2cec018eb45c46cb97301c72270df9128fef65eda3204b1c10c21c7986d3d2c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa7f9fb3c20ec6479bf9bc506c70c33a226242abdf8333aadbc93c42a62ea2ff = $this->env->getExtension("native_profiler");
        $__internal_fa7f9fb3c20ec6479bf9bc506c70c33a226242abdf8333aadbc93c42a62ea2ff->enter($__internal_fa7f9fb3c20ec6479bf9bc506c70c33a226242abdf8333aadbc93c42a62ea2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa7f9fb3c20ec6479bf9bc506c70c33a226242abdf8333aadbc93c42a62ea2ff->leave($__internal_fa7f9fb3c20ec6479bf9bc506c70c33a226242abdf8333aadbc93c42a62ea2ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8ffd31bb3ec249f9c0671d99f86f80326d9fd114bcd6cc7dc307e24d2698190 = $this->env->getExtension("native_profiler");
        $__internal_d8ffd31bb3ec249f9c0671d99f86f80326d9fd114bcd6cc7dc307e24d2698190->enter($__internal_d8ffd31bb3ec249f9c0671d99f86f80326d9fd114bcd6cc7dc307e24d2698190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8ffd31bb3ec249f9c0671d99f86f80326d9fd114bcd6cc7dc307e24d2698190->leave($__internal_d8ffd31bb3ec249f9c0671d99f86f80326d9fd114bcd6cc7dc307e24d2698190_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
