<?php

/* antoineb.html.twig */
class __TwigTemplate_e14e3585514a4f48ba3355d0cf4a9ab44f42280b4be813966954ec1c9796c4cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "antoineb.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "antoineb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "antoineb.html.twig"));

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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
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
    <main class=\"page\">
        <section class=\"clean-block about-us\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">ANTOINE BASLER</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/antoine_basler.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Antoine Basler</h4><p class=\"card-text\">Agent <a href=\"http://www.lesagentsassocies.com/artiste.cfm/657083-antoine_basler.html\" target=\"blank\">Agents Associés</a></p></div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Après être entré au conservatoire d’Art Dramatique de Genève à l’âge de dix sept ans, Antoine Basler a commencé au théâtre avec Benno Besson. <br>Il entre ensuite au Conservatoire National Supérieur d’Art Dramatique de
                        Paris en 1985, où il a comme<br>professeur, Jean-Pierre Vincent et Claude Régi. <br>A partir de 1988, date de sa sortie, il<br>enchaîne les projets de théâtre avec des metteurs en scène comme Mathias Langhof<br>ou Bernard Sobel,
                        Claude Régy, Yves Beaunesne, Elisabeth Chailloux, Didier Bezace, Adel Hakim, Laurent Laffargue, etc. Il a joué tous les répertoires, tant classiques que contemporains. Antoine Basler a joué dans plus d’une trentaine de longs métrages,
                        réalisés entre autres par <br>Olivier Assayas, Jan Kounen, Eric Rohmer,<br>Jacques Audiard, Julien Leclerc, etc... <br>Parallèlement à cela, il a fait plusieurs mises<br>en scène, et donné des cours à plusieurs reprises, il enseigne
                        depuis septembre 2017 au Cours Florent à Bordeaux. <br>Depuis 2014, il a réalisé plusieurs cours<br>métrages, dont « Le chant des Mygales » et « Love » sélectionnés en Festival. <br>Il a également coréalisé un documentaire “ EHPAD
                        stories” avec Elsa Basler. Il continue à écrire et monter des projets, tant cinématographiques que théâtraux et à exercer le métier de comédien avec beaucoup de plaisir.<br></p>
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
        return "antoineb.html.twig";
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('home') }}>ACCUEIL</a></li>
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
    <main class=\"page\">
        <section class=\"clean-block about-us\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">ANTOINE BASLER</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/antoine_basler.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Antoine Basler</h4><p class=\"card-text\">Agent <a href=\"http://www.lesagentsassocies.com/artiste.cfm/657083-antoine_basler.html\" target=\"blank\">Agents Associés</a></p></div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Après être entré au conservatoire d’Art Dramatique de Genève à l’âge de dix sept ans, Antoine Basler a commencé au théâtre avec Benno Besson. <br>Il entre ensuite au Conservatoire National Supérieur d’Art Dramatique de
                        Paris en 1985, où il a comme<br>professeur, Jean-Pierre Vincent et Claude Régi. <br>A partir de 1988, date de sa sortie, il<br>enchaîne les projets de théâtre avec des metteurs en scène comme Mathias Langhof<br>ou Bernard Sobel,
                        Claude Régy, Yves Beaunesne, Elisabeth Chailloux, Didier Bezace, Adel Hakim, Laurent Laffargue, etc. Il a joué tous les répertoires, tant classiques que contemporains. Antoine Basler a joué dans plus d’une trentaine de longs métrages,
                        réalisés entre autres par <br>Olivier Assayas, Jan Kounen, Eric Rohmer,<br>Jacques Audiard, Julien Leclerc, etc... <br>Parallèlement à cela, il a fait plusieurs mises<br>en scène, et donné des cours à plusieurs reprises, il enseigne
                        depuis septembre 2017 au Cours Florent à Bordeaux. <br>Depuis 2014, il a réalisé plusieurs cours<br>métrages, dont « Le chant des Mygales » et « Love » sélectionnés en Festival. <br>Il a également coréalisé un documentaire “ EHPAD
                        stories” avec Elsa Basler. Il continue à écrire et monter des projets, tant cinématographiques que théâtraux et à exercer le métier de comédien avec beaucoup de plaisir.<br></p>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "antoineb.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/antoineb.html.twig");
    }
}
