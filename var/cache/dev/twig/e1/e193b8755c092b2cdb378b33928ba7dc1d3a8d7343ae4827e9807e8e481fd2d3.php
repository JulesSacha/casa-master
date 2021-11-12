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

/* vendre/vendre.html.twig */
class __TwigTemplate_e0afaebb83b67b5d2065aecbd613c4515a72c2bde5a4a3409affbf3574cf9bf0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendre/vendre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendre/vendre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vendre/vendre.html.twig", 1);
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

        echo "Hello VendreController!";
        
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
    <svg id=\"vendre-svg\" height=\"350\" viewBox=\"0 0 496.00107 496.00107\" width=\"auto\" version=\"1.1\" id=\"svg17071\"
        sodipodi:docname=\"a-vendre.svg\" inkscape:version=\"1.1 (c68e22c387, 2021-05-23)\"
        xmlns:inkscape=\"http://www.inkscape.org/namespaces/inkscape\"
        xmlns:sodipodi=\"http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd\" xmlns=\"http://www.w3.org/2000/svg\"
        xmlns:svg=\"http://www.w3.org/2000/svg\">
        <defs id=\"defs17075\">
            <rect x=\"313.97504\" y=\"278.20573\" width=\"214.61585\" height=\"160.56445\" id=\"rect20226\" />
        </defs>
        <sodipodi:namedview id=\"namedview17073\" pagecolor=\"#505050\" bordercolor=\"#eeeeee\" borderopacity=\"1\"
            inkscape:pageshadow=\"0\" inkscape:pageopacity=\"0\" inkscape:pagecheckerboard=\"0\" inkscape:document-units=\"pt\"
            showgrid=\"false\" inkscape:zoom=\"1.2580618\" inkscape:cx=\"331.06482\" inkscape:cy=\"331.06482\"
            inkscape:window-width=\"1920\" inkscape:window-height=\"1017\" inkscape:window-x=\"-8\" inkscape:window-y=\"1072\"
            inkscape:window-maximized=\"1\" inkscape:current-layer=\"svg17071\" />
        <path
            d=\"m488 480h-360v-352h88v24h-40c-4.417969 0-8 3.582031-8 8v208c0 4.417969 3.582031 8 8 8h280c4.417969 0 8-3.582031 8-8v-208c0-4.417969-3.582031-8-8-8h-40v-24h64c3.980469 0 7.355469-2.921875 7.921875-6.863281l8-56c.328125-2.296875-.355469-4.621094-1.875-6.375-1.519531-1.753907-3.726563-2.761719-6.046875-2.761719h-360v-48c0-2.320312-1.007812-4.523438-2.757812-6.042969-1.753907-1.523437-4.082032-2.207031-6.378907-1.8749998l-56 7.9999998c-3.9375.5625-6.863281 3.9375-6.863281 7.917969v40h-48c-4.417969 0-8 3.582031-8 8v56c0 4.417969 3.582031 8 8 8h48v352h-48c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h480c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm-40-312v192h-264v-192zm-48-16h-168v-24h168zm78.777344-80-5.714844 40h-345.0625v-40zm-462.777344 40v-40h40v40zm56-89.0625 40-5.710938v462.773438h-40zm0 0\"
            id=\"path17055\" style=\"fill:#E41F25;fill-opacity:1\" />
        <text xml:space=\"preserve\" transform=\"scale(0.75)\" id=\"text20224\"
            style=\"fill:black;fill-opacity:1;line-height:1.25;stroke:none;font-family:sans-serif;font-style:normal;font-weight:normal;font-size:40px;white-space:pre;\" />
        <text xml:space=\"preserve\"
            style=\"font-style:normal;font-weight:normal;font-size:155.302px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:3.88255\"
            x=\"239.35599\" y=\"343.72086\" id=\"text22388\" transform=\"scale(1.0909104,0.91666556)\">
            <tspan sodipodi:role=\"line\" id=\"tspan22386\" style=\"stroke-width:3.88255;fill:#ffffff;fill-opacity:1\"
                x=\"239.35599\" y=\"343.72086\">€</tspan>
        </text>
    </svg>

    <div class=\"description-text\">
        <h2>Vendez votre bien</h2>
        <p>Pour vendre votre bien immobilier, profitez de notre savoir-faire. <br>Toute l'équipe est à votre écoute pour vous accompagner dans votre projet immobilier.
        </p>
    </div>




</div>
<div id=\"estimationForm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6 offset-3\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 48
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "                        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " bg-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " text-light p-3 mb-5 rounded\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
        <h1>Faites estimer votre bien immobilier</h1>
        <h3>Nous vous répondrons le plus rapidement possible</h3>
        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control2"]]);
        echo "
        <div class=\"short\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 59, $this->source); })()), "codePostal", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 60, $this->source); })()), "ville", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 62, $this->source); })()), "typeBien", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control2"]]);
        echo "
        <div class=\"short\">
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 64, $this->source); })()), "nbPiece", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 65, $this->source); })()), "surface", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEstimation"]) || array_key_exists("formEstimation", $context) ? $context["formEstimation"] : (function () { throw new RuntimeError('Variable "formEstimation" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendre/vendre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 67,  192 => 65,  188 => 64,  183 => 62,  178 => 60,  174 => 59,  169 => 57,  165 => 56,  159 => 52,  153 => 51,  140 => 49,  135 => 48,  131 => 47,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VendreController!{% endblock %}

