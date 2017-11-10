<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_eb79baf7d138e644d7b5ab3f471f074a818ff65f41efff4bf5e2f6f1ca9f55be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_892fff274a76a614c3bcb37cc7077587664a48b3c9807b91a0bde5fddd2dc01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892fff274a76a614c3bcb37cc7077587664a48b3c9807b91a0bde5fddd2dc01f->enter($__internal_892fff274a76a614c3bcb37cc7077587664a48b3c9807b91a0bde5fddd2dc01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_a84fb8cf63719480383904e1668ac5787e5328c085462a2de66175aec6c3526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84fb8cf63719480383904e1668ac5787e5328c085462a2de66175aec6c3526b->enter($__internal_a84fb8cf63719480383904e1668ac5787e5328c085462a2de66175aec6c3526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_892fff274a76a614c3bcb37cc7077587664a48b3c9807b91a0bde5fddd2dc01f->leave($__internal_892fff274a76a614c3bcb37cc7077587664a48b3c9807b91a0bde5fddd2dc01f_prof);

        
        $__internal_a84fb8cf63719480383904e1668ac5787e5328c085462a2de66175aec6c3526b->leave($__internal_a84fb8cf63719480383904e1668ac5787e5328c085462a2de66175aec6c3526b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5458267c6079d01acefac444b613a497e489531896151a1d5b829f609a1cebf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5458267c6079d01acefac444b613a497e489531896151a1d5b829f609a1cebf3->enter($__internal_5458267c6079d01acefac444b613a497e489531896151a1d5b829f609a1cebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9f079448f2de55e311fc0b2f1adbcc62e22909c9836085fbd9e5feef9bbec54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f079448f2de55e311fc0b2f1adbcc62e22909c9836085fbd9e5feef9bbec54->enter($__internal_b9f079448f2de55e311fc0b2f1adbcc62e22909c9836085fbd9e5feef9bbec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b9f079448f2de55e311fc0b2f1adbcc62e22909c9836085fbd9e5feef9bbec54->leave($__internal_b9f079448f2de55e311fc0b2f1adbcc62e22909c9836085fbd9e5feef9bbec54_prof);

        
        $__internal_5458267c6079d01acefac444b613a497e489531896151a1d5b829f609a1cebf3->leave($__internal_5458267c6079d01acefac444b613a497e489531896151a1d5b829f609a1cebf3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\Projects\\symfonyStart\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
