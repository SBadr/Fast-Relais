<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a6ce47d3f08278996e0f37f19baca94ecac4a0f6cca2cdd5b1c5a630ee8024de extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_login($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row listing-details-main\">
                <div class=\"m1170 pl-15 pr-15\" >
                        <div class=\"additional-filter col-md-6\" style=\"margin-left: 25%\">
                            <div class=\"col-md-4 wordwrap\" style=\"margin-top: 15px\">
                                                                <span class=\"font13 uppercase color333\"><b>Adresse Email</b></span>
                                                        </div>
                                                        <div class=\"col-md-8 padding0\">
                                                                <div class=\"p-right0 wordwrap\">
                                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se Connecter\" class=\"update-listings-btn b-radius3\"/>
                            <i class=\"divider\" role=\"separator\"></i>
                            <a href=\"#\"><div class=\"update-listings-btn b-radius3\"><b>S'inscrire</b></div></a>
                </div>
        </div>\t
    </div>    
    ";
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
        return array (  41 => 17,  31 => 9,  28 => 8,  11 => 1,);
    }
}
/* {% extends "AppBundle::frame.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* */
/* {% block login %}*/
/* <div class="row listing-details-main">*/
/*                 <div class="m1170 pl-15 pr-15" >*/
/*                         <div class="additional-filter col-md-6" style="margin-left: 25%">*/
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
/*                             <input type="submit" id="_submit" name="_submit" value="Se Connecter" class="update-listings-btn b-radius3"/>*/
/*                             <i class="divider" role="separator"></i>*/
/*                             <a href="#"><div class="update-listings-btn b-radius3"><b>S'inscrire</b></div></a>*/
/*                 </div>*/
/*         </div>	*/
/*     </div>    */
/*     {% endblock login %}*/
