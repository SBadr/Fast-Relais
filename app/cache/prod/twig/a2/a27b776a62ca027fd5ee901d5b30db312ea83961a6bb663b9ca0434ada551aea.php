<?php

/* AppBundle::frame.html.twig */
class __TwigTemplate_19932de11f2398c2bd60c3f2e61238881bc534e9198f780242337d963b2d74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>FastRelais</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"img/favicon.png\" />
        
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/master.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
       
\t\t<!-- SWITCHER -->
\t\t<link rel=\"stylesheet\" id=\"switcher-css\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/switcher.css"), "html", null, true);
        echo "\" media=\"all\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color1.css"), "html", null, true);
        echo "\" title=\"color1\" media=\"all\" data-default-color=\"true\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color2.css"), "html", null, true);
        echo "\" title=\"color2\" media=\"all\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color3.css"), "html", null, true);
        echo "\" title=\"color3\" media=\"all\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color4.css"), "html", null, true);
        echo "\" title=\"color4\" media=\"all\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color5.css"), "html", null, true);
        echo "\" title=\"color5\" media=\"all\" />
\t\t<link rel=\"alternate stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/css/color6.css"), "html", null, true);
        echo "\" title=\"color6\" media=\"all\" />
        
        <!--[if lt IE 9]>
          <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
\t</head>
\t<body>
\t\t<!-- Loader -->
\t\t<div id=\"page-preloader\"><span class=\"spinner\"></span></div>
\t\t<!-- Loader end -->

\t\t<header>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row h-first-row\">
\t\t\t\t\t<div class=\"m1170\">
\t\t\t\t\t\t<div class=\"col-xs-5 text-uppercase\">Bienvenue sur Fast Relais</div>
\t\t\t\t\t\t<div class=\"col-xs-7 text-right\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"h-login col-sm-7\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h-a-login\">Se connecter</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h-a-register\">S'inscrire</a>
\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
<!-- START HEADER -->

\t\t\t\t<div id=\"header\" class=\"row h-second-row\">
\t\t\t\t\t<div class=\"m1170\">
\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-10 h-logo\">
\t\t\t\t\t\t\t<div class=\"logotype\">
\t\t\t\t\t\t\t\t<a href=\"01-home-1.html\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/img/logo.png"), "html", null, true);
        echo "\" alt=\"wd\" height=\"50\"></a>
\t\t\t\t\t\t\t</div><div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-8 col-xs-2 h-menu padding0\">
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars mobileMenuNav mobileMenuSwitcher onlyMobileMenu\"></i>
\t\t\t\t\t\t\t\t<div class=\"nav-container container-fluid padding0\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times close-menu mobileMenuSwitcher onlyMobileMenu\"></i>
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-main navbar-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"10-contact.html\">ACCUEIL</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"03-category-1.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon compte <i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"03-category-1.html\">Mon Profil</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"04-category-2.html\">Mes FastRelais Favoris</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"05-category-3.html\">Mes Evaluations</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"08-blog-details.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mes commandes <i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"08-blog-details.html\">En cours</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"09-pricing.html\">Historique</a></li>\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"08-blog-details.html\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace FastRelais <i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"08-blog-details.html\">Mes demandes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"09-pricing.html\">Mes disponibiltés</a></li>\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"10-contact.html\">CONTACT</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"h-submit-listing\"><a href=\"06-listing-details.html\"><span class=\"h-plus\">+</span> Devenir FASTRELAIS</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                <!-- END HEADER -->
                                ";
        // line 92
        $this->displayBlock('login', $context, $blocks);
        // line 95
        echo "\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</header>\t
