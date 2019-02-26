<?php

/* tournage.html.twig */
class __TwigTemplate_640a24651b373b80ea49453ee5d037bf0e1a4e1c8e995923c3b1030ce9d7cdeb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tournage.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournage.html.twig"));

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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"index.php\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS
                            DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page faq-page\">
        <section class=\"clean-block clean-faq dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">LIEUX DE TOURNAGE</h2>
                    <p>Découvrez quelques lieux de tournage sur ces cartes.</p>
                </div>
                <div class=\"block-content\"><iframe allowfullscreen=\"\" frameborder=\"0\" width=\"100%\" height=\"400\" src=\"https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11\"></iframe>
                    <div class=\"faq-item\">
                        <h4 class=\"question\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                        <div class=\"answer\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                </div>
                <div class=\"block-content\"><iframe allowfullscreen=\"\" frameborder=\"0\" width=\"100%\" height=\"400\" src=\"https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11\"></iframe>
                    <div class=\"faq-item\">
                        <h4 class=\"question\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                        <div class=\"answer\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
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
        return "tournage.html.twig";
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
        <div class=\"container\"><a class=\"navbar-brand logo\" href=\"#\" id=\"navbar-title-slp\">SUR LA PEAU&nbsp;</a><button
                    class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle
                    navigation</span><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navcol-1\">
                <ul class=\"nav navbar-nav ml-auto\">
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"index.php\">ACCUEIL</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"genese\">GENESE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"actors\">LES COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"scenario\">EXTRAITS
                            DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"gallery\">GallerIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"extraits\">EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"tournage\">LIEUX DE TOURNAGE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page faq-page\">
        <section class=\"clean-block clean-faq dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">LIEUX DE TOURNAGE</h2>
                    <p>Découvrez quelques lieux de tournage sur ces cartes.</p>
                </div>
                <div class=\"block-content\"><iframe allowfullscreen=\"\" frameborder=\"0\" width=\"100%\" height=\"400\" src=\"https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11\"></iframe>
                    <div class=\"faq-item\">
                        <h4 class=\"question\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                        <div class=\"answer\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                </div>
                <div class=\"block-content\"><iframe allowfullscreen=\"\" frameborder=\"0\" width=\"100%\" height=\"400\" src=\"https://www.google.com/maps/embed/v1/place?q=Paris%2C+France&amp;zoom=11\"></iframe>
                    <div class=\"faq-item\">
                        <h4 class=\"question\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                        <div class=\"answer\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                    <div class=\"faq-item\">
                        <div class=\"answer\"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "tournage.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/tournage.html.twig");
    }
}
