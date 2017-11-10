<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5c64798516c1e831dcf0fa8083fe812f4716ff09bddb42a777d9869d656888dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed81b7169271c946e06a28e1f049bb73aa727e6ff06cc29ed3415fbf3a5800b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed81b7169271c946e06a28e1f049bb73aa727e6ff06cc29ed3415fbf3a5800b->enter($__internal_9ed81b7169271c946e06a28e1f049bb73aa727e6ff06cc29ed3415fbf3a5800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_007af2ea2739d29ee0e2a64619a595fd5d231e9f08d5670c635fdb14bad9a5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007af2ea2739d29ee0e2a64619a595fd5d231e9f08d5670c635fdb14bad9a5e5->enter($__internal_007af2ea2739d29ee0e2a64619a595fd5d231e9f08d5670c635fdb14bad9a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed81b7169271c946e06a28e1f049bb73aa727e6ff06cc29ed3415fbf3a5800b->leave($__internal_9ed81b7169271c946e06a28e1f049bb73aa727e6ff06cc29ed3415fbf3a5800b_prof);

        
        $__internal_007af2ea2739d29ee0e2a64619a595fd5d231e9f08d5670c635fdb14bad9a5e5->leave($__internal_007af2ea2739d29ee0e2a64619a595fd5d231e9f08d5670c635fdb14bad9a5e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19cfebdb0fa10221773540fc90fd0aefef3f9280a81cd027566fdb64f663b61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19cfebdb0fa10221773540fc90fd0aefef3f9280a81cd027566fdb64f663b61d->enter($__internal_19cfebdb0fa10221773540fc90fd0aefef3f9280a81cd027566fdb64f663b61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18b16bc470300ffae9128fc9e52dd938156969a728cd44b9169c11bb22fa9552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b16bc470300ffae9128fc9e52dd938156969a728cd44b9169c11bb22fa9552->enter($__internal_18b16bc470300ffae9128fc9e52dd938156969a728cd44b9169c11bb22fa9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_18b16bc470300ffae9128fc9e52dd938156969a728cd44b9169c11bb22fa9552->leave($__internal_18b16bc470300ffae9128fc9e52dd938156969a728cd44b9169c11bb22fa9552_prof);

        
        $__internal_19cfebdb0fa10221773540fc90fd0aefef3f9280a81cd027566fdb64f663b61d->leave($__internal_19cfebdb0fa10221773540fc90fd0aefef3f9280a81cd027566fdb64f663b61d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4451c5e730d3c224caf5f47e8a1b8f714fc92870dc6d689682836135e7f3c2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4451c5e730d3c224caf5f47e8a1b8f714fc92870dc6d689682836135e7f3c2be->enter($__internal_4451c5e730d3c224caf5f47e8a1b8f714fc92870dc6d689682836135e7f3c2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f91cbd17959b96ebb0bbeec24f524f502d7ad03742a8f87930308710ff81473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f91cbd17959b96ebb0bbeec24f524f502d7ad03742a8f87930308710ff81473->enter($__internal_3f91cbd17959b96ebb0bbeec24f524f502d7ad03742a8f87930308710ff81473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User information: ";
        
        $__internal_3f91cbd17959b96ebb0bbeec24f524f502d7ad03742a8f87930308710ff81473->leave($__internal_3f91cbd17959b96ebb0bbeec24f524f502d7ad03742a8f87930308710ff81473_prof);

        
        $__internal_4451c5e730d3c224caf5f47e8a1b8f714fc92870dc6d689682836135e7f3c2be->leave($__internal_4451c5e730d3c224caf5f47e8a1b8f714fc92870dc6d689682836135e7f3c2be_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1951b31fdd59442ee8fdef5aa2012a9525d0b0d9e8eb95cb004bc743bf04e476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1951b31fdd59442ee8fdef5aa2012a9525d0b0d9e8eb95cb004bc743bf04e476->enter($__internal_1951b31fdd59442ee8fdef5aa2012a9525d0b0d9e8eb95cb004bc743bf04e476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7a0dbc60b06fdf9bc0618f8162a1fe95f184d58c2d27b540ffdf6027e12b85e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0dbc60b06fdf9bc0618f8162a1fe95f184d58c2d27b540ffdf6027e12b85e1->enter($__internal_7a0dbc60b06fdf9bc0618f8162a1fe95f184d58c2d27b540ffdf6027e12b85e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 8)->display($context);
        
        $__internal_7a0dbc60b06fdf9bc0618f8162a1fe95f184d58c2d27b540ffdf6027e12b85e1->leave($__internal_7a0dbc60b06fdf9bc0618f8162a1fe95f184d58c2d27b540ffdf6027e12b85e1_prof);

        
        $__internal_1951b31fdd59442ee8fdef5aa2012a9525d0b0d9e8eb95cb004bc743bf04e476->leave($__internal_1951b31fdd59442ee8fdef5aa2012a9525d0b0d9e8eb95cb004bc743bf04e476_prof);

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
        return array (  99 => 8,  90 => 7,  72 => 5,  61 => 10,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% block title %}User information: {% endblock %}

{% block fos_user_content %}
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}

{% endblock %}", "@FOSUser/Profile/show.html.twig", "D:\\Projects\\symfonyStart\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
