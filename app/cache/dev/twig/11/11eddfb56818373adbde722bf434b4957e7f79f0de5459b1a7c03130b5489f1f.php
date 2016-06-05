<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_14a23c8b5fc8af318485fe3d36c3b92498aa53b0b3dc2fc0e59daa046abcdee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::frame.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::frame.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b144c4ce3607a959d80e00a0d09c740de3b01052856915c518207e9914c774f6 = $this->env->getExtension("native_profiler");
        $__internal_b144c4ce3607a959d80e00a0d09c740de3b01052856915c518207e9914c774f6->enter($__internal_b144c4ce3607a959d80e00a0d09c740de3b01052856915c518207e9914c774f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b144c4ce3607a959d80e00a0d09c740de3b01052856915c518207e9914c774f6->leave($__internal_b144c4ce3607a959d80e00a0d09c740de3b01052856915c518207e9914c774f6_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_8d05a5171a83a8be14084249d4956bbdd5da137beae565b5973fbf6dc310f533 = $this->env->getExtension("native_profiler");
        $__internal_8d05a5171a83a8be14084249d4956bbdd5da137beae565b5973fbf6dc310f533->enter($__internal_8d05a5171a83a8be14084249d4956bbdd5da137beae565b5973fbf6dc310f533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8d05a5171a83a8be14084249d4956bbdd5da137beae565b5973fbf6dc310f533->leave($__internal_8d05a5171a83a8be14084249d4956bbdd5da137beae565b5973fbf6dc310f533_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::frame.html.twig" %}*/
/* */
/* {% block login %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock login %}*/
/* */
