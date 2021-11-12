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

/* louer/louer.html.twig */
class __TwigTemplate_3f83c6231f90dd015b65707974ee982471f41b066bd6c5fbb1709b542904870a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "louer/louer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "louer/louer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "louer/louer.html.twig", 1);
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
        echo "<div class=\"description\">

   
    <div class=\"description-text\">
        <h2>Louer un appartement ou une maison</h2>
        <p><strong>Vous recherchez une maison ou un appartement en location ? </strong><br>
            Nous vous proposons notre choix de biens immobiliers sur nos secteurs géographiques : Strasbourg, Rosheim, Obernai, et la Vallée de la Bruche.<br>[prochainement]
        </p>
        <div id=\"louer\" class=\"contact-btn\" >
            <p> </p>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><button >Contactez un agent</button></a>
        </div>
    </div>


    <svg id=\"key-svg\" enable-background=\"new 0 0 512 512\" height=\"350\" viewBox=\"0 0 512 512\" width=\"auto\"
    xmlns=\"http://www.w3.org/2000/svg\">
    <g>
        <g>
            <path
            fill=\"white\"
                d=\"m115 63.12v-43.12c0-8.284-6.716-15-15-15s-15 6.716-15 15v43.12c4.893-.736 9.902-1.12 15-1.12s10.107.384 15 1.12z\" />
        </g>
        <path
        fill=\"#E41F25\"
            d=\"m511.075 319.367-18.442-50.14c-2.293-6.235-8.414-10.218-15.043-9.791l-24.804 1.6-11.548-23.356c-2.684-5.428-8.369-8.71-14.411-8.32l-26.001 1.677-81.919-47.296c9.247-41.505-8.85-85.939-47.625-108.326-8.71-5.029-17.865-8.573-27.175-10.758 10.327 9.112 19.322 19.965 26.478 32.36 14.113 24.444 19.83 52.149 16.534 80.119-2.328 19.758-8.975 38.361-19.473 54.791l8.068 13.974c4.64-3.005 9.06-6.404 13.193-10.199l187.55 108.282c4.343 2.508 9.653 2.679 14.148.456l13.042-6.449c6.87-3.398 10.075-11.43 7.428-18.624z\" />
        <path
        fill=\"white\"
            d=\"m331.261 374.54-22.281-11.017 1.677-26.002c.39-6.043-2.892-11.728-8.32-14.411l-23.356-11.548-47.296-81.919c28.761-31.321 35.305-78.85 12.918-117.625-12.94-22.413-33.247-37.916-56.095-45.226 3.391 3.152 6.629 6.492 9.689 10.017 20.508 23.622 31.803 53.877 31.803 85.191 0 28.226-8.901 55.078-25.74 77.652-6.589 8.833-14.151 16.691-22.525 23.475l106.27 184.065c2.508 4.343 7.02 7.146 12.025 7.469l14.519.937c7.65.493 14.441-4.861 15.746-12.414l9.098-52.643c1.132-6.547-2.177-13.057-8.132-16.001z\" />
        <path
        fill=\"#E41F25\"
            d=\"m200 162c0-50.13-36.888-91.642-85-98.88v43.88h4.576c8.077 0 15.027 6.207 15.407 14.275.406 8.614-6.458 15.725-14.983 15.725h-39.576c-8.077 0-15.027-6.207-15.407-14.275-.406-8.614 6.458-15.725 14.983-15.725h5v-43.88c-48.112 7.238-85 48.75-85 98.88 0 44.774 29.432 82.663 70 95.408v226.521c0 5.015 2.507 9.699 6.679 12.481l12.106 8.07c6.378 4.252 14.936 3.011 19.844-2.878l34.201-41.041c4.253-5.103 4.642-12.396.957-17.923l-13.787-20.681 14.453-21.679c3.359-5.039 3.359-11.603 0-16.641l-14.453-21.68v-104.549c40.568-12.745 70-50.634 70-95.408z\" />
    </g>
