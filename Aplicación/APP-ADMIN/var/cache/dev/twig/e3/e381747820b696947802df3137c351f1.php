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
class __TwigTemplate_ae6edfcc916be3f88b955807296c1857 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sesion.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sesion.html"));

        $this->parent = $this->loadTemplate("base.html", "sesion.html", 1);
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
    <style>
        /* BASIC */

html {
    background-color: #D13240;
}

body {
    font-family: \"Poppins\", sans-serif;
    height: 100vh;
}

a {
    color: #92badd;
    display: inline-block;
    text-decoration: none;
    font-weight: 400;
}

h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
    margin: 40px 8px 10px 8px;
    color: #cccccc;
}


/* STRUCTURE */

.wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
    margin-top: 50px;
    margin-bottom: 80px;
}

#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
}

#formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
}


/* TABS */

h2.inactive {
    color: #cccccc;
}

h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #D13240;
}


/* FORM TYPOGRAPHY*/

input[type=button],
input[type=submit],
input[type=reset] {
    background-color: #D13240;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(233, 111, 95, 0.4);
    box-shadow: 0 10px 30px 0 rgba(233, 95, 95, 0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

input[type=button]:hover,
input[type=submit]:hover,
input[type=reset]:hover {
    background-color: #D13240;
}

input[type=button]:active,
input[type=submit]:active,
input[type=reset]:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #D13240;
}

input[type=text]:placeholder {
    color: #cccccc;
}


/* ANIMATIONS */


/* Simple CSS3 Fade-in-down Animation */

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}


/* Simple CSS3 Fade-in Animation */

@-webkit-keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@-moz-keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fadeIn {
    opacity: 0;
    -webkit-animation: fadeIn ease-in 1;
    -moz-animation: fadeIn ease-in 1;
    animation: fadeIn ease-in 1;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
}

.fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
}

.fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
}

.fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
}

.fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
}

.imagenRalla {
    position: absolute;
    width: 100%;
}


/* Simple CSS3 Fade-in Animation */

.underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #D13240;
    content: \"\";
    transition: width 0.2s;
}

.underlineHover:hover {
    color: #0d0d0d;
}

.underlineHover:hover:after {
    width: 100%;
}

span {
    color: #D13240;
}


/* OTHERS */

*:focus {
    outline: none;
}

#icon {
    width: 60%;
}

.no_scroll {
    overflow: hidden;
}

.divImg {
    width: 100%;
    height: 600px;
    overflow: hidden;
    position: absolute;
}
    </style>
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\" integrity=\"sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <app-root></app-root>


<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">

    <a class=\"navbar-brand\" href=\"/landing\">
      <img src=\"./assets/header-logo.png\" class=\"logo\" alt=\"Logo mil.una\" width=\"70\" height=\"70\">
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


    <div class=\"dropleft d-none d-xl-block d-lg-block d-xl-none\" style=\"transition-duration: 3s, 5s;\">
      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\"
        aria-expanded=\"false\">
        <img src=\"./assets/header-idiomas.png\" alt=\"Icono Traducción\" width=\"40\" height=\"40\">
      </a>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <li class=\"idioma\" style=\"text-align: center;\"><img src=\"./assets/header-traduccioncastellano.png\" alt=\"Traduccón a valenciano\"
            width=\"40\" height=\"40\"></li>
        <li class=\"idioma\" style=\"text-align: center; margin-top: 2%;\"><img src=\"./assets/header-traduccionvalenciano.png\"
            alt=\"Traduccón a castellano\" width=\"40\" height=\"40\"></li>
        <li class=\"idioma\" style=\"text-align: center; margin-top: 2%;\"><img src=\"./assets/header-traduccioningles.png\"
            alt=\"Traduccón a ingles\" width=\"40\" height=\"40\"></li>
      </div>
    </div>

    

  </div>

</nav>

<div class=\"\" style=\"background-color: #D13240; height: 3px;\">

</div>
  
<div class=\"divImg\">
    <img src=\"./assets/rallaLogin4.png\" class=\"imagenRalla\">

</div>

<div class=\"login\">

    <div class=\"wrapper fadeInDown\">
        <div id=\"formContent\">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class=\"fadeIn first\">
                <br>
                <a href=\"#!\" class=\"text-dark\"> <span><i class=\"fas fa-user me-3\"></i> </span> </a>

            </div>
            <br>
            <!-- Login Form -->
            <form>
                
            </form>

            <!-- Remind Passowrd -->
            <div id=\"formFooter\">
                <a class=\"underlineHover\" href=\"#\">Forgot Password?</a>
            </div>

        </div>
    </div>


