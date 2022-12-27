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

/* inicio.html */
class __TwigTemplate_6b66d78aba4af8388d0b8df3a5df6836 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
            'panelSesion' => [$this, 'block_panelSesion'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio.html"));

        $this->parent = $this->loadTemplate("base.html", "inicio.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        // line 3
        echo "
<body>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

        .txtcolor {
            color: black;
            margin-bottom: 30px;
            font-size: 25px;
            padding-right: 20px;
            font-family: 'Raleway', sans-serif;
        }

        a {
            color: red;
        }

        a:hover {
            color: red;
        }

        button {
            background-color: black;
            color: white;
            border-color: black;
            border-radius: 5px;
        }

        .row {
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
    </style>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                
                <a class=\"navbar-brand\"  >
                    <img src=\"header-logo.png\" class=\"logo\" alt=\"Logo mil.una\" width=\"70\" height=\"70\">
                </a>


                <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar\">
                    <ul class=\"navbar-nav mb-2 mb-lg-0\">

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" [routerLink]=\"['/calendario']\">
                                <span class=\"txtcolor\">Administración</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class=\"\" style=\"background-color: rgb(178, 217, 232); height: 3px;\"></div>

        <br>
        <br>

        <div class=\"container\">
            ";
        // line 69
        $this->displayBlock('panelSesion', $context, $blocks);
        // line 70
        echo "        </div>















    </body>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_panelSesion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelSesion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelSesion"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "inicio.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  139 => 70,  137 => 69,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}
{% block layout %}

<body>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
        integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

        .txtcolor {
            color: black;
            margin-bottom: 30px;
            font-size: 25px;
            padding-right: 20px;
            font-family: 'Raleway', sans-serif;
        }

        a {
            color: red;
        }

        a:hover {
            color: red;
        }

        button {
            background-color: black;
            color: white;
            border-color: black;
            border-radius: 5px;
        }

        .row {
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
    </style>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
                
                <a class=\"navbar-brand\"  >
                    <img src=\"header-logo.png\" class=\"logo\" alt=\"Logo mil.una\" width=\"70\" height=\"70\">
                </a>


                <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar\">
                    <ul class=\"navbar-nav mb-2 mb-lg-0\">

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" [routerLink]=\"['/calendario']\">
                                <span class=\"txtcolor\">Administración</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class=\"\" style=\"background-color: rgb(178, 217, 232); height: 3px;\"></div>

        <br>
        <br>

        <div class=\"container\">
            {% block panelSesion %}  {% endblock %}
        </div>















    </body>
    {% endblock %}", "inicio.html", "/Applications/MAMP/htdocs/proyectoTROLL/Mil.Una/Aplicación/APP-ADMIN/templates/inicio.html");
    }
}
