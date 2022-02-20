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
          

          <hr>

          <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
            <li>
              <span class=\"titulo-categoria\">Nombre</span>
              
              ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89)) {
            // line 90
            echo "              <br>
            ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "username", [], "any", false, false, false, 91), "html", null, true);
            echo "

            ";
        }
        // line 94
        echo "            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Usuario</span>
            </li>
            <br>
            <li>
              <span class=\"titulo-categoria\">Correo</span>
              ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            echo "              <br>
            ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "CorreoUsuario", [], "any", false, false, false, 104), "html", null, true);
            echo "

            ";
        }
        // line 107
        echo "            </li>
            <br>
          </ul>
        </div>






      </div>
      <div class=\"col col col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12\">
        ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "      </div>
    </div>
  </div>











</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
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
        return array (  238 => 119,  213 => 120,  211 => 119,  197 => 107,  191 => 104,  188 => 103,  186 => 102,  176 => 94,  170 => 91,  167 => 90,  165 => 89,  140 => 66,  132 => 61,  129 => 60,  127 => 59,  69 => 3,  59 => 2,  36 => 1,);
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
{% endblock %}", "layout.html", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/layout.html");
    }
}
