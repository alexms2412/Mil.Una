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
class __TwigTemplate_e9879ca555fc4e6b986a3f13aeed1bc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html"));

        $this->parent = $this->loadTemplate("base.html", "layout.html", 1);
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
  <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

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

  <script>
    AOS.init();
  </script>



  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">

      <a class=\"navbar-brand\">
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
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "      <div class=\"form-inline\">
        <a class=\"nav-link\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
          <img src=\"https://cdn-icons-png.flaticon.com/512/61/61208.png\" alt=\"Icono Traducción\" width=\"40\" height=\"40\">
        </a>
      </div>
      ";
        }
        // line 69
        echo "
    </div>
    </div>
  </nav>

  <div class=\"container-fluid\">

    <div data-aos=\"zoom-out-left\" class=\"row\">
      <div class=\"col col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12\" style=\"background-color: rgb(241, 241, 241);\">


        <br>
        <div style=\"height: 100%;\">
          <img src=\"icono-mujer-2.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
          <br>
          <br>


          <hr>

          <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
            <li>
              <span class=\"titulo-categoria\">Nombre</span>

              ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)) {
            // line 94
            echo "              <br>
              ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "username", [], "any", false, false, false, 95), "html", null, true);
            echo "

              ";
        }
        // line 98
        echo "            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Usuario</span>
            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Correo</span>
              ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) {
            // line 107
            echo "              <br>
              ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "CorreoUsuario", [], "any", false, false, false, 108), "html", null, true);
            echo "

              ";
        }
        // line 111
        echo "            </li>
            <br>
          </ul>
        </div>






      </div>
      <div class=\"col col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
        ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "      </div>
    </div>
  </div>











</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  242 => 123,  217 => 124,  215 => 123,  201 => 111,  195 => 108,  192 => 107,  190 => 106,  180 => 98,  174 => 95,  171 => 94,  169 => 93,  143 => 69,  135 => 64,  132 => 63,  130 => 62,  69 => 3,  59 => 2,  36 => 1,);
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
  <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

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

  <script>
    AOS.init();
  </script>



  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">

      <a class=\"navbar-brand\">
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

    <div data-aos=\"zoom-out-left\" class=\"row\">
      <div class=\"col col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12\" style=\"background-color: rgb(241, 241, 241);\">


        <br>
        <div style=\"height: 100%;\">
          <img src=\"icono-mujer-2.png\" class=\"card-img-top\" alt=\"Tu imagen de perfil\">
          <br>
          <br>


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
{% endblock %}", "layout.html", "/Applications/MAMP/htdocs/proyectoTROLL/Mil.Una/Aplicación/APP-ADMIN/templates/layout.html");
    }
}
