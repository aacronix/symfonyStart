<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d9a367aa79b77b30d8412ec2d613864eddeb321e3764c333d7e712bc5f0a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d9a367aa79b77b30d8412ec2d613864eddeb321e3764c333d7e712bc5f0a46->enter($__internal_e2d9a367aa79b77b30d8412ec2d613864eddeb321e3764c333d7e712bc5f0a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e173df5aba8cadf2828bedd4852fe703213e8441cf1dd268e70bf70601e695aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e173df5aba8cadf2828bedd4852fe703213e8441cf1dd268e70bf70601e695aa->enter($__internal_e173df5aba8cadf2828bedd4852fe703213e8441cf1dd268e70bf70601e695aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d9a367aa79b77b30d8412ec2d613864eddeb321e3764c333d7e712bc5f0a46->leave($__internal_e2d9a367aa79b77b30d8412ec2d613864eddeb321e3764c333d7e712bc5f0a46_prof);

        
        $__internal_e173df5aba8cadf2828bedd4852fe703213e8441cf1dd268e70bf70601e695aa->leave($__internal_e173df5aba8cadf2828bedd4852fe703213e8441cf1dd268e70bf70601e695aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd787f76852a369cf9dc4f94bcb5fdce7499aa598e340190f4f07f9873b4a5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd787f76852a369cf9dc4f94bcb5fdce7499aa598e340190f4f07f9873b4a5df->enter($__internal_bd787f76852a369cf9dc4f94bcb5fdce7499aa598e340190f4f07f9873b4a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2b37566f90f3f08ad57dc8558c0c89b052d9698b9b63d2aff82bdfb7ac82fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b37566f90f3f08ad57dc8558c0c89b052d9698b9b63d2aff82bdfb7ac82fa7->enter($__internal_f2b37566f90f3f08ad57dc8558c0c89b052d9698b9b63d2aff82bdfb7ac82fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f2b37566f90f3f08ad57dc8558c0c89b052d9698b9b63d2aff82bdfb7ac82fa7->leave($__internal_f2b37566f90f3f08ad57dc8558c0c89b052d9698b9b63d2aff82bdfb7ac82fa7_prof);

        
        $__internal_bd787f76852a369cf9dc4f94bcb5fdce7499aa598e340190f4f07f9873b4a5df->leave($__internal_bd787f76852a369cf9dc4f94bcb5fdce7499aa598e340190f4f07f9873b4a5df_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c5aba09c01a775cfe5e80e5132f45d7ae8e6c509a44591e3cbeaf87b931e2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5aba09c01a775cfe5e80e5132f45d7ae8e6c509a44591e3cbeaf87b931e2cb->enter($__internal_6c5aba09c01a775cfe5e80e5132f45d7ae8e6c509a44591e3cbeaf87b931e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_998d0cf6419623d8e164fb7e77aeffadf0f85b1c78ce222e808843c1c0abbff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998d0cf6419623d8e164fb7e77aeffadf0f85b1c78ce222e808843c1c0abbff5->enter($__internal_998d0cf6419623d8e164fb7e77aeffadf0f85b1c78ce222e808843c1c0abbff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_998d0cf6419623d8e164fb7e77aeffadf0f85b1c78ce222e808843c1c0abbff5->leave($__internal_998d0cf6419623d8e164fb7e77aeffadf0f85b1c78ce222e808843c1c0abbff5_prof);

        
        $__internal_6c5aba09c01a775cfe5e80e5132f45d7ae8e6c509a44591e3cbeaf87b931e2cb->leave($__internal_6c5aba09c01a775cfe5e80e5132f45d7ae8e6c509a44591e3cbeaf87b931e2cb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a8feefc366e41763007d773e93a869f5d6a30ec528cc91ccd17869e56588920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8feefc366e41763007d773e93a869f5d6a30ec528cc91ccd17869e56588920->enter($__internal_7a8feefc366e41763007d773e93a869f5d6a30ec528cc91ccd17869e56588920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_071a5f48e2dbd8996f46b660052c00430570ff47799a505e1a2412d786ffe514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071a5f48e2dbd8996f46b660052c00430570ff47799a505e1a2412d786ffe514->enter($__internal_071a5f48e2dbd8996f46b660052c00430570ff47799a505e1a2412d786ffe514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_071a5f48e2dbd8996f46b660052c00430570ff47799a505e1a2412d786ffe514->leave($__internal_071a5f48e2dbd8996f46b660052c00430570ff47799a505e1a2412d786ffe514_prof);

        
        $__internal_7a8feefc366e41763007d773e93a869f5d6a30ec528cc91ccd17869e56588920->leave($__internal_7a8feefc366e41763007d773e93a869f5d6a30ec528cc91ccd17869e56588920_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\Projects\\symfonyStart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
