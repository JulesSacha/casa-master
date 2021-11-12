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

/* mentions/mentions.html.twig */
class __TwigTemplate_873987a50a93d6a2f086ef7dae72b5085137de65d5e87356a9d24e47684dbdae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/mentions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions/mentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello LouerController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"container\">
    <div class=\"mentions\">

<br><br><br>
        <h3>EDITEUR</h3>
        <br>
        <p>CASA TRANSACTIONS<br>SIRET 530 929 710. 00016 tribunal de Saverne <br>
            Carte Pro CPI 6701 2017 000 019 307
            Forme juridique SASU domiciliée<br> 262 rue Principale 67210 MEISTRATZHEIM
            <br> Représentante légale Christine HINZELIN
        </p>
        <br>
  
        
        <h3>CRÉATION DU SITE WEB ET HÉBERGEMENT</h3>
        <br>

        <p>Les aspects techniques et graphiques de ce site ont été conçus et réalisés par<br> CASA TRANSACTIONS</p>
        <p>Le site est hébergé par :</p>
        <p>Hostinger, UAB
            Jonavos g. 60C, 44192
            Kaunas, Lithuania<br> Site internet :&nbsp;www.hostinger.fr</p>
        <p>CLAUSE DE NON RESPONSABILITÉ</p>
        <br>
        <p>La responsabilité de la société CASA TRANSACTIONS ne peut, en aucune manière, être engagée quant au contenu
            des informations figurant sur ce site ou aux conséquences pouvant résulter de leur utilisation ou
            interprétation.</p>
        <br>
        <h3>PROPRIÉTÉ INTELLECTUELLE</h3>
        <br>
        <p>Le site est la propriété exclusive de la société CASA TRANSACTIONS et est protégé par la législation
            française et internationale sur le droit de la propriété intellectuelle. Aucune reproduction ou
            représentation ne peut être réalisée en contravention avec les droits de la société CASA TRANSACTIONS issus
            de la législation susvisée.</p>
        <br>
        <h3>LIENS HYPERTEXTES</h3>
        <br>
        <p>Les sites externes accessibles grâce aux liens hypertextes présents sur le site de CASA TRANSACTIONS ne
            relèvent en aucun cas du contrôle ni de la responsabilité de la société CASA TRANSACTIONS.</p>
        <p>La mise en place de liens hypertextes par des tiers vers des pages ou des documents du site de
            CASA TRANSACTIONS est autorisée sous réserve que les liens ne contreviennent pas aux intérêts de la société
            CASA TRANSACTIONS et qu’ils garantissent la possibilité pour l’utilisateur d’identifier l’origine et
            l’auteur du document.</p>
        <br>
        <h3>TEXTES ET PHOTOS</h3>
        <br>
        <p>Sauf mention contraire, les textes utilisés pour la réalisation de ce site sont la propriété exclusive de la
            société CASA TRANSACTIONS. Toute copie, totale ou partielle, ne peut se faire sans l’accord de leur
            propriétaire. Les images sont libres de droits</p>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LouerController!{% endblock %}

{% block body %}


<div class=\"container\">
    <div class=\"mentions\">

<br><br><br>
        <h3>EDITEUR</h3>
        <br>
        <p>CASA TRANSACTIONS<br>SIRET 530 929 710. 00016 tribunal de Saverne <br>
            Carte Pro CPI 6701 2017 000 019 307
            Forme juridique SASU domiciliée<br> 262 rue Principale 67210 MEISTRATZHEIM
            <br> Représentante légale Christine HINZELIN
        </p>
        <br>
  
        
        <h3>CRÉATION DU SITE WEB ET HÉBERGEMENT</h3>
        <br>

        <p>Les aspects techniques et graphiques de ce site ont été conçus et réalisés par<br> CASA TRANSACTIONS</p>
        <p>Le site est hébergé par :</p>
        <p>Hostinger, UAB
            Jonavos g. 60C, 44192
            Kaunas, Lithuania<br> Site internet :&nbsp;www.hostinger.fr</p>
        <p>CLAUSE DE NON RESPONSABILITÉ</p>
        <br>
        <p>La responsabilité de la société CASA TRANSACTIONS ne peut, en aucune manière, être engagée quant au contenu
            des informations figurant sur ce site ou aux conséquences pouvant résulter de leur utilisation ou
            interprétation.</p>
        <br>
        <h3>PROPRIÉTÉ INTELLECTUELLE</h3>
        <br>
        <p>Le site est la propriété exclusive de la société CASA TRANSACTIONS et est protégé par la législation
            française et internationale sur le droit de la propriété intellectuelle. Aucune reproduction ou
            représentation ne peut être réalisée en contravention avec les droits de la société CASA TRANSACTIONS issus
            de la législation susvisée.</p>
        <br>
        <h3>LIENS HYPERTEXTES</h3>
        <br>
        <p>Les sites externes accessibles grâce aux liens hypertextes présents sur le site de CASA TRANSACTIONS ne
            relèvent en aucun cas du contrôle ni de la responsabilité de la société CASA TRANSACTIONS.</p>
        <p>La mise en place de liens hypertextes par des tiers vers des pages ou des documents du site de
            CASA TRANSACTIONS est autorisée sous réserve que les liens ne contreviennent pas aux intérêts de la société
            CASA TRANSACTIONS et qu’ils garantissent la possibilité pour l’utilisateur d’identifier l’origine et
            l’auteur du document.</p>
        <br>
        <h3>TEXTES ET PHOTOS</h3>
        <br>
        <p>Sauf mention contraire, les textes utilisés pour la réalisation de ce site sont la propriété exclusive de la
            société CASA TRANSACTIONS. Toute copie, totale ou partielle, ne peut se faire sans l’accord de leur
            propriétaire. Les images sont libres de droits</p>
    </div>
</div>
{% endblock %}", "mentions/mentions.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\mentions\\mentions.html.twig");
    }
}
