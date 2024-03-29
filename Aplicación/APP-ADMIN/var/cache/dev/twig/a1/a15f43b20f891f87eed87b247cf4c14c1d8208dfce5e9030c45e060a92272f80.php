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

/* main/index.html.twig */
class __TwigTemplate_e0c08a32a9637dd82c0725aa855354d746dd09e7e7d8056fb15f4523600675db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        // line 1
        echo "<head>
    <meta charset=\"utf-8\">
    <title>Mil.Una</title>
    <base href=\"/\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"./assets/header-logo.png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css\" integrity=\"sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\" integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF\" crossorigin=\"anonymous\">
    </script><link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
h2 {
    color: white;
    margin-bottom: 30px;
    font-size: 40px;
    font-family: 'Dancing Script', cursive;
}

footer {
    position: absolute;
    width: 100%;
    color: white;
}

span {
    color: white;
}

.mapa {
    border-radius: 22px;
    margin-top: 10px;
}

.imitacionIcon {
    border-radius: 250px;
    background-color: aliceblue;
    width: 35px;
    height: 35px;
    position: absolute;
}

.fab {
    color: white;
}

#form-group {
    display: flex;
    align-items: center;
}

li {
    margin-top: 10px;
}

hr {
    display: none;
}

@media screen and (max-width: 767px) {
    hr {
        display: flex;
    }
}
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&display=swap');
.txtcolor {
    color: #D13240;
    margin-bottom: 30px;
    font-size: 30px;
    font-family: 'Dancing Script', cursive;
    padding-right: 20px;
}

.logo {
    margin-left: 10px;
    margin-top: 5px;
}

a {
    color: #D13240;
    font-family: 'Dancing Script', cursive;
}

.txtcolor:hover {
    font-weight: bold;
}

span {
    font-size: 130%;
}

.line {
    background-color: #D13240;
}

.idioma:hover{
    opacity: 0.5;
}

    .titulo-categoria{
    color: black;
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
    max-width: 650px;
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
    margin: 8px;
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


    </style>

</head>

<body>
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

";
        // line 402
        $this->displayBlock('body', $context, $blocks);
        // line 656
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 402
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 403
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
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

<div class=\"container-fluid\">
  <div class=\"row flex-nowrap\">
    <div class=\"col-auto col-md-2 col-xl-2 col-sm-2\" style=\"background-color: rgb(241, 241, 241);\">
      <div style=\"width: 100%;\">
        <br>
        <img src=\"./assets/admin-avatar.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
        <br>
        <br>
        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Editar
          Perfil</button>
      </div>


      <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\">Editor de perfil</h5>
              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">X</button>
            </div>
            <div class=\"modal-body\">
              <div class=\"mb-3\">

                <div class=\"row\">

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Nombre\" class=\"fadeIn second\" name=\"Nombre\" placeholder=\"Nombre\">
                    </form>
                  </div>

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto\">
                    <form>
                      <input type=\"text\" id=\"Apellidos\" class=\"fadeIn second\" name=\"Apellidos\" placeholder=\"Apellidos\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Correo\" class=\"fadeIn second\" name=\"Correo\" placeholder=\"Correo\">
                    </form>
                  </div>

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto\">
                    <form>
                      <input type=\"text\" id=\"Usuario\" class=\"fadeIn third\" name=\"Usuario\" placeholder=\"Usuario\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Contraseña\" class=\"fadeIn second\" name=\"Contraseña\"
                        placeholder=\"Contraseña\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-10 col-lg-10 col-xl-10 mx-auto\">
                    <form>
                      <br>
                      <input type=\"file\" class=\"fadeIn second\" aria-label=\"Upload\">
                    </form>
                  </div>
                </div>


              </div>





            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-outline-danger\">
                Guardar
              </button>
            </div>
          </div>

        </div>
      </div>
      <!-- UsuarioFin -->

      <hr>

      <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
        <li>
          <span class=\"titulo-categoria\">Nombre</span>
        </li>
        <br>
        <li>
          <span class=\"titulo-categoria\">Usuario</span>
        </li>
        <br>
        <li>
          <span class=\"titulo-categoria\">Correo</span>
        </li>
        <br>
      </ul>
    </div>




    <!-- CONTENIDOS -->
    <div class=\"col-sm mt-4\">
      <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\"
            role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Eventos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\"
            role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Contenidos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\"
            role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Empleos</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">1</div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">2</div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">3</div>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  471 => 403,  461 => 402,  449 => 656,  447 => 402,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"utf-8\">
    <title>Mil.Una</title>
    <base href=\"/\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"./assets/header-logo.png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css\" integrity=\"sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\" integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/c33acef7c3.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF\" crossorigin=\"anonymous\">
    </script><link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
h2 {
    color: white;
    margin-bottom: 30px;
    font-size: 40px;
    font-family: 'Dancing Script', cursive;
}

footer {
    position: absolute;
    width: 100%;
    color: white;
}

span {
    color: white;
}

.mapa {
    border-radius: 22px;
    margin-top: 10px;
}

.imitacionIcon {
    border-radius: 250px;
    background-color: aliceblue;
    width: 35px;
    height: 35px;
    position: absolute;
}

.fab {
    color: white;
}

#form-group {
    display: flex;
    align-items: center;
}

