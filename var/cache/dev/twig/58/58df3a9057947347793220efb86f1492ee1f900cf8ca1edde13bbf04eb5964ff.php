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
class __TwigTemplate_a4a2f8ab1d05b6d87d7e6b9cf2e578cb5e4459a74edc9e3d6e0771c5901639e2 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Agence immobilière sur Strasbourg et l'alsace\" />
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-onglet.png"), "html", null, true);
        echo "\" />
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
</head>
";
        // line 22
        echo "    <nav>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \">
            <img class=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-v4.png"), "html", null, true);
        echo "\" alt=\"Logo Casa-Transactions\" />
        </a>
        <div class=\"navbar\">
            <ul>
                <li>
                    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acheter");
        echo " \" ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), "acheter"))) {
            echo " class=\"active\" ";
        }
        // line 30
        echo ">Acheter</a>
                </li>


                <li>
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendre");
        echo "\" ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35), "vendre"))) {
            echo " class=\"active\" ";
        }
        // line 36
        echo ">Vendre</a>
                </li>

                <li>
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("louer");
        echo "\" ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", [0 => "_route"], "method", false, false, false, 40), "louer"))) {
            echo " class=\"active\" ";
        }
        // line 41
        echo ">Louer</a>
                </li>

                <li>
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "contact"))) {
            echo " class=\"active\" ";
        }
        // line 46
        echo ">Contact</a>
                </li>

            </ul>


            <div class=\"resaux\">
                <a href=\"tel:06 62 72 24 65\"><h3>Appelez-nous</a></h3><i class=\"fas fa-phone-square-alt\"></i></a>
                ";
        // line 56
        echo "            </div>
        </div>
        <a class=\"btn-home\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a>
    </nav>

    <body>
        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    </body>



    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-col\">
                    <h4>Adresse</h4>
                    <ul>
                        <li><a href=\"#\">Casa Transactions <br>
                                SIRET 530 929 710. 00016 <br> tribunal de Saverne <br>
                                Carte Pro CPI 6701 2017 000 019 307 
                                <br>Forme juridique SASU domiciliée <br>262 rue Principale 67210 MEISTRATZHEIM
                                <br>06 62 72 24 65
                            </a>
                        </li>
                        <li> <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions légales</a></li>
                        <li> <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confidentialite");
        echo "\">Politique de confidentialité</a></li>
                        <li> <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif");
        echo "\">Grille tarifaire</a></li>


                    </ul>

                </div>
                <div class=\"footer-col\">
                    <ul>
                        <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acheter");
        echo "\">Acheter</a></li>
                        <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendre");
        echo "\">Vendre</a></li>
                        <li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("louer");
        echo "\">Louer</a></li>
                        <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                    </ul>
                </div>


                <div class=\"footer-col\">

                    <!-- <h4>Suivez-nous</h4>
                    <div class=\"social-links\">
                        <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    </div> -->
                    <img class=\"logo\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-v4.png"), "html", null, true);
        echo "\" alt=\"Logo Casa-Transactions\" />

                </div>
                
            </div>
        </div>
    </footer>

    ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        echo "\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    ";
        // line 17
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://kit.fontawesome.com/2291977630.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 119
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 119,  320 => 116,  310 => 115,  292 => 62,  282 => 17,  277 => 14,  272 => 13,  262 => 12,  243 => 9,  232 => 120,  230 => 115,  219 => 107,  202 => 93,  198 => 92,  194 => 91,  190 => 90,  179 => 82,  175 => 81,  171 => 80,  152 => 63,  150 => 62,  143 => 58,  139 => 56,  129 => 46,  123 => 45,  117 => 41,  111 => 40,  105 => 36,  99 => 35,  92 => 30,  86 => 29,  78 => 24,  74 => 23,  71 => 22,  67 => 18,  64 => 12,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Agence immobilière sur Strasbourg et l'alsace\" />
    <link rel=\"icon\" href=\"{{asset('img/logo-onglet.png')}}\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
    and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style.css') }}\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    {#{{ encore_entry_link_tags('app') }}#}
    {% endblock %}

</head>
{# <header id=\"header\">
    <img class=\"logo\" src=\"{{ asset('img/logo-casa-removebg-preview (1).png')}}\" alt=\"\"> #}
    <nav>
        <a href=\"{{ path('home')}} \">
            <img class=\"logo\" src=\"{{asset('img/logo-v4.png')}}\" alt=\"Logo Casa-Transactions\" />
        </a>
        <div class=\"navbar\">
            <ul>
                <li>
                    <a href=\"{{ path('acheter') }} \" {% if app.request.get('_route')=='acheter' %} class=\"active\" {%
                        endif %}>Acheter</a>
                </li>


                <li>
                    <a href=\"{{ path('vendre') }}\" {% if app.request.get('_route')=='vendre' %} class=\"active\" {% endif
                        %}>Vendre</a>
                </li>

                <li>
                    <a href=\"{{ path('louer') }}\" {% if app.request.get('_route')=='louer' %} class=\"active\" {% endif
                        %}>Louer</a>
                </li>

                <li>
                    <a href=\"{{ path('contact') }}\" {% if app.request.get('_route')=='contact' %} class=\"active\" {%
                        endif %}>Contact</a>
                </li>

            </ul>


            <div class=\"resaux\">
                <a href=\"tel:06 62 72 24 65\"><h3>Appelez-nous</a></h3><i class=\"fas fa-phone-square-alt\"></i></a>
                {# <a href=\"https://www.facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
                <a href=\"https://www.instagram.com\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a> #}
            </div>
        </div>
        <a class=\"btn-home\" href=\"{{ path('home') }}\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a>
    </nav>

    <body>
        {% block body %}{% endblock %}
    </body>



    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-col\">
                    <h4>Adresse</h4>
                    <ul>
                        <li><a href=\"#\">Casa Transactions <br>
                                SIRET 530 929 710. 00016 <br> tribunal de Saverne <br>
                                Carte Pro CPI 6701 2017 000 019 307 
                                <br>Forme juridique SASU domiciliée <br>262 rue Principale 67210 MEISTRATZHEIM
                                <br>06 62 72 24 65
                            </a>
                        </li>
                        <li> <a href=\"{{path('mentions')}}\">Mentions légales</a></li>
                        <li> <a href=\"{{path('confidentialite')}}\">Politique de confidentialité</a></li>
                        <li> <a href=\"{{path('tarif')}}\">Grille tarifaire</a></li>


                    </ul>

                </div>
                <div class=\"footer-col\">
                    <ul>
                        <li><a href=\"{{ path('acheter') }}\">Acheter</a></li>
                        <li><a href=\"{{ path('vendre') }}\">Vendre</a></li>
                        <li><a href=\"{{ path('louer') }}\">Louer</a></li>
                        <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                    </ul>
                </div>


                <div class=\"footer-col\">

                    <!-- <h4>Suivez-nous</h4>
                    <div class=\"social-links\">
                        <a href=\"#\"><i class=\"fab fa-google\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    </div> -->
                    <img class=\"logo\" src=\"{{asset('img/logo-v4.png')}}\" alt=\"Logo Casa-Transactions\" />

                </div>
                
            </div>
        </div>
    </footer>

    {% block javascripts %}
    <script src=\"{{asset('js/index.js')}}\"></script>
    <script src=\"https://kit.fontawesome.com/2291977630.js\" crossorigin=\"anonymous\"></script>
    {#{{ encore_entry_script_tags('app') }}#}
    {% endblock %}

</html>", "base.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\base.html.twig");
    }
}