\t\t\t
\t\t";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "\t\t\t
\t\t<footer>
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row f-second-row footer\">
\t\t\t\t\t<div class=\"m1170\">
\t\t\t\t\t\t<div class=\"col-sm-4 f-1td top40\" data-wow-delay=\"0.7s\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t<h5 class=\"uppercase colorfff footer-title\"><b class=\"footer-title\">FastRelais</b></h5>
\t\t\t\t\t\t\t<div class=\"footer-td1-txt coloraaa top30 p-right20\">
\t\t\t\t\t\t\t\tInteger ac lorem sit amet est rhoncus dapi bus don cad
\t\t\t\t\t\t\t\tpede acus morbi elit nunc molestie at ultrices eu eleifen
\t\t\t\t\t\t\t\tlorem ut dictum erat masa. Nullam tempus erat id tort
\t\t\t\t\t\t\t\tIn hac habitasse platea dictumst.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"button1-1 b-radius3 right30 button-blue top20\">Plus</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-4 f-2td top40\" data-wow-delay=\"0.7s\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t<h5 class=\"uppercase colorfff\"><b class=\"footer-title\">Categories</b></h5>
\t\t\t\t\t\t\t<ul class=\"list-styles left-40 top30 f-left coloraaa footer-list p-right20\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>ACCUEIL</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Qui sommes-nous ?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Comment ça marche</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Confiance et sérénité</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Niveaux d'expérience</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"list-styles left-40 top30 f-left\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Les avis Services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Conseils prévention</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa icon-chevron-right\">&nbsp;</i>Conditions générales</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-4 f-3td top40\" data-wow-delay=\"0.7s\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t<h5 class=\"uppercase colorfff\"><b class=\"footer-title\">AUTRE CHOSE</b></h5>
\t\t\t\t\t\t\t<div class=\"top30 p-right20 coloraaa\">
\t\t\t\t\t\t\t\t<b class=\"uppercase colorfff\">INFORMATION LOCAL </b>
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\tUniversité Evry Val D'ESSONE
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"uppercase\"></a>
\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr><td>Tél</td><td class=\"p-left10\">XXXXXXXXXX</td></tr>
\t\t\t\t\t\t\t\t\t<tr><td>Tél</td><td class=\"p-left10\">XXXXXXXXXXXX</td></tr>
\t\t\t\t\t\t\t\t\t<tr><td>E-mail</td><td class=\"p-left10\">contact@Fastrelais.com</td></tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row f-third-row footer2\">
\t\t\t\t\t<div class=\"m1170\">
\t\t\t\t\t\t<div class=\"footer-relative\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 left-footer2 \" data-wow-delay=\"0.7s\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t&copy; 2016 Fast Relais SA - All Rights Reserved.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 right-footer2\" data-wow-delay=\"0.7s\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-facebook\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-google-plus\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-twitter\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-pinterest\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-vimeo\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-dribbble\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-linkedin\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"img-icons-2\"><i class=\"fa fa-rss\">&nbsp;</i></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a id=\"to-top\" href=\"#header-top\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t</footer>

\t\t<!--Main-->   
\t\t<!--Main-->   
\t\t<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp') }}\"></script>
\t\t
\t\t<!--Switcher-->
\t\t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/switcher/js/switcher.js"), "html", null, true);
        echo "\"></script>\t\t
\t\t<!--Chosen-->
\t\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--Bootstrap Slider-->
\t\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/bootstrap-slider.js"), "html", null, true);
        echo "\"></script>
