<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a55edc184c6d031851ff0a1805b65de624c5c584dbcffafe75f7975002f70870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4930aaf5f0caedcd9b4e0e60bf6f264c6af8ef44d8fe146111a22c35a9ead302 = $this->env->getExtension("native_profiler");
        $__internal_4930aaf5f0caedcd9b4e0e60bf6f264c6af8ef44d8fe146111a22c35a9ead302->enter($__internal_4930aaf5f0caedcd9b4e0e60bf6f264c6af8ef44d8fe146111a22c35a9ead302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4930aaf5f0caedcd9b4e0e60bf6f264c6af8ef44d8fe146111a22c35a9ead302->leave($__internal_4930aaf5f0caedcd9b4e0e60bf6f264c6af8ef44d8fe146111a22c35a9ead302_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b93090b888115f293d1f4d35501bec6761dae28ccd5f24c51f982c4813ce0f42 = $this->env->getExtension("native_profiler");
        $__internal_b93090b888115f293d1f4d35501bec6761dae28ccd5f24c51f982c4813ce0f42->enter($__internal_b93090b888115f293d1f4d35501bec6761dae28ccd5f24c51f982c4813ce0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b93090b888115f293d1f4d35501bec6761dae28ccd5f24c51f982c4813ce0f42->leave($__internal_b93090b888115f293d1f4d35501bec6761dae28ccd5f24c51f982c4813ce0f42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
