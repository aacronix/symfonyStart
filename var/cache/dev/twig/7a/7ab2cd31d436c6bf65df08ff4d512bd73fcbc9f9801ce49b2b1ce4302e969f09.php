<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_1a390d1c3fea81bc968f05596d9657476cf81defa14e41a4b61ecc05d5bdc8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a390d1c3fea81bc968f05596d9657476cf81defa14e41a4b61ecc05d5bdc8fc->enter($__internal_1a390d1c3fea81bc968f05596d9657476cf81defa14e41a4b61ecc05d5bdc8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_abba288b7f34e5683265feaf0e187188638550154ac9862ffb9cf0c97acdbbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abba288b7f34e5683265feaf0e187188638550154ac9862ffb9cf0c97acdbbc5->enter($__internal_abba288b7f34e5683265feaf0e187188638550154ac9862ffb9cf0c97acdbbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a390d1c3fea81bc968f05596d9657476cf81defa14e41a4b61ecc05d5bdc8fc->leave($__internal_1a390d1c3fea81bc968f05596d9657476cf81defa14e41a4b61ecc05d5bdc8fc_prof);

        
        $__internal_abba288b7f34e5683265feaf0e187188638550154ac9862ffb9cf0c97acdbbc5->leave($__internal_abba288b7f34e5683265feaf0e187188638550154ac9862ffb9cf0c97acdbbc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76d7d99b6634d43a515ed356b7717fff57453d08ba74955fad6a2641a8fe26b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d7d99b6634d43a515ed356b7717fff57453d08ba74955fad6a2641a8fe26b2->enter($__internal_76d7d99b6634d43a515ed356b7717fff57453d08ba74955fad6a2641a8fe26b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28f6de0b52d97560d2939b82c55c19ae65120cc21c10c863bdc11d5fccf257a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f6de0b52d97560d2939b82c55c19ae65120cc21c10c863bdc11d5fccf257a9->enter($__internal_28f6de0b52d97560d2939b82c55c19ae65120cc21c10c863bdc11d5fccf257a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_28f6de0b52d97560d2939b82c55c19ae65120cc21c10c863bdc11d5fccf257a9->leave($__internal_28f6de0b52d97560d2939b82c55c19ae65120cc21c10c863bdc11d5fccf257a9_prof);

        
        $__internal_76d7d99b6634d43a515ed356b7717fff57453d08ba74955fad6a2641a8fe26b2->leave($__internal_76d7d99b6634d43a515ed356b7717fff57453d08ba74955fad6a2641a8fe26b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff951e0b2c18511598de9394746a647ba472e684825a0f4f5af10e2cd80fcb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff951e0b2c18511598de9394746a647ba472e684825a0f4f5af10e2cd80fcb4c->enter($__internal_ff951e0b2c18511598de9394746a647ba472e684825a0f4f5af10e2cd80fcb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9386e83bae0c37f5421b1944d4bacc91a17dc615eafcb7154c06a992251ba365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9386e83bae0c37f5421b1944d4bacc91a17dc615eafcb7154c06a992251ba365->enter($__internal_9386e83bae0c37f5421b1944d4bacc91a17dc615eafcb7154c06a992251ba365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9386e83bae0c37f5421b1944d4bacc91a17dc615eafcb7154c06a992251ba365->leave($__internal_9386e83bae0c37f5421b1944d4bacc91a17dc615eafcb7154c06a992251ba365_prof);

        
        $__internal_ff951e0b2c18511598de9394746a647ba472e684825a0f4f5af10e2cd80fcb4c->leave($__internal_ff951e0b2c18511598de9394746a647ba472e684825a0f4f5af10e2cd80fcb4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94b297948fa13d37c2fd5e6faefd828d314486b147f1e2f995bac0ed06a62188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b297948fa13d37c2fd5e6faefd828d314486b147f1e2f995bac0ed06a62188->enter($__internal_94b297948fa13d37c2fd5e6faefd828d314486b147f1e2f995bac0ed06a62188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7866e439607e5d3a30321fabcaa67589ab94ef58ad9ca52c83de0afd2a4b6609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7866e439607e5d3a30321fabcaa67589ab94ef58ad9ca52c83de0afd2a4b6609->enter($__internal_7866e439607e5d3a30321fabcaa67589ab94ef58ad9ca52c83de0afd2a4b6609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7866e439607e5d3a30321fabcaa67589ab94ef58ad9ca52c83de0afd2a4b6609->leave($__internal_7866e439607e5d3a30321fabcaa67589ab94ef58ad9ca52c83de0afd2a4b6609_prof);

        
        $__internal_94b297948fa13d37c2fd5e6faefd828d314486b147f1e2f995bac0ed06a62188->leave($__internal_94b297948fa13d37c2fd5e6faefd828d314486b147f1e2f995bac0ed06a62188_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\Projects\\symfonyStart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
