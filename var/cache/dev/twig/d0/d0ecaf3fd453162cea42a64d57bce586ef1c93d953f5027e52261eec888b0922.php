<?php

/* emails/contact.html.twig */
class __TwigTemplate_60ca0a47d198f27214650b649ad2418b4f000ec6ab42d833ac5cec664de52070 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
   <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
       <tr>
           <td align=\"left\" style=\"\">
               <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"\">
                   <tr>
                       <td>Nom</td>
                       <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 9, $this->source); })()), "lastname", []), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 13, $this->source); })()), "email", []), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                       <td>Sujet</td>
                       <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 17, $this->source); })()), "subject", []), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                       <td>Message</td>
                       <td>";
        // line 21
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new Twig_Error_Runtime('Variable "contact" does not exist.', 21, $this->source); })()), "content", []), "html", null, true));
        echo "</td>
                   </tr>
               </table>

           </td>
       </tr>
   </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  71 => 17,  64 => 13,  57 => 9,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}

   <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
       <tr>
           <td align=\"left\" style=\"\">
               <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"\">
                   <tr>
                       <td>Nom</td>
                       <td>{{ contact.lastname }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>
                       <td>{{ contact.email }}</td>
                   </tr>
                   <tr>
                       <td>Sujet</td>
                       <td>{{ contact.subject }}</td>
                   </tr>
                   <tr>
                       <td>Message</td>
                       <td>{{ contact.content | nl2br }}</td>
                   </tr>
               </table>

           </td>
       </tr>
   </table>

{% endblock %}", "emails/contact.html.twig", "/Users/srinathchristophersamarasinghe/Documents/DEV_DOCS/SUR_LA_PEAU_WEBSITE/sur_la_peau/templates/emails/contact.html.twig");
    }
}
