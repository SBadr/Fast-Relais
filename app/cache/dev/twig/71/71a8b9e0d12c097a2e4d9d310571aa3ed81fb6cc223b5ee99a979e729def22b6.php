<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2a50e5fb42d2dd7f115608dbaad40f5633d53ec7de696ca512943e55f5b7f13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::frame.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a0d5e19d2e58c8efd6053fa6a496e6ce404257cfddab7f8395575f9b4093fdf8 = $this->env->getExtension("native_profiler");
        $__internal_a0d5e19d2e58c8efd6053fa6a496e6ce404257cfddab7f8395575f9b4093fdf8->enter($__internal_a0d5e19d2e58c8efd6053fa6a496e6ce404257cfddab7f8395575f9b4093fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d5e19d2e58c8efd6053fa6a496e6ce404257cfddab7f8395575f9b4093fdf8->leave($__internal_a0d5e19d2e58c8efd6053fa6a496e6ce404257cfddab7f8395575f9b4093fdf8_prof);

    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
        $__internal_b7e9d384b3a126e353bca5f42e8cccd4ba30b2803e08dcf4f8d9ff67cb9977d0 = $this->env->getExtension("native_profiler");
        $__internal_b7e9d384b3a126e353bca5f42e8cccd4ba30b2803e08dcf4f8d9ff67cb9977d0->enter($__internal_b7e9d384b3a126e353bca5f42e8cccd4ba30b2803e08dcf4f8d9ff67cb9977d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 8
        echo "    
<div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "        </div>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "        
        
    ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 34
        echo "<div class=\"row listing-details-main\">
                <div class=\"m1170 pl-15 pr-15\" >
                        <div class=\"additional-filter col-md-6\" style=\"margin-left: 25%\">
                            <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div class=\"col-md-4 wordwrap\" style=\"margin-top: 15px\">
                                                                <span class=\"font13 uppercase color333\"><b>Adresse Email</b></span>
                                                        </div>
                                                        <div class=\"col-md-8 padding0\">
                                                                <div class=\"p-right0 wordwrap\">
                                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-1-style2 sign-login border1 borderf7 b-radius3\" placeholder=\"contact@email.com\" />
                                                                </div>\t
                                                </div>
                            <div class=\"col-md-4 wordwrap top20\" style=\"margin-top: 35px\">
                                                                <span class=\"font13 uppercase color333\"><b>Mot de passe</b></span>
                                                        </div>
                                                        <div class=\"col-md-8 padding0\">
                                                                <div class=\"top20 p-right0 wordwrap\">
                                                            <input class=\"form-1-style2 sign-password border1 borderf7 b-radius3\" placeholder=\"password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                                                                </div>\t\t
                                                        </div>
                                                <div class=\"filter-slider\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"checkbox checkbox-1 f-left top30\">
                                                                <input id=\"check6\" type=\"checkbox\" name=\"check\" value=\"check6\" checked id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                                                <label for=\"check6\" style=\"padding-left: 30px;\">Rester connecter</label>
                                                        </div>
                                                        </div>  
                                                        <div class=\"col-md-6 top30\">
                                                            <a>Mot de passe oublié ?</a>
                                                        </div>

                                                </div>
                                                <input type=\"submit\" id=\"_submit\" style=\"font-weight: bold;\" name=\"_submit\" value=\"Se Connecter\" class=\"update-listings-btn b-radius3\"/>
                            <i class=\"divider\" role=\"separator\"></i>
                            <a href=\"#\"><div class=\"update-listings-btn b-radius3\"><b>S'inscrire</b></div></a>
                            </form>
        </div>\t
    </div>    
    ";
        
        $__internal_b7e9d384b3a126e353bca5f42e8cccd4ba30b2803e08dcf4f8d9ff67cb9977d0->leave($__internal_b7e9d384b3a126e353bca5f42e8cccd4ba30b2803e08dcf4f8d9ff67cb9977d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  129 => 38,  125 => 37,  120 => 34,  114 => 32,  112 => 31,  108 => 29,  105 => 28,  99 => 27,  90 => 24,  85 => 23,  80 => 22,  75 => 21,  73 => 20,  69 => 18,  61 => 16,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  40 => 8,  34 => 7,  11 => 1,);
    }
}
/* {% extends "AppBundle::frame.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* {% block login %}*/
/*     */
/* <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         */
/*         */
/*     {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="row listing-details-main">*/
/*                 <div class="m1170 pl-15 pr-15" >*/
/*                         <div class="additional-filter col-md-6" style="margin-left: 25%">*/
/*                             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                             <div class="col-md-4 wordwrap" style="margin-top: 15px">*/
/*                                                                 <span class="font13 uppercase color333"><b>Adresse Email</b></span>*/
/*                                                         </div>*/
/*                                                         <div class="col-md-8 padding0">*/
/*                                                                 <div class="p-right0 wordwrap">*/
/*                                                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-1-style2 sign-login border1 borderf7 b-radius3" placeholder="contact@email.com" />*/
/*                                                                 </div>	*/
/*                                                 </div>*/
/*                             <div class="col-md-4 wordwrap top20" style="margin-top: 35px">*/
/*                                                                 <span class="font13 uppercase color333"><b>Mot de passe</b></span>*/
/*                                                         </div>*/
/*                                                         <div class="col-md-8 padding0">*/
/*                                                                 <div class="top20 p-right0 wordwrap">*/
/*                                                             <input class="form-1-style2 sign-password border1 borderf7 b-radius3" placeholder="password" type="password" id="password" name="_password" required="required" />*/
/*                                                                 </div>		*/
/*                                                         </div>*/
/*                                                 <div class="filter-slider">*/
/*                                                     <div class="col-md-6">*/
/*                                                         <div class="checkbox checkbox-1 f-left top30">*/
/*                                                                 <input id="check6" type="checkbox" name="check" value="check6" checked id="remember_me" name="_remember_me" value="on" />*/
/*                                                                 <label for="check6" style="padding-left: 30px;">Rester connecter</label>*/
/*                                                         </div>*/
/*                                                         </div>  */
/*                                                         <div class="col-md-6 top30">*/
/*                                                             <a>Mot de passe oublié ?</a>*/
/*                                                         </div>*/
/* */
/*                                                 </div>*/
/*                                                 <input type="submit" id="_submit" style="font-weight: bold;" name="_submit" value="Se Connecter" class="update-listings-btn b-radius3"/>*/
/*                             <i class="divider" role="separator"></i>*/
/*                             <a href="#"><div class="update-listings-btn b-radius3"><b>S'inscrire</b></div></a>*/
/*                             </form>*/
/*         </div>	*/
/*     </div>    */
/*     {% endblock login %}*/
