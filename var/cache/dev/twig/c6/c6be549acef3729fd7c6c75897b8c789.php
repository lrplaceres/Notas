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

/* nota/index.html.twig */
class __TwigTemplate_5d5e550734f8bfec3761bb9204ecea5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nota/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mis Notas
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div>
\t\t<div>
\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_nota");
        echo "\" class=\"btn btn-primary\">Insertar</a>
\t\t</div>
\t\t<div>
\t\t\t<h1 class=\"text-center\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>

\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "flashbag", [], "any", false, false, false, 16), "get", [0 => "notice"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-primary text-center\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">T&iacute;tulo</th>
\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t<th scope=\"col\">Descripci&oacute;n</th>
\t\t\t\t<th scope=\"col\">P&uacute;blico</th>
\t\t\t\t<th scope=\"col\">Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) || array_key_exists("notas", $context) ? $context["notas"] : (function () { throw new RuntimeError('Variable "notas" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "

\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titulo", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "descripcion", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["item"], "publico", [], "any", false, false, false, 43)) {
                // line 44
                echo "\t\t\t\t\t\t\tSi
\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\tNo
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
\t\t</tbody>
\t</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "nota/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 55,  177 => 50,  173 => 48,  169 => 46,  165 => 44,  163 => 43,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  141 => 35,  137 => 34,  122 => 21,  113 => 18,  110 => 17,  106 => 16,  99 => 12,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Notas
{% endblock %}

{% block body %}
\t<div>
\t\t<div>
\t\t\t<a href=\"{{ path('new_nota') }}\" class=\"btn btn-primary\">Insertar</a>
\t\t</div>
\t\t<div>
\t\t\t<h1 class=\"text-center\">{{ titulo}}</h1>
\t\t</div>
\t</div>

\t{% for flash_message in app.session.flashbag.get('notice') %}
\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t{{ flash_message }}
\t\t</div>
\t{% endfor %}

\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-primary text-center\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">T&iacute;tulo</th>
\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t<th scope=\"col\">Descripci&oacute;n</th>
\t\t\t\t<th scope=\"col\">P&uacute;blico</th>
\t\t\t\t<th scope=\"col\">Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for item in notas %}


\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">{{ item.id }}</th>
\t\t\t\t\t<td>{{ item.titulo }}</td>
\t\t\t\t\t<td>{{ item.tags }}</td>
\t\t\t\t\t<td>{{ item.descripcion }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if item.publico %}
\t\t\t\t\t\t\tSi
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tNo
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('app_nota_edit',{id:item.id})}}\" class=\"btn btn-primary\">Editar</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t{% endfor %}

\t\t</tbody>
\t</table>


{% endblock %}
", "nota/index.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/nota/index.html.twig");
    }
}
