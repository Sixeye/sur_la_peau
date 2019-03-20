<?php

/* base.html.twig */
class __TwigTemplate_6ce9a7e1ef6ec58a918a908a51025a1feed9cdd16eef574164b4cc0b181a0dcc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    <meta name=\"description\" content=\"SUR LA PEAU
avec
Mélanie Peyre
Zoé Besmond De Senneville
Jean-Marie Godet de Srinath C. Samarasinghe\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "</head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i\">
        <link rel=\"stylesheet\" href=\"/fonts/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" href=\"/fonts/simple-line-icons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\">
        <link rel=\"stylesheet\" href=\"/css/smooth.css\">
        <link rel=\"stylesheet\" href=\"/css/addenda.css\">
        <link rel=\"stylesheet\" href=\"/css/Video-Responsive.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "            <footer class=\"page-footer dark\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h5>Admin</h5>
                            <ul>
                                ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                                ";
        } else {
            // line 38
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
                                ";
        }
        // line 40
        echo "                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>A propos&nbsp;</h5>
                            <ul>
                                <li><a href=\"https://www.karmaprodworks.com/\" target=\"blank\">Karma Prodworks</a></li>
                                <li><a href=\"http://www.hevadis.com/\" target=\"blank\">Hevadis Distribution</a></li>
                                <li><a href=\"http://globalgenesisgroup.com/\" target=\"blank\">Global Genesis Group</a></li>
                                <li><a href=\"contact\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\"></div>
                        <div class=\"col-sm-3\">
                            <h5>Mentions Légales</h5>
                            <ul>
                                <li><a href=\"mentions\">Mentions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <p>© 2019 Karma Prodworks - Antoni Hadzi Janev - Hevadis Distribution</p>
                </div>
            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "            <script src=\"/js/jquery.min.js\"></script>
            <script src=\"/bootstrap/js/bootstrap.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js\"></script>
            <script src=\"/js/smoothproducts.min.js\"></script>
            <script src=\"/js/theme.js\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 66,  208 => 65,  174 => 40,  168 => 38,  162 => 36,  160 => 35,  152 => 29,  143 => 28,  126 => 27,  108 => 16,  99 => 15,  86 => 8,  77 => 7,  65 => 72,  62 => 65,  59 => 28,  57 => 27,  53 => 25,  51 => 15,  44 => 10,  42 => 7,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    {% block title %}
        {{ title }}
    {% endblock %}
    <meta name=\"description\" content=\"SUR LA PEAU
avec
Mélanie Peyre
Zoé Besmond De Senneville
Jean-Marie Godet de Srinath C. Samarasinghe\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i\">
        <link rel=\"stylesheet\" href=\"/fonts/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" href=\"/fonts/simple-line-icons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css\">
        <link rel=\"stylesheet\" href=\"/css/smooth.css\">
        <link rel=\"stylesheet\" href=\"/css/addenda.css\">
        <link rel=\"stylesheet\" href=\"/css/Video-Responsive.css\">
    {% endblock %}
</head>
    <body>
        {% block body %}{% endblock %}
        {% block footer %}
            <footer class=\"page-footer dark\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <h5>Admin</h5>
                            <ul>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('login') }}\">Login</a></li>
                                {% endif %}
                            </ul>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>A propos&nbsp;</h5>
                            <ul>
                                <li><a href=\"https://www.karmaprodworks.com/\" target=\"blank\">Karma Prodworks</a></li>
                                <li><a href=\"http://www.hevadis.com/\" target=\"blank\">Hevadis Distribution</a></li>
                                <li><a href=\"http://globalgenesisgroup.com/\" target=\"blank\">Global Genesis Group</a></li>
                                <li><a href=\"contact\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-3\"></div>
                        <div class=\"col-sm-3\">
                            <h5>Mentions Légales</h5>
                            <ul>
                                <li><a href=\"mentions\">Mentions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <p>© 2019 Karma Prodworks - Antoni Hadzi Janev - Hevadis Distribution</p>
                </div>
            </footer>
        {% endblock %}
        {% block javascripts %}
            <script src=\"/js/jquery.min.js\"></script>
            <script src=\"/bootstrap/js/bootstrap.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js\"></script>
            <script src=\"/js/smoothproducts.min.js\"></script>
            <script src=\"/js/theme.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/base.html.twig");
    }
}
