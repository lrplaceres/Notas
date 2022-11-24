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

/* nota/publicas.html.twig */
class __TwigTemplate_beeed2cdbfa550a06269166d92907633 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/publicas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/publicas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nota/publicas.html.twig", 1);
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
        echo "<div>\t
\t<div><h1 class=\"text-center\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1></div>
</div>

\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-primary text-center\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">T&iacute;tulo</th>
\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t<th scope=\"col\">Descripci&oacute;n</th>
                <th scope=\"col\">P&uacute;blico</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) || array_key_exists("notas", $context) ? $context["notas"] : (function () { throw new RuntimeError('Variable "notas" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titulo", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "descripcion", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["item"], "publico", [], "any", false, false, false, 29)) {
                echo " Si ";
            } else {
                echo " No ";
            }
            echo "</td>                    
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t\t</tbody>
\t</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "nota/publicas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  113 => 23,  109 => 22,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis Notas
{% endblock %}

{% block body %}
<div>\t
\t<div><h1 class=\"text-center\">{{ titulo}}</h1></div>
</div>

\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr class=\"table-primary text-center\">
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">T&iacute;tulo</th>
\t\t\t\t<th scope=\"col\">Tags</th>
\t\t\t\t<th scope=\"col\">Descripci&oacute;n</th>
                <th scope=\"col\">P&uacute;blico</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for item in notas %}
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">{{ item.id }}</th>
\t\t\t\t\t<td>{{ item.titulo }}</td>
\t\t\t\t\t<td>{{ item.tags }}</td>
\t\t\t\t\t<td>{{ item.descripcion }}</td>
                    <td>{% if item.publico %} Si {% else %} No {% endif %}</td>                    
\t\t\t\t</tr>

\t\t\t{% endfor %}

\t\t</tbody>
\t</table>


{% endblock %}
", "nota/publicas.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/nota/publicas.html.twig");
    }
}
