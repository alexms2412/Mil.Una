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

/* iniciologin.html */
class __TwigTemplate_a401af58b3e540e4b56bd96b427855c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "iniciologin.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "iniciologin.html"));

        $this->parent = $this->loadTemplate("base.html", "iniciologin.html", 1);
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

                <a class=\"navbar-brand\" href=\"/landing\">
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
            <div class=\"row\">
                <div class=\"col col-0 col-lg-5 col-md-5 col-sm-5 col-xs-5 d-none d-sm-block\">
                    <img src=\"https://scontent.fvlc4-1.fna.fbcdn.net/v/t1.6435-9/37380454_239260766898592_1157842991667216384_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=e3f864&_nc_ohc=HT0m-Xa5p9AAX_dtpb_&_nc_ht=scontent.fvlc4-1.fna&oh=00_AT8wHD7U_dVSbQegVb-m9UlByT6WXBzVLPLbpobTMC-VZA&oe=6236242C\"
                        style=\"height: 100%; border-top-left-radius: 20px;
                            border-bottom-left-radius: 30px; margin-left: -40px;\" alt=\"\" class=\"img-fluid\">
                </div>
                <div class=\"col col-12 col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                    <br>
                    <br>
                    <h1 class=\"col-lg-7 col-sm-10 font-weight-bold\">Login</h1>
                    <br>
                    <h3 class=\"col-lg-10 col-sm-10\">Inicia sesion en Mil.Una</h3>
                    <br>
                    <form>
                        <div class=\"col-lg-7 col-sm-10\">
                            <input type=\"text\" class=\"form-control form-control-lg\" id=\"colFormLabelLg\"
                                placeholder=\"Usuario\">
                        </div>
                        <br>
                        <div class=\"col-lg-7 col-sm-10\">
                            <input type=\"password\" class=\"form-control form-control-lg\" id=\"colFormLabelLg\"
                                placeholder=\"Contraseña\">
                        </div>
                        <br>
                        <div class=\"col-lg-7 col-sm-10\">
                            <button type=\"button\" class=\"btn1 mt-3 mb-5\">Inicia Sesión</button>
                        </div>
                        <div class=\"col-sm-10\">
                            <p>¿No tienes cuenta? <a href=\"#\">Ir a register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>















    </body>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "iniciologin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
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

                <a class=\"navbar-brand\" href=\"/landing\">
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
            <div class=\"row\">
                <div class=\"col col-0 col-lg-5 col-md-5 col-sm-5 col-xs-5 d-none d-sm-block\">
                    <img src=\"https://scontent.fvlc4-1.fna.fbcdn.net/v/t1.6435-9/37380454_239260766898592_1157842991667216384_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=e3f864&_nc_ohc=HT0m-Xa5p9AAX_dtpb_&_nc_ht=scontent.fvlc4-1.fna&oh=00_AT8wHD7U_dVSbQegVb-m9UlByT6WXBzVLPLbpobTMC-VZA&oe=6236242C\"
                        style=\"height: 100%; border-top-left-radius: 20px;
                            border-bottom-left-radius: 30px; margin-left: -40px;\" alt=\"\" class=\"img-fluid\">
                </div>
                <div class=\"col col-12 col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                    <br>
                    <br>
                    <h1 class=\"col-lg-7 col-sm-10 font-weight-bold\">Login</h1>
                    <br>
                    <h3 class=\"col-lg-10 col-sm-10\">Inicia sesion en Mil.Una</h3>
                    <br>
                    <form>
                        <div class=\"col-lg-7 col-sm-10\">
                            <input type=\"text\" class=\"form-control form-control-lg\" id=\"colFormLabelLg\"
                                placeholder=\"Usuario\">
                        </div>
                        <br>
                        <div class=\"col-lg-7 col-sm-10\">
                            <input type=\"password\" class=\"form-control form-control-lg\" id=\"colFormLabelLg\"
                                placeholder=\"Contraseña\">
                        </div>
                        <br>
                        <div class=\"col-lg-7 col-sm-10\">
                            <button type=\"button\" class=\"btn1 mt-3 mb-5\">Inicia Sesión</button>
                        </div>
                        <div class=\"col-sm-10\">
                            <p>¿No tienes cuenta? <a href=\"#\">Ir a register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>















    </body>
    {% endblock %}", "iniciologin.html", "C:\\Users\\Juan Carlos\\Desktop\\Mil.Una\\Aplicación\\APP-ADMIN\\templates\\iniciologin.html");
    }
}
