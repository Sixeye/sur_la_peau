<?php

/* home.html.twig */
class __TwigTemplate_ee3d13c9e8defdb1b12ced9aff8d57ddcc1ac9999a6fb9395bdc906abcac5700 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\" id=\"head_bg\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div
                class=\"collapse navbar-collapse\" id=\"navcol-1\">
            <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">ACCUEIL</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genese");
        echo ">GENESE</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actors");
        echo ">LES COMEDIENS</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("scenario");
        echo ">EXTRAITS DU SCENARIO</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo ">GALLERIE</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("extraits");
        echo ">EXTRAITS DU FILM</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-post-list");
        echo ">ACTUALITES</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-post");
        echo ">BLOG</a></li>
            </ul>
        </div>
    </div>
</nav>
<main id=\"global-bg\" class=\"page landing-page\">
    <section class=\"clean-block clean-hero\" style=\"background-image: url(&quot;img/gallery/SURLAPEAU2017__64511BG.jpg&quot;);color: rgba(255,196,196,0.90);\">
        <div id=\"intro-text\" class=\"text\"><h2 id=\"big-title\">SUR LA PEAU</h2>
            <p>Un long métrage avec&nbsp;<br>Mélanie Peyre,<br>Zoé Besmond De Senneville, Jean-Marie Godet, Edgar Sekloka,<br>Massimo Bellini, Christian Mupondo<br>et<br>avec l'aimable participation de<br>Antoine Basler<br>Jean-Michel Correia<br>Alex
                Martin<br><br></p><button class=\"btn btn-outline-light btn-lg\" type=\"button\" id=\"roman_btn\"><a target=\"_blank\" href=\"http://www.srinath-pro.com/slp_roman\">LE ROMAN</a></button>
            <p><br><a href=\"#synopsis\"><i class=\"fas fa-angle-down\"></i></a><br><br></p>
        </div>
    </section>
    <section id=\"synopsis\" class=\"clean-block clean-info dark\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">Synopsis</h2>
                <p>Après une nuit festive, Anna Kilius se réveille dans un terrain vague près d'une gare de banlieue parisienne. &nbsp;Droguée et abusée, elle se confronte à un policier sceptique qui rechigne à prendre son dépôt de plainte. <br>Vexée,
                    elle sort du commissariat et&nbsp;démarre ainsi la traque de son violeur grâce à l'hyperosmie, une grande mémoire olfactive...</p>
            </div>
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"video-container\"><iframe allowfullscreen frameborder=\"0\" src=\"https://player.vimeo.com/video/217971956\"></iframe></div>
                </div>
                <div class=\"col-md-6\"><h4>BANDE ANNONCE</h4>
                    <div class=\"getting-started-info\">
                        <p>SORTIE PREVUE le 8 mai 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#actualites-bg\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"actualites-bg\" class=\"clean-block features\">
        <div class=\"container\">
            <div class=\"block-heading\"><h2 class=\"text-info\">Actualités</h2>
                <p>Consultez les actualités du film</p>
            </div>
            <div class=\"row justify-content-center\"><div class=\"col-md-5 feature-box\"><a href=\"blog-post-list\"><i class=\"icon-clock icon\" id=\"actualites_icon\"></i>
                        <h4>Actualités</h4>
                        <p>Les dernières actualités du film </p></a>
                </div><div class=\"col-md-5 feature-box\"><a href=\"blog-post\"><i class=\"icon-book-open icon\" id=\"blog_icon\"></i>
                        <h4>Blog</h4>
                        <p>La vie et les péripéties du film </p></a>
                </div></div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#home-slider\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"home-slider\" class=\"clean-block slider dark\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">Consultez notre gallerie</h2><a href=\"gallery\"><p>Quelques photogrammes du film</p></a></div>
            <div class=\"carousel slide\" data-ride=\"carousel\" id=\"carousel-1\">
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__10569.jpeg\" alt=\"Slide Image\"></div>
                    <div class=\"carousel-item\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__54345.jpeg\" alt=\"Slide Image\"></div>
                    <div class=\"carousel-item\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__16576.jpeg\" alt=\"Slide Image\"></div>
                </div>
                <div><a class=\"carousel-control-prev\" href=\"#carousel-1\" role=\"button\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span><span class=\"sr-only\">Previous</span></a><a class=\"carousel-control-next\" href=\"#carousel-1\" role=\"button\"
                                                                                                                                                                                                     data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span><span class=\"sr-only\">Next</span></a></div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-1\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-1\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-1\" data-slide-to=\"2\"></li>
                </ol>
            </div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#apropos-bg\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"apropos-bg\" class=\"clean-block about-us\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">A propos du réalisateur</h2>
                <p>Srinath a commencé par quelques courts-métrages<br>puis a réalisé son premier long métrage <br>\"Un nuage dans un verre d’eau\" <br>avec <br>Anamaria Marinca et Gamil Ratib <br>puis un second long métrage <br>\"Nazar Palmus\" avec Sigrid
                    Bouaziz. <br>\"Sur la peau\" est son troisième long métrage.<br></p>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"card clean-card text-center\">
                        <div class=\"card-body info\" id=\"id-srinath\">
                            <h4 class=\"card-title\">Srinath</h4>
                            <p class=\"card-text\">scénariste - réalisateur</p>
                            <div class=\"icons\"><a href=\"https://www.instagram.com/srinathparis/\" target=\"blank\"><i class=\"icon-social-instagram\"></i></a><a href=\"https://twitter.com/Sirnath\" target=\"blank\"><i class=\"icon-social-twitter\"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\" id=\"head_bg\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div
                class=\"collapse navbar-collapse\" id=\"navcol-1\">
            <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href={{ path('home') }}>ACCUEIL</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('genese') }}>GENESE</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('actors') }}>LES COMEDIENS</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('scenario') }}>EXTRAITS DU SCENARIO</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('gallery') }}>GALLERIE</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('extraits') }}>EXTRAITS DU FILM</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post-list') }}>ACTUALITES</a></li>
                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post') }}>BLOG</a></li>
            </ul>
        </div>
    </div>
