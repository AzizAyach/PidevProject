<?php

/* ProjetFreelancerBundle::layout.html.twig */
class __TwigTemplate_7d6ca5d50761b044e901734592dc0af41f62c406293627af46960c766f11184b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'body' => array($this, 'block_body'),
            'bienvenu' => array($this, 'block_bienvenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
<head>

\t
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 

    
<!-- Basic Page Needs
================================================== -->
<meta charset=\"utf-8\">
<title>
</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!-- CSS
================================================== -->
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/css/colors/blue.css"), "html", null, true);
        echo "\" id=\"colors\">

<!--[if lt IE 9]>
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->

<!-- Java Script
================================================== -->
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/js/myjs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.jcarousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.layerslider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/jquery.modernizr.js"), "html", null, true);
        echo "\"></script>

<script src='../../google_analytics_auto.js'></script></head>
<body>

<!-- Wrapper / Start -->
<div id=\"wrapper\">

<!-- Header
================================================== -->
<div id=\"top-line\"></div>

<!-- 960 Container -->
<div class=\"container\">

\t<!-- Header -->
\t<header id=\"header\">

\t\t<!-- Logo -->
\t\t<div class=\"ten columns\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1><a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/logo.png"), "html", null, true);
        echo "\" alt=\"Nevia Premium Template\" /></a></h1>
\t\t\t\t<div id=\"tagline\">    </div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Social / Contact -->
\t\t<div class=\"six columns\">

\t\t\t<!-- Social Icons -->
\t\t\t<ul class=\"social-icons\">
\t\t\t\t
                                <div id=\"fb-root\">partagez sur facebook\t<li class=\"facebook\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=143869762514&version=v2.3\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\"></div>
\t\t

<li class=\"twitter\"><a href=\"#\">Twitter</a></li>
\t\t\t\t<li class=\"dribbble\"><a href=\"#\">Dribbble</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"#\">LinkedIn</a></li>
\t\t\t\t<li class=\"rss\"><a href=\"#\">RSS</a></li>
\t\t\t</ul>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Contact Details -->
\t\t\t<div class=\"contact-details\">Trouvez un Projet !</div>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Search -->
\t\t\t<nav class=\"top-search\">
                            <input id=\"3alleni\" type=\"text\" onkeypress=\"if (event.keyCode==13){ resultat_rech();return false;}\"/>  
\t\t\t</nav>

\t\t</div>
\t</header>
\t<!-- Header / End -->

\t<div class=\"clearfix\"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
<nav id=\"navigation\" class=\"style-1\">

<div class=\"left-corner\"></div>
<div class=\"right-corner\"></div>

<ul class=\"menu\" id=\"responsive\">

\t<li><a href=\"index-2.html\" id=\"current\"><i class=\"halflings white home\"></i> Home</a></li>

\t<li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\"><i class=\"halflings white file\"></i> Projets Disponibles</a>
\t\t<!-- Mega Menu / Start -->
\t\t<ul class=\"cols3\">
\t\t\t<li class=\"col3\">
\t\t\t\t<h4>Two Lists and a Paragraph</h4>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Page Layouts</h5>
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t<li><a href=\"flexslider.html\">FlexSlider</a></li>
\t\t\t\t\t<li><a href=\"pricing-tables.html\">Pricing Tables</a></li>
\t\t\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t\t</ol>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Other Pages</h5>
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"faq.html\">FAQ's</a></li>
\t\t\t\t\t<li><a href=\"404-page.html\">404 Page</a></li>
\t\t\t\t\t<li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
\t\t\t\t\t<li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
\t\t\t\t</ol>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Paragraph</h5>
\t\t\t\t<p>This <a href=\"#\">Mega Menu</a> can handle everything. Lists, paragraphs, forms...</p>
\t\t\t</li>
\t\t</ul>
\t\t<!-- Mega Menu / End -->
\t</li>

\t<li><a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("freelancer_edit", array("id" => 11));
        echo "\"><i class=\"halflings white cog\"></i>Modifier Profile</a>
