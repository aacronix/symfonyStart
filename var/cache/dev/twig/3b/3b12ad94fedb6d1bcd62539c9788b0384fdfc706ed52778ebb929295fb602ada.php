<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c4a513bb2af9cb542817223586b1cd846e3b1aa3435665b46295b85228df03eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8de2c847bc9252d042663ac90ed27015a467c604c2c8f4c3a1e2fa8d2be8676b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de2c847bc9252d042663ac90ed27015a467c604c2c8f4c3a1e2fa8d2be8676b->enter($__internal_8de2c847bc9252d042663ac90ed27015a467c604c2c8f4c3a1e2fa8d2be8676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_4af03ecc7a53b5e8d07a42972ece7faa908de49577f23298a113378448016b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af03ecc7a53b5e8d07a42972ece7faa908de49577f23298a113378448016b2b->enter($__internal_4af03ecc7a53b5e8d07a42972ece7faa908de49577f23298a113378448016b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de2c847bc9252d042663ac90ed27015a467c604c2c8f4c3a1e2fa8d2be8676b->leave($__internal_8de2c847bc9252d042663ac90ed27015a467c604c2c8f4c3a1e2fa8d2be8676b_prof);

        
        $__internal_4af03ecc7a53b5e8d07a42972ece7faa908de49577f23298a113378448016b2b->leave($__internal_4af03ecc7a53b5e8d07a42972ece7faa908de49577f23298a113378448016b2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03f7cb8ea673a7a6f4d929f86af1529d9c6555c17b394234f379b071ec1c09eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f7cb8ea673a7a6f4d929f86af1529d9c6555c17b394234f379b071ec1c09eb->enter($__internal_03f7cb8ea673a7a6f4d929f86af1529d9c6555c17b394234f379b071ec1c09eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0cb947efaa84463a768af3661d2855556c9233ec3d356ff51b4180dcf756f48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb947efaa84463a768af3661d2855556c9233ec3d356ff51b4180dcf756f48b->enter($__internal_0cb947efaa84463a768af3661d2855556c9233ec3d356ff51b4180dcf756f48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0cb947efaa84463a768af3661d2855556c9233ec3d356ff51b4180dcf756f48b->leave($__internal_0cb947efaa84463a768af3661d2855556c9233ec3d356ff51b4180dcf756f48b_prof);

        
        $__internal_03f7cb8ea673a7a6f4d929f86af1529d9c6555c17b394234f379b071ec1c09eb->leave($__internal_03f7cb8ea673a7a6f4d929f86af1529d9c6555c17b394234f379b071ec1c09eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\Projects\\symfonyStart\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
