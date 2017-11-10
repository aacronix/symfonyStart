<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fa5c9c354d2ba3996bc34bbb16743a20b12dca171759e3320608b33f7d51e74a extends Twig_Template
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
        $__internal_90c926c92ad74d13801a58c569eb3f7061fe046b0d6c4cd3f9b80b7505d8bb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c926c92ad74d13801a58c569eb3f7061fe046b0d6c4cd3f9b80b7505d8bb62->enter($__internal_90c926c92ad74d13801a58c569eb3f7061fe046b0d6c4cd3f9b80b7505d8bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_84abce29fb8d19178e37d81fbacefca1b7eb1a01b3d6b5b2d57e95383a0a1f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84abce29fb8d19178e37d81fbacefca1b7eb1a01b3d6b5b2d57e95383a0a1f15->enter($__internal_84abce29fb8d19178e37d81fbacefca1b7eb1a01b3d6b5b2d57e95383a0a1f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c926c92ad74d13801a58c569eb3f7061fe046b0d6c4cd3f9b80b7505d8bb62->leave($__internal_90c926c92ad74d13801a58c569eb3f7061fe046b0d6c4cd3f9b80b7505d8bb62_prof);

        
        $__internal_84abce29fb8d19178e37d81fbacefca1b7eb1a01b3d6b5b2d57e95383a0a1f15->leave($__internal_84abce29fb8d19178e37d81fbacefca1b7eb1a01b3d6b5b2d57e95383a0a1f15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44885f8e4dc3b800258a67ef2a22b22cbcd77b32715f38989c97a8615de5a73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44885f8e4dc3b800258a67ef2a22b22cbcd77b32715f38989c97a8615de5a73b->enter($__internal_44885f8e4dc3b800258a67ef2a22b22cbcd77b32715f38989c97a8615de5a73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c0b6a73de7c472d2a626230e01f914c08adbe3253ae43a22a2e9d2f7a9a7f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0b6a73de7c472d2a626230e01f914c08adbe3253ae43a22a2e9d2f7a9a7f09->enter($__internal_2c0b6a73de7c472d2a626230e01f914c08adbe3253ae43a22a2e9d2f7a9a7f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2c0b6a73de7c472d2a626230e01f914c08adbe3253ae43a22a2e9d2f7a9a7f09->leave($__internal_2c0b6a73de7c472d2a626230e01f914c08adbe3253ae43a22a2e9d2f7a9a7f09_prof);

        
        $__internal_44885f8e4dc3b800258a67ef2a22b22cbcd77b32715f38989c97a8615de5a73b->leave($__internal_44885f8e4dc3b800258a67ef2a22b22cbcd77b32715f38989c97a8615de5a73b_prof);

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
", "@FOSUser/Security/login.html.twig", "D:\\Projects\\symfonyStart\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
