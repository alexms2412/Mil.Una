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

/* evento/index.html.twig */
class __TwigTemplate_9613f4b589e74c7cccf574eed391fe252a912b2e30907e69b0489e0fedceb103 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html", "evento/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div class=\"container\">
<div class=\"row\">
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
         <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"admin-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#admin\" type=\"button\"
            role=\"tab\" aria-controls=\"admin\" aria-selected=\"false\">Administradoras</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "TipoEvento", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "NombreEvento", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "DescripcionEvento", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_show", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Ver</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_edit", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_new");
        echo "\">Añadir</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenidos"]) || array_key_exists("contenidos", $context) ? $context["contenidos"] : (function () { throw new RuntimeError('Variable "contenidos" does not exist.', 73, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contenido"]) {
            // line 74
            echo "            <tr>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "TipoContenido", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "DescripcionContenido", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td><img style=\"width:50px\" src=\"uploads/contenido/";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "EnlaceContenido", [], "any", false, false, false, 78), "html", null, true);
            echo "\"</td>
                <td>
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_show", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">Ver</a>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_edit", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_new");
        echo "\">Añadir</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">IdEmpleo</th>
                <th scope=\"col\">NombreEmpleo</th>
                <th scope=\"col\">EmpresaEmpleo</th>
                <th scope=\"col\">EnlaceEmpleo</th>
                <th scope=\"col\">Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleos"]) || array_key_exists("empleos", $context) ? $context["empleos"] : (function () { throw new RuntimeError('Variable "empleos" does not exist.', 107, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empleo"]) {
            // line 108
            echo "            <tr>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "nombreEmpleo", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "empresaEmpleo", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "enlaceEmpleo", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_show", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">Ver</a>
                    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_edit", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_new");
        echo "\">Añadir</a>
        </div>
      <div class=\"tab-pane fade\" id=\"admin\" role=\"tabpanel\" aria-labelledby=\"admin-tab\">
      <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre de Usuaria</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 137, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 138
            echo "            <tr>
                <td style=\"text-align:center\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\">Ver</a>
                    <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 146
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        </tbody>
    </table>

    <a href=\"/register\">Create new</a>
      </div>  
      </div>  
      </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 150,  341 => 146,  332 => 142,  328 => 141,  323 => 139,  320 => 138,  315 => 137,  301 => 126,  296 => 123,  287 => 119,  278 => 115,  274 => 114,  269 => 112,  265 => 111,  261 => 110,  257 => 109,  254 => 108,  249 => 107,  231 => 92,  226 => 89,  217 => 85,  208 => 81,  204 => 80,  199 => 78,  195 => 77,  191 => 76,  187 => 75,  184 => 74,  179 => 73,  161 => 58,  156 => 55,  147 => 51,  138 => 47,  134 => 46,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  113 => 40,  110 => 39,  105 => 38,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}
{% block content %}

<div class=\"container\">
<div class=\"row\">
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
         <li class=\"nav-item\" role=\"presentation\">
          <button class=\"nav-link\" id=\"admin-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#admin\" type=\"button\"
            role=\"tab\" aria-controls=\"admin\" aria-selected=\"false\">Administradoras</button>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"myTabContent\">
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for evento in eventos %}
            <tr>
                <td>{{ evento.id }}</td>
                <td>{{ evento.TipoEvento }}</td>
                <td>{{ evento.NombreEvento }}</td>
                <td>{{ evento.DescripcionEvento }}</td>
                <td>{{ evento.FechaEvento ? evento.FechaEvento|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('evento_show', {'idEvento': evento.id}) }}\">Ver</a>
                    <a href=\"{{ path('evento_edit', {'idEvento': evento.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('evento_new') }}\">Añadir</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for contenido in contenidos %}
            <tr>
                <td>{{ contenido.id }}</td>
                <td>{{ contenido.TipoContenido }}</td>
                <td>{{ contenido.DescripcionContenido }}</td>
                <td><img style=\"width:50px\" src=\"uploads/contenido/{{ contenido.EnlaceContenido }}\"</td>
                <td>
                    <a href=\"{{ path('contenido_show', {'idContenido': contenido.id}) }}\">Ver</a>
                    <a href=\"{{ path('contenido_edit', {'idContenido': contenido.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('contenido_new') }}\">Añadir</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">IdEmpleo</th>
                <th scope=\"col\">NombreEmpleo</th>
                <th scope=\"col\">EmpresaEmpleo</th>
                <th scope=\"col\">EnlaceEmpleo</th>
                <th scope=\"col\">Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for empleo in empleos %}
            <tr>
                <td>{{ empleo.id }}</td>
                <td>{{ empleo.nombreEmpleo }}</td>
                <td>{{ empleo.empresaEmpleo }}</td>
                <td>{{ empleo.enlaceEmpleo }}</td>
                <td>
                    <a href=\"{{ path('empleo_show', {'idEmpleo': empleo.id}) }}\">Ver</a>
                    <a href=\"{{ path('empleo_edit', {'idEmpleo': empleo.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('empleo_new') }}\">Añadir</a>
        </div>
      <div class=\"tab-pane fade\" id=\"admin\" role=\"tabpanel\" aria-labelledby=\"admin-tab\">
      <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre de Usuaria</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td style=\"text-align:center\">{{ user.username }}</td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('user_show', {'id': user.id}) }}\">Ver</a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"/register\">Create new</a>
      </div>  
      </div>  
      </div>
      </div>
{% endblock %}
", "evento/index.html.twig", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/evento/index.html.twig");
    }
}
