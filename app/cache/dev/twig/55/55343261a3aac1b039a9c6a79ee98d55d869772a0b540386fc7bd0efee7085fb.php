<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1b16db5693e48ea6d2492b9110c7adb9f91681775f1c7193f81feb8b30f43373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db0b7437a68074307a43e88ad0a6d74191f778ede1e8a540fc0ead0324bb90c = $this->env->getExtension("native_profiler");
        $__internal_6db0b7437a68074307a43e88ad0a6d74191f778ede1e8a540fc0ead0324bb90c->enter($__internal_6db0b7437a68074307a43e88ad0a6d74191f778ede1e8a540fc0ead0324bb90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "


<div class=\"row listing-details-main\">
        <div class=\"m1170 pl-15 pr-15\" >\t\t\t\t\t\t
                <div class=\"additional-filter col-md-7\" style=\"margin-left: 25%\">
                <!--  A AFFICHER EN CAS D'ERREUR -->


                    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "    
                        <!-- ligne Email-->
                        <div class=\"col-md-4 wordwrap\" style=\"margin-top: 15px\">
                                <span class=\"font13 uppercase color333\"><b>Username</b></span>
                        </div>
                        <div class=\"col-md-8 padding0\">
                                <div class=\"p-right0 wordwrap\">
                                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-1-style2 sign-login border1 borderf7 b-radius3", "placeholder" => "Username")));
        echo "
                                </div>\t
                        </div>
                        
                                                                        <!-- ligne de mdp-->
                        <div class=\"col-md-4 wordwrap top20\" style=\"margin-top: 35px\">
                                <span class=\"font13 uppercase color333\"><b>Email</b></span>
                        </div>
                        <div class=\"col-md-8 padding0\">
                                <div class=\"top20 p-right0 wordwrap\">
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-1-style2 sign-login border1 borderf7 b-radius3", "placeholder" => "email@site.fr")));
        echo "
                                </div>\t\t
                        </div>

                                                                        <!-- ligne de mdp-->
                        <div class=\"col-md-4 wordwrap top20\" style=\"margin-top: 35px\">
                                <span class=\"font13 uppercase color333\"><b>Mot de passe</b></span>
                        </div>
                        <div class=\"col-md-8 padding0\">
                                <div class=\"top20 p-right0 wordwrap\">
                                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-1-style2 sign-login border1 borderf7 b-radius3", "placeholder" => "Mot de passe")));
        echo "
                                </div>\t\t
                        </div>
                        <div class=\"col-md-4 wordwrap top20\" style=\"margin-top: 35px\">
                                <span class=\"font13 uppercase color333\"><b>Confirmation</b></span>
                        </div>
                        <div class=\"col-md-8 padding0\">
                                <div class=\"top20 p-right0 wordwrap\">
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-1-style2 sign-login border1 borderf7 b-radius3", "placeholder" => "Mot de passe")));
        echo "

                                </div>\t\t
                        </div>
                        <div class=\"filter-slider\">
                                <div class=\"col-md-6\">
                                        <div class=\"checkbox checkbox-1 f-left top30\">
                                                <input id=\"check6\" type=\"checkbox\" name=\"check\" value=\"check6\" checked>
                                                <label for=\"check6\" style=\"padding-left: 30px;\">Rester connecter</label>
                                        </div>
                                </div>  
                                <div class=\"col-md-10 top30\">
                                        <a>Mot de passe oublié ?</a> 
                                        <br/>\t\t\t\t\t\t\t
                                        <a> Se Connecter</a>

                                </div>

                        </div>

                        <i class=\"divider\" role=\"separator\"></i>
                        <a href=\"#\"><div class=\"update-listings-btn b-radius3\"><b>S'inscrire</b></div></a>
                        <input type=\"submit\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />
                    ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    
                </div>
        </div>\t
</div>";
        
        $__internal_6db0b7437a68074307a43e88ad0a6d74191f778ede1e8a540fc0ead0324bb90c->leave($__internal_6db0b7437a68074307a43e88ad0a6d74191f778ede1e8a540fc0ead0324bb90c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 68,  105 => 67,  80 => 45,  69 => 37,  56 => 27,  43 => 17,  33 => 10,  22 => 1,);
    }
}
/* */
/* */
/* */
/* <div class="row listing-details-main">*/
/*         <div class="m1170 pl-15 pr-15" >						*/
/*                 <div class="additional-filter col-md-7" style="margin-left: 25%">*/
/*                 <!--  A AFFICHER EN CAS D'ERREUR -->*/
/* */
/* */
/*                     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}    */
/*                         <!-- ligne Email-->*/
/*                         <div class="col-md-4 wordwrap" style="margin-top: 15px">*/
/*                                 <span class="font13 uppercase color333"><b>Username</b></span>*/
/*                         </div>*/
/*                         <div class="col-md-8 padding0">*/
/*                                 <div class="p-right0 wordwrap">*/
/*                                         {{ form_widget(form.username, { 'attr' : {'class': 'form-1-style2 sign-login border1 borderf7 b-radius3', 'placeholder':'Username'} }) }}*/
/*                                 </div>	*/
/*                         </div>*/
/*                         */
/*                                                                         <!-- ligne de mdp-->*/
/*                         <div class="col-md-4 wordwrap top20" style="margin-top: 35px">*/
/*                                 <span class="font13 uppercase color333"><b>Email</b></span>*/
/*                         </div>*/
/*                         <div class="col-md-8 padding0">*/
/*                                 <div class="top20 p-right0 wordwrap">*/
/*                                         {{ form_widget(form.email, { 'attr': {'class': 'form-1-style2 sign-login border1 borderf7 b-radius3', 'placeholder':'email@site.fr'} }) }}*/
/*                                 </div>		*/
/*                         </div>*/
/* */
/*                                                                         <!-- ligne de mdp-->*/
/*                         <div class="col-md-4 wordwrap top20" style="margin-top: 35px">*/
/*                                 <span class="font13 uppercase color333"><b>Mot de passe</b></span>*/
/*                         </div>*/
/*                         <div class="col-md-8 padding0">*/
/*                                 <div class="top20 p-right0 wordwrap">*/
/*                                         {{ form_widget(form.plainPassword.first, { 'attr' : {'class': 'form-1-style2 sign-login border1 borderf7 b-radius3', 'placeholder':'Mot de passe'} }) }}*/
/*                                 </div>		*/
/*                         </div>*/
/*                         <div class="col-md-4 wordwrap top20" style="margin-top: 35px">*/
/*                                 <span class="font13 uppercase color333"><b>Confirmation</b></span>*/
/*                         </div>*/
/*                         <div class="col-md-8 padding0">*/
/*                                 <div class="top20 p-right0 wordwrap">*/
/*                                         {{ form_widget(form.plainPassword.second, { 'attr' : {'class': 'form-1-style2 sign-login border1 borderf7 b-radius3', 'placeholder':'Mot de passe'} }) }}*/
/* */
/*                                 </div>		*/
/*                         </div>*/
/*                         <div class="filter-slider">*/
/*                                 <div class="col-md-6">*/
/*                                         <div class="checkbox checkbox-1 f-left top30">*/
/*                                                 <input id="check6" type="checkbox" name="check" value="check6" checked>*/
/*                                                 <label for="check6" style="padding-left: 30px;">Rester connecter</label>*/
/*                                         </div>*/
/*                                 </div>  */
/*                                 <div class="col-md-10 top30">*/
/*                                         <a>Mot de passe oublié ?</a> */
/*                                         <br/>							*/
/*                                         <a> Se Connecter</a>*/
/* */
/*                                 </div>*/
/* */
/*                         </div>*/
/* */
/*                         <i class="divider" role="separator"></i>*/
/*                         <a href="#"><div class="update-listings-btn b-radius3"><b>S'inscrire</b></div></a>*/
/*                         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                     {{ form_end(form) }}    */
/*                 </div>*/
/*         </div>	*/
/* </div>*/
