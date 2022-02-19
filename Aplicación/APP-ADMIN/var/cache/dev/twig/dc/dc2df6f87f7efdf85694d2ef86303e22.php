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

/* contenido/show.html.twig */
class __TwigTemplate_23a91113be803feaadb60b072721999a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenido/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenido/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html", "contenido/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Contenido</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdContenido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TipoContenido</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 14, $this->source); })()), "TipoContenido", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescripcionContenido</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 18, $this->source); })()), "DescripcionContenido", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EnlaceContenido</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 22, $this->source); })()), "EnlaceContenido", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contenido_edit", ["idContenido" => twig_get_attribute($this->env, $this->source, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 31
        echo twig_include($this->env, $context, "contenido/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contenido/show.html.twig";
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
    <h1>Contenido</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdContenido</th>
                <td>{{ contenido.id }}</td>
            </tr>
            <tr>
                <th>TipoContenido</th>
                <td>{{ contenido.TipoContenido }}</td>
            </tr>
            <tr>
                <th>DescripcionContenido</th>
                <td>{{ contenido.DescripcionContenido }}</td>
            </tr>
            <tr>
                <th>EnlaceContenido</th>
                <td>{{ contenido.EnlaceContenido }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('evento_index') }}\">back to list</a>

    <a href=\"{{ path('contenido_edit', {'idContenido': contenido.id}) }}\">edit</a>

    {{ include('contenido/_delete_form.html.twig') }}
{% endblock %}
", "contenido/show.html.twig", "C:\\Users\\joloca03\\Desktop\\MilUna\\Aplicación\\APP-ADMIN\\templates\\contenido\\show.html.twig");
    }
}