\t\t
\t</li>

\t<li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\"><i class=\"halflings white briefcase\"></i> Passer un Test</a>
\t\t<!-- Second Level / Start -->
\t\t<ul>
\t\t\t<li><a href=\"portfolio-2.html\">2 Columns</a></li>
\t\t\t<li><a href=\"portfolio-3.html\">3 Columns</a></li>
\t\t\t<li><a href=\"portfolio-4.html\">4 Columns</a></li>
\t\t\t<li><a href=\"single-project.html\">Single Project</a></li>
\t\t</ul>
\t\t<!-- Second Level / End -->
\t</li>

\t<li><a href=\"#\"><i class=\"halflings white pencil\"></i> Blog</a>
\t\t<!-- Second Level / Start -->
\t\t<ul>
\t\t\t<li><a href=\"blog-large-image.html\">Large Image</a></li>
\t\t\t<li><a href=\"blog-medium-image.html\">Medium Image</a></li>
\t\t\t<li><a href=\"blog-post.html\">Single Post</a></li>
\t\t</ul>
\t\t<!-- Second Level / End -->
\t</li>

\t<li><a href=\"contact.html\"><i class=\"halflings white envelope\"></i> Contact</a></li>

</ul>
</nav>
<div class=\"clearfix\"></div>


<!-- Content
================================================== -->
<div id=\"content\">

<!-- LayerSlider  -->
<section id=\"layerslider-container\">\t
\t<div id=\"layerslider\" style=\"width: 1020px; height: 450px; margin: 0 auto;\">
\t\t
\t\t<!-- Slide 1 -->
\t\t<article class=\"ls-layer\" style=\"slidedelay: 10000;\">
\t\t\t<img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-01.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\">
                        
\t\t\t<img class=\"ls-s4\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-01a.png"), "html", null, true);
        echo "\" style=\"top: 30px; left: 120px; slidedirection: bottom; slideoutdirection: bottom; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;\" alt=\"\"/>
\t\t\t<h3 class=\"ls-s1 caption-color\" style=\"top: 357px; left: 756px; slidedirection: right; slideoutdirection: right; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;\">Powerful HTML5 Template</h3>
\t\t</article>
\t\t
\t\t<!-- Slide 2 -->
\t\t<article class=\"ls-layer\" style=\"slidedelay: 10000; slidedirection: top;\">
\t\t\t<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02.png"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\">
\t\t\t<img class=\"ls-s4\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02a.png"), "html", null, true);
        echo "\" style=\"top: 50%; left: 260px; slidedirection: left; slideoutdirection: left; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;\" alt=\"\"/>
\t\t\t<img class=\"ls-s4\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02b.png"), "html", null, true);
        echo "\" style=\"top: 50%; left: 544px; slidedirection: right; slideoutdirection: right; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;\" alt=\"\"/>
\t\t\t
\t\t\t<img class=\"ls-s4\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02c.png"), "html", null, true);
        echo "\" style=\"top: 230px; left: 494px; slidedirection: top; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;\" alt=\"\"/>
\t\t\t
\t\t\t<img class=\"ls-s2\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02d.png"), "html", null, true);
        echo "\" style=\"top: 15px; left: -142px; slidedirection: left; slideoutdirection: left; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1200;\" alt=\"\"/>
\t\t\t<img class=\"ls-s2\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/images/slide-02e.png"), "html", null, true);
        echo "\" style=\"top: 15px; left: 784px; slidedirection: right; slideoutdirection: right; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1200;\" alt=\"\"/>
\t\t</article>
\t\t
\t\t<!-- Slide 3 -->
\t\t<article class=\"ls-layer\" style=\"slidedelay: 7000;\">
\t\t\t<img src=\"images/slide-03.jpg\" class=\"ls-bg\" alt=\"\">
\t\t\t<h3 class=\"ls-s1 caption-transparent\" style=\"top: 357px; left: 40px;\">Image in Slide Directly</h3>
\t\t</article>

