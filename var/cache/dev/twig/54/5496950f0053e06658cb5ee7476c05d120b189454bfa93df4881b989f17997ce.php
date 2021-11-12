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

/* acheter/acheter.html.twig */
class __TwigTemplate_3ccac2b28c192de95c9493b7a6fbc1c3a02f520ef77bea355153ab40b7263c65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acheter/acheter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acheter/acheter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acheter/acheter.html.twig", 1);
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

        echo "Hello AcheterController!";
        
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
        <h2>Devenez propriétaire</h2>
        <p>
            Pour y vivre, investir ou bâtir, que vous cherchez un bien avec le charme de l’ancien, un bien neuf avec tous ses avantages ou un terrain, consultez nos offres ci-dessous [prochainement].

        </p>
    </div>


    <svg id=\"contrat-svg\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 64 64\" height=\"350\">
        <g id=\"Outline\">
            <g>
                <path
                fill=\"#494949\"
                    d=\"M57,2H15a5.006,5.006,0,0,0-5,5V24.667a1,1,0,0,0,2,0V7a3,3,0,0,1,3-3H53.026A4.948,4.948,0,0,0,52,7V18.393a1,1,0,0,0,2,0V12h7a1,1,0,0,0,1-1V7A5.006,5.006,0,0,0,57,2Zm3,8H54V7a3,3,0,0,1,6,0Z\" />
                <path
                fill=\"#494949\"
                    d=\"M53,42.392a1,1,0,0,0-1,1V57a3,3,0,0,1-6,0V55a1,1,0,0,0-1-1H3a1,1,0,0,0-1,1v2a5.006,5.006,0,0,0,5,5H49a5.006,5.006,0,0,0,5-5V43.392A1,1,0,0,0,53,42.392ZM7,60a3,3,0,0,1-3-3V56H44v1a4.98,4.98,0,0,0,1,3Z\" />
                <path
                fill=\"#E41F25\"
                    d=\"M3,36H22V48H19V43a3,3,0,0,0-3-3H14a3,3,0,0,0-3,3v5H8V39a1,1,0,0,0-2,0V49a1,1,0,0,0,1,1H23a1,1,0,0,0,1-1V36h3a1,1,0,0,0,.555-1.832l-12-8a1,1,0,0,0-1.11,0l-12,8A1,1,0,0,0,3,36ZM13,48V43a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v5Zm2-19.8L23.7,34H6.3Z\" />
                <path
                fill=\"#E41F25\"
                    d=\"M60.5,17.4a3,3,0,0,0-4.1,1.1l-1.5,2.6a1,1,0,0,0-1.366.366l-1.5,2.6-.866-.5a3,3,0,0,0-4.1,1.1l-4,6.929a1,1,0,0,0,1.733,1l4-6.929a1,1,0,0,1,1.366-.365l.866.5-9.5,16.454c-.007.012-.007.027-.013.039a1,1,0,0,0-.1.285c0,.024-.011.047-.013.072s-.008.029-.009.044L41.2,46.155a2.594,2.594,0,0,0,.549,1.732l-.611,1.058a1,1,0,0,0,1.733,1l.61-1.056a2.7,2.7,0,0,0,.334.044,2.615,2.615,0,0,0,1.441-.436l2.9-1.913a.723.723,0,0,0,.078-.067.859.859,0,0,0,.091-.079.954.954,0,0,0,.093-.119c.017-.025.039-.044.054-.07l5.255-9.1a1,1,0,0,0-1.733-1l-4.754,8.236-1.732-1-1.732-1,9-15.588,3.463,2-2.245,3.888a1,1,0,0,0,1.733,1L57.964,29.8l.866.5a1,1,0,1,0,1-1.732l-.866-.5,1.5-2.6A1,1,0,0,0,60.1,24.1l1.5-2.6a3,3,0,0,0-1.1-4.1ZM44.149,46.828a.619.619,0,0,1-.958-.554l.112-1.85L45.7,45.806ZM58.133,19.5a1,1,0,0,1,1.366-.365h0a1,1,0,0,1,.366,1.365l-1.5,2.6-.866-.5-.867-.5Zm-4.365,5.563,1-1.732,3.463,2-1,1.732Z\" />
                <path 
                fill=\"#494949\"d=\"M42,13V9a1,1,0,0,0-1-1H23a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H41A1,1,0,0,0,42,13Zm-2-1H24V10H40Z\" />
                <path 
                fill=\"#494949\"d=\"M27,17a1,1,0,0,0,0,2H37a1,1,0,0,0,0-2Z\" />
                <path 
                fill=\"#494949\"d=\"M23,24H41a1,1,0,0,0,0-2H23a1,1,0,0,0,0,2Z\" />
                <path
                fill=\"#494949\" d=\"M23,29H42a1,1,0,0,0,0-2H23a1,1,0,0,0,0,2Z\" />
                <path 
                fill=\"#494949\"d=\"M40,32H31a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z\" />
                <path
                fill=\"#494949\" d=\"M41,39a1,1,0,0,0-1-1H27a1,1,0,0,0,0,2H40A1,1,0,0,0,41,39Z\" />
                <path 
                fill=\"#494949\"d=\"M29,43a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Z\" />
            </g>
        </g>
    </svg>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acheter/acheter.html.twig";
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

