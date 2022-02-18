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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
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
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "TipoEvento", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "NombreEvento", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "DescripcionEvento", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "FechaEvento", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_show", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_edit", ["idEvento" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_new");
        echo "\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenidos"]) || array_key_exists("contenidos", $context) ? $context["contenidos"] : (function () { throw new RuntimeError('Variable "contenidos" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contenido"]) {
            // line 70
            echo "            <tr>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "TipoContenido", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "DescripcionContenido", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                <td><img style=\"width:50px\" src=\"uploads/contenido/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contenido"], "EnlaceContenido", [], "any", false, false, false, 74), "html", null, true);
            echo "\"</td>
                <td>
                    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_show", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_edit", ["idContenido" => twig_get_attribute($this->env, $this->source, $context["contenido"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_new");
        echo "\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdEmpleo</th>
                <th>NombreEmpleo</th>
                <th>EmpresaEmpleo</th>
                <th>EnlaceEmpleo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleos"]) || array_key_exists("empleos", $context) ? $context["empleos"] : (function () { throw new RuntimeError('Variable "empleos" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empleo"]) {
            // line 104
            echo "            <tr>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "nombreEmpleo", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "empresaEmpleo", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleo"], "enlaceEmpleo", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_show", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_edit", ["idEmpleo" => twig_get_attribute($this->env, $this->source, $context["empleo"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_new");
        echo "\">Create new</a>
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
        return array (  294 => 122,  289 => 119,  280 => 115,  271 => 111,  267 => 110,  262 => 108,  258 => 107,  254 => 106,  250 => 105,  247 => 104,  242 => 103,  224 => 88,  219 => 85,  210 => 81,  201 => 77,  197 => 76,  192 => 74,  188 => 73,  184 => 72,  180 => 71,  177 => 70,  172 => 69,  154 => 54,  149 => 51,  140 => 47,  131 => 43,  127 => 42,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  103 => 35,  98 => 34,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}



{% block content %}
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
        <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <table class=\"table\">
        <thead>
            <tr>
                <th>IdEvento</th>
                <th>TipoEvento</th>
                <th>NombreEvento</th>
                <th>DescripcionEvento</th>
                <th>FechaEvento</th>
                <th>actions</th>
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
                    <a href=\"{{ path('evento_show', {'idEvento': evento.id}) }}\">show</a>
                    <a href=\"{{ path('evento_edit', {'idEvento': evento.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('evento_new') }}\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdContenido</th>
                <th>TipoContenido</th>
                <th>DescripcionContenido</th>
                <th>EnlaceContenido</th>
                <th>actions</th>
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
                    <a href=\"{{ path('contenido_show', {'idContenido': contenido.id}) }}\">show</a>
                    <a href=\"{{ path('contenido_edit', {'idContenido': contenido.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('contenido_new') }}\">Create new</a>
        </div>
        <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdEmpleo</th>
                <th>NombreEmpleo</th>
                <th>EmpresaEmpleo</th>
                <th>EnlaceEmpleo</th>
                <th>actions</th>
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
                    <a href=\"{{ path('empleo_show', {'idEmpleo': empleo.id}) }}\">show</a>
                    <a href=\"{{ path('empleo_edit', {'idEmpleo': empleo.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('empleo_new') }}\">Create new</a>
        </div>
      </div>  
{% endblock %}
", "evento/index.html.twig", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/evento/index.html.twig");
    }
}
