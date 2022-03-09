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

/* connexion/index.html.twig */
class __TwigTemplate_8c54b1f4cf8264ce3053e19a5b058c61ebbc9ecd31e9b12d76a79f224524edfd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

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
        echo "
</head>

<body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
</body>

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

\t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Inscription</a>
\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\"><button id=\"button\" style=\"background-color:#ffffff; color: black; \">Connexion</button> </a>

\t\t\t</ul>
\t</header>




\t<main>

\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"container-LogIn\">
\t\t\t\t\t<form name=\"form1\" class=\"box\">

\t\t\t\t\t  \t<h5>Connexion</h5>
\t\t\t\t\t\t  
\t\t\t\t\t\t<input required type=\"text\" name=\"email\" placeholder=\"Adresse e-mail\" autocomplete=\"off\">

\t\t\t\t\t\t<input required type=\"password\" name=\"password\" placeholder=\"Mot de passe\" id=\"pwd\" autocomplete=\"off\">

\t\t\t\t\t\t<input type=\"submit\" value=\"Connexion\" class=\"btn1\">

\t\t\t\t\t  </form>

\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\" class=\"dnthave\">Créer un compte</a>
\t\t\t\t  </div> 





\t\t\t</div>
\t\t</div>

\t</main>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connexion/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  162 => 35,  158 => 34,  150 => 29,  145 => 27,  133 => 17,  123 => 16,  110 => 10,  100 => 9,  81 => 6,  68 => 74,  66 => 16,  60 => 12,  57 => 9,  53 => 6,  46 => 1,);
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
        <link href=\"{{ asset('css/Login.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>        
        {% endblock %}

</head>

<body>
        {% block body %}


\t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('accueil')}}\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('contact')}}\">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"{{ path('inscription')}}\">Inscription</a>
\t\t\t\t<a href=\"{{ path('connexion')}}\"><button id=\"button\" style=\"background-color:#ffffff; color: black; \">Connexion</button> </a>

\t\t\t</ul>
\t</header>




\t<main>

\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"container-LogIn\">
\t\t\t\t\t<form name=\"form1\" class=\"box\">

\t\t\t\t\t  \t<h5>Connexion</h5>
\t\t\t\t\t\t  
\t\t\t\t\t\t<input required type=\"text\" name=\"email\" placeholder=\"Adresse e-mail\" autocomplete=\"off\">

\t\t\t\t\t\t<input required type=\"password\" name=\"password\" placeholder=\"Mot de passe\" id=\"pwd\" autocomplete=\"off\">

\t\t\t\t\t\t<input type=\"submit\" value=\"Connexion\" class=\"btn1\">

\t\t\t\t\t  </form>

\t\t\t\t\t\t<a href=\"{{ path('inscription')}}\" class=\"dnthave\">Créer un compte</a>
\t\t\t\t  </div> 





\t\t\t</div>
\t\t</div>

\t</main>
            {% endblock %}

</body>

</html>", "connexion/index.html.twig", "/var/www/html/projet-SicilyLines/templates/connexion/index.html.twig");
    }
}