li {
    margin-top: 10px;
}

hr {
    display: none;
}

@media screen and (max-width: 767px) {
    hr {
        display: flex;
    }
}
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&display=swap');
.txtcolor {
    color: #D13240;
    margin-bottom: 30px;
    font-size: 30px;
    font-family: 'Dancing Script', cursive;
    padding-right: 20px;
}

.logo {
    margin-left: 10px;
    margin-top: 5px;
}

a {
    color: #D13240;
    font-family: 'Dancing Script', cursive;
}

.txtcolor:hover {
    font-weight: bold;
}

span {
    font-size: 130%;
}

.line {
    background-color: #D13240;
}

.idioma:hover{
    opacity: 0.5;
}

    .titulo-categoria{
    color: black;
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
    max-width: 650px;
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
    margin: 8px;
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


    </style>

</head>

<body>
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

{% block body %}
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

<div class=\"container-fluid\">
  <div class=\"row flex-nowrap\">
    <div class=\"col-auto col-md-2 col-xl-2 col-sm-2\" style=\"background-color: rgb(241, 241, 241);\">
      <div style=\"width: 100%;\">
        <br>
        <img src=\"./assets/admin-avatar.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
        <br>
        <br>
        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Editar
          Perfil</button>
      </div>


      <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\">Editor de perfil</h5>
              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">X</button>
            </div>
            <div class=\"modal-body\">
              <div class=\"mb-3\">

                <div class=\"row\">

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Nombre\" class=\"fadeIn second\" name=\"Nombre\" placeholder=\"Nombre\">
                    </form>
                  </div>

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto\">
                    <form>
                      <input type=\"text\" id=\"Apellidos\" class=\"fadeIn second\" name=\"Apellidos\" placeholder=\"Apellidos\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Correo\" class=\"fadeIn second\" name=\"Correo\" placeholder=\"Correo\">
                    </form>
                  </div>

                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto\">
                    <form>
                      <input type=\"text\" id=\"Usuario\" class=\"fadeIn third\" name=\"Usuario\" placeholder=\"Usuario\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-6 col-lg-6 col-xl-6 mx-auto \">
                    <form>
                      <input type=\"text\" id=\"Contraseña\" class=\"fadeIn second\" name=\"Contraseña\"
                        placeholder=\"Contraseña\">
                    </form>
                  </div>
                </div>

                <div class=\"row\">
                  <div class=\"col-md-10 col-lg-10 col-xl-10 mx-auto\">
                    <form>
                      <br>
                      <input type=\"file\" class=\"fadeIn second\" aria-label=\"Upload\">
                    </form>
                  </div>
                </div>


              </div>





            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-outline-danger\">
                Guardar
              </button>
            </div>
          </div>

        </div>
      </div>
      <!-- UsuarioFin -->

      <hr>

      <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
        <li>
          <span class=\"titulo-categoria\">Nombre</span>
        </li>
        <br>
        <li>
          <span class=\"titulo-categoria\">Usuario</span>
        </li>
        <br>
        <li>
          <span class=\"titulo-categoria\">Correo</span>
        </li>
        <br>
      </ul>
    </div>




    <!-- CONTENIDOS -->
    <div class=\"col-sm mt-4\">
      <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home\" type=\"button\"
            role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Eventos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile\" type=\"button\"
            role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Contenidos</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\" type=\"button\"
            role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Empleos</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">1</div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">2</div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">3</div>
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

{% endblock %}
</body>

</html>", "main/index.html.twig", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/main/index.html.twig");
    }
}
