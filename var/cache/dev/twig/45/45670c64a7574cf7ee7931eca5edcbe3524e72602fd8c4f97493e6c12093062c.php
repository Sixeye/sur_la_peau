<?php

/* gallery.html.twig */
class __TwigTemplate_c8547451df0f6b8149fb00f65666b2c628633715e780f3fbdc61a370e5e49589 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gallery.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gallery.html.twig"));

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
        echo "    <nav class=\"navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar\" id=\"head_bg\">
        <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button
                    class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle
                    navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
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
        echo ">EXTRAITS
                            DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=";
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
    <main class=\"page gallery-page\">
        <section id=\"gallery_bg\" class=\"clean-block clean-gallery dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">IMAGES DU FILM</h2>
                    <p>Voici quelques photogrammes directement tirés du film.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__01457.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__01457_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__02472.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__02472_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__10569.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__10569_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__11656.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__11656_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__119554.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__119554_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__16576.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__16576_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__34820.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__34820_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__42238.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__42238_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__54398.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__54398_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__18612.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__18612_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__19769.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__19769_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__22230.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__22230_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
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
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  86 => 17,  82 => 16,  78 => 15,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('scenario') }}>EXTRAITS
                            DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href={{ path('gallery') }}>GALLERIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('extraits') }}>EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post-list') }}>ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post') }}>BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page gallery-page\">
        <section id=\"gallery_bg\" class=\"clean-block clean-gallery dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">IMAGES DU FILM</h2>
                    <p>Voici quelques photogrammes directement tirés du film.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__01457.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__01457_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__02472.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__02472_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__10569.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__10569_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__11656.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__11656_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__119554.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__119554_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__16576.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__16576_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__34820.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__34820_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__42238.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__42238_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__54398.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__54398_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__18612.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__18612_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__19769.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__19769_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                    <div class=\"col-md-6 col-lg-4 item\"><a href=\"/img/gallery/SURLAPEAU2017__22230.jpeg\" class=\"lightbox\"><img src=\"/img/gallery/thumbnail_movie/SURLAPEAU2017__22230_S.jpeg\" class=\"img-thumbnail img-fluid image\" /></a></div>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "gallery.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/gallery.html.twig");
    }
}
