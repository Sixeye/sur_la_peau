<?php

/* actors.html.twig */
class __TwigTemplate_2e8fb73cd2668a8177bc77bc1f0893d70944b994fdd23396ad9819a47071e9d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actors.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors.html.twig"));

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
        <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div
                    class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"home\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page catalog-page\">
        <section id=\"g_bg\" class=\"clean-block clean-catalog dark\">
            <div class=\"container\" id=\"pics_bg\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\" id=\"comediens\">LES COMEDIENS</h2>
                    <p>Découvrez les comédiens</p>
                </div>
                <div class=\"products\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"melaniepeyre.html\"><img src=\"/img/actors/s_melanie_peyre.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div><a href=\"melaniepeyre.html\">MELANIE PEYRE</a></div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"zbds.html\"><img src=\"/img/actors/s_zoe_bds.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"zbds.html\">Zoé Besmond De Senneville</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"jmg.html\"><img src=\"/img/actors/s_jean_marie_godet.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"jmg.html\">Jean-Marie Godet</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"edgars.html\"><img class=\"img-fluid d-block mx-auto\" src=\"/img/actors/s_edgar_sekloka.jpg\" /></a></div>
                                <div class=\"product-name\"><a href=\"edgars.html\">Edgar Sekloka</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"massimob.html\"><img src=\"/img/actors/S_AFFICHE_SLP.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"massimob.html\">Massimo Bellini</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"christianm.html\"><img src=\"/img/actors/s_christian_mupondo.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"christianm.html\">Christian Mupondo</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"jmc.html\"><img src=\"/img/actors/s_jean_michel_correia.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"jmc.html\">Jean-Michel Correia</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"alexmartin.html\"><img src=\"/img/actors/s_alex_martin.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"alexmartin.html\">Alex Martin</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"antoineb.html\"><img src=\"/img/actors/s_antoine_basler.jpg\" class=\"img-fluid d-block mx-auto\" /></a><a href=\"#\"></a></div>
                                <div class=\"product-name\"><a href=\"antoineb.html\">Antoine Basler</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content\"></div>
            </div>
        </section>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "actors.html.twig";
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"home\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page catalog-page\">
        <section id=\"g_bg\" class=\"clean-block clean-catalog dark\">
            <div class=\"container\" id=\"pics_bg\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\" id=\"comediens\">LES COMEDIENS</h2>
                    <p>Découvrez les comédiens</p>
                </div>
                <div class=\"products\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"melaniepeyre.html\"><img src=\"/img/actors/s_melanie_peyre.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div><a href=\"melaniepeyre.html\">MELANIE PEYRE</a></div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"zbds.html\"><img src=\"/img/actors/s_zoe_bds.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"zbds.html\">Zoé Besmond De Senneville</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"jmg.html\"><img src=\"/img/actors/s_jean_marie_godet.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"jmg.html\">Jean-Marie Godet</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"edgars.html\"><img class=\"img-fluid d-block mx-auto\" src=\"/img/actors/s_edgar_sekloka.jpg\" /></a></div>
                                <div class=\"product-name\"><a href=\"edgars.html\">Edgar Sekloka</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"massimob.html\"><img src=\"/img/actors/S_AFFICHE_SLP.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"massimob.html\">Massimo Bellini</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"christianm.html\"><img src=\"/img/actors/s_christian_mupondo.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"christianm.html\">Christian Mupondo</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"jmc.html\"><img src=\"/img/actors/s_jean_michel_correia.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"jmc.html\">Jean-Michel Correia</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"alexmartin.html\"><img src=\"/img/actors/s_alex_martin.jpg\" class=\"img-fluid d-block mx-auto\" /></a></div>
                                <div class=\"product-name\"><a href=\"alexmartin.html\">Alex Martin</a></div>
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"clean-product-item\">
                                <div class=\"image\"><a href=\"antoineb.html\"><img src=\"/img/actors/s_antoine_basler.jpg\" class=\"img-fluid d-block mx-auto\" /></a><a href=\"#\"></a></div>
                                <div class=\"product-name\"><a href=\"antoineb.html\">Antoine Basler</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content\"></div>
            </div>
        </section>
    </main>
{% endblock %}", "actors.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/actors.html.twig");
    }
}
