<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_031a7c8ba808a1286f0ea06e957995a6d7eedffea5443331105762610d6cacb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b21201e6a09a3754499f7ba57362df33c2895a5fb9c3ad833fce184fb49ac39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21201e6a09a3754499f7ba57362df33c2895a5fb9c3ad833fce184fb49ac39f->enter($__internal_b21201e6a09a3754499f7ba57362df33c2895a5fb9c3ad833fce184fb49ac39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_b3e6772d3a27c0781b8644ef22a03a39118252b87ebb9bf5391f70146f4c0247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e6772d3a27c0781b8644ef22a03a39118252b87ebb9bf5391f70146f4c0247->enter($__internal_b3e6772d3a27c0781b8644ef22a03a39118252b87ebb9bf5391f70146f4c0247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"user\">
    <p class=\"user__name\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p class=\"user__email\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_b21201e6a09a3754499f7ba57362df33c2895a5fb9c3ad833fce184fb49ac39f->leave($__internal_b21201e6a09a3754499f7ba57362df33c2895a5fb9c3ad833fce184fb49ac39f_prof);

        
        $__internal_b3e6772d3a27c0781b8644ef22a03a39118252b87ebb9bf5391f70146f4c0247->leave($__internal_b3e6772d3a27c0781b8644ef22a03a39118252b87ebb9bf5391f70146f4c0247_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"user\">
    <p class=\"user__name\">{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p class=\"user__email\">{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>", "@FOSUser/Profile/show_content.html.twig", "D:\\Projects\\symfonyStart\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
