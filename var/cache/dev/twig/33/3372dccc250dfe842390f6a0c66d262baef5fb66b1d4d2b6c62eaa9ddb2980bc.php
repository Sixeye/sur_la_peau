<?php

/* jmg.html.twig */
class __TwigTemplate_c47d1f28ffa96bcab52e3e14fab2b72d64bc13436917314eb0597955d4b4aff4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jmg.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jmg.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jmg.html.twig"));

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
                    <h2 class=\"text-info\">JEAN-MARIE GODET</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/jean_marie_godet.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Jean-Marie Godet</h4><p class=\"card-text\">Agent <a href=\"https://www.e-talenta.eu/members/profile/jean-marie-godet\" target=\"blank\">e-talenta</a></p></div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Né en région parisienne, il grandi en Italie où il à fréquenté les planches italiennes de 1987 à 1996. <br>Il continue son chemin dans l’art dramatique avec le Théâtre du Nouveau Monde de Montpellier, créé<br>au Théâtre
                        de l’Epée de Bois à la Cartoucherie de Vincennes. Ensuite il s’installe à Paris où il tourne<br>dans plusieurs court-métrages et dans le long-métrage Frappes Interdites, pour la chaîne Arte.<br>Le cinéma lui ouvre ses portes avec
                        une comédie italienne tournée à Cuba dans <em>Faccio un salto all’Avana&nbsp;</em>dans une affaire de sexe tourisme, suivi de <em>Un nuage dans un verre d’eau</em>, un personnage trublion et&nbsp;<em>Nazar Palmus</em> en Lieutenant&nbsp;de&nbsp;Police.<br><br><a href=\"https://www.imdb.com/name/nm2235236/?ref_=nmbio_bio_nm\" target=\"blank\"><i class=\"icon-film\"></i></a><br></p>
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
        return "jmg.html.twig";
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
                    <h2 class=\"text-info\">JEAN-MARIE GODET</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/jean_marie_godet.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Jean-Marie Godet</h4><p class=\"card-text\">Agent <a href=\"https://www.e-talenta.eu/members/profile/jean-marie-godet\" target=\"blank\">e-talenta</a></p></div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Né en région parisienne, il grandi en Italie où il à fréquenté les planches italiennes de 1987 à 1996. <br>Il continue son chemin dans l’art dramatique avec le Théâtre du Nouveau Monde de Montpellier, créé<br>au Théâtre
                        de l’Epée de Bois à la Cartoucherie de Vincennes. Ensuite il s’installe à Paris où il tourne<br>dans plusieurs court-métrages et dans le long-métrage Frappes Interdites, pour la chaîne Arte.<br>Le cinéma lui ouvre ses portes avec
                        une comédie italienne tournée à Cuba dans <em>Faccio un salto all’Avana&nbsp;</em>dans une affaire de sexe tourisme, suivi de <em>Un nuage dans un verre d’eau</em>, un personnage trublion et&nbsp;<em>Nazar Palmus</em> en Lieutenant&nbsp;de&nbsp;Police.<br><br><a href=\"https://www.imdb.com/name/nm2235236/?ref_=nmbio_bio_nm\" target=\"blank\"><i class=\"icon-film\"></i></a><br></p>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "jmg.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/jmg.html.twig");
    }
}