</div>
</div>
<footer class=\"text-center text-lg-start bg-light text-muted\">
    <!-- Grid container -->
    <div style=\"background-color: #d83586;\">

        <div class=\"container p-4 \">
            <!--Grid row-->
            <div class=\"row\" id=\"form-group\">

                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">


                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"tel:+34648661161 \" class=\"text-dark\"> <span><i class=\"fas fa-phone me-3\"></i> +34 648661161  </span> </a>
                        </li>
                        <li>
                            <a href=\"mailto:miluna.sagunt@gmail.com\" class=\"text-dark\"> <span><i class=\"fas fa-envelope me-3\"></i> miluna.sagunt@gmail.com</span> </a>
                        </li>
                        <li>
                            <a href=\"https://www.google.com/maps/place/C.+Hospital,+9,+46500+Sagunto,+Valencia/@39.6796064,-0.2821193,17z/data=!3m1!4b1!4m5!3m4!1s0xd60151633ea13ff:0xba880a6489da478a!8m2!3d39.6796023!4d-0.2799306?hl=es\" class=\"text-dark\"> <span><i class=\"fas fa-home me-3\"></i> C/ Hospital nº 9   Sagunto (Valencia)  <br> CP: 46500</span> </a>
                        </li>

                    </ul>
                    <hr size=\"8px\" color=\"white\" />

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">

                    <h2>mil.una</h2>


                    <div class=\"col-md-12 text-center\" style=\"margin-top: 20px;\">
                        <a href=\"\"><i class=\"fab fa-facebook\" style=\"font-size:30px; margin-right: 20px; margin-left: 18px;\"></i></a>
                        <a href=\"\"><i class=\"fab fa-instagram\" style=\"font-size:30px;margin-right: 20px; \"></i></a>
                        <a href=\"\"><i class=\"fab fa-google\"style=\"font-size:30px;  margin-right: 20px;\"></i></a>

                    </div>

                    <hr size=\"8px\" color=\"white\" />
                </div>
                <!--Grid column-->



                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">

                    <iframe class=\"mapa\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.6684724345105!2d-0.2800578729669806!3d39.67954976158921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60151631574c1b%3A0xa3b58c730fabcc24!2sC.%20Hospital%2C%2011%2C%2046500%20Sagunto%2C%20Valencia!5e0!3m2!1ses!2ses!4v1644237970095!5m2!1ses!2ses\"
                        width=\"230\" height=\"150\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>


                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>

    </div>

    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: #882154;\">

        <a class=\"text-dark\"> <span>© 2022 Copyright: PowDevs</span> </a>
    </div>
    <!-- Copyright -->
</footer>


</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
    <style>
        /* BASIC */

html {
    background-color: #D13240;
}

body {
    font-family: \"Poppins\", sans-serif;
    height: 100vh;
}

a {
    color: #92badd;
    display: inline-block;
    text-decoration: none;
    font-weight: 400;
}

h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display: inline-block;
    margin: 40px 8px 10px 8px;
    color: #cccccc;
}


/* STRUCTURE */

.wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
    margin-top: 50px;
    margin-bottom: 80px;
}

#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
    text-align: center;
}

#formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
}


/* TABS */

h2.inactive {
    color: #cccccc;
}

h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #D13240;
}


/* FORM TYPOGRAPHY*/

input[type=button],
input[type=submit],
input[type=reset] {
    background-color: #D13240;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(233, 111, 95, 0.4);
    box-shadow: 0 10px 30px 0 rgba(233, 95, 95, 0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

input[type=button]:hover,
input[type=submit]:hover,
input[type=reset]:hover {
    background-color: #D13240;
}

input[type=button]:active,
input[type=submit]:active,
input[type=reset]:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #D13240;
}

input[type=text]:placeholder {
    color: #cccccc;
}


/* ANIMATIONS */


/* Simple CSS3 Fade-in-down Animation */

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}


/* Simple CSS3 Fade-in Animation */

@-webkit-keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@-moz-keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fadeIn {
    opacity: 0;
    -webkit-animation: fadeIn ease-in 1;
    -moz-animation: fadeIn ease-in 1;
    animation: fadeIn ease-in 1;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
}

.fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
}

.fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
}

.fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
}

.fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
}

.imagenRalla {
    position: absolute;
    width: 100%;
}


/* Simple CSS3 Fade-in Animation */

.underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #D13240;
    content: \"\";
    transition: width 0.2s;
}

.underlineHover:hover {
    color: #0d0d0d;
}

.underlineHover:hover:after {
    width: 100%;
}

span {
    color: #D13240;
}


/* OTHERS */

*:focus {
    outline: none;
}

#icon {
    width: 60%;
}

.no_scroll {
    overflow: hidden;
}

.divImg {
    width: 100%;
    height: 600px;
    overflow: hidden;
    position: absolute;
}
    </style>
    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\" integrity=\"sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <app-root></app-root>


