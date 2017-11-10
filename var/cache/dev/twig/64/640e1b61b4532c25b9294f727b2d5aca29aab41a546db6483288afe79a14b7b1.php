<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_6707b8326a4bd16f24bca8bb63fbd35d041df08f155c66914d9b872a0b479421 extends Twig_Template
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
        $__internal_ca2803576b3cd06f37d1ad01226cea502e136dfa0c0207f7d66114fa4dfb11c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2803576b3cd06f37d1ad01226cea502e136dfa0c0207f7d66114fa4dfb11c6->enter($__internal_ca2803576b3cd06f37d1ad01226cea502e136dfa0c0207f7d66114fa4dfb11c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_309d0dc287bb6d4427a3e2ff75b2c52dcd3dddbfc4e2ef20ad70d8cdb1933c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309d0dc287bb6d4427a3e2ff75b2c52dcd3dddbfc4e2ef20ad70d8cdb1933c18->enter($__internal_309d0dc287bb6d4427a3e2ff75b2c52dcd3dddbfc4e2ef20ad70d8cdb1933c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ca2803576b3cd06f37d1ad01226cea502e136dfa0c0207f7d66114fa4dfb11c6->leave($__internal_ca2803576b3cd06f37d1ad01226cea502e136dfa0c0207f7d66114fa4dfb11c6_prof);

        
        $__internal_309d0dc287bb6d4427a3e2ff75b2c52dcd3dddbfc4e2ef20ad70d8cdb1933c18->leave($__internal_309d0dc287bb6d4427a3e2ff75b2c52dcd3dddbfc4e2ef20ad70d8cdb1933c18_prof);

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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "D:\\Projects\\symfonyStart\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
