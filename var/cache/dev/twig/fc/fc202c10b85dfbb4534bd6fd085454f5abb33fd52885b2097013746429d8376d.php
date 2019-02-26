<?php

/* blog-post-list.html.twig */
class __TwigTemplate_3336fd40cf6ee62230f5bcdd1dc70b81d9df877812ef62ec512f3d292ae34e11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog-post-list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog-post-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog-post-list.html.twig"));

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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"index.php\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page blog-post-list\">
        <section id=\"actualites_bg\" class=\"clean-block clean-blog-list dark\">
            <div class=\"container\">
                <div id=\"actualites_title_bg\" class=\"block-heading\">
                    <h2 class=\"text-info\">ACTUALITES</h2>
                    <p>Voici des nouvelles de la vie du film, rencontres, débats, projections...<br><br></p>
                </div>
                <div id=\"content-blog-list\" class=\"block-content\">
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Projection</h3>
                                <div class=\"info\"><span class=\"text-muted\">16.02.19 par&nbsp;<a href=\"#\">Camille Jouhair</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Débat</h3>
                                <div class=\"info\"><span class=\"text-muted\">14.02.19 par&nbsp;<a href=\"#\">Srinath</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Projection</h3>
                                <div class=\"info\"><span class=\"text-muted\">03.05.19 par &nbsp;<a href=\"#\">Camille Jouhair</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Rencontre</h3>
                                <div class=\"info\"><span class=\"text-muted\">21.05.19 par&nbsp;<a href=\"#\">Mélanie Peyre</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
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
        return "blog-post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"index.php\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page blog-post-list\">
        <section id=\"actualites_bg\" class=\"clean-block clean-blog-list dark\">
            <div class=\"container\">
                <div id=\"actualites_title_bg\" class=\"block-heading\">
                    <h2 class=\"text-info\">ACTUALITES</h2>
                    <p>Voici des nouvelles de la vie du film, rencontres, débats, projections...<br><br></p>
                </div>
                <div id=\"content-blog-list\" class=\"block-content\">
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Projection</h3>
                                <div class=\"info\"><span class=\"text-muted\">16.02.19 par&nbsp;<a href=\"#\">Camille Jouhair</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Débat</h3>
                                <div class=\"info\"><span class=\"text-muted\">14.02.19 par&nbsp;<a href=\"#\">Srinath</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Projection</h3>
                                <div class=\"info\"><span class=\"text-muted\">03.05.19 par &nbsp;<a href=\"#\">Camille Jouhair</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                    <div class=\"clean-blog-post\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\"><img class=\"rounded img-fluid\" src=\"/img/actors/M_AFFICHE_SLP.jpg\"></div>
                            <div class=\"col-lg-7\">
                                <h3>Rencontre</h3>
                                <div class=\"info\"><span class=\"text-muted\">21.05.19 par&nbsp;<a href=\"#\">Mélanie Peyre</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                    vitae leo.</p><button class=\"btn btn-outline btn-light btn-sm\" type=\"button\">Lire</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "blog-post-list.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/blog-post-list.html.twig");
    }
}
