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

/* mentions/confidentialite.html.twig */
class __TwigTemplate_ab64d82f5cc1dc14294733115f00fb7bd999ebca952add250f1eb81d189927e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/confidentialite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/confidentialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions/confidentialite.html.twig", 1);
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
        <h2>Définitions</h2>
        <p>L’Éditeur&nbsp;: La personne, physique ou morale, qui édite les services de communication au public en
            ligne.<br>Le Site&nbsp;: L’ensemble des sites, pages Internet et services en ligne proposés par
            l’Éditeur.<br>L’Utilisateur&nbsp;: La personne utilisant le Site et les services.</p>
        <p>&nbsp;</p>
        <h2>Nature des données collectées</h2>
        <p>Dans le cadre de l’utilisation des Sites, l’Éditeur est susceptible de collecter les catégories de données
            suivantes concernant ses Utilisateurs :</p>
        <p>Données d’état-civil, d’identité, d’identification…</p>
        <p>Données relatives à la vie personnelle (habitudes de vie, situation familiale, hors données sensibles ou
            dangereuses)</p>
        <p>Données relatives à la vie professionnelle (CV, scolarité, formation professionnelle, distinctions…)</p>
        <p>Informations d’ordre économique et financier (revenus, situation financière, situation fiscale…)</p>
        <p>Données de connexion (adresses IP, journaux d’événements…)</p>
        <p>Données de localisation (déplacements, données GPS, GSM…)</p>
        <p>&nbsp;</p>
        <h2>Conservation des données techniques et personnelles</h2>
        <p>Durée de conservation des données techniques</p>
        <p>Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation des finalités
            visées ci-avant.</p>
        <p>Suppression des données après suppression du compte</p>
        <p>Des moyens de purge de données sont mis en place afin d’en prévoir la suppression effective dès lors que la
            durée de conservation ou d’archivage nécessaire à l’accomplissement des finalités déterminées ou imposées
            est atteinte. Conformément à la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux
            libertés, vous disposez par ailleurs d’un droit de suppression sur vos données que vous pouvez exercer à
            tout moment en prenant
              contact avec l’Éditeur.</p>
        <p>Suppression des données après 3 ans d’inactivité</p>
        <p>Pour des raisons de sécurité, si vous ne vous êtes pas authentifié sur le Site pendant une période de trois
            ans, vous recevrez un e-mail vous invitant à vous connecter dans les plus brefs délais, sans quoi vos
            données seront supprimées de nos bases de données.</p>
        <p>&nbsp;</p>
        <h2>Formulaires de contact</h2>
        <p>Conformément à l’article 32 de la loi «Informatique et Libertés» n° 78-17 du 6 janvier 1978, modifiée par la
            loi n° 2004-801 du 6 août 2004, les informations personnelles (prénom, nom, numéro de téléphone, e-mail,
            statut social,…) recueillies via les formulaires de<span>&nbsp;</span><a
                href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">contact</a><span>&nbsp;</span>font l’objet d’un traitement
            informatique destiné seulement à ce que le responsable du traitement, seule destinataire des données, puisse
            répondre aux utilisateurs, et ce de la manière la plus appropriée, et ne seront jamais utilisées à des fins
            non prévues ni transmises à des partenaires. Aucune information personnelle autre que celles demandées dans
            ce cadre n’est collectée à votre insu.</p>
        <p><strong>Astuce</strong><span>&nbsp;</span>: vous ne souhaitez pas donner votre consentement ? Appelez-nous
            directement. Nous répondrons ainsi à vos questions par téléphone.</p>
        <p>&nbsp;</p>
        <h2>Contenu embarqué depuis d’autres sites</h2>
        <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le
            contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet
            autre site.</p>
        <p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis
            tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur
            site web.</p>
        <p>&nbsp;</p>
        <h2>Cookies</h2>
        <p>Durée de conservation des cookies</p>
        <p>Conformément aux recommandations de la CNIL, la durée maximale de conservation des cookies est de 13 mois au
            maximum après leur premier dépôt dans le terminal de l’Utilisateur, tout comme la durée de la validité du
            consentement de l’Utilisateur à l’utilisation de ces cookies. La durée de vie des cookies n’est pas
            prolongée à chaque visite. Le consentement de l’Utilisateur devra donc être renouvelé à l’issue de ce délai.
        </p>
        <p>&nbsp;</p>
        <h3>Finalité cookies</h3>
        <p>Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les services rendus à
            l’Utilisateur, à partir du traitement des informations concernant la fréquence d’accès, la personnalisation
            des pages ainsi que les opérations réalisées et les informations consultées.<br>Vous êtes informé que
            l’Éditeur est susceptible de déposer des cookies sur votre terminal. Le cookie enregistre des informations
            relatives à la navigation sur le service (les pages que vous avez consultées, la date et l’heure de la
            consultation…) que nous pourrons lire lors de vos visites ultérieures.</p>
        <h3></h3>
        <h3>Cookies exemptés de consentement préalable</h3>
        <p>Des cookies ont pour finalités de permettre une navigation et un affichage des pages optimaux sur notre site
            ainsi que de contrôler le respect de la vie privée des utilisateurs (“gdprcompliance”). L’utilisation de ces
            traceurs ne requiert pas votre consentement selon l’article 32 II de la loi n° 78-17 du 6 janvier 1978.Vous
            pouvez néanmoins les désactiver à tout moment.</p>
        <h3>Cookies requérant votre consentement préalable</h3>
        <p>Des cookies Analytics, provenant du tiers Google, ont pour finalité de recueillir des statistiques de visites
            anonymes qui, une fois recoupées, pourraient être intrusives pour la vie privée des utilisateurs du site.
        </p>
        <p>En conséquence, l’utilisation des traceurs Google Analytics est désactivée par défaut sur ce site. Vous
            pouvez les autoriser pour permettre au responsable du site d’améliorer la qualité de la navigation et des
            informations dispensées sur ce site. Enfin, vous pouvez à tout moment revenir sur votre choix et retirer
            votre consentement</p>
        <p>&nbsp;</p>
        <h2>Informations supplémentaires</h2>
        <h3>Comment nous protégeons vos données</h3>
        <p>Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles appropriées afin
            de garantir un niveau de sécurité adapté au regard des risques d’accès accidentels, non autorisés ou
            illégaux, de divulgation, d’altération, de perte ou encore de destruction des données personnelles vous
            concernant. Dans l’éventualité où nous prendrions connaissance d’un accès illégal aux données personnelles
            vous concernant stockées sur nos serveurs ou ceux de nos prestataires, ou d’un accès non autorisé ayant pour
            conséquence la réalisation des risques identifiés ci-dessus, nous nous engageons à :</p>
        <ul>
            <li>Vous notifier l’incident dans les plus brefs délais ;</li>
            <li>Examiner les causes de l’incident et vous en informer ;</li>
            <li>Prendre les mesures nécessaires dans la limite du raisonnable afin d’amoindrir les effets négatifs et
                préjudices pouvant résulter dudit incident</li>
        </ul>
        <p>Limitation de la responsabilité<br>En aucun cas les engagements définis au point ci-dessus relatif à la
            notification en cas de faille de sécurité ne peuvent être assimilés à une quelconque reconnaissance de faute
            ou de responsabilité quant à la survenance de l’incident en question.</p>
        <p>&nbsp;</p>
        <h2>Retrait du Consentement concernant vos données personnelles</h2>
        <p>Vous disposez d’un droit d’accès, de modification et/ou de suppression des données vous concernant à tout
            moment en contactant l’éditeur du site.</p>
        <p>Le responsable du fichier dispose d’un délai de réponse maximal de 2 mois à compter de la demande. La CNIL
            précise : « Si la demande est incomplète (absence de la pièce d’identité par exemple), le responsable du
            fichier est en droit de demander des compléments : le délai est alors suspendu et courre à nouveau une fois
            ces éléments fournis ».</p>
        <p>Les limites au droit d’accès sont précisées sur le site de la CNIL et &nbsp;<a
                href=\"https://www.cnil.fr/fr/respecter-les-droits-des-personnes\" target=\"_blank\"
                rel=\"noopener noreferrer\">consultables en cliquant ici</a>.</p>
        <p>&nbsp;</p>
        <h2>Modification des CGU et de la politique de confidentialité</h2>
        <p>En cas de modification des présentes CGU, engagement de ne pas baisser le niveau de confidentialité de
            manière substantielle sans l’information préalable des personnes concernées<br>Nous nous engageons à vous
            informer en cas de modification substantielle des présentes CGU, et à ne pas baisser le niveau de
            confidentialité de vos données de manière substantielle sans vous en informer et obtenir votre consentement.
        </p>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions/confidentialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LouerController!{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"mentions\">
        <h2>Définitions</h2>
        <p>L’Éditeur&nbsp;: La personne, physique ou morale, qui édite les services de communication au public en
            ligne.<br>Le Site&nbsp;: L’ensemble des sites, pages Internet et services en ligne proposés par
            l’Éditeur.<br>L’Utilisateur&nbsp;: La personne utilisant le Site et les services.</p>
        <p>&nbsp;</p>
        <h2>Nature des données collectées</h2>
        <p>Dans le cadre de l’utilisation des Sites, l’Éditeur est susceptible de collecter les catégories de données
            suivantes concernant ses Utilisateurs :</p>
        <p>Données d’état-civil, d’identité, d’identification…</p>
        <p>Données relatives à la vie personnelle (habitudes de vie, situation familiale, hors données sensibles ou
            dangereuses)</p>
        <p>Données relatives à la vie professionnelle (CV, scolarité, formation professionnelle, distinctions…)</p>
        <p>Informations d’ordre économique et financier (revenus, situation financière, situation fiscale…)</p>
        <p>Données de connexion (adresses IP, journaux d’événements…)</p>
        <p>Données de localisation (déplacements, données GPS, GSM…)</p>
        <p>&nbsp;</p>
        <h2>Conservation des données techniques et personnelles</h2>
        <p>Durée de conservation des données techniques</p>
        <p>Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation des finalités
            visées ci-avant.</p>
        <p>Suppression des données après suppression du compte</p>
        <p>Des moyens de purge de données sont mis en place afin d’en prévoir la suppression effective dès lors que la
            durée de conservation ou d’archivage nécessaire à l’accomplissement des finalités déterminées ou imposées
            est atteinte. Conformément à la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux
            libertés, vous disposez par ailleurs d’un droit de suppression sur vos données que vous pouvez exercer à
            tout moment en prenant
              contact avec l’Éditeur.</p>
        <p>Suppression des données après 3 ans d’inactivité</p>
        <p>Pour des raisons de sécurité, si vous ne vous êtes pas authentifié sur le Site pendant une période de trois
            ans, vous recevrez un e-mail vous invitant à vous connecter dans les plus brefs délais, sans quoi vos
            données seront supprimées de nos bases de données.</p>
        <p>&nbsp;</p>
        <h2>Formulaires de contact</h2>
        <p>Conformément à l’article 32 de la loi «Informatique et Libertés» n° 78-17 du 6 janvier 1978, modifiée par la
            loi n° 2004-801 du 6 août 2004, les informations personnelles (prénom, nom, numéro de téléphone, e-mail,
            statut social,…) recueillies via les formulaires de<span>&nbsp;</span><a
                href=\"{{path('contact')}}\">contact</a><span>&nbsp;</span>font l’objet d’un traitement
            informatique destiné seulement à ce que le responsable du traitement, seule destinataire des données, puisse
            répondre aux utilisateurs, et ce de la manière la plus appropriée, et ne seront jamais utilisées à des fins
            non prévues ni transmises à des partenaires. Aucune information personnelle autre que celles demandées dans
            ce cadre n’est collectée à votre insu.</p>
        <p><strong>Astuce</strong><span>&nbsp;</span>: vous ne souhaitez pas donner votre consentement ? Appelez-nous
            directement. Nous répondrons ainsi à vos questions par téléphone.</p>
        <p>&nbsp;</p>
        <h2>Contenu embarqué depuis d’autres sites</h2>
        <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le
            contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet
            autre site.</p>
        <p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis
            tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur
            site web.</p>
        <p>&nbsp;</p>
        <h2>Cookies</h2>
        <p>Durée de conservation des cookies</p>
        <p>Conformément aux recommandations de la CNIL, la durée maximale de conservation des cookies est de 13 mois au
            maximum après leur premier dépôt dans le terminal de l’Utilisateur, tout comme la durée de la validité du
            consentement de l’Utilisateur à l’utilisation de ces cookies. La durée de vie des cookies n’est pas
            prolongée à chaque visite. Le consentement de l’Utilisateur devra donc être renouvelé à l’issue de ce délai.
        </p>
        <p>&nbsp;</p>
        <h3>Finalité cookies</h3>
        <p>Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les services rendus à
            l’Utilisateur, à partir du traitement des informations concernant la fréquence d’accès, la personnalisation
            des pages ainsi que les opérations réalisées et les informations consultées.<br>Vous êtes informé que
            l’Éditeur est susceptible de déposer des cookies sur votre terminal. Le cookie enregistre des informations
            relatives à la navigation sur le service (les pages que vous avez consultées, la date et l’heure de la
            consultation…) que nous pourrons lire lors de vos visites ultérieures.</p>
        <h3></h3>
        <h3>Cookies exemptés de consentement préalable</h3>
        <p>Des cookies ont pour finalités de permettre une navigation et un affichage des pages optimaux sur notre site
            ainsi que de contrôler le respect de la vie privée des utilisateurs (“gdprcompliance”). L’utilisation de ces
            traceurs ne requiert pas votre consentement selon l’article 32 II de la loi n° 78-17 du 6 janvier 1978.Vous
            pouvez néanmoins les désactiver à tout moment.</p>
        <h3>Cookies requérant votre consentement préalable</h3>
        <p>Des cookies Analytics, provenant du tiers Google, ont pour finalité de recueillir des statistiques de visites
            anonymes qui, une fois recoupées, pourraient être intrusives pour la vie privée des utilisateurs du site.
        </p>
        <p>En conséquence, l’utilisation des traceurs Google Analytics est désactivée par défaut sur ce site. Vous
            pouvez les autoriser pour permettre au responsable du site d’améliorer la qualité de la navigation et des
            informations dispensées sur ce site. Enfin, vous pouvez à tout moment revenir sur votre choix et retirer
            votre consentement</p>
        <p>&nbsp;</p>
        <h2>Informations supplémentaires</h2>
        <h3>Comment nous protégeons vos données</h3>
        <p>Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles appropriées afin
            de garantir un niveau de sécurité adapté au regard des risques d’accès accidentels, non autorisés ou
            illégaux, de divulgation, d’altération, de perte ou encore de destruction des données personnelles vous
            concernant. Dans l’éventualité où nous prendrions connaissance d’un accès illégal aux données personnelles
            vous concernant stockées sur nos serveurs ou ceux de nos prestataires, ou d’un accès non autorisé ayant pour
            conséquence la réalisation des risques identifiés ci-dessus, nous nous engageons à :</p>
        <ul>
            <li>Vous notifier l’incident dans les plus brefs délais ;</li>
            <li>Examiner les causes de l’incident et vous en informer ;</li>
            <li>Prendre les mesures nécessaires dans la limite du raisonnable afin d’amoindrir les effets négatifs et
                préjudices pouvant résulter dudit incident</li>
        </ul>
        <p>Limitation de la responsabilité<br>En aucun cas les engagements définis au point ci-dessus relatif à la
            notification en cas de faille de sécurité ne peuvent être assimilés à une quelconque reconnaissance de faute
            ou de responsabilité quant à la survenance de l’incident en question.</p>
        <p>&nbsp;</p>
        <h2>Retrait du Consentement concernant vos données personnelles</h2>
        <p>Vous disposez d’un droit d’accès, de modification et/ou de suppression des données vous concernant à tout
            moment en contactant l’éditeur du site.</p>
        <p>Le responsable du fichier dispose d’un délai de réponse maximal de 2 mois à compter de la demande. La CNIL
            précise : « Si la demande est incomplète (absence de la pièce d’identité par exemple), le responsable du
            fichier est en droit de demander des compléments : le délai est alors suspendu et courre à nouveau une fois
            ces éléments fournis ».</p>
        <p>Les limites au droit d’accès sont précisées sur le site de la CNIL et &nbsp;<a
                href=\"https://www.cnil.fr/fr/respecter-les-droits-des-personnes\" target=\"_blank\"
                rel=\"noopener noreferrer\">consultables en cliquant ici</a>.</p>
        <p>&nbsp;</p>
        <h2>Modification des CGU et de la politique de confidentialité</h2>
        <p>En cas de modification des présentes CGU, engagement de ne pas baisser le niveau de confidentialité de
            manière substantielle sans l’information préalable des personnes concernées<br>Nous nous engageons à vous
            informer en cas de modification substantielle des présentes CGU, et à ne pas baisser le niveau de
            confidentialité de vos données de manière substantielle sans vous en informer et obtenir votre consentement.
        </p>
    </div>
</div>
{% endblock %}", "mentions/confidentialite.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\mentions\\confidentialite.html.twig");
    }
}
