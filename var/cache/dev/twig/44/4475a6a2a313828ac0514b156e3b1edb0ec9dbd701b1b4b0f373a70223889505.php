<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d08b0e4b3a79a59bd47d667271278180df335d83f88478c895c0917b2691a6f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9895726e59bb9b6959b9cf0a9c7ad282154817618e1c35326c6f21537757c129 = $this->env->getExtension("native_profiler");
        $__internal_9895726e59bb9b6959b9cf0a9c7ad282154817618e1c35326c6f21537757c129->enter($__internal_9895726e59bb9b6959b9cf0a9c7ad282154817618e1c35326c6f21537757c129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9895726e59bb9b6959b9cf0a9c7ad282154817618e1c35326c6f21537757c129->leave($__internal_9895726e59bb9b6959b9cf0a9c7ad282154817618e1c35326c6f21537757c129_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_989f61f02a6e0105e98bc873527ea86c549d0be8a58431207990e6f027d317ad = $this->env->getExtension("native_profiler");
        $__internal_989f61f02a6e0105e98bc873527ea86c549d0be8a58431207990e6f027d317ad->enter($__internal_989f61f02a6e0105e98bc873527ea86c549d0be8a58431207990e6f027d317ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_989f61f02a6e0105e98bc873527ea86c549d0be8a58431207990e6f027d317ad->leave($__internal_989f61f02a6e0105e98bc873527ea86c549d0be8a58431207990e6f027d317ad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f486d90f289055212df4185c0c797730a87d5981f31e7a3ebfb2e389f4d10e90 = $this->env->getExtension("native_profiler");
        $__internal_f486d90f289055212df4185c0c797730a87d5981f31e7a3ebfb2e389f4d10e90->enter($__internal_f486d90f289055212df4185c0c797730a87d5981f31e7a3ebfb2e389f4d10e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f486d90f289055212df4185c0c797730a87d5981f31e7a3ebfb2e389f4d10e90->leave($__internal_f486d90f289055212df4185c0c797730a87d5981f31e7a3ebfb2e389f4d10e90_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e8f563258b50f844bb1543847412b23b21e05f725a7f65d394e9be54a875af2 = $this->env->getExtension("native_profiler");
        $__internal_8e8f563258b50f844bb1543847412b23b21e05f725a7f65d394e9be54a875af2->enter($__internal_8e8f563258b50f844bb1543847412b23b21e05f725a7f65d394e9be54a875af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8e8f563258b50f844bb1543847412b23b21e05f725a7f65d394e9be54a875af2->leave($__internal_8e8f563258b50f844bb1543847412b23b21e05f725a7f65d394e9be54a875af2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */