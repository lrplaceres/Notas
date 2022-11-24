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

/* registration/password.html.twig */
class __TwigTemplate_6741cda464ae0cd6dcce1339a7352638 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/password.html.twig", 1);
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

        echo "Cambiar Contraseña
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
        echo "
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "flashbag", [], "any", false, false, false, 8), "get", [0 => "notice"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 9
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t<form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_passw_post");
        echo "\" onsubmit=\"return confirm('¿Está seguro de cambiar su contraseña?');\">
\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15)), "html", null, true);
        echo "\">

\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Contraseña actual</label>
\t\t\t<input name=\"actual\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Nueva contraseña</label>
\t\t\t<input name=\"nueva\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required minlength=\"6\" maxlength=\"12\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Repita la nueva contraseña</label>
\t\t\t<input name=\"repite\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required minlength=\"6\" maxlength=\"12\">
\t\t</div>
\t\t<button class=\"btn btn-primary\">Cambiar</button>
\t</form>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 15,  111 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cambiar Contraseña
{% endblock %}

{% block body %}

\t{% for flash_message in app.session.flashbag.get('notice') %}
\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t{{ flash_message }}
\t\t</div>
\t{% endfor %}

\t<form method=\"post\" action=\"{{ path('app_change_passw_post') }}\" onsubmit=\"return confirm('¿Está seguro de cambiar su contraseña?');\">
\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token( app.user.email) }}\">

\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Contraseña actual</label>
\t\t\t<input name=\"actual\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required>
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Nueva contraseña</label>
\t\t\t<input name=\"nueva\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required minlength=\"6\" maxlength=\"12\">
\t\t</div>
\t\t<div class=\"mb-3\">
\t\t\t<label for=\"exampleFormControlInput1\" class=\"form-label\">Repita la nueva contraseña</label>
\t\t\t<input name=\"repite\" type=\"password\" class=\"form-control\" id=\"exampleFormControlInput1\" required minlength=\"6\" maxlength=\"12\">
\t\t</div>
\t\t<button class=\"btn btn-primary\">Cambiar</button>
\t</form>


{% endblock %}
", "registration/password.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/registration/password.html.twig");
    }
}
