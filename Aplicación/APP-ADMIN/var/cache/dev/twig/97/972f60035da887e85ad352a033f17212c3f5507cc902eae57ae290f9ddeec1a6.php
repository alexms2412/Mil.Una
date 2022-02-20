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

/* empleo/show.html.twig */
class __TwigTemplate_6521ea7988dbf868719a047a93dd09f4e69b5b2377fce17628d59cf0505ef8a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleo/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleo/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html", "empleo/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Empleo</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEmpleo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleo"]) || array_key_exists("empleo", $context) ? $context["empleo"] : (function () { throw new RuntimeError('Variable "empleo" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NombreEmpleo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleo"]) || array_key_exists("empleo", $context) ? $context["empleo"] : (function () { throw new RuntimeError('Variable "empleo" does not exist.', 14, $this->source); })()), "nombreEmpleo", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EmpresaEmpleo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleo"]) || array_key_exists("empleo", $context) ? $context["empleo"] : (function () { throw new RuntimeError('Variable "empleo" does not exist.', 18, $this->source); })()), "empresaEmpleo", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EnlaceEmpleo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empleo"]) || array_key_exists("empleo", $context) ? $context["empleo"] : (function () { throw new RuntimeError('Variable "empleo" does not exist.', 22, $this->source); })()), "enlaceEmpleo", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\">Volver a la lista / </a>

    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleo_edit", ["idEmpleo" => twig_get_attribute($this->env, $this->source, (isset($context["empleo"]) || array_key_exists("empleo", $context) ? $context["empleo"] : (function () { throw new RuntimeError('Variable "empleo" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\"> Editar</a>

    ";
        // line 31
        echo twig_include($this->env, $context, "empleo/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empleo/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  110 => 29,  105 => 27,  97 => 22,  90 => 18,  83 => 14,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}

{% block content %}
    <h1>Empleo</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEmpleo</th>
                <td>{{ empleo.id }}</td>
            </tr>
            <tr>
                <th>NombreEmpleo</th>
                <td>{{ empleo.nombreEmpleo }}</td>
            </tr>
            <tr>
                <th>EmpresaEmpleo</th>
                <td>{{ empleo.empresaEmpleo }}</td>
            </tr>
            <tr>
                <th>EnlaceEmpleo</th>
                <td>{{ empleo.enlaceEmpleo }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('evento_index') }}\">Volver a la lista / </a>

    <a href=\"{{ path('empleo_edit', {'idEmpleo': empleo.id}) }}\"> Editar</a>

    {{ include('empleo/_delete_form.html.twig') }}
{% endblock %}
", "empleo/show.html.twig", "C:\\Users\\aleol\\OneDrive\\Proyectos\\Mil.Una\\Aplicación\\APP-ADMIN\\templates\\empleo\\show.html.twig");
    }
}
