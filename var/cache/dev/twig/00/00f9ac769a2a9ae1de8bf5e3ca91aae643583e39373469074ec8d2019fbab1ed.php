<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c079cda0d21e42a6d01d50a6ace8db0d19f2d9f7583d1d1d53608fdfff26c6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c079cda0d21e42a6d01d50a6ace8db0d19f2d9f7583d1d1d53608fdfff26c6e9->enter($__internal_c079cda0d21e42a6d01d50a6ace8db0d19f2d9f7583d1d1d53608fdfff26c6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_26909317b196c48ea587b93994171241f1e3dd1f6a0f87cc06c0e42eb247c51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26909317b196c48ea587b93994171241f1e3dd1f6a0f87cc06c0e42eb247c51d->enter($__internal_26909317b196c48ea587b93994171241f1e3dd1f6a0f87cc06c0e42eb247c51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c079cda0d21e42a6d01d50a6ace8db0d19f2d9f7583d1d1d53608fdfff26c6e9->leave($__internal_c079cda0d21e42a6d01d50a6ace8db0d19f2d9f7583d1d1d53608fdfff26c6e9_prof);

        
        $__internal_26909317b196c48ea587b93994171241f1e3dd1f6a0f87cc06c0e42eb247c51d->leave($__internal_26909317b196c48ea587b93994171241f1e3dd1f6a0f87cc06c0e42eb247c51d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb7e38ba6f0b6a336966c73864a0ce928a681600d290c3cb7517ccf365b03efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7e38ba6f0b6a336966c73864a0ce928a681600d290c3cb7517ccf365b03efe->enter($__internal_eb7e38ba6f0b6a336966c73864a0ce928a681600d290c3cb7517ccf365b03efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74280756c0331249263518b87bf0aed6a7dd311e6bf08cf1b2abb6ae15354d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74280756c0331249263518b87bf0aed6a7dd311e6bf08cf1b2abb6ae15354d95->enter($__internal_74280756c0331249263518b87bf0aed6a7dd311e6bf08cf1b2abb6ae15354d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_74280756c0331249263518b87bf0aed6a7dd311e6bf08cf1b2abb6ae15354d95->leave($__internal_74280756c0331249263518b87bf0aed6a7dd311e6bf08cf1b2abb6ae15354d95_prof);

        
        $__internal_eb7e38ba6f0b6a336966c73864a0ce928a681600d290c3cb7517ccf365b03efe->leave($__internal_eb7e38ba6f0b6a336966c73864a0ce928a681600d290c3cb7517ccf365b03efe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_92d4a4d693cf0880c0fc01e0b14424bd98f43b4abb4a00c3ed0118bb7d570b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d4a4d693cf0880c0fc01e0b14424bd98f43b4abb4a00c3ed0118bb7d570b07->enter($__internal_92d4a4d693cf0880c0fc01e0b14424bd98f43b4abb4a00c3ed0118bb7d570b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77d63e2cb3cf2e08a799fb5d5710a8bdebadc8e4345dd84bee2d6099cb1b36c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d63e2cb3cf2e08a799fb5d5710a8bdebadc8e4345dd84bee2d6099cb1b36c9->enter($__internal_77d63e2cb3cf2e08a799fb5d5710a8bdebadc8e4345dd84bee2d6099cb1b36c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_77d63e2cb3cf2e08a799fb5d5710a8bdebadc8e4345dd84bee2d6099cb1b36c9->leave($__internal_77d63e2cb3cf2e08a799fb5d5710a8bdebadc8e4345dd84bee2d6099cb1b36c9_prof);

        
        $__internal_92d4a4d693cf0880c0fc01e0b14424bd98f43b4abb4a00c3ed0118bb7d570b07->leave($__internal_92d4a4d693cf0880c0fc01e0b14424bd98f43b4abb4a00c3ed0118bb7d570b07_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_618628e8aca451b129aa226f65dd3d9402de899f95ee1b9a6e0f00232d9ef5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618628e8aca451b129aa226f65dd3d9402de899f95ee1b9a6e0f00232d9ef5d1->enter($__internal_618628e8aca451b129aa226f65dd3d9402de899f95ee1b9a6e0f00232d9ef5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f0f872d324b1e44b423190cbd8760d54d5c1dab83245db33c801ecb94870d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0f872d324b1e44b423190cbd8760d54d5c1dab83245db33c801ecb94870d96->enter($__internal_5f0f872d324b1e44b423190cbd8760d54d5c1dab83245db33c801ecb94870d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f0f872d324b1e44b423190cbd8760d54d5c1dab83245db33c801ecb94870d96->leave($__internal_5f0f872d324b1e44b423190cbd8760d54d5c1dab83245db33c801ecb94870d96_prof);

        
        $__internal_618628e8aca451b129aa226f65dd3d9402de899f95ee1b9a6e0f00232d9ef5d1->leave($__internal_618628e8aca451b129aa226f65dd3d9402de899f95ee1b9a6e0f00232d9ef5d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\Projects\\symfonyStart\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
