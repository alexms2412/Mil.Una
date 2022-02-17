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

/* layout.html */
class __TwigTemplate_cb61e7c649577f1e3ffd14b0bab2867e7770265f7cdd743effbac7035f7f7e8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html"));

        $this->parent = $this->loadTemplate("base.html", "layout.html", 1);
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
        ";
        // line 176
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "    </div>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 176,  246 => 177,  244 => 176,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}
{% block layout %}

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
        {% block content %}{% endblock %}
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
{% endblock %}", "layout.html", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/API/templates/layout.html");
    }
}
