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

/* accueil/index.html.twig */
class __TwigTemplate_85c2eac61c82a0e0f1796aa582b5fe58ad672f56cbaf58c00316dad170ad60b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

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
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 165
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
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        
            \t<header>
\t\t<div class=\"navbar\">

\t\t\t<div class=\"LogoLink\">
\t\t\t\t<h2>Sicily Lines</h2>
\t\t\t</div>

\t\t\t<ul class=\"NavLink\">
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" style=\"color:#00aaff;\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
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

\t\t\t\t\t\t\t\t<select required class=\"form2\">
\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port d'arrivé</span>

\t\t\t\t\t\t\t\t<select required class=\"form2\">
\t\t\t\t\t\t\t\t    <option></option>
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date de départ</span>

\t\t\t\t\t\t\t\t<input required class=\"form2\" type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date d'arrivée</span>

\t\t\t\t\t\t\t\t<input required class=\"form2\"type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Adulte\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Adulte</span>
\t\t\t\t\t\t\t\t<select required class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Enfant\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Enfant</span>
\t\t\t\t\t\t\t\t<select required class=\"form2\" style='width: 50px;'>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option></option>
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
        return "accueil/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 32,  154 => 31,  146 => 26,  141 => 24,  130 => 15,  120 => 14,  107 => 9,  97 => 8,  78 => 5,  66 => 165,  64 => 14,  59 => 11,  56 => 8,  52 => 5,  46 => 1,);
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
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>        
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
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('accueil')}}\" style=\"color:#00aaff;\">Accueil</a>
\t\t\t\t<a class=\"NavLink\" >Réservation</a>
\t\t\t\t<a class=\"NavLink\" href=\"{{ path('contact')}}\">Contact</a>
\t\t\t</ul>

\t\t\t<ul class=\"NavBtn\">

\t\t\t\t<a class=\"NavLink\" href=\"{{ path('inscription')}}\">Inscription</a>
\t\t\t\t<a href=\"{{ path('connexion')}}\"><button id=\"button\">Connexion</button> </a>

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

\t\t\t\t\t\t\t\t<select required class=\"form2\">
\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Port d'arrivé</span>

\t\t\t\t\t\t\t\t<select required class=\"form2\">
\t\t\t\t\t\t\t\t    <option></option>
\t\t\t\t\t\t\t\t\t<option>Palerme</option>
\t\t\t\t\t\t\t\t\t<option>Syracuse</option>
\t\t\t\t\t\t\t\t\t<option>Taormina</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateD\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date de départ</span>

\t\t\t\t\t\t\t\t<input required class=\"form2\" type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"DateA\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Date d'arrivée</span>

\t\t\t\t\t\t\t\t<input required class=\"form2\"type=\"date\" id=\"start\" name=\"trip-start\" min=\"2022-05-01\" max=\"2022-12-30\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"PortA\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Adulte\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Adulte</span>
\t\t\t\t\t\t\t\t<select required class=\"form2\" style='width: 50px;'>
\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"Enfant\">
\t\t\t\t\t\t\t\t<span class=\"AE_Select\">Enfant</span>
\t\t\t\t\t\t\t\t<select required class=\"form2\" style='width: 50px;'>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option></option>
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
", "accueil/index.html.twig", "/var/www/html/projet-SicilyLines/templates/accueil/index.html.twig");
    }
}
