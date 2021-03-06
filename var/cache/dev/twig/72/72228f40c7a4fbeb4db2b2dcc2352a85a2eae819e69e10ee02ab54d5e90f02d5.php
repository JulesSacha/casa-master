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
            Forme juridique SASU domicili??e<br> 262 rue Principale 67210 MEISTRATZHEIM
            <br> Repr??sentante l??gale Christine HINZELIN
        </p>
        <br>
  
        
        <h3>CR??ATION DU SITE WEB ET H??BERGEMENT</h3>
        <br>

        <p>Les aspects techniques et graphiques de ce site ont ??t?? con??us et r??alis??s par<br> CASA TRANSACTIONS</p>
        <p>Le site est h??berg?? par :</p>
        <p>Hostinger, UAB
            Jonavos g. 60C, 44192
            Kaunas, Lithuania<br> Site internet :&nbsp;www.hostinger.fr</p>
        <p>CLAUSE DE NON RESPONSABILIT??</p>
        <br>
        <p>La responsabilit?? de la soci??t?? CASA TRANSACTIONS ne peut, en aucune mani??re, ??tre engag??e quant au contenu
            des informations figurant sur ce site ou aux cons??quences pouvant r??sulter de leur utilisation ou
            interpr??tation.</p>
        <br>
        <h3>PROPRI??T?? INTELLECTUELLE</h3>
        <br>
        <p>Le site est la propri??t?? exclusive de la soci??t?? CASA TRANSACTIONS et est prot??g?? par la l??gislation
            fran??aise et internationale sur le droit de la propri??t?? intellectuelle. Aucune reproduction ou
            repr??sentation ne peut ??tre r??alis??e en contravention avec les droits de la soci??t?? CASA TRANSACTIONS issus
            de la l??gislation susvis??e.</p>
        <br>
        <h3>LIENS HYPERTEXTES</h3>
        <br>
        <p>Les sites externes accessibles gr??ce aux liens hypertextes pr??sents sur le site de CASA TRANSACTIONS ne
            rel??vent en aucun cas du contr??le ni de la responsabilit?? de la soci??t?? CASA TRANSACTIONS.</p>
        <p>La mise en place de liens hypertextes par des tiers vers des pages ou des documents du site de
            CASA TRANSACTIONS est autoris??e sous r??serve que les liens ne contreviennent pas aux int??r??ts de la soci??t??
            CASA TRANSACTIONS et qu???ils garantissent la possibilit?? pour l???utilisateur d???identifier l???origine et
            l???auteur du document.</p>
        <br>
        <h3>TEXTES ET PHOTOS</h3>
        <br>
        <p>Sauf mention contraire, les textes utilis??s pour la r??alisation de ce site sont la propri??t?? exclusive de la
            soci??t?? CASA TRANSACTIONS. Toute copie, totale ou partielle, ne peut se faire sans l???accord de leur
            propri??taire. Les images sont libres de droits</p>
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
            Forme juridique SASU domicili??e<br> 262 rue Principale 67210 MEISTRATZHEIM
            <br> Repr??sentante l??gale Christine HINZELIN
        </p>
        <br>
  
        
        <h3>CR??ATION DU SITE WEB ET H??BERGEMENT</h3>
        <br>

        <p>Les aspects techniques et graphiques de ce site ont ??t?? con??us et r??alis??s par<br> CASA TRANSACTIONS</p>
        <p>Le site est h??berg?? par :</p>
        <p>Hostinger, UAB
            Jonavos g. 60C, 44192
            Kaunas, Lithuania<br> Site internet :&nbsp;www.hostinger.fr</p>
        <p>CLAUSE DE NON RESPONSABILIT??</p>
        <br>
        <p>La responsabilit?? de la soci??t?? CASA TRANSACTIONS ne peut, en aucune mani??re, ??tre engag??e quant au contenu
            des informations figurant sur ce site ou aux cons??quences pouvant r??sulter de leur utilisation ou
            interpr??tation.</p>
        <br>
        <h3>PROPRI??T?? INTELLECTUELLE</h3>
        <br>
        <p>Le site est la propri??t?? exclusive de la soci??t?? CASA TRANSACTIONS et est prot??g?? par la l??gislation
            fran??aise et internationale sur le droit de la propri??t?? intellectuelle. Aucune reproduction ou
            repr??sentation ne peut ??tre r??alis??e en contravention avec les droits de la soci??t?? CASA TRANSACTIONS issus
            de la l??gislation susvis??e.</p>
        <br>
        <h3>LIENS HYPERTEXTES</h3>
        <br>
        <p>Les sites externes accessibles gr??ce aux liens hypertextes pr??sents sur le site de CASA TRANSACTIONS ne
            rel??vent en aucun cas du contr??le ni de la responsabilit?? de la soci??t?? CASA TRANSACTIONS.</p>
        <p>La mise en place de liens hypertextes par des tiers vers des pages ou des documents du site de
            CASA TRANSACTIONS est autoris??e sous r??serve que les liens ne contreviennent pas aux int??r??ts de la soci??t??
            CASA TRANSACTIONS et qu???ils garantissent la possibilit?? pour l???utilisateur d???identifier l???origine et
            l???auteur du document.</p>
        <br>
        <h3>TEXTES ET PHOTOS</h3>
        <br>
        <p>Sauf mention contraire, les textes utilis??s pour la r??alisation de ce site sont la propri??t?? exclusive de la
            soci??t?? CASA TRANSACTIONS. Toute copie, totale ou partielle, ne peut se faire sans l???accord de leur
            propri??taire. Les images sont libres de droits</p>
    </div>
</div>
{% endblock %}", "mentions/mentions.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\mentions\\mentions.html.twig");
    }
}