\t\t<!--Bootstrap datepicker-->
\t\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<!--Bootstrap datepicker-->
\t\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/assets/slider-pro/js/jquery.sliderPro.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--Theme-->
\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jquery.smooth-scroll.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/wow.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/theme.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>";
    }

    // line 92
    public function block_login($context, array $blocks = array())
    {
        // line 93
        echo "                    
                                ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo "                    
                ";
    }

    public function getTemplateName()
    {
        return "AppBundle::frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 100,  320 => 99,  315 => 93,  312 => 92,  305 => 218,  301 => 217,  297 => 216,  293 => 215,  287 => 212,  282 => 210,  277 => 208,  272 => 206,  267 => 204,  260 => 200,  256 => 199,  252 => 198,  248 => 197,  151 => 102,  149 => 99,  143 => 95,  141 => 92,  97 => 51,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  31 => 9,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>FastRelais</title>*/
/*         <link rel="icon" type="image/x-icon" href="img/favicon.png" />*/
/*         */
/*         <link href="{{ asset('includes/css/master.css') }}" rel="stylesheet">*/
/*        */
/* 		<!-- SWITCHER -->*/
/* 		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('includes/assets/switcher/css/switcher.css') }}" media="all" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color1.css') }}" title="color1" media="all" data-default-color="true" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color2.css') }}" title="color2" media="all" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color3.css') }}" title="color3" media="all" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color4.css') }}" title="color4" media="all" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color5.css') }}" title="color5" media="all" />*/
/* 		<link rel="alternate stylesheet" type="text/css" href="{{ asset('includes/assets/switcher/css/color6.css') }}" title="color6" media="all" />*/
/*         */
/*         <!--[if lt IE 9]>*/
/*           <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*           <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* 	</head>*/
/* 	<body>*/
/* 		<!-- Loader -->*/
/* 		<div id="page-preloader"><span class="spinner"></span></div>*/
/* 		<!-- Loader end -->*/
/* */
/* 		<header>*/
/* 			<div class="container-fluid">*/
/* 				<div class="row h-first-row">*/
/* 					<div class="m1170">*/
/* 						<div class="col-xs-5 text-uppercase">Bienvenue sur Fast Relais</div>*/
/* 						<div class="col-xs-7 text-right">*/
/* 							<div class="row">*/
/* 								<div class="h-login col-sm-7">*/
/* 									<a href="#" class="h-a-login">Se connecter</a>*/
/* 									<a href="#" class="h-a-register">S'inscrire</a>*/
/* 								</div>			*/
/* 							</div>			*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* <!-- START HEADER -->*/
/* */
/* 				<div id="header" class="row h-second-row">*/
/* 					<div class="m1170">*/
/* 						<div class="col-sm-4 col-xs-10 h-logo">*/
/* 							<div class="logotype">*/
/* 								<a href="01-home-1.html"><img src="{{ asset('includes/img/logo.png') }}" alt="wd" height="50"></a>*/
/* 							</div><div class="clearfix"></div>*/
/* 						</div>*/
/* 						<div class="col-sm-8 col-xs-2 h-menu padding0">*/
/* 							<nav>*/
/* 								<i class="fa fa-bars mobileMenuNav mobileMenuSwitcher onlyMobileMenu"></i>*/
/* 								<div class="nav-container container-fluid padding0">*/
/* 									<i class="fa fa-times close-menu mobileMenuSwitcher onlyMobileMenu"></i>*/
/* 									<ul class="nav navbar-nav navbar-main navbar-right">*/
/* 										<li><a href="10-contact.html">ACCUEIL</a></li>*/
/* 										<li class="dropdown">*/
/* 											<a href="03-category-1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte <i class="fa fa-angle-down"></i></a>*/
/* 											<ul class="dropdown-menu">*/
/* 												<li><a href="03-category-1.html">Mon Profil</a></li>*/
/* 												<li><a href="04-category-2.html">Mes FastRelais Favoris</a></li>*/
/* 												<li><a href="05-category-3.html">Mes Evaluations</a></li>*/
/* 											</ul>*/
/* 										</li>*/
/* 										<li class="dropdown">*/
/* 											<a href="08-blog-details.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mes commandes <i class="fa fa-angle-down"></i></a>*/
/* 											<ul class="dropdown-menu">*/
/* 												<li><a href="08-blog-details.html">En cours</a></li>*/
/* 												<li><a href="09-pricing.html">Historique</a></li>	*/
/* 											</ul>*/
/* 										</li>*/
/* 										<li class="dropdown">*/
/* 											<a href="08-blog-details.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace FastRelais <i class="fa fa-angle-down"></i></a>*/
/* 											<ul class="dropdown-menu">*/
/* 												<li><a href="08-blog-details.html">Mes demandes</a></li>*/
/* 												<li><a href="09-pricing.html">Mes disponibiltés</a></li>	*/
/* 											</ul>*/
/* 										</li>*/
/* 										<li><a href="10-contact.html">CONTACT</a></li>*/
/* 										<li class="h-submit-listing"><a href="06-listing-details.html"><span class="h-plus">+</span> Devenir FASTRELAIS</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</nav>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*                                 <!-- END HEADER -->*/
/*                                 {% block login %}*/
/*                     */
/*                                 {% endblock login %}*/
/* 			</div>*/
/* 			<div class="clearfix"></div>*/
/* 		</header>	*/
/* 			*/
/* 		{% block content %}*/
/*                     */
/*                 {% endblock content %}*/
/* 			*/
/* 		<footer>*/
/* 			<div class="container-fluid">*/
/* 				<div class="row f-second-row footer">*/
/* 					<div class="m1170">*/
/* 						<div class="col-sm-4 f-1td top40" data-wow-delay="0.7s" data-wow-duration="1.5s">*/
/* 							<h5 class="uppercase colorfff footer-title"><b class="footer-title">FastRelais</b></h5>*/
/* 							<div class="footer-td1-txt coloraaa top30 p-right20">*/
/* 								Integer ac lorem sit amet est rhoncus dapi bus don cad*/
/* 								pede acus morbi elit nunc molestie at ultrices eu eleifen*/
/* 								lorem ut dictum erat masa. Nullam tempus erat id tort*/
/* 								In hac habitasse platea dictumst.*/
/* 							</div>*/
/* 							<div class="button1-1 b-radius3 right30 button-blue top20">Plus</div>*/
/* 							<div class="clearfix"></div>*/
/* 						</div>*/
/* */
/* 						<div class="col-sm-4 f-2td top40" data-wow-delay="0.7s" data-wow-duration="1.5s">*/
/* 							<h5 class="uppercase colorfff"><b class="footer-title">Categories</b></h5>*/
/* 							<ul class="list-styles left-40 top30 f-left coloraaa footer-list p-right20">*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>ACCUEIL</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Qui sommes-nous ?</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Comment ça marche</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Confiance et sérénité</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Niveaux d'expérience</a></li>*/
/* 							</ul>*/
/* 							<ul class="list-styles left-40 top30 f-left">*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Les avis Services</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Conseils prévention</a></li>*/
/* 								<li><a href="#"><i class="fa icon-chevron-right">&nbsp;</i>Conditions générales</a></li>*/
/* 							</ul>*/
/* 							<div class="clearfix"></div>*/
/* 						</div>*/
/* */
/* 						<div class="col-sm-4 f-3td top40" data-wow-delay="0.7s" data-wow-duration="1.5s">*/
/* 							<h5 class="uppercase colorfff"><b class="footer-title">AUTRE CHOSE</b></h5>*/
/* 							<div class="top30 p-right20 coloraaa">*/
/* 								<b class="uppercase colorfff">INFORMATION LOCAL </b>*/
/* 								<br />*/
/* 								Université Evry Val D'ESSONE*/
/* 									<br />*/
/* 								<a href="#" class="uppercase"></a>*/
/* 								<br /><br />*/
/* 								<table>*/
/* 									<tr><td>Tél</td><td class="p-left10">XXXXXXXXXX</td></tr>*/
/* 									<tr><td>Tél</td><td class="p-left10">XXXXXXXXXXXX</td></tr>*/
/* 									<tr><td>E-mail</td><td class="p-left10">contact@Fastrelais.com</td></tr>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row f-third-row footer2">*/
/* 					<div class="m1170">*/
/* 						<div class="footer-relative">*/
/* 							<div class="col-sm-6 left-footer2 " data-wow-delay="0.7s" data-wow-duration="1.5s">*/
/* 								&copy; 2016 Fast Relais SA - All Rights Reserved.*/
/* 							</div>*/
/* 							<div class="col-sm-6 right-footer2" data-wow-delay="0.7s" data-wow-duration="1.5s">*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-facebook">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-google-plus">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-twitter">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-pinterest">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-vimeo">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-dribbble">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-linkedin">&nbsp;</i></div>*/
/* 								</a>*/
/* 								<a href="#">*/
/* 									<div class="img-icons-2"><i class="fa fa-rss">&nbsp;</i></div>*/
/* 								</a>*/
/* 							</div>*/
/* 							<div class="clearfix"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a id="to-top" href="#header-top"><i class="fa fa-chevron-up"></i></a>*/
/* 		</footer>*/
/* */
/* 		<!--Main-->   */
/* 		<!--Main-->   */
/* 		<script src="{{ asset('includes/js/jquery-1.11.3.min.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/bootstrap.min.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/modernizr.custom.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/classie.js') }}"></script>*/
/* 		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp') }}"></script>*/
/* 		*/
/* 		<!--Switcher-->*/
/* 		<script src="{{ asset('includes/assets/switcher/js/switcher.js') }}"></script>		*/
/* 		<!--Chosen-->*/
/* 		<script src="{{ asset('includes/assets/chosen/chosen.jquery.min.js') }}"></script>*/
/* 		<!--Bootstrap Slider-->*/
/* 		<script src="{{ asset('includes/js/bootstrap-slider.js') }}"></script>*/
/* 		<!--Bootstrap datepicker-->*/
/* 		<script src="{{ asset('includes/js/bootstrap-datepicker.js') }}"></script>*/
/* 		<!--Bootstrap datepicker-->*/
/* 		<script src="{{ asset('includes/assets/slider-pro/js/jquery.sliderPro.min.js') }}"></script>*/
/* */
/* 		<!--Theme-->*/
/* 		<script src="{{ asset('includes/js/jquery.smooth-scroll.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/wow.min.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/jquery.placeholder.min.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/theme.js') }}"></script>*/
/* 	</body>*/
/* </html>*/
