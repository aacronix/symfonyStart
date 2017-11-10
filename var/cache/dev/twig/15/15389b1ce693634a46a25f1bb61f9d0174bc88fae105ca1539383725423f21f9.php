<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4039196a6bec64f3aae7b157104d8879d6e855bcdb63de6fbe439c524db3a2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_eb42b1989aeb698bb8f85df5e058e344388d8d708663d9e2a4944849d2f5417a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb42b1989aeb698bb8f85df5e058e344388d8d708663d9e2a4944849d2f5417a->enter($__internal_eb42b1989aeb698bb8f85df5e058e344388d8d708663d9e2a4944849d2f5417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6047f2fb7886c58f4323ce4075c4643c194f67e178d6e84d389035ecd015c034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6047f2fb7886c58f4323ce4075c4643c194f67e178d6e84d389035ecd015c034->enter($__internal_6047f2fb7886c58f4323ce4075c4643c194f67e178d6e84d389035ecd015c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb42b1989aeb698bb8f85df5e058e344388d8d708663d9e2a4944849d2f5417a->leave($__internal_eb42b1989aeb698bb8f85df5e058e344388d8d708663d9e2a4944849d2f5417a_prof);

        
        $__internal_6047f2fb7886c58f4323ce4075c4643c194f67e178d6e84d389035ecd015c034->leave($__internal_6047f2fb7886c58f4323ce4075c4643c194f67e178d6e84d389035ecd015c034_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd05e0f1ab925495614539b6577978147c47c72fe51d4378638fe2f8ec8cc936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd05e0f1ab925495614539b6577978147c47c72fe51d4378638fe2f8ec8cc936->enter($__internal_dd05e0f1ab925495614539b6577978147c47c72fe51d4378638fe2f8ec8cc936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8817029e968ee2e7081155eab2624dbd3007e774cb94547e54efe63cabb7ab76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8817029e968ee2e7081155eab2624dbd3007e774cb94547e54efe63cabb7ab76->enter($__internal_8817029e968ee2e7081155eab2624dbd3007e774cb94547e54efe63cabb7ab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8817029e968ee2e7081155eab2624dbd3007e774cb94547e54efe63cabb7ab76->leave($__internal_8817029e968ee2e7081155eab2624dbd3007e774cb94547e54efe63cabb7ab76_prof);

        
        $__internal_dd05e0f1ab925495614539b6577978147c47c72fe51d4378638fe2f8ec8cc936->leave($__internal_dd05e0f1ab925495614539b6577978147c47c72fe51d4378638fe2f8ec8cc936_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\Projects\\symfonyStart\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
