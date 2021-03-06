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
        <h2>D??finitions</h2>
        <p>L?????diteur&nbsp;: La personne, physique ou morale, qui ??dite les services de communication au public en
            ligne.<br>Le Site&nbsp;: L???ensemble des sites, pages Internet et services en ligne propos??s par
            l?????diteur.<br>L???Utilisateur&nbsp;: La personne utilisant le Site et les services.</p>
        <p>&nbsp;</p>
        <h2>Nature des donn??es collect??es</h2>
        <p>Dans le cadre de l???utilisation des Sites, l?????diteur est susceptible de collecter les cat??gories de donn??es
            suivantes concernant ses Utilisateurs :</p>
        <p>Donn??es d?????tat-civil, d???identit??, d???identification???</p>
        <p>Donn??es relatives ?? la vie personnelle (habitudes de vie, situation familiale, hors donn??es sensibles ou
            dangereuses)</p>
        <p>Donn??es relatives ?? la vie professionnelle (CV, scolarit??, formation professionnelle, distinctions???)</p>
        <p>Informations d???ordre ??conomique et financier (revenus, situation financi??re, situation fiscale???)</p>
        <p>Donn??es de connexion (adresses IP, journaux d?????v??nements???)</p>
        <p>Donn??es de localisation (d??placements, donn??es GPS, GSM???)</p>
        <p>&nbsp;</p>
        <h2>Conservation des donn??es techniques et personnelles</h2>
        <p>Dur??e de conservation des donn??es techniques</p>
        <p>Les donn??es techniques sont conserv??es pour la dur??e strictement n??cessaire ?? la r??alisation des finalit??s
            vis??es ci-avant.</p>
        <p>Suppression des donn??es apr??s suppression du compte</p>
        <p>Des moyens de purge de donn??es sont mis en place afin d???en pr??voir la suppression effective d??s lors que la
            dur??e de conservation ou d???archivage n??cessaire ?? l???accomplissement des finalit??s d??termin??es ou impos??es
            est atteinte. Conform??ment ?? la loi n??78-17 du 6 janvier 1978 relative ?? l???informatique, aux fichiers et aux
            libert??s, vous disposez par ailleurs d???un droit de suppression sur vos donn??es que vous pouvez exercer ??
            tout moment en prenant
              contact avec l?????diteur.</p>
        <p>Suppression des donn??es apr??s 3 ans d???inactivit??</p>
        <p>Pour des raisons de s??curit??, si vous ne vous ??tes pas authentifi?? sur le Site pendant une p??riode de trois
            ans, vous recevrez un e-mail vous invitant ?? vous connecter dans les plus brefs d??lais, sans quoi vos
            donn??es seront supprim??es de nos bases de donn??es.</p>
        <p>&nbsp;</p>
        <h2>Formulaires de contact</h2>
        <p>Conform??ment ?? l???article 32 de la loi ??Informatique et Libert??s?? n?? 78-17 du 6 janvier 1978, modifi??e par la
            loi n?? 2004-801 du 6 ao??t 2004, les informations personnelles (pr??nom, nom, num??ro de t??l??phone, e-mail,
            statut social,???) recueillies via les formulaires de<span>&nbsp;</span><a
                href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">contact</a><span>&nbsp;</span>font l???objet d???un traitement
            informatique destin?? seulement ?? ce que le responsable du traitement, seule destinataire des donn??es, puisse
            r??pondre aux utilisateurs, et ce de la mani??re la plus appropri??e, et ne seront jamais utilis??es ?? des fins
            non pr??vues ni transmises ?? des partenaires. Aucune information personnelle autre que celles demand??es dans
            ce cadre n???est collect??e ?? votre insu.</p>
        <p><strong>Astuce</strong><span>&nbsp;</span>: vous ne souhaitez pas donner votre consentement ? Appelez-nous
            directement. Nous r??pondrons ainsi ?? vos questions par t??l??phone.</p>
        <p>&nbsp;</p>
        <h2>Contenu embarqu?? depuis d???autres sites</h2>
        <p>Les articles de ce site peuvent inclure des contenus int??gr??s (par exemple des vid??os, images, articles???). Le
            contenu int??gr?? depuis d???autres sites se comporte de la m??me mani??re que si le visiteur se rendait sur cet
            autre site.</p>
        <p>Ces sites web pourraient collecter des donn??es sur vous, utiliser des cookies, embarquer des outils de suivis
            tiers, suivre vos interactions avec ces contenus embarqu??s si vous disposez d???un compte connect?? sur leur
            site web.</p>
        <p>&nbsp;</p>
        <h2>Cookies</h2>
        <p>Dur??e de conservation des cookies</p>
        <p>Conform??ment aux recommandations de la CNIL, la dur??e maximale de conservation des cookies est de 13 mois au
            maximum apr??s leur premier d??p??t dans le terminal de l???Utilisateur, tout comme la dur??e de la validit?? du
            consentement de l???Utilisateur ?? l???utilisation de ces cookies. La dur??e de vie des cookies n???est pas
            prolong??e ?? chaque visite. Le consentement de l???Utilisateur devra donc ??tre renouvel?? ?? l???issue de ce d??lai.
        </p>
        <p>&nbsp;</p>
        <h3>Finalit?? cookies</h3>
        <p>Les cookies peuvent ??tre utilis??s pour des fins statistiques notamment pour optimiser les services rendus ??
            l???Utilisateur, ?? partir du traitement des informations concernant la fr??quence d???acc??s, la personnalisation
            des pages ainsi que les op??rations r??alis??es et les informations consult??es.<br>Vous ??tes inform?? que
            l?????diteur est susceptible de d??poser des cookies sur votre terminal. Le cookie enregistre des informations
            relatives ?? la navigation sur le service (les pages que vous avez consult??es, la date et l???heure de la
            consultation???) que nous pourrons lire lors de vos visites ult??rieures.</p>
        <h3></h3>
        <h3>Cookies exempt??s de consentement pr??alable</h3>
        <p>Des cookies ont pour finalit??s de permettre une navigation et un affichage des pages optimaux sur notre site
            ainsi que de contr??ler le respect de la vie priv??e des utilisateurs (???gdprcompliance???). L???utilisation de ces
            traceurs ne requiert pas votre consentement selon l???article 32 II de la loi n?? 78-17 du 6 janvier 1978.Vous
            pouvez n??anmoins les d??sactiver ?? tout moment.</p>
        <h3>Cookies requ??rant votre consentement pr??alable</h3>
        <p>Des cookies Analytics, provenant du tiers Google, ont pour finalit?? de recueillir des statistiques de visites
            anonymes qui, une fois recoup??es, pourraient ??tre intrusives pour la vie priv??e des utilisateurs du site.
        </p>
        <p>En cons??quence, l???utilisation des traceurs Google Analytics est d??sactiv??e par d??faut sur ce site. Vous
            pouvez les autoriser pour permettre au responsable du site d???am??liorer la qualit?? de la navigation et des
            informations dispens??es sur ce site. Enfin, vous pouvez ?? tout moment revenir sur votre choix et retirer
            votre consentement</p>
        <p>&nbsp;</p>
        <h2>Informations suppl??mentaires</h2>
        <h3>Comment nous prot??geons vos donn??es</h3>
        <p>Nous nous engageons ?? mettre en oeuvre toutes les mesures techniques et organisationnelles appropri??es afin
            de garantir un niveau de s??curit?? adapt?? au regard des risques d???acc??s accidentels, non autoris??s ou
            ill??gaux, de divulgation, d???alt??ration, de perte ou encore de destruction des donn??es personnelles vous
            concernant. Dans l?????ventualit?? o?? nous prendrions connaissance d???un acc??s ill??gal aux donn??es personnelles
            vous concernant stock??es sur nos serveurs ou ceux de nos prestataires, ou d???un acc??s non autoris?? ayant pour
            cons??quence la r??alisation des risques identifi??s ci-dessus, nous nous engageons ?? :</p>
        <ul>
            <li>Vous notifier l???incident dans les plus brefs d??lais ;</li>
            <li>Examiner les causes de l???incident et vous en informer ;</li>
            <li>Prendre les mesures n??cessaires dans la limite du raisonnable afin d???amoindrir les effets n??gatifs et
                pr??judices pouvant r??sulter dudit incident</li>
        </ul>
        <p>Limitation de la responsabilit??<br>En aucun cas les engagements d??finis au point ci-dessus relatif ?? la
            notification en cas de faille de s??curit?? ne peuvent ??tre assimil??s ?? une quelconque reconnaissance de faute
            ou de responsabilit?? quant ?? la survenance de l???incident en question.</p>
        <p>&nbsp;</p>
        <h2>Retrait du Consentement concernant vos donn??es personnelles</h2>
        <p>Vous disposez d???un droit d???acc??s, de modification et/ou de suppression des donn??es vous concernant ?? tout
            moment en contactant l?????diteur du site.</p>
        <p>Le responsable du fichier dispose d???un d??lai de r??ponse maximal de 2 mois ?? compter de la demande. La CNIL
            pr??cise : ?? Si la demande est incompl??te (absence de la pi??ce d???identit?? par exemple), le responsable du
            fichier est en droit de demander des compl??ments : le d??lai est alors suspendu et courre ?? nouveau une fois
            ces ??l??ments fournis ??.</p>
        <p>Les limites au droit d???acc??s sont pr??cis??es sur le site de la CNIL et &nbsp;<a
                href=\"https://www.cnil.fr/fr/respecter-les-droits-des-personnes\" target=\"_blank\"
                rel=\"noopener noreferrer\">consultables en cliquant ici</a>.</p>
        <p>&nbsp;</p>
        <h2>Modification des CGU et de la politique de confidentialit??</h2>
        <p>En cas de modification des pr??sentes CGU, engagement de ne pas baisser le niveau de confidentialit?? de
            mani??re substantielle sans l???information pr??alable des personnes concern??es<br>Nous nous engageons ?? vous
            informer en cas de modification substantielle des pr??sentes CGU, et ?? ne pas baisser le niveau de
            confidentialit?? de vos donn??es de mani??re substantielle sans vous en informer et obtenir votre consentement.
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
        <h2>D??finitions</h2>
        <p>L?????diteur&nbsp;: La personne, physique ou morale, qui ??dite les services de communication au public en
            ligne.<br>Le Site&nbsp;: L???ensemble des sites, pages Internet et services en ligne propos??s par
            l?????diteur.<br>L???Utilisateur&nbsp;: La personne utilisant le Site et les services.</p>
        <p>&nbsp;</p>
        <h2>Nature des donn??es collect??es</h2>
        <p>Dans le cadre de l???utilisation des Sites, l?????diteur est susceptible de collecter les cat??gories de donn??es
            suivantes concernant ses Utilisateurs :</p>
        <p>Donn??es d?????tat-civil, d???identit??, d???identification???</p>
        <p>Donn??es relatives ?? la vie personnelle (habitudes de vie, situation familiale, hors donn??es sensibles ou
            dangereuses)</p>
        <p>Donn??es relatives ?? la vie professionnelle (CV, scolarit??, formation professionnelle, distinctions???)</p>
        <p>Informations d???ordre ??conomique et financier (revenus, situation financi??re, situation fiscale???)</p>
        <p>Donn??es de connexion (adresses IP, journaux d?????v??nements???)</p>
        <p>Donn??es de localisation (d??placements, donn??es GPS, GSM???)</p>
        <p>&nbsp;</p>
        <h2>Conservation des donn??es techniques et personnelles</h2>
        <p>Dur??e de conservation des donn??es techniques</p>
        <p>Les donn??es techniques sont conserv??es pour la dur??e strictement n??cessaire ?? la r??alisation des finalit??s
            vis??es ci-avant.</p>
        <p>Suppression des donn??es apr??s suppression du compte</p>
        <p>Des moyens de purge de donn??es sont mis en place afin d???en pr??voir la suppression effective d??s lors que la
            dur??e de conservation ou d???archivage n??cessaire ?? l???accomplissement des finalit??s d??termin??es ou impos??es
            est atteinte. Conform??ment ?? la loi n??78-17 du 6 janvier 1978 relative ?? l???informatique, aux fichiers et aux
            libert??s, vous disposez par ailleurs d???un droit de suppression sur vos donn??es que vous pouvez exercer ??
            tout moment en prenant
              contact avec l?????diteur.</p>
        <p>Suppression des donn??es apr??s 3 ans d???inactivit??</p>
        <p>Pour des raisons de s??curit??, si vous ne vous ??tes pas authentifi?? sur le Site pendant une p??riode de trois
            ans, vous recevrez un e-mail vous invitant ?? vous connecter dans les plus brefs d??lais, sans quoi vos
            donn??es seront supprim??es de nos bases de donn??es.</p>
        <p>&nbsp;</p>
        <h2>Formulaires de contact</h2>
        <p>Conform??ment ?? l???article 32 de la loi ??Informatique et Libert??s?? n?? 78-17 du 6 janvier 1978, modifi??e par la
            loi n?? 2004-801 du 6 ao??t 2004, les informations personnelles (pr??nom, nom, num??ro de t??l??phone, e-mail,
            statut social,???) recueillies via les formulaires de<span>&nbsp;</span><a
                href=\"{{path('contact')}}\">contact</a><span>&nbsp;</span>font l???objet d???un traitement
            informatique destin?? seulement ?? ce que le responsable du traitement, seule destinataire des donn??es, puisse
            r??pondre aux utilisateurs, et ce de la mani??re la plus appropri??e, et ne seront jamais utilis??es ?? des fins
            non pr??vues ni transmises ?? des partenaires. Aucune information personnelle autre que celles demand??es dans
            ce cadre n???est collect??e ?? votre insu.</p>
        <p><strong>Astuce</strong><span>&nbsp;</span>: vous ne souhaitez pas donner votre consentement ? Appelez-nous
            directement. Nous r??pondrons ainsi ?? vos questions par t??l??phone.</p>
        <p>&nbsp;</p>
        <h2>Contenu embarqu?? depuis d???autres sites</h2>
        <p>Les articles de ce site peuvent inclure des contenus int??gr??s (par exemple des vid??os, images, articles???). Le
            contenu int??gr?? depuis d???autres sites se comporte de la m??me mani??re que si le visiteur se rendait sur cet
            autre site.</p>
        <p>Ces sites web pourraient collecter des donn??es sur vous, utiliser des cookies, embarquer des outils de suivis
            tiers, suivre vos interactions avec ces contenus embarqu??s si vous disposez d???un compte connect?? sur leur
            site web.</p>
        <p>&nbsp;</p>
        <h2>Cookies</h2>
        <p>Dur??e de conservation des cookies</p>
        <p>Conform??ment aux recommandations de la CNIL, la dur??e maximale de conservation des cookies est de 13 mois au
            maximum apr??s leur premier d??p??t dans le terminal de l???Utilisateur, tout comme la dur??e de la validit?? du
            consentement de l???Utilisateur ?? l???utilisation de ces cookies. La dur??e de vie des cookies n???est pas
            prolong??e ?? chaque visite. Le consentement de l???Utilisateur devra donc ??tre renouvel?? ?? l???issue de ce d??lai.
        </p>
        <p>&nbsp;</p>
        <h3>Finalit?? cookies</h3>
        <p>Les cookies peuvent ??tre utilis??s pour des fins statistiques notamment pour optimiser les services rendus ??
            l???Utilisateur, ?? partir du traitement des informations concernant la fr??quence d???acc??s, la personnalisation
            des pages ainsi que les op??rations r??alis??es et les informations consult??es.<br>Vous ??tes inform?? que
            l?????diteur est susceptible de d??poser des cookies sur votre terminal. Le cookie enregistre des informations
            relatives ?? la navigation sur le service (les pages que vous avez consult??es, la date et l???heure de la
            consultation???) que nous pourrons lire lors de vos visites ult??rieures.</p>
        <h3></h3>
        <h3>Cookies exempt??s de consentement pr??alable</h3>
        <p>Des cookies ont pour finalit??s de permettre une navigation et un affichage des pages optimaux sur notre site
            ainsi que de contr??ler le respect de la vie priv??e des utilisateurs (???gdprcompliance???). L???utilisation de ces
            traceurs ne requiert pas votre consentement selon l???article 32 II de la loi n?? 78-17 du 6 janvier 1978.Vous
            pouvez n??anmoins les d??sactiver ?? tout moment.</p>
        <h3>Cookies requ??rant votre consentement pr??alable</h3>
        <p>Des cookies Analytics, provenant du tiers Google, ont pour finalit?? de recueillir des statistiques de visites
            anonymes qui, une fois recoup??es, pourraient ??tre intrusives pour la vie priv??e des utilisateurs du site.
        </p>
        <p>En cons??quence, l???utilisation des traceurs Google Analytics est d??sactiv??e par d??faut sur ce site. Vous
            pouvez les autoriser pour permettre au responsable du site d???am??liorer la qualit?? de la navigation et des
            informations dispens??es sur ce site. Enfin, vous pouvez ?? tout moment revenir sur votre choix et retirer
            votre consentement</p>
        <p>&nbsp;</p>
        <h2>Informations suppl??mentaires</h2>
        <h3>Comment nous prot??geons vos donn??es</h3>
        <p>Nous nous engageons ?? mettre en oeuvre toutes les mesures techniques et organisationnelles appropri??es afin
            de garantir un niveau de s??curit?? adapt?? au regard des risques d???acc??s accidentels, non autoris??s ou
            ill??gaux, de divulgation, d???alt??ration, de perte ou encore de destruction des donn??es personnelles vous
            concernant. Dans l?????ventualit?? o?? nous prendrions connaissance d???un acc??s ill??gal aux donn??es personnelles
            vous concernant stock??es sur nos serveurs ou ceux de nos prestataires, ou d???un acc??s non autoris?? ayant pour
            cons??quence la r??alisation des risques identifi??s ci-dessus, nous nous engageons ?? :</p>
        <ul>
            <li>Vous notifier l???incident dans les plus brefs d??lais ;</li>
            <li>Examiner les causes de l???incident et vous en informer ;</li>
            <li>Prendre les mesures n??cessaires dans la limite du raisonnable afin d???amoindrir les effets n??gatifs et
                pr??judices pouvant r??sulter dudit incident</li>
        </ul>
        <p>Limitation de la responsabilit??<br>En aucun cas les engagements d??finis au point ci-dessus relatif ?? la
            notification en cas de faille de s??curit?? ne peuvent ??tre assimil??s ?? une quelconque reconnaissance de faute
            ou de responsabilit?? quant ?? la survenance de l???incident en question.</p>
        <p>&nbsp;</p>
        <h2>Retrait du Consentement concernant vos donn??es personnelles</h2>
        <p>Vous disposez d???un droit d???acc??s, de modification et/ou de suppression des donn??es vous concernant ?? tout
            moment en contactant l?????diteur du site.</p>
        <p>Le responsable du fichier dispose d???un d??lai de r??ponse maximal de 2 mois ?? compter de la demande. La CNIL
            pr??cise : ?? Si la demande est incompl??te (absence de la pi??ce d???identit?? par exemple), le responsable du
            fichier est en droit de demander des compl??ments : le d??lai est alors suspendu et courre ?? nouveau une fois
            ces ??l??ments fournis ??.</p>
        <p>Les limites au droit d???acc??s sont pr??cis??es sur le site de la CNIL et &nbsp;<a
                href=\"https://www.cnil.fr/fr/respecter-les-droits-des-personnes\" target=\"_blank\"
                rel=\"noopener noreferrer\">consultables en cliquant ici</a>.</p>
        <p>&nbsp;</p>
        <h2>Modification des CGU et de la politique de confidentialit??</h2>
        <p>En cas de modification des pr??sentes CGU, engagement de ne pas baisser le niveau de confidentialit?? de
            mani??re substantielle sans l???information pr??alable des personnes concern??es<br>Nous nous engageons ?? vous
            informer en cas de modification substantielle des pr??sentes CGU, et ?? ne pas baisser le niveau de
            confidentialit?? de vos donn??es de mani??re substantielle sans vous en informer et obtenir votre consentement.
        </p>
    </div>
</div>
{% endblock %}", "mentions/confidentialite.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\mentions\\confidentialite.html.twig");
    }
}
