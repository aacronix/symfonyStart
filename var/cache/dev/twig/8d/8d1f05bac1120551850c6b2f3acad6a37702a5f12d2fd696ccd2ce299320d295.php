<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8428c53ac38435dc1105188d164e7b4b2e9fdbb88782e9815ba438bcf758a46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8428c53ac38435dc1105188d164e7b4b2e9fdbb88782e9815ba438bcf758a46e->enter($__internal_8428c53ac38435dc1105188d164e7b4b2e9fdbb88782e9815ba438bcf758a46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_464a770055599c2718e293a5ab3603b1ece5495a094e1d5bb472bc7511016a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464a770055599c2718e293a5ab3603b1ece5495a094e1d5bb472bc7511016a0e->enter($__internal_464a770055599c2718e293a5ab3603b1ece5495a094e1d5bb472bc7511016a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8428c53ac38435dc1105188d164e7b4b2e9fdbb88782e9815ba438bcf758a46e->leave($__internal_8428c53ac38435dc1105188d164e7b4b2e9fdbb88782e9815ba438bcf758a46e_prof);

        
        $__internal_464a770055599c2718e293a5ab3603b1ece5495a094e1d5bb472bc7511016a0e->leave($__internal_464a770055599c2718e293a5ab3603b1ece5495a094e1d5bb472bc7511016a0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0ecf59271972b7b1e98c8b3d606d869bf3796a1183eb87eb0a05bd1cfba7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0ecf59271972b7b1e98c8b3d606d869bf3796a1183eb87eb0a05bd1cfba7cb->enter($__internal_1b0ecf59271972b7b1e98c8b3d606d869bf3796a1183eb87eb0a05bd1cfba7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d00f2b45585721c238eff7a3e20261969c8e20fb895143460c7e685b94e22ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00f2b45585721c238eff7a3e20261969c8e20fb895143460c7e685b94e22ec5->enter($__internal_d00f2b45585721c238eff7a3e20261969c8e20fb895143460c7e685b94e22ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d00f2b45585721c238eff7a3e20261969c8e20fb895143460c7e685b94e22ec5->leave($__internal_d00f2b45585721c238eff7a3e20261969c8e20fb895143460c7e685b94e22ec5_prof);

        
        $__internal_1b0ecf59271972b7b1e98c8b3d606d869bf3796a1183eb87eb0a05bd1cfba7cb->leave($__internal_1b0ecf59271972b7b1e98c8b3d606d869bf3796a1183eb87eb0a05bd1cfba7cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_094cf0218f9883cf23857ecff4f83ceb9f022d050629e1ecf6dbdc7b5633e3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094cf0218f9883cf23857ecff4f83ceb9f022d050629e1ecf6dbdc7b5633e3e3->enter($__internal_094cf0218f9883cf23857ecff4f83ceb9f022d050629e1ecf6dbdc7b5633e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_476bcb59f339442162bc03dcd71cde210896e24007727e8ac2db1505a3054328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476bcb59f339442162bc03dcd71cde210896e24007727e8ac2db1505a3054328->enter($__internal_476bcb59f339442162bc03dcd71cde210896e24007727e8ac2db1505a3054328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_476bcb59f339442162bc03dcd71cde210896e24007727e8ac2db1505a3054328->leave($__internal_476bcb59f339442162bc03dcd71cde210896e24007727e8ac2db1505a3054328_prof);

        
        $__internal_094cf0218f9883cf23857ecff4f83ceb9f022d050629e1ecf6dbdc7b5633e3e3->leave($__internal_094cf0218f9883cf23857ecff4f83ceb9f022d050629e1ecf6dbdc7b5633e3e3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_21987f4386117cbcbe2782773fa87b8bca0c7edbea1bd654ea4e8f46496ad955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21987f4386117cbcbe2782773fa87b8bca0c7edbea1bd654ea4e8f46496ad955->enter($__internal_21987f4386117cbcbe2782773fa87b8bca0c7edbea1bd654ea4e8f46496ad955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1779656980e025ced9c5dc11996bb67f856ae906ee24095cf82aa1a877f7a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1779656980e025ced9c5dc11996bb67f856ae906ee24095cf82aa1a877f7a30->enter($__internal_e1779656980e025ced9c5dc11996bb67f856ae906ee24095cf82aa1a877f7a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1779656980e025ced9c5dc11996bb67f856ae906ee24095cf82aa1a877f7a30->leave($__internal_e1779656980e025ced9c5dc11996bb67f856ae906ee24095cf82aa1a877f7a30_prof);

        
        $__internal_21987f4386117cbcbe2782773fa87b8bca0c7edbea1bd654ea4e8f46496ad955->leave($__internal_21987f4386117cbcbe2782773fa87b8bca0c7edbea1bd654ea4e8f46496ad955_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68deb53cc9a8d5698aa5071040cc6ce4f319e21c5d583d76f3bb5461c7ac099a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68deb53cc9a8d5698aa5071040cc6ce4f319e21c5d583d76f3bb5461c7ac099a->enter($__internal_68deb53cc9a8d5698aa5071040cc6ce4f319e21c5d583d76f3bb5461c7ac099a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b1104659250067eca64ae3b80f7acb9b3f004efc0af66e2457a55b3a5405c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1104659250067eca64ae3b80f7acb9b3f004efc0af66e2457a55b3a5405c0c->enter($__internal_6b1104659250067eca64ae3b80f7acb9b3f004efc0af66e2457a55b3a5405c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b1104659250067eca64ae3b80f7acb9b3f004efc0af66e2457a55b3a5405c0c->leave($__internal_6b1104659250067eca64ae3b80f7acb9b3f004efc0af66e2457a55b3a5405c0c_prof);

        
        $__internal_68deb53cc9a8d5698aa5071040cc6ce4f319e21c5d583d76f3bb5461c7ac099a->leave($__internal_68deb53cc9a8d5698aa5071040cc6ce4f319e21c5d583d76f3bb5461c7ac099a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\Projects\\symfonyStart\\app\\Resources\\views\\base.html.twig");
    }
}