</svg>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "louer/louer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LouerController!{% endblock %}

{% block body %}
<div class=\"description\">

   
    <div class=\"description-text\">
        <h2>Louer un appartement ou une maison</h2>
        <p><strong>Vous recherchez une maison ou un appartement en location ? </strong><br>
            Nous vous proposons notre choix de biens immobiliers sur nos secteurs géographiques : Strasbourg, Rosheim, Obernai, et la Vallée de la Bruche.<br>[prochainement]
        </p>
        <div id=\"louer\" class=\"contact-btn\" >
            <p> </p>
            <a href=\"{{path('contact')}}\"><button >Contactez un agent</button></a>
        </div>
    </div>


    <svg id=\"key-svg\" enable-background=\"new 0 0 512 512\" height=\"350\" viewBox=\"0 0 512 512\" width=\"auto\"
    xmlns=\"http://www.w3.org/2000/svg\">
    <g>
        <g>
            <path
            fill=\"white\"
                d=\"m115 63.12v-43.12c0-8.284-6.716-15-15-15s-15 6.716-15 15v43.12c4.893-.736 9.902-1.12 15-1.12s10.107.384 15 1.12z\" />
        </g>
        <path
        fill=\"#E41F25\"
            d=\"m511.075 319.367-18.442-50.14c-2.293-6.235-8.414-10.218-15.043-9.791l-24.804 1.6-11.548-23.356c-2.684-5.428-8.369-8.71-14.411-8.32l-26.001 1.677-81.919-47.296c9.247-41.505-8.85-85.939-47.625-108.326-8.71-5.029-17.865-8.573-27.175-10.758 10.327 9.112 19.322 19.965 26.478 32.36 14.113 24.444 19.83 52.149 16.534 80.119-2.328 19.758-8.975 38.361-19.473 54.791l8.068 13.974c4.64-3.005 9.06-6.404 13.193-10.199l187.55 108.282c4.343 2.508 9.653 2.679 14.148.456l13.042-6.449c6.87-3.398 10.075-11.43 7.428-18.624z\" />
        <path
        fill=\"white\"
            d=\"m331.261 374.54-22.281-11.017 1.677-26.002c.39-6.043-2.892-11.728-8.32-14.411l-23.356-11.548-47.296-81.919c28.761-31.321 35.305-78.85 12.918-117.625-12.94-22.413-33.247-37.916-56.095-45.226 3.391 3.152 6.629 6.492 9.689 10.017 20.508 23.622 31.803 53.877 31.803 85.191 0 28.226-8.901 55.078-25.74 77.652-6.589 8.833-14.151 16.691-22.525 23.475l106.27 184.065c2.508 4.343 7.02 7.146 12.025 7.469l14.519.937c7.65.493 14.441-4.861 15.746-12.414l9.098-52.643c1.132-6.547-2.177-13.057-8.132-16.001z\" />
        <path
        fill=\"#E41F25\"
            d=\"m200 162c0-50.13-36.888-91.642-85-98.88v43.88h4.576c8.077 0 15.027 6.207 15.407 14.275.406 8.614-6.458 15.725-14.983 15.725h-39.576c-8.077 0-15.027-6.207-15.407-14.275-.406-8.614 6.458-15.725 14.983-15.725h5v-43.88c-48.112 7.238-85 48.75-85 98.88 0 44.774 29.432 82.663 70 95.408v226.521c0 5.015 2.507 9.699 6.679 12.481l12.106 8.07c6.378 4.252 14.936 3.011 19.844-2.878l34.201-41.041c4.253-5.103 4.642-12.396.957-17.923l-13.787-20.681 14.453-21.679c3.359-5.039 3.359-11.603 0-16.641l-14.453-21.68v-104.549c40.568-12.745 70-50.634 70-95.408z\" />
    </g>
</svg>

</div>
{% endblock %}", "louer/louer.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\louer\\louer.html.twig");
    }
}
