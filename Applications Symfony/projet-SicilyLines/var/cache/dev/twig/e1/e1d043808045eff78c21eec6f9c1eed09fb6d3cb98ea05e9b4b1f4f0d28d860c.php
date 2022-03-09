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

/* base.html.twig */
class __TwigTemplate_b06519bb16570f5eb582425c4ea6ac9edd84af57605384adb339d4535b0725ab extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "        
            \t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"/index.html\" style=\"color:#00aaff \">Accueil</a>
\t\t\t\t<a class=\"NavLink\" href=\"/pages/reservation.html\">Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"/pages/contact.html\">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"/pages/inscription.html\">Inscription</a>
\t\t\t\t<a href=\"/pages/connexion.html\"><button id=\"button\">Connexion</button> </a>

\t\t\t</ul>



\t</header>




\t<main>
\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"SicilyImage\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ResaLine\">
\t\t\t\t\t<div class=\"container-Resa-Menu\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"PortD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port de départ</span>

\t\t\t\t\t\t\t\t<select class=\"form2\">
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port d'arrivé</span>

\t\t\t\t\t\t\t\t<select class=\"form2\">
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date de départ</span>

\t\t\t\t\t\t\t\t<input class=\"form2\" type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date d'arrivée</span>

\t\t\t\t\t\t\t\t<input class=\"form2\"type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Adulte\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Adulte</span>
\t\t\t\t\t\t\t\t<select class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Enfant\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Enfant</span>
\t\t\t\t\t\t\t\t<select class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Recherche\">
\t\t\t\t\t\t\t\t<button class=\"RechercheBtn\">Rechercher</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<section>
\t\t\t\t\t<h1 class=\"BestDest\">Les plus belles destinations</h1>
\t\t\t\t</section>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card1\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card2\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card3\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card4\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t\t</div>

\t</main>

\t<footer>



\t</footer>
        
        
        
        
        
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
        return array (  156 => 18,  146 => 17,  136 => 14,  134 => 13,  124 => 12,  114 => 10,  112 => 9,  102 => 8,  83 => 5,  71 => 164,  69 => 17,  65 => 15,  63 => 12,  60 => 11,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Sicily Lines{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
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
\t\t\t\t<a class=\"NavLink\" href=\"/index.html\" style=\"color:#00aaff \">Accueil</a>
\t\t\t\t<a class=\"NavLink\" href=\"/pages/reservation.html\">Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"/pages/contact.html\">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"/pages/inscription.html\">Inscription</a>
\t\t\t\t<a href=\"/pages/connexion.html\"><button id=\"button\">Connexion</button> </a>

\t\t\t</ul>



\t</header>




\t<main>
\t\t<div class=\"parent\">

\t\t\t<div class='div1'>

\t\t\t\t<div class=\"SicilyImage\">
\t\t\t\t</div>

\t\t\t\t<div class=\"ResaLine\">
\t\t\t\t\t<div class=\"container-Resa-Menu\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"PortD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port de départ</span>

\t\t\t\t\t\t\t\t<select class=\"form2\">
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port d'arrivé</span>

\t\t\t\t\t\t\t\t<select class=\"form2\">
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date de départ</span>

\t\t\t\t\t\t\t\t<input class=\"form2\" type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date d'arrivée</span>

\t\t\t\t\t\t\t\t<input class=\"form2\"type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Adulte\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Adulte</span>
\t\t\t\t\t\t\t\t<select class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Enfant\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Enfant</span>
\t\t\t\t\t\t\t\t<select class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Recherche\">
\t\t\t\t\t\t\t\t<button class=\"RechercheBtn\">Rechercher</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<section>
\t\t\t\t\t<h1 class=\"BestDest\">Les plus belles destinations</h1>
\t\t\t\t</section>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card1\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card2\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card3\"></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<div class=\"card4\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t\t</div>

\t</main>

\t<footer>



\t</footer>
        
        
        
        
        
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/projet-SicilyLines/templates/base.html.twig");
    }
}