\t</div>\t\t\t\t\t
</section>
<!-- LayerSlider / End -->

    ";
        // line 230
        $this->displayBlock('contenu', $context, $blocks);
        // line 233
        $this->displayBlock('body', $context, $blocks);
        // line 237
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 240
        echo "<!-- 960 Container -->
<div class=\"container\">
";
        // line 242
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 245
        echo "\t<!-- Icon Boxes -->
\t<section class=\"icon-box-container\">

\t\t<!-- Icon Box Start -->
\t\t<div class=\"one-third column\">
\t\t\t<article class=\"icon-box\">
\t\t\t\t<i class=\"icon-bullhorn\"></i>
\t\t\t\t<h3>Clean Design</h3>
\t\t\t\t<p>Incredibly clean design provides you powerful way to grow your business.</p>
\t\t\t</article>
\t\t</div>
\t\t<!-- Icon Box End -->

\t\t<!-- Icon Box Start -->
\t\t<div class=\"one-third column\">
\t\t\t<article class=\"icon-box\">
\t\t\t\t<i class=\"icon-magic\"></i>
\t\t\t\t<h3>Responsive</h3>
\t\t\t\t<p>This theme is responsive, so it will look awesome on all mobile devices. </p>
\t\t\t</article>
\t\t</div>
\t\t<!-- Icon Box End -->

\t\t<!-- Icon Box Start -->
\t\t<div class=\"one-third column\">
\t\t\t<article class=\"icon-box\">
\t\t\t\t<i class=\"icon-beaker\"></i>
\t\t\t\t<h3>Retina Ready</h3>
\t\t\t\t<p>Nevia is ready for retina and looks fantastic on high-resolution displays.</p>
\t\t\t</article>
\t\t</div>
\t\t<!-- Icon Box End -->

\t</section>
\t<!-- Icon Boxes / End -->

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class=\"container floated\">
\t<div class=\"blank floated\">

\t\t<!-- Recent Work Entire -->
\t\t<div class=\"four columns carousel-intro\">

\t\t\t<section class=\"entire\">
\t\t\t\t<h3>Recent Work</h3>
\t\t\t\t<p>Adding portfolio entries with this shortcode is now easier then ever.</p>
\t\t\t</section>

\t\t\t<div class=\"carousel-navi\">
\t\t\t\t<div id=\"work-prev\" class=\"arl jcarousel-prev\"><i class=\"icon-chevron-left\"></i></div>
\t\t\t\t<div id=\"work-next\" class=\"arr jcarousel-next\"><i class=\"icon-chevron-right\"></i></div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>

\t\t</div>

\t\t<!-- jCarousel -->
\t\t<section class=\"jcarousel recent-work-jc\">
\t\t\t<ul>
\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-01.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Time Is Running Out</h5>
\t\t\t\t\t\t\t\t<span>Photography</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-02.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Seeds of Growth</h5>
\t\t\t\t\t\t\t\t<span>Architecture</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-03.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Beautiful Flowers</h5>
\t\t\t\t\t\t\t\t<span>Identity</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-04.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Poppy Flower</h5>
\t\t\t\t\t\t\t\t<span>Identity</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-05.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Death Valley</h5>
\t\t\t\t\t\t\t\t<span>Photography</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-06.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Digital World</h5>
\t\t\t\t\t\t\t\t<span>Technology</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-07.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>American Football</h5>
\t\t\t\t\t\t\t\t<span>Architecture</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Recent Work Item -->
\t\t\t\t<li class=\"four columns\">
\t\t\t\t\t<a href=\"single-project.html\" class=\"portfolio-item\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"images/portfolio/portfolio-08.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<figcaption class=\"item-description\">
\t\t\t\t\t\t\t\t<h5>Casual Shoes</h5>
\t\t\t\t\t\t\t\t<span>Identity</span>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<!-- jCarousel / End -->

\t</div>
</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class=\"container\">