{% block title %}Hello AcheterController!{% endblock %}

{% block body %}
<div class=\"description\">
    <div class=\"description-text\">
        <h2>Devenez propriétaire</h2>
        <p>
            Pour y vivre, investir ou bâtir, que vous cherchez un bien avec le charme de l’ancien, un bien neuf avec tous ses avantages ou un terrain, consultez nos offres ci-dessous [prochainement].

        </p>
    </div>


    <svg id=\"contrat-svg\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 64 64\" height=\"350\">
        <g id=\"Outline\">
            <g>
                <path
                fill=\"#494949\"
                    d=\"M57,2H15a5.006,5.006,0,0,0-5,5V24.667a1,1,0,0,0,2,0V7a3,3,0,0,1,3-3H53.026A4.948,4.948,0,0,0,52,7V18.393a1,1,0,0,0,2,0V12h7a1,1,0,0,0,1-1V7A5.006,5.006,0,0,0,57,2Zm3,8H54V7a3,3,0,0,1,6,0Z\" />
                <path
                fill=\"#494949\"
                    d=\"M53,42.392a1,1,0,0,0-1,1V57a3,3,0,0,1-6,0V55a1,1,0,0,0-1-1H3a1,1,0,0,0-1,1v2a5.006,5.006,0,0,0,5,5H49a5.006,5.006,0,0,0,5-5V43.392A1,1,0,0,0,53,42.392ZM7,60a3,3,0,0,1-3-3V56H44v1a4.98,4.98,0,0,0,1,3Z\" />
                <path
                fill=\"#E41F25\"
                    d=\"M3,36H22V48H19V43a3,3,0,0,0-3-3H14a3,3,0,0,0-3,3v5H8V39a1,1,0,0,0-2,0V49a1,1,0,0,0,1,1H23a1,1,0,0,0,1-1V36h3a1,1,0,0,0,.555-1.832l-12-8a1,1,0,0,0-1.11,0l-12,8A1,1,0,0,0,3,36ZM13,48V43a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v5Zm2-19.8L23.7,34H6.3Z\" />
                <path
                fill=\"#E41F25\"
                    d=\"M60.5,17.4a3,3,0,0,0-4.1,1.1l-1.5,2.6a1,1,0,0,0-1.366.366l-1.5,2.6-.866-.5a3,3,0,0,0-4.1,1.1l-4,6.929a1,1,0,0,0,1.733,1l4-6.929a1,1,0,0,1,1.366-.365l.866.5-9.5,16.454c-.007.012-.007.027-.013.039a1,1,0,0,0-.1.285c0,.024-.011.047-.013.072s-.008.029-.009.044L41.2,46.155a2.594,2.594,0,0,0,.549,1.732l-.611,1.058a1,1,0,0,0,1.733,1l.61-1.056a2.7,2.7,0,0,0,.334.044,2.615,2.615,0,0,0,1.441-.436l2.9-1.913a.723.723,0,0,0,.078-.067.859.859,0,0,0,.091-.079.954.954,0,0,0,.093-.119c.017-.025.039-.044.054-.07l5.255-9.1a1,1,0,0,0-1.733-1l-4.754,8.236-1.732-1-1.732-1,9-15.588,3.463,2-2.245,3.888a1,1,0,0,0,1.733,1L57.964,29.8l.866.5a1,1,0,1,0,1-1.732l-.866-.5,1.5-2.6A1,1,0,0,0,60.1,24.1l1.5-2.6a3,3,0,0,0-1.1-4.1ZM44.149,46.828a.619.619,0,0,1-.958-.554l.112-1.85L45.7,45.806ZM58.133,19.5a1,1,0,0,1,1.366-.365h0a1,1,0,0,1,.366,1.365l-1.5,2.6-.866-.5-.867-.5Zm-4.365,5.563,1-1.732,3.463,2-1,1.732Z\" />
                <path 
                fill=\"#494949\"d=\"M42,13V9a1,1,0,0,0-1-1H23a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H41A1,1,0,0,0,42,13Zm-2-1H24V10H40Z\" />
                <path 
                fill=\"#494949\"d=\"M27,17a1,1,0,0,0,0,2H37a1,1,0,0,0,0-2Z\" />
                <path 
                fill=\"#494949\"d=\"M23,24H41a1,1,0,0,0,0-2H23a1,1,0,0,0,0,2Z\" />
                <path
                fill=\"#494949\" d=\"M23,29H42a1,1,0,0,0,0-2H23a1,1,0,0,0,0,2Z\" />
                <path 
                fill=\"#494949\"d=\"M40,32H31a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Z\" />
                <path
                fill=\"#494949\" d=\"M41,39a1,1,0,0,0-1-1H27a1,1,0,0,0,0,2H40A1,1,0,0,0,41,39Z\" />
                <path 
                fill=\"#494949\"d=\"M29,43a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Z\" />
            </g>
        </g>
    </svg>
</div>
{% endblock %}", "acheter/acheter.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\acheter\\acheter.html.twig");
    }
}
