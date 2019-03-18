<?php

/* genese.html.twig */
class __TwigTemplate_dde5f2a9c1295d89fe2aad92d4d83291328e35433d7de05f5b1a214cece70ff3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genese.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genese.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genese.html.twig"));

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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=";
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
    <main class=\"page service-page\">
        <section id=\"genese_bg\" class=\"clean-block clean-services dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">GENESE DU FILM</h2>
                    <p>Basé sur plusieurs faits réels, le scénario de <br><em>Sur la peau</em>&nbsp;a évolué au fil du temps et des rencontres.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <p><strong><em>Vous êtes vous inspiré d’une histoire vraie d’une adaptation ou d’un fait d’actualité ?</em>&nbsp;</strong><br><br>Je me suis inspiré de plusieurs histoires réelles de personnes proches. J'ai été témoin d'une scène
                            où le dépôt de plainte n'a pas été pris en compte. C'était, il est vrai, une autre époque, le début des années 2000, mais ça m'a marqué.<br>Une histoire m'a aussi marqué, une amie qui ne se souvenait que de l'odeur du violeur.
                            Je suis sensible à la notion d'injustice pour des raisons personnelles et le sujet s'est imposé à moi de cette manière.<br>&nbsp;<br><strong><em>Le sujet sur le viol est un sujet d’actualité, longtemps méprisé que pensez-vous des faits actuels dans le monde du cinéma par exemple ?</em></strong><br><br>Il
                            a été longtemps méprisé et traité par les hommes alors que la majeure partie des victimes sont des femmes. Je pense qu'il est sain de faire évoluer le cinéma vers une équité. Il y a toujours eu des rapports de séduction dans
                            le milieu mais il y a une ligne rouge qui est le non-consentement et c'est une bonne chose que certaines histoires finissent devant les tribunaux. <br>A contrario, je ne suis pas pour les dénonciations gratuites sans fin législatives
                            car je trouve qu'il peut aussi être simpliste de régler ses comptes avec quelqu'un avec des attaques Ad Hominem sans fondements et sans actions en justice. Je prône clairement la justice de l'Etat bien qu'elle soit imparfaite.<br><br><strong><em>Comment s’est passé le casting par rapport à vos autres films ?</em></strong><br><strong><em>Comment avez vous choisi les acteurs notamment l’actrice principale... Melanie Peyre ?</em></strong><br><br>Il
                            s'agit de mon troisième long métrage, après&nbsp;<em>Un nuage dans un verre d'eau</em>&nbsp;et&nbsp;<em>Nazar Palmus</em>. J'ai été très encouragé au départ par la sélection de la Maison des Scénaristes à Cannes en 2015 de
                            notre projet sur la base du scénario qui avait été remarqué. Je pensais avec le producteur, Antoni Hadzi Janev, que des soutiens financiers viendraient avec cet encouragement mais il n'en a pas été ainsi. Je n'ai pas travaillé
                            avec un directeur de casting comme sur&nbsp;<em>Un nuage dans un verre d'eau</em>. J'ai rencontré des comédiens avec qui j'avais déjà travaillé et avec qui un plaisir de travailler ensemble existait. J'ai également rencontré
                            des comédiens grâce à&nbsp;<a href=\"http://cineaste.org/\">cineaste.org</a>&nbsp;ou grâce à des amis d'amis.&nbsp;<br>Ce fût le cas de Mélanie Peyre. Je l'ai rencontrée à l'anniversaire d'une talentueuse amie réalisatrice, Alice
                            Fargier. Nous avions discuté et elle avait vu mon premier long métrage. Nous avions fait une séance photo et en la fréquentant j'ai remanié mon scénario pour le ciseler pour elle car j'étais persuadé qu'elle pourrait incarner
                            ce personnage. Ce qu'elle a fait avec beaucoup de talent.<br><br><strong><em>Certaines scènes du films sont... permettez-moi l’expression... insoutenable, comment fût la direction des acteurs à ce niveau ?</em></strong><br><br>Certaines
                            scènes sont insoutenable à la vue.&nbsp;<br>Les comédiens qui ont tourné avec Mélanie Peyre ont tous eu un certain tact, une pudeur. Un petit bricolage existe pour que les comédiens ne se touchent pas réellement les parties
                            intimes donc toutes les scènes sont bien évidemment simulées. Mélanie a dû, par contre, être dans un certain état pour le jeu. C'est la partie la moins évidente car certains&nbsp; peuvent très bien sous pression rire ou sourire
                            et cela peut&nbsp; déstabiliser le jeu. Mélanie a été souvent isolée pour éviter de prendre ce flux de tensions. Les conditions étaient dures mais les comédiens, à mon sens, ont bravé les difficultés avec succès.<br>&nbsp;<br><strong><em>Pensez-vous que ‘’Sur la peau’’ est un film qui pourrait ouvrir ou permettre un débat sur le sujet ?</em></strong><br>&nbsp;<br>Je
                            travaillais sur une ambiguïté lorsque j'ai écrit&nbsp;<em>Sur la peau</em>. Cette ambiguïté est propice au débat, la justice par soi-même. Je ne prends pas partie pour celle-ci mais dans le film je démontre que je peux la comprendre.<br>Cela
                            ouvre l'interrogation mais ne répond pas à la question morale. Dans ce sens, cela porte à en discuter car quand l'Etat manque à l'appel de la justice, il est tentant de se faire justice. Jusqu'à quel point ?&nbsp;Pourquoi vivre
                            dans une république si l'on approuve la justice par soi-même ?<br><br><strong><em>Êtes-vous un cinéaste engagé si oui vous pouvez définir cet engagement ?&nbsp;</em></strong><br><br>Je ne suis pas engagé dans un parti politique
                            mais le libertarianisme de gauche m'est le plus parlant. Je suis aussi parti d'une autre ambiguïté avec ce film. J'ai voulu partir de l'idée d'Aristote sur le Zoon Politikon, nous sommes des animaux politiques. \"Polis\", la
                            cité. A partir du moment où nous avons choisi d'habiter une cité, nous sommes un animal politique donc un animal soumis aux règles de la cité. J'ai introduit un personnage avec des instincts proches de ceux des animaux mais
                            avec un esprit très cartésien, rationnel, confronté à une violence pulsionnelle mais préméditée. Cela pousse le spectateur à se poser la question de ce qu'il ferait. Cela est mon engagement, pousser à réfléchir à un problème&nbsp;
                            au sein de la cité. Si j'ai réussi à pousser le spectateur à cette réflexion ou à en effleurer l'idée, j'ai réussi mon acte politique. Mon engagement se situe dans ce cadre de création.<br><br><strong><em>Quel espoir portez-vous sur le cinéma d’aujourd’hui où du futur ?</em></strong>&nbsp;&nbsp;<br><br>Notre
                            cadre de production a été dur, nous y avons laissé des plumes. Ca aurait pu nous démoraliser mais je pense que la plupart en sort grandi. On peut parler de résilience.&nbsp;Je pense la même chose du cinéma. Regarder un film
                            sur téléphone portable, sur tablette, sur ordinateur, sur son home cinéma ou en vraie salle de cinéma sont tous une expérience du cinéma. Le cinéma a muté avec l'arrivée de principes comme Netflix ou Prime Vidéo ou autre. Il
                            ne faut pas en avoir peur. Il faut recomposer en les prenant en compte. La liesse qui jaillit des émotions que l'on vit ensemble dans une salle de cinéma avec des inconnus ne sera jamais remplacée par le fait de regarder sa
                            série ou son film sur smartphone. Pour moi, ce sont les mêmes craintes qu'à l'émergence des cassettes VHS. Le cinéma grimpera en qualité et on sera toujours heureux de sortir au cinéma. Il faut simplement que la diversité des
                            genres perdurent en salle. C'est un autre sujet.<br></p>
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
        return "genese.html.twig";
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
                    <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href={{ path('genese') }}>GENESE</a></li>
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
    <main class=\"page service-page\">
        <section id=\"genese_bg\" class=\"clean-block clean-services dark\">
            <div class=\"container\">
                <div class=\"block-heading\">
                    <h2 class=\"text-info\">GENESE DU FILM</h2>
                    <p>Basé sur plusieurs faits réels, le scénario de <br><em>Sur la peau</em>&nbsp;a évolué au fil du temps et des rencontres.</p>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <p><strong><em>Vous êtes vous inspiré d’une histoire vraie d’une adaptation ou d’un fait d’actualité ?</em>&nbsp;</strong><br><br>Je me suis inspiré de plusieurs histoires réelles de personnes proches. J'ai été témoin d'une scène
                            où le dépôt de plainte n'a pas été pris en compte. C'était, il est vrai, une autre époque, le début des années 2000, mais ça m'a marqué.<br>Une histoire m'a aussi marqué, une amie qui ne se souvenait que de l'odeur du violeur.
                            Je suis sensible à la notion d'injustice pour des raisons personnelles et le sujet s'est imposé à moi de cette manière.<br>&nbsp;<br><strong><em>Le sujet sur le viol est un sujet d’actualité, longtemps méprisé que pensez-vous des faits actuels dans le monde du cinéma par exemple ?</em></strong><br><br>Il
                            a été longtemps méprisé et traité par les hommes alors que la majeure partie des victimes sont des femmes. Je pense qu'il est sain de faire évoluer le cinéma vers une équité. Il y a toujours eu des rapports de séduction dans
                            le milieu mais il y a une ligne rouge qui est le non-consentement et c'est une bonne chose que certaines histoires finissent devant les tribunaux. <br>A contrario, je ne suis pas pour les dénonciations gratuites sans fin législatives
                            car je trouve qu'il peut aussi être simpliste de régler ses comptes avec quelqu'un avec des attaques Ad Hominem sans fondements et sans actions en justice. Je prône clairement la justice de l'Etat bien qu'elle soit imparfaite.<br><br><strong><em>Comment s’est passé le casting par rapport à vos autres films ?</em></strong><br><strong><em>Comment avez vous choisi les acteurs notamment l’actrice principale... Melanie Peyre ?</em></strong><br><br>Il
                            s'agit de mon troisième long métrage, après&nbsp;<em>Un nuage dans un verre d'eau</em>&nbsp;et&nbsp;<em>Nazar Palmus</em>. J'ai été très encouragé au départ par la sélection de la Maison des Scénaristes à Cannes en 2015 de
                            notre projet sur la base du scénario qui avait été remarqué. Je pensais avec le producteur, Antoni Hadzi Janev, que des soutiens financiers viendraient avec cet encouragement mais il n'en a pas été ainsi. Je n'ai pas travaillé
                            avec un directeur de casting comme sur&nbsp;<em>Un nuage dans un verre d'eau</em>. J'ai rencontré des comédiens avec qui j'avais déjà travaillé et avec qui un plaisir de travailler ensemble existait. J'ai également rencontré
                            des comédiens grâce à&nbsp;<a href=\"http://cineaste.org/\">cineaste.org</a>&nbsp;ou grâce à des amis d'amis.&nbsp;<br>Ce fût le cas de Mélanie Peyre. Je l'ai rencontrée à l'anniversaire d'une talentueuse amie réalisatrice, Alice
                            Fargier. Nous avions discuté et elle avait vu mon premier long métrage. Nous avions fait une séance photo et en la fréquentant j'ai remanié mon scénario pour le ciseler pour elle car j'étais persuadé qu'elle pourrait incarner
                            ce personnage. Ce qu'elle a fait avec beaucoup de talent.<br><br><strong><em>Certaines scènes du films sont... permettez-moi l’expression... insoutenable, comment fût la direction des acteurs à ce niveau ?</em></strong><br><br>Certaines
                            scènes sont insoutenable à la vue.&nbsp;<br>Les comédiens qui ont tourné avec Mélanie Peyre ont tous eu un certain tact, une pudeur. Un petit bricolage existe pour que les comédiens ne se touchent pas réellement les parties
                            intimes donc toutes les scènes sont bien évidemment simulées. Mélanie a dû, par contre, être dans un certain état pour le jeu. C'est la partie la moins évidente car certains&nbsp; peuvent très bien sous pression rire ou sourire
                            et cela peut&nbsp; déstabiliser le jeu. Mélanie a été souvent isolée pour éviter de prendre ce flux de tensions. Les conditions étaient dures mais les comédiens, à mon sens, ont bravé les difficultés avec succès.<br>&nbsp;<br><strong><em>Pensez-vous que ‘’Sur la peau’’ est un film qui pourrait ouvrir ou permettre un débat sur le sujet ?</em></strong><br>&nbsp;<br>Je
                            travaillais sur une ambiguïté lorsque j'ai écrit&nbsp;<em>Sur la peau</em>. Cette ambiguïté est propice au débat, la justice par soi-même. Je ne prends pas partie pour celle-ci mais dans le film je démontre que je peux la comprendre.<br>Cela
                            ouvre l'interrogation mais ne répond pas à la question morale. Dans ce sens, cela porte à en discuter car quand l'Etat manque à l'appel de la justice, il est tentant de se faire justice. Jusqu'à quel point ?&nbsp;Pourquoi vivre
                            dans une république si l'on approuve la justice par soi-même ?<br><br><strong><em>Êtes-vous un cinéaste engagé si oui vous pouvez définir cet engagement ?&nbsp;</em></strong><br><br>Je ne suis pas engagé dans un parti politique
                            mais le libertarianisme de gauche m'est le plus parlant. Je suis aussi parti d'une autre ambiguïté avec ce film. J'ai voulu partir de l'idée d'Aristote sur le Zoon Politikon, nous sommes des animaux politiques. \"Polis\", la
                            cité. A partir du moment où nous avons choisi d'habiter une cité, nous sommes un animal politique donc un animal soumis aux règles de la cité. J'ai introduit un personnage avec des instincts proches de ceux des animaux mais
                            avec un esprit très cartésien, rationnel, confronté à une violence pulsionnelle mais préméditée. Cela pousse le spectateur à se poser la question de ce qu'il ferait. Cela est mon engagement, pousser à réfléchir à un problème&nbsp;
                            au sein de la cité. Si j'ai réussi à pousser le spectateur à cette réflexion ou à en effleurer l'idée, j'ai réussi mon acte politique. Mon engagement se situe dans ce cadre de création.<br><br><strong><em>Quel espoir portez-vous sur le cinéma d’aujourd’hui où du futur ?</em></strong>&nbsp;&nbsp;<br><br>Notre
                            cadre de production a été dur, nous y avons laissé des plumes. Ca aurait pu nous démoraliser mais je pense que la plupart en sort grandi. On peut parler de résilience.&nbsp;Je pense la même chose du cinéma. Regarder un film
                            sur téléphone portable, sur tablette, sur ordinateur, sur son home cinéma ou en vraie salle de cinéma sont tous une expérience du cinéma. Le cinéma a muté avec l'arrivée de principes comme Netflix ou Prime Vidéo ou autre. Il
                            ne faut pas en avoir peur. Il faut recomposer en les prenant en compte. La liesse qui jaillit des émotions que l'on vit ensemble dans une salle de cinéma avec des inconnus ne sera jamais remplacée par le fait de regarder sa
                            série ou son film sur smartphone. Pour moi, ce sont les mêmes craintes qu'à l'émergence des cassettes VHS. Le cinéma grimpera en qualité et on sera toujours heureux de sortir au cinéma. Il faut simplement que la diversité des
                            genres perdurent en salle. C'est un autre sujet.<br></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

{% endblock %}", "genese.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/genese.html.twig");
    }
}