<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">

    <a class=\"navbar-brand\" href=\"/landing\">
      <img src=\"./assets/header-logo.png\" class=\"logo\" alt=\"Logo mil.una\" width=\"70\" height=\"70\">
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


    <div class=\"dropleft d-none d-xl-block d-lg-block d-xl-none\" style=\"transition-duration: 3s, 5s;\">
      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\"
        aria-expanded=\"false\">
        <img src=\"./assets/header-idiomas.png\" alt=\"Icono Traducción\" width=\"40\" height=\"40\">
      </a>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <li class=\"idioma\" style=\"text-align: center;\"><img src=\"./assets/header-traduccioncastellano.png\" alt=\"Traduccón a valenciano\"
            width=\"40\" height=\"40\"></li>
        <li class=\"idioma\" style=\"text-align: center; margin-top: 2%;\"><img src=\"./assets/header-traduccionvalenciano.png\"
            alt=\"Traduccón a castellano\" width=\"40\" height=\"40\"></li>
        <li class=\"idioma\" style=\"text-align: center; margin-top: 2%;\"><img src=\"./assets/header-traduccioningles.png\"
            alt=\"Traduccón a ingles\" width=\"40\" height=\"40\"></li>
      </div>
    </div>

    

  </div>

</nav>

<div class=\"\" style=\"background-color: #D13240; height: 3px;\">

</div>
  
<div class=\"divImg\">
    <img src=\"./assets/rallaLogin4.png\" class=\"imagenRalla\">

</div>

<div class=\"login\">

    <div class=\"wrapper fadeInDown\">
        <div id=\"formContent\">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class=\"fadeIn first\">
                <br>
                <a href=\"#!\" class=\"text-dark\"> <span><i class=\"fas fa-user me-3\"></i> </span> </a>

            </div>
            <br>
            <!-- Login Form -->
            <form>
                
            </form>

            <!-- Remind Passowrd -->
            <div id=\"formFooter\">
                <a class=\"underlineHover\" href=\"#\">Forgot Password?</a>
            </div>

        </div>
    </div>


</div>
</div>
<footer class=\"text-center text-lg-start bg-light text-muted\">
    <!-- Grid container -->
    <div style=\"background-color: #d83586;\">

        <div class=\"container p-4 \">
            <!--Grid row-->
            <div class=\"row\" id=\"form-group\">

                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">


                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"tel:+34648661161 \" class=\"text-dark\"> <span><i class=\"fas fa-phone me-3\"></i> +34 648661161  </span> </a>
                        </li>
                        <li>
                            <a href=\"mailto:miluna.sagunt@gmail.com\" class=\"text-dark\"> <span><i class=\"fas fa-envelope me-3\"></i> miluna.sagunt@gmail.com</span> </a>
                        </li>
                        <li>
                            <a href=\"https://www.google.com/maps/place/C.+Hospital,+9,+46500+Sagunto,+Valencia/@39.6796064,-0.2821193,17z/data=!3m1!4b1!4m5!3m4!1s0xd60151633ea13ff:0xba880a6489da478a!8m2!3d39.6796023!4d-0.2799306?hl=es\" class=\"text-dark\"> <span><i class=\"fas fa-home me-3\"></i> C/ Hospital nº 9   Sagunto (Valencia)  <br> CP: 46500</span> </a>
                        </li>

                    </ul>
                    <hr size=\"8px\" color=\"white\" />

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">

                    <h2>mil.una</h2>


                    <div class=\"col-md-12 text-center\" style=\"margin-top: 20px;\">
                        <a href=\"\"><i class=\"fab fa-facebook\" style=\"font-size:30px; margin-right: 20px; margin-left: 18px;\"></i></a>
                        <a href=\"\"><i class=\"fab fa-instagram\" style=\"font-size:30px;margin-right: 20px; \"></i></a>
                        <a href=\"\"><i class=\"fab fa-google\"style=\"font-size:30px;  margin-right: 20px;\"></i></a>

                    </div>

                    <hr size=\"8px\" color=\"white\" />
                </div>
                <!--Grid column-->



                <!--Grid column-->
                <div class=\"col-md-4 col-lg-4 col-xl-4 mx-auto mb-4\">

                    <iframe class=\"mapa\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.6684724345105!2d-0.2800578729669806!3d39.67954976158921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60151631574c1b%3A0xa3b58c730fabcc24!2sC.%20Hospital%2C%2011%2C%2046500%20Sagunto%2C%20Valencia!5e0!3m2!1ses!2ses!4v1644237970095!5m2!1ses!2ses\"
                        width=\"230\" height=\"150\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>


                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>

    </div>

    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3\" style=\"background-color: #882154;\">

        <a class=\"text-dark\"> <span>© 2022 Copyright: PowDevs</span> </a>
    </div>
    <!-- Copyright -->
</footer>


</body>
{% endblock %}", "sesion.html", "C:\\Users\\Juan Carlos\\Desktop\\Mil.Una\\Aplicación\\APP-ADMIN\\templates\\sesion.html");
    }
}
