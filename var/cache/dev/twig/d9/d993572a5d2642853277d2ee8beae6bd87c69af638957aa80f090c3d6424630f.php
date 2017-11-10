<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_df2b720fdb02c544e7082d99731fd5535a53104bbfb24cfb053757048980720a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22db5861e90343837b48045e59dc53529642c7897c6bac1cf4dc746c91a29fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22db5861e90343837b48045e59dc53529642c7897c6bac1cf4dc746c91a29fea->enter($__internal_22db5861e90343837b48045e59dc53529642c7897c6bac1cf4dc746c91a29fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1a602549771a1b5e3417097e5ffe81817d15a4c5645ed35d493afb9337905a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a602549771a1b5e3417097e5ffe81817d15a4c5645ed35d493afb9337905a58->enter($__internal_1a602549771a1b5e3417097e5ffe81817d15a4c5645ed35d493afb9337905a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_22db5861e90343837b48045e59dc53529642c7897c6bac1cf4dc746c91a29fea->leave($__internal_22db5861e90343837b48045e59dc53529642c7897c6bac1cf4dc746c91a29fea_prof);

        
        $__internal_1a602549771a1b5e3417097e5ffe81817d15a4c5645ed35d493afb9337905a58->leave($__internal_1a602549771a1b5e3417097e5ffe81817d15a4c5645ed35d493afb9337905a58_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_005e882a7a3a49003f30b1a04f72aaef1b7a1033568529f8ff0d8919010115b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005e882a7a3a49003f30b1a04f72aaef1b7a1033568529f8ff0d8919010115b7->enter($__internal_005e882a7a3a49003f30b1a04f72aaef1b7a1033568529f8ff0d8919010115b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a8807ce48751500a941ebf90be9e25ae0a23beddbb54895f9f9d9672091edfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8807ce48751500a941ebf90be9e25ae0a23beddbb54895f9f9d9672091edfd->enter($__internal_7a8807ce48751500a941ebf90be9e25ae0a23beddbb54895f9f9d9672091edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_7a8807ce48751500a941ebf90be9e25ae0a23beddbb54895f9f9d9672091edfd->leave($__internal_7a8807ce48751500a941ebf90be9e25ae0a23beddbb54895f9f9d9672091edfd_prof);

        
        $__internal_005e882a7a3a49003f30b1a04f72aaef1b7a1033568529f8ff0d8919010115b7->leave($__internal_005e882a7a3a49003f30b1a04f72aaef1b7a1033568529f8ff0d8919010115b7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_94912bd1a51c0d779ad84be464477449681217c17715c0286d39c4f288e82556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94912bd1a51c0d779ad84be464477449681217c17715c0286d39c4f288e82556->enter($__internal_94912bd1a51c0d779ad84be464477449681217c17715c0286d39c4f288e82556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_81809238b5ff5e885aa66a2b4a028b886ada588570eef3eefc688267e2626e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81809238b5ff5e885aa66a2b4a028b886ada588570eef3eefc688267e2626e40->enter($__internal_81809238b5ff5e885aa66a2b4a028b886ada588570eef3eefc688267e2626e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_81809238b5ff5e885aa66a2b4a028b886ada588570eef3eefc688267e2626e40->leave($__internal_81809238b5ff5e885aa66a2b4a028b886ada588570eef3eefc688267e2626e40_prof);

        
        $__internal_94912bd1a51c0d779ad84be464477449681217c17715c0286d39c4f288e82556->leave($__internal_94912bd1a51c0d779ad84be464477449681217c17715c0286d39c4f288e82556_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c29757e76ee6205f5c6c40333dc3e074720d1ac557644367b639ef590e651a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c29757e76ee6205f5c6c40333dc3e074720d1ac557644367b639ef590e651a8->enter($__internal_2c29757e76ee6205f5c6c40333dc3e074720d1ac557644367b639ef590e651a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1ec073fad2a5b213f9140a3bb6c39f5f75395bee3655ff7d0df2bef94cf5726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ec073fad2a5b213f9140a3bb6c39f5f75395bee3655ff7d0df2bef94cf5726->enter($__internal_f1ec073fad2a5b213f9140a3bb6c39f5f75395bee3655ff7d0df2bef94cf5726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_f1ec073fad2a5b213f9140a3bb6c39f5f75395bee3655ff7d0df2bef94cf5726->leave($__internal_f1ec073fad2a5b213f9140a3bb6c39f5f75395bee3655ff7d0df2bef94cf5726_prof);

        
        $__internal_2c29757e76ee6205f5c6c40333dc3e074720d1ac557644367b639ef590e651a8->leave($__internal_2c29757e76ee6205f5c6c40333dc3e074720d1ac557644367b639ef590e651a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 4,  61 => 3,  43 => 1,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Demo Application{% endblock %}

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "D:\\Projects\\symfonyStart\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