</nav>
<main id=\"global-bg\" class=\"page landing-page\">
    <section class=\"clean-block clean-hero\" style=\"background-image: url(&quot;img/gallery/SURLAPEAU2017__64511BG.jpg&quot;);color: rgba(255,196,196,0.90);\">
        <div id=\"intro-text\" class=\"text\"><h2 id=\"big-title\">SUR LA PEAU</h2>
            <p>Un long métrage avec&nbsp;<br>Mélanie Peyre,<br>Zoé Besmond De Senneville, Jean-Marie Godet, Edgar Sekloka,<br>Massimo Bellini, Christian Mupondo<br>et<br>avec l'aimable participation de<br>Antoine Basler<br>Jean-Michel Correia<br>Alex
                Martin<br><br></p><button class=\"btn btn-outline-light btn-lg\" type=\"button\" id=\"roman_btn\"><a target=\"_blank\" href=\"http://www.srinath-pro.com/slp_roman\">LE ROMAN</a></button>
            <p><br><a href=\"#synopsis\"><i class=\"fas fa-angle-down\"></i></a><br><br></p>
        </div>
    </section>
    <section id=\"synopsis\" class=\"clean-block clean-info dark\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">Synopsis</h2>
                <p>Après une nuit festive, Anna Kilius se réveille dans un terrain vague près d'une gare de banlieue parisienne. &nbsp;Droguée et abusée, elle se confronte à un policier sceptique qui rechigne à prendre son dépôt de plainte. <br>Vexée,
                    elle sort du commissariat et&nbsp;démarre ainsi la traque de son violeur grâce à l'hyperosmie, une grande mémoire olfactive...</p>
            </div>
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"video-container\"><iframe allowfullscreen frameborder=\"0\" src=\"https://player.vimeo.com/video/217971956\"></iframe></div>
                </div>
                <div class=\"col-md-6\"><h4>BANDE ANNONCE</h4>
                    <div class=\"getting-started-info\">
                        <p>SORTIE PREVUE le 8 mai 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#actualites-bg\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"actualites-bg\" class=\"clean-block features\">
        <div class=\"container\">
            <div class=\"block-heading\"><h2 class=\"text-info\">Actualités</h2>
                <p>Consultez les actualités du film</p>
            </div>
            <div class=\"row justify-content-center\"><div class=\"col-md-5 feature-box\"><a href=\"blog-post-list\"><i class=\"icon-clock icon\" id=\"actualites_icon\"></i>
                        <h4>Actualités</h4>
                        <p>Les dernières actualités du film </p></a>
                </div><div class=\"col-md-5 feature-box\"><a href=\"blog-post\"><i class=\"icon-book-open icon\" id=\"blog_icon\"></i>
                        <h4>Blog</h4>
                        <p>La vie et les péripéties du film </p></a>
                </div></div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#home-slider\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"home-slider\" class=\"clean-block slider dark\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">Consultez notre gallerie</h2><a href=\"gallery\"><p>Quelques photogrammes du film</p></a></div>
            <div class=\"carousel slide\" data-ride=\"carousel\" id=\"carousel-1\">
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__10569.jpeg\" alt=\"Slide Image\"></div>
                    <div class=\"carousel-item\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__54345.jpeg\" alt=\"Slide Image\"></div>
                    <div class=\"carousel-item\"><img class=\"w-100 d-block\" src=\"img/gallery/SURLAPEAU2017__16576.jpeg\" alt=\"Slide Image\"></div>
                </div>
                <div><a class=\"carousel-control-prev\" href=\"#carousel-1\" role=\"button\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span><span class=\"sr-only\">Previous</span></a><a class=\"carousel-control-next\" href=\"#carousel-1\" role=\"button\"
                                                                                                                                                                                                     data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span><span class=\"sr-only\">Next</span></a></div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-1\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-1\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-1\" data-slide-to=\"2\"></li>
                </ol>
            </div>
        </div>
        <div class=\"block-heading\">
            <p><a href=\"#apropos-bg\"><i class=\"fas fa-angle-down\"></i></a></p>
        </div>
    </section>
    <section id=\"apropos-bg\" class=\"clean-block about-us\">
        <div class=\"container\">
            <div class=\"block-heading\">
                <h2 class=\"text-info\">A propos du réalisateur</h2>
                <p>Srinath a commencé par quelques courts-métrages<br>puis a réalisé son premier long métrage <br>\"Un nuage dans un verre d’eau\" <br>avec <br>Anamaria Marinca et Gamil Ratib <br>puis un second long métrage <br>\"Nazar Palmus\" avec Sigrid
                    Bouaziz. <br>\"Sur la peau\" est son troisième long métrage.<br></p>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"card clean-card text-center\">
                        <div class=\"card-body info\" id=\"id-srinath\">
                            <h4 class=\"card-title\">Srinath</h4>
                            <p class=\"card-text\">scénariste - réalisateur</p>
                            <div class=\"icons\"><a href=\"https://www.instagram.com/srinathparis/\" target=\"blank\"><i class=\"icon-social-instagram\"></i></a><a href=\"https://twitter.com/Sirnath\" target=\"blank\"><i class=\"icon-social-twitter\"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

{% endblock %}", "home.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/home.html.twig");
    }
}
