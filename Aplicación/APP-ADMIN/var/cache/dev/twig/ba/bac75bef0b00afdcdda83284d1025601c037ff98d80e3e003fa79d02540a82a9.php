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
class __TwigTemplate_f169d147fce55bc13902f1cef27e8a34be4190bffa7adac3f5a14a11299f72db extends Template
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
  <app-root></app-root>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

    .txtcolor {
      color: black;
      margin-bottom: 30px;
      font-size: 25px;
      padding-right: 20px;
      font-family: 'Raleway', sans-serif;
    }
  </style>





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

      ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "      <div class=\"form-inline\">
        <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
          <img src=\"https://cdn-icons-png.flaticon.com/512/61/61208.png\" alt=\"Icono Traducción\" width=\"40\" height=\"40\">
        </a>
      </div>
      ";
        }
        // line 66
        echo "
    </div>
    </div>
  </nav>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12\" style=\"background-color: rgb(241, 241, 241);\">


        <br>
        <div style=\"height: 100%;\">
          <img src=\"icono-mujer-2.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
          <br>
          <br>
          <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\"
            data-bs-target=\"#exampleModal\">Editar
            Perfil</button>

          <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
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
                          <input type=\"text\" id=\"Apellidos\" class=\"fadeIn second\" name=\"Apellidos\"
                            placeholder=\"Apellidos\">
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
              
              ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160)) {
            // line 161
            echo "              <br>
            ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162), "html", null, true);
            echo "

            ";
        }
        // line 165
        echo "            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Usuario</span>
            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Correo</span>
              ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173)) {
            // line 174
            echo "              <br>
            ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "CorreoUsuario", [], "any", false, false, false, 175), "html", null, true);
            echo "

            ";
        }
        // line 178
        echo "            </li>
            <br>
          </ul>
        </div>






      </div>
      <div class=\"col col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
        ";
        // line 190
        $this->displayBlock('content', $context, $blocks);
        // line 191
        echo "      </div>
    </div>
  </div>











</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
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
        return array (  309 => 190,  284 => 191,  282 => 190,  268 => 178,  262 => 175,  259 => 174,  257 => 173,  247 => 165,  241 => 162,  238 => 161,  236 => 160,  140 => 66,  132 => 61,  129 => 60,  127 => 59,  69 => 3,  59 => 2,  36 => 1,);
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
  <app-root></app-root>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');

    .txtcolor {
      color: black;
      margin-bottom: 30px;
      font-size: 25px;
      padding-right: 20px;
      font-family: 'Raleway', sans-serif;
    }
  </style>





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

      {% if app.user %}
      <div class=\"form-inline\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
          <img src=\"https://cdn-icons-png.flaticon.com/512/61/61208.png\" alt=\"Icono Traducción\" width=\"40\" height=\"40\">
        </a>
      </div>
      {% endif %}

    </div>
    </div>
  </nav>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12\" style=\"background-color: rgb(241, 241, 241);\">


        <br>
        <div style=\"height: 100%;\">
          <img src=\"icono-mujer-2.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
          <br>
          <br>
          <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\"
            data-bs-target=\"#exampleModal\">Editar
            Perfil</button>

          <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
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
                          <input type=\"text\" id=\"Apellidos\" class=\"fadeIn second\" name=\"Apellidos\"
                            placeholder=\"Apellidos\">
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
              
              {% if app.user %}
              <br>
            {{ app.user.username }}

            {% endif %}
            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Usuario</span>
            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Correo</span>
              {% if app.user %}
              <br>
            {{ app.user.CorreoUsuario }}

            {% endif %}
            </li>
            <br>
          </ul>
        </div>






      </div>
      <div class=\"col col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
        {% block content %}{% endblock %}
      </div>
    </div>
  </div>











</body>
{% endblock %}", "layout.html", "C:\\Users\\aleol\\OneDrive\\Proyectos\\Mil.Una\\Aplicación\\APP-ADMIN\\templates\\layout.html");
    }
}
