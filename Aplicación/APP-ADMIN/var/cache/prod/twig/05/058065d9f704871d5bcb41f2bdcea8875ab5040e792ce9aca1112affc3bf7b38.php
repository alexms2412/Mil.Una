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
class __TwigTemplate_2f1cbf60a9668aa72ff03daf88d30f1d60b4a64f1d1f2a2cdc525b4119b495dc extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "evento/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["contenidos"] ?? null));
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
                <th scope=\"col\">IdEmpleo</th>
                <th scope=\"col\">NombreEmpleo</th>
                <th scope=\"col\">EmpresaEmpleo</th>
                <th scope=\"col\">EnlaceEmpleo</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empleos"] ?? null));
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
      </div>
      </div>
";
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
        return array (  279 => 122,  274 => 119,  265 => 115,  256 => 111,  252 => 110,  247 => 108,  243 => 107,  239 => 106,  235 => 105,  232 => 104,  227 => 103,  209 => 88,  204 => 85,  195 => 81,  186 => 77,  182 => 76,  177 => 74,  173 => 73,  169 => 72,  165 => 71,  162 => 70,  157 => 69,  139 => 54,  134 => 51,  125 => 47,  116 => 43,  112 => 42,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  88 => 35,  83 => 34,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evento/index.html.twig", "/Applications/MAMP/htdocs/proyectoIntegrado/Mil.Una/Aplicación/APP-ADMIN/templates/evento/index.html.twig");
    }
}
