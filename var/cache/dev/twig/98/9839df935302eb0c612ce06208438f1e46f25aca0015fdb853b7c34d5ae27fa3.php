<?php

/* edgars.html.twig */
class __TwigTemplate_474029613f697c5c238d7d8ae0990b05e4921aca90cb2ff4077dee1b67a45803 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "edgars.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edgars.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edgars.html.twig"));

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
        <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button
                    class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle
                    navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genese");
        echo ">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actors");
        echo ">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("scenario");
        echo ">EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo ">GALLERIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("extraits");
        echo ">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-post-list");
        echo ">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=";
        // line 18
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
                    <h2 class=\"text-info\">EDGAR SEKLOKA</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/edgar_sekloka.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Edgar Sekloka</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>auteur-compositeur-interprète<br>Années 2000, Edgar rencontre le chanteur-poète Apkass qui en 2004, pour la commémoration des<br>dix ans du génocide des Tutsi du Rwanda, monte une pièce de théâtre-slam intitulée L’éclipse
                        des<br>cent jours. D'où émergera le collectif Chant d’encre.<br>2006-2007, Tibo Bérard, éditeur Xprim’ au sein des éditions Sarbacane, propose à Edgar d'écrire un<br>roman.<br>2008, Edgar publie son premier roman, Coffee et fonde
                        le groupe Milk Coffee and Sugar avec Gaël<br>Faye ainsi que Touria El Haouzi en manager.<br>2009, l'album éponyme du groupe Milk Coffee &amp; Sugar est lancé.<br>2011, Edgar publie son deuxième roman, Adulte à présent aux éditions
                        Sarbacane.<br>2012, Edgar publie le recueil de poèmes 'tite chose dans la maison d'édition Carnets-Livres.<br>2015, Edgar quitte le groupe.<br>2016, Edgar sort un EP Ici / Là-bas, avec l'aide à l'autoproduction de la Sacem.<br>2016-2017,
                        Edgar entame un cycle de cinés-jams avec les cinémas mk2, cinés-concerts dans lesquels<br>il revisite les courts-métrages de Charlie Chaplin en invitant des artistes d'horizons variés, de Radikal<br>MC à Lou Marco en passant par
                        JP Manova, Mélissa Laveaux ou encore FM Laeti.<br>Juin 2018, Edgar sort le EP Chaplinesques<br>Novembre 2018, Edgar est lauréat du Prix des Musiques d'ici dans le cadre du festival Villes Des<br>Musiques Du Monde.<br>Parallèlement
                        à la musique et aux lettres, Edgar anime des ateliers d’écriture.<br><br>Bibliographie<br>2008 - Coffee, collection Xprim, éditions Sarbacane, roman<br>2011 - Adulte à présent collection Xprim, éditions Sarbacane, roman<br>2012
                        - ‘Tite Chose, éditions Carnets-Livres, recueil de poèmes à venir<br>jan 2019 – Jou, éditions Carnets-Livres, recueil de poèmes<br>2019 – roman à suivre chez L'Iconoclaste<br>Discographie<br>2010 – Milk Coffee and Sugar, 6D Production,
                        Musicast<br>2016 – Ici / Là-bas, SUGA MUSIC<br>2018 – Chaplinesques, SUGA MUSIC<br><br>Films<br>2015 – Nazar Palmus de Srinath C. Samarasinghe<br>2017 – Sur la Peau de Srinath C.&nbsp;Samarasinghe<br></p>
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
        return "edgars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\" id=\"head_bg\">
        <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button
                    class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle
                    navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
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
                    <h2 class=\"text-info\">EDGAR SEKLOKA</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/edgar_sekloka.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Edgar Sekloka</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>auteur-compositeur-interprète<br>Années 2000, Edgar rencontre le chanteur-poète Apkass qui en 2004, pour la commémoration des<br>dix ans du génocide des Tutsi du Rwanda, monte une pièce de théâtre-slam intitulée L’éclipse
                        des<br>cent jours. D'où émergera le collectif Chant d’encre.<br>2006-2007, Tibo Bérard, éditeur Xprim’ au sein des éditions Sarbacane, propose à Edgar d'écrire un<br>roman.<br>2008, Edgar publie son premier roman, Coffee et fonde
                        le groupe Milk Coffee and Sugar avec Gaël<br>Faye ainsi que Touria El Haouzi en manager.<br>2009, l'album éponyme du groupe Milk Coffee &amp; Sugar est lancé.<br>2011, Edgar publie son deuxième roman, Adulte à présent aux éditions
                        Sarbacane.<br>2012, Edgar publie le recueil de poèmes 'tite chose dans la maison d'édition Carnets-Livres.<br>2015, Edgar quitte le groupe.<br>2016, Edgar sort un EP Ici / Là-bas, avec l'aide à l'autoproduction de la Sacem.<br>2016-2017,
                        Edgar entame un cycle de cinés-jams avec les cinémas mk2, cinés-concerts dans lesquels<br>il revisite les courts-métrages de Charlie Chaplin en invitant des artistes d'horizons variés, de Radikal<br>MC à Lou Marco en passant par
                        JP Manova, Mélissa Laveaux ou encore FM Laeti.<br>Juin 2018, Edgar sort le EP Chaplinesques<br>Novembre 2018, Edgar est lauréat du Prix des Musiques d'ici dans le cadre du festival Villes Des<br>Musiques Du Monde.<br>Parallèlement
                        à la musique et aux lettres, Edgar anime des ateliers d’écriture.<br><br>Bibliographie<br>2008 - Coffee, collection Xprim, éditions Sarbacane, roman<br>2011 - Adulte à présent collection Xprim, éditions Sarbacane, roman<br>2012
                        - ‘Tite Chose, éditions Carnets-Livres, recueil de poèmes à venir<br>jan 2019 – Jou, éditions Carnets-Livres, recueil de poèmes<br>2019 – roman à suivre chez L'Iconoclaste<br>Discographie<br>2010 – Milk Coffee and Sugar, 6D Production,
                        Musicast<br>2016 – Ici / Là-bas, SUGA MUSIC<br>2018 – Chaplinesques, SUGA MUSIC<br><br>Films<br>2015 – Nazar Palmus de Srinath C. Samarasinghe<br>2017 – Sur la Peau de Srinath C.&nbsp;Samarasinghe<br></p>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "edgars.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/edgars.html.twig");
    }
}