\t<!-- Recent News -->
\t<div class=\"eight columns\">
\t\t
\t\t<h3 class=\"margin-1\">Recent News <span>/ Stuff From Our Blog</span></h3>

\t\t<div class=\"four columns alpha\">
\t\t\t<article class=\"recent-blog\">
\t\t\t\t<section class=\"date\">
\t\t\t\t\t<span class=\"day\">28</span>
\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t</section>
\t\t\t\t<h4><a href=\"blog-post.html\">The Boating Life Begins With a Good Storm</a></h4>
\t\t\t\t<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class=\"cut\">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
\t\t\t</article>
\t\t</div>
\t\t
\t\t<div class=\"four columns omega\">
\t\t\t<article class=\"recent-blog\">
\t\t\t\t<section class=\"date\">
\t\t\t\t\t<span class=\"day\">15</span>
\t\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t\t</section>
\t\t\t\t<h4><a href=\"blog-post.html\">Visiting Tuscany Without the Crowds</a></h4>
\t\t\t\t<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class=\"cut\">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
\t\t\t</article>
\t\t</div>

\t</div>

\t<!-- Testimonials -->
\t<div class=\"eight columns\">

\t\t<h3 class=\"margin-1\">Testimonials <span>/ What Our Clients Say</span></h3>

\t\t<!-- Testimonial Rotator -->
\t\t<section class=\"flexslider testimonial-slider\">
\t\t\t<ul class=\"slides\">
\t\t\t\t<li class=\"testimonial\">
\t\t\t\t\t<div class=\"testimonials\">Integer eu libero sit amet nisl vestibulum semper. Fusce costant Proin sit amet mauris odio pellentesque iaculis posuer dapibus natoque penatibus et magnis dis parturient montes.</div>
\t\t\t\t\t<div class=\"testimonials-bg\"></div>
\t\t\t\t\t<div class=\"testimonials-author\">Michael, <span>Flash Developer</span></div>
\t\t\t\t</li>

\t\t\t\t<li class=\"testimonial\">
\t\t\t\t\t<div class=\"testimonials\">Posuere erat a ante venenatis dapibus posuere velit aliquet. Proin sit amet mauris odio pellentesque iaculis. Cum sociis natoque penatibus et lorem magnis dis parturient montes, nascetur ridiculus mus. Duisean lorem llis noenan coeammodo luctus.</div>
\t\t\t\t\t<div class=\"testimonials-bg\"></div>
\t\t\t\t\t<div class=\"testimonials-author\">John, <span>Web Developer</span></div>
\t\t\t\t</li>

\t\t\t\t<li class=\"testimonial\">
\t\t\t\t\t<div class=\"testimonials\">Cras sed odio est, sit amet porttitor elit. Vestibulum Proin sit amet mauris et odio pellentesque iaculis. Cum sociis natoque proin sit amet mauris odio pellentesque iaculis.</div>
\t\t\t\t\t<div class=\"testimonials-bg\"></div>
\t\t\t\t\t<div class=\"testimonials-author\">Peter, <span>Project Manager</span></div>
\t\t\t\t</li>

\t\t\t\t<li class=\"testimonial\">
\t\t\t\t\t<div class=\"testimonials\">Elementum erat vitae ante venenatis dapibus. Maecenas cursus  cursus Proin sit amet mauris et odio pellentesque iaculis.</div>
\t\t\t\t\t<div class=\"testimonials-bg\"></div>
\t\t\t\t\t<div class=\"testimonials-author\">Kathy, <span>Art Director</span></div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</section>
\t\t<!-- Testomonial Rotator / End -->

\t</div>

</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id=\"footer\">
\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- About -->
\t\t<div class=\"four columns\">
\t\t\t<img id=\"logo-footer\" src=\"images/logo-footer.png\" alt=\"\" />
\t\t\t<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>
\t\t\t
\t\t</div>

