<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_254e136869c29f719a4f55fa902c60c425426a0e4bd4e98c2b0689195eabd508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_098e44746b043222ee6725b4620be273e9a3e436b220408f49765e16c4011bc5 = $this->env->getExtension("native_profiler");
        $__internal_098e44746b043222ee6725b4620be273e9a3e436b220408f49765e16c4011bc5->enter($__internal_098e44746b043222ee6725b4620be273e9a3e436b220408f49765e16c4011bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098e44746b043222ee6725b4620be273e9a3e436b220408f49765e16c4011bc5->leave($__internal_098e44746b043222ee6725b4620be273e9a3e436b220408f49765e16c4011bc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e55e7681764a1a33ae51253276c4117c1ed7a85eca38ed4797cd23d2339d5b41 = $this->env->getExtension("native_profiler");
        $__internal_e55e7681764a1a33ae51253276c4117c1ed7a85eca38ed4797cd23d2339d5b41->enter($__internal_e55e7681764a1a33ae51253276c4117c1ed7a85eca38ed4797cd23d2339d5b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e55e7681764a1a33ae51253276c4117c1ed7a85eca38ed4797cd23d2339d5b41->leave($__internal_e55e7681764a1a33ae51253276c4117c1ed7a85eca38ed4797cd23d2339d5b41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f55f36d636c27957fab0586dd3d68c3e0ad86f68dcf73b531714602fc69c3c5 = $this->env->getExtension("native_profiler");
        $__internal_4f55f36d636c27957fab0586dd3d68c3e0ad86f68dcf73b531714602fc69c3c5->enter($__internal_4f55f36d636c27957fab0586dd3d68c3e0ad86f68dcf73b531714602fc69c3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f55f36d636c27957fab0586dd3d68c3e0ad86f68dcf73b531714602fc69c3c5->leave($__internal_4f55f36d636c27957fab0586dd3d68c3e0ad86f68dcf73b531714602fc69c3c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1536d87c9b70414c03f7aa59233102390fb3b63fbeee7aef805ac8e27143e66 = $this->env->getExtension("native_profiler");
        $__internal_e1536d87c9b70414c03f7aa59233102390fb3b63fbeee7aef805ac8e27143e66->enter($__internal_e1536d87c9b70414c03f7aa59233102390fb3b63fbeee7aef805ac8e27143e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1536d87c9b70414c03f7aa59233102390fb3b63fbeee7aef805ac8e27143e66->leave($__internal_e1536d87c9b70414c03f7aa59233102390fb3b63fbeee7aef805ac8e27143e66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