{% block body %}
<div class=\"description\">
    <svg id=\"vendre-svg\" height=\"350\" viewBox=\"0 0 496.00107 496.00107\" width=\"auto\" version=\"1.1\" id=\"svg17071\"
        sodipodi:docname=\"a-vendre.svg\" inkscape:version=\"1.1 (c68e22c387, 2021-05-23)\"
        xmlns:inkscape=\"http://www.inkscape.org/namespaces/inkscape\"
        xmlns:sodipodi=\"http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd\" xmlns=\"http://www.w3.org/2000/svg\"
        xmlns:svg=\"http://www.w3.org/2000/svg\">
        <defs id=\"defs17075\">
            <rect x=\"313.97504\" y=\"278.20573\" width=\"214.61585\" height=\"160.56445\" id=\"rect20226\" />
        </defs>
        <sodipodi:namedview id=\"namedview17073\" pagecolor=\"#505050\" bordercolor=\"#eeeeee\" borderopacity=\"1\"
            inkscape:pageshadow=\"0\" inkscape:pageopacity=\"0\" inkscape:pagecheckerboard=\"0\" inkscape:document-units=\"pt\"
            showgrid=\"false\" inkscape:zoom=\"1.2580618\" inkscape:cx=\"331.06482\" inkscape:cy=\"331.06482\"
            inkscape:window-width=\"1920\" inkscape:window-height=\"1017\" inkscape:window-x=\"-8\" inkscape:window-y=\"1072\"
            inkscape:window-maximized=\"1\" inkscape:current-layer=\"svg17071\" />
        <path
            d=\"m488 480h-360v-352h88v24h-40c-4.417969 0-8 3.582031-8 8v208c0 4.417969 3.582031 8 8 8h280c4.417969 0 8-3.582031 8-8v-208c0-4.417969-3.582031-8-8-8h-40v-24h64c3.980469 0 7.355469-2.921875 7.921875-6.863281l8-56c.328125-2.296875-.355469-4.621094-1.875-6.375-1.519531-1.753907-3.726563-2.761719-6.046875-2.761719h-360v-48c0-2.320312-1.007812-4.523438-2.757812-6.042969-1.753907-1.523437-4.082032-2.207031-6.378907-1.8749998l-56 7.9999998c-3.9375.5625-6.863281 3.9375-6.863281 7.917969v40h-48c-4.417969 0-8 3.582031-8 8v56c0 4.417969 3.582031 8 8 8h48v352h-48c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h480c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm-40-312v192h-264v-192zm-48-16h-168v-24h168zm78.777344-80-5.714844 40h-345.0625v-40zm-462.777344 40v-40h40v40zm56-89.0625 40-5.710938v462.773438h-40zm0 0\"
            id=\"path17055\" style=\"fill:#E41F25;fill-opacity:1\" />
        <text xml:space=\"preserve\" transform=\"scale(0.75)\" id=\"text20224\"
            style=\"fill:black;fill-opacity:1;line-height:1.25;stroke:none;font-family:sans-serif;font-style:normal;font-weight:normal;font-size:40px;white-space:pre;\" />
        <text xml:space=\"preserve\"
            style=\"font-style:normal;font-weight:normal;font-size:155.302px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:3.88255\"
            x=\"239.35599\" y=\"343.72086\" id=\"text22388\" transform=\"scale(1.0909104,0.91666556)\">
            <tspan sodipodi:role=\"line\" id=\"tspan22386\" style=\"stroke-width:3.88255;fill:#ffffff;fill-opacity:1\"
                x=\"239.35599\" y=\"343.72086\">€</tspan>
        </text>
    </svg>

    <div class=\"description-text\">
        <h2>Vendez votre bien</h2>
        <p>Pour vendre votre bien immobilier, profitez de notre savoir-faire. <br>Toute l'équipe est à votre écoute pour vous accompagner dans votre projet immobilier.
        </p>
    </div>




</div>
<div id=\"estimationForm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6 offset-3\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"flash-{{ label }} bg-{{ label }} text-light p-3 mb-5 rounded\">{{ message }}</div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>
        <h1>Faites estimer votre bien immobilier</h1>
        <h3>Nous vous répondrons le plus rapidement possible</h3>
        {{ form_start(formEstimation) }}
        {{ form_row(formEstimation.adresse , {'attr':{'class':'form-control2'} }) }}
        <div class=\"short\">
        {{ form_row(formEstimation.codePostal, {'attr':{'class':'form-control'} }) }}
        {{ form_row(formEstimation.ville , {'attr':{'class':'form-control'} }) }}
    </div>
        {{ form_row(formEstimation.typeBien , {'attr':{'class':'form-control2'} }) }}
        <div class=\"short\">
        {{ form_row(formEstimation.nbPiece, {'attr':{'class':'form-control'} }) }}
        {{ form_row(formEstimation.surface, {'attr':{'class':'form-control'} }) }}
        </div>
        {{ form_end(formEstimation )}}
    </div>
</div>
{% endblock %}", "vendre/vendre.html.twig", "C:\\wamp64\\www\\casatransactions-master\\templates\\vendre\\vendre.html.twig");
    }
}
