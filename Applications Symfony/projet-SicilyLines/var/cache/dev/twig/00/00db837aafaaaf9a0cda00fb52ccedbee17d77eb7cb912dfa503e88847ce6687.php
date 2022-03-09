<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/index.html.twig */
class __TwigTemplate_6cc98fbdde65862f781850997f9d6cce3495921d67afd3f8229cc1c0eef26a22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>

\t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" style=\"color:#00aaff \">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription</a>
\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\"><button id=\"button\">Connexion</button> </a>

\t\t\t</ul>



\t</header>
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sicily Lines";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Contact.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "

\t
\t<main>

\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"container-LogIn\">
\t\t\t\t\t<form name=\"form1\" class=\"box\">

\t\t\t\t\t  \t<h5>Contactez-nous</h5>
\t\t\t\t\t\t  
\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"email\" placeholder=\"Adresse e-mail *\" autocomplete=\"off\">

\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"tel\" placeholder=\"Tel\" autocomplete=\"off\">


\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"obj\" placeholder=\"Objet *\" autocomplete=\"off\">

\t\t\t\t\t\t<textarea required class=\"message-area\" placeholder=\"Message *\"></textarea>

\t\t\t\t\t\t<input type=\"submit\" value=\"Envoyez\" class=\"btn1\">

\t\t\t\t\t  </form>
\t\t\t\t  </div> 





\t\t\t</div>
\t\t</div>

\t</main>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 40,  157 => 39,  144 => 10,  134 => 9,  115 => 6,  103 => 78,  101 => 39,  91 => 32,  87 => 31,  79 => 26,  74 => 24,  60 => 12,  57 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Sicily Lines{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
        <link href=\"{{ asset('css/Contact.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>        
        {% endblock %}
</head>

<body>

\t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('accueil')}}\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('contact')}}\" style=\"color:#00aaff \">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"{{ path('inscription')}}\">Inscription</a>
\t\t\t\t<a href=\"{{ path('connexion')}}\"><button id=\"button\">Connexion</button> </a>

\t\t\t</ul>



\t</header>
{% block body %}


\t
\t<main>

\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"container-LogIn\">
\t\t\t\t\t<form name=\"form1\" class=\"box\">

\t\t\t\t\t  \t<h5>Contactez-nous</h5>
\t\t\t\t\t\t  
\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"email\" placeholder=\"Adresse e-mail *\" autocomplete=\"off\">

\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"tel\" placeholder=\"Tel\" autocomplete=\"off\">


\t\t\t\t\t\t<input required class=\"box\" type=\"text\" name=\"obj\" placeholder=\"Objet *\" autocomplete=\"off\">

\t\t\t\t\t\t<textarea required class=\"message-area\" placeholder=\"Message *\"></textarea>

\t\t\t\t\t\t<input type=\"submit\" value=\"Envoyez\" class=\"btn1\">

\t\t\t\t\t  </form>
\t\t\t\t  </div> 





\t\t\t</div>
\t\t</div>

\t</main>

\t{% endblock %}
</body>

</html>", "contact/index.html.twig", "/var/www/html/projet-SicilyLines/templates/contact/index.html.twig");
    }
}