\t\t<!-- Contact Details -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Contact Details</h4>
\t\t\t<ul class=\"contact-details-alt\">
\t\t\t\t<li><i class=\"halflings white map-marker\"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
\t\t\t\t<li><i class=\"halflings white user\"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
\t\t\t\t<li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"#\">mail@example.com</a></p></li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Photo Stream -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Photo Stream</h4>
\t\t\t<div class=\"flickr-widget\">
\t\t\t\t<script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07\"></script>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Twitter -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Twitter</h4>
\t\t\t<ul id=\"twitter\"></ul>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\t\$.getJSON('http://api.twitter.com/1/statuses/user_timeline/vasterad.json?count=1&amp;callback=?', function(tweets){
\t\t\t\t\t\$(\"#twitter\").html(tz_format_twitter(tweets));
\t\t\t\t\t}); });
\t\t\t\t</script>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id=\"footer-bottom\">

\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- Copyrights -->
\t\t<div class=\"eight columns\">
\t\t\t<div class=\"copyright\">
\t\t\t\t <a href=\"#\">Nevia</a>. All Rights Reserved.
\t\t\t</div>
\t\t</div>

\t\t<!-- Menu -->
\t\t<div class=\"eight columns\">
\t\t\t<nav id=\"sub-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">FAQ's</a></li>
\t\t\t\t\t<li><a href=\"#\">Sitemap</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->


<!-- Style Switcher
================================================== -->
<link rel=\"stylesheet\" href=\"css/switcher.css\">
<script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Projetfreelancer/scripts/switcher.js"), "html", null, true);
        echo "\"></script>

<section id=\"style-switcher\">
\t<h2>Style Switcher <a href=\"#\"></a></h2>
\t<div>
\t<h3>Predefined Colors</h3>
\t\t<ul class=\"colors\" id=\"color1\">
\t\t\t<li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
\t\t\t<li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
\t\t\t<li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
\t\t\t<li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
\t\t\t<li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
\t\t\t<li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
\t\t\t<li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
\t\t\t<li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
\t\t\t<li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
\t\t\t<li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
\t\t\t<li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
\t\t\t<li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
\t\t\t<li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dark\" title=\"Dark\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
\t\t\t<li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dirty-green\" title=\"Dirty Green\"></a></li>
\t\t</ul>
\t\t
\t<h3>Menu Style</h3>
\t<select id=\"menu-style\">
\t\t<option value=\"1\">Style 1</option>
\t\t<option value=\"2\">Style 2</option>
\t</select>

\t<h3>Background Image</h3>
\t\t <ul class=\"colors bg\" id=\"bg\">
\t\t\t<li><a href=\"#\" class=\"bg1\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg2\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg3\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg4\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg5\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg6\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg7\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg8\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg9\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg10\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg11\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg12\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg13\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg14\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg15\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg16\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg17\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg18\"></a></li>
\t\t</ul>
\t</div>

\t<div id=\"reset\"><a href=\"#\" class=\"button color blue\">Reset</a></div>

</section>
<!-- Style Switcher / End -->


</body>
</html>
";
    }

    // line 230
    public function block_contenu($context, array $blocks = array())
    {
        // line 231
        echo "        
    ";
    }

    // line 233
    public function block_body($context, array $blocks = array())
    {
    }

    // line 237
    public function block_bienvenu($context, array $blocks = array())
    {
        // line 238
        echo "        <div class=\"fos_user_user_show\">
    ";
    }

    // line 242
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 243
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ProjetFreelancerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 243,  787 => 242,  782 => 238,  779 => 237,  774 => 233,  769 => 231,  766 => 230,  697 => 587,  353 => 245,  351 => 242,  347 => 240,  345 => 237,  343 => 233,  341 => 230,  325 => 217,  321 => 216,  316 => 214,  311 => 212,  307 => 211,  303 => 210,  294 => 204,  289 => 202,  248 => 164,  241 => 160,  206 => 128,  141 => 66,  117 => 45,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  81 => 36,  77 => 35,  72 => 33,  68 => 32,  64 => 31,  53 => 23,  49 => 22,  31 => 7,  23 => 1,);
    }
}
