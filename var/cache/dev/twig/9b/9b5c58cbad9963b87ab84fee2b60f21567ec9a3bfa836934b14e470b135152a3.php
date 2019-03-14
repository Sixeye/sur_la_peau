<?php

/* registration.html.twig */
class __TwigTemplate_f966a05f6232d8e82bb32d1106f4f75fd5b86393b6252958ef5b83ce5cdb089d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration.html.twig"));

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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page registration-page\">
        <section class=\"clean-block clean-form dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">CREATION DU COMPTE</h2>
                    <p>Vous pouvez, ici, créer votre compte admnistrateur si vous possédez un e-mail valide.</p>
                </div>
                <form>
                    <div class=\"form-group\"><label for=\"name\">Nom</label><input class=\"form-control item\" type=\"text\" id=\"name\"></div>
                    <div class=\"form-group\"><label for=\"password\">Mot de passe</label><input class=\"form-control item\" type=\"password\" id=\"password\"></div>
                    <div class=\"form-group\"><label for=\"email\">E-mail</label><input class=\"form-control item\" type=\"email\" id=\"email\"></div><button class=\"btn btn-primary btn-block\" type=\"submit\">Créer</button></form>
            </div>
        </section>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration.html.twig";
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post-list\">ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"blog-post\">BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page registration-page\">
        <section class=\"clean-block clean-form dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">CREATION DU COMPTE</h2>
                    <p>Vous pouvez, ici, créer votre compte admnistrateur si vous possédez un e-mail valide.</p>
                </div>
                <form>
                    <div class=\"form-group\"><label for=\"name\">Nom</label><input class=\"form-control item\" type=\"text\" id=\"name\"></div>
                    <div class=\"form-group\"><label for=\"password\">Mot de passe</label><input class=\"form-control item\" type=\"password\" id=\"password\"></div>
                    <div class=\"form-group\"><label for=\"email\">E-mail</label><input class=\"form-control item\" type=\"email\" id=\"email\"></div><button class=\"btn btn-primary btn-block\" type=\"submit\">Créer</button></form>
            </div>
        </section>
    </main>

{% endblock %}", "registration.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/registration.html.twig");
    }
}
