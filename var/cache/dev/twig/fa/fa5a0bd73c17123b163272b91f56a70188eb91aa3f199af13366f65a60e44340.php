<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6911b48d6c57f30fc918801bc6d2c9159b4b7d081783f2265a4983f68b0bb452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_295e0b020452ea761da2a3bc4c4df45fcba0a5eaaa30769a7a260ab18a86fac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295e0b020452ea761da2a3bc4c4df45fcba0a5eaaa30769a7a260ab18a86fac2->enter($__internal_295e0b020452ea761da2a3bc4c4df45fcba0a5eaaa30769a7a260ab18a86fac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cf4f52100ac213f5fa73a5275a855c860730c15353d99f797c8e05b202013b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4f52100ac213f5fa73a5275a855c860730c15353d99f797c8e05b202013b4e->enter($__internal_cf4f52100ac213f5fa73a5275a855c860730c15353d99f797c8e05b202013b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_295e0b020452ea761da2a3bc4c4df45fcba0a5eaaa30769a7a260ab18a86fac2->leave($__internal_295e0b020452ea761da2a3bc4c4df45fcba0a5eaaa30769a7a260ab18a86fac2_prof);

        
        $__internal_cf4f52100ac213f5fa73a5275a855c860730c15353d99f797c8e05b202013b4e->leave($__internal_cf4f52100ac213f5fa73a5275a855c860730c15353d99f797c8e05b202013b4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e19ebd95aae4a328ffff75ecd9a8e8ce8e9f29614647f336906bc9257178647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e19ebd95aae4a328ffff75ecd9a8e8ce8e9f29614647f336906bc9257178647->enter($__internal_3e19ebd95aae4a328ffff75ecd9a8e8ce8e9f29614647f336906bc9257178647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c90fdb0c23acd4df5a959e19a4868e7de1108868825a795daa773da52f40636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c90fdb0c23acd4df5a959e19a4868e7de1108868825a795daa773da52f40636->enter($__internal_2c90fdb0c23acd4df5a959e19a4868e7de1108868825a795daa773da52f40636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2c90fdb0c23acd4df5a959e19a4868e7de1108868825a795daa773da52f40636->leave($__internal_2c90fdb0c23acd4df5a959e19a4868e7de1108868825a795daa773da52f40636_prof);

        
        $__internal_3e19ebd95aae4a328ffff75ecd9a8e8ce8e9f29614647f336906bc9257178647->leave($__internal_3e19ebd95aae4a328ffff75ecd9a8e8ce8e9f29614647f336906bc9257178647_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\Projects\\symfonyStart\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
