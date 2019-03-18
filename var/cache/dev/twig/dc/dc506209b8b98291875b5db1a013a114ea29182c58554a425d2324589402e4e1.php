<?php

/* jmc.html.twig */
class __TwigTemplate_826ab9a0ae4a381fce4c3c6c90a2dfd1e97d0c8fb6df696042ee5e9d4f993c1b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jmc.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jmc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jmc.html.twig"));

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
                    <h2 class=\"text-info\">JEAN-MICHEL CORREIA</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/jean_michel_correia.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Jean-Michel Correia</h4><p class=\"card-text\">Agent <a href=\"http://www.ubba.eu/fiche.cfm/395914_115-2_jean-michel-correia.html\" target=\"blank\">UBBA</a></p>
                                    <div class=\"icons\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Après plusieurs années passées en prison, Jean-Michel a recroisé un ami producteur l’a encouragé à écrire, notamment sur son histoire. Il avait particpé à un atelier d’écriture en détention, et collaboré à une revue éditée
                        là-bas,&nbsp;<em>Paroles Fleury</em>. Cette écriture l'a emmené à la réalisation de son premier long métrage <em>Sous X.</em>&nbsp; <br>Il avait tout d’abord croisé Jean-François Richet.&nbsp;Il avait apprécié son travail d'écriture
                        et lui avait permis de devenir chauffeur de production sur <em>Mesrine</em>. Il a ensuite rencontré Thomas Bidegain&nbsp;qui a vu en lui du talent. Il l’a appelé pour qu'il soit son conseiller technique au vu de son expérience
                        carcérale.<br></p>
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
        return "jmc.html.twig";
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
                    <h2 class=\"text-info\">JEAN-MICHEL CORREIA</h2>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"card clean-card text-center\"><img class=\"card-img-top w-100 d-block\" src=\"/img/actors/jean_michel_correia.jpg\">
                                <div class=\"card-body info\">
                                    <h4 class=\"card-title\">Jean-Michel Correia</h4><p class=\"card-text\">Agent <a href=\"http://www.ubba.eu/fiche.cfm/395914_115-2_jean-michel-correia.html\" target=\"blank\">UBBA</a></p>
                                    <div class=\"icons\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><br><br><br>Après plusieurs années passées en prison, Jean-Michel a recroisé un ami producteur l’a encouragé à écrire, notamment sur son histoire. Il avait particpé à un atelier d’écriture en détention, et collaboré à une revue éditée
                        là-bas,&nbsp;<em>Paroles Fleury</em>. Cette écriture l'a emmené à la réalisation de son premier long métrage <em>Sous X.</em>&nbsp; <br>Il avait tout d’abord croisé Jean-François Richet.&nbsp;Il avait apprécié son travail d'écriture
                        et lui avait permis de devenir chauffeur de production sur <em>Mesrine</em>. Il a ensuite rencontré Thomas Bidegain&nbsp;qui a vu en lui du talent. Il l’a appelé pour qu'il soit son conseiller technique au vu de son expérience
                        carcérale.<br></p>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "jmc.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/jmc.html.twig");
    }
}
