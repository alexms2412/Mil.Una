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

/* sesion.html */
class __TwigTemplate_a06f509ac0ba64a7ef69b047df33b8f34c534c6e59907436795ca094e1e3f438 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sesion.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sesion.html"));

        $this->parent = $this->loadTemplate("base.html", "sesion.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        // line 3
        echo "
<body>
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"
        integrity=\"sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    <style>
        /* BASIC */

        body {
            background-image: url(\"src/img/Backgroudns/8.jpg\");
            background-position: center;
            backdrop-filter: blur(2px);
            background-repeat: no-repeat;
            margin: auto;
            padding: 0;
        }

        .navbar-nav {
            font-size: 20px;
        }

        li {
            padding-right: 20px;
        }

        .img {
            margin-left: 20px;
        }

        .row {
            background: white;
            width: 900px;
            height: 700px;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 50px;
            padding: 0;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;

        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: rgb(127, 240, 255);
            border: 1px solid;
            color: black;
        }



        /*-----------LOGIN CSS---------------*/

        @media screen and (max-width: 991px) {
            .img {
                display: none;
            }
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
    <div class=\"\" style=\"background-color: rgb(178, 217, 232); height: 3px;\">
    </div>

      
    <section class=\"form my-4 mx-5\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-5\">
                    <img src=\"src/img/Backgroudns/9.jpg\" style=\"height: auto;\" alt=\"\" class=\"img-fluid\">
                    
         </div>
         <div class=\"col-lg-7  px-5 pt-5\">
             <h1 class=\"font-weight-bold py-3\">Register</h1>
             <h4>Rellene los campos para acceder a tu cuenta</h4>
             <form action=\"\">
                 <div class=\"form-row\">
                     <div class=\"col-lg-7\">
                         <input type=\"email\" placeholder=\"Email\" class=\"form-control my-3 p-4\">
                     </div>
                 </div>
                 <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"text\" placeholder=\"Nombre usuario\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"password\" placeholder=\"password\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                 <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"password\" placeholder=\"confirmar password\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                       <button type=\"button\" class=\"btn1 mt-3 mb-5\">Registrarse</button>
                    </div>
                </div>
                <p>¿Ya tienes cuenta? <a href=\"login.html\">Ir al Login</a></p>
             </form>
         </div>
        </div>
        </div>
    </section>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sesion.html";
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
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\">
        </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"
        integrity=\"sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

    <style>
        /* BASIC */

        body {
            background-image: url(\"src/img/Backgroudns/8.jpg\");
            background-position: center;
            backdrop-filter: blur(2px);
            background-repeat: no-repeat;
            margin: auto;
            padding: 0;
        }

        .navbar-nav {
            font-size: 20px;
        }

        li {
            padding-right: 20px;
        }

        .img {
            margin-left: 20px;
        }

        .row {
            background: white;
            width: 900px;
            height: 700px;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 50px;
            padding: 0;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;

        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: rgb(127, 240, 255);
            border: 1px solid;
            color: black;
        }



        /*-----------LOGIN CSS---------------*/

        @media screen and (max-width: 991px) {
            .img {
                display: none;
            }
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
    <div class=\"\" style=\"background-color: rgb(178, 217, 232); height: 3px;\">
    </div>

      
    <section class=\"form my-4 mx-5\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-5\">
                    <img src=\"src/img/Backgroudns/9.jpg\" style=\"height: auto;\" alt=\"\" class=\"img-fluid\">
                    
         </div>
         <div class=\"col-lg-7  px-5 pt-5\">
             <h1 class=\"font-weight-bold py-3\">Register</h1>
             <h4>Rellene los campos para acceder a tu cuenta</h4>
             <form action=\"\">
                 <div class=\"form-row\">
                     <div class=\"col-lg-7\">
                         <input type=\"email\" placeholder=\"Email\" class=\"form-control my-3 p-4\">
                     </div>
                 </div>
                 <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"text\" placeholder=\"Nombre usuario\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"password\" placeholder=\"password\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                 <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                        <input type=\"password\" placeholder=\"confirmar password\" class=\"form-control my-3 p-4\">
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-lg-7\">
                       <button type=\"button\" class=\"btn1 mt-3 mb-5\">Registrarse</button>
                    </div>
                </div>
                <p>¿Ya tienes cuenta? <a href=\"login.html\">Ir al Login</a></p>
             </form>
         </div>
        </div>
        </div>
    </section>

</body>
{% endblock %}", "sesion.html", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/sesion.html");
    }
}
