<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_7bd845a6a33059882daced9bfcc244449913889322b82e3123a94844637ea027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd845a6a33059882daced9bfcc244449913889322b82e3123a94844637ea027->enter($__internal_7bd845a6a33059882daced9bfcc244449913889322b82e3123a94844637ea027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a29684896432aa05a0443f9f74ae6d23ae689ca2e4745fdf6c27e7f0f78c18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a29684896432aa05a0443f9f74ae6d23ae689ca2e4745fdf6c27e7f0f78c18e->enter($__internal_9a29684896432aa05a0443f9f74ae6d23ae689ca2e4745fdf6c27e7f0f78c18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd845a6a33059882daced9bfcc244449913889322b82e3123a94844637ea027->leave($__internal_7bd845a6a33059882daced9bfcc244449913889322b82e3123a94844637ea027_prof);

        
        $__internal_9a29684896432aa05a0443f9f74ae6d23ae689ca2e4745fdf6c27e7f0f78c18e->leave($__internal_9a29684896432aa05a0443f9f74ae6d23ae689ca2e4745fdf6c27e7f0f78c18e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fce6b4397286624a22151bb2e5ace975941f3003f14f1a901a53b22de4271244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce6b4397286624a22151bb2e5ace975941f3003f14f1a901a53b22de4271244->enter($__internal_fce6b4397286624a22151bb2e5ace975941f3003f14f1a901a53b22de4271244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_228d563950cfa7d88c6dcc5d6bb9f7cf369b981c8733b553ca32da8df41c7b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228d563950cfa7d88c6dcc5d6bb9f7cf369b981c8733b553ca32da8df41c7b3d->enter($__internal_228d563950cfa7d88c6dcc5d6bb9f7cf369b981c8733b553ca32da8df41c7b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_228d563950cfa7d88c6dcc5d6bb9f7cf369b981c8733b553ca32da8df41c7b3d->leave($__internal_228d563950cfa7d88c6dcc5d6bb9f7cf369b981c8733b553ca32da8df41c7b3d_prof);

        
        $__internal_fce6b4397286624a22151bb2e5ace975941f3003f14f1a901a53b22de4271244->leave($__internal_fce6b4397286624a22151bb2e5ace975941f3003f14f1a901a53b22de4271244_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf77749a7a5fe024f7dc542e79148550cdc2ef4d30121a7221c8f89daf902915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf77749a7a5fe024f7dc542e79148550cdc2ef4d30121a7221c8f89daf902915->enter($__internal_cf77749a7a5fe024f7dc542e79148550cdc2ef4d30121a7221c8f89daf902915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21e918f18338ad7b754a68ad2d87df63d7988d2f4476ebf005966f7ceae056c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e918f18338ad7b754a68ad2d87df63d7988d2f4476ebf005966f7ceae056c2->enter($__internal_21e918f18338ad7b754a68ad2d87df63d7988d2f4476ebf005966f7ceae056c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21e918f18338ad7b754a68ad2d87df63d7988d2f4476ebf005966f7ceae056c2->leave($__internal_21e918f18338ad7b754a68ad2d87df63d7988d2f4476ebf005966f7ceae056c2_prof);

        
        $__internal_cf77749a7a5fe024f7dc542e79148550cdc2ef4d30121a7221c8f89daf902915->leave($__internal_cf77749a7a5fe024f7dc542e79148550cdc2ef4d30121a7221c8f89daf902915_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b6e7285029e726173183888dc68915d3ecfe107603023349a46efb7633b2821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6e7285029e726173183888dc68915d3ecfe107603023349a46efb7633b2821->enter($__internal_5b6e7285029e726173183888dc68915d3ecfe107603023349a46efb7633b2821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91c9ec75d59acb69e70c71662e0a74c9a4d6a48171b0b432ee8be557fe114aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c9ec75d59acb69e70c71662e0a74c9a4d6a48171b0b432ee8be557fe114aaa->enter($__internal_91c9ec75d59acb69e70c71662e0a74c9a4d6a48171b0b432ee8be557fe114aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91c9ec75d59acb69e70c71662e0a74c9a4d6a48171b0b432ee8be557fe114aaa->leave($__internal_91c9ec75d59acb69e70c71662e0a74c9a4d6a48171b0b432ee8be557fe114aaa_prof);

        
        $__internal_5b6e7285029e726173183888dc68915d3ecfe107603023349a46efb7633b2821->leave($__internal_5b6e7285029e726173183888dc68915d3ecfe107603023349a46efb7633b2821_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Projects\\symfonyStart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
