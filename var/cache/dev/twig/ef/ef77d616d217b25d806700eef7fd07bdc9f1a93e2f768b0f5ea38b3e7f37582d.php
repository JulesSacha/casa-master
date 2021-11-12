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

/* mentions/tarif.html.twig */
class __TwigTemplate_d863a7e38e88e8d46ba28de88f4f29b9fae0a2f2c05216c1332e32a5f628058a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/tarif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/tarif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions/tarif.html.twig", 1);
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
    <div class=\"tarif\">
        <h1>Grille Tarifaire</h1>
        <p>        NOS HONORAIRES TTC (TVA à 20%).
        </p>
     
            <table>
                <h2> TRANSACTION-VENTE
                </h2>
                <tbody>
                  
                    <tr>
                        <td> Parking ou garage

                        </td>
                        <td> Forfait 1 500€ TTC

                        </td>
                    </tr>
                    <tr>
                        <td> De 0€ à 99 999€
                        </td>
                        <td> Forfait 6 000€ TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 100 000€ à 149 999€
                        </td>
                        <td> 7% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 150 000€ à 249 999€
                        </td>
                        <td> 6% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 250 000€ à 349 999€
                        </td>
                        <td> 5% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> Au-delà de 350 000€
                        </td>
                        <td> 4% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> Terrains et immobiliers professionnels

                        </td>
                        <td> 10% TTC avec forfait minimal de 5 000€ TTC

                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>TRANSACTION - LOCATION</h2>
            <p> Application du barème de la loi Alur selon les zones géographiques
            </p>


            </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions/tarif.html.twig";
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
    <div class=\"tarif\">
        <h1>Grille Tarifaire</h1>
        <p>        NOS HONORAIRES TTC (TVA à 20%).
        </p>
     
            <table>
                <h2> TRANSACTION-VENTE
                </h2>
                <tbody>
                  
                    <tr>
                        <td> Parking ou garage

                        </td>
                        <td> Forfait 1 500€ TTC

                        </td>
                    </tr>
                    <tr>
                        <td> De 0€ à 99 999€
                        </td>
                        <td> Forfait 6 000€ TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 100 000€ à 149 999€
                        </td>
                        <td> 7% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 150 000€ à 249 999€
                        </td>
                        <td> 6% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> De 250 000€ à 349 999€
                        </td>
                        <td> 5% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> Au-delà de 350 000€
                        </td>
                        <td> 4% TTC
                        </td>
                    </tr>
                    <tr>
                        <td> Terrains et immobiliers professionnels

                        </td>
                        <td> 10% TTC avec forfait minimal de 5 000€ TTC

                        </td>
                    </tr>
                </tbody>
            </table>
            <h2>TRANSACTION - LOCATION</h2>
            <p> Application du barème de la loi Alur selon les zones géographiques
            </p>


            </div>
    </div>
    {% endblock %}", "mentions/tarif.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\mentions\\tarif.html.twig");
    }
}
