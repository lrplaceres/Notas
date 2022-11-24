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

/* nota/eliminadas.html.twig */
class __TwigTemplate_1dd3d7447034e25c1df4d889b5b463ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/eliminadas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/eliminadas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nota/eliminadas.html.twig", 1);
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
\t\t\t<h1 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>

\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", [0 => "notice"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-primary text-center\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">T&iacute;tulo</th>
\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t<th scope=\"col\">Descripci&oacute;n</th>
\t\t\t\t<th scope=\"col\">P&uacute;blico</th>
\t\t\t\t<th scope=\"col\">Fecha Borrado</th>
\t\t\t\t<th scope=\"col\">Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) || array_key_exists("notas", $context) ? $context["notas"] : (function () { throw new RuntimeError('Variable "notas" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titulo", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "descripcion", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["item"], "publico", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t\t\t\t\t\t\tSi
\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\tNo
\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fechaeliminado", [], "any", false, false, false, 46), "d/M/Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_restaurar", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to restore this item?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("restore" . twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Restaurar</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t\t</tbody>
\t</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "nota/eliminadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 56,  179 => 49,  175 => 48,  170 => 46,  167 => 45,  163 => 43,  159 => 41,  157 => 40,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 33,  132 => 32,  116 => 18,  107 => 15,  104 => 14,  100 => 13,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Notas
{% endblock %}

{% block body %}
\t<div>
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
\t\t\t\t<th scope=\"col\">Fecha Borrado</th>
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
\t\t\t\t\t<td>{{ item.fechaeliminado|date(\"d/M/Y H:i\") }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_nota_restaurar', {'id': item.id}) }}\" onsubmit=\"return confirm('Are you sure you want to restore this item?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('restore' ~ item.id) }}\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Restaurar</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t{% endfor %}

\t\t</tbody>
\t</table>


{% endblock %}
", "nota/eliminadas.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/nota/eliminadas.html.twig");
    }
}
