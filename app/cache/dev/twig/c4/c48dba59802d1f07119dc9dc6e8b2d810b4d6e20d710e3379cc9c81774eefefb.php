<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59645b17a5afc5127e3f6608032c042bdbe537a5150275bb0b51fc9ca5a04263 extends Twig_Template
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
        $__internal_aa4812db1eb545c48c86b1348e4cdeb57564891851a38e38ec01b75914af37ac = $this->env->getExtension("native_profiler");
        $__internal_aa4812db1eb545c48c86b1348e4cdeb57564891851a38e38ec01b75914af37ac->enter($__internal_aa4812db1eb545c48c86b1348e4cdeb57564891851a38e38ec01b75914af37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4812db1eb545c48c86b1348e4cdeb57564891851a38e38ec01b75914af37ac->leave($__internal_aa4812db1eb545c48c86b1348e4cdeb57564891851a38e38ec01b75914af37ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba10d9a259c5a4e756dadeb5c63cfeef5558393457a353b53f4452ef2b574ba7 = $this->env->getExtension("native_profiler");
        $__internal_ba10d9a259c5a4e756dadeb5c63cfeef5558393457a353b53f4452ef2b574ba7->enter($__internal_ba10d9a259c5a4e756dadeb5c63cfeef5558393457a353b53f4452ef2b574ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba10d9a259c5a4e756dadeb5c63cfeef5558393457a353b53f4452ef2b574ba7->leave($__internal_ba10d9a259c5a4e756dadeb5c63cfeef5558393457a353b53f4452ef2b574ba7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83c79e89a99e374c27eb17927bb764e2118ca6a0347152931bae9144ee107ab3 = $this->env->getExtension("native_profiler");
        $__internal_83c79e89a99e374c27eb17927bb764e2118ca6a0347152931bae9144ee107ab3->enter($__internal_83c79e89a99e374c27eb17927bb764e2118ca6a0347152931bae9144ee107ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83c79e89a99e374c27eb17927bb764e2118ca6a0347152931bae9144ee107ab3->leave($__internal_83c79e89a99e374c27eb17927bb764e2118ca6a0347152931bae9144ee107ab3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba42c25f49bf7e1c489b657bbc17a8503ce011e9c88ee25a4709b10e0e73b87 = $this->env->getExtension("native_profiler");
        $__internal_8ba42c25f49bf7e1c489b657bbc17a8503ce011e9c88ee25a4709b10e0e73b87->enter($__internal_8ba42c25f49bf7e1c489b657bbc17a8503ce011e9c88ee25a4709b10e0e73b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8ba42c25f49bf7e1c489b657bbc17a8503ce011e9c88ee25a4709b10e0e73b87->leave($__internal_8ba42c25f49bf7e1c489b657bbc17a8503ce011e9c88ee25a4709b10e0e73b87_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
