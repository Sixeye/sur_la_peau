<?php

/* contact.html.twig */
class __TwigTemplate_d1b9d8be95929e16c0c88be33c25958f39b5fdf48c4d6663493dfa2a93e2ebb7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

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
        echo ">COMEDIENS</a></li>
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
    <main class=\"page contact-us-page\">
        <section class=\"clean-block clean-form dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">Nous écrire</h2>
                    <p>N'hésitez pas à nous contacter afin d'avoir des informations sur le film.</p>
                </div>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                <div id=\"contactForm\" class=\"mt-4\">
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col \">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "lastname", []), 'row');
        echo "</div>
                        <div class=\"col \">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "subject", []), 'row');
        echo "</div>
                        <div class=\"col \">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "email", []), 'row');
        echo "</div>
                        <div class=\"col m-3\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "content", []), 'row');
        echo "</div>
                    </div>
                    <div class=\"form-group\"><button class=\"btn btn-light btn-block\" type=\"submit\">Envoyer</button></div>
                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
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
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  120 => 33,  117 => 32,  108 => 30,  104 => 29,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('actors') }}>COMEDIENS</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('scenario') }}>EXTRAITS DU SCENARIO</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('gallery') }}>GALLERIE</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('extraits') }}>EXTRAITS DU FILM</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post-list') }}>ACTUALITES</a></li>
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href={{ path('blog-post') }}>BLOG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class=\"page contact-us-page\">
        <section class=\"clean-block clean-form dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">Nous écrire</h2>
                    <p>N'hésitez pas à nous contacter afin d'avoir des informations sur le film.</p>
                </div>
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">{{ message }}</div>
                {% endfor %}
                <div id=\"contactForm\" class=\"mt-4\">
                    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col \">{{ form_row(form.lastname) }}</div>
                        <div class=\"col \">{{ form_row(form.subject) }}</div>
                        <div class=\"col \">{{ form_row(form.email) }}</div>
                        <div class=\"col m-3\">{{ form_row(form.content) }}</div>
                    </div>
                    <div class=\"form-group\"><button class=\"btn btn-light btn-block\" type=\"submit\">Envoyer</button></div>
                    {{ form_end(form) }}
                </div>

            </div>
        </section>
    </main>

{% endblock %}", "contact.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/contact.html.twig");
    }
}
